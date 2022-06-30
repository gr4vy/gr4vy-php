# # TransactionSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of this resource. Is always &#x60;transaction&#x60;. | [optional]
**id** | **string** | The unique identifier for this transaction. | [optional]
**status** | **string** | The status of the transaction. The status may change over time as asynchronous processing events occur. | [optional]
**intent** | **string** | The original &#x60;intent&#x60; used when the transaction was [created](#operation/authorize-new-transaction). | [optional]
**amount** | **int** | The authorized amount for this transaction. This can be more than the actual captured amount and part of this amount may be refunded. | [optional]
**captured_amount** | **int** | The captured amount for this transaction. This can be the total or a portion of the authorized amount. | [optional]
**refunded_amount** | **int** | The refunded amount for this transaction. This can be the total or a portion of the captured amount. | [optional]
**currency** | **string** | The currency code for this transaction. | [optional]
**country** | **string** | The 2-letter ISO code of the country of the transaction. This is used to filter the payment services that is used to process the transaction. | [optional]
**payment_method** | [**\Gr4vy\model\TransactionPaymentMethod**](TransactionPaymentMethod.md) |  | [optional]
**buyer** | [**\Gr4vy\model\TransactionBuyer**](TransactionBuyer.md) |  | [optional]
**created_at** | **\DateTime** | The date and time when this transaction was created in our system. | [optional]
**external_identifier** | **string** | An external identifier that can be used to match the transaction against your own records. | [optional]
**updated_at** | **\DateTime** | Defines when the transaction was last updated. | [optional]
**payment_service** | [**\Gr4vy\model\PaymentMethodTokenPaymentService**](PaymentMethodTokenPaymentService.md) |  | [optional]
**method** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
