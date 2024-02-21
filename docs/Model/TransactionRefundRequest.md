# # TransactionRefundRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | The amount requested to refund.  If omitted, a full refund will be requested for the main payment method.  When set, the amount must be lower than or equal to the remaining balance in the associated transaction. Negative and zero-amount refunds are not supported. | [optional]
**target_type** | **string** | The target type to refund for. This can be used to target a gift card to refund to instead of the main payment method. | [optional] [default to 'payment-method']
**target_id** | **string** | The optional ID of the instrument to refund for. This is only required when the &#x60;target_type&#x60; is set to &#x60;gift-card-redemption&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
