<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** CustomFieldUpdateCheckbox - Schema to update a custom field of type checkbox. */
class CustomFieldUpdateCheckbox
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
     * * A boolean
     *
     * You can store up to **50 key-value pairs**.
     *
     * @var ?array<string, string|int|bool> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string|int|bool>|null')]
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
     * @var ?CustomFieldCheckboxProperties $properties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('properties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\CustomFieldCheckboxProperties|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CustomFieldCheckboxProperties $properties = null;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $type
     * @param  ?array<string, string|int|bool>  $metadata
     * @param  ?string  $name
     * @param  ?string  $slug
     * @param  ?CustomFieldCheckboxProperties  $properties
     * @phpstan-pure
     */
    public function __construct(?array $metadata = null, ?string $name = null, ?string $slug = null, ?CustomFieldCheckboxProperties $properties = null, string $type = 'checkbox')
    {
        $this->metadata = $metadata;
        $this->name = $name;
        $this->slug = $slug;
        $this->properties = $properties;
        $this->type = $type;
    }
}