<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


enum RefundSortProperty: string
{
    case CreatedAt = 'created_at';
    case MinusCreatedAt = '-created_at';
    case Amount = 'amount';
    case MinusAmount = '-amount';
}
