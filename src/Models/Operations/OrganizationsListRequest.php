<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Operations;

use Polar\Models\Components;
use Polar\Utils\SpeakeasyMetadata;
class OrganizationsListRequest
{
    /**
     * Filter by slug.
     *
     * @var ?string $slug
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=slug')]
    public ?string $slug = null;

    /**
     * Sorting criterion. Several criteria can be used simultaneously and will be applied in order. Add a minus sign `-` before the criteria name to sort by descending order.
     *
     * @var ?array<Components\OrganizationSortProperty> $sorting
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
     * @param  ?string  $slug
     * @param  ?array<Components\OrganizationSortProperty>  $sorting
     */
    public function __construct(?string $slug = null, ?array $sorting = null, ?int $page = 1, ?int $limit = 10)
    {
        $this->slug = $slug;
        $this->sorting = $sorting;
        $this->page = $page;
        $this->limit = $limit;
    }
}