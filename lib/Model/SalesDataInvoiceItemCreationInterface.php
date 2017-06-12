<?php
/**
 * SalesDataInvoiceItemCreationInterface
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
 * SalesDataInvoiceItemCreationInterface Class Doc Comment
 *
 * @category    Class
 * @description Input argument for invoice creation Interface InvoiceItemCreationInterface
 * @package     Webgriffe\MagentoApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SalesDataInvoiceItemCreationInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'sales-data-invoice-item-creation-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'extensionAttributes' => '\Webgriffe\MagentoApiClient\Model\SalesDataInvoiceItemCreationExtensionInterface',
        'orderItemId' => 'int',
        'qty' => 'float'
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
        'extensionAttributes' => 'extension_attributes',
        'orderItemId' => 'order_item_id',
        'qty' => 'qty'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'extensionAttributes' => 'setExtensionAttributes',
        'orderItemId' => 'setOrderItemId',
        'qty' => 'setQty'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'extensionAttributes' => 'getExtensionAttributes',
        'orderItemId' => 'getOrderItemId',
        'qty' => 'getQty'
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
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
        $this->container['orderItemId'] = isset($data['orderItemId']) ? $data['orderItemId'] : null;
        $this->container['qty'] = isset($data['qty']) ? $data['qty'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['orderItemId'] === null) {
            $invalid_properties[] = "'orderItemId' can't be null";
        }
        if ($this->container['qty'] === null) {
            $invalid_properties[] = "'qty' can't be null";
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

        if ($this->container['orderItemId'] === null) {
            return false;
        }
        if ($this->container['qty'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets extensionAttributes
     * @return \Webgriffe\MagentoApiClient\Model\SalesDataInvoiceItemCreationExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \Webgriffe\MagentoApiClient\Model\SalesDataInvoiceItemCreationExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

        return $this;
    }

    /**
     * Gets orderItemId
     * @return int
     */
    public function getOrderItemId()
    {
        return $this->container['orderItemId'];
    }

    /**
     * Sets orderItemId
     * @param int $orderItemId Order item ID.
     * @return $this
     */
    public function setOrderItemId($orderItemId)
    {
        $this->container['orderItemId'] = $orderItemId;

        return $this;
    }

    /**
     * Gets qty
     * @return float
     */
    public function getQty()
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     * @param float $qty Quantity.
     * @return $this
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

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


