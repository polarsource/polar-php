# PolarCustomers
(*customerPortal->customers*)

## Overview

### Available Operations

* [get](#get) - Get Customer

## get

Get a customer by ID for the authenticated customer or user.

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



$response = $sdk->customerPortal->customers->get(
    id: '<value>'
);

if ($response->customerPortalCustomer !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | The customer ID.   |

### Response

**[?Operations\CustomerPortalCustomersGetResponse](../../Models/Operations/CustomerPortalCustomersGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |