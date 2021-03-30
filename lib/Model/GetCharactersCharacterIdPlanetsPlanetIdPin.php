<?php
/**
 * GetCharactersCharacterIdPlanetsPlanetIdPin
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
 * GetCharactersCharacterIdPlanetsPlanetIdPin Class Doc Comment
 *
 * @category Class
 * @description pin object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetCharactersCharacterIdPlanetsPlanetIdPin implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_planets_planet_id_pin';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contents' => '\Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanetsPlanetIdContent[]',
        'expiry_time' => '\DateTime',
        'extractor_details' => '\Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanetsPlanetIdExtractorDetails',
        'factory_details' => '\Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanetsPlanetIdFactoryDetails',
        'install_time' => '\DateTime',
        'last_cycle_start' => '\DateTime',
        'latitude' => 'float',
        'longitude' => 'float',
        'pin_id' => 'int',
        'schematic_id' => 'int',
        'type_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'contents' => null,
        'expiry_time' => 'date-time',
        'extractor_details' => null,
        'factory_details' => null,
        'install_time' => 'date-time',
        'last_cycle_start' => 'date-time',
        'latitude' => 'float',
        'longitude' => 'float',
        'pin_id' => 'int64',
        'schematic_id' => 'int32',
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
        'contents' => 'contents',
        'expiry_time' => 'expiry_time',
        'extractor_details' => 'extractor_details',
        'factory_details' => 'factory_details',
        'install_time' => 'install_time',
        'last_cycle_start' => 'last_cycle_start',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'pin_id' => 'pin_id',
        'schematic_id' => 'schematic_id',
        'type_id' => 'type_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contents' => 'setContents',
        'expiry_time' => 'setExpiryTime',
        'extractor_details' => 'setExtractorDetails',
        'factory_details' => 'setFactoryDetails',
        'install_time' => 'setInstallTime',
        'last_cycle_start' => 'setLastCycleStart',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'pin_id' => 'setPinId',
        'schematic_id' => 'setSchematicId',
        'type_id' => 'setTypeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contents' => 'getContents',
        'expiry_time' => 'getExpiryTime',
        'extractor_details' => 'getExtractorDetails',
        'factory_details' => 'getFactoryDetails',
        'install_time' => 'getInstallTime',
        'last_cycle_start' => 'getLastCycleStart',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'pin_id' => 'getPinId',
        'schematic_id' => 'getSchematicId',
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
        $this->container['contents'] = $data['contents'] ?? null;
        $this->container['expiry_time'] = $data['expiry_time'] ?? null;
        $this->container['extractor_details'] = $data['extractor_details'] ?? null;
        $this->container['factory_details'] = $data['factory_details'] ?? null;
        $this->container['install_time'] = $data['install_time'] ?? null;
        $this->container['last_cycle_start'] = $data['last_cycle_start'] ?? null;
        $this->container['latitude'] = $data['latitude'] ?? null;
        $this->container['longitude'] = $data['longitude'] ?? null;
        $this->container['pin_id'] = $data['pin_id'] ?? null;
        $this->container['schematic_id'] = $data['schematic_id'] ?? null;
        $this->container['type_id'] = $data['type_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['contents']) && (count($this->container['contents']) > 90)) {
            $invalidProperties[] = "invalid value for 'contents', number of items must be less than or equal to 90.";
        }

        if ($this->container['latitude'] === null) {
            $invalidProperties[] = "'latitude' can't be null";
        }
        if ($this->container['longitude'] === null) {
            $invalidProperties[] = "'longitude' can't be null";
        }
        if ($this->container['pin_id'] === null) {
            $invalidProperties[] = "'pin_id' can't be null";
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
     * Gets contents
     *
     * @return \Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanetsPlanetIdContent[]|null
     */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
     * Sets contents
     *
     * @param \Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanetsPlanetIdContent[]|null $contents contents array
     *
     * @return self
     */
    public function setContents($contents)
    {

        if (!is_null($contents) && (count($contents) > 90)) {
            throw new \InvalidArgumentException('invalid value for $contents when calling GetCharactersCharacterIdPlanetsPlanetIdPin., number of items must be less than or equal to 90.');
        }
        $this->container['contents'] = $contents;

        return $this;
    }

    /**
     * Gets expiry_time
     *
     * @return \DateTime|null
     */
    public function getExpiryTime()
    {
        return $this->container['expiry_time'];
    }

    /**
     * Sets expiry_time
     *
     * @param \DateTime|null $expiry_time expiry_time string
     *
     * @return self
     */
    public function setExpiryTime($expiry_time)
    {
        $this->container['expiry_time'] = $expiry_time;

        return $this;
    }

    /**
     * Gets extractor_details
     *
     * @return \Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanetsPlanetIdExtractorDetails|null
     */
    public function getExtractorDetails()
    {
        return $this->container['extractor_details'];
    }

    /**
     * Sets extractor_details
     *
     * @param \Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanetsPlanetIdExtractorDetails|null $extractor_details extractor_details
     *
     * @return self
     */
    public function setExtractorDetails($extractor_details)
    {
        $this->container['extractor_details'] = $extractor_details;

        return $this;
    }

    /**
     * Gets factory_details
     *
     * @return \Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanetsPlanetIdFactoryDetails|null
     */
    public function getFactoryDetails()
    {
        return $this->container['factory_details'];
    }

    /**
     * Sets factory_details
     *
     * @param \Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanetsPlanetIdFactoryDetails|null $factory_details factory_details
     *
     * @return self
     */
    public function setFactoryDetails($factory_details)
    {
        $this->container['factory_details'] = $factory_details;

        return $this;
    }

    /**
     * Gets install_time
     *
     * @return \DateTime|null
     */
    public function getInstallTime()
    {
        return $this->container['install_time'];
    }

    /**
     * Sets install_time
     *
     * @param \DateTime|null $install_time install_time string
     *
     * @return self
     */
    public function setInstallTime($install_time)
    {
        $this->container['install_time'] = $install_time;

        return $this;
    }

    /**
     * Gets last_cycle_start
     *
     * @return \DateTime|null
     */
    public function getLastCycleStart()
    {
        return $this->container['last_cycle_start'];
    }

    /**
     * Sets last_cycle_start
     *
     * @param \DateTime|null $last_cycle_start last_cycle_start string
     *
     * @return self
     */
    public function setLastCycleStart($last_cycle_start)
    {
        $this->container['last_cycle_start'] = $last_cycle_start;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param float $latitude latitude number
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param float $longitude longitude number
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets pin_id
     *
     * @return int
     */
    public function getPinId()
    {
        return $this->container['pin_id'];
    }

    /**
     * Sets pin_id
     *
     * @param int $pin_id pin_id integer
     *
     * @return self
     */
    public function setPinId($pin_id)
    {
        $this->container['pin_id'] = $pin_id;

        return $this;
    }

    /**
     * Gets schematic_id
     *
     * @return int|null
     */
    public function getSchematicId()
    {
        return $this->container['schematic_id'];
    }

    /**
     * Sets schematic_id
     *
     * @param int|null $schematic_id schematic_id integer
     *
     * @return self
     */
    public function setSchematicId($schematic_id)
    {
        $this->container['schematic_id'] = $schematic_id;

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
     * @return self
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


