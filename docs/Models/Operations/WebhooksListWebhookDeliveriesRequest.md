# WebhooksListWebhookDeliveriesRequest


## Fields

| Field                                                      | Type                                                       | Required                                                   | Description                                                |
| ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- |
| `endpointId`                                               | [string\|array\|null](../../Models/Operations/EndpointId.md) | :heavy_minus_sign:                                         | Filter by webhook endpoint ID.                             |
| `page`                                                     | *?int*                                                     | :heavy_minus_sign:                                         | Page number, defaults to 1.                                |
| `limit`                                                    | *?int*                                                     | :heavy_minus_sign:                                         | Size of a page, defaults to 10. Maximum is 100.            |