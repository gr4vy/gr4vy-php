# # TransactionGiftCardRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the gift card to check a balance for. Required if &#x60;number&#x60; is not set. | [optional]
**number** | **string** | The 16-19 digit number for this gift card. Required if &#x60;id&#x60; is not set. | [optional]
**pin** | **string** | The PIN for this gift card. Required if &#x60;number&#x60; is set. | [optional]
**amount** | **int** | The monetary amount to charge for this gift card, in the smallest currency unit for the given currency, for example &#x60;1299&#x60; cents to create an authorization for &#x60;$12.99&#x60;.  All gift card amounts are subtracted from the total transaction amount. The remainder is charged to the provided &#x60;payment_method&#x60;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
