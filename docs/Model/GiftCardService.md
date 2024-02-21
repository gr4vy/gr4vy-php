# # GiftCardService

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of this resource. | [optional]
**id** | **string** | The ID of this gift card service. | [optional]
**merchant_account_id** | **string** | The unique ID for a merchant account. | [optional]
**gift_card_service_definition_id** | **string** | The ID of the gift card service definition used to create this service. | [optional]
**display_name** | **string** | The custom name set for this service. | [optional]
**active** | **bool** | Defines if this service is currently active or not. | [optional]
**fields** | [**\Gr4vy\model\GiftCardServiceFieldsInner[]**](GiftCardServiceFieldsInner.md) | A list of fields, each containing a key-value pair for each field configured for this gift card service. Fields marked as &#x60;secret&#x60; are not returned. | [optional]
**created_at** | **\DateTime** | The date and time when this service was created. | [optional]
**updated_at** | **\DateTime** | The date and time when this service was last updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
