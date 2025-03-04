<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** AttachedCustomField - Schema of a custom field attached to a resource. */
class AttachedCustomField
{
    /**
     * ID of the custom field.
     *
     * @var string $customFieldId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_field_id')]
    public string $customFieldId;

    /**
     *
     * @var CustomFieldText|CustomFieldNumber|CustomFieldDate|CustomFieldCheckbox|CustomFieldSelect $customField
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_field')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\CustomFieldText|\Polar\Models\Components\CustomFieldNumber|\Polar\Models\Components\CustomFieldDate|\Polar\Models\Components\CustomFieldCheckbox|\Polar\Models\Components\CustomFieldSelect')]
    #[\Speakeasy\Serializer\Annotation\UnionDiscriminator(field: 'type', map: ['CustomFieldText' => '\Polar\Models\Components\CustomFieldText', 'CustomFieldNumber' => '\Polar\Models\Components\CustomFieldNumber', 'CustomFieldDate' => '\Polar\Models\Components\CustomFieldDate', 'CustomFieldCheckbox' => '\Polar\Models\Components\CustomFieldCheckbox', 'CustomFieldSelect' => '\Polar\Models\Components\CustomFieldSelect'])]
    public CustomFieldText|CustomFieldNumber|CustomFieldDate|CustomFieldCheckbox|CustomFieldSelect $customField;

    /**
     * Order of the custom field in the resource.
     *
     * @var int $order
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('order')]
    public int $order;

    /**
     * Whether the value is required for this custom field.
     *
     * @var bool $required
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('required')]
    public bool $required;

    /**
     * @param  string  $customFieldId
     * @param  CustomFieldText|CustomFieldNumber|CustomFieldDate|CustomFieldCheckbox|CustomFieldSelect  $customField
     * @param  int  $order
     * @param  bool  $required
     * @phpstan-pure
     */
    public function __construct(string $customFieldId, CustomFieldText|CustomFieldNumber|CustomFieldDate|CustomFieldCheckbox|CustomFieldSelect $customField, int $order, bool $required)
    {
        $this->customFieldId = $customFieldId;
        $this->customField = $customField;
        $this->order = $order;
        $this->required = $required;
    }
}