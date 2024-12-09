<?php
/**
 * GetCharactersCharacterIdSkillqueue200Ok
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
 * GetCharactersCharacterIdSkillqueue200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetCharactersCharacterIdSkillqueue200Ok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

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
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
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
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'finish_date' => false,
        'finished_level' => false,
        'level_end_sp' => false,
        'level_start_sp' => false,
        'queue_position' => false,
        'skill_id' => false,
        'start_date' => false,
        'training_start_sp' => false
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
        $this->setIfExists('finish_date', $data ?? [], null);
        $this->setIfExists('finished_level', $data ?? [], null);
        $this->setIfExists('level_end_sp', $data ?? [], null);
        $this->setIfExists('level_start_sp', $data ?? [], null);
        $this->setIfExists('queue_position', $data ?? [], null);
        $this->setIfExists('skill_id', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('training_start_sp', $data ?? [], null);
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
     * @return self
     */
    public function setFinishDate($finish_date)
    {
        if (is_null($finish_date)) {
            throw new \InvalidArgumentException('non-nullable finish_date cannot be null');
        }
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
     * @return self
     */
    public function setFinishedLevel($finished_level)
    {
        if (is_null($finished_level)) {
            throw new \InvalidArgumentException('non-nullable finished_level cannot be null');
        }

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
     * @return self
     */
    public function setLevelEndSp($level_end_sp)
    {
        if (is_null($level_end_sp)) {
            throw new \InvalidArgumentException('non-nullable level_end_sp cannot be null');
        }
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
     * @return self
     */
    public function setLevelStartSp($level_start_sp)
    {
        if (is_null($level_start_sp)) {
            throw new \InvalidArgumentException('non-nullable level_start_sp cannot be null');
        }
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
     * @return self
     */
    public function setQueuePosition($queue_position)
    {
        if (is_null($queue_position)) {
            throw new \InvalidArgumentException('non-nullable queue_position cannot be null');
        }
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
     * @return self
     */
    public function setSkillId($skill_id)
    {
        if (is_null($skill_id)) {
            throw new \InvalidArgumentException('non-nullable skill_id cannot be null');
        }
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
     * @return self
     */
    public function setStartDate($start_date)
    {
        if (is_null($start_date)) {
            throw new \InvalidArgumentException('non-nullable start_date cannot be null');
        }
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
     * @return self
     */
    public function setTrainingStartSp($training_start_sp)
    {
        if (is_null($training_start_sp)) {
            throw new \InvalidArgumentException('non-nullable training_start_sp cannot be null');
        }
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


