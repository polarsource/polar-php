<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** Product - A product. */
class Product
{
    /**
     * Creation timestamp of the object.
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * The ID of the product.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * The name of the product.
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * Whether the product is a subscription.
     *
     * @var bool $isRecurring
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_recurring')]
    public bool $isRecurring;

    /**
     * Whether the product is archived and no longer available.
     *
     * @var bool $isArchived
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_archived')]
    public bool $isArchived;

    /**
     * The ID of the organization owning the product.
     *
     * @var string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    public string $organizationId;

    /**
     * $metadata
     *
     * @var array<string, string|int|bool> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string|int|bool>')]
    public array $metadata;

    /**
     * List of prices for this product.
     *
     * @var array<LegacyRecurringProductPriceFixed|LegacyRecurringProductPriceCustom|LegacyRecurringProductPriceFree|ProductPriceFixed|ProductPriceCustom|ProductPriceFree|ProductPriceMeteredUnit> $prices
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('prices')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\LegacyRecurringProductPriceFixed|\Polar\Models\Components\LegacyRecurringProductPriceCustom|\Polar\Models\Components\LegacyRecurringProductPriceFree|\Polar\Models\Components\ProductPriceFixed|\Polar\Models\Components\ProductPriceCustom|\Polar\Models\Components\ProductPriceFree|\Polar\Models\Components\ProductPriceMeteredUnit>')]
    public array $prices;

    /**
     * List of benefits granted by the product.
     *
     * @var array<BenefitCustom|BenefitDiscord|BenefitGitHubRepository|BenefitDownloadables|BenefitLicenseKeys|BenefitMeterCredit> $benefits
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('benefits')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\BenefitCustom|\Polar\Models\Components\BenefitDiscord|\Polar\Models\Components\BenefitGitHubRepository|\Polar\Models\Components\BenefitDownloadables|\Polar\Models\Components\BenefitLicenseKeys|\Polar\Models\Components\BenefitMeterCredit>')]
    public array $benefits;

    /**
     * List of medias associated to the product.
     *
     * @var array<ProductMediaFileRead> $medias
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('medias')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\ProductMediaFileRead>')]
    public array $medias;

    /**
     * List of custom fields attached to the product.
     *
     * @var array<AttachedCustomField> $attachedCustomFields
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('attached_custom_fields')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\AttachedCustomField>')]
    public array $attachedCustomFields;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

    /**
     * The description of the product.
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    public ?string $description;

    /**
     * The recurring interval of the product. If `None`, the product is a one-time purchase.
     *
     * @var ?SubscriptionRecurringInterval $recurringInterval
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('recurring_interval')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\SubscriptionRecurringInterval|null')]
    public ?SubscriptionRecurringInterval $recurringInterval;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  string  $name
     * @param  bool  $isRecurring
     * @param  bool  $isArchived
     * @param  string  $organizationId
     * @param  array<string, string|int|bool>  $metadata
     * @param  array<LegacyRecurringProductPriceFixed|LegacyRecurringProductPriceCustom|LegacyRecurringProductPriceFree|ProductPriceFixed|ProductPriceCustom|ProductPriceFree|ProductPriceMeteredUnit>  $prices
     * @param  array<BenefitCustom|BenefitDiscord|BenefitGitHubRepository|BenefitDownloadables|BenefitLicenseKeys|BenefitMeterCredit>  $benefits
     * @param  array<ProductMediaFileRead>  $medias
     * @param  array<AttachedCustomField>  $attachedCustomFields
     * @param  ?\DateTime  $modifiedAt
     * @param  ?string  $description
     * @param  ?SubscriptionRecurringInterval  $recurringInterval
     * @phpstan-pure
     */
    public function __construct(\DateTime $createdAt, string $id, string $name, bool $isRecurring, bool $isArchived, string $organizationId, array $metadata, array $prices, array $benefits, array $medias, array $attachedCustomFields, ?\DateTime $modifiedAt = null, ?string $description = null, ?SubscriptionRecurringInterval $recurringInterval = null)
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->name = $name;
        $this->isRecurring = $isRecurring;
        $this->isArchived = $isArchived;
        $this->organizationId = $organizationId;
        $this->metadata = $metadata;
        $this->prices = $prices;
        $this->benefits = $benefits;
        $this->medias = $medias;
        $this->attachedCustomFields = $attachedCustomFields;
        $this->modifiedAt = $modifiedAt;
        $this->description = $description;
        $this->recurringInterval = $recurringInterval;
    }
}