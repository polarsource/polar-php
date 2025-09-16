# WebhookCustomerUpdatedPayload

Sent when a customer is updated.

This event is fired when the customer details are updated.

If you want to be notified when a customer subscription or benefit state changes, you should listen to the `customer_state_changed` event.

**Discord & Slack support:** Basic


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   | Example                                                       |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `type`                                                        | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           | customer.updated                                              |
| `timestamp`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | N/A                                                           |                                                               |
| `data`                                                        | [Components\Customer](../../Models/Components/Customer.md)    | :heavy_check_mark:                                            | A customer in an organization.                                |                                                               |