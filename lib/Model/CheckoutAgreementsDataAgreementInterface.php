<?php
/**
 * CheckoutAgreementsDataAgreementInterface
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
 * CheckoutAgreementsDataAgreementInterface Class Doc Comment
 *
 * @category    Class
 * @description Interface AgreementInterface
 * @package     Webgriffe\MagentoApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CheckoutAgreementsDataAgreementInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'checkout-agreements-data-agreement-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'agreementId' => 'int',
        'name' => 'string',
        'content' => 'string',
        'contentHeight' => 'string',
        'checkboxText' => 'string',
        'isActive' => 'bool',
        'isHtml' => 'bool',
        'mode' => 'int',
        'extensionAttributes' => '\Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\CheckoutAgreementsDataAgreementExtensionInterface'
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
        'agreementId' => 'agreement_id',
        'name' => 'name',
        'content' => 'content',
        'contentHeight' => 'content_height',
        'checkboxText' => 'checkbox_text',
        'isActive' => 'is_active',
        'isHtml' => 'is_html',
        'mode' => 'mode',
        'extensionAttributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'agreementId' => 'setAgreementId',
        'name' => 'setName',
        'content' => 'setContent',
        'contentHeight' => 'setContentHeight',
        'checkboxText' => 'setCheckboxText',
        'isActive' => 'setIsActive',
        'isHtml' => 'setIsHtml',
        'mode' => 'setMode',
        'extensionAttributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'agreementId' => 'getAgreementId',
        'name' => 'getName',
        'content' => 'getContent',
        'contentHeight' => 'getContentHeight',
        'checkboxText' => 'getCheckboxText',
        'isActive' => 'getIsActive',
        'isHtml' => 'getIsHtml',
        'mode' => 'getMode',
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
        $this->container['agreementId'] = isset($data['agreementId']) ? $data['agreementId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['contentHeight'] = isset($data['contentHeight']) ? $data['contentHeight'] : null;
        $this->container['checkboxText'] = isset($data['checkboxText']) ? $data['checkboxText'] : null;
        $this->container['isActive'] = isset($data['isActive']) ? $data['isActive'] : null;
        $this->container['isHtml'] = isset($data['isHtml']) ? $data['isHtml'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
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

        if ($this->container['agreementId'] === null) {
            $invalid_properties[] = "'agreementId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['content'] === null) {
            $invalid_properties[] = "'content' can't be null";
        }
        if ($this->container['checkboxText'] === null) {
            $invalid_properties[] = "'checkboxText' can't be null";
        }
        if ($this->container['isActive'] === null) {
            $invalid_properties[] = "'isActive' can't be null";
        }
        if ($this->container['isHtml'] === null) {
            $invalid_properties[] = "'isHtml' can't be null";
        }
        if ($this->container['mode'] === null) {
            $invalid_properties[] = "'mode' can't be null";
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

        if ($this->container['agreementId'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['content'] === null) {
            return false;
        }
        if ($this->container['checkboxText'] === null) {
            return false;
        }
        if ($this->container['isActive'] === null) {
            return false;
        }
        if ($this->container['isHtml'] === null) {
            return false;
        }
        if ($this->container['mode'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets agreementId
     * @return int
     */
    public function getAgreementId()
    {
        return $this->container['agreementId'];
    }

    /**
     * Sets agreementId
     * @param int $agreementId Agreement ID.
     * @return $this
     */
    public function setAgreementId($agreementId)
    {
        $this->container['agreementId'] = $agreementId;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Agreement name.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets content
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     * @param string $content Agreement content.
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets contentHeight
     * @return string
     */
    public function getContentHeight()
    {
        return $this->container['contentHeight'];
    }

    /**
     * Sets contentHeight
     * @param string $contentHeight Agreement content height. Otherwise, null.
     * @return $this
     */
    public function setContentHeight($contentHeight)
    {
        $this->container['contentHeight'] = $contentHeight;

        return $this;
    }

    /**
     * Gets checkboxText
     * @return string
     */
    public function getCheckboxText()
    {
        return $this->container['checkboxText'];
    }

    /**
     * Sets checkboxText
     * @param string $checkboxText Agreement checkbox text.
     * @return $this
     */
    public function setCheckboxText($checkboxText)
    {
        $this->container['checkboxText'] = $checkboxText;

        return $this;
    }

    /**
     * Gets isActive
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['isActive'];
    }

    /**
     * Sets isActive
     * @param bool $isActive Agreement status.
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->container['isActive'] = $isActive;

        return $this;
    }

    /**
     * Gets isHtml
     * @return bool
     */
    public function getIsHtml()
    {
        return $this->container['isHtml'];
    }

    /**
     * Sets isHtml
     * @param bool $isHtml * true - HTML. * false - plain text.
     * @return $this
     */
    public function setIsHtml($isHtml)
    {
        $this->container['isHtml'] = $isHtml;

        return $this;
    }

    /**
     * Gets mode
     * @return int
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     * @param int $mode The agreement applied mode.
     * @return $this
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\CheckoutAgreementsDataAgreementExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\CheckoutAgreementsDataAgreementExtensionInterface $extensionAttributes
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


