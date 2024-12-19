<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Operations;

use Polar\Models\Components;
use Polar\Utils\SpeakeasyMetadata;
class CustomerPortalBenefitGrantsUpdateRequest
{
    /**
     * The benefit grant ID.
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var Components\CustomerBenefitGrantDiscordUpdate|Components\CustomerBenefitGrantGitHubRepositoryUpdate|Components\CustomerBenefitGrantDownloadablesUpdate|Components\CustomerBenefitGrantLicenseKeysUpdate|Components\CustomerBenefitGrantAdsUpdate|Components\CustomerBenefitGrantCustomUpdate $customerBenefitGrantUpdate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\CustomerBenefitGrantDiscordUpdate|Components\CustomerBenefitGrantGitHubRepositoryUpdate|Components\CustomerBenefitGrantDownloadablesUpdate|Components\CustomerBenefitGrantLicenseKeysUpdate|Components\CustomerBenefitGrantAdsUpdate|Components\CustomerBenefitGrantCustomUpdate $customerBenefitGrantUpdate;

    /**
     * @param  string  $id
     * @param  Components\CustomerBenefitGrantDiscordUpdate|Components\CustomerBenefitGrantGitHubRepositoryUpdate|Components\CustomerBenefitGrantDownloadablesUpdate|Components\CustomerBenefitGrantLicenseKeysUpdate|Components\CustomerBenefitGrantAdsUpdate|Components\CustomerBenefitGrantCustomUpdate  $customerBenefitGrantUpdate
     */
    public function __construct(string $id, Components\CustomerBenefitGrantDiscordUpdate|Components\CustomerBenefitGrantGitHubRepositoryUpdate|Components\CustomerBenefitGrantDownloadablesUpdate|Components\CustomerBenefitGrantLicenseKeysUpdate|Components\CustomerBenefitGrantAdsUpdate|Components\CustomerBenefitGrantCustomUpdate $customerBenefitGrantUpdate)
    {
        $this->id = $id;
        $this->customerBenefitGrantUpdate = $customerBenefitGrantUpdate;
    }
}