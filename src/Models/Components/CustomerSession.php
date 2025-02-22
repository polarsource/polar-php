<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** CustomerSession - A customer session that can be used to authenticate as a customer. */
class CustomerSession
{
    /**
     * Creation timestamp of the object.
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * The ID of the object.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $token
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('token')]
    public string $token;

    /**
     *
     * @var \DateTime $expiresAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expires_at')]
    public \DateTime $expiresAt;

    /**
     *
     * @var string $customerPortalUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_portal_url')]
    public string $customerPortalUrl;

    /**
     *
     * @var string $customerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_id')]
    public string $customerId;

    /**
     * A customer in an organization.
     *
     * @var Customer $customer
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Customer')]
    public Customer $customer;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  string  $token
     * @param  \DateTime  $expiresAt
     * @param  string  $customerPortalUrl
     * @param  string  $customerId
     * @param  Customer  $customer
     * @param  ?\DateTime  $modifiedAt
     * @phpstan-pure
     */
    public function __construct(\DateTime $createdAt, string $id, string $token, \DateTime $expiresAt, string $customerPortalUrl, string $customerId, Customer $customer, ?\DateTime $modifiedAt = null)
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->token = $token;
        $this->expiresAt = $expiresAt;
        $this->customerPortalUrl = $customerPortalUrl;
        $this->customerId = $customerId;
        $this->customer = $customer;
        $this->modifiedAt = $modifiedAt;
    }
}