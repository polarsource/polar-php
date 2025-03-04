<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/**
 * WebhookOrderCreatedPayload - Sent when a new order is created.
 *
 *
 * **Discord & Slack support:** Full
 */
class WebhookOrderCreatedPayload
{
    /**
     *
     * @var Order $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Order')]
    public Order $data;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $type
     * @param  Order  $data
     * @phpstan-pure
     */
    public function __construct(Order $data, string $type = 'order.created')
    {
        $this->data = $data;
        $this->type = $type;
    }
}