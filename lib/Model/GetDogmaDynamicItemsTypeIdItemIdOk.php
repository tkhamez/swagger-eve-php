<?php
/**
 * GetDogmaDynamicItemsTypeIdItemIdOk
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
 * OpenAPI Generator version: 5.2.0
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
 * GetDogmaDynamicItemsTypeIdItemIdOk Class Doc Comment
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
class GetDogmaDynamicItemsTypeIdItemIdOk implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_dogma_dynamic_items_type_id_item_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'created_by' => 'int',
        'dogma_attributes' => '\Swagger\Client\Eve\Model\GetDogmaDynamicItemsTypeIdItemIdDogmaAttribute[]',
        'dogma_effects' => '\Swagger\Client\Eve\Model\GetDogmaDynamicItemsTypeIdItemIdDogmaEffect[]',
        'mutator_type_id' => 'int',
        'source_type_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'created_by' => 'int32',
        'dogma_attributes' => null,
        'dogma_effects' => null,
        'mutator_type_id' => 'int32',
        'source_type_id' => 'int32'
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
        'created_by' => 'created_by',
        'dogma_attributes' => 'dogma_attributes',
        'dogma_effects' => 'dogma_effects',
        'mutator_type_id' => 'mutator_type_id',
        'source_type_id' => 'source_type_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_by' => 'setCreatedBy',
        'dogma_attributes' => 'setDogmaAttributes',
        'dogma_effects' => 'setDogmaEffects',
        'mutator_type_id' => 'setMutatorTypeId',
        'source_type_id' => 'setSourceTypeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_by' => 'getCreatedBy',
        'dogma_attributes' => 'getDogmaAttributes',
        'dogma_effects' => 'getDogmaEffects',
        'mutator_type_id' => 'getMutatorTypeId',
        'source_type_id' => 'getSourceTypeId'
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
        $this->container['created_by'] = $data['created_by'] ?? null;
        $this->container['dogma_attributes'] = $data['dogma_attributes'] ?? null;
        $this->container['dogma_effects'] = $data['dogma_effects'] ?? null;
        $this->container['mutator_type_id'] = $data['mutator_type_id'] ?? null;
        $this->container['source_type_id'] = $data['source_type_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['created_by'] === null) {
            $invalidProperties[] = "'created_by' can't be null";
        }
        if ($this->container['dogma_attributes'] === null) {
            $invalidProperties[] = "'dogma_attributes' can't be null";
        }
        if ((count($this->container['dogma_attributes']) > 1000)) {
            $invalidProperties[] = "invalid value for 'dogma_attributes', number of items must be less than or equal to 1000.";
        }

        if ($this->container['dogma_effects'] === null) {
            $invalidProperties[] = "'dogma_effects' can't be null";
        }
        if ((count($this->container['dogma_effects']) > 1000)) {
            $invalidProperties[] = "invalid value for 'dogma_effects', number of items must be less than or equal to 1000.";
        }

        if ($this->container['mutator_type_id'] === null) {
            $invalidProperties[] = "'mutator_type_id' can't be null";
        }
        if ($this->container['source_type_id'] === null) {
            $invalidProperties[] = "'source_type_id' can't be null";
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
     * Gets created_by
     *
     * @return int
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param int $created_by The ID of the character who created the item
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets dogma_attributes
     *
     * @return \Swagger\Client\Eve\Model\GetDogmaDynamicItemsTypeIdItemIdDogmaAttribute[]
     */
    public function getDogmaAttributes()
    {
        return $this->container['dogma_attributes'];
    }

    /**
     * Sets dogma_attributes
     *
     * @param \Swagger\Client\Eve\Model\GetDogmaDynamicItemsTypeIdItemIdDogmaAttribute[] $dogma_attributes dogma_attributes array
     *
     * @return self
     */
    public function setDogmaAttributes($dogma_attributes)
    {

        if ((count($dogma_attributes) > 1000)) {
            throw new \InvalidArgumentException('invalid value for $dogma_attributes when calling GetDogmaDynamicItemsTypeIdItemIdOk., number of items must be less than or equal to 1000.');
        }
        $this->container['dogma_attributes'] = $dogma_attributes;

        return $this;
    }

    /**
     * Gets dogma_effects
     *
     * @return \Swagger\Client\Eve\Model\GetDogmaDynamicItemsTypeIdItemIdDogmaEffect[]
     */
    public function getDogmaEffects()
    {
        return $this->container['dogma_effects'];
    }

    /**
     * Sets dogma_effects
     *
     * @param \Swagger\Client\Eve\Model\GetDogmaDynamicItemsTypeIdItemIdDogmaEffect[] $dogma_effects dogma_effects array
     *
     * @return self
     */
    public function setDogmaEffects($dogma_effects)
    {

        if ((count($dogma_effects) > 1000)) {
            throw new \InvalidArgumentException('invalid value for $dogma_effects when calling GetDogmaDynamicItemsTypeIdItemIdOk., number of items must be less than or equal to 1000.');
        }
        $this->container['dogma_effects'] = $dogma_effects;

        return $this;
    }

    /**
     * Gets mutator_type_id
     *
     * @return int
     */
    public function getMutatorTypeId()
    {
        return $this->container['mutator_type_id'];
    }

    /**
     * Sets mutator_type_id
     *
     * @param int $mutator_type_id The type ID of the mutator used to generate the dynamic item.
     *
     * @return self
     */
    public function setMutatorTypeId($mutator_type_id)
    {
        $this->container['mutator_type_id'] = $mutator_type_id;

        return $this;
    }

    /**
     * Gets source_type_id
     *
     * @return int
     */
    public function getSourceTypeId()
    {
        return $this->container['source_type_id'];
    }

    /**
     * Sets source_type_id
     *
     * @param int $source_type_id The type ID of the source item the mutator was applied to create the dynamic item.
     *
     * @return self
     */
    public function setSourceTypeId($source_type_id)
    {
        $this->container['source_type_id'] = $source_type_id;

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


