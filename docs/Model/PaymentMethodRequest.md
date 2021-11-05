# # PaymentMethodRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | **string** |  |
**number** | **string** | The 15-16 digit number for this credit card as it can be found on the front of the card.  If a card has been stored with us previously, this number will represent the unique tokenized card ID provided via our API. | [optional]
**expiration_date** | **string** | The expiration date of the card, formatted &#x60;MM/YY&#x60;. If a card has been previously stored with us this value is optional.  If the &#x60;number&#x60; of this card represents a tokenized card, then this value is ignored. | [optional]
**security_code** | **string** | The 3 or 4 digit security code often found on the card. This often referred to as the CVV or CVD.  If the &#x60;number&#x60; of this card represents a tokenized card, then this value is ignored. | [optional]
**external_identifier** | **string** | An external identifier that can be used to match the card against your own records. | [optional]
**buyer_id** | **string** | The ID of the buyer to associate this payment method to. If this field is provided then the &#x60;buyer_external_identifier&#x60; field needs to be unset. | [optional]
**buyer_external_identifier** | **string** | The &#x60;external_identifier&#x60; of the buyer to associate this payment method to. If this field is provided then the &#x60;buyer_id&#x60; field needs to be unset. | [optional]
**redirect_url** | **string** | The redirect URL to redirect a buyer to after they have authorized their transaction or payment method. This only applies to payment methods that require buyer approval. | [optional]
**currency** | **string** | The ISO-4217 currency code to store this payment method for. This is used to select the payment service to use.  This only applies to &#x60;redirect&#x60; mode payment methods like &#x60;gocardless&#x60;. | [optional]
**country** | **string** | The 2-letter ISO code of the country to store this payment method for. This is used to select the payment service to use.  This only applies to &#x60;redirect&#x60; mode payment methods like &#x60;gocardless&#x60;. | [optional]
**environment** | **string** | Defines the environment to store this payment method in. Setting this to anything other than &#x60;production&#x60; will force Gr4vy to use a payment a service configured for that environment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
