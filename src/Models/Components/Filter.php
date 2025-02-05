<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class Filter
{
    /**
     *
     * @var FilterConjunction $conjunction
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('conjunction')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\FilterConjunction')]
    public FilterConjunction $conjunction;

    /**
     * $clauses
     *
     * @var array<FilterClause|Filter> $clauses
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('clauses')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\FilterClause|\Polar\Models\Components\Filter>')]
    public array $clauses;

    /**
     * @param  FilterConjunction  $conjunction
     * @param  array<FilterClause|Filter>  $clauses
     * @phpstan-pure
     */
    public function __construct(FilterConjunction $conjunction, array $clauses)
    {
        $this->conjunction = $conjunction;
        $this->clauses = $clauses;
    }
}