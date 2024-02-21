# # ApiLog

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | &#x60;api-log&#x60;. | [optional]
**id** | **string** | The ID of the API log entry. | [optional]
**request_method** | **string** | The http request method that generated the log entry. | [optional]
**request_url** | **string** | The http request URL which trigged the error log. | [optional]
**request_received_at** | **\DateTime** | The date and time that the request was received. | [optional]
**response_status_code** | **float** | The http request status code. | [optional]
**response_body** | [**\Gr4vy\model\ApiLogResponseBody**](ApiLogResponseBody.md) |  | [optional]
**response_sent_at** | **\DateTime** | date-time of when the response was sent. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
