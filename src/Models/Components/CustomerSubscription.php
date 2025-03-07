<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class CustomerSubscription
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
     * @var SubscriptionRecurringInterval $recurringInterval
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('recurring_interval')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\SubscriptionRecurringInterval')]
    public SubscriptionRecurringInterval $recurringInterval;

    /**
     *
     * @var SubscriptionStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\SubscriptionStatus')]
    public SubscriptionStatus $status;

    /**
     *
     * @var \DateTime $currentPeriodStart
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('current_period_start')]
    public \DateTime $currentPeriodStart;

    /**
     *
     * @var bool $cancelAtPeriodEnd
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cancel_at_period_end')]
    public bool $cancelAtPeriodEnd;

    /**
     *
     * @var string $customerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_id')]
    public string $customerId;

    /**
     *
     * @var string $productId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product_id')]
    public string $productId;

    /**
     *
     * @var string $priceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('price_id')]
    public string $priceId;

    /**
     *
     * @var string $userId
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('user_id')]
    public string $userId;

    /**
     *
     * @var CustomerSubscriptionProduct $product
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\CustomerSubscriptionProduct')]
    public CustomerSubscriptionProduct $product;

    /**
     *
     * @var LegacyRecurringProductPriceFixed|LegacyRecurringProductPriceCustom|LegacyRecurringProductPriceFree|ProductPriceFixed|ProductPriceCustom|ProductPriceFree $price
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('price')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\LegacyRecurringProductPriceFixed|\Polar\Models\Components\LegacyRecurringProductPriceCustom|\Polar\Models\Components\LegacyRecurringProductPriceFree|\Polar\Models\Components\ProductPriceFixed|\Polar\Models\Components\ProductPriceCustom|\Polar\Models\Components\ProductPriceFree')]
    public LegacyRecurringProductPriceFixed|LegacyRecurringProductPriceCustom|LegacyRecurringProductPriceFree|ProductPriceFixed|ProductPriceCustom|ProductPriceFree $price;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

    /**
     * The amount of the subscription.
     *
     * @var ?int $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    public ?int $amount;

    /**
     * The currency of the subscription.
     *
     * @var ?string $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    public ?string $currency;

    /**
     *
     * @var ?\DateTime $currentPeriodEnd
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('current_period_end')]
    public ?\DateTime $currentPeriodEnd;

    /**
     *
     * @var ?\DateTime $canceledAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('canceled_at')]
    public ?\DateTime $canceledAt;

    /**
     *
     * @var ?\DateTime $startedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('started_at')]
    public ?\DateTime $startedAt;

    /**
     *
     * @var ?\DateTime $endsAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ends_at')]
    public ?\DateTime $endsAt;

    /**
     *
     * @var ?\DateTime $endedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ended_at')]
    public ?\DateTime $endedAt;

    /**
     * The ID of the applied discount, if any.
     *
     * @var ?string $discountId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('discount_id')]
    public ?string $discountId;

    /**
     *
     * @var ?string $checkoutId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('checkout_id')]
    public ?string $checkoutId;

    /**
     *
     * @var ?CustomerCancellationReason $customerCancellationReason
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_cancellation_reason')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\CustomerCancellationReason|null')]
    public ?CustomerCancellationReason $customerCancellationReason;

    /**
     *
     * @var ?string $customerCancellationComment
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_cancellation_comment')]
    public ?string $customerCancellationComment;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  SubscriptionRecurringInterval  $recurringInterval
     * @param  SubscriptionStatus  $status
     * @param  \DateTime  $currentPeriodStart
     * @param  bool  $cancelAtPeriodEnd
     * @param  string  $customerId
     * @param  string  $productId
     * @param  string  $priceId
     * @param  string  $userId
     * @param  CustomerSubscriptionProduct  $product
     * @param  LegacyRecurringProductPriceFixed|LegacyRecurringProductPriceCustom|LegacyRecurringProductPriceFree|ProductPriceFixed|ProductPriceCustom|ProductPriceFree  $price
     * @param  ?\DateTime  $modifiedAt
     * @param  ?int  $amount
     * @param  ?string  $currency
     * @param  ?\DateTime  $currentPeriodEnd
     * @param  ?\DateTime  $canceledAt
     * @param  ?\DateTime  $startedAt
     * @param  ?\DateTime  $endsAt
     * @param  ?\DateTime  $endedAt
     * @param  ?string  $discountId
     * @param  ?string  $checkoutId
     * @param  ?CustomerCancellationReason  $customerCancellationReason
     * @param  ?string  $customerCancellationComment
     * @phpstan-pure
     */
    public function __construct(\DateTime $createdAt, string $id, SubscriptionRecurringInterval $recurringInterval, SubscriptionStatus $status, \DateTime $currentPeriodStart, bool $cancelAtPeriodEnd, string $customerId, string $productId, string $priceId, string $userId, CustomerSubscriptionProduct $product, LegacyRecurringProductPriceFixed|LegacyRecurringProductPriceCustom|LegacyRecurringProductPriceFree|ProductPriceFixed|ProductPriceCustom|ProductPriceFree $price, ?\DateTime $modifiedAt = null, ?int $amount = null, ?string $currency = null, ?\DateTime $currentPeriodEnd = null, ?\DateTime $canceledAt = null, ?\DateTime $startedAt = null, ?\DateTime $endsAt = null, ?\DateTime $endedAt = null, ?string $discountId = null, ?string $checkoutId = null, ?CustomerCancellationReason $customerCancellationReason = null, ?string $customerCancellationComment = null)
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->recurringInterval = $recurringInterval;
        $this->status = $status;
        $this->currentPeriodStart = $currentPeriodStart;
        $this->cancelAtPeriodEnd = $cancelAtPeriodEnd;
        $this->customerId = $customerId;
        $this->productId = $productId;
        $this->priceId = $priceId;
        $this->userId = $userId;
        $this->product = $product;
        $this->price = $price;
        $this->modifiedAt = $modifiedAt;
        $this->amount = $amount;
        $this->currency = $currency;
        $this->currentPeriodEnd = $currentPeriodEnd;
        $this->canceledAt = $canceledAt;
        $this->startedAt = $startedAt;
        $this->endsAt = $endsAt;
        $this->endedAt = $endedAt;
        $this->discountId = $discountId;
        $this->checkoutId = $checkoutId;
        $this->customerCancellationReason = $customerCancellationReason;
        $this->customerCancellationComment = $customerCancellationComment;
    }
}