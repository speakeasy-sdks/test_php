<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace my_workspace\Updater\Models\Shared;


class Product
{
    /**
     * This field represents the price of the product given in cents (always an integer). If provided 10000, it means that the price is 100€ (if the unit used is euros).
     * 
     * @var int $amount
     */
	#[\JMS\Serializer\Annotation\SerializedName('amount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $amount;
    
	#[\JMS\Serializer\Annotation\SerializedName('moreInfo')]
    #[\JMS\Serializer\Annotation\Type('my_workspace\Updater\Models\Shared\ProductMoreInfo')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ProductMoreInfo $moreInfo = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
	#[\JMS\Serializer\Annotation\SerializedName('productId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $productId;
    
	#[\JMS\Serializer\Annotation\SerializedName('stock')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $stock;
    
	public function __construct()
	{
		$this->amount = 0;
		$this->moreInfo = null;
		$this->name = "";
		$this->productId = "";
		$this->stock = 0;
	}
}