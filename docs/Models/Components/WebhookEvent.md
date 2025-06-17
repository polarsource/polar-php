# WebhookEvent

A webhook event.

An event represent something that happened in the system
that should be sent to the webhook endpoint.

It can be delivered multiple times until it's marked as succeeded,
each one creating a new delivery.


## Fields

| Field                                                                                                            | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `createdAt`                                                                                                      | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                    | :heavy_check_mark:                                                                                               | Creation timestamp of the object.                                                                                |
| `modifiedAt`                                                                                                     | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                    | :heavy_check_mark:                                                                                               | Last modification timestamp of the object.                                                                       |
| `id`                                                                                                             | *string*                                                                                                         | :heavy_check_mark:                                                                                               | The ID of the object.                                                                                            |
| `lastHttpCode`                                                                                                   | *?int*                                                                                                           | :heavy_minus_sign:                                                                                               | Last HTTP code returned by the URL. `null` if no delviery has been attempted or if the endpoint was unreachable. |
| `succeeded`                                                                                                      | *?bool*                                                                                                          | :heavy_minus_sign:                                                                                               | Whether this event was successfully delivered. `null` if no delivery has been attempted.                         |
| `payload`                                                                                                        | *string*                                                                                                         | :heavy_check_mark:                                                                                               | The payload of the webhook event.                                                                                |