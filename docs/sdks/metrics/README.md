# Metrics

## Overview

### Available Operations

* [get](#get) - Get Metrics
* [export](#export) - Export Metrics
* [limits](#limits) - Get Metrics Limits
* [listDashboards](#listdashboards) - List Metric Dashboards
* [createDashboard](#createdashboard) - Create Metric Dashboard
* [getDashboard](#getdashboard) - Get Metric Dashboard
* [deleteDashboard](#deletedashboard) - Delete Metric Dashboard
* [updateDashboard](#updatedashboard) - Update Metric Dashboard

## get

Get metrics about your orders and subscriptions.

Currency values are output in cents.

**Scopes**: `metrics:read`

### Example Usage

<!-- UsageSnippet language="php" operationID="metrics:get" method="get" path="/v1/metrics/" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Brick\DateTime\LocalDate;
use Polar;
use Polar\Models\Components;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\MetricsGetRequest(
    startDate: LocalDate::parse('2025-03-14'),
    endDate: LocalDate::parse('2025-03-18'),
    interval: Components\TimeInterval::Hour,
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
);

$response = $sdk->metrics->get(
    request: $request
);

if ($response->metricsResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\MetricsGetRequest](../../Models/Operations/MetricsGetRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\MetricsGetResponse](../../Models/Operations/MetricsGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## export

Export metrics as a CSV file.

**Scopes**: `metrics:read`

### Example Usage

<!-- UsageSnippet language="php" operationID="metrics:export" method="get" path="/v1/metrics/export" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Brick\DateTime\LocalDate;
use Polar;
use Polar\Models\Components;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\MetricsExportRequest(
    startDate: LocalDate::parse('2026-07-17'),
    endDate: LocalDate::parse('2024-05-06'),
    interval: Components\TimeInterval::Year,
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
);

$response = $sdk->metrics->export(
    request: $request
);

if ($response->any !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\MetricsExportRequest](../../Models/Operations/MetricsExportRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\MetricsExportResponse](../../Models/Operations/MetricsExportResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## limits

Get the interval limits for the metrics endpoint.

**Scopes**: `metrics:read`

### Example Usage

<!-- UsageSnippet language="php" operationID="metrics:limits" method="get" path="/v1/metrics/limits" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->metrics->limits(

);

if ($response->metricsLimits !== null) {
    // handle response
}
```

### Response

**[?Operations\MetricsLimitsResponse](../../Models/Operations/MetricsLimitsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listDashboards

List user-defined metric dashboards.

**Scopes**: `metrics:read`

### Example Usage

<!-- UsageSnippet language="php" operationID="metrics:list_dashboards" method="get" path="/v1/metrics/dashboards" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->metrics->listDashboards(
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737'
);

if ($response->responseMetricsListDashboards !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `organizationId`                                                                                    | [string\|array\|null](../../Models/Operations/MetricsListDashboardsQueryParamOrganizationIDFilter.md) | :heavy_minus_sign:                                                                                  | Filter by organization ID.                                                                          |

### Response

**[?Operations\MetricsListDashboardsResponse](../../Models/Operations/MetricsListDashboardsResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## createDashboard

Create a user-defined metric dashboard.

**Scopes**: `metrics:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="metrics:create_dashboard" method="post" path="/v1/metrics/dashboards" -->
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

$request = new Components\MetricDashboardCreate(
    name: '<value>',
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
);

$response = $sdk->metrics->createDashboard(
    request: $request
);

if ($response->metricDashboardSchema !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Components\MetricDashboardCreate](../../Models/Components/MetricDashboardCreate.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\MetricsCreateDashboardResponse](../../Models/Operations/MetricsCreateDashboardResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## getDashboard

Get a user-defined metric dashboard by ID.

**Scopes**: `metrics:read`

### Example Usage

<!-- UsageSnippet language="php" operationID="metrics:get_dashboard" method="get" path="/v1/metrics/dashboards/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->metrics->getDashboard(
    id: '<value>'
);

if ($response->metricDashboardSchema !== null) {
    // handle response
}
```

### Parameters

| Parameter                | Type                     | Required                 | Description              |
| ------------------------ | ------------------------ | ------------------------ | ------------------------ |
| `id`                     | *string*                 | :heavy_check_mark:       | The metric dashboard ID. |

### Response

**[?Operations\MetricsGetDashboardResponse](../../Models/Operations/MetricsGetDashboardResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## deleteDashboard

Delete a user-defined metric dashboard.

**Scopes**: `metrics:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="metrics:delete_dashboard" method="delete" path="/v1/metrics/dashboards/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->metrics->deleteDashboard(
    id: '<value>'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                | Type                     | Required                 | Description              |
| ------------------------ | ------------------------ | ------------------------ | ------------------------ |
| `id`                     | *string*                 | :heavy_check_mark:       | The metric dashboard ID. |

### Response

**[?Operations\MetricsDeleteDashboardResponse](../../Models/Operations/MetricsDeleteDashboardResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## updateDashboard

Update a user-defined metric dashboard.

**Scopes**: `metrics:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="metrics:update_dashboard" method="patch" path="/v1/metrics/dashboards/{id}" -->
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

$metricDashboardUpdate = new Components\MetricDashboardUpdate();

$response = $sdk->metrics->updateDashboard(
    id: '<value>',
    metricDashboardUpdate: $metricDashboardUpdate

);

if ($response->metricDashboardSchema !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `id`                                                                                 | *string*                                                                             | :heavy_check_mark:                                                                   | The metric dashboard ID.                                                             |
| `metricDashboardUpdate`                                                              | [Components\MetricDashboardUpdate](../../Models/Components/MetricDashboardUpdate.md) | :heavy_check_mark:                                                                   | N/A                                                                                  |

### Response

**[?Operations\MetricsUpdateDashboardResponse](../../Models/Operations/MetricsUpdateDashboardResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |