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
**three_d_secure_enabled** | **bool** | Defines if 3-D Secure is enabled for the service (can only be enabled if the payment service definition supports the &#x60;three_d_secure_hosted&#x60; feature). This does not affect pass through 3-D Secure data. | [optional] [default to false]
**acquirer_bin_visa** | **string** | Acquiring institution identification code for VISA. | [optional]
**acquirer_bin_mastercard** | **string** | Acquiring institution identification code for Mastercard. | [optional]
**acquirer_bin_amex** | **string** | Acquiring institution identification code for Amex. | [optional]
**acquirer_bin_discover** | **string** | Acquiring institution identification code for Discover. | [optional]
**acquirer_merchant_id** | **string** | Merchant identifier used in authorisation requests (assigned by the acquirer). | [optional]
**merchant_name** | **string** | Merchant name (assigned by the acquirer). | [optional]
**merchant_country_code** | **string** | ISO 3166-1 numeric three-digit country code. | [optional]
**merchant_category_code** | **string** | Merchant category code that describes the business. | [optional]
**merchant_url** | **string** | Fully qualified URL of 3-D Secure requestor website or customer care site. | [optional]
**credentials_mode** | **string** | Defines if the credentials are intended for the service&#39;s live API or sandbox/test API. | [optional] [default to CREDENTIALS_MODE_LIVE]
**active** | **bool** | Defines if this service is currently active or not. | [optional] [default to true]
**environments** | **string[]** | Determines the Gr4vy environments in which this service should be available. This can be used in combination with the &#x60;environment&#x60; parameters in the payment method and transaction APIs to route transactions through this service. | [optional]
**position** | **float** | The numeric rank of a payment service. Payment services with a lower position value are processed first. | [optional]
**created_at** | [**\DateTime**](\DateTime.md) | The date and time when this service was created. | [optional]
**updated_at** | [**\DateTime**](\DateTime.md) | The date and time when this service was last updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
