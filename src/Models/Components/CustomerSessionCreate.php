<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** CustomerSessionCreate - Schema for creating a customer session. */
class CustomerSessionCreate
{
    /**
     * ID of the customer to create a session for.
     *
     * @var string $customerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_id')]
    public string $customerId;

    /**
     * @param  string  $customerId
     * @phpstan-pure
     */
    public function __construct(string $customerId)
    {
        $this->customerId = $customerId;
    }
}