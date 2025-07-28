# MerchantAccountsSDK
(*merchantAccounts*)

## Overview

### Available Operations

* [list](#list) - List all merchant accounts
* [create](#create) - Create a merchant account
* [get](#get) - Get a merchant account
* [update](#update) - Update a merchant account

## list

List all merchant accounts in an instance.

### Example Usage

<!-- UsageSnippet language="php" operationID="list_merchant_accounts" method="get" path="/merchant-accounts" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$responses = $sdk->merchantAccounts->list(
    cursor: 'ZXhhbXBsZTE',
    limit: 20,
    search: 'merchant-12345'

);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                         | Type                                              | Required                                          | Description                                       | Example                                           |
| ------------------------------------------------- | ------------------------------------------------- | ------------------------------------------------- | ------------------------------------------------- | ------------------------------------------------- |
| `cursor`                                          | *?string*                                         | :heavy_minus_sign:                                | A pointer to the page of results to return.       | ZXhhbXBsZTE                                       |
| `limit`                                           | *?int*                                            | :heavy_minus_sign:                                | The maximum number of items that are at returned. | 20                                                |
| `search`                                          | *?string*                                         | :heavy_minus_sign:                                | The search term to filter merchant accounts by.   | merchant-12345                                    |

### Response

**[?ListMerchantAccountsResponse](../../ListMerchantAccountsResponse.md)**

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

Create a new merchant account in an instance.

### Example Usage

<!-- UsageSnippet language="php" operationID="create_merchant_account" method="post" path="/merchant-accounts" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Gr4vy\MerchantAccountCreate(
    accountUpdaterEnabled: true,
    id: 'merchant-12345',
    displayName: 'Example',
);

$response = $sdk->merchantAccounts->create(
    request: $request
);

if ($response->merchantAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                     | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `$request`                                                    | [Gr4vy\MerchantAccountCreate](../../MerchantAccountCreate.md) | :heavy_check_mark:                                            | The request object to use for the request.                    |

### Response

**[?CreateMerchantAccountResponse](../../CreateMerchantAccountResponse.md)**

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

Get info about a merchant account in an instance.

### Example Usage

<!-- UsageSnippet language="php" operationID="get_merchant_account" method="get" path="/merchant-accounts/{merchant_account_id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->merchantAccounts->get(
    merchantAccountId: 'merchant-12345'
);

if ($response->merchantAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                      | Type                           | Required                       | Description                    | Example                        |
| ------------------------------ | ------------------------------ | ------------------------------ | ------------------------------ | ------------------------------ |
| `merchantAccountId`            | *string*                       | :heavy_check_mark:             | The ID of the merchant account | merchant-12345                 |

### Response

**[?GetMerchantAccountResponse](../../GetMerchantAccountResponse.md)**

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

## update

Update info for a merchant account in an instance.

### Example Usage

<!-- UsageSnippet language="php" operationID="update_merchant_account" method="put" path="/merchant-accounts/{merchant_account_id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$merchantAccountUpdate = new Gr4vy\MerchantAccountUpdate(
    accountUpdaterEnabled: true,
);

$response = $sdk->merchantAccounts->update(
    merchantAccountId: 'merchant-12345',
    merchantAccountUpdate: $merchantAccountUpdate

);

if ($response->merchantAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `merchantAccountId`                                     | *string*                                                | :heavy_check_mark:                                      | The ID of the merchant account                          | merchant-12345                                          |
| `merchantAccountUpdate`                                 | [MerchantAccountUpdate](../../MerchantAccountUpdate.md) | :heavy_check_mark:                                      | N/A                                                     |                                                         |

### Response

**[?UpdateMerchantAccountResponse](../../UpdateMerchantAccountResponse.md)**

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