# MerchantAccounts.ThreeDsConfiguration

## Overview

### Available Operations

* [create](#create) - Create 3DS configuration for merchant
* [list](#list) - List 3DS configurations for merchant
* [update](#update) - Edit 3DS configuration
* [delete](#delete) - Delete 3DS configuration for a merchant

## create

Create a new 3DS configuration for a merchant account.

### Example Usage

<!-- UsageSnippet language="php" operationID="create_three_ds_configuration" method="post" path="/merchant-accounts/{merchant_account_id}/three-ds-configurations" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$merchantAccountThreeDSConfigurationCreate = new Gr4vy\MerchantAccountThreeDSConfigurationCreate(
    merchantAcquirerBin: '516327',
    merchantAcquirerId: '123456789012345',
    merchantName: 'Acme Inc.',
    merchantCountryCode: '840',
    merchantCategoryCode: '1234',
    merchantUrl: 'https://example.com',
    scheme: '<value>',
    metadata: [
        'key' => '<value>',
        'key1' => '<value>',
        'key2' => '<value>',
    ],
);

$response = $sdk->merchantAccounts->threeDsConfiguration->create(
    merchantAccountId: 'merchant-12345',
    merchantAccountThreeDSConfigurationCreate: $merchantAccountThreeDSConfigurationCreate

);

if ($response->merchantAccountThreeDSConfiguration !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     | Example                                                                                         |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `merchantAccountId`                                                                             | *string*                                                                                        | :heavy_check_mark:                                                                              | The ID of the merchant account.                                                                 | merchant-12345                                                                                  |
| `merchantAccountThreeDSConfigurationCreate`                                                     | [MerchantAccountThreeDSConfigurationCreate](../../MerchantAccountThreeDSConfigurationCreate.md) | :heavy_check_mark:                                                                              | N/A                                                                                             |                                                                                                 |

### Response

**[?CreateThreeDsConfigurationResponse](../../CreateThreeDsConfigurationResponse.md)**

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

List all 3DS configurations for a merchant account.

### Example Usage

<!-- UsageSnippet language="php" operationID="list_three_ds_configurations" method="get" path="/merchant-accounts/{merchant_account_id}/three-ds-configurations" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->merchantAccounts->threeDsConfiguration->list(
    merchantAccountId: 'merchant-12345'
);

if ($response->merchantAccountThreeDSConfigurations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                           | Type                                                                | Required                                                            | Description                                                         | Example                                                             |
| ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- |
| `merchantAccountId`                                                 | *string*                                                            | :heavy_check_mark:                                                  | The ID of the merchant account.                                     | merchant-12345                                                      |
| `currency`                                                          | *?string*                                                           | :heavy_minus_sign:                                                  | ISO 4217 currency code (3 characters) to filter 3DS configurations. | USD                                                                 |

### Response

**[?ListThreeDsConfigurationsResponse](../../ListThreeDsConfigurationsResponse.md)**

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

Update the 3DS configuration for a merchant account.

### Example Usage

<!-- UsageSnippet language="php" operationID="edit_three_ds_configuration" method="put" path="/merchant-accounts/{merchant_account_id}/three-ds-configurations/{three_ds_configuration_id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$merchantAccountThreeDSConfigurationUpdate = new Gr4vy\MerchantAccountThreeDSConfigurationUpdate();

$response = $sdk->merchantAccounts->threeDsConfiguration->update(
    merchantAccountId: 'merchant-12345',
    threeDsConfigurationId: '1808f5e6-b49c-4db9-94fa-22371ea352f5',
    merchantAccountThreeDSConfigurationUpdate: $merchantAccountThreeDSConfigurationUpdate

);

if ($response->merchantAccountThreeDSConfiguration !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     | Example                                                                                         |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `merchantAccountId`                                                                             | *string*                                                                                        | :heavy_check_mark:                                                                              | The ID of the merchant account.                                                                 | merchant-12345                                                                                  |
| `threeDsConfigurationId`                                                                        | *string*                                                                                        | :heavy_check_mark:                                                                              | The ID of the 3DS configuration for a merchant account.                                         | 1808f5e6-b49c-4db9-94fa-22371ea352f5                                                            |
| `merchantAccountThreeDSConfigurationUpdate`                                                     | [MerchantAccountThreeDSConfigurationUpdate](../../MerchantAccountThreeDSConfigurationUpdate.md) | :heavy_check_mark:                                                                              | N/A                                                                                             |                                                                                                 |

### Response

**[?EditThreeDsConfigurationResponse](../../EditThreeDsConfigurationResponse.md)**

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

Delete a 3DS configuration for a merchant account.

### Example Usage

<!-- UsageSnippet language="php" operationID="delete_three_ds_configuration" method="delete" path="/merchant-accounts/{merchant_account_id}/three-ds-configurations/{three_ds_configuration_id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->merchantAccounts->threeDsConfiguration->delete(
    merchantAccountId: 'merchant-12345',
    threeDsConfigurationId: '1808f5e6-b49c-4db9-94fa-22371ea352f5'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `merchantAccountId`                                     | *string*                                                | :heavy_check_mark:                                      | The ID of the merchant account.                         | merchant-12345                                          |
| `threeDsConfigurationId`                                | *string*                                                | :heavy_check_mark:                                      | The ID of the 3DS configuration for a merchant account. | 1808f5e6-b49c-4db9-94fa-22371ea352f5                    |

### Response

**[?DeleteThreeDsConfigurationResponse](../../DeleteThreeDsConfigurationResponse.md)**

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