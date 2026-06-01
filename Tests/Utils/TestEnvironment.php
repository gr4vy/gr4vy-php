<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Utils;

use Gr4vy\Auth;
use Gr4vy\Field;
use Gr4vy\MerchantAccountCreate;
use Gr4vy\PaymentServiceCreate;
use Gr4vy\SDK;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Utils;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Shared E2E harness. Every test class provisions its OWN merchant account
 * (random id) with a `mock-card` payment service, so classes are fully isolated
 * and safe to run in parallel across CI shards.
 *
 * The merchant-scoped client is wrapped with a Guzzle middleware that:
 *   (a) injects a random unknown field into every JSON response, proving the SDK
 *       tolerates forward-compatible payloads (disable with GR4VY_NO_INJECT), and
 *   (b) when GR4VY_TRACK_HTTP is set, records the method + path of every outgoing
 *       request to coverage/http/*.jsonl so the endpoint-coverage report can
 *       measure reach from real HTTP calls (see scripts/endpoint-coverage.mjs).
 */
final class TestEnvironment
{
    public const API_BASE_URL = 'https://api.sandbox.e2e.gr4vy.app';

    /** Resolve the signing key: PRIVATE_KEY env var first, then private_key.pem at the repo root. */
    public static function loadPrivateKey(): string
    {
        $env = getenv('PRIVATE_KEY');
        if (is_string($env) && $env !== '') {
            return $env;
        }
        $pem = __DIR__.'/../../private_key.pem';
        if (file_exists($pem)) {
            $contents = file_get_contents($pem);
            if ($contents === false || $contents === '') {
                throw new \RuntimeException("Failed to read the signing key from {$pem}.");
            }

            return $contents;
        }
        throw new \RuntimeException(
            'No signing key found: set PRIVATE_KEY or place private_key.pem in the repo root.'
        );
    }

    /** Build a Guzzle client with the forward-compat + HTTP-recording middleware. */
    public static function createHttpClient(): Client
    {
        $stack = HandlerStack::create();
        $stack->push(self::trackingMiddleware());
        $stack->push(self::forwardCompatMiddleware());

        // Conservative timeouts so a stalled connection fails the test fast rather
        // than hanging a shard until the CI job-level timeout kills it.
        return new Client([
            'handler' => $stack,
            'timeout' => 30,
            'connect_timeout' => 10,
        ]);
    }

    public static function createClient(string $privateKey, ?string $merchantAccountId = null): SDK
    {
        $builder = SDK::builder()
            ->setClient(self::createHttpClient())
            ->setId('e2e')
            ->setServer('sandbox')
            ->setSecuritySource(Auth::withToken($privateKey));

        if ($merchantAccountId !== null) {
            $builder = $builder->setMerchantAccountId($merchantAccountId);
        }

        return $builder->build();
    }

    /**
     * Provisions an isolated merchant account + a mock-card payment service and
     * returns a merchant-scoped client and identifiers. Call once per class in
     * `setUpBeforeClass()` (see {@see MerchantTestCase}).
     */
    public static function setupMerchant(): TestMerchant
    {
        $privateKey = self::loadPrivateKey();
        $admin = self::createClient($privateKey);

        $merchantAccountId = strtolower(bin2hex(random_bytes(8)));
        $admin->merchantAccounts->create(
            new MerchantAccountCreate(id: $merchantAccountId, displayName: $merchantAccountId)
        );

        $client = self::createClient($privateKey, $merchantAccountId);
        $client->paymentServices->create(new PaymentServiceCreate(
            displayName: 'Payment service',
            paymentServiceDefinitionId: 'mock-card',
            fields: [new Field(key: 'merchant_id', value: 'test')],
            acceptedCurrencies: ['USD'],
            acceptedCountries: ['US'],
            active: true,
        ));

        return new TestMerchant($client, $merchantAccountId, $privateKey);
    }

    /** Injects a random unknown field into JSON responses (forward-compat assertion). */
    private static function forwardCompatMiddleware(): callable
    {
        $noInject = getenv('GR4VY_NO_INJECT') !== false && getenv('GR4VY_NO_INJECT') !== '';

        return function (callable $handler) use ($noInject) {
            return function (RequestInterface $request, array $options) use ($handler, $noInject) {
                return $handler($request, $options)->then(
                    function (ResponseInterface $response) use ($noInject) {
                        if ($noInject) {
                            return $response;
                        }
                        // Header values are case-insensitive, so match case-insensitively.
                        if (stripos($response->getHeaderLine('Content-Type'), 'application/json') === false) {
                            return $response;
                        }
                        $body = $response->getBody()->getContents();
                        // Only inject into JSON *objects*. Adding a string key to a
                        // top-level JSON array (list) would turn it into an object on
                        // re-encode and break deserialization. Decide from the raw body:
                        // json_decode('{}') and json_decode('[]') both yield [], so the
                        // decoded value alone can't distinguish an empty object from an
                        // empty list — the leading token can.
                        $isJsonObject = ltrim($body) !== '' && ltrim($body)[0] === '{';
                        $data = json_decode($body, true);
                        if (json_last_error() !== JSON_ERROR_NONE || ! is_array($data) || ! $isJsonObject) {
                            return $response->withBody(Utils::streamFor($body));
                        }
                        $data['unexpected_field_'.bin2hex(random_bytes(4))] = 'this is an injected test value';
                        $modified = json_encode($data);
                        // Instrumentation must never crash a test: if re-encoding fails
                        // (e.g. invalid UTF-8), pass the original body through untouched.
                        if ($modified === false) {
                            return $response->withBody(Utils::streamFor($body));
                        }

                        return $response
                            ->withBody(Utils::streamFor($modified))
                            ->withHeader('Content-Length', (string) strlen($modified));
                    }
                );
            };
        };
    }

    /** Records method + path of every request to coverage/http/*.jsonl when GR4VY_TRACK_HTTP is set. */
    private static function trackingMiddleware(): callable
    {
        $track = getenv('GR4VY_TRACK_HTTP') !== false && getenv('GR4VY_TRACK_HTTP') !== '';

        return function (callable $handler) use ($track) {
            return function (RequestInterface $request, array $options) use ($handler, $track) {
                if ($track) {
                    self::recordHttpCall($request);
                }

                return $handler($request, $options);
            };
        };
    }

    private static function recordHttpCall(RequestInterface $request): void
    {
        static $file = null;
        try {
            if ($file === null) {
                $dir = __DIR__.'/../../coverage/http';
                if (! is_dir($dir)) {
                    @mkdir($dir, 0775, true);
                }
                $file = $dir.'/calls-'.getmypid().'-'.bin2hex(random_bytes(4)).'.jsonl';
            }
            $line = json_encode([
                'method' => $request->getMethod(),
                'pathname' => $request->getUri()->getPath(),
            ]).PHP_EOL;
            file_put_contents($file, $line, FILE_APPEND | LOCK_EX);
        } catch (\Throwable) {
            // best-effort: never fail a test because of instrumentation I/O
        }
    }
}
