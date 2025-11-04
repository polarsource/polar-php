# CustomerSeats
(*customerSeats*)

## Overview

### Available Operations

* [assignSeat](#assignseat) - Assign Seat
* [listSeats](#listseats) - List Seats
* [revokeSeat](#revokeseat) - Revoke Seat
* [resendInvitation](#resendinvitation) - Resend Invitation
* [getClaimInfo](#getclaiminfo) - Get Claim Info
* [claimSeat](#claimseat) - Claim Seat

## assignSeat

**Scopes**: `customer_seats:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customer-seats:assign_seat" method="post" path="/v1/customer-seats" -->
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

$request = new Components\SeatAssign();

$response = $sdk->customerSeats->assignSeat(
    request: $request
);

if ($response->customerSeat !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                      | Type                                                           | Required                                                       | Description                                                    |
| -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- |
| `$request`                                                     | [Components\SeatAssign](../../Models/Components/SeatAssign.md) | :heavy_check_mark:                                             | The request object to use for the request.                     |

### Response

**[?Operations\CustomerSeatsAssignSeatResponse](../../Models/Operations/CustomerSeatsAssignSeatResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## listSeats

**Scopes**: `customer_seats:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customer-seats:list_seats" method="get" path="/v1/customer-seats" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->customerSeats->listSeats(

);

if ($response->seatsList !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `subscriptionId`   | *?string*          | :heavy_minus_sign: | N/A                |
| `orderId`          | *?string*          | :heavy_minus_sign: | N/A                |

### Response

**[?Operations\CustomerSeatsListSeatsResponse](../../Models/Operations/CustomerSeatsListSeatsResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## revokeSeat

**Scopes**: `customer_seats:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customer-seats:revoke_seat" method="delete" path="/v1/customer-seats/{seat_id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->customerSeats->revokeSeat(
    seatId: '<value>'
);

if ($response->customerSeat !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `seatId`           | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\CustomerSeatsRevokeSeatResponse](../../Models/Operations/CustomerSeatsRevokeSeatResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## resendInvitation

**Scopes**: `customer_seats:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="customer-seats:resend_invitation" method="post" path="/v1/customer-seats/{seat_id}/resend" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->customerSeats->resendInvitation(
    seatId: '<value>'
);

if ($response->customerSeat !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `seatId`           | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\CustomerSeatsResendInvitationResponse](../../Models/Operations/CustomerSeatsResendInvitationResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## getClaimInfo

Get Claim Info

### Example Usage

<!-- UsageSnippet language="php" operationID="customer-seats:get_claim_info" method="get" path="/v1/customer-seats/claim/{invitation_token}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()->build();



$response = $sdk->customerSeats->getClaimInfo(
    invitationToken: '<value>'
);

if ($response->seatClaimInfo !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `invitationToken`  | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\CustomerSeatsGetClaimInfoResponse](../../Models/Operations/CustomerSeatsGetClaimInfoResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## claimSeat

Claim Seat

### Example Usage

<!-- UsageSnippet language="php" operationID="customer-seats:claim_seat" method="post" path="/v1/customer-seats/claim" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Components;

$sdk = Polar\Polar::builder()->build();

$request = new Components\SeatClaim(
    invitationToken: '<value>',
);

$response = $sdk->customerSeats->claimSeat(
    request: $request
);

if ($response->customerSeatClaimResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                    | Type                                                         | Required                                                     | Description                                                  |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ |
| `$request`                                                   | [Components\SeatClaim](../../Models/Components/SeatClaim.md) | :heavy_check_mark:                                           | The request object to use for the request.                   |

### Response

**[?Operations\CustomerSeatsClaimSeatResponse](../../Models/Operations/CustomerSeatsClaimSeatResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |