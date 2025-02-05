<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class BenefitGitHubRepositoryCreate
{
    /**
     * The description of the benefit. Will be displayed on products having this benefit.
     *
     * @var string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    public string $description;

    /**
     * Properties to create a benefit of type `github_repository`.
     *
     * @var BenefitGitHubRepositoryCreateProperties $properties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('properties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitGitHubRepositoryCreateProperties')]
    public BenefitGitHubRepositoryCreateProperties $properties;

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
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $type
     * @param  string  $description
     * @param  BenefitGitHubRepositoryCreateProperties  $properties
     * @param  ?string  $organizationId
     * @phpstan-pure
     */
    public function __construct(string $description, BenefitGitHubRepositoryCreateProperties $properties, ?string $organizationId = null, string $type = 'github_repository')
    {
        $this->description = $description;
        $this->properties = $properties;
        $this->organizationId = $organizationId;
        $this->type = $type;
    }
}