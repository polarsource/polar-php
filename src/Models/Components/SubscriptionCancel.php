<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class SubscriptionCancel
{
    /**
     * Cancel an active subscription once the current period ends.
     *
     *
     * Or uncancel a subscription currently set to be revoked at period end.
     *
     * @var ?bool $cancelAtPeriodEnd
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cancel_at_period_end')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $cancelAtPeriodEnd = null;

    /**
     * Customer reason for cancellation.
     *
     *
     * Helpful to monitor reasons behind churn for future improvements.
     *
     * Only set this in case your own service is requesting the reason from the
     * customer. Or you know based on direct conversations, i.e support, with
     * the customer.
     *
     * * `too_expensive`: Too expensive for the customer.
     * * `missing_features`: Customer is missing certain features.
     * * `switched_service`: Customer switched to another service.
     * * `unused`: Customer is not using it enough.
     * * `customer_service`: Customer is not satisfied with the customer service.
     * * `low_quality`: Customer is unhappy with the quality.
     * * `too_complex`: Customer considers the service too complicated.
     * * `other`: Other reason(s).
     *
     * @var ?CustomerCancellationReason $customerCancellationReason
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_cancellation_reason')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\CustomerCancellationReason|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CustomerCancellationReason $customerCancellationReason = null;

    /**
     * Customer feedback and why they decided to cancel.
     *
     *
     * **IMPORTANT:**
     * Do not use this to store internal notes! It's intended to be input
     * from the customer and is therefore also available in their Polar
     * purchases library.
     *
     * Only set this in case your own service is requesting the reason from the
     * customer. Or you copy a message directly from a customer
     * conversation, i.e support.
     *
     * @var ?string $customerCancellationComment
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_cancellation_comment')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customerCancellationComment = null;

    /**
     * Cancel and revoke an active subscription immediately
     *
     * @var ?bool $revoke
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('revoke')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $revoke = null;

    /**
     * @param  ?bool  $cancelAtPeriodEnd
     * @param  ?bool  $revoke
     * @param  ?CustomerCancellationReason  $customerCancellationReason
     * @param  ?string  $customerCancellationComment
     * @phpstan-pure
     */
    public function __construct(?bool $cancelAtPeriodEnd = null, ?CustomerCancellationReason $customerCancellationReason = null, ?string $customerCancellationComment = null, ?bool $revoke = true)
    {
        $this->cancelAtPeriodEnd = $cancelAtPeriodEnd;
        $this->customerCancellationReason = $customerCancellationReason;
        $this->customerCancellationComment = $customerCancellationComment;
        $this->revoke = $revoke;
    }
}