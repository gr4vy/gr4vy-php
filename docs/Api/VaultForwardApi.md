# Gr4vy\VaultForwardApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**makeVaultForward()**](VaultForwardApi.md#makeVaultForward) | **POST** /vault-forward | Forward PCI data


## `makeVaultForward()`

```php
makeVaultForward($x_vault_forward_payment_methods, $x_vault_forward_url, $x_vault_forward_http_method, $x_vault_forward_header_header_name, $x_vault_forward_timeout, $body): string
```

Forward PCI data

Forward an API call to a PCI endpoint. The request body is evaluated and any template fields are replaced by the card data before the request is sent to the given destination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\VaultForwardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_vault_forward_payment_methods = faaad066-30b4-4997-a438-242b0752d7e1,faaad066-30b4-4997-a438-242b0752d7e2; // string | A comma-separated list of Payment Method IDs that can be used to fill in the request template. At least 1 must be given, and a maximum of 100 are accepted.
$x_vault_forward_url = https://api.amadeus.com/booking; // string | The URL to forward card data to.
$x_vault_forward_http_method = POST; // string | The HTTP method that is used when forwarding the request to the `x-vault-forward-url`.
$x_vault_forward_header_header_name = x-vault-forward-header-x-frame-options; // string | A header that is forwarded to the `x-vault-forward-url`. The header will be forwarded without the `x-vault-forward-header` part. For example, `x-vault-forward-header-x-frame-options: SAMEORIGIN` is forwarded as `x-frame-options: SAMEORIGIN`.
$x_vault_forward_timeout = 10; // int | The number of seconds to wait before timing out when forwarding the request.
$body = {
  "number":"{{CARD_NUMBER_1}}",
  "expiry":"{{CARD_EXPIRATION_DATE_1}}"
}
; // string | Payload to forward in the request.

try {
    $result = $apiInstance->makeVaultForward($x_vault_forward_payment_methods, $x_vault_forward_url, $x_vault_forward_http_method, $x_vault_forward_header_header_name, $x_vault_forward_timeout, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultForwardApi->makeVaultForward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_vault_forward_payment_methods** | **string**| A comma-separated list of Payment Method IDs that can be used to fill in the request template. At least 1 must be given, and a maximum of 100 are accepted. |
 **x_vault_forward_url** | **string**| The URL to forward card data to. |
 **x_vault_forward_http_method** | **string**| The HTTP method that is used when forwarding the request to the &#x60;x-vault-forward-url&#x60;. |
 **x_vault_forward_header_header_name** | **string**| A header that is forwarded to the &#x60;x-vault-forward-url&#x60;. The header will be forwarded without the &#x60;x-vault-forward-header&#x60; part. For example, &#x60;x-vault-forward-header-x-frame-options: SAMEORIGIN&#x60; is forwarded as &#x60;x-frame-options: SAMEORIGIN&#x60;. | [optional]
 **x_vault_forward_timeout** | **int**| The number of seconds to wait before timing out when forwarding the request. | [optional] [default to 30]
 **body** | **string**| Payload to forward in the request. | [optional]

### Return type

**string**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
