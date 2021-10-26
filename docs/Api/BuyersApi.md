# Gr4vy\BuyersApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addBuyer()**](BuyersApi.md#addBuyer) | **POST** /buyers | New buyer
[**deleteBuyer()**](BuyersApi.md#deleteBuyer) | **DELETE** /buyers/{buyer_id} | Delete buyer
[**getBuyer()**](BuyersApi.md#getBuyer) | **GET** /buyers/{buyer_id} | Get buyer
[**listBuyers()**](BuyersApi.md#listBuyers) | **GET** /buyers | List buyers
[**updateBuyer()**](BuyersApi.md#updateBuyer) | **PUT** /buyers/{buyer_id} | Update buyer


## `addBuyer()`

```php
addBuyer($buyer_request): \Gr4vy\model\Buyer
```

New buyer

Adds a buyer, allowing for payment methods and transactions to be associated to this buyer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\BuyersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buyer_request = new \Gr4vy\model\BuyerRequest(); // \Gr4vy\model\BuyerRequest

try {
    $result = $apiInstance->addBuyer($buyer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyersApi->addBuyer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buyer_request** | [**\Gr4vy\model\BuyerRequest**](../Model/BuyerRequest.md)|  | [optional]

### Return type

[**\Gr4vy\model\Buyer**](../Model/Buyer.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBuyer()`

```php
deleteBuyer($buyer_id)
```

Delete buyer

Deletes a buyer record. Any associated tokenized payment methods will remain in the system but no longer associated to the buyer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\BuyersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buyer_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | The unique ID for a buyer.

try {
    $apiInstance->deleteBuyer($buyer_id);
} catch (Exception $e) {
    echo 'Exception when calling BuyersApi->deleteBuyer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buyer_id** | **string**| The unique ID for a buyer. |

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

## `getBuyer()`

```php
getBuyer($buyer_id): \Gr4vy\model\Buyer
```

Get buyer

Gets the information about a buyer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\BuyersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buyer_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | The unique ID for a buyer.

try {
    $result = $apiInstance->getBuyer($buyer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyersApi->getBuyer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buyer_id** | **string**| The unique ID for a buyer. |

### Return type

[**\Gr4vy\model\Buyer**](../Model/Buyer.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBuyers()`

```php
listBuyers($search, $limit, $cursor): \Gr4vy\model\Buyers
```

List buyers

Returns a list of buyers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\BuyersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = John; // string | Filters the results to only the buyers for which the `display_name` or `external_identifier` matches this value. This field allows for a partial match, matching any buyer for which either of the fields partially or completely matches.
$limit = 1; // int | Defines the maximum number of items to return for this request.
$cursor = ZXhhbXBsZTE; // string | A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the `next_cursor` field. Similarly the `previous_cursor` can be used to reverse backwards in the list.

try {
    $result = $apiInstance->listBuyers($search, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyersApi->listBuyers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Filters the results to only the buyers for which the &#x60;display_name&#x60; or &#x60;external_identifier&#x60; matches this value. This field allows for a partial match, matching any buyer for which either of the fields partially or completely matches. | [optional]
 **limit** | **int**| Defines the maximum number of items to return for this request. | [optional] [default to 20]
 **cursor** | **string**| A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the &#x60;next_cursor&#x60; field. Similarly the &#x60;previous_cursor&#x60; can be used to reverse backwards in the list. | [optional]

### Return type

[**\Gr4vy\model\Buyers**](../Model/Buyers.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBuyer()`

```php
updateBuyer($buyer_id, $buyer_update): \Gr4vy\model\Buyer
```

Update buyer

Updates a buyer's details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\BuyersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buyer_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | The unique ID for a buyer.
$buyer_update = {"external_identifier":"42623266","display_name":"John D."}; // \Gr4vy\model\BuyerUpdate

try {
    $result = $apiInstance->updateBuyer($buyer_id, $buyer_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyersApi->updateBuyer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buyer_id** | **string**| The unique ID for a buyer. |
 **buyer_update** | [**\Gr4vy\model\BuyerUpdate**](../Model/BuyerUpdate.md)|  | [optional]

### Return type

[**\Gr4vy\model\Buyer**](../Model/Buyer.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
