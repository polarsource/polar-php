<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/**
 * WebhookRefundUpdatedPayload - Sent when a refund is updated.
 *
 *
 * **Discord & Slack support:** Full
 */
class WebhookRefundUpdatedPayload
{
    /**
     *
     * @var Refund $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Refund')]
    public Refund $data;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $type
     * @param  Refund  $data
     * @phpstan-pure
     */
    public function __construct(Refund $data, string $type = 'refund.updated')
    {
        $this->data = $data;
        $this->type = $type;
    }
}