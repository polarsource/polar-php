# Subscriptions
(*subscriptions*)

## Overview

### Available Operations

* [list](#list) - List Subscriptions
* [create](#create) - Create Subscription
* [export](#export) - Export Subscriptions
* [get](#get) - Get Subscription
* [update](#update) - Update Subscription
* [revoke](#revoke) - Revoke Subscription

## list

List subscriptions.

**Scopes**: `subscriptions:read` `subscriptions:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="subscriptions:list" method="get" path="/v1/subscriptions/" -->
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

$request = new Operations\SubscriptionsListRequest(
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
);

$responses = $sdk->subscriptions->list(
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
| `$request`                                                                                 | [Operations\SubscriptionsListRequest](../../Models/Operations/SubscriptionsListRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\SubscriptionsListResponse](../../Models/Operations/SubscriptionsListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## create

Create a subscription programmatically.

This endpoint only allows to create subscription on free products.
For paid products, use the checkout flow.

No initial order will be created and no confirmation email will be sent.

**Scopes**: `subscriptions:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="subscriptions:create" method="post" path="/v1/subscriptions/" -->
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

$request = new Components\SubscriptionCreateCustomer(
    productId: 'd8dd2de1-21b7-4a41-8bc3-ce909c0cfe23',
    customerId: '992fae2a-2a17-4b7a-8d9e-e287cf90131b',
);

$response = $sdk->subscriptions->create(
    request: $request
);

if ($response->subscription !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                              | [Components\SubscriptionCreateCustomer\|Components\SubscriptionCreateExternalCustomer](../../Models/Operations/SubscriptionsCreateSubscriptionCreate.md) | :heavy_check_mark:                                                                                                                                      | The request object to use for the request.                                                                                                              |

### Response

**[?Operations\SubscriptionsCreateResponse](../../Models/Operations/SubscriptionsCreateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## export

Export subscriptions as a CSV file.

**Scopes**: `subscriptions:read` `subscriptions:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="subscriptions:export" method="get" path="/v1/subscriptions/export" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->subscriptions->export(
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737'
);

if ($response->any !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                      | Type                                                           | Required                                                       | Description                                                    |
| -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- |
| `organizationId`                                               | [string\|array\|null](../../Models/Operations/OrganizationId.md) | :heavy_minus_sign:                                             | Filter by organization ID.                                     |

### Response

**[?Operations\SubscriptionsExportResponse](../../Models/Operations/SubscriptionsExportResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Get a subscription by ID.

**Scopes**: `subscriptions:read` `subscriptions:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="subscriptions:get" method="get" path="/v1/subscriptions/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->subscriptions->get(
    id: '<value>'
);

if ($response->subscription !== null) {
    // handle response
}
```

### Parameters

| Parameter            | Type                 | Required             | Description          |
| -------------------- | -------------------- | -------------------- | -------------------- |
| `id`                 | *string*             | :heavy_check_mark:   | The subscription ID. |

### Response

**[?Operations\SubscriptionsGetResponse](../../Models/Operations/SubscriptionsGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

Update a subscription.

**Scopes**: `subscriptions:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="subscriptions:update" method="patch" path="/v1/subscriptions/{id}" -->
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



$response = $sdk->subscriptions->update(
    id: '<value>',
    subscriptionUpdate: new Components\SubscriptionUpdateProduct(
        productId: '<value>',
    )

);

if ($response->subscription !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                     | Type                                                                                                                                                                                                                                                          | Required                                                                                                                                                                                                                                                      | Description                                                                                                                                                                                                                                                   |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `id`                                                                                                                                                                                                                                                          | *string*                                                                                                                                                                                                                                                      | :heavy_check_mark:                                                                                                                                                                                                                                            | The subscription ID.                                                                                                                                                                                                                                          |
| `subscriptionUpdate`                                                                                                                                                                                                                                          | [Components\SubscriptionUpdateProduct\|Components\SubscriptionUpdateDiscount\|Components\SubscriptionUpdateTrial\|Components\SubscriptionUpdateSeats\|Components\SubscriptionCancel\|Components\SubscriptionRevoke](../../Models/Components/SubscriptionUpdate.md) | :heavy_check_mark:                                                                                                                                                                                                                                            | N/A                                                                                                                                                                                                                                                           |

### Response

**[?Operations\SubscriptionsUpdateResponse](../../Models/Operations/SubscriptionsUpdateResponse.md)**

### Errors

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\AlreadyCanceledSubscription | 403                                | application/json                   |
| Errors\ResourceNotFound            | 404                                | application/json                   |
| Errors\SubscriptionLocked          | 409                                | application/json                   |
| Errors\HTTPValidationError         | 422                                | application/json                   |
| Errors\APIException                | 4XX, 5XX                           | \*/\*                              |

## revoke

Revoke a subscription, i.e cancel immediately.

**Scopes**: `subscriptions:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="subscriptions:revoke" method="delete" path="/v1/subscriptions/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->subscriptions->revoke(
    id: '<value>'
);

if ($response->subscription !== null) {
    // handle response
}
```

### Parameters

| Parameter            | Type                 | Required             | Description          |
| -------------------- | -------------------- | -------------------- | -------------------- |
| `id`                 | *string*             | :heavy_check_mark:   | The subscription ID. |

### Response

**[?Operations\SubscriptionsRevokeResponse](../../Models/Operations/SubscriptionsRevokeResponse.md)**

### Errors

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\AlreadyCanceledSubscription | 403                                | application/json                   |
| Errors\ResourceNotFound            | 404                                | application/json                   |
| Errors\SubscriptionLocked          | 409                                | application/json                   |
| Errors\HTTPValidationError         | 422                                | application/json                   |
| Errors\APIException                | 4XX, 5XX                           | \*/\*                              |