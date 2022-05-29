<?php
/**
 * GetFleetsFleetIdMembers200Ok
 *
 * PHP version 7.3
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
 * The version of the OpenAPI document: 1.11
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
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
 * GetFleetsFleetIdMembers200Ok Class Doc Comment
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
class GetFleetsFleetIdMembers200Ok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_fleets_fleet_id_members_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'character_id' => 'int',
        'join_time' => '\DateTime',
        'role' => 'string',
        'role_name' => 'string',
        'ship_type_id' => 'int',
        'solar_system_id' => 'int',
        'squad_id' => 'int',
        'station_id' => 'int',
        'takes_fleet_warp' => 'bool',
        'wing_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'character_id' => 'int32',
        'join_time' => 'date-time',
        'role' => null,
        'role_name' => null,
        'ship_type_id' => 'int32',
        'solar_system_id' => 'int32',
        'squad_id' => 'int64',
        'station_id' => 'int64',
        'takes_fleet_warp' => null,
        'wing_id' => 'int64'
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
        'character_id' => 'character_id',
        'join_time' => 'join_time',
        'role' => 'role',
        'role_name' => 'role_name',
        'ship_type_id' => 'ship_type_id',
        'solar_system_id' => 'solar_system_id',
        'squad_id' => 'squad_id',
        'station_id' => 'station_id',
        'takes_fleet_warp' => 'takes_fleet_warp',
        'wing_id' => 'wing_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'character_id' => 'setCharacterId',
        'join_time' => 'setJoinTime',
        'role' => 'setRole',
        'role_name' => 'setRoleName',
        'ship_type_id' => 'setShipTypeId',
        'solar_system_id' => 'setSolarSystemId',
        'squad_id' => 'setSquadId',
        'station_id' => 'setStationId',
        'takes_fleet_warp' => 'setTakesFleetWarp',
        'wing_id' => 'setWingId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'character_id' => 'getCharacterId',
        'join_time' => 'getJoinTime',
        'role' => 'getRole',
        'role_name' => 'getRoleName',
        'ship_type_id' => 'getShipTypeId',
        'solar_system_id' => 'getSolarSystemId',
        'squad_id' => 'getSquadId',
        'station_id' => 'getStationId',
        'takes_fleet_warp' => 'getTakesFleetWarp',
        'wing_id' => 'getWingId'
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

    const ROLE_FLEET_COMMANDER = 'fleet_commander';
    const ROLE_WING_COMMANDER = 'wing_commander';
    const ROLE_SQUAD_COMMANDER = 'squad_commander';
    const ROLE_SQUAD_MEMBER = 'squad_member';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_FLEET_COMMANDER,
            self::ROLE_WING_COMMANDER,
            self::ROLE_SQUAD_COMMANDER,
            self::ROLE_SQUAD_MEMBER,
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
        $this->container['character_id'] = $data['character_id'] ?? null;
        $this->container['join_time'] = $data['join_time'] ?? null;
        $this->container['role'] = $data['role'] ?? null;
        $this->container['role_name'] = $data['role_name'] ?? null;
        $this->container['ship_type_id'] = $data['ship_type_id'] ?? null;
        $this->container['solar_system_id'] = $data['solar_system_id'] ?? null;
        $this->container['squad_id'] = $data['squad_id'] ?? null;
        $this->container['station_id'] = $data['station_id'] ?? null;
        $this->container['takes_fleet_warp'] = $data['takes_fleet_warp'] ?? null;
        $this->container['wing_id'] = $data['wing_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['character_id'] === null) {
            $invalidProperties[] = "'character_id' can't be null";
        }
        if ($this->container['join_time'] === null) {
            $invalidProperties[] = "'join_time' can't be null";
        }
        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
        $allowedValues = $this->getRoleAllowableValues();
        if (!is_null($this->container['role']) && !in_array($this->container['role'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'role', must be one of '%s'",
                $this->container['role'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['role_name'] === null) {
            $invalidProperties[] = "'role_name' can't be null";
        }
        if ($this->container['ship_type_id'] === null) {
            $invalidProperties[] = "'ship_type_id' can't be null";
        }
        if ($this->container['solar_system_id'] === null) {
            $invalidProperties[] = "'solar_system_id' can't be null";
        }
        if ($this->container['squad_id'] === null) {
            $invalidProperties[] = "'squad_id' can't be null";
        }
        if ($this->container['takes_fleet_warp'] === null) {
            $invalidProperties[] = "'takes_fleet_warp' can't be null";
        }
        if ($this->container['wing_id'] === null) {
            $invalidProperties[] = "'wing_id' can't be null";
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
     * Gets character_id
     *
     * @return int
     */
    public function getCharacterId()
    {
        return $this->container['character_id'];
    }

    /**
     * Sets character_id
     *
     * @param int $character_id character_id integer
     *
     * @return self
     */
    public function setCharacterId($character_id)
    {
        $this->container['character_id'] = $character_id;

        return $this;
    }

    /**
     * Gets join_time
     *
     * @return \DateTime
     */
    public function getJoinTime()
    {
        return $this->container['join_time'];
    }

    /**
     * Sets join_time
     *
     * @param \DateTime $join_time join_time string
     *
     * @return self
     */
    public function setJoinTime($join_time)
    {
        $this->container['join_time'] = $join_time;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string $role Member’s role in fleet
     *
     * @return self
     */
    public function setRole($role)
    {
        /*$allowedValues = $this->getRoleAllowableValues();
        if (!in_array($role, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'role', must be one of '%s'",
                    $role,
                    implode("', '", $allowedValues)
                )
            );
        }*/
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets role_name
     *
     * @return string
     */
    public function getRoleName()
    {
        return $this->container['role_name'];
    }

    /**
     * Sets role_name
     *
     * @param string $role_name Localized role names
     *
     * @return self
     */
    public function setRoleName($role_name)
    {
        $this->container['role_name'] = $role_name;

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
     * @return self
     */
    public function setShipTypeId($ship_type_id)
    {
        $this->container['ship_type_id'] = $ship_type_id;

        return $this;
    }

    /**
     * Gets solar_system_id
     *
     * @return int
     */
    public function getSolarSystemId()
    {
        return $this->container['solar_system_id'];
    }

    /**
     * Sets solar_system_id
     *
     * @param int $solar_system_id Solar system the member is located in
     *
     * @return self
     */
    public function setSolarSystemId($solar_system_id)
    {
        $this->container['solar_system_id'] = $solar_system_id;

        return $this;
    }

    /**
     * Gets squad_id
     *
     * @return int
     */
    public function getSquadId()
    {
        return $this->container['squad_id'];
    }

    /**
     * Sets squad_id
     *
     * @param int $squad_id ID of the squad the member is in. If not applicable, will be set to -1
     *
     * @return self
     */
    public function setSquadId($squad_id)
    {
        $this->container['squad_id'] = $squad_id;

        return $this;
    }

    /**
     * Gets station_id
     *
     * @return int|null
     */
    public function getStationId()
    {
        return $this->container['station_id'];
    }

    /**
     * Sets station_id
     *
     * @param int|null $station_id Station in which the member is docked in, if applicable
     *
     * @return self
     */
    public function setStationId($station_id)
    {
        $this->container['station_id'] = $station_id;

        return $this;
    }

    /**
     * Gets takes_fleet_warp
     *
     * @return bool
     */
    public function getTakesFleetWarp()
    {
        return $this->container['takes_fleet_warp'];
    }

    /**
     * Sets takes_fleet_warp
     *
     * @param bool $takes_fleet_warp Whether the member take fleet warps
     *
     * @return self
     */
    public function setTakesFleetWarp($takes_fleet_warp)
    {
        $this->container['takes_fleet_warp'] = $takes_fleet_warp;

        return $this;
    }

    /**
     * Gets wing_id
     *
     * @return int
     */
    public function getWingId()
    {
        return $this->container['wing_id'];
    }

    /**
     * Sets wing_id
     *
     * @param int $wing_id ID of the wing the member is in. If not applicable, will be set to -1
     *
     * @return self
     */
    public function setWingId($wing_id)
    {
        $this->container['wing_id'] = $wing_id;

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
     * @return mixed|null
     */
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
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


