# # PaymentServiceDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the payment service. This is the underlying provider followed by a dash followed by the payment method ID. | [optional]
**type** | **string** | &#x60;payment-service-definition&#x60;. | [optional] [default to 'payment-service-definition']
**display_name** | **string** | The display name of this service. | [optional]
**method** | **string** |  | [optional]
**fields** | [**\Gr4vy\model\PaymentServiceDefinitionFields[]**](PaymentServiceDefinitionFields.md) | A list of fields that need to be submitted when activating the payment. service. | [optional]
**supported_currencies** | **string[]** | A list of three-letter ISO currency codes that this service supports. | [optional]
**supported_countries** | **string[]** | A list of two-letter ISO country codes that this service supports. | [optional]
**mode** | **string** |  | [optional]
**supported_features** | [**\Gr4vy\model\PaymentServiceDefinitionSupportedFeatures**](PaymentServiceDefinitionSupportedFeatures.md) |  | [optional]
**icon_url** | **string** | An icon to display for the payment service. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
