# CustomerPortal.Members

## Overview

### Available Operations

* [listMembers](#listmembers) - List Members
* [addMember](#addmember) - Add Member
* [removeMember](#removemember) - Remove Member
* [updateMember](#updatemember) - Update Member

## listMembers

List all members of the customer's team.

Only available to owners and billing managers of team customers.

### Example Usage

<!-- UsageSnippet language="php" operationID="customer_portal:members:list_members" method="get" path="/v1/customer-portal/members" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$responses = $sdk->customerPortal->members->listMembers(
    page: 1,
    limit: 10

);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                       | Type                                            | Required                                        | Description                                     |
| ----------------------------------------------- | ----------------------------------------------- | ----------------------------------------------- | ----------------------------------------------- |
| `page`                                          | *?int*                                          | :heavy_minus_sign:                              | Page number, defaults to 1.                     |
| `limit`                                         | *?int*                                          | :heavy_minus_sign:                              | Size of a page, defaults to 10. Maximum is 100. |

### Response

**[?Operations\CustomerPortalMembersListMembersResponse](../../Models/Operations/CustomerPortalMembersListMembersResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## addMember

Add a new member to the customer's team.

Only available to owners and billing managers of team customers.

Rules:
- Cannot add a member with the owner role (there must be exactly one owner)
- If a member with this email already exists, the existing member is returned

### Example Usage

<!-- UsageSnippet language="php" operationID="customer_portal:members:add_member" method="post" path="/v1/customer-portal/members" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Components;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Components\CustomerPortalMemberCreate(
    email: 'Domenica.Schamberger@yahoo.com',
);

$response = $sdk->customerPortal->members->addMember(
    request: $request
);

if ($response->customerPortalMember !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Components\CustomerPortalMemberCreate](../../Models/Components/CustomerPortalMemberCreate.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CustomerPortalMembersAddMemberResponse](../../Models/Operations/CustomerPortalMembersAddMemberResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## removeMember

Remove a member from the team.

Only available to owners and billing managers of team customers.

Rules:
- Cannot remove yourself
- Cannot remove the only owner

### Example Usage

<!-- UsageSnippet language="php" operationID="customer_portal:members:remove_member" method="delete" path="/v1/customer-portal/members/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->customerPortal->members->removeMember(
    id: 'b61c5e87-cda5-4b14-93ee-71a695f42d9d'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\CustomerPortalMembersRemoveMemberResponse](../../Models/Operations/CustomerPortalMembersRemoveMemberResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## updateMember

Update a member's role.

Only available to owners and billing managers of team customers.

Rules:
- Cannot modify your own role (to prevent self-demotion)
- Customer must have exactly one owner at all times

### Example Usage

<!-- UsageSnippet language="php" operationID="customer_portal:members:update_member" method="patch" path="/v1/customer-portal/members/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Components;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$customerPortalMemberUpdate = new Components\CustomerPortalMemberUpdate();

$response = $sdk->customerPortal->members->updateMember(
    id: '8319ae11-ed5f-4642-81e4-4b40731df195',
    customerPortalMemberUpdate: $customerPortalMemberUpdate

);

if ($response->customerPortalMember !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `id`                                                                                           | *string*                                                                                       | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `customerPortalMemberUpdate`                                                                   | [Components\CustomerPortalMemberUpdate](../../Models/Components/CustomerPortalMemberUpdate.md) | :heavy_check_mark:                                                                             | N/A                                                                                            |

### Response

**[?Operations\CustomerPortalMembersUpdateMemberResponse](../../Models/Operations/CustomerPortalMembersUpdateMemberResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |