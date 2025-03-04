<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Operations;

use Polar\Models\Components;
use Polar\Utils\SpeakeasyMetadata;
class ProductsUpdateBenefitsRequest
{
    /**
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var Components\ProductBenefitsUpdate $productBenefitsUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\ProductBenefitsUpdate $productBenefitsUpdate;

    /**
     * @param  string  $id
     * @param  Components\ProductBenefitsUpdate  $productBenefitsUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\ProductBenefitsUpdate $productBenefitsUpdate)
    {
        $this->id = $id;
        $this->productBenefitsUpdate = $productBenefitsUpdate;
    }
}