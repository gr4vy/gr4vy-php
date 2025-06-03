# Events
(*transactions->events*)

## Overview

### Available Operations

* [list](#list) - List transaction events

## list

Fetch a list of events for a transaction.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setMerchantAccountId('default')
    ->build();

$request = new Gr4vy\ListTransactionEventsRequest(
    transactionId: '7099948d-7286-47e4-aad8-b68f7eb44591',
    cursor: 'ZXhhbXBsZTE',
);

$response = $sdk->transactions->events->list(
    request: $request
);

if ($response->collectionTransactionEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                   | Type                                                                        | Required                                                                    | Description                                                                 |
| --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- |
| `$request`                                                                  | [Gr4vy\ListTransactionEventsRequest](../../ListTransactionEventsRequest.md) | :heavy_check_mark:                                                          | The request object to use for the request.                                  |

### Response

**[?ListTransactionEventsResponse](../../ListTransactionEventsResponse.md)**

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