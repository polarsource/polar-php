# Checkouts
(*checkouts*)

## Overview

### Available Operations

* [list](#list) - List Checkout Sessions
* [create](#create) - Create Checkout Session
* [get](#get) - Get Checkout Session
* [update](#update) - Update Checkout Session
* [clientGet](#clientget) - Get Checkout Session from Client
* [clientUpdate](#clientupdate) - Update Checkout Session from Client
* [clientConfirm](#clientconfirm) - Confirm Checkout Session from Client

## list

List checkout sessions.

**Scopes**: `checkouts:read` `checkouts:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="checkouts:list" method="get" path="/v1/checkouts/" -->
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

$request = new Operations\CheckoutsListRequest(
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
);

$responses = $sdk->checkouts->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\CheckoutsListRequest](../../Models/Operations/CheckoutsListRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CheckoutsListResponse](../../Models/Operations/CheckoutsListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## create

Create a checkout session.

**Scopes**: `checkouts:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="checkouts:create" method="post" path="/v1/checkouts/" -->
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

$request = new Components\CheckoutCreate(
    customerBillingAddress: new Components\Address(
        country: 'US',
    ),
    products: [
        '<value 1>',
        '<value 2>',
        '<value 3>',
    ],
);

$response = $sdk->checkouts->create(
    request: $request
);

if ($response->checkout !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `$request`                                                             | [Components\CheckoutCreate](../../Models/Components/CheckoutCreate.md) | :heavy_check_mark:                                                     | The request object to use for the request.                             |

### Response

**[?Operations\CheckoutsCreateResponse](../../Models/Operations/CheckoutsCreateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Get a checkout session by ID.

**Scopes**: `checkouts:read` `checkouts:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="checkouts:get" method="get" path="/v1/checkouts/{id}" -->
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
    id: '<value>'
);

if ($response->checkout !== null) {
    // handle response
}
```

### Parameters

| Parameter                | Type                     | Required                 | Description              |
| ------------------------ | ------------------------ | ------------------------ | ------------------------ |
| `id`                     | *string*                 | :heavy_check_mark:       | The checkout session ID. |

### Response

**[?Operations\CheckoutsGetResponse](../../Models/Operations/CheckoutsGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

Update a checkout session.

**Scopes**: `checkouts:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="checkouts:update" method="patch" path="/v1/checkouts/{id}" -->
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

$checkoutUpdate = new Components\CheckoutUpdate(
    customerBillingAddress: new Components\Address(
        country: 'US',
    ),
);

$response = $sdk->checkouts->update(
    id: '<value>',
    checkoutUpdate: $checkoutUpdate

);

if ($response->checkout !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `id`                                                                   | *string*                                                               | :heavy_check_mark:                                                     | The checkout session ID.                                               |
| `checkoutUpdate`                                                       | [Components\CheckoutUpdate](../../Models/Components/CheckoutUpdate.md) | :heavy_check_mark:                                                     | N/A                                                                    |

### Response

**[?Operations\CheckoutsUpdateResponse](../../Models/Operations/CheckoutsUpdateResponse.md)**

### Errors

| Error Type                            | Status Code                           | Content Type                          |
| ------------------------------------- | ------------------------------------- | ------------------------------------- |
| Errors\AlreadyActiveSubscriptionError | 403                                   | application/json                      |
| Errors\NotOpenCheckout                | 403                                   | application/json                      |
| Errors\PaymentNotReady                | 403                                   | application/json                      |
| Errors\ResourceNotFound               | 404                                   | application/json                      |
| Errors\HTTPValidationError            | 422                                   | application/json                      |
| Errors\APIException                   | 4XX, 5XX                              | \*/\*                                 |

## clientGet

Get a checkout session by client secret.

### Example Usage

<!-- UsageSnippet language="php" operationID="checkouts:client_get" method="get" path="/v1/checkouts/client/{client_secret}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->checkouts->clientGet(
    clientSecret: '<value>'
);

if ($response->checkoutPublic !== null) {
    // handle response
}
```

### Parameters

| Parameter                           | Type                                | Required                            | Description                         |
| ----------------------------------- | ----------------------------------- | ----------------------------------- | ----------------------------------- |
| `clientSecret`                      | *string*                            | :heavy_check_mark:                  | The checkout session client secret. |

### Response

**[?Operations\CheckoutsClientGetResponse](../../Models/Operations/CheckoutsClientGetResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\ResourceNotFound     | 404                         | application/json            |
| Errors\ExpiredCheckoutError | 410                         | application/json            |
| Errors\HTTPValidationError  | 422                         | application/json            |
| Errors\APIException         | 4XX, 5XX                    | \*/\*                       |

## clientUpdate

Update a checkout session by client secret.

### Example Usage

<!-- UsageSnippet language="php" operationID="checkouts:client_update" method="patch" path="/v1/checkouts/client/{client_secret}" -->
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

$checkoutUpdatePublic = new Components\CheckoutUpdatePublic(
    customerBillingAddress: null,
);

$response = $sdk->checkouts->clientUpdate(
    clientSecret: '<value>',
    checkoutUpdatePublic: $checkoutUpdatePublic

);

if ($response->checkoutPublic !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `clientSecret`                                                                     | *string*                                                                           | :heavy_check_mark:                                                                 | The checkout session client secret.                                                |
| `checkoutUpdatePublic`                                                             | [Components\CheckoutUpdatePublic](../../Models/Components/CheckoutUpdatePublic.md) | :heavy_check_mark:                                                                 | N/A                                                                                |

### Response

**[?Operations\CheckoutsClientUpdateResponse](../../Models/Operations/CheckoutsClientUpdateResponse.md)**

### Errors

| Error Type                            | Status Code                           | Content Type                          |
| ------------------------------------- | ------------------------------------- | ------------------------------------- |
| Errors\AlreadyActiveSubscriptionError | 403                                   | application/json                      |
| Errors\NotOpenCheckout                | 403                                   | application/json                      |
| Errors\PaymentNotReady                | 403                                   | application/json                      |
| Errors\ResourceNotFound               | 404                                   | application/json                      |
| Errors\ExpiredCheckoutError           | 410                                   | application/json                      |
| Errors\HTTPValidationError            | 422                                   | application/json                      |
| Errors\APIException                   | 4XX, 5XX                              | \*/\*                                 |

## clientConfirm

Confirm a checkout session by client secret.

Orders and subscriptions will be processed.

### Example Usage

<!-- UsageSnippet language="php" operationID="checkouts:client_confirm" method="post" path="/v1/checkouts/client/{client_secret}/confirm" -->
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

$checkoutConfirmStripe = new Components\CheckoutConfirmStripe(
    customerBillingAddress: new Components\Address(
        country: 'US',
    ),
);

$response = $sdk->checkouts->clientConfirm(
    clientSecret: '<value>',
    checkoutConfirmStripe: $checkoutConfirmStripe

);

if ($response->checkoutPublicConfirmed !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `clientSecret`                                                                       | *string*                                                                             | :heavy_check_mark:                                                                   | The checkout session client secret.                                                  |
| `checkoutConfirmStripe`                                                              | [Components\CheckoutConfirmStripe](../../Models/Components/CheckoutConfirmStripe.md) | :heavy_check_mark:                                                                   | N/A                                                                                  |

### Response

**[?Operations\CheckoutsClientConfirmResponse](../../Models/Operations/CheckoutsClientConfirmResponse.md)**

### Errors

| Error Type                            | Status Code                           | Content Type                          |
| ------------------------------------- | ------------------------------------- | ------------------------------------- |
| Errors\PaymentError                   | 400                                   | application/json                      |
| Errors\AlreadyActiveSubscriptionError | 403                                   | application/json                      |
| Errors\NotOpenCheckout                | 403                                   | application/json                      |
| Errors\PaymentNotReady                | 403                                   | application/json                      |
| Errors\ResourceNotFound               | 404                                   | application/json                      |
| Errors\ExpiredCheckoutError           | 410                                   | application/json                      |
| Errors\HTTPValidationError            | 422                                   | application/json                      |
| Errors\APIException                   | 4XX, 5XX                              | \*/\*                                 |