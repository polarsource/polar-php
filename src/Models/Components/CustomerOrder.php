<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class CustomerOrder
{
    /**
     * Creation timestamp of the object.
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var int $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    public int $amount;

    /**
     *
     * @var int $taxAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_amount')]
    public int $taxAmount;

    /**
     *
     * @var string $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    public string $currency;

    /**
     *
     * @var string $customerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_id')]
    public string $customerId;

    /**
     *
     * @var string $productId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product_id')]
    public string $productId;

    /**
     *
     * @var string $productPriceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product_price_id')]
    public string $productPriceId;

    /**
     *
     * @var string $userId
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('user_id')]
    public string $userId;

    /**
     *
     * @var CustomerOrderProduct $product
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\CustomerOrderProduct')]
    public CustomerOrderProduct $product;

    /**
     *
     * @var ProductPriceRecurringFixed|ProductPriceRecurringCustom|ProductPriceRecurringFree|ProductPriceOneTimeFixed|ProductPriceOneTimeCustom|ProductPriceOneTimeFree $productPrice
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product_price')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\ProductPriceRecurringFixed|\Polar\Models\Components\ProductPriceRecurringCustom|\Polar\Models\Components\ProductPriceRecurringFree|\Polar\Models\Components\ProductPriceOneTimeFixed|\Polar\Models\Components\ProductPriceOneTimeCustom|\Polar\Models\Components\ProductPriceOneTimeFree')]
    public ProductPriceRecurringFixed|ProductPriceRecurringCustom|ProductPriceRecurringFree|ProductPriceOneTimeFixed|ProductPriceOneTimeCustom|ProductPriceOneTimeFree $productPrice;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

    /**
     *
     * @var ?string $subscriptionId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscription_id')]
    public ?string $subscriptionId;

    /**
     *
     * @var ?CustomerOrderSubscription $subscription
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscription')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\CustomerOrderSubscription|null')]
    public ?CustomerOrderSubscription $subscription;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  int  $amount
     * @param  int  $taxAmount
     * @param  string  $currency
     * @param  string  $customerId
     * @param  string  $productId
     * @param  string  $productPriceId
     * @param  string  $userId
     * @param  CustomerOrderProduct  $product
     * @param  ProductPriceRecurringFixed|ProductPriceRecurringCustom|ProductPriceRecurringFree|ProductPriceOneTimeFixed|ProductPriceOneTimeCustom|ProductPriceOneTimeFree  $productPrice
     * @param  ?\DateTime  $modifiedAt
     * @param  ?string  $subscriptionId
     * @param  ?CustomerOrderSubscription  $subscription
     * @phpstan-pure
     */
    public function __construct(\DateTime $createdAt, string $id, int $amount, int $taxAmount, string $currency, string $customerId, string $productId, string $productPriceId, string $userId, CustomerOrderProduct $product, ProductPriceRecurringFixed|ProductPriceRecurringCustom|ProductPriceRecurringFree|ProductPriceOneTimeFixed|ProductPriceOneTimeCustom|ProductPriceOneTimeFree $productPrice, ?\DateTime $modifiedAt = null, ?string $subscriptionId = null, ?CustomerOrderSubscription $subscription = null)
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->amount = $amount;
        $this->taxAmount = $taxAmount;
        $this->currency = $currency;
        $this->customerId = $customerId;
        $this->productId = $productId;
        $this->productPriceId = $productPriceId;
        $this->userId = $userId;
        $this->product = $product;
        $this->productPrice = $productPrice;
        $this->modifiedAt = $modifiedAt;
        $this->subscriptionId = $subscriptionId;
        $this->subscription = $subscription;
    }
}