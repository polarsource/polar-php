# Checkouts
(*checkouts*)

## Overview

### Available Operations

* [~~create~~](#create) - Create Checkout :warning: **Deprecated** Use [create](docs/sdks/custom/README.md#create) instead.
* [~~get~~](#get) - Get Checkout :warning: **Deprecated**

## ~~create~~

Create a checkout session.

> :warning: **DEPRECATED**: This API is deprecated. We recommend you to use the new custom checkout API, which is more flexible and powerful. Please refer to the documentation for more information.. Use `create` instead.

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

$request = new Components\CheckoutLegacyCreate(
    productPriceId: '<value>',
    successUrl: 'https://probable-heating.com/',
);

$response = $sdk->checkouts->create(
    request: $request
);

if ($response->checkoutLegacy !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Components\CheckoutLegacyCreate](../../Models/Components/CheckoutLegacyCreate.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CheckoutsCreateResponse](../../Models/Operations/CheckoutsCreateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## ~~get~~

Get an active checkout session by ID.

> :warning: **DEPRECATED**: This API is deprecated. We recommend you to use the new custom checkout API, which is more flexible and powerful. Please refer to the documentation for more information..

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



$response = $sdk->checkouts->get(
    id: '<id>'
);

if ($response->checkoutLegacy !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\CheckoutsGetResponse](../../Models/Operations/CheckoutsGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |