<?php
/**
 * GetSearchOk
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
 * The version of the OpenAPI document: 0.8.9
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
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
 * GetSearchOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetSearchOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_search_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agent' => 'int[]',
        'alliance' => 'int[]',
        'character' => 'int[]',
        'constellation' => 'int[]',
        'corporation' => 'int[]',
        'faction' => 'int[]',
        'inventory_type' => 'int[]',
        'region' => 'int[]',
        'solar_system' => 'int[]',
        'station' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'agent' => 'int32',
        'alliance' => 'int32',
        'character' => 'int32',
        'constellation' => 'int32',
        'corporation' => 'int32',
        'faction' => 'int32',
        'inventory_type' => 'int32',
        'region' => 'int32',
        'solar_system' => 'int32',
        'station' => 'int32'
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
        'agent' => 'agent',
        'alliance' => 'alliance',
        'character' => 'character',
        'constellation' => 'constellation',
        'corporation' => 'corporation',
        'faction' => 'faction',
        'inventory_type' => 'inventory_type',
        'region' => 'region',
        'solar_system' => 'solar_system',
        'station' => 'station'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agent' => 'setAgent',
        'alliance' => 'setAlliance',
        'character' => 'setCharacter',
        'constellation' => 'setConstellation',
        'corporation' => 'setCorporation',
        'faction' => 'setFaction',
        'inventory_type' => 'setInventoryType',
        'region' => 'setRegion',
        'solar_system' => 'setSolarSystem',
        'station' => 'setStation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agent' => 'getAgent',
        'alliance' => 'getAlliance',
        'character' => 'getCharacter',
        'constellation' => 'getConstellation',
        'corporation' => 'getCorporation',
        'faction' => 'getFaction',
        'inventory_type' => 'getInventoryType',
        'region' => 'getRegion',
        'solar_system' => 'getSolarSystem',
        'station' => 'getStation'
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
        $this->container['agent'] = isset($data['agent']) ? $data['agent'] : null;
        $this->container['alliance'] = isset($data['alliance']) ? $data['alliance'] : null;
        $this->container['character'] = isset($data['character']) ? $data['character'] : null;
        $this->container['constellation'] = isset($data['constellation']) ? $data['constellation'] : null;
        $this->container['corporation'] = isset($data['corporation']) ? $data['corporation'] : null;
        $this->container['faction'] = isset($data['faction']) ? $data['faction'] : null;
        $this->container['inventory_type'] = isset($data['inventory_type']) ? $data['inventory_type'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['solar_system'] = isset($data['solar_system']) ? $data['solar_system'] : null;
        $this->container['station'] = isset($data['station']) ? $data['station'] : null;
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
     * Gets agent
     *
     * @return int[]|null
     */
    public function getAgent()
    {
        return $this->container['agent'];
    }

    /**
     * Sets agent
     *
     * @param int[]|null $agent agent array
     *
     * @return $this
     */
    public function setAgent($agent)
    {
        $this->container['agent'] = $agent;

        return $this;
    }

    /**
     * Gets alliance
     *
     * @return int[]|null
     */
    public function getAlliance()
    {
        return $this->container['alliance'];
    }

    /**
     * Sets alliance
     *
     * @param int[]|null $alliance alliance array
     *
     * @return $this
     */
    public function setAlliance($alliance)
    {
        $this->container['alliance'] = $alliance;

        return $this;
    }

    /**
     * Gets character
     *
     * @return int[]|null
     */
    public function getCharacter()
    {
        return $this->container['character'];
    }

    /**
     * Sets character
     *
     * @param int[]|null $character character array
     *
     * @return $this
     */
    public function setCharacter($character)
    {
        $this->container['character'] = $character;

        return $this;
    }

    /**
     * Gets constellation
     *
     * @return int[]|null
     */
    public function getConstellation()
    {
        return $this->container['constellation'];
    }

    /**
     * Sets constellation
     *
     * @param int[]|null $constellation constellation array
     *
     * @return $this
     */
    public function setConstellation($constellation)
    {
        $this->container['constellation'] = $constellation;

        return $this;
    }

    /**
     * Gets corporation
     *
     * @return int[]|null
     */
    public function getCorporation()
    {
        return $this->container['corporation'];
    }

    /**
     * Sets corporation
     *
     * @param int[]|null $corporation corporation array
     *
     * @return $this
     */
    public function setCorporation($corporation)
    {
        $this->container['corporation'] = $corporation;

        return $this;
    }

    /**
     * Gets faction
     *
     * @return int[]|null
     */
    public function getFaction()
    {
        return $this->container['faction'];
    }

    /**
     * Sets faction
     *
     * @param int[]|null $faction faction array
     *
     * @return $this
     */
    public function setFaction($faction)
    {
        $this->container['faction'] = $faction;

        return $this;
    }

    /**
     * Gets inventory_type
     *
     * @return int[]|null
     */
    public function getInventoryType()
    {
        return $this->container['inventory_type'];
    }

    /**
     * Sets inventory_type
     *
     * @param int[]|null $inventory_type inventory_type array
     *
     * @return $this
     */
    public function setInventoryType($inventory_type)
    {
        $this->container['inventory_type'] = $inventory_type;

        return $this;
    }

    /**
     * Gets region
     *
     * @return int[]|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param int[]|null $region region array
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets solar_system
     *
     * @return int[]|null
     */
    public function getSolarSystem()
    {
        return $this->container['solar_system'];
    }

    /**
     * Sets solar_system
     *
     * @param int[]|null $solar_system solar_system array
     *
     * @return $this
     */
    public function setSolarSystem($solar_system)
    {
        $this->container['solar_system'] = $solar_system;

        return $this;
    }

    /**
     * Gets station
     *
     * @return int[]|null
     */
    public function getStation()
    {
        return $this->container['station'];
    }

    /**
     * Sets station
     *
     * @param int[]|null $station station array
     *
     * @return $this
     */
    public function setStation($station)
    {
        $this->container['station'] = $station;

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


