# WebhookBenefitGrantCycledPayload

Sent when a benefit grant is cycled,
meaning the related subscription has been renewed for another period.

**Discord & Slack support:** Basic


## Fields

| Field                                                                            | Type                                                                             | Required                                                                         | Description                                                                      | Example                                                                          |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `type`                                                                           | *string*                                                                         | :heavy_check_mark:                                                               | N/A                                                                              | benefit_grant.cycled                                                             |
| `data`                                                                           | [Components\BenefitGrantWebhook](../../Models/Components/BenefitGrantWebhook.md) | :heavy_check_mark:                                                               | N/A                                                                              |                                                                                  |