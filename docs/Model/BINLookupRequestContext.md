# # BINLookupRequestContext

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**response** | **string** | The response body received from the &#x60;url&#x60;. | [optional]
**response_status_code** | **int** | The response status code received from the &#x60;url&#x60;. | [optional]
**success** | **bool** | Whether the BIN lookup was successful or not. | [optional]
**bin** | **string** | The value used to lookup BIN details. | [optional]
**type** | **string** | The type of card, i.e. credit or debit, from the lookup response. | [optional]
**scheme** | **string** | The card scheme result from the lookup response. | [optional]
**additional_schemes** | **string[]** | The card additional schemes from the lookup response. | [optional]
**country_code** | **string** | The card country code result from the lookup response. | [optional]
**account_updater** | **bool** | Whether Account Updater is enabled for this card. | [optional]
**issuer_tokenization** | **bool** | Whether the issuing bank supports network tokenization for this card. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
