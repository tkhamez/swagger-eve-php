<?php
/**
 * GetContractsPublicItemsContractId200Ok
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
 * GetContractsPublicItemsContractId200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetContractsPublicItemsContractId200Ok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_contracts_public_items_contract_id_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_blueprint_copy' => 'bool',
        'is_included' => 'bool',
        'item_id' => 'int',
        'material_efficiency' => 'int',
        'quantity' => 'int',
        'record_id' => 'int',
        'runs' => 'int',
        'time_efficiency' => 'int',
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
        'is_blueprint_copy' => null,
        'is_included' => null,
        'item_id' => 'int64',
        'material_efficiency' => 'int32',
        'quantity' => 'int32',
        'record_id' => 'int64',
        'runs' => 'int32',
        'time_efficiency' => 'int32',
        'type_id' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'is_blueprint_copy' => false,
        'is_included' => false,
        'item_id' => false,
        'material_efficiency' => false,
        'quantity' => false,
        'record_id' => false,
        'runs' => false,
        'time_efficiency' => false,
        'type_id' => false
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
        'is_blueprint_copy' => 'is_blueprint_copy',
        'is_included' => 'is_included',
        'item_id' => 'item_id',
        'material_efficiency' => 'material_efficiency',
        'quantity' => 'quantity',
        'record_id' => 'record_id',
        'runs' => 'runs',
        'time_efficiency' => 'time_efficiency',
        'type_id' => 'type_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_blueprint_copy' => 'setIsBlueprintCopy',
        'is_included' => 'setIsIncluded',
        'item_id' => 'setItemId',
        'material_efficiency' => 'setMaterialEfficiency',
        'quantity' => 'setQuantity',
        'record_id' => 'setRecordId',
        'runs' => 'setRuns',
        'time_efficiency' => 'setTimeEfficiency',
        'type_id' => 'setTypeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_blueprint_copy' => 'getIsBlueprintCopy',
        'is_included' => 'getIsIncluded',
        'item_id' => 'getItemId',
        'material_efficiency' => 'getMaterialEfficiency',
        'quantity' => 'getQuantity',
        'record_id' => 'getRecordId',
        'runs' => 'getRuns',
        'time_efficiency' => 'getTimeEfficiency',
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('is_blueprint_copy', $data ?? [], null);
        $this->setIfExists('is_included', $data ?? [], null);
        $this->setIfExists('item_id', $data ?? [], null);
        $this->setIfExists('material_efficiency', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('record_id', $data ?? [], null);
        $this->setIfExists('runs', $data ?? [], null);
        $this->setIfExists('time_efficiency', $data ?? [], null);
        $this->setIfExists('type_id', $data ?? [], null);
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

        if ($this->container['is_included'] === null) {
            $invalidProperties[] = "'is_included' can't be null";
        }
        if (!is_null($this->container['material_efficiency']) && ($this->container['material_efficiency'] > 25)) {
            $invalidProperties[] = "invalid value for 'material_efficiency', must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['material_efficiency']) && ($this->container['material_efficiency'] < 0)) {
            $invalidProperties[] = "invalid value for 'material_efficiency', must be bigger than or equal to 0.";
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['record_id'] === null) {
            $invalidProperties[] = "'record_id' can't be null";
        }
        if (!is_null($this->container['runs']) && ($this->container['runs'] < -1)) {
            $invalidProperties[] = "invalid value for 'runs', must be bigger than or equal to -1.";
        }

        if (!is_null($this->container['time_efficiency']) && ($this->container['time_efficiency'] > 20)) {
            $invalidProperties[] = "invalid value for 'time_efficiency', must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['time_efficiency']) && ($this->container['time_efficiency'] < 0)) {
            $invalidProperties[] = "invalid value for 'time_efficiency', must be bigger than or equal to 0.";
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
     * Gets is_blueprint_copy
     *
     * @return bool|null
     */
    public function getIsBlueprintCopy()
    {
        return $this->container['is_blueprint_copy'];
    }

    /**
     * Sets is_blueprint_copy
     *
     * @param bool|null $is_blueprint_copy is_blueprint_copy boolean
     *
     * @return self
     */
    public function setIsBlueprintCopy($is_blueprint_copy)
    {
        if (is_null($is_blueprint_copy)) {
            throw new \InvalidArgumentException('non-nullable is_blueprint_copy cannot be null');
        }
        $this->container['is_blueprint_copy'] = $is_blueprint_copy;

        return $this;
    }

    /**
     * Gets is_included
     *
     * @return bool
     */
    public function getIsIncluded()
    {
        return $this->container['is_included'];
    }

    /**
     * Sets is_included
     *
     * @param bool $is_included true if the contract issuer has submitted this item with the contract, false if the isser is asking for this item in the contract
     *
     * @return self
     */
    public function setIsIncluded($is_included)
    {
        if (is_null($is_included)) {
            throw new \InvalidArgumentException('non-nullable is_included cannot be null');
        }
        $this->container['is_included'] = $is_included;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return int|null
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param int|null $item_id Unique ID for the item being sold. Not present if item is being requested by contract rather than sold with contract
     *
     * @return self
     */
    public function setItemId($item_id)
    {
        if (is_null($item_id)) {
            throw new \InvalidArgumentException('non-nullable item_id cannot be null');
        }
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets material_efficiency
     *
     * @return int|null
     */
    public function getMaterialEfficiency()
    {
        return $this->container['material_efficiency'];
    }

    /**
     * Sets material_efficiency
     *
     * @param int|null $material_efficiency Material Efficiency Level of the blueprint
     *
     * @return self
     */
    public function setMaterialEfficiency($material_efficiency)
    {
        if (is_null($material_efficiency)) {
            throw new \InvalidArgumentException('non-nullable material_efficiency cannot be null');
        }

        if (($material_efficiency > 25)) {
            throw new \InvalidArgumentException('invalid value for $material_efficiency when calling GetContractsPublicItemsContractId200Ok., must be smaller than or equal to 25.');
        }
        if (($material_efficiency < 0)) {
            throw new \InvalidArgumentException('invalid value for $material_efficiency when calling GetContractsPublicItemsContractId200Ok., must be bigger than or equal to 0.');
        }

        $this->container['material_efficiency'] = $material_efficiency;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Number of items in the stack
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets record_id
     *
     * @return int
     */
    public function getRecordId()
    {
        return $this->container['record_id'];
    }

    /**
     * Sets record_id
     *
     * @param int $record_id Unique ID for the item, used by the contract system
     *
     * @return self
     */
    public function setRecordId($record_id)
    {
        if (is_null($record_id)) {
            throw new \InvalidArgumentException('non-nullable record_id cannot be null');
        }
        $this->container['record_id'] = $record_id;

        return $this;
    }

    /**
     * Gets runs
     *
     * @return int|null
     */
    public function getRuns()
    {
        return $this->container['runs'];
    }

    /**
     * Sets runs
     *
     * @param int|null $runs Number of runs remaining if the blueprint is a copy, -1 if it is an original
     *
     * @return self
     */
    public function setRuns($runs)
    {
        if (is_null($runs)) {
            throw new \InvalidArgumentException('non-nullable runs cannot be null');
        }

        if (($runs < -1)) {
            throw new \InvalidArgumentException('invalid value for $runs when calling GetContractsPublicItemsContractId200Ok., must be bigger than or equal to -1.');
        }

        $this->container['runs'] = $runs;

        return $this;
    }

    /**
     * Gets time_efficiency
     *
     * @return int|null
     */
    public function getTimeEfficiency()
    {
        return $this->container['time_efficiency'];
    }

    /**
     * Sets time_efficiency
     *
     * @param int|null $time_efficiency Time Efficiency Level of the blueprint
     *
     * @return self
     */
    public function setTimeEfficiency($time_efficiency)
    {
        if (is_null($time_efficiency)) {
            throw new \InvalidArgumentException('non-nullable time_efficiency cannot be null');
        }

        if (($time_efficiency > 20)) {
            throw new \InvalidArgumentException('invalid value for $time_efficiency when calling GetContractsPublicItemsContractId200Ok., must be smaller than or equal to 20.');
        }
        if (($time_efficiency < 0)) {
            throw new \InvalidArgumentException('invalid value for $time_efficiency when calling GetContractsPublicItemsContractId200Ok., must be bigger than or equal to 0.');
        }

        $this->container['time_efficiency'] = $time_efficiency;

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
     * @param int $type_id Type ID for item
     *
     * @return self
     */
    public function setTypeId($type_id)
    {
        if (is_null($type_id)) {
            throw new \InvalidArgumentException('non-nullable type_id cannot be null');
        }
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


