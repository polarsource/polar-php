# CustomerOrderUpdate

Schema to update an order.


## Fields

| Field                                                                                                           | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `billingName`                                                                                                   | *string*                                                                                                        | :heavy_check_mark:                                                                                              | The name of the customer that should appear on the invoice. Can't be updated after the invoice is generated.    |
| `billingAddress`                                                                                                | [Components\Address](../../Models/Components/Address.md)                                                        | :heavy_check_mark:                                                                                              | The address of the customer that should appear on the invoice. Can't be updated after the invoice is generated. |