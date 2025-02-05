<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class EventCreateCustomer
{
    /**
     * The name of the event.
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * ID of the customer in your Polar organization associated with the event.
     *
     * @var string $customerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_id')]
    public string $customerId;

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
     * The timestamp of the event.
     *
     * @var ?\DateTime $timestamp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timestamp')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $timestamp = null;

    /**
     * The ID of the organization owning the event. **Required unless you use an organization token.**
     *
     * @var ?string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $organizationId = null;

    /**
     * @param  string  $name
     * @param  string  $customerId
     * @param  ?array<string, string|int|bool>  $metadata
     * @param  ?\DateTime  $timestamp
     * @param  ?string  $organizationId
     * @phpstan-pure
     */
    public function __construct(string $name, string $customerId, ?array $metadata = null, ?\DateTime $timestamp = null, ?string $organizationId = null)
    {
        $this->name = $name;
        $this->customerId = $customerId;
        $this->metadata = $metadata;
        $this->timestamp = $timestamp;
        $this->organizationId = $organizationId;
    }
}