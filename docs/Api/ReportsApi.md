# Gr4vy\ReportsApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateDownloadUrl()**](ReportsApi.md#generateDownloadUrl) | **POST** /reports/{report_id}/executions/{report_execution_id}/url | Generate report download URL
[**getReport()**](ReportsApi.md#getReport) | **GET** /reports/{report_id} | Get report
[**getReportExecution()**](ReportsApi.md#getReportExecution) | **GET** /report-executions/{report_execution_id} | Get report execution
[**listAllReportExecutions()**](ReportsApi.md#listAllReportExecutions) | **GET** /report-executions | List all report executions
[**listReportExecutions()**](ReportsApi.md#listReportExecutions) | **GET** /reports/{report_id}/executions | List executions for report
[**listReports()**](ReportsApi.md#listReports) | **GET** /reports | List reports
[**newReport()**](ReportsApi.md#newReport) | **POST** /reports | New report
[**updateReport()**](ReportsApi.md#updateReport) | **PUT** /reports/{report_id} | Update report


## `generateDownloadUrl()`

```php
generateDownloadUrl($report_id, $report_execution_id): \Gr4vy\model\ReportExecutionUrl
```

Generate report download URL

Generates a temporary signed URL to download the result of a report execution.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | The unique ID for a report.
$report_execution_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | The unique ID for a report execution.

try {
    $result = $apiInstance->generateDownloadUrl($report_id, $report_execution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateDownloadUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **string**| The unique ID for a report. |
 **report_execution_id** | **string**| The unique ID for a report execution. |

### Return type

[**\Gr4vy\model\ReportExecutionUrl**](../Model/ReportExecutionUrl.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReport()`

```php
getReport($report_id): \Gr4vy\model\Report
```

Get report

Retrieves the details of a single report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | The unique ID for a report.

try {
    $result = $apiInstance->getReport($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **string**| The unique ID for a report. |

### Return type

[**\Gr4vy\model\Report**](../Model/Report.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportExecution()`

```php
getReportExecution($report_execution_id): \Gr4vy\model\ReportExecution
```

Get report execution

Retrieves the details of a single report execution.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_execution_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | The unique ID for a report execution.

try {
    $result = $apiInstance->getReportExecution($report_execution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportExecution: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_execution_id** | **string**| The unique ID for a report execution. |

### Return type

[**\Gr4vy\model\ReportExecution**](../Model/ReportExecution.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAllReportExecutions()`

```php
listAllReportExecutions($cursor, $limit, $created_at_gte, $created_at_lte, $report_name, $status, $creator_id): \Gr4vy\model\ReportExecutions
```

List all report executions

Returns a list of executions belonging to any report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = ZXhhbXBsZTE; // string | A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the `next_cursor` field. Similarly the `previous_cursor` can be used to reverse backwards in the list.
$limit = 1; // int | Defines the maximum number of items to return for this request.
$created_at_gte = 2022-01-01T12:00:00+08:00; // string | Filters the results to report executions created after this ISO date-time string. The time zone must be included.  Ensure that the date-time string is URL encoded, e.g. `2022-01-01T12:00:00+08:00` must be encoded as `2022-01-01T12%3A00%3A00%2B08%3A00`.
$created_at_lte = 2022-01-01T12:00:00+08:00; // string | Filters the results to report executions created before this ISO date-time string. The time zone must be included.  Ensure that the date-time string is URL encoded, e.g. `2022-01-01T12:00:00+08:00` must be encoded as `2022-01-01T12%3A00%3A00%2B08%3A00`.
$report_name = Failed+Authorizations+042022; // string | Filters for executions of reports that have a matching `name` value. This filter is case-insensitive.  Ensure that when necessary, the value you pass for this filter is URL encoded.
$status = ["succeeded","failed"]; // string[] | Filters for report executions that have a matching `status` value.  This filter accepts multiple values.
$creator_id = ["dba3bc4c-c5f2-477f-bfb0-abd61f89f979"]; // string[] | Filters the results to only match the reports that their `creator_id` matches with any of the provided creator IDs.

try {
    $result = $apiInstance->listAllReportExecutions($cursor, $limit, $created_at_gte, $created_at_lte, $report_name, $status, $creator_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->listAllReportExecutions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cursor** | **string**| A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the &#x60;next_cursor&#x60; field. Similarly the &#x60;previous_cursor&#x60; can be used to reverse backwards in the list. | [optional]
 **limit** | **int**| Defines the maximum number of items to return for this request. | [optional] [default to 20]
 **created_at_gte** | **string**| Filters the results to report executions created after this ISO date-time string. The time zone must be included.  Ensure that the date-time string is URL encoded, e.g. &#x60;2022-01-01T12:00:00+08:00&#x60; must be encoded as &#x60;2022-01-01T12%3A00%3A00%2B08%3A00&#x60;. | [optional]
 **created_at_lte** | **string**| Filters the results to report executions created before this ISO date-time string. The time zone must be included.  Ensure that the date-time string is URL encoded, e.g. &#x60;2022-01-01T12:00:00+08:00&#x60; must be encoded as &#x60;2022-01-01T12%3A00%3A00%2B08%3A00&#x60;. | [optional]
 **report_name** | **string**| Filters for executions of reports that have a matching &#x60;name&#x60; value. This filter is case-insensitive.  Ensure that when necessary, the value you pass for this filter is URL encoded. | [optional]
 **status** | [**string[]**](../Model/string.md)| Filters for report executions that have a matching &#x60;status&#x60; value.  This filter accepts multiple values. | [optional]
 **creator_id** | [**string[]**](../Model/string.md)| Filters the results to only match the reports that their &#x60;creator_id&#x60; matches with any of the provided creator IDs. | [optional]

### Return type

[**\Gr4vy\model\ReportExecutions**](../Model/ReportExecutions.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listReportExecutions()`

```php
listReportExecutions($report_id, $cursor, $limit): \Gr4vy\model\ReportExecutions
```

List executions for report

Returns a list of executions for a report. For a one-off report there will only be one, where for scheduled ones there may be more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | The unique ID for a report.
$cursor = ZXhhbXBsZTE; // string | A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the `next_cursor` field. Similarly the `previous_cursor` can be used to reverse backwards in the list.
$limit = 1; // int | Defines the maximum number of items to return for this request.

try {
    $result = $apiInstance->listReportExecutions($report_id, $cursor, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->listReportExecutions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **string**| The unique ID for a report. |
 **cursor** | **string**| A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the &#x60;next_cursor&#x60; field. Similarly the &#x60;previous_cursor&#x60; can be used to reverse backwards in the list. | [optional]
 **limit** | **int**| Defines the maximum number of items to return for this request. | [optional] [default to 20]

### Return type

[**\Gr4vy\model\ReportExecutions**](../Model/ReportExecutions.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listReports()`

```php
listReports($cursor, $limit, $name, $schedule, $schedule_enabled): \Gr4vy\model\Reports
```

List reports

Returns a list of reports.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = ZXhhbXBsZTE; // string | A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the `next_cursor` field. Similarly the `previous_cursor` can be used to reverse backwards in the list.
$limit = 1; // int | Defines the maximum number of items to return for this request.
$name = Failed+Authorizations+042022; // string | Filters for reports that have a matching `name` value. This filter is case-insensitive.  Ensure that when necessary, the value you pass for this filter is URL encoded.
$schedule = ["once","monthly"]; // string[] | Filters for reports that have matching `schedule` values.
$schedule_enabled = true; // bool | Filters for reports that have a matching `schedule_enabled` value.

try {
    $result = $apiInstance->listReports($cursor, $limit, $name, $schedule, $schedule_enabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->listReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cursor** | **string**| A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the &#x60;next_cursor&#x60; field. Similarly the &#x60;previous_cursor&#x60; can be used to reverse backwards in the list. | [optional]
 **limit** | **int**| Defines the maximum number of items to return for this request. | [optional] [default to 20]
 **name** | **string**| Filters for reports that have a matching &#x60;name&#x60; value. This filter is case-insensitive.  Ensure that when necessary, the value you pass for this filter is URL encoded. | [optional]
 **schedule** | [**string[]**](../Model/string.md)| Filters for reports that have matching &#x60;schedule&#x60; values. | [optional]
 **schedule_enabled** | **bool**| Filters for reports that have a matching &#x60;schedule_enabled&#x60; value. | [optional]

### Return type

[**\Gr4vy\model\Reports**](../Model/Reports.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newReport()`

```php
newReport($report_create): \Gr4vy\model\Report
```

New report

Creates a new report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_create = new \Gr4vy\model\ReportCreate(); // \Gr4vy\model\ReportCreate

try {
    $result = $apiInstance->newReport($report_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->newReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_create** | [**\Gr4vy\model\ReportCreate**](../Model/ReportCreate.md)|  | [optional]

### Return type

[**\Gr4vy\model\Report**](../Model/Report.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateReport()`

```php
updateReport($report_id, $report_update): \Gr4vy\model\Report
```

Update report

Updates a report. This is mostly used with scheduled reports.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | The unique ID for a report.
$report_update = new \Gr4vy\model\ReportUpdate(); // \Gr4vy\model\ReportUpdate

try {
    $result = $apiInstance->updateReport($report_id, $report_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->updateReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **string**| The unique ID for a report. |
 **report_update** | [**\Gr4vy\model\ReportUpdate**](../Model/ReportUpdate.md)|  | [optional]

### Return type

[**\Gr4vy\model\Report**](../Model/Report.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
