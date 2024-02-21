# # PaymentServiceTokenRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**security_code** | **string** | The 3 or 4 digit security code often found on the card. This often referred to as the CVV or CVD.  The security code can only be set if the stored payment method represents a card. |
**payment_service_id** | **string** | The ID of the payment service. |
**redirect_url** | **string** | The redirect URL to redirect a buyer to after they have authorized their payment method. This only applies to payment methods that require buyer approval. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
