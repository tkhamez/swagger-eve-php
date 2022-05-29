<?php
/**
 * PostCharactersCharacterIdFittingsItem
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
 * The version of the OpenAPI document: 1.11
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
 * PostCharactersCharacterIdFittingsItem Class Doc Comment
 *
 * @category Class
 * @description item object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PostCharactersCharacterIdFittingsItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'post_characters_character_id_fittings_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'flag' => 'string',
        'quantity' => 'int',
        'type_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'flag' => null,
        'quantity' => 'int32',
        'type_id' => 'int32'
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
        'flag' => 'flag',
        'quantity' => 'quantity',
        'type_id' => 'type_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'flag' => 'setFlag',
        'quantity' => 'setQuantity',
        'type_id' => 'setTypeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'flag' => 'getFlag',
        'quantity' => 'getQuantity',
        'type_id' => 'getTypeId'
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

    public const FLAG_CARGO = 'Cargo';
    public const FLAG_DRONE_BAY = 'DroneBay';
    public const FLAG_FIGHTER_BAY = 'FighterBay';
    public const FLAG_HI_SLOT0 = 'HiSlot0';
    public const FLAG_HI_SLOT1 = 'HiSlot1';
    public const FLAG_HI_SLOT2 = 'HiSlot2';
    public const FLAG_HI_SLOT3 = 'HiSlot3';
    public const FLAG_HI_SLOT4 = 'HiSlot4';
    public const FLAG_HI_SLOT5 = 'HiSlot5';
    public const FLAG_HI_SLOT6 = 'HiSlot6';
    public const FLAG_HI_SLOT7 = 'HiSlot7';
    public const FLAG_INVALID = 'Invalid';
    public const FLAG_LO_SLOT0 = 'LoSlot0';
    public const FLAG_LO_SLOT1 = 'LoSlot1';
    public const FLAG_LO_SLOT2 = 'LoSlot2';
    public const FLAG_LO_SLOT3 = 'LoSlot3';
    public const FLAG_LO_SLOT4 = 'LoSlot4';
    public const FLAG_LO_SLOT5 = 'LoSlot5';
    public const FLAG_LO_SLOT6 = 'LoSlot6';
    public const FLAG_LO_SLOT7 = 'LoSlot7';
    public const FLAG_MED_SLOT0 = 'MedSlot0';
    public const FLAG_MED_SLOT1 = 'MedSlot1';
    public const FLAG_MED_SLOT2 = 'MedSlot2';
    public const FLAG_MED_SLOT3 = 'MedSlot3';
    public const FLAG_MED_SLOT4 = 'MedSlot4';
    public const FLAG_MED_SLOT5 = 'MedSlot5';
    public const FLAG_MED_SLOT6 = 'MedSlot6';
    public const FLAG_MED_SLOT7 = 'MedSlot7';
    public const FLAG_RIG_SLOT0 = 'RigSlot0';
    public const FLAG_RIG_SLOT1 = 'RigSlot1';
    public const FLAG_RIG_SLOT2 = 'RigSlot2';
    public const FLAG_SERVICE_SLOT0 = 'ServiceSlot0';
    public const FLAG_SERVICE_SLOT1 = 'ServiceSlot1';
    public const FLAG_SERVICE_SLOT2 = 'ServiceSlot2';
    public const FLAG_SERVICE_SLOT3 = 'ServiceSlot3';
    public const FLAG_SERVICE_SLOT4 = 'ServiceSlot4';
    public const FLAG_SERVICE_SLOT5 = 'ServiceSlot5';
    public const FLAG_SERVICE_SLOT6 = 'ServiceSlot6';
    public const FLAG_SERVICE_SLOT7 = 'ServiceSlot7';
    public const FLAG_SUB_SYSTEM_SLOT0 = 'SubSystemSlot0';
    public const FLAG_SUB_SYSTEM_SLOT1 = 'SubSystemSlot1';
    public const FLAG_SUB_SYSTEM_SLOT2 = 'SubSystemSlot2';
    public const FLAG_SUB_SYSTEM_SLOT3 = 'SubSystemSlot3';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFlagAllowableValues()
    {
        return [
            self::FLAG_CARGO,
            self::FLAG_DRONE_BAY,
            self::FLAG_FIGHTER_BAY,
            self::FLAG_HI_SLOT0,
            self::FLAG_HI_SLOT1,
            self::FLAG_HI_SLOT2,
            self::FLAG_HI_SLOT3,
            self::FLAG_HI_SLOT4,
            self::FLAG_HI_SLOT5,
            self::FLAG_HI_SLOT6,
            self::FLAG_HI_SLOT7,
            self::FLAG_INVALID,
            self::FLAG_LO_SLOT0,
            self::FLAG_LO_SLOT1,
            self::FLAG_LO_SLOT2,
            self::FLAG_LO_SLOT3,
            self::FLAG_LO_SLOT4,
            self::FLAG_LO_SLOT5,
            self::FLAG_LO_SLOT6,
            self::FLAG_LO_SLOT7,
            self::FLAG_MED_SLOT0,
            self::FLAG_MED_SLOT1,
            self::FLAG_MED_SLOT2,
            self::FLAG_MED_SLOT3,
            self::FLAG_MED_SLOT4,
            self::FLAG_MED_SLOT5,
            self::FLAG_MED_SLOT6,
            self::FLAG_MED_SLOT7,
            self::FLAG_RIG_SLOT0,
            self::FLAG_RIG_SLOT1,
            self::FLAG_RIG_SLOT2,
            self::FLAG_SERVICE_SLOT0,
            self::FLAG_SERVICE_SLOT1,
            self::FLAG_SERVICE_SLOT2,
            self::FLAG_SERVICE_SLOT3,
            self::FLAG_SERVICE_SLOT4,
            self::FLAG_SERVICE_SLOT5,
            self::FLAG_SERVICE_SLOT6,
            self::FLAG_SERVICE_SLOT7,
            self::FLAG_SUB_SYSTEM_SLOT0,
            self::FLAG_SUB_SYSTEM_SLOT1,
            self::FLAG_SUB_SYSTEM_SLOT2,
            self::FLAG_SUB_SYSTEM_SLOT3,
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
        $this->container['flag'] = $data['flag'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['type_id'] = $data['type_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['flag'] === null) {
            $invalidProperties[] = "'flag' can't be null";
        }
        $allowedValues = $this->getFlagAllowableValues();
        if (!is_null($this->container['flag']) && !in_array($this->container['flag'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'flag', must be one of '%s'",
                $this->container['flag'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
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
     * Gets flag
     *
     * @return string
     */
    public function getFlag()
    {
        return $this->container['flag'];
    }

    /**
     * Sets flag
     *
     * @param string $flag Fitting location for the item. Entries placed in 'Invalid' will be discarded. If this leaves the fitting with nothing, it will cause an error.
     *
     * @return self
     */
    public function setFlag($flag)
    {
        /*$allowedValues = $this->getFlagAllowableValues();
        if (!in_array($flag, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'flag', must be one of '%s'",
                    $flag,
                    implode("', '", $allowedValues)
                )
            );
        }*/
        $this->container['flag'] = $flag;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity integer
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
     * @param int $type_id type_id integer
     *
     * @return self
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

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


