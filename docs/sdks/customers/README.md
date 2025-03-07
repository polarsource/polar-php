# Customers
(*customers*)

## Overview

### Available Operations

* [create](#create) - Create Customer
* [delete](#delete) - Delete Customer
* [deleteExternal](#deleteexternal) - Delete Customer by External ID
* [get](#get) - Get Customer
* [getExternal](#getexternal) - Get Customer by External ID
* [getState](#getstate) - Get Customer State
* [getStateExternal](#getstateexternal) - Get Customer State by External ID
* [list](#list) - List Customers
* [update](#update) - Update Customer
* [updateExternal](#updateexternal) - Update Customer by External ID

## create

Create a customer.

**Scopes**: `customers:write`

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

$request = new Components\CustomerCreate(
    email: 'customer@example.com',
    externalId: 'usr_1337',
    name: 'John Doe',
    billingAddress: new Components\Address(
        country: 'SE',
    ),
    taxId: [
        'FR61954506077',
        'eu_vat',
    ],
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
);

$response = $sdk->customers->create(
    request: $request
);

if ($response->customer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `$request`                                                             | [Components\CustomerCreate](../../Models/Components/CustomerCreate.md) | :heavy_check_mark:                                                     | The request object to use for the request.                             |

### Response

**[?Operations\CustomersCreateResponse](../../Models/Operations/CustomersCreateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## delete

Delete a customer.

Immediately cancels any active subscriptions and revokes any active benefits.

**Scopes**: `customers:write`

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



$response = $sdk->customers->delete(
    id: '<value>'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | The customer ID.   |

### Response

**[?Operations\CustomersDeleteResponse](../../Models/Operations/CustomersDeleteResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## deleteExternal

Delete a customer by external ID.

Immediately cancels any active subscriptions and revokes any active benefits.

**Scopes**: `customers:write`

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



$response = $sdk->customers->deleteExternal(
    externalId: '<id>'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                 | Type                      | Required                  | Description               |
| ------------------------- | ------------------------- | ------------------------- | ------------------------- |
| `externalId`              | *string*                  | :heavy_check_mark:        | The customer external ID. |

### Response

**[?Operations\CustomersDeleteExternalResponse](../../Models/Operations/CustomersDeleteExternalResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Get a customer by ID.

**Scopes**: `customers:read` `customers:write`

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



$response = $sdk->customers->get(
    id: '<value>'
);

if ($response->customer !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | The customer ID.   |

### Response

**[?Operations\CustomersGetResponse](../../Models/Operations/CustomersGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## getExternal

Get a customer by external ID.

**Scopes**: `customers:read` `customers:write`

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



$response = $sdk->customers->getExternal(
    externalId: '<id>'
);

if ($response->customer !== null) {
    // handle response
}
```

### Parameters

| Parameter                 | Type                      | Required                  | Description               |
| ------------------------- | ------------------------- | ------------------------- | ------------------------- |
| `externalId`              | *string*                  | :heavy_check_mark:        | The customer external ID. |

### Response

**[?Operations\CustomersGetExternalResponse](../../Models/Operations/CustomersGetExternalResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## getState

Get a customer state by ID.

The customer state includes information about
the customer's active subscriptions and benefits.

It's the ideal endpoint to use when you need to get a full overview
of a customer's status.

**Scopes**: `customers:read` `customers:write`

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



$response = $sdk->customers->getState(
    id: '<value>'
);

if ($response->customerState !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | The customer ID.   |

### Response

**[?Operations\CustomersGetStateResponse](../../Models/Operations/CustomersGetStateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## getStateExternal

Get a customer state by external ID.

The customer state includes information about
the customer's active subscriptions and benefits.

It's the ideal endpoint to use when you need to get a full overview
of a customer's status.

**Scopes**: `customers:read` `customers:write`

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



$response = $sdk->customers->getStateExternal(
    externalId: '<id>'
);

if ($response->customerState !== null) {
    // handle response
}
```

### Parameters

| Parameter                 | Type                      | Required                  | Description               |
| ------------------------- | ------------------------- | ------------------------- | ------------------------- |
| `externalId`              | *string*                  | :heavy_check_mark:        | The customer external ID. |

### Response

**[?Operations\CustomersGetStateExternalResponse](../../Models/Operations/CustomersGetStateExternalResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## list

List customers.

**Scopes**: `customers:read` `customers:write`

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

$request = new Operations\CustomersListRequest(
    organizationId: [
        '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
    ],
);

$responses = $sdk->customers->list(
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
| `$request`                                                                         | [Operations\CustomersListRequest](../../Models/Operations/CustomersListRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CustomersListResponse](../../Models/Operations/CustomersListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

Update a customer.

**Scopes**: `customers:write`

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

$customerUpdate = new Components\CustomerUpdate(
    externalId: 'usr_1337',
    email: 'customer@example.com',
    name: 'John Doe',
    billingAddress: new Components\Address(
        country: 'FR',
    ),
    taxId: [
        'FR61954506077',
        'eu_vat',
    ],
);

$response = $sdk->customers->update(
    id: '<value>',
    customerUpdate: $customerUpdate

);

if ($response->customer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `id`                                                                   | *string*                                                               | :heavy_check_mark:                                                     | The customer ID.                                                       |
| `customerUpdate`                                                       | [Components\CustomerUpdate](../../Models/Components/CustomerUpdate.md) | :heavy_check_mark:                                                     | N/A                                                                    |

### Response

**[?Operations\CustomersUpdateResponse](../../Models/Operations/CustomersUpdateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## updateExternal

Update a customer by external ID.

**Scopes**: `customers:write`

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

$customerUpdate = new Components\CustomerUpdate(
    externalId: 'usr_1337',
    email: 'customer@example.com',
    name: 'John Doe',
    billingAddress: new Components\Address(
        country: 'US',
    ),
    taxId: [
        'FR61954506077',
        'eu_vat',
    ],
);

$response = $sdk->customers->updateExternal(
    externalId: '<id>',
    customerUpdate: $customerUpdate

);

if ($response->customer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `externalId`                                                           | *string*                                                               | :heavy_check_mark:                                                     | The customer external ID.                                              |
| `customerUpdate`                                                       | [Components\CustomerUpdate](../../Models/Components/CustomerUpdate.md) | :heavy_check_mark:                                                     | N/A                                                                    |

### Response

**[?Operations\CustomersUpdateExternalResponse](../../Models/Operations/CustomersUpdateExternalResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |