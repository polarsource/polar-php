# OrganizationCapabilities


## Fields

| Field                                                       | Type                                                        | Required                                                    | Description                                                 |
| ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- |
| `checkoutPayments`                                          | *bool*                                                      | :heavy_check_mark:                                          | Whether the organization can accept new checkout payments.  |
| `subscriptionRenewals`                                      | *bool*                                                      | :heavy_check_mark:                                          | Whether the organization can process subscription renewals. |
| `payouts`                                                   | *bool*                                                      | :heavy_check_mark:                                          | Whether the organization can withdraw its balance.          |
| `refunds`                                                   | *bool*                                                      | :heavy_check_mark:                                          | Whether the organization can issue refunds.                 |
| `apiAccess`                                                 | *bool*                                                      | :heavy_check_mark:                                          | Whether the organization can access the API.                |
| `dashboardAccess`                                           | *bool*                                                      | :heavy_check_mark:                                          | Whether the organization can access the dashboard.          |