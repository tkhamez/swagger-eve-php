<?php
/**
 * GetCharactersCharacterIdSkillqueue200Ok
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
 * GetCharactersCharacterIdSkillqueue200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetCharactersCharacterIdSkillqueue200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_skillqueue_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'finish_date' => '\DateTime',
        'finished_level' => 'int',
        'level_end_sp' => 'int',
        'level_start_sp' => 'int',
        'queue_position' => 'int',
        'skill_id' => 'int',
        'start_date' => '\DateTime',
        'training_start_sp' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'finish_date' => 'date-time',
        'finished_level' => 'int32',
        'level_end_sp' => 'int32',
        'level_start_sp' => 'int32',
        'queue_position' => 'int32',
        'skill_id' => 'int32',
        'start_date' => 'date-time',
        'training_start_sp' => 'int32'
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
        'finish_date' => 'finish_date',
        'finished_level' => 'finished_level',
        'level_end_sp' => 'level_end_sp',
        'level_start_sp' => 'level_start_sp',
        'queue_position' => 'queue_position',
        'skill_id' => 'skill_id',
        'start_date' => 'start_date',
        'training_start_sp' => 'training_start_sp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'finish_date' => 'setFinishDate',
        'finished_level' => 'setFinishedLevel',
        'level_end_sp' => 'setLevelEndSp',
        'level_start_sp' => 'setLevelStartSp',
        'queue_position' => 'setQueuePosition',
        'skill_id' => 'setSkillId',
        'start_date' => 'setStartDate',
        'training_start_sp' => 'setTrainingStartSp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'finish_date' => 'getFinishDate',
        'finished_level' => 'getFinishedLevel',
        'level_end_sp' => 'getLevelEndSp',
        'level_start_sp' => 'getLevelStartSp',
        'queue_position' => 'getQueuePosition',
        'skill_id' => 'getSkillId',
        'start_date' => 'getStartDate',
        'training_start_sp' => 'getTrainingStartSp'
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
        $this->container['finish_date'] = isset($data['finish_date']) ? $data['finish_date'] : null;
        $this->container['finished_level'] = isset($data['finished_level']) ? $data['finished_level'] : null;
        $this->container['level_end_sp'] = isset($data['level_end_sp']) ? $data['level_end_sp'] : null;
        $this->container['level_start_sp'] = isset($data['level_start_sp']) ? $data['level_start_sp'] : null;
        $this->container['queue_position'] = isset($data['queue_position']) ? $data['queue_position'] : null;
        $this->container['skill_id'] = isset($data['skill_id']) ? $data['skill_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['training_start_sp'] = isset($data['training_start_sp']) ? $data['training_start_sp'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['finished_level'] === null) {
            $invalidProperties[] = "'finished_level' can't be null";
        }
        if (($this->container['finished_level'] > 5)) {
            $invalidProperties[] = "invalid value for 'finished_level', must be smaller than or equal to 5.";
        }

        if (($this->container['finished_level'] < 0)) {
            $invalidProperties[] = "invalid value for 'finished_level', must be bigger than or equal to 0.";
        }

        if ($this->container['queue_position'] === null) {
            $invalidProperties[] = "'queue_position' can't be null";
        }
        if ($this->container['skill_id'] === null) {
            $invalidProperties[] = "'skill_id' can't be null";
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
     * Gets finish_date
     *
     * @return \DateTime|null
     */
    public function getFinishDate()
    {
        return $this->container['finish_date'];
    }

    /**
     * Sets finish_date
     *
     * @param \DateTime|null $finish_date Date on which training of the skill will complete. Omitted if the skill queue is paused.
     *
     * @return $this
     */
    public function setFinishDate($finish_date)
    {
        $this->container['finish_date'] = $finish_date;

        return $this;
    }

    /**
     * Gets finished_level
     *
     * @return int
     */
    public function getFinishedLevel()
    {
        return $this->container['finished_level'];
    }

    /**
     * Sets finished_level
     *
     * @param int $finished_level finished_level integer
     *
     * @return $this
     */
    public function setFinishedLevel($finished_level)
    {

        if (($finished_level > 5)) {
            throw new \InvalidArgumentException('invalid value for $finished_level when calling GetCharactersCharacterIdSkillqueue200Ok., must be smaller than or equal to 5.');
        }
        if (($finished_level < 0)) {
            throw new \InvalidArgumentException('invalid value for $finished_level when calling GetCharactersCharacterIdSkillqueue200Ok., must be bigger than or equal to 0.');
        }

        $this->container['finished_level'] = $finished_level;

        return $this;
    }

    /**
     * Gets level_end_sp
     *
     * @return int|null
     */
    public function getLevelEndSp()
    {
        return $this->container['level_end_sp'];
    }

    /**
     * Sets level_end_sp
     *
     * @param int|null $level_end_sp level_end_sp integer
     *
     * @return $this
     */
    public function setLevelEndSp($level_end_sp)
    {
        $this->container['level_end_sp'] = $level_end_sp;

        return $this;
    }

    /**
     * Gets level_start_sp
     *
     * @return int|null
     */
    public function getLevelStartSp()
    {
        return $this->container['level_start_sp'];
    }

    /**
     * Sets level_start_sp
     *
     * @param int|null $level_start_sp Amount of SP that was in the skill when it started training it's current level. Used to calculate % of current level complete.
     *
     * @return $this
     */
    public function setLevelStartSp($level_start_sp)
    {
        $this->container['level_start_sp'] = $level_start_sp;

        return $this;
    }

    /**
     * Gets queue_position
     *
     * @return int
     */
    public function getQueuePosition()
    {
        return $this->container['queue_position'];
    }

    /**
     * Sets queue_position
     *
     * @param int $queue_position queue_position integer
     *
     * @return $this
     */
    public function setQueuePosition($queue_position)
    {
        $this->container['queue_position'] = $queue_position;

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
     * @return $this
     */
    public function setSkillId($skill_id)
    {
        $this->container['skill_id'] = $skill_id;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date start_date string
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets training_start_sp
     *
     * @return int|null
     */
    public function getTrainingStartSp()
    {
        return $this->container['training_start_sp'];
    }

    /**
     * Sets training_start_sp
     *
     * @param int|null $training_start_sp training_start_sp integer
     *
     * @return $this
     */
    public function setTrainingStartSp($training_start_sp)
    {
        $this->container['training_start_sp'] = $training_start_sp;

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


