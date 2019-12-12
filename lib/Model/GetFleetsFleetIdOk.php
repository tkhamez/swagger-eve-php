<?php
/**
 * GetFleetsFleetIdOk
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
 * The version of the OpenAPI document: 1.2.9
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2
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
 */
class GetFleetsFleetIdOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

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
      */
    protected static $openAPIFormats = [
        'is_free_move' => null,
        'is_registered' => null,
        'is_voice_enabled' => null,
        'motd' => null
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
        $this->container['is_free_move'] = isset($data['is_free_move']) ? $data['is_free_move'] : null;
        $this->container['is_registered'] = isset($data['is_registered']) ? $data['is_registered'] : null;
        $this->container['is_voice_enabled'] = isset($data['is_voice_enabled']) ? $data['is_voice_enabled'] : null;
        $this->container['motd'] = isset($data['motd']) ? $data['motd'] : null;
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
     * @return $this
     */
    public function setIsFreeMove($is_free_move)
    {
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
     * @return $this
     */
    public function setIsRegistered($is_registered)
    {
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
     * @return $this
     */
    public function setIsVoiceEnabled($is_voice_enabled)
    {
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
     * @return $this
     */
    public function setMotd($motd)
    {
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


