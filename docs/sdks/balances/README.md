# Balances
(*giftCards->balances*)

## Overview

### Available Operations

* [list](#list) - List gift card balances

## list

Fetch the balances for one or more gift cards.

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

$giftCardBalanceRequest = new Gr4vy\GiftCardBalanceRequest(
    items: [
        new Gr4vy\GiftCardStoredRequest(
            id: '356d56e5-fe16-42ae-97ee-8d55d846ae2e',
        ),
    ],
);

$response = $sdk->giftCards->balances->list(
    giftCardBalanceRequest: $giftCardBalanceRequest,
    timeoutInSeconds: 1,
    merchantAccountId: 'default'

);

if ($response->collectionNoCursorGiftCardSummary !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                 | Type                                                      | Required                                                  | Description                                               | Example                                                   |
| --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- |
| `giftCardBalanceRequest`                                  | [GiftCardBalanceRequest](../../GiftCardBalanceRequest.md) | :heavy_check_mark:                                        | N/A                                                       |                                                           |
| `timeoutInSeconds`                                        | *?float*                                                  | :heavy_minus_sign:                                        | N/A                                                       |                                                           |
| `merchantAccountId`                                       | *?string*                                                 | :heavy_minus_sign:                                        | The ID of the merchant account to use for this request.   | default                                                   |

### Response

**[?ListGiftCardBalancesResponse](../../ListGiftCardBalancesResponse.md)**

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