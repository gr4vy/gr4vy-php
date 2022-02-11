# # TransactionSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of this resource. Is always &#x60;transaction&#x60;. | [optional]
**id** | **string** | The unique identifier for this transaction. | [optional]
**status** | **string** | The status of the transaction. The status may change over time as asynchronous  processing events occur. | [optional]
**amount** | **int** | The authorized amount for this transaction. This can be different than the actual captured amount and part of this amount may be refunded. | [optional]
**captured_amount** | **int** | The captured amount for this transaction. This can be a part and in some cases even more than the authorized amount. | [optional]
**refunded_amount** | **int** | The refunded amount for this transaction. This can be a part or all of the captured amount. | [optional]
**currency** | **string** | The currency code for this transaction. | [optional]
**payment_method** | [**PaymentMethodSnapshot**](PaymentMethodSnapshot.md) |  | [optional]
**buyer** | [**BuyerSnapshot**](BuyerSnapshot.md) |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) | The date and time when this transaction was created in our system. | [optional]
**external_identifier** | **string** | An external identifier that can be used to match the transaction against your own records. | [optional]
**updated_at** | [**\DateTime**](\DateTime.md) | Defines when the transaction was last updated. | [optional]
**payment_service** | [**PaymentServiceSnapshot**](PaymentServiceSnapshot.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)