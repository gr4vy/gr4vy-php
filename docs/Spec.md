# Spec

The report specification.


## Fields

| Field                                                                                                          | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `model`                                                                                                        | *string*                                                                                                       | :heavy_check_mark:                                                                                             | The report model. One of `transactions`, `transaction_retries`, `detailed_settlement`, `accounts_receivables`. |
| `params`                                                                                                       | array<string, *mixed*>                                                                                         | :heavy_check_mark:                                                                                             | The parameters for the report, specific to the model.                                                          |