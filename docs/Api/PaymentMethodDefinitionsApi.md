# Gr4vy\PaymentMethodDefinitionsApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listPaymentMethodDefinitions()**](PaymentMethodDefinitionsApi.md#listPaymentMethodDefinitions) | **GET** /payment-method-definitions | List payment method definitions


## `listPaymentMethodDefinitions()`

```php
listPaymentMethodDefinitions(): \Gr4vy\model\PaymentMethodDefinitions
```

List payment method definitions

Returns a list of all available payment method definitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\PaymentMethodDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listPaymentMethodDefinitions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodDefinitionsApi->listPaymentMethodDefinitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Gr4vy\model\PaymentMethodDefinitions**](../Model/PaymentMethodDefinitions.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
