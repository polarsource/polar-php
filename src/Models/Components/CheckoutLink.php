<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** CheckoutLink - Checkout link data. */
class CheckoutLink
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
     * $metadata
     *
     * @var array<string, string|int|bool> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string|int|bool>')]
    public array $metadata;

    /**
     *
     * @var PaymentProcessor $paymentProcessor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payment_processor')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\PaymentProcessor')]
    public PaymentProcessor $paymentProcessor;

    /**
     * Client secret used to access the checkout link.
     *
     * @var string $clientSecret
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('client_secret')]
    public string $clientSecret;

    /**
     * Whether to allow the customer to apply discount codes. If you apply a discount through `discount_id`, it'll still be applied, but the customer won't be able to change it.
     *
     * @var bool $allowDiscountCodes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('allow_discount_codes')]
    public bool $allowDiscountCodes;

    /**
     * The organization ID.
     *
     * @var string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    public string $organizationId;

    /**
     * $products
     *
     * @var array<CheckoutLinkProduct> $products
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('products')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\CheckoutLinkProduct>')]
    public array $products;

    /**
     *
     * @var string $productId
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product_id')]
    public string $productId;

    /**
     *
     * @var string $productPriceId
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product_price_id')]
    public string $productPriceId;

    /**
     * Product data for a checkout link.
     *
     * @var CheckoutLinkProduct $product
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\CheckoutLinkProduct')]
    public CheckoutLinkProduct $product;

    /**
     *
     * @var LegacyRecurringProductPriceFixed|LegacyRecurringProductPriceCustom|LegacyRecurringProductPriceFree|ProductPriceFixed|ProductPriceCustom|ProductPriceFree|ProductPriceMeteredUnit $productPrice
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product_price')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\LegacyRecurringProductPriceFixed|\Polar\Models\Components\LegacyRecurringProductPriceCustom|\Polar\Models\Components\LegacyRecurringProductPriceFree|\Polar\Models\Components\ProductPriceFixed|\Polar\Models\Components\ProductPriceCustom|\Polar\Models\Components\ProductPriceFree|\Polar\Models\Components\ProductPriceMeteredUnit')]
    public LegacyRecurringProductPriceFixed|LegacyRecurringProductPriceCustom|LegacyRecurringProductPriceFree|ProductPriceFixed|ProductPriceCustom|ProductPriceFree|ProductPriceMeteredUnit $productPrice;

    /**
     *
     * @var string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    public string $url;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

    /**
     * URL where the customer will be redirected after a successful payment.
     *
     * @var ?string $successUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('success_url')]
    public ?string $successUrl;

    /**
     * Optional label to distinguish links internally
     *
     * @var ?string $label
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('label')]
    public ?string $label;

    /**
     * ID of the discount to apply to the checkout. If the discount is not applicable anymore when opening the checkout link, it'll be ignored.
     *
     * @var ?string $discountId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('discount_id')]
    public ?string $discountId;

    /**
     *
     * @var DiscountFixedOnceForeverDurationBase|DiscountFixedRepeatDurationBase|DiscountPercentageOnceForeverDurationBase|DiscountPercentageRepeatDurationBase|null $discount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('discount')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\DiscountFixedOnceForeverDurationBase|\Polar\Models\Components\DiscountFixedRepeatDurationBase|\Polar\Models\Components\DiscountPercentageOnceForeverDurationBase|\Polar\Models\Components\DiscountPercentageRepeatDurationBase|null')]
    public DiscountFixedOnceForeverDurationBase|DiscountFixedRepeatDurationBase|DiscountPercentageOnceForeverDurationBase|DiscountPercentageRepeatDurationBase|null $discount;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  array<string, string|int|bool>  $metadata
     * @param  PaymentProcessor  $paymentProcessor
     * @param  string  $clientSecret
     * @param  bool  $allowDiscountCodes
     * @param  string  $organizationId
     * @param  array<CheckoutLinkProduct>  $products
     * @param  string  $productId
     * @param  string  $productPriceId
     * @param  CheckoutLinkProduct  $product
     * @param  LegacyRecurringProductPriceFixed|LegacyRecurringProductPriceCustom|LegacyRecurringProductPriceFree|ProductPriceFixed|ProductPriceCustom|ProductPriceFree|ProductPriceMeteredUnit  $productPrice
     * @param  string  $url
     * @param  ?\DateTime  $modifiedAt
     * @param  ?string  $successUrl
     * @param  ?string  $label
     * @param  ?string  $discountId
     * @param  DiscountFixedOnceForeverDurationBase|DiscountFixedRepeatDurationBase|DiscountPercentageOnceForeverDurationBase|DiscountPercentageRepeatDurationBase|null  $discount
     * @phpstan-pure
     */
    public function __construct(\DateTime $createdAt, string $id, array $metadata, PaymentProcessor $paymentProcessor, string $clientSecret, bool $allowDiscountCodes, string $organizationId, array $products, string $productId, string $productPriceId, CheckoutLinkProduct $product, LegacyRecurringProductPriceFixed|LegacyRecurringProductPriceCustom|LegacyRecurringProductPriceFree|ProductPriceFixed|ProductPriceCustom|ProductPriceFree|ProductPriceMeteredUnit $productPrice, string $url, ?\DateTime $modifiedAt = null, ?string $successUrl = null, ?string $label = null, ?string $discountId = null, DiscountFixedOnceForeverDurationBase|DiscountFixedRepeatDurationBase|DiscountPercentageOnceForeverDurationBase|DiscountPercentageRepeatDurationBase|null $discount = null)
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->metadata = $metadata;
        $this->paymentProcessor = $paymentProcessor;
        $this->clientSecret = $clientSecret;
        $this->allowDiscountCodes = $allowDiscountCodes;
        $this->organizationId = $organizationId;
        $this->products = $products;
        $this->productId = $productId;
        $this->productPriceId = $productPriceId;
        $this->product = $product;
        $this->productPrice = $productPrice;
        $this->url = $url;
        $this->modifiedAt = $modifiedAt;
        $this->successUrl = $successUrl;
        $this->label = $label;
        $this->discountId = $discountId;
        $this->discount = $discount;
    }
}