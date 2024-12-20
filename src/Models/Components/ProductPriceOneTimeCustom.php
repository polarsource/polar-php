<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** ProductPriceOneTimeCustom - A pay-what-you-want price for a one-time product. */
class ProductPriceOneTimeCustom
{
    /**
     * Creation timestamp of the object.
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * The ID of the price.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * Whether the price is archived and no longer available.
     *
     * @var bool $isArchived
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_archived')]
    public bool $isArchived;

    /**
     * The ID of the product owning the price.
     *
     * @var string $productId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product_id')]
    public string $productId;

    /**
     * The currency.
     *
     * @var string $priceCurrency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('price_currency')]
    public string $priceCurrency;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

    /**
     * The minimum amount the customer can pay.
     *
     * @var ?int $minimumAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('minimum_amount')]
    public ?int $minimumAmount;

    /**
     * The maximum amount the customer can pay.
     *
     * @var ?int $maximumAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('maximum_amount')]
    public ?int $maximumAmount;

    /**
     * The initial amount shown to the customer.
     *
     * @var ?int $presetAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('preset_amount')]
    public ?int $presetAmount;

    /**
     *
     * @var ProductPriceOneTimeCustomAmountType $amountType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\ProductPriceOneTimeCustomAmountType')]
    public ProductPriceOneTimeCustomAmountType $amountType;

    /**
     * The type of the price.
     *
     * @var ProductPriceOneTimeCustomType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\ProductPriceOneTimeCustomType')]
    public ProductPriceOneTimeCustomType $type;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  ProductPriceOneTimeCustomAmountType  $amountType
     * @param  bool  $isArchived
     * @param  string  $productId
     * @param  string  $priceCurrency
     * @param  ProductPriceOneTimeCustomType  $type
     * @param  ?\DateTime  $modifiedAt
     * @param  ?int  $minimumAmount
     * @param  ?int  $maximumAmount
     * @param  ?int  $presetAmount
     */
    public function __construct(\DateTime $createdAt, string $id, bool $isArchived, string $productId, string $priceCurrency, ?\DateTime $modifiedAt = null, ?int $minimumAmount = null, ?int $maximumAmount = null, ?int $presetAmount = null, ProductPriceOneTimeCustomAmountType $amountType = ProductPriceOneTimeCustomAmountType::Custom, ProductPriceOneTimeCustomType $type = ProductPriceOneTimeCustomType::OneTime)
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->isArchived = $isArchived;
        $this->productId = $productId;
        $this->priceCurrency = $priceCurrency;
        $this->modifiedAt = $modifiedAt;
        $this->minimumAmount = $minimumAmount;
        $this->maximumAmount = $maximumAmount;
        $this->presetAmount = $presetAmount;
        $this->amountType = $amountType;
        $this->type = $type;
    }
}