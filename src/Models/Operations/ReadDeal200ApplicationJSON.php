<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace my_workspace\Updater\Models\Operations;


/**
 * ReadDeal200ApplicationJSON - Successful operation
 * 
 * @package my_workspace\Updater\Models\Operations
 * @access public
 */
class ReadDeal200ApplicationJSON
{
	#[\JMS\Serializer\Annotation\SerializedName('deal')]
    #[\JMS\Serializer\Annotation\Type('my_workspace\Updater\Models\Shared\Deal')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\my_workspace\Updater\Models\Shared\Deal $deal = null;
    
    /**
     * Where the most current state of the object came from.
     * 
     * @var ?string $origin
     */
	#[\JMS\Serializer\Annotation\SerializedName('origin')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $origin = null;
    
	public function __construct()
	{
		$this->deal = null;
		$this->origin = null;
	}
}
