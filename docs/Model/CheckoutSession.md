# # CheckoutSession

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | &#x60;checkout-session&#x60;. | [optional]
**id** | **string** | The ID of the Checkout Session. | [optional]
**expires_at** | **\DateTime** | The date and time when the Checkout Session will expire. By default this will be set to 1 hour from the date of creation. | [optional]
**cart_items** | [**\Gr4vy\model\CartItem[]**](CartItem.md) | An array of cart items that represents the line items of a transaction. | [optional]
**metadata** | **array<string,string>** | Any additional information about the transaction that you would like to store as key-value pairs. This data is passed to payment service providers that support it. | [optional]
**payment_method** | [**\Gr4vy\model\CheckoutSessionPaymentMethod**](CheckoutSessionPaymentMethod.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
