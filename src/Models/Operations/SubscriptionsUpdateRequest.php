<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Operations;

use Polar\Models\Components;
use Polar\Utils\SpeakeasyMetadata;
class SubscriptionsUpdateRequest
{
    /**
     * The subscription ID.
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var Components\SubscriptionUpdateProduct|Components\SubscriptionCancel $subscriptionUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\SubscriptionUpdateProduct|Components\SubscriptionCancel $subscriptionUpdate;

    /**
     * @param  string  $id
     * @param  Components\SubscriptionUpdateProduct|Components\SubscriptionCancel  $subscriptionUpdate
     * @phpstan-pure
     */
    public function __construct(string $id, Components\SubscriptionUpdateProduct|Components\SubscriptionCancel $subscriptionUpdate)
    {
        $this->id = $id;
        $this->subscriptionUpdate = $subscriptionUpdate;
    }
}