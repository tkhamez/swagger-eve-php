<?php
/**
 * GetCharactersCharacterIdOk
 *
 * PHP version 7.2
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
 * The version of the OpenAPI document: 1.7.15
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
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
 * GetCharactersCharacterIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetCharactersCharacterIdOk implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alliance_id' => 'int',
        'ancestry_id' => 'int',
        'birthday' => '\DateTime',
        'bloodline_id' => 'int',
        'corporation_id' => 'int',
        'description' => 'string',
        'faction_id' => 'int',
        'gender' => 'string',
        'name' => 'string',
        'race_id' => 'int',
        'security_status' => 'float',
        'title' => 'string'
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
        'ancestry_id' => 'int32',
        'birthday' => 'date-time',
        'bloodline_id' => 'int32',
        'corporation_id' => 'int32',
        'description' => null,
        'faction_id' => 'int32',
        'gender' => null,
        'name' => null,
        'race_id' => 'int32',
        'security_status' => 'float',
        'title' => null
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
        'alliance_id' => 'alliance_id',
        'ancestry_id' => 'ancestry_id',
        'birthday' => 'birthday',
        'bloodline_id' => 'bloodline_id',
        'corporation_id' => 'corporation_id',
        'description' => 'description',
        'faction_id' => 'faction_id',
        'gender' => 'gender',
        'name' => 'name',
        'race_id' => 'race_id',
        'security_status' => 'security_status',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alliance_id' => 'setAllianceId',
        'ancestry_id' => 'setAncestryId',
        'birthday' => 'setBirthday',
        'bloodline_id' => 'setBloodlineId',
        'corporation_id' => 'setCorporationId',
        'description' => 'setDescription',
        'faction_id' => 'setFactionId',
        'gender' => 'setGender',
        'name' => 'setName',
        'race_id' => 'setRaceId',
        'security_status' => 'setSecurityStatus',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alliance_id' => 'getAllianceId',
        'ancestry_id' => 'getAncestryId',
        'birthday' => 'getBirthday',
        'bloodline_id' => 'getBloodlineId',
        'corporation_id' => 'getCorporationId',
        'description' => 'getDescription',
        'faction_id' => 'getFactionId',
        'gender' => 'getGender',
        'name' => 'getName',
        'race_id' => 'getRaceId',
        'security_status' => 'getSecurityStatus',
        'title' => 'getTitle'
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

    const GENDER_FEMALE = 'female';
    const GENDER_MALE = 'male';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_FEMALE,
            self::GENDER_MALE,
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
        $this->container['alliance_id'] = $data['alliance_id'] ?? null;
        $this->container['ancestry_id'] = $data['ancestry_id'] ?? null;
        $this->container['birthday'] = $data['birthday'] ?? null;
        $this->container['bloodline_id'] = $data['bloodline_id'] ?? null;
        $this->container['corporation_id'] = $data['corporation_id'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['faction_id'] = $data['faction_id'] ?? null;
        $this->container['gender'] = $data['gender'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['race_id'] = $data['race_id'] ?? null;
        $this->container['security_status'] = $data['security_status'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['birthday'] === null) {
            $invalidProperties[] = "'birthday' can't be null";
        }
        if ($this->container['bloodline_id'] === null) {
            $invalidProperties[] = "'bloodline_id' can't be null";
        }
        if ($this->container['corporation_id'] === null) {
            $invalidProperties[] = "'corporation_id' can't be null";
        }
        if ($this->container['gender'] === null) {
            $invalidProperties[] = "'gender' can't be null";
        }
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($this->container['gender']) && !in_array($this->container['gender'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'gender', must be one of '%s'",
                $this->container['gender'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['race_id'] === null) {
            $invalidProperties[] = "'race_id' can't be null";
        }
        if (!is_null($this->container['security_status']) && ($this->container['security_status'] > 1E+1)) {
            $invalidProperties[] = "invalid value for 'security_status', must be smaller than or equal to 1E+1.";
        }

        if (!is_null($this->container['security_status']) && ($this->container['security_status'] < -1E+1)) {
            $invalidProperties[] = "invalid value for 'security_status', must be bigger than or equal to -1E+1.";
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
     * @param int|null $alliance_id The character's alliance ID
     *
     * @return self
     */
    public function setAllianceId($alliance_id)
    {
        $this->container['alliance_id'] = $alliance_id;

        return $this;
    }

    /**
     * Gets ancestry_id
     *
     * @return int|null
     */
    public function getAncestryId()
    {
        return $this->container['ancestry_id'];
    }

    /**
     * Sets ancestry_id
     *
     * @param int|null $ancestry_id ancestry_id integer
     *
     * @return self
     */
    public function setAncestryId($ancestry_id)
    {
        $this->container['ancestry_id'] = $ancestry_id;

        return $this;
    }

    /**
     * Gets birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->container['birthday'];
    }

    /**
     * Sets birthday
     *
     * @param \DateTime $birthday Creation date of the character
     *
     * @return self
     */
    public function setBirthday($birthday)
    {
        $this->container['birthday'] = $birthday;

        return $this;
    }

    /**
     * Gets bloodline_id
     *
     * @return int
     */
    public function getBloodlineId()
    {
        return $this->container['bloodline_id'];
    }

    /**
     * Sets bloodline_id
     *
     * @param int $bloodline_id bloodline_id integer
     *
     * @return self
     */
    public function setBloodlineId($bloodline_id)
    {
        $this->container['bloodline_id'] = $bloodline_id;

        return $this;
    }

    /**
     * Gets corporation_id
     *
     * @return int
     */
    public function getCorporationId()
    {
        return $this->container['corporation_id'];
    }

    /**
     * Sets corporation_id
     *
     * @param int $corporation_id The character's corporation ID
     *
     * @return self
     */
    public function setCorporationId($corporation_id)
    {
        $this->container['corporation_id'] = $corporation_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description string
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets faction_id
     *
     * @return int|null
     */
    public function getFactionId()
    {
        return $this->container['faction_id'];
    }

    /**
     * Sets faction_id
     *
     * @param int|null $faction_id ID of the faction the character is fighting for, if the character is enlisted in Factional Warfare
     *
     * @return self
     */
    public function setFactionId($faction_id)
    {
        $this->container['faction_id'] = $faction_id;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender gender string
     *
     * @return self
     */
    public function setGender($gender)
    {
        /*$allowedValues = $this->getGenderAllowableValues();
        if (!in_array($gender, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'gender', must be one of '%s'",
                    $gender,
                    implode("', '", $allowedValues)
                )
            );
        }*/
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name string
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets race_id
     *
     * @return int
     */
    public function getRaceId()
    {
        return $this->container['race_id'];
    }

    /**
     * Sets race_id
     *
     * @param int $race_id race_id integer
     *
     * @return self
     */
    public function setRaceId($race_id)
    {
        $this->container['race_id'] = $race_id;

        return $this;
    }

    /**
     * Gets security_status
     *
     * @return float|null
     */
    public function getSecurityStatus()
    {
        return $this->container['security_status'];
    }

    /**
     * Sets security_status
     *
     * @param float|null $security_status security_status number
     *
     * @return self
     */
    public function setSecurityStatus($security_status)
    {

        if (!is_null($security_status) && ($security_status > 1E+1)) {
            throw new \InvalidArgumentException('invalid value for $security_status when calling GetCharactersCharacterIdOk., must be smaller than or equal to 1E+1.');
        }
        if (!is_null($security_status) && ($security_status < -1E+1)) {
            throw new \InvalidArgumentException('invalid value for $security_status when calling GetCharactersCharacterIdOk., must be bigger than or equal to -1E+1.');
        }

        $this->container['security_status'] = $security_status;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The individual title of the character
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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


