<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class OAuth2ClientConfigurationUpdate
{
    /**
     * $redirectUris
     *
     * @var array<string> $redirectUris
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('redirect_uris')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $redirectUris;

    /**
     *
     * @var string $clientName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('client_name')]
    public string $clientName;

    /**
     *
     * @var string $clientId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('client_id')]
    public string $clientId;

    /**
     * $grantTypes
     *
     * @var ?array<OAuth2ClientConfigurationUpdateGrantTypes> $grantTypes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('grant_types')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\OAuth2ClientConfigurationUpdateGrantTypes>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $grantTypes = null;

    /**
     * $responseTypes
     *
     * @var ?array<string> $responseTypes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('response_types')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $responseTypes = null;

    /**
     *
     * @var ?string $clientUri
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('client_uri')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $clientUri = null;

    /**
     *
     * @var ?string $logoUri
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('logo_uri')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $logoUri = null;

    /**
     *
     * @var ?string $tosUri
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tos_uri')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $tosUri = null;

    /**
     *
     * @var ?string $policyUri
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('policy_uri')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $policyUri = null;

    /**
     *
     * @var ?OAuth2ClientConfigurationUpdateTokenEndpointAuthMethod $tokenEndpointAuthMethod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('token_endpoint_auth_method')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\OAuth2ClientConfigurationUpdateTokenEndpointAuthMethod|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?OAuth2ClientConfigurationUpdateTokenEndpointAuthMethod $tokenEndpointAuthMethod = null;

    /**
     *
     * @var ?string $scope
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('scope')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $scope = null;

    /**
     * @param  array<string>  $redirectUris
     * @param  string  $clientName
     * @param  string  $clientId
     * @param  ?OAuth2ClientConfigurationUpdateTokenEndpointAuthMethod  $tokenEndpointAuthMethod
     * @param  ?array<OAuth2ClientConfigurationUpdateGrantTypes>  $grantTypes
     * @param  ?array<string>  $responseTypes
     * @param  ?string  $scope
     * @param  ?string  $clientUri
     * @param  ?string  $logoUri
     * @param  ?string  $tosUri
     * @param  ?string  $policyUri
     * @phpstan-pure
     */
    public function __construct(array $redirectUris, string $clientName, string $clientId, ?array $grantTypes = null, ?array $responseTypes = null, ?string $clientUri = null, ?string $logoUri = null, ?string $tosUri = null, ?string $policyUri = null, ?OAuth2ClientConfigurationUpdateTokenEndpointAuthMethod $tokenEndpointAuthMethod = OAuth2ClientConfigurationUpdateTokenEndpointAuthMethod::ClientSecretPost, ?string $scope = 'openid profile email user:read organizations:read organizations:write custom_fields:read custom_fields:write discounts:read discounts:write checkout_links:read checkout_links:write checkouts:read checkouts:write transactions:read transactions:write payouts:read payouts:write products:read products:write benefits:read benefits:write events:read events:write meters:read meters:write files:read files:write subscriptions:read subscriptions:write customers:read customers:write customer_meters:read customer_sessions:write orders:read orders:write refunds:read refunds:write payments:read metrics:read webhooks:read webhooks:write external_organizations:read license_keys:read license_keys:write repositories:read repositories:write issues:read issues:write customer_portal:read customer_portal:write notifications:read notifications:write notification_recipients:read notification_recipients:write')
    {
        $this->redirectUris = $redirectUris;
        $this->clientName = $clientName;
        $this->clientId = $clientId;
        $this->grantTypes = $grantTypes;
        $this->responseTypes = $responseTypes;
        $this->clientUri = $clientUri;
        $this->logoUri = $logoUri;
        $this->tosUri = $tosUri;
        $this->policyUri = $policyUri;
        $this->tokenEndpointAuthMethod = $tokenEndpointAuthMethod;
        $this->scope = $scope;
    }
}