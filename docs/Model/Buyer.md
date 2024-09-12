# # Buyer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of this resource. Is always &#x60;buyer&#x60;. | [optional]
**id** | **string** | The unique Gr4vy ID for this buyer. | [optional]
**external_identifier** | **string** | An external identifier that can be used to match the buyer against your own records. | [optional]
**display_name** | **string** | A unique name for this buyer which is used in the Gr4vy admin panel to give a buyer a human readable name. | [optional]
**billing_details** | [**\Gr4vy\model\BuyerBillingDetails**](BuyerBillingDetails.md) |  | [optional]
**created_at** | **\DateTime** | The date and time when this buyer was created in our system. | [optional]
**updated_at** | **\DateTime** | The date and time when this buyer was last updated in our system. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)