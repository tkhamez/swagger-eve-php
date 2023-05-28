<?php
/**
 * GetSovereigntyCampaigns200Ok
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
 * GetSovereigntyCampaigns200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetSovereigntyCampaigns200Ok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_sovereignty_campaigns_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attackers_score' => 'float',
        'campaign_id' => 'int',
        'constellation_id' => 'int',
        'defender_id' => 'int',
        'defender_score' => 'float',
        'event_type' => 'string',
        'participants' => '\Swagger\Client\Eve\Model\GetSovereigntyCampaignsParticipant[]',
        'solar_system_id' => 'int',
        'start_time' => '\DateTime',
        'structure_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'attackers_score' => 'float',
        'campaign_id' => 'int32',
        'constellation_id' => 'int32',
        'defender_id' => 'int32',
        'defender_score' => 'float',
        'event_type' => null,
        'participants' => null,
        'solar_system_id' => 'int32',
        'start_time' => 'date-time',
        'structure_id' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'attackers_score' => false,
		'campaign_id' => false,
		'constellation_id' => false,
		'defender_id' => false,
		'defender_score' => false,
		'event_type' => false,
		'participants' => false,
		'solar_system_id' => false,
		'start_time' => false,
		'structure_id' => false
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
        'attackers_score' => 'attackers_score',
        'campaign_id' => 'campaign_id',
        'constellation_id' => 'constellation_id',
        'defender_id' => 'defender_id',
        'defender_score' => 'defender_score',
        'event_type' => 'event_type',
        'participants' => 'participants',
        'solar_system_id' => 'solar_system_id',
        'start_time' => 'start_time',
        'structure_id' => 'structure_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attackers_score' => 'setAttackersScore',
        'campaign_id' => 'setCampaignId',
        'constellation_id' => 'setConstellationId',
        'defender_id' => 'setDefenderId',
        'defender_score' => 'setDefenderScore',
        'event_type' => 'setEventType',
        'participants' => 'setParticipants',
        'solar_system_id' => 'setSolarSystemId',
        'start_time' => 'setStartTime',
        'structure_id' => 'setStructureId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attackers_score' => 'getAttackersScore',
        'campaign_id' => 'getCampaignId',
        'constellation_id' => 'getConstellationId',
        'defender_id' => 'getDefenderId',
        'defender_score' => 'getDefenderScore',
        'event_type' => 'getEventType',
        'participants' => 'getParticipants',
        'solar_system_id' => 'getSolarSystemId',
        'start_time' => 'getStartTime',
        'structure_id' => 'getStructureId'
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

    public const EVENT_TYPE_TCU_DEFENSE = 'tcu_defense';
    public const EVENT_TYPE_IHUB_DEFENSE = 'ihub_defense';
    public const EVENT_TYPE_STATION_DEFENSE = 'station_defense';
    public const EVENT_TYPE_STATION_FREEPORT = 'station_freeport';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventTypeAllowableValues()
    {
        return [
            self::EVENT_TYPE_TCU_DEFENSE,
            self::EVENT_TYPE_IHUB_DEFENSE,
            self::EVENT_TYPE_STATION_DEFENSE,
            self::EVENT_TYPE_STATION_FREEPORT,
        ];
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
        $this->setIfExists('attackers_score', $data ?? [], null);
        $this->setIfExists('campaign_id', $data ?? [], null);
        $this->setIfExists('constellation_id', $data ?? [], null);
        $this->setIfExists('defender_id', $data ?? [], null);
        $this->setIfExists('defender_score', $data ?? [], null);
        $this->setIfExists('event_type', $data ?? [], null);
        $this->setIfExists('participants', $data ?? [], null);
        $this->setIfExists('solar_system_id', $data ?? [], null);
        $this->setIfExists('start_time', $data ?? [], null);
        $this->setIfExists('structure_id', $data ?? [], null);
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

        if ($this->container['campaign_id'] === null) {
            $invalidProperties[] = "'campaign_id' can't be null";
        }
        if ($this->container['constellation_id'] === null) {
            $invalidProperties[] = "'constellation_id' can't be null";
        }
        if ($this->container['event_type'] === null) {
            $invalidProperties[] = "'event_type' can't be null";
        }
        $allowedValues = $this->getEventTypeAllowableValues();
        if (!is_null($this->container['event_type']) && !in_array($this->container['event_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'event_type', must be one of '%s'",
                $this->container['event_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['participants']) && (count($this->container['participants']) > 5000)) {
            $invalidProperties[] = "invalid value for 'participants', number of items must be less than or equal to 5000.";
        }

        if ($this->container['solar_system_id'] === null) {
            $invalidProperties[] = "'solar_system_id' can't be null";
        }
        if ($this->container['start_time'] === null) {
            $invalidProperties[] = "'start_time' can't be null";
        }
        if ($this->container['structure_id'] === null) {
            $invalidProperties[] = "'structure_id' can't be null";
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
     * Gets attackers_score
     *
     * @return float|null
     */
    public function getAttackersScore()
    {
        return $this->container['attackers_score'];
    }

    /**
     * Sets attackers_score
     *
     * @param float|null $attackers_score Score for all attacking parties, only present in Defense Events.
     *
     * @return self
     */
    public function setAttackersScore($attackers_score)
    {
        if (is_null($attackers_score)) {
            throw new \InvalidArgumentException('non-nullable attackers_score cannot be null');
        }
        $this->container['attackers_score'] = $attackers_score;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param int $campaign_id Unique ID for this campaign.
     *
     * @return self
     */
    public function setCampaignId($campaign_id)
    {
        if (is_null($campaign_id)) {
            throw new \InvalidArgumentException('non-nullable campaign_id cannot be null');
        }
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets constellation_id
     *
     * @return int
     */
    public function getConstellationId()
    {
        return $this->container['constellation_id'];
    }

    /**
     * Sets constellation_id
     *
     * @param int $constellation_id The constellation in which the campaign will take place.
     *
     * @return self
     */
    public function setConstellationId($constellation_id)
    {
        if (is_null($constellation_id)) {
            throw new \InvalidArgumentException('non-nullable constellation_id cannot be null');
        }
        $this->container['constellation_id'] = $constellation_id;

        return $this;
    }

    /**
     * Gets defender_id
     *
     * @return int|null
     */
    public function getDefenderId()
    {
        return $this->container['defender_id'];
    }

    /**
     * Sets defender_id
     *
     * @param int|null $defender_id Defending alliance, only present in Defense Events
     *
     * @return self
     */
    public function setDefenderId($defender_id)
    {
        if (is_null($defender_id)) {
            throw new \InvalidArgumentException('non-nullable defender_id cannot be null');
        }
        $this->container['defender_id'] = $defender_id;

        return $this;
    }

    /**
     * Gets defender_score
     *
     * @return float|null
     */
    public function getDefenderScore()
    {
        return $this->container['defender_score'];
    }

    /**
     * Sets defender_score
     *
     * @param float|null $defender_score Score for the defending alliance, only present in Defense Events.
     *
     * @return self
     */
    public function setDefenderScore($defender_score)
    {
        if (is_null($defender_score)) {
            throw new \InvalidArgumentException('non-nullable defender_score cannot be null');
        }
        $this->container['defender_score'] = $defender_score;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string $event_type Type of event this campaign is for. tcu_defense, ihub_defense and station_defense are referred to as \"Defense Events\", station_freeport as \"Freeport Events\".
     *
     * @return self
     */
    public function setEventType($event_type)
    {
        if (is_null($event_type)) {
            throw new \InvalidArgumentException('non-nullable event_type cannot be null');
        }
        $allowedValues = $this->getEventTypeAllowableValues();
        if (!in_array($event_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'event_type', must be one of '%s'",
                    $event_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets participants
     *
     * @return \Swagger\Client\Eve\Model\GetSovereigntyCampaignsParticipant[]|null
     */
    public function getParticipants()
    {
        return $this->container['participants'];
    }

    /**
     * Sets participants
     *
     * @param \Swagger\Client\Eve\Model\GetSovereigntyCampaignsParticipant[]|null $participants Alliance participating and their respective scores, only present in Freeport Events.
     *
     * @return self
     */
    public function setParticipants($participants)
    {
        if (is_null($participants)) {
            throw new \InvalidArgumentException('non-nullable participants cannot be null');
        }

        if ((count($participants) > 5000)) {
            throw new \InvalidArgumentException('invalid value for $participants when calling GetSovereigntyCampaigns200Ok., number of items must be less than or equal to 5000.');
        }
        $this->container['participants'] = $participants;

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
     * @param int $solar_system_id The solar system the structure is located in.
     *
     * @return self
     */
    public function setSolarSystemId($solar_system_id)
    {
        if (is_null($solar_system_id)) {
            throw new \InvalidArgumentException('non-nullable solar_system_id cannot be null');
        }
        $this->container['solar_system_id'] = $solar_system_id;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime $start_time Time the event is scheduled to start.
     *
     * @return self
     */
    public function setStartTime($start_time)
    {
        if (is_null($start_time)) {
            throw new \InvalidArgumentException('non-nullable start_time cannot be null');
        }
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets structure_id
     *
     * @return int
     */
    public function getStructureId()
    {
        return $this->container['structure_id'];
    }

    /**
     * Sets structure_id
     *
     * @param int $structure_id The structure item ID that is related to this campaign.
     *
     * @return self
     */
    public function setStructureId($structure_id)
    {
        if (is_null($structure_id)) {
            throw new \InvalidArgumentException('non-nullable structure_id cannot be null');
        }
        $this->container['structure_id'] = $structure_id;

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


