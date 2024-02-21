# Gr4vy\PaymentMethodsApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePaymentMethod()**](PaymentMethodsApi.md#deletePaymentMethod) | **DELETE** /payment-methods/{payment_method_id} | Delete payment method
[**getPaymentMethod()**](PaymentMethodsApi.md#getPaymentMethod) | **GET** /payment-methods/{payment_method_id} | Get payment method
[**listBuyerPaymentMethods()**](PaymentMethodsApi.md#listBuyerPaymentMethods) | **GET** /buyers/payment-methods | List payment methods for buyer
[**listPaymentMethods()**](PaymentMethodsApi.md#listPaymentMethods) | **GET** /payment-methods | List payment methods
[**newPaymentMethod()**](PaymentMethodsApi.md#newPaymentMethod) | **POST** /payment-methods | New payment method


## `deletePaymentMethod()`

```php
deletePaymentMethod($payment_method_id)
```

Delete payment method

Removes a stored payment method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method_id = 46973e9d-88a7-44a6-abfe-be4ff0134ff4; // string | The ID of the payment method.

try {
    $apiInstance->deletePaymentMethod($payment_method_id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->deletePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **string**| The ID of the payment method. |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentMethod()`

```php
getPaymentMethod($payment_method_id): \Gr4vy\model\PaymentMethod
```

Get payment method

Gets the details for a stored payment method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method_id = 46973e9d-88a7-44a6-abfe-be4ff0134ff4; // string | The ID of the payment method.

try {
    $result = $apiInstance->getPaymentMethod($payment_method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->getPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **string**| The ID of the payment method. |

### Return type

[**\Gr4vy\model\PaymentMethod**](../Model/PaymentMethod.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBuyerPaymentMethods()`

```php
listBuyerPaymentMethods($buyer_id, $buyer_external_identifier, $country, $currency): \Gr4vy\model\PaymentMethodsTokenized
```

List payment methods for buyer

Returns a list of stored payment methods for a buyer in a summarized format. Only payment methods that are compatible with at least one active payment service in that region are shown.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buyer_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | Filters the results to only the items for which the `buyer` has an `id` that matches this value.
$buyer_external_identifier = user-12345; // string | Filters the results to only the items for which the `buyer` has an `external_identifier` that matches this value.
$country = US; // string | Filters the results to only the items which support this country code. A country is formatted as 2-letter ISO country code.
$currency = USD; // string | Filters the results to only the items which support this currency code. A currency is formatted as 3-letter ISO currency code.

try {
    $result = $apiInstance->listBuyerPaymentMethods($buyer_id, $buyer_external_identifier, $country, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->listBuyerPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buyer_id** | **string**| Filters the results to only the items for which the &#x60;buyer&#x60; has an &#x60;id&#x60; that matches this value. | [optional]
 **buyer_external_identifier** | **string**| Filters the results to only the items for which the &#x60;buyer&#x60; has an &#x60;external_identifier&#x60; that matches this value. | [optional]
 **country** | **string**| Filters the results to only the items which support this country code. A country is formatted as 2-letter ISO country code. | [optional]
 **currency** | **string**| Filters the results to only the items which support this currency code. A currency is formatted as 3-letter ISO currency code. | [optional]

### Return type

[**\Gr4vy\model\PaymentMethodsTokenized**](../Model/PaymentMethodsTokenized.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPaymentMethods()`

```php
listPaymentMethods($buyer_id, $buyer_external_identifier, $status, $limit, $cursor): \Gr4vy\model\PaymentMethods
```

List payment methods

Returns a list of stored payment methods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buyer_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | Filters the results to only the items for which the `buyer` has an `id` that matches this value.
$buyer_external_identifier = user-12345; // string | Filters the results to only the items for which the `buyer` has an `external_identifier` that matches this value.
$status = ["succeeded","processing"]; // string[] | Filters the results to only the payment methods for which the `status` matches with any of the provided status values.
$limit = 1; // int | Defines the maximum number of items to return for this request.
$cursor = ZXhhbXBsZTE; // string | A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the `next_cursor` field. Similarly the `previous_cursor` can be used to reverse backwards in the list.

try {
    $result = $apiInstance->listPaymentMethods($buyer_id, $buyer_external_identifier, $status, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->listPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buyer_id** | **string**| Filters the results to only the items for which the &#x60;buyer&#x60; has an &#x60;id&#x60; that matches this value. | [optional]
 **buyer_external_identifier** | **string**| Filters the results to only the items for which the &#x60;buyer&#x60; has an &#x60;external_identifier&#x60; that matches this value. | [optional]
 **status** | [**string[]**](../Model/string.md)| Filters the results to only the payment methods for which the &#x60;status&#x60; matches with any of the provided status values. | [optional]
 **limit** | **int**| Defines the maximum number of items to return for this request. | [optional] [default to 20]
 **cursor** | **string**| A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the &#x60;next_cursor&#x60; field. Similarly the &#x60;previous_cursor&#x60; can be used to reverse backwards in the list. | [optional]

### Return type

[**\Gr4vy\model\PaymentMethods**](../Model/PaymentMethods.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newPaymentMethod()`

```php
newPaymentMethod($payment_method_request): \Gr4vy\model\PaymentMethod
```

New payment method

Stores and vaults a new payment method.  Vaulting a card only stores its information but doesn't validate it against any PSP, so ephemeral data like the security code, often referred to as the CVV or CVD, won't be used. In order to validate the card data, a CIT (Customer Initiated Transaction) must be done, even if it's a zero-value one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method_request = new \Gr4vy\model\PaymentMethodRequest(); // \Gr4vy\model\PaymentMethodRequest

try {
    $result = $apiInstance->newPaymentMethod($payment_method_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->newPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_request** | [**\Gr4vy\model\PaymentMethodRequest**](../Model/PaymentMethodRequest.md)|  | [optional]

### Return type

[**\Gr4vy\model\PaymentMethod**](../Model/PaymentMethod.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
