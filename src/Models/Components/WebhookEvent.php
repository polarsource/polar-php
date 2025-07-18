<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/**
 * WebhookEvent - A webhook event.
 *
 *
 * An event represent something that happened in the system
 * that should be sent to the webhook endpoint.
 *
 * It can be delivered multiple times until it's marked as succeeded,
 * each one creating a new delivery.
 */
class WebhookEvent
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
     * The payload of the webhook event.
     *
     * @var string $payload
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payload')]
    public string $payload;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

    /**
     * Last HTTP code returned by the URL. `null` if no delviery has been attempted or if the endpoint was unreachable.
     *
     * @var ?int $lastHttpCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('last_http_code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $lastHttpCode = null;

    /**
     * Whether this event was successfully delivered. `null` if no delivery has been attempted.
     *
     * @var ?bool $succeeded
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('succeeded')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $succeeded = null;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  string  $payload
     * @param  ?\DateTime  $modifiedAt
     * @param  ?int  $lastHttpCode
     * @param  ?bool  $succeeded
     * @phpstan-pure
     */
    public function __construct(\DateTime $createdAt, string $id, string $payload, ?\DateTime $modifiedAt = null, ?int $lastHttpCode = null, ?bool $succeeded = null)
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->payload = $payload;
        $this->modifiedAt = $modifiedAt;
        $this->lastHttpCode = $lastHttpCode;
        $this->succeeded = $succeeded;
    }
}