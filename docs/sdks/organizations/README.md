# Organizations

## Overview

### Available Operations

* [list](#list) - List Organizations
* [create](#create) - Create Organization
* [get](#get) - Get Organization
* [update](#update) - Update Organization

## list

List organizations.

**Scopes**: `organizations:read` `organizations:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="organizations:list" method="get" path="/v1/organizations/" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$responses = $sdk->organizations->list(
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

| Parameter                                                                                                                                                               | Type                                                                                                                                                                    | Required                                                                                                                                                                | Description                                                                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `slug`                                                                                                                                                                  | *?string*                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                      | Filter by slug.                                                                                                                                                         |
| `page`                                                                                                                                                                  | *?int*                                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                                      | Page number, defaults to 1.                                                                                                                                             |
| `limit`                                                                                                                                                                 | *?int*                                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                                      | Size of a page, defaults to 10. Maximum is 100.                                                                                                                         |
| `sorting`                                                                                                                                                               | array<[Components\OrganizationSortProperty](../../Models/Components/OrganizationSortProperty.md)>                                                                       | :heavy_minus_sign:                                                                                                                                                      | Sorting criterion. Several criteria can be used simultaneously and will be applied in order. Add a minus sign `-` before the criteria name to sort by descending order. |

### Response

**[?Operations\OrganizationsListResponse](../../Models/Operations/OrganizationsListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## create

Create an organization.

**Scopes**: `organizations:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="organizations:create" method="post" path="/v1/organizations/" -->
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

$request = new Components\OrganizationCreate(
    name: '<value>',
    slug: '<value>',
);

$response = $sdk->organizations->create(
    request: $request
);

if ($response->organization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Components\OrganizationCreate](../../Models/Components/OrganizationCreate.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\OrganizationsCreateResponse](../../Models/Operations/OrganizationsCreateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Get an organization by ID.

**Scopes**: `organizations:read` `organizations:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="organizations:get" method="get" path="/v1/organizations/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->organizations->get(
    id: '1dbfc517-0bbf-4301-9ba8-555ca42b9737'
);

if ($response->organization !== null) {
    // handle response
}
```

### Parameters

| Parameter                            | Type                                 | Required                             | Description                          | Example                              |
| ------------------------------------ | ------------------------------------ | ------------------------------------ | ------------------------------------ | ------------------------------------ |
| `id`                                 | *string*                             | :heavy_check_mark:                   | N/A                                  | 1dbfc517-0bbf-4301-9ba8-555ca42b9737 |

### Response

**[?Operations\OrganizationsGetResponse](../../Models/Operations/OrganizationsGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

Update an organization.

**Scopes**: `organizations:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="organizations:update" method="patch" path="/v1/organizations/{id}" -->
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

$organizationUpdate = new Components\OrganizationUpdate();

$response = $sdk->organizations->update(
    id: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
    organizationUpdate: $organizationUpdate

);

if ($response->organization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    | Example                                                                        |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `id`                                                                           | *string*                                                                       | :heavy_check_mark:                                                             | N/A                                                                            | 1dbfc517-0bbf-4301-9ba8-555ca42b9737                                           |
| `organizationUpdate`                                                           | [Components\OrganizationUpdate](../../Models/Components/OrganizationUpdate.md) | :heavy_check_mark:                                                             | N/A                                                                            |                                                                                |

### Response

**[?Operations\OrganizationsUpdateResponse](../../Models/Operations/OrganizationsUpdateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\NotPermitted        | 403                        | application/json           |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |