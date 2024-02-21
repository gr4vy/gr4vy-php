# # AuditLog

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | &#x60;audit-log&#x60;. | [optional]
**id** | **string** | The ID of the audit log entry. | [optional]
**timestamp** | **\DateTime** | The date and time that the action was performed. | [optional]
**action** | **string** | The action that was performed. | [optional]
**merchant_account_id** | **string** | The ID of the merchant account this entry was created for. | [optional]
**user** | [**\Gr4vy\model\AuditLogUser**](AuditLogUser.md) |  | [optional]
**resource** | [**\Gr4vy\model\AuditLogResource**](AuditLogResource.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
