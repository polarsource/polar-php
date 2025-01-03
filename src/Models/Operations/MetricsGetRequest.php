<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Operations;

use Brick\DateTime\LocalDate;
use Polar\Models\Components;
use Polar\Utils\SpeakeasyMetadata;
class MetricsGetRequest
{
    /**
     * Start date.
     *
     * @var LocalDate $startDate
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=start_date,dateTimeFormat=Y-m-d')]
    public LocalDate $startDate;

    /**
     * End date.
     *
     * @var LocalDate $endDate
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=end_date,dateTimeFormat=Y-m-d')]
    public LocalDate $endDate;

    /**
     * Interval between two timestamps.
     *
     * @var Components\Interval $interval
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=interval')]
    public Components\Interval $interval;

    /**
     * Filter by organization ID.
     *
     * @var string|array<string>|null $organizationId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=organization_id')]
    public string|array|null $organizationId = null;

    /**
     * Filter by product ID.
     *
     * @var string|array<string>|null $productId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=product_id')]
    public string|array|null $productId = null;

    /**
     * Filter by product price type. `recurring` will filter data corresponding to subscriptions creations or renewals. `one_time` will filter data corresponding to one-time purchases.
     *
     * @var Components\ProductPriceType|array<Components\ProductPriceType>|null $productPriceType
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=product_price_type')]
    public Components\ProductPriceType|array|null $productPriceType = null;

    /**
     * @param  LocalDate  $startDate
     * @param  LocalDate  $endDate
     * @param  Components\Interval  $interval
     * @param  string|array<string>|null  $organizationId
     * @param  string|array<string>|null  $productId
     * @param  Components\ProductPriceType|array<Components\ProductPriceType>|null  $productPriceType
     */
    public function __construct(LocalDate $startDate, LocalDate $endDate, Components\Interval $interval, string|array|null $organizationId = null, string|array|null $productId = null, Components\ProductPriceType|array|null $productPriceType = null)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->interval = $interval;
        $this->organizationId = $organizationId;
        $this->productId = $productId;
        $this->productPriceType = $productPriceType;
    }
}