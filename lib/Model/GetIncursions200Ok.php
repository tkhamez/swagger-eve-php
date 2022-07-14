<?php
/**
 * GetIncursions200Ok
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
 * The version of the OpenAPI document: 1.12
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
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
 * GetIncursions200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetIncursions200Ok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_incursions_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'constellation_id' => 'int',
        'faction_id' => 'int',
        'has_boss' => 'bool',
        'infested_solar_systems' => 'int[]',
        'influence' => 'float',
        'staging_solar_system_id' => 'int',
        'state' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'constellation_id' => 'int32',
        'faction_id' => 'int32',
        'has_boss' => null,
        'infested_solar_systems' => 'int32',
        'influence' => 'float',
        'staging_solar_system_id' => 'int32',
        'state' => null,
        'type' => null
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
        'faction_id' => 'faction_id',
        'has_boss' => 'has_boss',
        'infested_solar_systems' => 'infested_solar_systems',
        'influence' => 'influence',
        'staging_solar_system_id' => 'staging_solar_system_id',
        'state' => 'state',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'constellation_id' => 'setConstellationId',
        'faction_id' => 'setFactionId',
        'has_boss' => 'setHasBoss',
        'infested_solar_systems' => 'setInfestedSolarSystems',
        'influence' => 'setInfluence',
        'staging_solar_system_id' => 'setStagingSolarSystemId',
        'state' => 'setState',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'constellation_id' => 'getConstellationId',
        'faction_id' => 'getFactionId',
        'has_boss' => 'getHasBoss',
        'infested_solar_systems' => 'getInfestedSolarSystems',
        'influence' => 'getInfluence',
        'staging_solar_system_id' => 'getStagingSolarSystemId',
        'state' => 'getState',
        'type' => 'getType'
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

    public const STATE_WITHDRAWING = 'withdrawing';
    public const STATE_MOBILIZING = 'mobilizing';
    public const STATE_ESTABLISHED = 'established';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_WITHDRAWING,
            self::STATE_MOBILIZING,
            self::STATE_ESTABLISHED,
        ];
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
        $this->container['constellation_id'] = $data['constellation_id'] ?? null;
        $this->container['faction_id'] = $data['faction_id'] ?? null;
        $this->container['has_boss'] = $data['has_boss'] ?? null;
        $this->container['infested_solar_systems'] = $data['infested_solar_systems'] ?? null;
        $this->container['influence'] = $data['influence'] ?? null;
        $this->container['staging_solar_system_id'] = $data['staging_solar_system_id'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
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
        if ($this->container['faction_id'] === null) {
            $invalidProperties[] = "'faction_id' can't be null";
        }
        if ($this->container['has_boss'] === null) {
            $invalidProperties[] = "'has_boss' can't be null";
        }
        if ($this->container['infested_solar_systems'] === null) {
            $invalidProperties[] = "'infested_solar_systems' can't be null";
        }
        if ((count($this->container['infested_solar_systems']) > 100)) {
            $invalidProperties[] = "invalid value for 'infested_solar_systems', number of items must be less than or equal to 100.";
        }

        if ($this->container['influence'] === null) {
            $invalidProperties[] = "'influence' can't be null";
        }
        if ($this->container['staging_solar_system_id'] === null) {
            $invalidProperties[] = "'staging_solar_system_id' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * @param int $constellation_id The constellation id in which this incursion takes place
     *
     * @return self
     */
    public function setConstellationId($constellation_id)
    {
        $this->container['constellation_id'] = $constellation_id;

        return $this;
    }

    /**
     * Gets faction_id
     *
     * @return int
     */
    public function getFactionId()
    {
        return $this->container['faction_id'];
    }

    /**
     * Sets faction_id
     *
     * @param int $faction_id The attacking faction's id
     *
     * @return self
     */
    public function setFactionId($faction_id)
    {
        $this->container['faction_id'] = $faction_id;

        return $this;
    }

    /**
     * Gets has_boss
     *
     * @return bool
     */
    public function getHasBoss()
    {
        return $this->container['has_boss'];
    }

    /**
     * Sets has_boss
     *
     * @param bool $has_boss Whether the final encounter has boss or not
     *
     * @return self
     */
    public function setHasBoss($has_boss)
    {
        $this->container['has_boss'] = $has_boss;

        return $this;
    }

    /**
     * Gets infested_solar_systems
     *
     * @return int[]
     */
    public function getInfestedSolarSystems()
    {
        return $this->container['infested_solar_systems'];
    }

    /**
     * Sets infested_solar_systems
     *
     * @param int[] $infested_solar_systems A list of infested solar system ids that are a part of this incursion
     *
     * @return self
     */
    public function setInfestedSolarSystems($infested_solar_systems)
    {

        if ((count($infested_solar_systems) > 100)) {
            throw new \InvalidArgumentException('invalid value for $infested_solar_systems when calling GetIncursions200Ok., number of items must be less than or equal to 100.');
        }
        $this->container['infested_solar_systems'] = $infested_solar_systems;

        return $this;
    }

    /**
     * Gets influence
     *
     * @return float
     */
    public function getInfluence()
    {
        return $this->container['influence'];
    }

    /**
     * Sets influence
     *
     * @param float $influence Influence of this incursion as a float from 0 to 1
     *
     * @return self
     */
    public function setInfluence($influence)
    {
        $this->container['influence'] = $influence;

        return $this;
    }

    /**
     * Gets staging_solar_system_id
     *
     * @return int
     */
    public function getStagingSolarSystemId()
    {
        return $this->container['staging_solar_system_id'];
    }

    /**
     * Sets staging_solar_system_id
     *
     * @param int $staging_solar_system_id Staging solar system for this incursion
     *
     * @return self
     */
    public function setStagingSolarSystemId($staging_solar_system_id)
    {
        $this->container['staging_solar_system_id'] = $staging_solar_system_id;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state The state of this incursion
     *
     * @return self
     */
    public function setState($state)
    {
        /*$allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'state', must be one of '%s'",
                    $state,
                    implode("', '", $allowedValues)
                )
            );
        }*/
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of this incursion
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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


