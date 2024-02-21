# Gr4vy\GiftCardServiceDefinitionsApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGiftCardServiceDefinition()**](GiftCardServiceDefinitionsApi.md#getGiftCardServiceDefinition) | **GET** /gift-card-service-definitions/{gift_card_service_definition_id} | Get gift card service definition


## `getGiftCardServiceDefinition()`

```php
getGiftCardServiceDefinition($gift_card_service_definition_id): \Gr4vy\model\GiftCardServiceDefinition
```

Get gift card service definition

Gets the definition for a gift card service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\GiftCardServiceDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gift_card_service_definition_id = qwikcilver-gift-card; // string | The unique ID of the gift card service definition.

try {
    $result = $apiInstance->getGiftCardServiceDefinition($gift_card_service_definition_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardServiceDefinitionsApi->getGiftCardServiceDefinition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_card_service_definition_id** | **string**| The unique ID of the gift card service definition. |

### Return type

[**\Gr4vy\model\GiftCardServiceDefinition**](../Model/GiftCardServiceDefinition.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
