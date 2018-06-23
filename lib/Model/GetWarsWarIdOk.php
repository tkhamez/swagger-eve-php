<?php
/**
 * GetWarsWarIdOk
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
 * GetWarsWarIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetWarsWarIdOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_wars_war_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aggressor' => '\Swagger\Client\Eve\Model\GetWarsWarIdAggressor',
        'allies' => '\Swagger\Client\Eve\Model\GetWarsWarIdAlly[]',
        'declared' => '\DateTime',
        'defender' => '\Swagger\Client\Eve\Model\GetWarsWarIdDefender',
        'finished' => '\DateTime',
        'id' => 'int',
        'mutual' => 'bool',
        'open_for_allies' => 'bool',
        'retracted' => '\DateTime',
        'started' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'aggressor' => null,
        'allies' => null,
        'declared' => 'date-time',
        'defender' => null,
        'finished' => 'date-time',
        'id' => 'int32',
        'mutual' => null,
        'open_for_allies' => null,
        'retracted' => 'date-time',
        'started' => 'date-time'
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
        'aggressor' => 'aggressor',
        'allies' => 'allies',
        'declared' => 'declared',
        'defender' => 'defender',
        'finished' => 'finished',
        'id' => 'id',
        'mutual' => 'mutual',
        'open_for_allies' => 'open_for_allies',
        'retracted' => 'retracted',
        'started' => 'started'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aggressor' => 'setAggressor',
        'allies' => 'setAllies',
        'declared' => 'setDeclared',
        'defender' => 'setDefender',
        'finished' => 'setFinished',
        'id' => 'setId',
        'mutual' => 'setMutual',
        'open_for_allies' => 'setOpenForAllies',
        'retracted' => 'setRetracted',
        'started' => 'setStarted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aggressor' => 'getAggressor',
        'allies' => 'getAllies',
        'declared' => 'getDeclared',
        'defender' => 'getDefender',
        'finished' => 'getFinished',
        'id' => 'getId',
        'mutual' => 'getMutual',
        'open_for_allies' => 'getOpenForAllies',
        'retracted' => 'getRetracted',
        'started' => 'getStarted'
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
        $this->container['aggressor'] = isset($data['aggressor']) ? $data['aggressor'] : null;
        $this->container['allies'] = isset($data['allies']) ? $data['allies'] : null;
        $this->container['declared'] = isset($data['declared']) ? $data['declared'] : null;
        $this->container['defender'] = isset($data['defender']) ? $data['defender'] : null;
        $this->container['finished'] = isset($data['finished']) ? $data['finished'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['mutual'] = isset($data['mutual']) ? $data['mutual'] : null;
        $this->container['open_for_allies'] = isset($data['open_for_allies']) ? $data['open_for_allies'] : null;
        $this->container['retracted'] = isset($data['retracted']) ? $data['retracted'] : null;
        $this->container['started'] = isset($data['started']) ? $data['started'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['aggressor'] === null) {
            $invalidProperties[] = "'aggressor' can't be null";
        }
        if ($this->container['declared'] === null) {
            $invalidProperties[] = "'declared' can't be null";
        }
        if ($this->container['defender'] === null) {
            $invalidProperties[] = "'defender' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['mutual'] === null) {
            $invalidProperties[] = "'mutual' can't be null";
        }
        if ($this->container['open_for_allies'] === null) {
            $invalidProperties[] = "'open_for_allies' can't be null";
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

        if ($this->container['aggressor'] === null) {
            return false;
        }
        if ($this->container['declared'] === null) {
            return false;
        }
        if ($this->container['defender'] === null) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['mutual'] === null) {
            return false;
        }
        if ($this->container['open_for_allies'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets aggressor
     *
     * @return \Swagger\Client\Eve\Model\GetWarsWarIdAggressor
     */
    public function getAggressor()
    {
        return $this->container['aggressor'];
    }

    /**
     * Sets aggressor
     *
     * @param \Swagger\Client\Eve\Model\GetWarsWarIdAggressor $aggressor aggressor
     *
     * @return $this
     */
    public function setAggressor($aggressor)
    {
        $this->container['aggressor'] = $aggressor;

        return $this;
    }

    /**
     * Gets allies
     *
     * @return \Swagger\Client\Eve\Model\GetWarsWarIdAlly[]
     */
    public function getAllies()
    {
        return $this->container['allies'];
    }

    /**
     * Sets allies
     *
     * @param \Swagger\Client\Eve\Model\GetWarsWarIdAlly[] $allies allied corporations or alliances, each object contains either corporation_id or alliance_id
     *
     * @return $this
     */
    public function setAllies($allies)
    {
        $this->container['allies'] = $allies;

        return $this;
    }

    /**
     * Gets declared
     *
     * @return \DateTime
     */
    public function getDeclared()
    {
        return $this->container['declared'];
    }

    /**
     * Sets declared
     *
     * @param \DateTime $declared Time that the war was declared
     *
     * @return $this
     */
    public function setDeclared($declared)
    {
        $this->container['declared'] = $declared;

        return $this;
    }

    /**
     * Gets defender
     *
     * @return \Swagger\Client\Eve\Model\GetWarsWarIdDefender
     */
    public function getDefender()
    {
        return $this->container['defender'];
    }

    /**
     * Sets defender
     *
     * @param \Swagger\Client\Eve\Model\GetWarsWarIdDefender $defender defender
     *
     * @return $this
     */
    public function setDefender($defender)
    {
        $this->container['defender'] = $defender;

        return $this;
    }

    /**
     * Gets finished
     *
     * @return \DateTime
     */
    public function getFinished()
    {
        return $this->container['finished'];
    }

    /**
     * Sets finished
     *
     * @param \DateTime $finished Time the war ended and shooting was no longer allowed
     *
     * @return $this
     */
    public function setFinished($finished)
    {
        $this->container['finished'] = $finished;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id ID of the specified war
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets mutual
     *
     * @return bool
     */
    public function getMutual()
    {
        return $this->container['mutual'];
    }

    /**
     * Sets mutual
     *
     * @param bool $mutual Was the war declared mutual by both parties
     *
     * @return $this
     */
    public function setMutual($mutual)
    {
        $this->container['mutual'] = $mutual;

        return $this;
    }

    /**
     * Gets open_for_allies
     *
     * @return bool
     */
    public function getOpenForAllies()
    {
        return $this->container['open_for_allies'];
    }

    /**
     * Sets open_for_allies
     *
     * @param bool $open_for_allies Is the war currently open for allies or not
     *
     * @return $this
     */
    public function setOpenForAllies($open_for_allies)
    {
        $this->container['open_for_allies'] = $open_for_allies;

        return $this;
    }

    /**
     * Gets retracted
     *
     * @return \DateTime
     */
    public function getRetracted()
    {
        return $this->container['retracted'];
    }

    /**
     * Sets retracted
     *
     * @param \DateTime $retracted Time the war was retracted but both sides could still shoot each other
     *
     * @return $this
     */
    public function setRetracted($retracted)
    {
        $this->container['retracted'] = $retracted;

        return $this;
    }

    /**
     * Gets started
     *
     * @return \DateTime
     */
    public function getStarted()
    {
        return $this->container['started'];
    }

    /**
     * Sets started
     *
     * @param \DateTime $started Time when the war started and both sides could shoot each other
     *
     * @return $this
     */
    public function setStarted($started)
    {
        $this->container['started'] = $started;

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


