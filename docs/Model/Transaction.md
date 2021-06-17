# # Transaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of this resource. Is always &#x60;transaction&#x60;. | [optional]
**id** | **string** | The unique identifier for this transaction. | [optional]
**status** | **string** | The status of the transaction being processed. This is different from the &#x60;status&#x60; field in that it represents the status of the transaction at the payment processor, not the status of the transaction created in Gr4vy. | [optional]
**amount** | **float** | The authorized amount for this transaction. This can be different than the actual captured amount and part of this amount may be refunded. | [optional]
**captured_amount** | **float** | The captured amount for this transaction. This can be a part and in some cases even more than the authorized amount. | [optional]
**refunded_amount** | **float** | The refunded amount for this transaction. This can be a part or all of the captured amount. | [optional]
**currency** | **string** | The currency code for this transaction. | [optional]
**payment_method** | [**PaymentMethodSnapshot**](PaymentMethodSnapshot.md) | The payment method used for this transaction. | [optional]
**buyer** | [**BuyerSnapshot**](BuyerSnapshot.md) | The buyer used for this transaction. | [optional]
**created_at** | [**\DateTime**](\DateTime.md) | The date and time when this transaction was created in our system. | [optional]
**external_identifier** | **string** | An external identifier that can be used to match the transaction against your own records. | [optional]
**updated_at** | [**\DateTime**](\DateTime.md) | Defines when the transaction was last updated. | [optional]
**payment_service** | [**PaymentServiceSnapshot**](PaymentServiceSnapshot.md) | The payment service used for this transaction. | [optional]
**environment** | **string** | The environment this transaction has been created in. | [optional] [default to ENVIRONMENT_PRODUCTION]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
