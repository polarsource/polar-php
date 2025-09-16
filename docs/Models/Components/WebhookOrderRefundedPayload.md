# WebhookOrderRefundedPayload

Sent when an order is fully or partially refunded.

**Discord & Slack support:** Full


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   | Example                                                       |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `type`                                                        | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           | order.refunded                                                |
| `timestamp`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | N/A                                                           |                                                               |
| `data`                                                        | [Components\Order](../../Models/Components/Order.md)          | :heavy_check_mark:                                            | N/A                                                           |                                                               |