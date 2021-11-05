# # PaymentMethodToken

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | &#x60;payment-method-token&#x60;. | [optional]
**id** | **string** | The external ID of this payment method as it has been registered with the payment service, which can be used directly in combination with the &#x60;token&#x60; without the need to go through Gr4vy for a transaction.  In some cases this is a different value to the &#x60;token&#x60; while in others this value is identical. Please see the documentation for the payment service for more details. | [optional]
**token** | **string** | The token of this payment method as it has been registered with the payment service, which can be used directly in combination with the &#x60;id&#x60; without the need to go through Gr4vy for a transaction.  In some cases this is a different value to the &#x60;id&#x60; while in others this value is identical. Please see the documentation for the payment service for more details. | [optional]
**payment_service** | [**PaymentServiceSnapshot**](PaymentServiceSnapshot.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
