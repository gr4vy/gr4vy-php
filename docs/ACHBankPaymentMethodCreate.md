# ACHBankPaymentMethodCreate

ACH Bank Payment Method

Bank Payment Method for ACH bank accounts.


## Fields

| Field                                                     | Type                                                      | Required                                                  | Description                                               | Example                                                   |
| --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- |
| `method`                                                  | *?string*                                                 | :heavy_minus_sign:                                        | Always `bank`.                                            | bank                                                      |
| `accountHolder`                                           | [BankAccountHolder](./BankAccountHolder.md)               | :heavy_check_mark:                                        | N/A                                                       |                                                           |
| `buyerId`                                                 | *?string*                                                 | :heavy_minus_sign:                                        | The ID of the buyer to attach the method to.              | fe26475d-ec3e-4884-9553-f7356683f7f9                      |
| `buyerExternalIdentifier`                                 | *?string*                                                 | :heavy_minus_sign:                                        | The merchant reference for this payment method.           | payment-method-12345                                      |
| `externalIdentifier`                                      | *?string*                                                 | :heavy_minus_sign:                                        | The merchant identifier for this payment method.          | payment-method-12345                                      |
| `scheme`                                                  | *?string*                                                 | :heavy_minus_sign:                                        | Always `ach`.                                             | ach                                                       |
| `accountNumber`                                           | *string*                                                  | :heavy_check_mark:                                        | The account number for this ACH bank account              | 123456789                                                 |
| `routingNumber`                                           | *string*                                                  | :heavy_check_mark:                                        | The routing number for this ACH bank account              | 000000111                                                 |
| `isTokenized`                                             | *?bool*                                                   | :heavy_minus_sign:                                        | Whether the account number is tokenized                   | false                                                     |
| `accountType`                                             | *string*                                                  | :heavy_check_mark:                                        | Specify whether this is a `checking` or `savings` account | checking                                                  |