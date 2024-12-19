<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class BenefitDiscordCreate
{
    /**
     * The description of the benefit. Will be displayed on products having this benefit.
     *
     * @var string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    public string $description;

    /**
     * Properties to create a benefit of type `discord`.
     *
     * @var BenefitDiscordCreateProperties $properties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('properties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitDiscordCreateProperties')]
    public BenefitDiscordCreateProperties $properties;

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
     * @var BenefitDiscordCreateType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitDiscordCreateType')]
    public BenefitDiscordCreateType $type;

    /**
     * @param  BenefitDiscordCreateType  $type
     * @param  string  $description
     * @param  BenefitDiscordCreateProperties  $properties
     * @param  ?string  $organizationId
     */
    public function __construct(string $description, BenefitDiscordCreateProperties $properties, ?string $organizationId = null, BenefitDiscordCreateType $type = BenefitDiscordCreateType::Discord)
    {
        $this->description = $description;
        $this->properties = $properties;
        $this->organizationId = $organizationId;
        $this->type = $type;
    }
}