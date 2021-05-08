# # ErrorGeneric

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of this object. This is always &#x60;error&#x60;. | [optional] [default to TYPE_ERROR]
**code** | **string** | A custom code to further describe the type of error being returned. This code provides further specification within the HTTP &#x60;status&#x60; code and can be used by a program to define logic based on the error. | [optional]
**status** | **int** | The HTTP status code of this error. | [optional] [default to 0]
**message** | **string** | A human readable message that describes the error. The content of this field should not be used to determine any business logic. | [optional]
**details** | [**\Gr4vy\model\ErrorDetail[]**](ErrorDetail.md) | A list of detail objects that further clarify the reason for the error. Not every error supports more detail. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
