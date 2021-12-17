# # TransactionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | The monetary amount to create an authorization for, in the smallest currency unit for the given currency, for example &#x60;1299&#x60; cents to create an authorization for &#x60;$12.99&#x60;. |
**currency** | **string** | A supported ISO-4217 currency code. |
**payment_method** | [**\Gr4vy\model\TransactionPaymentMethodRequest**](TransactionPaymentMethodRequest.md) |  |
**store** | **bool** | Whether or not to also try and store the payment method with us so that it can be used again for future use. This is only supported for payment methods that support this feature. | [optional] [default to false]
**intent** | **string** | Defines the intent of this API call. This determines the desired initial state of the transaction.  * &#x60;authorize&#x60; - (Default) Optionally approves and then authorizes a transaction but does not capture the funds. * &#x60;capture&#x60; - Optionally approves and then authorizes and captures the funds of the transaction. | [optional] [default to INTENT_AUTHORIZE]
**external_identifier** | **string** | An external identifier that can be used to match the transaction against your own records. | [optional]
**three_d_secure_data** | [**\Gr4vy\model\ThreeDSecureDataV1V2**](ThreeDSecureDataV1V2.md) |  | [optional]
**merchant_initiated** | **bool** | Indicates whether the transaction was initiated by the merchant (true) or customer (false). | [optional] [default to false]
**payment_source** | **string** | The source of the transaction. Defaults to &#39;ecommerce&#39;. | [optional]
**is_subsequent_payment** | **bool** | Indicates whether the transaction represents a subsequent payment coming from a setup recurring payment. Please note this flag is only compatible with payment_source set to [recurring, installment, card_on_file] and will be ignored for other values or if payment_source is not present. | [optional] [default to false]
**metadata** | **array<string,string>** | Any additional information about the transaction that you would like to store as key-value pairs. This data is passed to payment service providers that support it. Please visit https://gr4vy.com/docs/ under &#x60;Connections&#x60; for more information on how specific providers support metadata. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
