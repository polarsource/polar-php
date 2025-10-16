# Seats
(*customerPortal->seats*)

## Overview

### Available Operations

* [listSeats](#listseats) - List Seats
* [assignSeat](#assignseat) - Assign Seat
* [revokeSeat](#revokeseat) - Revoke Seat
* [resendInvitation](#resendinvitation) - Resend Invitation
* [listClaimedSubscriptions](#listclaimedsubscriptions) - List Claimed Subscriptions

## listSeats

**Scopes**: `customer_portal:read` `customer_portal:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customer_portal:seats:list_seats" method="get" path="/v1/customer-portal/seats" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();


$requestSecurity = new Operations\CustomerPortalSeatsListSeatsSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$response = $sdk->customerPortal->seats->listSeats(
    security: $requestSecurity,
    subscriptionId: '<id>'

);

if ($response->seatsList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `security`                                                                                                         | [Operations\CustomerPortalSeatsListSeatsSecurity](../../Models/Operations/CustomerPortalSeatsListSeatsSecurity.md) | :heavy_check_mark:                                                                                                 | The security requirements to use for the request.                                                                  |
| `subscriptionId`                                                                                                   | *string*                                                                                                           | :heavy_check_mark:                                                                                                 | Subscription ID                                                                                                    |

### Response

**[?Operations\CustomerPortalSeatsListSeatsResponse](../../Models/Operations/CustomerPortalSeatsListSeatsResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## assignSeat

**Scopes**: `customer_portal:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customer_portal:seats:assign_seat" method="post" path="/v1/customer-portal/seats" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Components;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();

$request = new Components\SeatAssign();
$requestSecurity = new Operations\CustomerPortalSeatsAssignSeatSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$response = $sdk->customerPortal->seats->assignSeat(
    request: $request,
    security: $requestSecurity
);

if ($response->customerSeat !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Components\SeatAssign](../../Models/Components/SeatAssign.md)                                                       | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |
| `security`                                                                                                           | [Operations\CustomerPortalSeatsAssignSeatSecurity](../../Models/Operations/CustomerPortalSeatsAssignSeatSecurity.md) | :heavy_check_mark:                                                                                                   | The security requirements to use for the request.                                                                    |

### Response

**[?Operations\CustomerPortalSeatsAssignSeatResponse](../../Models/Operations/CustomerPortalSeatsAssignSeatResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## revokeSeat

**Scopes**: `customer_portal:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customer_portal:seats:revoke_seat" method="delete" path="/v1/customer-portal/seats/{seat_id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();


$requestSecurity = new Operations\CustomerPortalSeatsRevokeSeatSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$response = $sdk->customerPortal->seats->revokeSeat(
    security: $requestSecurity,
    seatId: '4b3d74b3-01ff-4aac-bd03-320535cd5ce4'

);

if ($response->customerSeat !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                           | [Operations\CustomerPortalSeatsRevokeSeatSecurity](../../Models/Operations/CustomerPortalSeatsRevokeSeatSecurity.md) | :heavy_check_mark:                                                                                                   | The security requirements to use for the request.                                                                    |
| `seatId`                                                                                                             | *string*                                                                                                             | :heavy_check_mark:                                                                                                   | N/A                                                                                                                  |

### Response

**[?Operations\CustomerPortalSeatsRevokeSeatResponse](../../Models/Operations/CustomerPortalSeatsRevokeSeatResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## resendInvitation

**Scopes**: `customer_portal:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customer_portal:seats:resend_invitation" method="post" path="/v1/customer-portal/seats/{seat_id}/resend" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();


$requestSecurity = new Operations\CustomerPortalSeatsResendInvitationSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$response = $sdk->customerPortal->seats->resendInvitation(
    security: $requestSecurity,
    seatId: 'e3817437-8d53-4578-88d2-1dc256825965'

);

if ($response->customerSeat !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                        | Type                                                                                                                             | Required                                                                                                                         | Description                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                                       | [Operations\CustomerPortalSeatsResendInvitationSecurity](../../Models/Operations/CustomerPortalSeatsResendInvitationSecurity.md) | :heavy_check_mark:                                                                                                               | The security requirements to use for the request.                                                                                |
| `seatId`                                                                                                                         | *string*                                                                                                                         | :heavy_check_mark:                                                                                                               | N/A                                                                                                                              |

### Response

**[?Operations\CustomerPortalSeatsResendInvitationResponse](../../Models/Operations/CustomerPortalSeatsResendInvitationResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## listClaimedSubscriptions

List all subscriptions where the authenticated customer has claimed a seat.

**Scopes**: `customer_portal:read` `customer_portal:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customer_portal:seats:list_claimed_subscriptions" method="get" path="/v1/customer-portal/seats/subscriptions" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();


$requestSecurity = new Operations\CustomerPortalSeatsListClaimedSubscriptionsSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$response = $sdk->customerPortal->seats->listClaimedSubscriptions(
    security: $requestSecurity
);

if ($response->responseCustomerPortalSeatsListClaimedSubscriptions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                        | Type                                                                                                                                             | Required                                                                                                                                         | Description                                                                                                                                      |
| ------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------ |
| `security`                                                                                                                                       | [Operations\CustomerPortalSeatsListClaimedSubscriptionsSecurity](../../Models/Operations/CustomerPortalSeatsListClaimedSubscriptionsSecurity.md) | :heavy_check_mark:                                                                                                                               | The security requirements to use for the request.                                                                                                |

### Response

**[?Operations\CustomerPortalSeatsListClaimedSubscriptionsResponse](../../Models/Operations/CustomerPortalSeatsListClaimedSubscriptionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |