<?php
/**
 * SalesRuleCouponManagementV1Api
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
 * SalesRuleCouponManagementV1Api Class Doc Comment
 *
 * @category Class
 * @package  Webgriffe\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesRuleCouponManagementV1Api
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
     * @return SalesRuleCouponManagementV1Api
     */
    public function setApiClient(\Webgriffe\MagentoApiClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation salesRuleCouponManagementV1DeleteByCodesPost
     *
     * 
     *
     * @param \Webgriffe\MagentoApiClient\Model\Body93 $body  (optional)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return \Webgriffe\MagentoApiClient\Model\SalesRuleDataCouponMassDeleteResultInterface
     */
    public function salesRuleCouponManagementV1DeleteByCodesPost($body = null)
    {
        list($response) = $this->salesRuleCouponManagementV1DeleteByCodesPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation salesRuleCouponManagementV1DeleteByCodesPostWithHttpInfo
     *
     * 
     *
     * @param \Webgriffe\MagentoApiClient\Model\Body93 $body  (optional)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return array of \Webgriffe\MagentoApiClient\Model\SalesRuleDataCouponMassDeleteResultInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesRuleCouponManagementV1DeleteByCodesPostWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/V1/coupons/deleteByCodes";
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

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Webgriffe\MagentoApiClient\Model\SalesRuleDataCouponMassDeleteResultInterface',
                '/V1/coupons/deleteByCodes'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Webgriffe\MagentoApiClient\Model\SalesRuleDataCouponMassDeleteResultInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\SalesRuleDataCouponMassDeleteResultInterface', $e->getResponseHeaders());
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
     * Operation salesRuleCouponManagementV1DeleteByIdsPost
     *
     * 
     *
     * @param \Webgriffe\MagentoApiClient\Model\Body92 $body  (optional)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return \Webgriffe\MagentoApiClient\Model\SalesRuleDataCouponMassDeleteResultInterface
     */
    public function salesRuleCouponManagementV1DeleteByIdsPost($body = null)
    {
        list($response) = $this->salesRuleCouponManagementV1DeleteByIdsPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation salesRuleCouponManagementV1DeleteByIdsPostWithHttpInfo
     *
     * 
     *
     * @param \Webgriffe\MagentoApiClient\Model\Body92 $body  (optional)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return array of \Webgriffe\MagentoApiClient\Model\SalesRuleDataCouponMassDeleteResultInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesRuleCouponManagementV1DeleteByIdsPostWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/V1/coupons/deleteByIds";
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

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Webgriffe\MagentoApiClient\Model\SalesRuleDataCouponMassDeleteResultInterface',
                '/V1/coupons/deleteByIds'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Webgriffe\MagentoApiClient\Model\SalesRuleDataCouponMassDeleteResultInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\SalesRuleDataCouponMassDeleteResultInterface', $e->getResponseHeaders());
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
     * Operation salesRuleCouponManagementV1GeneratePost
     *
     * 
     *
     * @param \Webgriffe\MagentoApiClient\Model\Body91 $body  (optional)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return string[]
     */
    public function salesRuleCouponManagementV1GeneratePost($body = null)
    {
        list($response) = $this->salesRuleCouponManagementV1GeneratePostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation salesRuleCouponManagementV1GeneratePostWithHttpInfo
     *
     * 
     *
     * @param \Webgriffe\MagentoApiClient\Model\Body91 $body  (optional)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return array of string[], HTTP status code, HTTP response headers (array of strings)
     */
    public function salesRuleCouponManagementV1GeneratePostWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/V1/coupons/generate";
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

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'string[]',
                '/V1/coupons/generate'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'string[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string[]', $e->getResponseHeaders());
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
