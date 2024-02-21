# # GiftCardRedemption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of this resource. | [optional]
**id** | **string** | The ID of this gift card redemption. This may be &#x60;null&#x60; if the no redemption happened. | [optional]
**status** | **string** | The status of the gift card redemption for the &#x60;payment_method&#x60;. | [optional]
**amount** | **int** | The amount redeemed for this gift card. | [optional]
**refunded_amount** | **int** | The amount refunded for this gift card. This can not be larger than &#x60;amount&#x60;. | [optional]
**gift_card_service_redemption_id** | **string** | The gift card service&#39;s unique ID for the redemption. | [optional]
**error_code** | **string** | If this gift card redemption resulted in an error, this will contain the internal code for the error. | [optional]
**raw_error_code** | **string** | If this gift card redemption resulted in an error, this will contain the raw error code received from the gift card provider. | [optional]
**raw_error_message** | **string** | If this gift card redemption resulted in an error, this will contain the raw error message received from the gift card provider. | [optional]
**gift_card** | [**\Gr4vy\model\GiftCardSnapshot**](GiftCardSnapshot.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
