<?php
/**
 * PostUniverseIdsOk
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
 * Swagger Codegen version: 2.4.2
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
 * PostUniverseIdsOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PostUniverseIdsOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'post_universe_ids_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'agents' => '\Swagger\Client\Eve\Model\PostUniverseIdsAgent[]',
        'alliances' => '\Swagger\Client\Eve\Model\PostUniverseIdsAlliance[]',
        'characters' => '\Swagger\Client\Eve\Model\PostUniverseIdsCharacter[]',
        'constellations' => '\Swagger\Client\Eve\Model\PostUniverseIdsConstellation[]',
        'corporations' => '\Swagger\Client\Eve\Model\PostUniverseIdsCorporation[]',
        'factions' => '\Swagger\Client\Eve\Model\PostUniverseIdsFaction[]',
        'inventory_types' => '\Swagger\Client\Eve\Model\PostUniverseIdsInventoryType[]',
        'regions' => '\Swagger\Client\Eve\Model\PostUniverseIdsRegion[]',
        'stations' => '\Swagger\Client\Eve\Model\PostUniverseIdsStation[]',
        'systems' => '\Swagger\Client\Eve\Model\PostUniverseIdsSystem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'agents' => null,
        'alliances' => null,
        'characters' => null,
        'constellations' => null,
        'corporations' => null,
        'factions' => null,
        'inventory_types' => null,
        'regions' => null,
        'stations' => null,
        'systems' => null
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
        'agents' => 'agents',
        'alliances' => 'alliances',
        'characters' => 'characters',
        'constellations' => 'constellations',
        'corporations' => 'corporations',
        'factions' => 'factions',
        'inventory_types' => 'inventory_types',
        'regions' => 'regions',
        'stations' => 'stations',
        'systems' => 'systems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agents' => 'setAgents',
        'alliances' => 'setAlliances',
        'characters' => 'setCharacters',
        'constellations' => 'setConstellations',
        'corporations' => 'setCorporations',
        'factions' => 'setFactions',
        'inventory_types' => 'setInventoryTypes',
        'regions' => 'setRegions',
        'stations' => 'setStations',
        'systems' => 'setSystems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agents' => 'getAgents',
        'alliances' => 'getAlliances',
        'characters' => 'getCharacters',
        'constellations' => 'getConstellations',
        'corporations' => 'getCorporations',
        'factions' => 'getFactions',
        'inventory_types' => 'getInventoryTypes',
        'regions' => 'getRegions',
        'stations' => 'getStations',
        'systems' => 'getSystems'
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
        $this->container['agents'] = isset($data['agents']) ? $data['agents'] : null;
        $this->container['alliances'] = isset($data['alliances']) ? $data['alliances'] : null;
        $this->container['characters'] = isset($data['characters']) ? $data['characters'] : null;
        $this->container['constellations'] = isset($data['constellations']) ? $data['constellations'] : null;
        $this->container['corporations'] = isset($data['corporations']) ? $data['corporations'] : null;
        $this->container['factions'] = isset($data['factions']) ? $data['factions'] : null;
        $this->container['inventory_types'] = isset($data['inventory_types']) ? $data['inventory_types'] : null;
        $this->container['regions'] = isset($data['regions']) ? $data['regions'] : null;
        $this->container['stations'] = isset($data['stations']) ? $data['stations'] : null;
        $this->container['systems'] = isset($data['systems']) ? $data['systems'] : null;
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
     * Gets agents
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsAgent[]
     */
    public function getAgents()
    {
        return $this->container['agents'];
    }

    /**
     * Sets agents
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsAgent[] $agents agents array
     *
     * @return $this
     */
    public function setAgents($agents)
    {
        $this->container['agents'] = $agents;

        return $this;
    }

    /**
     * Gets alliances
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsAlliance[]
     */
    public function getAlliances()
    {
        return $this->container['alliances'];
    }

    /**
     * Sets alliances
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsAlliance[] $alliances alliances array
     *
     * @return $this
     */
    public function setAlliances($alliances)
    {
        $this->container['alliances'] = $alliances;

        return $this;
    }

    /**
     * Gets characters
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsCharacter[]
     */
    public function getCharacters()
    {
        return $this->container['characters'];
    }

    /**
     * Sets characters
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsCharacter[] $characters characters array
     *
     * @return $this
     */
    public function setCharacters($characters)
    {
        $this->container['characters'] = $characters;

        return $this;
    }

    /**
     * Gets constellations
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsConstellation[]
     */
    public function getConstellations()
    {
        return $this->container['constellations'];
    }

    /**
     * Sets constellations
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsConstellation[] $constellations constellations array
     *
     * @return $this
     */
    public function setConstellations($constellations)
    {
        $this->container['constellations'] = $constellations;

        return $this;
    }

    /**
     * Gets corporations
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsCorporation[]
     */
    public function getCorporations()
    {
        return $this->container['corporations'];
    }

    /**
     * Sets corporations
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsCorporation[] $corporations corporations array
     *
     * @return $this
     */
    public function setCorporations($corporations)
    {
        $this->container['corporations'] = $corporations;

        return $this;
    }

    /**
     * Gets factions
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsFaction[]
     */
    public function getFactions()
    {
        return $this->container['factions'];
    }

    /**
     * Sets factions
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsFaction[] $factions factions array
     *
     * @return $this
     */
    public function setFactions($factions)
    {
        $this->container['factions'] = $factions;

        return $this;
    }

    /**
     * Gets inventory_types
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsInventoryType[]
     */
    public function getInventoryTypes()
    {
        return $this->container['inventory_types'];
    }

    /**
     * Sets inventory_types
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsInventoryType[] $inventory_types inventory_types array
     *
     * @return $this
     */
    public function setInventoryTypes($inventory_types)
    {
        $this->container['inventory_types'] = $inventory_types;

        return $this;
    }

    /**
     * Gets regions
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsRegion[]
     */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
     * Sets regions
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsRegion[] $regions regions array
     *
     * @return $this
     */
    public function setRegions($regions)
    {
        $this->container['regions'] = $regions;

        return $this;
    }

    /**
     * Gets stations
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsStation[]
     */
    public function getStations()
    {
        return $this->container['stations'];
    }

    /**
     * Sets stations
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsStation[] $stations stations array
     *
     * @return $this
     */
    public function setStations($stations)
    {
        $this->container['stations'] = $stations;

        return $this;
    }

    /**
     * Gets systems
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsSystem[]
     */
    public function getSystems()
    {
        return $this->container['systems'];
    }

    /**
     * Sets systems
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsSystem[] $systems systems array
     *
     * @return $this
     */
    public function setSystems($systems)
    {
        $this->container['systems'] = $systems;

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


