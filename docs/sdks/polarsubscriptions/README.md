# PolarSubscriptions
(*customerPortal->subscriptions*)

## Overview

### Available Operations

* [list](#list) - List Subscriptions
* [get](#get) - Get Subscription
* [update](#update) - Update Subscription
* [cancel](#cancel) - Cancel Subscription

## list

List subscriptions of the authenticated customer.

**Scopes**: `customer_portal:read` `customer_portal:write`

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();

$request = new Operations\CustomerPortalSubscriptionsListRequest(
    organizationId: [
        '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
    ],
);
$requestSecurity = new Operations\CustomerPortalSubscriptionsListSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$responses = $sdk->customerPortal->subscriptions->list(
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
| `$request`                                                                                                               | [Operations\CustomerPortalSubscriptionsListRequest](../../Models/Operations/CustomerPortalSubscriptionsListRequest.md)   | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |
| `security`                                                                                                               | [Operations\CustomerPortalSubscriptionsListSecurity](../../Models/Operations/CustomerPortalSubscriptionsListSecurity.md) | :heavy_check_mark:                                                                                                       | The security requirements to use for the request.                                                                        |

### Response

**[?Operations\CustomerPortalSubscriptionsListResponse](../../Models/Operations/CustomerPortalSubscriptionsListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Get a subscription for the authenticated customer.

**Scopes**: `customer_portal:read` `customer_portal:write`

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();


$requestSecurity = new Operations\CustomerPortalSubscriptionsGetSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$response = $sdk->customerPortal->subscriptions->get(
    security: $requestSecurity,
    id: '<value>'

);

if ($response->customerSubscription !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                             | [Operations\CustomerPortalSubscriptionsGetSecurity](../../Models/Operations/CustomerPortalSubscriptionsGetSecurity.md) | :heavy_check_mark:                                                                                                     | The security requirements to use for the request.                                                                      |
| `id`                                                                                                                   | *string*                                                                                                               | :heavy_check_mark:                                                                                                     | The subscription ID.                                                                                                   |

### Response

**[?Operations\CustomerPortalSubscriptionsGetResponse](../../Models/Operations/CustomerPortalSubscriptionsGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

Update a subscription of the authenticated customer.

**Scopes**: `customer_portal:write`

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Components;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();


$requestSecurity = new Operations\CustomerPortalSubscriptionsUpdateSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$response = $sdk->customerPortal->subscriptions->update(
    security: $requestSecurity,
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
| `security`                                                                                                                                  | [Operations\CustomerPortalSubscriptionsUpdateSecurity](../../Models/Operations/CustomerPortalSubscriptionsUpdateSecurity.md)                | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |
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

## cancel

Cancel a subscription of the authenticated customer.

**Scopes**: `customer_portal:write`

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();


$requestSecurity = new Operations\CustomerPortalSubscriptionsCancelSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$response = $sdk->customerPortal->subscriptions->cancel(
    security: $requestSecurity,
    id: '<value>'

);

if ($response->customerSubscription !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                                   | [Operations\CustomerPortalSubscriptionsCancelSecurity](../../Models/Operations/CustomerPortalSubscriptionsCancelSecurity.md) | :heavy_check_mark:                                                                                                           | The security requirements to use for the request.                                                                            |
| `id`                                                                                                                         | *string*                                                                                                                     | :heavy_check_mark:                                                                                                           | The subscription ID.                                                                                                         |

### Response

**[?Operations\CustomerPortalSubscriptionsCancelResponse](../../Models/Operations/CustomerPortalSubscriptionsCancelResponse.md)**

### Errors

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\AlreadyCanceledSubscription | 403                                | application/json                   |
| Errors\ResourceNotFound            | 404                                | application/json                   |
| Errors\HTTPValidationError         | 422                                | application/json                   |
| Errors\APIException                | 4XX, 5XX                           | \*/\*                              |