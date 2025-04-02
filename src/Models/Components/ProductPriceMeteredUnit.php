<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** ProductPriceMeteredUnit - A metered, usage-based, price for a product, with a fixed unit price. */
class ProductPriceMeteredUnit
{
    /**
     * Creation timestamp of the object.
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * The ID of the price.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * Whether the price is archived and no longer available.
     *
     * @var bool $isArchived
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_archived')]
    public bool $isArchived;

    /**
     * The ID of the product owning the price.
     *
     * @var string $productId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product_id')]
    public string $productId;

    /**
     *
     * @var ProductPriceType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\ProductPriceType')]
    public ProductPriceType $type;

    /**
     * The currency.
     *
     * @var string $priceCurrency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('price_currency')]
    public string $priceCurrency;

    /**
     * The price per unit in cents.
     *
     * @var int $unitAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('unit_amount')]
    public int $unitAmount;

    /**
     * The ID of the meter associated to the price.
     *
     * @var string $meterId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('meter_id')]
    public string $meterId;

    /**
     * A meter associated to a metered price.
     *
     * @var ProductPriceMeter $meter
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('meter')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\ProductPriceMeter')]
    public ProductPriceMeter $meter;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

    /**
     *
     * @var ?SubscriptionRecurringInterval $recurringInterval
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('recurring_interval')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\SubscriptionRecurringInterval|null')]
    public ?SubscriptionRecurringInterval $recurringInterval;

    /**
     * The maximum amount in cents that can be charged, regardless of the number of units consumed.
     *
     * @var ?int $capAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cap_amount')]
    public ?int $capAmount;

    /**
     *
     * @var string $amountType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount_type')]
    public string $amountType;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  string  $amountType
     * @param  bool  $isArchived
     * @param  string  $productId
     * @param  ProductPriceType  $type
     * @param  string  $priceCurrency
     * @param  int  $unitAmount
     * @param  string  $meterId
     * @param  ProductPriceMeter  $meter
     * @param  ?\DateTime  $modifiedAt
     * @param  ?SubscriptionRecurringInterval  $recurringInterval
     * @param  ?int  $capAmount
     * @phpstan-pure
     */
    public function __construct(\DateTime $createdAt, string $id, bool $isArchived, string $productId, ProductPriceType $type, string $priceCurrency, int $unitAmount, string $meterId, ProductPriceMeter $meter, ?\DateTime $modifiedAt = null, ?SubscriptionRecurringInterval $recurringInterval = null, ?int $capAmount = null, string $amountType = 'metered_unit')
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->isArchived = $isArchived;
        $this->productId = $productId;
        $this->type = $type;
        $this->priceCurrency = $priceCurrency;
        $this->unitAmount = $unitAmount;
        $this->meterId = $meterId;
        $this->meter = $meter;
        $this->modifiedAt = $modifiedAt;
        $this->recurringInterval = $recurringInterval;
        $this->capAmount = $capAmount;
        $this->amountType = $amountType;
    }
}