# Clients
(*oauth2->clients*)

## Overview

### Available Operations

* [create](#create) - Create Client
* [get](#get) - Get Client
* [update](#update) - Update Client
* [delete](#delete) - Delete Client

## create

Create an OAuth2 client.

### Example Usage

<!-- UsageSnippet language="php" operationID="oauth2:clients:oauth2:create_client" method="post" path="/v1/oauth2/register" -->
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

$request = new Components\OAuth2ClientConfiguration(
    redirectUris: [
        'https://impolite-hippodrome.com/',
        'https://acidic-tomography.net/',
    ],
    clientName: '<value>',
);

$response = $sdk->oauth2->clients->create(
    request: $request
);

if ($response->any !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Components\OAuth2ClientConfiguration](../../Models/Components/OAuth2ClientConfiguration.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\Oauth2ClientsOauth2CreateClientResponse](../../Models/Operations/Oauth2ClientsOauth2CreateClientResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Get an OAuth2 client by Client ID.

### Example Usage

<!-- UsageSnippet language="php" operationID="oauth2:clients:oauth2:get_client" method="get" path="/v1/oauth2/register/{client_id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->oauth2->clients->get(
    clientId: '<id>'
);

if ($response->any !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `clientId`         | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\Oauth2ClientsOauth2GetClientResponse](../../Models/Operations/Oauth2ClientsOauth2GetClientResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

Update an OAuth2 client.

### Example Usage

<!-- UsageSnippet language="php" operationID="oauth2:clients:oauth2:update_client" method="put" path="/v1/oauth2/register/{client_id}" -->
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

$oAuth2ClientConfigurationUpdate = new Components\OAuth2ClientConfigurationUpdate(
    redirectUris: [
        'https://classic-cantaloupe.org',
        'https://corrupt-status.biz/',
    ],
    clientName: '<value>',
    clientId: '<id>',
);

$response = $sdk->oauth2->clients->update(
    clientId: '<id>',
    oAuth2ClientConfigurationUpdate: $oAuth2ClientConfigurationUpdate

);

if ($response->any !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `clientId`                                                                                               | *string*                                                                                                 | :heavy_check_mark:                                                                                       | N/A                                                                                                      |
| `oAuth2ClientConfigurationUpdate`                                                                        | [Components\OAuth2ClientConfigurationUpdate](../../Models/Components/OAuth2ClientConfigurationUpdate.md) | :heavy_check_mark:                                                                                       | N/A                                                                                                      |

### Response

**[?Operations\Oauth2ClientsOauth2UpdateClientResponse](../../Models/Operations/Oauth2ClientsOauth2UpdateClientResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## delete

Delete an OAuth2 client.

### Example Usage

<!-- UsageSnippet language="php" operationID="oauth2:clients:oauth2:delete_client" method="delete" path="/v1/oauth2/register/{client_id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->oauth2->clients->delete(
    clientId: '<id>'
);

if ($response->any !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `clientId`         | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\Oauth2ClientsOauth2DeleteClientResponse](../../Models/Operations/Oauth2ClientsOauth2DeleteClientResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |