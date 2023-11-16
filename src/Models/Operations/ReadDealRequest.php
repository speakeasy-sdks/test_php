<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace my_workspace\Updater\Models\Operations;

use \my_workspace\Updater\Utils\SpeakeasyMetadata;
class ReadDealRequest
{
    /**
     * ID of deal to return
     * 
     * @var int $dealId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=dealId')]
    public int $dealId;
    
	public function __construct()
	{
		$this->dealId = 0;
	}
}
