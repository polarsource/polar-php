# CustomerSessions
(*customerSessions*)

## Overview

### Available Operations

* [create](#create) - Create Customer Session

## create

Create a customer session.

**Scopes**: `customer_sessions:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customer-sessions:create" method="post" path="/v1/customer-sessions/" -->
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

$request = new Components\CustomerSessionCustomerExternalIDCreate(
    externalCustomerId: '<id>',
);

$response = $sdk->customerSessions->create(
    request: $request
);

if ($response->customerSession !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                               | Type                                                                                                                                                                    | Required                                                                                                                                                                | Description                                                                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                              | [Components\CustomerSessionCustomerIDCreate\|Components\CustomerSessionCustomerExternalIDCreate](../../Models/Operations/CustomerSessionsCreateCustomerSessionCreate.md) | :heavy_check_mark:                                                                                                                                                      | The request object to use for the request.                                                                                                                              |

### Response

**[?Operations\CustomerSessionsCreateResponse](../../Models/Operations/CustomerSessionsCreateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |