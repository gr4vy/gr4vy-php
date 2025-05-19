# BuyersPaymentMethods
(*buyers->paymentMethods*)

## Overview

### Available Operations

* [list](#list) - List payment methods for a buyer

## list

List all the stored payment methods for a specific buyer.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\Gr4vy::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setMerchantAccountId('default')
    ->build();

$request = new Gr4vy\ListBuyerPaymentMethodsRequest(
    buyerId: 'fe26475d-ec3e-4884-9553-f7356683f7f9',
    buyerExternalIdentifier: 'buyer-12345',
    country: 'US',
    currency: 'USD',
);

$response = $sdk->buyers->paymentMethods->list(
    request: $request
);

if ($response->collectionNoCursorPaymentMethodSummary !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                       | Type                                                                            | Required                                                                        | Description                                                                     |
| ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- |
| `$request`                                                                      | [Gr4vy\ListBuyerPaymentMethodsRequest](../../ListBuyerPaymentMethodsRequest.md) | :heavy_check_mark:                                                              | The request object to use for the request.                                      |

### Response

**[?ListBuyerPaymentMethodsResponse](../../ListBuyerPaymentMethodsResponse.md)**

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