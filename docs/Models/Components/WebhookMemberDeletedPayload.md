# WebhookMemberDeletedPayload

Sent when a member is deleted.

This event is triggered when a member is removed from a customer.
Any active seats assigned to the member will be automatically revoked.

**Discord & Slack support:** Basic


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   | Example                                                       |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `type`                                                        | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           | member.deleted                                                |
| `timestamp`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | N/A                                                           |                                                               |
| `data`                                                        | [Components\Member](../../Models/Components/Member.md)        | :heavy_check_mark:                                            | A member of a customer.                                       |                                                               |