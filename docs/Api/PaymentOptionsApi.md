# Gr4vy\PaymentOptionsApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listPaymentOptions()**](PaymentOptionsApi.md#listPaymentOptions) | **GET** /payment-options | List payment options


## `listPaymentOptions()`

```php
listPaymentOptions($country, $currency, $amount, $metadata, $locale): \Gr4vy\model\PaymentOptions
```

List payment options

Returns a list of available payment method options for a currency and country.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\PaymentOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = US; // string | Filters the results to only the items which support this country code. A country is formatted as 2-letter ISO country code.
$currency = USD; // string | Filters the results to only the items which support this currency code. A currency is formatted as 3-letter ISO currency code.
$amount = 500; // int | Used by the Flow engine to filter the results based on the transaction amount.
$metadata = {"restricted_items": "True"}; // string | Used by the Flow engine to filter available options based on various client-defined parameters. If present, this must be a string representing a valid JSON dictionary.
$locale = en-US; // string | An ISO 639-1 Language Code and optional ISO 3166 Country Code. This locale determines the language for the labels returned for every payment option.

try {
    $result = $apiInstance->listPaymentOptions($country, $currency, $amount, $metadata, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentOptionsApi->listPaymentOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country** | **string**| Filters the results to only the items which support this country code. A country is formatted as 2-letter ISO country code. | [optional]
 **currency** | **string**| Filters the results to only the items which support this currency code. A currency is formatted as 3-letter ISO currency code. | [optional]
 **amount** | **int**| Used by the Flow engine to filter the results based on the transaction amount. | [optional]
 **metadata** | **string**| Used by the Flow engine to filter available options based on various client-defined parameters. If present, this must be a string representing a valid JSON dictionary. | [optional]
 **locale** | **string**| An ISO 639-1 Language Code and optional ISO 3166 Country Code. This locale determines the language for the labels returned for every payment option. | [optional] [default to &#39;en-US&#39;]

### Return type

[**\Gr4vy\model\PaymentOptions**](../Model/PaymentOptions.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
