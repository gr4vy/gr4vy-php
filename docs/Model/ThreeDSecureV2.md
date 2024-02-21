# # ThreeDSecureV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cavv** | **string** | The cardholder authentication value or AAV. | [optional]
**eci** | **string** | The electronic commerce indicator for the 3DS transaction. | [optional]
**version** | **string** | The version of 3-D Secure that was used. | [optional]
**authentication_response** | **string** | The transaction status after a the 3DS challenge. This will be null in case of a frictionless 3DS flow. | [optional]
**directory_response** | **string** | The transaction status received as part of the authentication request. | [optional]
**directory_transaction_id** | **string** | The transaction identifier. | [optional]
**transaction_reason** | **string** | The reason identifier for a declined transaction. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
