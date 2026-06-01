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
 * documented client (4xx) error instead of a 2xx. A 5xx (or a non-HTTP error
 * such as a transport failure or client-side validation that never hit the wire)
 * fails the test: that means we sent something that crashed the API, which is a
 * real defect to surface, not an "expected" outcome. Never silently skips.
 */
final class Reach
{
    public static function reaches(callable $action, string $description): void
    {
        try {
            $action();
            // Reached and succeeded (2xx). Record an assertion so PHPUnit does not
            // flag the test as risky.
            Assert::assertTrue(true);
        } catch (\Throwable $e) {
            $status = self::statusOf($e);
            Assert::assertLessThan(
                500,
                $status,
                "[reach] {$description}: expected the endpoint to be reached and cleanly "
                ."rejected (4xx), but got a server error or non-HTTP failure ({$status}): "
                .get_class($e).' — '.$e->getMessage()
            );
            Assert::assertGreaterThanOrEqual(
                400,
                $status,
                "[reach] {$description}: expected a real HTTP round-trip ending in a 4xx, "
                .'but the call failed before reaching the server: '.get_class($e).' — '.$e->getMessage()
            );
            fwrite(
                STDERR,
                "[reach] {$description}: endpoint reached, got expected API error: "
                .get_class($e)." ({$status})".PHP_EOL
            );
        }
    }

    /** Best-effort extraction of the HTTP status from any Gr4vy SDK error. */
    private static function statusOf(\Throwable $e): int
    {
        // APIException exposes ->statusCode; every generated *Throwable passes the
        // HTTP status as the exception code (parent::__construct($message, $status)).
        if ($e instanceof APIException) {
            return $e->statusCode;
        }
        $code = $e->getCode();

        return is_int($code) ? $code : 0;
    }
}
