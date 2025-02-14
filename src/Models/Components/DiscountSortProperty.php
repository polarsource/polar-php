<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


enum DiscountSortProperty: string
{
    case CreatedAt = 'created_at';
    case MinusCreatedAt = '-created_at';
    case Name = 'name';
    case MinusName = '-name';
    case Code = 'code';
    case MinusCode = '-code';
    case RedemptionsCount = 'redemptions_count';
    case MinusRedemptionsCount = '-redemptions_count';
}
