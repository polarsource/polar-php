<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class PaymentMethodGeneric
{
    /**
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     *
     * @var bool $default
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('default')]
    public bool $default;

    /**
     * @param  string  $id
     * @param  string  $type
     * @param  \DateTime  $createdAt
     * @param  bool  $default
     * @phpstan-pure
     */
    public function __construct(string $id, string $type, \DateTime $createdAt, bool $default)
    {
        $this->id = $id;
        $this->type = $type;
        $this->createdAt = $createdAt;
        $this->default = $default;
    }
}