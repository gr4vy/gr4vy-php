# Buyers
(*buyers*)

## Overview

### Available Operations

* [list](#list) - List all buyers
* [create](#create) - Add a buyer
* [get](#get) - Get a buyer
* [update](#update) - Update a buyer
* [delete](#delete) - Delete a buyer

## list

List all buyers or search for a specific buyer.

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

### Parameters

| Parameter                                             | Type                                                  | Required                                              | Description                                           |
| ----------------------------------------------------- | ----------------------------------------------------- | ----------------------------------------------------- | ----------------------------------------------------- |
| `$request`                                            | [Gr4vy\ListBuyersRequest](../../ListBuyersRequest.md) | :heavy_check_mark:                                    | The request object to use for the request.            |

### Response

**[?ListBuyersResponse](../../ListBuyersResponse.md)**

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

Create a new buyer record.

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

$buyerCreate = new Gr4vy\BuyerCreate(
    displayName: 'John Doe',
    externalIdentifier: 'buyer-12345',
    billingDetails: new Gr4vy\BillingDetailsInput(
        firstName: 'John',
        lastName: 'Doe',
        emailAddress: 'john@example.com',
        phoneNumber: '+1234567890',
        address: new Gr4vy\Address(
            city: 'San Jose',
            country: 'US',
            postalCode: '94560',
            state: 'California',
            stateCode: 'US-CA',
            houseNumberOrName: '10',
            line1: 'Stafford Appartments',
            line2: '29th Street',
            organization: 'Gr4vy',
        ),
        taxId: new Gr4vy\TaxId(
            value: '12345678931',
            kind: Gr4vy\TaxIdKind::CaPstMb,
        ),
    ),
);

$response = $sdk->buyers->create(
    buyerCreate: $buyerCreate,
    timeoutInSeconds: 1,
    merchantAccountId: 'default'

);

if ($response->buyer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `buyerCreate`                                           | [BuyerCreate](../../BuyerCreate.md)                     | :heavy_check_mark:                                      | N/A                                                     |                                                         |
| `timeoutInSeconds`                                      | *?float*                                                | :heavy_minus_sign:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?AddBuyerResponse](../../AddBuyerResponse.md)**

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

Fetches a buyer by its ID.

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



$response = $sdk->buyers->get(
    buyerId: 'fe26475d-ec3e-4884-9553-f7356683f7f9',
    merchantAccountId: 'default'

);

if ($response->buyer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `buyerId`                                               | *string*                                                | :heavy_check_mark:                                      | The ID of the buyer to retrieve.                        | fe26475d-ec3e-4884-9553-f7356683f7f9                    |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?GetBuyerResponse](../../GetBuyerResponse.md)**

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

Updates a buyer record.

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

$buyerUpdate = new Gr4vy\BuyerUpdate(
    displayName: 'John Doe',
    externalIdentifier: 'buyer-12345',
    billingDetails: new Gr4vy\BillingDetailsInput(
        firstName: 'John',
        lastName: 'Doe',
        emailAddress: 'john@example.com',
        phoneNumber: '+1234567890',
        address: new Gr4vy\Address(
            city: 'San Jose',
            country: 'US',
            postalCode: '94560',
            state: 'California',
            stateCode: 'US-CA',
            houseNumberOrName: '10',
            line1: 'Stafford Appartments',
            line2: '29th Street',
            organization: 'Gr4vy',
        ),
        taxId: new Gr4vy\TaxId(
            value: '12345678931',
            kind: Gr4vy\TaxIdKind::AuAbn,
        ),
    ),
);

$response = $sdk->buyers->update(
    buyerId: 'fe26475d-ec3e-4884-9553-f7356683f7f9',
    buyerUpdate: $buyerUpdate,
    timeoutInSeconds: 1,
    merchantAccountId: 'default'

);

if ($response->buyer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `buyerId`                                               | *string*                                                | :heavy_check_mark:                                      | The ID of the buyer to edit.                            | fe26475d-ec3e-4884-9553-f7356683f7f9                    |
| `buyerUpdate`                                           | [BuyerUpdate](../../BuyerUpdate.md)                     | :heavy_check_mark:                                      | N/A                                                     |                                                         |
| `timeoutInSeconds`                                      | *?float*                                                | :heavy_minus_sign:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?UpdateBuyerResponse](../../UpdateBuyerResponse.md)**

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

Permanently removes a buyer record.

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



$response = $sdk->buyers->delete(
    buyerId: 'fe26475d-ec3e-4884-9553-f7356683f7f9',
    timeoutInSeconds: 1,
    merchantAccountId: 'default'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `buyerId`                                               | *string*                                                | :heavy_check_mark:                                      | The ID of the buyer to delete.                          | fe26475d-ec3e-4884-9553-f7356683f7f9                    |
| `timeoutInSeconds`                                      | *?float*                                                | :heavy_minus_sign:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?DeleteBuyerResponse](../../DeleteBuyerResponse.md)**

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