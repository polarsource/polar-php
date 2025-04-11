<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/**
 * WebhookCustomerStateChangedPayload - Sent when a customer state has changed.
 *
 *
 * It's triggered when:
 *
 * * Customer is created, updated or deleted.
 * * A subscription is created or updated.
 * * A benefit is granted or revoked.
 *
 * **Discord & Slack support:** Basic
 */
class WebhookCustomerStateChangedPayload
{
    /**
     * A customer along with additional state information:
     *
     *
     * * Active subscriptions
     * * Granted benefits
     * * Active meters
     *
     * @var CustomerState $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\CustomerState')]
    public CustomerState $data;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $type
     * @param  CustomerState  $data
     * @phpstan-pure
     */
    public function __construct(CustomerState $data, string $type = 'customer.state_changed')
    {
        $this->data = $data;
        $this->type = $type;
    }
}