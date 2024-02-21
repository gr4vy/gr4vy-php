# Gr4vy\GiftCardServicesApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteGiftCardService()**](GiftCardServicesApi.md#deleteGiftCardService) | **DELETE** /gift-card-services/{gift_card_service_id} | Delete gift card service
[**getGiftCardService()**](GiftCardServicesApi.md#getGiftCardService) | **GET** /gift-card-services/{gift_card_service_id} | Get gift card service
[**newGiftCardService()**](GiftCardServicesApi.md#newGiftCardService) | **POST** /gift-card-services | New gift card service
[**updateGiftCardService()**](GiftCardServicesApi.md#updateGiftCardService) | **PUT** /gift-card-services/{gift_card_service_id} | Update gift card service
[**verifyGiftCardService()**](GiftCardServicesApi.md#verifyGiftCardService) | **POST** /gift-card-services/verify | Verify gift card service credentials


## `deleteGiftCardService()`

```php
deleteGiftCardService($gift_card_service_id)
```

Delete gift card service

Deletes a specific gift card service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\GiftCardServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gift_card_service_id = 541b126f-44c5-4c5e-a06b-d0e0d54c7d3f; // string | The unique ID of the gift card service.

try {
    $apiInstance->deleteGiftCardService($gift_card_service_id);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardServicesApi->deleteGiftCardService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_card_service_id** | **string**| The unique ID of the gift card service. |

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

## `getGiftCardService()`

```php
getGiftCardService($gift_card_service_id): \Gr4vy\model\GiftCardService
```

Get gift card service

Retrieves the details of a single configured gift card service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\GiftCardServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gift_card_service_id = 541b126f-44c5-4c5e-a06b-d0e0d54c7d3f; // string | The unique ID of the gift card service.

try {
    $result = $apiInstance->getGiftCardService($gift_card_service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardServicesApi->getGiftCardService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_card_service_id** | **string**| The unique ID of the gift card service. |

### Return type

[**\Gr4vy\model\GiftCardService**](../Model/GiftCardService.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newGiftCardService()`

```php
newGiftCardService($gift_card_service_create_request): \Gr4vy\model\GiftCardService
```

New gift card service

Adds a new gift card service by providing a custom name and a value for each of the required fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\GiftCardServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gift_card_service_create_request = new \Gr4vy\model\GiftCardServiceCreateRequest(); // \Gr4vy\model\GiftCardServiceCreateRequest

try {
    $result = $apiInstance->newGiftCardService($gift_card_service_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardServicesApi->newGiftCardService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_card_service_create_request** | [**\Gr4vy\model\GiftCardServiceCreateRequest**](../Model/GiftCardServiceCreateRequest.md)|  | [optional]

### Return type

[**\Gr4vy\model\GiftCardService**](../Model/GiftCardService.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGiftCardService()`

```php
updateGiftCardService($gift_card_service_id, $gift_card_service_update_request): \Gr4vy\model\GiftCardService
```

Update gift card service

Updates an existing gift card service. Allows all fields to be changed except for the service ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\GiftCardServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gift_card_service_id = 541b126f-44c5-4c5e-a06b-d0e0d54c7d3f; // string | The unique ID of the gift card service.
$gift_card_service_update_request = new \Gr4vy\model\GiftCardServiceUpdateRequest(); // \Gr4vy\model\GiftCardServiceUpdateRequest

try {
    $result = $apiInstance->updateGiftCardService($gift_card_service_id, $gift_card_service_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardServicesApi->updateGiftCardService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_card_service_id** | **string**| The unique ID of the gift card service. |
 **gift_card_service_update_request** | [**\Gr4vy\model\GiftCardServiceUpdateRequest**](../Model/GiftCardServiceUpdateRequest.md)|  | [optional]

### Return type

[**\Gr4vy\model\GiftCardService**](../Model/GiftCardService.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyGiftCardService()`

```php
verifyGiftCardService($gift_card_service_verify_request)
```

Verify gift card service credentials

Verifies a set of credentials against a gift card service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\GiftCardServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gift_card_service_verify_request = new \Gr4vy\model\GiftCardServiceVerifyRequest(); // \Gr4vy\model\GiftCardServiceVerifyRequest

try {
    $apiInstance->verifyGiftCardService($gift_card_service_verify_request);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardServicesApi->verifyGiftCardService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_card_service_verify_request** | [**\Gr4vy\model\GiftCardServiceVerifyRequest**](../Model/GiftCardServiceVerifyRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
