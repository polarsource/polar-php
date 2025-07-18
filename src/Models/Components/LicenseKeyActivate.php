<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class LicenseKeyActivate
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
     *
     * @var string $label
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('label')]
    public string $label;

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
     * Key-value object allowing you to store additional information about the activation
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
     * @var ?array<string, string|int|float|bool> $meta
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('meta')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string|int|float|bool>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $meta = null;

    /**
     * @param  string  $key
     * @param  string  $organizationId
     * @param  string  $label
     * @param  ?array<string, string|int|float|bool>  $conditions
     * @param  ?array<string, string|int|float|bool>  $meta
     * @phpstan-pure
     */
    public function __construct(string $key, string $organizationId, string $label, ?array $conditions = null, ?array $meta = null)
    {
        $this->key = $key;
        $this->organizationId = $organizationId;
        $this->label = $label;
        $this->conditions = $conditions;
        $this->meta = $meta;
    }
}