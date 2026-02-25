# CustomerPortalMemberCreate

Schema for adding a new member to the customer's team.


## Fields

| Field                                                           | Type                                                            | Required                                                        | Description                                                     |
| --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- |
| `email`                                                         | *string*                                                        | :heavy_check_mark:                                              | The email address of the new member.                            |
| `name`                                                          | *?string*                                                       | :heavy_minus_sign:                                              | The name of the new member (optional).                          |
| `role`                                                          | [?Components\MemberRole](../../Models/Components/MemberRole.md) | :heavy_minus_sign:                                              | N/A                                                             |