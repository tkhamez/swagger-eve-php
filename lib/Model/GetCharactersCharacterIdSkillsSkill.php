<?php
/**
 * GetCharactersCharacterIdSkillsSkill
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
 * The version of the OpenAPI document: 1.10.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
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
 * GetCharactersCharacterIdSkillsSkill Class Doc Comment
 *
 * @category Class
 * @description skill object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetCharactersCharacterIdSkillsSkill implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_skills_skill';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active_skill_level' => 'int',
        'skill_id' => 'int',
        'skillpoints_in_skill' => 'int',
        'trained_skill_level' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'active_skill_level' => 'int32',
        'skill_id' => 'int32',
        'skillpoints_in_skill' => 'int64',
        'trained_skill_level' => 'int32'
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
        'active_skill_level' => 'active_skill_level',
        'skill_id' => 'skill_id',
        'skillpoints_in_skill' => 'skillpoints_in_skill',
        'trained_skill_level' => 'trained_skill_level'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active_skill_level' => 'setActiveSkillLevel',
        'skill_id' => 'setSkillId',
        'skillpoints_in_skill' => 'setSkillpointsInSkill',
        'trained_skill_level' => 'setTrainedSkillLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active_skill_level' => 'getActiveSkillLevel',
        'skill_id' => 'getSkillId',
        'skillpoints_in_skill' => 'getSkillpointsInSkill',
        'trained_skill_level' => 'getTrainedSkillLevel'
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
        $this->container['active_skill_level'] = $data['active_skill_level'] ?? null;
        $this->container['skill_id'] = $data['skill_id'] ?? null;
        $this->container['skillpoints_in_skill'] = $data['skillpoints_in_skill'] ?? null;
        $this->container['trained_skill_level'] = $data['trained_skill_level'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['active_skill_level'] === null) {
            $invalidProperties[] = "'active_skill_level' can't be null";
        }
        if ($this->container['skill_id'] === null) {
            $invalidProperties[] = "'skill_id' can't be null";
        }
        if ($this->container['skillpoints_in_skill'] === null) {
            $invalidProperties[] = "'skillpoints_in_skill' can't be null";
        }
        if ($this->container['trained_skill_level'] === null) {
            $invalidProperties[] = "'trained_skill_level' can't be null";
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
     * Gets active_skill_level
     *
     * @return int
     */
    public function getActiveSkillLevel()
    {
        return $this->container['active_skill_level'];
    }

    /**
     * Sets active_skill_level
     *
     * @param int $active_skill_level active_skill_level integer
     *
     * @return self
     */
    public function setActiveSkillLevel($active_skill_level)
    {
        $this->container['active_skill_level'] = $active_skill_level;

        return $this;
    }

    /**
     * Gets skill_id
     *
     * @return int
     */
    public function getSkillId()
    {
        return $this->container['skill_id'];
    }

    /**
     * Sets skill_id
     *
     * @param int $skill_id skill_id integer
     *
     * @return self
     */
    public function setSkillId($skill_id)
    {
        $this->container['skill_id'] = $skill_id;

        return $this;
    }

    /**
     * Gets skillpoints_in_skill
     *
     * @return int
     */
    public function getSkillpointsInSkill()
    {
        return $this->container['skillpoints_in_skill'];
    }

    /**
     * Sets skillpoints_in_skill
     *
     * @param int $skillpoints_in_skill skillpoints_in_skill integer
     *
     * @return self
     */
    public function setSkillpointsInSkill($skillpoints_in_skill)
    {
        $this->container['skillpoints_in_skill'] = $skillpoints_in_skill;

        return $this;
    }

    /**
     * Gets trained_skill_level
     *
     * @return int
     */
    public function getTrainedSkillLevel()
    {
        return $this->container['trained_skill_level'];
    }

    /**
     * Sets trained_skill_level
     *
     * @param int $trained_skill_level trained_skill_level integer
     *
     * @return self
     */
    public function setTrainedSkillLevel($trained_skill_level)
    {
        $this->container['trained_skill_level'] = $trained_skill_level;

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


