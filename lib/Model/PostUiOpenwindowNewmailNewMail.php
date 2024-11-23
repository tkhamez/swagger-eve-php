<?php
/**
 * PostUiOpenwindowNewmailNewMail
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
 * The version of the OpenAPI document: 1.26
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
 * PostUiOpenwindowNewmailNewMail Class Doc Comment
 *
 * @category Class
 * @description new_mail object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PostUiOpenwindowNewmailNewMail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'post_ui_openwindow_newmail_new_mail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'body' => 'string',
        'recipients' => 'int[]',
        'subject' => 'string',
        'to_corp_or_alliance_id' => 'int',
        'to_mailing_list_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'body' => null,
        'recipients' => 'int32',
        'subject' => null,
        'to_corp_or_alliance_id' => 'int32',
        'to_mailing_list_id' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'body' => false,
        'recipients' => false,
        'subject' => false,
        'to_corp_or_alliance_id' => false,
        'to_mailing_list_id' => false
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
        'body' => 'body',
        'recipients' => 'recipients',
        'subject' => 'subject',
        'to_corp_or_alliance_id' => 'to_corp_or_alliance_id',
        'to_mailing_list_id' => 'to_mailing_list_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'body' => 'setBody',
        'recipients' => 'setRecipients',
        'subject' => 'setSubject',
        'to_corp_or_alliance_id' => 'setToCorpOrAllianceId',
        'to_mailing_list_id' => 'setToMailingListId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'body' => 'getBody',
        'recipients' => 'getRecipients',
        'subject' => 'getSubject',
        'to_corp_or_alliance_id' => 'getToCorpOrAllianceId',
        'to_mailing_list_id' => 'getToMailingListId'
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
        $this->setIfExists('body', $data ?? [], null);
        $this->setIfExists('recipients', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('to_corp_or_alliance_id', $data ?? [], null);
        $this->setIfExists('to_mailing_list_id', $data ?? [], null);
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

        if ($this->container['body'] === null) {
            $invalidProperties[] = "'body' can't be null";
        }
        if ((mb_strlen($this->container['body']) > 10000)) {
            $invalidProperties[] = "invalid value for 'body', the character length must be smaller than or equal to 10000.";
        }

        if ($this->container['recipients'] === null) {
            $invalidProperties[] = "'recipients' can't be null";
        }
        if ((count($this->container['recipients']) > 50)) {
            $invalidProperties[] = "invalid value for 'recipients', number of items must be less than or equal to 50.";
        }

        if ((count($this->container['recipients']) < 1)) {
            $invalidProperties[] = "invalid value for 'recipients', number of items must be greater than or equal to 1.";
        }

        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
        }
        if ((mb_strlen($this->container['subject']) > 1000)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 1000.";
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
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body body string
     *
     * @return self
     */
    public function setBody($body)
    {
        if (is_null($body)) {
            throw new \InvalidArgumentException('non-nullable body cannot be null');
        }
        if ((mb_strlen($body) > 10000)) {
            throw new \InvalidArgumentException('invalid length for $body when calling PostUiOpenwindowNewmailNewMail., must be smaller than or equal to 10000.');
        }

        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return int[]
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param int[] $recipients recipients array
     *
     * @return self
     */
    public function setRecipients($recipients)
    {
        if (is_null($recipients)) {
            throw new \InvalidArgumentException('non-nullable recipients cannot be null');
        }

        /*if ((count($recipients) > 50)) {
            throw new \InvalidArgumentException('invalid value for $recipients when calling PostUiOpenwindowNewmailNewMail., number of items must be less than or equal to 50.');
        }*/
        if ((count($recipients) < 1)) {
            throw new \InvalidArgumentException('invalid length for $recipients when calling PostUiOpenwindowNewmailNewMail., number of items must be greater than or equal to 1.');
        }
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject subject string
     *
     * @return self
     */
    public function setSubject($subject)
    {
        if (is_null($subject)) {
            throw new \InvalidArgumentException('non-nullable subject cannot be null');
        }
        if ((mb_strlen($subject) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $subject when calling PostUiOpenwindowNewmailNewMail., must be smaller than or equal to 1000.');
        }

        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets to_corp_or_alliance_id
     *
     * @return int|null
     */
    public function getToCorpOrAllianceId()
    {
        return $this->container['to_corp_or_alliance_id'];
    }

    /**
     * Sets to_corp_or_alliance_id
     *
     * @param int|null $to_corp_or_alliance_id to_corp_or_alliance_id integer
     *
     * @return self
     */
    public function setToCorpOrAllianceId($to_corp_or_alliance_id)
    {
        if (is_null($to_corp_or_alliance_id)) {
            throw new \InvalidArgumentException('non-nullable to_corp_or_alliance_id cannot be null');
        }
        $this->container['to_corp_or_alliance_id'] = $to_corp_or_alliance_id;

        return $this;
    }

    /**
     * Gets to_mailing_list_id
     *
     * @return int|null
     */
    public function getToMailingListId()
    {
        return $this->container['to_mailing_list_id'];
    }

    /**
     * Sets to_mailing_list_id
     *
     * @param int|null $to_mailing_list_id Corporations, alliances and mailing lists are all types of mailing groups. You may only send to one mailing group, at a time, so you may fill out either this field or the to_corp_or_alliance_ids field
     *
     * @return self
     */
    public function setToMailingListId($to_mailing_list_id)
    {
        if (is_null($to_mailing_list_id)) {
            throw new \InvalidArgumentException('non-nullable to_mailing_list_id cannot be null');
        }
        $this->container['to_mailing_list_id'] = $to_mailing_list_id;

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


