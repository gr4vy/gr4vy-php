# CheckoutSessionPaymentMethodDetails


## Fields

| Field                           | Type                            | Required                        | Description                     | Example                         |
| ------------------------------- | ------------------------------- | ------------------------------- | ------------------------------- | ------------------------------- |
| `bin`                           | *?string*                       | :heavy_minus_sign:              | The first 6 digit of the card.  | 411111                          |
| `cardCountry`                   | *?string*                       | :heavy_minus_sign:              | The country of the card issuer. | US                              |
| `cardType`                      | [?CardType](./CardType.md)      | :heavy_minus_sign:              | The payment scheme of the card. |                                 |
| `cardIssuerName`                | *?string*                       | :heavy_minus_sign:              | The card issuer.                | Bank of America NA              |