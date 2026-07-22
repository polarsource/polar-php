# Members

## Overview

### Available Operations

* [listMembers](#listmembers) - List Members

## listMembers

List members with optional customer ID filter.

**Scopes**: `members:read` `members:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="members:list_members" method="get" path="/v1/members/" -->
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

$request = new Operations\MembersListMembersRequest();

$responses = $sdk->members->listMembers(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\MembersListMembersRequest](../../Models/Operations/MembersListMembersRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\MembersListMembersResponse](../../Models/Operations/MembersListMembersResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |