# WebhookCustomerSeatRevokedPayload

Sent when a customer seat is revoked.

This event is triggered when access to a seat is revoked, either manually by the organization or automatically when a subscription is canceled.


## Fields

| Field                                                              | Type                                                               | Required                                                           | Description                                                        | Example                                                            |
| ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ |
| `type`                                                             | *string*                                                           | :heavy_check_mark:                                                 | N/A                                                                | customer_seat.revoked                                              |
| `timestamp`                                                        | [\DateTime](https://www.php.net/manual/en/class.datetime.php)      | :heavy_check_mark:                                                 | N/A                                                                |                                                                    |
| `data`                                                             | [Components\CustomerSeat](../../Models/Components/CustomerSeat.md) | :heavy_check_mark:                                                 | N/A                                                                |                                                                    |