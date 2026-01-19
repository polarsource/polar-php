# MemberSessions

## Overview

### Available Operations

* [create](#create) - Create Member Session

## create

Create a member session.

This endpoint is only available for organizations with `member_model_enabled`
and `seat_based_pricing_enabled` feature flags enabled.

**Scopes**: `member_sessions:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="member-sessions:create" method="post" path="/v1/member-sessions/" -->
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

$request = new Components\MemberSessionCreate(
    memberId: '<value>',
    returnUrl: 'https://example.com/account',
);

$response = $sdk->memberSessions->create(
    request: $request
);

if ($response->memberSession !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Components\MemberSessionCreate](../../Models/Components/MemberSessionCreate.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\MemberSessionsCreateResponse](../../Models/Operations/MemberSessionsCreateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |