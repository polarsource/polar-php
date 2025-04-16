<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** CustomFieldUpdateSelect - Schema to update a custom field of type select. */
class CustomFieldUpdateSelect
{
    /**
     * Key-value object allowing you to store additional information.
     *
     *
     * The key must be a string with a maximum length of **40 characters**.
     * The value must be either:
     *
     * * A string with a maximum length of **500 characters**
     * * An integer
     * * A floating-point number
     * * A boolean
     *
     * You can store up to **50 key-value pairs**.
     *
     * @var ?array<string, string|int|float|bool> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string|int|float|bool>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?string $slug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('slug')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $slug = null;

    /**
     *
     * @var ?CustomFieldSelectProperties $properties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('properties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\CustomFieldSelectProperties|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CustomFieldSelectProperties $properties = null;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $type
     * @param  ?array<string, string|int|float|bool>  $metadata
     * @param  ?string  $name
     * @param  ?string  $slug
     * @param  ?CustomFieldSelectProperties  $properties
     * @phpstan-pure
     */
    public function __construct(?array $metadata = null, ?string $name = null, ?string $slug = null, ?CustomFieldSelectProperties $properties = null, string $type = 'select')
    {
        $this->metadata = $metadata;
        $this->name = $name;
        $this->slug = $slug;
        $this->properties = $properties;
        $this->type = $type;
    }
}