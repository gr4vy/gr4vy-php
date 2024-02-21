# Gr4vy\TokensApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteNetworkToken()**](TokensApi.md#deleteNetworkToken) | **DELETE** /payment-methods/{payment_method_id}/network-tokens/{network_token_id} | Delete network token
[**deletePaymentServiceToken()**](TokensApi.md#deletePaymentServiceToken) | **DELETE** /payment-methods/{payment_method_id}/payment-service-tokens/{payment_service_token_id} | Delete payment service token
[**getNetworkTokens()**](TokensApi.md#getNetworkTokens) | **GET** /payment-methods/{payment_method_id}/network-tokens | Get network tokens
[**getPaymentServiceTokens()**](TokensApi.md#getPaymentServiceTokens) | **GET** /payment-methods/{payment_method_id}/payment-service-tokens | Get payment service tokens
[**issueCryptogram()**](TokensApi.md#issueCryptogram) | **POST** /payment-methods/{payment_method_id}/network-tokens/{network_token_id}/cryptogram | Issue cryptogram
[**provisionNetworkToken()**](TokensApi.md#provisionNetworkToken) | **POST** /payment-methods/{payment_method_id}/network-tokens | Provision network token
[**provisionPaymentServiceToken()**](TokensApi.md#provisionPaymentServiceToken) | **POST** /payment-methods/{payment_method_id}/payment-service-tokens | Provision payment service token
[**resumeNetworkToken()**](TokensApi.md#resumeNetworkToken) | **POST** /payment-methods/{payment_method_id}/network-tokens/{network_token_id}/resume | Resume network token
[**suspendNetworkToken()**](TokensApi.md#suspendNetworkToken) | **POST** /payment-methods/{payment_method_id}/network-tokens/{network_token_id}/suspend | Suspend network token


## `deleteNetworkToken()`

```php
deleteNetworkToken($payment_method_id, $network_token_id)
```

Delete network token

Deletes a specific network token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method_id = 46973e9d-88a7-44a6-abfe-be4ff0134ff4; // string | The ID of the payment method.
$network_token_id = 454f6a32-a572-4dda-b885-3e8674086123; // string | The ID of the network token.

try {
    $apiInstance->deleteNetworkToken($payment_method_id, $network_token_id);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->deleteNetworkToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **string**| The ID of the payment method. |
 **network_token_id** | **string**| The ID of the network token. |

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

## `deletePaymentServiceToken()`

```php
deletePaymentServiceToken($payment_method_id, $payment_service_token_id)
```

Delete payment service token

Deletes a specific payment service token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method_id = 46973e9d-88a7-44a6-abfe-be4ff0134ff4; // string | The ID of the payment method.
$payment_service_token_id = 7e7ede54-616a-422e-8f58-89a79ae2baea; // string | The ID of the payment service token.

try {
    $apiInstance->deletePaymentServiceToken($payment_method_id, $payment_service_token_id);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->deletePaymentServiceToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **string**| The ID of the payment method. |
 **payment_service_token_id** | **string**| The ID of the payment service token. |

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

## `getNetworkTokens()`

```php
getNetworkTokens($payment_method_id, $payment_method_id2): \Gr4vy\model\NetworkTokens
```

Get network tokens

Get stored network tokens for the given payment method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method_id = 46973e9d-88a7-44a6-abfe-be4ff0134ff4; // string | The ID of the payment method.
$payment_method_id2 = 46973e9d-88a7-44a6-abfe-be4ff0134ff4; // string | Filters for transactions that have a payment method with an ID that matches exactly with the provided value.

try {
    $result = $apiInstance->getNetworkTokens($payment_method_id, $payment_method_id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->getNetworkTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **string**| The ID of the payment method. |
 **payment_method_id2** | **string**| Filters for transactions that have a payment method with an ID that matches exactly with the provided value. | [optional]

### Return type

[**\Gr4vy\model\NetworkTokens**](../Model/NetworkTokens.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentServiceTokens()`

```php
getPaymentServiceTokens($payment_method_id, $payment_method_id2): \Gr4vy\model\PaymentServiceTokens
```

Get payment service tokens

Get all payment service tokens for a given payment method and payment service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method_id = 46973e9d-88a7-44a6-abfe-be4ff0134ff4; // string | The ID of the payment method.
$payment_method_id2 = 46973e9d-88a7-44a6-abfe-be4ff0134ff4; // string | Filters for transactions that have a payment method with an ID that matches exactly with the provided value.

try {
    $result = $apiInstance->getPaymentServiceTokens($payment_method_id, $payment_method_id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->getPaymentServiceTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **string**| The ID of the payment method. |
 **payment_method_id2** | **string**| Filters for transactions that have a payment method with an ID that matches exactly with the provided value. | [optional]

### Return type

[**\Gr4vy\model\PaymentServiceTokens**](../Model/PaymentServiceTokens.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueCryptogram()`

```php
issueCryptogram($payment_method_id, $network_token_id, $issue_cryptogram_request): \Gr4vy\model\Cryptogram
```

Issue cryptogram

Issue a cryptogram for a stored network token of a stored card. The endpoint is disabled by default, please contact our team for more information on enablement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method_id = 46973e9d-88a7-44a6-abfe-be4ff0134ff4; // string | The ID of the payment method.
$network_token_id = 454f6a32-a572-4dda-b885-3e8674086123; // string | The ID of the network token.
$issue_cryptogram_request = new \Gr4vy\model\IssueCryptogramRequest(); // \Gr4vy\model\IssueCryptogramRequest

try {
    $result = $apiInstance->issueCryptogram($payment_method_id, $network_token_id, $issue_cryptogram_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->issueCryptogram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **string**| The ID of the payment method. |
 **network_token_id** | **string**| The ID of the network token. |
 **issue_cryptogram_request** | [**\Gr4vy\model\IssueCryptogramRequest**](../Model/IssueCryptogramRequest.md)|  | [optional]

### Return type

[**\Gr4vy\model\Cryptogram**](../Model/Cryptogram.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `provisionNetworkToken()`

```php
provisionNetworkToken($payment_method_id, $network_token_request): \Gr4vy\model\NetworkToken
```

Provision network token

Provision a network token for a stored card.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method_id = 46973e9d-88a7-44a6-abfe-be4ff0134ff4; // string | The ID of the payment method.
$network_token_request = new \Gr4vy\model\NetworkTokenRequest(); // \Gr4vy\model\NetworkTokenRequest

try {
    $result = $apiInstance->provisionNetworkToken($payment_method_id, $network_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->provisionNetworkToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **string**| The ID of the payment method. |
 **network_token_request** | [**\Gr4vy\model\NetworkTokenRequest**](../Model/NetworkTokenRequest.md)|  | [optional]

### Return type

[**\Gr4vy\model\NetworkToken**](../Model/NetworkToken.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `provisionPaymentServiceToken()`

```php
provisionPaymentServiceToken($payment_method_id, $payment_service_token_request): \Gr4vy\model\PaymentServiceToken
```

Provision payment service token

Tokenize stored card against a payment service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method_id = 46973e9d-88a7-44a6-abfe-be4ff0134ff4; // string | The ID of the payment method.
$payment_service_token_request = new \Gr4vy\model\PaymentServiceTokenRequest(); // \Gr4vy\model\PaymentServiceTokenRequest

try {
    $result = $apiInstance->provisionPaymentServiceToken($payment_method_id, $payment_service_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->provisionPaymentServiceToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **string**| The ID of the payment method. |
 **payment_service_token_request** | [**\Gr4vy\model\PaymentServiceTokenRequest**](../Model/PaymentServiceTokenRequest.md)|  | [optional]

### Return type

[**\Gr4vy\model\PaymentServiceToken**](../Model/PaymentServiceToken.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resumeNetworkToken()`

```php
resumeNetworkToken($payment_method_id, $network_token_id): \Gr4vy\model\NetworkToken
```

Resume network token

Resumes a specific network token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method_id = 46973e9d-88a7-44a6-abfe-be4ff0134ff4; // string | The ID of the payment method.
$network_token_id = 454f6a32-a572-4dda-b885-3e8674086123; // string | The ID of the network token.

try {
    $result = $apiInstance->resumeNetworkToken($payment_method_id, $network_token_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->resumeNetworkToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **string**| The ID of the payment method. |
 **network_token_id** | **string**| The ID of the network token. |

### Return type

[**\Gr4vy\model\NetworkToken**](../Model/NetworkToken.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `suspendNetworkToken()`

```php
suspendNetworkToken($payment_method_id, $network_token_id): \Gr4vy\model\NetworkToken
```

Suspend network token

Suspends a specific network token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method_id = 46973e9d-88a7-44a6-abfe-be4ff0134ff4; // string | The ID of the payment method.
$network_token_id = 454f6a32-a572-4dda-b885-3e8674086123; // string | The ID of the network token.

try {
    $result = $apiInstance->suspendNetworkToken($payment_method_id, $network_token_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->suspendNetworkToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **string**| The ID of the payment method. |
 **network_token_id** | **string**| The ID of the network token. |

### Return type

[**\Gr4vy\model\NetworkToken**](../Model/NetworkToken.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
