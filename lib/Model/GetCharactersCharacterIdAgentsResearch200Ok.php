<?php
/**
 * GetCharactersCharacterIdAgentsResearch200Ok
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
 * The version of the OpenAPI document: 1.21
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
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
 * GetCharactersCharacterIdAgentsResearch200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetCharactersCharacterIdAgentsResearch200Ok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_agents_research_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agent_id' => 'int',
        'points_per_day' => 'float',
        'remainder_points' => 'float',
        'skill_type_id' => 'int',
        'started_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'agent_id' => 'int32',
        'points_per_day' => 'float',
        'remainder_points' => 'float',
        'skill_type_id' => 'int32',
        'started_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'agent_id' => false,
        'points_per_day' => false,
        'remainder_points' => false,
        'skill_type_id' => false,
        'started_at' => false
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
        'agent_id' => 'agent_id',
        'points_per_day' => 'points_per_day',
        'remainder_points' => 'remainder_points',
        'skill_type_id' => 'skill_type_id',
        'started_at' => 'started_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agent_id' => 'setAgentId',
        'points_per_day' => 'setPointsPerDay',
        'remainder_points' => 'setRemainderPoints',
        'skill_type_id' => 'setSkillTypeId',
        'started_at' => 'setStartedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agent_id' => 'getAgentId',
        'points_per_day' => 'getPointsPerDay',
        'remainder_points' => 'getRemainderPoints',
        'skill_type_id' => 'getSkillTypeId',
        'started_at' => 'getStartedAt'
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
        $this->setIfExists('agent_id', $data ?? [], null);
        $this->setIfExists('points_per_day', $data ?? [], null);
        $this->setIfExists('remainder_points', $data ?? [], null);
        $this->setIfExists('skill_type_id', $data ?? [], null);
        $this->setIfExists('started_at', $data ?? [], null);
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

        if ($this->container['agent_id'] === null) {
            $invalidProperties[] = "'agent_id' can't be null";
        }
        if ($this->container['points_per_day'] === null) {
            $invalidProperties[] = "'points_per_day' can't be null";
        }
        if ($this->container['remainder_points'] === null) {
            $invalidProperties[] = "'remainder_points' can't be null";
        }
        if ($this->container['skill_type_id'] === null) {
            $invalidProperties[] = "'skill_type_id' can't be null";
        }
        if ($this->container['started_at'] === null) {
            $invalidProperties[] = "'started_at' can't be null";
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
     * Gets agent_id
     *
     * @return int
     */
    public function getAgentId()
    {
        return $this->container['agent_id'];
    }

    /**
     * Sets agent_id
     *
     * @param int $agent_id agent_id integer
     *
     * @return self
     */
    public function setAgentId($agent_id)
    {
        if (is_null($agent_id)) {
            throw new \InvalidArgumentException('non-nullable agent_id cannot be null');
        }
        $this->container['agent_id'] = $agent_id;

        return $this;
    }

    /**
     * Gets points_per_day
     *
     * @return float
     */
    public function getPointsPerDay()
    {
        return $this->container['points_per_day'];
    }

    /**
     * Sets points_per_day
     *
     * @param float $points_per_day points_per_day number
     *
     * @return self
     */
    public function setPointsPerDay($points_per_day)
    {
        if (is_null($points_per_day)) {
            throw new \InvalidArgumentException('non-nullable points_per_day cannot be null');
        }
        $this->container['points_per_day'] = $points_per_day;

        return $this;
    }

    /**
     * Gets remainder_points
     *
     * @return float
     */
    public function getRemainderPoints()
    {
        return $this->container['remainder_points'];
    }

    /**
     * Sets remainder_points
     *
     * @param float $remainder_points remainder_points number
     *
     * @return self
     */
    public function setRemainderPoints($remainder_points)
    {
        if (is_null($remainder_points)) {
            throw new \InvalidArgumentException('non-nullable remainder_points cannot be null');
        }
        $this->container['remainder_points'] = $remainder_points;

        return $this;
    }

    /**
     * Gets skill_type_id
     *
     * @return int
     */
    public function getSkillTypeId()
    {
        return $this->container['skill_type_id'];
    }

    /**
     * Sets skill_type_id
     *
     * @param int $skill_type_id skill_type_id integer
     *
     * @return self
     */
    public function setSkillTypeId($skill_type_id)
    {
        if (is_null($skill_type_id)) {
            throw new \InvalidArgumentException('non-nullable skill_type_id cannot be null');
        }
        $this->container['skill_type_id'] = $skill_type_id;

        return $this;
    }

    /**
     * Gets started_at
     *
     * @return \DateTime
     */
    public function getStartedAt()
    {
        return $this->container['started_at'];
    }

    /**
     * Sets started_at
     *
     * @param \DateTime $started_at started_at string
     *
     * @return self
     */
    public function setStartedAt($started_at)
    {
        if (is_null($started_at)) {
            throw new \InvalidArgumentException('non-nullable started_at cannot be null');
        }
        $this->container['started_at'] = $started_at;

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


