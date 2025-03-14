<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class CustomerBenefitGrantGitHubRepositoryUpdate
{
    /**
     *
     * @var CustomerBenefitGrantGitHubRepositoryPropertiesUpdate $properties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('properties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\CustomerBenefitGrantGitHubRepositoryPropertiesUpdate')]
    public CustomerBenefitGrantGitHubRepositoryPropertiesUpdate $properties;

    /**
     *
     * @var string $benefitType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('benefit_type')]
    public string $benefitType;

    /**
     * @param  string  $benefitType
     * @param  CustomerBenefitGrantGitHubRepositoryPropertiesUpdate  $properties
     * @phpstan-pure
     */
    public function __construct(CustomerBenefitGrantGitHubRepositoryPropertiesUpdate $properties, string $benefitType = 'github_repository')
    {
        $this->properties = $properties;
        $this->benefitType = $benefitType;
    }
}