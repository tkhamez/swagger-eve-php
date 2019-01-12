<?php
/**
 * GetUniverseBloodlines200Ok
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client\Eve
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.8.6
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Eve\Model;

use \ArrayAccess;
use \Swagger\Client\Eve\ObjectSerializer;

/**
 * GetUniverseBloodlines200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetUniverseBloodlines200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_universe_bloodlines_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bloodline_id' => 'int',
        'charisma' => 'int',
        'corporation_id' => 'int',
        'description' => 'string',
        'intelligence' => 'int',
        'memory' => 'int',
        'name' => 'string',
        'perception' => 'int',
        'race_id' => 'int',
        'ship_type_id' => 'int',
        'willpower' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bloodline_id' => 'int32',
        'charisma' => 'int32',
        'corporation_id' => 'int32',
        'description' => null,
        'intelligence' => 'int32',
        'memory' => 'int32',
        'name' => null,
        'perception' => 'int32',
        'race_id' => 'int32',
        'ship_type_id' => 'int32',
        'willpower' => 'int32'
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
        'bloodline_id' => 'bloodline_id',
        'charisma' => 'charisma',
        'corporation_id' => 'corporation_id',
        'description' => 'description',
        'intelligence' => 'intelligence',
        'memory' => 'memory',
        'name' => 'name',
        'perception' => 'perception',
        'race_id' => 'race_id',
        'ship_type_id' => 'ship_type_id',
        'willpower' => 'willpower'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bloodline_id' => 'setBloodlineId',
        'charisma' => 'setCharisma',
        'corporation_id' => 'setCorporationId',
        'description' => 'setDescription',
        'intelligence' => 'setIntelligence',
        'memory' => 'setMemory',
        'name' => 'setName',
        'perception' => 'setPerception',
        'race_id' => 'setRaceId',
        'ship_type_id' => 'setShipTypeId',
        'willpower' => 'setWillpower'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bloodline_id' => 'getBloodlineId',
        'charisma' => 'getCharisma',
        'corporation_id' => 'getCorporationId',
        'description' => 'getDescription',
        'intelligence' => 'getIntelligence',
        'memory' => 'getMemory',
        'name' => 'getName',
        'perception' => 'getPerception',
        'race_id' => 'getRaceId',
        'ship_type_id' => 'getShipTypeId',
        'willpower' => 'getWillpower'
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
        $this->container['bloodline_id'] = isset($data['bloodline_id']) ? $data['bloodline_id'] : null;
        $this->container['charisma'] = isset($data['charisma']) ? $data['charisma'] : null;
        $this->container['corporation_id'] = isset($data['corporation_id']) ? $data['corporation_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['intelligence'] = isset($data['intelligence']) ? $data['intelligence'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['perception'] = isset($data['perception']) ? $data['perception'] : null;
        $this->container['race_id'] = isset($data['race_id']) ? $data['race_id'] : null;
        $this->container['ship_type_id'] = isset($data['ship_type_id']) ? $data['ship_type_id'] : null;
        $this->container['willpower'] = isset($data['willpower']) ? $data['willpower'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['bloodline_id'] === null) {
            $invalidProperties[] = "'bloodline_id' can't be null";
        }
        if ($this->container['charisma'] === null) {
            $invalidProperties[] = "'charisma' can't be null";
        }
        if ($this->container['corporation_id'] === null) {
            $invalidProperties[] = "'corporation_id' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['intelligence'] === null) {
            $invalidProperties[] = "'intelligence' can't be null";
        }
        if ($this->container['memory'] === null) {
            $invalidProperties[] = "'memory' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['perception'] === null) {
            $invalidProperties[] = "'perception' can't be null";
        }
        if ($this->container['race_id'] === null) {
            $invalidProperties[] = "'race_id' can't be null";
        }
        if ($this->container['ship_type_id'] === null) {
            $invalidProperties[] = "'ship_type_id' can't be null";
        }
        if ($this->container['willpower'] === null) {
            $invalidProperties[] = "'willpower' can't be null";
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
     * Gets bloodline_id
     *
     * @return int
     */
    public function getBloodlineId()
    {
        return $this->container['bloodline_id'];
    }

    /**
     * Sets bloodline_id
     *
     * @param int $bloodline_id bloodline_id integer
     *
     * @return $this
     */
    public function setBloodlineId($bloodline_id)
    {
        $this->container['bloodline_id'] = $bloodline_id;

        return $this;
    }

    /**
     * Gets charisma
     *
     * @return int
     */
    public function getCharisma()
    {
        return $this->container['charisma'];
    }

    /**
     * Sets charisma
     *
     * @param int $charisma charisma integer
     *
     * @return $this
     */
    public function setCharisma($charisma)
    {
        $this->container['charisma'] = $charisma;

        return $this;
    }

    /**
     * Gets corporation_id
     *
     * @return int
     */
    public function getCorporationId()
    {
        return $this->container['corporation_id'];
    }

    /**
     * Sets corporation_id
     *
     * @param int $corporation_id corporation_id integer
     *
     * @return $this
     */
    public function setCorporationId($corporation_id)
    {
        $this->container['corporation_id'] = $corporation_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description string
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets intelligence
     *
     * @return int
     */
    public function getIntelligence()
    {
        return $this->container['intelligence'];
    }

    /**
     * Sets intelligence
     *
     * @param int $intelligence intelligence integer
     *
     * @return $this
     */
    public function setIntelligence($intelligence)
    {
        $this->container['intelligence'] = $intelligence;

        return $this;
    }

    /**
     * Gets memory
     *
     * @return int
     */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
     * Sets memory
     *
     * @param int $memory memory integer
     *
     * @return $this
     */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;

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
     * Gets perception
     *
     * @return int
     */
    public function getPerception()
    {
        return $this->container['perception'];
    }

    /**
     * Sets perception
     *
     * @param int $perception perception integer
     *
     * @return $this
     */
    public function setPerception($perception)
    {
        $this->container['perception'] = $perception;

        return $this;
    }

    /**
     * Gets race_id
     *
     * @return int
     */
    public function getRaceId()
    {
        return $this->container['race_id'];
    }

    /**
     * Sets race_id
     *
     * @param int $race_id race_id integer
     *
     * @return $this
     */
    public function setRaceId($race_id)
    {
        $this->container['race_id'] = $race_id;

        return $this;
    }

    /**
     * Gets ship_type_id
     *
     * @return int
     */
    public function getShipTypeId()
    {
        return $this->container['ship_type_id'];
    }

    /**
     * Sets ship_type_id
     *
     * @param int $ship_type_id ship_type_id integer
     *
     * @return $this
     */
    public function setShipTypeId($ship_type_id)
    {
        $this->container['ship_type_id'] = $ship_type_id;

        return $this;
    }

    /**
     * Gets willpower
     *
     * @return int
     */
    public function getWillpower()
    {
        return $this->container['willpower'];
    }

    /**
     * Sets willpower
     *
     * @param int $willpower willpower integer
     *
     * @return $this
     */
    public function setWillpower($willpower)
    {
        $this->container['willpower'] = $willpower;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


