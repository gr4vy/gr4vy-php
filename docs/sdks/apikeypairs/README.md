# ApiKeyPairs

## Overview

### Available Operations

* [list](#list) - List all API key pairs
* [create](#create) - Create an API key pair
* [get](#get) - Get an API key pair
* [update](#update) - Update an API key pair
* [delete](#delete) - Delete an API key pair

## list

List all API key pairs.

### Example Usage

<!-- UsageSnippet language="php" operationID="list_api_key_pairs" method="get" path="/api-key-pairs" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$responses = $sdk->apiKeyPairs->list(
    limit: 20
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                      | Type                                           | Required                                       | Description                                    | Example                                        |
| ---------------------------------------------- | ---------------------------------------------- | ---------------------------------------------- | ---------------------------------------------- | ---------------------------------------------- |
| `cursor`                                       | *?string*                                      | :heavy_minus_sign:                             | A pointer to the page of results to return.    | ZXhhbXBsZTE                                    |
| `limit`                                        | *?int*                                         | :heavy_minus_sign:                             | The maximum number of items that are returned. | 20                                             |

### Response

**[?ListApiKeyPairsResponse](../../ListApiKeyPairsResponse.md)**

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

## create

Create a new API key pair.

### Example Usage

<!-- UsageSnippet language="php" operationID="create_api_key_pair" method="post" path="/api-key-pairs" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Gr4vy\APIKeyPairCreate(
    displayName: 'Production key',
    roleIds: [
        '8f4b8c1a-1b2c-4d3e-9f5a-6b7c8d9e0f1a',
    ],
);

$response = $sdk->apiKeyPairs->create(
    request: $request
);

if ($response->apiKeyPair !== null) {
    // handle response
}
```

### Parameters

| Parameter                                           | Type                                                | Required                                            | Description                                         |
| --------------------------------------------------- | --------------------------------------------------- | --------------------------------------------------- | --------------------------------------------------- |
| `$request`                                          | [Gr4vy\APIKeyPairCreate](../../APIKeyPairCreate.md) | :heavy_check_mark:                                  | The request object to use for the request.          |

### Response

**[?CreateApiKeyPairResponse](../../CreateApiKeyPairResponse.md)**

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

## get

Fetches an API key pair by its ID.

### Example Usage

<!-- UsageSnippet language="php" operationID="get_api_key_pair" method="get" path="/api-key-pairs/{api_key_pair_id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->apiKeyPairs->get(
    apiKeyPairId: 'fe26475d-ec3e-4884-9553-f7356683f7f9'
);

if ($response->apiKeyPair !== null) {
    // handle response
}
```

### Parameters

| Parameter                            | Type                                 | Required                             | Description                          | Example                              |
| ------------------------------------ | ------------------------------------ | ------------------------------------ | ------------------------------------ | ------------------------------------ |
| `apiKeyPairId`                       | *string*                             | :heavy_check_mark:                   | The ID of the API key pair.          | fe26475d-ec3e-4884-9553-f7356683f7f9 |

### Response

**[?GetApiKeyPairResponse](../../GetApiKeyPairResponse.md)**

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

## update

Updates an API key pair.

### Example Usage

<!-- UsageSnippet language="php" operationID="update_api_key_pair" method="put" path="/api-key-pairs/{api_key_pair_id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$apiKeyPairUpdate = new Gr4vy\APIKeyPairUpdate();

$response = $sdk->apiKeyPairs->update(
    apiKeyPairId: 'fe26475d-ec3e-4884-9553-f7356683f7f9',
    apiKeyPairUpdate: $apiKeyPairUpdate

);

if ($response->apiKeyPair !== null) {
    // handle response
}
```

### Parameters

| Parameter                                     | Type                                          | Required                                      | Description                                   | Example                                       |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| `apiKeyPairId`                                | *string*                                      | :heavy_check_mark:                            | The ID of the API key pair.                   | fe26475d-ec3e-4884-9553-f7356683f7f9          |
| `apiKeyPairUpdate`                            | [APIKeyPairUpdate](../../APIKeyPairUpdate.md) | :heavy_check_mark:                            | N/A                                           |                                               |

### Response

**[?UpdateApiKeyPairResponse](../../UpdateApiKeyPairResponse.md)**

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

## delete

Permanently removes an API key pair.

### Example Usage

<!-- UsageSnippet language="php" operationID="delete_api_key_pair" method="delete" path="/api-key-pairs/{api_key_pair_id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->apiKeyPairs->delete(
    apiKeyPairId: 'fe26475d-ec3e-4884-9553-f7356683f7f9'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                            | Type                                 | Required                             | Description                          | Example                              |
| ------------------------------------ | ------------------------------------ | ------------------------------------ | ------------------------------------ | ------------------------------------ |
| `apiKeyPairId`                       | *string*                             | :heavy_check_mark:                   | The ID of the API key pair.          | fe26475d-ec3e-4884-9553-f7356683f7f9 |

### Response

**[?DeleteApiKeyPairResponse](../../DeleteApiKeyPairResponse.md)**

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