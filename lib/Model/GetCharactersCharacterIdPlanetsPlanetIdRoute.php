<?php
/**
 * GetCharactersCharacterIdPlanetsPlanetIdRoute
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
 * Swagger Codegen version: 2.4.0
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
 * GetCharactersCharacterIdPlanetsPlanetIdRoute Class Doc Comment
 *
 * @category Class
 * @description route object
 * @package  Swagger\Client\Eve
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdPlanetsPlanetIdRoute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_planets_planet_id_route';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'content_type_id' => 'int',
        'destination_pin_id' => 'int',
        'quantity' => 'float',
        'route_id' => 'int',
        'source_pin_id' => 'int',
        'waypoints' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'content_type_id' => 'int32',
        'destination_pin_id' => 'int64',
        'quantity' => 'float',
        'route_id' => 'int64',
        'source_pin_id' => 'int64',
        'waypoints' => 'int64'
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
        'content_type_id' => 'content_type_id',
        'destination_pin_id' => 'destination_pin_id',
        'quantity' => 'quantity',
        'route_id' => 'route_id',
        'source_pin_id' => 'source_pin_id',
        'waypoints' => 'waypoints'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content_type_id' => 'setContentTypeId',
        'destination_pin_id' => 'setDestinationPinId',
        'quantity' => 'setQuantity',
        'route_id' => 'setRouteId',
        'source_pin_id' => 'setSourcePinId',
        'waypoints' => 'setWaypoints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content_type_id' => 'getContentTypeId',
        'destination_pin_id' => 'getDestinationPinId',
        'quantity' => 'getQuantity',
        'route_id' => 'getRouteId',
        'source_pin_id' => 'getSourcePinId',
        'waypoints' => 'getWaypoints'
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
        $this->container['content_type_id'] = isset($data['content_type_id']) ? $data['content_type_id'] : null;
        $this->container['destination_pin_id'] = isset($data['destination_pin_id']) ? $data['destination_pin_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['route_id'] = isset($data['route_id']) ? $data['route_id'] : null;
        $this->container['source_pin_id'] = isset($data['source_pin_id']) ? $data['source_pin_id'] : null;
        $this->container['waypoints'] = isset($data['waypoints']) ? $data['waypoints'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['content_type_id'] === null) {
            $invalidProperties[] = "'content_type_id' can't be null";
        }
        if ($this->container['destination_pin_id'] === null) {
            $invalidProperties[] = "'destination_pin_id' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['route_id'] === null) {
            $invalidProperties[] = "'route_id' can't be null";
        }
        if ($this->container['source_pin_id'] === null) {
            $invalidProperties[] = "'source_pin_id' can't be null";
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
     * Gets content_type_id
     *
     * @return int
     */
    public function getContentTypeId()
    {
        return $this->container['content_type_id'];
    }

    /**
     * Sets content_type_id
     *
     * @param int $content_type_id content_type_id integer
     *
     * @return $this
     */
    public function setContentTypeId($content_type_id)
    {
        $this->container['content_type_id'] = $content_type_id;

        return $this;
    }

    /**
     * Gets destination_pin_id
     *
     * @return int
     */
    public function getDestinationPinId()
    {
        return $this->container['destination_pin_id'];
    }

    /**
     * Sets destination_pin_id
     *
     * @param int $destination_pin_id destination_pin_id integer
     *
     * @return $this
     */
    public function setDestinationPinId($destination_pin_id)
    {
        $this->container['destination_pin_id'] = $destination_pin_id;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity quantity number
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets route_id
     *
     * @return int
     */
    public function getRouteId()
    {
        return $this->container['route_id'];
    }

    /**
     * Sets route_id
     *
     * @param int $route_id route_id integer
     *
     * @return $this
     */
    public function setRouteId($route_id)
    {
        $this->container['route_id'] = $route_id;

        return $this;
    }

    /**
     * Gets source_pin_id
     *
     * @return int
     */
    public function getSourcePinId()
    {
        return $this->container['source_pin_id'];
    }

    /**
     * Sets source_pin_id
     *
     * @param int $source_pin_id source_pin_id integer
     *
     * @return $this
     */
    public function setSourcePinId($source_pin_id)
    {
        $this->container['source_pin_id'] = $source_pin_id;

        return $this;
    }

    /**
     * Gets waypoints
     *
     * @return int[]
     */
    public function getWaypoints()
    {
        return $this->container['waypoints'];
    }

    /**
     * Sets waypoints
     *
     * @param int[] $waypoints list of pin ID waypoints
     *
     * @return $this
     */
    public function setWaypoints($waypoints)
    {
        $this->container['waypoints'] = $waypoints;

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


