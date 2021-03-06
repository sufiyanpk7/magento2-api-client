<?php
/**
 * SalesDataInvoiceExtensionInterface
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
 * SalesDataInvoiceExtensionInterface Class Doc Comment
 *
 * @category    Class
 * @description ExtensionInterface class for @see \\Magento\\Sales\\Api\\Data\\InvoiceInterface
 * @package     Webgriffe\MagentoApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SalesDataInvoiceExtensionInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'sales-data-invoice-extension-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'baseCustomerBalanceAmount' => 'float',
        'customerBalanceAmount' => 'float',
        'baseGiftCardsAmount' => 'float',
        'giftCardsAmount' => 'float'
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
        'baseCustomerBalanceAmount' => 'base_customer_balance_amount',
        'customerBalanceAmount' => 'customer_balance_amount',
        'baseGiftCardsAmount' => 'base_gift_cards_amount',
        'giftCardsAmount' => 'gift_cards_amount'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'baseCustomerBalanceAmount' => 'setBaseCustomerBalanceAmount',
        'customerBalanceAmount' => 'setCustomerBalanceAmount',
        'baseGiftCardsAmount' => 'setBaseGiftCardsAmount',
        'giftCardsAmount' => 'setGiftCardsAmount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'baseCustomerBalanceAmount' => 'getBaseCustomerBalanceAmount',
        'customerBalanceAmount' => 'getCustomerBalanceAmount',
        'baseGiftCardsAmount' => 'getBaseGiftCardsAmount',
        'giftCardsAmount' => 'getGiftCardsAmount'
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
        $this->container['baseCustomerBalanceAmount'] = isset($data['baseCustomerBalanceAmount']) ? $data['baseCustomerBalanceAmount'] : null;
        $this->container['customerBalanceAmount'] = isset($data['customerBalanceAmount']) ? $data['customerBalanceAmount'] : null;
        $this->container['baseGiftCardsAmount'] = isset($data['baseGiftCardsAmount']) ? $data['baseGiftCardsAmount'] : null;
        $this->container['giftCardsAmount'] = isset($data['giftCardsAmount']) ? $data['giftCardsAmount'] : null;
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
     * Gets baseCustomerBalanceAmount
     * @return float
     */
    public function getBaseCustomerBalanceAmount()
    {
        return $this->container['baseCustomerBalanceAmount'];
    }

    /**
     * Sets baseCustomerBalanceAmount
     * @param float $baseCustomerBalanceAmount
     * @return $this
     */
    public function setBaseCustomerBalanceAmount($baseCustomerBalanceAmount)
    {
        $this->container['baseCustomerBalanceAmount'] = $baseCustomerBalanceAmount;

        return $this;
    }

    /**
     * Gets customerBalanceAmount
     * @return float
     */
    public function getCustomerBalanceAmount()
    {
        return $this->container['customerBalanceAmount'];
    }

    /**
     * Sets customerBalanceAmount
     * @param float $customerBalanceAmount
     * @return $this
     */
    public function setCustomerBalanceAmount($customerBalanceAmount)
    {
        $this->container['customerBalanceAmount'] = $customerBalanceAmount;

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
     * @param float $baseGiftCardsAmount
     * @return $this
     */
    public function setBaseGiftCardsAmount($baseGiftCardsAmount)
    {
        $this->container['baseGiftCardsAmount'] = $baseGiftCardsAmount;

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
     * @param float $giftCardsAmount
     * @return $this
     */
    public function setGiftCardsAmount($giftCardsAmount)
    {
        $this->container['giftCardsAmount'] = $giftCardsAmount;

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


