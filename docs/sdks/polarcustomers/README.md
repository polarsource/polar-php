# PolarCustomers
(*customerPortal->customers*)

## Overview

### Available Operations

* [get](#get) - Get Customer
* [update](#update) - Update Customer
* [listPaymentMethods](#listpaymentmethods) - List Customer Payment Methods
* [addPaymentMethod](#addpaymentmethod) - Add Customer Payment Method
* [deletePaymentMethod](#deletepaymentmethod) - Delete Customer Payment Method

## get

Get authenticated customer.

**Scopes**: `customer_portal:read` `customer_portal:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customer_portal:customers:get" method="get" path="/v1/customer-portal/customers/me" -->
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

<!-- UsageSnippet language="php" operationID="customer_portal:customers:update" method="patch" path="/v1/customer-portal/customers/me" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Components;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();

$request = new Components\CustomerPortalCustomerUpdate(
    billingAddress: new Components\AddressInput(
        country: Components\CountryAlpha2Input::Us,
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

## listPaymentMethods

Get saved payment methods of the authenticated customer.

**Scopes**: `customer_portal:read` `customer_portal:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customer_portal:customers:list_payment_methods" method="get" path="/v1/customer-portal/customers/me/payment-methods" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();


$requestSecurity = new Operations\CustomerPortalCustomersListPaymentMethodsSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$responses = $sdk->customerPortal->customers->listPaymentMethods(
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

| Parameter                                                                                                                                    | Type                                                                                                                                         | Required                                                                                                                                     | Description                                                                                                                                  |
| -------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                                                   | [Operations\CustomerPortalCustomersListPaymentMethodsSecurity](../../Models/Operations/CustomerPortalCustomersListPaymentMethodsSecurity.md) | :heavy_check_mark:                                                                                                                           | The security requirements to use for the request.                                                                                            |
| `page`                                                                                                                                       | *?int*                                                                                                                                       | :heavy_minus_sign:                                                                                                                           | Page number, defaults to 1.                                                                                                                  |
| `limit`                                                                                                                                      | *?int*                                                                                                                                       | :heavy_minus_sign:                                                                                                                           | Size of a page, defaults to 10. Maximum is 100.                                                                                              |

### Response

**[?Operations\CustomerPortalCustomersListPaymentMethodsResponse](../../Models/Operations/CustomerPortalCustomersListPaymentMethodsResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## addPaymentMethod

Add a payment method to the authenticated customer.

**Scopes**: `customer_portal:read` `customer_portal:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customer_portal:customers:add_payment_method" method="post" path="/v1/customer-portal/customers/me/payment-methods" -->
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
    returnUrl: 'https://yearly-custom.net/',
);
$requestSecurity = new Operations\CustomerPortalCustomersAddPaymentMethodSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$response = $sdk->customerPortal->customers->addPaymentMethod(
    request: $request,
    security: $requestSecurity
);

if ($response->customerPaymentMethod !== null) {
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

<!-- UsageSnippet language="php" operationID="customer_portal:customers:delete_payment_method" method="delete" path="/v1/customer-portal/customers/me/payment-methods/{id}" -->
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

| Error Type                                    | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Errors\PaymentMethodInUseByActiveSubscription | 400                                           | application/json                              |
| Errors\ResourceNotFound                       | 404                                           | application/json                              |
| Errors\HTTPValidationError                    | 422                                           | application/json                              |
| Errors\APIException                           | 4XX, 5XX                                      | \*/\*                                         |