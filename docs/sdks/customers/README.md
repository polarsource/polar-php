# Customers

## Overview

### Available Operations

* [list](#list) - List Customers
* [create](#create) - Create Customer
* [export](#export) - Export Customers
* [get](#get) - Get Customer
* [update](#update) - Update Customer
* [delete](#delete) - Delete Customer
* [getExternal](#getexternal) - Get Customer by External ID
* [updateExternal](#updateexternal) - Update Customer by External ID
* [deleteExternal](#deleteexternal) - Delete Customer by External ID
* [getState](#getstate) - Get Customer State
* [getStateExternal](#getstateexternal) - Get Customer State by External ID

## list

List customers.

**Scopes**: `customers:read` `customers:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customers:list" method="get" path="/v1/customers/" -->
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
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
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

## create

Create a customer.

**Scopes**: `customers:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customers:create" method="post" path="/v1/customers/" -->
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
    externalId: 'usr_1337',
    email: 'customer@example.com',
    name: 'John Doe',
    billingAddress: new Components\AddressInput(
        country: Components\CountryAlpha2Input::Us,
    ),
    taxId: [
        '911144442',
        'us_ein',
    ],
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
    owner: new Components\OwnerCreate(
        email: 'member@example.com',
        name: 'Jane Doe',
        externalId: 'usr_1337',
    ),
);

$response = $sdk->customers->create(
    request: $request
);

if ($response->customerWithMembers !== null) {
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

## export

Export customers as a CSV file.

**Scopes**: `customers:read` `customers:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customers:export" method="get" path="/v1/customers/export" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->customers->export(
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737'
);

if ($response->any !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                               | Type                                                                                    | Required                                                                                | Description                                                                             |
| --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- |
| `organizationId`                                                                        | [string\|array\|null](../../Models/Operations/CustomersExportQueryParamOrganizationId.md) | :heavy_minus_sign:                                                                      | Filter by organization ID.                                                              |

### Response

**[?Operations\CustomersExportResponse](../../Models/Operations/CustomersExportResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Get a customer by ID.

**Scopes**: `customers:read` `customers:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customers:get" method="get" path="/v1/customers/{id}" -->
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

if ($response->customerWithMembers !== null) {
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

## update

Update a customer.

**Scopes**: `customers:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customers:update" method="patch" path="/v1/customers/{id}" -->
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
    email: 'customer@example.com',
    name: 'John Doe',
    billingAddress: new Components\AddressInput(
        country: Components\CountryAlpha2Input::Us,
    ),
    taxId: [
        '911144442',
        'us_ein',
    ],
    externalId: 'usr_1337',
);

$response = $sdk->customers->update(
    id: '<value>',
    customerUpdate: $customerUpdate

);

if ($response->customerWithMembers !== null) {
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

## delete

Delete a customer.

This action cannot be undone and will immediately:
- Cancel any active subscriptions for the customer
- Revoke all their benefits
- Clear any `external_id`

Use it only in the context of deleting a user within your
own service. Otherwise, use more granular API endpoints to cancel
a specific subscription or revoke certain benefits.

Note: The customers information will nonetheless be retained for historic
orders and subscriptions.

**Scopes**: `customers:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customers:delete" method="delete" path="/v1/customers/{id}" -->
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

## getExternal

Get a customer by external ID.

**Scopes**: `customers:read` `customers:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customers:get_external" method="get" path="/v1/customers/external/{external_id}" -->
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

if ($response->customerWithMembers !== null) {
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

## updateExternal

Update a customer by external ID.

**Scopes**: `customers:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customers:update_external" method="patch" path="/v1/customers/external/{external_id}" -->
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

$customerUpdateExternalID = new Components\CustomerUpdateExternalID(
    email: 'customer@example.com',
    name: 'John Doe',
    billingAddress: new Components\AddressInput(
        country: Components\CountryAlpha2Input::Us,
    ),
    taxId: [
        '911144442',
        'us_ein',
    ],
);

$response = $sdk->customers->updateExternal(
    externalId: '<id>',
    customerUpdateExternalID: $customerUpdateExternalID

);

if ($response->customerWithMembers !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `externalId`                                                                               | *string*                                                                                   | :heavy_check_mark:                                                                         | The customer external ID.                                                                  |
| `customerUpdateExternalID`                                                                 | [Components\CustomerUpdateExternalID](../../Models/Components/CustomerUpdateExternalID.md) | :heavy_check_mark:                                                                         | N/A                                                                                        |

### Response

**[?Operations\CustomersUpdateExternalResponse](../../Models/Operations/CustomersUpdateExternalResponse.md)**

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

<!-- UsageSnippet language="php" operationID="customers:delete_external" method="delete" path="/v1/customers/external/{external_id}" -->
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

## getState

Get a customer state by ID.

The customer state includes information about
the customer's active subscriptions and benefits.

It's the ideal endpoint to use when you need to get a full overview
of a customer's status.

**Scopes**: `customers:read` `customers:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customers:get_state" method="get" path="/v1/customers/{id}/state" -->
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

<!-- UsageSnippet language="php" operationID="customers:get_state_external" method="get" path="/v1/customers/external/{external_id}/state" -->
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