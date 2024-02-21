# # APIKeyPairCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**display_name** | **string** | A name for this key-pair which is used in the Gr4vy admin panel to give the key-pair a human readable name. | [optional]
**algorithm** | **string** | The algorithm to use for the API Key Pair. The recommended value is &#x60;ECDSA&#x60;. You should only use the &#x60;RSA&#x60; algorithm in environments that do not support &#x60;ECDSA&#x60;. | [optional] [default to 'ECDSA']
**role_ids** | **string[]** | A list of role IDs that will be assigned to the API Key Pair being created. Only the \&quot;Administrator\&quot; and \&quot;Integration\&quot; roles are supported. | [optional]
**merchant_account_id** | **string** | The optional ID of the merchant account this API Key Pair should be assigned to. Leave this unset to create an API key that works across all merchant accounts. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
