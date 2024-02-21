# # TransactionCardRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | **string** | &#x60;card&#x60;. |
**number** | **string** | The 13-19 digit number for this card as it can be found on the front of the card. |
**expiration_date** | **string** | The expiration date of the card, formatted &#x60;MM/YY&#x60;. |
**security_code** | **string** | The 3 or 4 digit security code often found on the card. This often referred to as the CVV or CVD. |
**external_identifier** | **string** | An external identifier that can be used to match the card against your own records. This can only be set if the &#x60;store&#x60; flag is set to &#x60;true&#x60;. | [optional]
**redirect_url** | **string** | We strongly recommend providing a &#x60;redirect_url&#x60; either when 3-D Secure is enabled and &#x60;three_d_secure_data&#x60; is not provided, or when using connections where 3DS is enabled. This value will be appended with both a transaction ID and status (e.g. &#x60;https://example.com/callback?gr4vy_transaction_id&#x3D;123 &amp;gr4vy_transaction_status&#x3D;capture_succeeded&#x60;) after 3-D Secure has completed. For those cases, if the value is not present, the transaction will be marked as failed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
