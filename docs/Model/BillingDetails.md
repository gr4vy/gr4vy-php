# # BillingDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | The first name(s) or given name for the buyer. | [optional]
**last_name** | **string** | The last name, or family name, of the buyer. | [optional]
**email_address** | **string** | The email address for the buyer. | [optional]
**phone_number** | **string** | The phone number to use for this request. This expect the number in the [E164 number standard](https://www.twilio.com/docs/glossary/what-e164). | [optional]
**address** | [**Address**](Address.md) | The billing address for the buyer. | [optional]
**tax_id** | [**TaxId**](TaxId.md) | The tax information associated with the billing details. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)