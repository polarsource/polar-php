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
        modifiedAt: Utils\Utils::parseDateTime('2024-05-27T05:08:06.235Z'),
        id: '<value>',
        paymentProcessor: Components\PaymentProcessor::Stripe,
        status: Components\CheckoutStatus::Failed,
        clientSecret: '<value>',
        url: 'https://heavy-beret.com/',
        expiresAt: Utils\Utils::parseDateTime('2023-02-25T02:26:48.460Z'),
        successUrl: 'https://sardonic-final.info/',
        embedOrigin: '<value>',
        amount: 962818,
        discountAmount: 6400,
        netAmount: 426090,
        taxAmount: 648726,
        totalAmount: 210702,
        currency: 'Riel',
        productId: '<value>',
        productPriceId: '<value>',
        discountId: '<value>',
        allowDiscountCodes: false,
        requireBillingAddress: false,
        isDiscountApplicable: false,
        isFreeProductPrice: false,
        isPaymentRequired: false,
        isPaymentSetupRequired: false,
        isPaymentFormRequired: false,
        customerId: '<value>',
        customerName: '<value>',
        customerEmail: '<value>',
        customerIpAddress: '<value>',
        customerBillingAddress: new Components\Address(
            country: 'FR',
        ),
        customerTaxId: '<id>',
        paymentProcessorMetadata: [
            'key' => '<value>',
        ],
        metadata: [
            'key' => 5003.72,
        ],
        customerExternalId: '<id>',
        products: [
            new Components\CheckoutProduct(
                createdAt: Utils\Utils::parseDateTime('2025-01-24T18:08:49.597Z'),
                modifiedAt: Utils\Utils::parseDateTime('2025-07-22T12:18:02.066Z'),
                id: '<value>',
                name: '<value>',
                description: 'gosh really capitalize um restructure prickly rationale certainly these',
                recurringInterval: Components\SubscriptionRecurringInterval::Year,
                isRecurring: false,
                isArchived: false,
                organizationId: '<value>',
                prices: [
                    new Components\ProductPriceFixed(
                        createdAt: Utils\Utils::parseDateTime('2025-08-22T02:17:20.661Z'),
                        modifiedAt: Utils\Utils::parseDateTime('2025-09-12T19:41:14.261Z'),
                        id: '<value>',
                        isArchived: false,
                        productId: '<value>',
                        type: Components\ProductPriceType::OneTime,
                        recurringInterval: Components\SubscriptionRecurringInterval::Year,
                        priceCurrency: '<value>',
                        priceAmount: 991185,
                    ),
                ],
                benefits: [
                    new Components\BenefitPublic(
                        id: '<value>',
                        createdAt: Utils\Utils::parseDateTime('2024-06-16T08:01:15.524Z'),
                        modifiedAt: Utils\Utils::parseDateTime('2025-06-29T02:23:28.661Z'),
                        type: Components\BenefitType::GithubRepository,
                        description: 'provided publicize astride oof mockingly if opposite coagulate pro',
                        selectable: false,
                        deletable: false,
                        organizationId: '<value>',
                    ),
                ],
                medias: [
                    new Components\ProductMediaFileRead(
                        id: '<value>',
                        organizationId: '<value>',
                        name: '<value>',
                        path: '/opt/lib',
                        mimeType: '<value>',
                        size: 877199,
                        storageVersion: '<value>',
                        checksumEtag: '<value>',
                        checksumSha256Base64: '<value>',
                        checksumSha256Hex: '<value>',
                        lastModifiedAt: Utils\Utils::parseDateTime('2024-12-28T06:38:59.235Z'),
                        version: '<value>',
                        isUploaded: false,
                        createdAt: Utils\Utils::parseDateTime('2025-12-23T03:24:50.631Z'),
                        sizeReadable: '<value>',
                        publicUrl: 'https://inconsequential-tenement.net/',
                    ),
                ],
            ),
        ],
        product: new Components\CheckoutProduct(
            createdAt: Utils\Utils::parseDateTime('2025-03-11T01:07:03.723Z'),
            modifiedAt: Utils\Utils::parseDateTime('2023-07-06T04:03:30.465Z'),
            id: '<value>',
            name: '<value>',
            description: 'but reluctantly easily litter',
            recurringInterval: Components\SubscriptionRecurringInterval::Year,
            isRecurring: false,
            isArchived: false,
            organizationId: '<value>',
            prices: [
                new Components\ProductPriceFree(
                    createdAt: Utils\Utils::parseDateTime('2024-02-10T10:32:57.489Z'),
                    modifiedAt: Utils\Utils::parseDateTime('2024-07-14T23:53:19.831Z'),
                    id: '<value>',
                    isArchived: false,
                    productId: '<value>',
                    type: Components\ProductPriceType::OneTime,
                    recurringInterval: Components\SubscriptionRecurringInterval::Year,
                ),
            ],
            benefits: [
                new Components\BenefitPublic(
                    id: '<value>',
                    createdAt: Utils\Utils::parseDateTime('2025-03-02T02:06:06.947Z'),
                    modifiedAt: Utils\Utils::parseDateTime('2024-01-11T18:56:38.677Z'),
                    type: Components\BenefitType::MeterCredit,
                    description: 'offensively painfully what questionably destock pish ironclad',
                    selectable: false,
                    deletable: false,
                    organizationId: '<value>',
                ),
            ],
            medias: [
                new Components\ProductMediaFileRead(
                    id: '<value>',
                    organizationId: '<value>',
                    name: '<value>',
                    path: '/usr/bin',
                    mimeType: '<value>',
                    size: 721205,
                    storageVersion: '<value>',
                    checksumEtag: '<value>',
                    checksumSha256Base64: '<value>',
                    checksumSha256Hex: '<value>',
                    lastModifiedAt: Utils\Utils::parseDateTime('2024-03-02T18:57:38.880Z'),
                    version: '<value>',
                    isUploaded: false,
                    createdAt: Utils\Utils::parseDateTime('2024-09-21T20:33:41.052Z'),
                    sizeReadable: '<value>',
                    publicUrl: 'https://sardonic-cannon.org/',
                ),
            ],
        ),
        productPrice: new Components\LegacyRecurringProductPriceFree(
            createdAt: Utils\Utils::parseDateTime('2023-01-13T03:58:12.376Z'),
            modifiedAt: Utils\Utils::parseDateTime('2025-02-04T17:46:21.813Z'),
            id: '<value>',
            isArchived: false,
            productId: '<value>',
            recurringInterval: Components\SubscriptionRecurringInterval::Month,
        ),
        discount: new Components\CheckoutDiscountPercentageOnceForeverDuration(
            duration: Components\DiscountDuration::Forever,
            type: Components\DiscountType::Percentage,
            basisPoints: 247960,
            id: '<value>',
            name: '<value>',
            code: '<value>',
        ),
        subscriptionId: '<value>',
        attachedCustomFields: [
            new Components\AttachedCustomField(
                customFieldId: '<value>',
                customField: new Components\CustomFieldDate(
                    createdAt: Utils\Utils::parseDateTime('2025-03-29T02:39:20.427Z'),
                    modifiedAt: Utils\Utils::parseDateTime('2024-05-17T17:07:35.182Z'),
                    id: '<value>',
                    metadata: [
                        'key' => 548991,
                    ],
                    slug: '<value>',
                    name: '<value>',
                    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
                    properties: new Components\CustomFieldDateProperties(),
                ),
                order: 907325,
                required: false,
            ),
        ],
        customerMetadata: [
            'key' => '<value>',
        ],
        customerBillingAddressFields: new Components\CheckoutCustomerBillingAddressFields(
            country: false,
            state: false,
            city: false,
            postalCode: false,
            line1: false,
            line2: false,
        ),
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
use Polar\Models\Components;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$responses = $sdk->organizations->list(
    slug: '<value>',
    page: 1,
    limit: 10,
    sorting: [
        Components\OrganizationSortProperty::Name,
    ]

);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Per-Operation Security Schemes

