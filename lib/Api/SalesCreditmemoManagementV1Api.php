<?php
/**
 * SalesCreditmemoManagementV1Api
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
 * SalesCreditmemoManagementV1Api Class Doc Comment
 *
 * @category Class
 * @package  Webgriffe\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesCreditmemoManagementV1Api
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
     * @return SalesCreditmemoManagementV1Api
     */
    public function setApiClient(\Webgriffe\MagentoApiClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation salesCreditmemoManagementV1CancelPut
     *
     * 
     *
     * @param int $id The credit memo ID. (required)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return bool
     */
    public function salesCreditmemoManagementV1CancelPut($id)
    {
        list($response) = $this->salesCreditmemoManagementV1CancelPutWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation salesCreditmemoManagementV1CancelPutWithHttpInfo
     *
     * 
     *
     * @param int $id The credit memo ID. (required)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesCreditmemoManagementV1CancelPutWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling salesCreditmemoManagementV1CancelPut');
        }
        // parse inputs
        $resourcePath = "/V1/creditmemo/{id}";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                'bool',
                '/V1/creditmemo/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'bool', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'bool', $e->getResponseHeaders());
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
     * Operation salesCreditmemoManagementV1GetCommentsListGet
     *
     * 
     *
     * @param int $id The credit memo ID. (required)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return \Webgriffe\MagentoApiClient\Model\SalesDataCreditmemoCommentSearchResultInterface
     */
    public function salesCreditmemoManagementV1GetCommentsListGet($id)
    {
        list($response) = $this->salesCreditmemoManagementV1GetCommentsListGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation salesCreditmemoManagementV1GetCommentsListGetWithHttpInfo
     *
     * 
     *
     * @param int $id The credit memo ID. (required)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return array of \Webgriffe\MagentoApiClient\Model\SalesDataCreditmemoCommentSearchResultInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesCreditmemoManagementV1GetCommentsListGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling salesCreditmemoManagementV1GetCommentsListGet');
        }
        // parse inputs
        $resourcePath = "/V1/creditmemo/{id}/comments";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                '\Webgriffe\MagentoApiClient\Model\SalesDataCreditmemoCommentSearchResultInterface',
                '/V1/creditmemo/{id}/comments'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Webgriffe\MagentoApiClient\Model\SalesDataCreditmemoCommentSearchResultInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\SalesDataCreditmemoCommentSearchResultInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
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
     * Operation salesCreditmemoManagementV1NotifyPost
     *
     * 
     *
     * @param int $id The credit memo ID. (required)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return bool
     */
    public function salesCreditmemoManagementV1NotifyPost($id)
    {
        list($response) = $this->salesCreditmemoManagementV1NotifyPostWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation salesCreditmemoManagementV1NotifyPostWithHttpInfo
     *
     * 
     *
     * @param int $id The credit memo ID. (required)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesCreditmemoManagementV1NotifyPostWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling salesCreditmemoManagementV1NotifyPost');
        }
        // parse inputs
        $resourcePath = "/V1/creditmemo/{id}/emails";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'bool',
                '/V1/creditmemo/{id}/emails'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'bool', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'bool', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
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
     * Operation salesCreditmemoManagementV1RefundPost
     *
     * 
     *
     * @param \Webgriffe\MagentoApiClient\Model\Body79 $body  (optional)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return \Webgriffe\MagentoApiClient\Model\SalesDataCreditmemoInterface
     */
    public function salesCreditmemoManagementV1RefundPost($body = null)
    {
        list($response) = $this->salesCreditmemoManagementV1RefundPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation salesCreditmemoManagementV1RefundPostWithHttpInfo
     *
     * 
     *
     * @param \Webgriffe\MagentoApiClient\Model\Body79 $body  (optional)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return array of \Webgriffe\MagentoApiClient\Model\SalesDataCreditmemoInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesCreditmemoManagementV1RefundPostWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/V1/creditmemo/refund";
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
                '\Webgriffe\MagentoApiClient\Model\SalesDataCreditmemoInterface',
                '/V1/creditmemo/refund'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Webgriffe\MagentoApiClient\Model\SalesDataCreditmemoInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\SalesDataCreditmemoInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
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
