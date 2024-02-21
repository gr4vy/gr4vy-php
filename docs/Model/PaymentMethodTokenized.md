# # PaymentMethodTokenized

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | &#x60;payment-method&#x60;. | [optional]
**id** | **string** | The unique ID of the payment method. | [optional]
**merchant_account_id** | **string** | The unique ID for a merchant account. | [optional]
**method** | **string** | The type of this payment method. | [optional]
**label** | **string** | A label for the payment method. For a &#x60;card&#x60; payment method this is the last 4 digits on the card. For others it would be the email address. | [optional]
**scheme** | **string** | The type of the card, if the payment method is a card. | [optional]
**additional_schemes** | **string[]** | Additional schemes of the card. Only applies to card payment methods. | [optional]
**expiration_date** | **string** | The expiration date for the payment method. | [optional]
**approval_target** | **string** | The browser target that an approval URL must be opened in. If &#x60;any&#x60; or &#x60;null&#x60;, then there is no specific requirement. | [optional]
**approval_url** | **string** | The optional URL that the buyer needs to be redirected to to further authorize their payment. | [optional]
**currency** | **string** | The ISO-4217 currency code that this payment method can be used for. If this value is &#x60;null&#x60; the payment method may be used for multiple currencies. | [optional]
**country** | **string** | The 2-letter ISO code of the country this payment method can be used for. If this value is &#x60;null&#x60; the payment method may be used in multiple countries. | [optional]
**last_replaced_at** | **\DateTime** | The date and time when this card was last replaced.  When the Account Updater determines that new card details are available, existing details are not changed immediately. There are three scenarios in which the actual replacement occurs:  1. When this card has expired. 2. When only the expiration date changed. 3. When a transaction using this card is declined with any of the following codes:     * &#x60;canceled_payment_method&#x60;     * &#x60;expired_payment_method&#x60;     * &#x60;unavailable_payment_method&#x60;     * &#x60;unknown_payment_method&#x60;  When the replacement is applied, this field is updated. For non-card payment methods, the value of this field is always set to &#x60;null&#x60;. | [optional]
**has_replacement** | **bool** | Whether this card has a pending replacement that hasn&#39;t been applied yet.  When the Account Updater determines that new card details are available, existing details are not changed immediately, but this field is set to &#x60;true&#x60;. There are three scenarios in which the actual replacement occurs:  1. When this card has expired. 2. When only the expiration date changed. 3. When a transaction using this card is declined with any of the following codes:     * &#x60;canceled_payment_method&#x60;     * &#x60;expired_payment_method&#x60;     * &#x60;unavailable_payment_method&#x60;     * &#x60;unknown_payment_method&#x60;  When the replacement is applied, this field is set to &#x60;false&#x60;. For non-card payment methods, the value of this field is always set to &#x60;false&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
