# # ThreeDSecureSuccessEventContext

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eci** | **string** | The electronic commerce indicator for the 3DS transaction. | [optional]
**cavv** | **string** | The cardholder authentication value or AAV. | [optional]
**version** | **string** | The version of 3-D Secure that was used. | [optional]
**directory_response** | **string** | For 3-D Secure version 1, the enrolment response. For 3-D Secure version , the transaction status from the &#x60;ARes&#x60;. | [optional]
**authentication_response** | **string** | The transaction status from the challenge result (not required for frictionless). | [optional]
**directory_transaction_id** | **string** | The transaction identifier. | [optional]
**cavv_algorithm** | **string** | The CAVV Algorithm used. | [optional]
**method** | **string** | The method used for 3DS authentication for this transaction. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
