# PolarOrders
(*customerPortal->orders*)

## Overview

### Available Operations

* [list](#list) - List Orders
* [get](#get) - Get Order
* [update](#update) - Update Order
* [generateInvoice](#generateinvoice) - Generate Order Invoice
* [invoice](#invoice) - Get Order Invoice
* [retryPayment](#retrypayment) - Retry Payment

## list

List orders of the authenticated customer.

**Scopes**: `customer_portal:read` `customer_portal:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customer_portal:orders:list" method="get" path="/v1/customer-portal/orders/" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();

$request = new Operations\CustomerPortalOrdersListRequest(
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
);
$requestSecurity = new Operations\CustomerPortalOrdersListSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$responses = $sdk->customerPortal->orders->list(
    request: $request,
    security: $requestSecurity
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\CustomerPortalOrdersListRequest](../../Models/Operations/CustomerPortalOrdersListRequest.md)   | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |
| `security`                                                                                                 | [Operations\CustomerPortalOrdersListSecurity](../../Models/Operations/CustomerPortalOrdersListSecurity.md) | :heavy_check_mark:                                                                                         | The security requirements to use for the request.                                                          |

### Response

**[?Operations\CustomerPortalOrdersListResponse](../../Models/Operations/CustomerPortalOrdersListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Get an order by ID for the authenticated customer.

**Scopes**: `customer_portal:read` `customer_portal:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customer_portal:orders:get" method="get" path="/v1/customer-portal/orders/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();


$requestSecurity = new Operations\CustomerPortalOrdersGetSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$response = $sdk->customerPortal->orders->get(
    security: $requestSecurity,
    id: '<value>'

);

if ($response->customerOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `security`                                                                                               | [Operations\CustomerPortalOrdersGetSecurity](../../Models/Operations/CustomerPortalOrdersGetSecurity.md) | :heavy_check_mark:                                                                                       | The security requirements to use for the request.                                                        |
| `id`                                                                                                     | *string*                                                                                                 | :heavy_check_mark:                                                                                       | The order ID.                                                                                            |

### Response

**[?Operations\CustomerPortalOrdersGetResponse](../../Models/Operations/CustomerPortalOrdersGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

Update an order for the authenticated customer.

**Scopes**: `customer_portal:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customer_portal:orders:update" method="patch" path="/v1/customer-portal/orders/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Components;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();

$customerOrderUpdate = new Components\CustomerOrderUpdate(
    billingName: '<value>',
    billingAddress: new Components\Address(
        country: 'US',
    ),
);
$requestSecurity = new Operations\CustomerPortalOrdersUpdateSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$response = $sdk->customerPortal->orders->update(
    security: $requestSecurity,
    id: '<value>',
    customerOrderUpdate: $customerOrderUpdate

);

if ($response->customerOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                     | [Operations\CustomerPortalOrdersUpdateSecurity](../../Models/Operations/CustomerPortalOrdersUpdateSecurity.md) | :heavy_check_mark:                                                                                             | The security requirements to use for the request.                                                              |
| `id`                                                                                                           | *string*                                                                                                       | :heavy_check_mark:                                                                                             | The order ID.                                                                                                  |
| `customerOrderUpdate`                                                                                          | [Components\CustomerOrderUpdate](../../Models/Components/CustomerOrderUpdate.md)                               | :heavy_check_mark:                                                                                             | N/A                                                                                                            |

### Response

**[?Operations\CustomerPortalOrdersUpdateResponse](../../Models/Operations/CustomerPortalOrdersUpdateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## generateInvoice

Trigger generation of an order's invoice.

**Scopes**: `customer_portal:read` `customer_portal:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customer_portal:orders:generate_invoice" method="post" path="/v1/customer-portal/orders/{id}/invoice" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();


$requestSecurity = new Operations\CustomerPortalOrdersGenerateInvoiceSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$response = $sdk->customerPortal->orders->generateInvoice(
    security: $requestSecurity,
    id: '<value>'

);

if ($response->any !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                        | Type                                                                                                                             | Required                                                                                                                         | Description                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                                       | [Operations\CustomerPortalOrdersGenerateInvoiceSecurity](../../Models/Operations/CustomerPortalOrdersGenerateInvoiceSecurity.md) | :heavy_check_mark:                                                                                                               | The security requirements to use for the request.                                                                                |
| `id`                                                                                                                             | *string*                                                                                                                         | :heavy_check_mark:                                                                                                               | The order ID.                                                                                                                    |

### Response

**[?Operations\CustomerPortalOrdersGenerateInvoiceResponse](../../Models/Operations/CustomerPortalOrdersGenerateInvoiceResponse.md)**

### Errors

| Error Type                          | Status Code                         | Content Type                        |
| ----------------------------------- | ----------------------------------- | ----------------------------------- |
| Errors\InvoiceAlreadyExists         | 409                                 | application/json                    |
| Errors\MissingInvoiceBillingDetails | 422                                 | application/json                    |
| Errors\NotPaidOrder                 | 422                                 | application/json                    |
| Errors\APIException                 | 4XX, 5XX                            | \*/\*                               |

## invoice

Get an order's invoice data.

**Scopes**: `customer_portal:read` `customer_portal:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customer_portal:orders:invoice" method="get" path="/v1/customer-portal/orders/{id}/invoice" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();


$requestSecurity = new Operations\CustomerPortalOrdersInvoiceSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$response = $sdk->customerPortal->orders->invoice(
    security: $requestSecurity,
    id: '<value>'

);

if ($response->customerOrderInvoice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                       | [Operations\CustomerPortalOrdersInvoiceSecurity](../../Models/Operations/CustomerPortalOrdersInvoiceSecurity.md) | :heavy_check_mark:                                                                                               | The security requirements to use for the request.                                                                |
| `id`                                                                                                             | *string*                                                                                                         | :heavy_check_mark:                                                                                               | The order ID.                                                                                                    |

### Response

**[?Operations\CustomerPortalOrdersInvoiceResponse](../../Models/Operations/CustomerPortalOrdersInvoiceResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## retryPayment

Manually retry payment for a failed order.

**Scopes**: `customer_portal:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customer_portal:orders:retry_payment" method="post" path="/v1/customer-portal/orders/{id}/retry-payment" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();


$requestSecurity = new Operations\CustomerPortalOrdersRetryPaymentSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$response = $sdk->customerPortal->orders->retryPayment(
    security: $requestSecurity,
    id: '<value>'

);

if ($response->any !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                                 | [Operations\CustomerPortalOrdersRetryPaymentSecurity](../../Models/Operations/CustomerPortalOrdersRetryPaymentSecurity.md) | :heavy_check_mark:                                                                                                         | The security requirements to use for the request.                                                                          |
| `id`                                                                                                                       | *string*                                                                                                                   | :heavy_check_mark:                                                                                                         | The order ID.                                                                                                              |

### Response

**[?Operations\CustomerPortalOrdersRetryPaymentResponse](../../Models/Operations/CustomerPortalOrdersRetryPaymentResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\ResourceNotFound         | 404                             | application/json                |
| Errors\PaymentAlreadyInProgress | 409                             | application/json                |
| Errors\OrderNotEligibleForRetry | 422                             | application/json                |
| Errors\APIException             | 4XX, 5XX                        | \*/\*                           |