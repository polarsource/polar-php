<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class CustomerBenefitGrantMeterCredit
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
     * @var string $customerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_id')]
    public string $customerId;

    /**
     *
     * @var string $benefitId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('benefit_id')]
    public string $benefitId;

    /**
     *
     * @var bool $isGranted
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_granted')]
    public bool $isGranted;

    /**
     *
     * @var bool $isRevoked
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_revoked')]
    public bool $isRevoked;

    /**
     *
     * @var CustomerPortalCustomer $customer
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\CustomerPortalCustomer')]
    public CustomerPortalCustomer $customer;

    /**
     *
     * @var BenefitMeterCreditSubscriber $benefit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('benefit')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitMeterCreditSubscriber')]
    public BenefitMeterCreditSubscriber $benefit;

    /**
     *
     * @var BenefitGrantMeterCreditProperties $properties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('properties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitGrantMeterCreditProperties')]
    public BenefitGrantMeterCreditProperties $properties;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

    /**
     *
     * @var ?\DateTime $grantedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('granted_at')]
    public ?\DateTime $grantedAt;

    /**
     *
     * @var ?\DateTime $revokedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('revoked_at')]
    public ?\DateTime $revokedAt;

    /**
     *
     * @var ?string $subscriptionId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscription_id')]
    public ?string $subscriptionId;

    /**
     *
     * @var ?string $orderId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('order_id')]
    public ?string $orderId;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  string  $customerId
     * @param  string  $benefitId
     * @param  bool  $isGranted
     * @param  bool  $isRevoked
     * @param  CustomerPortalCustomer  $customer
     * @param  BenefitMeterCreditSubscriber  $benefit
     * @param  BenefitGrantMeterCreditProperties  $properties
     * @param  ?\DateTime  $modifiedAt
     * @param  ?\DateTime  $grantedAt
     * @param  ?\DateTime  $revokedAt
     * @param  ?string  $subscriptionId
     * @param  ?string  $orderId
     * @phpstan-pure
     */
    public function __construct(\DateTime $createdAt, string $id, string $customerId, string $benefitId, bool $isGranted, bool $isRevoked, CustomerPortalCustomer $customer, BenefitMeterCreditSubscriber $benefit, BenefitGrantMeterCreditProperties $properties, ?\DateTime $modifiedAt = null, ?\DateTime $grantedAt = null, ?\DateTime $revokedAt = null, ?string $subscriptionId = null, ?string $orderId = null)
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->customerId = $customerId;
        $this->benefitId = $benefitId;
        $this->isGranted = $isGranted;
        $this->isRevoked = $isRevoked;
        $this->customer = $customer;
        $this->benefit = $benefit;
        $this->properties = $properties;
        $this->modifiedAt = $modifiedAt;
        $this->grantedAt = $grantedAt;
        $this->revokedAt = $revokedAt;
        $this->subscriptionId = $subscriptionId;
        $this->orderId = $orderId;
    }
}