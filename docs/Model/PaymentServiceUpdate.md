# # PaymentServiceUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**display_name** | **string** | A custom name for the payment service. This will be shown in the Admin UI. | [optional]
**fields** | [**\Gr4vy\model\PaymentServiceRequestFieldsInner[]**](PaymentServiceRequestFieldsInner.md) | A list of fields, each containing a key-value pair for each field defined by the definition for this payment service e.g. for stripe-card &#x60;secret_key&#x60; is required and so must be sent within this field. | [optional]
**accepted_countries** | **string[]** | A list of countries that this payment service needs to support in ISO two-letter code format. | [optional]
**accepted_currencies** | **string[]** | A list of currencies that this payment service needs to support in ISO 4217 three-letter code format. | [optional]
**three_d_secure_enabled** | **bool** | Defines if 3-D Secure is enabled for the service (can only be enabled if the payment service definition supports the &#x60;three_d_secure_hosted&#x60; feature). This does not affect pass through 3-D Secure data. | [optional] [default to false]
**merchant_profile** | [**\Gr4vy\model\PaymentServiceUpdateMerchantProfile**](PaymentServiceUpdateMerchantProfile.md) |  | [optional]
**active** | **bool** | Defines if this service is currently active or not. | [optional] [default to true]
**open_loop** | **bool** | Defines if the service works as an open-loop service. This feature can only be enabled if the PSP is set up to accept previous scheme transaction IDs.  If this value is set to &#x60;null&#x60;, it will be set to the value of &#x60;open_loop&#x60; in the payment service definition.  If &#x60;open_loop_toggle&#x60; is &#x60;false&#x60; in the payment service definition, &#x60;open_loop&#x60; should either not be provided or set to &#x60;null&#x60;, or it will fail with a validation error. | [optional]
**payment_method_tokenization_enabled** | **bool** | Defines if tokenization is enabled for the service. This feature can only be enabled if the payment service is NOT set as &#x60;open_loop&#x60; and the PSP is set up to tokenize. | [optional] [default to false]
**network_tokens_enabled** | **bool** | Defines if network tokens are enabled for the service. This feature can only be enabled if the payment service is set as &#x60;open_loop&#x60; and the PSP is set up to accept network tokens.  If this value is set to &#x60;null&#x60;, it will be set to the value of &#x60;network_tokens_default&#x60; in the payment service definition.  If &#x60;network_tokens_toggle&#x60; is &#x60;false&#x60; in the payment service definition, &#x60;network_tokens_enabled&#x60; should either not be provided or set to &#x60;null&#x60;, or it will fail with a validation error. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
