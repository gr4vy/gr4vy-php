# Gr4vy\CardSchemeDefinitionsApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listCardSchemeDefinitions()**](CardSchemeDefinitionsApi.md#listCardSchemeDefinitions) | **GET** /card-scheme-definitions | List card scheme definitions


## `listCardSchemeDefinitions()`

```php
listCardSchemeDefinitions(): \Gr4vy\model\CardSchemeDefinitions
```

List card scheme definitions

Returns a list of all available card scheme definitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\CardSchemeDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCardSchemeDefinitions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardSchemeDefinitionsApi->listCardSchemeDefinitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Gr4vy\model\CardSchemeDefinitions**](../Model/CardSchemeDefinitions.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
