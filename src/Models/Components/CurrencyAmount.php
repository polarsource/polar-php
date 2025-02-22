<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class CurrencyAmount
{
    /**
     * Three letter currency code (eg: USD)
     *
     * @var string $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    public string $currency;

    /**
     * Amount in the currencies smallest unit (cents if currency is USD)
     *
     * @var int $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    public int $amount;

    /**
     * @param  string  $currency
     * @param  int  $amount
     * @phpstan-pure
     */
    public function __construct(string $currency, int $amount)
    {
        $this->currency = $currency;
        $this->amount = $amount;
    }
}