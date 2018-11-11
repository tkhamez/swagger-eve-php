<?php
/**
 * GetCharactersCharacterIdStandings200Ok
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client\Eve
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.8.6
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Eve\Model;

use \ArrayAccess;
use \Swagger\Client\Eve\ObjectSerializer;

/**
 * GetCharactersCharacterIdStandings200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdStandings200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_standings_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'from_id' => 'int',
        'from_type' => 'string',
        'standing' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'from_id' => 'int32',
        'from_type' => null,
        'standing' => 'float'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'from_id' => 'from_id',
        'from_type' => 'from_type',
        'standing' => 'standing'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'from_id' => 'setFromId',
        'from_type' => 'setFromType',
        'standing' => 'setStanding'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'from_id' => 'getFromId',
        'from_type' => 'getFromType',
        'standing' => 'getStanding'
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
        return self::$swaggerModelName;
    }

    const FROM_TYPE_AGENT = 'agent';
    const FROM_TYPE_NPC_CORP = 'npc_corp';
    const FROM_TYPE_FACTION = 'faction';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFromTypeAllowableValues()
    {
        return [
            self::FROM_TYPE_AGENT,
            self::FROM_TYPE_NPC_CORP,
            self::FROM_TYPE_FACTION,
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
        $this->container['from_id'] = isset($data['from_id']) ? $data['from_id'] : null;
        $this->container['from_type'] = isset($data['from_type']) ? $data['from_type'] : null;
        $this->container['standing'] = isset($data['standing']) ? $data['standing'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['from_id'] === null) {
            $invalidProperties[] = "'from_id' can't be null";
        }
        if ($this->container['from_type'] === null) {
            $invalidProperties[] = "'from_type' can't be null";
        }
        $allowedValues = $this->getFromTypeAllowableValues();
        if (!in_array($this->container['from_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'from_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['standing'] === null) {
            $invalidProperties[] = "'standing' can't be null";
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

        if ($this->container['from_id'] === null) {
            return false;
        }
        if ($this->container['from_type'] === null) {
            return false;
        }
        $allowedValues = $this->getFromTypeAllowableValues();
        if (!in_array($this->container['from_type'], $allowedValues)) {
            return false;
        }
        if ($this->container['standing'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets from_id
     *
     * @return int
     */
    public function getFromId()
    {
        return $this->container['from_id'];
    }

    /**
     * Sets from_id
     *
     * @param int $from_id from_id integer
     *
     * @return $this
     */
    public function setFromId($from_id)
    {
        $this->container['from_id'] = $from_id;

        return $this;
    }

    /**
     * Gets from_type
     *
     * @return string
     */
    public function getFromType()
    {
        return $this->container['from_type'];
    }

    /**
     * Sets from_type
     *
     * @param string $from_type from_type string
     *
     * @return $this
     */
    public function setFromType($from_type)
    {
        $allowedValues = $this->getFromTypeAllowableValues();
        if (!in_array($from_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'from_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['from_type'] = $from_type;

        return $this;
    }

    /**
     * Gets standing
     *
     * @return float
     */
    public function getStanding()
    {
        return $this->container['standing'];
    }

    /**
     * Sets standing
     *
     * @param float $standing standing number
     *
     * @return $this
     */
    public function setStanding($standing)
    {
        $this->container['standing'] = $standing;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


