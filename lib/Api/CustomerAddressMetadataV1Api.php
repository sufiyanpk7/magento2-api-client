<?php
/**
 * CustomerAddressMetadataV1Api
 * PHP version 5
 *
 * @category Class
 * @package  Webgriffe\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Enterprise
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Webgriffe\MagentoApiClient\Api;

use \Webgriffe\MagentoApiClient\ApiClient;
use \Webgriffe\MagentoApiClient\ApiException;
use \Webgriffe\MagentoApiClient\Configuration;
use \Webgriffe\MagentoApiClient\ObjectSerializer;

/**
 * CustomerAddressMetadataV1Api Class Doc Comment
 *
 * @category Class
 * @package  Webgriffe\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerAddressMetadataV1Api
{
    /**
     * API Client
     *
     * @var \Webgriffe\MagentoApiClient\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Webgriffe\MagentoApiClient\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Webgriffe\MagentoApiClient\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Webgriffe\MagentoApiClient\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Webgriffe\MagentoApiClient\ApiClient $apiClient set the API client
     *
     * @return CustomerAddressMetadataV1Api
     */
    public function setApiClient(\Webgriffe\MagentoApiClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation customerAddressMetadataV1GetAllAttributesMetadataGet
     *
     * 
     *
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return \Webgriffe\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface[]
     */
    public function customerAddressMetadataV1GetAllAttributesMetadataGet()
    {
        list($response) = $this->customerAddressMetadataV1GetAllAttributesMetadataGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation customerAddressMetadataV1GetAllAttributesMetadataGetWithHttpInfo
     *
     * 
     *
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return array of \Webgriffe\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface[], HTTP status code, HTTP response headers (array of strings)
     */
    public function customerAddressMetadataV1GetAllAttributesMetadataGetWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/V1/attributeMetadata/customerAddress";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Webgriffe\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface[]',
                '/V1/attributeMetadata/customerAddress'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Webgriffe\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation customerAddressMetadataV1GetAttributeMetadataGet
     *
     * 
     *
     * @param string $attributeCode  (required)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return \Webgriffe\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface
     */
    public function customerAddressMetadataV1GetAttributeMetadataGet($attributeCode)
    {
        list($response) = $this->customerAddressMetadataV1GetAttributeMetadataGetWithHttpInfo($attributeCode);
        return $response;
    }

    /**
     * Operation customerAddressMetadataV1GetAttributeMetadataGetWithHttpInfo
     *
     * 
     *
     * @param string $attributeCode  (required)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return array of \Webgriffe\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function customerAddressMetadataV1GetAttributeMetadataGetWithHttpInfo($attributeCode)
    {
        // verify the required parameter 'attributeCode' is set
        if ($attributeCode === null) {
            throw new \InvalidArgumentException('Missing the required parameter $attributeCode when calling customerAddressMetadataV1GetAttributeMetadataGet');
        }
        // parse inputs
        $resourcePath = "/V1/attributeMetadata/customerAddress/attribute/{attributeCode}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($attributeCode !== null) {
            $resourcePath = str_replace(
                "{" . "attributeCode" . "}",
                $this->apiClient->getSerializer()->toPathValue($attributeCode),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Webgriffe\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface',
                '/V1/attributeMetadata/customerAddress/attribute/{attributeCode}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Webgriffe\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation customerAddressMetadataV1GetAttributesGet
     *
     * 
     *
     * @param string $formCode  (required)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return \Webgriffe\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface[]
     */
    public function customerAddressMetadataV1GetAttributesGet($formCode)
    {
        list($response) = $this->customerAddressMetadataV1GetAttributesGetWithHttpInfo($formCode);
        return $response;
    }

    /**
     * Operation customerAddressMetadataV1GetAttributesGetWithHttpInfo
     *
     * 
     *
     * @param string $formCode  (required)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return array of \Webgriffe\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface[], HTTP status code, HTTP response headers (array of strings)
     */
    public function customerAddressMetadataV1GetAttributesGetWithHttpInfo($formCode)
    {
        // verify the required parameter 'formCode' is set
        if ($formCode === null) {
            throw new \InvalidArgumentException('Missing the required parameter $formCode when calling customerAddressMetadataV1GetAttributesGet');
        }
        // parse inputs
        $resourcePath = "/V1/attributeMetadata/customerAddress/form/{formCode}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($formCode !== null) {
            $resourcePath = str_replace(
                "{" . "formCode" . "}",
                $this->apiClient->getSerializer()->toPathValue($formCode),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Webgriffe\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface[]',
                '/V1/attributeMetadata/customerAddress/form/{formCode}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Webgriffe\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation customerAddressMetadataV1GetCustomAttributesMetadataGet
     *
     * 
     *
     * @param string $dataInterfaceName  (optional)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return \Webgriffe\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface[]
     */
    public function customerAddressMetadataV1GetCustomAttributesMetadataGet($dataInterfaceName = null)
    {
        list($response) = $this->customerAddressMetadataV1GetCustomAttributesMetadataGetWithHttpInfo($dataInterfaceName);
        return $response;
    }

    /**
     * Operation customerAddressMetadataV1GetCustomAttributesMetadataGetWithHttpInfo
     *
     * 
     *
     * @param string $dataInterfaceName  (optional)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return array of \Webgriffe\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface[], HTTP status code, HTTP response headers (array of strings)
     */
    public function customerAddressMetadataV1GetCustomAttributesMetadataGetWithHttpInfo($dataInterfaceName = null)
    {
        // parse inputs
        $resourcePath = "/V1/attributeMetadata/customerAddress/custom";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($dataInterfaceName !== null) {
            $queryParams['dataInterfaceName'] = $this->apiClient->getSerializer()->toQueryValue($dataInterfaceName);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Webgriffe\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface[]',
                '/V1/attributeMetadata/customerAddress/custom'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Webgriffe\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\CustomerDataAttributeMetadataInterface[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
