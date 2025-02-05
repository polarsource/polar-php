# Oauth2
(*oauth2*)

## Overview

### Available Operations

* [authorize](#authorize) - Authorize
* [introspect](#introspect) - Introspect Token
* [token](#token) - Request Token
* [revoke](#revoke) - Revoke Token
* [userinfo](#userinfo) - Get User Info

## authorize

Authorize

### Example Usage

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

## introspect

Get information about an access token.

### Example Usage

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

$request = new Operations\Oauth2IntrospectTokenIntrospectTokenRequest(
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

| Parameter                                                                                                                        | Type                                                                                                                             | Required                                                                                                                         | Description                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                       | [Operations\Oauth2IntrospectTokenIntrospectTokenRequest](../../Models/Operations/Oauth2IntrospectTokenIntrospectTokenRequest.md) | :heavy_check_mark:                                                                                                               | The request object to use for the request.                                                                                       |

### Response

**[?Operations\Oauth2IntrospectTokenResponse](../../Models/Operations/Oauth2IntrospectTokenResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## token

Request an access token using a valid grant.

### Example Usage

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

$request = new Components\Onev11oauth21tokenPostXComponentsAuthorizationCodeTokenRequest(
    clientId: '<id>',
    clientSecret: '<value>',
    code: '<value>',
    redirectUri: 'https://old-fort.name',
);

$response = $sdk->oauth2->token(
    request: $request
);

if ($response->tokenResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                             | Type                                                                                                                                                                                                  | Required                                                                                                                                                                                              | Description                                                                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                            | [Components\Onev11oauth21tokenPostXComponentsAuthorizationCodeTokenRequest\|Components\Onev11oauth21tokenPostXComponentsRefreshTokenRequest](../../Models/Operations/Oauth2RequestTokenRequestBody.md) | :heavy_check_mark:                                                                                                                                                                                    | The request object to use for the request.                                                                                                                                                            |

### Response

**[?Operations\Oauth2RequestTokenResponse](../../Models/Operations/Oauth2RequestTokenResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## revoke

Revoke an access token or a refresh token.

### Example Usage

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

$request = new Operations\Oauth2RevokeTokenRevokeTokenRequest(
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

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\Oauth2RevokeTokenRevokeTokenRequest](../../Models/Operations/Oauth2RevokeTokenRevokeTokenRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\Oauth2RevokeTokenResponse](../../Models/Operations/Oauth2RevokeTokenResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## userinfo

Get information about the authenticated user.

### Example Usage

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