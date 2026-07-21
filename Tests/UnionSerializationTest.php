<?php

declare(strict_types=1);

use Gr4vy\Errors\Error400;
use Gr4vy\Errors\Error400Throwable;
use Gr4vy\ErrorDetail;
use Gr4vy\ReportCreate;
use Gr4vy\TransactionsReportSpec;
use Gr4vy\Utils;
use PHPUnit\Framework\TestCase;

/**
 * Regression tests for the generated `src/Utils/UnionHandler.php` serialize
 * path. Both cases used to throw a `TypeError` while serialising a union /
 * typed-array field (Speakeasy ticket #11334, fixed upstream 2026-06-08):
 *
 *   1. A 4xx error whose `details` array is empty tripped
 *      `TypeError: get_class(): Argument #1 ($object) must be of type object,
 *      array given` at UnionHandler.php:88 — so a plain 404/401/403 surfaced
 *      as an uncatchable `TypeError` from `Error4xx::toException()` instead of
 *      a clean `Error*Throwable`.
 *   2. Serialising the discriminated-union `ReportCreate.spec` threw
 *      `TypeError: Cannot access offset of type string on string` at
 *      UnionHandler.php:81, so `reports.create` crashed before the request was
 *      even sent.
 *
 * These exercise the serializer directly (no network), so they lock in the fix
 * and fail loudly if a future regeneration reintroduces the crash. They
 * require the post-fix SDK — i.e. after the `fix-report-spec-union.yaml` overlay
 * is dropped and the SDK is regenerated with the fixed UnionHandler.
 */
final class UnionSerializationTest extends TestCase
{
    /**
     * Symptom #2: a discriminated-union request body serialises to a real
     * object carrying its discriminator, not to `null` / a crash.
     */
    public function test_report_create_discriminated_spec_serializes_with_model(): void
    {
        $body = new ReportCreate(
            name: 'Regression report',
            schedule: 'daily',
            scheduleEnabled: false,
            spec: new TransactionsReportSpec(
                params: [
                    'fields' => ['id', 'status'],
                    'filters' => ['status' => ['capture_succeeded']],
                ],
            ),
        );

        // Previously threw TypeError at UnionHandler.php:81.
        $json = Utils\JSON::createSerializer()->serialize($body, 'json');

        $decoded = json_decode($json, true, 512, JSON_THROW_ON_ERROR);

        $this->assertArrayHasKey('spec', $decoded, 'spec must be present on the wire');
        $this->assertIsArray($decoded['spec'], 'spec must serialise to an object, not null');
        $this->assertSame('transactions', $decoded['spec']['model'], 'discriminator must be emitted');
        $this->assertSame(['id', 'status'], $decoded['spec']['params']['fields']);
    }

    /**
     * Symptom #1: an error whose `details` array is empty renders as a clean
     * throwable instead of throwing a TypeError while building its message.
     */
    public function test_error_with_empty_details_renders_clean_throwable(): void
    {
        $error = new Error400(details: []);

        // Previously threw TypeError at UnionHandler.php:88.
        $throwable = $error->toException();

        $this->assertInstanceOf(Error400Throwable::class, $throwable);
        $this->assertSame(400, $throwable->container->status);

        // The throwable message is the serialised error; it must be valid JSON
        // with `details` present as an empty array.
        $decoded = json_decode($throwable->getMessage(), true, 512, JSON_THROW_ON_ERROR);
        $this->assertSame([], $decoded['details']);
    }

    /**
     * Companion to the above: the non-empty `details` path (which always
     * worked) keeps working, so the fix guards the empty case without
     * regressing the populated one.
     */
    public function test_error_with_populated_details_renders_clean_throwable(): void
    {
        $error = new Error400(details: [
            new ErrorDetail(
                location: 'body',
                pointer: '/amount',
                message: 'must be positive',
                type: 'value_error',
            ),
        ]);

        $throwable = $error->toException();

        $this->assertInstanceOf(Error400Throwable::class, $throwable);
        $decoded = json_decode($throwable->getMessage(), true, 512, JSON_THROW_ON_ERROR);
        $this->assertCount(1, $decoded['details']);
        $this->assertSame('/amount', $decoded['details'][0]['pointer']);
    }
}
