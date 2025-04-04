<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class Event
{
    /**
     * $metadata
     *
     * @var array<string, string|int|bool> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string|int|bool>')]
    public array $metadata;

    /**
     * The ID of the object.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * The timestamp of the event.
     *
     * @var \DateTime $timestamp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timestamp')]
    public \DateTime $timestamp;

    /**
     * The name of the event.
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var EventSource $source
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\EventSource')]
    public EventSource $source;

    /**
     * The ID of the organization owning the event.
     *
     * @var string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    public string $organizationId;

    /**
     * ID of the customer in your Polar organization associated with the event.
     *
     * @var ?string $customerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_id')]
    public ?string $customerId;

    /**
     * The customer associated with the event.
     *
     * @var ?Customer $customer
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Customer|null')]
    public ?Customer $customer;

    /**
     * ID of the customer in your system associated with the event.
     *
     * @var ?string $externalCustomerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('external_customer_id')]
    public ?string $externalCustomerId;

    /**
     * @param  array<string, string|int|bool>  $metadata
     * @param  string  $id
     * @param  \DateTime  $timestamp
     * @param  string  $name
     * @param  EventSource  $source
     * @param  string  $organizationId
     * @param  ?string  $customerId
     * @param  ?Customer  $customer
     * @param  ?string  $externalCustomerId
     * @phpstan-pure
     */
    public function __construct(array $metadata, string $id, \DateTime $timestamp, string $name, EventSource $source, string $organizationId, ?string $customerId = null, ?Customer $customer = null, ?string $externalCustomerId = null)
    {
        $this->metadata = $metadata;
        $this->id = $id;
        $this->timestamp = $timestamp;
        $this->name = $name;
        $this->source = $source;
        $this->organizationId = $organizationId;
        $this->customerId = $customerId;
        $this->customer = $customer;
        $this->externalCustomerId = $externalCustomerId;
    }
}