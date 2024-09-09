# # Card

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | &#x60;payment-method&#x60;. | [optional]
**id** | **string** | The unique ID of the payment method. | [optional]
**status** | **string** | The state of the card tokenization. | [optional]
**method** | **string** | &#x60;card&#x60;. | [optional]
**created_at** | [**\DateTime**](\DateTime.md) | The date and time when this payment method was first created in our system. | [optional]
**updated_at** | [**\DateTime**](\DateTime.md) | The date and time when this payment method was last updated in our system. | [optional]
**external_identifier** | **string** | An external identifier that can be used to match the payment method against your own records. | [optional]
**buyer** | [**Buyer**](Buyer.md) | The optional buyer for which this payment method has been stored. | [optional]
**details** | [**\Gr4vy\model\CardDetails**](CardDetails.md) |  | [optional]
**environment** | **string** | The environment this payment method has been stored for. This will be null of the payment method was not stored. | [optional] [default to ENVIRONMENT_PRODUCTION]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
