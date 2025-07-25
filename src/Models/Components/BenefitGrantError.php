<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class BenefitGrantError
{
    /**
     *
     * @var string $message
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('message')]
    public string $message;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     *
     * @var string $timestamp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timestamp')]
    public string $timestamp;

    /**
     * @param  string  $message
     * @param  string  $type
     * @param  string  $timestamp
     * @phpstan-pure
     */
    public function __construct(string $message, string $type, string $timestamp)
    {
        $this->message = $message;
        $this->type = $type;
        $this->timestamp = $timestamp;
    }
}