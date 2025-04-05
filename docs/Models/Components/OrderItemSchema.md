# OrderItemSchema

An order line item.


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | Creation timestamp of the object.                             |
| `modifiedAt`                                                  | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | Last modification timestamp of the object.                    |
| `id`                                                          | *string*                                                      | :heavy_check_mark:                                            | The ID of the object.                                         |
| `label`                                                       | *string*                                                      | :heavy_check_mark:                                            | Description of the line item charge.                          |
| `amount`                                                      | *int*                                                         | :heavy_check_mark:                                            | Amount in cents, before discounts and taxes.                  |
| `taxAmount`                                                   | *int*                                                         | :heavy_check_mark:                                            | Sales tax amount in cents.                                    |
| `proration`                                                   | *bool*                                                        | :heavy_check_mark:                                            | Whether this charge is due to a proration.                    |
| `productPriceId`                                              | *string*                                                      | :heavy_check_mark:                                            | Associated price ID, if any.                                  |