# Gr4vy\AntiFraudServicesApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAntiFraudService()**](AntiFraudServicesApi.md#addAntiFraudService) | **POST** /anti-fraud-services | New anti-fraud service
[**deleteAntiFraudService()**](AntiFraudServicesApi.md#deleteAntiFraudService) | **DELETE** /anti-fraud-services/{anti_fraud_service_id} | Delete anti-fraud service
[**getAntiFraudService()**](AntiFraudServicesApi.md#getAntiFraudService) | **GET** /anti-fraud-services/{anti_fraud_service_id} | Get anti-fraud service
[**updateAntiFraudService()**](AntiFraudServicesApi.md#updateAntiFraudService) | **PUT** /anti-fraud-services/{anti_fraud_service_id} | Update anti-fraud service


## `addAntiFraudService()`

```php
addAntiFraudService($anti_fraud_service_create): \Gr4vy\model\AntiFraudService
```

New anti-fraud service

Adds an anti-fraud service, enabling merchants to determine risky transactions and prevent chargebacks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\AntiFraudServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$anti_fraud_service_create = {"anti_fraud_service_definition_id":"sift","display_name":"Sift Anti-Fraud Service.","active":true,"fields":[{"key":"api_key","value":"sk_test_26PHem9AhJZvU623DfE1x4sd"},{"key":"account_id","value":"26PHem9AhJZvU623DfE1x4sd"}]}; // \Gr4vy\model\AntiFraudServiceCreate

try {
    $result = $apiInstance->addAntiFraudService($anti_fraud_service_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntiFraudServicesApi->addAntiFraudService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **anti_fraud_service_create** | [**\Gr4vy\model\AntiFraudServiceCreate**](../Model/AntiFraudServiceCreate.md)|  | [optional]

### Return type

[**\Gr4vy\model\AntiFraudService**](../Model/AntiFraudService.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAntiFraudService()`

```php
deleteAntiFraudService($anti_fraud_service_id)
```

Delete anti-fraud service

Deletes an anti-fraud service record. Any associated credentials will also be deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\AntiFraudServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$anti_fraud_service_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | The unique ID for an anti-fraud service.

try {
    $apiInstance->deleteAntiFraudService($anti_fraud_service_id);
} catch (Exception $e) {
    echo 'Exception when calling AntiFraudServicesApi->deleteAntiFraudService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **anti_fraud_service_id** | **string**| The unique ID for an anti-fraud service. |

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

## `getAntiFraudService()`

```php
getAntiFraudService($anti_fraud_service_id): \Gr4vy\model\AntiFraudService
```

Get anti-fraud service

Gets the information about an anti-fraud service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\AntiFraudServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$anti_fraud_service_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | The unique ID for an anti-fraud service.

try {
    $result = $apiInstance->getAntiFraudService($anti_fraud_service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntiFraudServicesApi->getAntiFraudService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **anti_fraud_service_id** | **string**| The unique ID for an anti-fraud service. |

### Return type

[**\Gr4vy\model\AntiFraudService**](../Model/AntiFraudService.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAntiFraudService()`

```php
updateAntiFraudService($anti_fraud_service_id, $anti_fraud_service_update): \Gr4vy\model\AntiFraudService
```

Update anti-fraud service

Update an anti-fraud service, enabling merchants to determine risky transactions and prevent chargebacks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\AntiFraudServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$anti_fraud_service_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | The unique ID for an anti-fraud service.
$anti_fraud_service_update = {"anti_fraud_service_definition_id":"sift","display_name":"Sift Anti-Fraud Service.","active":true,"fields":[{"key":"api_key","value":"sk_test_26PHem9AhJZvU623DfE1x4sd"},{"key":"account_id","value":"26PHem9AhJZvU623DfE1x4sd"}]}; // \Gr4vy\model\AntiFraudServiceUpdate

try {
    $result = $apiInstance->updateAntiFraudService($anti_fraud_service_id, $anti_fraud_service_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntiFraudServicesApi->updateAntiFraudService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **anti_fraud_service_id** | **string**| The unique ID for an anti-fraud service. |
 **anti_fraud_service_update** | [**\Gr4vy\model\AntiFraudServiceUpdate**](../Model/AntiFraudServiceUpdate.md)|  | [optional]

### Return type

[**\Gr4vy\model\AntiFraudService**](../Model/AntiFraudService.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
