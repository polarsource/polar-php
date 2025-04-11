<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** BenefitMeterCreditSubscriberProperties - Properties available to subscribers for a benefit of type `meter_unit`. */
class BenefitMeterCreditSubscriberProperties
{
    /**
     *
     * @var int $units
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('units')]
    public int $units;

    /**
     *
     * @var string $meterId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('meter_id')]
    public string $meterId;

    /**
     * @param  int  $units
     * @param  string  $meterId
     * @phpstan-pure
     */
    public function __construct(int $units, string $meterId)
    {
        $this->units = $units;
        $this->meterId = $meterId;
    }
}