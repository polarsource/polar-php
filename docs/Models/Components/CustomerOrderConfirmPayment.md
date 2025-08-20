# CustomerOrderConfirmPayment

Schema to confirm a retry payment using a Stripe confirmation token.


## Fields

| Field                                                                       | Type                                                                        | Required                                                                    | Description                                                                 |
| --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- |
| `confirmationTokenId`                                                       | *string*                                                                    | :heavy_check_mark:                                                          | ID of the Stripe confirmation token.                                        |
| `paymentProcessor`                                                          | [?Components\PaymentProcessor](../../Models/Components/PaymentProcessor.md) | :heavy_minus_sign:                                                          | N/A                                                                         |