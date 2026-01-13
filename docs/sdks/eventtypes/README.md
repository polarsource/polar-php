# EventTypes

## Overview

### Available Operations

* [list](#list) - List Event Types
* [update](#update) - Update Event Type

## list

List event types with aggregated statistics.

**Scopes**: `events:read` `events:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="event-types:list" method="get" path="/v1/event-types/" -->
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

$request = new Operations\EventTypesListRequest(
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
);

$responses = $sdk->eventTypes->list(
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
| `$request`                                                                           | [Operations\EventTypesListRequest](../../Models/Operations/EventTypesListRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\EventTypesListResponse](../../Models/Operations/EventTypesListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

Update an event type's label.

### Example Usage

<!-- UsageSnippet language="php" operationID="event-types:update" method="patch" path="/v1/event-types/{id}" -->
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

$eventTypeUpdate = new Components\EventTypeUpdate(
    label: '<value>',
);

$response = $sdk->eventTypes->update(
    id: '<value>',
    eventTypeUpdate: $eventTypeUpdate

);

if ($response->eventType !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `id`                                                                     | *string*                                                                 | :heavy_check_mark:                                                       | The event type ID.                                                       |
| `eventTypeUpdate`                                                        | [Components\EventTypeUpdate](../../Models/Components/EventTypeUpdate.md) | :heavy_check_mark:                                                       | N/A                                                                      |

### Response

**[?Operations\EventTypesUpdateResponse](../../Models/Operations/EventTypesUpdateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |