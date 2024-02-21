# # TransactionRedirectRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | **string** | The method to use, this can be any of the methods that support redirect requests.  When storing a new payment method, only &#x60;gocardless&#x60; and &#x60;stripedd&#x60; are currently supported. |
**redirect_url** | **string** | The redirect URL to redirect a buyer to after they have authorized their transaction. |
**currency** | **string** | The ISO-4217 currency code to use this payment method for. This is used to select the payment service to use. |
**country** | **string** | The 2-letter ISO code of the country to use this payment method for. This is used to select the payment service to use. |
**external_identifier** | **string** | An external identifier that can be used to match the account against your own records. This can only be set if the &#x60;store&#x60; flag is set to &#x60;true&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
