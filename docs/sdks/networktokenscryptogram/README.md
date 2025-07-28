# NetworkTokensCryptogram
(*paymentMethods->networkTokens->cryptogram*)

## Overview

### Available Operations

* [create](#create) - Provision network token cryptogram

## create

Provision a cryptogram for a network token.

### Example Usage

<!-- UsageSnippet language="php" operationID="create_payment_method_network_token_cryptogram" method="post" path="/payment-methods/{payment_method_id}/network-tokens/{network_token_id}/cryptogram" -->
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

$cryptogramCreate = new Gr4vy\CryptogramCreate(
    merchantInitiated: false,
);

$response = $sdk->paymentMethods->networkTokens->cryptogram->create(
    paymentMethodId: 'ef9496d8-53a5-4aad-8ca2-00eb68334389',
    networkTokenId: 'f8dd5cfc-7834-4847-95dc-f75a360e2298',
    cryptogramCreate: $cryptogramCreate

);

if ($response->cryptogram !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `paymentMethodId`                                       | *string*                                                | :heavy_check_mark:                                      | The ID of the payment method                            | ef9496d8-53a5-4aad-8ca2-00eb68334389                    |
| `networkTokenId`                                        | *string*                                                | :heavy_check_mark:                                      | The ID of the network token                             | f8dd5cfc-7834-4847-95dc-f75a360e2298                    |
| `cryptogramCreate`                                      | [CryptogramCreate](../../CryptogramCreate.md)           | :heavy_check_mark:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?CreatePaymentMethodNetworkTokenCryptogramResponse](../../CreatePaymentMethodNetworkTokenCryptogramResponse.md)**

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