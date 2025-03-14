<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/**
 * WebhookSubscriptionUncanceledPayload - Sent when a subscription is uncanceled.
 *
 *
 * **Discord & Slack support:** Full
 */
class WebhookSubscriptionUncanceledPayload
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
    public function __construct(Subscription $data, string $type = 'subscription.uncanceled')
    {
        $this->data = $data;
        $this->type = $type;
    }
}