# Orders

## Overview

### Available Operations

* [list](#list) - List Orders
* [create](#create) - Create Order
* [export](#export) - Export Orders
* [get](#get) - Get Order
* [update](#update) - Update Order
* [finalize](#finalize) - Finalize Order
* [invoice](#invoice) - Get Order Invoice
* [generateInvoice](#generateinvoice) - Generate Order Invoice
* [receipt](#receipt) - Get Order Receipt

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

## create

Create a draft order for an off-session charge against a saved payment
method. The order is created with `status=draft` and no invoice number;
call `POST /v1/orders/{id}/finalize` to attempt the charge.

The organization must have the `off_session_charges_enabled` feature flag.

**Scopes**: `orders:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="orders:create" method="post" path="/v1/orders/" -->
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

$request = new Components\OrderCreate(
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
    customerId: '<value>',
    productId: '<value>',
);

$response = $sdk->orders->create(
    request: $request
);

if ($response->order !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                        | Type                                                             | Required                                                         | Description                                                      |
| ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- |
| `$request`                                                       | [Components\OrderCreate](../../Models/Components/OrderCreate.md) | :heavy_check_mark:                                               | The request object to use for the request.                       |

### Response

**[?Operations\OrdersCreateResponse](../../Models/Operations/OrdersCreateResponse.md)**

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

if ($response->res !== null) {
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
        country: Components\AddressInputCountryAlpha2Input::Us,
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

## finalize

Finalize a draft order and synchronously attempt an off-session charge.

On success, the order transitions to `paid` and benefit grants fire
before the response returns. On failure (decline, missing payment method,
SCA challenge), the order stays in `draft` and a 4xx error is returned.

The request fails with 412 if the order is not in `draft` status.

**Scopes**: `orders:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="orders:finalize" method="post" path="/v1/orders/{id}/finalize" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->orders->finalize(
    id: '<value>',
    orderFinalize: $orderFinalize

);

if ($response->order !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                             | Type                                                                  | Required                                                              | Description                                                           |
| --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- |
| `id`                                                                  | *string*                                                              | :heavy_check_mark:                                                    | The order ID.                                                         |
| `orderFinalize`                                                       | [?Components\OrderFinalize](../../Models/Components/OrderFinalize.md) | :heavy_minus_sign:                                                    | N/A                                                                   |

### Response

**[?Operations\OrdersFinalizeResponse](../../Models/Operations/OrdersFinalizeResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\PaymentFailed1                  | 402                                    | application/json                       |
| Errors\PaymentActionRequired           | 402                                    | application/json                       |
| Errors\OffSessionChargesNotEnabled     | 403                                    | application/json                       |
| Errors\OrganizationNotReadyForPayments | 403                                    | application/json                       |
| Errors\ResourceNotFound                | 404                                    | application/json                       |
| Errors\OrderNotDraft                   | 412                                    | application/json                       |
| Errors\HTTPValidationError             | 422                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

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
| Errors\ResourceNotFound             | 404                                 | application/json                    |
| Errors\OrderNotEligibleForInvoice   | 409                                 | application/json                    |
| Errors\MissingInvoiceBillingDetails | 422                                 | application/json                    |
| Errors\APIException                 | 4XX, 5XX                            | \*/\*                               |

## receipt

Get a presigned URL to download an order's receipt PDF.

**Scopes**: `orders:read`

### Example Usage

<!-- UsageSnippet language="php" operationID="orders:receipt" method="get" path="/v1/orders/{id}/receipt" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->orders->receipt(
    id: '<value>'
);

if ($response->orderReceipt !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | The order ID.      |

### Response

**[?Operations\OrdersReceiptResponse](../../Models/Operations/OrdersReceiptResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |