# EventType


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | Creation timestamp of the object.                             |
| `modifiedAt`                                                  | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | Last modification timestamp of the object.                    |
| `id`                                                          | *string*                                                      | :heavy_check_mark:                                            | The ID of the object.                                         |
| `name`                                                        | *string*                                                      | :heavy_check_mark:                                            | The name of the event type.                                   |
| `label`                                                       | *string*                                                      | :heavy_check_mark:                                            | The label for the event type.                                 |
| `labelPropertySelector`                                       | *?string*                                                     | :heavy_minus_sign:                                            | Property path to extract dynamic label from event metadata.   |
| `organizationId`                                              | *string*                                                      | :heavy_check_mark:                                            | The ID of the organization owning the event type.             |