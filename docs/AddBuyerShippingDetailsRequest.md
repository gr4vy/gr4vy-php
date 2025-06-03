# AddBuyerShippingDetailsRequest


## Fields

| Field                                                   | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `buyerId`                                               | *string*                                                | :heavy_check_mark:                                      | The ID of the buyer to add shipping details to.         | fe26475d-ec3e-4884-9553-f7356683f7f9                    |
| `applicationName`                                       | *?string*                                               | :heavy_minus_sign:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |
| `shippingDetailsCreate`                                 | [ShippingDetailsCreate](./ShippingDetailsCreate.md)     | :heavy_check_mark:                                      | N/A                                                     |                                                         |