<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class RefundCreate
{
    /**
     *
     * @var string $orderId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('order_id')]
    public string $orderId;

    /**
     *
     * @var RefundReason $reason
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reason')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\RefundReason')]
    public RefundReason $reason;

    /**
     * Amount to refund in cents. Minimum is 1.
     *
     * @var int $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    public int $amount;

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
     * An internal comment about the refund.
     *
     * @var ?string $comment
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('comment')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $comment = null;

    /**
     * Should this refund trigger the associated customer benefits to be revoked?
     *
     *
     * **Note:**
     * Only allowed in case the `order` is a one-time purchase.
     * Subscriptions automatically revoke customer benefits once the
     * subscription itself is revoked, i.e fully canceled.
     *
     * @var ?bool $revokeBenefits
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('revoke_benefits')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $revokeBenefits = null;

    /**
     * @param  string  $orderId
     * @param  RefundReason  $reason
     * @param  int  $amount
     * @param  ?array<string, string|int|bool>  $metadata
     * @param  ?bool  $revokeBenefits
     * @param  ?string  $comment
     * @phpstan-pure
     */
    public function __construct(string $orderId, RefundReason $reason, int $amount, ?array $metadata = null, ?string $comment = null, ?bool $revokeBenefits = false)
    {
        $this->orderId = $orderId;
        $this->reason = $reason;
        $this->amount = $amount;
        $this->metadata = $metadata;
        $this->comment = $comment;
        $this->revokeBenefits = $revokeBenefits;
    }
}