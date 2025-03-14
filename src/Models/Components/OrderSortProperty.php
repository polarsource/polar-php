<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


enum OrderSortProperty: string
{
    case CreatedAt = 'created_at';
    case MinusCreatedAt = '-created_at';
    case Amount = 'amount';
    case MinusAmount = '-amount';
    case NetAmount = 'net_amount';
    case MinusNetAmount = '-net_amount';
    case Customer = 'customer';
    case MinusCustomer = '-customer';
    case Product = 'product';
    case MinusProduct = '-product';
    case Discount = 'discount';
    case MinusDiscount = '-discount';
    case Subscription = 'subscription';
    case MinusSubscription = '-subscription';
}
