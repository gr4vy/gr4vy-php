# # GooglePayRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | **string** | &#x60;googlepay&#x60;. |
**token** | **string** | The encrypted (opaque) token returned by the Google Pay API that represents a payment method. |
**assurance_details** | [**\Gr4vy\model\GooglePayRequestAssuranceDetails**](GooglePayRequestAssuranceDetails.md) |  | [optional]
**card_holder_name** | **string** | Name of the card holder. | [optional]
**redirect_url** | **string** | We strongly recommend providing a &#x60;redirect_url&#x60; either when 3-D Secure is enabled and &#x60;three_d_secure_data&#x60; is not provided, or when using connections where 3DS is enabled. This value will be appended with both a transaction ID and status (e.g. &#x60;https://example.com/callback?gr4vy_transaction_id&#x3D;123 &amp;gr4vy_transaction_status&#x3D;capture_succeeded&#x60;) after 3-D Secure has completed. For those cases, if the value is not present, the transaction will be marked as failed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
