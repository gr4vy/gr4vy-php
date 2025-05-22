# PaymentOptions
(*paymentOptions*)

## Overview

### Available Operations

* [list](#list) - List payment options

## list

List the payment options available at checkout. filtering by country, currency, and additional fields passed to Flow rules.

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

$paymentOptionRequest = new Gr4vy\PaymentOptionRequest(
    metadata: [
        'cohort' => 'a',
    ],
    country: 'US',
    currency: 'USD',
    amount: 1299,
    cartItems: [
        new Gr4vy\CartItem(
            name: 'GoPro HD',
            quantity: 2,
            unitAmount: 1299,
            discountAmount: 0,
            taxAmount: 0,
            externalIdentifier: 'goprohd',
            sku: 'GPHD1078',
            productUrl: 'https://example.com/catalog/go-pro-hd',
            imageUrl: 'https://example.com/images/go-pro-hd.jpg',
            categories: [
                'camera',
                'travel',
                'gear',
            ],
            productType: 'physical',
            sellerCountry: 'US',
        ),
    ],
);

$response = $sdk->paymentOptions->list(
    paymentOptionRequest: $paymentOptionRequest,
    merchantAccountId: 'default'

);

if ($response->collectionNoCursorPaymentOption !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `paymentOptionRequest`                                  | [PaymentOptionRequest](../../PaymentOptionRequest.md)   | :heavy_check_mark:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?ListPaymentOptionsResponse](../../ListPaymentOptionsResponse.md)**

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