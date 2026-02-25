# WebhookCheckoutExpiredPayload

Sent when a checkout expires.

This event fires when a checkout reaches its expiration time without being completed.
Developers can use this to send reminder emails or track checkout abandonment.

**Discord & Slack support:** Basic


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   | Example                                                       |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `type`                                                        | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           | checkout.expired                                              |
| `timestamp`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | N/A                                                           |                                                               |
| `data`                                                        | [Components\Checkout](../../Models/Components/Checkout.md)    | :heavy_check_mark:                                            | Checkout session data retrieved using an access token.        |                                                               |