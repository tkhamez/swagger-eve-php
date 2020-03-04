<?php
/**
 * GetCharactersCharacterIdAttributesOk
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
 * The version of the OpenAPI document: 1.3.8
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
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
 * GetCharactersCharacterIdAttributesOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetCharactersCharacterIdAttributesOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_attributes_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accrued_remap_cooldown_date' => '\DateTime',
        'bonus_remaps' => 'int',
        'charisma' => 'int',
        'intelligence' => 'int',
        'last_remap_date' => '\DateTime',
        'memory' => 'int',
        'perception' => 'int',
        'willpower' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'accrued_remap_cooldown_date' => 'date-time',
        'bonus_remaps' => 'int32',
        'charisma' => 'int32',
        'intelligence' => 'int32',
        'last_remap_date' => 'date-time',
        'memory' => 'int32',
        'perception' => 'int32',
        'willpower' => 'int32'
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
        'accrued_remap_cooldown_date' => 'accrued_remap_cooldown_date',
        'bonus_remaps' => 'bonus_remaps',
        'charisma' => 'charisma',
        'intelligence' => 'intelligence',
        'last_remap_date' => 'last_remap_date',
        'memory' => 'memory',
        'perception' => 'perception',
        'willpower' => 'willpower'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accrued_remap_cooldown_date' => 'setAccruedRemapCooldownDate',
        'bonus_remaps' => 'setBonusRemaps',
        'charisma' => 'setCharisma',
        'intelligence' => 'setIntelligence',
        'last_remap_date' => 'setLastRemapDate',
        'memory' => 'setMemory',
        'perception' => 'setPerception',
        'willpower' => 'setWillpower'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accrued_remap_cooldown_date' => 'getAccruedRemapCooldownDate',
        'bonus_remaps' => 'getBonusRemaps',
        'charisma' => 'getCharisma',
        'intelligence' => 'getIntelligence',
        'last_remap_date' => 'getLastRemapDate',
        'memory' => 'getMemory',
        'perception' => 'getPerception',
        'willpower' => 'getWillpower'
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
        $this->container['accrued_remap_cooldown_date'] = isset($data['accrued_remap_cooldown_date']) ? $data['accrued_remap_cooldown_date'] : null;
        $this->container['bonus_remaps'] = isset($data['bonus_remaps']) ? $data['bonus_remaps'] : null;
        $this->container['charisma'] = isset($data['charisma']) ? $data['charisma'] : null;
        $this->container['intelligence'] = isset($data['intelligence']) ? $data['intelligence'] : null;
        $this->container['last_remap_date'] = isset($data['last_remap_date']) ? $data['last_remap_date'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['perception'] = isset($data['perception']) ? $data['perception'] : null;
        $this->container['willpower'] = isset($data['willpower']) ? $data['willpower'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['charisma'] === null) {
            $invalidProperties[] = "'charisma' can't be null";
        }
        if ($this->container['intelligence'] === null) {
            $invalidProperties[] = "'intelligence' can't be null";
        }
        if ($this->container['memory'] === null) {
            $invalidProperties[] = "'memory' can't be null";
        }
        if ($this->container['perception'] === null) {
            $invalidProperties[] = "'perception' can't be null";
        }
        if ($this->container['willpower'] === null) {
            $invalidProperties[] = "'willpower' can't be null";
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
     * Gets accrued_remap_cooldown_date
     *
     * @return \DateTime|null
     */
    public function getAccruedRemapCooldownDate()
    {
        return $this->container['accrued_remap_cooldown_date'];
    }

    /**
     * Sets accrued_remap_cooldown_date
     *
     * @param \DateTime|null $accrued_remap_cooldown_date Neural remapping cooldown after a character uses remap accrued over time
     *
     * @return $this
     */
    public function setAccruedRemapCooldownDate($accrued_remap_cooldown_date)
    {
        $this->container['accrued_remap_cooldown_date'] = $accrued_remap_cooldown_date;

        return $this;
    }

    /**
     * Gets bonus_remaps
     *
     * @return int|null
     */
    public function getBonusRemaps()
    {
        return $this->container['bonus_remaps'];
    }

    /**
     * Sets bonus_remaps
     *
     * @param int|null $bonus_remaps Number of available bonus character neural remaps
     *
     * @return $this
     */
    public function setBonusRemaps($bonus_remaps)
    {
        $this->container['bonus_remaps'] = $bonus_remaps;

        return $this;
    }

    /**
     * Gets charisma
     *
     * @return int
     */
    public function getCharisma()
    {
        return $this->container['charisma'];
    }

    /**
     * Sets charisma
     *
     * @param int $charisma charisma integer
     *
     * @return $this
     */
    public function setCharisma($charisma)
    {
        $this->container['charisma'] = $charisma;

        return $this;
    }

    /**
     * Gets intelligence
     *
     * @return int
     */
    public function getIntelligence()
    {
        return $this->container['intelligence'];
    }

    /**
     * Sets intelligence
     *
     * @param int $intelligence intelligence integer
     *
     * @return $this
     */
    public function setIntelligence($intelligence)
    {
        $this->container['intelligence'] = $intelligence;

        return $this;
    }

    /**
     * Gets last_remap_date
     *
     * @return \DateTime|null
     */
    public function getLastRemapDate()
    {
        return $this->container['last_remap_date'];
    }

    /**
     * Sets last_remap_date
     *
     * @param \DateTime|null $last_remap_date Datetime of last neural remap, including usage of bonus remaps
     *
     * @return $this
     */
    public function setLastRemapDate($last_remap_date)
    {
        $this->container['last_remap_date'] = $last_remap_date;

        return $this;
    }

    /**
     * Gets memory
     *
     * @return int
     */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
     * Sets memory
     *
     * @param int $memory memory integer
     *
     * @return $this
     */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;

        return $this;
    }

    /**
     * Gets perception
     *
     * @return int
     */
    public function getPerception()
    {
        return $this->container['perception'];
    }

    /**
     * Sets perception
     *
     * @param int $perception perception integer
     *
     * @return $this
     */
    public function setPerception($perception)
    {
        $this->container['perception'] = $perception;

        return $this;
    }

    /**
     * Gets willpower
     *
     * @return int
     */
    public function getWillpower()
    {
        return $this->container['willpower'];
    }

    /**
     * Sets willpower
     *
     * @param int $willpower willpower integer
     *
     * @return $this
     */
    public function setWillpower($willpower)
    {
        $this->container['willpower'] = $willpower;

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


