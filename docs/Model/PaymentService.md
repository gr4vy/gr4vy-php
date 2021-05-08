# # PaymentService

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of this payment service. | [optional]
**type** | **string** | The type of this resource. | [optional]
**payment_service_definition_id** | **string** | The ID of the payment service definition used to create this service. | [optional]
**method** | **string** | Defines the ID of the payment method that this service handles. | [optional]
**display_name** | **string** | The custom name set for this service. | [optional]
**status** | **string** | The current status of this service. This will start off as pending, move to created, and might eventually move to an error status if and when the credentials are no longer valid. | [optional]
**accepted_currencies** | **string[]** | A list of currencies for which this service is enabled, in ISO 4217 three-letter code format. | [optional]
**accepted_countries** | **string[]** | A list of countries for which this service is enabled, in ISO two-letter code format. | [optional]
**credentials_mode** | **string** | Defines if the credentials are intended for the service&#39;s live API or sandbox/test API. | [optional] [default to CREDENTIALS_MODE_LIVE]
**active** | **bool** | Defines if this service is currently active or not. | [optional] [default to true]
**environments** | **string[]** | Determines the Gr4vy environments in which this service should be available. This can be used in combination with the &#x60;environment&#x60; parameters in the payment method and transaction APIs to route transactions through this service. | [optional]
**position** | **float** | The numeric rank of a payment service. Payment services with a lower position value are processed first. | [optional]
**created_at** | [**\DateTime**](\DateTime.md) | The date and time when this service was created. | [optional]
**updated_at** | [**\DateTime**](\DateTime.md) | The date and time when this service was last updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
