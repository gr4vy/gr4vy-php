# Sessions
(*digitalWallets->sessions*)

## Overview

### Available Operations

* [googlePay](#googlepay) - Create a Google Pay session
* [applePay](#applepay) - Create a Apple Pay session
* [clickToPay](#clicktopay) - Create a Click to Pay session

## googlePay

Create a session for use with Google Pay.

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

$googlePaySessionRequest = new Gr4vy\GooglePaySessionRequest(
    originDomain: 'example.com',
);

$response = $sdk->digitalWallets->sessions->googlePay(
    googlePaySessionRequest: $googlePaySessionRequest,
    merchantAccountId: 'default'

);

if ($response->googlePaySession !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                   | Type                                                        | Required                                                    | Description                                                 | Example                                                     |
| ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- |
| `googlePaySessionRequest`                                   | [GooglePaySessionRequest](../../GooglePaySessionRequest.md) | :heavy_check_mark:                                          | N/A                                                         |                                                             |
| `merchantAccountId`                                         | *?string*                                                   | :heavy_minus_sign:                                          | The ID of the merchant account to use for this request.     | default                                                     |

### Response

**[?CreateGooglePayDigitalWalletSessionResponse](../../CreateGooglePayDigitalWalletSessionResponse.md)**

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

## applePay

Create a session for use with Apple Pay.

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

$applePaySessionRequest = new Gr4vy\ApplePaySessionRequest(
    validationUrl: 'https://apple-pay-gateway-cert.apple.com',
    domainName: 'example.com',
);

$response = $sdk->digitalWallets->sessions->applePay(
    applePaySessionRequest: $applePaySessionRequest,
    merchantAccountId: 'default'

);

if ($response->applePaySession !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                 | Type                                                      | Required                                                  | Description                                               | Example                                                   |
| --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- |
| `applePaySessionRequest`                                  | [ApplePaySessionRequest](../../ApplePaySessionRequest.md) | :heavy_check_mark:                                        | N/A                                                       |                                                           |
| `merchantAccountId`                                       | *?string*                                                 | :heavy_minus_sign:                                        | The ID of the merchant account to use for this request.   | default                                                   |

### Response

**[?CreateApplePayDigitalWalletSessionResponse](../../CreateApplePayDigitalWalletSessionResponse.md)**

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

## clickToPay

Create a session for use with Click to Pay.

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

$request = new Gr4vy\ClickToPaySessionRequest(
    checkoutSessionId: '4137b1cf-39ac-42a8-bad6-1c680d5dab6b',
);

$response = $sdk->digitalWallets->sessions->clickToPay(
    request: $request
);

if ($response->clickToPaySession !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                           | Type                                                                | Required                                                            | Description                                                         |
| ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- |
| `$request`                                                          | [Gr4vy\ClickToPaySessionRequest](../../ClickToPaySessionRequest.md) | :heavy_check_mark:                                                  | The request object to use for the request.                          |

### Response

**[?CreateClickToPayDigitalWalletSessionResponse](../../CreateClickToPayDigitalWalletSessionResponse.md)**

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