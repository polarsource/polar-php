<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class CustomerPortalCustomer
{
    /**
     * Creation timestamp of the object.
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * The ID of the object.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    public string $email;

    /**
     *
     * @var bool $emailVerified
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email_verified')]
    public bool $emailVerified;

    /**
     * $oauthAccounts
     *
     * @var array<string, CustomerPortalOAuthAccount> $oauthAccounts
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('oauth_accounts')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, \Polar\Models\Components\CustomerPortalOAuthAccount>')]
    public array $oauthAccounts;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public ?string $name;

    /**
     *
     * @var ?Address $billingAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billing_address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Address|null')]
    public ?Address $billingAddress;

    /**
     * $taxId
     *
     * @var ?array<string|TaxIDFormat|null> $taxId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_id')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string|\Polar\Models\Components\TaxIDFormat|null>|null')]
    public ?array $taxId;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  string  $email
     * @param  bool  $emailVerified
     * @param  array<string, CustomerPortalOAuthAccount>  $oauthAccounts
     * @param  ?\DateTime  $modifiedAt
     * @param  ?string  $name
     * @param  ?Address  $billingAddress
     * @param  ?array<string|TaxIDFormat|null>  $taxId
     * @phpstan-pure
     */
    public function __construct(\DateTime $createdAt, string $id, string $email, bool $emailVerified, array $oauthAccounts, ?\DateTime $modifiedAt = null, ?string $name = null, ?Address $billingAddress = null, ?array $taxId = null)
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->email = $email;
        $this->emailVerified = $emailVerified;
        $this->oauthAccounts = $oauthAccounts;
        $this->modifiedAt = $modifiedAt;
        $this->name = $name;
        $this->billingAddress = $billingAddress;
        $this->taxId = $taxId;
    }
}