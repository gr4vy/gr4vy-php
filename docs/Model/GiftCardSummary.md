# # GiftCardSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of this resource. | [optional]
**id** | **string** | The ID of this gift card. | [optional]
**merchant_account_id** | **string** | The unique ID for a merchant account. | [optional]
**bin** | **string** | The first 6 digits of the full gift card number. | [optional]
**sub_bin** | **string** | The 3 digits after the &#x60;bin&#x60; of the full gift card number. | [optional]
**last4** | **string** | The last 4 digits for the gift card. | [optional]
**expiration_date** | **\DateTime** | The date and time when this gift card expires. This is a full date/time and may be more accurate than the actual expiry date received by the gift card service. | [optional]
**balance** | **int** | The amount remaining on the balance for this gift card according to the gift card service. This may be &#x60;null&#x60; if the balance could not be fetched. | [optional]
**currency** | **string** | The ISO-4217 currency code that this gift card has a balance for. | [optional]
**balance_error_code** | **string** | If the last balance update failed, this will contain the internal code for this error. | [optional]
**balance_raw_error_code** | **string** | If the last balance update failed, this will contain the the raw error code received from the gift card provider. | [optional]
**balance_raw_error_message** | **string** | If the last balance update failed, this will contain the the raw error message received from the gift card provider. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
