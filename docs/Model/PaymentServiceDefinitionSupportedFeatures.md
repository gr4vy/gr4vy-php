# # PaymentServiceDefinitionSupportedFeatures

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_method_tokenization** | **bool** | Supports storing a payment method via tokenization. | [optional]
**three_d_secure_hosted** | **bool** | Supports hosted 3-D Secure with a redirect. | [optional]
**three_d_secure_pass_through** | **bool** | Supports passing 3-D Secure data to the underlying processor. | [optional]
**network_tokens** | **bool** | Supports passing decrypted digital wallet (e.g. Apple Pay) tokens to the underlying processor. | [optional]
**verify_credentials** | **bool** | Supports verifying the credentials entered while setting up the underlying processor. This is for internal use only. | [optional]
**void** | **bool** | Supports [voiding](#operation/void-transaction) authorized transactions. | [optional]
**refunds** | **bool** | Supports [refunding](#operation/refund-transaction) captured transactions. | [optional]
**partial_refunds** | **bool** | Supports [partially refunding](#operation/refund-transaction) captured transactions. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
