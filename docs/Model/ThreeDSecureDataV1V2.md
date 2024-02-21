# # ThreeDSecureDataV1V2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cavv** | **string** | The cardholder authentication value or AAV. |
**eci** | **string** | The electronic commerce indicator for the 3DS transaction. |
**version** | **string** | The version of 3-D Secure that was used. |
**directory_response** | **string** | The transaction status received as part of the authentication request. |
**scheme** | **string** | The scheme/brand of the card that is used for 3-D Secure. | [optional]
**authentication_response** | **string** | The transaction status after a the 3DS challenge. This will be null in case of a frictionless 3DS flow. |
**cavv_algorithm** | **string** | The CAVV algorithm used. |
**xid** | **string** | The transaction identifier. |
**directory_transaction_id** | **string** | The transaction identifier. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
