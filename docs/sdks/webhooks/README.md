# Webhooks
(*webhooks*)

## Overview

### Available Operations

* [listWebhookEndpoints](#listwebhookendpoints) - List Webhook Endpoints
* [createWebhookEndpoint](#createwebhookendpoint) - Create Webhook Endpoint
* [getWebhookEndpoint](#getwebhookendpoint) - Get Webhook Endpoint
* [updateWebhookEndpoint](#updatewebhookendpoint) - Update Webhook Endpoint
* [deleteWebhookEndpoint](#deletewebhookendpoint) - Delete Webhook Endpoint
* [resetWebhookEndpointSecret](#resetwebhookendpointsecret) - Reset Webhook Endpoint Secret
* [listWebhookDeliveries](#listwebhookdeliveries) - List Webhook Deliveries
* [redeliverWebhookEvent](#redeliverwebhookevent) - Redeliver Webhook Event

## listWebhookEndpoints

List webhook endpoints.

**Scopes**: `webhooks:read` `webhooks:write`

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



$responses = $sdk->webhooks->listWebhookEndpoints(
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
    page: 1,
    limit: 10

);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `organizationId`                                                         | [string\|array\|null](../../Models/Operations/QueryParamOrganizationId.md) | :heavy_minus_sign:                                                       | Filter by organization ID.                                               |
| `page`                                                                   | *?int*                                                                   | :heavy_minus_sign:                                                       | Page number, defaults to 1.                                              |
| `limit`                                                                  | *?int*                                                                   | :heavy_minus_sign:                                                       | Size of a page, defaults to 10. Maximum is 100.                          |

### Response

**[?Operations\WebhooksListWebhookEndpointsResponse](../../Models/Operations/WebhooksListWebhookEndpointsResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## createWebhookEndpoint

Create a webhook endpoint.

**Scopes**: `webhooks:write`

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

$request = new Components\WebhookEndpointCreate(
    url: 'https://webhook.site/cb791d80-f26e-4f8c-be88-6e56054192b0',
    format: Components\WebhookFormat::Slack,
    events: [
        Components\WebhookEventType::SubscriptionUncanceled,
    ],
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
);

$response = $sdk->webhooks->createWebhookEndpoint(
    request: $request
);

if ($response->webhookEndpoint !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Components\WebhookEndpointCreate](../../Models/Components/WebhookEndpointCreate.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\WebhooksCreateWebhookEndpointResponse](../../Models/Operations/WebhooksCreateWebhookEndpointResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## getWebhookEndpoint

Get a webhook endpoint by ID.

**Scopes**: `webhooks:read` `webhooks:write`

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



$response = $sdk->webhooks->getWebhookEndpoint(
    id: '<value>'
);

if ($response->webhookEndpoint !== null) {
    // handle response
}
```

### Parameters

| Parameter                | Type                     | Required                 | Description              |
| ------------------------ | ------------------------ | ------------------------ | ------------------------ |
| `id`                     | *string*                 | :heavy_check_mark:       | The webhook endpoint ID. |

### Response

**[?Operations\WebhooksGetWebhookEndpointResponse](../../Models/Operations/WebhooksGetWebhookEndpointResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## updateWebhookEndpoint

Update a webhook endpoint.

**Scopes**: `webhooks:write`

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

$webhookEndpointUpdate = new Components\WebhookEndpointUpdate(
    url: 'https://webhook.site/cb791d80-f26e-4f8c-be88-6e56054192b0',
);

$response = $sdk->webhooks->updateWebhookEndpoint(
    id: '<value>',
    webhookEndpointUpdate: $webhookEndpointUpdate

);

if ($response->webhookEndpoint !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `id`                                                                                 | *string*                                                                             | :heavy_check_mark:                                                                   | The webhook endpoint ID.                                                             |
| `webhookEndpointUpdate`                                                              | [Components\WebhookEndpointUpdate](../../Models/Components/WebhookEndpointUpdate.md) | :heavy_check_mark:                                                                   | N/A                                                                                  |

### Response

**[?Operations\WebhooksUpdateWebhookEndpointResponse](../../Models/Operations/WebhooksUpdateWebhookEndpointResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## deleteWebhookEndpoint

Delete a webhook endpoint.

**Scopes**: `webhooks:write`

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



$response = $sdk->webhooks->deleteWebhookEndpoint(
    id: '<value>'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                | Type                     | Required                 | Description              |
| ------------------------ | ------------------------ | ------------------------ | ------------------------ |
| `id`                     | *string*                 | :heavy_check_mark:       | The webhook endpoint ID. |

### Response

**[?Operations\WebhooksDeleteWebhookEndpointResponse](../../Models/Operations/WebhooksDeleteWebhookEndpointResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## resetWebhookEndpointSecret

Regenerate a webhook endpoint secret.

**Scopes**: `webhooks:write`

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



$response = $sdk->webhooks->resetWebhookEndpointSecret(
    id: '<value>'
);

if ($response->webhookEndpoint !== null) {
    // handle response
}
```

### Parameters

| Parameter                | Type                     | Required                 | Description              |
| ------------------------ | ------------------------ | ------------------------ | ------------------------ |
| `id`                     | *string*                 | :heavy_check_mark:       | The webhook endpoint ID. |

### Response

**[?Operations\WebhooksResetWebhookEndpointSecretResponse](../../Models/Operations/WebhooksResetWebhookEndpointSecretResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## listWebhookDeliveries

List webhook deliveries.

Deliveries are all the attempts to deliver a webhook event to an endpoint.

**Scopes**: `webhooks:read` `webhooks:write`

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



$responses = $sdk->webhooks->listWebhookDeliveries(
    page: 1,
    limit: 10

);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                  | Type                                                       | Required                                                   | Description                                                |
| ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- |
| `endpointId`                                               | [string\|array\|null](../../Models/Operations/EndpointId.md) | :heavy_minus_sign:                                         | Filter by webhook endpoint ID.                             |
| `page`                                                     | *?int*                                                     | :heavy_minus_sign:                                         | Page number, defaults to 1.                                |
| `limit`                                                    | *?int*                                                     | :heavy_minus_sign:                                         | Size of a page, defaults to 10. Maximum is 100.            |

### Response

**[?Operations\WebhooksListWebhookDeliveriesResponse](../../Models/Operations/WebhooksListWebhookDeliveriesResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## redeliverWebhookEvent

Schedule the re-delivery of a webhook event.

**Scopes**: `webhooks:write`

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



$response = $sdk->webhooks->redeliverWebhookEvent(
    id: '<value>'
);

if ($response->any !== null) {
    // handle response
}
```

### Parameters

| Parameter             | Type                  | Required              | Description           |
| --------------------- | --------------------- | --------------------- | --------------------- |
| `id`                  | *string*              | :heavy_check_mark:    | The webhook event ID. |

### Response

**[?Operations\WebhooksRedeliverWebhookEventResponse](../../Models/Operations/WebhooksRedeliverWebhookEventResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |