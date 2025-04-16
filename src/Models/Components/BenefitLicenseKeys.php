<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class BenefitLicenseKeys
{
    /**
     * The ID of the benefit.
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
     * @var array<string, string|int|float|bool> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string|int|float|bool>')]
    public array $metadata;

    /**
     * The description of the benefit.
     *
     * @var string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    public string $description;

    /**
     * Whether the benefit is selectable when creating a product.
     *
     * @var bool $selectable
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('selectable')]
    public bool $selectable;

    /**
     * Whether the benefit is deletable.
     *
     * @var bool $deletable
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deletable')]
    public bool $deletable;

    /**
     * The ID of the organization owning the benefit.
     *
     * @var string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    public string $organizationId;

    /**
     *
     * @var BenefitLicenseKeysProperties $properties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('properties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitLicenseKeysProperties')]
    public BenefitLicenseKeysProperties $properties;

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
     * @param  string  $id
     * @param  \DateTime  $createdAt
     * @param  array<string, string|int|float|bool>  $metadata
     * @param  string  $type
     * @param  string  $description
     * @param  bool  $selectable
     * @param  bool  $deletable
     * @param  string  $organizationId
     * @param  BenefitLicenseKeysProperties  $properties
     * @param  ?\DateTime  $modifiedAt
     * @phpstan-pure
     */
    public function __construct(string $id, \DateTime $createdAt, array $metadata, string $description, bool $selectable, bool $deletable, string $organizationId, BenefitLicenseKeysProperties $properties, ?\DateTime $modifiedAt = null, string $type = 'license_keys')
    {
        $this->id = $id;
        $this->createdAt = $createdAt;
        $this->metadata = $metadata;
        $this->description = $description;
        $this->selectable = $selectable;
        $this->deletable = $deletable;
        $this->organizationId = $organizationId;
        $this->properties = $properties;
        $this->modifiedAt = $modifiedAt;
        $this->type = $type;
    }
}