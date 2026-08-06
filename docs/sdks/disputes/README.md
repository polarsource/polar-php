# Disputes

## Overview

### Available Operations

* [list](#list) - List Disputes
* [get](#get) - Get Dispute
* [accept](#accept) - Accept Dispute

## list

List disputes.

**Scopes**: `disputes:read` `disputes:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="disputes:list" method="get" path="/v1/disputes/" -->
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

$request = new Operations\DisputesListRequest(
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
);

$responses = $sdk->disputes->list(
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
| `$request`                                                                       | [Operations\DisputesListRequest](../../Models/Operations/DisputesListRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\DisputesListResponse](../../Models/Operations/DisputesListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Get a dispute by ID.

**Scopes**: `disputes:read` `disputes:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="disputes:get" method="get" path="/v1/disputes/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->disputes->get(
    id: '<value>'
);

if ($response->dispute !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | The dispute ID.    |

### Response

**[?Operations\DisputesGetResponse](../../Models/Operations/DisputesGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## accept

Accept a dispute, conceding the chargeback.

Closes the dispute with the processor (settling it as `lost`) and records
the merchant's decision on the dispute's support case.

**Scopes**: `disputes:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="disputes:accept" method="post" path="/v1/disputes/{id}/accept" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->disputes->accept(
    id: '<value>'
);

if ($response->dispute !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | The dispute ID.    |

### Response

**[?Operations\DisputesAcceptResponse](../../Models/Operations/DisputesAcceptResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\DisputeNotOpenError | 409                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |