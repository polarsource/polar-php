<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/**
 * WebhookSubscriptionActivePayload - Sent when a subscription becomes active,
 *
 * whether because it's a new paid subscription or because payment was recovered.
 *
 * **Discord & Slack support:** Full
 */
class WebhookSubscriptionActivePayload
{
    /**
     *
     * @var Subscription $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Subscription')]
    public Subscription $data;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $type
     * @param  Subscription  $data
     * @phpstan-pure
     */
    public function __construct(Subscription $data, string $type = 'subscription.active')
    {
        $this->data = $data;
        $this->type = $type;
    }
}