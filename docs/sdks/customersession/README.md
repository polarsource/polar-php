# CustomerSession
(*customerPortal->customerSession*)

## Overview

### Available Operations

* [introspect](#introspect) - Introspect Customer Session

## introspect

Introspect the current session and return its information.

**Scopes**: `customer_portal:read` `customer_portal:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customer_portal:customer-session:introspect" method="get" path="/v1/customer-portal/customer-session/introspect" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();


$requestSecurity = new Operations\CustomerPortalCustomerSessionIntrospectSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$response = $sdk->customerPortal->customerSession->introspect(
    security: $requestSecurity
);

if ($response->customerCustomerSession !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                | Type                                                                                                                                     | Required                                                                                                                                 | Description                                                                                                                              |
| ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                                               | [Operations\CustomerPortalCustomerSessionIntrospectSecurity](../../Models/Operations/CustomerPortalCustomerSessionIntrospectSecurity.md) | :heavy_check_mark:                                                                                                                       | The security requirements to use for the request.                                                                                        |

### Response

**[?Operations\CustomerPortalCustomerSessionIntrospectResponse](../../Models/Operations/CustomerPortalCustomerSessionIntrospectResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |