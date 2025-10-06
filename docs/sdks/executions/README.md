# Executions
(*reports->executions*)

## Overview

### Available Operations

* [list](#list) - List executions for report
* [url](#url) - Create URL for executed report
* [get](#get) - Get executed report

## list

List all executions of a specific report.

### Example Usage

<!-- UsageSnippet language="php" operationID="list_report_executions" method="get" path="/reports/{report_id}/executions" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setMerchantAccountId('default')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$responses = $sdk->reports->executions->list(
    reportId: '4d4c7123-b794-4fad-b1b9-5ab2606e6bbe',
    limit: 20

);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `reportId`                                              | *string*                                                | :heavy_check_mark:                                      | The ID of the report to retrieve details for.           | 4d4c7123-b794-4fad-b1b9-5ab2606e6bbe                    |
| `cursor`                                                | *?string*                                               | :heavy_minus_sign:                                      | A pointer to the page of results to return.             | ZXhhbXBsZTE                                             |
| `limit`                                                 | *?int*                                                  | :heavy_minus_sign:                                      | The maximum number of items that are at returned.       | 20                                                      |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?ListReportExecutionsResponse](../../ListReportExecutionsResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| errors\Error400            | 400                        | application/json           |
| errors\Error401            | 401                        | application/json           |
| errors\Error403            | 403                        | application/json           |
| errors\Error404            | 404                        | application/json           |
| errors\Error405            | 405                        | application/json           |
| errors\Error409            | 409                        | application/json           |
| errors\HTTPValidationError | 422                        | application/json           |
| errors\Error425            | 425                        | application/json           |
| errors\Error429            | 429                        | application/json           |
| errors\Error500            | 500                        | application/json           |
| errors\Error502            | 502                        | application/json           |
| errors\Error504            | 504                        | application/json           |
| errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## url

Creates a download URL for a specific execution of a report.

### Example Usage

<!-- UsageSnippet language="php" operationID="create_report_execution_url" method="post" path="/reports/{report_id}/executions/{report_execution_id}/url" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setMerchantAccountId('default')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->reports->executions->url(
    reportId: '4d4c7123-b794-4fad-b1b9-5ab2606e6bbe',
    reportExecutionId: '003bc416-f32a-420c-8eb2-062a386e1fb0',
    reportExecutionUrlGenerate: $reportExecutionUrlGenerate

);

if ($response->reportExecutionUrl !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                          | Type                                                               | Required                                                           | Description                                                        | Example                                                            |
| ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ |
| `reportId`                                                         | *string*                                                           | :heavy_check_mark:                                                 | The ID of the report to retrieve a URL for.                        | 4d4c7123-b794-4fad-b1b9-5ab2606e6bbe                               |
| `reportExecutionId`                                                | *string*                                                           | :heavy_check_mark:                                                 | The ID of the execution of a report to retrieve a URL for.         | 003bc416-f32a-420c-8eb2-062a386e1fb0                               |
| `merchantAccountId`                                                | *?string*                                                          | :heavy_minus_sign:                                                 | The ID of the merchant account to use for this request.            | default                                                            |
| `reportExecutionUrlGenerate`                                       | [?ReportExecutionUrlGenerate](../../ReportExecutionUrlGenerate.md) | :heavy_minus_sign:                                                 | N/A                                                                |                                                                    |

### Response

**[?CreateReportExecutionUrlResponse](../../CreateReportExecutionUrlResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| errors\Error400            | 400                        | application/json           |
| errors\Error401            | 401                        | application/json           |
| errors\Error403            | 403                        | application/json           |
| errors\Error404            | 404                        | application/json           |
| errors\Error405            | 405                        | application/json           |
| errors\Error409            | 409                        | application/json           |
| errors\HTTPValidationError | 422                        | application/json           |
| errors\Error425            | 425                        | application/json           |
| errors\Error429            | 429                        | application/json           |
| errors\Error500            | 500                        | application/json           |
| errors\Error502            | 502                        | application/json           |
| errors\Error504            | 504                        | application/json           |
| errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Fetch a specific executed report.

### Example Usage

<!-- UsageSnippet language="php" operationID="get_report_execution" method="get" path="/report-executions/{report_execution_id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setMerchantAccountId('default')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->reports->executions->get(
    reportExecutionId: '003bc416-f32a-420c-8eb2-062a386e1fb0'
);

if ($response->reportExecution !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                    | Type                                                         | Required                                                     | Description                                                  | Example                                                      |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ |
| `reportExecutionId`                                          | *string*                                                     | :heavy_check_mark:                                           | The ID of the execution of a report to retrieve details for. | 003bc416-f32a-420c-8eb2-062a386e1fb0                         |
| `merchantAccountId`                                          | *?string*                                                    | :heavy_minus_sign:                                           | The ID of the merchant account to use for this request.      | default                                                      |

### Response

**[?GetReportExecutionResponse](../../GetReportExecutionResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| errors\Error400            | 400                        | application/json           |
| errors\Error401            | 401                        | application/json           |
| errors\Error403            | 403                        | application/json           |
| errors\Error404            | 404                        | application/json           |
| errors\Error405            | 405                        | application/json           |
| errors\Error409            | 409                        | application/json           |
| errors\HTTPValidationError | 422                        | application/json           |
| errors\Error425            | 425                        | application/json           |
| errors\Error429            | 429                        | application/json           |
| errors\Error500            | 500                        | application/json           |
| errors\Error502            | 502                        | application/json           |
| errors\Error504            | 504                        | application/json           |
| errors\APIException        | 4XX, 5XX                   | \*/\*                      |