<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Operations;

use Polar\Models\Components;
use Polar\Utils\SpeakeasyMetadata;
class CheckoutLinksListRequest
{
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
     * Sorting criterion. Several criteria can be used simultaneously and will be applied in order. Add a minus sign `-` before the criteria name to sort by descending order.
     *
     * @var ?array<Components\CheckoutLinkSortProperty> $sorting
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
     * @param  string|array<string>|null  $productId
     * @param  ?array<Components\CheckoutLinkSortProperty>  $sorting
     * @phpstan-pure
     */
    public function __construct(string|array|null $organizationId = null, string|array|null $productId = null, ?array $sorting = null, ?int $page = 1, ?int $limit = 10)
    {
        $this->organizationId = $organizationId;
        $this->productId = $productId;
        $this->sorting = $sorting;
        $this->page = $page;
        $this->limit = $limit;
    }
}