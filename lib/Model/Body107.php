<?php
/**
 * Body107
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
 * Body107 Class Doc Comment
 *
 * @category    Class
 * @package     Webgriffe\MagentoApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Body107 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'body_107';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sample' => '\Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\DownloadableDataSampleInterface',
        'isGlobalScopeContent' => 'bool'
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
        'sample' => 'sample',
        'isGlobalScopeContent' => 'isGlobalScopeContent'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'sample' => 'setSample',
        'isGlobalScopeContent' => 'setIsGlobalScopeContent'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'sample' => 'getSample',
        'isGlobalScopeContent' => 'getIsGlobalScopeContent'
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
        $this->container['sample'] = isset($data['sample']) ? $data['sample'] : null;
        $this->container['isGlobalScopeContent'] = isset($data['isGlobalScopeContent']) ? $data['isGlobalScopeContent'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['sample'] === null) {
            $invalid_properties[] = "'sample' can't be null";
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

        if ($this->container['sample'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets sample
     * @return \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\DownloadableDataSampleInterface
     */
    public function getSample()
    {
        return $this->container['sample'];
    }

    /**
     * Sets sample
     * @param \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\DownloadableDataSampleInterface $sample
     * @return $this
     */
    public function setSample($sample)
    {
        $this->container['sample'] = $sample;

        return $this;
    }

    /**
     * Gets isGlobalScopeContent
     * @return bool
     */
    public function getIsGlobalScopeContent()
    {
        return $this->container['isGlobalScopeContent'];
    }

    /**
     * Sets isGlobalScopeContent
     * @param bool $isGlobalScopeContent
     * @return $this
     */
    public function setIsGlobalScopeContent($isGlobalScopeContent)
    {
        $this->container['isGlobalScopeContent'] = $isGlobalScopeContent;

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


