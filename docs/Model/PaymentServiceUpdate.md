# # PaymentServiceUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**display_name** | **string** | A custom name for the payment service. This will be shown in the Admin UI. | [optional]
**fields** | [**\Gr4vy\model\PaymentServiceUpdateFields[]**](PaymentServiceUpdateFields.md) | A list of fields, each containing a key-value pair for each field defined by the definition for this payment service e.g. for stripe-card &#x60;secret_key&#x60; is required and so must be sent with in this field. | [optional]
**accepted_countries** | **string[]** | A list of countries that this payment service needs to support in ISO two-letter code format. | [optional]
**accepted_currencies** | **string[]** | A list of currencies that this payment service needs to support in ISO 4217 three-letter code format. | [optional]
**credentials_mode** | **string** | Defines if the credentials are intended for the service&#39;s live API or sandbox/test API. | [optional] [default to CREDENTIALS_MODE_LIVE]
**active** | **bool** | Defines if this service is currently active or not. | [optional] [default to true]
**environments** | **string[]** | Determines the Gr4vy environments in which this service should be available. This can be used in combination with the &#x60;environment&#x60; parameters in the payment method and transaction APIs to route transactions through this service. | [optional]
**position** | **float** | The numeric rank of a payment service. Payment services with a lower position value are processed first. When a payment services is inserted at a position, any payment services with the the same value or higher are shifted down a position accordingly. When left out, the payment service is inserted at the end of the list. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
