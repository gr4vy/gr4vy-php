# GiftCards.Balances

## Overview

### Available Operations

* [list](#list) - List gift card balances

## list

Fetch the balances for one or more gift cards.

### Example Usage

<!-- UsageSnippet language="php" operationID="list_gift_card_balances" method="post" path="/gift-cards/balances" -->
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

$giftCardBalanceRequest = new Gr4vy\GiftCardBalanceRequest(
    items: [
        new Gr4vy\GiftCardStoredRequest(
            id: '356d56e5-fe16-42ae-97ee-8d55d846ae2e',
        ),
        new Gr4vy\GiftCardStoredRequest(
            id: '356d56e5-fe16-42ae-97ee-8d55d846ae2e',
        ),
        new Gr4vy\GiftCardRequest(
            number: '4123455541234561234',
            pin: '1234',
        ),
    ],
);

$response = $sdk->giftCards->balances->list(
    giftCardBalanceRequest: $giftCardBalanceRequest
);

if ($response->giftCardSummaries !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                 | Type                                                      | Required                                                  | Description                                               | Example                                                   |
| --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- |
| `giftCardBalanceRequest`                                  | [GiftCardBalanceRequest](../../GiftCardBalanceRequest.md) | :heavy_check_mark:                                        | N/A                                                       |                                                           |
| `merchantAccountId`                                       | *?string*                                                 | :heavy_minus_sign:                                        | The ID of the merchant account to use for this request.   | default                                                   |

### Response

**[?ListGiftCardBalancesResponse](../../ListGiftCardBalancesResponse.md)**

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