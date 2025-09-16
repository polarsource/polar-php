# WebhookSubscriptionCreatedPayload

Sent when a new subscription is created.

When this event occurs, the subscription `status` might not be `active` yet, as we can still have to wait for the first payment to be processed.

**Discord & Slack support:** Full


## Fields

| Field                                                              | Type                                                               | Required                                                           | Description                                                        | Example                                                            |
| ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ |
| `type`                                                             | *string*                                                           | :heavy_check_mark:                                                 | N/A                                                                | subscription.created                                               |
| `timestamp`                                                        | [\DateTime](https://www.php.net/manual/en/class.datetime.php)      | :heavy_check_mark:                                                 | N/A                                                                |                                                                    |
| `data`                                                             | [Components\Subscription](../../Models/Components/Subscription.md) | :heavy_check_mark:                                                 | N/A                                                                |                                                                    |