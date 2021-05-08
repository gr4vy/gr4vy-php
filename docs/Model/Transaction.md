# # Transaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of this resource. Is always &#x60;transaction&#x60;. | [optional]
**id** | **string** | The unique identifier for this transaction. | [optional]
**status** | **string** | The status of the transaction being processed. This is different from the &#x60;status&#x60; field in that it represents the status of the transaction at the payment processor, not the status of the transaction created in Gr4vy. | [optional]
**amount** | **float** | The currency amount captured by this transaction. | [optional]
**currency** | **string** | The currency code for this transaction. | [optional]
**payment_method** | [**\Gr4vy\model\PaymentMethod**](PaymentMethod.md) |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) | The date and time when this transaction was created in our system. | [optional]
**external_identifier** | **string** | An external identifier that can be used to match the transaction against your own records. | [optional]
**updated_at** | [**\DateTime**](\DateTime.md) | Defines when the transaction was last updated. | [optional]
**payment_service** | [**\Gr4vy\model\PaymentService**](PaymentService.md) |  | [optional]
**environment** | **string** | The environment this transaction has been created in. | [optional] [default to ENVIRONMENT_PRODUCTION]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
