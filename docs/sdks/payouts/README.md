# Payouts
(*payouts*)

## Overview

### Available Operations

* [list](#list) - List payouts created.
* [create](#create) - Create a payout.
* [get](#get) - Get a payout.

## list

Returns a list of payouts made.

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



$responses = $sdk->payouts->list(
    cursor: 'ZXhhbXBsZTE',
    limit: 20,
    merchantAccountId: 'default'

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

**[?ListPayoutsResponse](../../ListPayoutsResponse.md)**

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

Creates a new payout.

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

$payoutCreate = new Gr4vy\PayoutCreate(
    amount: 1299,
    currency: 'USD',
    paymentServiceId: 'ed8bd87d-85ad-40cf-8e8f-007e21e55aad',
    paymentMethod: new Gr4vy\PaymentMethodStoredCard(
        id: '852b951c-d7ea-4c98-b09e-4a1c9e97c077',
    ),
    category: 'online_gambling',
    externalIdentifier: 'payout-12345',
    buyerId: 'fe26475d-ec3e-4884-9553-f7356683f7f9',
    buyer: new Gr4vy\GuestBuyerInput(
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
                kind: '<value>',
            ),
        ),
        shippingDetails: new Gr4vy\ShippingDetailsCreate(
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
        ),
    ),
    buyerExternalIdentifier: 'buyer-12345',
    merchant: new Gr4vy\PayoutMerchant(
        name: 'Acme Inc',
        identificationNumber: '12345',
        phoneNumber: '+442071838750',
        url: 'https://example.com',
        statementDescriptor: 'Winnings',
        merchantCategoryCode: '123456',
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
    ),
    connectionOptions: new Gr4vy\ConnectionOptions(
        checkoutCard: new Gr4vy\CheckoutCardConnectionOptions(
            processingChannelId: 'channel-1234',
            sourceId: 'acct-1234',
        ),
    ),
);

$response = $sdk->payouts->create(
    payoutCreate: $payoutCreate,
    timeoutInSeconds: 1,
    merchantAccountId: 'default'

);

if ($response->payoutSummary !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `payoutCreate`                                          | [PayoutCreate](../../PayoutCreate.md)                   | :heavy_check_mark:                                      | N/A                                                     |                                                         |
| `timeoutInSeconds`                                      | *?float*                                                | :heavy_minus_sign:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?CreatePayoutResponse](../../CreatePayoutResponse.md)**

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

Retreives a payout.

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



$response = $sdk->payouts->get(
    payoutId: '4344fef2-bc2f-49a6-924f-343e62f67224',
    merchantAccountId: 'default'

);

if ($response->payoutSummary !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `payoutId`                                              | *string*                                                | :heavy_check_mark:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?GetPayoutResponse](../../GetPayoutResponse.md)**

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