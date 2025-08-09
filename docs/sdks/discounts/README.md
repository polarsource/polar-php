# Discounts
(*discounts*)

## Overview

### Available Operations

* [list](#list) - List Discounts
* [create](#create) - Create Discount
* [get](#get) - Get Discount
* [update](#update) - Update Discount
* [delete](#delete) - Delete Discount

## list

List discounts.

**Scopes**: `discounts:read` `discounts:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="discounts:list" method="get" path="/v1/discounts/" -->
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

$request = new Operations\DiscountsListRequest(
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
);

$responses = $sdk->discounts->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\DiscountsListRequest](../../Models/Operations/DiscountsListRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\DiscountsListResponse](../../Models/Operations/DiscountsListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## create

Create a discount.

**Scopes**: `discounts:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="discounts:create" method="post" path="/v1/discounts/" -->
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

$request = new Components\DiscountPercentageOnceForeverDurationCreate(
    duration: Components\DiscountDuration::Once,
    type: Components\DiscountType::Fixed,
    basisPoints: 449604,
    name: '<value>',
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
);

$response = $sdk->discounts->create(
    request: $request
);

if ($response->discount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                            | Type                                                                                                                                                                                                                                                 | Required                                                                                                                                                                                                                                             | Description                                                                                                                                                                                                                                          |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                                                                           | [Components\DiscountFixedOnceForeverDurationCreate\|Components\DiscountFixedRepeatDurationCreate\|Components\DiscountPercentageOnceForeverDurationCreate\|Components\DiscountPercentageRepeatDurationCreate](../../Models/Components/DiscountCreate.md) | :heavy_check_mark:                                                                                                                                                                                                                                   | The request object to use for the request.                                                                                                                                                                                                           |

### Response

**[?Operations\DiscountsCreateResponse](../../Models/Operations/DiscountsCreateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Get a discount by ID.

**Scopes**: `discounts:read` `discounts:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="discounts:get" method="get" path="/v1/discounts/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->discounts->get(
    id: '<value>'
);

if ($response->discount !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | The discount ID.   |

### Response

**[?Operations\DiscountsGetResponse](../../Models/Operations/DiscountsGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

Update a discount.

**Scopes**: `discounts:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="discounts:update" method="patch" path="/v1/discounts/{id}" -->
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

$discountUpdate = new Components\DiscountUpdate();

$response = $sdk->discounts->update(
    id: '<value>',
    discountUpdate: $discountUpdate

);

if ($response->discount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `id`                                                                   | *string*                                                               | :heavy_check_mark:                                                     | The discount ID.                                                       |
| `discountUpdate`                                                       | [Components\DiscountUpdate](../../Models/Components/DiscountUpdate.md) | :heavy_check_mark:                                                     | N/A                                                                    |

### Response

**[?Operations\DiscountsUpdateResponse](../../Models/Operations/DiscountsUpdateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## delete

Delete a discount.

**Scopes**: `discounts:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="discounts:delete" method="delete" path="/v1/discounts/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->discounts->delete(
    id: '<value>'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | The discount ID.   |

### Response

**[?Operations\DiscountsDeleteResponse](../../Models/Operations/DiscountsDeleteResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |