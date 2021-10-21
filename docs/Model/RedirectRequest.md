# # RedirectRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | **string** | The method to use, this can be any of the methods that support redirect requests.  When storing a new payment method, only &#x60;gocardless&#x60; is currently supported. |
**redirect_url** | **string** | The redirect URL to redirect a buyer to after they have authorized their transaction. |
**currency** | **string** | The ISO-4217 currency code to use this payment method for. This is used to select the payment service to use. |
**country** | **string** | The 2-letter ISO code of the country to use this payment method for. This is used to select the payment service to use. |
**external_identifier** | **string** | An external identifier that can be used to match the account against your own records. | [optional]
**buyer_id** | **string** | The ID of the buyer to associate this payment method to. If this field is provided then the &#x60;buyer_external_identifier&#x60; field needs to be unset. | [optional]
**buyer_external_identifier** | **string** | The &#x60;external_identifier&#x60; of the buyer to associate this payment method to. If this field is provided then the &#x60;buyer_id&#x60; field needs to be unset. | [optional]
**environment** | **string** | Defines the environment to store this payment method in. Setting this to anything other than &#x60;production&#x60; will force Gr4vy to use a payment a service configured for that environment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
