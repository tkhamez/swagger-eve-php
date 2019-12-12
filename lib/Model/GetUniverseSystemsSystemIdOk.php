<?php
/**
 * GetUniverseSystemsSystemIdOk
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * The version of the OpenAPI document: 1.2.9
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Swagger\Client\Eve\Model;

use \ArrayAccess;
use \Swagger\Client\Eve\ObjectSerializer;

/**
 * GetUniverseSystemsSystemIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetUniverseSystemsSystemIdOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_universe_systems_system_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'constellation_id' => 'int',
        'name' => 'string',
        'planets' => '\Swagger\Client\Eve\Model\GetUniverseSystemsSystemIdPlanet[]',
        'position' => '\Swagger\Client\Eve\Model\GetUniverseSystemsSystemIdPosition',
        'security_class' => 'string',
        'security_status' => 'float',
        'star_id' => 'int',
        'stargates' => 'int[]',
        'stations' => 'int[]',
        'system_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'constellation_id' => 'int32',
        'name' => null,
        'planets' => null,
        'position' => null,
        'security_class' => null,
        'security_status' => 'float',
        'star_id' => 'int32',
        'stargates' => 'int32',
        'stations' => 'int32',
        'system_id' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'constellation_id' => 'constellation_id',
        'name' => 'name',
        'planets' => 'planets',
        'position' => 'position',
        'security_class' => 'security_class',
        'security_status' => 'security_status',
        'star_id' => 'star_id',
        'stargates' => 'stargates',
        'stations' => 'stations',
        'system_id' => 'system_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'constellation_id' => 'setConstellationId',
        'name' => 'setName',
        'planets' => 'setPlanets',
        'position' => 'setPosition',
        'security_class' => 'setSecurityClass',
        'security_status' => 'setSecurityStatus',
        'star_id' => 'setStarId',
        'stargates' => 'setStargates',
        'stations' => 'setStations',
        'system_id' => 'setSystemId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'constellation_id' => 'getConstellationId',
        'name' => 'getName',
        'planets' => 'getPlanets',
        'position' => 'getPosition',
        'security_class' => 'getSecurityClass',
        'security_status' => 'getSecurityStatus',
        'star_id' => 'getStarId',
        'stargates' => 'getStargates',
        'stations' => 'getStations',
        'system_id' => 'getSystemId'
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
        return self::$openAPIModelName;
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
        $this->container['constellation_id'] = isset($data['constellation_id']) ? $data['constellation_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['planets'] = isset($data['planets']) ? $data['planets'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['security_class'] = isset($data['security_class']) ? $data['security_class'] : null;
        $this->container['security_status'] = isset($data['security_status']) ? $data['security_status'] : null;
        $this->container['star_id'] = isset($data['star_id']) ? $data['star_id'] : null;
        $this->container['stargates'] = isset($data['stargates']) ? $data['stargates'] : null;
        $this->container['stations'] = isset($data['stations']) ? $data['stations'] : null;
        $this->container['system_id'] = isset($data['system_id']) ? $data['system_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['constellation_id'] === null) {
            $invalidProperties[] = "'constellation_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
        if ($this->container['security_status'] === null) {
            $invalidProperties[] = "'security_status' can't be null";
        }
        if ($this->container['system_id'] === null) {
            $invalidProperties[] = "'system_id' can't be null";
        }
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
     * Gets constellation_id
     *
     * @return int
     */
    public function getConstellationId()
    {
        return $this->container['constellation_id'];
    }

    /**
     * Sets constellation_id
     *
     * @param int $constellation_id The constellation this solar system is in
     *
     * @return $this
     */
    public function setConstellationId($constellation_id)
    {
        $this->container['constellation_id'] = $constellation_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name string
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets planets
     *
     * @return \Swagger\Client\Eve\Model\GetUniverseSystemsSystemIdPlanet[]|null
     */
    public function getPlanets()
    {
        return $this->container['planets'];
    }

    /**
     * Sets planets
     *
     * @param \Swagger\Client\Eve\Model\GetUniverseSystemsSystemIdPlanet[]|null $planets planets array
     *
     * @return $this
     */
    public function setPlanets($planets)
    {
        $this->container['planets'] = $planets;

        return $this;
    }

    /**
     * Gets position
     *
     * @return \Swagger\Client\Eve\Model\GetUniverseSystemsSystemIdPosition
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param \Swagger\Client\Eve\Model\GetUniverseSystemsSystemIdPosition $position position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets security_class
     *
     * @return string|null
     */
    public function getSecurityClass()
    {
        return $this->container['security_class'];
    }

    /**
     * Sets security_class
     *
     * @param string|null $security_class security_class string
     *
     * @return $this
     */
    public function setSecurityClass($security_class)
    {
        $this->container['security_class'] = $security_class;

        return $this;
    }

    /**
     * Gets security_status
     *
     * @return float
     */
    public function getSecurityStatus()
    {
        return $this->container['security_status'];
    }

    /**
     * Sets security_status
     *
     * @param float $security_status security_status number
     *
     * @return $this
     */
    public function setSecurityStatus($security_status)
    {
        $this->container['security_status'] = $security_status;

        return $this;
    }

    /**
     * Gets star_id
     *
     * @return int|null
     */
    public function getStarId()
    {
        return $this->container['star_id'];
    }

    /**
     * Sets star_id
     *
     * @param int|null $star_id star_id integer
     *
     * @return $this
     */
    public function setStarId($star_id)
    {
        $this->container['star_id'] = $star_id;

        return $this;
    }

    /**
     * Gets stargates
     *
     * @return int[]|null
     */
    public function getStargates()
    {
        return $this->container['stargates'];
    }

    /**
     * Sets stargates
     *
     * @param int[]|null $stargates stargates array
     *
     * @return $this
     */
    public function setStargates($stargates)
    {
        $this->container['stargates'] = $stargates;

        return $this;
    }

    /**
     * Gets stations
     *
     * @return int[]|null
     */
    public function getStations()
    {
        return $this->container['stations'];
    }

    /**
     * Sets stations
     *
     * @param int[]|null $stations stations array
     *
     * @return $this
     */
    public function setStations($stations)
    {
        $this->container['stations'] = $stations;

        return $this;
    }

    /**
     * Gets system_id
     *
     * @return int
     */
    public function getSystemId()
    {
        return $this->container['system_id'];
    }

    /**
     * Sets system_id
     *
     * @param int $system_id system_id integer
     *
     * @return $this
     */
    public function setSystemId($system_id)
    {
        $this->container['system_id'] = $system_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


