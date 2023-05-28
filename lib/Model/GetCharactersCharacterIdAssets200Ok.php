<?php
/**
 * GetCharactersCharacterIdAssets200Ok
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
 * OpenAPI Generator version: 6.6.0
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
 * GetCharactersCharacterIdAssets200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetCharactersCharacterIdAssets200Ok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_assets_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
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
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
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
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'is_blueprint_copy' => false,
		'is_singleton' => false,
		'item_id' => false,
		'location_flag' => false,
		'location_id' => false,
		'location_type' => false,
		'quantity' => false,
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
        return self::$openAPIModelName;
    }

    public const LOCATION_FLAG_ASSET_SAFETY = 'AssetSafety';
    public const LOCATION_FLAG_AUTO_FIT = 'AutoFit';
    public const LOCATION_FLAG_BOOSTER_BAY = 'BoosterBay';
    public const LOCATION_FLAG_CARGO = 'Cargo';
    public const LOCATION_FLAG_CORPSE_BAY = 'CorpseBay';
    public const LOCATION_FLAG_DELIVERIES = 'Deliveries';
    public const LOCATION_FLAG_DRONE_BAY = 'DroneBay';
    public const LOCATION_FLAG_FIGHTER_BAY = 'FighterBay';
    public const LOCATION_FLAG_FIGHTER_TUBE0 = 'FighterTube0';
    public const LOCATION_FLAG_FIGHTER_TUBE1 = 'FighterTube1';
    public const LOCATION_FLAG_FIGHTER_TUBE2 = 'FighterTube2';
    public const LOCATION_FLAG_FIGHTER_TUBE3 = 'FighterTube3';
    public const LOCATION_FLAG_FIGHTER_TUBE4 = 'FighterTube4';
    public const LOCATION_FLAG_FLEET_HANGAR = 'FleetHangar';
    public const LOCATION_FLAG_FRIGATE_ESCAPE_BAY = 'FrigateEscapeBay';
    public const LOCATION_FLAG_HANGAR = 'Hangar';
    public const LOCATION_FLAG_HANGAR_ALL = 'HangarAll';
    public const LOCATION_FLAG_HI_SLOT0 = 'HiSlot0';
    public const LOCATION_FLAG_HI_SLOT1 = 'HiSlot1';
    public const LOCATION_FLAG_HI_SLOT2 = 'HiSlot2';
    public const LOCATION_FLAG_HI_SLOT3 = 'HiSlot3';
    public const LOCATION_FLAG_HI_SLOT4 = 'HiSlot4';
    public const LOCATION_FLAG_HI_SLOT5 = 'HiSlot5';
    public const LOCATION_FLAG_HI_SLOT6 = 'HiSlot6';
    public const LOCATION_FLAG_HI_SLOT7 = 'HiSlot7';
    public const LOCATION_FLAG_HIDDEN_MODIFIERS = 'HiddenModifiers';
    public const LOCATION_FLAG_IMPLANT = 'Implant';
    public const LOCATION_FLAG_LO_SLOT0 = 'LoSlot0';
    public const LOCATION_FLAG_LO_SLOT1 = 'LoSlot1';
    public const LOCATION_FLAG_LO_SLOT2 = 'LoSlot2';
    public const LOCATION_FLAG_LO_SLOT3 = 'LoSlot3';
    public const LOCATION_FLAG_LO_SLOT4 = 'LoSlot4';
    public const LOCATION_FLAG_LO_SLOT5 = 'LoSlot5';
    public const LOCATION_FLAG_LO_SLOT6 = 'LoSlot6';
    public const LOCATION_FLAG_LO_SLOT7 = 'LoSlot7';
    public const LOCATION_FLAG_LOCKED = 'Locked';
    public const LOCATION_FLAG_MED_SLOT0 = 'MedSlot0';
    public const LOCATION_FLAG_MED_SLOT1 = 'MedSlot1';
    public const LOCATION_FLAG_MED_SLOT2 = 'MedSlot2';
    public const LOCATION_FLAG_MED_SLOT3 = 'MedSlot3';
    public const LOCATION_FLAG_MED_SLOT4 = 'MedSlot4';
    public const LOCATION_FLAG_MED_SLOT5 = 'MedSlot5';
    public const LOCATION_FLAG_MED_SLOT6 = 'MedSlot6';
    public const LOCATION_FLAG_MED_SLOT7 = 'MedSlot7';
    public const LOCATION_FLAG_QUAFE_BAY = 'QuafeBay';
    public const LOCATION_FLAG_RIG_SLOT0 = 'RigSlot0';
    public const LOCATION_FLAG_RIG_SLOT1 = 'RigSlot1';
    public const LOCATION_FLAG_RIG_SLOT2 = 'RigSlot2';
    public const LOCATION_FLAG_RIG_SLOT3 = 'RigSlot3';
    public const LOCATION_FLAG_RIG_SLOT4 = 'RigSlot4';
    public const LOCATION_FLAG_RIG_SLOT5 = 'RigSlot5';
    public const LOCATION_FLAG_RIG_SLOT6 = 'RigSlot6';
    public const LOCATION_FLAG_RIG_SLOT7 = 'RigSlot7';
    public const LOCATION_FLAG_SHIP_HANGAR = 'ShipHangar';
    public const LOCATION_FLAG_SKILL = 'Skill';
    public const LOCATION_FLAG_SPECIALIZED_AMMO_HOLD = 'SpecializedAmmoHold';
    public const LOCATION_FLAG_SPECIALIZED_ASTEROID_HOLD = 'SpecializedAsteroidHold';
    public const LOCATION_FLAG_SPECIALIZED_COMMAND_CENTER_HOLD = 'SpecializedCommandCenterHold';
    public const LOCATION_FLAG_SPECIALIZED_FUEL_BAY = 'SpecializedFuelBay';
    public const LOCATION_FLAG_SPECIALIZED_GAS_HOLD = 'SpecializedGasHold';
    public const LOCATION_FLAG_SPECIALIZED_ICE_HOLD = 'SpecializedIceHold';
    public const LOCATION_FLAG_SPECIALIZED_INDUSTRIAL_SHIP_HOLD = 'SpecializedIndustrialShipHold';
    public const LOCATION_FLAG_SPECIALIZED_LARGE_SHIP_HOLD = 'SpecializedLargeShipHold';
    public const LOCATION_FLAG_SPECIALIZED_MATERIAL_BAY = 'SpecializedMaterialBay';
    public const LOCATION_FLAG_SPECIALIZED_MEDIUM_SHIP_HOLD = 'SpecializedMediumShipHold';
    public const LOCATION_FLAG_SPECIALIZED_MINERAL_HOLD = 'SpecializedMineralHold';
    public const LOCATION_FLAG_SPECIALIZED_ORE_HOLD = 'SpecializedOreHold';
    public const LOCATION_FLAG_SPECIALIZED_PLANETARY_COMMODITIES_HOLD = 'SpecializedPlanetaryCommoditiesHold';
    public const LOCATION_FLAG_SPECIALIZED_SALVAGE_HOLD = 'SpecializedSalvageHold';
    public const LOCATION_FLAG_SPECIALIZED_SHIP_HOLD = 'SpecializedShipHold';
    public const LOCATION_FLAG_SPECIALIZED_SMALL_SHIP_HOLD = 'SpecializedSmallShipHold';
    public const LOCATION_FLAG_STRUCTURE_DEED_BAY = 'StructureDeedBay';
    public const LOCATION_FLAG_SUB_SYSTEM_BAY = 'SubSystemBay';
    public const LOCATION_FLAG_SUB_SYSTEM_SLOT0 = 'SubSystemSlot0';
    public const LOCATION_FLAG_SUB_SYSTEM_SLOT1 = 'SubSystemSlot1';
    public const LOCATION_FLAG_SUB_SYSTEM_SLOT2 = 'SubSystemSlot2';
    public const LOCATION_FLAG_SUB_SYSTEM_SLOT3 = 'SubSystemSlot3';
    public const LOCATION_FLAG_SUB_SYSTEM_SLOT4 = 'SubSystemSlot4';
    public const LOCATION_FLAG_SUB_SYSTEM_SLOT5 = 'SubSystemSlot5';
    public const LOCATION_FLAG_SUB_SYSTEM_SLOT6 = 'SubSystemSlot6';
    public const LOCATION_FLAG_SUB_SYSTEM_SLOT7 = 'SubSystemSlot7';
    public const LOCATION_FLAG_UNLOCKED = 'Unlocked';
    public const LOCATION_FLAG_WARDROBE = 'Wardrobe';
    public const LOCATION_TYPE_STATION = 'station';
    public const LOCATION_TYPE_SOLAR_SYSTEM = 'solar_system';
    public const LOCATION_TYPE_ITEM = 'item';
    public const LOCATION_TYPE_OTHER = 'other';

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
            self::LOCATION_FLAG_BOOSTER_BAY,
            self::LOCATION_FLAG_CARGO,
            self::LOCATION_FLAG_CORPSE_BAY,
            self::LOCATION_FLAG_DELIVERIES,
            self::LOCATION_FLAG_DRONE_BAY,
            self::LOCATION_FLAG_FIGHTER_BAY,
            self::LOCATION_FLAG_FIGHTER_TUBE0,
            self::LOCATION_FLAG_FIGHTER_TUBE1,
            self::LOCATION_FLAG_FIGHTER_TUBE2,
            self::LOCATION_FLAG_FIGHTER_TUBE3,
            self::LOCATION_FLAG_FIGHTER_TUBE4,
            self::LOCATION_FLAG_FLEET_HANGAR,
            self::LOCATION_FLAG_FRIGATE_ESCAPE_BAY,
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
            self::LOCATION_FLAG_QUAFE_BAY,
            self::LOCATION_FLAG_RIG_SLOT0,
            self::LOCATION_FLAG_RIG_SLOT1,
            self::LOCATION_FLAG_RIG_SLOT2,
            self::LOCATION_FLAG_RIG_SLOT3,
            self::LOCATION_FLAG_RIG_SLOT4,
            self::LOCATION_FLAG_RIG_SLOT5,
            self::LOCATION_FLAG_RIG_SLOT6,
            self::LOCATION_FLAG_RIG_SLOT7,
            self::LOCATION_FLAG_SHIP_HANGAR,
            self::LOCATION_FLAG_SKILL,
            self::LOCATION_FLAG_SPECIALIZED_AMMO_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_ASTEROID_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_COMMAND_CENTER_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_FUEL_BAY,
            self::LOCATION_FLAG_SPECIALIZED_GAS_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_ICE_HOLD,
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
            self::LOCATION_FLAG_STRUCTURE_DEED_BAY,
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
            self::LOCATION_TYPE_ITEM,
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
        $this->setIfExists('is_blueprint_copy', $data ?? [], null);
        $this->setIfExists('is_singleton', $data ?? [], null);
        $this->setIfExists('item_id', $data ?? [], null);
        $this->setIfExists('location_flag', $data ?? [], null);
        $this->setIfExists('location_id', $data ?? [], null);
        $this->setIfExists('location_type', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
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
        if (!is_null($this->container['location_flag']) && !in_array($this->container['location_flag'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'location_flag', must be one of '%s'",
                $this->container['location_flag'],
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
        if (!is_null($this->container['location_type']) && !in_array($this->container['location_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'location_type', must be one of '%s'",
                $this->container['location_type'],
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets is_blueprint_copy
     *
     * @return bool|null
     */
    public function getIsBlueprintCopy()
    {
        return $this->container['is_blueprint_copy'];
    }

    /**
     * Sets is_blueprint_copy
     *
     * @param bool|null $is_blueprint_copy is_blueprint_copy boolean
     *
     * @return self
     */
    public function setIsBlueprintCopy($is_blueprint_copy)
    {
        if (is_null($is_blueprint_copy)) {
            throw new \InvalidArgumentException('non-nullable is_blueprint_copy cannot be null');
        }
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
     * @return self
     */
    public function setIsSingleton($is_singleton)
    {
        if (is_null($is_singleton)) {
            throw new \InvalidArgumentException('non-nullable is_singleton cannot be null');
        }
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
     * @return self
     */
    public function setItemId($item_id)
    {
        if (is_null($item_id)) {
            throw new \InvalidArgumentException('non-nullable item_id cannot be null');
        }
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
     * @return self
     */
    public function setLocationFlag($location_flag)
    {
        if (is_null($location_flag)) {
            throw new \InvalidArgumentException('non-nullable location_flag cannot be null');
        }
        /*$allowedValues = $this->getLocationFlagAllowableValues();
        if (!in_array($location_flag, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'location_flag', must be one of '%s'",
                    $location_flag,
                    implode("', '", $allowedValues)
                )
            );
        }*/
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
     * @return self
     */
    public function setLocationType($location_type)
    {
        if (is_null($location_type)) {
            throw new \InvalidArgumentException('non-nullable location_type cannot be null');
        }
        /*$allowedValues = $this->getLocationTypeAllowableValues();
        if (!in_array($location_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'location_type', must be one of '%s'",
                    $location_type,
                    implode("', '", $allowedValues)
                )
            );
        }*/
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
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
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


