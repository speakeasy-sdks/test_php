<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace my_workspace\Updater;

class Deal 
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
     * Read a deal.
     * 
     * Get the current state of a specific deal.
     * 
     * @param \my_workspace\Updater\Models\Operations\ReadDealRequest $request
     * @return \my_workspace\Updater\Models\Operations\ReadDealResponse
     */
	public function readDeal(
        ?\my_workspace\Updater\Models\Operations\ReadDealRequest $request,
    ): \my_workspace\Updater\Models\Operations\ReadDealResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/deal/{dealId}', \my_workspace\Updater\Models\Operations\ReadDealRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \my_workspace\Updater\Models\Operations\ReadDealResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->readDeal200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'my_workspace\Updater\Models\Operations\ReadDeal200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
        }

        return $response;
    }
	
    /**
     * Update a deal.
     * 
     * Update the system with the current state of a specific deal.
     * 
     * @param \my_workspace\Updater\Models\Operations\UpdateDealRequestBody $request
     * @return \my_workspace\Updater\Models\Operations\UpdateDealResponse
     */
	public function updateDeal(
        ?\my_workspace\Updater\Models\Operations\UpdateDealRequestBody $request,
    ): \my_workspace\Updater\Models\Operations\UpdateDealResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/deal');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \my_workspace\Updater\Models\Operations\UpdateDealResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
        }

        return $response;
    }
}