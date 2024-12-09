<?php
/**
 * GetCorporationsCorporationIdRolesHistory200Ok
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
 * The version of the OpenAPI document: 1.28
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
 * GetCorporationsCorporationIdRolesHistory200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetCorporationsCorporationIdRolesHistory200Ok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_corporations_corporation_id_roles_history_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'changed_at' => '\DateTime',
        'character_id' => 'int',
        'issuer_id' => 'int',
        'new_roles' => 'string[]',
        'old_roles' => 'string[]',
        'role_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'changed_at' => 'date-time',
        'character_id' => 'int32',
        'issuer_id' => 'int32',
        'new_roles' => null,
        'old_roles' => null,
        'role_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'changed_at' => false,
        'character_id' => false,
        'issuer_id' => false,
        'new_roles' => false,
        'old_roles' => false,
        'role_type' => false
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
        'changed_at' => 'changed_at',
        'character_id' => 'character_id',
        'issuer_id' => 'issuer_id',
        'new_roles' => 'new_roles',
        'old_roles' => 'old_roles',
        'role_type' => 'role_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'changed_at' => 'setChangedAt',
        'character_id' => 'setCharacterId',
        'issuer_id' => 'setIssuerId',
        'new_roles' => 'setNewRoles',
        'old_roles' => 'setOldRoles',
        'role_type' => 'setRoleType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'changed_at' => 'getChangedAt',
        'character_id' => 'getCharacterId',
        'issuer_id' => 'getIssuerId',
        'new_roles' => 'getNewRoles',
        'old_roles' => 'getOldRoles',
        'role_type' => 'getRoleType'
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

    public const NEW_ROLES_ACCOUNT_TAKE_1 = 'Account_Take_1';
    public const NEW_ROLES_ACCOUNT_TAKE_2 = 'Account_Take_2';
    public const NEW_ROLES_ACCOUNT_TAKE_3 = 'Account_Take_3';
    public const NEW_ROLES_ACCOUNT_TAKE_4 = 'Account_Take_4';
    public const NEW_ROLES_ACCOUNT_TAKE_5 = 'Account_Take_5';
    public const NEW_ROLES_ACCOUNT_TAKE_6 = 'Account_Take_6';
    public const NEW_ROLES_ACCOUNT_TAKE_7 = 'Account_Take_7';
    public const NEW_ROLES_ACCOUNTANT = 'Accountant';
    public const NEW_ROLES_AUDITOR = 'Auditor';
    public const NEW_ROLES_BRAND_MANAGER = 'Brand_Manager';
    public const NEW_ROLES_COMMUNICATIONS_OFFICER = 'Communications_Officer';
    public const NEW_ROLES_CONFIG_EQUIPMENT = 'Config_Equipment';
    public const NEW_ROLES_CONFIG_STARBASE_EQUIPMENT = 'Config_Starbase_Equipment';
    public const NEW_ROLES_CONTAINER_TAKE_1 = 'Container_Take_1';
    public const NEW_ROLES_CONTAINER_TAKE_2 = 'Container_Take_2';
    public const NEW_ROLES_CONTAINER_TAKE_3 = 'Container_Take_3';
    public const NEW_ROLES_CONTAINER_TAKE_4 = 'Container_Take_4';
    public const NEW_ROLES_CONTAINER_TAKE_5 = 'Container_Take_5';
    public const NEW_ROLES_CONTAINER_TAKE_6 = 'Container_Take_6';
    public const NEW_ROLES_CONTAINER_TAKE_7 = 'Container_Take_7';
    public const NEW_ROLES_CONTRACT_MANAGER = 'Contract_Manager';
    public const NEW_ROLES_DELIVERIES_CONTAINER_TAKE = 'Deliveries_Container_Take';
    public const NEW_ROLES_DELIVERIES_QUERY = 'Deliveries_Query';
    public const NEW_ROLES_DELIVERIES_TAKE = 'Deliveries_Take';
    public const NEW_ROLES_DIPLOMAT = 'Diplomat';
    public const NEW_ROLES_DIRECTOR = 'Director';
    public const NEW_ROLES_FACTORY_MANAGER = 'Factory_Manager';
    public const NEW_ROLES_FITTING_MANAGER = 'Fitting_Manager';
    public const NEW_ROLES_HANGAR_QUERY_1 = 'Hangar_Query_1';
    public const NEW_ROLES_HANGAR_QUERY_2 = 'Hangar_Query_2';
    public const NEW_ROLES_HANGAR_QUERY_3 = 'Hangar_Query_3';
    public const NEW_ROLES_HANGAR_QUERY_4 = 'Hangar_Query_4';
    public const NEW_ROLES_HANGAR_QUERY_5 = 'Hangar_Query_5';
    public const NEW_ROLES_HANGAR_QUERY_6 = 'Hangar_Query_6';
    public const NEW_ROLES_HANGAR_QUERY_7 = 'Hangar_Query_7';
    public const NEW_ROLES_HANGAR_TAKE_1 = 'Hangar_Take_1';
    public const NEW_ROLES_HANGAR_TAKE_2 = 'Hangar_Take_2';
    public const NEW_ROLES_HANGAR_TAKE_3 = 'Hangar_Take_3';
    public const NEW_ROLES_HANGAR_TAKE_4 = 'Hangar_Take_4';
    public const NEW_ROLES_HANGAR_TAKE_5 = 'Hangar_Take_5';
    public const NEW_ROLES_HANGAR_TAKE_6 = 'Hangar_Take_6';
    public const NEW_ROLES_HANGAR_TAKE_7 = 'Hangar_Take_7';
    public const NEW_ROLES_JUNIOR_ACCOUNTANT = 'Junior_Accountant';
    public const NEW_ROLES_PERSONNEL_MANAGER = 'Personnel_Manager';
    public const NEW_ROLES_PROJECT_MANAGER = 'Project_Manager';
    public const NEW_ROLES_RENT_FACTORY_FACILITY = 'Rent_Factory_Facility';
    public const NEW_ROLES_RENT_OFFICE = 'Rent_Office';
    public const NEW_ROLES_RENT_RESEARCH_FACILITY = 'Rent_Research_Facility';
    public const NEW_ROLES_SECURITY_OFFICER = 'Security_Officer';
    public const NEW_ROLES_SKILL_PLAN_MANAGER = 'Skill_Plan_Manager';
    public const NEW_ROLES_STARBASE_DEFENSE_OPERATOR = 'Starbase_Defense_Operator';
    public const NEW_ROLES_STARBASE_FUEL_TECHNICIAN = 'Starbase_Fuel_Technician';
    public const NEW_ROLES_STATION_MANAGER = 'Station_Manager';
    public const NEW_ROLES_TRADER = 'Trader';
    public const OLD_ROLES_ACCOUNT_TAKE_1 = 'Account_Take_1';
    public const OLD_ROLES_ACCOUNT_TAKE_2 = 'Account_Take_2';
    public const OLD_ROLES_ACCOUNT_TAKE_3 = 'Account_Take_3';
    public const OLD_ROLES_ACCOUNT_TAKE_4 = 'Account_Take_4';
    public const OLD_ROLES_ACCOUNT_TAKE_5 = 'Account_Take_5';
    public const OLD_ROLES_ACCOUNT_TAKE_6 = 'Account_Take_6';
    public const OLD_ROLES_ACCOUNT_TAKE_7 = 'Account_Take_7';
    public const OLD_ROLES_ACCOUNTANT = 'Accountant';
    public const OLD_ROLES_AUDITOR = 'Auditor';
    public const OLD_ROLES_BRAND_MANAGER = 'Brand_Manager';
    public const OLD_ROLES_COMMUNICATIONS_OFFICER = 'Communications_Officer';
    public const OLD_ROLES_CONFIG_EQUIPMENT = 'Config_Equipment';
    public const OLD_ROLES_CONFIG_STARBASE_EQUIPMENT = 'Config_Starbase_Equipment';
    public const OLD_ROLES_CONTAINER_TAKE_1 = 'Container_Take_1';
    public const OLD_ROLES_CONTAINER_TAKE_2 = 'Container_Take_2';
    public const OLD_ROLES_CONTAINER_TAKE_3 = 'Container_Take_3';
    public const OLD_ROLES_CONTAINER_TAKE_4 = 'Container_Take_4';
    public const OLD_ROLES_CONTAINER_TAKE_5 = 'Container_Take_5';
    public const OLD_ROLES_CONTAINER_TAKE_6 = 'Container_Take_6';
    public const OLD_ROLES_CONTAINER_TAKE_7 = 'Container_Take_7';
    public const OLD_ROLES_CONTRACT_MANAGER = 'Contract_Manager';
    public const OLD_ROLES_DELIVERIES_CONTAINER_TAKE = 'Deliveries_Container_Take';
    public const OLD_ROLES_DELIVERIES_QUERY = 'Deliveries_Query';
    public const OLD_ROLES_DELIVERIES_TAKE = 'Deliveries_Take';
    public const OLD_ROLES_DIPLOMAT = 'Diplomat';
    public const OLD_ROLES_DIRECTOR = 'Director';
    public const OLD_ROLES_FACTORY_MANAGER = 'Factory_Manager';
    public const OLD_ROLES_FITTING_MANAGER = 'Fitting_Manager';
    public const OLD_ROLES_HANGAR_QUERY_1 = 'Hangar_Query_1';
    public const OLD_ROLES_HANGAR_QUERY_2 = 'Hangar_Query_2';
    public const OLD_ROLES_HANGAR_QUERY_3 = 'Hangar_Query_3';
    public const OLD_ROLES_HANGAR_QUERY_4 = 'Hangar_Query_4';
    public const OLD_ROLES_HANGAR_QUERY_5 = 'Hangar_Query_5';
    public const OLD_ROLES_HANGAR_QUERY_6 = 'Hangar_Query_6';
    public const OLD_ROLES_HANGAR_QUERY_7 = 'Hangar_Query_7';
    public const OLD_ROLES_HANGAR_TAKE_1 = 'Hangar_Take_1';
    public const OLD_ROLES_HANGAR_TAKE_2 = 'Hangar_Take_2';
    public const OLD_ROLES_HANGAR_TAKE_3 = 'Hangar_Take_3';
    public const OLD_ROLES_HANGAR_TAKE_4 = 'Hangar_Take_4';
    public const OLD_ROLES_HANGAR_TAKE_5 = 'Hangar_Take_5';
    public const OLD_ROLES_HANGAR_TAKE_6 = 'Hangar_Take_6';
    public const OLD_ROLES_HANGAR_TAKE_7 = 'Hangar_Take_7';
    public const OLD_ROLES_JUNIOR_ACCOUNTANT = 'Junior_Accountant';
    public const OLD_ROLES_PERSONNEL_MANAGER = 'Personnel_Manager';
    public const OLD_ROLES_PROJECT_MANAGER = 'Project_Manager';
    public const OLD_ROLES_RENT_FACTORY_FACILITY = 'Rent_Factory_Facility';
    public const OLD_ROLES_RENT_OFFICE = 'Rent_Office';
    public const OLD_ROLES_RENT_RESEARCH_FACILITY = 'Rent_Research_Facility';
    public const OLD_ROLES_SECURITY_OFFICER = 'Security_Officer';
    public const OLD_ROLES_SKILL_PLAN_MANAGER = 'Skill_Plan_Manager';
    public const OLD_ROLES_STARBASE_DEFENSE_OPERATOR = 'Starbase_Defense_Operator';
    public const OLD_ROLES_STARBASE_FUEL_TECHNICIAN = 'Starbase_Fuel_Technician';
    public const OLD_ROLES_STATION_MANAGER = 'Station_Manager';
    public const OLD_ROLES_TRADER = 'Trader';
    public const ROLE_TYPE_GRANTABLE_ROLES = 'grantable_roles';
    public const ROLE_TYPE_GRANTABLE_ROLES_AT_BASE = 'grantable_roles_at_base';
    public const ROLE_TYPE_GRANTABLE_ROLES_AT_HQ = 'grantable_roles_at_hq';
    public const ROLE_TYPE_GRANTABLE_ROLES_AT_OTHER = 'grantable_roles_at_other';
    public const ROLE_TYPE_ROLES = 'roles';
    public const ROLE_TYPE_ROLES_AT_BASE = 'roles_at_base';
    public const ROLE_TYPE_ROLES_AT_HQ = 'roles_at_hq';
    public const ROLE_TYPE_ROLES_AT_OTHER = 'roles_at_other';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNewRolesAllowableValues()
    {
        return [
            self::NEW_ROLES_ACCOUNT_TAKE_1,
            self::NEW_ROLES_ACCOUNT_TAKE_2,
            self::NEW_ROLES_ACCOUNT_TAKE_3,
            self::NEW_ROLES_ACCOUNT_TAKE_4,
            self::NEW_ROLES_ACCOUNT_TAKE_5,
            self::NEW_ROLES_ACCOUNT_TAKE_6,
            self::NEW_ROLES_ACCOUNT_TAKE_7,
            self::NEW_ROLES_ACCOUNTANT,
            self::NEW_ROLES_AUDITOR,
            self::NEW_ROLES_BRAND_MANAGER,
            self::NEW_ROLES_COMMUNICATIONS_OFFICER,
            self::NEW_ROLES_CONFIG_EQUIPMENT,
            self::NEW_ROLES_CONFIG_STARBASE_EQUIPMENT,
            self::NEW_ROLES_CONTAINER_TAKE_1,
            self::NEW_ROLES_CONTAINER_TAKE_2,
            self::NEW_ROLES_CONTAINER_TAKE_3,
            self::NEW_ROLES_CONTAINER_TAKE_4,
            self::NEW_ROLES_CONTAINER_TAKE_5,
            self::NEW_ROLES_CONTAINER_TAKE_6,
            self::NEW_ROLES_CONTAINER_TAKE_7,
            self::NEW_ROLES_CONTRACT_MANAGER,
            self::NEW_ROLES_DELIVERIES_CONTAINER_TAKE,
            self::NEW_ROLES_DELIVERIES_QUERY,
            self::NEW_ROLES_DELIVERIES_TAKE,
            self::NEW_ROLES_DIPLOMAT,
            self::NEW_ROLES_DIRECTOR,
            self::NEW_ROLES_FACTORY_MANAGER,
            self::NEW_ROLES_FITTING_MANAGER,
            self::NEW_ROLES_HANGAR_QUERY_1,
            self::NEW_ROLES_HANGAR_QUERY_2,
            self::NEW_ROLES_HANGAR_QUERY_3,
            self::NEW_ROLES_HANGAR_QUERY_4,
            self::NEW_ROLES_HANGAR_QUERY_5,
            self::NEW_ROLES_HANGAR_QUERY_6,
            self::NEW_ROLES_HANGAR_QUERY_7,
            self::NEW_ROLES_HANGAR_TAKE_1,
            self::NEW_ROLES_HANGAR_TAKE_2,
            self::NEW_ROLES_HANGAR_TAKE_3,
            self::NEW_ROLES_HANGAR_TAKE_4,
            self::NEW_ROLES_HANGAR_TAKE_5,
            self::NEW_ROLES_HANGAR_TAKE_6,
            self::NEW_ROLES_HANGAR_TAKE_7,
            self::NEW_ROLES_JUNIOR_ACCOUNTANT,
            self::NEW_ROLES_PERSONNEL_MANAGER,
            self::NEW_ROLES_PROJECT_MANAGER,
            self::NEW_ROLES_RENT_FACTORY_FACILITY,
            self::NEW_ROLES_RENT_OFFICE,
            self::NEW_ROLES_RENT_RESEARCH_FACILITY,
            self::NEW_ROLES_SECURITY_OFFICER,
            self::NEW_ROLES_SKILL_PLAN_MANAGER,
            self::NEW_ROLES_STARBASE_DEFENSE_OPERATOR,
            self::NEW_ROLES_STARBASE_FUEL_TECHNICIAN,
            self::NEW_ROLES_STATION_MANAGER,
            self::NEW_ROLES_TRADER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOldRolesAllowableValues()
    {
        return [
            self::OLD_ROLES_ACCOUNT_TAKE_1,
            self::OLD_ROLES_ACCOUNT_TAKE_2,
            self::OLD_ROLES_ACCOUNT_TAKE_3,
            self::OLD_ROLES_ACCOUNT_TAKE_4,
            self::OLD_ROLES_ACCOUNT_TAKE_5,
            self::OLD_ROLES_ACCOUNT_TAKE_6,
            self::OLD_ROLES_ACCOUNT_TAKE_7,
            self::OLD_ROLES_ACCOUNTANT,
            self::OLD_ROLES_AUDITOR,
            self::OLD_ROLES_BRAND_MANAGER,
            self::OLD_ROLES_COMMUNICATIONS_OFFICER,
            self::OLD_ROLES_CONFIG_EQUIPMENT,
            self::OLD_ROLES_CONFIG_STARBASE_EQUIPMENT,
            self::OLD_ROLES_CONTAINER_TAKE_1,
            self::OLD_ROLES_CONTAINER_TAKE_2,
            self::OLD_ROLES_CONTAINER_TAKE_3,
            self::OLD_ROLES_CONTAINER_TAKE_4,
            self::OLD_ROLES_CONTAINER_TAKE_5,
            self::OLD_ROLES_CONTAINER_TAKE_6,
            self::OLD_ROLES_CONTAINER_TAKE_7,
            self::OLD_ROLES_CONTRACT_MANAGER,
            self::OLD_ROLES_DELIVERIES_CONTAINER_TAKE,
            self::OLD_ROLES_DELIVERIES_QUERY,
            self::OLD_ROLES_DELIVERIES_TAKE,
            self::OLD_ROLES_DIPLOMAT,
            self::OLD_ROLES_DIRECTOR,
            self::OLD_ROLES_FACTORY_MANAGER,
            self::OLD_ROLES_FITTING_MANAGER,
            self::OLD_ROLES_HANGAR_QUERY_1,
            self::OLD_ROLES_HANGAR_QUERY_2,
            self::OLD_ROLES_HANGAR_QUERY_3,
            self::OLD_ROLES_HANGAR_QUERY_4,
            self::OLD_ROLES_HANGAR_QUERY_5,
            self::OLD_ROLES_HANGAR_QUERY_6,
            self::OLD_ROLES_HANGAR_QUERY_7,
            self::OLD_ROLES_HANGAR_TAKE_1,
            self::OLD_ROLES_HANGAR_TAKE_2,
            self::OLD_ROLES_HANGAR_TAKE_3,
            self::OLD_ROLES_HANGAR_TAKE_4,
            self::OLD_ROLES_HANGAR_TAKE_5,
            self::OLD_ROLES_HANGAR_TAKE_6,
            self::OLD_ROLES_HANGAR_TAKE_7,
            self::OLD_ROLES_JUNIOR_ACCOUNTANT,
            self::OLD_ROLES_PERSONNEL_MANAGER,
            self::OLD_ROLES_PROJECT_MANAGER,
            self::OLD_ROLES_RENT_FACTORY_FACILITY,
            self::OLD_ROLES_RENT_OFFICE,
            self::OLD_ROLES_RENT_RESEARCH_FACILITY,
            self::OLD_ROLES_SECURITY_OFFICER,
            self::OLD_ROLES_SKILL_PLAN_MANAGER,
            self::OLD_ROLES_STARBASE_DEFENSE_OPERATOR,
            self::OLD_ROLES_STARBASE_FUEL_TECHNICIAN,
            self::OLD_ROLES_STATION_MANAGER,
            self::OLD_ROLES_TRADER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoleTypeAllowableValues()
    {
        return [
            self::ROLE_TYPE_GRANTABLE_ROLES,
            self::ROLE_TYPE_GRANTABLE_ROLES_AT_BASE,
            self::ROLE_TYPE_GRANTABLE_ROLES_AT_HQ,
            self::ROLE_TYPE_GRANTABLE_ROLES_AT_OTHER,
            self::ROLE_TYPE_ROLES,
            self::ROLE_TYPE_ROLES_AT_BASE,
            self::ROLE_TYPE_ROLES_AT_HQ,
            self::ROLE_TYPE_ROLES_AT_OTHER,
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
        $this->setIfExists('changed_at', $data ?? [], null);
        $this->setIfExists('character_id', $data ?? [], null);
        $this->setIfExists('issuer_id', $data ?? [], null);
        $this->setIfExists('new_roles', $data ?? [], null);
        $this->setIfExists('old_roles', $data ?? [], null);
        $this->setIfExists('role_type', $data ?? [], null);
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

        if ($this->container['changed_at'] === null) {
            $invalidProperties[] = "'changed_at' can't be null";
        }
        if ($this->container['character_id'] === null) {
            $invalidProperties[] = "'character_id' can't be null";
        }
        if ($this->container['issuer_id'] === null) {
            $invalidProperties[] = "'issuer_id' can't be null";
        }
        if ($this->container['new_roles'] === null) {
            $invalidProperties[] = "'new_roles' can't be null";
        }
        if ((count($this->container['new_roles']) > 50)) {
            $invalidProperties[] = "invalid value for 'new_roles', number of items must be less than or equal to 50.";
        }

        if ($this->container['old_roles'] === null) {
            $invalidProperties[] = "'old_roles' can't be null";
        }
        if ((count($this->container['old_roles']) > 50)) {
            $invalidProperties[] = "invalid value for 'old_roles', number of items must be less than or equal to 50.";
        }

        if ($this->container['role_type'] === null) {
            $invalidProperties[] = "'role_type' can't be null";
        }
        $allowedValues = $this->getRoleTypeAllowableValues();
        if (!is_null($this->container['role_type']) && !in_array($this->container['role_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'role_type', must be one of '%s'",
                $this->container['role_type'],
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
     * Gets changed_at
     *
     * @return \DateTime
     */
    public function getChangedAt()
    {
        return $this->container['changed_at'];
    }

    /**
     * Sets changed_at
     *
     * @param \DateTime $changed_at changed_at string
     *
     * @return self
     */
    public function setChangedAt($changed_at)
    {
        if (is_null($changed_at)) {
            throw new \InvalidArgumentException('non-nullable changed_at cannot be null');
        }
        $this->container['changed_at'] = $changed_at;

        return $this;
    }

    /**
     * Gets character_id
     *
     * @return int
     */
    public function getCharacterId()
    {
        return $this->container['character_id'];
    }

    /**
     * Sets character_id
     *
     * @param int $character_id The character whose roles are changed
     *
     * @return self
     */
    public function setCharacterId($character_id)
    {
        if (is_null($character_id)) {
            throw new \InvalidArgumentException('non-nullable character_id cannot be null');
        }
        $this->container['character_id'] = $character_id;

        return $this;
    }

    /**
     * Gets issuer_id
     *
     * @return int
     */
    public function getIssuerId()
    {
        return $this->container['issuer_id'];
    }

    /**
     * Sets issuer_id
     *
     * @param int $issuer_id ID of the character who issued this change
     *
     * @return self
     */
    public function setIssuerId($issuer_id)
    {
        if (is_null($issuer_id)) {
            throw new \InvalidArgumentException('non-nullable issuer_id cannot be null');
        }
        $this->container['issuer_id'] = $issuer_id;

        return $this;
    }

    /**
     * Gets new_roles
     *
     * @return string[]
     */
    public function getNewRoles()
    {
        return $this->container['new_roles'];
    }

    /**
     * Sets new_roles
     *
     * @param string[] $new_roles new_roles array
     *
     * @return self
     */
    public function setNewRoles($new_roles)
    {
        if (is_null($new_roles)) {
            throw new \InvalidArgumentException('non-nullable new_roles cannot be null');
        }
        /*$allowedValues = $this->getNewRolesAllowableValues();
        if (array_diff($new_roles, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'new_roles', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }*/

        /*if ((count($new_roles) > 50)) {
            throw new \InvalidArgumentException('invalid value for $new_roles when calling GetCorporationsCorporationIdRolesHistory200Ok., number of items must be less than or equal to 50.');
        }*/
        $this->container['new_roles'] = $new_roles;

        return $this;
    }

    /**
     * Gets old_roles
     *
     * @return string[]
     */
    public function getOldRoles()
    {
        return $this->container['old_roles'];
    }

    /**
     * Sets old_roles
     *
     * @param string[] $old_roles old_roles array
     *
     * @return self
     */
    public function setOldRoles($old_roles)
    {
        if (is_null($old_roles)) {
            throw new \InvalidArgumentException('non-nullable old_roles cannot be null');
        }
        /*$allowedValues = $this->getOldRolesAllowableValues();
        if (array_diff($old_roles, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'old_roles', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }*/

        /*if ((count($old_roles) > 50)) {
            throw new \InvalidArgumentException('invalid value for $old_roles when calling GetCorporationsCorporationIdRolesHistory200Ok., number of items must be less than or equal to 50.');
        }*/
        $this->container['old_roles'] = $old_roles;

        return $this;
    }

    /**
     * Gets role_type
     *
     * @return string
     */
    public function getRoleType()
    {
        return $this->container['role_type'];
    }

    /**
     * Sets role_type
     *
     * @param string $role_type role_type string
     *
     * @return self
     */
    public function setRoleType($role_type)
    {
        if (is_null($role_type)) {
            throw new \InvalidArgumentException('non-nullable role_type cannot be null');
        }
        /*$allowedValues = $this->getRoleTypeAllowableValues();
        if (!in_array($role_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'role_type', must be one of '%s'",
                    $role_type,
                    implode("', '", $allowedValues)
                )
            );
        }*/
        $this->container['role_type'] = $role_type;

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


