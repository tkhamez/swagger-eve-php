<?php
/**
 * GetCharactersCharacterIdPlanetsPlanetIdOk
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
 * GetCharactersCharacterIdPlanetsPlanetIdOk Class Doc Comment
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
class GetCharactersCharacterIdPlanetsPlanetIdOk implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_planets_planet_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'links' => '\Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanetsPlanetIdLink[]',
        'pins' => '\Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanetsPlanetIdPin[]',
        'routes' => '\Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanetsPlanetIdRoute[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'links' => null,
        'pins' => null,
        'routes' => null
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
        'links' => 'links',
        'pins' => 'pins',
        'routes' => 'routes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'pins' => 'setPins',
        'routes' => 'setRoutes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'pins' => 'getPins',
        'routes' => 'getRoutes'
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
        $this->container['links'] = $data['links'] ?? null;
        $this->container['pins'] = $data['pins'] ?? null;
        $this->container['routes'] = $data['routes'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['links'] === null) {
            $invalidProperties[] = "'links' can't be null";
        }
        if ((count($this->container['links']) > 500)) {
            $invalidProperties[] = "invalid value for 'links', number of items must be less than or equal to 500.";
        }

        if ($this->container['pins'] === null) {
            $invalidProperties[] = "'pins' can't be null";
        }
        if ((count($this->container['pins']) > 100)) {
            $invalidProperties[] = "invalid value for 'pins', number of items must be less than or equal to 100.";
        }

        if ($this->container['routes'] === null) {
            $invalidProperties[] = "'routes' can't be null";
        }
        if ((count($this->container['routes']) > 1000)) {
            $invalidProperties[] = "invalid value for 'routes', number of items must be less than or equal to 1000.";
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
     * Gets links
     *
     * @return \Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanetsPlanetIdLink[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanetsPlanetIdLink[] $links links array
     *
     * @return self
     */
    public function setLinks($links)
    {

        if ((count($links) > 500)) {
            throw new \InvalidArgumentException('invalid value for $links when calling GetCharactersCharacterIdPlanetsPlanetIdOk., number of items must be less than or equal to 500.');
        }
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets pins
     *
     * @return \Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanetsPlanetIdPin[]
     */
    public function getPins()
    {
        return $this->container['pins'];
    }

    /**
     * Sets pins
     *
     * @param \Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanetsPlanetIdPin[] $pins pins array
     *
     * @return self
     */
    public function setPins($pins)
    {

        if ((count($pins) > 100)) {
            throw new \InvalidArgumentException('invalid value for $pins when calling GetCharactersCharacterIdPlanetsPlanetIdOk., number of items must be less than or equal to 100.');
        }
        $this->container['pins'] = $pins;

        return $this;
    }

    /**
     * Gets routes
     *
     * @return \Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanetsPlanetIdRoute[]
     */
    public function getRoutes()
    {
        return $this->container['routes'];
    }

    /**
     * Sets routes
     *
     * @param \Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanetsPlanetIdRoute[] $routes routes array
     *
     * @return self
     */
    public function setRoutes($routes)
    {

        if ((count($routes) > 1000)) {
            throw new \InvalidArgumentException('invalid value for $routes when calling GetCharactersCharacterIdPlanetsPlanetIdOk., number of items must be less than or equal to 1000.');
        }
        $this->container['routes'] = $routes;

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


