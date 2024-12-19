# CustomFields
(*customFields*)

## Overview

### Available Operations

* [create](#create) - Create Custom Field
* [delete](#delete) - Delete Custom Field
* [get](#get) - Get Custom Field
* [list](#list) - List Custom Fields
* [update](#update) - Update Custom Field

## create

Create a custom field.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Components;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Polar\Polar::builder()->setSecurity($security)->build();

$request = new Components\CustomFieldCreateNumber(
    slug: '<value>',
    name: '<value>',
    properties: new Components\CustomFieldNumberProperties(),
);

$response = $sdk->customFields->create(
    request: $request
);

if ($response->customField !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                    | Type                                                                                                                                                                                                                         | Required                                                                                                                                                                                                                     | Description                                                                                                                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                                                   | [Components\CustomFieldCreateText\|Components\CustomFieldCreateNumber\|Components\CustomFieldCreateDate\|Components\CustomFieldCreateCheckbox\|Components\CustomFieldCreateSelect](../../Models/Components/CustomFieldCreate.md) | :heavy_check_mark:                                                                                                                                                                                                           | The request object to use for the request.                                                                                                                                                                                   |

### Response

**[?Operations\CustomFieldsCreateResponse](../../Models/Operations/CustomFieldsCreateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## delete

Delete a custom field.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Polar\Polar::builder()->setSecurity($security)->build();



$response = $sdk->customFields->delete(
    id: '<value>'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter            | Type                 | Required             | Description          |
| -------------------- | -------------------- | -------------------- | -------------------- |
| `id`                 | *string*             | :heavy_check_mark:   | The custom field ID. |

### Response

**[?Operations\CustomFieldsDeleteResponse](../../Models/Operations/CustomFieldsDeleteResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## get

Get a custom field by ID.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Polar\Polar::builder()->setSecurity($security)->build();



$response = $sdk->customFields->get(
    id: '<value>'
);

if ($response->customField !== null) {
    // handle response
}
```

### Parameters

| Parameter            | Type                 | Required             | Description          |
| -------------------- | -------------------- | -------------------- | -------------------- |
| `id`                 | *string*             | :heavy_check_mark:   | The custom field ID. |

### Response

**[?Operations\CustomFieldsGetResponse](../../Models/Operations/CustomFieldsGetResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## list

List custom fields.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Polar\Polar::builder()->setSecurity($security)->build();

$request = new Operations\CustomFieldsListRequest();

$responses = $sdk->customFields->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CustomFieldsListRequest](../../Models/Operations/CustomFieldsListRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CustomFieldsListResponse](../../Models/Operations/CustomFieldsListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

Update a custom field.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Components;

$security = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Polar\Polar::builder()->setSecurity($security)->build();



$response = $sdk->customFields->update(
    id: '<value>',
    customFieldUpdate: new Components\CustomFieldUpdateText()

);

if ($response->customField !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                    | Type                                                                                                                                                                                                                         | Required                                                                                                                                                                                                                     | Description                                                                                                                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `id`                                                                                                                                                                                                                         | *string*                                                                                                                                                                                                                     | :heavy_check_mark:                                                                                                                                                                                                           | The custom field ID.                                                                                                                                                                                                         |
| `customFieldUpdate`                                                                                                                                                                                                          | [Components\CustomFieldUpdateText\|Components\CustomFieldUpdateNumber\|Components\CustomFieldUpdateDate\|Components\CustomFieldUpdateCheckbox\|Components\CustomFieldUpdateSelect](../../Models/Components/CustomFieldUpdate.md) | :heavy_check_mark:                                                                                                                                                                                                           | N/A                                                                                                                                                                                                                          |

### Response

**[?Operations\CustomFieldsUpdateResponse](../../Models/Operations/CustomFieldsUpdateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |