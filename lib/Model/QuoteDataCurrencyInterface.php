<?php
/**
 * QuoteDataCurrencyInterface
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
 * QuoteDataCurrencyInterface Class Doc Comment
 *
 * @category    Class
 * @description Interface CurrencyInterface
 * @package     Webgriffe\MagentoApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QuoteDataCurrencyInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'quote-data-currency-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'globalCurrencyCode' => 'string',
        'baseCurrencyCode' => 'string',
        'storeCurrencyCode' => 'string',
        'quoteCurrencyCode' => 'string',
        'storeToBaseRate' => 'float',
        'storeToQuoteRate' => 'float',
        'baseToGlobalRate' => 'float',
        'baseToQuoteRate' => 'float',
        'extensionAttributes' => '\Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\QuoteDataCurrencyExtensionInterface'
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
        'globalCurrencyCode' => 'global_currency_code',
        'baseCurrencyCode' => 'base_currency_code',
        'storeCurrencyCode' => 'store_currency_code',
        'quoteCurrencyCode' => 'quote_currency_code',
        'storeToBaseRate' => 'store_to_base_rate',
        'storeToQuoteRate' => 'store_to_quote_rate',
        'baseToGlobalRate' => 'base_to_global_rate',
        'baseToQuoteRate' => 'base_to_quote_rate',
        'extensionAttributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'globalCurrencyCode' => 'setGlobalCurrencyCode',
        'baseCurrencyCode' => 'setBaseCurrencyCode',
        'storeCurrencyCode' => 'setStoreCurrencyCode',
        'quoteCurrencyCode' => 'setQuoteCurrencyCode',
        'storeToBaseRate' => 'setStoreToBaseRate',
        'storeToQuoteRate' => 'setStoreToQuoteRate',
        'baseToGlobalRate' => 'setBaseToGlobalRate',
        'baseToQuoteRate' => 'setBaseToQuoteRate',
        'extensionAttributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'globalCurrencyCode' => 'getGlobalCurrencyCode',
        'baseCurrencyCode' => 'getBaseCurrencyCode',
        'storeCurrencyCode' => 'getStoreCurrencyCode',
        'quoteCurrencyCode' => 'getQuoteCurrencyCode',
        'storeToBaseRate' => 'getStoreToBaseRate',
        'storeToQuoteRate' => 'getStoreToQuoteRate',
        'baseToGlobalRate' => 'getBaseToGlobalRate',
        'baseToQuoteRate' => 'getBaseToQuoteRate',
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
        $this->container['globalCurrencyCode'] = isset($data['globalCurrencyCode']) ? $data['globalCurrencyCode'] : null;
        $this->container['baseCurrencyCode'] = isset($data['baseCurrencyCode']) ? $data['baseCurrencyCode'] : null;
        $this->container['storeCurrencyCode'] = isset($data['storeCurrencyCode']) ? $data['storeCurrencyCode'] : null;
        $this->container['quoteCurrencyCode'] = isset($data['quoteCurrencyCode']) ? $data['quoteCurrencyCode'] : null;
        $this->container['storeToBaseRate'] = isset($data['storeToBaseRate']) ? $data['storeToBaseRate'] : null;
        $this->container['storeToQuoteRate'] = isset($data['storeToQuoteRate']) ? $data['storeToQuoteRate'] : null;
        $this->container['baseToGlobalRate'] = isset($data['baseToGlobalRate']) ? $data['baseToGlobalRate'] : null;
        $this->container['baseToQuoteRate'] = isset($data['baseToQuoteRate']) ? $data['baseToQuoteRate'] : null;
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
     * Gets globalCurrencyCode
     * @return string
     */
    public function getGlobalCurrencyCode()
    {
        return $this->container['globalCurrencyCode'];
    }

    /**
     * Sets globalCurrencyCode
     * @param string $globalCurrencyCode Global currency code
     * @return $this
     */
    public function setGlobalCurrencyCode($globalCurrencyCode)
    {
        $this->container['globalCurrencyCode'] = $globalCurrencyCode;

        return $this;
    }

    /**
     * Gets baseCurrencyCode
     * @return string
     */
    public function getBaseCurrencyCode()
    {
        return $this->container['baseCurrencyCode'];
    }

    /**
     * Sets baseCurrencyCode
     * @param string $baseCurrencyCode Base currency code
     * @return $this
     */
    public function setBaseCurrencyCode($baseCurrencyCode)
    {
        $this->container['baseCurrencyCode'] = $baseCurrencyCode;

        return $this;
    }

    /**
     * Gets storeCurrencyCode
     * @return string
     */
    public function getStoreCurrencyCode()
    {
        return $this->container['storeCurrencyCode'];
    }

    /**
     * Sets storeCurrencyCode
     * @param string $storeCurrencyCode Store currency code
     * @return $this
     */
    public function setStoreCurrencyCode($storeCurrencyCode)
    {
        $this->container['storeCurrencyCode'] = $storeCurrencyCode;

        return $this;
    }

    /**
     * Gets quoteCurrencyCode
     * @return string
     */
    public function getQuoteCurrencyCode()
    {
        return $this->container['quoteCurrencyCode'];
    }

    /**
     * Sets quoteCurrencyCode
     * @param string $quoteCurrencyCode Quote currency code
     * @return $this
     */
    public function setQuoteCurrencyCode($quoteCurrencyCode)
    {
        $this->container['quoteCurrencyCode'] = $quoteCurrencyCode;

        return $this;
    }

    /**
     * Gets storeToBaseRate
     * @return float
     */
    public function getStoreToBaseRate()
    {
        return $this->container['storeToBaseRate'];
    }

    /**
     * Sets storeToBaseRate
     * @param float $storeToBaseRate Store currency to base currency rate
     * @return $this
     */
    public function setStoreToBaseRate($storeToBaseRate)
    {
        $this->container['storeToBaseRate'] = $storeToBaseRate;

        return $this;
    }

    /**
     * Gets storeToQuoteRate
     * @return float
     */
    public function getStoreToQuoteRate()
    {
        return $this->container['storeToQuoteRate'];
    }

    /**
     * Sets storeToQuoteRate
     * @param float $storeToQuoteRate Store currency to quote currency rate
     * @return $this
     */
    public function setStoreToQuoteRate($storeToQuoteRate)
    {
        $this->container['storeToQuoteRate'] = $storeToQuoteRate;

        return $this;
    }

    /**
     * Gets baseToGlobalRate
     * @return float
     */
    public function getBaseToGlobalRate()
    {
        return $this->container['baseToGlobalRate'];
    }

    /**
     * Sets baseToGlobalRate
     * @param float $baseToGlobalRate Base currency to global currency rate
     * @return $this
     */
    public function setBaseToGlobalRate($baseToGlobalRate)
    {
        $this->container['baseToGlobalRate'] = $baseToGlobalRate;

        return $this;
    }

    /**
     * Gets baseToQuoteRate
     * @return float
     */
    public function getBaseToQuoteRate()
    {
        return $this->container['baseToQuoteRate'];
    }

    /**
     * Sets baseToQuoteRate
     * @param float $baseToQuoteRate Base currency to quote currency rate
     * @return $this
     */
    public function setBaseToQuoteRate($baseToQuoteRate)
    {
        $this->container['baseToQuoteRate'] = $baseToQuoteRate;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\QuoteDataCurrencyExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\QuoteDataCurrencyExtensionInterface $extensionAttributes
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


