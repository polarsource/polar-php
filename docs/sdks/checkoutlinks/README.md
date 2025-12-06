# CheckoutLinks

## Overview

### Available Operations

* [list](#list) - List Checkout Links
* [create](#create) - Create Checkout Link
* [get](#get) - Get Checkout Link
* [update](#update) - Update Checkout Link
* [delete](#delete) - Delete Checkout Link

## list

List checkout links.

**Scopes**: `checkout_links:read` `checkout_links:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="checkout-links:list" method="get" path="/v1/checkout-links/" -->
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

$request = new Operations\CheckoutLinksListRequest(
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
);

$responses = $sdk->checkoutLinks->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CheckoutLinksListRequest](../../Models/Operations/CheckoutLinksListRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CheckoutLinksListResponse](../../Models/Operations/CheckoutLinksListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## create

Create a checkout link.

**Scopes**: `checkout_links:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="checkout-links:create" method="post" path="/v1/checkout-links/" -->
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

$request = new Components\CheckoutLinkCreateProductPrice(
    productPriceId: '<value>',
);

$response = $sdk->checkoutLinks->create(
    request: $request
);

if ($response->checkoutLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                             | Type                                                                                                                                                                  | Required                                                                                                                                                              | Description                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                            | [Components\CheckoutLinkCreateProductPrice\|Components\CheckoutLinkCreateProduct\|Components\CheckoutLinkCreateProducts](../../Models/Components/CheckoutLinkCreate.md) | :heavy_check_mark:                                                                                                                                                    | The request object to use for the request.                                                                                                                            |

### Response

**[?Operations\CheckoutLinksCreateResponse](../../Models/Operations/CheckoutLinksCreateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Get a checkout link by ID.

**Scopes**: `checkout_links:read` `checkout_links:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="checkout-links:get" method="get" path="/v1/checkout-links/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->checkoutLinks->get(
    id: '<value>'
);

if ($response->checkoutLink !== null) {
    // handle response
}
```

### Parameters

| Parameter             | Type                  | Required              | Description           |
| --------------------- | --------------------- | --------------------- | --------------------- |
| `id`                  | *string*              | :heavy_check_mark:    | The checkout link ID. |

### Response

**[?Operations\CheckoutLinksGetResponse](../../Models/Operations/CheckoutLinksGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

Update a checkout link.

**Scopes**: `checkout_links:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="checkout-links:update" method="patch" path="/v1/checkout-links/{id}" -->
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

$checkoutLinkUpdate = new Components\CheckoutLinkUpdate();

$response = $sdk->checkoutLinks->update(
    id: '<value>',
    checkoutLinkUpdate: $checkoutLinkUpdate

);

if ($response->checkoutLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `id`                                                                           | *string*                                                                       | :heavy_check_mark:                                                             | The checkout link ID.                                                          |
| `checkoutLinkUpdate`                                                           | [Components\CheckoutLinkUpdate](../../Models/Components/CheckoutLinkUpdate.md) | :heavy_check_mark:                                                             | N/A                                                                            |

### Response

**[?Operations\CheckoutLinksUpdateResponse](../../Models/Operations/CheckoutLinksUpdateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## delete

Delete a checkout link.

**Scopes**: `checkout_links:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="checkout-links:delete" method="delete" path="/v1/checkout-links/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->checkoutLinks->delete(
    id: '<value>'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter             | Type                  | Required              | Description           |
| --------------------- | --------------------- | --------------------- | --------------------- |
| `id`                  | *string*              | :heavy_check_mark:    | The checkout link ID. |

### Response

**[?Operations\CheckoutLinksDeleteResponse](../../Models/Operations/CheckoutLinksDeleteResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |