<?php
/**
 * ConfigurableProductDataOptionValueInterface
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
 * ConfigurableProductDataOptionValueInterface Class Doc Comment
 *
 * @category    Class
 * @description Interface OptionValueInterface
 * @package     Webgriffe\MagentoApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ConfigurableProductDataOptionValueInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'configurable-product-data-option-value-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'valueIndex' => 'int',
        'extensionAttributes' => '\Webgriffe\MagentoApiClient\Model\ConfigurableProductDataOptionValueExtensionInterface'
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
        'valueIndex' => 'value_index',
        'extensionAttributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'valueIndex' => 'setValueIndex',
        'extensionAttributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'valueIndex' => 'getValueIndex',
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
        $this->container['valueIndex'] = isset($data['valueIndex']) ? $data['valueIndex'] : null;
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

        if ($this->container['valueIndex'] === null) {
            $invalid_properties[] = "'valueIndex' can't be null";
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

        if ($this->container['valueIndex'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets valueIndex
     * @return int
     */
    public function getValueIndex()
    {
        return $this->container['valueIndex'];
    }

    /**
     * Sets valueIndex
     * @param int $valueIndex
     * @return $this
     */
    public function setValueIndex($valueIndex)
    {
        $this->container['valueIndex'] = $valueIndex;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \Webgriffe\MagentoApiClient\Model\ConfigurableProductDataOptionValueExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \Webgriffe\MagentoApiClient\Model\ConfigurableProductDataOptionValueExtensionInterface $extensionAttributes
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


