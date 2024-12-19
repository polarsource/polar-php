<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Operations;

use Polar\Utils\SpeakeasyMetadata;
class BenefitsGrantsRequest
{
    /**
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     * Filter by granted status. If `true`, only granted benefits will be returned. If `false`, only revoked benefits will be returned. 
     *
     * @var ?bool $isGranted
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=is_granted')]
    public ?bool $isGranted = null;

    /**
     * Filter by customer.
     *
     * @var string|array<string>|null $customerId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=customer_id')]
    public string|array|null $customerId = null;

    /**
     * Page number, defaults to 1.
     *
     * @var ?int $page
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page')]
    public ?int $page = null;

    /**
     * Size of a page, defaults to 10. Maximum is 100.
     *
     * @var ?int $limit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;

    /**
     * @param  string  $id
     * @param  ?int  $page
     * @param  ?int  $limit
     * @param  ?bool  $isGranted
     * @param  string|array<string>|null  $customerId
     */
    public function __construct(string $id, ?bool $isGranted = null, string|array|null $customerId = null, ?int $page = 1, ?int $limit = 10)
    {
        $this->id = $id;
        $this->isGranted = $isGranted;
        $this->customerId = $customerId;
        $this->page = $page;
        $this->limit = $limit;
    }
}