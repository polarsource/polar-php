# LicenseKeysListRequest


## Fields

| Field                                                                                         | Type                                                                                          | Required                                                                                      | Description                                                                                   |
| --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- |
| `page`                                                                                        | *?int*                                                                                        | :heavy_minus_sign:                                                                            | Page number, defaults to 1.                                                                   |
| `limit`                                                                                       | *?int*                                                                                        | :heavy_minus_sign:                                                                            | Size of a page, defaults to 10. Maximum is 100.                                               |
| `organizationId`                                                                              | [string\|array\|null](../../Models/Operations/LicenseKeysListQueryParamOrganizationIDFilter.md) | :heavy_minus_sign:                                                                            | Filter by organization ID.                                                                    |
| `benefitId`                                                                                   | [string\|array\|null](../../Models/Operations/QueryParamBenefitIDFilter.md)                   | :heavy_minus_sign:                                                                            | Filter by benefit ID.                                                                         |