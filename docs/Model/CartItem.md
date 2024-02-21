# # CartItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the cart item. The value you set for this property may be truncated if the maximum length accepted by a payment service provider is less than 255 characters. |
**quantity** | **int** | The quantity of this item in the cart. This value cannot be negative or zero. |
**unit_amount** | **int** | The amount for an individual item represented as a monetary amount in the smallest currency unit for the given currency, for example &#x60;1299&#x60; USD cents represents &#x60;$12.99&#x60;. The amount sent through to the payment processor as unitary amount will be calculated to include the discount and tax values sent as part of this cart item. |
**discount_amount** | **int** | The amount discounted for this item represented as a monetary amount in the smallest currency unit for the given currency, for example &#x60;1299&#x60; USD cents represents &#x60;$12.99&#x60;.  Please note that this amount is for the total of the cart item and not for an individual item. For example, if the quantity is 5, this value should be the total discount amount for 5 of the cart item.  You might see unexpected failed transactions if the &#x60;discount_amount&#x60; can not be equally divided by the &#x60;quantity&#x60; value. This is due to the fact that some payment services require this amount to be specified per unit.  In this situation we recommend splitting this item into separate items, each with their own specific discount. | [optional] [default to 0]
**tax_amount** | **int** | The tax amount for this item represented as a monetary amount in the smallest currency unit for the given currency, for example &#x60;1299&#x60; USD cents represents &#x60;$12.99&#x60;.  Please not that this amount is for the total of the cart item and not for an individual item. For example, if the quantity is 5, this value should be the total tax amount for 5 of the cart item.  You might see unexpected failed transactions if the &#x60;tax_amount&#x60; can not be equally divided by the &#x60;quantity&#x60; value. This is due to the fact that some payment services require this amount to be specified per unit.  In this situation we recommend splitting this item into separate items, each with their own specific tax amount. | [optional] [default to 0]
**external_identifier** | **string** | An external identifier for the cart item. This can be set to any value and is not sent to the payment service. | [optional]
**sku** | **string** | The SKU for the item. | [optional]
**product_url** | **string** | The product URL for the item. | [optional]
**image_url** | **string** | The URL for the image of the item. | [optional]
**categories** | **string[]** | A list of strings containing product categories for the item. Max length per item: 50. | [optional]
**product_type** | **string** | The product type of the cart item. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
