<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Operations;

use Polar\Utils\SpeakeasyMetadata;
class Oauth2RevokeTokenRevokeTokenRequest
{
    /**
     *
     * @var string $token
     */
    #[SpeakeasyMetadata('form:name=token')]
    public string $token;

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
     * @var ?TokenTypeHint $tokenTypeHint
     */
    #[SpeakeasyMetadata('form:name=token_type_hint')]
    public ?TokenTypeHint $tokenTypeHint = null;

    /**
     * @param  string  $token
     * @param  string  $clientId
     * @param  string  $clientSecret
     * @param  ?TokenTypeHint  $tokenTypeHint
     * @phpstan-pure
     */
    public function __construct(string $token, string $clientId, string $clientSecret, ?TokenTypeHint $tokenTypeHint = null)
    {
        $this->token = $token;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->tokenTypeHint = $tokenTypeHint;
    }
}