# OrganizationFeatureSettings


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `issueFundingEnabled`                                         | *?bool*                                                       | :heavy_minus_sign:                                            | If this organization has issue funding enabled                |
| `seatBasedPricingEnabled`                                     | *?bool*                                                       | :heavy_minus_sign:                                            | If this organization has seat-based pricing enabled           |
| `walletsEnabled`                                              | *?bool*                                                       | :heavy_minus_sign:                                            | If this organization has Wallets enabled                      |
| `memberModelEnabled`                                          | *?bool*                                                       | :heavy_minus_sign:                                            | If this organization has the Member model enabled             |
| `checkoutLocalizationEnabled`                                 | *?bool*                                                       | :heavy_minus_sign:                                            | If this organization has checkout localization enabled        |
| `overviewMetrics`                                             | array<*string*>                                               | :heavy_minus_sign:                                            | Ordered list of metric slugs shown on the dashboard overview. |
| `resetProrationBehaviorEnabled`                               | *?bool*                                                       | :heavy_minus_sign:                                            | If this organization has access to reset proration behavior.  |