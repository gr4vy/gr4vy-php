# All
(*transactions->refunds->all*)

## Overview

### Available Operations

* [create](#create) - Create batch transaction refund

## create

Create a refund for all instruments on a transaction.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$transactionRefundAllCreate = new Gr4vy\TransactionRefundAllCreate();

$response = $sdk->transactions->refunds->all->create(
    transactionId: '7099948d-7286-47e4-aad8-b68f7eb44591',
    merchantAccountId: 'default',
    transactionRefundAllCreate: $transactionRefundAllCreate

);

if ($response->refunds !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                          | Type                                                               | Required                                                           | Description                                                        | Example                                                            |
| ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ |
| `transactionId`                                                    | *string*                                                           | :heavy_check_mark:                                                 | N/A                                                                | 7099948d-7286-47e4-aad8-b68f7eb44591                               |
| `merchantAccountId`                                                | *?string*                                                          | :heavy_minus_sign:                                                 | The ID of the merchant account to use for this request.            | default                                                            |
| `transactionRefundAllCreate`                                       | [?TransactionRefundAllCreate](../../TransactionRefundAllCreate.md) | :heavy_minus_sign:                                                 | N/A                                                                |                                                                    |

### Response

**[?CreateFullTransactionRefundResponse](../../CreateFullTransactionRefundResponse.md)**

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