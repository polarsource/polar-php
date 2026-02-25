# MemberSession

A member session that can be used to authenticate as a member in the customer portal.


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | Creation timestamp of the object.                             |
| `modifiedAt`                                                  | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | Last modification timestamp of the object.                    |
| `id`                                                          | *string*                                                      | :heavy_check_mark:                                            | The ID of the object.                                         |
| `token`                                                       | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           |
| `expiresAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | N/A                                                           |
| `returnUrl`                                                   | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           |
| `memberPortalUrl`                                             | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           |
| `memberId`                                                    | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           |
| `member`                                                      | [Components\Member](../../Models/Components/Member.md)        | :heavy_check_mark:                                            | A member of a customer.                                       |
| `customerId`                                                  | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           |
| `customer`                                                    | [Components\Customer](../../Models/Components/Customer.md)    | :heavy_check_mark:                                            | A customer in an organization.                                |