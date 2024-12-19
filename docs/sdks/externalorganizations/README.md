# ExternalOrganizations
(*externalOrganizations*)

## Overview

### Available Operations

* [list](#list) - List External Organizations

## list

List external organizations.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Polar\Polar::builder()->setSecurity($security)->build();

$request = new Operations\ExternalOrganizationsListRequest();

$responses = $sdk->externalOrganizations->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\ExternalOrganizationsListRequest](../../Models/Operations/ExternalOrganizationsListRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\ExternalOrganizationsListResponse](../../Models/Operations/ExternalOrganizationsListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |