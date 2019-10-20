<?php
/**
 * GetCharactersCharacterIdFittingsItem
 *
 * PHP version 5
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
 * The version of the OpenAPI document: 0.8.9
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
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
 * GetCharactersCharacterIdFittingsItem Class Doc Comment
 *
 * @category Class
 * @description item object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetCharactersCharacterIdFittingsItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_fittings_item';

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

    const FLAG_CARGO = 'Cargo';
    const FLAG_DRONE_BAY = 'DroneBay';
    const FLAG_FIGHTER_BAY = 'FighterBay';
    const FLAG_HI_SLOT0 = 'HiSlot0';
    const FLAG_HI_SLOT1 = 'HiSlot1';
    const FLAG_HI_SLOT2 = 'HiSlot2';
    const FLAG_HI_SLOT3 = 'HiSlot3';
    const FLAG_HI_SLOT4 = 'HiSlot4';
    const FLAG_HI_SLOT5 = 'HiSlot5';
    const FLAG_HI_SLOT6 = 'HiSlot6';
    const FLAG_HI_SLOT7 = 'HiSlot7';
    const FLAG_INVALID = 'Invalid';
    const FLAG_LO_SLOT0 = 'LoSlot0';
    const FLAG_LO_SLOT1 = 'LoSlot1';
    const FLAG_LO_SLOT2 = 'LoSlot2';
    const FLAG_LO_SLOT3 = 'LoSlot3';
    const FLAG_LO_SLOT4 = 'LoSlot4';
    const FLAG_LO_SLOT5 = 'LoSlot5';
    const FLAG_LO_SLOT6 = 'LoSlot6';
    const FLAG_LO_SLOT7 = 'LoSlot7';
    const FLAG_MED_SLOT0 = 'MedSlot0';
    const FLAG_MED_SLOT1 = 'MedSlot1';
    const FLAG_MED_SLOT2 = 'MedSlot2';
    const FLAG_MED_SLOT3 = 'MedSlot3';
    const FLAG_MED_SLOT4 = 'MedSlot4';
    const FLAG_MED_SLOT5 = 'MedSlot5';
    const FLAG_MED_SLOT6 = 'MedSlot6';
    const FLAG_MED_SLOT7 = 'MedSlot7';
    const FLAG_RIG_SLOT0 = 'RigSlot0';
    const FLAG_RIG_SLOT1 = 'RigSlot1';
    const FLAG_RIG_SLOT2 = 'RigSlot2';
    const FLAG_SERVICE_SLOT0 = 'ServiceSlot0';
    const FLAG_SERVICE_SLOT1 = 'ServiceSlot1';
    const FLAG_SERVICE_SLOT2 = 'ServiceSlot2';
    const FLAG_SERVICE_SLOT3 = 'ServiceSlot3';
    const FLAG_SERVICE_SLOT4 = 'ServiceSlot4';
    const FLAG_SERVICE_SLOT5 = 'ServiceSlot5';
    const FLAG_SERVICE_SLOT6 = 'ServiceSlot6';
    const FLAG_SERVICE_SLOT7 = 'ServiceSlot7';
    const FLAG_SUB_SYSTEM_SLOT0 = 'SubSystemSlot0';
    const FLAG_SUB_SYSTEM_SLOT1 = 'SubSystemSlot1';
    const FLAG_SUB_SYSTEM_SLOT2 = 'SubSystemSlot2';
    const FLAG_SUB_SYSTEM_SLOT3 = 'SubSystemSlot3';
    

    
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
        $this->container['flag'] = isset($data['flag']) ? $data['flag'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
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
                "invalid value for 'flag', must be one of '%s'",
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
     * @param string $flag flag string
     *
     * @return $this
     */
    public function setFlag($flag)
    {
        $allowedValues = $this->getFlagAllowableValues();
        if (!in_array($flag, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'flag', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
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
     * @return $this
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
     * @return $this
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
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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


