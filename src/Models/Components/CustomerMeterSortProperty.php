<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


enum CustomerMeterSortProperty: string
{
    case CreatedAt = 'created_at';
    case MinusCreatedAt = '-created_at';
    case ModifiedAt = 'modified_at';
    case MinusModifiedAt = '-modified_at';
    case CustomerId = 'customer_id';
    case MinusCustomerId = '-customer_id';
    case CustomerName = 'customer_name';
    case MinusCustomerName = '-customer_name';
    case MeterId = 'meter_id';
    case MinusMeterId = '-meter_id';
    case MeterName = 'meter_name';
    case MinusMeterName = '-meter_name';
    case ConsumedUnits = 'consumed_units';
    case MinusConsumedUnits = '-consumed_units';
    case CreditedUnits = 'credited_units';
    case MinusCreditedUnits = '-credited_units';
    case Balance = 'balance';
    case MinusBalance = '-balance';
}
