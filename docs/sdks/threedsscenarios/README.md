# ThreeDsScenarios

## Overview

### Available Operations

* [create](#create) - Create a 3DS scenario
* [list](#list) - List 3DS scenario
* [update](#update) - Update a 3DS scenario
* [delete](#delete) - Delete a 3DS scenario

## create

Create a new 3DS scenario for a merchant account. Only available in sandbox environments.

### Example Usage

<!-- UsageSnippet language="php" operationID="create_three_ds_scenario" method="post" path="/three-ds-scenarios" -->
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

$threeDSecureScenarioCreate = new Gr4vy\ThreeDSecureScenarioCreate(
    conditions: new Gr4vy\ThreeDSecureScenarioConditions(),
    outcome: new Gr4vy\ThreeDSecureScenarioOutcome(
        version: '2.2.0',
        authentication: new Gr4vy\ThreeDSecureScenarioOutcomeAuthentication(
            transactionStatus: 'Y',
        ),
    ),
);

$response = $sdk->threeDsScenarios->create(
    threeDSecureScenarioCreate: $threeDSecureScenarioCreate
);

if ($response->threeDSecureScenario !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                         | Type                                                              | Required                                                          | Description                                                       | Example                                                           |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `threeDSecureScenarioCreate`                                      | [ThreeDSecureScenarioCreate](../../ThreeDSecureScenarioCreate.md) | :heavy_check_mark:                                                | N/A                                                               |                                                                   |
| `merchantAccountId`                                               | *?string*                                                         | :heavy_minus_sign:                                                | The ID of the merchant account to use for this request.           | default                                                           |

### Response

**[?CreateThreeDsScenarioResponse](../../CreateThreeDsScenarioResponse.md)**

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

List all 3DS scenarios for a merchant account. Only available in sandbox environments.

### Example Usage

<!-- UsageSnippet language="php" operationID="get_three_ds_scenario" method="get" path="/three-ds-scenarios" -->
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



$responses = $sdk->threeDsScenarios->list(
    limit: 20
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `cursor`                                                | *?string*                                               | :heavy_minus_sign:                                      | A pointer to the page of results to return.             | ZXhhbXBsZTE                                             |
| `limit`                                                 | *?int*                                                  | :heavy_minus_sign:                                      | The maximum number of items that are at returned.       | 20                                                      |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?GetThreeDsScenarioResponse](../../GetThreeDsScenarioResponse.md)**

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

Update a 3DS scenario. Only available in sandbox environments.

### Example Usage

<!-- UsageSnippet language="php" operationID="update_three_ds_scenario" method="put" path="/three-ds-scenarios/{three_ds_scenario_id}" -->
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

$threeDSecureScenarioUpdate = new Gr4vy\ThreeDSecureScenarioUpdate();

$response = $sdk->threeDsScenarios->update(
    threeDsScenarioId: '7099948d-7286-47e4-aad8-b68f7eb44591',
    threeDSecureScenarioUpdate: $threeDSecureScenarioUpdate

);

if ($response->threeDSecureScenario !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                         | Type                                                              | Required                                                          | Description                                                       | Example                                                           |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `threeDsScenarioId`                                               | *string*                                                          | :heavy_check_mark:                                                | The ID of the 3DS scenario                                        | 7099948d-7286-47e4-aad8-b68f7eb44591                              |
| `threeDSecureScenarioUpdate`                                      | [ThreeDSecureScenarioUpdate](../../ThreeDSecureScenarioUpdate.md) | :heavy_check_mark:                                                | N/A                                                               |                                                                   |
| `merchantAccountId`                                               | *?string*                                                         | :heavy_minus_sign:                                                | The ID of the merchant account to use for this request.           | default                                                           |

### Response

**[?UpdateThreeDsScenarioResponse](../../UpdateThreeDsScenarioResponse.md)**

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

Removes a 3DS scenario from our system. Only available in sandbox environments.

### Example Usage

<!-- UsageSnippet language="php" operationID="delete_three_ds_scenario" method="delete" path="/three-ds-scenarios/{three_ds_scenario_id}" -->
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



$response = $sdk->threeDsScenarios->delete(
    threeDsScenarioId: '7099948d-7286-47e4-aad8-b68f7eb44591'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `threeDsScenarioId`                                     | *string*                                                | :heavy_check_mark:                                      | The ID of the 3DS scenario                              | 7099948d-7286-47e4-aad8-b68f7eb44591                    |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?DeleteThreeDsScenarioResponse](../../DeleteThreeDsScenarioResponse.md)**

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