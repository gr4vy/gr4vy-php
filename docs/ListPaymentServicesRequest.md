# ListPaymentServicesRequest


## Fields

| Field                                                   | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `method`                                                | *?string*                                               | :heavy_minus_sign:                                      | Return any payment service for this method.             | card                                                    |
| `cursor`                                                | *?string*                                               | :heavy_minus_sign:                                      | A pointer to the page of results to return.             | ZXhhbXBsZTE                                             |
| `limit`                                                 | *?int*                                                  | :heavy_minus_sign:                                      | The maximum number of items that are at returned.       | 20                                                      |
| `deleted`                                               | *?bool*                                                 | :heavy_minus_sign:                                      | Return any deleted payment service.                     | true                                                    |
| `applicationName`                                       | *?string*                                               | :heavy_minus_sign:                                      | N/A                                                     |                                                         |
| `merchantAccountId`                                     | *?string*                                               | :heavy_minus_sign:                                      | The ID of the merchant account to use for this request. | default                                                 |