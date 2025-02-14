<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** ProductPriceRecurringFree - A free recurring price for a product, i.e. a subscription. */
class ProductPriceRecurringFree
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
     * @var SubscriptionRecurringInterval $recurringInterval
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('recurring_interval')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\SubscriptionRecurringInterval')]
    public SubscriptionRecurringInterval $recurringInterval;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

    /**
     *
     * @var string $amountType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount_type')]
    public string $amountType;

    /**
     * The type of the price.
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  string  $amountType
     * @param  bool  $isArchived
     * @param  string  $productId
     * @param  string  $type
     * @param  SubscriptionRecurringInterval  $recurringInterval
     * @param  ?\DateTime  $modifiedAt
     * @phpstan-pure
     */
    public function __construct(\DateTime $createdAt, string $id, bool $isArchived, string $productId, SubscriptionRecurringInterval $recurringInterval, ?\DateTime $modifiedAt = null, string $amountType = 'free', string $type = 'recurring')
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->isArchived = $isArchived;
        $this->productId = $productId;
        $this->recurringInterval = $recurringInterval;
        $this->modifiedAt = $modifiedAt;
        $this->amountType = $amountType;
        $this->type = $type;
    }
}