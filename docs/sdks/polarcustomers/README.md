# PolarCustomers
(*customerPortal->customers*)

## Overview

### Available Operations

* [get](#get) - Get Customer
* [update](#update) - Update Customer
* [getPaymentMethods](#getpaymentmethods) - Get Customer Payment Methods
* [addPaymentMethod](#addpaymentmethod) - Add Customer Payment Method
* [deletePaymentMethod](#deletepaymentmethod) - Delete Customer Payment Method

## get

Get authenticated customer.

**Scopes**: `customer_portal:read` `customer_portal:write`

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();


$requestSecurity = new Operations\CustomerPortalCustomersGetSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$response = $sdk->customerPortal->customers->get(
    security: $requestSecurity
);

if ($response->customerPortalCustomer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                     | [Operations\CustomerPortalCustomersGetSecurity](../../Models/Operations/CustomerPortalCustomersGetSecurity.md) | :heavy_check_mark:                                                                                             | The security requirements to use for the request.                                                              |

### Response

**[?Operations\CustomerPortalCustomersGetResponse](../../Models/Operations/CustomerPortalCustomersGetResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## update

Update authenticated customer.

**Scopes**: `customer_portal:write`

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Components;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();

$request = new Components\CustomerPortalCustomerUpdate(
    billingAddress: new Components\Address(
        country: 'FR',
    ),
);
$requestSecurity = new Operations\CustomerPortalCustomersUpdateSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$response = $sdk->customerPortal->customers->update(
    request: $request,
    security: $requestSecurity
);

if ($response->customerPortalCustomer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Components\CustomerPortalCustomerUpdate](../../Models/Components/CustomerPortalCustomerUpdate.md)                   | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |
| `security`                                                                                                           | [Operations\CustomerPortalCustomersUpdateSecurity](../../Models/Operations/CustomerPortalCustomersUpdateSecurity.md) | :heavy_check_mark:                                                                                                   | The security requirements to use for the request.                                                                    |

### Response

**[?Operations\CustomerPortalCustomersUpdateResponse](../../Models/Operations/CustomerPortalCustomersUpdateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## getPaymentMethods

Get saved payment methods of the authenticated customer.

**Scopes**: `customer_portal:read` `customer_portal:write`

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();


$requestSecurity = new Operations\CustomerPortalCustomersGetPaymentMethodsSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$responses = $sdk->customerPortal->customers->getPaymentMethods(
    security: $requestSecurity,
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

| Parameter                                                                                                                                  | Type                                                                                                                                       | Required                                                                                                                                   | Description                                                                                                                                |
| ------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------ |
| `security`                                                                                                                                 | [Operations\CustomerPortalCustomersGetPaymentMethodsSecurity](../../Models/Operations/CustomerPortalCustomersGetPaymentMethodsSecurity.md) | :heavy_check_mark:                                                                                                                         | The security requirements to use for the request.                                                                                          |
| `page`                                                                                                                                     | *?int*                                                                                                                                     | :heavy_minus_sign:                                                                                                                         | Page number, defaults to 1.                                                                                                                |
| `limit`                                                                                                                                    | *?int*                                                                                                                                     | :heavy_minus_sign:                                                                                                                         | Size of a page, defaults to 10. Maximum is 100.                                                                                            |

### Response

**[?Operations\CustomerPortalCustomersGetPaymentMethodsResponse](../../Models/Operations/CustomerPortalCustomersGetPaymentMethodsResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## addPaymentMethod

Add a payment method to the authenticated customer.

**Scopes**: `customer_portal:read` `customer_portal:write`

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Components;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();

$request = new Components\CustomerPaymentMethodCreate(
    confirmationTokenId: '<id>',
    setDefault: false,
    returnUrl: 'https://probable-resource.biz',
);
$requestSecurity = new Operations\CustomerPortalCustomersAddPaymentMethodSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$response = $sdk->customerPortal->customers->addPaymentMethod(
    request: $request,
    security: $requestSecurity
);

if ($response->responseCustomerPortalCustomersAddPaymentMethod !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                | Type                                                                                                                                     | Required                                                                                                                                 | Description                                                                                                                              |
| ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                               | [Components\CustomerPaymentMethodCreate](../../Models/Components/CustomerPaymentMethodCreate.md)                                         | :heavy_check_mark:                                                                                                                       | The request object to use for the request.                                                                                               |
| `security`                                                                                                                               | [Operations\CustomerPortalCustomersAddPaymentMethodSecurity](../../Models/Operations/CustomerPortalCustomersAddPaymentMethodSecurity.md) | :heavy_check_mark:                                                                                                                       | The security requirements to use for the request.                                                                                        |

### Response

**[?Operations\CustomerPortalCustomersAddPaymentMethodResponse](../../Models/Operations/CustomerPortalCustomersAddPaymentMethodResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## deletePaymentMethod

Delete a payment method from the authenticated customer.

**Scopes**: `customer_portal:read` `customer_portal:write`

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();


$requestSecurity = new Operations\CustomerPortalCustomersDeletePaymentMethodSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$response = $sdk->customerPortal->customers->deletePaymentMethod(
    security: $requestSecurity,
    id: '<id>'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                      | Type                                                                                                                                           | Required                                                                                                                                       | Description                                                                                                                                    |
| ---------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                                                     | [Operations\CustomerPortalCustomersDeletePaymentMethodSecurity](../../Models/Operations/CustomerPortalCustomersDeletePaymentMethodSecurity.md) | :heavy_check_mark:                                                                                                                             | The security requirements to use for the request.                                                                                              |
| `id`                                                                                                                                           | *string*                                                                                                                                       | :heavy_check_mark:                                                                                                                             | N/A                                                                                                                                            |

### Response

**[?Operations\CustomerPortalCustomersDeletePaymentMethodResponse](../../Models/Operations/CustomerPortalCustomersDeletePaymentMethodResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |