<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/**
 * CustomerState - A customer along with additional state information:
 *
 *
 * * Active subscriptions
 * * Granted benefits
 * * Active meters
 */
class CustomerState
{
    /**
     * The ID of the customer.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * Creation timestamp of the object.
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * $metadata
     *
     * @var array<string, string|int|bool> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string|int|bool>')]
    public array $metadata;

    /**
     * The email address of the customer. This must be unique within the organization.
     *
     * @var string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    public string $email;

    /**
     * Whether the customer email address is verified. The address is automatically verified when the customer accesses the customer portal using their email address.
     *
     * @var bool $emailVerified
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email_verified')]
    public bool $emailVerified;

    /**
     * The ID of the organization owning the customer.
     *
     * @var string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    public string $organizationId;

    /**
     * The customer's active subscriptions.
     *
     * @var array<CustomerStateSubscription> $activeSubscriptions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('active_subscriptions')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\CustomerStateSubscription>')]
    public array $activeSubscriptions;

    /**
     * The customer's active benefit grants.
     *
     * @var array<CustomerStateBenefitGrant> $grantedBenefits
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('granted_benefits')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\CustomerStateBenefitGrant>')]
    public array $grantedBenefits;

    /**
     * The customer's active meters.
     *
     * @var array<CustomerStateMeter> $activeMeters
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('active_meters')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\CustomerStateMeter>')]
    public array $activeMeters;

    /**
     *
     * @var string $avatarUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('avatar_url')]
    public string $avatarUrl;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

    /**
     * The ID of the customer in your system. This must be unique within the organization. Once set, it can't be updated.
     *
     * @var ?string $externalId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('external_id')]
    public ?string $externalId;

    /**
     * The name of the customer.
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public ?string $name;

    /**
     *
     * @var ?Address $billingAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billing_address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Address|null')]
    public ?Address $billingAddress;

    /**
     * $taxId
     *
     * @var ?array<string|TaxIDFormat|null> $taxId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_id')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string|\Polar\Models\Components\TaxIDFormat|null>|null')]
    public ?array $taxId;

    /**
     * Timestamp for when the customer was soft deleted.
     *
     * @var ?\DateTime $deletedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deleted_at')]
    public ?\DateTime $deletedAt;

    /**
     * @param  string  $id
     * @param  \DateTime  $createdAt
     * @param  array<string, string|int|bool>  $metadata
     * @param  string  $email
     * @param  bool  $emailVerified
     * @param  string  $organizationId
     * @param  array<CustomerStateSubscription>  $activeSubscriptions
     * @param  array<CustomerStateBenefitGrant>  $grantedBenefits
     * @param  array<CustomerStateMeter>  $activeMeters
     * @param  string  $avatarUrl
     * @param  ?\DateTime  $modifiedAt
     * @param  ?string  $externalId
     * @param  ?string  $name
     * @param  ?Address  $billingAddress
     * @param  ?array<string|TaxIDFormat|null>  $taxId
     * @param  ?\DateTime  $deletedAt
     * @phpstan-pure
     */
    public function __construct(string $id, \DateTime $createdAt, array $metadata, string $email, bool $emailVerified, string $organizationId, array $activeSubscriptions, array $grantedBenefits, array $activeMeters, string $avatarUrl, ?\DateTime $modifiedAt = null, ?string $externalId = null, ?string $name = null, ?Address $billingAddress = null, ?array $taxId = null, ?\DateTime $deletedAt = null)
    {
        $this->id = $id;
        $this->createdAt = $createdAt;
        $this->metadata = $metadata;
        $this->email = $email;
        $this->emailVerified = $emailVerified;
        $this->organizationId = $organizationId;
        $this->activeSubscriptions = $activeSubscriptions;
        $this->grantedBenefits = $grantedBenefits;
        $this->activeMeters = $activeMeters;
        $this->avatarUrl = $avatarUrl;
        $this->modifiedAt = $modifiedAt;
        $this->externalId = $externalId;
        $this->name = $name;
        $this->billingAddress = $billingAddress;
        $this->taxId = $taxId;
        $this->deletedAt = $deletedAt;
    }
}