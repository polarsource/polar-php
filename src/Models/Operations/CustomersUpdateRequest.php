<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Operations;

use Polar\Models\Components;
use Polar\Utils\SpeakeasyMetadata;
class CustomersUpdateRequest
{
    /**
     * The customer ID.
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var Components\CustomerUpdate $customerUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\CustomerUpdate $customerUpdate;

    /**
     * @param  string  $id
     * @param  Components\CustomerUpdate  $customerUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\CustomerUpdate $customerUpdate)
    {
        $this->id = $id;
        $this->customerUpdate = $customerUpdate;
    }
}