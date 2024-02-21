# # PaymentServiceToken

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of this resource. | [optional]
**id** | **string** | The unique ID of the token. | [optional]
**payment_method_id** | **string** | The unique ID of the payment method. | [optional]
**payment_service_id** | **string** | The unique ID of the payment service. | [optional]
**status** | **string** | The state of the token.  - &#x60;processing&#x60; - The payment method is still being stored. - &#x60;buyer_approval_required&#x60; - Storing the payment method requires   the buyer to provide approval. Follow the &#x60;approval_url&#x60; for next steps. - &#x60;succeeded&#x60; - The payment method is approved and stored with all   relevant payment services. - &#x60;failed&#x60; - Storing the payment method did not succeed. | [optional]
**approval_url** | **string** | The optional URL that the buyer needs to be redirected to to further authorize their payment. | [optional]
**token** | **string** | The token value. | [optional]
**created_at** | **\DateTime** | The date and time when this token was first created in our system. | [optional]
**updated_at** | **\DateTime** | The date and time when this token was last updated in our system. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
