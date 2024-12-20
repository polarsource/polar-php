<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class BenefitGitHubRepositoryUpdate
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
     * @var ?BenefitGitHubRepositoryCreateProperties $properties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('properties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitGitHubRepositoryCreateProperties|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?BenefitGitHubRepositoryCreateProperties $properties = null;

    /**
     *
     * @var BenefitGitHubRepositoryUpdateType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitGitHubRepositoryUpdateType')]
    public BenefitGitHubRepositoryUpdateType $type;

    /**
     * @param  BenefitGitHubRepositoryUpdateType  $type
     * @param  ?string  $description
     * @param  ?BenefitGitHubRepositoryCreateProperties  $properties
     */
    public function __construct(?string $description = null, ?BenefitGitHubRepositoryCreateProperties $properties = null, BenefitGitHubRepositoryUpdateType $type = BenefitGitHubRepositoryUpdateType::GithubRepository)
    {
        $this->description = $description;
        $this->properties = $properties;
        $this->type = $type;
    }
}