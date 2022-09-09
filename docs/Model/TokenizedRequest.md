# # TokenizedRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | **string** | &#x60;id&#x60;. |
**id** | **string** | A ID that represents a previously tokenized payment method. This token can represent any type of payment method. |
**redirect_url** | **string** | We strongly recommended providing a &#x60;redirect_url&#x60; for stored cards when 3-D Secure is enabled and &#x60;three_d_secure_data&#x60; is not provided. This will be appended with both a transaction ID and status (e.g. &#x60;https://example.com/callback? gr4vy_transaction_id&#x3D;123&amp;gr4vy_transaction_status&#x3D;capture_succeeded&#x60;) after 3-D Secure has completed. | [optional]
**security_code** | **string** | The 3 or 4 digit security code often found on the card. This often referred to as the CVV or CVD.  The security code can only be set if the stored payment method represents a card. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
