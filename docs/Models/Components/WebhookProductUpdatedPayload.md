# WebhookProductUpdatedPayload

Sent when a product is updated.

**Discord & Slack support:** Basic


## Fields

| Field                                                    | Type                                                     | Required                                                 | Description                                              | Example                                                  |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| `type`                                                   | *string*                                                 | :heavy_check_mark:                                       | N/A                                                      | product.updated                                          |
| `data`                                                   | [Components\Product](../../Models/Components/Product.md) | :heavy_check_mark:                                       | A product.                                               |                                                          |