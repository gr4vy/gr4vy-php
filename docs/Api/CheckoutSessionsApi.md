# Gr4vy\CheckoutSessionsApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCheckoutSession()**](CheckoutSessionsApi.md#addCheckoutSession) | **POST** /checkout/sessions | Create a new Checkout Session
[**deleteCheckoutSession()**](CheckoutSessionsApi.md#deleteCheckoutSession) | **DELETE** /checkout/sessions/{checkout_session_id} | Delete a Checkout Session
[**getCheckoutSession()**](CheckoutSessionsApi.md#getCheckoutSession) | **GET** /checkout/sessions/{checkout_session_id} | Get a Checkout Session
[**updateCheckoutSessionFields()**](CheckoutSessionsApi.md#updateCheckoutSessionFields) | **PUT** /checkout/sessions/{checkout_session_id}/fields | Update a Checkout Session&#39;s Secure Fields


## `addCheckoutSession()`

```php
addCheckoutSession(): \Gr4vy\model\CheckoutSession
```

Create a new Checkout Session

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

try {
    $result = $apiInstance->addCheckoutSession();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutSessionsApi->addCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `deleteCheckoutSession()`

```php
deleteCheckoutSession($checkout_session_id)
```

Delete a Checkout Session

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

Get a Checkout Session

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

## `updateCheckoutSessionFields()`

```php
updateCheckoutSessionFields($checkout_session_id, $checkout_session_secure_fields_update)
```

Update a Checkout Session's Secure Fields

Updates the Secure Fields of the Checkout Session. Once the fields have been received the `expires_at` will be updated to 5 minutes from the time of receipt.

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
$checkout_session_secure_fields_update = new \Gr4vy\model\CheckoutSessionSecureFieldsUpdate(); // \Gr4vy\model\CheckoutSessionSecureFieldsUpdate

try {
    $apiInstance->updateCheckoutSessionFields($checkout_session_id, $checkout_session_secure_fields_update);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutSessionsApi->updateCheckoutSessionFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_session_id** | **string**| The unique ID for a Checkout Session. |
 **checkout_session_secure_fields_update** | [**\Gr4vy\model\CheckoutSessionSecureFieldsUpdate**](../Model/CheckoutSessionSecureFieldsUpdate.md)|  | [optional]

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
