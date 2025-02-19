# ProductPriceFixedCreate

Schema to create a fixed price.


## Fields

| Field                                             | Type                                              | Required                                          | Description                                       |
| ------------------------------------------------- | ------------------------------------------------- | ------------------------------------------------- | ------------------------------------------------- |
| `amountType`                                      | *string*                                          | :heavy_check_mark:                                | N/A                                               |
| `priceAmount`                                     | *int*                                             | :heavy_check_mark:                                | The price in cents.                               |
| `priceCurrency`                                   | *?string*                                         | :heavy_minus_sign:                                | The currency. Currently, only `usd` is supported. |