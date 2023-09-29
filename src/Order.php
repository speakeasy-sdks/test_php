<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace my_workspace\Updater;

class Order 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Read a order.
     * 
     * Get the current state of a specific order.
     * 
     * @param \my_workspace\Updater\Models\Operations\ReadOrderRequest $request
     * @return \my_workspace\Updater\Models\Operations\ReadOrderResponse
     */
	public function readOrder(
        ?\my_workspace\Updater\Models\Operations\ReadOrderRequest $request,
    ): \my_workspace\Updater\Models\Operations\ReadOrderResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/order/{orderId}', \my_workspace\Updater\Models\Operations\ReadOrderRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \my_workspace\Updater\Models\Operations\ReadOrderResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->readOrder200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'my_workspace\Updater\Models\Operations\ReadOrder200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
        }

        return $response;
    }
	
    /**
     * Update an order.
     * 
     * Update the system with the current state of a specific order.
     * 
     * @param \my_workspace\Updater\Models\Operations\UpdateOrderRequestBody $request
     * @return \my_workspace\Updater\Models\Operations\UpdateOrderResponse
     */
	public function updateOrder(
        ?\my_workspace\Updater\Models\Operations\UpdateOrderRequestBody $request,
    ): \my_workspace\Updater\Models\Operations\UpdateOrderResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/order');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \my_workspace\Updater\Models\Operations\UpdateOrderResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
        }

        return $response;
    }
}