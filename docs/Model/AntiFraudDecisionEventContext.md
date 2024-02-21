# # AntiFraudDecisionEventContext

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**anti_fraud_service_id** | **string** | The unique ID of the anti-fraud service used. | [optional]
**anti_fraud_service_name** | **string** | The name of the anti-fraud service used. | [optional]
**anti_fraud_service_definition_id** | **string** | The anti-fraud service definition used. | [optional]
**anti_fraud_service_check_id** | **string** | The external ID of the decision. | [optional]
**request** | **string** | The HTTP body sent to fetch a decision. | [optional]
**response** | **string** | The HTTP body received from the anti-fraud provider. | [optional]
**response_status_code** | **float** | The HTTP response status code from the anti-fraud provider. | [optional]
**decision** | **string** | The parsed decision response from the anti-fraud provider response. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
