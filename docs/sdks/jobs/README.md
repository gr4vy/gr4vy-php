# AccountUpdater.Jobs

## Overview

### Available Operations

* [create](#create) - Create account updater job

## create

Schedule one or more stored cards for an account update.

### Example Usage

<!-- UsageSnippet language="php" operationID="create_account_updater_job" method="post" path="/account-updater/jobs" -->
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

$accountUpdaterJobCreate = new Gr4vy\AccountUpdaterJobCreate(
    paymentMethodIds: [
        'ef9496d8-53a5-4aad-8ca2-00eb68334389',
        'f29e886e-93cc-4714-b4a3-12b7a718e595',
    ],
);

$response = $sdk->accountUpdater->jobs->create(
    accountUpdaterJobCreate: $accountUpdaterJobCreate
);

if ($response->accountUpdaterJob !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                   | Type                                                        | Required                                                    | Description                                                 | Example                                                     |
| ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- |
| `accountUpdaterJobCreate`                                   | [AccountUpdaterJobCreate](../../AccountUpdaterJobCreate.md) | :heavy_check_mark:                                          | N/A                                                         |                                                             |
| `merchantAccountId`                                         | *?string*                                                   | :heavy_minus_sign:                                          | The ID of the merchant account to use for this request.     | default                                                     |

### Response

**[?CreateAccountUpdaterJobResponse](../../CreateAccountUpdaterJobResponse.md)**

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