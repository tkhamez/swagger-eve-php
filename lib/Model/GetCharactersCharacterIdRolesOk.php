<?php
/**
 * GetCharactersCharacterIdRolesOk
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
 * OpenAPI spec version: 0.8.6
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
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
 * GetCharactersCharacterIdRolesOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetCharactersCharacterIdRolesOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_roles_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'roles_at_other' => 'string[]',
        'roles_at_base' => 'string[]',
        'roles' => 'string[]',
        'roles_at_hq' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'roles_at_other' => null,
        'roles_at_base' => null,
        'roles' => null,
        'roles_at_hq' => null
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
        'roles_at_other' => 'roles_at_other',
        'roles_at_base' => 'roles_at_base',
        'roles' => 'roles',
        'roles_at_hq' => 'roles_at_hq'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'roles_at_other' => 'setRolesAtOther',
        'roles_at_base' => 'setRolesAtBase',
        'roles' => 'setRoles',
        'roles_at_hq' => 'setRolesAtHq'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'roles_at_other' => 'getRolesAtOther',
        'roles_at_base' => 'getRolesAtBase',
        'roles' => 'getRoles',
        'roles_at_hq' => 'getRolesAtHq'
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

    const ROLES_AT_OTHER_ACCOUNT_TAKE_1 = 'Account_Take_1';
    const ROLES_AT_OTHER_ACCOUNT_TAKE_2 = 'Account_Take_2';
    const ROLES_AT_OTHER_ACCOUNT_TAKE_3 = 'Account_Take_3';
    const ROLES_AT_OTHER_ACCOUNT_TAKE_4 = 'Account_Take_4';
    const ROLES_AT_OTHER_ACCOUNT_TAKE_5 = 'Account_Take_5';
    const ROLES_AT_OTHER_ACCOUNT_TAKE_6 = 'Account_Take_6';
    const ROLES_AT_OTHER_ACCOUNT_TAKE_7 = 'Account_Take_7';
    const ROLES_AT_OTHER_ACCOUNTANT = 'Accountant';
    const ROLES_AT_OTHER_AUDITOR = 'Auditor';
    const ROLES_AT_OTHER_COMMUNICATIONS_OFFICER = 'Communications_Officer';
    const ROLES_AT_OTHER_CONFIG_EQUIPMENT = 'Config_Equipment';
    const ROLES_AT_OTHER_CONFIG_STARBASE_EQUIPMENT = 'Config_Starbase_Equipment';
    const ROLES_AT_OTHER_CONTAINER_TAKE_1 = 'Container_Take_1';
    const ROLES_AT_OTHER_CONTAINER_TAKE_2 = 'Container_Take_2';
    const ROLES_AT_OTHER_CONTAINER_TAKE_3 = 'Container_Take_3';
    const ROLES_AT_OTHER_CONTAINER_TAKE_4 = 'Container_Take_4';
    const ROLES_AT_OTHER_CONTAINER_TAKE_5 = 'Container_Take_5';
    const ROLES_AT_OTHER_CONTAINER_TAKE_6 = 'Container_Take_6';
    const ROLES_AT_OTHER_CONTAINER_TAKE_7 = 'Container_Take_7';
    const ROLES_AT_OTHER_CONTRACT_MANAGER = 'Contract_Manager';
    const ROLES_AT_OTHER_DIPLOMAT = 'Diplomat';
    const ROLES_AT_OTHER_DIRECTOR = 'Director';
    const ROLES_AT_OTHER_FACTORY_MANAGER = 'Factory_Manager';
    const ROLES_AT_OTHER_FITTING_MANAGER = 'Fitting_Manager';
    const ROLES_AT_OTHER_HANGAR_QUERY_1 = 'Hangar_Query_1';
    const ROLES_AT_OTHER_HANGAR_QUERY_2 = 'Hangar_Query_2';
    const ROLES_AT_OTHER_HANGAR_QUERY_3 = 'Hangar_Query_3';
    const ROLES_AT_OTHER_HANGAR_QUERY_4 = 'Hangar_Query_4';
    const ROLES_AT_OTHER_HANGAR_QUERY_5 = 'Hangar_Query_5';
    const ROLES_AT_OTHER_HANGAR_QUERY_6 = 'Hangar_Query_6';
    const ROLES_AT_OTHER_HANGAR_QUERY_7 = 'Hangar_Query_7';
    const ROLES_AT_OTHER_HANGAR_TAKE_1 = 'Hangar_Take_1';
    const ROLES_AT_OTHER_HANGAR_TAKE_2 = 'Hangar_Take_2';
    const ROLES_AT_OTHER_HANGAR_TAKE_3 = 'Hangar_Take_3';
    const ROLES_AT_OTHER_HANGAR_TAKE_4 = 'Hangar_Take_4';
    const ROLES_AT_OTHER_HANGAR_TAKE_5 = 'Hangar_Take_5';
    const ROLES_AT_OTHER_HANGAR_TAKE_6 = 'Hangar_Take_6';
    const ROLES_AT_OTHER_HANGAR_TAKE_7 = 'Hangar_Take_7';
    const ROLES_AT_OTHER_JUNIOR_ACCOUNTANT = 'Junior_Accountant';
    const ROLES_AT_OTHER_PERSONNEL_MANAGER = 'Personnel_Manager';
    const ROLES_AT_OTHER_RENT_FACTORY_FACILITY = 'Rent_Factory_Facility';
    const ROLES_AT_OTHER_RENT_OFFICE = 'Rent_Office';
    const ROLES_AT_OTHER_RENT_RESEARCH_FACILITY = 'Rent_Research_Facility';
    const ROLES_AT_OTHER_SECURITY_OFFICER = 'Security_Officer';
    const ROLES_AT_OTHER_STARBASE_DEFENSE_OPERATOR = 'Starbase_Defense_Operator';
    const ROLES_AT_OTHER_STARBASE_FUEL_TECHNICIAN = 'Starbase_Fuel_Technician';
    const ROLES_AT_OTHER_STATION_MANAGER = 'Station_Manager';
    const ROLES_AT_OTHER_TRADER = 'Trader';
    const ROLES_AT_BASE_ACCOUNT_TAKE_1 = 'Account_Take_1';
    const ROLES_AT_BASE_ACCOUNT_TAKE_2 = 'Account_Take_2';
    const ROLES_AT_BASE_ACCOUNT_TAKE_3 = 'Account_Take_3';
    const ROLES_AT_BASE_ACCOUNT_TAKE_4 = 'Account_Take_4';
    const ROLES_AT_BASE_ACCOUNT_TAKE_5 = 'Account_Take_5';
    const ROLES_AT_BASE_ACCOUNT_TAKE_6 = 'Account_Take_6';
    const ROLES_AT_BASE_ACCOUNT_TAKE_7 = 'Account_Take_7';
    const ROLES_AT_BASE_ACCOUNTANT = 'Accountant';
    const ROLES_AT_BASE_AUDITOR = 'Auditor';
    const ROLES_AT_BASE_COMMUNICATIONS_OFFICER = 'Communications_Officer';
    const ROLES_AT_BASE_CONFIG_EQUIPMENT = 'Config_Equipment';
    const ROLES_AT_BASE_CONFIG_STARBASE_EQUIPMENT = 'Config_Starbase_Equipment';
    const ROLES_AT_BASE_CONTAINER_TAKE_1 = 'Container_Take_1';
    const ROLES_AT_BASE_CONTAINER_TAKE_2 = 'Container_Take_2';
    const ROLES_AT_BASE_CONTAINER_TAKE_3 = 'Container_Take_3';
    const ROLES_AT_BASE_CONTAINER_TAKE_4 = 'Container_Take_4';
    const ROLES_AT_BASE_CONTAINER_TAKE_5 = 'Container_Take_5';
    const ROLES_AT_BASE_CONTAINER_TAKE_6 = 'Container_Take_6';
    const ROLES_AT_BASE_CONTAINER_TAKE_7 = 'Container_Take_7';
    const ROLES_AT_BASE_CONTRACT_MANAGER = 'Contract_Manager';
    const ROLES_AT_BASE_DIPLOMAT = 'Diplomat';
    const ROLES_AT_BASE_DIRECTOR = 'Director';
    const ROLES_AT_BASE_FACTORY_MANAGER = 'Factory_Manager';
    const ROLES_AT_BASE_FITTING_MANAGER = 'Fitting_Manager';
    const ROLES_AT_BASE_HANGAR_QUERY_1 = 'Hangar_Query_1';
    const ROLES_AT_BASE_HANGAR_QUERY_2 = 'Hangar_Query_2';
    const ROLES_AT_BASE_HANGAR_QUERY_3 = 'Hangar_Query_3';
    const ROLES_AT_BASE_HANGAR_QUERY_4 = 'Hangar_Query_4';
    const ROLES_AT_BASE_HANGAR_QUERY_5 = 'Hangar_Query_5';
    const ROLES_AT_BASE_HANGAR_QUERY_6 = 'Hangar_Query_6';
    const ROLES_AT_BASE_HANGAR_QUERY_7 = 'Hangar_Query_7';
    const ROLES_AT_BASE_HANGAR_TAKE_1 = 'Hangar_Take_1';
    const ROLES_AT_BASE_HANGAR_TAKE_2 = 'Hangar_Take_2';
    const ROLES_AT_BASE_HANGAR_TAKE_3 = 'Hangar_Take_3';
    const ROLES_AT_BASE_HANGAR_TAKE_4 = 'Hangar_Take_4';
    const ROLES_AT_BASE_HANGAR_TAKE_5 = 'Hangar_Take_5';
    const ROLES_AT_BASE_HANGAR_TAKE_6 = 'Hangar_Take_6';
    const ROLES_AT_BASE_HANGAR_TAKE_7 = 'Hangar_Take_7';
    const ROLES_AT_BASE_JUNIOR_ACCOUNTANT = 'Junior_Accountant';
    const ROLES_AT_BASE_PERSONNEL_MANAGER = 'Personnel_Manager';
    const ROLES_AT_BASE_RENT_FACTORY_FACILITY = 'Rent_Factory_Facility';
    const ROLES_AT_BASE_RENT_OFFICE = 'Rent_Office';
    const ROLES_AT_BASE_RENT_RESEARCH_FACILITY = 'Rent_Research_Facility';
    const ROLES_AT_BASE_SECURITY_OFFICER = 'Security_Officer';
    const ROLES_AT_BASE_STARBASE_DEFENSE_OPERATOR = 'Starbase_Defense_Operator';
    const ROLES_AT_BASE_STARBASE_FUEL_TECHNICIAN = 'Starbase_Fuel_Technician';
    const ROLES_AT_BASE_STATION_MANAGER = 'Station_Manager';
    const ROLES_AT_BASE_TRADER = 'Trader';
    const ROLES_ACCOUNT_TAKE_1 = 'Account_Take_1';
    const ROLES_ACCOUNT_TAKE_2 = 'Account_Take_2';
    const ROLES_ACCOUNT_TAKE_3 = 'Account_Take_3';
    const ROLES_ACCOUNT_TAKE_4 = 'Account_Take_4';
    const ROLES_ACCOUNT_TAKE_5 = 'Account_Take_5';
    const ROLES_ACCOUNT_TAKE_6 = 'Account_Take_6';
    const ROLES_ACCOUNT_TAKE_7 = 'Account_Take_7';
    const ROLES_ACCOUNTANT = 'Accountant';
    const ROLES_AUDITOR = 'Auditor';
    const ROLES_COMMUNICATIONS_OFFICER = 'Communications_Officer';
    const ROLES_CONFIG_EQUIPMENT = 'Config_Equipment';
    const ROLES_CONFIG_STARBASE_EQUIPMENT = 'Config_Starbase_Equipment';
    const ROLES_CONTAINER_TAKE_1 = 'Container_Take_1';
    const ROLES_CONTAINER_TAKE_2 = 'Container_Take_2';
    const ROLES_CONTAINER_TAKE_3 = 'Container_Take_3';
    const ROLES_CONTAINER_TAKE_4 = 'Container_Take_4';
    const ROLES_CONTAINER_TAKE_5 = 'Container_Take_5';
    const ROLES_CONTAINER_TAKE_6 = 'Container_Take_6';
    const ROLES_CONTAINER_TAKE_7 = 'Container_Take_7';
    const ROLES_CONTRACT_MANAGER = 'Contract_Manager';
    const ROLES_DIPLOMAT = 'Diplomat';
    const ROLES_DIRECTOR = 'Director';
    const ROLES_FACTORY_MANAGER = 'Factory_Manager';
    const ROLES_FITTING_MANAGER = 'Fitting_Manager';
    const ROLES_HANGAR_QUERY_1 = 'Hangar_Query_1';
    const ROLES_HANGAR_QUERY_2 = 'Hangar_Query_2';
    const ROLES_HANGAR_QUERY_3 = 'Hangar_Query_3';
    const ROLES_HANGAR_QUERY_4 = 'Hangar_Query_4';
    const ROLES_HANGAR_QUERY_5 = 'Hangar_Query_5';
    const ROLES_HANGAR_QUERY_6 = 'Hangar_Query_6';
    const ROLES_HANGAR_QUERY_7 = 'Hangar_Query_7';
    const ROLES_HANGAR_TAKE_1 = 'Hangar_Take_1';
    const ROLES_HANGAR_TAKE_2 = 'Hangar_Take_2';
    const ROLES_HANGAR_TAKE_3 = 'Hangar_Take_3';
    const ROLES_HANGAR_TAKE_4 = 'Hangar_Take_4';
    const ROLES_HANGAR_TAKE_5 = 'Hangar_Take_5';
    const ROLES_HANGAR_TAKE_6 = 'Hangar_Take_6';
    const ROLES_HANGAR_TAKE_7 = 'Hangar_Take_7';
    const ROLES_JUNIOR_ACCOUNTANT = 'Junior_Accountant';
    const ROLES_PERSONNEL_MANAGER = 'Personnel_Manager';
    const ROLES_RENT_FACTORY_FACILITY = 'Rent_Factory_Facility';
    const ROLES_RENT_OFFICE = 'Rent_Office';
    const ROLES_RENT_RESEARCH_FACILITY = 'Rent_Research_Facility';
    const ROLES_SECURITY_OFFICER = 'Security_Officer';
    const ROLES_STARBASE_DEFENSE_OPERATOR = 'Starbase_Defense_Operator';
    const ROLES_STARBASE_FUEL_TECHNICIAN = 'Starbase_Fuel_Technician';
    const ROLES_STATION_MANAGER = 'Station_Manager';
    const ROLES_TRADER = 'Trader';
    const ROLES_AT_HQ_ACCOUNT_TAKE_1 = 'Account_Take_1';
    const ROLES_AT_HQ_ACCOUNT_TAKE_2 = 'Account_Take_2';
    const ROLES_AT_HQ_ACCOUNT_TAKE_3 = 'Account_Take_3';
    const ROLES_AT_HQ_ACCOUNT_TAKE_4 = 'Account_Take_4';
    const ROLES_AT_HQ_ACCOUNT_TAKE_5 = 'Account_Take_5';
    const ROLES_AT_HQ_ACCOUNT_TAKE_6 = 'Account_Take_6';
    const ROLES_AT_HQ_ACCOUNT_TAKE_7 = 'Account_Take_7';
    const ROLES_AT_HQ_ACCOUNTANT = 'Accountant';
    const ROLES_AT_HQ_AUDITOR = 'Auditor';
    const ROLES_AT_HQ_COMMUNICATIONS_OFFICER = 'Communications_Officer';
    const ROLES_AT_HQ_CONFIG_EQUIPMENT = 'Config_Equipment';
    const ROLES_AT_HQ_CONFIG_STARBASE_EQUIPMENT = 'Config_Starbase_Equipment';
    const ROLES_AT_HQ_CONTAINER_TAKE_1 = 'Container_Take_1';
    const ROLES_AT_HQ_CONTAINER_TAKE_2 = 'Container_Take_2';
    const ROLES_AT_HQ_CONTAINER_TAKE_3 = 'Container_Take_3';
    const ROLES_AT_HQ_CONTAINER_TAKE_4 = 'Container_Take_4';
    const ROLES_AT_HQ_CONTAINER_TAKE_5 = 'Container_Take_5';
    const ROLES_AT_HQ_CONTAINER_TAKE_6 = 'Container_Take_6';
    const ROLES_AT_HQ_CONTAINER_TAKE_7 = 'Container_Take_7';
    const ROLES_AT_HQ_CONTRACT_MANAGER = 'Contract_Manager';
    const ROLES_AT_HQ_DIPLOMAT = 'Diplomat';
    const ROLES_AT_HQ_DIRECTOR = 'Director';
    const ROLES_AT_HQ_FACTORY_MANAGER = 'Factory_Manager';
    const ROLES_AT_HQ_FITTING_MANAGER = 'Fitting_Manager';
    const ROLES_AT_HQ_HANGAR_QUERY_1 = 'Hangar_Query_1';
    const ROLES_AT_HQ_HANGAR_QUERY_2 = 'Hangar_Query_2';
    const ROLES_AT_HQ_HANGAR_QUERY_3 = 'Hangar_Query_3';
    const ROLES_AT_HQ_HANGAR_QUERY_4 = 'Hangar_Query_4';
    const ROLES_AT_HQ_HANGAR_QUERY_5 = 'Hangar_Query_5';
    const ROLES_AT_HQ_HANGAR_QUERY_6 = 'Hangar_Query_6';
    const ROLES_AT_HQ_HANGAR_QUERY_7 = 'Hangar_Query_7';
    const ROLES_AT_HQ_HANGAR_TAKE_1 = 'Hangar_Take_1';
    const ROLES_AT_HQ_HANGAR_TAKE_2 = 'Hangar_Take_2';
    const ROLES_AT_HQ_HANGAR_TAKE_3 = 'Hangar_Take_3';
    const ROLES_AT_HQ_HANGAR_TAKE_4 = 'Hangar_Take_4';
    const ROLES_AT_HQ_HANGAR_TAKE_5 = 'Hangar_Take_5';
    const ROLES_AT_HQ_HANGAR_TAKE_6 = 'Hangar_Take_6';
    const ROLES_AT_HQ_HANGAR_TAKE_7 = 'Hangar_Take_7';
    const ROLES_AT_HQ_JUNIOR_ACCOUNTANT = 'Junior_Accountant';
    const ROLES_AT_HQ_PERSONNEL_MANAGER = 'Personnel_Manager';
    const ROLES_AT_HQ_RENT_FACTORY_FACILITY = 'Rent_Factory_Facility';
    const ROLES_AT_HQ_RENT_OFFICE = 'Rent_Office';
    const ROLES_AT_HQ_RENT_RESEARCH_FACILITY = 'Rent_Research_Facility';
    const ROLES_AT_HQ_SECURITY_OFFICER = 'Security_Officer';
    const ROLES_AT_HQ_STARBASE_DEFENSE_OPERATOR = 'Starbase_Defense_Operator';
    const ROLES_AT_HQ_STARBASE_FUEL_TECHNICIAN = 'Starbase_Fuel_Technician';
    const ROLES_AT_HQ_STATION_MANAGER = 'Station_Manager';
    const ROLES_AT_HQ_TRADER = 'Trader';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRolesAtOtherAllowableValues()
    {
        return [
            self::ROLES_AT_OTHER_ACCOUNT_TAKE_1,
            self::ROLES_AT_OTHER_ACCOUNT_TAKE_2,
            self::ROLES_AT_OTHER_ACCOUNT_TAKE_3,
            self::ROLES_AT_OTHER_ACCOUNT_TAKE_4,
            self::ROLES_AT_OTHER_ACCOUNT_TAKE_5,
            self::ROLES_AT_OTHER_ACCOUNT_TAKE_6,
            self::ROLES_AT_OTHER_ACCOUNT_TAKE_7,
            self::ROLES_AT_OTHER_ACCOUNTANT,
            self::ROLES_AT_OTHER_AUDITOR,
            self::ROLES_AT_OTHER_COMMUNICATIONS_OFFICER,
            self::ROLES_AT_OTHER_CONFIG_EQUIPMENT,
            self::ROLES_AT_OTHER_CONFIG_STARBASE_EQUIPMENT,
            self::ROLES_AT_OTHER_CONTAINER_TAKE_1,
            self::ROLES_AT_OTHER_CONTAINER_TAKE_2,
            self::ROLES_AT_OTHER_CONTAINER_TAKE_3,
            self::ROLES_AT_OTHER_CONTAINER_TAKE_4,
            self::ROLES_AT_OTHER_CONTAINER_TAKE_5,
            self::ROLES_AT_OTHER_CONTAINER_TAKE_6,
            self::ROLES_AT_OTHER_CONTAINER_TAKE_7,
            self::ROLES_AT_OTHER_CONTRACT_MANAGER,
            self::ROLES_AT_OTHER_DIPLOMAT,
            self::ROLES_AT_OTHER_DIRECTOR,
            self::ROLES_AT_OTHER_FACTORY_MANAGER,
            self::ROLES_AT_OTHER_FITTING_MANAGER,
            self::ROLES_AT_OTHER_HANGAR_QUERY_1,
            self::ROLES_AT_OTHER_HANGAR_QUERY_2,
            self::ROLES_AT_OTHER_HANGAR_QUERY_3,
            self::ROLES_AT_OTHER_HANGAR_QUERY_4,
            self::ROLES_AT_OTHER_HANGAR_QUERY_5,
            self::ROLES_AT_OTHER_HANGAR_QUERY_6,
            self::ROLES_AT_OTHER_HANGAR_QUERY_7,
            self::ROLES_AT_OTHER_HANGAR_TAKE_1,
            self::ROLES_AT_OTHER_HANGAR_TAKE_2,
            self::ROLES_AT_OTHER_HANGAR_TAKE_3,
            self::ROLES_AT_OTHER_HANGAR_TAKE_4,
            self::ROLES_AT_OTHER_HANGAR_TAKE_5,
            self::ROLES_AT_OTHER_HANGAR_TAKE_6,
            self::ROLES_AT_OTHER_HANGAR_TAKE_7,
            self::ROLES_AT_OTHER_JUNIOR_ACCOUNTANT,
            self::ROLES_AT_OTHER_PERSONNEL_MANAGER,
            self::ROLES_AT_OTHER_RENT_FACTORY_FACILITY,
            self::ROLES_AT_OTHER_RENT_OFFICE,
            self::ROLES_AT_OTHER_RENT_RESEARCH_FACILITY,
            self::ROLES_AT_OTHER_SECURITY_OFFICER,
            self::ROLES_AT_OTHER_STARBASE_DEFENSE_OPERATOR,
            self::ROLES_AT_OTHER_STARBASE_FUEL_TECHNICIAN,
            self::ROLES_AT_OTHER_STATION_MANAGER,
            self::ROLES_AT_OTHER_TRADER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRolesAtBaseAllowableValues()
    {
        return [
            self::ROLES_AT_BASE_ACCOUNT_TAKE_1,
            self::ROLES_AT_BASE_ACCOUNT_TAKE_2,
            self::ROLES_AT_BASE_ACCOUNT_TAKE_3,
            self::ROLES_AT_BASE_ACCOUNT_TAKE_4,
            self::ROLES_AT_BASE_ACCOUNT_TAKE_5,
            self::ROLES_AT_BASE_ACCOUNT_TAKE_6,
            self::ROLES_AT_BASE_ACCOUNT_TAKE_7,
            self::ROLES_AT_BASE_ACCOUNTANT,
            self::ROLES_AT_BASE_AUDITOR,
            self::ROLES_AT_BASE_COMMUNICATIONS_OFFICER,
            self::ROLES_AT_BASE_CONFIG_EQUIPMENT,
            self::ROLES_AT_BASE_CONFIG_STARBASE_EQUIPMENT,
            self::ROLES_AT_BASE_CONTAINER_TAKE_1,
            self::ROLES_AT_BASE_CONTAINER_TAKE_2,
            self::ROLES_AT_BASE_CONTAINER_TAKE_3,
            self::ROLES_AT_BASE_CONTAINER_TAKE_4,
            self::ROLES_AT_BASE_CONTAINER_TAKE_5,
            self::ROLES_AT_BASE_CONTAINER_TAKE_6,
            self::ROLES_AT_BASE_CONTAINER_TAKE_7,
            self::ROLES_AT_BASE_CONTRACT_MANAGER,
            self::ROLES_AT_BASE_DIPLOMAT,
            self::ROLES_AT_BASE_DIRECTOR,
            self::ROLES_AT_BASE_FACTORY_MANAGER,
            self::ROLES_AT_BASE_FITTING_MANAGER,
            self::ROLES_AT_BASE_HANGAR_QUERY_1,
            self::ROLES_AT_BASE_HANGAR_QUERY_2,
            self::ROLES_AT_BASE_HANGAR_QUERY_3,
            self::ROLES_AT_BASE_HANGAR_QUERY_4,
            self::ROLES_AT_BASE_HANGAR_QUERY_5,
            self::ROLES_AT_BASE_HANGAR_QUERY_6,
            self::ROLES_AT_BASE_HANGAR_QUERY_7,
            self::ROLES_AT_BASE_HANGAR_TAKE_1,
            self::ROLES_AT_BASE_HANGAR_TAKE_2,
            self::ROLES_AT_BASE_HANGAR_TAKE_3,
            self::ROLES_AT_BASE_HANGAR_TAKE_4,
            self::ROLES_AT_BASE_HANGAR_TAKE_5,
            self::ROLES_AT_BASE_HANGAR_TAKE_6,
            self::ROLES_AT_BASE_HANGAR_TAKE_7,
            self::ROLES_AT_BASE_JUNIOR_ACCOUNTANT,
            self::ROLES_AT_BASE_PERSONNEL_MANAGER,
            self::ROLES_AT_BASE_RENT_FACTORY_FACILITY,
            self::ROLES_AT_BASE_RENT_OFFICE,
            self::ROLES_AT_BASE_RENT_RESEARCH_FACILITY,
            self::ROLES_AT_BASE_SECURITY_OFFICER,
            self::ROLES_AT_BASE_STARBASE_DEFENSE_OPERATOR,
            self::ROLES_AT_BASE_STARBASE_FUEL_TECHNICIAN,
            self::ROLES_AT_BASE_STATION_MANAGER,
            self::ROLES_AT_BASE_TRADER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRolesAllowableValues()
    {
        return [
            self::ROLES_ACCOUNT_TAKE_1,
            self::ROLES_ACCOUNT_TAKE_2,
            self::ROLES_ACCOUNT_TAKE_3,
            self::ROLES_ACCOUNT_TAKE_4,
            self::ROLES_ACCOUNT_TAKE_5,
            self::ROLES_ACCOUNT_TAKE_6,
            self::ROLES_ACCOUNT_TAKE_7,
            self::ROLES_ACCOUNTANT,
            self::ROLES_AUDITOR,
            self::ROLES_COMMUNICATIONS_OFFICER,
            self::ROLES_CONFIG_EQUIPMENT,
            self::ROLES_CONFIG_STARBASE_EQUIPMENT,
            self::ROLES_CONTAINER_TAKE_1,
            self::ROLES_CONTAINER_TAKE_2,
            self::ROLES_CONTAINER_TAKE_3,
            self::ROLES_CONTAINER_TAKE_4,
            self::ROLES_CONTAINER_TAKE_5,
            self::ROLES_CONTAINER_TAKE_6,
            self::ROLES_CONTAINER_TAKE_7,
            self::ROLES_CONTRACT_MANAGER,
            self::ROLES_DIPLOMAT,
            self::ROLES_DIRECTOR,
            self::ROLES_FACTORY_MANAGER,
            self::ROLES_FITTING_MANAGER,
            self::ROLES_HANGAR_QUERY_1,
            self::ROLES_HANGAR_QUERY_2,
            self::ROLES_HANGAR_QUERY_3,
            self::ROLES_HANGAR_QUERY_4,
            self::ROLES_HANGAR_QUERY_5,
            self::ROLES_HANGAR_QUERY_6,
            self::ROLES_HANGAR_QUERY_7,
            self::ROLES_HANGAR_TAKE_1,
            self::ROLES_HANGAR_TAKE_2,
            self::ROLES_HANGAR_TAKE_3,
            self::ROLES_HANGAR_TAKE_4,
            self::ROLES_HANGAR_TAKE_5,
            self::ROLES_HANGAR_TAKE_6,
            self::ROLES_HANGAR_TAKE_7,
            self::ROLES_JUNIOR_ACCOUNTANT,
            self::ROLES_PERSONNEL_MANAGER,
            self::ROLES_RENT_FACTORY_FACILITY,
            self::ROLES_RENT_OFFICE,
            self::ROLES_RENT_RESEARCH_FACILITY,
            self::ROLES_SECURITY_OFFICER,
            self::ROLES_STARBASE_DEFENSE_OPERATOR,
            self::ROLES_STARBASE_FUEL_TECHNICIAN,
            self::ROLES_STATION_MANAGER,
            self::ROLES_TRADER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRolesAtHqAllowableValues()
    {
        return [
            self::ROLES_AT_HQ_ACCOUNT_TAKE_1,
            self::ROLES_AT_HQ_ACCOUNT_TAKE_2,
            self::ROLES_AT_HQ_ACCOUNT_TAKE_3,
            self::ROLES_AT_HQ_ACCOUNT_TAKE_4,
            self::ROLES_AT_HQ_ACCOUNT_TAKE_5,
            self::ROLES_AT_HQ_ACCOUNT_TAKE_6,
            self::ROLES_AT_HQ_ACCOUNT_TAKE_7,
            self::ROLES_AT_HQ_ACCOUNTANT,
            self::ROLES_AT_HQ_AUDITOR,
            self::ROLES_AT_HQ_COMMUNICATIONS_OFFICER,
            self::ROLES_AT_HQ_CONFIG_EQUIPMENT,
            self::ROLES_AT_HQ_CONFIG_STARBASE_EQUIPMENT,
            self::ROLES_AT_HQ_CONTAINER_TAKE_1,
            self::ROLES_AT_HQ_CONTAINER_TAKE_2,
            self::ROLES_AT_HQ_CONTAINER_TAKE_3,
            self::ROLES_AT_HQ_CONTAINER_TAKE_4,
            self::ROLES_AT_HQ_CONTAINER_TAKE_5,
            self::ROLES_AT_HQ_CONTAINER_TAKE_6,
            self::ROLES_AT_HQ_CONTAINER_TAKE_7,
            self::ROLES_AT_HQ_CONTRACT_MANAGER,
            self::ROLES_AT_HQ_DIPLOMAT,
            self::ROLES_AT_HQ_DIRECTOR,
            self::ROLES_AT_HQ_FACTORY_MANAGER,
            self::ROLES_AT_HQ_FITTING_MANAGER,
            self::ROLES_AT_HQ_HANGAR_QUERY_1,
            self::ROLES_AT_HQ_HANGAR_QUERY_2,
            self::ROLES_AT_HQ_HANGAR_QUERY_3,
            self::ROLES_AT_HQ_HANGAR_QUERY_4,
            self::ROLES_AT_HQ_HANGAR_QUERY_5,
            self::ROLES_AT_HQ_HANGAR_QUERY_6,
            self::ROLES_AT_HQ_HANGAR_QUERY_7,
            self::ROLES_AT_HQ_HANGAR_TAKE_1,
            self::ROLES_AT_HQ_HANGAR_TAKE_2,
            self::ROLES_AT_HQ_HANGAR_TAKE_3,
            self::ROLES_AT_HQ_HANGAR_TAKE_4,
            self::ROLES_AT_HQ_HANGAR_TAKE_5,
            self::ROLES_AT_HQ_HANGAR_TAKE_6,
            self::ROLES_AT_HQ_HANGAR_TAKE_7,
            self::ROLES_AT_HQ_JUNIOR_ACCOUNTANT,
            self::ROLES_AT_HQ_PERSONNEL_MANAGER,
            self::ROLES_AT_HQ_RENT_FACTORY_FACILITY,
            self::ROLES_AT_HQ_RENT_OFFICE,
            self::ROLES_AT_HQ_RENT_RESEARCH_FACILITY,
            self::ROLES_AT_HQ_SECURITY_OFFICER,
            self::ROLES_AT_HQ_STARBASE_DEFENSE_OPERATOR,
            self::ROLES_AT_HQ_STARBASE_FUEL_TECHNICIAN,
            self::ROLES_AT_HQ_STATION_MANAGER,
            self::ROLES_AT_HQ_TRADER,
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
        $this->container['roles_at_other'] = isset($data['roles_at_other']) ? $data['roles_at_other'] : null;
        $this->container['roles_at_base'] = isset($data['roles_at_base']) ? $data['roles_at_base'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
        $this->container['roles_at_hq'] = isset($data['roles_at_hq']) ? $data['roles_at_hq'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets roles_at_other
     *
     * @return string[]|null
     */
    public function getRolesAtOther()
    {
        return $this->container['roles_at_other'];
    }

    /**
     * Sets roles_at_other
     *
     * @param string[]|null $roles_at_other roles_at_other array
     *
     * @return $this
     */
    public function setRolesAtOther($roles_at_other)
    {
        $allowedValues = $this->getRolesAtOtherAllowableValues();
        if (!is_null($roles_at_other) && array_diff($roles_at_other, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'roles_at_other', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['roles_at_other'] = $roles_at_other;

        return $this;
    }

    /**
     * Gets roles_at_base
     *
     * @return string[]|null
     */
    public function getRolesAtBase()
    {
        return $this->container['roles_at_base'];
    }

    /**
     * Sets roles_at_base
     *
     * @param string[]|null $roles_at_base roles_at_base array
     *
     * @return $this
     */
    public function setRolesAtBase($roles_at_base)
    {
        $allowedValues = $this->getRolesAtBaseAllowableValues();
        if (!is_null($roles_at_base) && array_diff($roles_at_base, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'roles_at_base', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['roles_at_base'] = $roles_at_base;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return string[]|null
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param string[]|null $roles roles array
     *
     * @return $this
     */
    public function setRoles($roles)
    {
        $allowedValues = $this->getRolesAllowableValues();
        if (!is_null($roles) && array_diff($roles, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'roles', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets roles_at_hq
     *
     * @return string[]|null
     */
    public function getRolesAtHq()
    {
        return $this->container['roles_at_hq'];
    }

    /**
     * Sets roles_at_hq
     *
     * @param string[]|null $roles_at_hq roles_at_hq array
     *
     * @return $this
     */
    public function setRolesAtHq($roles_at_hq)
    {
        $allowedValues = $this->getRolesAtHqAllowableValues();
        if (!is_null($roles_at_hq) && array_diff($roles_at_hq, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'roles_at_hq', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['roles_at_hq'] = $roles_at_hq;

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
}


