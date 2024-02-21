# # MerchantAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | &#x60;merchant-account&#x60;. | [optional]
**id** | **string** | The ID for this merchant account. | [optional]
**display_name** | **string** | The display name of this merchant account. | [optional]
**outbound_webhook_url** | **string** | The optional URL where webhooks will be received. | [optional]
**outbound_webhook_username** | **string** | The optional username to use when &#x60;outbound_webhook_url&#x60; is configured and requires basic authentication. | [optional]
**outbound_webhook_password** | **string** | The optional password to use when &#x60;outbound_webhook_url&#x60; is configured and requires basic authentication.  If the field is not &#x60;null&#x60;, the value is masked to avoid exposing sensitive information. | [optional]
**visa_network_tokens_requestor_id** | **string** | Requestor ID provided for Visa after onboarding to use Network Tokens. | [optional]
**visa_network_tokens_app_id** | **string** | Application ID provided for Visa after onboarding to use Network Tokens. | [optional]
**amex_network_tokens_requestor_id** | **string** | Requestor ID provided for Amex after onboarding to use Network Tokens. | [optional]
**amex_network_tokens_app_id** | **string** | Application ID provided for Amex after onboarding to use Network Tokens. | [optional]
**mastercard_network_tokens_requestor_id** | **string** | Requestor ID provided for Mastercard after onboarding to use Network Tokens. | [optional]
**mastercard_network_tokens_app_id** | **string** | Application ID provided for Mastercard after onboarding to use Network Tokens. | [optional]
**loon_client_key** | **string** | Client key provided by Pagos to authenticate to the Loon API. Loon is the Account Updater service used by Gr4vy. | [optional]
**loon_secret_key** | **string** | Secret key provided by Pagos to authenticate to the Loon API. Loon is the Account Updater service used by Gr4vy.  If the field is not &#x60;null&#x60;, the value is masked to avoid exposing sensitive information. | [optional]
**loon_accepted_schemes** | **string[]** | Card schemes accepted when creating jobs using this set of Loon API keys. Loon is the Account Updater service used by Gr4vy. | [optional]
**created_at** | **\DateTime** | The date and time when this merchant account was created. | [optional]
**updated_at** | **\DateTime** | The date and time when this merchant account was updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
