<?php
/**
 * GetWarsWarIdAggressor
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
 * The version of the OpenAPI document: 1.25
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
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
 * GetWarsWarIdAggressor Class Doc Comment
 *
 * @category Class
 * @description The aggressor corporation or alliance that declared this war, only contains either corporation_id or alliance_id
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetWarsWarIdAggressor implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_wars_war_id_aggressor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alliance_id' => 'int',
        'corporation_id' => 'int',
        'isk_destroyed' => 'float',
        'ships_killed' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'alliance_id' => 'int32',
        'corporation_id' => 'int32',
        'isk_destroyed' => 'float',
        'ships_killed' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'alliance_id' => false,
        'corporation_id' => false,
        'isk_destroyed' => false,
        'ships_killed' => false
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
        'alliance_id' => 'alliance_id',
        'corporation_id' => 'corporation_id',
        'isk_destroyed' => 'isk_destroyed',
        'ships_killed' => 'ships_killed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alliance_id' => 'setAllianceId',
        'corporation_id' => 'setCorporationId',
        'isk_destroyed' => 'setIskDestroyed',
        'ships_killed' => 'setShipsKilled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alliance_id' => 'getAllianceId',
        'corporation_id' => 'getCorporationId',
        'isk_destroyed' => 'getIskDestroyed',
        'ships_killed' => 'getShipsKilled'
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
        $this->setIfExists('alliance_id', $data ?? [], null);
        $this->setIfExists('corporation_id', $data ?? [], null);
        $this->setIfExists('isk_destroyed', $data ?? [], null);
        $this->setIfExists('ships_killed', $data ?? [], null);
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

        if ($this->container['isk_destroyed'] === null) {
            $invalidProperties[] = "'isk_destroyed' can't be null";
        }
        if ($this->container['ships_killed'] === null) {
            $invalidProperties[] = "'ships_killed' can't be null";
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
     * Gets alliance_id
     *
     * @return int|null
     */
    public function getAllianceId()
    {
        return $this->container['alliance_id'];
    }

    /**
     * Sets alliance_id
     *
     * @param int|null $alliance_id Alliance ID if and only if the aggressor is an alliance
     *
     * @return self
     */
    public function setAllianceId($alliance_id)
    {
        if (is_null($alliance_id)) {
            throw new \InvalidArgumentException('non-nullable alliance_id cannot be null');
        }
        $this->container['alliance_id'] = $alliance_id;

        return $this;
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
     * @param int|null $corporation_id Corporation ID if and only if the aggressor is a corporation
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
     * Gets isk_destroyed
     *
     * @return float
     */
    public function getIskDestroyed()
    {
        return $this->container['isk_destroyed'];
    }

    /**
     * Sets isk_destroyed
     *
     * @param float $isk_destroyed ISK value of ships the aggressor has destroyed
     *
     * @return self
     */
    public function setIskDestroyed($isk_destroyed)
    {
        if (is_null($isk_destroyed)) {
            throw new \InvalidArgumentException('non-nullable isk_destroyed cannot be null');
        }
        $this->container['isk_destroyed'] = $isk_destroyed;

        return $this;
    }

    /**
     * Gets ships_killed
     *
     * @return int
     */
    public function getShipsKilled()
    {
        return $this->container['ships_killed'];
    }

    /**
     * Sets ships_killed
     *
     * @param int $ships_killed The number of ships the aggressor has killed
     *
     * @return self
     */
    public function setShipsKilled($ships_killed)
    {
        if (is_null($ships_killed)) {
            throw new \InvalidArgumentException('non-nullable ships_killed cannot be null');
        }
        $this->container['ships_killed'] = $ships_killed;

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


