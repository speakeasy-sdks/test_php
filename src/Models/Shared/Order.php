<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace my_workspace\Updater\Models\Shared;


class Order
{
    /**
     * Total amount the buyer must pay or already paid for the this order.
     * 
     * @var int $amount
     */
	#[\JMS\Serializer\Annotation\SerializedName('amount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $amount;
    
	#[\JMS\Serializer\Annotation\SerializedName('billingAddress')]
    #[\JMS\Serializer\Annotation\Type('my_workspace\Updater\Models\Shared\Address')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Address $billingAddress = null;
    
    /**
     * $cart
     * 
     * @var array<\my_workspace\Updater\Models\Shared\OrderCart> $cart
     */
	#[\JMS\Serializer\Annotation\SerializedName('cart')]
    #[\JMS\Serializer\Annotation\Type('array<my_workspace\Updater\Models\Shared\OrderCart>')]
    public array $cart;
    
	#[\JMS\Serializer\Annotation\SerializedName('moreInfo')]
    #[\JMS\Serializer\Annotation\Type('my_workspace\Updater\Models\Shared\OrderMoreInfo')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?OrderMoreInfo $moreInfo = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('orderId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $orderId;
    
    /**
     * Local state obtained from the origin.
     * 
     * @var string $originState
     */
	#[\JMS\Serializer\Annotation\SerializedName('originState')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $originState;
    
	#[\JMS\Serializer\Annotation\SerializedName('shippingAddress')]
    #[\JMS\Serializer\Annotation\Type('my_workspace\Updater\Models\Shared\Address')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Address $shippingAddress = null;
    
    /**
     * Represent the current state of the cart. Local cart states must be translated to these generic states in order to all e-commerces and management software and other kinds of software to understand the current state of the cart.
     * 
     * @var \my_workspace\Updater\Models\Shared\OrderState $state
     */
	#[\JMS\Serializer\Annotation\SerializedName('state')]
    #[\JMS\Serializer\Annotation\Type('enum<my_workspace\Updater\Models\Shared\OrderState>')]
    public OrderState $state;
    
	public function __construct()
	{
		$this->amount = 0;
		$this->billingAddress = null;
		$this->cart = [];
		$this->moreInfo = null;
		$this->orderId = "";
		$this->originState = "";
		$this->shippingAddress = null;
		$this->state = \my_workspace\Updater\Models\Shared\OrderState::PendingPayment;
	}
}