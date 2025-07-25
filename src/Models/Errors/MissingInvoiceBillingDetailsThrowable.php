<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Errors;

class MissingInvoiceBillingDetailsThrowable extends \RuntimeException
{
    public MissingInvoiceBillingDetails $container;

    public function __construct(string $message, int $statusCode, MissingInvoiceBillingDetails $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}