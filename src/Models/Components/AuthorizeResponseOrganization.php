<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class AuthorizeResponseOrganization
{
    /**
     *
     * @var OAuth2ClientPublic $client
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('client')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\OAuth2ClientPublic')]
    public OAuth2ClientPublic $client;

    /**
     * $scopes
     *
     * @var array<Scope> $scopes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('scopes')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\Scope>')]
    public array $scopes;

    /**
     * $organizations
     *
     * @var array<AuthorizeOrganization> $organizations
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organizations')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\AuthorizeOrganization>')]
    public array $organizations;

    /**
     *
     * @var ?AuthorizeOrganization $sub
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sub')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\AuthorizeOrganization|null')]
    public ?AuthorizeOrganization $sub;

    /**
     *
     * @var string $subType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sub_type')]
    public string $subType;

    /**
     * @param  OAuth2ClientPublic  $client
     * @param  string  $subType
     * @param  array<Scope>  $scopes
     * @param  array<AuthorizeOrganization>  $organizations
     * @param  ?AuthorizeOrganization  $sub
     * @phpstan-pure
     */
    public function __construct(OAuth2ClientPublic $client, array $scopes, array $organizations, ?AuthorizeOrganization $sub = null, string $subType = 'organization')
    {
        $this->client = $client;
        $this->scopes = $scopes;
        $this->organizations = $organizations;
        $this->sub = $sub;
        $this->subType = $subType;
    }
}