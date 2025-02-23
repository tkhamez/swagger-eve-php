<?php
/**
 * GetCorporationsCorporationIdStructures200Ok
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
 * GetCorporationsCorporationIdStructures200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetCorporationsCorporationIdStructures200Ok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_corporations_corporation_id_structures_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'corporation_id' => 'int',
        'fuel_expires' => '\DateTime',
        'name' => 'string',
        'next_reinforce_apply' => '\DateTime',
        'next_reinforce_hour' => 'int',
        'profile_id' => 'int',
        'reinforce_hour' => 'int',
        'services' => '\Swagger\Client\Eve\Model\GetCorporationsCorporationIdStructuresService[]',
        'state' => 'string',
        'state_timer_end' => '\DateTime',
        'state_timer_start' => '\DateTime',
        'structure_id' => 'int',
        'system_id' => 'int',
        'type_id' => 'int',
        'unanchors_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'corporation_id' => 'int32',
        'fuel_expires' => 'date-time',
        'name' => null,
        'next_reinforce_apply' => 'date-time',
        'next_reinforce_hour' => 'int32',
        'profile_id' => 'int32',
        'reinforce_hour' => 'int32',
        'services' => null,
        'state' => null,
        'state_timer_end' => 'date-time',
        'state_timer_start' => 'date-time',
        'structure_id' => 'int64',
        'system_id' => 'int32',
        'type_id' => 'int32',
        'unanchors_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'corporation_id' => false,
        'fuel_expires' => false,
        'name' => false,
        'next_reinforce_apply' => false,
        'next_reinforce_hour' => false,
        'profile_id' => false,
        'reinforce_hour' => false,
        'services' => false,
        'state' => false,
        'state_timer_end' => false,
        'state_timer_start' => false,
        'structure_id' => false,
        'system_id' => false,
        'type_id' => false,
        'unanchors_at' => false
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
        'corporation_id' => 'corporation_id',
        'fuel_expires' => 'fuel_expires',
        'name' => 'name',
        'next_reinforce_apply' => 'next_reinforce_apply',
        'next_reinforce_hour' => 'next_reinforce_hour',
        'profile_id' => 'profile_id',
        'reinforce_hour' => 'reinforce_hour',
        'services' => 'services',
        'state' => 'state',
        'state_timer_end' => 'state_timer_end',
        'state_timer_start' => 'state_timer_start',
        'structure_id' => 'structure_id',
        'system_id' => 'system_id',
        'type_id' => 'type_id',
        'unanchors_at' => 'unanchors_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'corporation_id' => 'setCorporationId',
        'fuel_expires' => 'setFuelExpires',
        'name' => 'setName',
        'next_reinforce_apply' => 'setNextReinforceApply',
        'next_reinforce_hour' => 'setNextReinforceHour',
        'profile_id' => 'setProfileId',
        'reinforce_hour' => 'setReinforceHour',
        'services' => 'setServices',
        'state' => 'setState',
        'state_timer_end' => 'setStateTimerEnd',
        'state_timer_start' => 'setStateTimerStart',
        'structure_id' => 'setStructureId',
        'system_id' => 'setSystemId',
        'type_id' => 'setTypeId',
        'unanchors_at' => 'setUnanchorsAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'corporation_id' => 'getCorporationId',
        'fuel_expires' => 'getFuelExpires',
        'name' => 'getName',
        'next_reinforce_apply' => 'getNextReinforceApply',
        'next_reinforce_hour' => 'getNextReinforceHour',
        'profile_id' => 'getProfileId',
        'reinforce_hour' => 'getReinforceHour',
        'services' => 'getServices',
        'state' => 'getState',
        'state_timer_end' => 'getStateTimerEnd',
        'state_timer_start' => 'getStateTimerStart',
        'structure_id' => 'getStructureId',
        'system_id' => 'getSystemId',
        'type_id' => 'getTypeId',
        'unanchors_at' => 'getUnanchorsAt'
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

    public const STATE_ANCHOR_VULNERABLE = 'anchor_vulnerable';
    public const STATE_ANCHORING = 'anchoring';
    public const STATE_ARMOR_REINFORCE = 'armor_reinforce';
    public const STATE_ARMOR_VULNERABLE = 'armor_vulnerable';
    public const STATE_DEPLOY_VULNERABLE = 'deploy_vulnerable';
    public const STATE_FITTING_INVULNERABLE = 'fitting_invulnerable';
    public const STATE_HULL_REINFORCE = 'hull_reinforce';
    public const STATE_HULL_VULNERABLE = 'hull_vulnerable';
    public const STATE_ONLINE_DEPRECATED = 'online_deprecated';
    public const STATE_ONLINING_VULNERABLE = 'onlining_vulnerable';
    public const STATE_SHIELD_VULNERABLE = 'shield_vulnerable';
    public const STATE_UNANCHORED = 'unanchored';
    public const STATE_UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ANCHOR_VULNERABLE,
            self::STATE_ANCHORING,
            self::STATE_ARMOR_REINFORCE,
            self::STATE_ARMOR_VULNERABLE,
            self::STATE_DEPLOY_VULNERABLE,
            self::STATE_FITTING_INVULNERABLE,
            self::STATE_HULL_REINFORCE,
            self::STATE_HULL_VULNERABLE,
            self::STATE_ONLINE_DEPRECATED,
            self::STATE_ONLINING_VULNERABLE,
            self::STATE_SHIELD_VULNERABLE,
            self::STATE_UNANCHORED,
            self::STATE_UNKNOWN,
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
        $this->setIfExists('corporation_id', $data ?? [], null);
        $this->setIfExists('fuel_expires', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('next_reinforce_apply', $data ?? [], null);
        $this->setIfExists('next_reinforce_hour', $data ?? [], null);
        $this->setIfExists('profile_id', $data ?? [], null);
        $this->setIfExists('reinforce_hour', $data ?? [], null);
        $this->setIfExists('services', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('state_timer_end', $data ?? [], null);
        $this->setIfExists('state_timer_start', $data ?? [], null);
        $this->setIfExists('structure_id', $data ?? [], null);
        $this->setIfExists('system_id', $data ?? [], null);
        $this->setIfExists('type_id', $data ?? [], null);
        $this->setIfExists('unanchors_at', $data ?? [], null);
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

        if ($this->container['corporation_id'] === null) {
            $invalidProperties[] = "'corporation_id' can't be null";
        }
        if (!is_null($this->container['next_reinforce_hour']) && ($this->container['next_reinforce_hour'] > 23)) {
            $invalidProperties[] = "invalid value for 'next_reinforce_hour', must be smaller than or equal to 23.";
        }

        if (!is_null($this->container['next_reinforce_hour']) && ($this->container['next_reinforce_hour'] < 0)) {
            $invalidProperties[] = "invalid value for 'next_reinforce_hour', must be bigger than or equal to 0.";
        }

        if ($this->container['profile_id'] === null) {
            $invalidProperties[] = "'profile_id' can't be null";
        }
        if (!is_null($this->container['reinforce_hour']) && ($this->container['reinforce_hour'] > 23)) {
            $invalidProperties[] = "invalid value for 'reinforce_hour', must be smaller than or equal to 23.";
        }

        if (!is_null($this->container['reinforce_hour']) && ($this->container['reinforce_hour'] < 0)) {
            $invalidProperties[] = "invalid value for 'reinforce_hour', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['services']) && (count($this->container['services']) > 10)) {
            $invalidProperties[] = "invalid value for 'services', number of items must be less than or equal to 10.";
        }

        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['structure_id'] === null) {
            $invalidProperties[] = "'structure_id' can't be null";
        }
        if ($this->container['system_id'] === null) {
            $invalidProperties[] = "'system_id' can't be null";
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
     * @param int $corporation_id ID of the corporation that owns the structure
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
     * Gets fuel_expires
     *
     * @return \DateTime|null
     */
    public function getFuelExpires()
    {
        return $this->container['fuel_expires'];
    }

    /**
     * Sets fuel_expires
     *
     * @param \DateTime|null $fuel_expires Date on which the structure will run out of fuel
     *
     * @return self
     */
    public function setFuelExpires($fuel_expires)
    {
        if (is_null($fuel_expires)) {
            throw new \InvalidArgumentException('non-nullable fuel_expires cannot be null');
        }
        $this->container['fuel_expires'] = $fuel_expires;

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
     * @param string|null $name The structure name
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
     * Gets next_reinforce_apply
     *
     * @return \DateTime|null
     */
    public function getNextReinforceApply()
    {
        return $this->container['next_reinforce_apply'];
    }

    /**
     * Sets next_reinforce_apply
     *
     * @param \DateTime|null $next_reinforce_apply The date and time when the structure's newly requested reinforcement times (e.g. next_reinforce_hour and next_reinforce_day) will take effect
     *
     * @return self
     */
    public function setNextReinforceApply($next_reinforce_apply)
    {
        if (is_null($next_reinforce_apply)) {
            throw new \InvalidArgumentException('non-nullable next_reinforce_apply cannot be null');
        }
        $this->container['next_reinforce_apply'] = $next_reinforce_apply;

        return $this;
    }

    /**
     * Gets next_reinforce_hour
     *
     * @return int|null
     */
    public function getNextReinforceHour()
    {
        return $this->container['next_reinforce_hour'];
    }

    /**
     * Sets next_reinforce_hour
     *
     * @param int|null $next_reinforce_hour The requested change to reinforce_hour that will take effect at the time shown by next_reinforce_apply
     *
     * @return self
     */
    public function setNextReinforceHour($next_reinforce_hour)
    {
        if (is_null($next_reinforce_hour)) {
            throw new \InvalidArgumentException('non-nullable next_reinforce_hour cannot be null');
        }

        if (($next_reinforce_hour > 23)) {
            throw new \InvalidArgumentException('invalid value for $next_reinforce_hour when calling GetCorporationsCorporationIdStructures200Ok., must be smaller than or equal to 23.');
        }
        if (($next_reinforce_hour < 0)) {
            throw new \InvalidArgumentException('invalid value for $next_reinforce_hour when calling GetCorporationsCorporationIdStructures200Ok., must be bigger than or equal to 0.');
        }

        $this->container['next_reinforce_hour'] = $next_reinforce_hour;

        return $this;
    }

    /**
     * Gets profile_id
     *
     * @return int
     */
    public function getProfileId()
    {
        return $this->container['profile_id'];
    }

    /**
     * Sets profile_id
     *
     * @param int $profile_id The id of the ACL profile for this citadel
     *
     * @return self
     */
    public function setProfileId($profile_id)
    {
        if (is_null($profile_id)) {
            throw new \InvalidArgumentException('non-nullable profile_id cannot be null');
        }
        $this->container['profile_id'] = $profile_id;

        return $this;
    }

    /**
     * Gets reinforce_hour
     *
     * @return int|null
     */
    public function getReinforceHour()
    {
        return $this->container['reinforce_hour'];
    }

    /**
     * Sets reinforce_hour
     *
     * @param int|null $reinforce_hour The hour of day that determines the four hour window when the structure will randomly exit its reinforcement periods and become vulnerable to attack against its armor and/or hull. The structure will become vulnerable at a random time that is +/- 2 hours centered on the value of this property
     *
     * @return self
     */
    public function setReinforceHour($reinforce_hour)
    {
        if (is_null($reinforce_hour)) {
            throw new \InvalidArgumentException('non-nullable reinforce_hour cannot be null');
        }

        if (($reinforce_hour > 23)) {
            throw new \InvalidArgumentException('invalid value for $reinforce_hour when calling GetCorporationsCorporationIdStructures200Ok., must be smaller than or equal to 23.');
        }
        if (($reinforce_hour < 0)) {
            throw new \InvalidArgumentException('invalid value for $reinforce_hour when calling GetCorporationsCorporationIdStructures200Ok., must be bigger than or equal to 0.');
        }

        $this->container['reinforce_hour'] = $reinforce_hour;

        return $this;
    }

    /**
     * Gets services
     *
     * @return \Swagger\Client\Eve\Model\GetCorporationsCorporationIdStructuresService[]|null
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param \Swagger\Client\Eve\Model\GetCorporationsCorporationIdStructuresService[]|null $services Contains a list of service upgrades, and their state
     *
     * @return self
     */
    public function setServices($services)
    {
        if (is_null($services)) {
            throw new \InvalidArgumentException('non-nullable services cannot be null');
        }

        if ((count($services) > 10)) {
            throw new \InvalidArgumentException('invalid value for $services when calling GetCorporationsCorporationIdStructures200Ok., number of items must be less than or equal to 10.');
        }
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state string
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'state', must be one of '%s'",
                    $state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets state_timer_end
     *
     * @return \DateTime|null
     */
    public function getStateTimerEnd()
    {
        return $this->container['state_timer_end'];
    }

    /**
     * Sets state_timer_end
     *
     * @param \DateTime|null $state_timer_end Date at which the structure will move to it's next state
     *
     * @return self
     */
    public function setStateTimerEnd($state_timer_end)
    {
        if (is_null($state_timer_end)) {
            throw new \InvalidArgumentException('non-nullable state_timer_end cannot be null');
        }
        $this->container['state_timer_end'] = $state_timer_end;

        return $this;
    }

    /**
     * Gets state_timer_start
     *
     * @return \DateTime|null
     */
    public function getStateTimerStart()
    {
        return $this->container['state_timer_start'];
    }

    /**
     * Sets state_timer_start
     *
     * @param \DateTime|null $state_timer_start Date at which the structure entered it's current state
     *
     * @return self
     */
    public function setStateTimerStart($state_timer_start)
    {
        if (is_null($state_timer_start)) {
            throw new \InvalidArgumentException('non-nullable state_timer_start cannot be null');
        }
        $this->container['state_timer_start'] = $state_timer_start;

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
     * @param int $structure_id The Item ID of the structure
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
     * Gets system_id
     *
     * @return int
     */
    public function getSystemId()
    {
        return $this->container['system_id'];
    }

    /**
     * Sets system_id
     *
     * @param int $system_id The solar system the structure is in
     *
     * @return self
     */
    public function setSystemId($system_id)
    {
        if (is_null($system_id)) {
            throw new \InvalidArgumentException('non-nullable system_id cannot be null');
        }
        $this->container['system_id'] = $system_id;

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
     * @param int $type_id The type id of the structure
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
     * Gets unanchors_at
     *
     * @return \DateTime|null
     */
    public function getUnanchorsAt()
    {
        return $this->container['unanchors_at'];
    }

    /**
     * Sets unanchors_at
     *
     * @param \DateTime|null $unanchors_at Date at which the structure will unanchor
     *
     * @return self
     */
    public function setUnanchorsAt($unanchors_at)
    {
        if (is_null($unanchors_at)) {
            throw new \InvalidArgumentException('non-nullable unanchors_at cannot be null');
        }
        $this->container['unanchors_at'] = $unanchors_at;

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


