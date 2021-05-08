# # TransactionsBatchCaptureRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | The (partial) amount to capture.  When left blank, this will capture the entire amount. |
**currency** | **string** | A supported ISO-4217 currency code. |
**external_identifier** | **string** | An external identifier that can be used to match the transaction against your own records. | [optional]
**transaction_id** | **string** | The ID of the transaction to capture. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
