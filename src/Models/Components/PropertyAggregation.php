<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class PropertyAggregation
{
    /**
     *
     * @var Func $func
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('func')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Func')]
    public Func $func;

    /**
     *
     * @var string $property
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('property')]
    public string $property;

    /**
     * @param  Func  $func
     * @param  string  $property
     * @phpstan-pure
     */
    public function __construct(Func $func, string $property)
    {
        $this->func = $func;
        $this->property = $property;
    }
}