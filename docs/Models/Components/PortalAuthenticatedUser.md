# PortalAuthenticatedUser

Information about the authenticated portal user.


## Fields

| Field                                                               | Type                                                                | Required                                                            | Description                                                         |
| ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- |
| `type`                                                              | *string*                                                            | :heavy_check_mark:                                                  | Type of authenticated user: 'customer' or 'member'                  |
| `name`                                                              | *string*                                                            | :heavy_check_mark:                                                  | User's name, if available.                                          |
| `email`                                                             | *string*                                                            | :heavy_check_mark:                                                  | User's email address.                                               |
| `customerId`                                                        | *string*                                                            | :heavy_check_mark:                                                  | Associated customer ID.                                             |
| `memberId`                                                          | *?string*                                                           | :heavy_minus_sign:                                                  | Member ID. Only set for members.                                    |
| `role`                                                              | *?string*                                                           | :heavy_minus_sign:                                                  | Member role (owner, billing_manager, member). Only set for members. |