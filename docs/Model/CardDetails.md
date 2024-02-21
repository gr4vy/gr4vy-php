# # CardDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | &#x60;card-detail&#x60;. | [optional]
**id** | **string** | The 8 digit BIN of the card. When looking up card details using a &#x60;payment_method_id&#x60; this value will be &#x60;null&#x60;. | [optional]
**card_type** | **string** | The type of card. | [optional]
**scheme** | **string** | The scheme/brand of the card. | [optional]
**scheme_icon_url** | **string** | An icon to display for the card scheme. | [optional]
**country** | **string** | The 2-letter ISO code of the issuing country of the card. | [optional]
**required_fields** | [**\Gr4vy\model\RequiredFields**](RequiredFields.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
