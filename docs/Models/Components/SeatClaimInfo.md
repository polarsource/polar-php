# SeatClaimInfo

Read-only information about a seat claim invitation.
Safe for email scanners - no side effects when fetched.


## Fields

| Field                                       | Type                                        | Required                                    | Description                                 |
| ------------------------------------------- | ------------------------------------------- | ------------------------------------------- | ------------------------------------------- |
| `productName`                               | *string*                                    | :heavy_check_mark:                          | Name of the product                         |
| `productId`                                 | *string*                                    | :heavy_check_mark:                          | ID of the product                           |
| `organizationName`                          | *string*                                    | :heavy_check_mark:                          | Name of the organization                    |
| `organizationSlug`                          | *string*                                    | :heavy_check_mark:                          | Slug of the organization                    |
| `customerEmail`                             | *string*                                    | :heavy_check_mark:                          | Email of the customer assigned to this seat |
| `canClaim`                                  | *bool*                                      | :heavy_check_mark:                          | Whether the seat can be claimed             |