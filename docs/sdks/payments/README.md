# Payments
(*payments*)

## Overview

### Available Operations

* [list](#list) - List Payments
* [get](#get) - Get Payment

## list

List payments.

**Scopes**: `payments:read`

### Example Usage

<!-- UsageSnippet language="php" operationID="payments:list" method="get" path="/v1/payments/" -->
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

$request = new Operations\PaymentsListRequest(
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
);

$responses = $sdk->payments->list(
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
| `$request`                                                                       | [Operations\PaymentsListRequest](../../Models/Operations/PaymentsListRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\PaymentsListResponse](../../Models/Operations/PaymentsListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Get a payment by ID.

**Scopes**: `payments:read`

### Example Usage

<!-- UsageSnippet language="php" operationID="payments:get" method="get" path="/v1/payments/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->payments->get(
    id: '<value>'
);

if ($response->payment !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | The payment ID.    |

### Response

**[?Operations\PaymentsGetResponse](../../Models/Operations/PaymentsGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |