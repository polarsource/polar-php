<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class ListResourceEvent
{
    /**
     * $items
     *
     * @var array<MeterCreditEvent|MeterResetEvent|BenefitGrantedEvent|BenefitCycledEvent|BenefitUpdatedEvent|BenefitRevokedEvent|UserEvent> $items
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('items')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\MeterCreditEvent|\Polar\Models\Components\MeterResetEvent|\Polar\Models\Components\BenefitGrantedEvent|\Polar\Models\Components\BenefitCycledEvent|\Polar\Models\Components\BenefitUpdatedEvent|\Polar\Models\Components\BenefitRevokedEvent|\Polar\Models\Components\UserEvent>')]
    public array $items;

    /**
     *
     * @var Pagination $pagination
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pagination')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Pagination')]
    public Pagination $pagination;

    /**
     * @param  array<MeterCreditEvent|MeterResetEvent|BenefitGrantedEvent|BenefitCycledEvent|BenefitUpdatedEvent|BenefitRevokedEvent|UserEvent>  $items
     * @param  Pagination  $pagination
     * @phpstan-pure
     */
    public function __construct(array $items, Pagination $pagination)
    {
        $this->items = $items;
        $this->pagination = $pagination;
    }
}