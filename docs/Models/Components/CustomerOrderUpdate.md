# CustomerOrderUpdate

Schema to update an order.


## Fields

| Field                                                                                                      | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `billingName`                                                                                              | *?string*                                                                                                  | :heavy_minus_sign:                                                                                         | The name of the customer that should appear on the invoice.                                                |
| `billingAddress`                                                                                           | [?Components\AddressInput](../../Models/Components/AddressInput.md)                                        | :heavy_minus_sign:                                                                                         | The address of the customer that should appear on the invoice. Country and state fields cannot be updated. |