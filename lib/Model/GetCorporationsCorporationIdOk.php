<?php
/**
 * GetCorporationsCorporationIdOk
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client\Eve
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.8.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
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
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
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
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
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
        'url' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
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
        'url' => 'url'
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
        'url' => 'setUrl'
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
        'url' => 'getUrl'
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
        return self::$swaggerModelName;
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
        $this->container['alliance_id'] = isset($data['alliance_id']) ? $data['alliance_id'] : null;
        $this->container['ceo_id'] = isset($data['ceo_id']) ? $data['ceo_id'] : null;
        $this->container['creator_id'] = isset($data['creator_id']) ? $data['creator_id'] : null;
        $this->container['date_founded'] = isset($data['date_founded']) ? $data['date_founded'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['faction_id'] = isset($data['faction_id']) ? $data['faction_id'] : null;
        $this->container['home_station_id'] = isset($data['home_station_id']) ? $data['home_station_id'] : null;
        $this->container['member_count'] = isset($data['member_count']) ? $data['member_count'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['shares'] = isset($data['shares']) ? $data['shares'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
        $this->container['ticker'] = isset($data['ticker']) ? $data['ticker'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
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

        if ($this->container['ceo_id'] === null) {
            return false;
        }
        if ($this->container['creator_id'] === null) {
            return false;
        }
        if ($this->container['member_count'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['tax_rate'] === null) {
            return false;
        }
        if ($this->container['tax_rate'] > 1) {
            return false;
        }
        if ($this->container['tax_rate'] < 0) {
            return false;
        }
        if ($this->container['ticker'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets alliance_id
     *
     * @return int
     */
    public function getAllianceId()
    {
        return $this->container['alliance_id'];
    }

    /**
     * Sets alliance_id
     *
     * @param int $alliance_id ID of the alliance that corporation is a member of, if any
     *
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return $this
     */
    public function setDateFounded($date_founded)
    {
        $this->container['date_founded'] = $date_founded;

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
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets faction_id
     *
     * @return int
     */
    public function getFactionId()
    {
        return $this->container['faction_id'];
    }

    /**
     * Sets faction_id
     *
     * @param int $faction_id faction_id integer
     *
     * @return $this
     */
    public function setFactionId($faction_id)
    {
        $this->container['faction_id'] = $faction_id;

        return $this;
    }

    /**
     * Gets home_station_id
     *
     * @return int
     */
    public function getHomeStationId()
    {
        return $this->container['home_station_id'];
    }

    /**
     * Sets home_station_id
     *
     * @param int $home_station_id home_station_id integer
     *
     * @return $this
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
     * @return $this
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
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets shares
     *
     * @return int
     */
    public function getShares()
    {
        return $this->container['shares'];
    }

    /**
     * Sets shares
     *
     * @param int $shares shares integer
     *
     * @return $this
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
     * @return $this
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
     * @return $this
     */
    public function setTicker($ticker)
    {
        $this->container['ticker'] = $ticker;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url string
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


