# # DigitalWallet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | &#x60;digital-wallet&#x60;. | [optional]
**provider** | **string** | The name of the digital wallet provider. | [optional]
**id** | **string** | The ID of the registered digital wallet. | [optional]
**merchant_name** | **string** | The name of the merchant the digital wallet is registered to. | [optional]
**merchant_url** | **string** | The main URL of the merchant. | [optional] [default to 'null']
**domain_names** | **string[]** | The list of domain names that a digital wallet can be used on. To use a digital wallet on a website, the domain of the site is required to be in this list. | [optional]
**created_at** | **\DateTime** | The date and time when this digital wallet was registered. | [optional]
**updated_at** | **\DateTime** | The date and time when this digital wallet was last updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
