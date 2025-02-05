<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** CustomFieldNumber - Schema for a custom field of type number. */
class CustomFieldNumber
{
    /**
     * Creation timestamp of the object.
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * The ID of the object.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * $metadata
     *
     * @var array<string, string|int|bool> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string|int|bool>')]
    public array $metadata;

    /**
     * Identifier of the custom field. It'll be used as key when storing the value.
     *
     * @var string $slug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('slug')]
    public string $slug;

    /**
     * Name of the custom field.
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * The ID of the organization owning the custom field.
     *
     * @var string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    public string $organizationId;

    /**
     *
     * @var CustomFieldNumberProperties $properties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('properties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\CustomFieldNumberProperties')]
    public CustomFieldNumberProperties $properties;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  array<string, string|int|bool>  $metadata
     * @param  string  $type
     * @param  string  $slug
     * @param  string  $name
     * @param  string  $organizationId
     * @param  CustomFieldNumberProperties  $properties
     * @param  ?\DateTime  $modifiedAt
     * @phpstan-pure
     */
    public function __construct(\DateTime $createdAt, string $id, array $metadata, string $slug, string $name, string $organizationId, CustomFieldNumberProperties $properties, ?\DateTime $modifiedAt = null, string $type = 'number')
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->metadata = $metadata;
        $this->slug = $slug;
        $this->name = $name;
        $this->organizationId = $organizationId;
        $this->properties = $properties;
        $this->modifiedAt = $modifiedAt;
        $this->type = $type;
    }
}