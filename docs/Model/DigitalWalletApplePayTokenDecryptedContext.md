# # DigitalWalletApplePayTokenDecryptedContext

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**version** | **string** | Version information about the payment token. | [optional]
**type** | **string** | The type of payment instrument. | [optional]
**expiration_date** | **string** | Expiration of the decrypted data. | [optional]
**has_cryptogram** | **bool** | Online payment cryptogram, as defined by 3D Secure. | [optional]
**eci** | **string** | ECI indicator, as defined by 3D Secure. | [optional]
**application_data** | **string** | Hash of the application data property of the original request. | [optional]
**transaction_identifier** | **string** | The unique identifier from Apple Pay. | [optional]
**cardholder_name** | **string** | The cardholder name. | [optional]
**currency_code** | **string** | ISO 4217 numeric currency code for the transaction. | [optional]
**transaction_amount** | **int** | The amount for the transaction. | [optional]
**device_manufacturer_identifier** | **string** | Hex-encoded device manufacturer identifier which initiated the transaction. | [optional]
**payment_data_type** | **string** | Either \&quot;3DSecure\&quot; or \&quot;EMV\&quot;. | [optional]
**merchant_token_identifier** | **string** | For a merchant token request, the provisioned merchant token identifier from the payment network. | [optional]
**card_expiration_date** | **string** | Expiration date of card. | [optional]
**card_suffix** | **string** | Last four digits of card PAN. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
