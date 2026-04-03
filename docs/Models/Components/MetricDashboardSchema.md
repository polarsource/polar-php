# MetricDashboardSchema

A user-defined metrics dashboard.


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | Creation timestamp of the object.                             |
| `modifiedAt`                                                  | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | Last modification timestamp of the object.                    |
| `id`                                                          | *string*                                                      | :heavy_check_mark:                                            | The ID of the object.                                         |
| `name`                                                        | *string*                                                      | :heavy_check_mark:                                            | Display name for the dashboard.                               |
| `metrics`                                                     | array<*string*>                                               | :heavy_check_mark:                                            | List of metric slugs displayed in this dashboard.             |
| `organizationId`                                              | *string*                                                      | :heavy_check_mark:                                            | The ID of the organization owning this dashboard.             |