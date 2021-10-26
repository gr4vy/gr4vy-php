# # DigitalWalletRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**provider** | **string** | The name of the digital wallet provider. |
**merchant_name** | **string** | The name of the merchant. This is used to register the merchant with a digital wallet provider and this name is not displayed to the buyer. |
**merchant_url** | **string** | The main URL of the merchant. This is used to register the merchant with a digital wallet provider and this URL is not displayed to the buyer. | [optional]
**domain_names** | **string[]** | The list of fully qualified domain names that a digital wallet provider should process payments for. |
**accept_terms_and_conditions** | **bool** | The explicit acceptance of the digital wallet provider&#39;s terms and conditions by the merchant. Needs to be &#x60;true&#x60; to register a new digital wallet. |
**environments** | **string[]** | Determines the Gr4vy environments in which this digital wallet should be available. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
