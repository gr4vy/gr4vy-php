# # AntiFraudServiceCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**anti_fraud_service_definition_id** | **string** | The name of the Anti-Fraud service provider. During update request, this value is used for validation only but the underlying service can not be changed for an existing service. |
**display_name** | **string** | A unique name for this anti-fraud service which is used in the Gr4vy admin panel to give a anti-fraud Service a human readable name. |
**active** | **bool** | Defines if this service is currently active or not. | [optional] [default to true]
**fields** | [**\Gr4vy\model\AntiFraudServiceUpdateFieldsInner[]**](AntiFraudServiceUpdateFieldsInner.md) | A list of fields, each containing a key-value pair for each field defined by the definition for this anti-fraud service e.g. for sift &#x60;api_key&#x60; must be sent within this field when creating the service.  For updates, only the fields sent here will be updated, existing ones will not be affected if not present. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
