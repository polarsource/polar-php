<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class IntrospectTokenResponse
{
    /**
     *
     * @var bool $active
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('active')]
    public bool $active;

    /**
     *
     * @var string $clientId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('client_id')]
    public string $clientId;

    /**
     *
     * @var IntrospectTokenResponseTokenType $tokenType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('token_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\IntrospectTokenResponseTokenType')]
    public IntrospectTokenResponseTokenType $tokenType;

    /**
     *
     * @var string $scope
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('scope')]
    public string $scope;

    /**
     *
     * @var SubType $subType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sub_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\SubType')]
    public SubType $subType;

    /**
     *
     * @var string $sub
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sub')]
    public string $sub;

    /**
     *
     * @var string $aud
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('aud')]
    public string $aud;

    /**
     *
     * @var string $iss
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('iss')]
    public string $iss;

    /**
     *
     * @var int $exp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('exp')]
    public int $exp;

    /**
     *
     * @var int $iat
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('iat')]
    public int $iat;

    /**
     * @param  bool  $active
     * @param  string  $clientId
     * @param  IntrospectTokenResponseTokenType  $tokenType
     * @param  string  $scope
     * @param  SubType  $subType
     * @param  string  $sub
     * @param  string  $aud
     * @param  string  $iss
     * @param  int  $exp
     * @param  int  $iat
     */
    public function __construct(bool $active, string $clientId, IntrospectTokenResponseTokenType $tokenType, string $scope, SubType $subType, string $sub, string $aud, string $iss, int $exp, int $iat)
    {
        $this->active = $active;
        $this->clientId = $clientId;
        $this->tokenType = $tokenType;
        $this->scope = $scope;
        $this->subType = $subType;
        $this->sub = $sub;
        $this->aud = $aud;
        $this->iss = $iss;
        $this->exp = $exp;
        $this->iat = $iat;
    }
}