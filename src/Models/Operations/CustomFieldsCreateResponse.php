<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Operations;

use Polar\Models\Components;
class CustomFieldsCreateResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * HTTP response status code for this operation
     *
     * @var int $statusCode
     */
    public int $statusCode;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var \Psr\Http\Message\ResponseInterface $rawResponse
     */
    public \Psr\Http\Message\ResponseInterface $rawResponse;

    /**
     * Custom field created.
     *
     * @var Components\CustomFieldText|Components\CustomFieldNumber|Components\CustomFieldDate|Components\CustomFieldCheckbox|Components\CustomFieldSelect|null $customField
     */
    public Components\CustomFieldText|Components\CustomFieldNumber|Components\CustomFieldDate|Components\CustomFieldCheckbox|Components\CustomFieldSelect|null $customField = null;

    /**
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  Components\CustomFieldText|Components\CustomFieldNumber|Components\CustomFieldDate|Components\CustomFieldCheckbox|Components\CustomFieldSelect|null  $customField
     * @phpstan-pure
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, Components\CustomFieldText|Components\CustomFieldNumber|Components\CustomFieldDate|Components\CustomFieldCheckbox|Components\CustomFieldSelect|null $customField = null)
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->customField = $customField;
    }
}