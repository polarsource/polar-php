# ProductPriceCustomCreate

Schema to create a pay-what-you-want price.


## Fields

| Field                                             | Type                                              | Required                                          | Description                                       |
| ------------------------------------------------- | ------------------------------------------------- | ------------------------------------------------- | ------------------------------------------------- |
| `amountType`                                      | *string*                                          | :heavy_check_mark:                                | N/A                                               |
| `priceCurrency`                                   | *?string*                                         | :heavy_minus_sign:                                | The currency. Currently, only `usd` is supported. |
| `minimumAmount`                                   | *?int*                                            | :heavy_minus_sign:                                | The minimum amount the customer can pay.          |
| `maximumAmount`                                   | *?int*                                            | :heavy_minus_sign:                                | The maximum amount the customer can pay.          |
| `presetAmount`                                    | *?int*                                            | :heavy_minus_sign:                                | The initial amount shown to the customer.         |