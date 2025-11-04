# Wallet

A wallet represents a customer's balance in your organization.

They can top-up their wallet, and use the balance to pay for usage.


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   | Example                                                       |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `id`                                                          | *string*                                                      | :heavy_check_mark:                                            | The ID of the object.                                         |                                                               |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | Creation timestamp of the object.                             |                                                               |
| `modifiedAt`                                                  | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | Last modification timestamp of the object.                    |                                                               |
| `customerId`                                                  | *string*                                                      | :heavy_check_mark:                                            | The ID of the customer that owns the wallet.                  | 992fae2a-2a17-4b7a-8d9e-e287cf90131b                          |
| `balance`                                                     | *int*                                                         | :heavy_check_mark:                                            | The current balance of the wallet, in cents.                  | 5000                                                          |
| `currency`                                                    | *string*                                                      | :heavy_check_mark:                                            | The currency of the wallet.                                   | usd                                                           |