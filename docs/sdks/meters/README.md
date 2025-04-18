# Meters
(*meters*)

## Overview

### Available Operations

* [list](#list) - List Meters
* [create](#create) - Create Meter
* [get](#get) - Get Meter
* [update](#update) - Update Meter
* [quantities](#quantities) - Get Meter Quantities

## list

List meters.

**Scopes**: `meters:read` `meters:write`

### Example Usage

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

$request = new Operations\MetersListRequest(
    organizationId: [
        '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
    ],
);

$responses = $sdk->meters->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\MetersListRequest](../../Models/Operations/MetersListRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\MetersListResponse](../../Models/Operations/MetersListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## create

Create a meter.

**Scopes**: `meters:write`

### Example Usage

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

$request = new Components\MeterCreate(
    name: '<value>',
    filter: new Components\Filter(
        conjunction: Components\FilterConjunction::And,
        clauses: [],
    ),
    aggregation: new Components\PropertyAggregation(
        func: Components\Func::Max,
        property: '<value>',
    ),
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
);

$response = $sdk->meters->create(
    request: $request
);

if ($response->meter !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                        | Type                                                             | Required                                                         | Description                                                      |
| ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- |
| `$request`                                                       | [Components\MeterCreate](../../Models/Components/MeterCreate.md) | :heavy_check_mark:                                               | The request object to use for the request.                       |

### Response

**[?Operations\MetersCreateResponse](../../Models/Operations/MetersCreateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Get a meter by ID.

**Scopes**: `meters:read` `meters:write`

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->meters->get(
    id: '<value>'
);

if ($response->meter !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | The meter ID.      |

### Response

**[?Operations\MetersGetResponse](../../Models/Operations/MetersGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

Update a meter.

**Scopes**: `meters:write`

### Example Usage

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

$meterUpdate = new Components\MeterUpdate();

$response = $sdk->meters->update(
    id: '<value>',
    meterUpdate: $meterUpdate

);

if ($response->meter !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                        | Type                                                             | Required                                                         | Description                                                      |
| ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- |
| `id`                                                             | *string*                                                         | :heavy_check_mark:                                               | The meter ID.                                                    |
| `meterUpdate`                                                    | [Components\MeterUpdate](../../Models/Components/MeterUpdate.md) | :heavy_check_mark:                                               | N/A                                                              |

### Response

**[?Operations\MetersUpdateResponse](../../Models/Operations/MetersUpdateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## quantities

Get quantities of a meter over a time period.

**Scopes**: `meters:read` `meters:write`

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Components;
use Polar\Models\Operations;
use Polar\Utils;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\MetersQuantitiesRequest(
    id: '<value>',
    startTimestamp: Utils\Utils::parseDateTime('2023-09-17T00:45:34.608Z'),
    endTimestamp: Utils\Utils::parseDateTime('2023-07-21T18:11:39.069Z'),
    interval: Components\TimeInterval::Hour,
);

$response = $sdk->meters->quantities(
    request: $request
);

if ($response->meterQuantities !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\MetersQuantitiesRequest](../../Models/Operations/MetersQuantitiesRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\MetersQuantitiesResponse](../../Models/Operations/MetersQuantitiesResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |