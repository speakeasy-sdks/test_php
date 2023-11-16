<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace my_workspace\Updater\Models\Operations;


/**
 * ReadProductResponseBody - Successful operation
 * 
 * @package my_workspace\Updater\Models\Operations
 * @access public
 */
class ReadProductResponseBody
{
    /**
     * Where the most current state of the object came from.
     * 
     * @var ?string $origin
     */
	#[\JMS\Serializer\Annotation\SerializedName('origin')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $origin = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('product')]
    #[\JMS\Serializer\Annotation\Type('my_workspace\Updater\Models\Shared\Product')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\my_workspace\Updater\Models\Shared\Product $product = null;
    
	public function __construct()
	{
		$this->origin = null;
		$this->product = null;
	}
}
