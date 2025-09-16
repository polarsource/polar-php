# WebhookCustomerCreatedPayload

Sent when a new customer is created.

A customer can be created:

* After a successful checkout.
* Programmatically via the API.

**Discord & Slack support:** Basic


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   | Example                                                       |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `type`                                                        | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           | customer.created                                              |
| `timestamp`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | N/A                                                           |                                                               |
| `data`                                                        | [Components\Customer](../../Models/Components/Customer.md)    | :heavy_check_mark:                                            | A customer in an organization.                                |                                                               |