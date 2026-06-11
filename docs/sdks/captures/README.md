# Transactions.Captures

## Overview

### Available Operations

* [list](#list) - List transaction captures
* [get](#get) - Get transaction capture

## list

List all captures for a specific transaction.

### Example Usage

<!-- UsageSnippet language="php" operationID="list_transaction_captures" method="get" path="/transactions/{transaction_id}/captures" -->
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



$response = $sdk->transactions->captures->list(
    transactionId: '7099948d-7286-47e4-aad8-b68f7eb44591'
);

if ($response->captureCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `transactionId`                                         | *string*                                                | :heavy_check_mark:                                      | The unique identifier of the transaction.               | 7099948d-7286-47e4-aad8-b68f7eb44591                    |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?ListTransactionCapturesResponse](../../ListTransactionCapturesResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\Error400            | 400                        | application/json           |
| Errors\Error401            | 401                        | application/json           |
| Errors\Error403            | 403                        | application/json           |
| Errors\Error404            | 404                        | application/json           |
| Errors\Error405            | 405                        | application/json           |
| Errors\Error409            | 409                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\Error425            | 425                        | application/json           |
| Errors\Error429            | 429                        | application/json           |
| Errors\Error500            | 500                        | application/json           |
| Errors\Error502            | 502                        | application/json           |
| Errors\Error504            | 504                        | application/json           |
| errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Retrieve a specific capture for a transaction by its unique identifier.

### Example Usage

<!-- UsageSnippet language="php" operationID="get_transaction_capture" method="get" path="/transactions/{transaction_id}/captures/{capture_id}" -->
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



$response = $sdk->transactions->captures->get(
    transactionId: '7099948d-7286-47e4-aad8-b68f7eb44591',
    captureId: 'b1e2c3d4-5678-1234-9abc-1234567890ab'

);

if ($response->capture !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `transactionId`                                         | *string*                                                | :heavy_check_mark:                                      | The unique identifier of the transaction.               | 7099948d-7286-47e4-aad8-b68f7eb44591                    |
| `captureId`                                             | *string*                                                | :heavy_check_mark:                                      | The unique identifier of the capture.                   | b1e2c3d4-5678-1234-9abc-1234567890ab                    |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?GetTransactionCaptureResponse](../../GetTransactionCaptureResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\Error400            | 400                        | application/json           |
| Errors\Error401            | 401                        | application/json           |
| Errors\Error403            | 403                        | application/json           |
| Errors\Error404            | 404                        | application/json           |
| Errors\Error405            | 405                        | application/json           |
| Errors\Error409            | 409                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\Error425            | 425                        | application/json           |
| Errors\Error429            | 429                        | application/json           |
| Errors\Error500            | 500                        | application/json           |
| Errors\Error502            | 502                        | application/json           |
| Errors\Error504            | 504                        | application/json           |
| errors\APIException        | 4XX, 5XX                   | \*/\*                      |