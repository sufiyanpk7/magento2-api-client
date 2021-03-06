<?php
/**
 * SalesDataShippingAssignmentInterface
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
 * SalesDataShippingAssignmentInterface Class Doc Comment
 *
 * @category    Class
 * @description Interface ShippingAssignmentInterface
 * @package     Webgriffe\MagentoApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SalesDataShippingAssignmentInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'sales-data-shipping-assignment-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipping' => '\Webgriffe\MagentoApiClient\Model\SalesDataShippingInterface',
        'items' => '\Webgriffe\MagentoApiClient\Model\SalesDataOrderItemInterface[]',
        'stockId' => 'int',
        'extensionAttributes' => '\Webgriffe\MagentoApiClient\Model\SalesDataShippingAssignmentExtensionInterface'
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
        'shipping' => 'shipping',
        'items' => 'items',
        'stockId' => 'stock_id',
        'extensionAttributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'shipping' => 'setShipping',
        'items' => 'setItems',
        'stockId' => 'setStockId',
        'extensionAttributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'shipping' => 'getShipping',
        'items' => 'getItems',
        'stockId' => 'getStockId',
        'extensionAttributes' => 'getExtensionAttributes'
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
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['stockId'] = isset($data['stockId']) ? $data['stockId'] : null;
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['shipping'] === null) {
            $invalid_properties[] = "'shipping' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalid_properties[] = "'items' can't be null";
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

        if ($this->container['shipping'] === null) {
            return false;
        }
        if ($this->container['items'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets shipping
     * @return \Webgriffe\MagentoApiClient\Model\SalesDataShippingInterface
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     * @param \Webgriffe\MagentoApiClient\Model\SalesDataShippingInterface $shipping
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets items
     * @return \Webgriffe\MagentoApiClient\Model\SalesDataOrderItemInterface[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     * @param \Webgriffe\MagentoApiClient\Model\SalesDataOrderItemInterface[] $items Order items of shipping assignment
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets stockId
     * @return int
     */
    public function getStockId()
    {
        return $this->container['stockId'];
    }

    /**
     * Sets stockId
     * @param int $stockId Stock id
     * @return $this
     */
    public function setStockId($stockId)
    {
        $this->container['stockId'] = $stockId;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \Webgriffe\MagentoApiClient\Model\SalesDataShippingAssignmentExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \Webgriffe\MagentoApiClient\Model\SalesDataShippingAssignmentExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

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


