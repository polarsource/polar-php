<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Operations;

use Polar\Models\Components;
class CustomerPortalBenefitGrantsListResponse
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
     * Successful Response
     *
     * @var ?Components\ListResourceCustomerBenefitGrant $listResourceCustomerBenefitGrant
     */
    public ?Components\ListResourceCustomerBenefitGrant $listResourceCustomerBenefitGrant = null;

    /**
     * @var \Closure(string): ?CustomerPortalBenefitGrantsListResponse $next
     */
    public \Closure $next;
    /**
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  ?Components\ListResourceCustomerBenefitGrant  $listResourceCustomerBenefitGrant
     * @phpstan-pure
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, ?Components\ListResourceCustomerBenefitGrant $listResourceCustomerBenefitGrant = null)
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->listResourceCustomerBenefitGrant = $listResourceCustomerBenefitGrant;
    }
    /**
     * @param  string  $name
     * @param  array<mixed>  $args
     * @return ?CustomerPortalBenefitGrantsListResponse
     */
    public function __call($name, $args): ?CustomerPortalBenefitGrantsListResponse
    {
        if ($name === 'next') {
            return call_user_func_array($this->next, $args);
        }

        return null;
    }
}