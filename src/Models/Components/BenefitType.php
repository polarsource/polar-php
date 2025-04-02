<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


enum BenefitType: string
{
    case Custom = 'custom';
    case Discord = 'discord';
    case GithubRepository = 'github_repository';
    case Downloadables = 'downloadables';
    case LicenseKeys = 'license_keys';
    case MeterCredit = 'meter_credit';
}
