# WebhookSubscriptionRevokedPayload

Sent when a subscription is revoked, the user loses access immediately.
Happens when the subscription is canceled, or payment is past due.

**Discord & Slack support:** Full


## Fields

| Field                                                              | Type                                                               | Required                                                           | Description                                                        | Example                                                            |
| ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ |
| `type`                                                             | *string*                                                           | :heavy_check_mark:                                                 | N/A                                                                | subscription.revoked                                               |
| `data`                                                             | [Components\Subscription](../../Models/Components/Subscription.md) | :heavy_check_mark:                                                 | N/A                                                                |                                                                    |