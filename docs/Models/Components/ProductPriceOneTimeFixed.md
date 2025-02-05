# ProductPriceOneTimeFixed

A one-time price for a product.


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | Creation timestamp of the object.                             |
| `id`                                                          | *string*                                                      | :heavy_check_mark:                                            | The ID of the price.                                          |
| `amountType`                                                  | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           |
| `isArchived`                                                  | *bool*                                                        | :heavy_check_mark:                                            | Whether the price is archived and no longer available.        |
| `productId`                                                   | *string*                                                      | :heavy_check_mark:                                            | The ID of the product owning the price.                       |
| `priceCurrency`                                               | *string*                                                      | :heavy_check_mark:                                            | The currency.                                                 |
| `priceAmount`                                                 | *int*                                                         | :heavy_check_mark:                                            | The price in cents.                                           |
| `type`                                                        | *string*                                                      | :heavy_check_mark:                                            | The type of the price.                                        |
| `modifiedAt`                                                  | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | Last modification timestamp of the object.                    |