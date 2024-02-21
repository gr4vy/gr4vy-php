# # GiftCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of this resource. | [optional]
**id** | **string** | The ID of this gift card. | [optional]
**merchant_account_id** | **string** | The unique ID for a merchant account. | [optional]
**service** | [**\Gr4vy\model\GiftCardService**](GiftCardService.md) |  | [optional]
**bin** | **string** | The first 6 digits of the full gift card number. | [optional]
**sub_bin** | **string** | The 3 digits after the &#x60;bin&#x60; of the full gift card number. | [optional]
**last4** | **string** | The last 4 digits for the gift card. | [optional]
**expiration_date** | **\DateTime** | The date and time when this gift card expires. This is a full date/time and may be more accurate than the actual expiry date received by the gift card service. | [optional]
**buyer** | [**\Gr4vy\model\GiftCardBuyer**](GiftCardBuyer.md) |  | [optional]
**created_at** | **\DateTime** | The date and time when this gift card was created in our system. | [optional]
**updated_at** | **\DateTime** | The date and time when this gift card was last updated in our system. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
