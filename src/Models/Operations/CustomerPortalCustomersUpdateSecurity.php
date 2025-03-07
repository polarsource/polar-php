<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Operations;

use Polar\Utils\SpeakeasyMetadata;
class CustomerPortalCustomersUpdateSecurity
{
    /**
     *
     * @var string $customerSession
     */
    #[SpeakeasyMetadata('security:scheme=true,type=http,subtype=bearer,name=Authorization')]
    public string $customerSession;

    /**
     * @param  string  $customerSession
     * @phpstan-pure
     */
    public function __construct(string $customerSession)
    {
        $this->customerSession = $customerSession;
    }
}