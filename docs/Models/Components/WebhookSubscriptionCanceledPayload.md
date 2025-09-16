# WebhookSubscriptionCanceledPayload

Sent when a subscription is canceled.
Customers might still have access until the end of the current period.

**Discord & Slack support:** Full


## Fields

| Field                                                              | Type                                                               | Required                                                           | Description                                                        | Example                                                            |
| ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ |
| `type`                                                             | *string*                                                           | :heavy_check_mark:                                                 | N/A                                                                | subscription.canceled                                              |
| `timestamp`                                                        | [\DateTime](https://www.php.net/manual/en/class.datetime.php)      | :heavy_check_mark:                                                 | N/A                                                                |                                                                    |
| `data`                                                             | [Components\Subscription](../../Models/Components/Subscription.md) | :heavy_check_mark:                                                 | N/A                                                                |                                                                    |