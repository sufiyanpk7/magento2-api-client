<?php
/**
 * SalesCreditmemoCommentRepositoryV1Api
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

namespace Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Api;

use \Webgriffe\MagentoApiClient\ApiClient;
use \Webgriffe\MagentoApiClient\ApiException;
use \Webgriffe\MagentoApiClient\Configuration;
use \Webgriffe\MagentoApiClient\ObjectSerializer;

/**
 * SalesCreditmemoCommentRepositoryV1Api Class Doc Comment
 *
 * @category Class
 * @package  Webgriffe\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesCreditmemoCommentRepositoryV1Api
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
     * @return SalesCreditmemoCommentRepositoryV1Api
     */
    public function setApiClient(\Webgriffe\MagentoApiClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation salesCreditmemoCommentRepositoryV1SavePost
     *
     * 
     *
     * @param string $id  (required)
     * @param \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\Body78 $body  (optional)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\SalesDataCreditmemoCommentInterface
     */
    public function salesCreditmemoCommentRepositoryV1SavePost($id, $body = null)
    {
        list($response) = $this->salesCreditmemoCommentRepositoryV1SavePostWithHttpInfo($id, $body);
        return $response;
    }

    /**
     * Operation salesCreditmemoCommentRepositoryV1SavePostWithHttpInfo
     *
     * 
     *
     * @param string $id  (required)
     * @param \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\Body78 $body  (optional)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return array of \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\SalesDataCreditmemoCommentInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesCreditmemoCommentRepositoryV1SavePostWithHttpInfo($id, $body = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling salesCreditmemoCommentRepositoryV1SavePost');
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
                '\Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\SalesDataCreditmemoCommentInterface',
                '/V1/creditmemo/{id}/comments'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\SalesDataCreditmemoCommentInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\SalesDataCreditmemoCommentInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
