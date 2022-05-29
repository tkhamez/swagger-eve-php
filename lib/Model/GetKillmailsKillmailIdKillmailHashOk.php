<?php
/**
 * GetKillmailsKillmailIdKillmailHashOk
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
 * The version of the OpenAPI document: 1.11
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
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
 * GetKillmailsKillmailIdKillmailHashOk Class Doc Comment
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
class GetKillmailsKillmailIdKillmailHashOk implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_killmails_killmail_id_killmail_hash_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attackers' => '\Swagger\Client\Eve\Model\GetKillmailsKillmailIdKillmailHashAttacker[]',
        'killmail_id' => 'int',
        'killmail_time' => '\DateTime',
        'moon_id' => 'int',
        'solar_system_id' => 'int',
        'victim' => '\Swagger\Client\Eve\Model\GetKillmailsKillmailIdKillmailHashVictim',
        'war_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'attackers' => null,
        'killmail_id' => 'int32',
        'killmail_time' => 'date-time',
        'moon_id' => 'int32',
        'solar_system_id' => 'int32',
        'victim' => null,
        'war_id' => 'int32'
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
        'attackers' => 'attackers',
        'killmail_id' => 'killmail_id',
        'killmail_time' => 'killmail_time',
        'moon_id' => 'moon_id',
        'solar_system_id' => 'solar_system_id',
        'victim' => 'victim',
        'war_id' => 'war_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attackers' => 'setAttackers',
        'killmail_id' => 'setKillmailId',
        'killmail_time' => 'setKillmailTime',
        'moon_id' => 'setMoonId',
        'solar_system_id' => 'setSolarSystemId',
        'victim' => 'setVictim',
        'war_id' => 'setWarId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attackers' => 'getAttackers',
        'killmail_id' => 'getKillmailId',
        'killmail_time' => 'getKillmailTime',
        'moon_id' => 'getMoonId',
        'solar_system_id' => 'getSolarSystemId',
        'victim' => 'getVictim',
        'war_id' => 'getWarId'
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
        $this->container['attackers'] = $data['attackers'] ?? null;
        $this->container['killmail_id'] = $data['killmail_id'] ?? null;
        $this->container['killmail_time'] = $data['killmail_time'] ?? null;
        $this->container['moon_id'] = $data['moon_id'] ?? null;
        $this->container['solar_system_id'] = $data['solar_system_id'] ?? null;
        $this->container['victim'] = $data['victim'] ?? null;
        $this->container['war_id'] = $data['war_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['attackers'] === null) {
            $invalidProperties[] = "'attackers' can't be null";
        }
        if ((count($this->container['attackers']) > 10000)) {
            $invalidProperties[] = "invalid value for 'attackers', number of items must be less than or equal to 10000.";
        }

        if ($this->container['killmail_id'] === null) {
            $invalidProperties[] = "'killmail_id' can't be null";
        }
        if ($this->container['killmail_time'] === null) {
            $invalidProperties[] = "'killmail_time' can't be null";
        }
        if ($this->container['solar_system_id'] === null) {
            $invalidProperties[] = "'solar_system_id' can't be null";
        }
        if ($this->container['victim'] === null) {
            $invalidProperties[] = "'victim' can't be null";
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
     * Gets attackers
     *
     * @return \Swagger\Client\Eve\Model\GetKillmailsKillmailIdKillmailHashAttacker[]
     */
    public function getAttackers()
    {
        return $this->container['attackers'];
    }

    /**
     * Sets attackers
     *
     * @param \Swagger\Client\Eve\Model\GetKillmailsKillmailIdKillmailHashAttacker[] $attackers attackers array
     *
     * @return self
     */
    public function setAttackers($attackers)
    {

        if ((count($attackers) > 10000)) {
            throw new \InvalidArgumentException('invalid value for $attackers when calling GetKillmailsKillmailIdKillmailHashOk., number of items must be less than or equal to 10000.');
        }
        $this->container['attackers'] = $attackers;

        return $this;
    }

    /**
     * Gets killmail_id
     *
     * @return int
     */
    public function getKillmailId()
    {
        return $this->container['killmail_id'];
    }

    /**
     * Sets killmail_id
     *
     * @param int $killmail_id ID of the killmail
     *
     * @return self
     */
    public function setKillmailId($killmail_id)
    {
        $this->container['killmail_id'] = $killmail_id;

        return $this;
    }

    /**
     * Gets killmail_time
     *
     * @return \DateTime
     */
    public function getKillmailTime()
    {
        return $this->container['killmail_time'];
    }

    /**
     * Sets killmail_time
     *
     * @param \DateTime $killmail_time Time that the victim was killed and the killmail generated
     *
     * @return self
     */
    public function setKillmailTime($killmail_time)
    {
        $this->container['killmail_time'] = $killmail_time;

        return $this;
    }

    /**
     * Gets moon_id
     *
     * @return int|null
     */
    public function getMoonId()
    {
        return $this->container['moon_id'];
    }

    /**
     * Sets moon_id
     *
     * @param int|null $moon_id Moon if the kill took place at one
     *
     * @return self
     */
    public function setMoonId($moon_id)
    {
        $this->container['moon_id'] = $moon_id;

        return $this;
    }

    /**
     * Gets solar_system_id
     *
     * @return int
     */
    public function getSolarSystemId()
    {
        return $this->container['solar_system_id'];
    }

    /**
     * Sets solar_system_id
     *
     * @param int $solar_system_id Solar system that the kill took place in
     *
     * @return self
     */
    public function setSolarSystemId($solar_system_id)
    {
        $this->container['solar_system_id'] = $solar_system_id;

        return $this;
    }

    /**
     * Gets victim
     *
     * @return \Swagger\Client\Eve\Model\GetKillmailsKillmailIdKillmailHashVictim
     */
    public function getVictim()
    {
        return $this->container['victim'];
    }

    /**
     * Sets victim
     *
     * @param \Swagger\Client\Eve\Model\GetKillmailsKillmailIdKillmailHashVictim $victim victim
     *
     * @return self
     */
    public function setVictim($victim)
    {
        $this->container['victim'] = $victim;

        return $this;
    }

    /**
     * Gets war_id
     *
     * @return int|null
     */
    public function getWarId()
    {
        return $this->container['war_id'];
    }

    /**
     * Sets war_id
     *
     * @param int|null $war_id War if the killmail is generated in relation to an official war
     *
     * @return self
     */
    public function setWarId($war_id)
    {
        $this->container['war_id'] = $war_id;

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


