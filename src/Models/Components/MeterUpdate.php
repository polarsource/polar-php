<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class MeterUpdate
{
    /**
     * Key-value object allowing you to store additional information.
     *
     *
     * The key must be a string with a maximum length of **40 characters**.
     * The value must be either:
     *
     * * A string with a maximum length of **500 characters**
     * * An integer
     * * A floating-point number
     * * A boolean
     *
     * You can store up to **50 key-value pairs**.
     *
     * @var ?array<string, string|int|float|bool> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string|int|float|bool>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     * The name of the meter. Will be shown on customer's invoices and usage.
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The filter to apply on events that'll be used to calculate the meter.
     *
     * @var ?Filter $filter
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('filter')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Filter|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Filter $filter = null;

    /**
     * The aggregation to apply on the filtered events to calculate the meter.
     *
     * @var CountAggregation|PropertyAggregation|null $aggregation
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('aggregation')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\CountAggregation|\Polar\Models\Components\PropertyAggregation|null')]
    #[\Speakeasy\Serializer\Annotation\UnionDiscriminator(field: 'func', map: ['CountAggregation' => '\Polar\Models\Components\CountAggregation', 'PropertyAggregation' => '\Polar\Models\Components\PropertyAggregation'])]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public CountAggregation|PropertyAggregation|null $aggregation = null;

    /**
     * @param  ?array<string, string|int|float|bool>  $metadata
     * @param  ?string  $name
     * @param  ?Filter  $filter
     * @param  CountAggregation|PropertyAggregation|null  $aggregation
     * @phpstan-pure
     */
    public function __construct(?array $metadata = null, ?string $name = null, ?Filter $filter = null, CountAggregation|PropertyAggregation|null $aggregation = null)
    {
        $this->metadata = $metadata;
        $this->name = $name;
        $this->filter = $filter;
        $this->aggregation = $aggregation;
    }
}