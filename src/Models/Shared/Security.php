<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace my_workspace\Updater\Models\Shared;

use \my_workspace\Updater\Utils\SpeakeasyMetadata;
class Security
{
	#[SpeakeasyMetadata('security:scheme=true,type=http,subtype=bearer,name=Authorization')]
    public string $bearerAuth;
    
	public function __construct()
	{
		$this->bearerAuth = "";
	}
}
