<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class BenefitDiscordUpdate
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
     * @var ?BenefitDiscordCreateProperties $properties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('properties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitDiscordCreateProperties|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?BenefitDiscordCreateProperties $properties = null;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $type
     * @param  ?string  $description
     * @param  ?BenefitDiscordCreateProperties  $properties
     * @phpstan-pure
     */
    public function __construct(?string $description = null, ?BenefitDiscordCreateProperties $properties = null, string $type = 'discord')
    {
        $this->description = $description;
        $this->properties = $properties;
        $this->type = $type;
    }
}