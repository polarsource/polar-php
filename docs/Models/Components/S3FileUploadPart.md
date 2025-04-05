# S3FileUploadPart


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `number`                                                      | *int*                                                         | :heavy_check_mark:                                            | N/A                                                           |
| `chunkStart`                                                  | *int*                                                         | :heavy_check_mark:                                            | N/A                                                           |
| `chunkEnd`                                                    | *int*                                                         | :heavy_check_mark:                                            | N/A                                                           |
| `checksumSha256Base64`                                        | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `url`                                                         | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           |
| `expiresAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | N/A                                                           |
| `headers`                                                     | array<string, *string*>                                       | :heavy_minus_sign:                                            | N/A                                                           |