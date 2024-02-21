# # MerchantAccountUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**display_name** | **string** | The human-readable name of the merchant account. | [optional]
**outbound_webhook_url** | **string** | The optional URL where webhooks will be received. | [optional]
**outbound_webhook_username** | **string** | The optional username to use when &#x60;outbound_webhook_url&#x60; is configured and requires basic authentication. | [optional]
**outbound_webhook_password** | **string** | The optional password to use when &#x60;outbound_webhook_url&#x60; is configured and requires basic authentication. | [optional]
**visa_network_tokens_requestor_id** | **string** | Requestor ID provided for Visa after onboarding to use Network Tokens. The requestor ID must be unique across all schemes and merchant accounts. | [optional]
**visa_network_tokens_app_id** | **string** | Application ID provided for Visa after onboarding to use Network Tokens. The application ID must be unique across all schemes and merchant accounts. | [optional]
**amex_network_tokens_requestor_id** | **string** | Requestor ID provided for Amex after onboarding to use Network Tokens. The requestor ID must be unique across all schemes and merchant accounts. | [optional]
**amex_network_tokens_app_id** | **string** | Application ID provided for Amex after onboarding to use Network Tokens. The application ID must be unique across all schemes and merchant accounts. | [optional]
**mastercard_network_tokens_requestor_id** | **string** | Requestor ID provided for Mastercard after onboarding to use Network Tokens. The requestor ID must be unique across all schemes and merchant accounts. | [optional]
**mastercard_network_tokens_app_id** | **string** | Application ID provided for Mastercard after onboarding to use Network Tokens. The application ID must be unique across all schemes and merchant accounts. | [optional]
**loon_client_key** | **string** | Client key provided by Pagos to authenticate to the Loon API. Loon is the Account Updater service used by Gr4vy.  * If the field is not set, the Account Updater service configuration is not updated. * If the field is set to &#x60;null&#x60;, the Account Updater service is disabled. * If the field is set to &#x60;null&#x60;, the other &#x60;loon_*&#x60; fields must be set to &#x60;null&#x60; as well. | [optional]
**loon_secret_key** | **string** | Secret key provided by Pagos to authenticate to the Loon API. Loon is the Account Updater service used by Gr4vy.  * If the field is not set, the Account Updater service configuration is not updated. * If the field is set to &#x60;null&#x60;, the Account Updater service is disabled. * If the field is set to &#x60;null&#x60;, the other &#x60;loon_*&#x60; fields must be set to &#x60;null&#x60; as well. | [optional]
**loon_accepted_schemes** | **string[]** | Card schemes accepted when creating jobs using this set of Loon API keys. Loon is the Account Updater service used by Gr4vy.  * If the field is not set, the Account Updater service configuration is not updated. * If the field is set to &#x60;null&#x60;, the Account Updater service is disabled. * If the field is set to &#x60;null&#x60;, the other &#x60;loon_*&#x60; fields must be set to &#x60;null&#x60; as well. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
