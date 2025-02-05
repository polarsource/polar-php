# Custom
(*checkouts->custom*)

## Overview

### Available Operations

* [clientConfirm](#clientconfirm) - Confirm Checkout Session from Client
* [clientGet](#clientget) - Get Checkout Session from Client
* [clientUpdate](#clientupdate) - Update Checkout Session from Client
* [create](#create) - Create Checkout Session
* [get](#get) - Get Checkout Session
* [list](#list) - List Checkout Sessions
* [update](#update) - Update Checkout Session

## clientConfirm

Confirm a checkout session by client secret.

Orders and subscriptions will be processed.

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

$checkoutConfirmStripe = new Components\CheckoutConfirmStripe();

$response = $sdk->checkouts->custom->clientConfirm(
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

**[?Operations\CheckoutsCustomClientConfirmResponse](../../Models/Operations/CheckoutsCustomClientConfirmResponse.md)**

### Errors

| Error Type                            | Status Code                           | Content Type                          |
| ------------------------------------- | ------------------------------------- | ------------------------------------- |
| Errors\AlreadyActiveSubscriptionError | 403                                   | application/json                      |
| Errors\ResourceNotFound               | 404                                   | application/json                      |
| Errors\HTTPValidationError            | 422                                   | application/json                      |
| Errors\APIException                   | 4XX, 5XX                              | \*/\*                                 |

## clientGet

Get a checkout session by client secret.

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



$response = $sdk->checkouts->custom->clientGet(
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

**[?Operations\CheckoutsCustomClientGetResponse](../../Models/Operations/CheckoutsCustomClientGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## clientUpdate

Update a checkout session by client secret.

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

$checkoutUpdatePublic = new Components\CheckoutUpdatePublic();

$response = $sdk->checkouts->custom->clientUpdate(
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

**[?Operations\CheckoutsCustomClientUpdateResponse](../../Models/Operations/CheckoutsCustomClientUpdateResponse.md)**

### Errors

| Error Type                            | Status Code                           | Content Type                          |
| ------------------------------------- | ------------------------------------- | ------------------------------------- |
| Errors\AlreadyActiveSubscriptionError | 403                                   | application/json                      |
| Errors\ResourceNotFound               | 404                                   | application/json                      |
| Errors\HTTPValidationError            | 422                                   | application/json                      |
| Errors\APIException                   | 4XX, 5XX                              | \*/\*                                 |

## create

Create a checkout session.

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

$request = new Components\CheckoutProductCreate(
    productId: '<value>',
);

$response = $sdk->checkouts->custom->create(
    request: $request
);

if ($response->checkout !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Components\CheckoutProductCreate\|Components\CheckoutPriceCreate](../../Models/Components/CheckoutCreate.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\CheckoutsCustomCreateResponse](../../Models/Operations/CheckoutsCustomCreateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Get a checkout session by ID.

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



$response = $sdk->checkouts->custom->get(
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

**[?Operations\CheckoutsCustomGetResponse](../../Models/Operations/CheckoutsCustomGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## list

List checkout sessions.

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

$request = new Operations\CheckoutsCustomListRequest();

$responses = $sdk->checkouts->custom->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CheckoutsCustomListRequest](../../Models/Operations/CheckoutsCustomListRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CheckoutsCustomListResponse](../../Models/Operations/CheckoutsCustomListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

Update a checkout session.

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

$checkoutUpdate = new Components\CheckoutUpdate();

$response = $sdk->checkouts->custom->update(
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

**[?Operations\CheckoutsCustomUpdateResponse](../../Models/Operations/CheckoutsCustomUpdateResponse.md)**

### Errors

| Error Type                            | Status Code                           | Content Type                          |
| ------------------------------------- | ------------------------------------- | ------------------------------------- |
| Errors\AlreadyActiveSubscriptionError | 403                                   | application/json                      |
| Errors\ResourceNotFound               | 404                                   | application/json                      |
| Errors\HTTPValidationError            | 422                                   | application/json                      |
| Errors\APIException                   | 4XX, 5XX                              | \*/\*                                 |