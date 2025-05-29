# Transactions
(*transactions*)

## Overview

### Available Operations

* [list](#list) - List transactions
* [create](#create) - Create transaction
* [get](#get) - Get transaction
* [capture](#capture) - Capture transaction
* [void](#void) - Void transaction
* [summary](#summary) - Get transaction summary
* [sync](#sync) - Sync transaction

## list

List all transactions for a specific merchant account sorted by most recently created.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;
use Gr4vy\Utils;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setMerchantAccountId('default')
    ->build();

$request = new Gr4vy\ListTransactionsRequest(
    cursor: 'ZXhhbXBsZTE',
    createdAtLte: Utils\Utils::parseDateTime('2022-01-01T12:00:00+08:00'),
    createdAtGte: Utils\Utils::parseDateTime('2022-01-01T12:00:00+08:00'),
    updatedAtLte: Utils\Utils::parseDateTime('2022-01-01T12:00:00+08:00'),
    updatedAtGte: Utils\Utils::parseDateTime('2022-01-01T12:00:00+08:00'),
    search: 'transaction-12345',
    buyerExternalIdentifier: 'buyer-12345',
    buyerId: 'fe26475d-ec3e-4884-9553-f7356683f7f9',
    buyerEmailAddress: 'john@example.com',
    buyerSearch: 'John',
    ipAddress: '8.214.133.47',
    status: [
        'authorization_succeeded',
    ],
    id: '7099948d-7286-47e4-aad8-b68f7eb44591',
    paymentServiceTransactionId: 'tx-12345',
    externalIdentifier: 'transaction-12345',
    metadata: [
        '{"first_key":"first_value","second_key":"second_value"}',
    ],
    amountEq: 1299,
    amountLte: 1299,
    amountGte: 1299,
    currency: [
        'USD',
    ],
    country: [
        'US',
    ],
    paymentServiceId: [
        'fffd152a-9532-4087-9a4f-de58754210f0',
    ],
    paymentMethodId: 'ef9496d8-53a5-4aad-8ca2-00eb68334389',
    paymentMethodLabel: '1234',
    paymentMethodScheme: '["visa"]',
    paymentMethodCountry: '["US"]',
    paymentMethodFingerprint: 'a50b85c200ee0795d6fd33a5c66f37a4564f554355c5b46a756aac485dd168a4',
    method: [
        'card',
    ],
    errorCode: [
        'insufficient_funds',
    ],
    hasRefunds: true,
    pendingReview: true,
    checkoutSessionId: '4137b1cf-39ac-42a8-bad6-1c680d5dab6b',
    reconciliationId: '7jZXl4gBUNl0CnaLEnfXbt',
    hasGiftCardRedemptions: true,
    giftCardId: '356d56e5-fe16-42ae-97ee-8d55d846ae2e',
    giftCardLast4: '7890',
    hasSettlements: true,
    paymentMethodBin: '411111',
    paymentSource: [
        'recurring',
    ],
    isSubsequentPayment: true,
    merchantInitiated: true,
    used3ds: true,
);

$responses = $sdk->transactions->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                         | Type                                                              | Required                                                          | Description                                                       |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `$request`                                                        | [Gr4vy\ListTransactionsRequest](../../ListTransactionsRequest.md) | :heavy_check_mark:                                                | The request object to use for the request.                        |

### Response

**[?ListTransactionsResponse](../../ListTransactionsResponse.md)**

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

Create a transaction.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Brick\DateTime\LocalDate;
use Gr4vy;
use Gr4vy\Utils;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setMerchantAccountId('default')
    ->build();

$transactionCreate = new Gr4vy\TransactionCreate(
    amount: 1299,
    currency: 'EUR',
    country: 'US',
    paymentMethod: new Gr4vy\CardWithUrlPaymentMethodCreate(
        expirationDate: '12/30',
        number: '4111111111111111',
        buyerExternalIdentifier: 'buyer-12345',
        buyerId: 'fe26475d-ec3e-4884-9553-f7356683f7f9',
        externalIdentifier: 'payment-method-12345',
        cardType: 'credit',
        securityCode: '123',
    ),
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
    buyerId: 'fe26475d-ec3e-4884-9553-f7356683f7f9',
    buyerExternalIdentifier: 'buyer-12345',
    giftCards: [
        new Gr4vy\GiftCardTransactionCreate(
            number: '4123455541234561234',
            pin: '1234',
            amount: 1299,
        ),
    ],
    externalIdentifier: 'transaction-12345',
    threeDSecureData: new Gr4vy\ThreeDSecureDataV2(
        cavv: '3q2+78r+ur7erb7vyv66vv8=',
        eci: '05',
        version: '2.1.0',
        directoryResponse: 'C',
        scheme: 'visa',
        authenticationResponse: 'Y',
        directoryTransactionId: 'c4e59ceb-a382-4d6a-bc87-385d591fa09d',
    ),
    metadata: [
        'cohort' => 'cohort-12345',
        'order' => 'order-12345',
    ],
    airline: new Gr4vy\Airline(
        bookingCode: 'X36Q9C',
        isCardholderTraveling: true,
        issuedAddress: '123 Broadway, New York',
        issuedAt: Utils\Utils::parseDateTime('2013-07-16T19:23:00.000+00:00'),
        issuingCarrierCode: '649',
        issuingCarrierName: 'Air Transat A.T. Inc',
        issuingIataDesignator: 'TS',
        issuingIcaoCode: 'TSC',
        legs: [
            new Gr4vy\AirlineLeg(
                arrivalAirport: 'LAX',
                arrivalAt: Utils\Utils::parseDateTime('2013-07-16T19:23:00.000+00:00'),
                arrivalCity: 'Los Angeles',
                arrivalCountry: 'US',
                carrierCode: '649',
                carrierName: 'Air Transat A.T. Inc',
                iataDesignator: 'TS',
                icaoCode: 'TSC',
                couponNumber: '15885566',
                departureAirport: 'LHR',
                departureAt: Utils\Utils::parseDateTime('2013-07-16T19:23:00.000+00:00'),
                departureCity: 'London',
                departureCountry: 'GB',
                departureTaxAmount: 1200,
                fareAmount: 129900,
                fareBasisCode: 'FY',
                feeAmount: 1200,
                flightClass: 'E',
                flightNumber: '101',
                routeType: 'round_trip',
                seatClass: 'F',
                stopOver: false,
                taxAmount: 1200,
            ),
        ],
        passengerNameRecord: 'JOHN L',
        passengers: [
            new Gr4vy\AirlinePassenger(
                ageGroup: 'adult',
                dateOfBirth: LocalDate::parse('2013-07-16'),
                emailAddress: 'john@example.com',
                firstName: 'John',
                frequentFlyerNumber: '15885566',
                lastName: 'Luhn',
                passportNumber: '11117700225',
                phoneNumber: '+1234567890',
                ticketNumber: 'BA1236699999',
                title: 'Mr.',
                countryCode: 'US',
            ),
        ],
        reservationSystem: 'Amadeus',
        restrictedTicket: false,
        ticketDeliveryMethod: 'electronic',
        ticketNumber: '123-1234-151555',
        travelAgencyCode: '12345',
        travelAgencyInvoiceNumber: 'EG15555155',
        travelAgencyName: 'ACME Agency',
        travelAgencyPlanName: 'B733',
    ),
    cartItems: [
        new Gr4vy\CartItem(
            name: 'GoPro HD',
            quantity: 2,
            unitAmount: 1299,
            discountAmount: 0,
            taxAmount: 0,
            externalIdentifier: 'goprohd',
            sku: 'GPHD1078',
            productUrl: 'https://example.com/catalog/go-pro-hd',
            imageUrl: 'https://example.com/images/go-pro-hd.jpg',
            categories: [
                'camera',
                'travel',
                'gear',
            ],
            productType: 'physical',
            sellerCountry: 'GB',
        ),
    ],
    statementDescriptor: new Gr4vy\StatementDescriptor(
        name: 'ACME',
        description: 'ACME San Jose Electronics',
        city: 'San Jose',
        country: 'US',
        phoneNumber: '+1234567890',
        url: 'www.example.com',
    ),
    previousSchemeTransactionId: '123456789012345',
    browserInfo: new Gr4vy\BrowserInfo(
        javascriptEnabled: false,
        javaEnabled: false,
        language: '<value>',
        colorDepth: 836800,
        screenHeight: 233026,
        screenWidth: 285144,
        timeZoneOffset: 702825,
        userAgent: 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
        userDevice: 'desktop',
        acceptHeader: '*/*',
    ),
    shippingDetailsId: 'bf8c36ad-02d9-4904-b0f9-a230b149e341',
    antiFraudFingerprint: 'yGeBAFYgFmM=',
    paymentServiceId: 'fffd152a-9532-4087-9a4f-de58754210f0',
    recipient: new Gr4vy\Recipient(
        firstName: '',
        lastName: '',
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
        accountNumber: 'act12345',
        dateOfBirth: LocalDate::parse('1995-12-23'),
    ),
);

$response = $sdk->transactions->create(
    transactionCreate: $transactionCreate,
    merchantAccountId: 'default',
    idempotencyKey: 'request-12345'

);

if ($response->transaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                             | Type                                                                                                                                                                                                  | Required                                                                                                                                                                                              | Description                                                                                                                                                                                           | Example                                                                                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `transactionCreate`                                                                                                                                                                                   | [TransactionCreate](../../TransactionCreate.md)                                                                                                                                                       | :heavy_check_mark:                                                                                                                                                                                    | N/A                                                                                                                                                                                                   |                                                                                                                                                                                                       |
| `merchantAccountId`                                                                                                                                                                                   | *?string*                                                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                    | The ID of the merchant account to use for this request.                                                                                                                                               | default                                                                                                                                                                                               |
| `idempotencyKey`                                                                                                                                                                                      | *?string*                                                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                    | A unique key that identifies this request. Providing this header will make this an idempotent request. We recommend using V4 UUIDs, or another random string with enough entropy to avoid collisions. | request-12345                                                                                                                                                                                         |

### Response

**[?CreateTransactionResponse](../../CreateTransactionResponse.md)**

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

Fetch a single transaction by its ID.

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



$response = $sdk->transactions->get(
    transactionId: 'bde12786-dce8-4654-b031-196961d1ddcc',
    merchantAccountId: 'default'

);

if ($response->transaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `transactionId`                                         | *string*                                                | :heavy_check_mark:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?GetTransactionResponse](../../GetTransactionResponse.md)**

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

## capture

Capture a previously authorized transaction.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Brick\DateTime\LocalDate;
use Gr4vy;
use Gr4vy\Utils;

$sdk = Gr4vy\SDK::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->setMerchantAccountId('default')
    ->build();

$transactionCapture = new Gr4vy\TransactionCapture(
    amount: 1299,
    airline: new Gr4vy\Airline(
        bookingCode: 'X36Q9C',
        isCardholderTraveling: true,
        issuedAddress: '123 Broadway, New York',
        issuedAt: Utils\Utils::parseDateTime('2013-07-16T19:23:00.000+00:00'),
        issuingCarrierCode: '649',
        issuingCarrierName: 'Air Transat A.T. Inc',
        issuingIataDesignator: 'TS',
        issuingIcaoCode: 'TSC',
        legs: [
            new Gr4vy\AirlineLeg(
                arrivalAirport: 'LAX',
                arrivalAt: Utils\Utils::parseDateTime('2013-07-16T19:23:00.000+00:00'),
                arrivalCity: 'Los Angeles',
                arrivalCountry: 'US',
                carrierCode: '649',
                carrierName: 'Air Transat A.T. Inc',
                iataDesignator: 'TS',
                icaoCode: 'TSC',
                couponNumber: '15885566',
                departureAirport: 'LHR',
                departureAt: Utils\Utils::parseDateTime('2013-07-16T19:23:00.000+00:00'),
                departureCity: 'London',
                departureCountry: 'GB',
                departureTaxAmount: 1200,
                fareAmount: 129900,
                fareBasisCode: 'FY',
                feeAmount: 1200,
                flightClass: 'E',
                flightNumber: '101',
                routeType: 'round_trip',
                seatClass: 'F',
                stopOver: false,
                taxAmount: 1200,
            ),
        ],
        passengerNameRecord: 'JOHN L',
        passengers: [
            new Gr4vy\AirlinePassenger(
                ageGroup: 'adult',
                dateOfBirth: LocalDate::parse('2013-07-16'),
                emailAddress: 'john@example.com',
                firstName: 'John',
                frequentFlyerNumber: '15885566',
                lastName: 'Luhn',
                passportNumber: '11117700225',
                phoneNumber: '+1234567890',
                ticketNumber: 'BA1236699999',
                title: 'Mr.',
                countryCode: 'US',
            ),
        ],
        reservationSystem: 'Amadeus',
        restrictedTicket: false,
        ticketDeliveryMethod: 'electronic',
        ticketNumber: '123-1234-151555',
        travelAgencyCode: '12345',
        travelAgencyInvoiceNumber: 'EG15555155',
        travelAgencyName: 'ACME Agency',
        travelAgencyPlanName: 'B733',
    ),
);

$response = $sdk->transactions->capture(
    transactionId: 'e69a0490-29b9-4585-8dd6-d7d7f9fc92c4',
    transactionCapture: $transactionCapture,
    merchantAccountId: 'default'

);

if ($response->transaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `transactionId`                                         | *string*                                                | :heavy_check_mark:                                      | N/A                                                     |                                                         |
| `transactionCapture`                                    | [TransactionCapture](../../TransactionCapture.md)       | :heavy_check_mark:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?CaptureTransactionResponse](../../CaptureTransactionResponse.md)**

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

## void

Void a previously authorized transaction.

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



$response = $sdk->transactions->void(
    transactionId: '7dbc44c9-1ea3-4853-87be-9923dd281b0d',
    merchantAccountId: 'default'

);

if ($response->transaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `transactionId`                                         | *string*                                                | :heavy_check_mark:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?VoidTransactionResponse](../../VoidTransactionResponse.md)**

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

## summary

Fetch a summary for a transaction.

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



$response = $sdk->transactions->summary(
    transactionId: '7099948d-7286-47e4-aad8-b68f7eb44591',
    merchantAccountId: 'default'

);

if ($response->transactionStatusSummary !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `transactionId`                                         | *string*                                                | :heavy_check_mark:                                      | N/A                                                     | 7099948d-7286-47e4-aad8-b68f7eb44591                    |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?GetTransactionSummaryResponse](../../GetTransactionSummaryResponse.md)**

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

## sync

Fetch the latest status for a transaction.

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



$response = $sdk->transactions->sync(
    transactionId: '2ee546e0-3b11-478e-afec-fdb362611e22',
    merchantAccountId: 'default'

);

if ($response->transaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `transactionId`                                         | *string*                                                | :heavy_check_mark:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?SyncTransactionResponse](../../SyncTransactionResponse.md)**

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