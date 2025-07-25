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
     * @var Components\TimeInterval $interval
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=interval')]
    public Components\TimeInterval $interval;

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
     * Filter by billing type. `recurring` will filter data corresponding to subscriptions creations or renewals. `one_time` will filter data corresponding to one-time purchases.
     *
     * @var Components\ProductBillingType|array<Components\ProductBillingType>|null $billingType
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=billing_type')]
    public Components\ProductBillingType|array|null $billingType = null;

    /**
     * Filter by customer ID.
     *
     * @var string|array<string>|null $customerId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=customer_id')]
    public string|array|null $customerId = null;

    /**
     * Timezone to use for the timestamps. Default is UTC.
     *
     * @var ?string $timezone
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=timezone')]
    public ?string $timezone = null;

    /**
     * @param  LocalDate  $startDate
     * @param  LocalDate  $endDate
     * @param  Components\TimeInterval  $interval
     * @param  ?string  $timezone
     * @param  string|array<string>|null  $organizationId
     * @param  string|array<string>|null  $productId
     * @param  Components\ProductBillingType|array<Components\ProductBillingType>|null  $billingType
     * @param  string|array<string>|null  $customerId
     * @phpstan-pure
     */
    public function __construct(LocalDate $startDate, LocalDate $endDate, Components\TimeInterval $interval, string|array|null $organizationId = null, string|array|null $productId = null, Components\ProductBillingType|array|null $billingType = null, string|array|null $customerId = null, ?string $timezone = 'UTC')
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->interval = $interval;
        $this->organizationId = $organizationId;
        $this->productId = $productId;
        $this->billingType = $billingType;
        $this->customerId = $customerId;
        $this->timezone = $timezone;
    }
}