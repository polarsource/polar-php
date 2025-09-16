# WebhookCustomerDeletedPayload

Sent when a customer is deleted.

**Discord & Slack support:** Basic


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   | Example                                                       |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `type`                                                        | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           | customer.deleted                                              |
| `timestamp`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | N/A                                                           |                                                               |
| `data`                                                        | [Components\Customer](../../Models/Components/Customer.md)    | :heavy_check_mark:                                            | A customer in an organization.                                |                                                               |