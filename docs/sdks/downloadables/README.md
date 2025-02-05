# Downloadables
(*customerPortal->downloadables*)

## Overview

### Available Operations

* [get](#get) - Get Downloadable
* [list](#list) - List Downloadables

## get

Get Downloadable

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

## list

List Downloadables

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



$responses = $sdk->customerPortal->downloadables->list(
    page: 1,
    limit: 10,
    organizationId: [
        '<value>',
    ],
    benefitId: [
        '<value>',
    ]

);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `page`                                                                                                        | *?int*                                                                                                        | :heavy_minus_sign:                                                                                            | Page number, defaults to 1.                                                                                   |
| `limit`                                                                                                       | *?int*                                                                                                        | :heavy_minus_sign:                                                                                            | Size of a page, defaults to 10. Maximum is 100.                                                               |
| `organizationId`                                                                                              | [string\|array\|null](../../Models/Operations/CustomerPortalDownloadablesListQueryParamOrganizationIDFilter.md) | :heavy_minus_sign:                                                                                            | Filter by organization ID.                                                                                    |
| `benefitId`                                                                                                   | [string\|array\|null](../../Models/Operations/CustomerPortalDownloadablesListQueryParamBenefitIDFilter.md)    | :heavy_minus_sign:                                                                                            | Filter by benefit ID.                                                                                         |

### Response

**[?Operations\CustomerPortalDownloadablesListResponse](../../Models/Operations/CustomerPortalDownloadablesListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |