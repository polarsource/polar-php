# ProductPriceSeatBasedCreate

Schema to create a seat-based price with volume-based tiers.


## Fields

| Field                                                                                | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `amountType`                                                                         | *string*                                                                             | :heavy_check_mark:                                                                   | N/A                                                                                  |
| `priceCurrency`                                                                      | *?string*                                                                            | :heavy_minus_sign:                                                                   | The currency. Currently, only `usd` is supported.                                    |
| `seatTiers`                                                                          | [Components\ProductPriceSeatTiers](../../Models/Components/ProductPriceSeatTiers.md) | :heavy_check_mark:                                                                   | List of pricing tiers for seat-based pricing.                                        |