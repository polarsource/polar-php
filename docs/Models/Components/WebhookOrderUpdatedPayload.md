# WebhookOrderUpdatedPayload

Sent when an order is updated.

An order is updated when:

* Its status changes, e.g. from `pending` to `paid`.
* It's refunded, partially or fully.

**Discord & Slack support:** Full


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   | Example                                                       |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `type`                                                        | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           | order.updated                                                 |
| `timestamp`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | N/A                                                           |                                                               |
| `data`                                                        | [Components\Order](../../Models/Components/Order.md)          | :heavy_check_mark:                                            | N/A                                                           |                                                               |