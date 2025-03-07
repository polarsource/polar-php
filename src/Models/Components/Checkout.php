<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** Checkout - Checkout session data retrieved using an access token. */
class Checkout
{
    /**
     * Creation timestamp of the object.
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * The ID of the object.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var PaymentProcessor $paymentProcessor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payment_processor')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\PaymentProcessor')]
    public PaymentProcessor $paymentProcessor;

    /**
     *
     * @var CheckoutStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\CheckoutStatus')]
    public CheckoutStatus $status;

    /**
     * Client secret used to update and complete the checkout session from the client.
     *
     * @var string $clientSecret
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('client_secret')]
    public string $clientSecret;

    /**
     * URL where the customer can access the checkout session.
     *
     * @var string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    public string $url;

    /**
     * Expiration date and time of the checkout session.
     *
     * @var \DateTime $expiresAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expires_at')]
    public \DateTime $expiresAt;

    /**
     * URL where the customer will be redirected after a successful payment.
     *
     * @var string $successUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('success_url')]
    public string $successUrl;

    /**
     * ID of the product to checkout.
     *
     * @var string $productId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product_id')]
    public string $productId;

    /**
     * ID of the product price to checkout.
     *
     * @var string $productPriceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product_price_id')]
    public string $productPriceId;

    /**
     * Whether to allow the customer to apply discount codes. If you apply a discount through `discount_id`, it'll still be applied, but the customer won't be able to change it.
     *
     * @var bool $allowDiscountCodes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('allow_discount_codes')]
    public bool $allowDiscountCodes;

    /**
     * Whether the discount is applicable to the checkout. Typically, free and custom prices are not discountable.
     *
     * @var bool $isDiscountApplicable
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_discount_applicable')]
    public bool $isDiscountApplicable;

    /**
     * Whether the product price is free, regardless of discounts.
     *
     * @var bool $isFreeProductPrice
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_free_product_price')]
    public bool $isFreeProductPrice;

    /**
     * Whether the checkout requires payment, e.g. in case of free products or discounts that cover the total amount.
     *
     * @var bool $isPaymentRequired
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_payment_required')]
    public bool $isPaymentRequired;

    /**
     * Whether the checkout requires setting up a payment method, regardless of the amount, e.g. subscriptions that have first free cycles.
     *
     * @var bool $isPaymentSetupRequired
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_payment_setup_required')]
    public bool $isPaymentSetupRequired;

    /**
     * Whether the checkout requires a payment form, whether because of a payment or payment method setup.
     *
     * @var bool $isPaymentFormRequired
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_payment_form_required')]
    public bool $isPaymentFormRequired;

    /**
     * $paymentProcessorMetadata
     *
     * @var array<string, string> $paymentProcessorMetadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payment_processor_metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string>')]
    public array $paymentProcessorMetadata;

    /**
     * $metadata
     *
     * @var array<string, string|int|bool> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string|int|bool>')]
    public array $metadata;

    /**
     * List of products available to select.
     *
     * @var array<CheckoutProduct> $products
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('products')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\CheckoutProduct>')]
    public array $products;

    /**
     * Product data for a checkout session.
     *
     * @var CheckoutProduct $product
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\CheckoutProduct')]
    public CheckoutProduct $product;

    /**
     * Price of the selected product.
     *
     * @var LegacyRecurringProductPriceFixed|LegacyRecurringProductPriceCustom|LegacyRecurringProductPriceFree|ProductPriceFixed|ProductPriceCustom|ProductPriceFree $productPrice
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product_price')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\LegacyRecurringProductPriceFixed|\Polar\Models\Components\LegacyRecurringProductPriceCustom|\Polar\Models\Components\LegacyRecurringProductPriceFree|\Polar\Models\Components\ProductPriceFixed|\Polar\Models\Components\ProductPriceCustom|\Polar\Models\Components\ProductPriceFree')]
    public LegacyRecurringProductPriceFixed|LegacyRecurringProductPriceCustom|LegacyRecurringProductPriceFree|ProductPriceFixed|ProductPriceCustom|ProductPriceFree $productPrice;

    /**
     * $attachedCustomFields
     *
     * @var array<AttachedCustomField> $attachedCustomFields
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('attached_custom_fields')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\AttachedCustomField>')]
    public array $attachedCustomFields;

    /**
     * $customerMetadata
     *
     * @var array<string, string|int|bool> $customerMetadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string|int|bool>')]
    public array $customerMetadata;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

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
     * When checkout is embedded, represents the Origin of the page embedding the checkout. Used as a security measure to send messages only to the embedding page.
     *
     * @var ?string $embedOrigin
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('embed_origin')]
    public ?string $embedOrigin;

    /**
     *
     * @var ?int $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    public ?int $amount;

    /**
     * Computed tax amount to pay in cents.
     *
     * @var ?int $taxAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_amount')]
    public ?int $taxAmount;

    /**
     * Currency code of the checkout session.
     *
     * @var ?string $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    public ?string $currency;

    /**
     * Subtotal amount in cents, including discounts and before tax.
     *
     * @var ?int $subtotalAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subtotal_amount')]
    public ?int $subtotalAmount;

    /**
     * Total amount to pay in cents, including discounts and after tax.
     *
     * @var ?int $totalAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('total_amount')]
    public ?int $totalAmount;

    /**
     * ID of the discount applied to the checkout.
     *
     * @var ?string $discountId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('discount_id')]
    public ?string $discountId;

    /**
     *
     * @var ?string $customerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_id')]
    public ?string $customerId;

    /**
     * Name of the customer.
     *
     * @var ?string $customerName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_name')]
    public ?string $customerName;

    /**
     * Email address of the customer.
     *
     * @var ?string $customerEmail
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_email')]
    public ?string $customerEmail;

    /**
     *
     * @var ?string $customerIpAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_ip_address')]
    public ?string $customerIpAddress;

    /**
     *
     * @var ?Address $customerBillingAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_billing_address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Address|null')]
    public ?Address $customerBillingAddress;

    /**
     *
     * @var ?string $customerTaxId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_tax_id')]
    public ?string $customerTaxId;

    /**
     * ID of the customer in your system. If a matching customer exists on Polar, the resulting order will be linked to this customer. Otherwise, a new customer will be created with this external ID set.
     *
     * @var ?string $customerExternalId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_external_id')]
    public ?string $customerExternalId;

    /**
     *
     * @var CheckoutDiscountFixedOnceForeverDuration|CheckoutDiscountFixedRepeatDuration|CheckoutDiscountPercentageOnceForeverDuration|CheckoutDiscountPercentageRepeatDuration|null $discount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('discount')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\CheckoutDiscountFixedOnceForeverDuration|\Polar\Models\Components\CheckoutDiscountFixedRepeatDuration|\Polar\Models\Components\CheckoutDiscountPercentageOnceForeverDuration|\Polar\Models\Components\CheckoutDiscountPercentageRepeatDuration|null')]
    public CheckoutDiscountFixedOnceForeverDuration|CheckoutDiscountFixedRepeatDuration|CheckoutDiscountPercentageOnceForeverDuration|CheckoutDiscountPercentageRepeatDuration|null $discount;

    /**
     *
     * @var ?string $subscriptionId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscription_id')]
    public ?string $subscriptionId;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  PaymentProcessor  $paymentProcessor
     * @param  CheckoutStatus  $status
     * @param  string  $clientSecret
     * @param  string  $url
     * @param  \DateTime  $expiresAt
     * @param  string  $successUrl
     * @param  string  $productId
     * @param  string  $productPriceId
     * @param  bool  $allowDiscountCodes
     * @param  bool  $isDiscountApplicable
     * @param  bool  $isFreeProductPrice
     * @param  bool  $isPaymentRequired
     * @param  bool  $isPaymentSetupRequired
     * @param  bool  $isPaymentFormRequired
     * @param  array<string, string>  $paymentProcessorMetadata
     * @param  array<string, string|int|bool>  $metadata
     * @param  array<CheckoutProduct>  $products
     * @param  CheckoutProduct  $product
     * @param  LegacyRecurringProductPriceFixed|LegacyRecurringProductPriceCustom|LegacyRecurringProductPriceFree|ProductPriceFixed|ProductPriceCustom|ProductPriceFree  $productPrice
     * @param  array<AttachedCustomField>  $attachedCustomFields
     * @param  array<string, string|int|bool>  $customerMetadata
     * @param  ?\DateTime  $modifiedAt
     * @param  ?array<string, string|int|bool|\DateTime|null>  $customFieldData
     * @param  ?string  $embedOrigin
     * @param  ?int  $amount
     * @param  ?int  $taxAmount
     * @param  ?string  $currency
     * @param  ?int  $subtotalAmount
     * @param  ?int  $totalAmount
     * @param  ?string  $discountId
     * @param  ?string  $customerId
     * @param  ?string  $customerName
     * @param  ?string  $customerEmail
     * @param  ?string  $customerIpAddress
     * @param  ?Address  $customerBillingAddress
     * @param  ?string  $customerTaxId
     * @param  ?string  $customerExternalId
     * @param  CheckoutDiscountFixedOnceForeverDuration|CheckoutDiscountFixedRepeatDuration|CheckoutDiscountPercentageOnceForeverDuration|CheckoutDiscountPercentageRepeatDuration|null  $discount
     * @param  ?string  $subscriptionId
     * @phpstan-pure
     */
    public function __construct(\DateTime $createdAt, string $id, PaymentProcessor $paymentProcessor, CheckoutStatus $status, string $clientSecret, string $url, \DateTime $expiresAt, string $successUrl, string $productId, string $productPriceId, bool $allowDiscountCodes, bool $isDiscountApplicable, bool $isFreeProductPrice, bool $isPaymentRequired, bool $isPaymentSetupRequired, bool $isPaymentFormRequired, array $paymentProcessorMetadata, array $metadata, array $products, CheckoutProduct $product, LegacyRecurringProductPriceFixed|LegacyRecurringProductPriceCustom|LegacyRecurringProductPriceFree|ProductPriceFixed|ProductPriceCustom|ProductPriceFree $productPrice, array $attachedCustomFields, array $customerMetadata, ?\DateTime $modifiedAt = null, ?array $customFieldData = null, ?string $embedOrigin = null, ?int $amount = null, ?int $taxAmount = null, ?string $currency = null, ?int $subtotalAmount = null, ?int $totalAmount = null, ?string $discountId = null, ?string $customerId = null, ?string $customerName = null, ?string $customerEmail = null, ?string $customerIpAddress = null, ?Address $customerBillingAddress = null, ?string $customerTaxId = null, ?string $customerExternalId = null, CheckoutDiscountFixedOnceForeverDuration|CheckoutDiscountFixedRepeatDuration|CheckoutDiscountPercentageOnceForeverDuration|CheckoutDiscountPercentageRepeatDuration|null $discount = null, ?string $subscriptionId = null)
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->paymentProcessor = $paymentProcessor;
        $this->status = $status;
        $this->clientSecret = $clientSecret;
        $this->url = $url;
        $this->expiresAt = $expiresAt;
        $this->successUrl = $successUrl;
        $this->productId = $productId;
        $this->productPriceId = $productPriceId;
        $this->allowDiscountCodes = $allowDiscountCodes;
        $this->isDiscountApplicable = $isDiscountApplicable;
        $this->isFreeProductPrice = $isFreeProductPrice;
        $this->isPaymentRequired = $isPaymentRequired;
        $this->isPaymentSetupRequired = $isPaymentSetupRequired;
        $this->isPaymentFormRequired = $isPaymentFormRequired;
        $this->paymentProcessorMetadata = $paymentProcessorMetadata;
        $this->metadata = $metadata;
        $this->products = $products;
        $this->product = $product;
        $this->productPrice = $productPrice;
        $this->attachedCustomFields = $attachedCustomFields;
        $this->customerMetadata = $customerMetadata;
        $this->modifiedAt = $modifiedAt;
        $this->customFieldData = $customFieldData;
        $this->embedOrigin = $embedOrigin;
        $this->amount = $amount;
        $this->taxAmount = $taxAmount;
        $this->currency = $currency;
        $this->subtotalAmount = $subtotalAmount;
        $this->totalAmount = $totalAmount;
        $this->discountId = $discountId;
        $this->customerId = $customerId;
        $this->customerName = $customerName;
        $this->customerEmail = $customerEmail;
        $this->customerIpAddress = $customerIpAddress;
        $this->customerBillingAddress = $customerBillingAddress;
        $this->customerTaxId = $customerTaxId;
        $this->customerExternalId = $customerExternalId;
        $this->discount = $discount;
        $this->subscriptionId = $subscriptionId;
    }
}