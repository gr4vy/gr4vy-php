# AuditLogs
(*auditLogs*)

## Overview

### Available Operations

* [list](#list) - List audit log entries

## list

Returns a list of activity by dashboard users.

### Example Usage

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

$request = new Gr4vy\ListAuditLogsRequest(
    cursor: 'ZXhhbXBsZTE',
    action: 'created',
    userId: '14b7b8c5-a6ba-4fb6-bbab-52d43c7f37ef',
    resourceType: 'user',
);

$responses = $sdk->auditLogs->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                   | Type                                                        | Required                                                    | Description                                                 |
| ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- |
| `$request`                                                  | [Gr4vy\ListAuditLogsRequest](../../ListAuditLogsRequest.md) | :heavy_check_mark:                                          | The request object to use for the request.                  |

### Response

**[?ListAuditLogsResponse](../../ListAuditLogsResponse.md)**

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