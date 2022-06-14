# # PaymentMethod

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | &#x60;payment-method&#x60;. | [optional]
**id** | **string** | The unique ID of the payment method. | [optional]
**status** | **string** | The state of the payment method.  - &#x60;processing&#x60; - The payment method is still being stored. - &#x60;buyer_approval_required&#x60; - Storing the payment method requires   the buyer to provide approval. Follow the &#x60;approval_url&#x60; for next steps. - &#x60;succeeded&#x60; - The payment method is approved and stored with all   relevant payment services. - &#x60;failed&#x60; - Storing the payment method did not succeed. | [optional]
**method** | **string** |  | [optional]
**mode** | **string** |  | [optional]
**created_at** | **\DateTime** | The date and time when this payment method was first created in our system. | [optional]
**updated_at** | **\DateTime** | The date and time when this payment method was last updated in our system. | [optional]
**external_identifier** | **string** | An external identifier that can be used to match the payment method against your own records. | [optional]
**buyer** | [**Buyer**](Buyer.md) |  | [optional]
**label** | **string** | A label for the card or the account. For a &#x60;paypal&#x60; payment method this is the user&#39;s email address. For a card it is the last 4 digits of the card. | [optional]
**scheme** | **string** | The scheme of the card. Only applies to card payments. | [optional]
**expiration_date** | **string** | The expiration date for the payment method. | [optional]
**approval_target** | **string** | The browser target that an approval URL must be opened in. If &#x60;any&#x60; or &#x60;null&#x60;, then there is no specific requirement. | [optional]
**approval_url** | **string** | The optional URL that the buyer needs to be redirected to to further authorize their payment. | [optional]
**currency** | **string** | The ISO-4217 currency code that this payment method can be used for. If this value is &#x60;null&#x60; the payment method may be used for multiple currencies. | [optional]
**country** | **string** | The 2-letter ISO code of the country this payment method can be used for. If this value is &#x60;null&#x60; the payment method may be used in multiple countries. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
