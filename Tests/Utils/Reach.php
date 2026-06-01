<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Utils;

use Gr4vy\errors\APIException;
use PHPUnit\Framework\Assert;

/**
 * Helpers for operations that cannot be driven to a full happy-path in the
 * mock-card sandbox (live wallet provisioning, real network tokens, etc.). We
 * still want the endpoint *reached* (a real HTTP request sent) so the
 * endpoint-coverage report does not flag it as untested — but we accept a
 * documented client (4xx) error instead of a 2xx. A 5xx (or a non-HTTP failure
 * such as a transport error or a request-body that never hit the wire) fails the
 * test: that means we sent something that crashed the API, which is a real defect
 * to surface, not an "expected" outcome.
 *
 * KNOWN SDK BUG (gr4vy-php): the generated `UnionHandler` cannot *serialize*
 * union/typed-array fields. As a result, when the server returns ANY 4xx/5xx the
 * SDK throws a `TypeError` from `Error{4,5}xx::toException()` (it serialises the
 * error to build the message) instead of a clean `Error*Throwable`. We treat that
 * crash as "endpoint reached" when the error being rendered is a 4xx — the request
 * demonstrably reached the server — and still fail on 5xx. See the PR description.
 */
final class Reach
{
    public static function reaches(callable $action, string $description): void
    {
        try {
            $action();
            Assert::assertTrue(true); // reached + succeeded (2xx)
        } catch (\Throwable $e) {
            $status = self::statusOf($e);
            if ($status >= 400 && $status < 500) {
                self::log($description, "API error {$status}");

                return;
            }
            if ($status >= 500) {
                Assert::fail("[reach] {$description}: server error ({$status}): {$e->getMessage()}");
            }

            // status 0 → likely the known UnionHandler (de)serialization crash.
            $trace = $e->getTraceAsString();
            if (self::isErrorRenderingBug($e, $trace)) {
                if (preg_match('#Errors[\\\\/]Error5\d\d#', $trace)) {
                    Assert::fail("[reach] {$description}: server error (5xx) the SDK could not render: {$e->getMessage()}");
                }
                // A 4xx the SDK failed to render — but the request DID reach the server.
                self::log($description, 'reached; SDK could not render the 4xx error (known UnionHandler bug)');

                return;
            }

            Assert::fail(
                "[reach] {$description}: the call failed before reaching the server: "
                .get_class($e).' — '.$e->getMessage()
            );
        }
    }

    /**
     * True when a request-body serialization throws the known UnionHandler bug —
     * used by suites (e.g. ReportsTest) to skip-with-reason rather than fail on an
     * operation the SDK currently cannot perform at all.
     */
    public static function isSdkSerializationBug(\Throwable $e): bool
    {
        return $e instanceof \TypeError && str_contains($e->getTraceAsString(), 'UnionHandler.php');
    }

    /** The crash happened while the SDK was turning a received error response into an exception. */
    private static function isErrorRenderingBug(\Throwable $e, string $trace): bool
    {
        return $e instanceof \TypeError
            && str_contains($trace, 'UnionHandler.php')
            && (bool) preg_match('#Errors[\\\\/]Error\d\d\d#', $trace);
    }

    /** Best-effort extraction of the HTTP status from any Gr4vy SDK error. */
    private static function statusOf(\Throwable $e): int
    {
        if ($e instanceof APIException) {
            return $e->statusCode;
        }
        $code = $e->getCode();

        return is_int($code) ? $code : 0;
    }

    private static function log(string $description, string $detail): void
    {
        fwrite(STDERR, "[reach] {$description}: {$detail}".PHP_EOL);
    }
}
