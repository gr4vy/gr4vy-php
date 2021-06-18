# Gr4vy\TransactionsApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authorizeNewTransaction()**](TransactionsApi.md#authorizeNewTransaction) | **POST** /transactions | New transaction
[**captureTransaction()**](TransactionsApi.md#captureTransaction) | **POST** /transactions/{transaction_id}/capture | Capture transaction
[**getTransaction()**](TransactionsApi.md#getTransaction) | **GET** /transactions/{transaction_id} | Get transaction
[**listTransactions()**](TransactionsApi.md#listTransactions) | **GET** /transactions | List transactions
[**refundTransaction()**](TransactionsApi.md#refundTransaction) | **POST** /transactions/{transaction_id}/refund | Refund or void transactions


## `authorizeNewTransaction()`

```php
authorizeNewTransaction($transaction_request): \Gr4vy\model\Transaction
```

New transaction

Attempts to create an authorization for a payment method. In some cases it is not possible to create the authorization without redirecting the user for their authorization. In these cases the status is set to `buyer_approval_pending` and an `approval_url` is returned.  Additionally, this endpoint accepts a few additional fields that allow for simultaneous capturing and storage of the payment method.  * `store` - Use this field to store the payment method for future use. Not all payment methods support this feature. * `capture` - Use this method to also perform a capture of the transaction after it has been authorized.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_request = {"amount":1299,"currency":"USD","payment_method":{"method":"card","number":"4111111111111111","expiration_date":"11/25","security_code":"123"}}; // \Gr4vy\model\TransactionRequest

try {
    $result = $apiInstance->authorizeNewTransaction($transaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->authorizeNewTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_request** | [**\Gr4vy\model\TransactionRequest**](../Model/TransactionRequest.md)|  | [optional]

### Return type

[**\Gr4vy\model\Transaction**](../Model/Transaction.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `captureTransaction()`

```php
captureTransaction($transaction_id, $transaction_capture_request): \Gr4vy\model\Transaction
```

Capture transaction

Captures a previously authorized transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = fe26475d-ec3e-4884-9553-f7356683f7f9; // string | The ID for the transaction to get the information for.
$transaction_capture_request = {"amount":1299,"currency":"USD"}; // \Gr4vy\model\TransactionCaptureRequest

try {
    $result = $apiInstance->captureTransaction($transaction_id, $transaction_capture_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->captureTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**| The ID for the transaction to get the information for. |
 **transaction_capture_request** | [**\Gr4vy\model\TransactionCaptureRequest**](../Model/TransactionCaptureRequest.md)|  | [optional]

### Return type

[**\Gr4vy\model\Transaction**](../Model/Transaction.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransaction()`

```php
getTransaction($transaction_id): \Gr4vy\model\Transaction
```

Get transaction

Get information about a transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = fe26475d-ec3e-4884-9553-f7356683f7f9; // string | The ID for the transaction to get the information for.

try {
    $result = $apiInstance->getTransaction($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**| The ID for the transaction to get the information for. |

### Return type

[**\Gr4vy\model\Transaction**](../Model/Transaction.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTransactions()`

```php
listTransactions($search, $transaction_status, $buyer_id, $buyer_external_identifier, $before_created_at, $after_created_at, $before_updated_at, $after_updated_at, $limit, $cursor): \Gr4vy\model\Transactions
```

List transactions

Lists all transactions for an account. Sorted by last `updated_at` status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = be828248-56de-481e-a580-44b6e1d4df81; // string | Filters the transactions to only the items for which the `id` or `external_identifier` matches this value. This field allows for a partial match, matching any transaction for which either of the fields partially or completely matches.
$transaction_status = capture_succeeded; // string | Filters the results to only the transactions for which the `status` matches this value.
$buyer_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | Filters the results to only the items for which the `buyer` has an `id` that matches this value.
$buyer_external_identifier = user-12345; // string | Filters the results to only the items for which the `buyer` has an `external_identifier` that matches this value.
$before_created_at = 2012-12-12T10:53:43+00:00; // string | Filters the results to only transactions created before this ISO date-time string.
$after_created_at = 2012-12-12T10:53:43+00:00; // string | Filters the results to only transactions created after this ISO date-time string.
$before_updated_at = 2012-12-12T10:53:43+00:00; // string | Filters the results to only transactions last updated before this ISO date-time string.
$after_updated_at = 2012-12-12T10:53:43+00:00; // string | Filters the results to only transactions last updated after this ISO date-time string.
$limit = 1; // int | Defines the maximum number of items to return for this request.
$cursor = ZXhhbXBsZTE; // string | A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the `next_cursor` field. Similarly the `previous_cursor` can be used to reverse backwards in the list.

try {
    $result = $apiInstance->listTransactions($search, $transaction_status, $buyer_id, $buyer_external_identifier, $before_created_at, $after_created_at, $before_updated_at, $after_updated_at, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->listTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Filters the transactions to only the items for which the &#x60;id&#x60; or &#x60;external_identifier&#x60; matches this value. This field allows for a partial match, matching any transaction for which either of the fields partially or completely matches. | [optional]
 **transaction_status** | **string**| Filters the results to only the transactions for which the &#x60;status&#x60; matches this value. | [optional]
 **buyer_id** | **string**| Filters the results to only the items for which the &#x60;buyer&#x60; has an &#x60;id&#x60; that matches this value. | [optional]
 **buyer_external_identifier** | **string**| Filters the results to only the items for which the &#x60;buyer&#x60; has an &#x60;external_identifier&#x60; that matches this value. | [optional]
 **before_created_at** | **string**| Filters the results to only transactions created before this ISO date-time string. | [optional]
 **after_created_at** | **string**| Filters the results to only transactions created after this ISO date-time string. | [optional]
 **before_updated_at** | **string**| Filters the results to only transactions last updated before this ISO date-time string. | [optional]
 **after_updated_at** | **string**| Filters the results to only transactions last updated after this ISO date-time string. | [optional]
 **limit** | **int**| Defines the maximum number of items to return for this request. | [optional] [default to 20]
 **cursor** | **string**| A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the &#x60;next_cursor&#x60; field. Similarly the &#x60;previous_cursor&#x60; can be used to reverse backwards in the list. | [optional]

### Return type

[**\Gr4vy\model\Transactions**](../Model/Transactions.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundTransaction()`

```php
refundTransaction($transaction_id, $transaction_refund_request): \Gr4vy\model\Transaction
```

Refund or void transactions

Refunds or voids transaction. If this transaction was already captured, it will issue a refund. If the transaction was not yet captured the authorization will instead be voided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = fe26475d-ec3e-4884-9553-f7356683f7f9; // string | The ID for the transaction to get the information for.
$transaction_refund_request = new \Gr4vy\model\TransactionRefundRequest(); // \Gr4vy\model\TransactionRefundRequest

try {
    $result = $apiInstance->refundTransaction($transaction_id, $transaction_refund_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->refundTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**| The ID for the transaction to get the information for. |
 **transaction_refund_request** | [**\Gr4vy\model\TransactionRefundRequest**](../Model/TransactionRefundRequest.md)|  | [optional]

### Return type

[**\Gr4vy\model\Transaction**](../Model/Transaction.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
