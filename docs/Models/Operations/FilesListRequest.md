# FilesListRequest


## Fields

| Field                                           | Type                                            | Required                                        | Description                                     |
| ----------------------------------------------- | ----------------------------------------------- | ----------------------------------------------- | ----------------------------------------------- |
| `page`                                          | *?int*                                          | :heavy_minus_sign:                              | Page number, defaults to 1.                     |
| `limit`                                         | *?int*                                          | :heavy_minus_sign:                              | Size of a page, defaults to 10. Maximum is 100. |
| `organizationId`                                | *?string*                                       | :heavy_minus_sign:                              | N/A                                             |
| `ids`                                           | array<*string*>                                 | :heavy_minus_sign:                              | List of file IDs to get.                        |