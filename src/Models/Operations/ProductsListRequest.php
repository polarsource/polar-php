<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Operations;

use Polar\Models\Components;
use Polar\Utils\SpeakeasyMetadata;
class ProductsListRequest
{
    /**
     * Filter by product ID.
     *
     * @var string|array<string>|null $id
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=id')]
    public string|array|null $id = null;

    /**
     * Filter by organization ID.
     *
     * @var string|array<string>|null $organizationId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=organization_id')]
    public string|array|null $organizationId = null;

    /**
     * Filter by product name.
     *
     * @var ?string $query
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=query')]
    public ?string $query = null;

    /**
     * Filter on archived products.
     *
     * @var ?bool $isArchived
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=is_archived')]
    public ?bool $isArchived = null;

    /**
     * Filter on recurring products. If `true`, only subscriptions tiers are returned. If `false`, only one-time purchase products are returned. 
     *
     * @var ?bool $isRecurring
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=is_recurring')]
    public ?bool $isRecurring = null;

    /**
     * Filter products granting specific benefit.
     *
     * @var string|array<string>|null $benefitId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=benefit_id')]
    public string|array|null $benefitId = null;

    /**
     * Sorting criterion. Several criteria can be used simultaneously and will be applied in order. Add a minus sign `-` before the criteria name to sort by descending order.
     *
     * @var ?array<Components\ProductSortProperty> $sorting
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sorting')]
    public ?array $sorting = null;

    /**
     * Filter by metadata key-value pairs. It uses the `deepObject` style, e.g. `?metadata[key]=value`.
     *
     * @var ?array<string, string|int|bool|array<string>|array<int>|array<bool>> $metadata
     */
    #[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=metadata')]
    public ?array $metadata = null;

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
     * @param  string|array<string>|null  $id
     * @param  string|array<string>|null  $organizationId
     * @param  ?string  $query
     * @param  ?bool  $isArchived
     * @param  ?bool  $isRecurring
     * @param  string|array<string>|null  $benefitId
     * @param  ?array<Components\ProductSortProperty>  $sorting
     * @param  ?array<string, string|int|bool|array<string>|array<int>|array<bool>>  $metadata
     * @phpstan-pure
     */
    public function __construct(string|array|null $id = null, string|array|null $organizationId = null, ?string $query = null, ?bool $isArchived = null, ?bool $isRecurring = null, string|array|null $benefitId = null, ?array $sorting = null, ?array $metadata = null, ?int $page = 1, ?int $limit = 10)
    {
        $this->id = $id;
        $this->organizationId = $organizationId;
        $this->query = $query;
        $this->isArchived = $isArchived;
        $this->isRecurring = $isRecurring;
        $this->benefitId = $benefitId;
        $this->sorting = $sorting;
        $this->metadata = $metadata;
        $this->page = $page;
        $this->limit = $limit;
    }
}