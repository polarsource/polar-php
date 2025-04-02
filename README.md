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
        amount: 417896,
        discountAmount: 962818,
        netAmount: 6400,
        totalAmount: 426090,
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
            'key' => 210702,
        ],
        products: [
            new Components\CheckoutProduct(
                createdAt: Utils\Utils::parseDateTime('2024-04-28T23:39:10.699Z'),
                id: '<value>',
                name: '<value>',
                isRecurring: false,
                isArchived: false,
                organizationId: '<value>',
                prices: [
                    new Components\ProductPriceFree(
                        createdAt: Utils\Utils::parseDateTime('2024-07-02T09:46:29.338Z'),
                        id: '<value>',
                        isArchived: false,
                        productId: '<value>',
                        type: Components\ProductPriceType::Recurring,
                        modifiedAt: Utils\Utils::parseDateTime('2025-07-22T12:18:02.066Z'),
                        recurringInterval: Components\SubscriptionRecurringInterval::Year,
                    ),
                ],
                benefits: [
                    new Components\BenefitBase(
                        createdAt: Utils\Utils::parseDateTime('2025-07-31T13:25:31.669Z'),
                        id: '<value>',
                        type: Components\BenefitType::Discord,
                        description: 'advocate sock unexpectedly when',
                        selectable: false,
                        deletable: false,
                        organizationId: '<value>',
                        modifiedAt: Utils\Utils::parseDateTime('2023-09-19T22:46:24.110Z'),
                    ),
                ],
                medias: [
                    new Components\ProductMediaFileRead(
                        id: '<value>',
                        organizationId: '<value>',
                        name: '<value>',
                        path: '/sys',
                        mimeType: '<value>',
                        size: 476477,
                        isUploaded: false,
                        createdAt: Utils\Utils::parseDateTime('2025-03-10T15:40:27.607Z'),
                        sizeReadable: '<value>',
                        publicUrl: 'https://muted-tuxedo.net',
                        storageVersion: '<value>',
                        checksumEtag: '<value>',
                        checksumSha256Base64: '<value>',
                        checksumSha256Hex: '<value>',
                        lastModifiedAt: Utils\Utils::parseDateTime('2024-08-13T03:41:03.035Z'),
                        version: '<value>',
                    ),
                ],
                modifiedAt: Utils\Utils::parseDateTime('2025-03-10T13:49:13.967Z'),
                description: 'rationale certainly these restfully geez who countess happily',
                recurringInterval: Components\SubscriptionRecurringInterval::Month,
            ),
        ],
        product: new Components\CheckoutProduct(
            createdAt: Utils\Utils::parseDateTime('2024-07-12T15:19:53.180Z'),
            id: '<value>',
            name: '<value>',
            isRecurring: false,
            isArchived: false,
            organizationId: '<value>',
            prices: [
                new Components\LegacyRecurringProductPriceFree(
                    createdAt: Utils\Utils::parseDateTime('2025-11-18T07:12:26.749Z'),
                    id: '<value>',
                    isArchived: false,
                    productId: '<value>',
                    recurringInterval: Components\SubscriptionRecurringInterval::Year,
                    modifiedAt: Utils\Utils::parseDateTime('2024-03-17T03:00:11.739Z'),
                ),
            ],
            benefits: [
                new Components\BenefitBase(
                    createdAt: Utils\Utils::parseDateTime('2025-01-24T04:29:27.705Z'),
                    id: '<value>',
                    type: Components\BenefitType::MeterCredit,
                    description: 'forsaken who suspiciously mmm bleak ferociously whether while',
                    selectable: false,
                    deletable: false,
                    organizationId: '<value>',
                    modifiedAt: Utils\Utils::parseDateTime('2024-03-12T06:20:21.161Z'),
                ),
            ],
            medias: [
                new Components\ProductMediaFileRead(
                    id: '<value>',
                    organizationId: '<value>',
                    name: '<value>',
                    path: '/private/var',
                    mimeType: '<value>',
                    size: 795686,
                    isUploaded: false,
                    createdAt: Utils\Utils::parseDateTime('2025-03-23T15:19:59.122Z'),
                    sizeReadable: '<value>',
                    publicUrl: 'https://deserted-experience.name/',
                    storageVersion: '<value>',
                    checksumEtag: '<value>',
                    checksumSha256Base64: '<value>',
                    checksumSha256Hex: '<value>',
                    lastModifiedAt: Utils\Utils::parseDateTime('2023-12-31T15:42:50.685Z'),
                    version: '<value>',
                ),
            ],
            modifiedAt: Utils\Utils::parseDateTime('2024-08-24T17:40:38.217Z'),
            description: 'neatly jagged as weekly drat nor why sparkling regulate',
            recurringInterval: Components\SubscriptionRecurringInterval::Year,
        ),
        productPrice: new Components\LegacyRecurringProductPriceFixed(
            createdAt: Utils\Utils::parseDateTime('2024-05-19T04:13:23.657Z'),
            id: '<value>',
            isArchived: false,
            productId: '<value>',
            recurringInterval: Components\SubscriptionRecurringInterval::Year,
            priceCurrency: '<value>',
            priceAmount: 111811,
            modifiedAt: Utils\Utils::parseDateTime('2025-11-26T15:42:11.953Z'),
        ),
        attachedCustomFields: [
            new Components\AttachedCustomField(
                customFieldId: '<value>',
                customField: new Components\CustomFieldNumber(
                    createdAt: Utils\Utils::parseDateTime('2025-10-13T01:16:26.790Z'),
                    id: '<value>',
                    metadata: [
                        'key' => '<value>',
                    ],
                    slug: '<value>',
                    name: '<value>',
                    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
                    properties: new Components\CustomFieldNumberProperties(),
                    modifiedAt: Utils\Utils::parseDateTime('2025-02-04T17:46:21.813Z'),
                ),
                order: 144026,
                required: false,
            ),
        ],
        customerMetadata: [
            'key' => false,
        ],
        modifiedAt: Utils\Utils::parseDateTime('2024-01-18T04:40:39.968Z'),
        embedOrigin: '<value>',
        taxAmount: 930511,
        currency: 'Egyptian Pound',
        discountId: '<value>',
        customerId: '<value>',
        customerName: '<value>',
        customerEmail: '<value>',
        customerIpAddress: '<value>',
        customerBillingAddress: new Components\Address(
            country: 'US',
        ),
        customerTaxId: '<id>',
        subtotalAmount: 746452,
        customerExternalId: '<id>',
        discount: new Components\CheckoutDiscountFixedRepeatDuration(
            duration: Components\DiscountDuration::Forever,
            durationInMonths: 548991,
            type: Components\DiscountType::Percentage,
            amount: 51659,
            currency: 'Hryvnia',
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

$request = new Operations\ExternalOrganizationsListRequest(
    organizationId: [
        '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
    ],
);

$responses = $sdk->externalOrganizations->list(
    request: $request
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


$requestSecurity = new Operations\CustomerPortalBenefitGrantsGetSecurity(
    customerSession: '<YOUR_BEARER_TOKEN_HERE>',
);

$response = $sdk->customerPortal->benefitGrants->get(
    security: $requestSecurity,
    id: '<value>'

);

if ($response->customerBenefitGrant !== null) {
    // handle response
}
```
<!-- End Authentication [security] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

<details open>
<summary>Available methods</summary>

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

* [addPaymentMethod](docs/sdks/polarcustomers/README.md#addpaymentmethod) - Add Customer Payment Method
* [deletePaymentMethod](docs/sdks/polarcustomers/README.md#deletepaymentmethod) - Delete Customer Payment Method
* [get](docs/sdks/polarcustomers/README.md#get) - Get Customer
* [getPaymentMethods](docs/sdks/polarcustomers/README.md#getpaymentmethods) - Get Customer Payment Methods
* [update](docs/sdks/polarcustomers/README.md#update) - Update Customer

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
* [deleteExternal](docs/sdks/customers/README.md#deleteexternal) - Delete Customer by External ID
* [get](docs/sdks/customers/README.md#get) - Get Customer
* [getExternal](docs/sdks/customers/README.md#getexternal) - Get Customer by External ID
* [getState](docs/sdks/customers/README.md#getstate) - Get Customer State
* [getStateExternal](docs/sdks/customers/README.md#getstateexternal) - Get Customer State by External ID
* [list](docs/sdks/customers/README.md#list) - List Customers
* [update](docs/sdks/customers/README.md#update) - Update Customer
* [updateExternal](docs/sdks/customers/README.md#updateexternal) - Update Customer by External ID

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

$request = new Operations\ExternalOrganizationsListRequest(
    organizationId: [
        '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
    ],
);

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
    $request = new Operations\ExternalOrganizationsListRequest(
        organizationId: [
            '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
        ],
    );

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
    ->setServer('sandbox')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$request = new Operations\ExternalOrganizationsListRequest(
    organizationId: [
        '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
    ],
);

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

$request = new Operations\ExternalOrganizationsListRequest(
    organizationId: [
        '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
    ],
);

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
