<?php

declare(strict_types=1);

use Gr4vy;
use Gr4vy\Auth;
use Gr4vy\CheckoutSessionWithUrlPaymentMethodCreate;
use Gr4vy\MerchantAccountCreate;
use Gr4vy\PaymentServiceCreate;
use Gr4vy\TransactionCreate;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Psr7\Utils;

final class CheckoutSessionsTest extends TestCase
{
    private static Gr4vy\SDK $sdk;

    /**
     * Adds a custom HTTP client that inserts random fields in the response,
     * ensuring we test for forward compatibility.
     */
    protected function createJsonInterceptorMiddleware(): callable
    {
        return function (callable $handler) {
            return function ($request, array $options) use ($handler) {
                $promise = $handler($request, $options);

                return $promise->then(
                    function (ResponseInterface $response) {
                        // 1. Check if the response is JSON, otherwise pass it through.
                        if (strpos($response->getHeaderLine('Content-Type'), 'application/json') === false) {
                            // return $response;
                        }

                        // 2. Read the original response body.
                        $originalBody = $response->getBody()->getContents();
                        $data = json_decode($originalBody, true);

                        // If JSON decoding fails, return the original response to avoid errors.
                        if (json_last_error() !== JSON_ERROR_NONE) {
                            // The stream was already read, so we need to create a new one.
                            return $response->withBody(Utils::streamFor($originalBody));
                        }

                        // 3. Add a random property to the decoded data.
                        $randomKey = 'unexpected_prop_' . bin2hex(random_bytes(4));
                        $data[$randomKey] = 'this is an injected test value';
                        // echo "Intercepted response and added key: " . $randomKey . PHP_EOL;

                        // 4. Encode the modified data back to a JSON string.
                        $modifiedBody = json_encode($data);

                        // 5. Create a new PSR-7 stream for the modified body.
                        $newStream = Utils::streamFor($modifiedBody);

                        // 6. Return a new response object with the modified body.
                        return $response->withBody($newStream)
                            ->withHeader('Content-Length', strlen($modifiedBody));
                    }
                );
            };
        };
    }

    protected function setUp(): void
    {
        $filename = 'private_key.pem';
        if (file_exists(filename: $filename)) {
            $privateKey = file_get_contents(filename: $filename);
        } else {
            $privateKey = getenv(name: 'PRIVATE_KEY');
        }

        $stack = HandlerStack::create();
        $stack->push(self::createJsonInterceptorMiddleware());
        $customGuzzleClient = new Client(['handler' => $stack]);

        $sdk = Gr4vy\SDK::builder()
            ->setClient($customGuzzleClient)
            ->setId('e2e')
            ->setServer('sandbox')
            ->setSecuritySource(Auth::withToken($privateKey))
            ->setMerchantAccountId('default')
            ->build();

        $merchantAccountId = strtolower(bin2hex(random_bytes(8)));
        $sdk->merchantAccounts->create(new MerchantAccountCreate($merchantAccountId, $merchantAccountId));

        self::$sdk = Gr4vy\SDK::builder()
            ->setClient($customGuzzleClient)
            ->setId('e2e')
            ->setServer('sandbox')
            ->setSecuritySource(Auth::withToken($privateKey))
            ->setMerchantAccountId($merchantAccountId)
            ->build();

        self::$sdk->paymentServices->create(paymentServiceCreate: new PaymentServiceCreate(
            displayName: 'Payment service',
            paymentServiceDefinitionId: 'mock-card',
            fields: [
                new Gr4vy\Field(
                    key: 'merchant_id',
                    value: 'test',
                ),
            ],
            acceptedCurrencies: [
                'USD',
            ],
            acceptedCountries: [
                'US',
            ],
            active: true
        ));
    }

    public function test_process_payment_with_checkout_session(): void
    {
        // Create a checkout session
        $checkoutSessionCreate = new Gr4vy\CheckoutSessionCreate();
        $checkoutSessionResponse = self::$sdk->checkoutSessions->create($checkoutSessionCreate);
        $checkoutSession = $checkoutSessionResponse->checkoutSession;
        $this->assertNotNull($checkoutSession->id);

        // Direct API call to update checkout session fields
        $client = new Client();
        $response = $client->put(
            "https://api.sandbox.e2e.gr4vy.app/checkout/sessions/{$checkoutSession->id}/fields",
            [
                'headers' => ['content-type' => 'application/json'],
                'timeout' => 5,
                'json' => [
                    'payment_method' => [
                        'method' => 'card',
                        'number' => '4111111111111111',
                        'expiration_date' => '11/25',
                        'security_code' => '123',
                    ],
                ],
            ]
        );
        $this->assertEquals(204, $response->getStatusCode());

        // Create a transaction using the checkout session
        $transactionCreate = new TransactionCreate(amount: 1299, currency: 'USD', paymentMethod: new CheckoutSessionWithUrlPaymentMethodCreate(id: $checkoutSession->id));
        $response = self::$sdk->transactions->create($transactionCreate);
        $transaction = $response->transaction;

        $this->assertNotNull($transaction->id);
        $this->assertEquals('authorization_succeeded', $transaction->status);
        $this->assertEquals(1299, $transaction->amount);
    }

    public function test_handle_error_on_missing_card_data(): void
    {
        $checkoutSessionCreate = new Gr4vy\CheckoutSessionCreate();
        $checkoutSessionResponse = self::$sdk->checkoutSessions->create($checkoutSessionCreate);
        $checkoutSession = $checkoutSessionResponse->checkoutSession;
        $this->assertNotNull($checkoutSession->id);

        $this->expectException(\Exception::class);
        $this->expectExceptionMessageMatches('/Request failed validation/');

        $transactionCreate = new TransactionCreate(amount: 1299, currency: 'USD', paymentMethod: new CheckoutSessionWithUrlPaymentMethodCreate(id: $checkoutSession->id));

        self::$sdk->transactions->create($transactionCreate);
    }

    public function test_handle_stored_payment_method(): void
    {
        // Create a card payment method
        $cardRequest = new Gr4vy\CardPaymentMethodCreate(
            number: '4111111111111111',
            expirationDate: '11/25',
            securityCode: '123',
        );
        $response = self::$sdk->paymentMethods->create($cardRequest);
        $this->assertNotNull($response->paymentMethod->id);

        // Create a checkout session
        $checkoutSessionCreate = new Gr4vy\CheckoutSessionCreate();
        $checkoutSessionResponse = self::$sdk->checkoutSessions->create($checkoutSessionCreate);
        $checkoutSession = $checkoutSessionResponse->checkoutSession;
        $this->assertNotNull($checkoutSession->id);

        // Direct API call to update checkout session fields
        $client = new Client();
        $response = $client->put(
            "https://api.sandbox.e2e.gr4vy.app/checkout/sessions/{$checkoutSession->id}/fields",
            [
                'headers' => ['content-type' => 'application/json'],
                'timeout' => 5,
                'json' => [
                    'payment_method' => [
                        'method' => 'id',
                        'id' => $response->paymentMethod->id,
                        'security_code' => '123',
                    ],
                ],
            ]
        );
        $this->assertEquals(204, $response->getStatusCode());

        // Create a transaction using the checkout session
        $transactionCreate = new TransactionCreate(amount: 1299, currency: 'USD', paymentMethod: new CheckoutSessionWithUrlPaymentMethodCreate(id: $checkoutSession->id));
        $response = self::$sdk->transactions->create($transactionCreate);

        $this->assertNotNull($response->transaction->id);
        $this->assertEquals('authorization_succeeded', $response->transaction->status);
        $this->assertEquals(1299, $response->transaction->amount);
    }
}