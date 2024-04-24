<?php
/**
 * ProductChemistry
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
 * ProductChemistry Class Doc Comment
 *
 * @category Class
 * @package  Tracmap
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductChemistry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductChemistry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'nitrogen' => 'float',
        'phosphorus' => 'float',
        'potassium' => 'float',
        'calcium' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'nitrogen' => null,
        'phosphorus' => null,
        'potassium' => null,
        'calcium' => null
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
        'nitrogen' => 'nitrogen',
        'phosphorus' => 'phosphorus',
        'potassium' => 'potassium',
        'calcium' => 'calcium'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nitrogen' => 'setNitrogen',
        'phosphorus' => 'setPhosphorus',
        'potassium' => 'setPotassium',
        'calcium' => 'setCalcium'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nitrogen' => 'getNitrogen',
        'phosphorus' => 'getPhosphorus',
        'potassium' => 'getPotassium',
        'calcium' => 'getCalcium'
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
        $this->container['nitrogen'] = isset($data['nitrogen']) ? $data['nitrogen'] : null;
        $this->container['phosphorus'] = isset($data['phosphorus']) ? $data['phosphorus'] : null;
        $this->container['potassium'] = isset($data['potassium']) ? $data['potassium'] : null;
        $this->container['calcium'] = isset($data['calcium']) ? $data['calcium'] : null;
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
     * Gets nitrogen
     *
     * @return float
     */
    public function getNitrogen()
    {
        return $this->container['nitrogen'];
    }

    /**
     * Sets nitrogen
     *
     * @param float $nitrogen nitrogen
     *
     * @return $this
     */
    public function setNitrogen($nitrogen)
    {
        $this->container['nitrogen'] = $nitrogen;

        return $this;
    }

    /**
     * Gets phosphorus
     *
     * @return float
     */
    public function getPhosphorus()
    {
        return $this->container['phosphorus'];
    }

    /**
     * Sets phosphorus
     *
     * @param float $phosphorus phosphorus
     *
     * @return $this
     */
    public function setPhosphorus($phosphorus)
    {
        $this->container['phosphorus'] = $phosphorus;

        return $this;
    }

    /**
     * Gets potassium
     *
     * @return float
     */
    public function getPotassium()
    {
        return $this->container['potassium'];
    }

    /**
     * Sets potassium
     *
     * @param float $potassium potassium
     *
     * @return $this
     */
    public function setPotassium($potassium)
    {
        $this->container['potassium'] = $potassium;

        return $this;
    }

    /**
     * Gets calcium
     *
     * @return float
     */
    public function getCalcium()
    {
        return $this->container['calcium'];
    }

    /**
     * Sets calcium
     *
     * @param float $calcium calcium
     *
     * @return $this
     */
    public function setCalcium($calcium)
    {
        $this->container['calcium'] = $calcium;

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


