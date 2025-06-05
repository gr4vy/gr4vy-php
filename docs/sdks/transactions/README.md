# Transactions
(*transactions*)

## Overview

### Available Operations

* [list](#list) - List transactions
* [create](#create) - Create transaction
* [get](#get) - Get transaction
* [capture](#capture) - Capture transaction
* [void](#void) - Void transaction
* [sync](#sync) - Sync transaction

## list

List all transactions for a specific merchant account sorted by most recently created.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;
use Gr4vy\Utils;

$sdk = Gr4vy\SDK::builder()
    ->setMerchantAccountId('default')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Gr4vy\ListTransactionsRequest(
    cursor: 'ZXhhbXBsZTE',
    createdAtLte: Utils\Utils::parseDateTime('2022-01-01T12:00:00+08:00'),
    createdAtGte: Utils\Utils::parseDateTime('2022-01-01T12:00:00+08:00'),
    updatedAtLte: Utils\Utils::parseDateTime('2022-01-01T12:00:00+08:00'),
    updatedAtGte: Utils\Utils::parseDateTime('2022-01-01T12:00:00+08:00'),
    search: 'transaction-12345',
    buyerExternalIdentifier: 'buyer-12345',
    buyerId: 'fe26475d-ec3e-4884-9553-f7356683f7f9',
    buyerEmailAddress: 'john@example.com',
    buyerSearch: 'John',
    ipAddress: '8.214.133.47',
    status: [
        'authorization_succeeded',
    ],
    id: '7099948d-7286-47e4-aad8-b68f7eb44591',
    paymentServiceTransactionId: 'tx-12345',
    externalIdentifier: 'transaction-12345',
    metadata: [
        '{"first_key":"first_value","second_key":"second_value"}',
    ],
    amountEq: 1299,
    amountLte: 1299,
    amountGte: 1299,
    currency: [
        'USD',
    ],
    country: [
        'US',
    ],
    paymentServiceId: [
        'fffd152a-9532-4087-9a4f-de58754210f0',
    ],
    paymentMethodId: 'ef9496d8-53a5-4aad-8ca2-00eb68334389',
    paymentMethodLabel: '1234',
    paymentMethodScheme: '["visa"]',
    paymentMethodCountry: '["US"]',
    paymentMethodFingerprint: 'a50b85c200ee0795d6fd33a5c66f37a4564f554355c5b46a756aac485dd168a4',
    method: [
        'card',
    ],
    errorCode: [
        'insufficient_funds',
    ],
    hasRefunds: true,
    pendingReview: true,
    checkoutSessionId: '4137b1cf-39ac-42a8-bad6-1c680d5dab6b',
    reconciliationId: '7jZXl4gBUNl0CnaLEnfXbt',
    hasGiftCardRedemptions: true,
    giftCardId: '356d56e5-fe16-42ae-97ee-8d55d846ae2e',
    giftCardLast4: '7890',
    hasSettlements: true,
    paymentMethodBin: '411111',
    paymentSource: [
        'recurring',
    ],
    isSubsequentPayment: true,
    merchantInitiated: true,
    used3ds: true,
);

$responses = $sdk->transactions->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                         | Type                                                              | Required                                                          | Description                                                       |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `$request`                                                        | [Gr4vy\ListTransactionsRequest](../../ListTransactionsRequest.md) | :heavy_check_mark:                                                | The request object to use for the request.                        |

### Response

**[?ListTransactionsResponse](../../ListTransactionsResponse.md)**

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

Create a transaction.

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

$transactionCreate = new Gr4vy\TransactionCreate(
    amount: 1299,
    currency: 'EUR',
    store: true,
    isSubsequentPayment: true,
    merchantInitiated: true,
    asyncCapture: true,
    accountFundingTransaction: true,
);

$response = $sdk->transactions->create(
    transactionCreate: $transactionCreate,
    idempotencyKey: 'request-12345'

);

if ($response->transaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                             | Type                                                                                                                                                                                                  | Required                                                                                                                                                                                              | Description                                                                                                                                                                                           | Example                                                                                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `transactionCreate`                                                                                                                                                                                   | [TransactionCreate](../../TransactionCreate.md)                                                                                                                                                       | :heavy_check_mark:                                                                                                                                                                                    | N/A                                                                                                                                                                                                   |                                                                                                                                                                                                       |
| `merchantAccountId`                                                                                                                                                                                   | *?string*                                                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                    | The ID of the merchant account to use for this request.                                                                                                                                               | default                                                                                                                                                                                               |
| `idempotencyKey`                                                                                                                                                                                      | *?string*                                                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                    | A unique key that identifies this request. Providing this header will make this an idempotent request. We recommend using V4 UUIDs, or another random string with enough entropy to avoid collisions. | request-12345                                                                                                                                                                                         |

### Response

**[?CreateTransactionResponse](../../CreateTransactionResponse.md)**

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

Fetch a single transaction by its ID.

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



$response = $sdk->transactions->get(
    transactionId: '7099948d-7286-47e4-aad8-b68f7eb44591'
);

if ($response->transaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `transactionId`                                         | *string*                                                | :heavy_check_mark:                                      | The ID of the transaction                               | 7099948d-7286-47e4-aad8-b68f7eb44591                    |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?GetTransactionResponse](../../GetTransactionResponse.md)**

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

## capture

Capture a previously authorized transaction.

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

$transactionCapture = new Gr4vy\TransactionCapture();

$response = $sdk->transactions->capture(
    transactionId: '7099948d-7286-47e4-aad8-b68f7eb44591',
    transactionCapture: $transactionCapture

);

if ($response->transaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `transactionId`                                         | *string*                                                | :heavy_check_mark:                                      | The ID of the transaction                               | 7099948d-7286-47e4-aad8-b68f7eb44591                    |
| `transactionCapture`                                    | [TransactionCapture](../../TransactionCapture.md)       | :heavy_check_mark:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?CaptureTransactionResponse](../../CaptureTransactionResponse.md)**

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

## void

Void a previously authorized transaction.

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



$response = $sdk->transactions->void(
    transactionId: '7099948d-7286-47e4-aad8-b68f7eb44591'
);

if ($response->transaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `transactionId`                                         | *string*                                                | :heavy_check_mark:                                      | The ID of the transaction                               | 7099948d-7286-47e4-aad8-b68f7eb44591                    |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?VoidTransactionResponse](../../VoidTransactionResponse.md)**

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

## sync

Fetch the latest status for a transaction.

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



$response = $sdk->transactions->sync(
    transactionId: '2ee546e0-3b11-478e-afec-fdb362611e22'
);

if ($response->transaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `transactionId`                                         | *string*                                                | :heavy_check_mark:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?SyncTransactionResponse](../../SyncTransactionResponse.md)**

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