# # TransactionShippingDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of this resource. Is always &#x60;shipping-details&#x60;. | [optional]
**id** | **string** | The unique ID for a buyer&#39;s shipping detail. | [optional]
**buyer_id** | **string** | The unique ID for a buyer. | [optional]
**first_name** | **string** | The first name(s) or given name of the buyer. | [optional]
**last_name** | **string** | The last name, or family name, of the buyer. | [optional]
**email_address** | **string** | The email address of the buyer. | [optional]
**phone_number** | **string** | The phone number of the buyer. This number is formatted according to the [E164 number standard](https://www.twilio.com/docs/glossary/what-e164). | [optional]
**address** | [**\Gr4vy\model\ShippingDetailAddress**](ShippingDetailAddress.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
