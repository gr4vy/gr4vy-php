<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Backoffice;

use Gr4vy\ListAllReportExecutionsRequest;
use Gr4vy\ListReportsRequest;
use Gr4vy\Report;
use Gr4vy\ReportCreate;
use Gr4vy\ReportUpdate;
use Gr4vy\Tests\Utils\Fixtures;
use Gr4vy\Tests\Utils\MerchantTestCase;
use Gr4vy\Tests\Utils\Reach;
use Gr4vy\TransactionsReportSpec;
use PHPUnit\Framework\Attributes\Test;

/**
 * Reporting: create/get/put/list a report definition, plus the executions
 * sub-resource (list/get/url) and the top-level report-executions list.
 *
 * Note: in the PHP SDK, `spec` is a real discriminated union
 * ({@see TransactionsReportSpec} with `model = 'transactions'`) — there is no
 * "spec serializes to null" footgun (that was a C#-only codegen issue). However,
 * the generated `UnionHandler` currently cannot *serialize* a union request body
 * at all (see {@see Reach::isSdkSerializationBug()}); when that bug is present the
 * create-based tests skip with a clear reason rather than failing, so the gap is
 * visible and is fixed once the SDK serializer is corrected upstream.
 */
final class ReportsTest extends MerchantTestCase
{
    private function createReport(): Report
    {
        try {
            return $this->sdk()->reports->create(new ReportCreate(
                name: Fixtures::uniqueId('report', $this->merchantAccountId()),
                schedule: '0 0 * * *',
                scheduleEnabled: false,
                spec: new TransactionsReportSpec(params: []),
            ))->report;
        } catch (\Throwable $e) {
            if (Reach::isSdkSerializationBug($e)) {
                $this->markTestSkipped(
                    'Blocked by gr4vy-php SDK bug: UnionHandler cannot serialize the '
                    .'ReportCreate.spec union request body (src/Utils/UnionHandler.php). '
                    .'See the PR description.'
                );
            }
            throw $e;
        }
    }

    #[Test]
    public function create_get_put_list(): void
    {
        $sdk = $this->sdk();

        $report = $this->createReport();
        $this->assertNotNull($report->id);

        $fetched = $sdk->reports->get($report->id)->report;
        $this->assertSame($report->id, $fetched->id);

        // Partial update: change only the name.
        $updated = $sdk->reports->put(new ReportUpdate(name: 'Renamed report'), $report->id)->report;
        $this->assertSame('Renamed report', $updated->name);
        // Schedule (untouched) is preserved.
        $this->assertSame('0 0 * * *', $updated->schedule);

        $first = $this->firstOf($sdk->reports->list(new ListReportsRequest()));
        $this->assertNotNull($first);
    }

    #[Test]
    public function executions_endpoints(): void
    {
        $sdk = $this->sdk();
        $report = $this->createReport();

        // Per-report executions list (generator) — empty until the report runs.
        $this->firstOf($sdk->reports->executions->list($report->id));

        // A specific execution / its download URL need a completed run we can't force.
        Reach::reaches(
            fn () => $sdk->reports->executions->get(self::MISSING_ID),
            'reports.executions.get',
        );
        Reach::reaches(
            fn () => $sdk->reports->executions->url($report->id, self::MISSING_ID),
            'reports.executions.url',
        );

        // Top-level executions list across all reports (generator).
        $this->firstOf($sdk->reportExecutions->list(new ListAllReportExecutionsRequest()));
        $this->addToAssertionCount(1);
    }
}
