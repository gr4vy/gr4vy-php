# Gr4vy\GiftCardsApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkGiftCardBalances()**](GiftCardsApi.md#checkGiftCardBalances) | **POST** /gift-cards/balances | Check gift card balances
[**deleteGiftCard()**](GiftCardsApi.md#deleteGiftCard) | **DELETE** /gift-cards/{gift_card_id} | Delete gift card
[**getGiftCard()**](GiftCardsApi.md#getGiftCard) | **GET** /gift-cards/{gift_card_id} | Get gift card
[**listBuyerGiftCards()**](GiftCardsApi.md#listBuyerGiftCards) | **GET** /buyers/gift-cards | List gift cards buyer
[**listGiftCards()**](GiftCardsApi.md#listGiftCards) | **GET** /gift-cards | List gift cards
[**storeGiftCard()**](GiftCardsApi.md#storeGiftCard) | **POST** /gift-cards | Store gift card


## `checkGiftCardBalances()`

```php
checkGiftCardBalances($gift_card_balances_request): \Gr4vy\model\GiftCardsSummary
```

Check gift card balances

Returns details for a list of gift cards with updated balances.  Duplicated gift card numbers are not supported. This includes both stored gift cards, as well as those directly provided via the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\GiftCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gift_card_balances_request = new \Gr4vy\model\GiftCardBalancesRequest(); // \Gr4vy\model\GiftCardBalancesRequest

try {
    $result = $apiInstance->checkGiftCardBalances($gift_card_balances_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardsApi->checkGiftCardBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_card_balances_request** | [**\Gr4vy\model\GiftCardBalancesRequest**](../Model/GiftCardBalancesRequest.md)|  | [optional]

### Return type

[**\Gr4vy\model\GiftCardsSummary**](../Model/GiftCardsSummary.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGiftCard()`

```php
deleteGiftCard($gift_card_id)
```

Delete gift card

Removes a stored gift card.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\GiftCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gift_card_id = e6cdf979-87e2-4796-8ff6-9784d5aed893; // string | The unique ID of a stored gift card.

try {
    $apiInstance->deleteGiftCard($gift_card_id);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardsApi->deleteGiftCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_card_id** | **string**| The unique ID of a stored gift card. |

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

## `getGiftCard()`

```php
getGiftCard($gift_card_id): \Gr4vy\model\GiftCard
```

Get gift card

Retrieves details of a stored gift card.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\GiftCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gift_card_id = e6cdf979-87e2-4796-8ff6-9784d5aed893; // string | The unique ID of a stored gift card.

try {
    $result = $apiInstance->getGiftCard($gift_card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardsApi->getGiftCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_card_id** | **string**| The unique ID of a stored gift card. |

### Return type

[**\Gr4vy\model\GiftCard**](../Model/GiftCard.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBuyerGiftCards()`

```php
listBuyerGiftCards($buyer_id, $buyer_external_identifier): \Gr4vy\model\GiftCardsSummary
```

List gift cards buyer

Returns a list of all stored, not-expired gift cards and their balances for a buyer in a summarized format.  All stored gift cards are returned, even if we were not able to fetch the latest balance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\GiftCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buyer_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | Filters the results to only the items for which the `buyer` has an `id` that matches this value.
$buyer_external_identifier = user-12345; // string | Filters the results to only the items for which the `buyer` has an `external_identifier` that matches this value.

try {
    $result = $apiInstance->listBuyerGiftCards($buyer_id, $buyer_external_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardsApi->listBuyerGiftCards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buyer_id** | **string**| Filters the results to only the items for which the &#x60;buyer&#x60; has an &#x60;id&#x60; that matches this value. | [optional]
 **buyer_external_identifier** | **string**| Filters the results to only the items for which the &#x60;buyer&#x60; has an &#x60;external_identifier&#x60; that matches this value. | [optional]

### Return type

[**\Gr4vy\model\GiftCardsSummary**](../Model/GiftCardsSummary.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGiftCards()`

```php
listGiftCards($buyer_id, $buyer_external_identifier, $limit, $cursor): \Gr4vy\model\GiftCards
```

List gift cards

Returns all stored gift cards.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\GiftCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buyer_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | Filters the results to only the items for which the `buyer` has an `id` that matches this value.
$buyer_external_identifier = user-12345; // string | Filters the results to only the items for which the `buyer` has an `external_identifier` that matches this value.
$limit = 1; // int | Defines the maximum number of items to return for this request.
$cursor = ZXhhbXBsZTE; // string | A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the `next_cursor` field. Similarly the `previous_cursor` can be used to reverse backwards in the list.

try {
    $result = $apiInstance->listGiftCards($buyer_id, $buyer_external_identifier, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardsApi->listGiftCards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buyer_id** | **string**| Filters the results to only the items for which the &#x60;buyer&#x60; has an &#x60;id&#x60; that matches this value. | [optional]
 **buyer_external_identifier** | **string**| Filters the results to only the items for which the &#x60;buyer&#x60; has an &#x60;external_identifier&#x60; that matches this value. | [optional]
 **limit** | **int**| Defines the maximum number of items to return for this request. | [optional] [default to 20]
 **cursor** | **string**| A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the &#x60;next_cursor&#x60; field. Similarly the &#x60;previous_cursor&#x60; can be used to reverse backwards in the list. | [optional]

### Return type

[**\Gr4vy\model\GiftCards**](../Model/GiftCards.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storeGiftCard()`

```php
storeGiftCard($gift_card_store_request): \Gr4vy\model\GiftCard
```

Store gift card

Stores a gift card.  Vaulting a gift card stores and validate it against the active gift card service.  It is only possible to store a gift card against a buyer if the same card is not already stored on the buyer and the gift card has not expired yet.  Buyers by default can only have a maximum limit of 10 gift cards stored against them. Please contact our team to change this limit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\GiftCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gift_card_store_request = new \Gr4vy\model\GiftCardStoreRequest(); // \Gr4vy\model\GiftCardStoreRequest

try {
    $result = $apiInstance->storeGiftCard($gift_card_store_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardsApi->storeGiftCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_card_store_request** | [**\Gr4vy\model\GiftCardStoreRequest**](../Model/GiftCardStoreRequest.md)|  | [optional]

### Return type

[**\Gr4vy\model\GiftCard**](../Model/GiftCard.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
