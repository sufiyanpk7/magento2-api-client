<?php
/**
 * CatalogDataCategoryInterface
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
 * CatalogDataCategoryInterface Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Webgriffe\MagentoApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CatalogDataCategoryInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'catalog-data-category-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'parentId' => 'int',
        'name' => 'string',
        'isActive' => 'bool',
        'position' => 'int',
        'level' => 'int',
        'children' => 'string',
        'createdAt' => 'string',
        'updatedAt' => 'string',
        'path' => 'string',
        'availableSortBy' => 'string[]',
        'includeInMenu' => 'bool',
        'extensionAttributes' => '\Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\CatalogDataCategoryExtensionInterface',
        'customAttributes' => '\Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\FrameworkAttributeInterface[]'
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
        'id' => 'id',
        'parentId' => 'parent_id',
        'name' => 'name',
        'isActive' => 'is_active',
        'position' => 'position',
        'level' => 'level',
        'children' => 'children',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'path' => 'path',
        'availableSortBy' => 'available_sort_by',
        'includeInMenu' => 'include_in_menu',
        'extensionAttributes' => 'extension_attributes',
        'customAttributes' => 'custom_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'parentId' => 'setParentId',
        'name' => 'setName',
        'isActive' => 'setIsActive',
        'position' => 'setPosition',
        'level' => 'setLevel',
        'children' => 'setChildren',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'path' => 'setPath',
        'availableSortBy' => 'setAvailableSortBy',
        'includeInMenu' => 'setIncludeInMenu',
        'extensionAttributes' => 'setExtensionAttributes',
        'customAttributes' => 'setCustomAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'parentId' => 'getParentId',
        'name' => 'getName',
        'isActive' => 'getIsActive',
        'position' => 'getPosition',
        'level' => 'getLevel',
        'children' => 'getChildren',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'path' => 'getPath',
        'availableSortBy' => 'getAvailableSortBy',
        'includeInMenu' => 'getIncludeInMenu',
        'extensionAttributes' => 'getExtensionAttributes',
        'customAttributes' => 'getCustomAttributes'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['isActive'] = isset($data['isActive']) ? $data['isActive'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['availableSortBy'] = isset($data['availableSortBy']) ? $data['availableSortBy'] : null;
        $this->container['includeInMenu'] = isset($data['includeInMenu']) ? $data['includeInMenu'] : null;
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
        $this->container['customAttributes'] = isset($data['customAttributes']) ? $data['customAttributes'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
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

        if ($this->container['name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets parentId
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
     * Sets parentId
     * @param int $parentId Parent category ID
     * @return $this
     */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;

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
     * @param string $name Category name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param bool $isActive Whether category is active
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->container['isActive'] = $isActive;

        return $this;
    }

    /**
     * Gets position
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     * @param int $position Category position
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets level
     * @return int
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     * @param int $level Category level
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets children
     * @return string
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     * @param string $children
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets createdAt
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     * @param string $updatedAt
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets path
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets availableSortBy
     * @return string[]
     */
    public function getAvailableSortBy()
    {
        return $this->container['availableSortBy'];
    }

    /**
     * Sets availableSortBy
     * @param string[] $availableSortBy
     * @return $this
     */
    public function setAvailableSortBy($availableSortBy)
    {
        $this->container['availableSortBy'] = $availableSortBy;

        return $this;
    }

    /**
     * Gets includeInMenu
     * @return bool
     */
    public function getIncludeInMenu()
    {
        return $this->container['includeInMenu'];
    }

    /**
     * Sets includeInMenu
     * @param bool $includeInMenu
     * @return $this
     */
    public function setIncludeInMenu($includeInMenu)
    {
        $this->container['includeInMenu'] = $includeInMenu;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\CatalogDataCategoryExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\CatalogDataCategoryExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

        return $this;
    }

    /**
     * Gets customAttributes
     * @return \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\FrameworkAttributeInterface[]
     */
    public function getCustomAttributes()
    {
        return $this->container['customAttributes'];
    }

    /**
     * Sets customAttributes
     * @param \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\FrameworkAttributeInterface[] $customAttributes Custom attributes values.
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->container['customAttributes'] = $customAttributes;

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


