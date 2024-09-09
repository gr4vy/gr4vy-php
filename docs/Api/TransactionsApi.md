# Gr4vy\TransactionsApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authorizeNewTransaction()**](TransactionsApi.md#authorizeNewTransaction) | **POST** /transactions | New transaction
[**captureTransaction()**](TransactionsApi.md#captureTransaction) | **POST** /transactions/{transaction_id}/capture | Capture transaction
[**getTransaction()**](TransactionsApi.md#getTransaction) | **GET** /transactions/{transaction_id} | Get transaction
[**getTransactionRefund()**](TransactionsApi.md#getTransactionRefund) | **GET** /transactions/{transaction_id}/refunds/{refund_id} | Get transaction refund
[**listTransactionRefunds()**](TransactionsApi.md#listTransactionRefunds) | **GET** /transactions/{transaction_id}/refunds | List transaction refunds
[**listTransactions()**](TransactionsApi.md#listTransactions) | **GET** /transactions | List transactions
[**refundTransaction()**](TransactionsApi.md#refundTransaction) | **POST** /transactions/{transaction_id}/refunds | Refund transaction
[**voidTransaction()**](TransactionsApi.md#voidTransaction) | **POST** /transactions/{transaction_id}/void | Void transaction


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
$transaction_request = {"amount":1299,"currency":"USD","payment_method":{"method":"card","number":"4111111111111111","expiration_date":"11/25","security_code":"123","redirect_url":"https://example.com/callback"}}; // \Gr4vy\model\TransactionRequest

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
$transaction_capture_request = {"amount":1299}; // \Gr4vy\model\TransactionCaptureRequest

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

## `getTransactionRefund()`

```php
getTransactionRefund($transaction_id, $refund_id): \Gr4vy\model\Refund
```

Get transaction refund

Gets information about a refund associated with a certain transaction.

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
$refund_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | The unique ID of the refund.

try {
    $result = $apiInstance->getTransactionRefund($transaction_id, $refund_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**| The ID for the transaction to get the information for. |
 **refund_id** | **string**| The unique ID of the refund. |

### Return type

[**\Gr4vy\model\Refund**](../Model/Refund.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTransactionRefunds()`

```php
listTransactionRefunds($transaction_id, $limit, $cursor): \Gr4vy\model\Refunds
```

List transaction refunds

Lists all refunds associated with a certain transaction.

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
$limit = 1; // int | Defines the maximum number of items to return for this request.
$cursor = ZXhhbXBsZTE; // string | A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the `next_cursor` field. Similarly the `previous_cursor` can be used to reverse backwards in the list.

try {
    $result = $apiInstance->listTransactionRefunds($transaction_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->listTransactionRefunds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**| The ID for the transaction to get the information for. |
 **limit** | **int**| Defines the maximum number of items to return for this request. | [optional] [default to 20]
 **cursor** | **string**| A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the &#x60;next_cursor&#x60; field. Similarly the &#x60;previous_cursor&#x60; can be used to reverse backwards in the list. | [optional]

### Return type

[**\Gr4vy\model\Refunds**](../Model/Refunds.md)

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
listTransactions($buyer_external_identifier, $buyer_id, $cursor, $limit, $amount_eq, $amount_gte, $amount_lte, $created_at_gte, $created_at_lte, $currency, $external_identifier, $has_refunds, $id, $metadata, $method, $payment_service_id, $payment_service_transaction_id, $search, $status, $updated_at_gte, $updated_at_lte, $before_created_at, $after_created_at, $before_updated_at, $after_updated_at, $transaction_status): \Gr4vy\model\Transactions
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
$buyer_external_identifier = user-12345; // string | Filters the results to only the items for which the `buyer` has an `external_identifier` that matches this value.
$buyer_id = 8724fd24-5489-4a5d-90fd-0604df7d3b83; // string | Filters the results to only the items for which the `buyer` has an `id` that matches this value.
$cursor = ZXhhbXBsZTE; // string | A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the `next_cursor` field. Similarly the `previous_cursor` can be used to reverse backwards in the list.
$limit = 1; // int | Defines the maximum number of items to return for this request.
$amount_eq = 500; // int | Filters for transactions that have an `amount` that is equal to the provided `amount_eq` value.
$amount_gte = 500; // int | Filters for transactions that have an `amount` that is greater than or equal to the `amount_gte` value.
$amount_lte = 500; // int | Filters for transactions that have an `amount` that is less than or equal to the `amount_lte` value.
$created_at_gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters the results to only transactions created after this ISO date-time string. The time zone must be included.  Ensure that the date-time string is URL encoded, e.g. `2022-01-01T12:00:00+08:00` must be encoded as `2022-01-01T12%3A00%3A00%2B08%3A00`.
$created_at_lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters the results to only transactions created before this ISO date-time string. The time zone must be included.  Ensure that the date-time string is URL encoded, e.g. `2022-01-01T12:00:00+08:00` must be encoded as `2022-01-01T12%3A00%3A00%2B08%3A00`.
$currency = ["USD","GBP"]; // string[] | Filters for transactions that have matching `currency` values. The `currency` values provided must be formatted as 3-letter ISO currency code.
$external_identifier = user-12345; // string | Filters the results to only the items for which the `external_identifier` matches this value.
$has_refunds = true; // bool | When set to `true`, filter for transactions that have at least one refund in any state associated with it. When set to `false`, filter for transactions that have no refunds.
$id = be828248-56de-481e-a580-44b6e1d4df81; // string | Filters for the transaction that has a matching `id` value.
$metadata = ["{\"key\": \"value\"}","{\"key_one\": \"value\", \"key_two\": \"value\"}"]; // string[] | Filters for transactions where their `metadata` values contain all of the provided `metadata` keys. The value sent for `metadata` must be formatted as a JSON string, and all keys and values must be strings. This value should also be URL encoded.  Duplicate keys are not supported. If a key is duplicated, only the last appearing value will be used.
$method = array('method_example'); // string[] | Filters the results to only the items for which the `method` has been set to this value.
$payment_service_id = ["46973e9d-88a7-44a6-abfe-be4ff0134ff4"]; // string[] | Filters for transactions that were processed by the provided `payment_service_id` values.
$payment_service_transaction_id = transaction_123; // string | Filters for transactions that have a matching `payment_service_transaction_id` value. The `payment_service_transaction_id` is the identifier of the transaction given by the payment service.
$search = be828248-56de-481e-a580-44b6e1d4df81; // string | Filters for transactions that have one of the following fields match exactly with the provided `search` value: * `buyer_external_identifier` * `buyer_id` * `external_identifier` * `id` * `payment_service_transaction_id`
$status = ["capture_succeeded","processing"]; // string[] | Filters the results to only the transactions that have a `status` that matches with any of the provided status values.
$updated_at_gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters the results to only transactions last updated after this ISO date-time string. The time zone must be included.  Ensure that the date-time string is URL encoded, e.g. `2022-01-01T12:00:00+08:00` must be encoded as `2022-01-01T12%3A00%3A00%2B08%3A00`.
$updated_at_lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters the results to only transactions last updated before this ISO date-time string. The time zone must be included.  Ensure that the date-time string is URL encoded, e.g. `2022-01-01T12:00:00+08:00` must be encoded as `2022-01-01T12%3A00%3A00%2B08%3A00`.
$before_created_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters the results to only transactions created before this ISO date-time string. The time zone must be included.  Ensure that the date-time string is URL encoded, e.g. `2022-01-01T12:00:00+08:00` must be encoded as `2022-01-01T12%3A00%3A00%2B08%3A00`.  **WARNING** This filter is deprecated and may be removed eventually, use `created_at_lte` instead.
$after_created_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters the results to only transactions created after this ISO date-time string. The time zone must be included.  Ensure that the date-time string is URL encoded, e.g. `2022-01-01T12:00:00+08:00` must be encoded as `2022-01-01T12%3A00%3A00%2B08%3A00`.  **WARNING** This filter is deprecated and may be removed eventually, use `created_at_gte` instead.
$before_updated_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters the results to only transactions last updated before this ISO date-time string. The time zone must be included.  Ensure that the date-time string is URL encoded, e.g. `2022-01-01T12:00:00+08:00` must be encoded as `2022-01-01T12%3A00%3A00%2B08%3A00`.  **WARNING** This filter is deprecated and may be removed eventually, use `updated_at_lte` instead.
$after_updated_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters the results to only transactions last updated after this ISO date-time string. The time zone must be included.  Ensure that the date-time string is URL encoded, e.g. `2022-01-01T12:00:00+08:00` must be encoded as `2022-01-01T12%3A00%3A00%2B08%3A00`.  **WARNING** This filter is deprecated and may be removed eventually, use `updated_at_gte` instead.
$transaction_status = capture_succeeded; // string | Filters the results to only the transactions for which the `status` matches this value.  **WARNING** This filter is deprecated and may be removed eventually, use `status` instead.

try {
    $result = $apiInstance->listTransactions($buyer_external_identifier, $buyer_id, $cursor, $limit, $amount_eq, $amount_gte, $amount_lte, $created_at_gte, $created_at_lte, $currency, $external_identifier, $has_refunds, $id, $metadata, $method, $payment_service_id, $payment_service_transaction_id, $search, $status, $updated_at_gte, $updated_at_lte, $before_created_at, $after_created_at, $before_updated_at, $after_updated_at, $transaction_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->listTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buyer_external_identifier** | **string**| Filters the results to only the items for which the &#x60;buyer&#x60; has an &#x60;external_identifier&#x60; that matches this value. | [optional]
 **buyer_id** | **string**| Filters the results to only the items for which the &#x60;buyer&#x60; has an &#x60;id&#x60; that matches this value. | [optional]
 **cursor** | **string**| A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the &#x60;next_cursor&#x60; field. Similarly the &#x60;previous_cursor&#x60; can be used to reverse backwards in the list. | [optional]
 **limit** | **int**| Defines the maximum number of items to return for this request. | [optional] [default to 20]
 **amount_eq** | **int**| Filters for transactions that have an &#x60;amount&#x60; that is equal to the provided &#x60;amount_eq&#x60; value. | [optional]
 **amount_gte** | **int**| Filters for transactions that have an &#x60;amount&#x60; that is greater than or equal to the &#x60;amount_gte&#x60; value. | [optional]
 **amount_lte** | **int**| Filters for transactions that have an &#x60;amount&#x60; that is less than or equal to the &#x60;amount_lte&#x60; value. | [optional]
 **created_at_gte** | **\DateTime**| Filters the results to only transactions created after this ISO date-time string. The time zone must be included.  Ensure that the date-time string is URL encoded, e.g. &#x60;2022-01-01T12:00:00+08:00&#x60; must be encoded as &#x60;2022-01-01T12%3A00%3A00%2B08%3A00&#x60;. | [optional]
 **created_at_lte** | **\DateTime**| Filters the results to only transactions created before this ISO date-time string. The time zone must be included.  Ensure that the date-time string is URL encoded, e.g. &#x60;2022-01-01T12:00:00+08:00&#x60; must be encoded as &#x60;2022-01-01T12%3A00%3A00%2B08%3A00&#x60;. | [optional]
 **currency** | [**string[]**](../Model/string.md)| Filters for transactions that have matching &#x60;currency&#x60; values. The &#x60;currency&#x60; values provided must be formatted as 3-letter ISO currency code. | [optional]
 **external_identifier** | **string**| Filters the results to only the items for which the &#x60;external_identifier&#x60; matches this value. | [optional]
 **has_refunds** | **bool**| When set to &#x60;true&#x60;, filter for transactions that have at least one refund in any state associated with it. When set to &#x60;false&#x60;, filter for transactions that have no refunds. | [optional]
 **id** | **string**| Filters for the transaction that has a matching &#x60;id&#x60; value. | [optional]
 **metadata** | [**string[]**](../Model/string.md)| Filters for transactions where their &#x60;metadata&#x60; values contain all of the provided &#x60;metadata&#x60; keys. The value sent for &#x60;metadata&#x60; must be formatted as a JSON string, and all keys and values must be strings. This value should also be URL encoded.  Duplicate keys are not supported. If a key is duplicated, only the last appearing value will be used. | [optional]
 **method** | [**string[]**](../Model/string.md)| Filters the results to only the items for which the &#x60;method&#x60; has been set to this value. | [optional]
 **payment_service_id** | [**string[]**](../Model/string.md)| Filters for transactions that were processed by the provided &#x60;payment_service_id&#x60; values. | [optional]
 **payment_service_transaction_id** | **string**| Filters for transactions that have a matching &#x60;payment_service_transaction_id&#x60; value. The &#x60;payment_service_transaction_id&#x60; is the identifier of the transaction given by the payment service. | [optional]
 **search** | **string**| Filters for transactions that have one of the following fields match exactly with the provided &#x60;search&#x60; value: * &#x60;buyer_external_identifier&#x60; * &#x60;buyer_id&#x60; * &#x60;external_identifier&#x60; * &#x60;id&#x60; * &#x60;payment_service_transaction_id&#x60; | [optional]
 **status** | [**string[]**](../Model/string.md)| Filters the results to only the transactions that have a &#x60;status&#x60; that matches with any of the provided status values. | [optional]
 **updated_at_gte** | **\DateTime**| Filters the results to only transactions last updated after this ISO date-time string. The time zone must be included.  Ensure that the date-time string is URL encoded, e.g. &#x60;2022-01-01T12:00:00+08:00&#x60; must be encoded as &#x60;2022-01-01T12%3A00%3A00%2B08%3A00&#x60;. | [optional]
 **updated_at_lte** | **\DateTime**| Filters the results to only transactions last updated before this ISO date-time string. The time zone must be included.  Ensure that the date-time string is URL encoded, e.g. &#x60;2022-01-01T12:00:00+08:00&#x60; must be encoded as &#x60;2022-01-01T12%3A00%3A00%2B08%3A00&#x60;. | [optional]
 **before_created_at** | **\DateTime**| Filters the results to only transactions created before this ISO date-time string. The time zone must be included.  Ensure that the date-time string is URL encoded, e.g. &#x60;2022-01-01T12:00:00+08:00&#x60; must be encoded as &#x60;2022-01-01T12%3A00%3A00%2B08%3A00&#x60;.  **WARNING** This filter is deprecated and may be removed eventually, use &#x60;created_at_lte&#x60; instead. | [optional]
 **after_created_at** | **\DateTime**| Filters the results to only transactions created after this ISO date-time string. The time zone must be included.  Ensure that the date-time string is URL encoded, e.g. &#x60;2022-01-01T12:00:00+08:00&#x60; must be encoded as &#x60;2022-01-01T12%3A00%3A00%2B08%3A00&#x60;.  **WARNING** This filter is deprecated and may be removed eventually, use &#x60;created_at_gte&#x60; instead. | [optional]
 **before_updated_at** | **\DateTime**| Filters the results to only transactions last updated before this ISO date-time string. The time zone must be included.  Ensure that the date-time string is URL encoded, e.g. &#x60;2022-01-01T12:00:00+08:00&#x60; must be encoded as &#x60;2022-01-01T12%3A00%3A00%2B08%3A00&#x60;.  **WARNING** This filter is deprecated and may be removed eventually, use &#x60;updated_at_lte&#x60; instead. | [optional]
 **after_updated_at** | **\DateTime**| Filters the results to only transactions last updated after this ISO date-time string. The time zone must be included.  Ensure that the date-time string is URL encoded, e.g. &#x60;2022-01-01T12:00:00+08:00&#x60; must be encoded as &#x60;2022-01-01T12%3A00%3A00%2B08%3A00&#x60;.  **WARNING** This filter is deprecated and may be removed eventually, use &#x60;updated_at_gte&#x60; instead. | [optional]
 **transaction_status** | **string**| Filters the results to only the transactions for which the &#x60;status&#x60; matches this value.  **WARNING** This filter is deprecated and may be removed eventually, use &#x60;status&#x60; instead. | [optional]

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
refundTransaction($transaction_id, $transaction_refund_request): \Gr4vy\model\Refund
```

Refund transaction

Refunds a transaction, fully or partially.  If the transaction was not yet successfully captured, the refund will not be processed. Authorized transactions can be [voided](#operation/void-transaction) instead.

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
$transaction_refund_request = {}; // \Gr4vy\model\TransactionRefundRequest

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

[**\Gr4vy\model\Refund**](../Model/Refund.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voidTransaction()`

```php
voidTransaction($transaction_id): \Gr4vy\model\Transaction
```

Void transaction

Voids a transaction.  If the transaction was not yet successfully authorized, or was already captured, the void will not be processed. Captured transactions can be [refunded](#operation/refund-transaction) instead.  Voiding zero-amount authorized transactions is not supported.

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
    $result = $apiInstance->voidTransaction($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->voidTransaction: ', $e->getMessage(), PHP_EOL;
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
