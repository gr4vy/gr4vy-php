# # AntiFraudWebhookEventContext

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**anti_fraud_service_id** | **string** | The unique ID of the anti-fraud service used. | [optional]
**anti_fraud_service_name** | **string** | The name of the anti-fraud service used. | [optional]
**anti_fraud_service_definition_id** | **string** | The anti-fraud service definition used. | [optional]
**anti_fraud_service_check_id** | **string** | The external ID of the decision that&#39;s being updated. | [optional]
**content** | **string** | The raw payload sent as a webhook. | [optional]
**content_type** | **string** | The content type of the payload sent as a webhook. | [optional]
**decision** | **string** | The parsed decision response from the anti-fraud provider webhook. | [optional]
**comment** | **string** | Any comment that may have come with the webhook event. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
