# ProductPriceSeatTier

A pricing tier for seat-based pricing.


## Fields

| Field                                                    | Type                                                     | Required                                                 | Description                                              |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| `minSeats`                                               | *int*                                                    | :heavy_check_mark:                                       | Minimum number of seats (inclusive)                      |
| `maxSeats`                                               | *?int*                                                   | :heavy_minus_sign:                                       | Maximum number of seats (inclusive). None for unlimited. |
| `pricePerSeat`                                           | *int*                                                    | :heavy_check_mark:                                       | Price per seat in cents for this tier                    |