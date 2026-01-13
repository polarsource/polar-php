# Refunds

## Overview

### Available Operations

* [list](#list) - List Refunds
* [create](#create) - Create Refund

## list

List refunds.

**Scopes**: `refunds:read` `refunds:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="refunds:list" method="get" path="/v1/refunds/" -->
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

$request = new Operations\RefundsListRequest(
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
);

$responses = $sdk->refunds->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\RefundsListRequest](../../Models/Operations/RefundsListRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\RefundsListResponse](../../Models/Operations/RefundsListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## create

Create a refund.

**Scopes**: `refunds:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="refunds:create" method="post" path="/v1/refunds/" -->
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

$request = new Components\RefundCreate(
    orderId: '<value>',
    reason: Components\RefundReason::CustomerRequest,
    amount: 90,
);

$response = $sdk->refunds->create(
    request: $request
);

if ($response->refund !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                          | Type                                                               | Required                                                           | Description                                                        |
| ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ |
| `$request`                                                         | [Components\RefundCreate](../../Models/Components/RefundCreate.md) | :heavy_check_mark:                                                 | The request object to use for the request.                         |

### Response

**[?Operations\RefundsCreateResponse](../../Models/Operations/RefundsCreateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\RefundedAlready     | 403                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |