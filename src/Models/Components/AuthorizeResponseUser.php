<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class AuthorizeResponseUser
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
     *
     * @var ?AuthorizeUser $sub
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sub')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\AuthorizeUser|null')]
    public ?AuthorizeUser $sub;

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
     * @param  ?AuthorizeUser  $sub
     * @phpstan-pure
     */
    public function __construct(OAuth2ClientPublic $client, array $scopes, ?AuthorizeUser $sub = null, string $subType = 'user')
    {
        $this->client = $client;
        $this->scopes = $scopes;
        $this->sub = $sub;
        $this->subType = $subType;
    }
}