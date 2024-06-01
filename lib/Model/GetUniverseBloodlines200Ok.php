<?php
/**
 * GetUniverseBloodlines200Ok
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
 * The version of the OpenAPI document: 1.21
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
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
 * GetUniverseBloodlines200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetUniverseBloodlines200Ok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_universe_bloodlines_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bloodline_id' => 'int',
        'charisma' => 'int',
        'corporation_id' => 'int',
        'description' => 'string',
        'intelligence' => 'int',
        'memory' => 'int',
        'name' => 'string',
        'perception' => 'int',
        'race_id' => 'int',
        'ship_type_id' => 'int',
        'willpower' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bloodline_id' => 'int32',
        'charisma' => 'int32',
        'corporation_id' => 'int32',
        'description' => null,
        'intelligence' => 'int32',
        'memory' => 'int32',
        'name' => null,
        'perception' => 'int32',
        'race_id' => 'int32',
        'ship_type_id' => 'int32',
        'willpower' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'bloodline_id' => false,
        'charisma' => false,
        'corporation_id' => false,
        'description' => false,
        'intelligence' => false,
        'memory' => false,
        'name' => false,
        'perception' => false,
        'race_id' => false,
        'ship_type_id' => true,
        'willpower' => false
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
        'bloodline_id' => 'bloodline_id',
        'charisma' => 'charisma',
        'corporation_id' => 'corporation_id',
        'description' => 'description',
        'intelligence' => 'intelligence',
        'memory' => 'memory',
        'name' => 'name',
        'perception' => 'perception',
        'race_id' => 'race_id',
        'ship_type_id' => 'ship_type_id',
        'willpower' => 'willpower'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bloodline_id' => 'setBloodlineId',
        'charisma' => 'setCharisma',
        'corporation_id' => 'setCorporationId',
        'description' => 'setDescription',
        'intelligence' => 'setIntelligence',
        'memory' => 'setMemory',
        'name' => 'setName',
        'perception' => 'setPerception',
        'race_id' => 'setRaceId',
        'ship_type_id' => 'setShipTypeId',
        'willpower' => 'setWillpower'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bloodline_id' => 'getBloodlineId',
        'charisma' => 'getCharisma',
        'corporation_id' => 'getCorporationId',
        'description' => 'getDescription',
        'intelligence' => 'getIntelligence',
        'memory' => 'getMemory',
        'name' => 'getName',
        'perception' => 'getPerception',
        'race_id' => 'getRaceId',
        'ship_type_id' => 'getShipTypeId',
        'willpower' => 'getWillpower'
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
        $this->setIfExists('bloodline_id', $data ?? [], null);
        $this->setIfExists('charisma', $data ?? [], null);
        $this->setIfExists('corporation_id', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('intelligence', $data ?? [], null);
        $this->setIfExists('memory', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('perception', $data ?? [], null);
        $this->setIfExists('race_id', $data ?? [], null);
        $this->setIfExists('ship_type_id', $data ?? [], null);
        $this->setIfExists('willpower', $data ?? [], null);
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

        if ($this->container['bloodline_id'] === null) {
            $invalidProperties[] = "'bloodline_id' can't be null";
        }
        if ($this->container['charisma'] === null) {
            $invalidProperties[] = "'charisma' can't be null";
        }
        if ($this->container['corporation_id'] === null) {
            $invalidProperties[] = "'corporation_id' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['intelligence'] === null) {
            $invalidProperties[] = "'intelligence' can't be null";
        }
        if ($this->container['memory'] === null) {
            $invalidProperties[] = "'memory' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['perception'] === null) {
            $invalidProperties[] = "'perception' can't be null";
        }
        if ($this->container['race_id'] === null) {
            $invalidProperties[] = "'race_id' can't be null";
        }
        if ($this->container['ship_type_id'] === null) {
            $invalidProperties[] = "'ship_type_id' can't be null";
        }
        if ($this->container['willpower'] === null) {
            $invalidProperties[] = "'willpower' can't be null";
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
     * Gets bloodline_id
     *
     * @return int
     */
    public function getBloodlineId()
    {
        return $this->container['bloodline_id'];
    }

    /**
     * Sets bloodline_id
     *
     * @param int $bloodline_id bloodline_id integer
     *
     * @return self
     */
    public function setBloodlineId($bloodline_id)
    {
        if (is_null($bloodline_id)) {
            throw new \InvalidArgumentException('non-nullable bloodline_id cannot be null');
        }
        $this->container['bloodline_id'] = $bloodline_id;

        return $this;
    }

    /**
     * Gets charisma
     *
     * @return int
     */
    public function getCharisma()
    {
        return $this->container['charisma'];
    }

    /**
     * Sets charisma
     *
     * @param int $charisma charisma integer
     *
     * @return self
     */
    public function setCharisma($charisma)
    {
        if (is_null($charisma)) {
            throw new \InvalidArgumentException('non-nullable charisma cannot be null');
        }
        $this->container['charisma'] = $charisma;

        return $this;
    }

    /**
     * Gets corporation_id
     *
     * @return int
     */
    public function getCorporationId()
    {
        return $this->container['corporation_id'];
    }

    /**
     * Sets corporation_id
     *
     * @param int $corporation_id corporation_id integer
     *
     * @return self
     */
    public function setCorporationId($corporation_id)
    {
        if (is_null($corporation_id)) {
            throw new \InvalidArgumentException('non-nullable corporation_id cannot be null');
        }
        $this->container['corporation_id'] = $corporation_id;

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
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets intelligence
     *
     * @return int
     */
    public function getIntelligence()
    {
        return $this->container['intelligence'];
    }

    /**
     * Sets intelligence
     *
     * @param int $intelligence intelligence integer
     *
     * @return self
     */
    public function setIntelligence($intelligence)
    {
        if (is_null($intelligence)) {
            throw new \InvalidArgumentException('non-nullable intelligence cannot be null');
        }
        $this->container['intelligence'] = $intelligence;

        return $this;
    }

    /**
     * Gets memory
     *
     * @return int
     */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
     * Sets memory
     *
     * @param int $memory memory integer
     *
     * @return self
     */
    public function setMemory($memory)
    {
        if (is_null($memory)) {
            throw new \InvalidArgumentException('non-nullable memory cannot be null');
        }
        $this->container['memory'] = $memory;

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
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets perception
     *
     * @return int
     */
    public function getPerception()
    {
        return $this->container['perception'];
    }

    /**
     * Sets perception
     *
     * @param int $perception perception integer
     *
     * @return self
     */
    public function setPerception($perception)
    {
        if (is_null($perception)) {
            throw new \InvalidArgumentException('non-nullable perception cannot be null');
        }
        $this->container['perception'] = $perception;

        return $this;
    }

    /**
     * Gets race_id
     *
     * @return int
     */
    public function getRaceId()
    {
        return $this->container['race_id'];
    }

    /**
     * Sets race_id
     *
     * @param int $race_id race_id integer
     *
     * @return self
     */
    public function setRaceId($race_id)
    {
        if (is_null($race_id)) {
            throw new \InvalidArgumentException('non-nullable race_id cannot be null');
        }
        $this->container['race_id'] = $race_id;

        return $this;
    }

    /**
     * Gets ship_type_id
     *
     * @return int
     */
    public function getShipTypeId()
    {
        return $this->container['ship_type_id'];
    }

    /**
     * Sets ship_type_id
     *
     * @param int $ship_type_id ship_type_id integer
     *
     * @return self
     */
    public function setShipTypeId($ship_type_id)
    {
        if (is_null($ship_type_id)) {
            array_push($this->openAPINullablesSetToNull, 'ship_type_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ship_type_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ship_type_id'] = $ship_type_id;

        return $this;
    }

    /**
     * Gets willpower
     *
     * @return int
     */
    public function getWillpower()
    {
        return $this->container['willpower'];
    }

    /**
     * Sets willpower
     *
     * @param int $willpower willpower integer
     *
     * @return self
     */
    public function setWillpower($willpower)
    {
        if (is_null($willpower)) {
            throw new \InvalidArgumentException('non-nullable willpower cannot be null');
        }
        $this->container['willpower'] = $willpower;

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


