# BenefitGrants

## Overview

### Available Operations

* [list](#list) - List Benefit Grants

## list

List benefit grants across all benefits for the authenticated organization.

**Scopes**: `benefits:read` `benefits:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="benefit-grants:list" method="get" path="/v1/benefit-grants/" -->
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

$request = new Operations\BenefitGrantsListRequest(
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
);

$responses = $sdk->benefitGrants->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\BenefitGrantsListRequest](../../Models/Operations/BenefitGrantsListRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\BenefitGrantsListResponse](../../Models/Operations/BenefitGrantsListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |