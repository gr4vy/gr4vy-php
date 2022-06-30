# # TransactionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | The monetary amount to create an authorization for, in the smallest currency unit for the given currency, for example &#x60;1299&#x60; cents to create an authorization for &#x60;$12.99&#x60;.  If the &#x60;intent&#x60; is set to &#x60;capture&#x60;, an amount greater than zero must be supplied. |
**currency** | **string** | A supported ISO-4217 currency code. |
**country** | **string** | The 2-letter ISO code of the country of the transaction. This is used to filter the payment services that is used to process the transaction. | [optional]
**payment_method** | [**\Gr4vy\model\TransactionPaymentMethodRequest**](TransactionPaymentMethodRequest.md) |  |
**store** | **bool** | Whether or not to also try and store the payment method with us so that it can be used again for future use. This is only supported for payment methods that support this feature. There are also a few restrictions on how the flag may be set:  * The flag has to be set to &#x60;true&#x60; when the &#x60;payment_source&#x60; is set to &#x60;recurring&#x60; or &#x60;installment&#x60;, and &#x60;merchant_initiated&#x60; is set to &#x60;false&#x60;.  * The flag has to be set to &#x60;false&#x60; (or not set) when using a previously tokenized payment method. | [optional] [default to false]
**intent** | **string** | Defines the intent of this API call. This determines the desired initial state of the transaction.  * &#x60;authorize&#x60; - (Default) Optionally approves and then authorizes a transaction but does not capture the funds. * &#x60;capture&#x60; - Optionally approves and then authorizes and captures the funds of the transaction. | [optional] [default to 'authorize']
**external_identifier** | **string** | An external identifier that can be used to match the transaction against your own records. | [optional]
**three_d_secure_data** | [**\Gr4vy\model\ThreeDSecureDataV1V2**](ThreeDSecureDataV1V2.md) |  | [optional]
**merchant_initiated** | **bool** | Indicates whether the transaction was initiated by the merchant (true) or customer (false). | [optional] [default to false]
**payment_source** | **string** | The source of the transaction. Defaults to &#x60;ecommerce&#x60;. | [optional]
**is_subsequent_payment** | **bool** | Indicates whether the transaction represents a subsequent payment coming from a setup recurring payment. Please note there are some restrictions on how this flag may be used.  The flag can only be &#x60;false&#x60; (or not set) when the transaction meets one of the following criteria:  * It is not &#x60;merchant_initiated&#x60;. * &#x60;payment_source&#x60; is set to &#x60;card_on_file&#x60;.  The flag can only be set to &#x60;true&#x60; when the transaction meets one of the following criteria:  * It is not &#x60;merchant_initiated&#x60;. * &#x60;payment_source&#x60; is set to &#x60;recurring&#x60; or &#x60;installment&#x60; and &#x60;merchant_initiated&#x60; is set to &#x60;true&#x60;. * &#x60;payment_source&#x60; is set to &#x60;card_on_file&#x60;. | [optional] [default to false]
**metadata** | **array<string,string>** | Any additional information about the transaction that you would like to store as key-value pairs. This data is passed to payment service providers that support it. Please visit https://gr4vy.com/docs/ under &#x60;Connections&#x60; for more information on how specific providers support metadata. | [optional]
**statement_descriptor** | [**\Gr4vy\model\TransactionStatementDescriptor**](TransactionStatementDescriptor.md) |  | [optional]
**cart_items** | [**\Gr4vy\model\CartItem[]**](CartItem.md) | An array of cart items that represents the line items of a transaction. | [optional]
**previous_scheme_transaction_id** | **string** | A scheme&#39;s transaction identifier to use in connecting a merchant initiated transaction to a previous customer initiated transaction.  If not provided, and a qualifying customer initiated transaction has been previously made, then Gr4vy will populate this value with the identifier returned for that transaction.  e.g. the Visa Transaction Identifier, or Mastercard Trace ID. | [optional]
**browser_info** | [**\Gr4vy\model\TransactionRequestBrowserInfo**](TransactionRequestBrowserInfo.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
