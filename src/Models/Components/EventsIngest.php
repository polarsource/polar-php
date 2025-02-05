<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class EventsIngest
{
    /**
     * List of events to ingest.
     *
     * @var array<EventCreateCustomer|EventCreateExternalCustomer> $events
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('events')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\EventCreateCustomer|\Polar\Models\Components\EventCreateExternalCustomer>')]
    public array $events;

    /**
     * @param  array<EventCreateCustomer|EventCreateExternalCustomer>  $events
     * @phpstan-pure
     */
    public function __construct(array $events)
    {
        $this->events = $events;
    }
}