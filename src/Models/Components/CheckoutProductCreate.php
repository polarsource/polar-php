<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/**
 * CheckoutProductCreate - Create a new checkout session from a product.
 *
 *
 * **Deprecated**: Use `CheckoutProductsCreate` instead.
 *
 * Metadata set on the checkout will be copied
 * to the resulting order and/or subscription.
 */
class CheckoutProductCreate
{
    /**
     * ID of the product to checkout. First available price will be selected.
     *
     * @var string $productId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product_id')]
    public string $productId;

    /**
     * Key-value object allowing you to store additional information.
     *
     *
     * The key must be a string with a maximum length of **40 characters**.
     * The value must be either:
     *
     * * A string with a maximum length of **500 characters**
     * * An integer
     * * A boolean
     *
     * You can store up to **50 key-value pairs**.
     *
     * @var ?array<string, string|int|bool> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string|int|bool>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     * Key-value object storing custom field values.
     *
     * @var ?array<string, string|int|bool|\DateTime|null> $customFieldData
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_field_data')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string|int|bool|\DateTime|null>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $customFieldData = null;

    /**
     * Key-value object allowing you to store additional information that'll be copied to the created customer.
     *
     *
     * The key must be a string with a maximum length of **40 characters**.
     * The value must be either:
     *
     * * A string with a maximum length of **500 characters**
     * * An integer
     * * A boolean
     *
     * You can store up to **50 key-value pairs**.
     *
     * @var ?array<string, string|int|bool> $customerMetadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string|int|bool>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $customerMetadata = null;

    /**
     * ID of the discount to apply to the checkout.
     *
     * @var ?string $discountId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('discount_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $discountId = null;

    /**
     *
     * @var ?int $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $amount = null;

    /**
     * ID of an existing customer in the organization. The customer data will be pre-filled in the checkout form. The resulting order will be linked to this customer.
     *
     * @var ?string $customerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customerId = null;

    /**
     * ID of the customer in your system. If a matching customer exists on Polar, the resulting order will be linked to this customer. Otherwise, a new customer will be created with this external ID set.
     *
     * @var ?string $customerExternalId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_external_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customerExternalId = null;

    /**
     *
     * @var ?string $customerName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customerName = null;

    /**
     *
     * @var ?string $customerEmail
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customerEmail = null;

    /**
     *
     * @var ?string $customerIpAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_ip_address')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customerIpAddress = null;

    /**
     *
     * @var ?Address $customerBillingAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_billing_address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Address|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Address $customerBillingAddress = null;

    /**
     *
     * @var ?string $customerTaxId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_tax_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customerTaxId = null;

    /**
     * ID of a subscription to upgrade. It must be on a free pricing. If checkout is successful, metadata set on this checkout will be copied to the subscription, and existing keys will be overwritten.
     *
     * @var ?string $subscriptionId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscription_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $subscriptionId = null;

    /**
     * URL where the customer will be redirected after a successful payment.You can add the `checkout_id={CHECKOUT_ID}` query parameter to retrieve the checkout session id.
     *
     * @var ?string $successUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('success_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $successUrl = null;

    /**
     * If you plan to embed the checkout session, set this to the Origin of the embedding page. It'll allow the Polar iframe to communicate with the parent page.
     *
     * @var ?string $embedOrigin
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('embed_origin')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $embedOrigin = null;

    /**
     * Whether to allow the customer to apply discount codes. If you apply a discount through `discount_id`, it'll still be applied, but the customer won't be able to change it.
     *
     * @var ?bool $allowDiscountCodes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('allow_discount_codes')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $allowDiscountCodes = null;

    /**
     * @param  string  $productId
     * @param  ?array<string, string|int|bool>  $metadata
     * @param  ?array<string, string|int|bool|\DateTime|null>  $customFieldData
     * @param  ?bool  $allowDiscountCodes
     * @param  ?array<string, string|int|bool>  $customerMetadata
     * @param  ?string  $discountId
     * @param  ?int  $amount
     * @param  ?string  $customerId
     * @param  ?string  $customerExternalId
     * @param  ?string  $customerName
     * @param  ?string  $customerEmail
     * @param  ?string  $customerIpAddress
     * @param  ?Address  $customerBillingAddress
     * @param  ?string  $customerTaxId
     * @param  ?string  $subscriptionId
     * @param  ?string  $successUrl
     * @param  ?string  $embedOrigin
     * @phpstan-pure
     */
    public function __construct(string $productId, ?array $metadata = null, ?array $customFieldData = null, ?array $customerMetadata = null, ?string $discountId = null, ?int $amount = null, ?string $customerId = null, ?string $customerExternalId = null, ?string $customerName = null, ?string $customerEmail = null, ?string $customerIpAddress = null, ?Address $customerBillingAddress = null, ?string $customerTaxId = null, ?string $subscriptionId = null, ?string $successUrl = null, ?string $embedOrigin = null, ?bool $allowDiscountCodes = true)
    {
        $this->productId = $productId;
        $this->metadata = $metadata;
        $this->customFieldData = $customFieldData;
        $this->customerMetadata = $customerMetadata;
        $this->discountId = $discountId;
        $this->amount = $amount;
        $this->customerId = $customerId;
        $this->customerExternalId = $customerExternalId;
        $this->customerName = $customerName;
        $this->customerEmail = $customerEmail;
        $this->customerIpAddress = $customerIpAddress;
        $this->customerBillingAddress = $customerBillingAddress;
        $this->customerTaxId = $customerTaxId;
        $this->subscriptionId = $subscriptionId;
        $this->successUrl = $successUrl;
        $this->embedOrigin = $embedOrigin;
        $this->allowDiscountCodes = $allowDiscountCodes;
    }
}