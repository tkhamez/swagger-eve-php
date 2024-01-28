<?php
/**
 * GetUniverseStationsStationIdOk
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
 * OpenAPI Generator version: 7.2.0
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
 * GetUniverseStationsStationIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetUniverseStationsStationIdOk implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_universe_stations_station_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'max_dockable_ship_volume' => 'float',
        'name' => 'string',
        'office_rental_cost' => 'float',
        'owner' => 'int',
        'position' => '\Swagger\Client\Eve\Model\GetUniverseStationsStationIdPosition',
        'race_id' => 'int',
        'reprocessing_efficiency' => 'float',
        'reprocessing_stations_take' => 'float',
        'services' => 'string[]',
        'station_id' => 'int',
        'system_id' => 'int',
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
        'max_dockable_ship_volume' => 'float',
        'name' => null,
        'office_rental_cost' => 'float',
        'owner' => 'int32',
        'position' => null,
        'race_id' => 'int32',
        'reprocessing_efficiency' => 'float',
        'reprocessing_stations_take' => 'float',
        'services' => null,
        'station_id' => 'int32',
        'system_id' => 'int32',
        'type_id' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'max_dockable_ship_volume' => false,
        'name' => false,
        'office_rental_cost' => false,
        'owner' => false,
        'position' => false,
        'race_id' => false,
        'reprocessing_efficiency' => false,
        'reprocessing_stations_take' => false,
        'services' => false,
        'station_id' => false,
        'system_id' => false,
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
        'max_dockable_ship_volume' => 'max_dockable_ship_volume',
        'name' => 'name',
        'office_rental_cost' => 'office_rental_cost',
        'owner' => 'owner',
        'position' => 'position',
        'race_id' => 'race_id',
        'reprocessing_efficiency' => 'reprocessing_efficiency',
        'reprocessing_stations_take' => 'reprocessing_stations_take',
        'services' => 'services',
        'station_id' => 'station_id',
        'system_id' => 'system_id',
        'type_id' => 'type_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'max_dockable_ship_volume' => 'setMaxDockableShipVolume',
        'name' => 'setName',
        'office_rental_cost' => 'setOfficeRentalCost',
        'owner' => 'setOwner',
        'position' => 'setPosition',
        'race_id' => 'setRaceId',
        'reprocessing_efficiency' => 'setReprocessingEfficiency',
        'reprocessing_stations_take' => 'setReprocessingStationsTake',
        'services' => 'setServices',
        'station_id' => 'setStationId',
        'system_id' => 'setSystemId',
        'type_id' => 'setTypeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'max_dockable_ship_volume' => 'getMaxDockableShipVolume',
        'name' => 'getName',
        'office_rental_cost' => 'getOfficeRentalCost',
        'owner' => 'getOwner',
        'position' => 'getPosition',
        'race_id' => 'getRaceId',
        'reprocessing_efficiency' => 'getReprocessingEfficiency',
        'reprocessing_stations_take' => 'getReprocessingStationsTake',
        'services' => 'getServices',
        'station_id' => 'getStationId',
        'system_id' => 'getSystemId',
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

    public const SERVICES_BOUNTY_MISSIONS = 'bounty-missions';
    public const SERVICES_ASSASINATION_MISSIONS = 'assasination-missions';
    public const SERVICES_COURIER_MISSIONS = 'courier-missions';
    public const SERVICES_INTERBUS = 'interbus';
    public const SERVICES_REPROCESSING_PLANT = 'reprocessing-plant';
    public const SERVICES_REFINERY = 'refinery';
    public const SERVICES_MARKET = 'market';
    public const SERVICES_BLACK_MARKET = 'black-market';
    public const SERVICES_STOCK_EXCHANGE = 'stock-exchange';
    public const SERVICES_CLONING = 'cloning';
    public const SERVICES_SURGERY = 'surgery';
    public const SERVICES_DNA_THERAPY = 'dna-therapy';
    public const SERVICES_REPAIR_FACILITIES = 'repair-facilities';
    public const SERVICES_FACTORY = 'factory';
    public const SERVICES_LABRATORY = 'labratory';
    public const SERVICES_GAMBLING = 'gambling';
    public const SERVICES_FITTING = 'fitting';
    public const SERVICES_PAINTSHOP = 'paintshop';
    public const SERVICES_NEWS = 'news';
    public const SERVICES_STORAGE = 'storage';
    public const SERVICES_INSURANCE = 'insurance';
    public const SERVICES_DOCKING = 'docking';
    public const SERVICES_OFFICE_RENTAL = 'office-rental';
    public const SERVICES_JUMP_CLONE_FACILITY = 'jump-clone-facility';
    public const SERVICES_LOYALTY_POINT_STORE = 'loyalty-point-store';
    public const SERVICES_NAVY_OFFICES = 'navy-offices';
    public const SERVICES_SECURITY_OFFICES = 'security-offices';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getServicesAllowableValues()
    {
        return [
            self::SERVICES_BOUNTY_MISSIONS,
            self::SERVICES_ASSASINATION_MISSIONS,
            self::SERVICES_COURIER_MISSIONS,
            self::SERVICES_INTERBUS,
            self::SERVICES_REPROCESSING_PLANT,
            self::SERVICES_REFINERY,
            self::SERVICES_MARKET,
            self::SERVICES_BLACK_MARKET,
            self::SERVICES_STOCK_EXCHANGE,
            self::SERVICES_CLONING,
            self::SERVICES_SURGERY,
            self::SERVICES_DNA_THERAPY,
            self::SERVICES_REPAIR_FACILITIES,
            self::SERVICES_FACTORY,
            self::SERVICES_LABRATORY,
            self::SERVICES_GAMBLING,
            self::SERVICES_FITTING,
            self::SERVICES_PAINTSHOP,
            self::SERVICES_NEWS,
            self::SERVICES_STORAGE,
            self::SERVICES_INSURANCE,
            self::SERVICES_DOCKING,
            self::SERVICES_OFFICE_RENTAL,
            self::SERVICES_JUMP_CLONE_FACILITY,
            self::SERVICES_LOYALTY_POINT_STORE,
            self::SERVICES_NAVY_OFFICES,
            self::SERVICES_SECURITY_OFFICES,
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
        $this->setIfExists('max_dockable_ship_volume', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('office_rental_cost', $data ?? [], null);
        $this->setIfExists('owner', $data ?? [], null);
        $this->setIfExists('position', $data ?? [], null);
        $this->setIfExists('race_id', $data ?? [], null);
        $this->setIfExists('reprocessing_efficiency', $data ?? [], null);
        $this->setIfExists('reprocessing_stations_take', $data ?? [], null);
        $this->setIfExists('services', $data ?? [], null);
        $this->setIfExists('station_id', $data ?? [], null);
        $this->setIfExists('system_id', $data ?? [], null);
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

        if ($this->container['max_dockable_ship_volume'] === null) {
            $invalidProperties[] = "'max_dockable_ship_volume' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['office_rental_cost'] === null) {
            $invalidProperties[] = "'office_rental_cost' can't be null";
        }
        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
        if ($this->container['reprocessing_efficiency'] === null) {
            $invalidProperties[] = "'reprocessing_efficiency' can't be null";
        }
        if ($this->container['reprocessing_stations_take'] === null) {
            $invalidProperties[] = "'reprocessing_stations_take' can't be null";
        }
        if ($this->container['services'] === null) {
            $invalidProperties[] = "'services' can't be null";
        }
        if ((count($this->container['services']) > 30)) {
            $invalidProperties[] = "invalid value for 'services', number of items must be less than or equal to 30.";
        }

        if ($this->container['station_id'] === null) {
            $invalidProperties[] = "'station_id' can't be null";
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
     * Gets max_dockable_ship_volume
     *
     * @return float
     */
    public function getMaxDockableShipVolume()
    {
        return $this->container['max_dockable_ship_volume'];
    }

    /**
     * Sets max_dockable_ship_volume
     *
     * @param float $max_dockable_ship_volume max_dockable_ship_volume number
     *
     * @return self
     */
    public function setMaxDockableShipVolume($max_dockable_ship_volume)
    {
        if (is_null($max_dockable_ship_volume)) {
            throw new \InvalidArgumentException('non-nullable max_dockable_ship_volume cannot be null');
        }
        $this->container['max_dockable_ship_volume'] = $max_dockable_ship_volume;

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
     * Gets office_rental_cost
     *
     * @return float
     */
    public function getOfficeRentalCost()
    {
        return $this->container['office_rental_cost'];
    }

    /**
     * Sets office_rental_cost
     *
     * @param float $office_rental_cost office_rental_cost number
     *
     * @return self
     */
    public function setOfficeRentalCost($office_rental_cost)
    {
        if (is_null($office_rental_cost)) {
            throw new \InvalidArgumentException('non-nullable office_rental_cost cannot be null');
        }
        $this->container['office_rental_cost'] = $office_rental_cost;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return int|null
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param int|null $owner ID of the corporation that controls this station
     *
     * @return self
     */
    public function setOwner($owner)
    {
        if (is_null($owner)) {
            throw new \InvalidArgumentException('non-nullable owner cannot be null');
        }
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets position
     *
     * @return \Swagger\Client\Eve\Model\GetUniverseStationsStationIdPosition
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param \Swagger\Client\Eve\Model\GetUniverseStationsStationIdPosition $position position
     *
     * @return self
     */
    public function setPosition($position)
    {
        if (is_null($position)) {
            throw new \InvalidArgumentException('non-nullable position cannot be null');
        }
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets race_id
     *
     * @return int|null
     */
    public function getRaceId()
    {
        return $this->container['race_id'];
    }

    /**
     * Sets race_id
     *
     * @param int|null $race_id race_id integer
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
     * Gets reprocessing_efficiency
     *
     * @return float
     */
    public function getReprocessingEfficiency()
    {
        return $this->container['reprocessing_efficiency'];
    }

    /**
     * Sets reprocessing_efficiency
     *
     * @param float $reprocessing_efficiency reprocessing_efficiency number
     *
     * @return self
     */
    public function setReprocessingEfficiency($reprocessing_efficiency)
    {
        if (is_null($reprocessing_efficiency)) {
            throw new \InvalidArgumentException('non-nullable reprocessing_efficiency cannot be null');
        }
        $this->container['reprocessing_efficiency'] = $reprocessing_efficiency;

        return $this;
    }

    /**
     * Gets reprocessing_stations_take
     *
     * @return float
     */
    public function getReprocessingStationsTake()
    {
        return $this->container['reprocessing_stations_take'];
    }

    /**
     * Sets reprocessing_stations_take
     *
     * @param float $reprocessing_stations_take reprocessing_stations_take number
     *
     * @return self
     */
    public function setReprocessingStationsTake($reprocessing_stations_take)
    {
        if (is_null($reprocessing_stations_take)) {
            throw new \InvalidArgumentException('non-nullable reprocessing_stations_take cannot be null');
        }
        $this->container['reprocessing_stations_take'] = $reprocessing_stations_take;

        return $this;
    }

    /**
     * Gets services
     *
     * @return string[]
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param string[] $services services array
     *
     * @return self
     */
    public function setServices($services)
    {
        if (is_null($services)) {
            throw new \InvalidArgumentException('non-nullable services cannot be null');
        }
        /*$allowedValues = $this->getServicesAllowableValues();
        if (array_diff($services, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'services', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }*/

        if ((count($services) > 30)) {
            throw new \InvalidArgumentException('invalid value for $services when calling GetUniverseStationsStationIdOk., number of items must be less than or equal to 30.');
        }
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets station_id
     *
     * @return int
     */
    public function getStationId()
    {
        return $this->container['station_id'];
    }

    /**
     * Sets station_id
     *
     * @param int $station_id station_id integer
     *
     * @return self
     */
    public function setStationId($station_id)
    {
        if (is_null($station_id)) {
            throw new \InvalidArgumentException('non-nullable station_id cannot be null');
        }
        $this->container['station_id'] = $station_id;

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
     * @param int $system_id The solar system this station is in
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
     * @param int $type_id type_id integer
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


