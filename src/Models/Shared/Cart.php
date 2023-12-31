<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace my_workspace\Updater\Models\Shared;


class Cart
{
	#[\JMS\Serializer\Annotation\SerializedName('amount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $amount = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('amountPerUnit')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $amountPerUnit = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('productId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $productId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('units')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $units = null;
    
	public function __construct()
	{
		$this->amount = null;
		$this->amountPerUnit = null;
		$this->productId = null;
		$this->units = null;
	}
}
