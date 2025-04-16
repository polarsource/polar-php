# EventName


## Fields

| Field                                                            | Type                                                             | Required                                                         | Description                                                      |
| ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- |
| `name`                                                           | *string*                                                         | :heavy_check_mark:                                               | The name of the event.                                           |
| `source`                                                         | [Components\EventSource](../../Models/Components/EventSource.md) | :heavy_check_mark:                                               | N/A                                                              |
| `occurrences`                                                    | *int*                                                            | :heavy_check_mark:                                               | Number of times the event has occurred.                          |
| `firstSeen`                                                      | [\DateTime](https://www.php.net/manual/en/class.datetime.php)    | :heavy_check_mark:                                               | The first time the event occurred.                               |
| `lastSeen`                                                       | [\DateTime](https://www.php.net/manual/en/class.datetime.php)    | :heavy_check_mark:                                               | The last time the event occurred.                                |