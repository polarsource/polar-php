# WebhookCustomerSeatAssignedPayload

Sent when a new customer seat is assigned.

This event is triggered when a seat is assigned to a customer by the organization.
The customer will receive an invitation email to claim the seat.


## Fields

| Field                                                              | Type                                                               | Required                                                           | Description                                                        | Example                                                            |
| ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ |
| `type`                                                             | *string*                                                           | :heavy_check_mark:                                                 | N/A                                                                | customer_seat.assigned                                             |
| `timestamp`                                                        | [\DateTime](https://www.php.net/manual/en/class.datetime.php)      | :heavy_check_mark:                                                 | N/A                                                                |                                                                    |
| `data`                                                             | [Components\CustomerSeat](../../Models/Components/CustomerSeat.md) | :heavy_check_mark:                                                 | N/A                                                                |                                                                    |