# # CardRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | **string** | &#x60;card&#x60;. |
**number** | **string** | The 13-19 digit number for this card as it can be found on the front of the card. |
**expiration_date** | **string** | The expiration date of the card, formatted &#x60;MM/YY&#x60;. |
**security_code** | **string** | The 3 or 4 digit security code often found on the card. This often referred to as the CVV or CVD. |
**external_identifier** | **string** | An external identifier that can be used to match the card against your own records. | [optional]
**buyer_id** | **string** | The ID of the buyer to associate this payment method to. If this field is provided then the &#x60;buyer_external_identifier&#x60; field needs to be unset. | [optional]
**buyer_external_identifier** | **string** | The &#x60;external_identifier&#x60; of the buyer to associate this payment method to. If this field is provided then the &#x60;buyer_id&#x60; field needs to be unset. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
