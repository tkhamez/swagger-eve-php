<?php
/**
 * GetUniverseGraphicsGraphicIdOk
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
 * The version of the OpenAPI document: 1.12
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
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
 * GetUniverseGraphicsGraphicIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetUniverseGraphicsGraphicIdOk implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_universe_graphics_graphic_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'collision_file' => 'string',
        'graphic_file' => 'string',
        'graphic_id' => 'int',
        'icon_folder' => 'string',
        'sof_dna' => 'string',
        'sof_fation_name' => 'string',
        'sof_hull_name' => 'string',
        'sof_race_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'collision_file' => null,
        'graphic_file' => null,
        'graphic_id' => 'int32',
        'icon_folder' => null,
        'sof_dna' => null,
        'sof_fation_name' => null,
        'sof_hull_name' => null,
        'sof_race_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'collision_file' => false,
		'graphic_file' => false,
		'graphic_id' => false,
		'icon_folder' => false,
		'sof_dna' => false,
		'sof_fation_name' => false,
		'sof_hull_name' => false,
		'sof_race_name' => false
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
        'collision_file' => 'collision_file',
        'graphic_file' => 'graphic_file',
        'graphic_id' => 'graphic_id',
        'icon_folder' => 'icon_folder',
        'sof_dna' => 'sof_dna',
        'sof_fation_name' => 'sof_fation_name',
        'sof_hull_name' => 'sof_hull_name',
        'sof_race_name' => 'sof_race_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'collision_file' => 'setCollisionFile',
        'graphic_file' => 'setGraphicFile',
        'graphic_id' => 'setGraphicId',
        'icon_folder' => 'setIconFolder',
        'sof_dna' => 'setSofDna',
        'sof_fation_name' => 'setSofFationName',
        'sof_hull_name' => 'setSofHullName',
        'sof_race_name' => 'setSofRaceName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'collision_file' => 'getCollisionFile',
        'graphic_file' => 'getGraphicFile',
        'graphic_id' => 'getGraphicId',
        'icon_folder' => 'getIconFolder',
        'sof_dna' => 'getSofDna',
        'sof_fation_name' => 'getSofFationName',
        'sof_hull_name' => 'getSofHullName',
        'sof_race_name' => 'getSofRaceName'
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
        $this->setIfExists('collision_file', $data ?? [], null);
        $this->setIfExists('graphic_file', $data ?? [], null);
        $this->setIfExists('graphic_id', $data ?? [], null);
        $this->setIfExists('icon_folder', $data ?? [], null);
        $this->setIfExists('sof_dna', $data ?? [], null);
        $this->setIfExists('sof_fation_name', $data ?? [], null);
        $this->setIfExists('sof_hull_name', $data ?? [], null);
        $this->setIfExists('sof_race_name', $data ?? [], null);
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

        if ($this->container['graphic_id'] === null) {
            $invalidProperties[] = "'graphic_id' can't be null";
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
     * Gets collision_file
     *
     * @return string|null
     */
    public function getCollisionFile()
    {
        return $this->container['collision_file'];
    }

    /**
     * Sets collision_file
     *
     * @param string|null $collision_file collision_file string
     *
     * @return self
     */
    public function setCollisionFile($collision_file)
    {
        if (is_null($collision_file)) {
            throw new \InvalidArgumentException('non-nullable collision_file cannot be null');
        }
        $this->container['collision_file'] = $collision_file;

        return $this;
    }

    /**
     * Gets graphic_file
     *
     * @return string|null
     */
    public function getGraphicFile()
    {
        return $this->container['graphic_file'];
    }

    /**
     * Sets graphic_file
     *
     * @param string|null $graphic_file graphic_file string
     *
     * @return self
     */
    public function setGraphicFile($graphic_file)
    {
        if (is_null($graphic_file)) {
            throw new \InvalidArgumentException('non-nullable graphic_file cannot be null');
        }
        $this->container['graphic_file'] = $graphic_file;

        return $this;
    }

    /**
     * Gets graphic_id
     *
     * @return int
     */
    public function getGraphicId()
    {
        return $this->container['graphic_id'];
    }

    /**
     * Sets graphic_id
     *
     * @param int $graphic_id graphic_id integer
     *
     * @return self
     */
    public function setGraphicId($graphic_id)
    {
        if (is_null($graphic_id)) {
            throw new \InvalidArgumentException('non-nullable graphic_id cannot be null');
        }
        $this->container['graphic_id'] = $graphic_id;

        return $this;
    }

    /**
     * Gets icon_folder
     *
     * @return string|null
     */
    public function getIconFolder()
    {
        return $this->container['icon_folder'];
    }

    /**
     * Sets icon_folder
     *
     * @param string|null $icon_folder icon_folder string
     *
     * @return self
     */
    public function setIconFolder($icon_folder)
    {
        if (is_null($icon_folder)) {
            throw new \InvalidArgumentException('non-nullable icon_folder cannot be null');
        }
        $this->container['icon_folder'] = $icon_folder;

        return $this;
    }

    /**
     * Gets sof_dna
     *
     * @return string|null
     */
    public function getSofDna()
    {
        return $this->container['sof_dna'];
    }

    /**
     * Sets sof_dna
     *
     * @param string|null $sof_dna sof_dna string
     *
     * @return self
     */
    public function setSofDna($sof_dna)
    {
        if (is_null($sof_dna)) {
            throw new \InvalidArgumentException('non-nullable sof_dna cannot be null');
        }
        $this->container['sof_dna'] = $sof_dna;

        return $this;
    }

    /**
     * Gets sof_fation_name
     *
     * @return string|null
     */
    public function getSofFationName()
    {
        return $this->container['sof_fation_name'];
    }

    /**
     * Sets sof_fation_name
     *
     * @param string|null $sof_fation_name sof_fation_name string
     *
     * @return self
     */
    public function setSofFationName($sof_fation_name)
    {
        if (is_null($sof_fation_name)) {
            throw new \InvalidArgumentException('non-nullable sof_fation_name cannot be null');
        }
        $this->container['sof_fation_name'] = $sof_fation_name;

        return $this;
    }

    /**
     * Gets sof_hull_name
     *
     * @return string|null
     */
    public function getSofHullName()
    {
        return $this->container['sof_hull_name'];
    }

    /**
     * Sets sof_hull_name
     *
     * @param string|null $sof_hull_name sof_hull_name string
     *
     * @return self
     */
    public function setSofHullName($sof_hull_name)
    {
        if (is_null($sof_hull_name)) {
            throw new \InvalidArgumentException('non-nullable sof_hull_name cannot be null');
        }
        $this->container['sof_hull_name'] = $sof_hull_name;

        return $this;
    }

    /**
     * Gets sof_race_name
     *
     * @return string|null
     */
    public function getSofRaceName()
    {
        return $this->container['sof_race_name'];
    }

    /**
     * Sets sof_race_name
     *
     * @param string|null $sof_race_name sof_race_name string
     *
     * @return self
     */
    public function setSofRaceName($sof_race_name)
    {
        if (is_null($sof_race_name)) {
            throw new \InvalidArgumentException('non-nullable sof_race_name cannot be null');
        }
        $this->container['sof_race_name'] = $sof_race_name;

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


