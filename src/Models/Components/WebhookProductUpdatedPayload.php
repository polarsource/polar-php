<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/**
 * WebhookProductUpdatedPayload - Sent when a product is updated.
 *
 *
 * **Discord & Slack support:** Basic
 */
class WebhookProductUpdatedPayload
{
    /**
     * A product.
     *
     * @var Product $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Product')]
    public Product $data;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $type
     * @param  Product  $data
     * @phpstan-pure
     */
    public function __construct(Product $data, string $type = 'product.updated')
    {
        $this->data = $data;
        $this->type = $type;
    }
}