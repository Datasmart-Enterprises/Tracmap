<?php
/**
 * JobRead
 *
 * PHP version 5
 *
 * @category Class
 * @package  Tracmap
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TracMap API
 *
 * The TracMap API allows you to create and manage __Jobs__, __Products__, and __Maps__ on TracMap Online.
 *
 * OpenAPI spec version: 1.0.25
 * Contact: api@tracmap.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.42-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Tracmap\Model;

use \ArrayAccess;
use \Tracmap\ObjectSerializer;

/**
 * JobRead Class Doc Comment
 *
 * @category Class
 * @package  Tracmap
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JobRead implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Job_Read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account' => '\Tracmap\Model\AccountRead',
        'notes' => 'string',
        'workedUrl' => 'string',
        'requestedUrl' => 'string',
        'productRates' => '\Tracmap\Model\ProductRateListRead',
        'appliedProduct' => 'float',
        'areaNominal' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account' => null,
        'notes' => null,
        'workedUrl' => 'url',
        'requestedUrl' => 'url',
        'productRates' => null,
        'appliedProduct' => null,
        'areaNominal' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'account' => 'account',
        'notes' => 'notes',
        'workedUrl' => 'worked_url',
        'requestedUrl' => 'requested_url',
        'productRates' => 'product_rates',
        'appliedProduct' => 'applied_product',
        'areaNominal' => 'area_nominal'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account' => 'setAccount',
        'notes' => 'setNotes',
        'workedUrl' => 'setWorkedUrl',
        'requestedUrl' => 'setRequestedUrl',
        'productRates' => 'setProductRates',
        'appliedProduct' => 'setAppliedProduct',
        'areaNominal' => 'setAreaNominal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account' => 'getAccount',
        'notes' => 'getNotes',
        'workedUrl' => 'getWorkedUrl',
        'requestedUrl' => 'getRequestedUrl',
        'productRates' => 'getProductRates',
        'appliedProduct' => 'getAppliedProduct',
        'areaNominal' => 'getAreaNominal'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['workedUrl'] = isset($data['workedUrl']) ? $data['workedUrl'] : null;
        $this->container['requestedUrl'] = isset($data['requestedUrl']) ? $data['requestedUrl'] : null;
        $this->container['productRates'] = isset($data['productRates']) ? $data['productRates'] : null;
        $this->container['appliedProduct'] = isset($data['appliedProduct']) ? $data['appliedProduct'] : null;
        $this->container['areaNominal'] = isset($data['areaNominal']) ? $data['areaNominal'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets account
     *
     * @return \Tracmap\Model\AccountRead
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \Tracmap\Model\AccountRead $account account
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes Additional detailed information about the job
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets workedUrl
     *
     * @return string
     */
    public function getWorkedUrl()
    {
        return $this->container['workedUrl'];
    }

    /**
     * Sets workedUrl
     *
     * @param string $workedUrl URL that can be used to retrieve information about the completed job.
     *
     * @return $this
     */
    public function setWorkedUrl($workedUrl)
    {
        $this->container['workedUrl'] = $workedUrl;

        return $this;
    }

    /**
     * Gets requestedUrl
     *
     * @return string
     */
    public function getRequestedUrl()
    {
        return $this->container['requestedUrl'];
    }

    /**
     * Sets requestedUrl
     *
     * @param string $requestedUrl URL that can be used to retrieve information about the job as it was requested.
     *
     * @return $this
     */
    public function setRequestedUrl($requestedUrl)
    {
        $this->container['requestedUrl'] = $requestedUrl;

        return $this;
    }

    /**
     * Gets productRates
     *
     * @return \Tracmap\Model\ProductRateListRead
     */
    public function getProductRates()
    {
        return $this->container['productRates'];
    }

    /**
     * Sets productRates
     *
     * @param \Tracmap\Model\ProductRateListRead $productRates productRates
     *
     * @return $this
     */
    public function setProductRates($productRates)
    {
        $this->container['productRates'] = $productRates;

        return $this;
    }

    /**
     * Gets appliedProduct
     *
     * @return float
     */
    public function getAppliedProduct()
    {
        return $this->container['appliedProduct'];
    }

    /**
     * Sets appliedProduct
     *
     * @param float $appliedProduct Total *measured* amount of product, in kg or L, used in this job. This value is derived from rate measurement hardware. The applied product value may not represent the full amount of product spread in cases where the hardware is not fitted or not turned on for all or some of the job.
     *
     * @return $this
     */
    public function setAppliedProduct($appliedProduct)
    {
        $this->container['appliedProduct'] = $appliedProduct;

        return $this;
    }

    /**
     * Gets areaNominal
     *
     * @return object
     */
    public function getAreaNominal()
    {
        return $this->container['areaNominal'];
    }

    /**
     * Sets areaNominal
     *
     * @param object $areaNominal Area, in ha or ac, that was treated in this job. The value is calculated by mapping the job geometry and boom widths.
     *
     * @return $this
     */
    public function setAreaNominal($areaNominal)
    {
        $this->container['areaNominal'] = $areaNominal;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


