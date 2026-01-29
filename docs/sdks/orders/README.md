# Orders

## Overview

### Available Operations

* [list](#list) - List Orders
* [export](#export) - Export Subscriptions
* [get](#get) - Get Order
* [update](#update) - Update Order
* [generateInvoice](#generateinvoice) - Generate Order Invoice
* [invoice](#invoice) - Get Order Invoice

## list

List orders.

**Scopes**: `orders:read`

### Example Usage

<!-- UsageSnippet language="php" operationID="orders:list" method="get" path="/v1/orders/" -->
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

$request = new Operations\OrdersListRequest(
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
);

$responses = $sdk->orders->list(
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
| `$request`                                                                   | [Operations\OrdersListRequest](../../Models/Operations/OrdersListRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\OrdersListResponse](../../Models/Operations/OrdersListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## export

Export orders as a CSV file.

**Scopes**: `orders:read`

### Example Usage

<!-- UsageSnippet language="php" operationID="orders:export" method="get" path="/v1/orders/export" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->orders->export(
    organizationId: null
);

if ($response->any !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `organizationId`                                                                           | [string\|array\|null](../../Models/Operations/OrdersExportQueryParamOrganizationIDFilter.md) | :heavy_minus_sign:                                                                         | Filter by organization ID.                                                                 |
| `productId`                                                                                | [string\|array\|null](../../Models/Operations/OrdersExportQueryParamProductIDFilter.md)    | :heavy_minus_sign:                                                                         | Filter by product ID.                                                                      |

### Response

**[?Operations\OrdersExportResponse](../../Models/Operations/OrdersExportResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Get an order by ID.

**Scopes**: `orders:read`

### Example Usage

<!-- UsageSnippet language="php" operationID="orders:get" method="get" path="/v1/orders/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->orders->get(
    id: '<value>'
);

if ($response->order !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | The order ID.      |

### Response

**[?Operations\OrdersGetResponse](../../Models/Operations/OrdersGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

Update an order.

**Scopes**: `orders:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="orders:update" method="patch" path="/v1/orders/{id}" -->
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

$orderUpdate = new Components\OrderUpdate(
    billingAddress: new Components\AddressInput(
        country: Components\CountryAlpha2Input::Us,
    ),
);

$response = $sdk->orders->update(
    id: '<value>',
    orderUpdate: $orderUpdate

);

if ($response->order !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                        | Type                                                             | Required                                                         | Description                                                      |
| ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- |
| `id`                                                             | *string*                                                         | :heavy_check_mark:                                               | The order ID.                                                    |
| `orderUpdate`                                                    | [Components\OrderUpdate](../../Models/Components/OrderUpdate.md) | :heavy_check_mark:                                               | N/A                                                              |

### Response

**[?Operations\OrdersUpdateResponse](../../Models/Operations/OrdersUpdateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## generateInvoice

Trigger generation of an order's invoice.

**Scopes**: `orders:read`

### Example Usage

<!-- UsageSnippet language="php" operationID="orders:generate_invoice" method="post" path="/v1/orders/{id}/invoice" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->orders->generateInvoice(
    id: '<value>'
);

if ($response->any !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | The order ID.      |

### Response

**[?Operations\OrdersGenerateInvoiceResponse](../../Models/Operations/OrdersGenerateInvoiceResponse.md)**

### Errors

| Error Type                          | Status Code                         | Content Type                        |
| ----------------------------------- | ----------------------------------- | ----------------------------------- |
| Errors\MissingInvoiceBillingDetails | 422                                 | application/json                    |
| Errors\NotPaidOrder                 | 422                                 | application/json                    |
| Errors\APIException                 | 4XX, 5XX                            | \*/\*                               |

## invoice

Get an order's invoice data.

**Scopes**: `orders:read`

### Example Usage

<!-- UsageSnippet language="php" operationID="orders:invoice" method="get" path="/v1/orders/{id}/invoice" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->orders->invoice(
    id: '<value>'
);

if ($response->orderInvoice !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | The order ID.      |

### Response

**[?Operations\OrdersInvoiceResponse](../../Models/Operations/OrdersInvoiceResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |