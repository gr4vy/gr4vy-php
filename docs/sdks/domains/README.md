# Domains
(*digitalWallets->domains*)

## Overview

### Available Operations

* [create](#create) - Register a digital wallet domain
* [delete](#delete) - Remove a digital wallet domain

## create

Register a digital wallet domain (Apple Pay only).

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

$digitalWalletDomain = new Gr4vy\DigitalWalletDomain(
    domainName: 'example.com',
);

$response = $sdk->digitalWallets->domains->create(
    digitalWalletId: '1808f5e6-b49c-4db9-94fa-22371ea352f5',
    digitalWalletDomain: $digitalWalletDomain,
    applicationName: 'core-api',
    merchantAccountId: 'default'

);

if ($response->any !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `digitalWalletId`                                       | *string*                                                | :heavy_check_mark:                                      | The ID of the digital wallet to remove a domain for.    | 1808f5e6-b49c-4db9-94fa-22371ea352f5                    |
| `digitalWalletDomain`                                   | [DigitalWalletDomain](../../DigitalWalletDomain.md)     | :heavy_check_mark:                                      | N/A                                                     |                                                         |
| `applicationName`                                       | *?string*                                               | :heavy_minus_sign:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?RegisterDigitalWalletDomainResponse](../../RegisterDigitalWalletDomainResponse.md)**

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

Remove a digital wallet domain (Apple Pay only).

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

$digitalWalletDomain = new Gr4vy\DigitalWalletDomain(
    domainName: 'example.com',
);

$response = $sdk->digitalWallets->domains->delete(
    digitalWalletId: '',
    digitalWalletDomain: $digitalWalletDomain,
    applicationName: 'core-api',
    merchantAccountId: 'default'

);

if ($response->any !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `digitalWalletId`                                       | *string*                                                | :heavy_check_mark:                                      | N/A                                                     |                                                         |
| `digitalWalletDomain`                                   | [DigitalWalletDomain](../../DigitalWalletDomain.md)     | :heavy_check_mark:                                      | N/A                                                     |                                                         |
| `applicationName`                                       | *?string*                                               | :heavy_minus_sign:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?UnregisterDigitalWalletDomainResponse](../../UnregisterDigitalWalletDomainResponse.md)**

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