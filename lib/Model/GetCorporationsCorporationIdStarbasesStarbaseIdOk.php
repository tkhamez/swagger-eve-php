<?php
/**
 * GetCorporationsCorporationIdStarbasesStarbaseIdOk
 *
 * PHP version 5
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
 * The version of the OpenAPI document: 1.3.8
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
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
 * GetCorporationsCorporationIdStarbasesStarbaseIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetCorporationsCorporationIdStarbasesStarbaseIdOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_corporations_corporation_id_starbases_starbase_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow_alliance_members' => 'bool',
        'allow_corporation_members' => 'bool',
        'anchor' => 'string',
        'attack_if_at_war' => 'bool',
        'attack_if_other_security_status_dropping' => 'bool',
        'attack_security_status_threshold' => 'float',
        'attack_standing_threshold' => 'float',
        'fuel_bay_take' => 'string',
        'fuel_bay_view' => 'string',
        'fuels' => '\Swagger\Client\Eve\Model\GetCorporationsCorporationIdStarbasesStarbaseIdFuel[]',
        'offline' => 'string',
        'online' => 'string',
        'unanchor' => 'string',
        'use_alliance_standings' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'allow_alliance_members' => null,
        'allow_corporation_members' => null,
        'anchor' => null,
        'attack_if_at_war' => null,
        'attack_if_other_security_status_dropping' => null,
        'attack_security_status_threshold' => 'float',
        'attack_standing_threshold' => 'float',
        'fuel_bay_take' => null,
        'fuel_bay_view' => null,
        'fuels' => null,
        'offline' => null,
        'online' => null,
        'unanchor' => null,
        'use_alliance_standings' => null
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
        'allow_alliance_members' => 'allow_alliance_members',
        'allow_corporation_members' => 'allow_corporation_members',
        'anchor' => 'anchor',
        'attack_if_at_war' => 'attack_if_at_war',
        'attack_if_other_security_status_dropping' => 'attack_if_other_security_status_dropping',
        'attack_security_status_threshold' => 'attack_security_status_threshold',
        'attack_standing_threshold' => 'attack_standing_threshold',
        'fuel_bay_take' => 'fuel_bay_take',
        'fuel_bay_view' => 'fuel_bay_view',
        'fuels' => 'fuels',
        'offline' => 'offline',
        'online' => 'online',
        'unanchor' => 'unanchor',
        'use_alliance_standings' => 'use_alliance_standings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_alliance_members' => 'setAllowAllianceMembers',
        'allow_corporation_members' => 'setAllowCorporationMembers',
        'anchor' => 'setAnchor',
        'attack_if_at_war' => 'setAttackIfAtWar',
        'attack_if_other_security_status_dropping' => 'setAttackIfOtherSecurityStatusDropping',
        'attack_security_status_threshold' => 'setAttackSecurityStatusThreshold',
        'attack_standing_threshold' => 'setAttackStandingThreshold',
        'fuel_bay_take' => 'setFuelBayTake',
        'fuel_bay_view' => 'setFuelBayView',
        'fuels' => 'setFuels',
        'offline' => 'setOffline',
        'online' => 'setOnline',
        'unanchor' => 'setUnanchor',
        'use_alliance_standings' => 'setUseAllianceStandings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_alliance_members' => 'getAllowAllianceMembers',
        'allow_corporation_members' => 'getAllowCorporationMembers',
        'anchor' => 'getAnchor',
        'attack_if_at_war' => 'getAttackIfAtWar',
        'attack_if_other_security_status_dropping' => 'getAttackIfOtherSecurityStatusDropping',
        'attack_security_status_threshold' => 'getAttackSecurityStatusThreshold',
        'attack_standing_threshold' => 'getAttackStandingThreshold',
        'fuel_bay_take' => 'getFuelBayTake',
        'fuel_bay_view' => 'getFuelBayView',
        'fuels' => 'getFuels',
        'offline' => 'getOffline',
        'online' => 'getOnline',
        'unanchor' => 'getUnanchor',
        'use_alliance_standings' => 'getUseAllianceStandings'
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

    const ANCHOR_ALLIANCE_MEMBER = 'alliance_member';
    const ANCHOR_CONFIG_STARBASE_EQUIPMENT_ROLE = 'config_starbase_equipment_role';
    const ANCHOR_CORPORATION_MEMBER = 'corporation_member';
    const ANCHOR_STARBASE_FUEL_TECHNICIAN_ROLE = 'starbase_fuel_technician_role';
    const FUEL_BAY_TAKE_ALLIANCE_MEMBER = 'alliance_member';
    const FUEL_BAY_TAKE_CONFIG_STARBASE_EQUIPMENT_ROLE = 'config_starbase_equipment_role';
    const FUEL_BAY_TAKE_CORPORATION_MEMBER = 'corporation_member';
    const FUEL_BAY_TAKE_STARBASE_FUEL_TECHNICIAN_ROLE = 'starbase_fuel_technician_role';
    const FUEL_BAY_VIEW_ALLIANCE_MEMBER = 'alliance_member';
    const FUEL_BAY_VIEW_CONFIG_STARBASE_EQUIPMENT_ROLE = 'config_starbase_equipment_role';
    const FUEL_BAY_VIEW_CORPORATION_MEMBER = 'corporation_member';
    const FUEL_BAY_VIEW_STARBASE_FUEL_TECHNICIAN_ROLE = 'starbase_fuel_technician_role';
    const OFFLINE_ALLIANCE_MEMBER = 'alliance_member';
    const OFFLINE_CONFIG_STARBASE_EQUIPMENT_ROLE = 'config_starbase_equipment_role';
    const OFFLINE_CORPORATION_MEMBER = 'corporation_member';
    const OFFLINE_STARBASE_FUEL_TECHNICIAN_ROLE = 'starbase_fuel_technician_role';
    const ONLINE_ALLIANCE_MEMBER = 'alliance_member';
    const ONLINE_CONFIG_STARBASE_EQUIPMENT_ROLE = 'config_starbase_equipment_role';
    const ONLINE_CORPORATION_MEMBER = 'corporation_member';
    const ONLINE_STARBASE_FUEL_TECHNICIAN_ROLE = 'starbase_fuel_technician_role';
    const UNANCHOR_ALLIANCE_MEMBER = 'alliance_member';
    const UNANCHOR_CONFIG_STARBASE_EQUIPMENT_ROLE = 'config_starbase_equipment_role';
    const UNANCHOR_CORPORATION_MEMBER = 'corporation_member';
    const UNANCHOR_STARBASE_FUEL_TECHNICIAN_ROLE = 'starbase_fuel_technician_role';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAnchorAllowableValues()
    {
        return [
            self::ANCHOR_ALLIANCE_MEMBER,
            self::ANCHOR_CONFIG_STARBASE_EQUIPMENT_ROLE,
            self::ANCHOR_CORPORATION_MEMBER,
            self::ANCHOR_STARBASE_FUEL_TECHNICIAN_ROLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFuelBayTakeAllowableValues()
    {
        return [
            self::FUEL_BAY_TAKE_ALLIANCE_MEMBER,
            self::FUEL_BAY_TAKE_CONFIG_STARBASE_EQUIPMENT_ROLE,
            self::FUEL_BAY_TAKE_CORPORATION_MEMBER,
            self::FUEL_BAY_TAKE_STARBASE_FUEL_TECHNICIAN_ROLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFuelBayViewAllowableValues()
    {
        return [
            self::FUEL_BAY_VIEW_ALLIANCE_MEMBER,
            self::FUEL_BAY_VIEW_CONFIG_STARBASE_EQUIPMENT_ROLE,
            self::FUEL_BAY_VIEW_CORPORATION_MEMBER,
            self::FUEL_BAY_VIEW_STARBASE_FUEL_TECHNICIAN_ROLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOfflineAllowableValues()
    {
        return [
            self::OFFLINE_ALLIANCE_MEMBER,
            self::OFFLINE_CONFIG_STARBASE_EQUIPMENT_ROLE,
            self::OFFLINE_CORPORATION_MEMBER,
            self::OFFLINE_STARBASE_FUEL_TECHNICIAN_ROLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOnlineAllowableValues()
    {
        return [
            self::ONLINE_ALLIANCE_MEMBER,
            self::ONLINE_CONFIG_STARBASE_EQUIPMENT_ROLE,
            self::ONLINE_CORPORATION_MEMBER,
            self::ONLINE_STARBASE_FUEL_TECHNICIAN_ROLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnanchorAllowableValues()
    {
        return [
            self::UNANCHOR_ALLIANCE_MEMBER,
            self::UNANCHOR_CONFIG_STARBASE_EQUIPMENT_ROLE,
            self::UNANCHOR_CORPORATION_MEMBER,
            self::UNANCHOR_STARBASE_FUEL_TECHNICIAN_ROLE,
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
        $this->container['allow_alliance_members'] = isset($data['allow_alliance_members']) ? $data['allow_alliance_members'] : null;
        $this->container['allow_corporation_members'] = isset($data['allow_corporation_members']) ? $data['allow_corporation_members'] : null;
        $this->container['anchor'] = isset($data['anchor']) ? $data['anchor'] : null;
        $this->container['attack_if_at_war'] = isset($data['attack_if_at_war']) ? $data['attack_if_at_war'] : null;
        $this->container['attack_if_other_security_status_dropping'] = isset($data['attack_if_other_security_status_dropping']) ? $data['attack_if_other_security_status_dropping'] : null;
        $this->container['attack_security_status_threshold'] = isset($data['attack_security_status_threshold']) ? $data['attack_security_status_threshold'] : null;
        $this->container['attack_standing_threshold'] = isset($data['attack_standing_threshold']) ? $data['attack_standing_threshold'] : null;
        $this->container['fuel_bay_take'] = isset($data['fuel_bay_take']) ? $data['fuel_bay_take'] : null;
        $this->container['fuel_bay_view'] = isset($data['fuel_bay_view']) ? $data['fuel_bay_view'] : null;
        $this->container['fuels'] = isset($data['fuels']) ? $data['fuels'] : null;
        $this->container['offline'] = isset($data['offline']) ? $data['offline'] : null;
        $this->container['online'] = isset($data['online']) ? $data['online'] : null;
        $this->container['unanchor'] = isset($data['unanchor']) ? $data['unanchor'] : null;
        $this->container['use_alliance_standings'] = isset($data['use_alliance_standings']) ? $data['use_alliance_standings'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['allow_alliance_members'] === null) {
            $invalidProperties[] = "'allow_alliance_members' can't be null";
        }
        if ($this->container['allow_corporation_members'] === null) {
            $invalidProperties[] = "'allow_corporation_members' can't be null";
        }
        if ($this->container['anchor'] === null) {
            $invalidProperties[] = "'anchor' can't be null";
        }
        $allowedValues = $this->getAnchorAllowableValues();
        if (!is_null($this->container['anchor']) && !in_array($this->container['anchor'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'anchor', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['attack_if_at_war'] === null) {
            $invalidProperties[] = "'attack_if_at_war' can't be null";
        }
        if ($this->container['attack_if_other_security_status_dropping'] === null) {
            $invalidProperties[] = "'attack_if_other_security_status_dropping' can't be null";
        }
        if ($this->container['fuel_bay_take'] === null) {
            $invalidProperties[] = "'fuel_bay_take' can't be null";
        }
        $allowedValues = $this->getFuelBayTakeAllowableValues();
        if (!is_null($this->container['fuel_bay_take']) && !in_array($this->container['fuel_bay_take'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fuel_bay_take', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['fuel_bay_view'] === null) {
            $invalidProperties[] = "'fuel_bay_view' can't be null";
        }
        $allowedValues = $this->getFuelBayViewAllowableValues();
        if (!is_null($this->container['fuel_bay_view']) && !in_array($this->container['fuel_bay_view'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fuel_bay_view', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['offline'] === null) {
            $invalidProperties[] = "'offline' can't be null";
        }
        $allowedValues = $this->getOfflineAllowableValues();
        if (!is_null($this->container['offline']) && !in_array($this->container['offline'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'offline', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['online'] === null) {
            $invalidProperties[] = "'online' can't be null";
        }
        $allowedValues = $this->getOnlineAllowableValues();
        if (!is_null($this->container['online']) && !in_array($this->container['online'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'online', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['unanchor'] === null) {
            $invalidProperties[] = "'unanchor' can't be null";
        }
        $allowedValues = $this->getUnanchorAllowableValues();
        if (!is_null($this->container['unanchor']) && !in_array($this->container['unanchor'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'unanchor', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['use_alliance_standings'] === null) {
            $invalidProperties[] = "'use_alliance_standings' can't be null";
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
     * Gets allow_alliance_members
     *
     * @return bool
     */
    public function getAllowAllianceMembers()
    {
        return $this->container['allow_alliance_members'];
    }

    /**
     * Sets allow_alliance_members
     *
     * @param bool $allow_alliance_members allow_alliance_members boolean
     *
     * @return $this
     */
    public function setAllowAllianceMembers($allow_alliance_members)
    {
        $this->container['allow_alliance_members'] = $allow_alliance_members;

        return $this;
    }

    /**
     * Gets allow_corporation_members
     *
     * @return bool
     */
    public function getAllowCorporationMembers()
    {
        return $this->container['allow_corporation_members'];
    }

    /**
     * Sets allow_corporation_members
     *
     * @param bool $allow_corporation_members allow_corporation_members boolean
     *
     * @return $this
     */
    public function setAllowCorporationMembers($allow_corporation_members)
    {
        $this->container['allow_corporation_members'] = $allow_corporation_members;

        return $this;
    }

    /**
     * Gets anchor
     *
     * @return string
     */
    public function getAnchor()
    {
        return $this->container['anchor'];
    }

    /**
     * Sets anchor
     *
     * @param string $anchor Who can anchor starbase (POS) and its structures
     *
     * @return $this
     */
    public function setAnchor($anchor)
    {
        $allowedValues = $this->getAnchorAllowableValues();
        if (!in_array($anchor, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'anchor', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['anchor'] = $anchor;

        return $this;
    }

    /**
     * Gets attack_if_at_war
     *
     * @return bool
     */
    public function getAttackIfAtWar()
    {
        return $this->container['attack_if_at_war'];
    }

    /**
     * Sets attack_if_at_war
     *
     * @param bool $attack_if_at_war attack_if_at_war boolean
     *
     * @return $this
     */
    public function setAttackIfAtWar($attack_if_at_war)
    {
        $this->container['attack_if_at_war'] = $attack_if_at_war;

        return $this;
    }

    /**
     * Gets attack_if_other_security_status_dropping
     *
     * @return bool
     */
    public function getAttackIfOtherSecurityStatusDropping()
    {
        return $this->container['attack_if_other_security_status_dropping'];
    }

    /**
     * Sets attack_if_other_security_status_dropping
     *
     * @param bool $attack_if_other_security_status_dropping attack_if_other_security_status_dropping boolean
     *
     * @return $this
     */
    public function setAttackIfOtherSecurityStatusDropping($attack_if_other_security_status_dropping)
    {
        $this->container['attack_if_other_security_status_dropping'] = $attack_if_other_security_status_dropping;

        return $this;
    }

    /**
     * Gets attack_security_status_threshold
     *
     * @return float|null
     */
    public function getAttackSecurityStatusThreshold()
    {
        return $this->container['attack_security_status_threshold'];
    }

    /**
     * Sets attack_security_status_threshold
     *
     * @param float|null $attack_security_status_threshold Starbase (POS) will attack if target's security standing is lower than this value
     *
     * @return $this
     */
    public function setAttackSecurityStatusThreshold($attack_security_status_threshold)
    {
        $this->container['attack_security_status_threshold'] = $attack_security_status_threshold;

        return $this;
    }

    /**
     * Gets attack_standing_threshold
     *
     * @return float|null
     */
    public function getAttackStandingThreshold()
    {
        return $this->container['attack_standing_threshold'];
    }

    /**
     * Sets attack_standing_threshold
     *
     * @param float|null $attack_standing_threshold Starbase (POS) will attack if target's standing is lower than this value
     *
     * @return $this
     */
    public function setAttackStandingThreshold($attack_standing_threshold)
    {
        $this->container['attack_standing_threshold'] = $attack_standing_threshold;

        return $this;
    }

    /**
     * Gets fuel_bay_take
     *
     * @return string
     */
    public function getFuelBayTake()
    {
        return $this->container['fuel_bay_take'];
    }

    /**
     * Sets fuel_bay_take
     *
     * @param string $fuel_bay_take Who can take fuel blocks out of the starbase (POS)'s fuel bay
     *
     * @return $this
     */
    public function setFuelBayTake($fuel_bay_take)
    {
        $allowedValues = $this->getFuelBayTakeAllowableValues();
        if (!in_array($fuel_bay_take, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'fuel_bay_take', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fuel_bay_take'] = $fuel_bay_take;

        return $this;
    }

    /**
     * Gets fuel_bay_view
     *
     * @return string
     */
    public function getFuelBayView()
    {
        return $this->container['fuel_bay_view'];
    }

    /**
     * Sets fuel_bay_view
     *
     * @param string $fuel_bay_view Who can view the starbase (POS)'s fule bay. Characters either need to have required role or belong to the starbase (POS) owner's corporation or alliance, as described by the enum, all other access settings follows the same scheme
     *
     * @return $this
     */
    public function setFuelBayView($fuel_bay_view)
    {
        $allowedValues = $this->getFuelBayViewAllowableValues();
        if (!in_array($fuel_bay_view, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'fuel_bay_view', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fuel_bay_view'] = $fuel_bay_view;

        return $this;
    }

    /**
     * Gets fuels
     *
     * @return \Swagger\Client\Eve\Model\GetCorporationsCorporationIdStarbasesStarbaseIdFuel[]|null
     */
    public function getFuels()
    {
        return $this->container['fuels'];
    }

    /**
     * Sets fuels
     *
     * @param \Swagger\Client\Eve\Model\GetCorporationsCorporationIdStarbasesStarbaseIdFuel[]|null $fuels Fuel blocks and other things that will be consumed when operating a starbase (POS)
     *
     * @return $this
     */
    public function setFuels($fuels)
    {
        $this->container['fuels'] = $fuels;

        return $this;
    }

    /**
     * Gets offline
     *
     * @return string
     */
    public function getOffline()
    {
        return $this->container['offline'];
    }

    /**
     * Sets offline
     *
     * @param string $offline Who can offline starbase (POS) and its structures
     *
     * @return $this
     */
    public function setOffline($offline)
    {
        $allowedValues = $this->getOfflineAllowableValues();
        if (!in_array($offline, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'offline', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['offline'] = $offline;

        return $this;
    }

    /**
     * Gets online
     *
     * @return string
     */
    public function getOnline()
    {
        return $this->container['online'];
    }

    /**
     * Sets online
     *
     * @param string $online Who can online starbase (POS) and its structures
     *
     * @return $this
     */
    public function setOnline($online)
    {
        $allowedValues = $this->getOnlineAllowableValues();
        if (!in_array($online, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'online', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['online'] = $online;

        return $this;
    }

    /**
     * Gets unanchor
     *
     * @return string
     */
    public function getUnanchor()
    {
        return $this->container['unanchor'];
    }

    /**
     * Sets unanchor
     *
     * @param string $unanchor Who can unanchor starbase (POS) and its structures
     *
     * @return $this
     */
    public function setUnanchor($unanchor)
    {
        $allowedValues = $this->getUnanchorAllowableValues();
        if (!in_array($unanchor, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'unanchor', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['unanchor'] = $unanchor;

        return $this;
    }

    /**
     * Gets use_alliance_standings
     *
     * @return bool
     */
    public function getUseAllianceStandings()
    {
        return $this->container['use_alliance_standings'];
    }

    /**
     * Sets use_alliance_standings
     *
     * @param bool $use_alliance_standings True if the starbase (POS) is using alliance standings, otherwise using corporation's
     *
     * @return $this
     */
    public function setUseAllianceStandings($use_alliance_standings)
    {
        $this->container['use_alliance_standings'] = $use_alliance_standings;

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


