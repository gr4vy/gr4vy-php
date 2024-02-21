# # GiftCardStoreRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | The 16-19 digit number for this gift card. |
**pin** | **string** | The PIN for this gift card. |
**buyer_id** | **string** | The ID of the buyer to associate this gift card to. If this field is provided then the &#x60;buyer_external_identifier&#x60; field needs to be unset. | [optional]
**buyer_external_identifier** | **string** | The &#x60;external_identifier&#x60; of the buyer to associate this gift card to. If this field is provided then the &#x60;buyer_id&#x60; field needs to be unset. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
