# PaymentLinksSDK
(*paymentLinks*)

## Overview

### Available Operations

* [create](#create) - Add a payment link
* [list](#list) - List all payment links
* [expire](#expire) - Expire a payment link
* [get](#get) - Get payment link

## create

Create a new payment link.

### Example Usage

<!-- UsageSnippet language="php" operationID="add_payment_link" method="post" path="/payment-links" -->
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

$paymentLinkCreate = new Gr4vy\PaymentLinkCreate(
    amount: 1299,
    country: 'DE',
    currency: 'EUR',
);

$response = $sdk->paymentLinks->create(
    paymentLinkCreate: $paymentLinkCreate
);

if ($response->paymentLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `paymentLinkCreate`                                     | [PaymentLinkCreate](../../PaymentLinkCreate.md)         | :heavy_check_mark:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?AddPaymentLinkResponse](../../AddPaymentLinkResponse.md)**

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

## list

List all created payment links.

### Example Usage

<!-- UsageSnippet language="php" operationID="list_payment_links" method="get" path="/payment-links" -->
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



$responses = $sdk->paymentLinks->list(
    limit: 20
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     | Example                                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `cursor`                                                                                                                        | *?string*                                                                                                                       | :heavy_minus_sign:                                                                                                              | A pointer to the page of results to return.                                                                                     | ZXhhbXBsZTE                                                                                                                     |
| `limit`                                                                                                                         | *?int*                                                                                                                          | :heavy_minus_sign:                                                                                                              | The maximum number of items that are returned.                                                                                  | 20                                                                                                                              |
| `buyerSearch`                                                                                                                   | array<*string*>                                                                                                                 | :heavy_minus_sign:                                                                                                              | Filters the results to only get the items for which some of the buyer data contains exactly the provided `buyer_search` values. | [<br/>"John",<br/>"London"<br/>]                                                                                                |
| `merchantAccountId`                                                                                                             | *?string*                                                                                                                       | :heavy_minus_sign:                                                                                                              | The ID of the merchant account to use for this request.                                                                         | default                                                                                                                         |

### Response

**[?ListPaymentLinksResponse](../../ListPaymentLinksResponse.md)**

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

## expire

Expire an existing payment link.

### Example Usage

<!-- UsageSnippet language="php" operationID="expire_payment_link" method="post" path="/payment-links/{payment_link_id}/expire" -->
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



$response = $sdk->paymentLinks->expire(
    paymentLinkId: 'a1b2c3d4-5678-90ab-cdef-1234567890ab'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `paymentLinkId`                                         | *string*                                                | :heavy_check_mark:                                      | The unique identifier for the payment link.             | a1b2c3d4-5678-90ab-cdef-1234567890ab                    |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?ExpirePaymentLinkResponse](../../ExpirePaymentLinkResponse.md)**

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

Fetch the details for a payment link.

### Example Usage

<!-- UsageSnippet language="php" operationID="get_payment_link" method="get" path="/payment-links/{payment_link_id}" -->
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



$response = $sdk->paymentLinks->get(
    paymentLinkId: 'a1b2c3d4-5678-90ab-cdef-1234567890ab'
);

if ($response->paymentLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `paymentLinkId`                                         | *string*                                                | :heavy_check_mark:                                      | The unique identifier for the payment link.             | a1b2c3d4-5678-90ab-cdef-1234567890ab                    |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?GetPaymentLinkResponse](../../GetPaymentLinkResponse.md)**

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