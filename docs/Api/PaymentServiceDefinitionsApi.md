# Gr4vy\PaymentServiceDefinitionsApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaymentServiceDefinition()**](PaymentServiceDefinitionsApi.md#getPaymentServiceDefinition) | **GET** /payment-service-definitions/{payment_service_definition_id} | Get payment service definition
[**listPaymentServiceDefinitions()**](PaymentServiceDefinitionsApi.md#listPaymentServiceDefinitions) | **GET** /payment-service-definitions | List payment service definitions


## `getPaymentServiceDefinition()`

```php
getPaymentServiceDefinition($payment_service_definition_id): \Gr4vy\model\PaymentServiceDefinition
```

Get payment service definition

Gets the definition for a payment service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\PaymentServiceDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_service_definition_id = stripe-card; // string | The unique ID of the payment service definition.

try {
    $result = $apiInstance->getPaymentServiceDefinition($payment_service_definition_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentServiceDefinitionsApi->getPaymentServiceDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_service_definition_id** | **string**| The unique ID of the payment service definition. |

### Return type

[**\Gr4vy\model\PaymentServiceDefinition**](../Model/PaymentServiceDefinition.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPaymentServiceDefinitions()`

```php
listPaymentServiceDefinitions($limit, $cursor): \Gr4vy\model\PaymentServiceDefinitions
```

List payment service definitions

Returns a list of all available payment service definitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\PaymentServiceDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1; // int | Defines the maximum number of items to return for this request.
$cursor = ZXhhbXBsZTE; // string | A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the `next_cursor` field. Similarly the `previous_cursor` can be used to reverse backwards in the list.

try {
    $result = $apiInstance->listPaymentServiceDefinitions($limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentServiceDefinitionsApi->listPaymentServiceDefinitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Defines the maximum number of items to return for this request. | [optional] [default to 20]
 **cursor** | **string**| A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the &#x60;next_cursor&#x60; field. Similarly the &#x60;previous_cursor&#x60; can be used to reverse backwards in the list. | [optional]

### Return type

[**\Gr4vy\model\PaymentServiceDefinitions**](../Model/PaymentServiceDefinitions.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
