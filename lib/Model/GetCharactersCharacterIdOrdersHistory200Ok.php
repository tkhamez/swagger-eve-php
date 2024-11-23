<?php
/**
 * GetCharactersCharacterIdOrdersHistory200Ok
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
 * The version of the OpenAPI document: 1.25
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
 * GetCharactersCharacterIdOrdersHistory200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetCharactersCharacterIdOrdersHistory200Ok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_orders_history_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'duration' => 'int',
        'escrow' => 'float',
        'is_buy_order' => 'bool',
        'is_corporation' => 'bool',
        'issued' => '\DateTime',
        'location_id' => 'int',
        'min_volume' => 'int',
        'order_id' => 'int',
        'price' => 'float',
        'range' => 'string',
        'region_id' => 'int',
        'state' => 'string',
        'type_id' => 'int',
        'volume_remain' => 'int',
        'volume_total' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'duration' => 'int32',
        'escrow' => 'double',
        'is_buy_order' => null,
        'is_corporation' => null,
        'issued' => 'date-time',
        'location_id' => 'int64',
        'min_volume' => 'int32',
        'order_id' => 'int64',
        'price' => 'double',
        'range' => null,
        'region_id' => 'int32',
        'state' => null,
        'type_id' => 'int32',
        'volume_remain' => 'int32',
        'volume_total' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'duration' => false,
        'escrow' => false,
        'is_buy_order' => false,
        'is_corporation' => false,
        'issued' => false,
        'location_id' => false,
        'min_volume' => false,
        'order_id' => false,
        'price' => false,
        'range' => false,
        'region_id' => false,
        'state' => false,
        'type_id' => false,
        'volume_remain' => false,
        'volume_total' => false
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
        'duration' => 'duration',
        'escrow' => 'escrow',
        'is_buy_order' => 'is_buy_order',
        'is_corporation' => 'is_corporation',
        'issued' => 'issued',
        'location_id' => 'location_id',
        'min_volume' => 'min_volume',
        'order_id' => 'order_id',
        'price' => 'price',
        'range' => 'range',
        'region_id' => 'region_id',
        'state' => 'state',
        'type_id' => 'type_id',
        'volume_remain' => 'volume_remain',
        'volume_total' => 'volume_total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'duration' => 'setDuration',
        'escrow' => 'setEscrow',
        'is_buy_order' => 'setIsBuyOrder',
        'is_corporation' => 'setIsCorporation',
        'issued' => 'setIssued',
        'location_id' => 'setLocationId',
        'min_volume' => 'setMinVolume',
        'order_id' => 'setOrderId',
        'price' => 'setPrice',
        'range' => 'setRange',
        'region_id' => 'setRegionId',
        'state' => 'setState',
        'type_id' => 'setTypeId',
        'volume_remain' => 'setVolumeRemain',
        'volume_total' => 'setVolumeTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'duration' => 'getDuration',
        'escrow' => 'getEscrow',
        'is_buy_order' => 'getIsBuyOrder',
        'is_corporation' => 'getIsCorporation',
        'issued' => 'getIssued',
        'location_id' => 'getLocationId',
        'min_volume' => 'getMinVolume',
        'order_id' => 'getOrderId',
        'price' => 'getPrice',
        'range' => 'getRange',
        'region_id' => 'getRegionId',
        'state' => 'getState',
        'type_id' => 'getTypeId',
        'volume_remain' => 'getVolumeRemain',
        'volume_total' => 'getVolumeTotal'
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

    public const RANGE__1 = '1';
    public const RANGE__10 = '10';
    public const RANGE__2 = '2';
    public const RANGE__20 = '20';
    public const RANGE__3 = '3';
    public const RANGE__30 = '30';
    public const RANGE__4 = '4';
    public const RANGE__40 = '40';
    public const RANGE__5 = '5';
    public const RANGE_REGION = 'region';
    public const RANGE_SOLARSYSTEM = 'solarsystem';
    public const RANGE_STATION = 'station';
    public const STATE_CANCELLED = 'cancelled';
    public const STATE_EXPIRED = 'expired';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRangeAllowableValues()
    {
        return [
            self::RANGE__1,
            self::RANGE__10,
            self::RANGE__2,
            self::RANGE__20,
            self::RANGE__3,
            self::RANGE__30,
            self::RANGE__4,
            self::RANGE__40,
            self::RANGE__5,
            self::RANGE_REGION,
            self::RANGE_SOLARSYSTEM,
            self::RANGE_STATION,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_CANCELLED,
            self::STATE_EXPIRED,
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
        $this->setIfExists('duration', $data ?? [], null);
        $this->setIfExists('escrow', $data ?? [], null);
        $this->setIfExists('is_buy_order', $data ?? [], null);
        $this->setIfExists('is_corporation', $data ?? [], null);
        $this->setIfExists('issued', $data ?? [], null);
        $this->setIfExists('location_id', $data ?? [], null);
        $this->setIfExists('min_volume', $data ?? [], null);
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('range', $data ?? [], null);
        $this->setIfExists('region_id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('type_id', $data ?? [], null);
        $this->setIfExists('volume_remain', $data ?? [], null);
        $this->setIfExists('volume_total', $data ?? [], null);
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

        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['is_corporation'] === null) {
            $invalidProperties[] = "'is_corporation' can't be null";
        }
        if ($this->container['issued'] === null) {
            $invalidProperties[] = "'issued' can't be null";
        }
        if ($this->container['location_id'] === null) {
            $invalidProperties[] = "'location_id' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['range'] === null) {
            $invalidProperties[] = "'range' can't be null";
        }
        $allowedValues = $this->getRangeAllowableValues();
        if (!is_null($this->container['range']) && !in_array($this->container['range'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'range', must be one of '%s'",
                $this->container['range'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['region_id'] === null) {
            $invalidProperties[] = "'region_id' can't be null";
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

        if ($this->container['type_id'] === null) {
            $invalidProperties[] = "'type_id' can't be null";
        }
        if ($this->container['volume_remain'] === null) {
            $invalidProperties[] = "'volume_remain' can't be null";
        }
        if ($this->container['volume_total'] === null) {
            $invalidProperties[] = "'volume_total' can't be null";
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
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration Number of days the order was valid for (starting from the issued date). An order expires at time issued + duration
     *
     * @return self
     */
    public function setDuration($duration)
    {
        if (is_null($duration)) {
            throw new \InvalidArgumentException('non-nullable duration cannot be null');
        }
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets escrow
     *
     * @return float|null
     */
    public function getEscrow()
    {
        return $this->container['escrow'];
    }

    /**
     * Sets escrow
     *
     * @param float|null $escrow For buy orders, the amount of ISK in escrow
     *
     * @return self
     */
    public function setEscrow($escrow)
    {
        if (is_null($escrow)) {
            throw new \InvalidArgumentException('non-nullable escrow cannot be null');
        }
        $this->container['escrow'] = $escrow;

        return $this;
    }

    /**
     * Gets is_buy_order
     *
     * @return bool|null
     */
    public function getIsBuyOrder()
    {
        return $this->container['is_buy_order'];
    }

    /**
     * Sets is_buy_order
     *
     * @param bool|null $is_buy_order True if the order is a bid (buy) order
     *
     * @return self
     */
    public function setIsBuyOrder($is_buy_order)
    {
        if (is_null($is_buy_order)) {
            throw new \InvalidArgumentException('non-nullable is_buy_order cannot be null');
        }
        $this->container['is_buy_order'] = $is_buy_order;

        return $this;
    }

    /**
     * Gets is_corporation
     *
     * @return bool
     */
    public function getIsCorporation()
    {
        return $this->container['is_corporation'];
    }

    /**
     * Sets is_corporation
     *
     * @param bool $is_corporation Signifies whether the buy/sell order was placed on behalf of a corporation.
     *
     * @return self
     */
    public function setIsCorporation($is_corporation)
    {
        if (is_null($is_corporation)) {
            throw new \InvalidArgumentException('non-nullable is_corporation cannot be null');
        }
        $this->container['is_corporation'] = $is_corporation;

        return $this;
    }

    /**
     * Gets issued
     *
     * @return \DateTime
     */
    public function getIssued()
    {
        return $this->container['issued'];
    }

    /**
     * Sets issued
     *
     * @param \DateTime $issued Date and time when this order was issued
     *
     * @return self
     */
    public function setIssued($issued)
    {
        if (is_null($issued)) {
            throw new \InvalidArgumentException('non-nullable issued cannot be null');
        }
        $this->container['issued'] = $issued;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int $location_id ID of the location where order was placed
     *
     * @return self
     */
    public function setLocationId($location_id)
    {
        if (is_null($location_id)) {
            throw new \InvalidArgumentException('non-nullable location_id cannot be null');
        }
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets min_volume
     *
     * @return int|null
     */
    public function getMinVolume()
    {
        return $this->container['min_volume'];
    }

    /**
     * Sets min_volume
     *
     * @param int|null $min_volume For buy orders, the minimum quantity that will be accepted in a matching sell order
     *
     * @return self
     */
    public function setMinVolume($min_volume)
    {
        if (is_null($min_volume)) {
            throw new \InvalidArgumentException('non-nullable min_volume cannot be null');
        }
        $this->container['min_volume'] = $min_volume;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int $order_id Unique order ID
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        if (is_null($order_id)) {
            throw new \InvalidArgumentException('non-nullable order_id cannot be null');
        }
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price Cost per unit for this order
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets range
     *
     * @return string
     */
    public function getRange()
    {
        return $this->container['range'];
    }

    /**
     * Sets range
     *
     * @param string $range Valid order range, numbers are ranges in jumps
     *
     * @return self
     */
    public function setRange($range)
    {
        if (is_null($range)) {
            throw new \InvalidArgumentException('non-nullable range cannot be null');
        }
        /*$allowedValues = $this->getRangeAllowableValues();
        if (!in_array($range, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'range', must be one of '%s'",
                    $range,
                    implode("', '", $allowedValues)
                )
            );
        }*/
        $this->container['range'] = $range;

        return $this;
    }

    /**
     * Gets region_id
     *
     * @return int
     */
    public function getRegionId()
    {
        return $this->container['region_id'];
    }

    /**
     * Sets region_id
     *
     * @param int $region_id ID of the region where order was placed
     *
     * @return self
     */
    public function setRegionId($region_id)
    {
        if (is_null($region_id)) {
            throw new \InvalidArgumentException('non-nullable region_id cannot be null');
        }
        $this->container['region_id'] = $region_id;

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
     * @param string $state Current order state
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        /*$allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'state', must be one of '%s'",
                    $state,
                    implode("', '", $allowedValues)
                )
            );
        }*/
        $this->container['state'] = $state;

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
     * @param int $type_id The type ID of the item transacted in this order
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
     * Gets volume_remain
     *
     * @return int
     */
    public function getVolumeRemain()
    {
        return $this->container['volume_remain'];
    }

    /**
     * Sets volume_remain
     *
     * @param int $volume_remain Quantity of items still required or offered
     *
     * @return self
     */
    public function setVolumeRemain($volume_remain)
    {
        if (is_null($volume_remain)) {
            throw new \InvalidArgumentException('non-nullable volume_remain cannot be null');
        }
        $this->container['volume_remain'] = $volume_remain;

        return $this;
    }

    /**
     * Gets volume_total
     *
     * @return int
     */
    public function getVolumeTotal()
    {
        return $this->container['volume_total'];
    }

    /**
     * Sets volume_total
     *
     * @param int $volume_total Quantity of items required or offered at time order was placed
     *
     * @return self
     */
    public function setVolumeTotal($volume_total)
    {
        if (is_null($volume_total)) {
            throw new \InvalidArgumentException('non-nullable volume_total cannot be null');
        }
        $this->container['volume_total'] = $volume_total;

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


