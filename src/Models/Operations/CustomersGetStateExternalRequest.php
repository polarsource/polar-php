<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Operations;

use Polar\Utils\SpeakeasyMetadata;
class CustomersGetStateExternalRequest
{
    /**
     * The customer external ID.
     *
     * @var string $externalId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=external_id')]
    public string $externalId;

    /**
     * @param  string  $externalId
     * @phpstan-pure
     */
    public function __construct(string $externalId)
    {
        $this->externalId = $externalId;
    }
}