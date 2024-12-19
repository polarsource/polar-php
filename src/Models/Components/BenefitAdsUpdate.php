<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class BenefitAdsUpdate
{
    /**
     * The description of the benefit. Will be displayed on products having this benefit.
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     *
     * @var ?BenefitAdsProperties $properties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('properties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitAdsProperties|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?BenefitAdsProperties $properties = null;

    /**
     *
     * @var BenefitAdsUpdateType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitAdsUpdateType')]
    public BenefitAdsUpdateType $type;

    /**
     * @param  BenefitAdsUpdateType  $type
     * @param  ?string  $description
     * @param  ?BenefitAdsProperties  $properties
     */
    public function __construct(?string $description = null, ?BenefitAdsProperties $properties = null, BenefitAdsUpdateType $type = BenefitAdsUpdateType::Ads)
    {
        $this->description = $description;
        $this->properties = $properties;
        $this->type = $type;
    }
}