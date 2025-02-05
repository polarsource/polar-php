<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class CustomFieldSelectProperties
{
    /**
     * $options
     *
     * @var array<CustomFieldSelectOption> $options
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('options')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\CustomFieldSelectOption>')]
    public array $options;

    /**
     *
     * @var ?string $formLabel
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('form_label')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $formLabel = null;

    /**
     *
     * @var ?string $formHelpText
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('form_help_text')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $formHelpText = null;

    /**
     *
     * @var ?string $formPlaceholder
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('form_placeholder')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $formPlaceholder = null;

    /**
     * @param  array<CustomFieldSelectOption>  $options
     * @param  ?string  $formLabel
     * @param  ?string  $formHelpText
     * @param  ?string  $formPlaceholder
     * @phpstan-pure
     */
    public function __construct(array $options, ?string $formLabel = null, ?string $formHelpText = null, ?string $formPlaceholder = null)
    {
        $this->options = $options;
        $this->formLabel = $formLabel;
        $this->formHelpText = $formHelpText;
        $this->formPlaceholder = $formPlaceholder;
    }
}