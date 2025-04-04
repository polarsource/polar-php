<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** CheckoutLinkUpdate - Schema to update an existing checkout link. */
class CheckoutLinkUpdate
{
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
     * List of products that will be available to select at checkout.
     *
     * @var ?array<string> $products
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('products')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $products = null;

    /**
     *
     * @var ?string $label
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('label')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $label = null;

    /**
     * Whether to allow the customer to apply discount codes. If you apply a discount through `discount_id`, it'll still be applied, but the customer won't be able to change it.
     *
     * @var ?bool $allowDiscountCodes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('allow_discount_codes')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $allowDiscountCodes = null;

    /**
     * ID of the discount to apply to the checkout. If the discount is not applicable anymore when opening the checkout link, it'll be ignored.
     *
     * @var ?string $discountId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('discount_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $discountId = null;

    /**
     * URL where the customer will be redirected after a successful payment.You can add the `checkout_id={CHECKOUT_ID}` query parameter to retrieve the checkout session id.
     *
     * @var ?string $successUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('success_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $successUrl = null;

    /**
     * @param  ?array<string, string|int|bool>  $metadata
     * @param  ?array<string>  $products
     * @param  ?string  $label
     * @param  ?bool  $allowDiscountCodes
     * @param  ?string  $discountId
     * @param  ?string  $successUrl
     * @phpstan-pure
     */
    public function __construct(?array $metadata = null, ?array $products = null, ?string $label = null, ?bool $allowDiscountCodes = null, ?string $discountId = null, ?string $successUrl = null)
    {
        $this->metadata = $metadata;
        $this->products = $products;
        $this->label = $label;
        $this->allowDiscountCodes = $allowDiscountCodes;
        $this->discountId = $discountId;
        $this->successUrl = $successUrl;
    }
}