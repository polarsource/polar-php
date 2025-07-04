<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class LicenseKeyValidate
{
    /**
     *
     * @var string $key
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('key')]
    public string $key;

    /**
     *
     * @var string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    public string $organizationId;

    /**
     * Key-value object allowing you to set conditions that must match when validating the license key.
     *
     *
     * The key must be a string with a maximum length of **40 characters**.
     * The value must be either:
     *
     * * A string with a maximum length of **500 characters**
     * * An integer
     * * A floating-point number
     * * A boolean
     *
     * You can store up to **50 key-value pairs**.
     *
     * @var ?array<string, string|int|float|bool> $conditions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('conditions')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string|int|float|bool>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $conditions = null;

    /**
     *
     * @var ?string $activationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('activation_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $activationId = null;

    /**
     *
     * @var ?string $benefitId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('benefit_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $benefitId = null;

    /**
     *
     * @var ?string $customerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customerId = null;

    /**
     *
     * @var ?int $incrementUsage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('increment_usage')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $incrementUsage = null;

    /**
     * @param  string  $key
     * @param  string  $organizationId
     * @param  ?array<string, string|int|float|bool>  $conditions
     * @param  ?string  $activationId
     * @param  ?string  $benefitId
     * @param  ?string  $customerId
     * @param  ?int  $incrementUsage
     * @phpstan-pure
     */
    public function __construct(string $key, string $organizationId, ?array $conditions = null, ?string $activationId = null, ?string $benefitId = null, ?string $customerId = null, ?int $incrementUsage = null)
    {
        $this->key = $key;
        $this->organizationId = $organizationId;
        $this->conditions = $conditions;
        $this->activationId = $activationId;
        $this->benefitId = $benefitId;
        $this->customerId = $customerId;
        $this->incrementUsage = $incrementUsage;
    }
}