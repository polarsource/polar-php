# PolarOrganizations
(*customerPortal->organizations*)

## Overview

### Available Operations

* [get](#get) - Get Organization

## get

Get a customer portal's organization by slug.

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



$response = $sdk->customerPortal->organizations->get(
    slug: '<value>'
);

if ($response->customerOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter              | Type                   | Required               | Description            |
| ---------------------- | ---------------------- | ---------------------- | ---------------------- |
| `slug`                 | *string*               | :heavy_check_mark:     | The organization slug. |

### Response

**[?Operations\CustomerPortalOrganizationsGetResponse](../../Models/Operations/CustomerPortalOrganizationsGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |