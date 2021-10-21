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
**environment** | **string** | Defines the environment to create this transaction in. Setting this to anything other than &#x60;production&#x60; will force Gr4vy to use the payment a service configured for that environment. | [optional]
**three_d_secure_data** | [**\Gr4vy\model\Undefined**](Undefined.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
