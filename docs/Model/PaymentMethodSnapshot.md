# # PaymentMethodSnapshot

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | &#x60;payment-method&#x60;. | [optional]
**id** | **string** | The unique ID of the payment method. | [optional]
**method** | **string** |  | [optional]
**external_identifier** | **string** | An external identifier that can be used to match the payment method against your own records. | [optional]
**label** | **string** | A label for the payment method. This can be the last 4 digits for a card, or the email address for an alternative payment method. | [optional]
**scheme** | **string** | An additional label used to differentiate different sub-types of a payment method. Most notably this can include the type of card used in a transaction. | [optional]
**expiration_date** | **string** | The expiration date for this payment method. This is mostly used by cards where the card might have an expiration date. | [optional]
**approval_target** | **string** | The browser target that an approval URL must be opened in. If &#x60;any&#x60; or &#x60;null&#x60;, then there is no specific requirement. | [optional]
**approval_url** | **string** | The optional URL that the buyer needs to be redirected to to further authorize their payment. | [optional]
**currency** | **string** | The ISO-4217 currency code that this payment method can be used for. If this value is &#x60;null&#x60; the payment method may be used for multiple currencies. | [optional]
**country** | **string** | The 2-letter ISO code of the country this payment method can be used for. If this value is &#x60;null&#x60; the payment method may be used in multiple countries. | [optional]
**details** | [**\Gr4vy\model\PaymentMethodDetailsCard**](PaymentMethodDetailsCard.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
