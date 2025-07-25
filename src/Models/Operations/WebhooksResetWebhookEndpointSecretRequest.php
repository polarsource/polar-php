<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Operations;

use Polar\Utils\SpeakeasyMetadata;
class WebhooksResetWebhookEndpointSecretRequest
{
    /**
     * The webhook endpoint ID.
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     * @param  string  $id
     * @phpstan-pure
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
}