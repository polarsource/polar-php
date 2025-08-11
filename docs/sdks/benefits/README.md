# Benefits
(*benefits*)

## Overview

### Available Operations

* [list](#list) - List Benefits
* [create](#create) - Create Benefit
* [get](#get) - Get Benefit
* [update](#update) - Update Benefit
* [delete](#delete) - Delete Benefit
* [grants](#grants) - List Benefit Grants

## list

List benefits.

**Scopes**: `benefits:read` `benefits:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="benefits:list" method="get" path="/v1/benefits/" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\BenefitsListRequest(
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
);

$responses = $sdk->benefits->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\BenefitsListRequest](../../Models/Operations/BenefitsListRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\BenefitsListResponse](../../Models/Operations/BenefitsListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## create

Create a benefit.

**Scopes**: `benefits:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="benefits:create" method="post" path="/v1/benefits/" -->
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

$request = new Components\BenefitLicenseKeysCreate(
    description: 'mature emergent at outside arrogantly gadzooks zealous equatorial notwithstanding',
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
    properties: new Components\BenefitLicenseKeysCreateProperties(),
);

$response = $sdk->benefits->create(
    request: $request
);

if ($response->benefit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                         | Type                                                                                                                                                                                                                                                              | Required                                                                                                                                                                                                                                                          | Description                                                                                                                                                                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                                                                                        | [Components\BenefitCustomCreate\|Components\BenefitDiscordCreate\|Components\BenefitGitHubRepositoryCreate\|Components\BenefitDownloadablesCreate\|Components\BenefitLicenseKeysCreate\|Components\BenefitMeterCreditCreate](../../Models/Components/BenefitCreate.md) | :heavy_check_mark:                                                                                                                                                                                                                                                | The request object to use for the request.                                                                                                                                                                                                                        |

### Response

**[?Operations\BenefitsCreateResponse](../../Models/Operations/BenefitsCreateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Get a benefit by ID.

**Scopes**: `benefits:read` `benefits:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="benefits:get" method="get" path="/v1/benefits/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->benefits->get(
    id: '<value>'
);

if ($response->benefit !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\BenefitsGetResponse](../../Models/Operations/BenefitsGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

Update a benefit.

**Scopes**: `benefits:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="benefits:update" method="patch" path="/v1/benefits/{id}" -->
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



$response = $sdk->benefits->update(
    id: '<value>',
    requestBody: new Components\BenefitCustomUpdate()

);

if ($response->benefit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                       | Type                                                                                                                                                                                                                                                                            | Required                                                                                                                                                                                                                                                                        | Description                                                                                                                                                                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `id`                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                        | :heavy_check_mark:                                                                                                                                                                                                                                                              | N/A                                                                                                                                                                                                                                                                             |
| `requestBody`                                                                                                                                                                                                                                                                   | [Components\BenefitCustomUpdate\|Components\BenefitDiscordUpdate\|Components\BenefitGitHubRepositoryUpdate\|Components\BenefitDownloadablesUpdate\|Components\BenefitLicenseKeysUpdate\|Components\BenefitMeterCreditUpdate](../../Models/Operations/BenefitsUpdateBenefitUpdate.md) | :heavy_check_mark:                                                                                                                                                                                                                                                              | N/A                                                                                                                                                                                                                                                                             |

### Response

**[?Operations\BenefitsUpdateResponse](../../Models/Operations/BenefitsUpdateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## delete

Delete a benefit.

> [!WARNING]
> Every grants associated with the benefit will be revoked.
> Users will lose access to the benefit.

**Scopes**: `benefits:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="benefits:delete" method="delete" path="/v1/benefits/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->benefits->delete(
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

**[?Operations\BenefitsDeleteResponse](../../Models/Operations/BenefitsDeleteResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\NotPermitted        | 403                        | application/json           |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## grants

List the individual grants for a benefit.

It's especially useful to check if a user has been granted a benefit.

**Scopes**: `benefits:read` `benefits:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="benefits:grants" method="get" path="/v1/benefits/{id}/grants" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\BenefitsGrantsRequest(
    id: '<value>',
);

$responses = $sdk->benefits->grants(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\BenefitsGrantsRequest](../../Models/Operations/BenefitsGrantsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\BenefitsGrantsResponse](../../Models/Operations/BenefitsGrantsResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |