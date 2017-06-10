<?php
/**
 * GiftMessageDataMessageExtensionInterface
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

namespace Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model;

use \ArrayAccess;

/**
 * GiftMessageDataMessageExtensionInterface Class Doc Comment
 *
 * @category    Class
 * @description ExtensionInterface class for @see \\Magento\\GiftMessage\\Api\\Data\\MessageInterface
 * @package     Webgriffe\MagentoApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GiftMessageDataMessageExtensionInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'gift-message-data-message-extension-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'entityId' => 'string',
        'entityType' => 'string',
        'wrappingId' => 'int',
        'wrappingAllowGiftReceipt' => 'bool',
        'wrappingAddPrintedCard' => 'bool'
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
        'entityId' => 'entity_id',
        'entityType' => 'entity_type',
        'wrappingId' => 'wrapping_id',
        'wrappingAllowGiftReceipt' => 'wrapping_allow_gift_receipt',
        'wrappingAddPrintedCard' => 'wrapping_add_printed_card'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'entityId' => 'setEntityId',
        'entityType' => 'setEntityType',
        'wrappingId' => 'setWrappingId',
        'wrappingAllowGiftReceipt' => 'setWrappingAllowGiftReceipt',
        'wrappingAddPrintedCard' => 'setWrappingAddPrintedCard'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'entityId' => 'getEntityId',
        'entityType' => 'getEntityType',
        'wrappingId' => 'getWrappingId',
        'wrappingAllowGiftReceipt' => 'getWrappingAllowGiftReceipt',
        'wrappingAddPrintedCard' => 'getWrappingAddPrintedCard'
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
        $this->container['entityId'] = isset($data['entityId']) ? $data['entityId'] : null;
        $this->container['entityType'] = isset($data['entityType']) ? $data['entityType'] : null;
        $this->container['wrappingId'] = isset($data['wrappingId']) ? $data['wrappingId'] : null;
        $this->container['wrappingAllowGiftReceipt'] = isset($data['wrappingAllowGiftReceipt']) ? $data['wrappingAllowGiftReceipt'] : null;
        $this->container['wrappingAddPrintedCard'] = isset($data['wrappingAddPrintedCard']) ? $data['wrappingAddPrintedCard'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets entityId
     * @return string
     */
    public function getEntityId()
    {
        return $this->container['entityId'];
    }

    /**
     * Sets entityId
     * @param string $entityId
     * @return $this
     */
    public function setEntityId($entityId)
    {
        $this->container['entityId'] = $entityId;

        return $this;
    }

    /**
     * Gets entityType
     * @return string
     */
    public function getEntityType()
    {
        return $this->container['entityType'];
    }

    /**
     * Sets entityType
     * @param string $entityType
     * @return $this
     */
    public function setEntityType($entityType)
    {
        $this->container['entityType'] = $entityType;

        return $this;
    }

    /**
     * Gets wrappingId
     * @return int
     */
    public function getWrappingId()
    {
        return $this->container['wrappingId'];
    }

    /**
     * Sets wrappingId
     * @param int $wrappingId
     * @return $this
     */
    public function setWrappingId($wrappingId)
    {
        $this->container['wrappingId'] = $wrappingId;

        return $this;
    }

    /**
     * Gets wrappingAllowGiftReceipt
     * @return bool
     */
    public function getWrappingAllowGiftReceipt()
    {
        return $this->container['wrappingAllowGiftReceipt'];
    }

    /**
     * Sets wrappingAllowGiftReceipt
     * @param bool $wrappingAllowGiftReceipt
     * @return $this
     */
    public function setWrappingAllowGiftReceipt($wrappingAllowGiftReceipt)
    {
        $this->container['wrappingAllowGiftReceipt'] = $wrappingAllowGiftReceipt;

        return $this;
    }

    /**
     * Gets wrappingAddPrintedCard
     * @return bool
     */
    public function getWrappingAddPrintedCard()
    {
        return $this->container['wrappingAddPrintedCard'];
    }

    /**
     * Sets wrappingAddPrintedCard
     * @param bool $wrappingAddPrintedCard
     * @return $this
     */
    public function setWrappingAddPrintedCard($wrappingAddPrintedCard)
    {
        $this->container['wrappingAddPrintedCard'] = $wrappingAddPrintedCard;

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


