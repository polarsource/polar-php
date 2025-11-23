# EventTypes
(*eventTypes*)

## Overview

### Available Operations

* [updateEventType](#updateeventtype) - Update Event Type

## updateEventType

Update an event type's label.

### Example Usage

<!-- UsageSnippet language="php" operationID="event_types:update_event_type" method="patch" path="/v1/event_types/{id}" -->
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

$response = $sdk->eventTypes->updateEventType(
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

**[?Operations\EventTypesUpdateEventTypeResponse](../../Models/Operations/EventTypesUpdateEventTypeResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |