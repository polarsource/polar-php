<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** DiscountFixedOnceForeverDurationCreate - Schema to create a fixed amount discount that is applied once or forever. */
class DiscountFixedOnceForeverDurationCreate
{
    /**
     *
     * @var DiscountDuration $duration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('duration')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\DiscountDuration')]
    public DiscountDuration $duration;

    /**
     *
     * @var DiscountType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\DiscountType')]
    public DiscountType $type;

    /**
     * Fixed amount to discount from the invoice total.
     *
     * @var int $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    public int $amount;

    /**
     * Name of the discount. Will be displayed to the customer when the discount is applied.
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

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
     * Code customers can use to apply the discount during checkout. Must be between 3 and 256 characters long and contain only alphanumeric characters.If not provided, the discount can only be applied via the API.
     *
     * @var ?string $code
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $code = null;

    /**
     * Optional timestamp after which the discount is redeemable.
     *
     * @var ?\DateTime $startsAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('starts_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $startsAt = null;

    /**
     * Optional timestamp after which the discount is no longer redeemable.
     *
     * @var ?\DateTime $endsAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ends_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $endsAt = null;

    /**
     * Optional maximum number of times the discount can be redeemed.
     *
     * @var ?int $maxRedemptions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('max_redemptions')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $maxRedemptions = null;

    /**
     * $products
     *
     * @var ?array<string> $products
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('products')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $products = null;

    /**
     * The ID of the organization owning the discount. **Required unless you use an organization token.**
     *
     * @var ?string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $organizationId = null;

    /**
     * The currency. Currently, only `usd` is supported.
     *
     * @var ?string $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $currency = null;

    /**
     * @param  DiscountDuration  $duration
     * @param  DiscountType  $type
     * @param  int  $amount
     * @param  string  $name
     * @param  ?string  $currency
     * @param  ?array<string, string|int|bool>  $metadata
     * @param  ?string  $code
     * @param  ?\DateTime  $startsAt
     * @param  ?\DateTime  $endsAt
     * @param  ?int  $maxRedemptions
     * @param  ?array<string>  $products
     * @param  ?string  $organizationId
     * @phpstan-pure
     */
    public function __construct(DiscountDuration $duration, DiscountType $type, int $amount, string $name, ?array $metadata = null, ?string $code = null, ?\DateTime $startsAt = null, ?\DateTime $endsAt = null, ?int $maxRedemptions = null, ?array $products = null, ?string $organizationId = null, ?string $currency = 'usd')
    {
        $this->duration = $duration;
        $this->type = $type;
        $this->amount = $amount;
        $this->name = $name;
        $this->metadata = $metadata;
        $this->code = $code;
        $this->startsAt = $startsAt;
        $this->endsAt = $endsAt;
        $this->maxRedemptions = $maxRedemptions;
        $this->products = $products;
        $this->organizationId = $organizationId;
        $this->currency = $currency;
    }
}