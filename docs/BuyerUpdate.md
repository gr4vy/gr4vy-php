# BuyerUpdate

Request body for updating an existing buyer


## Fields

| Field                                                              | Type                                                               | Required                                                           | Description                                                        | Example                                                            |
| ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ |
| `displayName`                                                      | *?string*                                                          | :heavy_minus_sign:                                                 | The display name for the buyer.                                    | John Doe                                                           |
| `externalIdentifier`                                               | *?string*                                                          | :heavy_minus_sign:                                                 | The merchant identifier for this buyer.                            | buyer-12345                                                        |
| `accountNumber`                                                    | *?string*                                                          | :heavy_minus_sign:                                                 | The buyer account number                                           |                                                                    |
| `billingDetails`                                                   | [?BillingDetailsInput](./BillingDetailsInput.md)                   | :heavy_minus_sign:                                                 | The billing name, address, email, and other fields for this buyer. |                                                                    |