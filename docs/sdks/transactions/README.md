# Transactions

## Overview

### Available Operations

* [list](#list) - List transactions
* [create](#create) - Create transaction
* [get](#get) - Get transaction
* [update](#update) - Manually update a transaction
* [capture](#capture) - Capture transaction
* [void](#void) - Void transaction
* [cancel](#cancel) - Cancel transaction
* [sync](#sync) - Sync transaction

## list

Returns a paginated list of transactions for the merchant account, sorted by most recently updated. You can filter, sort, and search transactions using query parameters.

### Example Usage

<!-- UsageSnippet language="php" operationID="list_transactions" method="get" path="/transactions" -->
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
    paymentMethodScheme: [
        '[',
        '"',
        'v',
        'i',
        's',
        'a',
        '"',
        ']',
    ],
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
    buyerSearch: [
        'J',
        'o',
        'h',
        'n',
    ],
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

Create a new transaction using a supported payment method. If additional buyer authorization is required, an approval URL will be returned. Duplicated gift card numbers are not supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="create_transaction" method="post" path="/transactions" -->
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
| `xForwardedFor`                                                                                                                                                                                       | *?string*                                                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                    | The IP address to forward from the customer. Use this when calling<br/>our API from the server side to ensure the customer's address is<br/>passed to downstream services, rather than your server IP. | 192.168.0.2                                                                                                                                                                                           |

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

Retrieve the details of a transaction by its unique identifier.

### Example Usage

<!-- UsageSnippet language="php" operationID="get_transaction" method="get" path="/transactions/{transaction_id}" -->
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

## update

Manually updates a transaction.

### Example Usage

<!-- UsageSnippet language="php" operationID="update_transaction" method="put" path="/transactions/{transaction_id}" -->
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

$transactionUpdate = new Gr4vy\TransactionUpdate();

$response = $sdk->transactions->update(
    transactionId: '7099948d-7286-47e4-aad8-b68f7eb44591',
    transactionUpdate: $transactionUpdate

);

if ($response->transaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `transactionId`                                         | *string*                                                | :heavy_check_mark:                                      | The ID of the transaction                               | 7099948d-7286-47e4-aad8-b68f7eb44591                    |
| `transactionUpdate`                                     | [TransactionUpdate](../../TransactionUpdate.md)         | :heavy_check_mark:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?UpdateTransactionResponse](../../UpdateTransactionResponse.md)**

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

Captures a previously authorized transaction. You can capture the full or a partial amount, as long as it does not exceed the authorized amount (unless over-capture is enabled).

### Example Usage

<!-- UsageSnippet language="php" operationID="capture_transaction" method="post" path="/transactions/{transaction_id}/capture" -->
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

$transactionCaptureCreate = new Gr4vy\TransactionCaptureCreate();

$response = $sdk->transactions->capture(
    transactionId: '7099948d-7286-47e4-aad8-b68f7eb44591',
    transactionCaptureCreate: $transactionCaptureCreate

);

if ($response->responseCaptureTransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                     | Type                                                          | Required                                                      | Description                                                   | Example                                                       |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `transactionId`                                               | *string*                                                      | :heavy_check_mark:                                            | The ID of the transaction                                     | 7099948d-7286-47e4-aad8-b68f7eb44591                          |
| `transactionCaptureCreate`                                    | [TransactionCaptureCreate](../../TransactionCaptureCreate.md) | :heavy_check_mark:                                            | N/A                                                           |                                                               |
| `prefer`                                                      | array<*string*>                                               | :heavy_minus_sign:                                            | The preferred resource type in the response.                  |                                                               |
| `merchantAccountId`                                           | *?string*                                                     | :heavy_minus_sign:                                            | The ID of the merchant account to use for this request.       | default                                                       |

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

Voids a previously authorized transaction. If the transaction was not yet successfully authorized, or was already captured, the void will not be processed. This operation releases the hold on the buyer's funds. Captured transactions can be refunded instead.

### Example Usage

<!-- UsageSnippet language="php" operationID="void_transaction" method="post" path="/transactions/{transaction_id}/void" -->
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

if ($response->responseVoidTransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `transactionId`                                         | *string*                                                | :heavy_check_mark:                                      | The ID of the transaction                               | 7099948d-7286-47e4-aad8-b68f7eb44591                    |
| `prefer`                                                | array<*string*>                                         | :heavy_minus_sign:                                      | The preferred resource type in the response.            |                                                         |
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

## cancel

Cancels a pending transaction. If the transaction was successfully authorized, or was already captured, the cancel will not be processed.

### Example Usage

<!-- UsageSnippet language="php" operationID="cancel_transaction" method="post" path="/transactions/{transaction_id}/cancel" -->
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



$response = $sdk->transactions->cancel(
    transactionId: '7099948d-7286-47e4-aad8-b68f7eb44591'
);

if ($response->transactionCancel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `transactionId`                                         | *string*                                                | :heavy_check_mark:                                      | The ID of the transaction                               | 7099948d-7286-47e4-aad8-b68f7eb44591                    |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?CancelTransactionResponse](../../CancelTransactionResponse.md)**

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

Synchronizes the status of a transaction with the underlying payment service provider. This is useful for transactions in a pending state to check if they've been completed or failed. Only available for some payment service providers.

### Example Usage

<!-- UsageSnippet language="php" operationID="sync_transaction" method="post" path="/transactions/{transaction_id}/sync" -->
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