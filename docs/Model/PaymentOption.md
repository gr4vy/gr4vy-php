# # PaymentOption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | &#x60;payment-option&#x60;. | [optional]
**method** | **string** | The type of payment method that is available. | [optional]
**icon_url** | **string** | An icon to display for the payment option. | [optional]
**mode** | **string** | The mode to use with this payment option. | [optional]
**label** | **string** | A label that describes this payment option. This label is returned in the language defined by the &#x60;locale&#x60; query parameter. The label can be used to display a list of payment options to the buyer in their language. | [optional]
**can_store_payment_method** | **bool** | A flag to indicate if storing the payment method is supported. | [optional]
**can_delay_capture** | **bool** | A flag to indicate if delayed capture is supported. | [optional]
**context** | [**\Gr4vy\model\PaymentOptionContext**](PaymentOptionContext.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
