# Files
(*files*)

## Overview

### Available Operations

* [create](#create) - Create File
* [delete](#delete) - Delete File
* [list](#list) - List Files
* [update](#update) - Update File
* [uploaded](#uploaded) - Complete File Upload

## create

Create a file.

**Scopes**: `files:write`

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

$request = new Components\OrganizationAvatarFileCreate(
    name: '<value>',
    mimeType: '<value>',
    size: 638424,
    upload: new Components\S3FileCreateMultipart(
        parts: [
            new Components\S3FileCreatePart(
                number: 417458,
                chunkStart: 134365,
                chunkEnd: 69025,
            ),
        ],
    ),
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
);

$response = $sdk->files->create(
    request: $request
);

if ($response->fileUpload !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                            | Type                                                                                                                                                 | Required                                                                                                                                             | Description                                                                                                                                          |
| ---------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                           | [Components\DownloadableFileCreate\|Components\ProductMediaFileCreate\|Components\OrganizationAvatarFileCreate](../../Models/Components/FileCreate.md) | :heavy_check_mark:                                                                                                                                   | The request object to use for the request.                                                                                                           |

### Response

**[?Operations\FilesCreateResponse](../../Models/Operations/FilesCreateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## delete

Delete a file.

**Scopes**: `files:write`

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



$response = $sdk->files->delete(
    id: '<value>'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `id`               | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\FilesDeleteResponse](../../Models/Operations/FilesDeleteResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\NotPermitted        | 403                        | application/json           |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## list

List files.

**Scopes**: `files:read` `files:write`

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



$responses = $sdk->files->list(
    page: 1,
    limit: 10,
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
    ids: [
        '<value>',
    ]

);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                       | Type                                            | Required                                        | Description                                     | Example                                         |
| ----------------------------------------------- | ----------------------------------------------- | ----------------------------------------------- | ----------------------------------------------- | ----------------------------------------------- |
| `page`                                          | *?int*                                          | :heavy_minus_sign:                              | Page number, defaults to 1.                     |                                                 |
| `limit`                                         | *?int*                                          | :heavy_minus_sign:                              | Size of a page, defaults to 10. Maximum is 100. |                                                 |
| `organizationId`                                | *?string*                                       | :heavy_minus_sign:                              | N/A                                             | 1dbfc517-0bbf-4301-9ba8-555ca42b9737            |
| `ids`                                           | array<*string*>                                 | :heavy_minus_sign:                              | List of file IDs to get.                        |                                                 |

### Response

**[?Operations\FilesListResponse](../../Models/Operations/FilesListResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## update

Update a file.

**Scopes**: `files:write`

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

$filePatch = new Components\FilePatch();

$response = $sdk->files->update(
    id: '<value>',
    filePatch: $filePatch

);

if ($response->responseFilesUpdate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                    | Type                                                         | Required                                                     | Description                                                  |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ |
| `id`                                                         | *string*                                                     | :heavy_check_mark:                                           | The file ID.                                                 |
| `filePatch`                                                  | [Components\FilePatch](../../Models/Components/FilePatch.md) | :heavy_check_mark:                                           | N/A                                                          |

### Response

**[?Operations\FilesUpdateResponse](../../Models/Operations/FilesUpdateResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\NotPermitted        | 403                        | application/json           |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## uploaded

Complete a file upload.

**Scopes**: `files:write`

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

$fileUploadCompleted = new Components\FileUploadCompleted(
    id: '<id>',
    path: '/sys',
    parts: [
        new Components\S3FileUploadCompletedPart(
            number: 848922,
            checksumEtag: '<value>',
            checksumSha256Base64: '<value>',
        ),
    ],
);

$response = $sdk->files->uploaded(
    id: '<value>',
    fileUploadCompleted: $fileUploadCompleted

);

if ($response->responseFilesUploaded !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `id`                                                                             | *string*                                                                         | :heavy_check_mark:                                                               | The file ID.                                                                     |
| `fileUploadCompleted`                                                            | [Components\FileUploadCompleted](../../Models/Components/FileUploadCompleted.md) | :heavy_check_mark:                                                               | N/A                                                                              |

### Response

**[?Operations\FilesUploadedResponse](../../Models/Operations/FilesUploadedResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\NotPermitted        | 403                        | application/json           |
| Errors\ResourceNotFound    | 404                        | application/json           |
| Errors\HTTPValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |