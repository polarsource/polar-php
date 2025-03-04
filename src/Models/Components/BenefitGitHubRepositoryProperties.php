<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** BenefitGitHubRepositoryProperties - Properties for a benefit of type `github_repository`. */
class BenefitGitHubRepositoryProperties
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
     * The permission level to grant. Read more about roles and their permissions on [GitHub documentation](https://docs.github.com/en/organizations/managing-user-access-to-your-organizations-repositories/managing-repository-roles/repository-roles-for-an-organization#permissions-for-each-role).
     *
     * @var Permission $permission
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('permission')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Permission')]
    public Permission $permission;

    /**
     *
     * @var ?string $repositoryId
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('repository_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $repositoryId = null;

    /**
     * @param  string  $repositoryOwner
     * @param  string  $repositoryName
     * @param  Permission  $permission
     * @param  ?string  $repositoryId
     * @phpstan-pure
     */
    public function __construct(string $repositoryOwner, string $repositoryName, Permission $permission, ?string $repositoryId = null)
    {
        $this->repositoryOwner = $repositoryOwner;
        $this->repositoryName = $repositoryName;
        $this->permission = $permission;
        $this->repositoryId = $repositoryId;
    }
}