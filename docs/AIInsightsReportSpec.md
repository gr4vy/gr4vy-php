# AIInsightsReportSpec


## Fields

| Field                                                  | Type                                                   | Required                                               | Description                                            | Example                                                |
| ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ |
| `model`                                                | *?string*                                              | :heavy_minus_sign:                                     | The report model type.                                 | ai_insights                                            |
| `params`                                               | array<string, *mixed*>                                 | :heavy_check_mark:                                     | The parameters for the AI insights report model.       | {<br/>"filters": {<br/>"prompt_key": "payment_performance"<br/>}<br/>} |