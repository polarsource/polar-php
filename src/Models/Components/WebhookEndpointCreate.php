<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** WebhookEndpointCreate - Schema to create a webhook endpoint. */
class WebhookEndpointCreate
{
    /**
     * The URL where the webhook events will be sent.
     *
     * @var string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    public string $url;

    /**
     *
     * @var WebhookFormat $format
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('format')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\WebhookFormat')]
    public WebhookFormat $format;

    /**
     * The secret used to sign the webhook events.
     *
     * @var string $secret
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('secret')]
    public string $secret;

    /**
     * The events that will trigger the webhook.
     *
     * @var array<WebhookEventType> $events
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('events')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\WebhookEventType>')]
    public array $events;

    /**
     * The organization ID associated with the webhook endpoint. **Required unless you use an organization token.**
     *
     * @var ?string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $organizationId = null;

    /**
     * @param  string  $url
     * @param  WebhookFormat  $format
     * @param  string  $secret
     * @param  array<WebhookEventType>  $events
     * @param  ?string  $organizationId
     * @phpstan-pure
     */
    public function __construct(string $url, WebhookFormat $format, string $secret, array $events, ?string $organizationId = null)
    {
        $this->url = $url;
        $this->format = $format;
        $this->secret = $secret;
        $this->events = $events;
        $this->organizationId = $organizationId;
    }
}