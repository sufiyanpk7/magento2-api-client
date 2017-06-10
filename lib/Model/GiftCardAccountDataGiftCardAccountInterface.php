<?php
/**
 * GiftCardAccountDataGiftCardAccountInterface
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
 * GiftCardAccountDataGiftCardAccountInterface Class Doc Comment
 *
 * @category    Class
 * @description Gift Card Account data
 * @package     Webgriffe\MagentoApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GiftCardAccountDataGiftCardAccountInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'gift-card-account-data-gift-card-account-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'giftCards' => 'string[]',
        'giftCardsAmount' => 'float',
        'baseGiftCardsAmount' => 'float',
        'giftCardsAmountUsed' => 'float',
        'baseGiftCardsAmountUsed' => 'float',
        'extensionAttributes' => '\Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\GiftCardAccountDataGiftCardAccountExtensionInterface'
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
        'giftCards' => 'gift_cards',
        'giftCardsAmount' => 'gift_cards_amount',
        'baseGiftCardsAmount' => 'base_gift_cards_amount',
        'giftCardsAmountUsed' => 'gift_cards_amount_used',
        'baseGiftCardsAmountUsed' => 'base_gift_cards_amount_used',
        'extensionAttributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'giftCards' => 'setGiftCards',
        'giftCardsAmount' => 'setGiftCardsAmount',
        'baseGiftCardsAmount' => 'setBaseGiftCardsAmount',
        'giftCardsAmountUsed' => 'setGiftCardsAmountUsed',
        'baseGiftCardsAmountUsed' => 'setBaseGiftCardsAmountUsed',
        'extensionAttributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'giftCards' => 'getGiftCards',
        'giftCardsAmount' => 'getGiftCardsAmount',
        'baseGiftCardsAmount' => 'getBaseGiftCardsAmount',
        'giftCardsAmountUsed' => 'getGiftCardsAmountUsed',
        'baseGiftCardsAmountUsed' => 'getBaseGiftCardsAmountUsed',
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
        $this->container['giftCards'] = isset($data['giftCards']) ? $data['giftCards'] : null;
        $this->container['giftCardsAmount'] = isset($data['giftCardsAmount']) ? $data['giftCardsAmount'] : null;
        $this->container['baseGiftCardsAmount'] = isset($data['baseGiftCardsAmount']) ? $data['baseGiftCardsAmount'] : null;
        $this->container['giftCardsAmountUsed'] = isset($data['giftCardsAmountUsed']) ? $data['giftCardsAmountUsed'] : null;
        $this->container['baseGiftCardsAmountUsed'] = isset($data['baseGiftCardsAmountUsed']) ? $data['baseGiftCardsAmountUsed'] : null;
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

        if ($this->container['giftCards'] === null) {
            $invalid_properties[] = "'giftCards' can't be null";
        }
        if ($this->container['giftCardsAmount'] === null) {
            $invalid_properties[] = "'giftCardsAmount' can't be null";
        }
        if ($this->container['baseGiftCardsAmount'] === null) {
            $invalid_properties[] = "'baseGiftCardsAmount' can't be null";
        }
        if ($this->container['giftCardsAmountUsed'] === null) {
            $invalid_properties[] = "'giftCardsAmountUsed' can't be null";
        }
        if ($this->container['baseGiftCardsAmountUsed'] === null) {
            $invalid_properties[] = "'baseGiftCardsAmountUsed' can't be null";
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

        if ($this->container['giftCards'] === null) {
            return false;
        }
        if ($this->container['giftCardsAmount'] === null) {
            return false;
        }
        if ($this->container['baseGiftCardsAmount'] === null) {
            return false;
        }
        if ($this->container['giftCardsAmountUsed'] === null) {
            return false;
        }
        if ($this->container['baseGiftCardsAmountUsed'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets giftCards
     * @return string[]
     */
    public function getGiftCards()
    {
        return $this->container['giftCards'];
    }

    /**
     * Sets giftCards
     * @param string[] $giftCards Cards codes
     * @return $this
     */
    public function setGiftCards($giftCards)
    {
        $this->container['giftCards'] = $giftCards;

        return $this;
    }

    /**
     * Gets giftCardsAmount
     * @return float
     */
    public function getGiftCardsAmount()
    {
        return $this->container['giftCardsAmount'];
    }

    /**
     * Sets giftCardsAmount
     * @param float $giftCardsAmount Cards amount in quote currency
     * @return $this
     */
    public function setGiftCardsAmount($giftCardsAmount)
    {
        $this->container['giftCardsAmount'] = $giftCardsAmount;

        return $this;
    }

    /**
     * Gets baseGiftCardsAmount
     * @return float
     */
    public function getBaseGiftCardsAmount()
    {
        return $this->container['baseGiftCardsAmount'];
    }

    /**
     * Sets baseGiftCardsAmount
     * @param float $baseGiftCardsAmount Cards amount in base currency
     * @return $this
     */
    public function setBaseGiftCardsAmount($baseGiftCardsAmount)
    {
        $this->container['baseGiftCardsAmount'] = $baseGiftCardsAmount;

        return $this;
    }

    /**
     * Gets giftCardsAmountUsed
     * @return float
     */
    public function getGiftCardsAmountUsed()
    {
        return $this->container['giftCardsAmountUsed'];
    }

    /**
     * Sets giftCardsAmountUsed
     * @param float $giftCardsAmountUsed Cards amount used in quote currency
     * @return $this
     */
    public function setGiftCardsAmountUsed($giftCardsAmountUsed)
    {
        $this->container['giftCardsAmountUsed'] = $giftCardsAmountUsed;

        return $this;
    }

    /**
     * Gets baseGiftCardsAmountUsed
     * @return float
     */
    public function getBaseGiftCardsAmountUsed()
    {
        return $this->container['baseGiftCardsAmountUsed'];
    }

    /**
     * Sets baseGiftCardsAmountUsed
     * @param float $baseGiftCardsAmountUsed Cards amount used in base currency
     * @return $this
     */
    public function setBaseGiftCardsAmountUsed($baseGiftCardsAmountUsed)
    {
        $this->container['baseGiftCardsAmountUsed'] = $baseGiftCardsAmountUsed;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\GiftCardAccountDataGiftCardAccountExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\GiftCardAccountDataGiftCardAccountExtensionInterface $extensionAttributes
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


