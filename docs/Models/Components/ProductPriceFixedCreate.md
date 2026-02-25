# ProductPriceFixedCreate

Schema to create a fixed price.


## Fields

| Field                                                                             | Type                                                                              | Required                                                                          | Description                                                                       |
| --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| `amountType`                                                                      | *string*                                                                          | :heavy_check_mark:                                                                | N/A                                                                               |
| `priceCurrency`                                                                   | [?Components\PresentmentCurrency](../../Models/Components/PresentmentCurrency.md) | :heavy_minus_sign:                                                                | N/A                                                                               |
| `priceAmount`                                                                     | *int*                                                                             | :heavy_check_mark:                                                                | The price in cents.                                                               |