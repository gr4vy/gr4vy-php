# # GiftCardServiceVerifyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**gift_card_service_definition_id** | **string** | The ID of the gift card service to use. |
**gift_card_service_id** | **string** | The ID of the gift card service. Required if sending a partial set of credentials in the &#x60;fields&#x60; property. This will merge the provided fields with those already on the service. | [optional]
**fields** | [**\Gr4vy\model\GiftCardServiceVerifyRequestFieldsInner[]**](GiftCardServiceVerifyRequestFieldsInner.md) | A list of fields where each field is a key-value pair that represents a defined field in the definition of the service. You are not required to send the full list of fields if the credentials for the service are already stored. For example, if your credentials for &#x60;qwikcilver-gift-card&#x60; are stored and you only provide a &#x60;secret_key&#x60; in the request, it will override the stored &#x60;secret_key&#x60; and verify the resulting set of credentials against the service. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
