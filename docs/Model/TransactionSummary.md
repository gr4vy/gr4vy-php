# # TransactionSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of this resource. Is always &#x60;transaction&#x60;. | [optional]
**id** | **string** | The unique identifier for this transaction. | [optional]
**amount** | **int** | The authorized amount for this transaction. This can be more than the actual captured amount and part of this amount may be refunded. | [optional]
**authorized_amount** | **int** | The amount for this transaction that has been authorized for the &#x60;payment_method&#x60;. This can be less than the &#x60;amount&#x60; if gift cards were used. | [optional]
**buyer** | [**\Gr4vy\model\TransactionBuyer**](TransactionBuyer.md) |  | [optional]
**captured_amount** | **int** | The captured amount for this transaction. This can be the full value of the &#x60;authorized_amount&#x60; or less. | [optional]
**checkout_session_id** | **string** | The identifier for the checkout session this transaction is associated with. | [optional]
**country** | **string** | The 2-letter ISO code of the country of the transaction. This is used to filter the payment services that is used to process the transaction. | [optional]
**created_at** | **\DateTime** | The date and time when this transaction was created in our system. | [optional]
**currency** | **string** | The currency code for this transaction. | [optional]
**external_identifier** | **string** | An external identifier that can be used to match the transaction against your own records. | [optional]
**gift_card_redemptions** | [**\Gr4vy\model\GiftCardRedemption[]**](GiftCardRedemption.md) | The gift cards redeemed for this transaction. | [optional]
**intent** | **string** | The original &#x60;intent&#x60; used when the transaction was [created](#operation/authorize-new-transaction). | [optional]
**merchant_account_id** | **string** | The ID of the merchant account to which this transaction belongs to. | [optional]
**method** | **string** |  | [optional]
**payment_method** | [**\Gr4vy\model\TransactionPaymentMethod**](TransactionPaymentMethod.md) |  | [optional]
**payment_service** | [**\Gr4vy\model\TransactionPaymentService**](TransactionPaymentService.md) |  | [optional]
**pending_review** | **bool** | Whether a manual review is pending. | [optional]
**raw_response_code** | **string** | This is the response code received from the payment service. This can be set to any value and is not standardized across different payment services. | [optional]
**raw_response_description** | **string** | This is the response description received from the payment service. This can be set to any value and is not standardized across different payment services. | [optional]
**reconciliation_id** | **string** | The base62 encoded transaction ID. This represents a shorter version of this transaction&#39;s &#x60;id&#x60; which is sent to payment services, anti-fraud services, and other connectors. You can use this ID to reconcile a payment service&#39;s transaction against our system.  This ID is sent instead of the transaction ID because not all services support 36 digit identifiers. | [optional]
**refunded_amount** | **int** | The refunded amount for this transaction. This can be the full value of the &#x60;captured_amount&#x60; or less. | [optional]
**status** | **string** | The status of the transaction. The status may change over time as asynchronous processing events occur. | [optional]
**updated_at** | **\DateTime** | Defines when the transaction was last updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
