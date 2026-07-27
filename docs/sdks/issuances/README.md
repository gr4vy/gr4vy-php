# GiftCards.Issuances

## Overview

### Available Operations

* [create](#create) - Issue a gift card

## create

Issue a new virtual gift card through the primary gift card service.

### Example Usage

<!-- UsageSnippet language="php" operationID="issue_gift_card" method="post" path="/gift-cards/issuances" -->
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

$giftCardIssuanceCreate = new Gr4vy\GiftCardIssuanceCreate(
    theme: '031111372',
    amount: 5000,
    currency: 'EUR',
);

$response = $sdk->giftCards->issuances->create(
    giftCardIssuanceCreate: $giftCardIssuanceCreate
);

if ($response->giftCardIssuance !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      | Example                                                                          |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `giftCardIssuanceCreate`                                                         | [GiftCardIssuanceCreate](../../GiftCardIssuanceCreate.md)                        | :heavy_check_mark:                                                               | N/A                                                                              |                                                                                  |
| `idempotencyKey`                                                                 | *?string*                                                                        | :heavy_minus_sign:                                                               | A unique key forwarded to the gift card service to make the issuance idempotent. |                                                                                  |
| `merchantAccountId`                                                              | *?string*                                                                        | :heavy_minus_sign:                                                               | The ID of the merchant account to use for this request.                          | default                                                                          |

### Response

**[?IssueGiftCardResponse](../../IssueGiftCardResponse.md)**

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