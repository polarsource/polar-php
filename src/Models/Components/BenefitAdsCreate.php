<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class BenefitAdsCreate
{
    /**
     * The description of the benefit. Will be displayed on products having this benefit.
     *
     * @var string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    public string $description;

    /**
     * Properties for a benefit of type `ads`.
     *
     * @var BenefitAdsProperties $properties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('properties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitAdsProperties')]
    public BenefitAdsProperties $properties;

    /**
     * The ID of the organization owning the benefit. **Required unless you use an organization token.**
     *
     * @var ?string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $organizationId = null;

    /**
     *
     * @var BenefitAdsCreateType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitAdsCreateType')]
    public BenefitAdsCreateType $type;

    /**
     * @param  BenefitAdsCreateType  $type
     * @param  string  $description
     * @param  BenefitAdsProperties  $properties
     * @param  ?string  $organizationId
     */
    public function __construct(string $description, BenefitAdsProperties $properties, ?string $organizationId = null, BenefitAdsCreateType $type = BenefitAdsCreateType::Ads)
    {
        $this->description = $description;
        $this->properties = $properties;
        $this->organizationId = $organizationId;
        $this->type = $type;
    }
}