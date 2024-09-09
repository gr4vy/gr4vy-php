# # PaymentMethodTokenized

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | &#x60;payment-method&#x60;. | [optional]
**id** | **string** | The unique ID of the payment method. | [optional]
**method** | **string** |  | [optional]
**label** | **string** | A label for the payment method. For a &#x60;card&#x60; payment method this is the last 4 digits on the card. For others it would be the email address. | [optional]
**scheme** | **string** | The type of the card, if the payment method is a card. | [optional]
**expiration_date** | **string** | The expiration date for the payment method. | [optional]
**approval_target** | **string** | The browser target that an approval URL must be opened in. If &#x60;any&#x60; or &#x60;null&#x60;, then there is no specific requirement. | [optional]
**approval_url** | **string** | The optional URL that the buyer needs to be redirected to to further authorize their payment. | [optional]
**currency** | **string** | The ISO-4217 currency code that this payment method can be used for. If this value is &#x60;null&#x60; the payment method may be used for multiple currencies. | [optional]
**country** | **string** | The 2-letter ISO code of the country this payment method can be used for. If this value is &#x60;null&#x60; the payment method may be used in multiple countries. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
