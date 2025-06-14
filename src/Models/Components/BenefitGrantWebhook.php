<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class BenefitGrantWebhook
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
     *
     * @var BenefitCustom|BenefitDiscord|BenefitGitHubRepository|BenefitDownloadables|BenefitLicenseKeys|BenefitMeterCredit $benefit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('benefit')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitCustom|\Polar\Models\Components\BenefitDiscord|\Polar\Models\Components\BenefitGitHubRepository|\Polar\Models\Components\BenefitDownloadables|\Polar\Models\Components\BenefitLicenseKeys|\Polar\Models\Components\BenefitMeterCredit')]
    public BenefitCustom|BenefitDiscord|BenefitGitHubRepository|BenefitDownloadables|BenefitLicenseKeys|BenefitMeterCredit $benefit;

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
     * The error information if the benefit grant failed with an unrecoverable error.
     *
     * @var ?BenefitGrantError $error
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('error')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitGrantError|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?BenefitGrantError $error = null;

    /**
     *
     * @var BenefitGrantDiscordProperties|BenefitGrantGitHubRepositoryProperties|BenefitGrantDownloadablesProperties|BenefitGrantLicenseKeysProperties|BenefitGrantCustomProperties|null $previousProperties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('previous_properties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitGrantDiscordProperties|\Polar\Models\Components\BenefitGrantGitHubRepositoryProperties|\Polar\Models\Components\BenefitGrantDownloadablesProperties|\Polar\Models\Components\BenefitGrantLicenseKeysProperties|\Polar\Models\Components\BenefitGrantCustomProperties|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public BenefitGrantDiscordProperties|BenefitGrantGitHubRepositoryProperties|BenefitGrantDownloadablesProperties|BenefitGrantLicenseKeysProperties|BenefitGrantCustomProperties|null $previousProperties = null;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  bool  $isGranted
     * @param  bool  $isRevoked
     * @param  string  $customerId
     * @param  string  $benefitId
     * @param  Customer  $customer
     * @param  BenefitGrantDiscordProperties|BenefitGrantGitHubRepositoryProperties|BenefitGrantDownloadablesProperties|BenefitGrantLicenseKeysProperties|BenefitGrantCustomProperties  $properties
     * @param  BenefitCustom|BenefitDiscord|BenefitGitHubRepository|BenefitDownloadables|BenefitLicenseKeys|BenefitMeterCredit  $benefit
     * @param  ?\DateTime  $modifiedAt
     * @param  ?string  $subscriptionId
     * @param  ?string  $orderId
     * @param  ?\DateTime  $grantedAt
     * @param  ?\DateTime  $revokedAt
     * @param  ?BenefitGrantError  $error
     * @param  BenefitGrantDiscordProperties|BenefitGrantGitHubRepositoryProperties|BenefitGrantDownloadablesProperties|BenefitGrantLicenseKeysProperties|BenefitGrantCustomProperties|null  $previousProperties
     * @phpstan-pure
     */
    public function __construct(\DateTime $createdAt, string $id, bool $isGranted, bool $isRevoked, string $customerId, string $benefitId, Customer $customer, BenefitGrantDiscordProperties|BenefitGrantGitHubRepositoryProperties|BenefitGrantDownloadablesProperties|BenefitGrantLicenseKeysProperties|BenefitGrantCustomProperties $properties, BenefitCustom|BenefitDiscord|BenefitGitHubRepository|BenefitDownloadables|BenefitLicenseKeys|BenefitMeterCredit $benefit, ?\DateTime $modifiedAt = null, ?string $subscriptionId = null, ?string $orderId = null, ?\DateTime $grantedAt = null, ?\DateTime $revokedAt = null, ?BenefitGrantError $error = null, BenefitGrantDiscordProperties|BenefitGrantGitHubRepositoryProperties|BenefitGrantDownloadablesProperties|BenefitGrantLicenseKeysProperties|BenefitGrantCustomProperties|null $previousProperties = null)
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->isGranted = $isGranted;
        $this->isRevoked = $isRevoked;
        $this->customerId = $customerId;
        $this->benefitId = $benefitId;
        $this->customer = $customer;
        $this->properties = $properties;
        $this->benefit = $benefit;
        $this->modifiedAt = $modifiedAt;
        $this->subscriptionId = $subscriptionId;
        $this->orderId = $orderId;
        $this->grantedAt = $grantedAt;
        $this->revokedAt = $revokedAt;
        $this->error = $error;
        $this->previousProperties = $previousProperties;
    }
}