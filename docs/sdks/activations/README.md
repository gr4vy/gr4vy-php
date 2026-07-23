# GiftCards.Activations

## Overview

### Available Operations

* [create](#create) - Activate a gift card

## create

Activate a physical gift card through the primary gift card service.

### Example Usage

<!-- UsageSnippet language="php" operationID="activate_gift_card" method="post" path="/gift-cards/activations" -->
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

$giftCardActivationCreate = new Gr4vy\GiftCardActivationCreate(
    number: '4123455541234561234',
);

$response = $sdk->giftCards->activations->create(
    giftCardActivationCreate: $giftCardActivationCreate
);

if ($response->giftCard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                       | Type                                                                                                                                                                                                                                            | Required                                                                                                                                                                                                                                        | Description                                                                                                                                                                                                                                     | Example                                                                                                                                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `giftCardActivationCreate`                                                                                                                                                                                                                      | [GiftCardActivationCreate](../../GiftCardActivationCreate.md)                                                                                                                                                                                   | :heavy_check_mark:                                                                                                                                                                                                                              | N/A                                                                                                                                                                                                                                             |                                                                                                                                                                                                                                                 |
| `idempotencyKey`                                                                                                                                                                                                                                | *?string*                                                                                                                                                                                                                                       | :heavy_minus_sign:                                                                                                                                                                                                                              | A unique key that identifies this request. If supported by the gift card service, the value will be forwarded to make the activation idempotent. We recommend using V4 UUIDs, or another random string with enough entropy to avoid collisions. |                                                                                                                                                                                                                                                 |
| `merchantAccountId`                                                                                                                                                                                                                             | *?string*                                                                                                                                                                                                                                       | :heavy_minus_sign:                                                                                                                                                                                                                              | The ID of the merchant account to use for this request.                                                                                                                                                                                         | default                                                                                                                                                                                                                                         |

### Response

**[?ActivateGiftCardResponse](../../ActivateGiftCardResponse.md)**

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