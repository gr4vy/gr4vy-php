# Gr4vy\AccountUpdaterApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**newAccountUpdaterJob()**](AccountUpdaterApi.md#newAccountUpdaterJob) | **POST** /account-updater/jobs | Create Account Updater job


## `newAccountUpdaterJob()`

```php
newAccountUpdaterJob($account_updater_job_create): \Gr4vy\model\AccountUpdaterJob
```

Create Account Updater job

Creates an Account Updater job.  A request is submitted to a third-party service, containing inquiries for a given set of payment methods. The job is not processed right away, but once created, it will store new card details automatically, if there are, when results are ready.  A payment method is considered for the job if the following conditions are met: * It exists. * It's in a valid state: `status` is either `succeeded` or `processing`. * It corresponds to a card: `method` is `card`. * Its scheme is supported: `scheme` is `amex`, `discover`, `mastercard` or `visa`. * It doesn't have an in-progress inquiry already.  The endpoint works in a best-efforts basis and it doesn't return any error when a payment method doesn't qualify for an inquiry. To determine what payment methods were considered for the job, an `inquiries` field, returned in the response body, contains the submitted inquiries. If none of the payment methods qualified for an inquiry, the job is not created and a `204 No Content` status code is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\AccountUpdaterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_updater_job_create = new \Gr4vy\model\AccountUpdaterJobCreate(); // \Gr4vy\model\AccountUpdaterJobCreate

try {
    $result = $apiInstance->newAccountUpdaterJob($account_updater_job_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountUpdaterApi->newAccountUpdaterJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_updater_job_create** | [**\Gr4vy\model\AccountUpdaterJobCreate**](../Model/AccountUpdaterJobCreate.md)|  | [optional]

### Return type

[**\Gr4vy\model\AccountUpdaterJob**](../Model/AccountUpdaterJob.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
