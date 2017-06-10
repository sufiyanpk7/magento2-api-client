<?php
/**
 * CatalogDataProductExtensionInterface
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
 * CatalogDataProductExtensionInterface Class Doc Comment
 *
 * @category    Class
 * @description ExtensionInterface class for @see \\Magento\\Catalog\\Api\\Data\\ProductInterface
 * @package     Webgriffe\MagentoApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CatalogDataProductExtensionInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'catalog-data-product-extension-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'stockItem' => '\Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\CatalogInventoryDataStockItemInterface',
        'bundleProductOptions' => '\Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\BundleDataOptionInterface[]',
        'downloadableProductLinks' => '\Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\DownloadableDataLinkInterface[]',
        'downloadableProductSamples' => '\Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\DownloadableDataSampleInterface[]',
        'giftcardAmounts' => '\Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\GiftCardDataGiftcardAmountInterface[]',
        'configurableProductOptions' => '\Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\ConfigurableProductDataOptionInterface[]',
        'configurableProductLinks' => 'int[]'
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
        'stockItem' => 'stock_item',
        'bundleProductOptions' => 'bundle_product_options',
        'downloadableProductLinks' => 'downloadable_product_links',
        'downloadableProductSamples' => 'downloadable_product_samples',
        'giftcardAmounts' => 'giftcard_amounts',
        'configurableProductOptions' => 'configurable_product_options',
        'configurableProductLinks' => 'configurable_product_links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'stockItem' => 'setStockItem',
        'bundleProductOptions' => 'setBundleProductOptions',
        'downloadableProductLinks' => 'setDownloadableProductLinks',
        'downloadableProductSamples' => 'setDownloadableProductSamples',
        'giftcardAmounts' => 'setGiftcardAmounts',
        'configurableProductOptions' => 'setConfigurableProductOptions',
        'configurableProductLinks' => 'setConfigurableProductLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'stockItem' => 'getStockItem',
        'bundleProductOptions' => 'getBundleProductOptions',
        'downloadableProductLinks' => 'getDownloadableProductLinks',
        'downloadableProductSamples' => 'getDownloadableProductSamples',
        'giftcardAmounts' => 'getGiftcardAmounts',
        'configurableProductOptions' => 'getConfigurableProductOptions',
        'configurableProductLinks' => 'getConfigurableProductLinks'
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
        $this->container['stockItem'] = isset($data['stockItem']) ? $data['stockItem'] : null;
        $this->container['bundleProductOptions'] = isset($data['bundleProductOptions']) ? $data['bundleProductOptions'] : null;
        $this->container['downloadableProductLinks'] = isset($data['downloadableProductLinks']) ? $data['downloadableProductLinks'] : null;
        $this->container['downloadableProductSamples'] = isset($data['downloadableProductSamples']) ? $data['downloadableProductSamples'] : null;
        $this->container['giftcardAmounts'] = isset($data['giftcardAmounts']) ? $data['giftcardAmounts'] : null;
        $this->container['configurableProductOptions'] = isset($data['configurableProductOptions']) ? $data['configurableProductOptions'] : null;
        $this->container['configurableProductLinks'] = isset($data['configurableProductLinks']) ? $data['configurableProductLinks'] : null;
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
     * Gets stockItem
     * @return \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\CatalogInventoryDataStockItemInterface
     */
    public function getStockItem()
    {
        return $this->container['stockItem'];
    }

    /**
     * Sets stockItem
     * @param \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\CatalogInventoryDataStockItemInterface $stockItem
     * @return $this
     */
    public function setStockItem($stockItem)
    {
        $this->container['stockItem'] = $stockItem;

        return $this;
    }

    /**
     * Gets bundleProductOptions
     * @return \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\BundleDataOptionInterface[]
     */
    public function getBundleProductOptions()
    {
        return $this->container['bundleProductOptions'];
    }

    /**
     * Sets bundleProductOptions
     * @param \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\BundleDataOptionInterface[] $bundleProductOptions
     * @return $this
     */
    public function setBundleProductOptions($bundleProductOptions)
    {
        $this->container['bundleProductOptions'] = $bundleProductOptions;

        return $this;
    }

    /**
     * Gets downloadableProductLinks
     * @return \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\DownloadableDataLinkInterface[]
     */
    public function getDownloadableProductLinks()
    {
        return $this->container['downloadableProductLinks'];
    }

    /**
     * Sets downloadableProductLinks
     * @param \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\DownloadableDataLinkInterface[] $downloadableProductLinks
     * @return $this
     */
    public function setDownloadableProductLinks($downloadableProductLinks)
    {
        $this->container['downloadableProductLinks'] = $downloadableProductLinks;

        return $this;
    }

    /**
     * Gets downloadableProductSamples
     * @return \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\DownloadableDataSampleInterface[]
     */
    public function getDownloadableProductSamples()
    {
        return $this->container['downloadableProductSamples'];
    }

    /**
     * Sets downloadableProductSamples
     * @param \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\DownloadableDataSampleInterface[] $downloadableProductSamples
     * @return $this
     */
    public function setDownloadableProductSamples($downloadableProductSamples)
    {
        $this->container['downloadableProductSamples'] = $downloadableProductSamples;

        return $this;
    }

    /**
     * Gets giftcardAmounts
     * @return \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\GiftCardDataGiftcardAmountInterface[]
     */
    public function getGiftcardAmounts()
    {
        return $this->container['giftcardAmounts'];
    }

    /**
     * Sets giftcardAmounts
     * @param \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\GiftCardDataGiftcardAmountInterface[] $giftcardAmounts
     * @return $this
     */
    public function setGiftcardAmounts($giftcardAmounts)
    {
        $this->container['giftcardAmounts'] = $giftcardAmounts;

        return $this;
    }

    /**
     * Gets configurableProductOptions
     * @return \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\ConfigurableProductDataOptionInterface[]
     */
    public function getConfigurableProductOptions()
    {
        return $this->container['configurableProductOptions'];
    }

    /**
     * Sets configurableProductOptions
     * @param \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\ConfigurableProductDataOptionInterface[] $configurableProductOptions
     * @return $this
     */
    public function setConfigurableProductOptions($configurableProductOptions)
    {
        $this->container['configurableProductOptions'] = $configurableProductOptions;

        return $this;
    }

    /**
     * Gets configurableProductLinks
     * @return int[]
     */
    public function getConfigurableProductLinks()
    {
        return $this->container['configurableProductLinks'];
    }

    /**
     * Sets configurableProductLinks
     * @param int[] $configurableProductLinks
     * @return $this
     */
    public function setConfigurableProductLinks($configurableProductLinks)
    {
        $this->container['configurableProductLinks'] = $configurableProductLinks;

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


