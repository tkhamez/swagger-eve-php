<?php
/**
 * GetCharactersCharacterIdSearchOk
 *
 * PHP version 7.4
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
 * The version of the OpenAPI document: 1.26
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
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
 * GetCharactersCharacterIdSearchOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetCharactersCharacterIdSearchOk implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_search_ok';

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
        'station' => 'int[]',
        'structure' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
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
        'station' => 'int32',
        'structure' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'agent' => false,
        'alliance' => false,
        'character' => false,
        'constellation' => false,
        'corporation' => false,
        'faction' => false,
        'inventory_type' => false,
        'region' => false,
        'solar_system' => false,
        'station' => false,
        'structure' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
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
        'station' => 'station',
        'structure' => 'structure'
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
        'station' => 'setStation',
        'structure' => 'setStructure'
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
        'station' => 'getStation',
        'structure' => 'getStructure'
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
        $this->setIfExists('agent', $data ?? [], null);
        $this->setIfExists('alliance', $data ?? [], null);
        $this->setIfExists('character', $data ?? [], null);
        $this->setIfExists('constellation', $data ?? [], null);
        $this->setIfExists('corporation', $data ?? [], null);
        $this->setIfExists('faction', $data ?? [], null);
        $this->setIfExists('inventory_type', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
        $this->setIfExists('solar_system', $data ?? [], null);
        $this->setIfExists('station', $data ?? [], null);
        $this->setIfExists('structure', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['agent']) && (count($this->container['agent']) > 500)) {
            $invalidProperties[] = "invalid value for 'agent', number of items must be less than or equal to 500.";
        }

        if (!is_null($this->container['alliance']) && (count($this->container['alliance']) > 500)) {
            $invalidProperties[] = "invalid value for 'alliance', number of items must be less than or equal to 500.";
        }

        if (!is_null($this->container['character']) && (count($this->container['character']) > 500)) {
            $invalidProperties[] = "invalid value for 'character', number of items must be less than or equal to 500.";
        }

        if (!is_null($this->container['constellation']) && (count($this->container['constellation']) > 500)) {
            $invalidProperties[] = "invalid value for 'constellation', number of items must be less than or equal to 500.";
        }

        if (!is_null($this->container['corporation']) && (count($this->container['corporation']) > 500)) {
            $invalidProperties[] = "invalid value for 'corporation', number of items must be less than or equal to 500.";
        }

        if (!is_null($this->container['faction']) && (count($this->container['faction']) > 500)) {
            $invalidProperties[] = "invalid value for 'faction', number of items must be less than or equal to 500.";
        }

        if (!is_null($this->container['inventory_type']) && (count($this->container['inventory_type']) > 500)) {
            $invalidProperties[] = "invalid value for 'inventory_type', number of items must be less than or equal to 500.";
        }

        if (!is_null($this->container['region']) && (count($this->container['region']) > 500)) {
            $invalidProperties[] = "invalid value for 'region', number of items must be less than or equal to 500.";
        }

        if (!is_null($this->container['solar_system']) && (count($this->container['solar_system']) > 500)) {
            $invalidProperties[] = "invalid value for 'solar_system', number of items must be less than or equal to 500.";
        }

        if (!is_null($this->container['station']) && (count($this->container['station']) > 500)) {
            $invalidProperties[] = "invalid value for 'station', number of items must be less than or equal to 500.";
        }

        if (!is_null($this->container['structure']) && (count($this->container['structure']) > 500)) {
            $invalidProperties[] = "invalid value for 'structure', number of items must be less than or equal to 500.";
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
     * @return self
     */
    public function setAgent($agent)
    {
        if (is_null($agent)) {
            throw new \InvalidArgumentException('non-nullable agent cannot be null');
        }

        /*if ((count($agent) > 500)) {
            throw new \InvalidArgumentException('invalid value for $agent when calling GetCharactersCharacterIdSearchOk., number of items must be less than or equal to 500.');
        }*/
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
     * @return self
     */
    public function setAlliance($alliance)
    {
        if (is_null($alliance)) {
            throw new \InvalidArgumentException('non-nullable alliance cannot be null');
        }

        /*if ((count($alliance) > 500)) {
            throw new \InvalidArgumentException('invalid value for $alliance when calling GetCharactersCharacterIdSearchOk., number of items must be less than or equal to 500.');
        }*/
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
     * @return self
     */
    public function setCharacter($character)
    {
        if (is_null($character)) {
            throw new \InvalidArgumentException('non-nullable character cannot be null');
        }

        /*if ((count($character) > 500)) {
            throw new \InvalidArgumentException('invalid value for $character when calling GetCharactersCharacterIdSearchOk., number of items must be less than or equal to 500.');
        }*/
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
     * @return self
     */
    public function setConstellation($constellation)
    {
        if (is_null($constellation)) {
            throw new \InvalidArgumentException('non-nullable constellation cannot be null');
        }

        /*if ((count($constellation) > 500)) {
            throw new \InvalidArgumentException('invalid value for $constellation when calling GetCharactersCharacterIdSearchOk., number of items must be less than or equal to 500.');
        }*/
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
     * @return self
     */
    public function setCorporation($corporation)
    {
        if (is_null($corporation)) {
            throw new \InvalidArgumentException('non-nullable corporation cannot be null');
        }

        /*if ((count($corporation) > 500)) {
            throw new \InvalidArgumentException('invalid value for $corporation when calling GetCharactersCharacterIdSearchOk., number of items must be less than or equal to 500.');
        }*/
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
     * @return self
     */
    public function setFaction($faction)
    {
        if (is_null($faction)) {
            throw new \InvalidArgumentException('non-nullable faction cannot be null');
        }

        /*if ((count($faction) > 500)) {
            throw new \InvalidArgumentException('invalid value for $faction when calling GetCharactersCharacterIdSearchOk., number of items must be less than or equal to 500.');
        }*/
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
     * @return self
     */
    public function setInventoryType($inventory_type)
    {
        if (is_null($inventory_type)) {
            throw new \InvalidArgumentException('non-nullable inventory_type cannot be null');
        }

        /*if ((count($inventory_type) > 500)) {
            throw new \InvalidArgumentException('invalid value for $inventory_type when calling GetCharactersCharacterIdSearchOk., number of items must be less than or equal to 500.');
        }*/
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
     * @return self
     */
    public function setRegion($region)
    {
        if (is_null($region)) {
            throw new \InvalidArgumentException('non-nullable region cannot be null');
        }

        /*if ((count($region) > 500)) {
            throw new \InvalidArgumentException('invalid value for $region when calling GetCharactersCharacterIdSearchOk., number of items must be less than or equal to 500.');
        }*/
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
     * @return self
     */
    public function setSolarSystem($solar_system)
    {
        if (is_null($solar_system)) {
            throw new \InvalidArgumentException('non-nullable solar_system cannot be null');
        }

        /*if ((count($solar_system) > 500)) {
            throw new \InvalidArgumentException('invalid value for $solar_system when calling GetCharactersCharacterIdSearchOk., number of items must be less than or equal to 500.');
        }*/
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
     * @return self
     */
    public function setStation($station)
    {
        if (is_null($station)) {
            throw new \InvalidArgumentException('non-nullable station cannot be null');
        }

        /*if ((count($station) > 500)) {
            throw new \InvalidArgumentException('invalid value for $station when calling GetCharactersCharacterIdSearchOk., number of items must be less than or equal to 500.');
        }*/
        $this->container['station'] = $station;

        return $this;
    }

    /**
     * Gets structure
     *
     * @return int[]|null
     */
    public function getStructure()
    {
        return $this->container['structure'];
    }

    /**
     * Sets structure
     *
     * @param int[]|null $structure structure array
     *
     * @return self
     */
    public function setStructure($structure)
    {
        if (is_null($structure)) {
            throw new \InvalidArgumentException('non-nullable structure cannot be null');
        }

        /*if ((count($structure) > 500)) {
            throw new \InvalidArgumentException('invalid value for $structure when calling GetCharactersCharacterIdSearchOk., number of items must be less than or equal to 500.');
        }*/
        $this->container['structure'] = $structure;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


