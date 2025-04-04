<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** MetricsIntervalLimit - Date interval limit to get metrics for a given interval. */
class MetricsIntervalLimit
{
    /**
     * Maximum number of days for this interval.
     *
     * @var int $maxDays
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('max_days')]
    public int $maxDays;

    /**
     * @param  int  $maxDays
     * @phpstan-pure
     */
    public function __construct(int $maxDays)
    {
        $this->maxDays = $maxDays;
    }
}