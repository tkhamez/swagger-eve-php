<?php
/**
 * GetCorporationsCorporationIdOk
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
 * The version of the OpenAPI document: 1.11
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
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
 * GetCorporationsCorporationIdOk Class Doc Comment
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
class GetCorporationsCorporationIdOk implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_corporations_corporation_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alliance_id' => 'int',
        'ceo_id' => 'int',
        'creator_id' => 'int',
        'date_founded' => '\DateTime',
        'description' => 'string',
        'faction_id' => 'int',
        'home_station_id' => 'int',
        'member_count' => 'int',
        'name' => 'string',
        'shares' => 'int',
        'tax_rate' => 'float',
        'ticker' => 'string',
        'url' => 'string',
        'war_eligible' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'alliance_id' => 'int32',
        'ceo_id' => 'int32',
        'creator_id' => 'int32',
        'date_founded' => 'date-time',
        'description' => null,
        'faction_id' => 'int32',
        'home_station_id' => 'int32',
        'member_count' => 'int32',
        'name' => null,
        'shares' => 'int64',
        'tax_rate' => 'float',
        'ticker' => null,
        'url' => null,
        'war_eligible' => null
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
        'alliance_id' => 'alliance_id',
        'ceo_id' => 'ceo_id',
        'creator_id' => 'creator_id',
        'date_founded' => 'date_founded',
        'description' => 'description',
        'faction_id' => 'faction_id',
        'home_station_id' => 'home_station_id',
        'member_count' => 'member_count',
        'name' => 'name',
        'shares' => 'shares',
        'tax_rate' => 'tax_rate',
        'ticker' => 'ticker',
        'url' => 'url',
        'war_eligible' => 'war_eligible'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alliance_id' => 'setAllianceId',
        'ceo_id' => 'setCeoId',
        'creator_id' => 'setCreatorId',
        'date_founded' => 'setDateFounded',
        'description' => 'setDescription',
        'faction_id' => 'setFactionId',
        'home_station_id' => 'setHomeStationId',
        'member_count' => 'setMemberCount',
        'name' => 'setName',
        'shares' => 'setShares',
        'tax_rate' => 'setTaxRate',
        'ticker' => 'setTicker',
        'url' => 'setUrl',
        'war_eligible' => 'setWarEligible'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alliance_id' => 'getAllianceId',
        'ceo_id' => 'getCeoId',
        'creator_id' => 'getCreatorId',
        'date_founded' => 'getDateFounded',
        'description' => 'getDescription',
        'faction_id' => 'getFactionId',
        'home_station_id' => 'getHomeStationId',
        'member_count' => 'getMemberCount',
        'name' => 'getName',
        'shares' => 'getShares',
        'tax_rate' => 'getTaxRate',
        'ticker' => 'getTicker',
        'url' => 'getUrl',
        'war_eligible' => 'getWarEligible'
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
        $this->container['alliance_id'] = $data['alliance_id'] ?? null;
        $this->container['ceo_id'] = $data['ceo_id'] ?? null;
        $this->container['creator_id'] = $data['creator_id'] ?? null;
        $this->container['date_founded'] = $data['date_founded'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['faction_id'] = $data['faction_id'] ?? null;
        $this->container['home_station_id'] = $data['home_station_id'] ?? null;
        $this->container['member_count'] = $data['member_count'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['shares'] = $data['shares'] ?? null;
        $this->container['tax_rate'] = $data['tax_rate'] ?? null;
        $this->container['ticker'] = $data['ticker'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['war_eligible'] = $data['war_eligible'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ceo_id'] === null) {
            $invalidProperties[] = "'ceo_id' can't be null";
        }
        if ($this->container['creator_id'] === null) {
            $invalidProperties[] = "'creator_id' can't be null";
        }
        if ($this->container['member_count'] === null) {
            $invalidProperties[] = "'member_count' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['tax_rate'] === null) {
            $invalidProperties[] = "'tax_rate' can't be null";
        }
        if (($this->container['tax_rate'] > 1)) {
            $invalidProperties[] = "invalid value for 'tax_rate', must be smaller than or equal to 1.";
        }

        if (($this->container['tax_rate'] < 0)) {
            $invalidProperties[] = "invalid value for 'tax_rate', must be bigger than or equal to 0.";
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
     * Gets alliance_id
     *
     * @return int|null
     */
    public function getAllianceId()
    {
        return $this->container['alliance_id'];
    }

    /**
     * Sets alliance_id
     *
     * @param int|null $alliance_id ID of the alliance that corporation is a member of, if any
     *
     * @return self
     */
    public function setAllianceId($alliance_id)
    {
        $this->container['alliance_id'] = $alliance_id;

        return $this;
    }

    /**
     * Gets ceo_id
     *
     * @return int
     */
    public function getCeoId()
    {
        return $this->container['ceo_id'];
    }

    /**
     * Sets ceo_id
     *
     * @param int $ceo_id ceo_id integer
     *
     * @return self
     */
    public function setCeoId($ceo_id)
    {
        $this->container['ceo_id'] = $ceo_id;

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
     * @param int $creator_id creator_id integer
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
     * @return \DateTime|null
     */
    public function getDateFounded()
    {
        return $this->container['date_founded'];
    }

    /**
     * Sets date_founded
     *
     * @param \DateTime|null $date_founded date_founded string
     *
     * @return self
     */
    public function setDateFounded($date_founded)
    {
        $this->container['date_founded'] = $date_founded;

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
        $this->container['description'] = $description;

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
     * @param int|null $faction_id faction_id integer
     *
     * @return self
     */
    public function setFactionId($faction_id)
    {
        $this->container['faction_id'] = $faction_id;

        return $this;
    }

    /**
     * Gets home_station_id
     *
     * @return int|null
     */
    public function getHomeStationId()
    {
        return $this->container['home_station_id'];
    }

    /**
     * Sets home_station_id
     *
     * @param int|null $home_station_id home_station_id integer
     *
     * @return self
     */
    public function setHomeStationId($home_station_id)
    {
        $this->container['home_station_id'] = $home_station_id;

        return $this;
    }

    /**
     * Gets member_count
     *
     * @return int
     */
    public function getMemberCount()
    {
        return $this->container['member_count'];
    }

    /**
     * Sets member_count
     *
     * @param int $member_count member_count integer
     *
     * @return self
     */
    public function setMemberCount($member_count)
    {
        $this->container['member_count'] = $member_count;

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
     * @param string $name the full name of the corporation
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets shares
     *
     * @return int|null
     */
    public function getShares()
    {
        return $this->container['shares'];
    }

    /**
     * Sets shares
     *
     * @param int|null $shares shares integer
     *
     * @return self
     */
    public function setShares($shares)
    {
        $this->container['shares'] = $shares;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return float
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param float $tax_rate tax_rate number
     *
     * @return self
     */
    public function setTaxRate($tax_rate)
    {

        if (($tax_rate > 1)) {
            throw new \InvalidArgumentException('invalid value for $tax_rate when calling GetCorporationsCorporationIdOk., must be smaller than or equal to 1.');
        }
        if (($tax_rate < 0)) {
            throw new \InvalidArgumentException('invalid value for $tax_rate when calling GetCorporationsCorporationIdOk., must be bigger than or equal to 0.');
        }

        $this->container['tax_rate'] = $tax_rate;

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
     * @param string $ticker the short name of the corporation
     *
     * @return self
     */
    public function setTicker($ticker)
    {
        $this->container['ticker'] = $ticker;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url string
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets war_eligible
     *
     * @return bool|null
     */
    public function getWarEligible()
    {
        return $this->container['war_eligible'];
    }

    /**
     * Sets war_eligible
     *
     * @param bool|null $war_eligible war_eligible boolean
     *
     * @return self
     */
    public function setWarEligible($war_eligible)
    {
        $this->container['war_eligible'] = $war_eligible;

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


