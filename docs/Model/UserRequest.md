# # UserRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The full name of the user which is used in the Gr4vy admin panel to give an user a human readable name. | [optional]
**email_address** | **string** | The email address for this user. | [optional]
**role_ids** | **string[]** | A list of role ids that will be assigned to the user being created. The creator must have &#x60;roles.write&#x60; or the role that is being assigned. | [optional]
**merchant_account_ids** | **string[]** | A list of merchant account IDs that the user being created will be assigned to. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
