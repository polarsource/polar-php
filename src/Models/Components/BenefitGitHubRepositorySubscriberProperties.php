<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** BenefitGitHubRepositorySubscriberProperties - Properties available to subscribers for a benefit of type `github_repository`. */
class BenefitGitHubRepositorySubscriberProperties
{
    /**
     * The owner of the repository.
     *
     * @var string $repositoryOwner
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('repository_owner')]
    public string $repositoryOwner;

    /**
     * The name of the repository.
     *
     * @var string $repositoryName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('repository_name')]
    public string $repositoryName;

    /**
     * @param  string  $repositoryOwner
     * @param  string  $repositoryName
     * @phpstan-pure
     */
    public function __construct(string $repositoryOwner, string $repositoryName)
    {
        $this->repositoryOwner = $repositoryOwner;
        $this->repositoryName = $repositoryName;
    }
}