Some operations in this SDK require the security scheme to be specified at the request level. For example:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Polar;
use Polar\Models\Operations;

$sdk = Polar\Polar::builder()->build();

$request = new Operations\CustomerPortalBenefitGrantsListRequest(
    organizationId: [
        '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
    ],
);
$requestSecurity = new Operations\CustomerPortalBenefitGrantsListSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$responses = $sdk->customerPortal->benefitGrants->list(
    request: $request,
    security: $requestSecurity
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

### [benefits](docs/sdks/benefits/README.md)

* [list](docs/sdks/benefits/README.md#list) - List Benefits
* [create](docs/sdks/benefits/README.md#create) - Create Benefit
* [get](docs/sdks/benefits/README.md#get) - Get Benefit
* [update](docs/sdks/benefits/README.md#update) - Update Benefit
* [delete](docs/sdks/benefits/README.md#delete) - Delete Benefit
* [grants](docs/sdks/benefits/README.md#grants) - List Benefit Grants

### [checkoutLinks](docs/sdks/checkoutlinks/README.md)

* [list](docs/sdks/checkoutlinks/README.md#list) - List Checkout Links
* [create](docs/sdks/checkoutlinks/README.md#create) - Create Checkout Link
* [get](docs/sdks/checkoutlinks/README.md#get) - Get Checkout Link
* [update](docs/sdks/checkoutlinks/README.md#update) - Update Checkout Link
* [delete](docs/sdks/checkoutlinks/README.md#delete) - Delete Checkout Link

### [checkouts](docs/sdks/checkouts/README.md)

* [list](docs/sdks/checkouts/README.md#list) - List Checkout Sessions
* [create](docs/sdks/checkouts/README.md#create) - Create Checkout Session
* [get](docs/sdks/checkouts/README.md#get) - Get Checkout Session
* [clientGet](docs/sdks/checkouts/README.md#clientget) - Get Checkout Session from Client

### [customerMeters](docs/sdks/customermeters/README.md)

* [list](docs/sdks/customermeters/README.md#list) - List Customer Meters
* [get](docs/sdks/customermeters/README.md#get) - Get Customer Meter

### [customerPortal](docs/sdks/customerportal/README.md)


#### [customerPortal->benefitGrants](docs/sdks/benefitgrants/README.md)

* [list](docs/sdks/benefitgrants/README.md#list) - List Benefit Grants
* [get](docs/sdks/benefitgrants/README.md#get) - Get Benefit Grant
* [update](docs/sdks/benefitgrants/README.md#update) - Update Benefit Grant

#### [customerPortal->customerMeters](docs/sdks/polarcustomermeters/README.md)

* [list](docs/sdks/polarcustomermeters/README.md#list) - List Meters
* [get](docs/sdks/polarcustomermeters/README.md#get) - Get Customer Meter

#### [customerPortal->customers](docs/sdks/polarcustomers/README.md)

* [get](docs/sdks/polarcustomers/README.md#get) - Get Customer
* [update](docs/sdks/polarcustomers/README.md#update) - Update Customer
* [getPaymentMethods](docs/sdks/polarcustomers/README.md#getpaymentmethods) - Get Customer Payment Methods
* [addPaymentMethod](docs/sdks/polarcustomers/README.md#addpaymentmethod) - Add Customer Payment Method
* [deletePaymentMethod](docs/sdks/polarcustomers/README.md#deletepaymentmethod) - Delete Customer Payment Method

#### [customerPortal->downloadables](docs/sdks/downloadables/README.md)

* [list](docs/sdks/downloadables/README.md#list) - List Downloadables
* [get](docs/sdks/downloadables/README.md#get) - Get Downloadable

#### [customerPortal->licenseKeys](docs/sdks/polarlicensekeys/README.md)

* [list](docs/sdks/polarlicensekeys/README.md#list) - List License Keys
* [get](docs/sdks/polarlicensekeys/README.md#get) - Get License Key
* [validate](docs/sdks/polarlicensekeys/README.md#validate) - Validate License Key
* [activate](docs/sdks/polarlicensekeys/README.md#activate) - Activate License Key
* [deactivate](docs/sdks/polarlicensekeys/README.md#deactivate) - Deactivate License Key

#### [customerPortal->orders](docs/sdks/polarorders/README.md)

* [list](docs/sdks/polarorders/README.md#list) - List Orders
* [get](docs/sdks/polarorders/README.md#get) - Get Order
* [invoice](docs/sdks/polarorders/README.md#invoice) - Get Order Invoice

#### [customerPortal->organizations](docs/sdks/polarorganizations/README.md)

* [get](docs/sdks/polarorganizations/README.md#get) - Get Organization

#### [customerPortal->subscriptions](docs/sdks/polarsubscriptions/README.md)

* [list](docs/sdks/polarsubscriptions/README.md#list) - List Subscriptions
* [get](docs/sdks/polarsubscriptions/README.md#get) - Get Subscription
* [update](docs/sdks/polarsubscriptions/README.md#update) - Update Subscription
* [cancel](docs/sdks/polarsubscriptions/README.md#cancel) - Cancel Subscription

### [customers](docs/sdks/customers/README.md)

* [list](docs/sdks/customers/README.md#list) - List Customers
* [create](docs/sdks/customers/README.md#create) - Create Customer
* [get](docs/sdks/customers/README.md#get) - Get Customer
* [update](docs/sdks/customers/README.md#update) - Update Customer
* [delete](docs/sdks/customers/README.md#delete) - Delete Customer
* [getExternal](docs/sdks/customers/README.md#getexternal) - Get Customer by External ID
* [updateExternal](docs/sdks/customers/README.md#updateexternal) - Update Customer by External ID
* [deleteExternal](docs/sdks/customers/README.md#deleteexternal) - Delete Customer by External ID
* [getState](docs/sdks/customers/README.md#getstate) - Get Customer State
* [getStateExternal](docs/sdks/customers/README.md#getstateexternal) - Get Customer State by External ID

### [customerSessions](docs/sdks/customersessions/README.md)

* [create](docs/sdks/customersessions/README.md#create) - Create Customer Session

### [customFields](docs/sdks/customfields/README.md)

* [list](docs/sdks/customfields/README.md#list) - List Custom Fields
* [create](docs/sdks/customfields/README.md#create) - Create Custom Field
* [get](docs/sdks/customfields/README.md#get) - Get Custom Field
* [update](docs/sdks/customfields/README.md#update) - Update Custom Field
* [delete](docs/sdks/customfields/README.md#delete) - Delete Custom Field

### [discounts](docs/sdks/discounts/README.md)

* [list](docs/sdks/discounts/README.md#list) - List Discounts
* [create](docs/sdks/discounts/README.md#create) - Create Discount
* [get](docs/sdks/discounts/README.md#get) - Get Discount
* [update](docs/sdks/discounts/README.md#update) - Update Discount
* [delete](docs/sdks/discounts/README.md#delete) - Delete Discount

### [events](docs/sdks/events/README.md)

* [list](docs/sdks/events/README.md#list) - List Events
* [listNames](docs/sdks/events/README.md#listnames) - List Event Names
* [get](docs/sdks/events/README.md#get) - Get Event
* [ingest](docs/sdks/events/README.md#ingest) - Ingest Events

### [files](docs/sdks/files/README.md)

* [list](docs/sdks/files/README.md#list) - List Files
* [create](docs/sdks/files/README.md#create) - Create File
* [uploaded](docs/sdks/files/README.md#uploaded) - Complete File Upload
* [update](docs/sdks/files/README.md#update) - Update File
* [delete](docs/sdks/files/README.md#delete) - Delete File

### [licenseKeys](docs/sdks/licensekeys/README.md)

* [list](docs/sdks/licensekeys/README.md#list) - List License Keys
* [get](docs/sdks/licensekeys/README.md#get) - Get License Key
* [update](docs/sdks/licensekeys/README.md#update) - Update License Key
* [getActivation](docs/sdks/licensekeys/README.md#getactivation) - Get Activation

### [meters](docs/sdks/meters/README.md)

* [list](docs/sdks/meters/README.md#list) - List Meters
* [create](docs/sdks/meters/README.md#create) - Create Meter
* [get](docs/sdks/meters/README.md#get) - Get Meter
* [update](docs/sdks/meters/README.md#update) - Update Meter
* [quantities](docs/sdks/meters/README.md#quantities) - Get Meter Quantities

### [metrics](docs/sdks/metrics/README.md)

* [get](docs/sdks/metrics/README.md#get) - Get Metrics
* [limits](docs/sdks/metrics/README.md#limits) - Get Metrics Limits

### [oauth2](docs/sdks/oauth2/README.md)

* [authorize](docs/sdks/oauth2/README.md#authorize) - Authorize
* [token](docs/sdks/oauth2/README.md#token) - Request Token
* [revoke](docs/sdks/oauth2/README.md#revoke) - Revoke Token
* [introspect](docs/sdks/oauth2/README.md#introspect) - Introspect Token
* [userinfo](docs/sdks/oauth2/README.md#userinfo) - Get User Info

#### [oauth2->clients](docs/sdks/clients/README.md)

* [list](docs/sdks/clients/README.md#list) - List Clients
* [create](docs/sdks/clients/README.md#create) - Create Client
* [get](docs/sdks/clients/README.md#get) - Get Client
* [update](docs/sdks/clients/README.md#update) - Update Client
* [delete](docs/sdks/clients/README.md#delete) - Delete Client

### [orders](docs/sdks/orders/README.md)

* [list](docs/sdks/orders/README.md#list) - List Orders
* [get](docs/sdks/orders/README.md#get) - Get Order
* [invoice](docs/sdks/orders/README.md#invoice) - Get Order Invoice

### [organizations](docs/sdks/organizations/README.md)

* [list](docs/sdks/organizations/README.md#list) - List Organizations
* [create](docs/sdks/organizations/README.md#create) - Create Organization
* [get](docs/sdks/organizations/README.md#get) - Get Organization
* [update](docs/sdks/organizations/README.md#update) - Update Organization


### [products](docs/sdks/products/README.md)

* [list](docs/sdks/products/README.md#list) - List Products
* [create](docs/sdks/products/README.md#create) - Create Product
* [get](docs/sdks/products/README.md#get) - Get Product
* [update](docs/sdks/products/README.md#update) - Update Product
* [updateBenefits](docs/sdks/products/README.md#updatebenefits) - Update Product Benefits

### [refunds](docs/sdks/refunds/README.md)

* [list](docs/sdks/refunds/README.md#list) - List Refunds
* [create](docs/sdks/refunds/README.md#create) - Create Refund

### [subscriptions](docs/sdks/subscriptions/README.md)

* [list](docs/sdks/subscriptions/README.md#list) - List Subscriptions
* [export](docs/sdks/subscriptions/README.md#export) - Export Subscriptions
* [get](docs/sdks/subscriptions/README.md#get) - Get Subscription
* [update](docs/sdks/subscriptions/README.md#update) - Update Subscription
* [revoke](docs/sdks/subscriptions/README.md#revoke) - Revoke Subscription

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
use Polar\Models\Components;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$responses = $sdk->organizations->list(
    slug: '<value>',
    page: 1,
    limit: 10,
    sorting: [
        Components\OrganizationSortProperty::Name,
    ]

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
use Polar\Models\Components;
use Polar\Models\Errors;

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

try {
    $responses = $sdk->organizations->list(
        slug: '<value>',
        page: 1,
        limit: 10,
        sorting: [
            Components\OrganizationSortProperty::Name,
        ]

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
use Polar\Models\Components;

$sdk = Polar\Polar::builder()
    ->setServer('sandbox')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$responses = $sdk->organizations->list(
    slug: '<value>',
    page: 1,
    limit: 10,
    sorting: [
        Components\OrganizationSortProperty::Name,
    ]

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
use Polar\Models\Components;

$sdk = Polar\Polar::builder()
    ->setServerURL('https://api.polar.sh')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$responses = $sdk->organizations->list(
    slug: '<value>',
    page: 1,
    limit: 10,
    sorting: [
        Components\OrganizationSortProperty::Name,
    ]

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
