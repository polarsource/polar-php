<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Errors;

class ExpiredCheckoutErrorThrowable extends \RuntimeException
{
    public ExpiredCheckoutError $container;

    public function __construct(string $message, int $statusCode, ExpiredCheckoutError $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}