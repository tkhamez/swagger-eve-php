<?php
/**
 * GetCorporationsCorporationIdAssets200Ok
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
 * OpenAPI spec version: 0.8.6
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
 * GetCorporationsCorporationIdAssets200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdAssets200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_assets_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_blueprint_copy' => 'bool',
        'is_singleton' => 'bool',
        'item_id' => 'int',
        'location_flag' => 'string',
        'location_id' => 'int',
        'location_type' => 'string',
        'quantity' => 'int',
        'type_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_blueprint_copy' => null,
        'is_singleton' => null,
        'item_id' => 'int64',
        'location_flag' => null,
        'location_id' => 'int64',
        'location_type' => null,
        'quantity' => 'int32',
        'type_id' => 'int32'
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
        'is_blueprint_copy' => 'is_blueprint_copy',
        'is_singleton' => 'is_singleton',
        'item_id' => 'item_id',
        'location_flag' => 'location_flag',
        'location_id' => 'location_id',
        'location_type' => 'location_type',
        'quantity' => 'quantity',
        'type_id' => 'type_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_blueprint_copy' => 'setIsBlueprintCopy',
        'is_singleton' => 'setIsSingleton',
        'item_id' => 'setItemId',
        'location_flag' => 'setLocationFlag',
        'location_id' => 'setLocationId',
        'location_type' => 'setLocationType',
        'quantity' => 'setQuantity',
        'type_id' => 'setTypeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_blueprint_copy' => 'getIsBlueprintCopy',
        'is_singleton' => 'getIsSingleton',
        'item_id' => 'getItemId',
        'location_flag' => 'getLocationFlag',
        'location_id' => 'getLocationId',
        'location_type' => 'getLocationType',
        'quantity' => 'getQuantity',
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
        return self::$swaggerModelName;
    }

    const LOCATION_FLAG_ASSET_SAFETY = 'AssetSafety';
    const LOCATION_FLAG_AUTO_FIT = 'AutoFit';
    const LOCATION_FLAG_BONUS = 'Bonus';
    const LOCATION_FLAG_BOOSTER = 'Booster';
    const LOCATION_FLAG_BOOSTER_BAY = 'BoosterBay';
    const LOCATION_FLAG_CAPSULE = 'Capsule';
    const LOCATION_FLAG_CARGO = 'Cargo';
    const LOCATION_FLAG_CORP_DELIVERIES = 'CorpDeliveries';
    const LOCATION_FLAG_CORP_SAG1 = 'CorpSAG1';
    const LOCATION_FLAG_CORP_SAG2 = 'CorpSAG2';
    const LOCATION_FLAG_CORP_SAG3 = 'CorpSAG3';
    const LOCATION_FLAG_CORP_SAG4 = 'CorpSAG4';
    const LOCATION_FLAG_CORP_SAG5 = 'CorpSAG5';
    const LOCATION_FLAG_CORP_SAG6 = 'CorpSAG6';
    const LOCATION_FLAG_CORP_SAG7 = 'CorpSAG7';
    const LOCATION_FLAG_CRATE_LOOT = 'CrateLoot';
    const LOCATION_FLAG_DELIVERIES = 'Deliveries';
    const LOCATION_FLAG_DRONE_BAY = 'DroneBay';
    const LOCATION_FLAG_DUST_BATTLE = 'DustBattle';
    const LOCATION_FLAG_DUST_DATABANK = 'DustDatabank';
    const LOCATION_FLAG_FIGHTER_BAY = 'FighterBay';
    const LOCATION_FLAG_FIGHTER_TUBE0 = 'FighterTube0';
    const LOCATION_FLAG_FIGHTER_TUBE1 = 'FighterTube1';
    const LOCATION_FLAG_FIGHTER_TUBE2 = 'FighterTube2';
    const LOCATION_FLAG_FIGHTER_TUBE3 = 'FighterTube3';
    const LOCATION_FLAG_FIGHTER_TUBE4 = 'FighterTube4';
    const LOCATION_FLAG_FLEET_HANGAR = 'FleetHangar';
    const LOCATION_FLAG_HANGAR = 'Hangar';
    const LOCATION_FLAG_HANGAR_ALL = 'HangarAll';
    const LOCATION_FLAG_HI_SLOT0 = 'HiSlot0';
    const LOCATION_FLAG_HI_SLOT1 = 'HiSlot1';
    const LOCATION_FLAG_HI_SLOT2 = 'HiSlot2';
    const LOCATION_FLAG_HI_SLOT3 = 'HiSlot3';
    const LOCATION_FLAG_HI_SLOT4 = 'HiSlot4';
    const LOCATION_FLAG_HI_SLOT5 = 'HiSlot5';
    const LOCATION_FLAG_HI_SLOT6 = 'HiSlot6';
    const LOCATION_FLAG_HI_SLOT7 = 'HiSlot7';
    const LOCATION_FLAG_HIDDEN_MODIFIERS = 'HiddenModifiers';
    const LOCATION_FLAG_IMPLANT = 'Implant';
    const LOCATION_FLAG_IMPOUNDED = 'Impounded';
    const LOCATION_FLAG_JUNKYARD_REPROCESSED = 'JunkyardReprocessed';
    const LOCATION_FLAG_JUNKYARD_TRASHED = 'JunkyardTrashed';
    const LOCATION_FLAG_LO_SLOT0 = 'LoSlot0';
    const LOCATION_FLAG_LO_SLOT1 = 'LoSlot1';
    const LOCATION_FLAG_LO_SLOT2 = 'LoSlot2';
    const LOCATION_FLAG_LO_SLOT3 = 'LoSlot3';
    const LOCATION_FLAG_LO_SLOT4 = 'LoSlot4';
    const LOCATION_FLAG_LO_SLOT5 = 'LoSlot5';
    const LOCATION_FLAG_LO_SLOT6 = 'LoSlot6';
    const LOCATION_FLAG_LO_SLOT7 = 'LoSlot7';
    const LOCATION_FLAG_LOCKED = 'Locked';
    const LOCATION_FLAG_MED_SLOT0 = 'MedSlot0';
    const LOCATION_FLAG_MED_SLOT1 = 'MedSlot1';
    const LOCATION_FLAG_MED_SLOT2 = 'MedSlot2';
    const LOCATION_FLAG_MED_SLOT3 = 'MedSlot3';
    const LOCATION_FLAG_MED_SLOT4 = 'MedSlot4';
    const LOCATION_FLAG_MED_SLOT5 = 'MedSlot5';
    const LOCATION_FLAG_MED_SLOT6 = 'MedSlot6';
    const LOCATION_FLAG_MED_SLOT7 = 'MedSlot7';
    const LOCATION_FLAG_OFFICE_FOLDER = 'OfficeFolder';
    const LOCATION_FLAG_PILOT = 'Pilot';
    const LOCATION_FLAG_PLANET_SURFACE = 'PlanetSurface';
    const LOCATION_FLAG_QUAFE_BAY = 'QuafeBay';
    const LOCATION_FLAG_REWARD = 'Reward';
    const LOCATION_FLAG_RIG_SLOT0 = 'RigSlot0';
    const LOCATION_FLAG_RIG_SLOT1 = 'RigSlot1';
    const LOCATION_FLAG_RIG_SLOT2 = 'RigSlot2';
    const LOCATION_FLAG_RIG_SLOT3 = 'RigSlot3';
    const LOCATION_FLAG_RIG_SLOT4 = 'RigSlot4';
    const LOCATION_FLAG_RIG_SLOT5 = 'RigSlot5';
    const LOCATION_FLAG_RIG_SLOT6 = 'RigSlot6';
    const LOCATION_FLAG_RIG_SLOT7 = 'RigSlot7';
    const LOCATION_FLAG_SECONDARY_STORAGE = 'SecondaryStorage';
    const LOCATION_FLAG_SERVICE_SLOT0 = 'ServiceSlot0';
    const LOCATION_FLAG_SERVICE_SLOT1 = 'ServiceSlot1';
    const LOCATION_FLAG_SERVICE_SLOT2 = 'ServiceSlot2';
    const LOCATION_FLAG_SERVICE_SLOT3 = 'ServiceSlot3';
    const LOCATION_FLAG_SERVICE_SLOT4 = 'ServiceSlot4';
    const LOCATION_FLAG_SERVICE_SLOT5 = 'ServiceSlot5';
    const LOCATION_FLAG_SERVICE_SLOT6 = 'ServiceSlot6';
    const LOCATION_FLAG_SERVICE_SLOT7 = 'ServiceSlot7';
    const LOCATION_FLAG_SHIP_HANGAR = 'ShipHangar';
    const LOCATION_FLAG_SHIP_OFFLINE = 'ShipOffline';
    const LOCATION_FLAG_SKILL = 'Skill';
    const LOCATION_FLAG_SKILL_IN_TRAINING = 'SkillInTraining';
    const LOCATION_FLAG_SPECIALIZED_AMMO_HOLD = 'SpecializedAmmoHold';
    const LOCATION_FLAG_SPECIALIZED_COMMAND_CENTER_HOLD = 'SpecializedCommandCenterHold';
    const LOCATION_FLAG_SPECIALIZED_FUEL_BAY = 'SpecializedFuelBay';
    const LOCATION_FLAG_SPECIALIZED_GAS_HOLD = 'SpecializedGasHold';
    const LOCATION_FLAG_SPECIALIZED_INDUSTRIAL_SHIP_HOLD = 'SpecializedIndustrialShipHold';
    const LOCATION_FLAG_SPECIALIZED_LARGE_SHIP_HOLD = 'SpecializedLargeShipHold';
    const LOCATION_FLAG_SPECIALIZED_MATERIAL_BAY = 'SpecializedMaterialBay';
    const LOCATION_FLAG_SPECIALIZED_MEDIUM_SHIP_HOLD = 'SpecializedMediumShipHold';
    const LOCATION_FLAG_SPECIALIZED_MINERAL_HOLD = 'SpecializedMineralHold';
    const LOCATION_FLAG_SPECIALIZED_ORE_HOLD = 'SpecializedOreHold';
    const LOCATION_FLAG_SPECIALIZED_PLANETARY_COMMODITIES_HOLD = 'SpecializedPlanetaryCommoditiesHold';
    const LOCATION_FLAG_SPECIALIZED_SALVAGE_HOLD = 'SpecializedSalvageHold';
    const LOCATION_FLAG_SPECIALIZED_SHIP_HOLD = 'SpecializedShipHold';
    const LOCATION_FLAG_SPECIALIZED_SMALL_SHIP_HOLD = 'SpecializedSmallShipHold';
    const LOCATION_FLAG_STRUCTURE_ACTIVE = 'StructureActive';
    const LOCATION_FLAG_STRUCTURE_FUEL = 'StructureFuel';
    const LOCATION_FLAG_STRUCTURE_INACTIVE = 'StructureInactive';
    const LOCATION_FLAG_STRUCTURE_OFFLINE = 'StructureOffline';
    const LOCATION_FLAG_SUB_SYSTEM_BAY = 'SubSystemBay';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT0 = 'SubSystemSlot0';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT1 = 'SubSystemSlot1';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT2 = 'SubSystemSlot2';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT3 = 'SubSystemSlot3';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT4 = 'SubSystemSlot4';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT5 = 'SubSystemSlot5';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT6 = 'SubSystemSlot6';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT7 = 'SubSystemSlot7';
    const LOCATION_FLAG_UNLOCKED = 'Unlocked';
    const LOCATION_FLAG_WALLET = 'Wallet';
    const LOCATION_FLAG_WARDROBE = 'Wardrobe';
    const LOCATION_TYPE_STATION = 'station';
    const LOCATION_TYPE_SOLAR_SYSTEM = 'solar_system';
    const LOCATION_TYPE_OTHER = 'other';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLocationFlagAllowableValues()
    {
        return [
            self::LOCATION_FLAG_ASSET_SAFETY,
            self::LOCATION_FLAG_AUTO_FIT,
            self::LOCATION_FLAG_BONUS,
            self::LOCATION_FLAG_BOOSTER,
            self::LOCATION_FLAG_BOOSTER_BAY,
            self::LOCATION_FLAG_CAPSULE,
            self::LOCATION_FLAG_CARGO,
            self::LOCATION_FLAG_CORP_DELIVERIES,
            self::LOCATION_FLAG_CORP_SAG1,
            self::LOCATION_FLAG_CORP_SAG2,
            self::LOCATION_FLAG_CORP_SAG3,
            self::LOCATION_FLAG_CORP_SAG4,
            self::LOCATION_FLAG_CORP_SAG5,
            self::LOCATION_FLAG_CORP_SAG6,
            self::LOCATION_FLAG_CORP_SAG7,
            self::LOCATION_FLAG_CRATE_LOOT,
            self::LOCATION_FLAG_DELIVERIES,
            self::LOCATION_FLAG_DRONE_BAY,
            self::LOCATION_FLAG_DUST_BATTLE,
            self::LOCATION_FLAG_DUST_DATABANK,
            self::LOCATION_FLAG_FIGHTER_BAY,
            self::LOCATION_FLAG_FIGHTER_TUBE0,
            self::LOCATION_FLAG_FIGHTER_TUBE1,
            self::LOCATION_FLAG_FIGHTER_TUBE2,
            self::LOCATION_FLAG_FIGHTER_TUBE3,
            self::LOCATION_FLAG_FIGHTER_TUBE4,
            self::LOCATION_FLAG_FLEET_HANGAR,
            self::LOCATION_FLAG_HANGAR,
            self::LOCATION_FLAG_HANGAR_ALL,
            self::LOCATION_FLAG_HI_SLOT0,
            self::LOCATION_FLAG_HI_SLOT1,
            self::LOCATION_FLAG_HI_SLOT2,
            self::LOCATION_FLAG_HI_SLOT3,
            self::LOCATION_FLAG_HI_SLOT4,
            self::LOCATION_FLAG_HI_SLOT5,
            self::LOCATION_FLAG_HI_SLOT6,
            self::LOCATION_FLAG_HI_SLOT7,
            self::LOCATION_FLAG_HIDDEN_MODIFIERS,
            self::LOCATION_FLAG_IMPLANT,
            self::LOCATION_FLAG_IMPOUNDED,
            self::LOCATION_FLAG_JUNKYARD_REPROCESSED,
            self::LOCATION_FLAG_JUNKYARD_TRASHED,
            self::LOCATION_FLAG_LO_SLOT0,
            self::LOCATION_FLAG_LO_SLOT1,
            self::LOCATION_FLAG_LO_SLOT2,
            self::LOCATION_FLAG_LO_SLOT3,
            self::LOCATION_FLAG_LO_SLOT4,
            self::LOCATION_FLAG_LO_SLOT5,
            self::LOCATION_FLAG_LO_SLOT6,
            self::LOCATION_FLAG_LO_SLOT7,
            self::LOCATION_FLAG_LOCKED,
            self::LOCATION_FLAG_MED_SLOT0,
            self::LOCATION_FLAG_MED_SLOT1,
            self::LOCATION_FLAG_MED_SLOT2,
            self::LOCATION_FLAG_MED_SLOT3,
            self::LOCATION_FLAG_MED_SLOT4,
            self::LOCATION_FLAG_MED_SLOT5,
            self::LOCATION_FLAG_MED_SLOT6,
            self::LOCATION_FLAG_MED_SLOT7,
            self::LOCATION_FLAG_OFFICE_FOLDER,
            self::LOCATION_FLAG_PILOT,
            self::LOCATION_FLAG_PLANET_SURFACE,
            self::LOCATION_FLAG_QUAFE_BAY,
            self::LOCATION_FLAG_REWARD,
            self::LOCATION_FLAG_RIG_SLOT0,
            self::LOCATION_FLAG_RIG_SLOT1,
            self::LOCATION_FLAG_RIG_SLOT2,
            self::LOCATION_FLAG_RIG_SLOT3,
            self::LOCATION_FLAG_RIG_SLOT4,
            self::LOCATION_FLAG_RIG_SLOT5,
            self::LOCATION_FLAG_RIG_SLOT6,
            self::LOCATION_FLAG_RIG_SLOT7,
            self::LOCATION_FLAG_SECONDARY_STORAGE,
            self::LOCATION_FLAG_SERVICE_SLOT0,
            self::LOCATION_FLAG_SERVICE_SLOT1,
            self::LOCATION_FLAG_SERVICE_SLOT2,
            self::LOCATION_FLAG_SERVICE_SLOT3,
            self::LOCATION_FLAG_SERVICE_SLOT4,
            self::LOCATION_FLAG_SERVICE_SLOT5,
            self::LOCATION_FLAG_SERVICE_SLOT6,
            self::LOCATION_FLAG_SERVICE_SLOT7,
            self::LOCATION_FLAG_SHIP_HANGAR,
            self::LOCATION_FLAG_SHIP_OFFLINE,
            self::LOCATION_FLAG_SKILL,
            self::LOCATION_FLAG_SKILL_IN_TRAINING,
            self::LOCATION_FLAG_SPECIALIZED_AMMO_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_COMMAND_CENTER_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_FUEL_BAY,
            self::LOCATION_FLAG_SPECIALIZED_GAS_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_INDUSTRIAL_SHIP_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_LARGE_SHIP_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_MATERIAL_BAY,
            self::LOCATION_FLAG_SPECIALIZED_MEDIUM_SHIP_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_MINERAL_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_ORE_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_PLANETARY_COMMODITIES_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_SALVAGE_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_SHIP_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_SMALL_SHIP_HOLD,
            self::LOCATION_FLAG_STRUCTURE_ACTIVE,
            self::LOCATION_FLAG_STRUCTURE_FUEL,
            self::LOCATION_FLAG_STRUCTURE_INACTIVE,
            self::LOCATION_FLAG_STRUCTURE_OFFLINE,
            self::LOCATION_FLAG_SUB_SYSTEM_BAY,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT0,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT1,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT2,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT3,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT4,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT5,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT6,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT7,
            self::LOCATION_FLAG_UNLOCKED,
            self::LOCATION_FLAG_WALLET,
            self::LOCATION_FLAG_WARDROBE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLocationTypeAllowableValues()
    {
        return [
            self::LOCATION_TYPE_STATION,
            self::LOCATION_TYPE_SOLAR_SYSTEM,
            self::LOCATION_TYPE_OTHER,
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
        $this->container['is_blueprint_copy'] = isset($data['is_blueprint_copy']) ? $data['is_blueprint_copy'] : null;
        $this->container['is_singleton'] = isset($data['is_singleton']) ? $data['is_singleton'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['location_flag'] = isset($data['location_flag']) ? $data['location_flag'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['location_type'] = isset($data['location_type']) ? $data['location_type'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['is_singleton'] === null) {
            $invalidProperties[] = "'is_singleton' can't be null";
        }
        if ($this->container['item_id'] === null) {
            $invalidProperties[] = "'item_id' can't be null";
        }
        if ($this->container['location_flag'] === null) {
            $invalidProperties[] = "'location_flag' can't be null";
        }
        $allowedValues = $this->getLocationFlagAllowableValues();
        if (!in_array($this->container['location_flag'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'location_flag', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['location_id'] === null) {
            $invalidProperties[] = "'location_id' can't be null";
        }
        if ($this->container['location_type'] === null) {
            $invalidProperties[] = "'location_type' can't be null";
        }
        $allowedValues = $this->getLocationTypeAllowableValues();
        if (!in_array($this->container['location_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'location_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
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

        if ($this->container['is_singleton'] === null) {
            return false;
        }
        if ($this->container['item_id'] === null) {
            return false;
        }
        if ($this->container['location_flag'] === null) {
            return false;
        }
        $allowedValues = $this->getLocationFlagAllowableValues();
        if (!in_array($this->container['location_flag'], $allowedValues)) {
            return false;
        }
        if ($this->container['location_id'] === null) {
            return false;
        }
        if ($this->container['location_type'] === null) {
            return false;
        }
        $allowedValues = $this->getLocationTypeAllowableValues();
        if (!in_array($this->container['location_type'], $allowedValues)) {
            return false;
        }
        if ($this->container['quantity'] === null) {
            return false;
        }
        if ($this->container['type_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets is_blueprint_copy
     *
     * @return bool
     */
    public function getIsBlueprintCopy()
    {
        return $this->container['is_blueprint_copy'];
    }

    /**
     * Sets is_blueprint_copy
     *
     * @param bool $is_blueprint_copy is_blueprint_copy boolean
     *
     * @return $this
     */
    public function setIsBlueprintCopy($is_blueprint_copy)
    {
        $this->container['is_blueprint_copy'] = $is_blueprint_copy;

        return $this;
    }

    /**
     * Gets is_singleton
     *
     * @return bool
     */
    public function getIsSingleton()
    {
        return $this->container['is_singleton'];
    }

    /**
     * Sets is_singleton
     *
     * @param bool $is_singleton is_singleton boolean
     *
     * @return $this
     */
    public function setIsSingleton($is_singleton)
    {
        $this->container['is_singleton'] = $is_singleton;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return int
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param int $item_id item_id integer
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets location_flag
     *
     * @return string
     */
    public function getLocationFlag()
    {
        return $this->container['location_flag'];
    }

    /**
     * Sets location_flag
     *
     * @param string $location_flag location_flag string
     *
     * @return $this
     */
    public function setLocationFlag($location_flag)
    {
        $allowedValues = $this->getLocationFlagAllowableValues();
        if (!in_array($location_flag, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'location_flag', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['location_flag'] = $location_flag;

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
     * @param int $location_id location_id integer
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets location_type
     *
     * @return string
     */
    public function getLocationType()
    {
        return $this->container['location_type'];
    }

    /**
     * Sets location_type
     *
     * @param string $location_type location_type string
     *
     * @return $this
     */
    public function setLocationType($location_type)
    {
        $allowedValues = $this->getLocationTypeAllowableValues();
        if (!in_array($location_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'location_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['location_type'] = $location_type;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity integer
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
     * @return $this
     */
    public function setTypeId($type_id)
    {
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


