# DigitalWalletCreate

Request body for registering a new digital wallet


## Fields

| Field                                               | Type                                                | Required                                            | Description                                         | Example                                             |
| --------------------------------------------------- | --------------------------------------------------- | --------------------------------------------------- | --------------------------------------------------- | --------------------------------------------------- |
| `provider`                                          | [DigitalWalletProvider](./DigitalWalletProvider.md) | :heavy_check_mark:                                  | N/A                                                 |                                                     |
| `merchantName`                                      | *string*                                            | :heavy_check_mark:                                  | N/A                                                 |                                                     |
| `merchantDisplayName`                               | *?string*                                           | :heavy_minus_sign:                                  | N/A                                                 |                                                     |
| `merchantUrl`                                       | *?string*                                           | :heavy_minus_sign:                                  | N/A                                                 |                                                     |
| `merchantCountryCode`                               | *?string*                                           | :heavy_minus_sign:                                  | N/A                                                 | DE                                                  |
| `domainNames`                                       | array<*string*>                                     | :heavy_minus_sign:                                  | N/A                                                 |                                                     |
| `acceptTermsAndConditions`                          | *bool*                                              | :heavy_check_mark:                                  | N/A                                                 |                                                     |