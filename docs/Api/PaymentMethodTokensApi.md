# Gr4vy\PaymentMethodTokensApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listPaymentMethodTokens()**](PaymentMethodTokensApi.md#listPaymentMethodTokens) | **GET** /payment-methods/{payment_method_id}/tokens | List payment method tokens


## `listPaymentMethodTokens()`

```php
listPaymentMethodTokens($payment_method_id): \Gr4vy\model\PaymentMethodTokens
```

List payment method tokens

Returns a list of PSP tokens for a given payment method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\PaymentMethodTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method_id = 46973e9d-88a7-44a6-abfe-be4ff0134ff4; // string | The ID of the payment method.

try {
    $result = $apiInstance->listPaymentMethodTokens($payment_method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodTokensApi->listPaymentMethodTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method_id** | **string**| The ID of the payment method. |

### Return type

[**\Gr4vy\model\PaymentMethodTokens**](../Model/PaymentMethodTokens.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
