<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** BenefitGitHubRepositoryCreateProperties - Properties to create a benefit of type `github_repository`. */
class BenefitGitHubRepositoryCreateProperties
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
     * @param  string  $repositoryOwner
     * @param  string  $repositoryName
     * @param  Permission  $permission
     * @phpstan-pure
     */
    public function __construct(string $repositoryOwner, string $repositoryName, Permission $permission)
    {
        $this->repositoryOwner = $repositoryOwner;
        $this->repositoryName = $repositoryName;
        $this->permission = $permission;
    }
}