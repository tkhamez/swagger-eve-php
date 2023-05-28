<?php
/**
 * GetFleetsFleetIdOk
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
 * OpenAPI Generator version: 6.6.0
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
 * GetFleetsFleetIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetFleetsFleetIdOk implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_fleets_fleet_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_free_move' => 'bool',
        'is_registered' => 'bool',
        'is_voice_enabled' => 'bool',
        'motd' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_free_move' => null,
        'is_registered' => null,
        'is_voice_enabled' => null,
        'motd' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'is_free_move' => false,
		'is_registered' => false,
		'is_voice_enabled' => false,
		'motd' => false
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
        'is_free_move' => 'is_free_move',
        'is_registered' => 'is_registered',
        'is_voice_enabled' => 'is_voice_enabled',
        'motd' => 'motd'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_free_move' => 'setIsFreeMove',
        'is_registered' => 'setIsRegistered',
        'is_voice_enabled' => 'setIsVoiceEnabled',
        'motd' => 'setMotd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_free_move' => 'getIsFreeMove',
        'is_registered' => 'getIsRegistered',
        'is_voice_enabled' => 'getIsVoiceEnabled',
        'motd' => 'getMotd'
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
        $this->setIfExists('is_free_move', $data ?? [], null);
        $this->setIfExists('is_registered', $data ?? [], null);
        $this->setIfExists('is_voice_enabled', $data ?? [], null);
        $this->setIfExists('motd', $data ?? [], null);
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

        if ($this->container['is_free_move'] === null) {
            $invalidProperties[] = "'is_free_move' can't be null";
        }
        if ($this->container['is_registered'] === null) {
            $invalidProperties[] = "'is_registered' can't be null";
        }
        if ($this->container['is_voice_enabled'] === null) {
            $invalidProperties[] = "'is_voice_enabled' can't be null";
        }
        if ($this->container['motd'] === null) {
            $invalidProperties[] = "'motd' can't be null";
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
     * Gets is_free_move
     *
     * @return bool
     */
    public function getIsFreeMove()
    {
        return $this->container['is_free_move'];
    }

    /**
     * Sets is_free_move
     *
     * @param bool $is_free_move Is free-move enabled
     *
     * @return self
     */
    public function setIsFreeMove($is_free_move)
    {
        if (is_null($is_free_move)) {
            throw new \InvalidArgumentException('non-nullable is_free_move cannot be null');
        }
        $this->container['is_free_move'] = $is_free_move;

        return $this;
    }

    /**
     * Gets is_registered
     *
     * @return bool
     */
    public function getIsRegistered()
    {
        return $this->container['is_registered'];
    }

    /**
     * Sets is_registered
     *
     * @param bool $is_registered Does the fleet have an active fleet advertisement
     *
     * @return self
     */
    public function setIsRegistered($is_registered)
    {
        if (is_null($is_registered)) {
            throw new \InvalidArgumentException('non-nullable is_registered cannot be null');
        }
        $this->container['is_registered'] = $is_registered;

        return $this;
    }

    /**
     * Gets is_voice_enabled
     *
     * @return bool
     */
    public function getIsVoiceEnabled()
    {
        return $this->container['is_voice_enabled'];
    }

    /**
     * Sets is_voice_enabled
     *
     * @param bool $is_voice_enabled Is EVE Voice enabled
     *
     * @return self
     */
    public function setIsVoiceEnabled($is_voice_enabled)
    {
        if (is_null($is_voice_enabled)) {
            throw new \InvalidArgumentException('non-nullable is_voice_enabled cannot be null');
        }
        $this->container['is_voice_enabled'] = $is_voice_enabled;

        return $this;
    }

    /**
     * Gets motd
     *
     * @return string
     */
    public function getMotd()
    {
        return $this->container['motd'];
    }

    /**
     * Sets motd
     *
     * @param string $motd Fleet MOTD in CCP flavoured HTML
     *
     * @return self
     */
    public function setMotd($motd)
    {
        if (is_null($motd)) {
            throw new \InvalidArgumentException('non-nullable motd cannot be null');
        }
        $this->container['motd'] = $motd;

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


