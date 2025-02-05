<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class ListResourceCustomField
{
    /**
     * $items
     *
     * @var array<CustomFieldText|CustomFieldNumber|CustomFieldDate|CustomFieldCheckbox|CustomFieldSelect> $items
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('items')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\CustomFieldText|\Polar\Models\Components\CustomFieldNumber|\Polar\Models\Components\CustomFieldDate|\Polar\Models\Components\CustomFieldCheckbox|\Polar\Models\Components\CustomFieldSelect>')]
    public array $items;

    /**
     *
     * @var Pagination $pagination
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pagination')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Pagination')]
    public Pagination $pagination;

    /**
     * @param  array<CustomFieldText|CustomFieldNumber|CustomFieldDate|CustomFieldCheckbox|CustomFieldSelect>  $items
     * @param  Pagination  $pagination
     * @phpstan-pure
     */
    public function __construct(array $items, Pagination $pagination)
    {
        $this->items = $items;
        $this->pagination = $pagination;
    }
}