<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class CustomerCreate
{
    /**
     *
     * @var string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    public string $email;

    /**
     * Key-value object allowing you to store additional information.
     *
     *
     * The key must be a string with a maximum length of **40 characters**.
     * The value must be either:
     *
     * * A string with a maximum length of **500 characters**
     * * An integer
     * * A boolean
     *
     * You can store up to **50 key-value pairs**.
     *
     * @var ?array<string, string|int|bool> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string|int|bool>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?Address $billingAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billing_address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Address|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Address $billingAddress = null;

    /**
     * $taxId
     *
     * @var ?array<string|TaxIDFormat> $taxId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_id')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string|\Polar\Models\Components\TaxIDFormat>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $taxId = null;

    /**
     * The ID of the organization owning the customer. **Required unless you use an organization token.**
     *
     * @var ?string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $organizationId = null;

    /**
     * @param  string  $email
     * @param  ?array<string, string|int|bool>  $metadata
     * @param  ?string  $name
     * @param  ?Address  $billingAddress
     * @param  ?array<string|TaxIDFormat>  $taxId
     * @param  ?string  $organizationId
     * @phpstan-pure
     */
    public function __construct(string $email, ?array $metadata = null, ?string $name = null, ?Address $billingAddress = null, ?array $taxId = null, ?string $organizationId = null)
    {
        $this->email = $email;
        $this->metadata = $metadata;
        $this->name = $name;
        $this->billingAddress = $billingAddress;
        $this->taxId = $taxId;
        $this->organizationId = $organizationId;
    }
}