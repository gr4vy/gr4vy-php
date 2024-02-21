# # PaymentMethod

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | &#x60;payment-method&#x60;. | [optional]
**id** | **string** | The unique ID of the payment method. | [optional]
**additional_schemes** | **string[]** | Additional schemes of the card. Only applies to card payment methods. | [optional]
**approval_target** | **string** | The browser target that an approval URL must be opened in. If &#x60;any&#x60; or &#x60;null&#x60;, then there is no specific requirement. | [optional]
**approval_url** | **string** | The optional URL that the buyer needs to be redirected to to further authorize their payment. | [optional]
**buyer** | [**\Gr4vy\model\GiftCardBuyer**](GiftCardBuyer.md) |  | [optional]
**country** | **string** | The 2-letter ISO code of the country this payment method can be used for. If this value is &#x60;null&#x60; the payment method may be used in multiple countries. | [optional]
**created_at** | **\DateTime** | The date and time when this payment method was first created in our system. | [optional]
**currency** | **string** | The ISO-4217 currency code that this payment method can be used for. If this value is &#x60;null&#x60; the payment method may be used for multiple currencies. | [optional]
**details** | [**\Gr4vy\model\PaymentMethodDetailsCard**](PaymentMethodDetailsCard.md) |  | [optional]
**expiration_date** | **string** | The expiration date for the payment method. | [optional]
**external_identifier** | **string** | An external identifier that can be used to match the payment method against your own records. | [optional]
**has_replacement** | **bool** | Whether this card has a pending replacement that hasn&#39;t been applied yet.  When the Account Updater determines that new card details are available, existing details are not changed immediately, but this field is set to &#x60;true&#x60;. There are three scenarios in which the actual replacement occurs:  1. When this card has expired. 2. When only the expiration date changed. 3. When a transaction using this card is declined with any of the following codes:     * &#x60;canceled_payment_method&#x60;     * &#x60;expired_payment_method&#x60;     * &#x60;unavailable_payment_method&#x60;     * &#x60;unknown_payment_method&#x60;  When the replacement is applied, this field is set to &#x60;false&#x60;. For non-card payment methods, the value of this field is always set to &#x60;false&#x60;. | [optional]
**label** | **string** | A label for the card or the account. For a &#x60;paypal&#x60; payment method this is the user&#39;s email address. For a card it is the last 4 digits of the card. | [optional]
**last_replaced_at** | **\DateTime** | The date and time when this card was last replaced.  When the Account Updater determines that new card details are available, existing details are not changed immediately. There are three scenarios in which the actual replacement occurs:  1. When this card has expired. 2. When only the expiration date changed. 3. When a transaction using this card is declined with any of the following codes:     * &#x60;canceled_payment_method&#x60;     * &#x60;expired_payment_method&#x60;     * &#x60;unavailable_payment_method&#x60;     * &#x60;unknown_payment_method&#x60;  When the replacement is applied, this field is updated. For non-card payment methods, the value of this field is always set to &#x60;null&#x60;. | [optional]
**merchant_account_id** | **string** | The unique ID for a merchant account. | [optional]
**method** | **string** | The type of this payment method. | [optional]
**mode** | **string** | The mode to use with this payment method. | [optional]
**scheme** | **string** | The scheme of the card. Only applies to card payments. | [optional]
**status** | **string** | The state of the payment method.  - &#x60;processing&#x60; - The payment method is stored but has not been used yet. - &#x60;buyer_approval_required&#x60; - Storing the payment method requires   the buyer to provide approval. Follow the &#x60;approval_url&#x60; for next steps. - &#x60;succeeded&#x60; - The payment method is stored and has been used. - &#x60;failed&#x60; - The payment method could not be stored, or failed first use. | [optional]
**updated_at** | **\DateTime** | The date and time when this payment method was last updated in our system. | [optional]
**fingerprint** | **string** | The unique hash derived from the payment method identifier (e.g. card number). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
