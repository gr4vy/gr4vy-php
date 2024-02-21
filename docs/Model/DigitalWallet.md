# # DigitalWallet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | &#x60;digital-wallet&#x60;. | [optional]
**id** | **string** | The ID of the registered digital wallet. | [optional]
**merchant_account_id** | **string** | The unique ID for a merchant account. | [optional]
**provider** | **string** | The name of the digital wallet provider. | [optional]
**merchant_name** | **string** | The name of the merchant the digital wallet is registered to. | [optional]
**merchant_url** | **string** | The main URL of the merchant. | [optional]
**merchant_display_name** | **string** | The consumer facing name of the merchant. | [optional]
**merchant_country_code** | **string** | The country code where the merchant is registered. | [optional]
**domain_names** | **string[]** | The list of domain names that a digital wallet can be used on. To use a digital wallet on a website, the domain of the site is required to be in this list. | [optional]
**fields** | [**\Gr4vy\model\DigitalWalletClickToPayFields**](DigitalWalletClickToPayFields.md) |  | [optional]
**created_at** | **\DateTime** | The date and time when this digital wallet was registered. | [optional]
**updated_at** | **\DateTime** | The date and time when this digital wallet was last updated. | [optional]
**active_certificate_count** | **int** | The number of active custom certificates registered for this digital wallet (Apple Pay only). | [optional]
**pending_certificate_count** | **int** | The number of pending custom certificates registered for this digital wallet (Apple Pay only). | [optional]
**expired_certificate_count** | **int** | The number of expired custom certificates registered for this digital wallet (Apple Pay only). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
