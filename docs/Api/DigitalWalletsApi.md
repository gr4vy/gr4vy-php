# Gr4vy\DigitalWalletsApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deregisterDigitalWallet()**](DigitalWalletsApi.md#deregisterDigitalWallet) | **DELETE** /digital-wallets/{digital_wallet_id} | De-register digital wallet
[**getDigitalWallet()**](DigitalWalletsApi.md#getDigitalWallet) | **GET** /digital-wallets/{digital_wallet_id} | Get digital wallet
[**listDigitalWallets()**](DigitalWalletsApi.md#listDigitalWallets) | **GET** /digital-wallets | List digital wallets
[**registerDigitalWallet()**](DigitalWalletsApi.md#registerDigitalWallet) | **POST** /digital-wallets | Register digital wallet
[**updateDigitalWallet()**](DigitalWalletsApi.md#updateDigitalWallet) | **PUT** /digital-wallets/{digital_wallet_id} | Update digital wallet


## `deregisterDigitalWallet()`

```php
deregisterDigitalWallet($digital_wallet_id)
```

De-register digital wallet

De-registers a digital wallet with a provider. Upon successful de-registration, the digital wallet's record is deleted and will no longer be available.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\DigitalWalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$digital_wallet_id = fe26475d-ec3e-4884-9553-f7356683f7f9; // string | The ID of the registered digital wallet.

try {
    $apiInstance->deregisterDigitalWallet($digital_wallet_id);
} catch (Exception $e) {
    echo 'Exception when calling DigitalWalletsApi->deregisterDigitalWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **digital_wallet_id** | **string**| The ID of the registered digital wallet. |

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

## `getDigitalWallet()`

```php
getDigitalWallet($digital_wallet_id): \Gr4vy\model\DigitalWallet
```

Get digital wallet

Returns a registered digital wallet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\DigitalWalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$digital_wallet_id = fe26475d-ec3e-4884-9553-f7356683f7f9; // string | The ID of the registered digital wallet.

try {
    $result = $apiInstance->getDigitalWallet($digital_wallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalWalletsApi->getDigitalWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **digital_wallet_id** | **string**| The ID of the registered digital wallet. |

### Return type

[**\Gr4vy\model\DigitalWallet**](../Model/DigitalWallet.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDigitalWallets()`

```php
listDigitalWallets(): \Gr4vy\model\DigitalWallets
```

List digital wallets

Returns a list of all registered digital wallets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\DigitalWalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listDigitalWallets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalWalletsApi->listDigitalWallets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Gr4vy\model\DigitalWallets**](../Model/DigitalWallets.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerDigitalWallet()`

```php
registerDigitalWallet($digital_wallet_request): \Gr4vy\model\DigitalWallet
```

Register digital wallet

Register with a digital wallet provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\DigitalWalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$digital_wallet_request = new \Gr4vy\model\DigitalWalletRequest(); // \Gr4vy\model\DigitalWalletRequest

try {
    $result = $apiInstance->registerDigitalWallet($digital_wallet_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalWalletsApi->registerDigitalWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **digital_wallet_request** | [**\Gr4vy\model\DigitalWalletRequest**](../Model/DigitalWalletRequest.md)|  | [optional]

### Return type

[**\Gr4vy\model\DigitalWallet**](../Model/DigitalWallet.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDigitalWallet()`

```php
updateDigitalWallet($digital_wallet_id, $digital_wallet_update): \Gr4vy\model\DigitalWallet
```

Update digital wallet

Updates the values a digital wallet was registered with, and the Gr4vy environments in which a registered digital wallet should be available.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\DigitalWalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$digital_wallet_id = fe26475d-ec3e-4884-9553-f7356683f7f9; // string | The ID of the registered digital wallet.
$digital_wallet_update = new \Gr4vy\model\DigitalWalletUpdate(); // \Gr4vy\model\DigitalWalletUpdate

try {
    $result = $apiInstance->updateDigitalWallet($digital_wallet_id, $digital_wallet_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalWalletsApi->updateDigitalWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **digital_wallet_id** | **string**| The ID of the registered digital wallet. |
 **digital_wallet_update** | [**\Gr4vy\model\DigitalWalletUpdate**](../Model/DigitalWalletUpdate.md)|  | [optional]

### Return type

[**\Gr4vy\model\DigitalWallet**](../Model/DigitalWallet.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
