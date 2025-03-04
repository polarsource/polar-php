<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class Refund
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
     * @var RefundStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\RefundStatus')]
    public RefundStatus $status;

    /**
     *
     * @var RefundReason $reason
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reason')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\RefundReason')]
    public RefundReason $reason;

    /**
     *
     * @var int $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    public int $amount;

    /**
     *
     * @var int $taxAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_amount')]
    public int $taxAmount;

    /**
     *
     * @var string $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    public string $currency;

    /**
     *
     * @var string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    public string $organizationId;

    /**
     *
     * @var string $orderId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('order_id')]
    public string $orderId;

    /**
     *
     * @var string $customerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_id')]
    public string $customerId;

    /**
     *
     * @var bool $revokeBenefits
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('revoke_benefits')]
    public bool $revokeBenefits;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

    /**
     *
     * @var ?string $subscriptionId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscription_id')]
    public ?string $subscriptionId;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  array<string, string|int|bool>  $metadata
     * @param  RefundStatus  $status
     * @param  RefundReason  $reason
     * @param  int  $amount
     * @param  int  $taxAmount
     * @param  string  $currency
     * @param  string  $organizationId
     * @param  string  $orderId
     * @param  string  $customerId
     * @param  bool  $revokeBenefits
     * @param  ?\DateTime  $modifiedAt
     * @param  ?string  $subscriptionId
     * @phpstan-pure
     */
    public function __construct(\DateTime $createdAt, string $id, array $metadata, RefundStatus $status, RefundReason $reason, int $amount, int $taxAmount, string $currency, string $organizationId, string $orderId, string $customerId, bool $revokeBenefits, ?\DateTime $modifiedAt = null, ?string $subscriptionId = null)
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->metadata = $metadata;
        $this->status = $status;
        $this->reason = $reason;
        $this->amount = $amount;
        $this->taxAmount = $taxAmount;
        $this->currency = $currency;
        $this->organizationId = $organizationId;
        $this->orderId = $orderId;
        $this->customerId = $customerId;
        $this->revokeBenefits = $revokeBenefits;
        $this->modifiedAt = $modifiedAt;
        $this->subscriptionId = $subscriptionId;
    }
}