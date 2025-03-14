<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Operations;

use Polar\Models\Components;
use Polar\Utils\SpeakeasyMetadata;
class BenefitsListRequest
{
    /**
     * Filter by organization ID.
     *
     * @var string|array<string>|null $organizationId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=organization_id')]
    public string|array|null $organizationId = null;

    /**
     * Filter by benefit type.
     *
     * @var Components\BenefitType|array<Components\BenefitType>|null $typeFilter
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=type')]
    public Components\BenefitType|array|null $typeFilter = null;

    /**
     * Filter by description.
     *
     * @var ?string $query
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=query')]
    public ?string $query = null;

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
     * @param  Components\BenefitType|array<Components\BenefitType>|null  $typeFilter
     * @param  ?string  $query
     * @phpstan-pure
     */
    public function __construct(string|array|null $organizationId = null, Components\BenefitType|array|null $typeFilter = null, ?string $query = null, ?int $page = 1, ?int $limit = 10)
    {
        $this->organizationId = $organizationId;
        $this->typeFilter = $typeFilter;
        $this->query = $query;
        $this->page = $page;
        $this->limit = $limit;
    }
}