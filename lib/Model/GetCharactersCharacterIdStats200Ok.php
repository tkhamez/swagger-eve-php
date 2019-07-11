<?php
/**
 * GetCharactersCharacterIdStats200Ok
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
 * The version of the OpenAPI document: 0.8.6
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
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
 * GetCharactersCharacterIdStats200Ok Class Doc Comment
 *
 * @category Class
 * @description Aggregate stats for a year
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetCharactersCharacterIdStats200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_stats_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'character' => '\Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsCharacter',
        'combat' => '\Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsCombat',
        'industry' => '\Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsIndustry',
        'inventory' => '\Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsInventory',
        'isk' => '\Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsIsk',
        'market' => '\Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsMarket',
        'mining' => '\Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsMining',
        'module' => '\Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsModule',
        'orbital' => '\Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsOrbital',
        'pve' => '\Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsPve',
        'social' => '\Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsSocial',
        'travel' => '\Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsTravel',
        'year' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'character' => null,
        'combat' => null,
        'industry' => null,
        'inventory' => null,
        'isk' => null,
        'market' => null,
        'mining' => null,
        'module' => null,
        'orbital' => null,
        'pve' => null,
        'social' => null,
        'travel' => null,
        'year' => 'int32'
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
        'character' => 'character',
        'combat' => 'combat',
        'industry' => 'industry',
        'inventory' => 'inventory',
        'isk' => 'isk',
        'market' => 'market',
        'mining' => 'mining',
        'module' => 'module',
        'orbital' => 'orbital',
        'pve' => 'pve',
        'social' => 'social',
        'travel' => 'travel',
        'year' => 'year'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'character' => 'setCharacter',
        'combat' => 'setCombat',
        'industry' => 'setIndustry',
        'inventory' => 'setInventory',
        'isk' => 'setIsk',
        'market' => 'setMarket',
        'mining' => 'setMining',
        'module' => 'setModule',
        'orbital' => 'setOrbital',
        'pve' => 'setPve',
        'social' => 'setSocial',
        'travel' => 'setTravel',
        'year' => 'setYear'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'character' => 'getCharacter',
        'combat' => 'getCombat',
        'industry' => 'getIndustry',
        'inventory' => 'getInventory',
        'isk' => 'getIsk',
        'market' => 'getMarket',
        'mining' => 'getMining',
        'module' => 'getModule',
        'orbital' => 'getOrbital',
        'pve' => 'getPve',
        'social' => 'getSocial',
        'travel' => 'getTravel',
        'year' => 'getYear'
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
        $this->container['character'] = isset($data['character']) ? $data['character'] : null;
        $this->container['combat'] = isset($data['combat']) ? $data['combat'] : null;
        $this->container['industry'] = isset($data['industry']) ? $data['industry'] : null;
        $this->container['inventory'] = isset($data['inventory']) ? $data['inventory'] : null;
        $this->container['isk'] = isset($data['isk']) ? $data['isk'] : null;
        $this->container['market'] = isset($data['market']) ? $data['market'] : null;
        $this->container['mining'] = isset($data['mining']) ? $data['mining'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['orbital'] = isset($data['orbital']) ? $data['orbital'] : null;
        $this->container['pve'] = isset($data['pve']) ? $data['pve'] : null;
        $this->container['social'] = isset($data['social']) ? $data['social'] : null;
        $this->container['travel'] = isset($data['travel']) ? $data['travel'] : null;
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['year'] === null) {
            $invalidProperties[] = "'year' can't be null";
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
     * Gets character
     *
     * @return \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsCharacter|null
     */
    public function getCharacter()
    {
        return $this->container['character'];
    }

    /**
     * Sets character
     *
     * @param \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsCharacter|null $character character
     *
     * @return $this
     */
    public function setCharacter($character)
    {
        $this->container['character'] = $character;

        return $this;
    }

    /**
     * Gets combat
     *
     * @return \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsCombat|null
     */
    public function getCombat()
    {
        return $this->container['combat'];
    }

    /**
     * Sets combat
     *
     * @param \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsCombat|null $combat combat
     *
     * @return $this
     */
    public function setCombat($combat)
    {
        $this->container['combat'] = $combat;

        return $this;
    }

    /**
     * Gets industry
     *
     * @return \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsIndustry|null
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     *
     * @param \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsIndustry|null $industry industry
     *
     * @return $this
     */
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets inventory
     *
     * @return \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsInventory|null
     */
    public function getInventory()
    {
        return $this->container['inventory'];
    }

    /**
     * Sets inventory
     *
     * @param \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsInventory|null $inventory inventory
     *
     * @return $this
     */
    public function setInventory($inventory)
    {
        $this->container['inventory'] = $inventory;

        return $this;
    }

    /**
     * Gets isk
     *
     * @return \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsIsk|null
     */
    public function getIsk()
    {
        return $this->container['isk'];
    }

    /**
     * Sets isk
     *
     * @param \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsIsk|null $isk isk
     *
     * @return $this
     */
    public function setIsk($isk)
    {
        $this->container['isk'] = $isk;

        return $this;
    }

    /**
     * Gets market
     *
     * @return \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsMarket|null
     */
    public function getMarket()
    {
        return $this->container['market'];
    }

    /**
     * Sets market
     *
     * @param \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsMarket|null $market market
     *
     * @return $this
     */
    public function setMarket($market)
    {
        $this->container['market'] = $market;

        return $this;
    }

    /**
     * Gets mining
     *
     * @return \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsMining|null
     */
    public function getMining()
    {
        return $this->container['mining'];
    }

    /**
     * Sets mining
     *
     * @param \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsMining|null $mining mining
     *
     * @return $this
     */
    public function setMining($mining)
    {
        $this->container['mining'] = $mining;

        return $this;
    }

    /**
     * Gets module
     *
     * @return \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsModule|null
     */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
     * Sets module
     *
     * @param \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsModule|null $module module
     *
     * @return $this
     */
    public function setModule($module)
    {
        $this->container['module'] = $module;

        return $this;
    }

    /**
     * Gets orbital
     *
     * @return \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsOrbital|null
     */
    public function getOrbital()
    {
        return $this->container['orbital'];
    }

    /**
     * Sets orbital
     *
     * @param \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsOrbital|null $orbital orbital
     *
     * @return $this
     */
    public function setOrbital($orbital)
    {
        $this->container['orbital'] = $orbital;

        return $this;
    }

    /**
     * Gets pve
     *
     * @return \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsPve|null
     */
    public function getPve()
    {
        return $this->container['pve'];
    }

    /**
     * Sets pve
     *
     * @param \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsPve|null $pve pve
     *
     * @return $this
     */
    public function setPve($pve)
    {
        $this->container['pve'] = $pve;

        return $this;
    }

    /**
     * Gets social
     *
     * @return \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsSocial|null
     */
    public function getSocial()
    {
        return $this->container['social'];
    }

    /**
     * Sets social
     *
     * @param \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsSocial|null $social social
     *
     * @return $this
     */
    public function setSocial($social)
    {
        $this->container['social'] = $social;

        return $this;
    }

    /**
     * Gets travel
     *
     * @return \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsTravel|null
     */
    public function getTravel()
    {
        return $this->container['travel'];
    }

    /**
     * Sets travel
     *
     * @param \Swagger\Client\Eve\Model\GetCharactersCharacterIdStatsTravel|null $travel travel
     *
     * @return $this
     */
    public function setTravel($travel)
    {
        $this->container['travel'] = $travel;

        return $this;
    }

    /**
     * Gets year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param int $year Gregorian year for this set of aggregates
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

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
}


