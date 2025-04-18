<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Operations;

use Polar\Models\Components;
use Polar\Utils\SpeakeasyMetadata;
class EventsListNamesRequest
{
    /**
     * Filter by organization ID.
     *
     * @var string|array<string>|null $organizationId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=organization_id')]
    public string|array|null $organizationId = null;

    /**
     * Filter by customer ID.
     *
     * @var string|array<string>|null $customerId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=customer_id')]
    public string|array|null $customerId = null;

    /**
     * Filter by external customer ID.
     *
     * @var string|array<string>|null $externalCustomerId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=external_customer_id')]
    public string|array|null $externalCustomerId = null;

    /**
     * Filter by event source.
     *
     * @var Components\EventSource|array<Components\EventSource>|null $source
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=source')]
    public Components\EventSource|array|null $source = null;

    /**
     * Query to filter event names.
     *
     * @var ?string $query
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=query')]
    public ?string $query = null;

    /**
     * Sorting criterion. Several criteria can be used simultaneously and will be applied in order. Add a minus sign `-` before the criteria name to sort by descending order.
     *
     * @var ?array<Components\EventNamesSortProperty> $sorting
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sorting')]
    public ?array $sorting = null;

    /**
     * Page number, defaults to 1.
     *
     * @var ?int $page
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page')]
    public ?int $page = null;

    /**
     * Size of a page, defaults to 10. Maximum is 100.
     *
     * @var ?int $limit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;

    /**
     * @param  ?int  $page
     * @param  ?int  $limit
     * @param  string|array<string>|null  $organizationId
     * @param  string|array<string>|null  $customerId
     * @param  string|array<string>|null  $externalCustomerId
     * @param  Components\EventSource|array<Components\EventSource>|null  $source
     * @param  ?string  $query
     * @param  ?array<Components\EventNamesSortProperty>  $sorting
     * @phpstan-pure
     */
    public function __construct(string|array|null $organizationId = null, string|array|null $customerId = null, string|array|null $externalCustomerId = null, Components\EventSource|array|null $source = null, ?string $query = null, ?array $sorting = null, ?int $page = 1, ?int $limit = 10)
    {
        $this->organizationId = $organizationId;
        $this->customerId = $customerId;
        $this->externalCustomerId = $externalCustomerId;
        $this->source = $source;
        $this->query = $query;
        $this->sorting = $sorting;
        $this->page = $page;
        $this->limit = $limit;
    }
}