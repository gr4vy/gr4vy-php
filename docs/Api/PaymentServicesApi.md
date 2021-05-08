# Gr4vy\PaymentServicesApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPaymentService()**](PaymentServicesApi.md#addPaymentService) | **POST** /payment-services | New payment service
[**deletePaymentService()**](PaymentServicesApi.md#deletePaymentService) | **DELETE** /payment-services/{payment_service_id} | Delete payment service
[**getPaymentService()**](PaymentServicesApi.md#getPaymentService) | **GET** /payment-services/{payment_service_id} | Get payment service
[**listPaymentServices()**](PaymentServicesApi.md#listPaymentServices) | **GET** /payment-services | List payment services
[**updatePaymentService()**](PaymentServicesApi.md#updatePaymentService) | **PUT** /payment-services/{payment_service_id} | Update payment service


## `addPaymentService()`

```php
addPaymentService($payment_service_request): \Gr4vy\model\PaymentService
```

New payment service

Adds a new payment service by providing a custom name and a value for each of the required fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\PaymentServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_service_request = new \Gr4vy\model\PaymentServiceRequest(); // \Gr4vy\model\PaymentServiceRequest

try {
    $result = $apiInstance->addPaymentService($payment_service_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentServicesApi->addPaymentService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_service_request** | [**\Gr4vy\model\PaymentServiceRequest**](../Model/PaymentServiceRequest.md)|  | [optional]

### Return type

[**\Gr4vy\model\PaymentService**](../Model/PaymentService.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePaymentService()`

```php
deletePaymentService($payment_service_id)
```

Delete payment service

Deletes a specific active payment service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\PaymentServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_service_id = 46973e9d-88a7-44a6-abfe-be4ff0134ff4; // string | The ID of the payment service.

try {
    $apiInstance->deletePaymentService($payment_service_id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentServicesApi->deletePaymentService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_service_id** | **string**| The ID of the payment service. |

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

## `getPaymentService()`

```php
getPaymentService($payment_service_id): \Gr4vy\model\PaymentService
```

Get payment service

Retrieves the details of a single configured payment service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\PaymentServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_service_id = 46973e9d-88a7-44a6-abfe-be4ff0134ff4; // string | The ID of the payment service.

try {
    $result = $apiInstance->getPaymentService($payment_service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentServicesApi->getPaymentService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_service_id** | **string**| The ID of the payment service. |

### Return type

[**\Gr4vy\model\PaymentService**](../Model/PaymentService.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPaymentServices()`

```php
listPaymentServices($limit, $cursor, $method, $environment): \Gr4vy\model\PaymentServices
```

List payment services

Lists the currently configured and activated payment services.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\PaymentServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1; // int | Defines the maximum number of items to return for this request.
$cursor = ZXhhbXBsZTE; // string | A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the `next_cursor` field. Similarly the `previous_cursor` can be used to reverse backwards in the list.
$method = card; // string | Filters the results to only the items for which the `method` has been set to this value.
$environment = staging; // string | Filters the results to only the items available in this environment.

try {
    $result = $apiInstance->listPaymentServices($limit, $cursor, $method, $environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentServicesApi->listPaymentServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Defines the maximum number of items to return for this request. | [optional] [default to 20]
 **cursor** | **string**| A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the &#x60;next_cursor&#x60; field. Similarly the &#x60;previous_cursor&#x60; can be used to reverse backwards in the list. | [optional]
 **method** | **string**| Filters the results to only the items for which the &#x60;method&#x60; has been set to this value. | [optional]
 **environment** | **string**| Filters the results to only the items available in this environment. | [optional] [default to &#39;production&#39;]

### Return type

[**\Gr4vy\model\PaymentServices**](../Model/PaymentServices.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePaymentService()`

```php
updatePaymentService($payment_service_id, $payment_service_update): \Gr4vy\model\PaymentService
```

Update payment service

Updates an existing payment service. Allows all fields to be changed except for the service ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\PaymentServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_service_id = 46973e9d-88a7-44a6-abfe-be4ff0134ff4; // string | The ID of the payment service.
$payment_service_update = new \Gr4vy\model\PaymentServiceUpdate(); // \Gr4vy\model\PaymentServiceUpdate

try {
    $result = $apiInstance->updatePaymentService($payment_service_id, $payment_service_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentServicesApi->updatePaymentService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_service_id** | **string**| The ID of the payment service. |
 **payment_service_update** | [**\Gr4vy\model\PaymentServiceUpdate**](../Model/PaymentServiceUpdate.md)|  | [optional]

### Return type

[**\Gr4vy\model\PaymentService**](../Model/PaymentService.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
