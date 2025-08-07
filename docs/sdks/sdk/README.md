# SDK

## Overview

Gr4vy: The Gr4vy API.

### Available Operations

* [browsePaymentMethodDefinitionsGet](#browsepaymentmethoddefinitionsget) - Browse

## browsePaymentMethodDefinitionsGet

Browse

### Example Usage

<!-- UsageSnippet language="php" operationID="browse_payment_method_definitions_get" method="get" path="/payment-method-definitions" -->
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



$response = $sdk->browsePaymentMethodDefinitionsGet(

);

if ($response->any !== null) {
    // handle response
}
```

### Parameters

| Parameter                                               | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |

### Response

**[?BrowsePaymentMethodDefinitionsGetResponse](../../BrowsePaymentMethodDefinitionsGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| errors\HTTPValidationError | 422                        | application/json           |
| errors\APIException        | 4XX, 5XX                   | \*/\*                      |