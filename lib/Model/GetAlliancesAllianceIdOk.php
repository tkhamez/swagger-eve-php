<?php
/**
 * GetAlliancesAllianceIdOk
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
 * OpenAPI Generator version: 6.0.1
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
 * GetAlliancesAllianceIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetAlliancesAllianceIdOk implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_alliances_alliance_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'creator_corporation_id' => 'int',
        'creator_id' => 'int',
        'date_founded' => '\DateTime',
        'executor_corporation_id' => 'int',
        'faction_id' => 'int',
        'name' => 'string',
        'ticker' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'creator_corporation_id' => 'int32',
        'creator_id' => 'int32',
        'date_founded' => 'date-time',
        'executor_corporation_id' => 'int32',
        'faction_id' => 'int32',
        'name' => null,
        'ticker' => null
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
        'creator_corporation_id' => 'creator_corporation_id',
        'creator_id' => 'creator_id',
        'date_founded' => 'date_founded',
        'executor_corporation_id' => 'executor_corporation_id',
        'faction_id' => 'faction_id',
        'name' => 'name',
        'ticker' => 'ticker'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'creator_corporation_id' => 'setCreatorCorporationId',
        'creator_id' => 'setCreatorId',
        'date_founded' => 'setDateFounded',
        'executor_corporation_id' => 'setExecutorCorporationId',
        'faction_id' => 'setFactionId',
        'name' => 'setName',
        'ticker' => 'setTicker'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'creator_corporation_id' => 'getCreatorCorporationId',
        'creator_id' => 'getCreatorId',
        'date_founded' => 'getDateFounded',
        'executor_corporation_id' => 'getExecutorCorporationId',
        'faction_id' => 'getFactionId',
        'name' => 'getName',
        'ticker' => 'getTicker'
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
        $this->container['creator_corporation_id'] = $data['creator_corporation_id'] ?? null;
        $this->container['creator_id'] = $data['creator_id'] ?? null;
        $this->container['date_founded'] = $data['date_founded'] ?? null;
        $this->container['executor_corporation_id'] = $data['executor_corporation_id'] ?? null;
        $this->container['faction_id'] = $data['faction_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['ticker'] = $data['ticker'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['creator_corporation_id'] === null) {
            $invalidProperties[] = "'creator_corporation_id' can't be null";
        }
        if ($this->container['creator_id'] === null) {
            $invalidProperties[] = "'creator_id' can't be null";
        }
        if ($this->container['date_founded'] === null) {
            $invalidProperties[] = "'date_founded' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['ticker'] === null) {
            $invalidProperties[] = "'ticker' can't be null";
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
     * Gets creator_corporation_id
     *
     * @return int
     */
    public function getCreatorCorporationId()
    {
        return $this->container['creator_corporation_id'];
    }

    /**
     * Sets creator_corporation_id
     *
     * @param int $creator_corporation_id ID of the corporation that created the alliance
     *
     * @return self
     */
    public function setCreatorCorporationId($creator_corporation_id)
    {
        $this->container['creator_corporation_id'] = $creator_corporation_id;

        return $this;
    }

    /**
     * Gets creator_id
     *
     * @return int
     */
    public function getCreatorId()
    {
        return $this->container['creator_id'];
    }

    /**
     * Sets creator_id
     *
     * @param int $creator_id ID of the character that created the alliance
     *
     * @return self
     */
    public function setCreatorId($creator_id)
    {
        $this->container['creator_id'] = $creator_id;

        return $this;
    }

    /**
     * Gets date_founded
     *
     * @return \DateTime
     */
    public function getDateFounded()
    {
        return $this->container['date_founded'];
    }

    /**
     * Sets date_founded
     *
     * @param \DateTime $date_founded date_founded string
     *
     * @return self
     */
    public function setDateFounded($date_founded)
    {
        $this->container['date_founded'] = $date_founded;

        return $this;
    }

    /**
     * Gets executor_corporation_id
     *
     * @return int|null
     */
    public function getExecutorCorporationId()
    {
        return $this->container['executor_corporation_id'];
    }

    /**
     * Sets executor_corporation_id
     *
     * @param int|null $executor_corporation_id the executor corporation ID, if this alliance is not closed
     *
     * @return self
     */
    public function setExecutorCorporationId($executor_corporation_id)
    {
        $this->container['executor_corporation_id'] = $executor_corporation_id;

        return $this;
    }

    /**
     * Gets faction_id
     *
     * @return int|null
     */
    public function getFactionId()
    {
        return $this->container['faction_id'];
    }

    /**
     * Sets faction_id
     *
     * @param int|null $faction_id Faction ID this alliance is fighting for, if this alliance is enlisted in factional warfare
     *
     * @return self
     */
    public function setFactionId($faction_id)
    {
        $this->container['faction_id'] = $faction_id;

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
     * @param string $name the full name of the alliance
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets ticker
     *
     * @return string
     */
    public function getTicker()
    {
        return $this->container['ticker'];
    }

    /**
     * Sets ticker
     *
     * @param string $ticker the short name of the alliance
     *
     * @return self
     */
    public function setTicker($ticker)
    {
        $this->container['ticker'] = $ticker;

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


