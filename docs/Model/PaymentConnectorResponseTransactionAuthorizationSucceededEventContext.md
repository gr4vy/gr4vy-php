# # PaymentConnectorResponseTransactionAuthorizationSucceededEventContext

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_service_id** | **string** | The unique ID of the payment service used. | [optional]
**payment_service_display_name** | **string** | The display name of the payment service used. | [optional]
**payment_service_definition_id** | **string** | The payment service definition used. | [optional]
**payment_service_transaction_id** | **string** | The external ID of the transaction as set by the payment service. | [optional]
**status** | **string** | The new status code for the transaction. This is always set to &#x60;authorization_succeeded&#x60;. | [optional]
**instrument_type** | **string** | The type of instrument used for this transaction. | [optional]
**retry_rule** | **string** | This will always be &#x60;null&#x60; because the transaction succeeded. | [optional]
**raw_response_code** | **string** | This is the response code received from the payment service. This can be set to any value and is not standardized across different payment services. | [optional]
**raw_response_description** | **string** | This is the response description received from the payment service. This can be set to any value and is not standardized across different payment services. | [optional]
**avs_response_code** | **string** | The response code received from the payment service for the Address Verification Check (AVS). This code is mapped to a standardized Gr4vy AVS response code.  - &#x60;no_match&#x60; - neither address or postal code match - &#x60;match&#x60; - both address and postal code match - &#x60;partial_match_address&#x60; - address matches but postal code does not - &#x60;partial_match_postcode&#x60; - postal code matches but address does not - &#x60;unavailable &#x60; - AVS is unavailable for card/country  The value of this field can be &#x60;null&#x60; if the payment service did not provide a response. | [optional]
**cvv_response_code** | **string** | The response code received from the payment service for the Card Verification Value (CVV). This code is mapped to a standardized Gr4vy CVV response code.  - &#x60;no_match&#x60; - the CVV does not match the expected value - &#x60;match&#x60; - the CVV matches the expected value - &#x60;unavailable &#x60; - CVV check unavailable for card our country - &#x60;not_provided &#x60; - CVV not provided  The value of this field can be &#x60;null&#x60; if the payment service did not provide a response. | [optional]
**payment_method_scheme** | **string** | The card scheme sent to the connector. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
