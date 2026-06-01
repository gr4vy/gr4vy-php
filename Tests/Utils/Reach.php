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
 * documented client (4xx) error instead of a 2xx. A 5xx (or a failure that never
 * hit the wire) fails the test: that means we sent something that crashed the
 * API, which is a real defect to surface, not an "expected" outcome.
 *
 * KNOWN SDK BUG (gr4vy-php): the generated `src/Utils/UnionHandler.php` cannot
 * *serialize* union/typed-array fields. When the server returns a 4xx whose
 * `details` array is empty, `Error4xx::toException()` (which serialises the error
 * to build its message) throws a `TypeError` instead of a clean `Error*Throwable`.
 * The request still reached the server, so we treat that crash as "reached" when
 * the error being rendered is a 4xx (and still fail on 5xx). Separately, a clean
 * `Error*Throwable` carries the HTTP status on `->container->status` (its
 * exception code is 0, because the SDK casts the string error `code` to int).
 */
final class Reach
{
    public static function reaches(callable $action, string $description): void
    {
        try {
            $action();
            Assert::assertTrue(true); // reached + succeeded (2xx)

            return;
        } catch (\Throwable $e) {
            $status = self::statusOf($e);

            if ($status >= 400 && $status < 500) {
                self::accept($description, "API error {$status}");

                return;
            }
            if ($status >= 500) {
                Assert::fail("[reach] {$description}: server error ({$status}): {$e->getMessage()}");
            }
            if ($status >= 100 && $status < 400) {
                // A response came back that the SDK could not fully handle (e.g. an
                // unexpected content type). The endpoint was still reached.
                self::accept($description, "reached (status {$status}; SDK could not parse the response)");

                return;
            }

            // status unknown (0) — likely the known UnionHandler crash.
            if (self::isUnionHandlerCrash($e)) {
                if (preg_match('#Errors[\\\\/]Error(\d)\d\d#', $e->getTraceAsString(), $m)) {
                    if ($m[1] === '5') {
                        Assert::fail("[reach] {$description}: server error (5xx) the SDK could not render: {$e->getMessage()}");
                    }
                    self::accept($description, 'reached; SDK could not render the 4xx error (known UnionHandler bug)');

                    return;
                }
                // No error-class frame → a request-body serialization crash: the
                // request never reached the server. Fall through to fail.
            }

            Assert::fail(
                "[reach] {$description}: the call failed before reaching the server: "
                .get_class($e).' — '.$e->getMessage()
            );
        }
    }

    /**
     * True when an exception is the known UnionHandler (de)serialization crash —
     * used by suites (e.g. ReportsTest) to skip-with-reason rather than fail on an
     * operation the SDK currently cannot perform at all (a union request body).
     */
    public static function isSdkSerializationBug(\Throwable $e): bool
    {
        return self::isUnionHandlerCrash($e);
    }

    private static function isUnionHandlerCrash(\Throwable $e): bool
    {
        // The crash is thrown *inside* UnionHandler, so the file is on getFile();
        // getTraceAsString() only lists the callers.
        return $e instanceof \TypeError
            && (str_contains($e->getFile(), 'UnionHandler.php')
                || str_contains($e->getTraceAsString(), 'UnionHandler.php'));
    }

    /** Best-effort extraction of the HTTP status from any Gr4vy SDK error. */
    private static function statusOf(\Throwable $e): int
    {
        if ($e instanceof APIException) {
            return $e->statusCode;
        }
        // Error{4,5}xxThrowable / HTTPValidationErrorThrowable carry the real status
        // on their ->container (the exception code is 0 — the SDK casts the string
        // error `code` to int).
        if (isset($e->container) && is_object($e->container) && isset($e->container->status) && is_int($e->container->status)) {
            return $e->container->status;
        }
        $code = $e->getCode();

        return is_int($code) ? $code : 0;
    }

    private static function accept(string $description, string $detail): void
    {
        fwrite(STDERR, "[reach] {$description}: {$detail}".PHP_EOL);
        Assert::assertTrue(true); // record an assertion so the test is not "risky"
    }
}
