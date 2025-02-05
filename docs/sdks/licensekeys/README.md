# LicenseKeys
(*licenseKeys*)

## Overview

### Available Operations

* [get](#get) - Get License Key
* [getActivation](#getactivation) - Get Activation
* [list](#list) - List License Keys
* [update](#update) - Update License Key

## get

Get a license key.

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



$response = $sdk->licenseKeys->get(
    id: '<value>'
);

if ($response->licenseKeyWithActivations !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\LicenseKeysGetResponse](../../Models/Operations/LicenseKeysGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\Unauthorized        | 401                        | application/json           |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## getActivation

Get a license key activation.

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



$response = $sdk->licenseKeys->getActivation(
    id: '<value>',
    activationId: '<value>'

);

if ($response->licenseKeyActivationRead !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | N/A                |
| `activationId`     | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\LicenseKeysGetActivationResponse](../../Models/Operations/LicenseKeysGetActivationResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\Unauthorized        | 401                        | application/json           |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## list

Get license keys connected to the given organization & filters.

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



$responses = $sdk->licenseKeys->list(
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

| Parameter                                                                                     | Type                                                                                          | Required                                                                                      | Description                                                                                   |
| --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- |
| `page`                                                                                        | *?int*                                                                                        | :heavy_minus_sign:                                                                            | Page number, defaults to 1.                                                                   |
| `limit`                                                                                       | *?int*                                                                                        | :heavy_minus_sign:                                                                            | Size of a page, defaults to 10. Maximum is 100.                                               |
| `organizationId`                                                                              | [string\|array\|null](../../Models/Operations/LicenseKeysListQueryParamOrganizationIDFilter.md) | :heavy_minus_sign:                                                                            | Filter by organization ID.                                                                    |
| `benefitId`                                                                                   | [string\|array\|null](../../Models/Operations/QueryParamBenefitIDFilter.md)                   | :heavy_minus_sign:                                                                            | Filter by benefit ID.                                                                         |

### Response

**[?Operations\LicenseKeysListResponse](../../Models/Operations/LicenseKeysListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\Unauthorized        | 401                        | application/json           |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

Update a license key.

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

$licenseKeyUpdate = new Components\LicenseKeyUpdate();

$response = $sdk->licenseKeys->update(
    id: '<value>',
    licenseKeyUpdate: $licenseKeyUpdate

);

if ($response->licenseKeyRead !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `id`                                                                       | *string*                                                                   | :heavy_check_mark:                                                         | N/A                                                                        |
| `licenseKeyUpdate`                                                         | [Components\LicenseKeyUpdate](../../Models/Components/LicenseKeyUpdate.md) | :heavy_check_mark:                                                         | N/A                                                                        |

### Response

**[?Operations\LicenseKeysUpdateResponse](../../Models/Operations/LicenseKeysUpdateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\Unauthorized        | 401                        | application/json           |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |