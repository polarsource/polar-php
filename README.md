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
        createdAt: Utils\Utils::parseDateTime('2023-02-15T15:44:21.478Z'),
        modifiedAt: Utils\Utils::parseDateTime('2025-09-12T19:48:15.814Z'),
        id: '<value>',
        paymentProcessor: Components\PaymentProcessor::Stripe,
        status: Components\CheckoutStatus::Expired,
        clientSecret: '<value>',
        url: 'https://fair-veto.com/',
        expiresAt: Utils\Utils::parseDateTime('2025-03-15T14:26:53.109Z'),
        successUrl: 'https://junior-linseed.net/',
        embedOrigin: '<value>',
        amount: 631188,
        discountAmount: 968968,
        netAmount: 929514,
        taxAmount: 323773,
        totalAmount: 115799,
        currency: 'Som',
        productId: '<value>',
        productPriceId: '<value>',
        discountId: '<value>',
        allowDiscountCodes: true,
        requireBillingAddress: false,
        isDiscountApplicable: true,
        isFreeProductPrice: true,
        isPaymentRequired: true,
        isPaymentSetupRequired: true,
        isPaymentFormRequired: true,
        customerId: '<value>',
        isBusinessCustomer: true,
        customerName: '<value>',
        customerEmail: '<value>',
        customerIpAddress: '<value>',
        customerBillingName: '<value>',
        customerBillingAddress: new Components\Address(
            country: 'US',
        ),
        customerTaxId: '<id>',
        paymentProcessorMetadata: [

        ],
        billingAddressFields: new Components\CheckoutBillingAddressFields(
            country: Components\BillingAddressFieldMode::Required,
            state: Components\BillingAddressFieldMode::Disabled,
            city: Components\BillingAddressFieldMode::Required,
            postalCode: Components\BillingAddressFieldMode::Required,
            line1: Components\BillingAddressFieldMode::Required,
            line2: Components\BillingAddressFieldMode::Disabled,
        ),
        metadata: [
            'key' => '<value>',
        ],
        externalCustomerId: null,
        customerExternalId: '<id>',
        products: [],
        product: new Components\CheckoutProduct(
            createdAt: Utils\Utils::parseDateTime('2025-03-29T00:34:40.708Z'),
            modifiedAt: Utils\Utils::parseDateTime('2024-04-06T18:48:21.449Z'),
            id: '<value>',
            name: '<value>',
            description: 'stall for mousse',
            recurringInterval: Components\SubscriptionRecurringInterval::Year,
            isRecurring: false,
            isArchived: true,
            organizationId: '<value>',
            prices: [
                new Components\LegacyRecurringProductPriceFree(
                    createdAt: Utils\Utils::parseDateTime('2023-09-13T08:36:46.434Z'),
                    modifiedAt: Utils\Utils::parseDateTime('2023-10-05T12:55:46.428Z'),
                    id: '<value>',
                    isArchived: false,
                    productId: '<value>',
                    recurringInterval: Components\SubscriptionRecurringInterval::Month,
                ),
                new Components\LegacyRecurringProductPriceFixed(
                    createdAt: Utils\Utils::parseDateTime('2024-05-02T18:25:33.974Z'),
                    modifiedAt: Utils\Utils::parseDateTime('2025-02-06T12:55:07.640Z'),
                    id: '<value>',
                    isArchived: false,
                    productId: '<value>',
                    recurringInterval: Components\SubscriptionRecurringInterval::Month,
                    priceCurrency: '<value>',
                    priceAmount: 115799,
                ),
            ],
            benefits: [],
            medias: [
                new Components\ProductMediaFileRead(
                    id: '<value>',
                    organizationId: '<value>',
                    name: '<value>',
                    path: '/private/tmp',
                    mimeType: '<value>',
                    size: 225502,
                    storageVersion: '<value>',
                    checksumEtag: '<value>',
                    checksumSha256Base64: '<value>',
                    checksumSha256Hex: '<value>',
                    lastModifiedAt: Utils\Utils::parseDateTime('2024-07-06T07:35:44.280Z'),
                    version: '<value>',
                    isUploaded: true,
                    createdAt: Utils\Utils::parseDateTime('2024-10-08T20:45:26.653Z'),
                    sizeReadable: '<value>',
                    publicUrl: 'https://graceful-battle.info',
                ),
                new Components\ProductMediaFileRead(
                    id: '<value>',
                    organizationId: '<value>',
                    name: '<value>',
                    path: '/private/tmp',
                    mimeType: '<value>',
                    size: 225502,
                    storageVersion: '<value>',
                    checksumEtag: '<value>',
                    checksumSha256Base64: '<value>',
                    checksumSha256Hex: '<value>',
                    lastModifiedAt: Utils\Utils::parseDateTime('2024-07-06T07:35:44.280Z'),
                    version: '<value>',
                    isUploaded: true,
                    createdAt: Utils\Utils::parseDateTime('2024-10-08T20:45:26.653Z'),
                    sizeReadable: '<value>',
                    publicUrl: 'https://graceful-battle.info',
                ),
                new Components\ProductMediaFileRead(
                    id: '<value>',
                    organizationId: '<value>',
                    name: '<value>',
                    path: '/private/tmp',
                    mimeType: '<value>',
                    size: 225502,
                    storageVersion: '<value>',
                    checksumEtag: '<value>',
                    checksumSha256Base64: '<value>',
                    checksumSha256Hex: '<value>',
                    lastModifiedAt: Utils\Utils::parseDateTime('2024-07-06T07:35:44.280Z'),
                    version: '<value>',
                    isUploaded: true,
                    createdAt: Utils\Utils::parseDateTime('2024-10-08T20:45:26.653Z'),
                    sizeReadable: '<value>',
                    publicUrl: 'https://graceful-battle.info',
                ),
            ],
        ),
        productPrice: new Components\LegacyRecurringProductPriceFree(
            createdAt: Utils\Utils::parseDateTime('2023-10-30T00:08:39.161Z'),
            modifiedAt: Utils\Utils::parseDateTime('2023-01-11T22:31:47.320Z'),
            id: '<value>',
            isArchived: true,
            productId: '<value>',
            recurringInterval: Components\SubscriptionRecurringInterval::Month,
        ),
        discount: new Components\CheckoutDiscountFixedOnceForeverDuration(
            duration: Components\DiscountDuration::Once,
            type: Components\DiscountType::Fixed,
            amount: 405691,
            currency: 'Dobra',
            id: '<value>',
            name: '<value>',
            code: '<value>',
        ),
        subscriptionId: '<value>',
        attachedCustomFields: [
            new Components\AttachedCustomField(
                customFieldId: '<value>',
                customField: new Components\CustomFieldText(
                    createdAt: Utils\Utils::parseDateTime('2025-06-07T12:37:50.969Z'),
                    modifiedAt: Utils\Utils::parseDateTime('2023-11-20T09:37:39.033Z'),
                    id: '<value>',
                    metadata: [
                        'key' => true,
                        'key1' => '<value>',
                        'key2' => '<value>',
                    ],
                    slug: '<value>',
                    name: '<value>',
                    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
                    properties: new Components\CustomFieldTextProperties(),
                ),
                order: 168537,
                required: false,
            ),
        ],
        customerMetadata: [
            'key' => true,
            'key1' => 203013,
            'key2' => 851435,
        ],
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

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$responses = $sdk->organizations->list(
    page: 1,
    limit: 10

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
    organizationId: '1dbfc517-0bbf-4301-9ba8-555ca42b9737',
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
* [update](docs/sdks/checkouts/README.md#update) - Update Checkout Session
* [clientGet](docs/sdks/checkouts/README.md#clientget) - Get Checkout Session from Client
* [clientUpdate](docs/sdks/checkouts/README.md#clientupdate) - Update Checkout Session from Client
* [clientConfirm](docs/sdks/checkouts/README.md#clientconfirm) - Confirm Checkout Session from Client

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
* [listPaymentMethods](docs/sdks/polarcustomers/README.md#listpaymentmethods) - List Customer Payment Methods
* [addPaymentMethod](docs/sdks/polarcustomers/README.md#addpaymentmethod) - Add Customer Payment Method
* [deletePaymentMethod](docs/sdks/polarcustomers/README.md#deletepaymentmethod) - Delete Customer Payment Method

#### [customerPortal->downloadables](docs/sdks/downloadables/README.md)

* [list](docs/sdks/downloadables/README.md#list) - List Downloadables

#### [customerPortal->licenseKeys](docs/sdks/polarlicensekeys/README.md)

* [list](docs/sdks/polarlicensekeys/README.md#list) - List License Keys
* [get](docs/sdks/polarlicensekeys/README.md#get) - Get License Key
* [validate](docs/sdks/polarlicensekeys/README.md#validate) - Validate License Key
* [activate](docs/sdks/polarlicensekeys/README.md#activate) - Activate License Key
* [deactivate](docs/sdks/polarlicensekeys/README.md#deactivate) - Deactivate License Key

#### [customerPortal->orders](docs/sdks/polarorders/README.md)

* [list](docs/sdks/polarorders/README.md#list) - List Orders
* [get](docs/sdks/polarorders/README.md#get) - Get Order
* [update](docs/sdks/polarorders/README.md#update) - Update Order
* [generateInvoice](docs/sdks/polarorders/README.md#generateinvoice) - Generate Order Invoice
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

### [orders](docs/sdks/orders/README.md)

* [list](docs/sdks/orders/README.md#list) - List Orders
* [get](docs/sdks/orders/README.md#get) - Get Order
* [update](docs/sdks/orders/README.md#update) - Update Order
* [generateInvoice](docs/sdks/orders/README.md#generateinvoice) - Generate Order Invoice
* [invoice](docs/sdks/orders/README.md#invoice) - Get Order Invoice

### [organizations](docs/sdks/organizations/README.md)

* [list](docs/sdks/organizations/README.md#list) - List Organizations
* [create](docs/sdks/organizations/README.md#create) - Create Organization
* [get](docs/sdks/organizations/README.md#get) - Get Organization
* [update](docs/sdks/organizations/README.md#update) - Update Organization

### [payments](docs/sdks/payments/README.md)

* [list](docs/sdks/payments/README.md#list) - List Payments
* [get](docs/sdks/payments/README.md#get) - Get Payment


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

### [webhooks](docs/sdks/webhooks/README.md)

* [listWebhookEndpoints](docs/sdks/webhooks/README.md#listwebhookendpoints) - List Webhook Endpoints
* [createWebhookEndpoint](docs/sdks/webhooks/README.md#createwebhookendpoint) - Create Webhook Endpoint
* [getWebhookEndpoint](docs/sdks/webhooks/README.md#getwebhookendpoint) - Get Webhook Endpoint
* [updateWebhookEndpoint](docs/sdks/webhooks/README.md#updatewebhookendpoint) - Update Webhook Endpoint
* [deleteWebhookEndpoint](docs/sdks/webhooks/README.md#deletewebhookendpoint) - Delete Webhook Endpoint
* [resetWebhookEndpointSecret](docs/sdks/webhooks/README.md#resetwebhookendpointsecret) - Reset Webhook Endpoint Secret
* [listWebhookDeliveries](docs/sdks/webhooks/README.md#listwebhookdeliveries) - List Webhook Deliveries
* [redeliverWebhookEvent](docs/sdks/webhooks/README.md#redeliverwebhookevent) - Redeliver Webhook Event

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

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$responses = $sdk->organizations->list(
    page: 1,
    limit: 10

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

$sdk = Polar\Polar::builder()
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

try {
    $responses = $sdk->organizations->list(
        page: 1,
        limit: 10

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

$sdk = Polar\Polar::builder()
    ->setServer('sandbox')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$responses = $sdk->organizations->list(
    page: 1,
    limit: 10

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

$sdk = Polar\Polar::builder()
    ->setServerURL('https://api.polar.sh')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();



$responses = $sdk->organizations->list(
    page: 1,
    limit: 10

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
