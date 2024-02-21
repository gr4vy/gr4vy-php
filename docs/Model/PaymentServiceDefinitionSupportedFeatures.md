# # PaymentServiceDefinitionSupportedFeatures

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delayed_capture** | **bool** | Supports [capturing](#operation/capture-transaction) authorized transactions. | [optional]
**digital_wallets** | **bool** | Supports passing decrypted digital wallet (e.g. Apple Pay) tokens to the underlying processor. | [optional]
**network_tokens_default** | **bool** | Supports processing network tokens by default. | [optional]
**network_tokens_toggle** | **bool** | Supports toggling processing of network tokens on or off. | [optional]
**open_loop** | **bool** | Supports processing transactions with either raw PAN details or network tokens. | [optional]
**open_loop_toggle** | **bool** | Supports toggling processing as open-loop on or off. | [optional]
**partial_refunds** | **bool** | Supports [partially refunding](#operation/refund-transaction) captured transactions. | [optional]
**payment_method_tokenization** | **bool** | Supports storing a payment method via tokenization. | [optional]
**payment_method_tokenization_toggle** | **bool** | Supports toggling tokenization for a payment method on or off from the dashboard. | [optional]
**refunds** | **bool** | Supports [refunding](#operation/refund-transaction) captured transactions. | [optional]
**requires_webhook_setup** | **bool** | Requires merchant to set up &#x60;webhook_url&#x60; manually with provider. | [optional]
**three_d_secure_hosted** | **bool** | Supports hosted 3-D Secure with a redirect. | [optional]
**three_d_secure_pass_through** | **bool** | Supports passing 3-D Secure data to the underlying processor. | [optional]
**verify_credentials** | **bool** | Supports verifying the credentials entered while setting up the underlying processor. This is for internal use only. | [optional]
**void** | **bool** | Supports [voiding](#operation/void-transaction) authorized transactions. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
