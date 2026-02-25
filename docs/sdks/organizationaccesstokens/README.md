# OrganizationAccessTokens

## Overview

### Available Operations

* [list](#list) - List
* [create](#create) - Create
* [delete](#delete) - Delete
* [update](#update) - Update

## list

List organization access tokens.

**Scopes**: `organization_access_tokens:read` `organization_access_tokens:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="organization_access_tokens:list" method="get" path="/v1/organization-access-tokens/" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$responses = $sdk->organizationAccessTokens->list(
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
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
| `organizationId`                                                                                                                                                        | [string\|array\|null](../../Models/Operations/OrganizationAccessTokensListQueryParamOrganizationIDFilter.md)                                                            | :heavy_minus_sign:                                                                                                                                                      | Filter by organization ID.                                                                                                                                              |
| `page`                                                                                                                                                                  | *?int*                                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                                      | Page number, defaults to 1.                                                                                                                                             |
| `limit`                                                                                                                                                                 | *?int*                                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                                      | Size of a page, defaults to 10. Maximum is 100.                                                                                                                         |
| `sorting`                                                                                                                                                               | array<[Components\OrganizationAccessTokenSortProperty](../../Models/Components/OrganizationAccessTokenSortProperty.md)>                                                 | :heavy_minus_sign:                                                                                                                                                      | Sorting criterion. Several criteria can be used simultaneously and will be applied in order. Add a minus sign `-` before the criteria name to sort by descending order. |

### Response

**[?Operations\OrganizationAccessTokensListResponse](../../Models/Operations/OrganizationAccessTokensListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## create

**Scopes**: `organization_access_tokens:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="organization_access_tokens:create" method="post" path="/v1/organization-access-tokens/" -->
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

$request = new Components\OrganizationAccessTokenCreate(
    comment: 'The Football Is Good For Training And Recreational Purposes',
    scopes: [],
);

$response = $sdk->organizationAccessTokens->create(
    request: $request
);

if ($response->organizationAccessTokenCreateResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Components\OrganizationAccessTokenCreate](../../Models/Components/OrganizationAccessTokenCreate.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\OrganizationAccessTokensCreateResponse](../../Models/Operations/OrganizationAccessTokensCreateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## delete

**Scopes**: `organization_access_tokens:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="organization_access_tokens:delete" method="delete" path="/v1/organization-access-tokens/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->organizationAccessTokens->delete(
    id: '<value>'
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

**[?Operations\OrganizationAccessTokensDeleteResponse](../../Models/Operations/OrganizationAccessTokensDeleteResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

**Scopes**: `organization_access_tokens:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="organization_access_tokens:update" method="patch" path="/v1/organization-access-tokens/{id}" -->
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

$organizationAccessTokenUpdate = new Components\OrganizationAccessTokenUpdate();

$response = $sdk->organizationAccessTokens->update(
    id: '<value>',
    organizationAccessTokenUpdate: $organizationAccessTokenUpdate

);

if ($response->organizationAccessToken !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `id`                                                                                                 | *string*                                                                                             | :heavy_check_mark:                                                                                   | N/A                                                                                                  |
| `organizationAccessTokenUpdate`                                                                      | [Components\OrganizationAccessTokenUpdate](../../Models/Components/OrganizationAccessTokenUpdate.md) | :heavy_check_mark:                                                                                   | N/A                                                                                                  |

### Response

**[?Operations\OrganizationAccessTokensUpdateResponse](../../Models/Operations/OrganizationAccessTokensUpdateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |