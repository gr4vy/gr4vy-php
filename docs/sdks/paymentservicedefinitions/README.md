# PaymentServiceDefinitions
(*paymentServiceDefinitions*)

## Overview

### Available Operations

* [list](#list) - List payment service definitions
* [get](#get) - Get a payment service definition
* [session](#session) - Create a session for apayment service definition

## list

List the definitions of each payment service that can be configured.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$responses = $sdk->paymentServiceDefinitions->list(
    cursor: 'ZXhhbXBsZTE',
    limit: 20

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

### Response

**[?ListPaymentServiceDefinitionsResponse](../../ListPaymentServiceDefinitionsResponse.md)**

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

Get the definition of a payment service that can be configured.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->paymentServiceDefinitions->get(
    paymentServiceDefinitionId: 'adyen-ideal'
);

if ($response->paymentServiceDefinition !== null) {
    // handle response
}
```

### Parameters

| Parameter                    | Type                         | Required                     | Description                  | Example                      |
| ---------------------------- | ---------------------------- | ---------------------------- | ---------------------------- | ---------------------------- |
| `paymentServiceDefinitionId` | *string*                     | :heavy_check_mark:           | N/A                          | adyen-ideal                  |

### Response

**[?GetPaymentServiceDefinitionResponse](../../GetPaymentServiceDefinitionResponse.md)**

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

## session

Creates a session for a payment service that supports sessions.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->paymentServiceDefinitions->session(
    paymentServiceDefinitionId: 'adyen-ideal',
    requestBody: [
        'key' => '<value>',
    ]

);

if ($response->createSession !== null) {
    // handle response
}
```

### Parameters

| Parameter                    | Type                         | Required                     | Description                  | Example                      |
| ---------------------------- | ---------------------------- | ---------------------------- | ---------------------------- | ---------------------------- |
| `paymentServiceDefinitionId` | *string*                     | :heavy_check_mark:           | N/A                          | adyen-ideal                  |
| `requestBody`                | array<string, *mixed*>       | :heavy_check_mark:           | N/A                          |                              |

### Response

**[?CreatePaymentServiceDefinitionSessionResponse](../../CreatePaymentServiceDefinitionSessionResponse.md)**

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