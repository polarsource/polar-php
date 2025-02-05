<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** ProductPriceRecurringFreeCreate - Schema to create a free recurring product price, i.e. a subscription. */
class ProductPriceRecurringFreeCreate
{
    /**
     *
     * @var SubscriptionRecurringInterval $recurringInterval
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('recurring_interval')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\SubscriptionRecurringInterval')]
    public SubscriptionRecurringInterval $recurringInterval;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     *
     * @var string $amountType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount_type')]
    public string $amountType;

    /**
     * @param  string  $type
     * @param  string  $amountType
     * @param  SubscriptionRecurringInterval  $recurringInterval
     * @phpstan-pure
     */
    public function __construct(SubscriptionRecurringInterval $recurringInterval, string $type = 'recurring', string $amountType = 'free')
    {
        $this->recurringInterval = $recurringInterval;
        $this->type = $type;
        $this->amountType = $amountType;
    }
}