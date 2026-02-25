# CustomerPortalMember

A member of the customer's team as seen in the customer portal.


## Fields

| Field                                                          | Type                                                           | Required                                                       | Description                                                    |
| -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- |
| `createdAt`                                                    | [\DateTime](https://www.php.net/manual/en/class.datetime.php)  | :heavy_check_mark:                                             | Creation timestamp of the object.                              |
| `modifiedAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php)  | :heavy_check_mark:                                             | Last modification timestamp of the object.                     |
| `id`                                                           | *string*                                                       | :heavy_check_mark:                                             | The ID of the object.                                          |
| `email`                                                        | *string*                                                       | :heavy_check_mark:                                             | The email address of the member.                               |
| `name`                                                         | *string*                                                       | :heavy_check_mark:                                             | The name of the member.                                        |
| `role`                                                         | [Components\MemberRole](../../Models/Components/MemberRole.md) | :heavy_check_mark:                                             | N/A                                                            |