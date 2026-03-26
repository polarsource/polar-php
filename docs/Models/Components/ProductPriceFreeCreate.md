# ProductPriceFreeCreate

Schema to create a free price.


## Fields

| Field                                                                                                  | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `amountType`                                                                                           | *string*                                                                                               | :heavy_check_mark:                                                                                     | N/A                                                                                                    |
| `priceCurrency`                                                                                        | [?Components\PresentmentCurrency](../../Models/Components/PresentmentCurrency.md)                      | :heavy_minus_sign:                                                                                     | N/A                                                                                                    |
| `taxBehavior`                                                                                          | [?Components\TaxBehaviorOption](../../Models/Components/TaxBehaviorOption.md)                          | :heavy_minus_sign:                                                                                     | The tax behavior of the price. If not set, it will default to the organization's default tax behavior. |