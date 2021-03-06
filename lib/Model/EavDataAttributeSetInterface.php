<?php
/**
 * EavDataAttributeSetInterface
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
 * EavDataAttributeSetInterface Class Doc Comment
 *
 * @category    Class
 * @description Interface AttributeSetInterface
 * @package     Webgriffe\MagentoApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EavDataAttributeSetInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'eav-data-attribute-set-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attributeSetId' => 'int',
        'attributeSetName' => 'string',
        'sortOrder' => 'int',
        'entityTypeId' => 'int',
        'extensionAttributes' => '\Webgriffe\MagentoApiClient\Model\EavDataAttributeSetExtensionInterface'
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
        'attributeSetId' => 'attribute_set_id',
        'attributeSetName' => 'attribute_set_name',
        'sortOrder' => 'sort_order',
        'entityTypeId' => 'entity_type_id',
        'extensionAttributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'attributeSetId' => 'setAttributeSetId',
        'attributeSetName' => 'setAttributeSetName',
        'sortOrder' => 'setSortOrder',
        'entityTypeId' => 'setEntityTypeId',
        'extensionAttributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'attributeSetId' => 'getAttributeSetId',
        'attributeSetName' => 'getAttributeSetName',
        'sortOrder' => 'getSortOrder',
        'entityTypeId' => 'getEntityTypeId',
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
        $this->container['attributeSetId'] = isset($data['attributeSetId']) ? $data['attributeSetId'] : null;
        $this->container['attributeSetName'] = isset($data['attributeSetName']) ? $data['attributeSetName'] : null;
        $this->container['sortOrder'] = isset($data['sortOrder']) ? $data['sortOrder'] : null;
        $this->container['entityTypeId'] = isset($data['entityTypeId']) ? $data['entityTypeId'] : null;
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

        if ($this->container['attributeSetName'] === null) {
            $invalid_properties[] = "'attributeSetName' can't be null";
        }
        if ($this->container['sortOrder'] === null) {
            $invalid_properties[] = "'sortOrder' can't be null";
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

        if ($this->container['attributeSetName'] === null) {
            return false;
        }
        if ($this->container['sortOrder'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets attributeSetId
     * @return int
     */
    public function getAttributeSetId()
    {
        return $this->container['attributeSetId'];
    }

    /**
     * Sets attributeSetId
     * @param int $attributeSetId Attribute set ID
     * @return $this
     */
    public function setAttributeSetId($attributeSetId)
    {
        $this->container['attributeSetId'] = $attributeSetId;

        return $this;
    }

    /**
     * Gets attributeSetName
     * @return string
     */
    public function getAttributeSetName()
    {
        return $this->container['attributeSetName'];
    }

    /**
     * Sets attributeSetName
     * @param string $attributeSetName Attribute set name
     * @return $this
     */
    public function setAttributeSetName($attributeSetName)
    {
        $this->container['attributeSetName'] = $attributeSetName;

        return $this;
    }

    /**
     * Gets sortOrder
     * @return int
     */
    public function getSortOrder()
    {
        return $this->container['sortOrder'];
    }

    /**
     * Sets sortOrder
     * @param int $sortOrder Attribute set sort order index
     * @return $this
     */
    public function setSortOrder($sortOrder)
    {
        $this->container['sortOrder'] = $sortOrder;

        return $this;
    }

    /**
     * Gets entityTypeId
     * @return int
     */
    public function getEntityTypeId()
    {
        return $this->container['entityTypeId'];
    }

    /**
     * Sets entityTypeId
     * @param int $entityTypeId Attribute set entity type id
     * @return $this
     */
    public function setEntityTypeId($entityTypeId)
    {
        $this->container['entityTypeId'] = $entityTypeId;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \Webgriffe\MagentoApiClient\Model\EavDataAttributeSetExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \Webgriffe\MagentoApiClient\Model\EavDataAttributeSetExtensionInterface $extensionAttributes
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


