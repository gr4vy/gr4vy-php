<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Backoffice;

use Gr4vy\ListAllReportExecutionsRequest;
use Gr4vy\ListReportsRequest;
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
 * Note: `spec` is a real discriminated union in the PHP SDK
 * ({@see TransactionsReportSpec} with `model = 'transactions'`), so it always
 * serializes a body — there is no "spec serializes to null" footgun here (that
 * was a C#-only codegen issue; PHP uses native union types).
 */
final class ReportsTest extends MerchantTestCase
{
    #[Test]
    public function create_get_put_list(): void
    {
        $sdk = $this->sdk();
        $name = Fixtures::uniqueId('report', $this->merchantAccountId());

        $report = $sdk->reports->create(new ReportCreate(
            name: $name,
            schedule: '0 0 * * *',
            scheduleEnabled: false,
            spec: new TransactionsReportSpec(params: []),
        ))->report;
        $this->assertNotNull($report->id);
        $this->assertSame($name, $report->name);

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
        $name = Fixtures::uniqueId('report', $this->merchantAccountId());

        $report = $sdk->reports->create(new ReportCreate(
            name: $name,
            schedule: '0 0 * * *',
            scheduleEnabled: false,
            spec: new TransactionsReportSpec(params: []),
        ))->report;

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
