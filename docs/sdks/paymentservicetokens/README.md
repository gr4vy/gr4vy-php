# PaymentServiceTokens
(*paymentMethods->paymentServiceTokens*)

## Overview

### Available Operations

* [list](#list) - List payment service tokens
* [create](#create) - Create payment service token
* [delete](#delete) - Delete payment service token

## list

List all gateway tokens stored for a payment method.

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



$response = $sdk->paymentMethods->paymentServiceTokens->list(
    paymentMethodId: 'ef9496d8-53a5-4aad-8ca2-00eb68334389',
    paymentServiceId: 'fffd152a-9532-4087-9a4f-de58754210f0',
    applicationName: 'core-api',
    merchantAccountId: 'default'

);

if ($response->collectionNoCursorPaymentServiceToken !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `paymentMethodId`                                       | *string*                                                | :heavy_check_mark:                                      | The ID of the payment method                            | ef9496d8-53a5-4aad-8ca2-00eb68334389                    |
| `paymentServiceId`                                      | *?string*                                               | :heavy_minus_sign:                                      | The ID of the payment service                           | fffd152a-9532-4087-9a4f-de58754210f0                    |
| `applicationName`                                       | *?string*                                               | :heavy_minus_sign:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?ListPaymentMethodPaymentServiceTokensResponse](../../ListPaymentMethodPaymentServiceTokensResponse.md)**

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

Create a gateway tokens for a payment method.

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

$paymentServiceTokenCreate = new Gr4vy\PaymentServiceTokenCreate(
    securityCode: '123',
    paymentServiceId: 'fffd152a-9532-4087-9a4f-de58754210f0',
    redirectUrl: 'https://dual-futon.biz',
);

$response = $sdk->paymentMethods->paymentServiceTokens->create(
    paymentMethodId: 'ef9496d8-53a5-4aad-8ca2-00eb68334389',
    paymentServiceTokenCreate: $paymentServiceTokenCreate,
    applicationName: 'core-api',
    merchantAccountId: 'default'

);

if ($response->paymentServiceToken !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                       | Type                                                            | Required                                                        | Description                                                     | Example                                                         |
| --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- |
| `paymentMethodId`                                               | *string*                                                        | :heavy_check_mark:                                              | The ID of the payment method                                    | ef9496d8-53a5-4aad-8ca2-00eb68334389                            |
| `paymentServiceTokenCreate`                                     | [PaymentServiceTokenCreate](../../PaymentServiceTokenCreate.md) | :heavy_check_mark:                                              | N/A                                                             |                                                                 |
| `applicationName`                                               | *?string*                                                       | :heavy_minus_sign:                                              | N/A                                                             |                                                                 |
| `merchantAccountId`                                             | *?string*                                                       | :heavy_minus_sign:                                              | The ID of the merchant account to use for this request.         | default                                                         |

### Response

**[?CreatePaymentMethodPaymentServiceTokenResponse](../../CreatePaymentMethodPaymentServiceTokenResponse.md)**

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

## delete

Delete a gateway tokens for a payment method.

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



$response = $sdk->paymentMethods->paymentServiceTokens->delete(
    paymentMethodId: 'ef9496d8-53a5-4aad-8ca2-00eb68334389',
    paymentServiceTokenId: '703f2d99-3fd1-44bc-9cbd-a25a2d597886',
    applicationName: 'core-api',
    merchantAccountId: 'default'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `paymentMethodId`                                       | *string*                                                | :heavy_check_mark:                                      | The ID of the payment method                            | ef9496d8-53a5-4aad-8ca2-00eb68334389                    |
| `paymentServiceTokenId`                                 | *string*                                                | :heavy_check_mark:                                      | The ID of the payment service token                     | 703f2d99-3fd1-44bc-9cbd-a25a2d597886                    |
| `applicationName`                                       | *?string*                                               | :heavy_minus_sign:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?DeletePaymentMethodPaymentServiceTokenResponse](../../DeletePaymentMethodPaymentServiceTokenResponse.md)**

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