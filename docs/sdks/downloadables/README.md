# Downloadables
(*customerPortal->downloadables*)

## Overview

### Available Operations

* [list](#list) - List Downloadables
* [get](#get) - Get Downloadable

## list

**Scopes**: `customer_portal:read` `customer_portal:write`

### Example Usage

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
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
    benefitId: '<value>',
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
| `organizationId`                                                                                                         | [string\|array\|null](../../Models/Operations/CustomerPortalDownloadablesListQueryParamOrganizationIDFilter.md)          | :heavy_minus_sign:                                                                                                       | Filter by organization ID.                                                                                               |
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

## get

Get Downloadable

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()->build();



$response = $sdk->customerPortal->downloadables->get(
    token: '<value>'
);

if ($response->any !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `token`            | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\CustomerPortalDownloadablesCustomerPortalDownloadablesGetResponse](../../Models/Operations/CustomerPortalDownloadablesCustomerPortalDownloadablesGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |