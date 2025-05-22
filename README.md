# Gr4vy PHP SDK (Beta)

Developer-friendly & type-safe PHP SDK specifically catered to leverage the **Gr4vy** API.

<div align="left">
    <a href="https://packagist.org/packages/gr4vy/gr4vy-php"><img alt="Packagist Version" src="https://img.shields.io/packagist/v/gr4vy/gr4vy-php?include_prereleases&style=for-the-badge"></a>
    <a href="https://www.speakeasy.com/?utm_source=gr4vy/gr4vy-php&utm_campaign=php"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
</div>


<br /><br />
> [!IMPORTANT]
> This is a Beta release of our latest SDK. Please refer to the [legacy PHP SDK](https://github.com/gr4vy/gr4vy-php/tree/legacy) for the latest stable build.

## Summary

Gr4vy Typescript SDK

The official Gr4vy SDK for Typescript provides a convenient way to interact with the Gr4vy API from your server-side application. This SDK allows you to seamlessly integrate Gr4vy's powerful payment orchestration capabilities, including:

* Creating Transactions: Initiate and process payments with various payment methods and services.
* Managing Buyers: Store and manage buyer information securely.
* Storing Payment Methods: Securely store and tokenize payment methods for future use.
* Handling Webhooks: Easily process and respond to webhook events from Gr4vy.
* And much more: Access the full suite of Gr4vy API payment features.

This SDK is designed to simplify development, reduce boilerplate code, and help you get up and running with Gr4vy quickly and efficiently. It handles authentication, request signing, and provides easy-to-use methods for most API endpoints.

<!-- No Summary [summary] -->

<!-- Start Table of Contents [toc] -->
## Table of Contents
<!-- $toc-max-depth=2 -->
* [Gr4vy PHP SDK (Beta)](#gr4vy-php-sdk-beta)
  * [SDK Installation](#sdk-installation)
  * [SDK Example Usage](#sdk-example-usage)
  * [Authentication](#authentication)
  * [Available Resources and Operations](#available-resources-and-operations)
  * [Global Parameters](#global-parameters)
  * [Pagination](#pagination)
  * [Retries](#retries)
  * [Error Handling](#error-handling)
  * [Server Selection](#server-selection)
* [Development](#development)
  * [Testing](#testing)
  * [Maturity](#maturity)
  * [Contributions](#contributions)

<!-- End Table of Contents [toc] -->

<!-- Start SDK Installation [installation] -->
## SDK Installation

The SDK relies on [Composer](https://getcomposer.org/) to manage its dependencies.

To install the SDK and add it as a dependency to an existing `composer.json` file:
```bash
composer require "gr4vy/gr4vy-php"
```
<!-- End SDK Installation [installation] -->

## SDK Example Usage

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;
use Gr4vy\Auth;

// Loaded the key from a file, env variable, 
// or anywhere else
$privateKey = "..."; 

$sdk = Gr4vy\SDK::builder()
    ->setId('example')
    ->setServer('sandbox')
    ->setSecuritySource(Auth::withToken($privateKey))
    ->setMerchantAccountId('default')
    ->build();

$response = $sdk->transactions->list();

if ($response->transactions !== null) {
    // handle response
}
```

<br /><br />
> [!IMPORTANT]
> Please use ` ->setSecuritySource(Auth::withToken($privateKey))` where the documentation mentions `->setSecurity('<YOUR_BEARER_TOKEN_HERE>')`.


<!-- No SDK Example Usage [usage] -->

## Bearer token generation

Alternatively, you can create a token for use with the SDK or with your own client library.

```php
use Gr4vy\Auth;
$token = Auth::getToken($privateKey),
```

> **Note:** This will only create a token once. Use `Auth::withToken` with our SDK to dynamically generate a token
> for every request.


## Embed token generation

Alternatively, you can create a token for use with Embed as follows.

```php
use Gr4vy;
use Gr4vy\Auth;

// Loaded the key from a file, env variable, 
// or anywhere else
$privateKey = "..."; 

$sdk = Gr4vy\SDK::builder()
    ->setId('example')
    ->setServer('sandbox')
    ->setSecuritySource(Auth::withToken($privateKey))
    ->setMerchantAccountId('default')
    ->build();

$response = $sdk->checkout_sessions.create();

$token = $token = Auth::getEmbedToken(
    privateKey: $privateKey,
    expiresIn: '+1 hour',
    checkoutSessionId: $response->checkoutSession->id,
);
```

> **Note:** This will only create a token once. Use `Auth::withToken` with our SDK to dynamically generate a token
> for every request.

## Merchant account ID selection

Depending on the key used, you might need to explicitly define a merchant account ID to use. In our API, 
this uses the `X-GR4VY-MERCHANT-ACCOUNT-ID` header. When using the SDK, you can set the `merchantAccountId`
when initializing the SDK.

```php
$sdk = Gr4vy\SDK::builder()
    ->setId('example')
    ->setServer('sandbox')
    ->setSecuritySource(Auth::withToken($privateKey))
    ->setMerchantAccountId('your-merchant-account-id')
    ->build();
```

## Webhooks verification

The SDK makes it easy to verify that incoming webhooks were actually sent by Gr4vy. Once you have configured the webhook subscription with its corresponding secret, that can be verified the following way:

```php
use Gr4vy;

// Webhook payload and headers
$payload = "your-webhook-payload";
$secret = "your-webhook-secret";
$signatureHeader = "signatures-from-header";
$timestampHeader = "timestamp-from-header";
$timestampTolerance = 300; // optional, in seconds (default: 0)

try {
    Webhooks::verifyWebhook(
        secret: $secret$,
        payload: $payload,
        signatureHeader: $signatureHeader$,
        timestampHeader: $timestampHeader,
        timestampTolerance: $timestampTolerance
    );
}
catch(Throwable $th$) {
    // handle the exception
}
```

### Parameters

- **`payload`**: The raw payload string received in the webhook request.
- **`secret`**: The secret used to sign the webhook. This is provided in your Gr4vy dashboard.
- **`signatureHeader`**: The `X-Gr4vy-Signature` header from the webhook request.
- **`timestampHeader`**: The `X-Gr4vy-Timestamp` header from the webhook request.
- **`timestampTolerance`**: _(Optional)_ The maximum allowed difference (in seconds) between the current time and the timestamp in the webhook. Defaults to `0` (no tolerance).

<!-- Start Authentication [security] -->
## Authentication

### Per-Client Security Schemes

This SDK supports the following security scheme globally:

| Name         | Type | Scheme      |
| ------------ | ---- | ----------- |
| `bearerAuth` | http | HTTP Bearer |

To authenticate with the API the `bearerAuth` parameter must be set when initializing the SDK. For example:
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

$accountUpdaterJobCreate = new Gr4vy\AccountUpdaterJobCreate(
    paymentMethodIds: [
        'ef9496d8-53a5-4aad-8ca2-00eb68334389',
        'f29e886e-93cc-4714-b4a3-12b7a718e595',
    ],
);

$response = $sdk->accountUpdater->jobs->create(
    accountUpdaterJobCreate: $accountUpdaterJobCreate,
    timeoutInSeconds: 1,
    merchantAccountId: 'default'

);

if ($response->accountUpdaterJob !== null) {
    // handle response
}
```
<!-- End Authentication [security] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

<details open>
<summary>Available methods</summary>

### [accountUpdater](docs/sdks/accountupdater/README.md)


#### [accountUpdater->jobs](docs/sdks/jobs/README.md)

* [create](docs/sdks/jobs/README.md#create) - Create account updater job

### [auditLogs](docs/sdks/auditlogs/README.md)

* [list](docs/sdks/auditlogs/README.md#list) - List audit log entries

### [buyers](docs/sdks/buyers/README.md)

* [list](docs/sdks/buyers/README.md#list) - List all buyers
* [create](docs/sdks/buyers/README.md#create) - Add a buyer
* [get](docs/sdks/buyers/README.md#get) - Get a buyer
* [update](docs/sdks/buyers/README.md#update) - Update a buyer
* [delete](docs/sdks/buyers/README.md#delete) - Delete a buyer

#### [buyers->giftCards](docs/sdks/buyersgiftcards/README.md)

* [list](docs/sdks/buyersgiftcards/README.md#list) - List gift cards for a buyer

#### [buyers->paymentMethods](docs/sdks/buyerspaymentmethods/README.md)

* [list](docs/sdks/buyerspaymentmethods/README.md#list) - List payment methods for a buyer

#### [buyers->shippingDetails](docs/sdks/buyersshippingdetails/README.md)

* [create](docs/sdks/buyersshippingdetails/README.md#create) - Add buyer shipping details
* [list](docs/sdks/buyersshippingdetails/README.md#list) - List a buyer's shipping details
* [get](docs/sdks/buyersshippingdetails/README.md#get) - Get buyer shipping details
* [update](docs/sdks/buyersshippingdetails/README.md#update) - Update a buyer's shipping details
* [delete](docs/sdks/buyersshippingdetails/README.md#delete) - Delete a buyer's shipping details

### [cardSchemeDefinitions](docs/sdks/cardschemedefinitions/README.md)

* [list](docs/sdks/cardschemedefinitions/README.md#list) - List card scheme definitions

### [checkoutSessions](docs/sdks/checkoutsessions/README.md)

* [create](docs/sdks/checkoutsessions/README.md#create) - Create checkout session
* [update](docs/sdks/checkoutsessions/README.md#update) - Update checkout session
* [get](docs/sdks/checkoutsessions/README.md#get) - Get checkout session
* [delete](docs/sdks/checkoutsessions/README.md#delete) - Delete checkout session

### [digitalWallets](docs/sdks/digitalwallets/README.md)

* [create](docs/sdks/digitalwallets/README.md#create) - Register digital wallet
* [list](docs/sdks/digitalwallets/README.md#list) - List digital wallets
* [get](docs/sdks/digitalwallets/README.md#get) - Get digital wallet
* [delete](docs/sdks/digitalwallets/README.md#delete) - Delete digital wallet
* [update](docs/sdks/digitalwallets/README.md#update) - Update digital wallet

#### [digitalWallets->domains](docs/sdks/domains/README.md)

* [create](docs/sdks/domains/README.md#create) - Register a digital wallet domain
* [delete](docs/sdks/domains/README.md#delete) - Remove a digital wallet domain

#### [digitalWallets->sessions](docs/sdks/sessions/README.md)

* [googlePay](docs/sdks/sessions/README.md#googlepay) - Create a Google Pay session
* [applePay](docs/sdks/sessions/README.md#applepay) - Create a Apple Pay session
* [clickToPay](docs/sdks/sessions/README.md#clicktopay) - Create a Click to Pay session

### [giftCards](docs/sdks/giftcards/README.md)

* [get](docs/sdks/giftcards/README.md#get) - Get gift card
* [delete](docs/sdks/giftcards/README.md#delete) - Delete a gift card
* [create](docs/sdks/giftcards/README.md#create) - Create gift card
* [list](docs/sdks/giftcards/README.md#list) - List gift cards

#### [giftCards->balances](docs/sdks/balances/README.md)

* [list](docs/sdks/balances/README.md#list) - List gift card balances

### [merchantAccounts](docs/sdks/merchantaccounts/README.md)

* [list](docs/sdks/merchantaccounts/README.md#list) - List all merchant accounts
* [create](docs/sdks/merchantaccounts/README.md#create) - Create a merchant account
* [get](docs/sdks/merchantaccounts/README.md#get) - Get a merchant account
* [update](docs/sdks/merchantaccounts/README.md#update) - Update a merchant account

### [paymentMethods](docs/sdks/paymentmethods/README.md)

* [list](docs/sdks/paymentmethods/README.md#list) - List all payment methods
* [create](docs/sdks/paymentmethods/README.md#create) - Create payment method
* [get](docs/sdks/paymentmethods/README.md#get) - Get payment method
* [delete](docs/sdks/paymentmethods/README.md#delete) - Delete payment method

#### [paymentMethods->networkTokens](docs/sdks/networktokens/README.md)

* [list](docs/sdks/networktokens/README.md#list) - List network tokens
* [create](docs/sdks/networktokens/README.md#create) - Provision network token
* [suspend](docs/sdks/networktokens/README.md#suspend) - Suspend network token
* [resume](docs/sdks/networktokens/README.md#resume) - Resume network token
* [delete](docs/sdks/networktokens/README.md#delete) - Delete network token

#### [paymentMethods->networkTokens->cryptogram](docs/sdks/networktokenscryptogram/README.md)

* [create](docs/sdks/networktokenscryptogram/README.md#create) - Provision network token cryptogram

#### [paymentMethods->paymentServiceTokens](docs/sdks/paymentservicetokens/README.md)

* [list](docs/sdks/paymentservicetokens/README.md#list) - List payment service tokens
* [create](docs/sdks/paymentservicetokens/README.md#create) - Create payment service token
* [delete](docs/sdks/paymentservicetokens/README.md#delete) - Delete payment service token

### [paymentOptions](docs/sdks/paymentoptions/README.md)

* [list](docs/sdks/paymentoptions/README.md#list) - List payment options

### [paymentServiceDefinitions](docs/sdks/paymentservicedefinitions/README.md)

* [list](docs/sdks/paymentservicedefinitions/README.md#list) - List payment service definitions
* [get](docs/sdks/paymentservicedefinitions/README.md#get) - Get a payment service definition
* [session](docs/sdks/paymentservicedefinitions/README.md#session) - Create a session for apayment service definition

### [paymentServices](docs/sdks/paymentservices/README.md)

* [list](docs/sdks/paymentservices/README.md#list) - List payment services
* [create](docs/sdks/paymentservices/README.md#create) - Update a configured payment service
* [get](docs/sdks/paymentservices/README.md#get) - Get payment service
* [update](docs/sdks/paymentservices/README.md#update) - Configure a payment service
* [delete](docs/sdks/paymentservices/README.md#delete) - Delete a configured payment service
* [verify](docs/sdks/paymentservices/README.md#verify) - Verify payment service credentials
* [session](docs/sdks/paymentservices/README.md#session) - Create a session for apayment service definition

### [payouts](docs/sdks/payouts/README.md)

* [list](docs/sdks/payouts/README.md#list) - List payouts created.
* [create](docs/sdks/payouts/README.md#create) - Create a payout.
* [get](docs/sdks/payouts/README.md#get) - Get a payout.

### [refunds](docs/sdks/refunds/README.md)

* [get](docs/sdks/refunds/README.md#get) - Get refund


### [transactions](docs/sdks/transactions/README.md)

* [list](docs/sdks/transactions/README.md#list) - List transactions
* [create](docs/sdks/transactions/README.md#create) - Create transaction
* [get](docs/sdks/transactions/README.md#get) - Get transaction
* [capture](docs/sdks/transactions/README.md#capture) - Capture transaction
* [void](docs/sdks/transactions/README.md#void) - Void transaction
* [summary](docs/sdks/transactions/README.md#summary) - Get transaction summary
* [sync](docs/sdks/transactions/README.md#sync) - Sync transaction

#### [transactions->refunds](docs/sdks/transactionsrefunds/README.md)

* [list](docs/sdks/transactionsrefunds/README.md#list) - List transaction refunds
* [create](docs/sdks/transactionsrefunds/README.md#create) - Create transaction refund
* [get](docs/sdks/transactionsrefunds/README.md#get) - Get transaction refund

#### [transactions->refunds->all](docs/sdks/all/README.md)

* [create](docs/sdks/all/README.md#create) - Create batch transaction refund

</details>
<!-- End Available Resources and Operations [operations] -->

<!-- Start Global Parameters [global-parameters] -->
## Global Parameters

A parameter is configured globally. This parameter may be set on the SDK client instance itself during initialization. When configured as an option during SDK initialization, This global value will be used as the default on the operations that use it. When such operations are called, there is a place in each to override the global value, if needed.

For example, you can set `merchant_account_id` to `'default'` at SDK initialization and then you do not have to pass the same value on calls to operations like `get`. But if you want to do so you may, which will locally override the global setting. See the example code below for a demonstration.


### Available Globals

The following global parameter is available.

| Name              | Type   | Description                                             |
| ----------------- | ------ | ------------------------------------------------------- |
| merchantAccountId | string | The ID of the merchant account to use for this request. |

### Example

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



$response = $sdk->merchantAccounts->get(
    merchantAccountId: 'merchant-12345'
);

if ($response->merchantAccount !== null) {
    // handle response
}
```
<!-- End Global Parameters [global-parameters] -->

<!-- Start Pagination [pagination] -->
## Pagination

Some of the endpoints in this SDK support pagination. To use pagination, you make your SDK calls as usual, but the
returned object will be a `Generator` instead of an individual response.

Working with generators is as simple as iterating over the responses in a `foreach` loop, and you can see an example below:
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

$request = new Gr4vy\ListBuyersRequest(
    cursor: 'ZXhhbXBsZTE',
    search: 'John',
    externalIdentifier: 'buyer-12345',
);

$responses = $sdk->buyers->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```
<!-- End Pagination [pagination] -->

<!-- Start Retries [retries] -->
## Retries

Some of the endpoints in this SDK support retries. If you use the SDK without any configuration, it will fall back to the default retry strategy provided by the API. However, the default retry strategy can be overridden on a per-operation basis, or across the entire SDK.

To change the default retry strategy for a single API call, simply provide an `Options` object built with a `RetryConfig` object to the call:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;
use Gr4vy\Utils\Retry;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setMerchantAccountId('default')
    ->build();

$request = new Gr4vy\ListBuyersRequest(
    cursor: 'ZXhhbXBsZTE',
    search: 'John',
    externalIdentifier: 'buyer-12345',
);

$responses = $sdk->buyers->list(
    request: $request,
    options: Utils\Options->builder()->setRetryConfig(
        new Retry\RetryConfigBackoff(
            initialInterval: 1,
            maxInterval:     50,
            exponent:        1.1,
            maxElapsedTime:  100,
            retryConnectionErrors: false,
        ))->build()
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

If you'd like to override the default retry strategy for all operations that support retries, you can pass a `RetryConfig` object to the `SDKBuilder->setRetryConfig` function when initializing the SDK:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;
use Gr4vy\Utils\Retry;

$sdk = Gr4vy\SDK::builder()
    ->setRetryConfig(
        new Retry\RetryConfigBackoff(
            initialInterval: 1,
            maxInterval:     50,
            exponent:        1.1,
            maxElapsedTime:  100,
            retryConnectionErrors: false,
        )
  )
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setMerchantAccountId('default')
    ->build();

$request = new Gr4vy\ListBuyersRequest(
    cursor: 'ZXhhbXBsZTE',
    search: 'John',
    externalIdentifier: 'buyer-12345',
);

$responses = $sdk->buyers->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```
<!-- End Retries [retries] -->

<!-- Start Error Handling [errors] -->
## Error Handling

Handling errors in this SDK should largely match your expectations. All operations return a response object or throw an exception.

By default an API error will raise a `errors\APIException` exception, which has the following properties:

| Property       | Type                                    | Description           |
|----------------|-----------------------------------------|-----------------------|
| `$message`     | *string*                                | The error message     |
| `$statusCode`  | *int*                                   | The HTTP status code  |
| `$rawResponse` | *?\Psr\Http\Message\ResponseInterface*  | The raw HTTP response |
| `$body`        | *string*                                | The response content  |

When custom error responses are specified for an operation, the SDK may also throw their associated exception. You can refer to respective *Errors* tables in SDK docs for more details on possible exception types for each operation. For example, the `create` method throws the following exceptions:

| Error Type                 | Status Code | Content Type     |
| -------------------------- | ----------- | ---------------- |
| errors\Error400            | 400         | application/json |
| errors\Error401            | 401         | application/json |
| errors\Error403            | 403         | application/json |
| errors\Error404            | 404         | application/json |
| errors\Error405            | 405         | application/json |
| errors\Error409            | 409         | application/json |
| errors\HTTPValidationError | 422         | application/json |
| errors\Error425            | 425         | application/json |
| errors\Error429            | 429         | application/json |
| errors\Error500            | 500         | application/json |
| errors\Error502            | 502         | application/json |
| errors\Error504            | 504         | application/json |
| errors\APIException        | 4XX, 5XX    | \*/\*            |

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;
use Gr4vy\errors;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setMerchantAccountId('default')
    ->build();

try {
    $accountUpdaterJobCreate = new Gr4vy\AccountUpdaterJobCreate(
        paymentMethodIds: [
            'ef9496d8-53a5-4aad-8ca2-00eb68334389',
            'f29e886e-93cc-4714-b4a3-12b7a718e595',
        ],
    );

    $response = $sdk->accountUpdater->jobs->create(
        accountUpdaterJobCreate: $accountUpdaterJobCreate,
        timeoutInSeconds: 1,
        merchantAccountId: 'default'

    );

    if ($response->accountUpdaterJob !== null) {
        // handle response
    }
} catch (errors\Error400Throwable $e) {
    // handle $e->$container data
    throw $e;
} catch (errors\Error401Throwable $e) {
    // handle $e->$container data
    throw $e;
} catch (errors\Error403Throwable $e) {
    // handle $e->$container data
    throw $e;
} catch (errors\Error404Throwable $e) {
    // handle $e->$container data
    throw $e;
} catch (errors\Error405Throwable $e) {
    // handle $e->$container data
    throw $e;
} catch (errors\Error409Throwable $e) {
    // handle $e->$container data
    throw $e;
} catch (errors\HTTPValidationErrorThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (errors\Error425Throwable $e) {
    // handle $e->$container data
    throw $e;
} catch (errors\Error429Throwable $e) {
    // handle $e->$container data
    throw $e;
} catch (errors\Error500Throwable $e) {
    // handle $e->$container data
    throw $e;
} catch (errors\Error502Throwable $e) {
    // handle $e->$container data
    throw $e;
} catch (errors\Error504Throwable $e) {
    // handle $e->$container data
    throw $e;
} catch (errors\APIException $e) {
    // handle default exception
    throw $e;
}
```
<!-- End Error Handling [errors] -->

<!-- Start Server Selection [server] -->
## Server Selection

### Select Server by Name

You can override the default server globally using the `setServer(string $serverName)` builder method when initializing the SDK client instance. The selected server will then be used as the default on the operations that use it. This table lists the names associated with the available servers:

| Name         | Server                               | Variables | Description |
| ------------ | ------------------------------------ | --------- | ----------- |
| `production` | `https://api.{id}.gr4vy.app`         | `id`      |             |
| `sandbox`    | `https://api.sandbox.{id}.gr4vy.app` | `id`      |             |

If the selected server has variables, you may override its default values using the associated builder method(s):

| Variable | BuilderMethod      | Default     | Description                            |
| -------- | ------------------ | ----------- | -------------------------------------- |
| `id`     | `setId(string id)` | `"example"` | The subdomain for your Gr4vy instance. |

#### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setServer('sandbox')
    ->setId('<id>')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setMerchantAccountId('default')
    ->build();

$accountUpdaterJobCreate = new Gr4vy\AccountUpdaterJobCreate(
    paymentMethodIds: [
        'ef9496d8-53a5-4aad-8ca2-00eb68334389',
        'f29e886e-93cc-4714-b4a3-12b7a718e595',
    ],
);

$response = $sdk->accountUpdater->jobs->create(
    accountUpdaterJobCreate: $accountUpdaterJobCreate,
    timeoutInSeconds: 1,
    merchantAccountId: 'default'

);

if ($response->accountUpdaterJob !== null) {
    // handle response
}
```

### Override Server URL Per-Client

The default server can also be overridden globally using the `setServerUrl(string $serverUrl)` builder method when initializing the SDK client instance. For example:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setServerURL('https://api.example.gr4vy.app')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setMerchantAccountId('default')
    ->build();

$accountUpdaterJobCreate = new Gr4vy\AccountUpdaterJobCreate(
    paymentMethodIds: [
        'ef9496d8-53a5-4aad-8ca2-00eb68334389',
        'f29e886e-93cc-4714-b4a3-12b7a718e595',
    ],
);

$response = $sdk->accountUpdater->jobs->create(
    accountUpdaterJobCreate: $accountUpdaterJobCreate,
    timeoutInSeconds: 1,
    merchantAccountId: 'default'

);

if ($response->accountUpdaterJob !== null) {
    // handle response
}
```
<!-- End Server Selection [server] -->

<!-- Placeholder for Future Speakeasy SDK Sections -->

# Development

## Testing

To run the tests, install PHP and compose, ensure to download the `private_key.pem` for the test environment, and run the following.

```sh
composer install
composer test
```

Additionally, the following tools can be used to lint the code.

```sh
# autoformat the code
vendor/bin/pint tests src --repair 
# static code analysis
vendor/bin/phpstan analyse src tests --level 7 --memory-limit 1G --no-progress --error-format=table
```

## Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

## Contributions

While we value open-source contributions to this SDK, this library is generated programmatically. Any manual changes added to internal files will be overwritten on the next generation. 
We look forward to hearing your feedback. Feel free to open a PR or an issue with a proof of concept and we'll do our best to include it in a future release. 

### SDK Created by [Speakeasy](https://www.speakeasy.com/?utm_source=gr4vy/gr4vy-php&utm_campaign=php)
