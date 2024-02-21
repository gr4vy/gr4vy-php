# # ThreeDSecureResultRequestEventContext

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The URL that was called for this request. | [optional]
**request** | **string** | The request body sent to the &#x60;url&#x60;. | [optional]
**response** | **string** | The response body received from the &#x60;url&#x60;. | [optional]
**response_status_code** | **int** | The response status code received from the &#x60;url&#x60;. | [optional]
**cavv** | **string** | The 3DS CAVV value parsed from the &#x60;response&#x60;. | [optional]
**eci** | **string** | The 3DS ECI value parsed from the &#x60;response&#x60;. | [optional]
**authentication_response** | **string** | The &#x60;transStatus&#x60; parsed from the post-authorization &#x60;response&#x60;. | [optional]
**directory_response** | **string** | The &#x60;transStatus&#x60; parsed from the authorization &#x60;response&#x60;. | [optional]
**directory_transaction_id** | **string** | The &#x60;dsTransID&#x60; parsed from the &#x60;response&#x60;. | [optional]
**version** | **string** | The version of 3DS used. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
