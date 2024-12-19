<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Operations;

use Polar\Models\Components;
use Polar\Utils\SpeakeasyMetadata;
class ProductsUpdateRequest
{
    /**
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var Components\ProductUpdate $productUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\ProductUpdate $productUpdate;

    /**
     * @param  string  $id
     * @param  Components\ProductUpdate  $productUpdate
     */
    public function __construct(string $id, Components\ProductUpdate $productUpdate)
    {
        $this->id = $id;
        $this->productUpdate = $productUpdate;
    }
}