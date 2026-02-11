# Transactions.Refunds.All

## Overview

### Available Operations

* [create](#create) - Create batch transaction refund

## create

Create a refund for all instruments on a transaction.

### Example Usage

<!-- UsageSnippet language="php" operationID="create_full_transaction_refund" method="post" path="/transactions/{transaction_id}/refunds/all" -->
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

$transactionRefundAllCreate = new Gr4vy\TransactionRefundAllCreate(
    reason: 'Refund due to user request.',
    externalIdentifier: 'refund-12345',
);

$response = $sdk->transactions->refunds->all->create(
    transactionId: '7099948d-7286-47e4-aad8-b68f7eb44591',
    transactionRefundAllCreate: $transactionRefundAllCreate

);

if ($response->refunds !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                             | Type                                                                                                                                                                                                  | Required                                                                                                                                                                                              | Description                                                                                                                                                                                           | Example                                                                                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `transactionId`                                                                                                                                                                                       | *string*                                                                                                                                                                                              | :heavy_check_mark:                                                                                                                                                                                    | The ID of the transaction                                                                                                                                                                             | 7099948d-7286-47e4-aad8-b68f7eb44591                                                                                                                                                                  |
| `merchantAccountId`                                                                                                                                                                                   | *?string*                                                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                    | The ID of the merchant account to use for this request.                                                                                                                                               | default                                                                                                                                                                                               |
| `idempotencyKey`                                                                                                                                                                                      | *?string*                                                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                    | A unique key that identifies this request. Providing this header will make this an idempotent request. We recommend using V4 UUIDs, or another random string with enough entropy to avoid collisions. | request-12345                                                                                                                                                                                         |
| `transactionRefundAllCreate`                                                                                                                                                                          | [?TransactionRefundAllCreate](../../TransactionRefundAllCreate.md)                                                                                                                                    | :heavy_minus_sign:                                                                                                                                                                                    | N/A                                                                                                                                                                                                   |                                                                                                                                                                                                       |

### Response

**[?CreateFullTransactionRefundResponse](../../CreateFullTransactionRefundResponse.md)**

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