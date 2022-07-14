<?php
/**
 * GetCharactersCharacterIdCalendar200Ok
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
 * GetCharactersCharacterIdCalendar200Ok Class Doc Comment
 *
 * @category Class
 * @description event
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetCharactersCharacterIdCalendar200Ok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_calendar_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'event_date' => '\DateTime',
        'event_id' => 'int',
        'event_response' => 'string',
        'importance' => 'int',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'event_date' => 'date-time',
        'event_id' => 'int32',
        'event_response' => null,
        'importance' => 'int32',
        'title' => null
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
        'event_date' => 'event_date',
        'event_id' => 'event_id',
        'event_response' => 'event_response',
        'importance' => 'importance',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event_date' => 'setEventDate',
        'event_id' => 'setEventId',
        'event_response' => 'setEventResponse',
        'importance' => 'setImportance',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event_date' => 'getEventDate',
        'event_id' => 'getEventId',
        'event_response' => 'getEventResponse',
        'importance' => 'getImportance',
        'title' => 'getTitle'
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

    public const EVENT_RESPONSE_DECLINED = 'declined';
    public const EVENT_RESPONSE_NOT_RESPONDED = 'not_responded';
    public const EVENT_RESPONSE_ACCEPTED = 'accepted';
    public const EVENT_RESPONSE_TENTATIVE = 'tentative';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventResponseAllowableValues()
    {
        return [
            self::EVENT_RESPONSE_DECLINED,
            self::EVENT_RESPONSE_NOT_RESPONDED,
            self::EVENT_RESPONSE_ACCEPTED,
            self::EVENT_RESPONSE_TENTATIVE,
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
        $this->container['event_date'] = $data['event_date'] ?? null;
        $this->container['event_id'] = $data['event_id'] ?? null;
        $this->container['event_response'] = $data['event_response'] ?? null;
        $this->container['importance'] = $data['importance'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEventResponseAllowableValues();
        if (!is_null($this->container['event_response']) && !in_array($this->container['event_response'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'event_response', must be one of '%s'",
                $this->container['event_response'],
                implode("', '", $allowedValues)
            );
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
     * Gets event_date
     *
     * @return \DateTime|null
     */
    public function getEventDate()
    {
        return $this->container['event_date'];
    }

    /**
     * Sets event_date
     *
     * @param \DateTime|null $event_date event_date string
     *
     * @return self
     */
    public function setEventDate($event_date)
    {
        $this->container['event_date'] = $event_date;

        return $this;
    }

    /**
     * Gets event_id
     *
     * @return int|null
     */
    public function getEventId()
    {
        return $this->container['event_id'];
    }

    /**
     * Sets event_id
     *
     * @param int|null $event_id event_id integer
     *
     * @return self
     */
    public function setEventId($event_id)
    {
        $this->container['event_id'] = $event_id;

        return $this;
    }

    /**
     * Gets event_response
     *
     * @return string|null
     */
    public function getEventResponse()
    {
        return $this->container['event_response'];
    }

    /**
     * Sets event_response
     *
     * @param string|null $event_response event_response string
     *
     * @return self
     */
    public function setEventResponse($event_response)
    {
        /*$allowedValues = $this->getEventResponseAllowableValues();
        if (!is_null($event_response) && !in_array($event_response, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'event_response', must be one of '%s'",
                    $event_response,
                    implode("', '", $allowedValues)
                )
            );
        }*/
        $this->container['event_response'] = $event_response;

        return $this;
    }

    /**
     * Gets importance
     *
     * @return int|null
     */
    public function getImportance()
    {
        return $this->container['importance'];
    }

    /**
     * Sets importance
     *
     * @param int|null $importance importance integer
     *
     * @return self
     */
    public function setImportance($importance)
    {
        $this->container['importance'] = $importance;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title string
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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


