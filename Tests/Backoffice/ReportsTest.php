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
 * `POST /reports` is the one endpoint that needs a *serialisable* request body:
 * `ReportCreate.spec` is a discriminated union. It used to trip a serialize
 * crash in the generated `UnionHandler` (Speakeasy ticket #11334); with that
 * fixed upstream and the `fix-report-spec-union.yaml` overlay dropped, we build
 * the native union variant directly here and expect the request to reach a 2xx.
 * The pure-serialisation regression lives in {@see \UnionSerializationTest}.
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
        // ReportCreate.spec is a discriminated union; we build the native
        // `transactions` variant. The request body serializes (it previously
        // tripped the UnionHandler bug) and POST /reports reaches a 2xx.
        $sdk = $this->sdk();
        $report = $sdk->reports->create(new ReportCreate(
            name: Fixtures::uniqueId('report', $this->merchantAccountId()),
            schedule: 'daily',
            scheduleEnabled: false,
            spec: new TransactionsReportSpec(
                params: [
                    'fields' => ['id', 'status'],
                    'filters' => ['status' => ['capture_succeeded']],
                    'sort' => [['field' => 'created_at', 'order' => 'desc']],
                ],
            ),
        ))->report;
        $this->assertNotNull($report->id);
    }
}
