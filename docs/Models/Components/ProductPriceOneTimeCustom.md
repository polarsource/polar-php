# ProductPriceOneTimeCustom

A pay-what-you-want price for a one-time product.


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | Creation timestamp of the object.                             |
| `id`                                                          | *string*                                                      | :heavy_check_mark:                                            | The ID of the price.                                          |
| `amountType`                                                  | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           |
| `isArchived`                                                  | *bool*                                                        | :heavy_check_mark:                                            | Whether the price is archived and no longer available.        |
| `productId`                                                   | *string*                                                      | :heavy_check_mark:                                            | The ID of the product owning the price.                       |
| `priceCurrency`                                               | *string*                                                      | :heavy_check_mark:                                            | The currency.                                                 |
| `type`                                                        | *string*                                                      | :heavy_check_mark:                                            | The type of the price.                                        |
| `modifiedAt`                                                  | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | Last modification timestamp of the object.                    |
| `minimumAmount`                                               | *int*                                                         | :heavy_check_mark:                                            | The minimum amount the customer can pay.                      |
| `maximumAmount`                                               | *int*                                                         | :heavy_check_mark:                                            | The maximum amount the customer can pay.                      |
| `presetAmount`                                                | *int*                                                         | :heavy_check_mark:                                            | The initial amount shown to the customer.                     |