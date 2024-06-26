<?php
/**
 * JobVehicleSummaryData
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
 * JobVehicleSummaryData Class Doc Comment
 *
 * @category Class
 * @package  Tracmap
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JobVehicleSummaryData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'JobVehicleSummary_Data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'vehicle' => 'string',
        'timeTaken' => 'int',
        'timeWorking' => 'int',
        'area' => 'float',
        'distanceWorking' => 'float',
        'distanceNotWorking' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'vehicle' => null,
        'timeTaken' => null,
        'timeWorking' => null,
        'area' => 'float',
        'distanceWorking' => 'float',
        'distanceNotWorking' => 'float'
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
        'vehicle' => 'vehicle',
        'timeTaken' => 'time_taken',
        'timeWorking' => 'time_working',
        'area' => 'area',
        'distanceWorking' => 'distance_working',
        'distanceNotWorking' => 'distance_not_working'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vehicle' => 'setVehicle',
        'timeTaken' => 'setTimeTaken',
        'timeWorking' => 'setTimeWorking',
        'area' => 'setArea',
        'distanceWorking' => 'setDistanceWorking',
        'distanceNotWorking' => 'setDistanceNotWorking'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vehicle' => 'getVehicle',
        'timeTaken' => 'getTimeTaken',
        'timeWorking' => 'getTimeWorking',
        'area' => 'getArea',
        'distanceWorking' => 'getDistanceWorking',
        'distanceNotWorking' => 'getDistanceNotWorking'
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
        $this->container['vehicle'] = isset($data['vehicle']) ? $data['vehicle'] : null;
        $this->container['timeTaken'] = isset($data['timeTaken']) ? $data['timeTaken'] : null;
        $this->container['timeWorking'] = isset($data['timeWorking']) ? $data['timeWorking'] : null;
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['distanceWorking'] = isset($data['distanceWorking']) ? $data['distanceWorking'] : null;
        $this->container['distanceNotWorking'] = isset($data['distanceNotWorking']) ? $data['distanceNotWorking'] : null;
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
     * Gets vehicle
     *
     * @return string
     */
    public function getVehicle()
    {
        return $this->container['vehicle'];
    }

    /**
     * Sets vehicle
     *
     * @param string $vehicle The name of the vehicle or device label
     *
     * @return $this
     */
    public function setVehicle($vehicle)
    {
        $this->container['vehicle'] = $vehicle;

        return $this;
    }

    /**
     * Gets timeTaken
     *
     * @return int
     */
    public function getTimeTaken()
    {
        return $this->container['timeTaken'];
    }

    /**
     * Sets timeTaken
     *
     * @param int $timeTaken The time in seconds the job took to complete
     *
     * @return $this
     */
    public function setTimeTaken($timeTaken)
    {
        $this->container['timeTaken'] = $timeTaken;

        return $this;
    }

    /**
     * Gets timeWorking
     *
     * @return int
     */
    public function getTimeWorking()
    {
        return $this->container['timeWorking'];
    }

    /**
     * Sets timeWorking
     *
     * @param int $timeWorking The time in seconds the boom or working state was active
     *
     * @return $this
     */
    public function setTimeWorking($timeWorking)
    {
        $this->container['timeWorking'] = $timeWorking;

        return $this;
    }

    /**
     * Gets area
     *
     * @return float
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area
     *
     * @param float $area The area covered in square metres
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->container['area'] = $area;

        return $this;
    }

    /**
     * Gets distanceWorking
     *
     * @return float
     */
    public function getDistanceWorking()
    {
        return $this->container['distanceWorking'];
    }

    /**
     * Sets distanceWorking
     *
     * @param float $distanceWorking The distance travelled in metres while the boom or working state was active
     *
     * @return $this
     */
    public function setDistanceWorking($distanceWorking)
    {
        $this->container['distanceWorking'] = $distanceWorking;

        return $this;
    }

    /**
     * Gets distanceNotWorking
     *
     * @return float
     */
    public function getDistanceNotWorking()
    {
        return $this->container['distanceNotWorking'];
    }

    /**
     * Sets distanceNotWorking
     *
     * @param float $distanceNotWorking The distance travelled in metres while the boom or working state was inactive
     *
     * @return $this
     */
    public function setDistanceNotWorking($distanceNotWorking)
    {
        $this->container['distanceNotWorking'] = $distanceNotWorking;

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


