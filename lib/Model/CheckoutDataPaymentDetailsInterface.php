<?php
/**
 * CheckoutDataPaymentDetailsInterface
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
 * CheckoutDataPaymentDetailsInterface Class Doc Comment
 *
 * @category    Class
 * @description Interface PaymentDetailsInterface
 * @package     Webgriffe\MagentoApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CheckoutDataPaymentDetailsInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'checkout-data-payment-details-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'paymentMethods' => '\Webgriffe\MagentoApiClient\Model\QuoteDataPaymentMethodInterface[]',
        'totals' => '\Webgriffe\MagentoApiClient\Model\QuoteDataTotalsInterface',
        'extensionAttributes' => '\Webgriffe\MagentoApiClient\Model\CheckoutDataPaymentDetailsExtensionInterface'
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
        'paymentMethods' => 'payment_methods',
        'totals' => 'totals',
        'extensionAttributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'paymentMethods' => 'setPaymentMethods',
        'totals' => 'setTotals',
        'extensionAttributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'paymentMethods' => 'getPaymentMethods',
        'totals' => 'getTotals',
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
        $this->container['paymentMethods'] = isset($data['paymentMethods']) ? $data['paymentMethods'] : null;
        $this->container['totals'] = isset($data['totals']) ? $data['totals'] : null;
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

        if ($this->container['paymentMethods'] === null) {
            $invalid_properties[] = "'paymentMethods' can't be null";
        }
        if ($this->container['totals'] === null) {
            $invalid_properties[] = "'totals' can't be null";
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

        if ($this->container['paymentMethods'] === null) {
            return false;
        }
        if ($this->container['totals'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets paymentMethods
     * @return \Webgriffe\MagentoApiClient\Model\QuoteDataPaymentMethodInterface[]
     */
    public function getPaymentMethods()
    {
        return $this->container['paymentMethods'];
    }

    /**
     * Sets paymentMethods
     * @param \Webgriffe\MagentoApiClient\Model\QuoteDataPaymentMethodInterface[] $paymentMethods
     * @return $this
     */
    public function setPaymentMethods($paymentMethods)
    {
        $this->container['paymentMethods'] = $paymentMethods;

        return $this;
    }

    /**
     * Gets totals
     * @return \Webgriffe\MagentoApiClient\Model\QuoteDataTotalsInterface
     */
    public function getTotals()
    {
        return $this->container['totals'];
    }

    /**
     * Sets totals
     * @param \Webgriffe\MagentoApiClient\Model\QuoteDataTotalsInterface $totals
     * @return $this
     */
    public function setTotals($totals)
    {
        $this->container['totals'] = $totals;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \Webgriffe\MagentoApiClient\Model\CheckoutDataPaymentDetailsExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \Webgriffe\MagentoApiClient\Model\CheckoutDataPaymentDetailsExtensionInterface $extensionAttributes
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


