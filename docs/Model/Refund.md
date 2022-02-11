# # Refund

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of this resource. Is always &#x60;refund&#x60;. | [optional]
**id** | **string** | The unique ID of the refund. | [optional]
**transaction_id** | **string** | The ID of the transaction associated with this refund. | [optional]
**status** | **string** | The status of the refund. It may change over time as asynchronous processing events occur.  - &#x60;processing&#x60; - The refund is being processed. - &#x60;succeeded&#x60; - The refund was successful. - &#x60;declined&#x60; - The refund was declined by the underlying PSP. - &#x60;failed&#x60; - The refund could not proceed due to a technical issue. - &#x60;voided&#x60; - The refund was voided and will not proceed. | [optional]
**currency** | **string** | The currency code for this refund. Will always match that of the associated transaction. | [optional]
**amount** | **int** | The amount requested for this refund. | [optional]
**created_at** | [**\DateTime**](\DateTime.md) | The date and time when this refund was created. | [optional]
**updated_at** | [**\DateTime**](\DateTime.md) | The date and time when this refund was last updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
