<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** CheckoutDiscountPercentageOnceForeverDuration - Schema for a percentage discount that is applied once or forever. */
class CheckoutDiscountPercentageOnceForeverDuration
{
    /**
     *
     * @var DiscountDuration $duration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('duration')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\DiscountDuration')]
    public DiscountDuration $duration;

    /**
     *
     * @var DiscountType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\DiscountType')]
    public DiscountType $type;

    /**
     *
     * @var int $basisPoints
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('basis_points')]
    public int $basisPoints;

    /**
     * The ID of the object.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var ?string $code
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('code')]
    public ?string $code;

    /**
     * @param  DiscountDuration  $duration
     * @param  DiscountType  $type
     * @param  int  $basisPoints
     * @param  string  $id
     * @param  string  $name
     * @param  ?string  $code
     * @phpstan-pure
     */
    public function __construct(DiscountDuration $duration, DiscountType $type, int $basisPoints, string $id, string $name, ?string $code = null)
    {
        $this->duration = $duration;
        $this->type = $type;
        $this->basisPoints = $basisPoints;
        $this->id = $id;
        $this->name = $name;
        $this->code = $code;
    }
}