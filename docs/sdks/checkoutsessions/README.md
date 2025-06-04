# CheckoutSessions
(*checkoutSessions*)

## Overview

### Available Operations

* [create](#create) - Create checkout session
* [update](#update) - Update checkout session
* [get](#get) - Get checkout session
* [delete](#delete) - Delete checkout session

## create

Create a new checkout session.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Brick\DateTime\LocalDate;
use Gr4vy;
use Gr4vy\Utils;

$sdk = Gr4vy\SDK::builder()
    ->setMerchantAccountId('default')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$checkoutSessionCreate = new Gr4vy\CheckoutSessionCreate(
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
            sellerCountry: 'US',
        ),
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
            sellerCountry: 'US',
        ),
    ],
    metadata: [
        'cohort' => 'cohort-a',
        'order_id' => 'order-12345',
    ],
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
                kind: 'my.frp',
            ),
        ),
        shippingDetails: new Gr4vy\ShippingDetailsCreate(
            firstName: 'John',
            lastName: 'Doe',
            emailAddress: 'john@example.com',
            phoneNumber: '+1234567890',
            address: null,
        ),
    ),
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

$response = $sdk->checkoutSessions->create(
    checkoutSessionCreate: $checkoutSessionCreate
);

if ($response->checkoutSession !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                | Type                                                     | Required                                                 | Description                                              | Example                                                  |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| `merchantAccountId`                                      | *?string*                                                | :heavy_minus_sign:                                       | The ID of the merchant account to use for this request.  | default                                                  |
| `checkoutSessionCreate`                                  | [?CheckoutSessionCreate](../../CheckoutSessionCreate.md) | :heavy_minus_sign:                                       | N/A                                                      |                                                          |

### Response

**[?CreateCheckoutSessionResponse](../../CreateCheckoutSessionResponse.md)**

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

Update the information stored on a checkout session.

### Example Usage

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

$checkoutSessionCreate = new Gr4vy\CheckoutSessionCreate();

$response = $sdk->checkoutSessions->update(
    sessionId: '4137b1cf-39ac-42a8-bad6-1c680d5dab6b',
    checkoutSessionCreate: $checkoutSessionCreate

);

if ($response->checkoutSession !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `sessionId`                                             | *string*                                                | :heavy_check_mark:                                      | The ID of the checkout session.                         | 4137b1cf-39ac-42a8-bad6-1c680d5dab6b                    |
| `checkoutSessionCreate`                                 | [CheckoutSessionCreate](../../CheckoutSessionCreate.md) | :heavy_check_mark:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?UpdateCheckoutSessionResponse](../../UpdateCheckoutSessionResponse.md)**

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

Retrieve the information stored on a checkout session.

### Example Usage

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



$response = $sdk->checkoutSessions->get(
    sessionId: '4137b1cf-39ac-42a8-bad6-1c680d5dab6b'
);

if ($response->checkoutSession !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `sessionId`                                             | *string*                                                | :heavy_check_mark:                                      | The ID of the checkout session.                         | 4137b1cf-39ac-42a8-bad6-1c680d5dab6b                    |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?GetCheckoutSessionResponse](../../GetCheckoutSessionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| errors\Error400     | 400                 | application/json    |
| errors\Error401     | 401                 | application/json    |
| errors\Error403     | 403                 | application/json    |
| errors\Error404     | 404                 | application/json    |
| errors\Error405     | 405                 | application/json    |
| errors\Error409     | 409                 | application/json    |
| errors\Error425     | 425                 | application/json    |
| errors\Error429     | 429                 | application/json    |
| errors\Error500     | 500                 | application/json    |
| errors\Error502     | 502                 | application/json    |
| errors\Error504     | 504                 | application/json    |
| errors\APIException | 4XX, 5XX            | \*/\*               |

## delete

Deleta a checkout session and all of its (PCI) data.

### Example Usage

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



$response = $sdk->checkoutSessions->delete(
    sessionId: '4137b1cf-39ac-42a8-bad6-1c680d5dab6b'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `sessionId`                                             | *string*                                                | :heavy_check_mark:                                      | The ID of the checkout session.                         | 4137b1cf-39ac-42a8-bad6-1c680d5dab6b                    |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?DeleteCheckoutSessionResponse](../../DeleteCheckoutSessionResponse.md)**

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