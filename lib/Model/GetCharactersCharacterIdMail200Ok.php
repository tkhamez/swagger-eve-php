<?php
/**
 * GetCharactersCharacterIdMail200Ok
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
 * The version of the OpenAPI document: 1.10.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
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
 * GetCharactersCharacterIdMail200Ok Class Doc Comment
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
class GetCharactersCharacterIdMail200Ok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_mail_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'from' => 'int',
        'is_read' => 'bool',
        'labels' => 'int[]',
        'mail_id' => 'int',
        'recipients' => '\Swagger\Client\Eve\Model\GetCharactersCharacterIdMailRecipient[]',
        'subject' => 'string',
        'timestamp' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'from' => 'int32',
        'is_read' => null,
        'labels' => 'int32',
        'mail_id' => 'int32',
        'recipients' => null,
        'subject' => null,
        'timestamp' => 'date-time'
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
        'from' => 'from',
        'is_read' => 'is_read',
        'labels' => 'labels',
        'mail_id' => 'mail_id',
        'recipients' => 'recipients',
        'subject' => 'subject',
        'timestamp' => 'timestamp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'from' => 'setFrom',
        'is_read' => 'setIsRead',
        'labels' => 'setLabels',
        'mail_id' => 'setMailId',
        'recipients' => 'setRecipients',
        'subject' => 'setSubject',
        'timestamp' => 'setTimestamp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'from' => 'getFrom',
        'is_read' => 'getIsRead',
        'labels' => 'getLabels',
        'mail_id' => 'getMailId',
        'recipients' => 'getRecipients',
        'subject' => 'getSubject',
        'timestamp' => 'getTimestamp'
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
        $this->container['from'] = $data['from'] ?? null;
        $this->container['is_read'] = $data['is_read'] ?? null;
        $this->container['labels'] = $data['labels'] ?? null;
        $this->container['mail_id'] = $data['mail_id'] ?? null;
        $this->container['recipients'] = $data['recipients'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['labels']) && (count($this->container['labels']) > 25)) {
            $invalidProperties[] = "invalid value for 'labels', number of items must be less than or equal to 25.";
        }

        if (!is_null($this->container['recipients']) && (count($this->container['recipients']) > 52)) {
            $invalidProperties[] = "invalid value for 'recipients', number of items must be less than or equal to 52.";
        }

        if (!is_null($this->container['recipients']) && (count($this->container['recipients']) < 0)) {
            $invalidProperties[] = "invalid value for 'recipients', number of items must be greater than or equal to 0.";
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
     * Gets from
     *
     * @return int|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param int|null $from From whom the mail was sent
     *
     * @return self
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets is_read
     *
     * @return bool|null
     */
    public function getIsRead()
    {
        return $this->container['is_read'];
    }

    /**
     * Sets is_read
     *
     * @param bool|null $is_read is_read boolean
     *
     * @return self
     */
    public function setIsRead($is_read)
    {
        $this->container['is_read'] = $is_read;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return int[]|null
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param int[]|null $labels labels array
     *
     * @return self
     */
    public function setLabels($labels)
    {

        if (!is_null($labels) && (count($labels) > 25)) {
            throw new \InvalidArgumentException('invalid value for $labels when calling GetCharactersCharacterIdMail200Ok., number of items must be less than or equal to 25.');
        }
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets mail_id
     *
     * @return int|null
     */
    public function getMailId()
    {
        return $this->container['mail_id'];
    }

    /**
     * Sets mail_id
     *
     * @param int|null $mail_id mail_id integer
     *
     * @return self
     */
    public function setMailId($mail_id)
    {
        $this->container['mail_id'] = $mail_id;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return \Swagger\Client\Eve\Model\GetCharactersCharacterIdMailRecipient[]|null
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param \Swagger\Client\Eve\Model\GetCharactersCharacterIdMailRecipient[]|null $recipients Recipients of the mail
     *
     * @return self
     */
    public function setRecipients($recipients)
    {

        if (!is_null($recipients) && (count($recipients) > 52)) {
            throw new \InvalidArgumentException('invalid value for $recipients when calling GetCharactersCharacterIdMail200Ok., number of items must be less than or equal to 52.');
        }
        if (!is_null($recipients) && (count($recipients) < 0)) {
            throw new \InvalidArgumentException('invalid length for $recipients when calling GetCharactersCharacterIdMail200Ok., number of items must be greater than or equal to 0.');
        }
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject Mail subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime|null $timestamp When the mail was sent
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

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


