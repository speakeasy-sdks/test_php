<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace my_workspace\Updater\Models\Operations;

use \my_workspace\Updater\Utils\SpeakeasyMetadata;
class ReadProductRequest
{
    /**
     * ID of product to return
     * 
     * @var int $productId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=productId')]
    public int $productId;
    
	public function __construct()
	{
		$this->productId = 0;
	}
}