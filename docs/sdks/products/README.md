# Products
(*products*)

## Overview

### Available Operations

* [list](#list) - List Products
* [create](#create) - Create Product
* [get](#get) - Get Product
* [update](#update) - Update Product
* [updateBenefits](#updatebenefits) - Update Product Benefits

## list

List products.

**Scopes**: `products:read` `products:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="products:list" method="get" path="/v1/products/" -->
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

$request = new Operations\ProductsListRequest(
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
);

$responses = $sdk->products->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ProductsListRequest](../../Models/Operations/ProductsListRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ProductsListResponse](../../Models/Operations/ProductsListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## create

Create a product.

**Scopes**: `products:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="products:create" method="post" path="/v1/products/" -->
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

$request = new Components\ProductCreateOneTime(
    name: '<value>',
    prices: [
        new Components\ProductPriceFixedCreate(
            priceAmount: 677078,
        ),
        new Components\ProductPriceCustomCreate(),
    ],
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
    recurringInterval: 'year',
);

$response = $sdk->products->create(
    request: $request
);

if ($response->product !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [Components\ProductCreateRecurring\|Components\ProductCreateOneTime](../../Models/Components/ProductCreate.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |

### Response

**[?Operations\ProductsCreateResponse](../../Models/Operations/ProductsCreateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Get a product by ID.

**Scopes**: `products:read` `products:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="products:get" method="get" path="/v1/products/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->products->get(
    id: '<value>'
);

if ($response->product !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\ProductsGetResponse](../../Models/Operations/ProductsGetResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\PolarExceptionsResourceNotFound | 404                                    | application/json                       |
| Errors\HTTPValidationError             | 422                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## update

Update a product.

**Scopes**: `products:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="products:update" method="patch" path="/v1/products/{id}" -->
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

$productUpdate = new Components\ProductUpdate();

$response = $sdk->products->update(
    id: '<value>',
    productUpdate: $productUpdate

);

if ($response->product !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                            | Type                                                                 | Required                                                             | Description                                                          |
| -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `id`                                                                 | *string*                                                             | :heavy_check_mark:                                                   | N/A                                                                  |
| `productUpdate`                                                      | [Components\ProductUpdate](../../Models/Components/ProductUpdate.md) | :heavy_check_mark:                                                   | N/A                                                                  |

### Response

**[?Operations\ProductsUpdateResponse](../../Models/Operations/ProductsUpdateResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\PolarExceptionsNotPermitted     | 403                                    | application/json                       |
| Errors\PolarExceptionsResourceNotFound | 404                                    | application/json                       |
| Errors\HTTPValidationError             | 422                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |

## updateBenefits

Update benefits granted by a product.

**Scopes**: `products:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="products:update_benefits" method="post" path="/v1/products/{id}/benefits" -->
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

$productBenefitsUpdate = new Components\ProductBenefitsUpdate(
    benefits: [
        '<value 1>',
        '<value 2>',
        '<value 3>',
    ],
);

$response = $sdk->products->updateBenefits(
    id: '<value>',
    productBenefitsUpdate: $productBenefitsUpdate

);

if ($response->product !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `id`                                                                                 | *string*                                                                             | :heavy_check_mark:                                                                   | N/A                                                                                  |
| `productBenefitsUpdate`                                                              | [Components\ProductBenefitsUpdate](../../Models/Components/ProductBenefitsUpdate.md) | :heavy_check_mark:                                                                   | N/A                                                                                  |

### Response

**[?Operations\ProductsUpdateBenefitsResponse](../../Models/Operations/ProductsUpdateBenefitsResponse.md)**

### Errors

| Error Type                             | Status Code                            | Content Type                           |
| -------------------------------------- | -------------------------------------- | -------------------------------------- |
| Errors\PolarExceptionsNotPermitted     | 403                                    | application/json                       |
| Errors\PolarExceptionsResourceNotFound | 404                                    | application/json                       |
| Errors\HTTPValidationError             | 422                                    | application/json                       |
| Errors\APIException                    | 4XX, 5XX                               | \*/\*                                  |