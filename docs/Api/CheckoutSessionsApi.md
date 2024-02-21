# Gr4vy\CheckoutSessionsApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCheckoutSession()**](CheckoutSessionsApi.md#deleteCheckoutSession) | **DELETE** /checkout/sessions/{checkout_session_id} | Delete checkout session
[**getCheckoutSession()**](CheckoutSessionsApi.md#getCheckoutSession) | **GET** /checkout/sessions/{checkout_session_id} | Get checkout session
[**newCheckoutSession()**](CheckoutSessionsApi.md#newCheckoutSession) | **POST** /checkout/sessions | New checkout session
[**updateCheckoutSession()**](CheckoutSessionsApi.md#updateCheckoutSession) | **PUT** /checkout/sessions/{checkout_session_id} | Update checkout session


## `deleteCheckoutSession()`

```php
deleteCheckoutSession($checkout_session_id)
```

Delete checkout session

Deletes a Checkout Session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\CheckoutSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_session_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | The unique ID for a Checkout Session.

try {
    $apiInstance->deleteCheckoutSession($checkout_session_id);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutSessionsApi->deleteCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_session_id** | **string**| The unique ID for a Checkout Session. |

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

## `getCheckoutSession()`

```php
getCheckoutSession($checkout_session_id): \Gr4vy\model\CheckoutSession
```

Get checkout session

Gets details about a current Checkout Session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\CheckoutSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_session_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | The unique ID for a Checkout Session.

try {
    $result = $apiInstance->getCheckoutSession($checkout_session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutSessionsApi->getCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_session_id** | **string**| The unique ID for a Checkout Session. |

### Return type

[**\Gr4vy\model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newCheckoutSession()`

```php
newCheckoutSession($checkout_session_create_request): \Gr4vy\model\CheckoutSession
```

New checkout session

Creates a new Checkout Session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\CheckoutSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_session_create_request = new \Gr4vy\model\CheckoutSessionCreateRequest(); // \Gr4vy\model\CheckoutSessionCreateRequest

try {
    $result = $apiInstance->newCheckoutSession($checkout_session_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutSessionsApi->newCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_session_create_request** | [**\Gr4vy\model\CheckoutSessionCreateRequest**](../Model/CheckoutSessionCreateRequest.md)|  | [optional]

### Return type

[**\Gr4vy\model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCheckoutSession()`

```php
updateCheckoutSession($checkout_session_id, $checkout_session_update_request): \Gr4vy\model\CheckoutSession
```

Update checkout session

Updates a Checkout Session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\CheckoutSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_session_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | The unique ID for a Checkout Session.
$checkout_session_update_request = new \Gr4vy\model\CheckoutSessionUpdateRequest(); // \Gr4vy\model\CheckoutSessionUpdateRequest

try {
    $result = $apiInstance->updateCheckoutSession($checkout_session_id, $checkout_session_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutSessionsApi->updateCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_session_id** | **string**| The unique ID for a Checkout Session. |
 **checkout_session_update_request** | [**\Gr4vy\model\CheckoutSessionUpdateRequest**](../Model/CheckoutSessionUpdateRequest.md)|  | [optional]

### Return type

[**\Gr4vy\model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
