# # PaymentService

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of this resource. | [optional]
**id** | **string** | The ID of this payment service. | [optional]
**accepted_countries** | **string[]** | A list of countries for which this service is enabled, in ISO two-letter code format. | [optional]
**accepted_currencies** | **string[]** | A list of currencies for which this service is enabled, in ISO 4217 three-letter code format. | [optional]
**active** | **bool** | Defines if this service is currently active or not. | [optional] [default to true]
**created_at** | **\DateTime** | The date and time when this service was created. | [optional]
**display_name** | **string** | The custom name set for this service. | [optional]
**fields** | [**\Gr4vy\model\GiftCardServiceFieldsInner[]**](GiftCardServiceFieldsInner.md) | A list of fields, each containing a key-value pair for each field configured for this payment service. Fields marked as &#x60;secret&#x60; (see Payment Service Definition) are not returned. | [optional]
**merchant_account_id** | **string** | The unique ID for a merchant account. | [optional]
**merchant_profile** | [**\Gr4vy\model\PaymentServiceMerchantProfile**](PaymentServiceMerchantProfile.md) |  | [optional]
**method** | **string** | The payment method that this service handles. | [optional]
**network_tokens_enabled** | **bool** | Defines if network tokens are enabled for the service. This feature can only be enabled if the payment service is set as &#x60;open_loop&#x60; and the PSP is set up to accept network tokens. | [optional]
**open_loop** | **bool** | Defines if the service works as an open-loop service. This feature can only be enabled if the PSP is set up to accept previous scheme transaction IDs. | [optional]
**payment_method_tokenization_enabled** | **bool** | Defines if tokenization is enabled for the service. This feature can only be enabled if the payment service is NOT set as &#x60;open_loop&#x60; and the PSP is set up to tokenize. | [optional] [default to false]
**payment_service_definition_id** | **string** | The ID of the payment service definition used to create this service. | [optional]
**status** | **string** | The current status of this service. This will start off as pending, move to created, and might eventually move to an error status if and when the credentials are no longer valid. | [optional]
**three_d_secure_enabled** | **bool** | Defines if 3-D Secure is enabled for the service (can only be enabled if the payment service definition supports the &#x60;three_d_secure_hosted&#x60; feature). This does not affect pass through 3-D Secure data. | [optional] [default to false]
**updated_at** | **\DateTime** | The date and time when this service was last updated. | [optional]
**webhook_url** | **string** | The URL that needs to be configured with this payment service as the receiving endpoint for webhooks from the service to Gr4vy. Currently, Gr4vy does not yet automatically register webhooks on setup, and therefore webhooks need to be registered manually by the merchant. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
