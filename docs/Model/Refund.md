# # Refund

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of this resource. Is always &#x60;refund&#x60;. | [optional]
**id** | **string** | The unique ID of the refund. | [optional]
**transaction_id** | **string** | The ID of the transaction associated with this refund. | [optional]
**payment_service_refund_id** | **string** | The payment service&#39;s unique ID for the refund. | [optional]
**status** | **string** | The status of the refund. It may change over time as asynchronous processing events occur.  - &#x60;processing&#x60; - The refund is being processed. - &#x60;succeeded&#x60; - The refund was successful. - &#x60;declined&#x60; - The refund was declined by the underlying PSP. - &#x60;failed&#x60; - The refund could not proceed due to a technical issue. - &#x60;voided&#x60; - The refund was voided and will not proceed. | [optional]
**currency** | **string** | The currency code for this refund. Will always match that of the associated transaction. | [optional]
**amount** | **int** | The amount requested for this refund. | [optional]
**created_at** | **\DateTime** | The date and time when this refund was created. | [optional]
**updated_at** | **\DateTime** | The date and time when this refund was last updated. | [optional]
**target_type** | **string** | The type of the instrument that was refunded. | [optional]
**target_id** | **string** | The optional ID of the instrument that was refunded. This may be &#x60;null&#x60; if the instrument was not stored. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
