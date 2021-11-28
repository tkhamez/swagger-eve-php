<?php
/**
 * GetOpportunitiesGroupsGroupIdOk
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
 * GetOpportunitiesGroupsGroupIdOk Class Doc Comment
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
class GetOpportunitiesGroupsGroupIdOk implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_opportunities_groups_group_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'connected_groups' => 'int[]',
        'description' => 'string',
        'group_id' => 'int',
        'name' => 'string',
        'notification' => 'string',
        'required_tasks' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'connected_groups' => 'int32',
        'description' => null,
        'group_id' => 'int32',
        'name' => null,
        'notification' => null,
        'required_tasks' => 'int32'
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
        'connected_groups' => 'connected_groups',
        'description' => 'description',
        'group_id' => 'group_id',
        'name' => 'name',
        'notification' => 'notification',
        'required_tasks' => 'required_tasks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'connected_groups' => 'setConnectedGroups',
        'description' => 'setDescription',
        'group_id' => 'setGroupId',
        'name' => 'setName',
        'notification' => 'setNotification',
        'required_tasks' => 'setRequiredTasks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'connected_groups' => 'getConnectedGroups',
        'description' => 'getDescription',
        'group_id' => 'getGroupId',
        'name' => 'getName',
        'notification' => 'getNotification',
        'required_tasks' => 'getRequiredTasks'
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
        $this->container['connected_groups'] = $data['connected_groups'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['group_id'] = $data['group_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['notification'] = $data['notification'] ?? null;
        $this->container['required_tasks'] = $data['required_tasks'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['connected_groups'] === null) {
            $invalidProperties[] = "'connected_groups' can't be null";
        }
        if ((count($this->container['connected_groups']) > 50)) {
            $invalidProperties[] = "invalid value for 'connected_groups', number of items must be less than or equal to 50.";
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['group_id'] === null) {
            $invalidProperties[] = "'group_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['notification'] === null) {
            $invalidProperties[] = "'notification' can't be null";
        }
        if ($this->container['required_tasks'] === null) {
            $invalidProperties[] = "'required_tasks' can't be null";
        }
        if ((count($this->container['required_tasks']) > 100)) {
            $invalidProperties[] = "invalid value for 'required_tasks', number of items must be less than or equal to 100.";
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
     * Gets connected_groups
     *
     * @return int[]
     */
    public function getConnectedGroups()
    {
        return $this->container['connected_groups'];
    }

    /**
     * Sets connected_groups
     *
     * @param int[] $connected_groups The groups that are connected to this group on the opportunities map
     *
     * @return self
     */
    public function setConnectedGroups($connected_groups)
    {

        if ((count($connected_groups) > 50)) {
            throw new \InvalidArgumentException('invalid value for $connected_groups when calling GetOpportunitiesGroupsGroupIdOk., number of items must be less than or equal to 50.');
        }
        $this->container['connected_groups'] = $connected_groups;

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
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return int
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param int $group_id group_id integer
     *
     * @return self
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

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
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets notification
     *
     * @return string
     */
    public function getNotification()
    {
        return $this->container['notification'];
    }

    /**
     * Sets notification
     *
     * @param string $notification notification string
     *
     * @return self
     */
    public function setNotification($notification)
    {
        $this->container['notification'] = $notification;

        return $this;
    }

    /**
     * Gets required_tasks
     *
     * @return int[]
     */
    public function getRequiredTasks()
    {
        return $this->container['required_tasks'];
    }

    /**
     * Sets required_tasks
     *
     * @param int[] $required_tasks Tasks need to complete for this group
     *
     * @return self
     */
    public function setRequiredTasks($required_tasks)
    {

        if ((count($required_tasks) > 100)) {
            throw new \InvalidArgumentException('invalid value for $required_tasks when calling GetOpportunitiesGroupsGroupIdOk., number of items must be less than or equal to 100.');
        }
        $this->container['required_tasks'] = $required_tasks;

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


