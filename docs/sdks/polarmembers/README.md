# Customers.Members

## Overview

### Available Operations

* [create](#create) - Create Member
* [createExternal](#createexternal) - Create Member by Customer External ID
* [get](#get) - Get Member
* [delete](#delete) - Delete Member
* [update](#update) - Update Member
* [getExternal](#getexternal) - Get Member by External ID
* [deleteExternal](#deleteexternal) - Delete Member by External ID
* [updateExternal](#updateexternal) - Update Member by External ID

## create

Create a new member for a customer.

Only B2B customers with the member management feature enabled can add members.
The authenticated user or organization must have access to the customer's organization.

**Scopes**: `members:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customers:members:create" method="post" path="/v1/customers/{id}/members" -->
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

$memberCreateFromCustomer = new Components\MemberCreateFromCustomer(
    email: 'member@example.com',
    name: 'Jane Doe',
    externalId: 'usr_1337',
);

$response = $sdk->customers->members->create(
    id: '<value>',
    memberCreateFromCustomer: $memberCreateFromCustomer

);

if ($response->member !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `id`                                                                                       | *string*                                                                                   | :heavy_check_mark:                                                                         | The customer ID.                                                                           |
| `memberCreateFromCustomer`                                                                 | [Components\MemberCreateFromCustomer](../../Models/Components/MemberCreateFromCustomer.md) | :heavy_check_mark:                                                                         | N/A                                                                                        |

### Response

**[?Operations\CustomersMembersCreateResponse](../../Models/Operations/CustomersMembersCreateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\NotPermitted        | 403                        | application/json           |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## createExternal

Create a new member for a customer identified by its external ID.

**Scopes**: `members:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customers:members:create_external" method="post" path="/v1/customers/external/{external_id}/members" -->
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

$memberCreateFromCustomer = new Components\MemberCreateFromCustomer(
    email: 'member@example.com',
    name: 'Jane Doe',
    externalId: 'usr_1337',
);

$response = $sdk->customers->members->createExternal(
    externalId: '<id>',
    memberCreateFromCustomer: $memberCreateFromCustomer

);

if ($response->member !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `externalId`                                                                               | *string*                                                                                   | :heavy_check_mark:                                                                         | The customer external ID.                                                                  |
| `memberCreateFromCustomer`                                                                 | [Components\MemberCreateFromCustomer](../../Models/Components/MemberCreateFromCustomer.md) | :heavy_check_mark:                                                                         | N/A                                                                                        |

### Response

**[?Operations\CustomersMembersCreateExternalResponse](../../Models/Operations/CustomersMembersCreateExternalResponse.md)**

### Errors

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\NotPermitted                | 403                                | application/json                   |
| Errors\ResourceNotFound            | 404                                | application/json                   |
| Errors\AmbiguousExternalCustomerID | 409                                | application/json                   |
| Errors\HTTPValidationError         | 422                                | application/json                   |
| Errors\APIException                | 4XX, 5XX                           | \*/\*                              |

## get

Get a member of a customer by its ID.

**Scopes**: `members:read` `members:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customers:members:get" method="get" path="/v1/customers/{id}/members/{member_id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->customers->members->get(
    id: '<value>',
    memberId: 'a794a9c8-dc43-40b4-b2f5-ed16145e28ac'

);

if ($response->member !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | The customer ID.   |
| `memberId`         | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\CustomersMembersGetResponse](../../Models/Operations/CustomersMembersGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## delete

Delete a member of a customer.

**Scopes**: `members:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customers:members:delete" method="delete" path="/v1/customers/{id}/members/{member_id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->customers->members->delete(
    id: '<value>',
    memberId: 'a6d6f519-f76e-49a0-9868-b346c98100a6'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | The customer ID.   |
| `memberId`         | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\CustomersMembersDeleteResponse](../../Models/Operations/CustomersMembersDeleteResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

Update a member of a customer.

Only name, email and role can be updated.

**Scopes**: `members:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customers:members:update" method="patch" path="/v1/customers/{id}/members/{member_id}" -->
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

$memberUpdate = new Components\MemberUpdate(
    name: 'Jane Doe',
);

$response = $sdk->customers->members->update(
    id: '<value>',
    memberId: 'f48ea05d-6a60-4bb1-b3d9-4b3cd7194f3a',
    memberUpdate: $memberUpdate

);

if ($response->member !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                          | Type                                                               | Required                                                           | Description                                                        |
| ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ |
| `id`                                                               | *string*                                                           | :heavy_check_mark:                                                 | The customer ID.                                                   |
| `memberId`                                                         | *string*                                                           | :heavy_check_mark:                                                 | N/A                                                                |
| `memberUpdate`                                                     | [Components\MemberUpdate](../../Models/Components/MemberUpdate.md) | :heavy_check_mark:                                                 | N/A                                                                |

### Response

**[?Operations\CustomersMembersUpdateResponse](../../Models/Operations/CustomersMembersUpdateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## getExternal

Get a member by external ID for a customer identified by its external ID.

**Scopes**: `members:read` `members:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customers:members:get_external" method="get" path="/v1/customers/external/{external_id}/members/{member_external_id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->customers->members->getExternal(
    externalId: '<id>',
    memberExternalId: '<id>'

);

if ($response->member !== null) {
    // handle response
}
```

### Parameters

| Parameter                 | Type                      | Required                  | Description               |
| ------------------------- | ------------------------- | ------------------------- | ------------------------- |
| `externalId`              | *string*                  | :heavy_check_mark:        | The customer external ID. |
| `memberExternalId`        | *string*                  | :heavy_check_mark:        | The member external ID.   |

### Response

**[?Operations\CustomersMembersGetExternalResponse](../../Models/Operations/CustomersMembersGetExternalResponse.md)**

### Errors

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\ResourceNotFound            | 404                                | application/json                   |
| Errors\AmbiguousExternalCustomerID | 409                                | application/json                   |
| Errors\HTTPValidationError         | 422                                | application/json                   |
| Errors\APIException                | 4XX, 5XX                           | \*/\*                              |

## deleteExternal

Delete a member by external ID for a customer identified by its external ID.

**Scopes**: `members:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customers:members:delete_external" method="delete" path="/v1/customers/external/{external_id}/members/{member_external_id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->customers->members->deleteExternal(
    externalId: '<id>',
    memberExternalId: '<id>'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                 | Type                      | Required                  | Description               |
| ------------------------- | ------------------------- | ------------------------- | ------------------------- |
| `externalId`              | *string*                  | :heavy_check_mark:        | The customer external ID. |
| `memberExternalId`        | *string*                  | :heavy_check_mark:        | The member external ID.   |

### Response

**[?Operations\CustomersMembersDeleteExternalResponse](../../Models/Operations/CustomersMembersDeleteExternalResponse.md)**

### Errors

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\ResourceNotFound            | 404                                | application/json                   |
| Errors\AmbiguousExternalCustomerID | 409                                | application/json                   |
| Errors\HTTPValidationError         | 422                                | application/json                   |
| Errors\APIException                | 4XX, 5XX                           | \*/\*                              |

## updateExternal

Update a member by external ID for a customer identified by its external ID.

**Scopes**: `members:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customers:members:update_external" method="patch" path="/v1/customers/external/{external_id}/members/{member_external_id}" -->
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

$memberUpdate = new Components\MemberUpdate(
    name: 'Jane Doe',
);

$response = $sdk->customers->members->updateExternal(
    externalId: '<id>',
    memberExternalId: '<id>',
    memberUpdate: $memberUpdate

);

if ($response->member !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                          | Type                                                               | Required                                                           | Description                                                        |
| ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ |
| `externalId`                                                       | *string*                                                           | :heavy_check_mark:                                                 | The customer external ID.                                          |
| `memberExternalId`                                                 | *string*                                                           | :heavy_check_mark:                                                 | The member external ID.                                            |
| `memberUpdate`                                                     | [Components\MemberUpdate](../../Models/Components/MemberUpdate.md) | :heavy_check_mark:                                                 | N/A                                                                |

### Response

**[?Operations\CustomersMembersUpdateExternalResponse](../../Models/Operations/CustomersMembersUpdateExternalResponse.md)**

### Errors

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\ResourceNotFound            | 404                                | application/json                   |
| Errors\AmbiguousExternalCustomerID | 409                                | application/json                   |
| Errors\HTTPValidationError         | 422                                | application/json                   |
| Errors\APIException                | 4XX, 5XX                           | \*/\*                              |