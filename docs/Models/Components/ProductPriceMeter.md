# ProductPriceMeter

A meter associated to a metered price.


## Fields

| Field                                                        | Type                                                         | Required                                                     | Description                                                  |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ |
| `id`                                                         | *string*                                                     | :heavy_check_mark:                                           | The ID of the object.                                        |
| `name`                                                       | *string*                                                     | :heavy_check_mark:                                           | The name of the meter.                                       |
| `unit`                                                       | [Components\MeterUnit](../../Models/Components/MeterUnit.md) | :heavy_check_mark:                                           | N/A                                                          |
| `customLabel`                                                | *string*                                                     | :heavy_check_mark:                                           | The label for the custom unit.                               |
| `customMultiplier`                                           | *int*                                                        | :heavy_check_mark:                                           | The multiplier to convert from base unit to display scale.   |