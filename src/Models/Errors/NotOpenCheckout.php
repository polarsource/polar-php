<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Errors;

use Polar\Utils;
class NotOpenCheckout
{
    /**
     *
     * @var string $error
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('error')]
    public string $error;

    /**
     *
     * @var string $detail
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('detail')]
    public string $detail;

    /**
     * @param  string  $error
     * @param  string  $detail
     * @phpstan-pure
     */
    public function __construct(string $detail, string $error = 'NotOpenCheckout')
    {
        $this->error = $error;
        $this->detail = $detail;
    }

    public function toException(): NotOpenCheckoutThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new NotOpenCheckoutThrowable($message, (int) $code, $this);
    }
}