# BenefitGrants
(*customerPortal->benefitGrants*)

## Overview

### Available Operations

* [get](#get) - Get Benefit Grant
* [list](#list) - List Benefit Grants
* [update](#update) - Update Benefit Grant

## get

Get a benefit grant by ID for the authenticated customer or user.

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



$response = $sdk->customerPortal->benefitGrants->get(
    id: '<value>'
);

if ($response->customerBenefitGrant !== null) {
    // handle response
}
```

### Parameters

| Parameter             | Type                  | Required              | Description           |
| --------------------- | --------------------- | --------------------- | --------------------- |
| `id`                  | *string*              | :heavy_check_mark:    | The benefit grant ID. |

### Response

**[?Operations\CustomerPortalBenefitGrantsGetResponse](../../Models/Operations/CustomerPortalBenefitGrantsGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## list

List benefits grants of the authenticated customer or user.

### Example Usage

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

$request = new Operations\CustomerPortalBenefitGrantsListRequest();

$responses = $sdk->customerPortal->benefitGrants->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [Operations\CustomerPortalBenefitGrantsListRequest](../../Models/Operations/CustomerPortalBenefitGrantsListRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\CustomerPortalBenefitGrantsListResponse](../../Models/Operations/CustomerPortalBenefitGrantsListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

Update a benefit grant for the authenticated customer or user.

### Example Usage

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



$response = $sdk->customerPortal->benefitGrants->update(
    id: '<value>',
    customerBenefitGrantUpdate: new Components\CustomerBenefitGrantLicenseKeysUpdate()

);

if ($response->customerBenefitGrant !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                            | Type                                                                                                                                                                                                                                                                                                                                                 | Required                                                                                                                                                                                                                                                                                                                                             | Description                                                                                                                                                                                                                                                                                                                                          |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `id`                                                                                                                                                                                                                                                                                                                                                 | *string*                                                                                                                                                                                                                                                                                                                                             | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                   | The benefit grant ID.                                                                                                                                                                                                                                                                                                                                |
| `customerBenefitGrantUpdate`                                                                                                                                                                                                                                                                                                                         | [Components\CustomerBenefitGrantDiscordUpdate\|Components\CustomerBenefitGrantGitHubRepositoryUpdate\|Components\CustomerBenefitGrantDownloadablesUpdate\|Components\CustomerBenefitGrantLicenseKeysUpdate\|Components\CustomerBenefitGrantAdsUpdate\|Components\CustomerBenefitGrantCustomUpdate](../../Models/Components/CustomerBenefitGrantUpdate.md) | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                   | N/A                                                                                                                                                                                                                                                                                                                                                  |

### Response

**[?Operations\CustomerPortalBenefitGrantsUpdateResponse](../../Models/Operations/CustomerPortalBenefitGrantsUpdateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\NotPermitted        | 403                        | application/json           |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |