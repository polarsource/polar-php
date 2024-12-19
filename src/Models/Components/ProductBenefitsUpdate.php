<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** ProductBenefitsUpdate - Schema to update the benefits granted by a product. */
class ProductBenefitsUpdate
{
    /**
     * List of benefit IDs. Each one must be on the same organization as the product.
     *
     * @var array<string> $benefits
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('benefits')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $benefits;

    /**
     * @param  array<string>  $benefits
     */
    public function __construct(array $benefits)
    {
        $this->benefits = $benefits;
    }
}