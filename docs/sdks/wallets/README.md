# CustomerPortal.Wallets

## Overview

### Available Operations

* [list](#list) - List Wallets
* [get](#get) - Get Wallet

## list

List wallets of the authenticated customer.

**Scopes**: `customer_portal:read` `customer_portal:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customer_portal:wallets:list" method="get" path="/v1/customer-portal/wallets/" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();


$requestSecurity = new Operations\CustomerPortalWalletsListSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$responses = $sdk->customerPortal->wallets->list(
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

| Parameter                                                                                                                                                               | Type                                                                                                                                                                    | Required                                                                                                                                                                | Description                                                                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                                                                              | [Operations\CustomerPortalWalletsListSecurity](../../Models/Operations/CustomerPortalWalletsListSecurity.md)                                                            | :heavy_check_mark:                                                                                                                                                      | The security requirements to use for the request.                                                                                                                       |
| `page`                                                                                                                                                                  | *?int*                                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                                      | Page number, defaults to 1.                                                                                                                                             |
| `limit`                                                                                                                                                                 | *?int*                                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                                      | Size of a page, defaults to 10. Maximum is 100.                                                                                                                         |
| `sorting`                                                                                                                                                               | array<[Components\CustomerWalletSortProperty](../../Models/Components/CustomerWalletSortProperty.md)>                                                                   | :heavy_minus_sign:                                                                                                                                                      | Sorting criterion. Several criteria can be used simultaneously and will be applied in order. Add a minus sign `-` before the criteria name to sort by descending order. |

### Response

**[?Operations\CustomerPortalWalletsListResponse](../../Models/Operations/CustomerPortalWalletsListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Get a wallet by ID for the authenticated customer.

**Scopes**: `customer_portal:read` `customer_portal:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customer_portal:wallets:get" method="get" path="/v1/customer-portal/wallets/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();


$requestSecurity = new Operations\CustomerPortalWalletsGetSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$response = $sdk->customerPortal->wallets->get(
    security: $requestSecurity,
    id: '<value>'

);

if ($response->customerWallet !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                 | [Operations\CustomerPortalWalletsGetSecurity](../../Models/Operations/CustomerPortalWalletsGetSecurity.md) | :heavy_check_mark:                                                                                         | The security requirements to use for the request.                                                          |
| `id`                                                                                                       | *string*                                                                                                   | :heavy_check_mark:                                                                                         | The wallet ID.                                                                                             |

### Response

**[?Operations\CustomerPortalWalletsGetResponse](../../Models/Operations/CustomerPortalWalletsGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |