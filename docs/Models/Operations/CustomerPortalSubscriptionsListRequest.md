# CustomerPortalSubscriptionsListRequest


## Fields

| Field                                                                                                                                                                   | Type                                                                                                                                                                    | Required                                                                                                                                                                | Description                                                                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `page`                                                                                                                                                                  | *?int*                                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                                      | Page number, defaults to 1.                                                                                                                                             |
| `limit`                                                                                                                                                                 | *?int*                                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                                      | Size of a page, defaults to 10. Maximum is 100.                                                                                                                         |
| `organizationId`                                                                                                                                                        | [string\|array\|null](../../Models/Operations/CustomerPortalSubscriptionsListQueryParamOrganizationIDFilter.md)                                                         | :heavy_minus_sign:                                                                                                                                                      | Filter by organization ID.                                                                                                                                              |
| `productId`                                                                                                                                                             | [string\|array\|null](../../Models/Operations/CustomerPortalSubscriptionsListQueryParamProductIDFilter.md)                                                              | :heavy_minus_sign:                                                                                                                                                      | Filter by product ID.                                                                                                                                                   |
| `active`                                                                                                                                                                | *?bool*                                                                                                                                                                 | :heavy_minus_sign:                                                                                                                                                      | Filter by active or cancelled subscription.                                                                                                                             |
| `query`                                                                                                                                                                 | *?string*                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                      | Search by product or organization name.                                                                                                                                 |
| `sorting`                                                                                                                                                               | array<[Components\CustomerSubscriptionSortProperty](../../Models/Components/CustomerSubscriptionSortProperty.md)>                                                       | :heavy_minus_sign:                                                                                                                                                      | Sorting criterion. Several criteria can be used simultaneously and will be applied in order. Add a minus sign `-` before the criteria name to sort by descending order. |