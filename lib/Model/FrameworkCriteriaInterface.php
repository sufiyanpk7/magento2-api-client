<?php
/**
 * FrameworkCriteriaInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  Webgriffe\MagentoApiClient
 * @author   Swaagger Codegen team
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

namespace Webgriffe\MagentoApiClient\Model;

use \ArrayAccess;

/**
 * FrameworkCriteriaInterface Class Doc Comment
 *
 * @category    Class
 * @description Interface CriteriaInterface
 * @package     Webgriffe\MagentoApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FrameworkCriteriaInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'framework-criteria-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mapperInterfaceName' => 'string',
        'criteriaList' => '\Webgriffe\MagentoApiClient\Model\FrameworkCriteriaInterface[]',
        'filters' => 'string[]',
        'orders' => 'string[]',
        'limit' => 'string[]'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'mapperInterfaceName' => 'mapper_interface_name',
        'criteriaList' => 'criteria_list',
        'filters' => 'filters',
        'orders' => 'orders',
        'limit' => 'limit'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'mapperInterfaceName' => 'setMapperInterfaceName',
        'criteriaList' => 'setCriteriaList',
        'filters' => 'setFilters',
        'orders' => 'setOrders',
        'limit' => 'setLimit'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'mapperInterfaceName' => 'getMapperInterfaceName',
        'criteriaList' => 'getCriteriaList',
        'filters' => 'getFilters',
        'orders' => 'getOrders',
        'limit' => 'getLimit'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['mapperInterfaceName'] = isset($data['mapperInterfaceName']) ? $data['mapperInterfaceName'] : null;
        $this->container['criteriaList'] = isset($data['criteriaList']) ? $data['criteriaList'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
        $this->container['orders'] = isset($data['orders']) ? $data['orders'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['mapperInterfaceName'] === null) {
            $invalid_properties[] = "'mapperInterfaceName' can't be null";
        }
        if ($this->container['criteriaList'] === null) {
            $invalid_properties[] = "'criteriaList' can't be null";
        }
        if ($this->container['filters'] === null) {
            $invalid_properties[] = "'filters' can't be null";
        }
        if ($this->container['orders'] === null) {
            $invalid_properties[] = "'orders' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalid_properties[] = "'limit' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['mapperInterfaceName'] === null) {
            return false;
        }
        if ($this->container['criteriaList'] === null) {
            return false;
        }
        if ($this->container['filters'] === null) {
            return false;
        }
        if ($this->container['orders'] === null) {
            return false;
        }
        if ($this->container['limit'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets mapperInterfaceName
     * @return string
     */
    public function getMapperInterfaceName()
    {
        return $this->container['mapperInterfaceName'];
    }

    /**
     * Sets mapperInterfaceName
     * @param string $mapperInterfaceName Associated Mapper Interface name
     * @return $this
     */
    public function setMapperInterfaceName($mapperInterfaceName)
    {
        $this->container['mapperInterfaceName'] = $mapperInterfaceName;

        return $this;
    }

    /**
     * Gets criteriaList
     * @return \Webgriffe\MagentoApiClient\Model\FrameworkCriteriaInterface[]
     */
    public function getCriteriaList()
    {
        return $this->container['criteriaList'];
    }

    /**
     * Sets criteriaList
     * @param \Webgriffe\MagentoApiClient\Model\FrameworkCriteriaInterface[] $criteriaList Criteria objects added to current Composite Criteria
     * @return $this
     */
    public function setCriteriaList($criteriaList)
    {
        $this->container['criteriaList'] = $criteriaList;

        return $this;
    }

    /**
     * Gets filters
     * @return string[]
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     * @param string[] $filters List of filters
     * @return $this
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets orders
     * @return string[]
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     * @param string[] $orders Ordering criteria
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets limit
     * @return string[]
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     * @param string[] $limit Limit
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Webgriffe\MagentoApiClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Webgriffe\MagentoApiClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


