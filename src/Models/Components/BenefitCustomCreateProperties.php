<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** BenefitCustomCreateProperties - Properties for creating a benefit of type `custom`. */
class BenefitCustomCreateProperties
{
    /**
     *
     * @var ?string $note
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('note')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $note = null;

    /**
     * @param  ?string  $note
     */
    public function __construct(?string $note = null)
    {
        $this->note = $note;
    }
}