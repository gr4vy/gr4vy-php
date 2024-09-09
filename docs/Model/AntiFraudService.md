# # AntiFraudService

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of this resource. Is always &#x60;anti-fraud-service&#x60;. | [optional]
**id** | **string** | The unique Gr4vy ID for this anti-fraud service. | [optional]
**anti_fraud_service_definition_id** | **string** | The name of the Anti-Fraud service provider. During update request, this value is used for validation only but the underlying service can not be changed for an existing service. | [optional]
**display_name** | **string** | A unique name for this anti-fraud service which is used in the Gr4vy admin panel to give a anti-fraud service a human readable name. | [optional]
**active** | **bool** | Defines if this service is currently active or not. | [optional] [default to true]
**fields** | [**\Gr4vy\model\AntiFraudServiceFieldsInner[]**](AntiFraudServiceFieldsInner.md) | A list of fields, each containing a key-value pair for anti-fraud service decision mapping e.g. for sift &#x60;approve_decision&#x60; will be in the response. | [optional]
**created_at** | **\DateTime** | The date and time when this anti-fraud service was created in our system. | [optional]
**updated_at** | **\DateTime** | The date and time when this anti-fraud service was last updated in our system. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
