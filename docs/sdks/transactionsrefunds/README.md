# TransactionsRefunds
(*transactions->refunds*)

## Overview

### Available Operations

* [list](#list) - List transaction refunds
* [create](#create) - Create transaction refund
* [get](#get) - Get transaction refund

## list

List refunds for a transaction.

### Example Usage

<!-- UsageSnippet language="php" operationID="list_transaction_refunds" method="get" path="/transactions/{transaction_id}/refunds" -->
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



$response = $sdk->transactions->refunds->list(
    transactionId: '7099948d-7286-47e4-aad8-b68f7eb44591'
);

if ($response->refunds !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `transactionId`                                         | *string*                                                | :heavy_check_mark:                                      | The ID of the transaction                               | 7099948d-7286-47e4-aad8-b68f7eb44591                    |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?ListTransactionRefundsResponse](../../ListTransactionRefundsResponse.md)**

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

## create

Create a refund for a transaction.

### Example Usage

<!-- UsageSnippet language="php" operationID="create_transaction_refund" method="post" path="/transactions/{transaction_id}/refunds" -->
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

$transactionRefundCreate = new Gr4vy\TransactionRefundCreate();

$response = $sdk->transactions->refunds->create(
    transactionId: '7099948d-7286-47e4-aad8-b68f7eb44591',
    transactionRefundCreate: $transactionRefundCreate

);

if ($response->refund !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                   | Type                                                        | Required                                                    | Description                                                 | Example                                                     |
| ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- |
| `transactionId`                                             | *string*                                                    | :heavy_check_mark:                                          | The ID of the transaction                                   | 7099948d-7286-47e4-aad8-b68f7eb44591                        |
| `transactionRefundCreate`                                   | [TransactionRefundCreate](../../TransactionRefundCreate.md) | :heavy_check_mark:                                          | N/A                                                         |                                                             |
| `merchantAccountId`                                         | *?string*                                                   | :heavy_minus_sign:                                          | The ID of the merchant account to use for this request.     | default                                                     |

### Response

**[?CreateTransactionRefundResponse](../../CreateTransactionRefundResponse.md)**

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

Fetch refund for a transaction.

### Example Usage

<!-- UsageSnippet language="php" operationID="get_transaction_refund" method="get" path="/transactions/{transaction_id}/refunds/{refund_id}" -->
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



$response = $sdk->transactions->refunds->get(
    transactionId: '7099948d-7286-47e4-aad8-b68f7eb44591',
    refundId: '6a1d4e46-14ed-4fe1-a45f-eff4e025d211'

);

if ($response->refund !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `transactionId`                                         | *string*                                                | :heavy_check_mark:                                      | The ID of the transaction                               | 7099948d-7286-47e4-aad8-b68f7eb44591                    |
| `refundId`                                              | *string*                                                | :heavy_check_mark:                                      | The ID of the refund                                    | 6a1d4e46-14ed-4fe1-a45f-eff4e025d211                    |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?GetTransactionRefundResponse](../../GetTransactionRefundResponse.md)**

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