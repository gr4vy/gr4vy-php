# DigitalWallets.Sessions

## Overview

### Available Operations

* [googlePay](#googlepay) - Create a Google Pay session
* [applePay](#applepay) - Create a Apple Pay session
* [pazeMobileSessionCreate](#pazemobilesessioncreate) - Create a Paze mobile session
* [paze](#paze) - Create a Paze session
* [pazeMobileSessionReview](#pazemobilesessionreview) - Review a Paze session
* [pazeMobileSessionComplete](#pazemobilesessioncomplete) - Complete a Paze session
* [clickToPay](#clicktopay) - Create a Click to Pay session

## googlePay

Create a session for use with Google Pay.

### Example Usage

<!-- UsageSnippet language="php" operationID="create_google_pay_digital_wallet_session" method="post" path="/digital-wallets/google/session" -->
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

$googlePaySessionRequest = new Gr4vy\GooglePaySessionRequest(
    originDomain: 'example.com',
);

$response = $sdk->digitalWallets->sessions->googlePay(
    googlePaySessionRequest: $googlePaySessionRequest
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

## applePay

Create a session for use with Apple Pay.

### Example Usage

<!-- UsageSnippet language="php" operationID="create_apple_pay_digital_wallet_session" method="post" path="/digital-wallets/apple/session" -->
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

$applePaySessionRequest = new Gr4vy\ApplePaySessionRequest(
    validationUrl: 'https://apple-pay-gateway-cert.apple.com',
    domainName: 'example.com',
);

$response = $sdk->digitalWallets->sessions->applePay(
    applePaySessionRequest: $applePaySessionRequest
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

## pazeMobileSessionCreate

Create a mobile session for use with Paze.

### Example Usage

<!-- UsageSnippet language="php" operationID="create_paze_mobile_session" method="post" path="/digital-wallets/paze/session/create" -->
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

$pazeMobileSessionCreateRequest = new Gr4vy\PazeMobileSessionCreateRequest(
    client: new Gr4vy\PazeClient(
        id: '0UVAS9Y03YNJ39XXYIN313F4DZNCjIGmqs4Iw32EPnZV0800o',
    ),
    sessionId: '24e4dbb9-4f5e-43e8-8375-e9fd45650bc9',
    accessToken: '<value>',
    callbackURLScheme: 'Gr4vyCallback',
    intent: 'EXPRESS_CHECKOUT',
);

$response = $sdk->digitalWallets->sessions->pazeMobileSessionCreate(
    pazeMobileSessionCreateRequest: $pazeMobileSessionCreateRequest
);

if ($response->pazeMobileSessionCreate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                 | Type                                                                      | Required                                                                  | Description                                                               | Example                                                                   |
| ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- |
| `pazeMobileSessionCreateRequest`                                          | [PazeMobileSessionCreateRequest](../../PazeMobileSessionCreateRequest.md) | :heavy_check_mark:                                                        | N/A                                                                       |                                                                           |
| `merchantAccountId`                                                       | *?string*                                                                 | :heavy_minus_sign:                                                        | The ID of the merchant account to use for this request.                   | default                                                                   |

### Response

**[?CreatePazeMobileSessionResponse](../../CreatePazeMobileSessionResponse.md)**

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

## paze

Create a session for use with Paze.

### Example Usage

<!-- UsageSnippet language="php" operationID="create_paze_digital_wallet_session" method="post" path="/digital-wallets/paze/session" -->
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

$pazeSessionRequest = new Gr4vy\PazeSessionRequest();

$response = $sdk->digitalWallets->sessions->paze(
    pazeSessionRequest: $pazeSessionRequest
);

if ($response->responseCreatePazeDigitalWalletSession !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `pazeSessionRequest`                                    | [PazeSessionRequest](../../PazeSessionRequest.md)       | :heavy_check_mark:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?CreatePazeDigitalWalletSessionResponse](../../CreatePazeDigitalWalletSessionResponse.md)**

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

## pazeMobileSessionReview

Review a Paze checkout session and retrieve the selected card, consumer, and shipping address details.

### Example Usage

<!-- UsageSnippet language="php" operationID="review_paze_mobile_session" method="post" path="/digital-wallets/paze/session/review" -->
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

$pazeSessionReviewRequest = new Gr4vy\PazeSessionReviewRequest(
    sessionId: '7c1cba03-d20e-4a3f-9d77-e5dc23a39ac2',
    code: 'eyJhdWQiOm51bGwsImtpZCI6IjE3...',
    accessToken: 'eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9...',
);

$response = $sdk->digitalWallets->sessions->pazeMobileSessionReview(
    pazeSessionReviewRequest: $pazeSessionReviewRequest
);

if ($response->pazeSessionReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                     | Type                                                          | Required                                                      | Description                                                   | Example                                                       |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `pazeSessionReviewRequest`                                    | [PazeSessionReviewRequest](../../PazeSessionReviewRequest.md) | :heavy_check_mark:                                            | N/A                                                           |                                                               |
| `merchantAccountId`                                           | *?string*                                                     | :heavy_minus_sign:                                            | The ID of the merchant account to use for this request.       | default                                                       |

### Response

**[?ReviewPazeMobileSessionResponse](../../ReviewPazeMobileSessionResponse.md)**

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

## pazeMobileSessionComplete

Complete a Paze checkout session and retrieve the secure payload required to settle the payment.

### Example Usage

<!-- UsageSnippet language="php" operationID="complete_paze_mobile_session" method="post" path="/digital-wallets/paze/session/complete" -->
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

$pazeSessionCompleteRequest = new Gr4vy\PazeSessionCompleteRequest(
    sessionId: '7c1cba03-d20e-4a3f-9d77-e5dc23a39ac2',
    code: 'eyJhdWQiOm51bGwsImtpZCI6IjE3...',
    accessToken: 'eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9...',
    transactionType: 'PURCHASE',
);

$response = $sdk->digitalWallets->sessions->pazeMobileSessionComplete(
    pazeSessionCompleteRequest: $pazeSessionCompleteRequest
);

if ($response->pazeSessionComplete !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                         | Type                                                              | Required                                                          | Description                                                       | Example                                                           |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `pazeSessionCompleteRequest`                                      | [PazeSessionCompleteRequest](../../PazeSessionCompleteRequest.md) | :heavy_check_mark:                                                | N/A                                                               |                                                                   |
| `merchantAccountId`                                               | *?string*                                                         | :heavy_minus_sign:                                                | The ID of the merchant account to use for this request.           | default                                                           |

### Response

**[?CompletePazeMobileSessionResponse](../../CompletePazeMobileSessionResponse.md)**

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

## clickToPay

Create a session for use with Click to Pay.

### Example Usage

<!-- UsageSnippet language="php" operationID="create_click_to_pay_digital_wallet_session" method="post" path="/digital-wallets/click-to-pay/session" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
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