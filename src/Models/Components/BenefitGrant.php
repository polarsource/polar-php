<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class BenefitGrant
{
    /**
     * Creation timestamp of the object.
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * The ID of the grant.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * Whether the benefit is granted.
     *
     * @var bool $isGranted
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_granted')]
    public bool $isGranted;

    /**
     * Whether the benefit is revoked.
     *
     * @var bool $isRevoked
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_revoked')]
    public bool $isRevoked;

    /**
     * The ID of the customer concerned by this grant.
     *
     * @var string $customerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_id')]
    public string $customerId;

    /**
     *
     * @var string $userId
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('user_id')]
    public string $userId;

    /**
     * The ID of the benefit concerned by this grant.
     *
     * @var string $benefitId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('benefit_id')]
    public string $benefitId;

    /**
     * A customer in an organization.
     *
     * @var Customer $customer
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Customer')]
    public Customer $customer;

    /**
     *
     * @var BenefitGrantDiscordProperties|BenefitGrantGitHubRepositoryProperties|BenefitGrantDownloadablesProperties|BenefitGrantLicenseKeysProperties|BenefitGrantCustomProperties $properties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('properties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitGrantDiscordProperties|\Polar\Models\Components\BenefitGrantGitHubRepositoryProperties|\Polar\Models\Components\BenefitGrantDownloadablesProperties|\Polar\Models\Components\BenefitGrantLicenseKeysProperties|\Polar\Models\Components\BenefitGrantCustomProperties')]
    public BenefitGrantDiscordProperties|BenefitGrantGitHubRepositoryProperties|BenefitGrantDownloadablesProperties|BenefitGrantLicenseKeysProperties|BenefitGrantCustomProperties $properties;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

    /**
     * The ID of the subscription that granted this benefit.
     *
     * @var ?string $subscriptionId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscription_id')]
    public ?string $subscriptionId;

    /**
     * The ID of the order that granted this benefit.
     *
     * @var ?string $orderId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('order_id')]
    public ?string $orderId;

    /**
     * The timestamp when the benefit was granted. If `None`, the benefit is not granted.
     *
     * @var ?\DateTime $grantedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('granted_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $grantedAt = null;

    /**
     * The timestamp when the benefit was revoked. If `None`, the benefit is not revoked.
     *
     * @var ?\DateTime $revokedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('revoked_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $revokedAt = null;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  bool  $isGranted
     * @param  bool  $isRevoked
     * @param  string  $customerId
     * @param  string  $userId
     * @param  string  $benefitId
     * @param  Customer  $customer
     * @param  BenefitGrantDiscordProperties|BenefitGrantGitHubRepositoryProperties|BenefitGrantDownloadablesProperties|BenefitGrantLicenseKeysProperties|BenefitGrantCustomProperties  $properties
     * @param  ?\DateTime  $modifiedAt
     * @param  ?string  $subscriptionId
     * @param  ?string  $orderId
     * @param  ?\DateTime  $grantedAt
     * @param  ?\DateTime  $revokedAt
     * @phpstan-pure
     */
    public function __construct(\DateTime $createdAt, string $id, bool $isGranted, bool $isRevoked, string $customerId, string $userId, string $benefitId, Customer $customer, BenefitGrantDiscordProperties|BenefitGrantGitHubRepositoryProperties|BenefitGrantDownloadablesProperties|BenefitGrantLicenseKeysProperties|BenefitGrantCustomProperties $properties, ?\DateTime $modifiedAt = null, ?string $subscriptionId = null, ?string $orderId = null, ?\DateTime $grantedAt = null, ?\DateTime $revokedAt = null)
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->isGranted = $isGranted;
        $this->isRevoked = $isRevoked;
        $this->customerId = $customerId;
        $this->userId = $userId;
        $this->benefitId = $benefitId;
        $this->customer = $customer;
        $this->properties = $properties;
        $this->modifiedAt = $modifiedAt;
        $this->subscriptionId = $subscriptionId;
        $this->orderId = $orderId;
        $this->grantedAt = $grantedAt;
        $this->revokedAt = $revokedAt;
    }
}