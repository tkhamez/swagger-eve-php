<?php
/**
 * GetCorporationsCorporationIdStarbases200Ok
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
 * GetCorporationsCorporationIdStarbases200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetCorporationsCorporationIdStarbases200Ok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_corporations_corporation_id_starbases_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'moon_id' => 'int',
        'onlined_since' => '\DateTime',
        'reinforced_until' => '\DateTime',
        'starbase_id' => 'int',
        'state' => 'string',
        'system_id' => 'int',
        'type_id' => 'int',
        'unanchor_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'moon_id' => 'int32',
        'onlined_since' => 'date-time',
        'reinforced_until' => 'date-time',
        'starbase_id' => 'int64',
        'state' => null,
        'system_id' => 'int32',
        'type_id' => 'int32',
        'unanchor_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'moon_id' => false,
        'onlined_since' => false,
        'reinforced_until' => false,
        'starbase_id' => false,
        'state' => false,
        'system_id' => false,
        'type_id' => false,
        'unanchor_at' => false
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
        'moon_id' => 'moon_id',
        'onlined_since' => 'onlined_since',
        'reinforced_until' => 'reinforced_until',
        'starbase_id' => 'starbase_id',
        'state' => 'state',
        'system_id' => 'system_id',
        'type_id' => 'type_id',
        'unanchor_at' => 'unanchor_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'moon_id' => 'setMoonId',
        'onlined_since' => 'setOnlinedSince',
        'reinforced_until' => 'setReinforcedUntil',
        'starbase_id' => 'setStarbaseId',
        'state' => 'setState',
        'system_id' => 'setSystemId',
        'type_id' => 'setTypeId',
        'unanchor_at' => 'setUnanchorAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'moon_id' => 'getMoonId',
        'onlined_since' => 'getOnlinedSince',
        'reinforced_until' => 'getReinforcedUntil',
        'starbase_id' => 'getStarbaseId',
        'state' => 'getState',
        'system_id' => 'getSystemId',
        'type_id' => 'getTypeId',
        'unanchor_at' => 'getUnanchorAt'
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

    public const STATE_OFFLINE = 'offline';
    public const STATE_ONLINE = 'online';
    public const STATE_ONLINING = 'onlining';
    public const STATE_REINFORCED = 'reinforced';
    public const STATE_UNANCHORING = 'unanchoring';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_OFFLINE,
            self::STATE_ONLINE,
            self::STATE_ONLINING,
            self::STATE_REINFORCED,
            self::STATE_UNANCHORING,
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
        $this->setIfExists('moon_id', $data ?? [], null);
        $this->setIfExists('onlined_since', $data ?? [], null);
        $this->setIfExists('reinforced_until', $data ?? [], null);
        $this->setIfExists('starbase_id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('system_id', $data ?? [], null);
        $this->setIfExists('type_id', $data ?? [], null);
        $this->setIfExists('unanchor_at', $data ?? [], null);
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

        if ($this->container['starbase_id'] === null) {
            $invalidProperties[] = "'starbase_id' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['system_id'] === null) {
            $invalidProperties[] = "'system_id' can't be null";
        }
        if ($this->container['type_id'] === null) {
            $invalidProperties[] = "'type_id' can't be null";
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
     * Gets moon_id
     *
     * @return int|null
     */
    public function getMoonId()
    {
        return $this->container['moon_id'];
    }

    /**
     * Sets moon_id
     *
     * @param int|null $moon_id The moon this starbase (POS) is anchored on, unanchored POSes do not have this information
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
     * Gets onlined_since
     *
     * @return \DateTime|null
     */
    public function getOnlinedSince()
    {
        return $this->container['onlined_since'];
    }

    /**
     * Sets onlined_since
     *
     * @param \DateTime|null $onlined_since When the POS onlined, for starbases (POSes) in online state
     *
     * @return self
     */
    public function setOnlinedSince($onlined_since)
    {
        if (is_null($onlined_since)) {
            throw new \InvalidArgumentException('non-nullable onlined_since cannot be null');
        }
        $this->container['onlined_since'] = $onlined_since;

        return $this;
    }

    /**
     * Gets reinforced_until
     *
     * @return \DateTime|null
     */
    public function getReinforcedUntil()
    {
        return $this->container['reinforced_until'];
    }

    /**
     * Sets reinforced_until
     *
     * @param \DateTime|null $reinforced_until When the POS will be out of reinforcement, for starbases (POSes) in reinforced state
     *
     * @return self
     */
    public function setReinforcedUntil($reinforced_until)
    {
        if (is_null($reinforced_until)) {
            throw new \InvalidArgumentException('non-nullable reinforced_until cannot be null');
        }
        $this->container['reinforced_until'] = $reinforced_until;

        return $this;
    }

    /**
     * Gets starbase_id
     *
     * @return int
     */
    public function getStarbaseId()
    {
        return $this->container['starbase_id'];
    }

    /**
     * Sets starbase_id
     *
     * @param int $starbase_id Unique ID for this starbase (POS)
     *
     * @return self
     */
    public function setStarbaseId($starbase_id)
    {
        if (is_null($starbase_id)) {
            throw new \InvalidArgumentException('non-nullable starbase_id cannot be null');
        }
        $this->container['starbase_id'] = $starbase_id;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state string
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
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
     * Gets system_id
     *
     * @return int
     */
    public function getSystemId()
    {
        return $this->container['system_id'];
    }

    /**
     * Sets system_id
     *
     * @param int $system_id The solar system this starbase (POS) is in, unanchored POSes have this information
     *
     * @return self
     */
    public function setSystemId($system_id)
    {
        if (is_null($system_id)) {
            throw new \InvalidArgumentException('non-nullable system_id cannot be null');
        }
        $this->container['system_id'] = $system_id;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int $type_id Starbase (POS) type
     *
     * @return self
     */
    public function setTypeId($type_id)
    {
        if (is_null($type_id)) {
            throw new \InvalidArgumentException('non-nullable type_id cannot be null');
        }
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets unanchor_at
     *
     * @return \DateTime|null
     */
    public function getUnanchorAt()
    {
        return $this->container['unanchor_at'];
    }

    /**
     * Sets unanchor_at
     *
     * @param \DateTime|null $unanchor_at When the POS started unanchoring, for starbases (POSes) in unanchoring state
     *
     * @return self
     */
    public function setUnanchorAt($unanchor_at)
    {
        if (is_null($unanchor_at)) {
            throw new \InvalidArgumentException('non-nullable unanchor_at cannot be null');
        }
        $this->container['unanchor_at'] = $unanchor_at;

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


