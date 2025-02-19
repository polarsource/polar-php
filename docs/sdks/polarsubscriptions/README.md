# PolarSubscriptions
(*customerPortal->subscriptions*)

## Overview

### Available Operations

* [cancel](#cancel) - Cancel Subscription
* [get](#get) - Get Subscription
* [list](#list) - List Subscriptions
* [update](#update) - Update Subscription

## cancel

Cancel a subscription of the authenticated customer or user.

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



$response = $sdk->customerPortal->subscriptions->cancel(
    id: '<value>'
);

if ($response->customerSubscription !== null) {
    // handle response
}
```

### Parameters

| Parameter            | Type                 | Required             | Description          |
| -------------------- | -------------------- | -------------------- | -------------------- |
| `id`                 | *string*             | :heavy_check_mark:   | The subscription ID. |

### Response

**[?Operations\CustomerPortalSubscriptionsCancelResponse](../../Models/Operations/CustomerPortalSubscriptionsCancelResponse.md)**

### Errors

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\AlreadyCanceledSubscription | 403                                | application/json                   |
| Errors\ResourceNotFound            | 404                                | application/json                   |
| Errors\HTTPValidationError         | 422                                | application/json                   |
| Errors\APIException                | 4XX, 5XX                           | \*/\*                              |

## get

Get a subscription for the authenticated customer or user.

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



$response = $sdk->customerPortal->subscriptions->get(
    id: '<value>'
);

if ($response->customerSubscription !== null) {
    // handle response
}
```

### Parameters

| Parameter            | Type                 | Required             | Description          |
| -------------------- | -------------------- | -------------------- | -------------------- |
| `id`                 | *string*             | :heavy_check_mark:   | The subscription ID. |

### Response

**[?Operations\CustomerPortalSubscriptionsGetResponse](../../Models/Operations/CustomerPortalSubscriptionsGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## list

List subscriptions of the authenticated customer or user.

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

$request = new Operations\CustomerPortalSubscriptionsListRequest();

$responses = $sdk->customerPortal->subscriptions->list(
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
| `$request`                                                                                                             | [Operations\CustomerPortalSubscriptionsListRequest](../../Models/Operations/CustomerPortalSubscriptionsListRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\CustomerPortalSubscriptionsListResponse](../../Models/Operations/CustomerPortalSubscriptionsListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

Update a subscription of the authenticated customer or user.

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



$response = $sdk->customerPortal->subscriptions->update(
    id: '<value>',
    customerSubscriptionUpdate: new Components\CustomerSubscriptionCancel()

);

if ($response->customerSubscription !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `id`                                                                                                                                        | *string*                                                                                                                                    | :heavy_check_mark:                                                                                                                          | The subscription ID.                                                                                                                        |
| `customerSubscriptionUpdate`                                                                                                                | [Components\CustomerSubscriptionUpdateProduct\|Components\CustomerSubscriptionCancel](../../Models/Components/CustomerSubscriptionUpdate.md) | :heavy_check_mark:                                                                                                                          | N/A                                                                                                                                         |

### Response

**[?Operations\CustomerPortalSubscriptionsUpdateResponse](../../Models/Operations/CustomerPortalSubscriptionsUpdateResponse.md)**

### Errors

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\AlreadyCanceledSubscription | 403                                | application/json                   |
| Errors\ResourceNotFound            | 404                                | application/json                   |
| Errors\HTTPValidationError         | 422                                | application/json                   |
| Errors\APIException                | 4XX, 5XX                           | \*/\*                              |