# # PaymentMethodSnapshot

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | &#x60;payment-method&#x60;. | [optional]
**id** | **string** | The unique ID of the payment method. | [optional]
**approval_target** | **string** | The browser target that an approval URL must be opened in. If &#x60;any&#x60; or &#x60;null&#x60;, then there is no specific requirement. | [optional]
**approval_url** | **string** | The optional URL that the buyer needs to be redirected to to further authorize their payment. | [optional]
**country** | **string** | The 2-letter ISO code of the country this payment method can be used for. If this value is &#x60;null&#x60; the payment method may be used in multiple countries. | [optional]
**currency** | **string** | The ISO-4217 currency code that this payment method can be used for. If this value is &#x60;null&#x60; the payment method may be used for multiple currencies. | [optional]
**details** | [**\Gr4vy\model\PaymentMethodDetailsCard**](PaymentMethodDetailsCard.md) |  | [optional]
**expiration_date** | **string** | The expiration date for this payment method. This is mostly used by cards where the card might have an expiration date. | [optional]
**external_identifier** | **string** | An external identifier that can be used to match the payment method against your own records. | [optional]
**label** | **string** | A label for the payment method. This can be the last 4 digits for a card, or the email address for an alternative payment method. | [optional]
**last_replaced_at** | **\DateTime** | The date and time when this card was last replaced.  When the Account Updater determines that new card details are available, existing details are not changed immediately. There are three scenarios in which the actual replacement occurs:  1. When this card has expired. 2. When only the expiration date changed. 3. When a transaction using this card is declined with any of the following codes:     * &#x60;canceled_payment_method&#x60;     * &#x60;expired_payment_method&#x60;     * &#x60;unavailable_payment_method&#x60;     * &#x60;unknown_payment_method&#x60;  When the replacement is applied, this field is updated. For non-card payment methods, the value of this field is always set to &#x60;null&#x60;. | [optional]
**method** | **string** | The type of this payment method. | [optional]
**payment_account_reference** | **string** | The payment account reference (PAR) returned by the card scheme. This is a unique reference to the underlying account that has been used to fund this payment method. This value will be unique if the same underlying account was used, regardless of the actual payment method used. For example, a network token or an Apple Pay device token will return the same PAR when possible.  The uniqueness of this value will depend on the card scheme, please refer to their documentation for further details. The availability of the PAR in our API depends on the availability of its value in the API of the payment service used for the transaction. | [optional]
**scheme** | **string** | An additional label used to differentiate different sub-types of a payment method. Most notably this can include the type of card used in a transaction. This field is &#x60;null&#x60; for the non-card payment methods. This represents the card scheme sent to the connector and it could be different from the actual card scheme that is being used by the PSP to process the transaction in the following situations: 1. &#x60;use_additional_scheme&#x60; transformation is used with the &#x60;PAN&#x60; instrument but we already have a PSP token for the card. 2. &#x60;use_additional_scheme&#x60; transformation is used but PSP has fallen back to the main card scheme internally. | [optional]
**fingerprint** | **string** | The unique hash derived from the payment method identifier (e.g. card number). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
