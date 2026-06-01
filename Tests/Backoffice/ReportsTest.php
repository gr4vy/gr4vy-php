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
 * Reporting endpoints. The read/list/get/put/executions endpoints are reached
 * without depending on a successful create (they accept missing-id 4xx), so they
 * are covered regardless of the create path.
 *
 * `POST /reports` is the one endpoint that needs a *serialisable* request body,
 * and the generated `UnionHandler` currently cannot serialise the `ReportCreate.spec`
 * discriminated union ({@see Reach::isSdkSerializationBug()}). The
 * `fix-report-spec-union.yaml` overlay flattens `spec` to a plain object so the next
 * SDK regen makes create work; until that regen lands, the create test skips with a
 * clear reason rather than failing (this is the PHP analogue of the C# spec fix).
 */
final class ReportsTest extends MerchantTestCase
{
    #[Test]
    public function list_endpoints(): void
    {
        $sdk = $this->sdk();
        // GET /reports and GET /report-executions (lazy paginators).
        $this->firstOf($sdk->reports->list(new ListReportsRequest()));
        $this->firstOf($sdk->reportExecutions->list(new ListAllReportExecutionsRequest()));
        $this->addToAssertionCount(1);
    }

    #[Test]
    public function get_and_put_are_reached(): void
    {
        $sdk = $this->sdk();
        // GET /reports/{id} and PUT /reports/{id} (ReportUpdate has no union body).
        Reach::reaches(fn () => $sdk->reports->get(self::MISSING_ID), 'reports.get');
        Reach::reaches(
            fn () => $sdk->reports->put(new ReportUpdate(name: 'Renamed'), self::MISSING_ID),
            'reports.put',
        );
    }

    #[Test]
    public function executions_endpoints(): void
    {
        $sdk = $this->sdk();
        // GET /reports/{id}/executions (generator), GET /report-executions/{id},
        // POST /reports/{id}/executions/{execution_id}/url.
        Reach::reaches(
            fn () => $this->firstOf($sdk->reports->executions->list(self::MISSING_ID)),
            'reports.executions.list',
        );
        Reach::reaches(
            fn () => $sdk->reports->executions->get(self::MISSING_ID),
            'reportExecutions.get',
        );
        Reach::reaches(
            fn () => $sdk->reports->executions->url(self::MISSING_ID, self::MISSING_ID),
            'reports.executions.url',
        );
    }

    #[Test]
    public function create_is_reached(): void
    {
        $sdk = $this->sdk();
        try {
            $report = $sdk->reports->create(new ReportCreate(
                name: Fixtures::uniqueId('report', $this->merchantAccountId()),
                schedule: '0 0 * * *',
                scheduleEnabled: false,
                spec: new TransactionsReportSpec(params: []),
            ))->report;
            $this->assertNotNull($report->id);
        } catch (\Throwable $e) {
            if (Reach::isSdkSerializationBug($e)) {
                $this->markTestSkipped(
                    'POST /reports is blocked by a gr4vy-php SDK bug: UnionHandler cannot '
                    .'serialize the ReportCreate.spec union request body '
                    .'(src/Utils/UnionHandler.php). The fix-report-spec-union overlay flattens '
                    .'spec to a plain object; once the SDK regenerates with it, this reaches 2xx.'
                );
            }
            throw $e;
        }
    }
}
