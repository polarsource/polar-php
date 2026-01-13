# CustomerPortal.Downloadables

## Overview

### Available Operations

* [list](#list) - List Downloadables

## list

**Scopes**: `customer_portal:read` `customer_portal:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customer_portal:downloadables:list" method="get" path="/v1/customer-portal/downloadables/" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();


$requestSecurity = new Operations\CustomerPortalDownloadablesListSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$responses = $sdk->customerPortal->downloadables->list(
    security: $requestSecurity,
    page: 1,
    limit: 10

);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `security`                                                                                                               | [Operations\CustomerPortalDownloadablesListSecurity](../../Models/Operations/CustomerPortalDownloadablesListSecurity.md) | :heavy_check_mark:                                                                                                       | The security requirements to use for the request.                                                                        |
| `benefitId`                                                                                                              | [string\|array\|null](../../Models/Operations/CustomerPortalDownloadablesListQueryParamBenefitIDFilter.md)               | :heavy_minus_sign:                                                                                                       | Filter by benefit ID.                                                                                                    |
| `page`                                                                                                                   | *?int*                                                                                                                   | :heavy_minus_sign:                                                                                                       | Page number, defaults to 1.                                                                                              |
| `limit`                                                                                                                  | *?int*                                                                                                                   | :heavy_minus_sign:                                                                                                       | Size of a page, defaults to 10. Maximum is 100.                                                                          |

### Response

**[?Operations\CustomerPortalDownloadablesListResponse](../../Models/Operations/CustomerPortalDownloadablesListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |