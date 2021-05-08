# Gr4vy\CardRulesApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCardRule()**](CardRulesApi.md#addCardRule) | **POST** /card-rules | Create card rule
[**deleteCardRule()**](CardRulesApi.md#deleteCardRule) | **DELETE** /card-rules/{card_rule_id} | Delete card rule
[**getCardRule()**](CardRulesApi.md#getCardRule) | **GET** /card-rules/{card_rule_id} | Get card rule
[**listCardsRules()**](CardRulesApi.md#listCardsRules) | **GET** /card-rules | List card rules
[**updateCardRule()**](CardRulesApi.md#updateCardRule) | **PUT** /card-rules/{card_rule_id} | Update card rule


## `addCardRule()`

```php
addCardRule($card_rule_request): \Gr4vy\model\CardRule
```

Create card rule

Creates a new rule that is used for card transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\CardRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_rule_request = new \Gr4vy\model\CardRuleRequest(); // \Gr4vy\model\CardRuleRequest

try {
    $result = $apiInstance->addCardRule($card_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardRulesApi->addCardRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_rule_request** | [**\Gr4vy\model\CardRuleRequest**](../Model/CardRuleRequest.md)|  | [optional]

### Return type

[**\Gr4vy\model\CardRule**](../Model/CardRule.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCardRule()`

```php
deleteCardRule($card_rule_id)
```

Delete card rule

Deletes a specific card rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\CardRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_rule_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | The unique ID for a card rule.

try {
    $apiInstance->deleteCardRule($card_rule_id);
} catch (Exception $e) {
    echo 'Exception when calling CardRulesApi->deleteCardRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_rule_id** | [**string**](../Model/.md)| The unique ID for a card rule. |

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

## `getCardRule()`

```php
getCardRule($card_rule_id): \Gr4vy\model\CardRule
```

Get card rule

Returns a rule that can be used for card transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\CardRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_rule_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | The unique ID for a card rule.

try {
    $result = $apiInstance->getCardRule($card_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardRulesApi->getCardRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_rule_id** | [**string**](../Model/.md)| The unique ID for a card rule. |

### Return type

[**\Gr4vy\model\CardRule**](../Model/CardRule.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCardsRules()`

```php
listCardsRules($limit, $cursor, $environment): \Gr4vy\model\CardRules
```

List card rules

Returns a list of rules for card transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\CardRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1; // int | Defines the maximum number of items to return for this request.
$cursor = ZXhhbXBsZTE; // string | A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the `next_cursor` field. Similarly the `previous_cursor` can be used to reverse backwards in the list.
$environment = staging; // string | Filters the results to only the items available in this environment.

try {
    $result = $apiInstance->listCardsRules($limit, $cursor, $environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardRulesApi->listCardsRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Defines the maximum number of items to return for this request. | [optional] [default to 20]
 **cursor** | **string**| A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the &#x60;next_cursor&#x60; field. Similarly the &#x60;previous_cursor&#x60; can be used to reverse backwards in the list. | [optional]
 **environment** | **string**| Filters the results to only the items available in this environment. | [optional] [default to &#39;production&#39;]

### Return type

[**\Gr4vy\model\CardRules**](../Model/CardRules.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCardRule()`

```php
updateCardRule($card_rule_id, $card_rule_update): \Gr4vy\model\CardRule
```

Update card rule

Updates a rule that can be used for card transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\CardRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_rule_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | The unique ID for a card rule.
$card_rule_update = new \Gr4vy\model\CardRuleUpdate(); // \Gr4vy\model\CardRuleUpdate

try {
    $result = $apiInstance->updateCardRule($card_rule_id, $card_rule_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardRulesApi->updateCardRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_rule_id** | [**string**](../Model/.md)| The unique ID for a card rule. |
 **card_rule_update** | [**\Gr4vy\model\CardRuleUpdate**](../Model/CardRuleUpdate.md)|  | [optional]

### Return type

[**\Gr4vy\model\CardRule**](../Model/CardRule.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
