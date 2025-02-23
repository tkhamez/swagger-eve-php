<?php
/**
 * GetDogmaEffectsEffectIdModifier
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
 * The version of the OpenAPI document: 1.30
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
 * GetDogmaEffectsEffectIdModifier Class Doc Comment
 *
 * @category Class
 * @description modifier object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetDogmaEffectsEffectIdModifier implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_dogma_effects_effect_id_modifier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'domain' => 'string',
        'effect_id' => 'int',
        'func' => 'string',
        'modified_attribute_id' => 'int',
        'modifying_attribute_id' => 'int',
        'operator' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'domain' => null,
        'effect_id' => 'int32',
        'func' => null,
        'modified_attribute_id' => 'int32',
        'modifying_attribute_id' => 'int32',
        'operator' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'domain' => false,
        'effect_id' => false,
        'func' => false,
        'modified_attribute_id' => false,
        'modifying_attribute_id' => false,
        'operator' => false
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
        'domain' => 'domain',
        'effect_id' => 'effect_id',
        'func' => 'func',
        'modified_attribute_id' => 'modified_attribute_id',
        'modifying_attribute_id' => 'modifying_attribute_id',
        'operator' => 'operator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'domain' => 'setDomain',
        'effect_id' => 'setEffectId',
        'func' => 'setFunc',
        'modified_attribute_id' => 'setModifiedAttributeId',
        'modifying_attribute_id' => 'setModifyingAttributeId',
        'operator' => 'setOperator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'domain' => 'getDomain',
        'effect_id' => 'getEffectId',
        'func' => 'getFunc',
        'modified_attribute_id' => 'getModifiedAttributeId',
        'modifying_attribute_id' => 'getModifyingAttributeId',
        'operator' => 'getOperator'
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
        $this->setIfExists('domain', $data ?? [], null);
        $this->setIfExists('effect_id', $data ?? [], null);
        $this->setIfExists('func', $data ?? [], null);
        $this->setIfExists('modified_attribute_id', $data ?? [], null);
        $this->setIfExists('modifying_attribute_id', $data ?? [], null);
        $this->setIfExists('operator', $data ?? [], null);
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

        if ($this->container['func'] === null) {
            $invalidProperties[] = "'func' can't be null";
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
     * Gets domain
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string|null $domain domain string
     *
     * @return self
     */
    public function setDomain($domain)
    {
        if (is_null($domain)) {
            throw new \InvalidArgumentException('non-nullable domain cannot be null');
        }
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets effect_id
     *
     * @return int|null
     */
    public function getEffectId()
    {
        return $this->container['effect_id'];
    }

    /**
     * Sets effect_id
     *
     * @param int|null $effect_id effect_id integer
     *
     * @return self
     */
    public function setEffectId($effect_id)
    {
        if (is_null($effect_id)) {
            throw new \InvalidArgumentException('non-nullable effect_id cannot be null');
        }
        $this->container['effect_id'] = $effect_id;

        return $this;
    }

    /**
     * Gets func
     *
     * @return string
     */
    public function getFunc()
    {
        return $this->container['func'];
    }

    /**
     * Sets func
     *
     * @param string $func func string
     *
     * @return self
     */
    public function setFunc($func)
    {
        if (is_null($func)) {
            throw new \InvalidArgumentException('non-nullable func cannot be null');
        }
        $this->container['func'] = $func;

        return $this;
    }

    /**
     * Gets modified_attribute_id
     *
     * @return int|null
     */
    public function getModifiedAttributeId()
    {
        return $this->container['modified_attribute_id'];
    }

    /**
     * Sets modified_attribute_id
     *
     * @param int|null $modified_attribute_id modified_attribute_id integer
     *
     * @return self
     */
    public function setModifiedAttributeId($modified_attribute_id)
    {
        if (is_null($modified_attribute_id)) {
            throw new \InvalidArgumentException('non-nullable modified_attribute_id cannot be null');
        }
        $this->container['modified_attribute_id'] = $modified_attribute_id;

        return $this;
    }

    /**
     * Gets modifying_attribute_id
     *
     * @return int|null
     */
    public function getModifyingAttributeId()
    {
        return $this->container['modifying_attribute_id'];
    }

    /**
     * Sets modifying_attribute_id
     *
     * @param int|null $modifying_attribute_id modifying_attribute_id integer
     *
     * @return self
     */
    public function setModifyingAttributeId($modifying_attribute_id)
    {
        if (is_null($modifying_attribute_id)) {
            throw new \InvalidArgumentException('non-nullable modifying_attribute_id cannot be null');
        }
        $this->container['modifying_attribute_id'] = $modifying_attribute_id;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return int|null
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param int|null $operator operator integer
     *
     * @return self
     */
    public function setOperator($operator)
    {
        if (is_null($operator)) {
            throw new \InvalidArgumentException('non-nullable operator cannot be null');
        }
        $this->container['operator'] = $operator;

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


