<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class ListResourceBenefit
{
    /**
     * $items
     *
     * @var array<BenefitCustom|BenefitDiscord|BenefitGitHubRepository|BenefitDownloadables|BenefitLicenseKeys|BenefitMeterCredit> $items
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('items')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\BenefitCustom|\Polar\Models\Components\BenefitDiscord|\Polar\Models\Components\BenefitGitHubRepository|\Polar\Models\Components\BenefitDownloadables|\Polar\Models\Components\BenefitLicenseKeys|\Polar\Models\Components\BenefitMeterCredit>')]
    public array $items;

    /**
     *
     * @var Pagination $pagination
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pagination')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Pagination')]
    public Pagination $pagination;

    /**
     * @param  array<BenefitCustom|BenefitDiscord|BenefitGitHubRepository|BenefitDownloadables|BenefitLicenseKeys|BenefitMeterCredit>  $items
     * @param  Pagination  $pagination
     * @phpstan-pure
     */
    public function __construct(array $items, Pagination $pagination)
    {
        $this->items = $items;
        $this->pagination = $pagination;
    }
}