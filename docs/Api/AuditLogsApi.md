# Gr4vy\AuditLogsApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listAuditLogs()**](AuditLogsApi.md#listAuditLogs) | **GET** /audit-logs | List audit logs


## `listAuditLogs()`

```php
listAuditLogs($limit, $cursor, $user_id, $action, $resource_type): \Gr4vy\model\AuditLogs
```

List audit logs

Returns a list of audit logs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\AuditLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1; // int | Defines the maximum number of items to return for this request.
$cursor = ZXhhbXBsZTE; // string | A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the `next_cursor` field. Similarly the `previous_cursor` can be used to reverse backwards in the list.
$user_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | Filters the results to only the items for which the `user` has an `id` that matches this value.
$action = created; // string | Filters the results to only the items for which the `audit-log` has an `action` that matches this value.
$resource_type = buyer; // string | Filters the results to only the items for which the `audit-log` has a `resource` that matches this type value.

try {
    $result = $apiInstance->listAuditLogs($limit, $cursor, $user_id, $action, $resource_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditLogsApi->listAuditLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Defines the maximum number of items to return for this request. | [optional] [default to 20]
 **cursor** | **string**| A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the &#x60;next_cursor&#x60; field. Similarly the &#x60;previous_cursor&#x60; can be used to reverse backwards in the list. | [optional]
 **user_id** | **string**| Filters the results to only the items for which the &#x60;user&#x60; has an &#x60;id&#x60; that matches this value. | [optional]
 **action** | **string**| Filters the results to only the items for which the &#x60;audit-log&#x60; has an &#x60;action&#x60; that matches this value. | [optional]
 **resource_type** | **string**| Filters the results to only the items for which the &#x60;audit-log&#x60; has a &#x60;resource&#x60; that matches this type value. | [optional]

### Return type

[**\Gr4vy\model\AuditLogs**](../Model/AuditLogs.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
