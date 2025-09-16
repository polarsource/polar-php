# WebhookCustomerStateChangedPayload

Sent when a customer state has changed.

It's triggered when:

* Customer is created, updated or deleted.
* A subscription is created or updated.
* A benefit is granted or revoked.

**Discord & Slack support:** Basic


## Fields

| Field                                                                                                          | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    | Example                                                                                                        |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `type`                                                                                                         | *string*                                                                                                       | :heavy_check_mark:                                                                                             | N/A                                                                                                            | customer.state_changed                                                                                         |
| `timestamp`                                                                                                    | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                  | :heavy_check_mark:                                                                                             | N/A                                                                                                            |                                                                                                                |
| `data`                                                                                                         | [Components\CustomerState](../../Models/Components/CustomerState.md)                                           | :heavy_check_mark:                                                                                             | A customer along with additional state information:<br/><br/>* Active subscriptions<br/>* Granted benefits<br/>* Active meters |                                                                                                                |