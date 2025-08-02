# Oauth2
(*oauth2*)

## Overview

### Available Operations

* [authorize](#authorize) - Authorize
* [token](#token) - Request Token
* [revoke](#revoke) - Revoke Token
* [introspect](#introspect) - Introspect Token
* [userinfo](#userinfo) - Get User Info

## authorize

Authorize

### Example Usage

<!-- UsageSnippet language="php" operationID="oauth2:authorize" method="get" path="/v1/oauth2/authorize" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->oauth2->authorize(

);

if ($response->responseOauth2Authorize !== null) {
    // handle response
}
```

### Response

**[?Operations\Oauth2AuthorizeResponse](../../Models/Operations/Oauth2AuthorizeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## token

Request an access token using a valid grant.

### Example Usage

<!-- UsageSnippet language="php" operationID="oauth2:request_token" method="post" path="/v1/oauth2/token" -->
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

$request = new Components\AuthorizationCodeTokenRequest(
    clientId: '<id>',
    clientSecret: '<value>',
    code: '<value>',
    redirectUri: 'https://memorable-season.name',
);

$response = $sdk->oauth2->token(
    request: $request
);

if ($response->tokenResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [Components\AuthorizationCodeTokenRequest\|Components\RefreshTokenRequest](../../Models/Operations/Oauth2RequestTokenRequestBody.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |

### Response

**[?Operations\Oauth2RequestTokenResponse](../../Models/Operations/Oauth2RequestTokenResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## revoke

Revoke an access token or a refresh token.

### Example Usage

<!-- UsageSnippet language="php" operationID="oauth2:revoke_token" method="post" path="/v1/oauth2/revoke" -->
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

$request = new Components\RevokeTokenRequest(
    token: '<value>',
    clientId: '<id>',
    clientSecret: '<value>',
);

$response = $sdk->oauth2->revoke(
    request: $request
);

if ($response->revokeTokenResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Components\RevokeTokenRequest](../../Models/Components/RevokeTokenRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\Oauth2RevokeTokenResponse](../../Models/Operations/Oauth2RevokeTokenResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## introspect

Get information about an access token.

### Example Usage

<!-- UsageSnippet language="php" operationID="oauth2:introspect_token" method="post" path="/v1/oauth2/introspect" -->
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

$request = new Components\IntrospectTokenRequest(
    token: '<value>',
    clientId: '<id>',
    clientSecret: '<value>',
);

$response = $sdk->oauth2->introspect(
    request: $request
);

if ($response->introspectTokenResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Components\IntrospectTokenRequest](../../Models/Components/IntrospectTokenRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\Oauth2IntrospectTokenResponse](../../Models/Operations/Oauth2IntrospectTokenResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## userinfo

Get information about the authenticated user.

### Example Usage

<!-- UsageSnippet language="php" operationID="oauth2:userinfo" method="get" path="/v1/oauth2/userinfo" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$response = $sdk->oauth2->userinfo(

);

if ($response->responseOauth2Userinfo !== null) {
    // handle response
}
```

### Response

**[?Operations\Oauth2UserinfoResponse](../../Models/Operations/Oauth2UserinfoResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |