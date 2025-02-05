<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;

use Polar\Utils\SpeakeasyMetadata;
class Onev11oauth21tokenPostXComponentsRefreshTokenRequest
{
    /**
     *
     * @var string $clientId
     */
    #[SpeakeasyMetadata('form:name=client_id')]
    public string $clientId;

    /**
     *
     * @var string $clientSecret
     */
    #[SpeakeasyMetadata('form:name=client_secret')]
    public string $clientSecret;

    /**
     *
     * @var string $refreshToken
     */
    #[SpeakeasyMetadata('form:name=refresh_token')]
    public string $refreshToken;

    /**
     *
     * @var string $grantType
     */
    #[SpeakeasyMetadata('form:name=grant_type')]
    public string $grantType;

    /**
     * @param  string  $grantType
     * @param  string  $clientId
     * @param  string  $clientSecret
     * @param  string  $refreshToken
     * @phpstan-pure
     */
    public function __construct(string $clientId, string $clientSecret, string $refreshToken, string $grantType = 'refresh_token')
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->refreshToken = $refreshToken;
        $this->grantType = $grantType;
    }
}