# Wallets
(*wallets*)

## Overview

### Available Operations

* [list](#list) - List Wallets
* [get](#get) - Get Wallet
* [topUp](#topup) - Top-Up Wallet

## list

List wallets.

**Scopes**: `wallets:read`

### Example Usage

<!-- UsageSnippet language="php" operationID="wallets:list" method="get" path="/v1/wallets/" -->
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

$request = new Operations\WalletsListRequest(
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
);

$responses = $sdk->wallets->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\WalletsListRequest](../../Models/Operations/WalletsListRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\WalletsListResponse](../../Models/Operations/WalletsListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Get a wallet by ID.

**Scopes**: `wallets:read`

### Example Usage

<!-- UsageSnippet language="php" operationID="wallets:get" method="get" path="/v1/wallets/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->wallets->get(
    id: '<value>'
);

if ($response->wallet !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | The wallet ID.     |

### Response

**[?Operations\WalletsGetResponse](../../Models/Operations/WalletsGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## topUp

Top-up a wallet by adding funds to its balance.

The customer should have a valid payment method on file.

**Scopes**: `wallets:write`

### Example Usage

<!-- UsageSnippet language="php" operationID="wallets:top_up" method="post" path="/v1/wallets/{id}/top-up" -->
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

$walletTopUpCreate = new Components\WalletTopUpCreate(
    amount: 2000,
    currency: 'Venezuelan bolívar',
);

$response = $sdk->wallets->topUp(
    id: '<value>',
    walletTopUpCreate: $walletTopUpCreate

);

if ($response->wallet !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `id`                                                                         | *string*                                                                     | :heavy_check_mark:                                                           | The wallet ID.                                                               |
| `walletTopUpCreate`                                                          | [Components\WalletTopUpCreate](../../Models/Components/WalletTopUpCreate.md) | :heavy_check_mark:                                                           | N/A                                                                          |

### Response

**[?Operations\WalletsTopUpResponse](../../Models/Operations/WalletsTopUpResponse.md)**

### Errors

| Error Type                       | Status Code                      | Content Type                     |
| -------------------------------- | -------------------------------- | -------------------------------- |
| Errors\PaymentIntentFailedError  | 400                              | application/json                 |
| Errors\MissingPaymentMethodError | 402                              | application/json                 |
| Errors\ResourceNotFound          | 404                              | application/json                 |
| Errors\HTTPValidationError       | 422                              | application/json                 |
| Errors\APIException              | 4XX, 5XX                         | \*/\*                            |