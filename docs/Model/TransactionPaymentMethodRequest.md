# # TransactionPaymentMethodRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | **string** | The method to use for this request. |
**number** | **string** | The 13-19 digit number for this credit card as it can be found on the front of the card. | [optional]
**expiration_date** | **string** | The expiration date of the card, formatted &#x60;MM/YY&#x60;. If a card has been previously stored with us this value is optional. | [optional]
**security_code** | **string** | The 3 or 4 digit security code often found on the card. This often referred to as the CVV or CVD. | [optional]
**external_identifier** | **string** | An external identifier that can be used to match the card against your own records. | [optional]
**redirect_url** | **string** | The redirect URL to redirect a buyer to after they have authorized their transaction or payment method. This only applies to payment methods that require buyer approval. | [optional]
**id** | **string** | An identifier for a previously tokenized payment method or checkout-session. This id can represent any type of payment method or checkout-session. | [optional]
**currency** | **string** | The ISO-4217 currency code to use this payment method for. This is used to select the payment service to use. | [optional]
**country** | **string** | The 2-letter ISO code of the country to use this payment method for. This is used to select the payment service to use. | [optional]
**token** | **object** | The encrypted (opaque) token that was passed to the &#x60;onpaymentauthorized&#x60; callback by the Apple Pay integration. | [optional]
**assurance_details** | [**\Gr4vy\model\GooglePayRequestAssuranceDetails**](GooglePayRequestAssuranceDetails.md) |  | [optional]
**card_holder_name** | **string** | Name of the card holder. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
