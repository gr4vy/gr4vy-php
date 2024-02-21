# # ConnectionOptionsForterAntiFraud

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delivery_type** | **string** | Value to populate the &#x60;deliveryType&#x60; field in &#x60;primaryDeliveryDetails&#x60;.  Represents the type of delivery. This can be set to &#x60;PHYSICAL&#x60; for any type of shipped goods, &#x60;DIGITAL&#x60; for non-shipped goods (services, gift cards etc.), or &#x60;HYBRID&#x60; for others. | [optional]
**delivery_method** | **string** | Value to populate the &#x60;deliveryMethod&#x60; field in &#x60;primaryDeliveryDetails&#x60;.  Represents the delivery method chosen by customer such as postal service, email, in game transfer, etc. | [optional]
**is_guest_buyer** | **bool** | Defines if this is a guest check-out. This will redact the &#x60;accountId&#x60; and &#x60;created&#x60; fields from the &#x60;accountOwner&#x60; details sent to Forter. | [optional] [default to false]
**cart_items** | [**\Gr4vy\model\ConnectionOptionsForterAntiFraudCartItemsInner[]**](ConnectionOptionsForterAntiFraudCartItemsInner.md) | A list of Forter cart item objects. These will be merged into the &#x60;cart_items&#x60; passed to the transaction. Every cart item here will be merged with a cart item on the transaction with the same index.  Together, these will augment the &#x60;cartItems&#x60; values sent to the Forter validation API. | [optional]
**total_discount** | [**\Gr4vy\model\ConnectionOptionsForterAntiFraudTotalDiscount**](ConnectionOptionsForterAntiFraudTotalDiscount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
