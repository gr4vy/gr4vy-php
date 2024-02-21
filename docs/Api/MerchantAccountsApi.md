# Gr4vy\MerchantAccountsApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteMerchantAccuont()**](MerchantAccountsApi.md#deleteMerchantAccuont) | **DELETE** /merchant-accounts/{merchant_account_id} | Delete merchant account
[**getMerchantAccount()**](MerchantAccountsApi.md#getMerchantAccount) | **GET** /merchant-accounts/{merchant_account_id} | Get merchant account
[**listMerchantAccounts()**](MerchantAccountsApi.md#listMerchantAccounts) | **GET** /merchant-accounts | List merchant accounts
[**newMerchantAccount()**](MerchantAccountsApi.md#newMerchantAccount) | **POST** /merchant-accounts | New merchant account
[**updateMerchantAccount()**](MerchantAccountsApi.md#updateMerchantAccount) | **PUT** /merchant-accounts/{merchant_account_id} | Update merchant account


## `deleteMerchantAccuont()`

```php
deleteMerchantAccuont($merchant_account_id)
```

Delete merchant account

Deletes a specific merchant account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\MerchantAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_account_id = plantly-uk; // string | The unique ID for a merchant account.

try {
    $apiInstance->deleteMerchantAccuont($merchant_account_id);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAccountsApi->deleteMerchantAccuont: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_account_id** | **string**| The unique ID for a merchant account. |

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

## `getMerchantAccount()`

```php
getMerchantAccount($merchant_account_id): \Gr4vy\model\MerchantAccount
```

Get merchant account

Retrieves details of a merchant account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\MerchantAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_account_id = plantly-uk; // string | The unique ID for a merchant account.

try {
    $result = $apiInstance->getMerchantAccount($merchant_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAccountsApi->getMerchantAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_account_id** | **string**| The unique ID for a merchant account. |

### Return type

[**\Gr4vy\model\MerchantAccount**](../Model/MerchantAccount.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMerchantAccounts()`

```php
listMerchantAccounts(): \Gr4vy\model\MerchantAccounts
```

List merchant accounts

Lists all merchant accounts in an instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\MerchantAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listMerchantAccounts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAccountsApi->listMerchantAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Gr4vy\model\MerchantAccounts**](../Model/MerchantAccounts.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newMerchantAccount()`

```php
newMerchantAccount($merchant_account_create): \Gr4vy\model\MerchantAccount
```

New merchant account

Create a merchant account. Optionally, provide an `outbound_webhook_url`, and if HTTP Basic Authentication is required, provide the `outbound_webhook_username` and `outbound_webhook_password`. When retrieving a Merchant Account the `outbound_webhook_password` will be omitted.  Optionally provide Network Tokens configuration per scheme. If done, all parameters for the same scheme must be provided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\MerchantAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_account_create = {"id":"plantly-uk","display_name":"Plantly UK","outbound_webhook_url":"https://www.example.com/webhook","outbound_webhook_username":"gr4vy","outbound_webhook_password":"super-secret-password","visa_network_tokens_requestor_id":"e50fa0da-903d-4d54-aacc-4cac57d48df2","visa_network_tokens_app_id":"ca12b3d0-4e23-41a9-906f-e5cbb8e6a731"}; // \Gr4vy\model\MerchantAccountCreate

try {
    $result = $apiInstance->newMerchantAccount($merchant_account_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAccountsApi->newMerchantAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_account_create** | [**\Gr4vy\model\MerchantAccountCreate**](../Model/MerchantAccountCreate.md)|  | [optional]

### Return type

[**\Gr4vy\model\MerchantAccount**](../Model/MerchantAccount.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMerchantAccount()`

```php
updateMerchantAccount($merchant_account_id, $merchant_account_update): \Gr4vy\model\MerchantAccount
```

Update merchant account

Update an existing merchant account. Optionally, provide an `outbound_webhook_url`, and if HTTP Basic Authentication is required, provide the `outbound_webhook_username` and `outbound_webhook_password`. When retrieving a Merchant Account the `outbound_webhook_password` will be omitted.  Optionally provide Network Tokens configuration per scheme. If done, all parameters for the same scheme must be provided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\MerchantAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_account_id = plantly-uk; // string | The unique ID for a merchant account.
$merchant_account_update = {"display_name":"Plantly UK","outbound_webhook_url":"https://www.example.com/webhook","outbound_webhook_username":"gr4vy","outbound_webhook_password":"super-secret-password","visa_network_tokens_requestor_id":"e50fa0da-903d-4d54-aacc-4cac57d48df2","visa_network_tokens_app_id":"ca12b3d0-4e23-41a9-906f-e5cbb8e6a731"}; // \Gr4vy\model\MerchantAccountUpdate

try {
    $result = $apiInstance->updateMerchantAccount($merchant_account_id, $merchant_account_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantAccountsApi->updateMerchantAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_account_id** | **string**| The unique ID for a merchant account. |
 **merchant_account_update** | [**\Gr4vy\model\MerchantAccountUpdate**](../Model/MerchantAccountUpdate.md)|  | [optional]

### Return type

[**\Gr4vy\model\MerchantAccount**](../Model/MerchantAccount.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
