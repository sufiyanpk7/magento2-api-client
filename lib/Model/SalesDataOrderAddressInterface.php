<?php
/**
 * SalesDataOrderAddressInterface
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
 * SalesDataOrderAddressInterface Class Doc Comment
 *
 * @category    Class
 * @description Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
 * @package     Webgriffe\MagentoApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SalesDataOrderAddressInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'sales-data-order-address-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'addressType' => 'string',
        'city' => 'string',
        'company' => 'string',
        'countryId' => 'string',
        'customerAddressId' => 'int',
        'customerId' => 'int',
        'email' => 'string',
        'entityId' => 'int',
        'fax' => 'string',
        'firstname' => 'string',
        'lastname' => 'string',
        'middlename' => 'string',
        'parentId' => 'int',
        'postcode' => 'string',
        'prefix' => 'string',
        'region' => 'string',
        'regionCode' => 'string',
        'regionId' => 'int',
        'street' => 'string[]',
        'suffix' => 'string',
        'telephone' => 'string',
        'vatId' => 'string',
        'vatIsValid' => 'int',
        'vatRequestDate' => 'string',
        'vatRequestId' => 'string',
        'vatRequestSuccess' => 'int',
        'extensionAttributes' => '\Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\SalesDataOrderAddressExtensionInterface'
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
        'addressType' => 'address_type',
        'city' => 'city',
        'company' => 'company',
        'countryId' => 'country_id',
        'customerAddressId' => 'customer_address_id',
        'customerId' => 'customer_id',
        'email' => 'email',
        'entityId' => 'entity_id',
        'fax' => 'fax',
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'middlename' => 'middlename',
        'parentId' => 'parent_id',
        'postcode' => 'postcode',
        'prefix' => 'prefix',
        'region' => 'region',
        'regionCode' => 'region_code',
        'regionId' => 'region_id',
        'street' => 'street',
        'suffix' => 'suffix',
        'telephone' => 'telephone',
        'vatId' => 'vat_id',
        'vatIsValid' => 'vat_is_valid',
        'vatRequestDate' => 'vat_request_date',
        'vatRequestId' => 'vat_request_id',
        'vatRequestSuccess' => 'vat_request_success',
        'extensionAttributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'addressType' => 'setAddressType',
        'city' => 'setCity',
        'company' => 'setCompany',
        'countryId' => 'setCountryId',
        'customerAddressId' => 'setCustomerAddressId',
        'customerId' => 'setCustomerId',
        'email' => 'setEmail',
        'entityId' => 'setEntityId',
        'fax' => 'setFax',
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'middlename' => 'setMiddlename',
        'parentId' => 'setParentId',
        'postcode' => 'setPostcode',
        'prefix' => 'setPrefix',
        'region' => 'setRegion',
        'regionCode' => 'setRegionCode',
        'regionId' => 'setRegionId',
        'street' => 'setStreet',
        'suffix' => 'setSuffix',
        'telephone' => 'setTelephone',
        'vatId' => 'setVatId',
        'vatIsValid' => 'setVatIsValid',
        'vatRequestDate' => 'setVatRequestDate',
        'vatRequestId' => 'setVatRequestId',
        'vatRequestSuccess' => 'setVatRequestSuccess',
        'extensionAttributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'addressType' => 'getAddressType',
        'city' => 'getCity',
        'company' => 'getCompany',
        'countryId' => 'getCountryId',
        'customerAddressId' => 'getCustomerAddressId',
        'customerId' => 'getCustomerId',
        'email' => 'getEmail',
        'entityId' => 'getEntityId',
        'fax' => 'getFax',
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'middlename' => 'getMiddlename',
        'parentId' => 'getParentId',
        'postcode' => 'getPostcode',
        'prefix' => 'getPrefix',
        'region' => 'getRegion',
        'regionCode' => 'getRegionCode',
        'regionId' => 'getRegionId',
        'street' => 'getStreet',
        'suffix' => 'getSuffix',
        'telephone' => 'getTelephone',
        'vatId' => 'getVatId',
        'vatIsValid' => 'getVatIsValid',
        'vatRequestDate' => 'getVatRequestDate',
        'vatRequestId' => 'getVatRequestId',
        'vatRequestSuccess' => 'getVatRequestSuccess',
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
        $this->container['addressType'] = isset($data['addressType']) ? $data['addressType'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['countryId'] = isset($data['countryId']) ? $data['countryId'] : null;
        $this->container['customerAddressId'] = isset($data['customerAddressId']) ? $data['customerAddressId'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['entityId'] = isset($data['entityId']) ? $data['entityId'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['middlename'] = isset($data['middlename']) ? $data['middlename'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['regionCode'] = isset($data['regionCode']) ? $data['regionCode'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['suffix'] = isset($data['suffix']) ? $data['suffix'] : null;
        $this->container['telephone'] = isset($data['telephone']) ? $data['telephone'] : null;
        $this->container['vatId'] = isset($data['vatId']) ? $data['vatId'] : null;
        $this->container['vatIsValid'] = isset($data['vatIsValid']) ? $data['vatIsValid'] : null;
        $this->container['vatRequestDate'] = isset($data['vatRequestDate']) ? $data['vatRequestDate'] : null;
        $this->container['vatRequestId'] = isset($data['vatRequestId']) ? $data['vatRequestId'] : null;
        $this->container['vatRequestSuccess'] = isset($data['vatRequestSuccess']) ? $data['vatRequestSuccess'] : null;
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

        if ($this->container['addressType'] === null) {
            $invalid_properties[] = "'addressType' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalid_properties[] = "'city' can't be null";
        }
        if ($this->container['countryId'] === null) {
            $invalid_properties[] = "'countryId' can't be null";
        }
        if ($this->container['firstname'] === null) {
            $invalid_properties[] = "'firstname' can't be null";
        }
        if ($this->container['lastname'] === null) {
            $invalid_properties[] = "'lastname' can't be null";
        }
        if ($this->container['postcode'] === null) {
            $invalid_properties[] = "'postcode' can't be null";
        }
        if ($this->container['telephone'] === null) {
            $invalid_properties[] = "'telephone' can't be null";
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

        if ($this->container['addressType'] === null) {
            return false;
        }
        if ($this->container['city'] === null) {
            return false;
        }
        if ($this->container['countryId'] === null) {
            return false;
        }
        if ($this->container['firstname'] === null) {
            return false;
        }
        if ($this->container['lastname'] === null) {
            return false;
        }
        if ($this->container['postcode'] === null) {
            return false;
        }
        if ($this->container['telephone'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets addressType
     * @return string
     */
    public function getAddressType()
    {
        return $this->container['addressType'];
    }

    /**
     * Sets addressType
     * @param string $addressType Address type.
     * @return $this
     */
    public function setAddressType($addressType)
    {
        $this->container['addressType'] = $addressType;

        return $this;
    }

    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city City.
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets company
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     * @param string $company Company.
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets countryId
     * @return string
     */
    public function getCountryId()
    {
        return $this->container['countryId'];
    }

    /**
     * Sets countryId
     * @param string $countryId Country ID.
     * @return $this
     */
    public function setCountryId($countryId)
    {
        $this->container['countryId'] = $countryId;

        return $this;
    }

    /**
     * Gets customerAddressId
     * @return int
     */
    public function getCustomerAddressId()
    {
        return $this->container['customerAddressId'];
    }

    /**
     * Sets customerAddressId
     * @param int $customerAddressId Country address ID.
     * @return $this
     */
    public function setCustomerAddressId($customerAddressId)
    {
        $this->container['customerAddressId'] = $customerAddressId;

        return $this;
    }

    /**
     * Gets customerId
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
     * Sets customerId
     * @param int $customerId Customer ID.
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email Email address.
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets entityId
     * @return int
     */
    public function getEntityId()
    {
        return $this->container['entityId'];
    }

    /**
     * Sets entityId
     * @param int $entityId Order address ID.
     * @return $this
     */
    public function setEntityId($entityId)
    {
        $this->container['entityId'] = $entityId;

        return $this;
    }

    /**
     * Gets fax
     * @return string
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     * @param string $fax Fax number.
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets firstname
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     * @param string $firstname First name.
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     * @param string $lastname Last name.
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets middlename
     * @return string
     */
    public function getMiddlename()
    {
        return $this->container['middlename'];
    }

    /**
     * Sets middlename
     * @param string $middlename Middle name.
     * @return $this
     */
    public function setMiddlename($middlename)
    {
        $this->container['middlename'] = $middlename;

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
     * @param int $parentId Parent ID.
     * @return $this
     */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;

        return $this;
    }

    /**
     * Gets postcode
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     * @param string $postcode Postal code.
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets prefix
     * @return string
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     * @param string $prefix Prefix.
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;

        return $this;
    }

    /**
     * Gets region
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     * @param string $region Region.
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets regionCode
     * @return string
     */
    public function getRegionCode()
    {
        return $this->container['regionCode'];
    }

    /**
     * Sets regionCode
     * @param string $regionCode Region code.
     * @return $this
     */
    public function setRegionCode($regionCode)
    {
        $this->container['regionCode'] = $regionCode;

        return $this;
    }

    /**
     * Gets regionId
     * @return int
     */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
     * Sets regionId
     * @param int $regionId Region ID.
     * @return $this
     */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;

        return $this;
    }

    /**
     * Gets street
     * @return string[]
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     * @param string[] $street Array of any street values. Otherwise, null.
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets suffix
     * @return string
     */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
     * Sets suffix
     * @param string $suffix Suffix.
     * @return $this
     */
    public function setSuffix($suffix)
    {
        $this->container['suffix'] = $suffix;

        return $this;
    }

    /**
     * Gets telephone
     * @return string
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     * @param string $telephone Telephone number.
     * @return $this
     */
    public function setTelephone($telephone)
    {
        $this->container['telephone'] = $telephone;

        return $this;
    }

    /**
     * Gets vatId
     * @return string
     */
    public function getVatId()
    {
        return $this->container['vatId'];
    }

    /**
     * Sets vatId
     * @param string $vatId VAT ID.
     * @return $this
     */
    public function setVatId($vatId)
    {
        $this->container['vatId'] = $vatId;

        return $this;
    }

    /**
     * Gets vatIsValid
     * @return int
     */
    public function getVatIsValid()
    {
        return $this->container['vatIsValid'];
    }

    /**
     * Sets vatIsValid
     * @param int $vatIsValid VAT-is-valid flag value.
     * @return $this
     */
    public function setVatIsValid($vatIsValid)
    {
        $this->container['vatIsValid'] = $vatIsValid;

        return $this;
    }

    /**
     * Gets vatRequestDate
     * @return string
     */
    public function getVatRequestDate()
    {
        return $this->container['vatRequestDate'];
    }

    /**
     * Sets vatRequestDate
     * @param string $vatRequestDate VAT request date.
     * @return $this
     */
    public function setVatRequestDate($vatRequestDate)
    {
        $this->container['vatRequestDate'] = $vatRequestDate;

        return $this;
    }

    /**
     * Gets vatRequestId
     * @return string
     */
    public function getVatRequestId()
    {
        return $this->container['vatRequestId'];
    }

    /**
     * Sets vatRequestId
     * @param string $vatRequestId VAT request ID.
     * @return $this
     */
    public function setVatRequestId($vatRequestId)
    {
        $this->container['vatRequestId'] = $vatRequestId;

        return $this;
    }

    /**
     * Gets vatRequestSuccess
     * @return int
     */
    public function getVatRequestSuccess()
    {
        return $this->container['vatRequestSuccess'];
    }

    /**
     * Sets vatRequestSuccess
     * @param int $vatRequestSuccess VAT-request-success flag value.
     * @return $this
     */
    public function setVatRequestSuccess($vatRequestSuccess)
    {
        $this->container['vatRequestSuccess'] = $vatRequestSuccess;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\SalesDataOrderAddressExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \Webgriffe\MagentoApiClient\Webgriffe\MagentoApiClient\Model\SalesDataOrderAddressExtensionInterface $extensionAttributes
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


