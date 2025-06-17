# WebhooksListWebhookEndpointsRequest


## Fields

| Field                                                                    | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `organizationId`                                                         | [string\|array\|null](../../Models/Operations/QueryParamOrganizationId.md) | :heavy_minus_sign:                                                       | Filter by organization ID.                                               |
| `page`                                                                   | *?int*                                                                   | :heavy_minus_sign:                                                       | Page number, defaults to 1.                                              |
| `limit`                                                                  | *?int*                                                                   | :heavy_minus_sign:                                                       | Size of a page, defaults to 10. Maximum is 100.                          |