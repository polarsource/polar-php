# polar-sh/sdk

Developer-friendly & type-safe Php SDK specifically catered to leverage *polar-sh/sdk* API.

<div align="left">
    <a href="https://www.speakeasy.com/?utm_source=polar-sh/sdk&utm_campaign=php"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
    <a href="https://opensource.org/licenses/MIT">
        <img src="https://img.shields.io/badge/License-MIT-blue.svg" style="width: 100px; height: 28px;" />
    </a>
</div>


<br /><br />
> [!IMPORTANT]
> This SDK is not yet ready for production use. To complete setup please follow the steps outlined in your [workspace](https://app.speakeasy.com/org/polar/polar). Delete this section before > publishing to a package manager.

<!-- Start Summary [summary] -->
## Summary

Polar API: Polar HTTP and Webhooks API

Read the docs at https://docs.polar.sh/api-reference
<!-- End Summary [summary] -->

<!-- Start Table of Contents [toc] -->
## Table of Contents
<!-- $toc-max-depth=2 -->
* [polar-sh/sdk](#polar-shsdk)
  * [SDK Installation](#sdk-installation)
  * [SDK Example Usage](#sdk-example-usage)
  * [Authentication](#authentication)
  * [Available Resources and Operations](#available-resources-and-operations)
  * [Pagination](#pagination)
  * [Error Handling](#error-handling)
  * [Server Selection](#server-selection)
* [Development](#development)
  * [Maturity](#maturity)
  * [Contributions](#contributions)

<!-- End Table of Contents [toc] -->

<!-- Start SDK Installation [installation] -->
## SDK Installation

The SDK relies on [Composer](https://getcomposer.org/) to manage its dependencies.

To install the SDK and add it as a dependency to an existing `composer.json` file:
```bash
composer require "polar-sh/sdk"
```
<!-- End SDK Installation [installation] -->

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Components;
use Polar\Utils;

$sdk = Polar\Polar::builder()->build();

$request = new Components\WebhookCheckoutCreatedPayload(
    data: new Components\Checkout(
        createdAt: Utils\Utils::parseDateTime('2025-11-12T14:26:42.882Z'),
        id: '<value>',
        paymentProcessor: Components\PaymentProcessor::Stripe,
        status: Components\CheckoutStatus::Confirmed,
        clientSecret: '<value>',
        url: 'https://fragrant-freezing.com',
        expiresAt: Utils\Utils::parseDateTime('2023-04-01T05:43:33.513Z'),
        successUrl: 'https://lined-privilege.biz/',
        productId: '<value>',
        productPriceId: '<value>',
        allowDiscountCodes: false,
        isDiscountApplicable: false,
        isFreeProductPrice: false,
        isPaymentRequired: false,
        isPaymentSetupRequired: false,
        isPaymentFormRequired: false,
        paymentProcessorMetadata: [
            'key' => '<value>',
        ],
        metadata: [
            'key' => 962818,
        ],
        products: [
            new Components\CheckoutProduct(
                createdAt: Utils\Utils::parseDateTime('2023-01-08T00:22:16.025Z'),
                id: '<value>',
                name: '<value>',
                isRecurring: false,
                isArchived: false,
                organizationId: '<value>',
                prices: [
                    new Components\LegacyRecurringProductPriceFixed(
                        createdAt: Utils\Utils::parseDateTime('2023-08-19T22:18:44.316Z'),
                        id: '<value>',
                        isArchived: false,
                        productId: '<value>',
                        recurringInterval: Components\SubscriptionRecurringInterval::Month,
                        priceCurrency: '<value>',
                        priceAmount: 767272,
                        modifiedAt: Utils\Utils::parseDateTime('2024-10-18T10:45:47.767Z'),
                    ),
                ],
                benefits: [
                    new Components\BenefitBase(
                        createdAt: Utils\Utils::parseDateTime('2024-07-02T09:46:29.338Z'),
                        id: '<value>',
                        type: Components\BenefitType::Downloadables,
                        description: 'indeed border opposite overload interior shady pfft clear-cut weight',
                        selectable: false,
                        deletable: false,
                        organizationId: '<value>',
                        modifiedAt: Utils\Utils::parseDateTime('2025-07-18T09:38:21.277Z'),
                    ),
                ],
                medias: [
                    new Components\ProductMediaFileRead(
                        id: '<value>',
                        organizationId: '<value>',
                        name: '<value>',
                        path: '/usr/include',
                        mimeType: '<value>',
                        size: 674791,
                        isUploaded: false,
                        createdAt: Utils\Utils::parseDateTime('2023-06-01T05:58:41.763Z'),
                        sizeReadable: '<value>',
                        publicUrl: 'https://unripe-cricket.net',
                        storageVersion: '<value>',
                        checksumEtag: '<value>',
                        checksumSha256Base64: '<value>',
                        checksumSha256Hex: '<value>',
                        lastModifiedAt: Utils\Utils::parseDateTime('2025-12-22T08:06:55.176Z'),
                        version: '<value>',
                    ),
                ],
                modifiedAt: Utils\Utils::parseDateTime('2024-06-16T08:01:15.524Z'),
                description: 'progress pacemaker via archaeology scientific forsaken who suspiciously mmm',
                recurringInterval: Components\SubscriptionRecurringInterval::Year,
            ),
        ],
        product: new Components\CheckoutProduct(
            createdAt: Utils\Utils::parseDateTime('2025-03-12T22:11:16.367Z'),
            id: '<value>',
            name: '<value>',
            isRecurring: false,
            isArchived: false,
            organizationId: '<value>',
            prices: [
                new Components\LegacyRecurringProductPriceFree(
                    createdAt: Utils\Utils::parseDateTime('2024-12-28T06:38:59.235Z'),
                    id: '<value>',
                    isArchived: false,
                    productId: '<value>',
                    recurringInterval: Components\SubscriptionRecurringInterval::Year,
                    modifiedAt: Utils\Utils::parseDateTime('2023-03-21T13:22:46.065Z'),
                ),
            ],
            benefits: [
                new Components\BenefitBase(
                    createdAt: Utils\Utils::parseDateTime('2024-03-26T15:35:46.813Z'),
                    id: '<value>',
                    type: Components\BenefitType::LicenseKeys,
                    description: 'phew advertisement where since hollow massive offensively painfully',
                    selectable: false,
                    deletable: false,
                    organizationId: '<value>',
                    modifiedAt: Utils\Utils::parseDateTime('2025-11-05T09:21:59.104Z'),
                ),
            ],
            medias: [
                new Components\ProductMediaFileRead(
                    id: '<value>',
                    organizationId: '<value>',
                    name: '<value>',
                    path: '/home',
                    mimeType: '<value>',
                    size: 371516,
                    isUploaded: false,
                    createdAt: Utils\Utils::parseDateTime('2023-08-10T01:28:46.591Z'),
                    sizeReadable: '<value>',
                    publicUrl: 'https://ethical-remark.info',
                    storageVersion: '<value>',
                    checksumEtag: '<value>',
                    checksumSha256Base64: '<value>',
                    checksumSha256Hex: '<value>',
                    lastModifiedAt: Utils\Utils::parseDateTime('2025-12-14T07:51:16.955Z'),
                    version: '<value>',
                ),
            ],
            modifiedAt: Utils\Utils::parseDateTime('2025-12-25T08:36:21.199Z'),
            description: 'cross-contamination infamous quintuple patiently abaft deploy sustenance um as',
            recurringInterval: Components\SubscriptionRecurringInterval::Year,
        ),
        productPrice: new Components\LegacyRecurringProductPriceCustom(
            createdAt: Utils\Utils::parseDateTime('2023-04-10T17:20:04.418Z'),
            id: '<value>',
            isArchived: false,
            productId: '<value>',
            recurringInterval: Components\SubscriptionRecurringInterval::Year,
            priceCurrency: '<value>',
            modifiedAt: Utils\Utils::parseDateTime('2023-12-06T23:12:58.389Z'),
            minimumAmount: 747352,
            maximumAmount: 472727,
            presetAmount: 659621,
        ),
        attachedCustomFields: [
            new Components\AttachedCustomField(
                customFieldId: '<value>',
                customField: new Components\CustomFieldDate(
                    createdAt: Utils\Utils::parseDateTime('2023-10-01T15:46:42.769Z'),
                    id: '<value>',
                    metadata: [
                        'key' => false,
                    ],
                    slug: '<value>',
                    name: '<value>',
                    organizationId: '<value>',
                    properties: new Components\CustomFieldDateProperties(),
                    modifiedAt: Utils\Utils::parseDateTime('2023-05-31T07:21:27.686Z'),
                ),
                order: 845619,
                required: false,
            ),
        ],
        customerMetadata: [
            'key' => '<value>',
        ],
        modifiedAt: Utils\Utils::parseDateTime('2024-09-22T21:52:32.431Z'),
        embedOrigin: '<value>',
        amount: 687130,
        taxAmount: 965804,
        currency: 'Cape Verde Escudo',
        subtotalAmount: 343582,
        totalAmount: 867451,
        discountId: '<value>',
        customerId: '<value>',
        customerName: '<value>',
        customerEmail: '<value>',
        customerIpAddress: '<value>',
        customerBillingAddress: new Components\Address(
            country: 'Guatemala',
        ),
        customerTaxId: '<id>',
        discount: new Components\CheckoutDiscountPercentageOnceForeverDuration(
            duration: Components\DiscountDuration::Repeating,
            type: Components\DiscountType::Percentage,
            basisPoints: 584663,
            id: '<value>',
            name: '<value>',
            code: '<value>',
        ),
        subscriptionId: '<value>',
    ),
);

$response = $sdk->endpointcheckoutCreatedPost(
    request: $request
);

if ($response->any !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->

<!-- Start Authentication [security] -->
## Authentication

### Per-Client Security Schemes

This SDK supports the following security scheme globally:

| Name          | Type | Scheme      |
| ------------- | ---- | ----------- |
| `accessToken` | http | HTTP Bearer |

To authenticate with the API the `accessToken` parameter must be set when initializing the SDK. For example:
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

$request = new Operations\ExternalOrganizationsListRequest();

$responses = $sdk->externalOrganizations->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```
<!-- End Authentication [security] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

<details open>
<summary>Available methods</summary>

### [advertisements](docs/sdks/advertisements/README.md)

* [get](docs/sdks/advertisements/README.md#get) - Get Campaign
* [list](docs/sdks/advertisements/README.md#list) - List Campaigns

### [benefits](docs/sdks/benefits/README.md)

* [create](docs/sdks/benefits/README.md#create) - Create Benefit
* [delete](docs/sdks/benefits/README.md#delete) - Delete Benefit
* [get](docs/sdks/benefits/README.md#get) - Get Benefit
* [grants](docs/sdks/benefits/README.md#grants) - List Benefit Grants
* [list](docs/sdks/benefits/README.md#list) - List Benefits
* [update](docs/sdks/benefits/README.md#update) - Update Benefit

### [checkoutLinks](docs/sdks/checkoutlinks/README.md)

* [create](docs/sdks/checkoutlinks/README.md#create) - Create Checkout Link
* [delete](docs/sdks/checkoutlinks/README.md#delete) - Delete Checkout Link
* [get](docs/sdks/checkoutlinks/README.md#get) - Get Checkout Link
* [list](docs/sdks/checkoutlinks/README.md#list) - List Checkout Links
* [update](docs/sdks/checkoutlinks/README.md#update) - Update Checkout Link

### [checkouts](docs/sdks/checkouts/README.md)

* [clientGet](docs/sdks/checkouts/README.md#clientget) - Get Checkout Session from Client
* [create](docs/sdks/checkouts/README.md#create) - Create Checkout Session
* [get](docs/sdks/checkouts/README.md#get) - Get Checkout Session
* [list](docs/sdks/checkouts/README.md#list) - List Checkout Sessions

### [customerPortal](docs/sdks/customerportal/README.md)


#### [customerPortal->benefitGrants](docs/sdks/benefitgrants/README.md)

* [get](docs/sdks/benefitgrants/README.md#get) - Get Benefit Grant
* [list](docs/sdks/benefitgrants/README.md#list) - List Benefit Grants
* [update](docs/sdks/benefitgrants/README.md#update) - Update Benefit Grant

#### [customerPortal->customers](docs/sdks/polarcustomers/README.md)

* [get](docs/sdks/polarcustomers/README.md#get) - Get Customer

#### [customerPortal->downloadables](docs/sdks/downloadables/README.md)

* [get](docs/sdks/downloadables/README.md#get) - Get Downloadable
* [list](docs/sdks/downloadables/README.md#list) - List Downloadables

#### [customerPortal->licenseKeys](docs/sdks/polarlicensekeys/README.md)

* [activate](docs/sdks/polarlicensekeys/README.md#activate) - Activate License Key
* [deactivate](docs/sdks/polarlicensekeys/README.md#deactivate) - Deactivate License Key
* [get](docs/sdks/polarlicensekeys/README.md#get) - Get License Key
* [list](docs/sdks/polarlicensekeys/README.md#list) - List License Keys
* [validate](docs/sdks/polarlicensekeys/README.md#validate) - Validate License Key

#### [customerPortal->orders](docs/sdks/polarorders/README.md)

* [get](docs/sdks/polarorders/README.md#get) - Get Order
* [invoice](docs/sdks/polarorders/README.md#invoice) - Get Order Invoice
* [list](docs/sdks/polarorders/README.md#list) - List Orders

#### [customerPortal->organizations](docs/sdks/polarorganizations/README.md)

* [get](docs/sdks/polarorganizations/README.md#get) - Get Organization

#### [customerPortal->subscriptions](docs/sdks/polarsubscriptions/README.md)

* [cancel](docs/sdks/polarsubscriptions/README.md#cancel) - Cancel Subscription
* [get](docs/sdks/polarsubscriptions/README.md#get) - Get Subscription
* [list](docs/sdks/polarsubscriptions/README.md#list) - List Subscriptions
* [update](docs/sdks/polarsubscriptions/README.md#update) - Update Subscription

### [customers](docs/sdks/customers/README.md)

* [create](docs/sdks/customers/README.md#create) - Create Customer
* [delete](docs/sdks/customers/README.md#delete) - Delete Customer
* [get](docs/sdks/customers/README.md#get) - Get Customer
* [list](docs/sdks/customers/README.md#list) - List Customers
* [update](docs/sdks/customers/README.md#update) - Update Customer

### [customerSessions](docs/sdks/customersessions/README.md)

* [create](docs/sdks/customersessions/README.md#create) - Create Customer Session

### [customFields](docs/sdks/customfields/README.md)

* [create](docs/sdks/customfields/README.md#create) - Create Custom Field
* [delete](docs/sdks/customfields/README.md#delete) - Delete Custom Field
* [get](docs/sdks/customfields/README.md#get) - Get Custom Field
* [list](docs/sdks/customfields/README.md#list) - List Custom Fields
* [update](docs/sdks/customfields/README.md#update) - Update Custom Field

### [discounts](docs/sdks/discounts/README.md)

* [create](docs/sdks/discounts/README.md#create) - Create Discount
* [delete](docs/sdks/discounts/README.md#delete) - Delete Discount
* [get](docs/sdks/discounts/README.md#get) - Get Discount
* [list](docs/sdks/discounts/README.md#list) - List Discounts
* [update](docs/sdks/discounts/README.md#update) - Update Discount

### [events](docs/sdks/events/README.md)

* [get](docs/sdks/events/README.md#get) - Get Event
* [ingest](docs/sdks/events/README.md#ingest) - Ingest Events
* [list](docs/sdks/events/README.md#list) - List Events

### [externalOrganizations](docs/sdks/externalorganizations/README.md)

* [list](docs/sdks/externalorganizations/README.md#list) - List External Organizations

### [files](docs/sdks/files/README.md)

* [create](docs/sdks/files/README.md#create) - Create File
* [delete](docs/sdks/files/README.md#delete) - Delete File
* [list](docs/sdks/files/README.md#list) - List Files
* [update](docs/sdks/files/README.md#update) - Update File
* [uploaded](docs/sdks/files/README.md#uploaded) - Complete File Upload

### [licenseKeys](docs/sdks/licensekeys/README.md)

* [get](docs/sdks/licensekeys/README.md#get) - Get License Key
* [getActivation](docs/sdks/licensekeys/README.md#getactivation) - Get Activation
* [list](docs/sdks/licensekeys/README.md#list) - List License Keys
* [update](docs/sdks/licensekeys/README.md#update) - Update License Key

### [meters](docs/sdks/meters/README.md)

* [create](docs/sdks/meters/README.md#create) - Create Meter
* [events](docs/sdks/meters/README.md#events) - Get Meter Events
* [get](docs/sdks/meters/README.md#get) - Get Meter
* [list](docs/sdks/meters/README.md#list) - List Meters
* [quantities](docs/sdks/meters/README.md#quantities) - Get Meter Quantities
* [update](docs/sdks/meters/README.md#update) - Update Meter

### [metrics](docs/sdks/metrics/README.md)

* [get](docs/sdks/metrics/README.md#get) - Get Metrics
* [limits](docs/sdks/metrics/README.md#limits) - Get Metrics Limits

### [oauth2](docs/sdks/oauth2/README.md)

* [authorize](docs/sdks/oauth2/README.md#authorize) - Authorize
* [introspect](docs/sdks/oauth2/README.md#introspect) - Introspect Token
* [token](docs/sdks/oauth2/README.md#token) - Request Token
* [revoke](docs/sdks/oauth2/README.md#revoke) - Revoke Token
* [userinfo](docs/sdks/oauth2/README.md#userinfo) - Get User Info

#### [oauth2->clients](docs/sdks/clients/README.md)

* [list](docs/sdks/clients/README.md#list) - List Clients
* [create](docs/sdks/clients/README.md#create) - Create Client
* [delete](docs/sdks/clients/README.md#delete) - Delete Client
* [get](docs/sdks/clients/README.md#get) - Get Client
* [update](docs/sdks/clients/README.md#update) - Update Client

### [orders](docs/sdks/orders/README.md)

* [get](docs/sdks/orders/README.md#get) - Get Order
* [invoice](docs/sdks/orders/README.md#invoice) - Get Order Invoice
* [list](docs/sdks/orders/README.md#list) - List Orders

### [organizations](docs/sdks/organizations/README.md)

* [create](docs/sdks/organizations/README.md#create) - Create Organization
* [get](docs/sdks/organizations/README.md#get) - Get Organization
* [list](docs/sdks/organizations/README.md#list) - List Organizations
* [update](docs/sdks/organizations/README.md#update) - Update Organization


### [products](docs/sdks/products/README.md)

* [create](docs/sdks/products/README.md#create) - Create Product
* [get](docs/sdks/products/README.md#get) - Get Product
* [list](docs/sdks/products/README.md#list) - List Products
* [update](docs/sdks/products/README.md#update) - Update Product
* [updateBenefits](docs/sdks/products/README.md#updatebenefits) - Update Product Benefits

### [refunds](docs/sdks/refunds/README.md)

* [create](docs/sdks/refunds/README.md#create) - Create Refund
* [list](docs/sdks/refunds/README.md#list) - List Refunds

### [repositories](docs/sdks/repositories/README.md)

* [get](docs/sdks/repositories/README.md#get) - Get Repository
* [list](docs/sdks/repositories/README.md#list) - List Repositories
* [update](docs/sdks/repositories/README.md#update) - Update Repository

### [subscriptions](docs/sdks/subscriptions/README.md)

* [export](docs/sdks/subscriptions/README.md#export) - Export Subscriptions
* [get](docs/sdks/subscriptions/README.md#get) - Get Subscription
* [list](docs/sdks/subscriptions/README.md#list) - List Subscriptions
* [revoke](docs/sdks/subscriptions/README.md#revoke) - Revoke Subscription
* [update](docs/sdks/subscriptions/README.md#update) - Update Subscription

</details>
<!-- End Available Resources and Operations [operations] -->

<!-- Start Pagination [pagination] -->
## Pagination

Some of the endpoints in this SDK support pagination. To use pagination, you make your SDK calls as usual, but the
returned object will be a `Generator` instead of an individual response.

Working with generators is as simple as iterating over the responses in a `foreach` loop, and you can see an example below:
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

$request = new Operations\ExternalOrganizationsListRequest();

$responses = $sdk->externalOrganizations->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```
<!-- End Pagination [pagination] -->

<!-- Start Error Handling [errors] -->
## Error Handling

Handling errors in this SDK should largely match your expectations. All operations return a response object or throw an exception.

By default an API error will raise a `Errors\APIException` exception, which has the following properties:

| Property       | Type                                    | Description           |
|----------------|-----------------------------------------|-----------------------|
| `$message`     | *string*                                | The error message     |
| `$statusCode`  | *int*                                   | The HTTP status code  |
| `$rawResponse` | *?\Psr\Http\Message\ResponseInterface*  | The raw HTTP response |
| `$body`        | *string*                                | The response content  |

When custom error responses are specified for an operation, the SDK may also throw their associated exception. You can refer to respective *Errors* tables in SDK docs for more details on possible exception types for each operation. For example, the `list` method throws the following exceptions:

| Error Type                 | Status Code | Content Type     |
| -------------------------- | ----------- | ---------------- |
| Errors\HTTPValidationError | 422         | application/json |
| Errors\APIException        | 4XX, 5XX    | \*/\*            |

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Errors;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

try {
    $request = new Operations\ExternalOrganizationsListRequest();

    $responses = $sdk->externalOrganizations->list(
        request: $request
    );

    foreach ($responses as $response) {
        if ($response->statusCode === 200) {
            // handle response
        }
    }
} catch (Errors\HTTPValidationErrorThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\APIException $e) {
    // handle default exception
    throw $e;
}
```
<!-- End Error Handling [errors] -->

<!-- Start Server Selection [server] -->
## Server Selection

### Select Server by Name

You can override the default server globally using the `setServer(string $serverName)` builder method when initializing the SDK client instance. The selected server will then be used as the default on the operations that use it. This table lists the names associated with the available servers:

| Name         | Server                         | Description            |
| ------------ | ------------------------------ | ---------------------- |
| `production` | `https://api.polar.sh`         | Production environment |
| `sandbox`    | `https://sandbox-api.polar.sh` | Sandbox environment    |

#### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()
    ->setServer('sandbox'
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\ExternalOrganizationsListRequest();

$responses = $sdk->externalOrganizations->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Override Server URL Per-Client

The default server can also be overridden globally using the `setServerUrl(string $serverUrl)` builder method when initializing the SDK client instance. For example:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()
    ->setServerURL('https://api.polar.sh')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\ExternalOrganizationsListRequest();

$responses = $sdk->externalOrganizations->list(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```
<!-- End Server Selection [server] -->

<!-- Placeholder for Future Speakeasy SDK Sections -->

# Development

## Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

## Contributions

While we value open-source contributions to this SDK, this library is generated programmatically. Any manual changes added to internal files will be overwritten on the next generation. 
We look forward to hearing your feedback. Feel free to open a PR or an issue with a proof of concept and we'll do our best to include it in a future release. 

### SDK Created by [Speakeasy](https://www.speakeasy.com/?utm_source=polar-sh/sdk&utm_campaign=php)
