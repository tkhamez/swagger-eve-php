<?php
/**
 * GetDogmaAttributesAttributeIdOk
 *
 * PHP version 8.1
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
 * The version of the OpenAPI document: 1.36
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.14.0
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
 * GetDogmaAttributesAttributeIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetDogmaAttributesAttributeIdOk implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_dogma_attributes_attribute_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attribute_id' => 'int',
        'default_value' => 'float',
        'description' => 'string',
        'display_name' => 'string',
        'high_is_good' => 'bool',
        'icon_id' => 'int',
        'name' => 'string',
        'published' => 'bool',
        'stackable' => 'bool',
        'unit_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'attribute_id' => 'int32',
        'default_value' => 'float',
        'description' => null,
        'display_name' => null,
        'high_is_good' => null,
        'icon_id' => 'int32',
        'name' => null,
        'published' => null,
        'stackable' => null,
        'unit_id' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'attribute_id' => false,
        'default_value' => false,
        'description' => false,
        'display_name' => false,
        'high_is_good' => false,
        'icon_id' => false,
        'name' => false,
        'published' => false,
        'stackable' => false,
        'unit_id' => false
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
        'attribute_id' => 'attribute_id',
        'default_value' => 'default_value',
        'description' => 'description',
        'display_name' => 'display_name',
        'high_is_good' => 'high_is_good',
        'icon_id' => 'icon_id',
        'name' => 'name',
        'published' => 'published',
        'stackable' => 'stackable',
        'unit_id' => 'unit_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attribute_id' => 'setAttributeId',
        'default_value' => 'setDefaultValue',
        'description' => 'setDescription',
        'display_name' => 'setDisplayName',
        'high_is_good' => 'setHighIsGood',
        'icon_id' => 'setIconId',
        'name' => 'setName',
        'published' => 'setPublished',
        'stackable' => 'setStackable',
        'unit_id' => 'setUnitId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attribute_id' => 'getAttributeId',
        'default_value' => 'getDefaultValue',
        'description' => 'getDescription',
        'display_name' => 'getDisplayName',
        'high_is_good' => 'getHighIsGood',
        'icon_id' => 'getIconId',
        'name' => 'getName',
        'published' => 'getPublished',
        'stackable' => 'getStackable',
        'unit_id' => 'getUnitId'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('attribute_id', $data ?? [], null);
        $this->setIfExists('default_value', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('display_name', $data ?? [], null);
        $this->setIfExists('high_is_good', $data ?? [], null);
        $this->setIfExists('icon_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('published', $data ?? [], null);
        $this->setIfExists('stackable', $data ?? [], null);
        $this->setIfExists('unit_id', $data ?? [], null);
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

        if ($this->container['attribute_id'] === null) {
            $invalidProperties[] = "'attribute_id' can't be null";
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
     * Gets attribute_id
     *
     * @return int
     */
    public function getAttributeId()
    {
        return $this->container['attribute_id'];
    }

    /**
     * Sets attribute_id
     *
     * @param int $attribute_id attribute_id integer
     *
     * @return self
     */
    public function setAttributeId($attribute_id)
    {
        if (is_null($attribute_id)) {
            throw new \InvalidArgumentException('non-nullable attribute_id cannot be null');
        }
        $this->container['attribute_id'] = $attribute_id;

        return $this;
    }

    /**
     * Gets default_value
     *
     * @return float|null
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param float|null $default_value default_value number
     *
     * @return self
     */
    public function setDefaultValue($default_value)
    {
        if (is_null($default_value)) {
            throw new \InvalidArgumentException('non-nullable default_value cannot be null');
        }
        $this->container['default_value'] = $default_value;

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
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name display_name string
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        if (is_null($display_name)) {
            throw new \InvalidArgumentException('non-nullable display_name cannot be null');
        }
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets high_is_good
     *
     * @return bool|null
     */
    public function getHighIsGood()
    {
        return $this->container['high_is_good'];
    }

    /**
     * Sets high_is_good
     *
     * @param bool|null $high_is_good high_is_good boolean
     *
     * @return self
     */
    public function setHighIsGood($high_is_good)
    {
        if (is_null($high_is_good)) {
            throw new \InvalidArgumentException('non-nullable high_is_good cannot be null');
        }
        $this->container['high_is_good'] = $high_is_good;

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
        if (is_null($icon_id)) {
            throw new \InvalidArgumentException('non-nullable icon_id cannot be null');
        }
        $this->container['icon_id'] = $icon_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name string
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets published
     *
     * @return bool|null
     */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     *
     * @param bool|null $published published boolean
     *
     * @return self
     */
    public function setPublished($published)
    {
        if (is_null($published)) {
            throw new \InvalidArgumentException('non-nullable published cannot be null');
        }
        $this->container['published'] = $published;

        return $this;
    }

    /**
     * Gets stackable
     *
     * @return bool|null
     */
    public function getStackable()
    {
        return $this->container['stackable'];
    }

    /**
     * Sets stackable
     *
     * @param bool|null $stackable stackable boolean
     *
     * @return self
     */
    public function setStackable($stackable)
    {
        if (is_null($stackable)) {
            throw new \InvalidArgumentException('non-nullable stackable cannot be null');
        }
        $this->container['stackable'] = $stackable;

        return $this;
    }

    /**
     * Gets unit_id
     *
     * @return int|null
     */
    public function getUnitId()
    {
        return $this->container['unit_id'];
    }

    /**
     * Sets unit_id
     *
     * @param int|null $unit_id unit_id integer
     *
     * @return self
     */
    public function setUnitId($unit_id)
    {
        if (is_null($unit_id)) {
            throw new \InvalidArgumentException('non-nullable unit_id cannot be null');
        }
        $this->container['unit_id'] = $unit_id;

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


