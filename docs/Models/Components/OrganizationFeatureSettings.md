# OrganizationFeatureSettings


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `issueFundingEnabled`                                         | *?bool*                                                       | :heavy_minus_sign:                                            | If this organization has issue funding enabled                |
| `seatBasedPricingEnabled`                                     | *?bool*                                                       | :heavy_minus_sign:                                            | If this organization has seat-based pricing enabled           |
| `revopsEnabled`                                               | *?bool*                                                       | :heavy_minus_sign:                                            | If this organization has RevOps enabled                       |
| `walletsEnabled`                                              | *?bool*                                                       | :heavy_minus_sign:                                            | If this organization has Wallets enabled                      |
| `memberModelEnabled`                                          | *?bool*                                                       | :heavy_minus_sign:                                            | If this organization has the Member model enabled             |
| `tinybirdRead`                                                | *?bool*                                                       | :heavy_minus_sign:                                            | If this organization reads from Tinybird                      |
| `tinybirdCompare`                                             | *?bool*                                                       | :heavy_minus_sign:                                            | If this organization compares Tinybird results with database  |
| `checkoutLocalizationEnabled`                                 | *?bool*                                                       | :heavy_minus_sign:                                            | If this organization has checkout localization enabled        |
| `overviewMetrics`                                             | array<*string*>                                               | :heavy_minus_sign:                                            | Ordered list of metric slugs shown on the dashboard overview. |