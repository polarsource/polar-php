# BenefitGrants
(*customerPortal->benefitGrants*)

## Overview

### Available Operations

* [get](#get) - Get Benefit Grant
* [list](#list) - List Benefit Grants
* [update](#update) - Update Benefit Grant

## get

Get a benefit grant by ID for the authenticated customer.

**Scopes**: `customer_portal:read` `customer_portal:write`

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();


$requestSecurity = new Operations\CustomerPortalBenefitGrantsGetSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$response = $sdk->customerPortal->benefitGrants->get(
    security: $requestSecurity,
    id: '<value>'

);

if ($response->customerBenefitGrant !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                             | [Operations\CustomerPortalBenefitGrantsGetSecurity](../../Models/Operations/CustomerPortalBenefitGrantsGetSecurity.md) | :heavy_check_mark:                                                                                                     | The security requirements to use for the request.                                                                      |
| `id`                                                                                                                   | *string*                                                                                                               | :heavy_check_mark:                                                                                                     | The benefit grant ID.                                                                                                  |

### Response

**[?Operations\CustomerPortalBenefitGrantsGetResponse](../../Models/Operations/CustomerPortalBenefitGrantsGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## list

List benefits grants of the authenticated customer.

**Scopes**: `customer_portal:read` `customer_portal:write`

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();

$request = new Operations\CustomerPortalBenefitGrantsListRequest(
    organizationId: [
        '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
    ],
);
$requestSecurity = new Operations\CustomerPortalBenefitGrantsListSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$responses = $sdk->customerPortal->benefitGrants->list(
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

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [Operations\CustomerPortalBenefitGrantsListRequest](../../Models/Operations/CustomerPortalBenefitGrantsListRequest.md)   | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |
| `security`                                                                                                               | [Operations\CustomerPortalBenefitGrantsListSecurity](../../Models/Operations/CustomerPortalBenefitGrantsListSecurity.md) | :heavy_check_mark:                                                                                                       | The security requirements to use for the request.                                                                        |

### Response

**[?Operations\CustomerPortalBenefitGrantsListResponse](../../Models/Operations/CustomerPortalBenefitGrantsListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

Update a benefit grant for the authenticated customer.

**Scopes**: `customer_portal:write`

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Components;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();


$requestSecurity = new Operations\CustomerPortalBenefitGrantsUpdateSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$response = $sdk->customerPortal->benefitGrants->update(
    security: $requestSecurity,
    id: '<value>',
    customerBenefitGrantUpdate: new Components\CustomerBenefitGrantLicenseKeysUpdate()

);

if ($response->customerBenefitGrant !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                   | Type                                                                                                                                                                                                                                                                                                        | Required                                                                                                                                                                                                                                                                                                    | Description                                                                                                                                                                                                                                                                                                 |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                                                                                                                                                                                                                  | [Operations\CustomerPortalBenefitGrantsUpdateSecurity](../../Models/Operations/CustomerPortalBenefitGrantsUpdateSecurity.md)                                                                                                                                                                                | :heavy_check_mark:                                                                                                                                                                                                                                                                                          | The security requirements to use for the request.                                                                                                                                                                                                                                                           |
| `id`                                                                                                                                                                                                                                                                                                        | *string*                                                                                                                                                                                                                                                                                                    | :heavy_check_mark:                                                                                                                                                                                                                                                                                          | The benefit grant ID.                                                                                                                                                                                                                                                                                       |
| `customerBenefitGrantUpdate`                                                                                                                                                                                                                                                                                | [Components\CustomerBenefitGrantDiscordUpdate\|Components\CustomerBenefitGrantGitHubRepositoryUpdate\|Components\CustomerBenefitGrantDownloadablesUpdate\|Components\CustomerBenefitGrantLicenseKeysUpdate\|Components\CustomerBenefitGrantCustomUpdate](../../Models/Components/CustomerBenefitGrantUpdate.md) | :heavy_check_mark:                                                                                                                                                                                                                                                                                          | N/A                                                                                                                                                                                                                                                                                                         |

### Response

**[?Operations\CustomerPortalBenefitGrantsUpdateResponse](../../Models/Operations/CustomerPortalBenefitGrantsUpdateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\NotPermitted        | 403                        | application/json           |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |