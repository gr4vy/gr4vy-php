# UnregisterDigitalWalletDomainRequest


## Fields

| Field                                                   | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `digitalWalletId`                                       | *string*                                                | :heavy_check_mark:                                      | N/A                                                     |                                                         |
| `applicationName`                                       | *?string*                                               | :heavy_minus_sign:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |
| `digitalWalletDomain`                                   | [DigitalWalletDomain](./DigitalWalletDomain.md)         | :heavy_check_mark:                                      | N/A                                                     |                                                         |