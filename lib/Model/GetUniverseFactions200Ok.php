<?php
/**
 * GetUniverseFactions200Ok
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
 * The version of the OpenAPI document: 1.28
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
 * GetUniverseFactions200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetUniverseFactions200Ok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_universe_factions_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'corporation_id' => 'int',
        'description' => 'string',
        'faction_id' => 'int',
        'is_unique' => 'bool',
        'militia_corporation_id' => 'int',
        'name' => 'string',
        'size_factor' => 'float',
        'solar_system_id' => 'int',
        'station_count' => 'int',
        'station_system_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'corporation_id' => 'int32',
        'description' => null,
        'faction_id' => 'int32',
        'is_unique' => null,
        'militia_corporation_id' => 'int32',
        'name' => null,
        'size_factor' => 'float',
        'solar_system_id' => 'int32',
        'station_count' => 'int32',
        'station_system_count' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'corporation_id' => false,
        'description' => false,
        'faction_id' => false,
        'is_unique' => false,
        'militia_corporation_id' => false,
        'name' => false,
        'size_factor' => false,
        'solar_system_id' => false,
        'station_count' => false,
        'station_system_count' => false
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
        'corporation_id' => 'corporation_id',
        'description' => 'description',
        'faction_id' => 'faction_id',
        'is_unique' => 'is_unique',
        'militia_corporation_id' => 'militia_corporation_id',
        'name' => 'name',
        'size_factor' => 'size_factor',
        'solar_system_id' => 'solar_system_id',
        'station_count' => 'station_count',
        'station_system_count' => 'station_system_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'corporation_id' => 'setCorporationId',
        'description' => 'setDescription',
        'faction_id' => 'setFactionId',
        'is_unique' => 'setIsUnique',
        'militia_corporation_id' => 'setMilitiaCorporationId',
        'name' => 'setName',
        'size_factor' => 'setSizeFactor',
        'solar_system_id' => 'setSolarSystemId',
        'station_count' => 'setStationCount',
        'station_system_count' => 'setStationSystemCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'corporation_id' => 'getCorporationId',
        'description' => 'getDescription',
        'faction_id' => 'getFactionId',
        'is_unique' => 'getIsUnique',
        'militia_corporation_id' => 'getMilitiaCorporationId',
        'name' => 'getName',
        'size_factor' => 'getSizeFactor',
        'solar_system_id' => 'getSolarSystemId',
        'station_count' => 'getStationCount',
        'station_system_count' => 'getStationSystemCount'
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
        $this->setIfExists('corporation_id', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('faction_id', $data ?? [], null);
        $this->setIfExists('is_unique', $data ?? [], null);
        $this->setIfExists('militia_corporation_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('size_factor', $data ?? [], null);
        $this->setIfExists('solar_system_id', $data ?? [], null);
        $this->setIfExists('station_count', $data ?? [], null);
        $this->setIfExists('station_system_count', $data ?? [], null);
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

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['faction_id'] === null) {
            $invalidProperties[] = "'faction_id' can't be null";
        }
        if ($this->container['is_unique'] === null) {
            $invalidProperties[] = "'is_unique' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['size_factor'] === null) {
            $invalidProperties[] = "'size_factor' can't be null";
        }
        if ($this->container['station_count'] === null) {
            $invalidProperties[] = "'station_count' can't be null";
        }
        if ($this->container['station_system_count'] === null) {
            $invalidProperties[] = "'station_system_count' can't be null";
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
     * Gets corporation_id
     *
     * @return int|null
     */
    public function getCorporationId()
    {
        return $this->container['corporation_id'];
    }

    /**
     * Sets corporation_id
     *
     * @param int|null $corporation_id corporation_id integer
     *
     * @return self
     */
    public function setCorporationId($corporation_id)
    {
        if (is_null($corporation_id)) {
            throw new \InvalidArgumentException('non-nullable corporation_id cannot be null');
        }
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
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

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
     * @param int $faction_id faction_id integer
     *
     * @return self
     */
    public function setFactionId($faction_id)
    {
        if (is_null($faction_id)) {
            throw new \InvalidArgumentException('non-nullable faction_id cannot be null');
        }
        $this->container['faction_id'] = $faction_id;

        return $this;
    }

    /**
     * Gets is_unique
     *
     * @return bool
     */
    public function getIsUnique()
    {
        return $this->container['is_unique'];
    }

    /**
     * Sets is_unique
     *
     * @param bool $is_unique is_unique boolean
     *
     * @return self
     */
    public function setIsUnique($is_unique)
    {
        if (is_null($is_unique)) {
            throw new \InvalidArgumentException('non-nullable is_unique cannot be null');
        }
        $this->container['is_unique'] = $is_unique;

        return $this;
    }

    /**
     * Gets militia_corporation_id
     *
     * @return int|null
     */
    public function getMilitiaCorporationId()
    {
        return $this->container['militia_corporation_id'];
    }

    /**
     * Sets militia_corporation_id
     *
     * @param int|null $militia_corporation_id militia_corporation_id integer
     *
     * @return self
     */
    public function setMilitiaCorporationId($militia_corporation_id)
    {
        if (is_null($militia_corporation_id)) {
            throw new \InvalidArgumentException('non-nullable militia_corporation_id cannot be null');
        }
        $this->container['militia_corporation_id'] = $militia_corporation_id;

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
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets size_factor
     *
     * @return float
     */
    public function getSizeFactor()
    {
        return $this->container['size_factor'];
    }

    /**
     * Sets size_factor
     *
     * @param float $size_factor size_factor number
     *
     * @return self
     */
    public function setSizeFactor($size_factor)
    {
        if (is_null($size_factor)) {
            throw new \InvalidArgumentException('non-nullable size_factor cannot be null');
        }
        $this->container['size_factor'] = $size_factor;

        return $this;
    }

    /**
     * Gets solar_system_id
     *
     * @return int|null
     */
    public function getSolarSystemId()
    {
        return $this->container['solar_system_id'];
    }

    /**
     * Sets solar_system_id
     *
     * @param int|null $solar_system_id solar_system_id integer
     *
     * @return self
     */
    public function setSolarSystemId($solar_system_id)
    {
        if (is_null($solar_system_id)) {
            throw new \InvalidArgumentException('non-nullable solar_system_id cannot be null');
        }
        $this->container['solar_system_id'] = $solar_system_id;

        return $this;
    }

    /**
     * Gets station_count
     *
     * @return int
     */
    public function getStationCount()
    {
        return $this->container['station_count'];
    }

    /**
     * Sets station_count
     *
     * @param int $station_count station_count integer
     *
     * @return self
     */
    public function setStationCount($station_count)
    {
        if (is_null($station_count)) {
            throw new \InvalidArgumentException('non-nullable station_count cannot be null');
        }
        $this->container['station_count'] = $station_count;

        return $this;
    }

    /**
     * Gets station_system_count
     *
     * @return int
     */
    public function getStationSystemCount()
    {
        return $this->container['station_system_count'];
    }

    /**
     * Sets station_system_count
     *
     * @param int $station_system_count station_system_count integer
     *
     * @return self
     */
    public function setStationSystemCount($station_system_count)
    {
        if (is_null($station_system_count)) {
            throw new \InvalidArgumentException('non-nullable station_system_count cannot be null');
        }
        $this->container['station_system_count'] = $station_system_count;

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


