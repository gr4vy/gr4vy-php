# Roles

## Overview

### Available Operations

* [list](#list) - List all roles

## list

List all roles available in the instance.

### Example Usage

<!-- UsageSnippet language="php" operationID="list_roles" method="get" path="/roles" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$responses = $sdk->roles->list(
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

**[?ListRolesResponse](../../ListRolesResponse.md)**

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