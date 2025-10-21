# MetricsResponse

Metrics response schema.


## Fields

| Field                                                                     | Type                                                                      | Required                                                                  | Description                                                               |
| ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- |
| `periods`                                                                 | array<[Components\MetricPeriod](../../Models/Components/MetricPeriod.md)> | :heavy_check_mark:                                                        | List of data for each timestamp.                                          |
| `totals`                                                                  | [Components\MetricsTotals](../../Models/Components/MetricsTotals.md)      | :heavy_check_mark:                                                        | N/A                                                                       |
| `metrics`                                                                 | [Components\MetricsOutput](../../Models/Components/MetricsOutput.md)      | :heavy_check_mark:                                                        | N/A                                                                       |