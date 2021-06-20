<?php
/**
 * GetUniverseTypesTypeIdOk
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
 * The version of the OpenAPI document: 1.8.2
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
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
 * GetUniverseTypesTypeIdOk Class Doc Comment
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
class GetUniverseTypesTypeIdOk implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_universe_types_type_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'capacity' => 'float',
        'description' => 'string',
        'dogma_attributes' => '\Swagger\Client\Eve\Model\GetUniverseTypesTypeIdDogmaAttribute[]',
        'dogma_effects' => '\Swagger\Client\Eve\Model\GetUniverseTypesTypeIdDogmaEffect[]',
        'graphic_id' => 'int',
        'group_id' => 'int',
        'icon_id' => 'int',
        'market_group_id' => 'int',
        'mass' => 'float',
        'name' => 'string',
        'packaged_volume' => 'float',
        'portion_size' => 'int',
        'published' => 'bool',
        'radius' => 'float',
        'type_id' => 'int',
        'volume' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'capacity' => 'float',
        'description' => null,
        'dogma_attributes' => null,
        'dogma_effects' => null,
        'graphic_id' => 'int32',
        'group_id' => 'int32',
        'icon_id' => 'int32',
        'market_group_id' => 'int32',
        'mass' => 'float',
        'name' => null,
        'packaged_volume' => 'float',
        'portion_size' => 'int32',
        'published' => null,
        'radius' => 'float',
        'type_id' => 'int32',
        'volume' => 'float'
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
        'capacity' => 'capacity',
        'description' => 'description',
        'dogma_attributes' => 'dogma_attributes',
        'dogma_effects' => 'dogma_effects',
        'graphic_id' => 'graphic_id',
        'group_id' => 'group_id',
        'icon_id' => 'icon_id',
        'market_group_id' => 'market_group_id',
        'mass' => 'mass',
        'name' => 'name',
        'packaged_volume' => 'packaged_volume',
        'portion_size' => 'portion_size',
        'published' => 'published',
        'radius' => 'radius',
        'type_id' => 'type_id',
        'volume' => 'volume'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'capacity' => 'setCapacity',
        'description' => 'setDescription',
        'dogma_attributes' => 'setDogmaAttributes',
        'dogma_effects' => 'setDogmaEffects',
        'graphic_id' => 'setGraphicId',
        'group_id' => 'setGroupId',
        'icon_id' => 'setIconId',
        'market_group_id' => 'setMarketGroupId',
        'mass' => 'setMass',
        'name' => 'setName',
        'packaged_volume' => 'setPackagedVolume',
        'portion_size' => 'setPortionSize',
        'published' => 'setPublished',
        'radius' => 'setRadius',
        'type_id' => 'setTypeId',
        'volume' => 'setVolume'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'capacity' => 'getCapacity',
        'description' => 'getDescription',
        'dogma_attributes' => 'getDogmaAttributes',
        'dogma_effects' => 'getDogmaEffects',
        'graphic_id' => 'getGraphicId',
        'group_id' => 'getGroupId',
        'icon_id' => 'getIconId',
        'market_group_id' => 'getMarketGroupId',
        'mass' => 'getMass',
        'name' => 'getName',
        'packaged_volume' => 'getPackagedVolume',
        'portion_size' => 'getPortionSize',
        'published' => 'getPublished',
        'radius' => 'getRadius',
        'type_id' => 'getTypeId',
        'volume' => 'getVolume'
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
        $this->container['capacity'] = $data['capacity'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['dogma_attributes'] = $data['dogma_attributes'] ?? null;
        $this->container['dogma_effects'] = $data['dogma_effects'] ?? null;
        $this->container['graphic_id'] = $data['graphic_id'] ?? null;
        $this->container['group_id'] = $data['group_id'] ?? null;
        $this->container['icon_id'] = $data['icon_id'] ?? null;
        $this->container['market_group_id'] = $data['market_group_id'] ?? null;
        $this->container['mass'] = $data['mass'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['packaged_volume'] = $data['packaged_volume'] ?? null;
        $this->container['portion_size'] = $data['portion_size'] ?? null;
        $this->container['published'] = $data['published'] ?? null;
        $this->container['radius'] = $data['radius'] ?? null;
        $this->container['type_id'] = $data['type_id'] ?? null;
        $this->container['volume'] = $data['volume'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if (!is_null($this->container['dogma_attributes']) && (count($this->container['dogma_attributes']) > 1000)) {
            $invalidProperties[] = "invalid value for 'dogma_attributes', number of items must be less than or equal to 1000.";
        }

        if (!is_null($this->container['dogma_effects']) && (count($this->container['dogma_effects']) > 1000)) {
            $invalidProperties[] = "invalid value for 'dogma_effects', number of items must be less than or equal to 1000.";
        }

        if ($this->container['group_id'] === null) {
            $invalidProperties[] = "'group_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['published'] === null) {
            $invalidProperties[] = "'published' can't be null";
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
     * Gets capacity
     *
     * @return float|null
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     *
     * @param float|null $capacity capacity number
     *
     * @return self
     */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description string
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets dogma_attributes
     *
     * @return \Swagger\Client\Eve\Model\GetUniverseTypesTypeIdDogmaAttribute[]|null
     */
    public function getDogmaAttributes()
    {
        return $this->container['dogma_attributes'];
    }

    /**
     * Sets dogma_attributes
     *
     * @param \Swagger\Client\Eve\Model\GetUniverseTypesTypeIdDogmaAttribute[]|null $dogma_attributes dogma_attributes array
     *
     * @return self
     */
    public function setDogmaAttributes($dogma_attributes)
    {

        if (!is_null($dogma_attributes) && (count($dogma_attributes) > 1000)) {
            throw new \InvalidArgumentException('invalid value for $dogma_attributes when calling GetUniverseTypesTypeIdOk., number of items must be less than or equal to 1000.');
        }
        $this->container['dogma_attributes'] = $dogma_attributes;

        return $this;
    }

    /**
     * Gets dogma_effects
     *
     * @return \Swagger\Client\Eve\Model\GetUniverseTypesTypeIdDogmaEffect[]|null
     */
    public function getDogmaEffects()
    {
        return $this->container['dogma_effects'];
    }

    /**
     * Sets dogma_effects
     *
     * @param \Swagger\Client\Eve\Model\GetUniverseTypesTypeIdDogmaEffect[]|null $dogma_effects dogma_effects array
     *
     * @return self
     */
    public function setDogmaEffects($dogma_effects)
    {

        if (!is_null($dogma_effects) && (count($dogma_effects) > 1000)) {
            throw new \InvalidArgumentException('invalid value for $dogma_effects when calling GetUniverseTypesTypeIdOk., number of items must be less than or equal to 1000.');
        }
        $this->container['dogma_effects'] = $dogma_effects;

        return $this;
    }

    /**
     * Gets graphic_id
     *
     * @return int|null
     */
    public function getGraphicId()
    {
        return $this->container['graphic_id'];
    }

    /**
     * Sets graphic_id
     *
     * @param int|null $graphic_id graphic_id integer
     *
     * @return self
     */
    public function setGraphicId($graphic_id)
    {
        $this->container['graphic_id'] = $graphic_id;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return int
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param int $group_id group_id integer
     *
     * @return self
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets icon_id
     *
     * @return int|null
     */
    public function getIconId()
    {
        return $this->container['icon_id'];
    }

    /**
     * Sets icon_id
     *
     * @param int|null $icon_id icon_id integer
     *
     * @return self
     */
    public function setIconId($icon_id)
    {
        $this->container['icon_id'] = $icon_id;

        return $this;
    }

    /**
     * Gets market_group_id
     *
     * @return int|null
     */
    public function getMarketGroupId()
    {
        return $this->container['market_group_id'];
    }

    /**
     * Sets market_group_id
     *
     * @param int|null $market_group_id This only exists for types that can be put on the market
     *
     * @return self
     */
    public function setMarketGroupId($market_group_id)
    {
        $this->container['market_group_id'] = $market_group_id;

        return $this;
    }

    /**
     * Gets mass
     *
     * @return float|null
     */
    public function getMass()
    {
        return $this->container['mass'];
    }

    /**
     * Sets mass
     *
     * @param float|null $mass mass number
     *
     * @return self
     */
    public function setMass($mass)
    {
        $this->container['mass'] = $mass;

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
     * Gets packaged_volume
     *
     * @return float|null
     */
    public function getPackagedVolume()
    {
        return $this->container['packaged_volume'];
    }

    /**
     * Sets packaged_volume
     *
     * @param float|null $packaged_volume packaged_volume number
     *
     * @return self
     */
    public function setPackagedVolume($packaged_volume)
    {
        $this->container['packaged_volume'] = $packaged_volume;

        return $this;
    }

    /**
     * Gets portion_size
     *
     * @return int|null
     */
    public function getPortionSize()
    {
        return $this->container['portion_size'];
    }

    /**
     * Sets portion_size
     *
     * @param int|null $portion_size portion_size integer
     *
     * @return self
     */
    public function setPortionSize($portion_size)
    {
        $this->container['portion_size'] = $portion_size;

        return $this;
    }

    /**
     * Gets published
     *
     * @return bool
     */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     *
     * @param bool $published published boolean
     *
     * @return self
     */
    public function setPublished($published)
    {
        $this->container['published'] = $published;

        return $this;
    }

    /**
     * Gets radius
     *
     * @return float|null
     */
    public function getRadius()
    {
        return $this->container['radius'];
    }

    /**
     * Sets radius
     *
     * @param float|null $radius radius number
     *
     * @return self
     */
    public function setRadius($radius)
    {
        $this->container['radius'] = $radius;

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
     * Gets volume
     *
     * @return float|null
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     *
     * @param float|null $volume volume number
     *
     * @return self
     */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;

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


