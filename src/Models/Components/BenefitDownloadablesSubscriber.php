<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class BenefitDownloadablesSubscriber
{
    /**
     * Creation timestamp of the object.
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * The ID of the benefit.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

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
     * @var Organization $organization
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Organization')]
    public Organization $organization;

    /**
     *
     * @var BenefitDownloadablesSubscriberProperties $properties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('properties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitDownloadablesSubscriberProperties')]
    public BenefitDownloadablesSubscriberProperties $properties;

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
     * @param  string  $type
     * @param  string  $description
     * @param  bool  $selectable
     * @param  bool  $deletable
     * @param  string  $organizationId
     * @param  Organization  $organization
     * @param  BenefitDownloadablesSubscriberProperties  $properties
     * @param  ?\DateTime  $modifiedAt
     * @phpstan-pure
     */
    public function __construct(\DateTime $createdAt, string $id, string $description, bool $selectable, bool $deletable, string $organizationId, Organization $organization, BenefitDownloadablesSubscriberProperties $properties, ?\DateTime $modifiedAt = null, string $type = 'downloadables')
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->description = $description;
        $this->selectable = $selectable;
        $this->deletable = $deletable;
        $this->organizationId = $organizationId;
        $this->organization = $organization;
        $this->properties = $properties;
        $this->modifiedAt = $modifiedAt;
        $this->type = $type;
    }
}