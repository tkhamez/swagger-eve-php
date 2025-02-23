<?php
/**
 * GetCorporationCorporationIdMiningExtractions200Ok
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
 * The version of the OpenAPI document: 1.30
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
 * GetCorporationCorporationIdMiningExtractions200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetCorporationCorporationIdMiningExtractions200Ok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_corporation_corporation_id_mining_extractions_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'chunk_arrival_time' => '\DateTime',
        'extraction_start_time' => '\DateTime',
        'moon_id' => 'int',
        'natural_decay_time' => '\DateTime',
        'structure_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'chunk_arrival_time' => 'date-time',
        'extraction_start_time' => 'date-time',
        'moon_id' => 'int32',
        'natural_decay_time' => 'date-time',
        'structure_id' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'chunk_arrival_time' => false,
        'extraction_start_time' => false,
        'moon_id' => false,
        'natural_decay_time' => false,
        'structure_id' => false
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
        'chunk_arrival_time' => 'chunk_arrival_time',
        'extraction_start_time' => 'extraction_start_time',
        'moon_id' => 'moon_id',
        'natural_decay_time' => 'natural_decay_time',
        'structure_id' => 'structure_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chunk_arrival_time' => 'setChunkArrivalTime',
        'extraction_start_time' => 'setExtractionStartTime',
        'moon_id' => 'setMoonId',
        'natural_decay_time' => 'setNaturalDecayTime',
        'structure_id' => 'setStructureId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chunk_arrival_time' => 'getChunkArrivalTime',
        'extraction_start_time' => 'getExtractionStartTime',
        'moon_id' => 'getMoonId',
        'natural_decay_time' => 'getNaturalDecayTime',
        'structure_id' => 'getStructureId'
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
        $this->setIfExists('chunk_arrival_time', $data ?? [], null);
        $this->setIfExists('extraction_start_time', $data ?? [], null);
        $this->setIfExists('moon_id', $data ?? [], null);
        $this->setIfExists('natural_decay_time', $data ?? [], null);
        $this->setIfExists('structure_id', $data ?? [], null);
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

        if ($this->container['chunk_arrival_time'] === null) {
            $invalidProperties[] = "'chunk_arrival_time' can't be null";
        }
        if ($this->container['extraction_start_time'] === null) {
            $invalidProperties[] = "'extraction_start_time' can't be null";
        }
        if ($this->container['moon_id'] === null) {
            $invalidProperties[] = "'moon_id' can't be null";
        }
        if ($this->container['natural_decay_time'] === null) {
            $invalidProperties[] = "'natural_decay_time' can't be null";
        }
        if ($this->container['structure_id'] === null) {
            $invalidProperties[] = "'structure_id' can't be null";
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
     * Gets chunk_arrival_time
     *
     * @return \DateTime
     */
    public function getChunkArrivalTime()
    {
        return $this->container['chunk_arrival_time'];
    }

    /**
     * Sets chunk_arrival_time
     *
     * @param \DateTime $chunk_arrival_time The time at which the chunk being extracted will arrive and can be fractured by the moon mining drill.
     *
     * @return self
     */
    public function setChunkArrivalTime($chunk_arrival_time)
    {
        if (is_null($chunk_arrival_time)) {
            throw new \InvalidArgumentException('non-nullable chunk_arrival_time cannot be null');
        }
        $this->container['chunk_arrival_time'] = $chunk_arrival_time;

        return $this;
    }

    /**
     * Gets extraction_start_time
     *
     * @return \DateTime
     */
    public function getExtractionStartTime()
    {
        return $this->container['extraction_start_time'];
    }

    /**
     * Sets extraction_start_time
     *
     * @param \DateTime $extraction_start_time The time at which the current extraction was initiated.
     *
     * @return self
     */
    public function setExtractionStartTime($extraction_start_time)
    {
        if (is_null($extraction_start_time)) {
            throw new \InvalidArgumentException('non-nullable extraction_start_time cannot be null');
        }
        $this->container['extraction_start_time'] = $extraction_start_time;

        return $this;
    }

    /**
     * Gets moon_id
     *
     * @return int
     */
    public function getMoonId()
    {
        return $this->container['moon_id'];
    }

    /**
     * Sets moon_id
     *
     * @param int $moon_id moon_id integer
     *
     * @return self
     */
    public function setMoonId($moon_id)
    {
        if (is_null($moon_id)) {
            throw new \InvalidArgumentException('non-nullable moon_id cannot be null');
        }
        $this->container['moon_id'] = $moon_id;

        return $this;
    }

    /**
     * Gets natural_decay_time
     *
     * @return \DateTime
     */
    public function getNaturalDecayTime()
    {
        return $this->container['natural_decay_time'];
    }

    /**
     * Sets natural_decay_time
     *
     * @param \DateTime $natural_decay_time The time at which the chunk being extracted will naturally fracture if it is not first fractured by the moon mining drill.
     *
     * @return self
     */
    public function setNaturalDecayTime($natural_decay_time)
    {
        if (is_null($natural_decay_time)) {
            throw new \InvalidArgumentException('non-nullable natural_decay_time cannot be null');
        }
        $this->container['natural_decay_time'] = $natural_decay_time;

        return $this;
    }

    /**
     * Gets structure_id
     *
     * @return int
     */
    public function getStructureId()
    {
        return $this->container['structure_id'];
    }

    /**
     * Sets structure_id
     *
     * @param int $structure_id structure_id integer
     *
     * @return self
     */
    public function setStructureId($structure_id)
    {
        if (is_null($structure_id)) {
            throw new \InvalidArgumentException('non-nullable structure_id cannot be null');
        }
        $this->container['structure_id'] = $structure_id;

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


