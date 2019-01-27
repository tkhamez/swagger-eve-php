<?php
/**
 * GetCorporationsCorporationIdWalletsDivisionJournal200Ok
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
 * GetCorporationsCorporationIdWalletsDivisionJournal200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdWalletsDivisionJournal200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_wallets_division_journal_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'double',
        'balance' => 'double',
        'context_id' => 'int',
        'context_id_type' => 'string',
        'date' => '\DateTime',
        'description' => 'string',
        'first_party_id' => 'int',
        'id' => 'int',
        'reason' => 'string',
        'ref_type' => 'string',
        'second_party_id' => 'int',
        'tax' => 'double',
        'tax_receiver_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => 'double',
        'balance' => 'double',
        'context_id' => 'int64',
        'context_id_type' => null,
        'date' => 'date-time',
        'description' => null,
        'first_party_id' => 'int32',
        'id' => 'int64',
        'reason' => null,
        'ref_type' => null,
        'second_party_id' => 'int32',
        'tax' => 'double',
        'tax_receiver_id' => 'int32'
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
        'amount' => 'amount',
        'balance' => 'balance',
        'context_id' => 'context_id',
        'context_id_type' => 'context_id_type',
        'date' => 'date',
        'description' => 'description',
        'first_party_id' => 'first_party_id',
        'id' => 'id',
        'reason' => 'reason',
        'ref_type' => 'ref_type',
        'second_party_id' => 'second_party_id',
        'tax' => 'tax',
        'tax_receiver_id' => 'tax_receiver_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'balance' => 'setBalance',
        'context_id' => 'setContextId',
        'context_id_type' => 'setContextIdType',
        'date' => 'setDate',
        'description' => 'setDescription',
        'first_party_id' => 'setFirstPartyId',
        'id' => 'setId',
        'reason' => 'setReason',
        'ref_type' => 'setRefType',
        'second_party_id' => 'setSecondPartyId',
        'tax' => 'setTax',
        'tax_receiver_id' => 'setTaxReceiverId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'balance' => 'getBalance',
        'context_id' => 'getContextId',
        'context_id_type' => 'getContextIdType',
        'date' => 'getDate',
        'description' => 'getDescription',
        'first_party_id' => 'getFirstPartyId',
        'id' => 'getId',
        'reason' => 'getReason',
        'ref_type' => 'getRefType',
        'second_party_id' => 'getSecondPartyId',
        'tax' => 'getTax',
        'tax_receiver_id' => 'getTaxReceiverId'
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

    const CONTEXT_ID_TYPE_STRUCTURE_ID = 'structure_id';
    const CONTEXT_ID_TYPE_STATION_ID = 'station_id';
    const CONTEXT_ID_TYPE_MARKET_TRANSACTION_ID = 'market_transaction_id';
    const CONTEXT_ID_TYPE_CHARACTER_ID = 'character_id';
    const CONTEXT_ID_TYPE_CORPORATION_ID = 'corporation_id';
    const CONTEXT_ID_TYPE_ALLIANCE_ID = 'alliance_id';
    const CONTEXT_ID_TYPE_EVE_SYSTEM = 'eve_system';
    const CONTEXT_ID_TYPE_INDUSTRY_JOB_ID = 'industry_job_id';
    const CONTEXT_ID_TYPE_CONTRACT_ID = 'contract_id';
    const CONTEXT_ID_TYPE_PLANET_ID = 'planet_id';
    const CONTEXT_ID_TYPE_SYSTEM_ID = 'system_id';
    const CONTEXT_ID_TYPE_TYPE_ID = 'type_id';
    const REF_TYPE_ACCELERATION_GATE_FEE = 'acceleration_gate_fee';
    const REF_TYPE_ADVERTISEMENT_LISTING_FEE = 'advertisement_listing_fee';
    const REF_TYPE_AGENT_DONATION = 'agent_donation';
    const REF_TYPE_AGENT_LOCATION_SERVICES = 'agent_location_services';
    const REF_TYPE_AGENT_MISCELLANEOUS = 'agent_miscellaneous';
    const REF_TYPE_AGENT_MISSION_COLLATERAL_PAID = 'agent_mission_collateral_paid';
    const REF_TYPE_AGENT_MISSION_COLLATERAL_REFUNDED = 'agent_mission_collateral_refunded';
    const REF_TYPE_AGENT_MISSION_REWARD = 'agent_mission_reward';
    const REF_TYPE_AGENT_MISSION_REWARD_CORPORATION_TAX = 'agent_mission_reward_corporation_tax';
    const REF_TYPE_AGENT_MISSION_TIME_BONUS_REWARD = 'agent_mission_time_bonus_reward';
    const REF_TYPE_AGENT_MISSION_TIME_BONUS_REWARD_CORPORATION_TAX = 'agent_mission_time_bonus_reward_corporation_tax';
    const REF_TYPE_AGENT_SECURITY_SERVICES = 'agent_security_services';
    const REF_TYPE_AGENT_SERVICES_RENDERED = 'agent_services_rendered';
    const REF_TYPE_AGENTS_PREWARD = 'agents_preward';
    const REF_TYPE_ALLIANCE_MAINTAINANCE_FEE = 'alliance_maintainance_fee';
    const REF_TYPE_ALLIANCE_REGISTRATION_FEE = 'alliance_registration_fee';
    const REF_TYPE_ASSET_SAFETY_RECOVERY_TAX = 'asset_safety_recovery_tax';
    const REF_TYPE_BOUNTY = 'bounty';
    const REF_TYPE_BOUNTY_PRIZE = 'bounty_prize';
    const REF_TYPE_BOUNTY_PRIZE_CORPORATION_TAX = 'bounty_prize_corporation_tax';
    const REF_TYPE_BOUNTY_PRIZES = 'bounty_prizes';
    const REF_TYPE_BOUNTY_REIMBURSEMENT = 'bounty_reimbursement';
    const REF_TYPE_BOUNTY_SURCHARGE = 'bounty_surcharge';
    const REF_TYPE_BROKERS_FEE = 'brokers_fee';
    const REF_TYPE_CLONE_ACTIVATION = 'clone_activation';
    const REF_TYPE_CLONE_TRANSFER = 'clone_transfer';
    const REF_TYPE_CONTRABAND_FINE = 'contraband_fine';
    const REF_TYPE_CONTRACT_AUCTION_BID = 'contract_auction_bid';
    const REF_TYPE_CONTRACT_AUCTION_BID_CORP = 'contract_auction_bid_corp';
    const REF_TYPE_CONTRACT_AUCTION_BID_REFUND = 'contract_auction_bid_refund';
    const REF_TYPE_CONTRACT_AUCTION_SOLD = 'contract_auction_sold';
    const REF_TYPE_CONTRACT_BROKERS_FEE = 'contract_brokers_fee';
    const REF_TYPE_CONTRACT_BROKERS_FEE_CORP = 'contract_brokers_fee_corp';
    const REF_TYPE_CONTRACT_COLLATERAL = 'contract_collateral';
    const REF_TYPE_CONTRACT_COLLATERAL_DEPOSITED_CORP = 'contract_collateral_deposited_corp';
    const REF_TYPE_CONTRACT_COLLATERAL_PAYOUT = 'contract_collateral_payout';
    const REF_TYPE_CONTRACT_COLLATERAL_REFUND = 'contract_collateral_refund';
    const REF_TYPE_CONTRACT_DEPOSIT = 'contract_deposit';
    const REF_TYPE_CONTRACT_DEPOSIT_CORP = 'contract_deposit_corp';
    const REF_TYPE_CONTRACT_DEPOSIT_REFUND = 'contract_deposit_refund';
    const REF_TYPE_CONTRACT_DEPOSIT_SALES_TAX = 'contract_deposit_sales_tax';
    const REF_TYPE_CONTRACT_PRICE = 'contract_price';
    const REF_TYPE_CONTRACT_PRICE_PAYMENT_CORP = 'contract_price_payment_corp';
    const REF_TYPE_CONTRACT_REVERSAL = 'contract_reversal';
    const REF_TYPE_CONTRACT_REWARD = 'contract_reward';
    const REF_TYPE_CONTRACT_REWARD_DEPOSITED = 'contract_reward_deposited';
    const REF_TYPE_CONTRACT_REWARD_DEPOSITED_CORP = 'contract_reward_deposited_corp';
    const REF_TYPE_CONTRACT_REWARD_REFUND = 'contract_reward_refund';
    const REF_TYPE_CONTRACT_SALES_TAX = 'contract_sales_tax';
    const REF_TYPE_COPYING = 'copying';
    const REF_TYPE_CORPORATE_REWARD_PAYOUT = 'corporate_reward_payout';
    const REF_TYPE_CORPORATE_REWARD_TAX = 'corporate_reward_tax';
    const REF_TYPE_CORPORATION_ACCOUNT_WITHDRAWAL = 'corporation_account_withdrawal';
    const REF_TYPE_CORPORATION_BULK_PAYMENT = 'corporation_bulk_payment';
    const REF_TYPE_CORPORATION_DIVIDEND_PAYMENT = 'corporation_dividend_payment';
    const REF_TYPE_CORPORATION_LIQUIDATION = 'corporation_liquidation';
    const REF_TYPE_CORPORATION_LOGO_CHANGE_COST = 'corporation_logo_change_cost';
    const REF_TYPE_CORPORATION_PAYMENT = 'corporation_payment';
    const REF_TYPE_CORPORATION_REGISTRATION_FEE = 'corporation_registration_fee';
    const REF_TYPE_COURIER_MISSION_ESCROW = 'courier_mission_escrow';
    const REF_TYPE_CSPA = 'cspa';
    const REF_TYPE_CSPAOFFLINEREFUND = 'cspaofflinerefund';
    const REF_TYPE_DATACORE_FEE = 'datacore_fee';
    const REF_TYPE_DNA_MODIFICATION_FEE = 'dna_modification_fee';
    const REF_TYPE_DOCKING_FEE = 'docking_fee';
    const REF_TYPE_DUEL_WAGER_ESCROW = 'duel_wager_escrow';
    const REF_TYPE_DUEL_WAGER_PAYMENT = 'duel_wager_payment';
    const REF_TYPE_DUEL_WAGER_REFUND = 'duel_wager_refund';
    const REF_TYPE_FACTORY_SLOT_RENTAL_FEE = 'factory_slot_rental_fee';
    const REF_TYPE_GM_CASH_TRANSFER = 'gm_cash_transfer';
    const REF_TYPE_INDUSTRY_JOB_TAX = 'industry_job_tax';
    const REF_TYPE_INFRASTRUCTURE_HUB_MAINTENANCE = 'infrastructure_hub_maintenance';
    const REF_TYPE_INHERITANCE = 'inheritance';
    const REF_TYPE_INSURANCE = 'insurance';
    const REF_TYPE_JUMP_CLONE_ACTIVATION_FEE = 'jump_clone_activation_fee';
    const REF_TYPE_JUMP_CLONE_INSTALLATION_FEE = 'jump_clone_installation_fee';
    const REF_TYPE_KILL_RIGHT_FEE = 'kill_right_fee';
    const REF_TYPE_LP_STORE = 'lp_store';
    const REF_TYPE_MANUFACTURING = 'manufacturing';
    const REF_TYPE_MARKET_ESCROW = 'market_escrow';
    const REF_TYPE_MARKET_FINE_PAID = 'market_fine_paid';
    const REF_TYPE_MARKET_TRANSACTION = 'market_transaction';
    const REF_TYPE_MEDAL_CREATION = 'medal_creation';
    const REF_TYPE_MEDAL_ISSUED = 'medal_issued';
    const REF_TYPE_MISSION_COMPLETION = 'mission_completion';
    const REF_TYPE_MISSION_COST = 'mission_cost';
    const REF_TYPE_MISSION_EXPIRATION = 'mission_expiration';
    const REF_TYPE_MISSION_REWARD = 'mission_reward';
    const REF_TYPE_OFFICE_RENTAL_FEE = 'office_rental_fee';
    const REF_TYPE_OPERATION_BONUS = 'operation_bonus';
    const REF_TYPE_OPPORTUNITY_REWARD = 'opportunity_reward';
    const REF_TYPE_PLANETARY_CONSTRUCTION = 'planetary_construction';
    const REF_TYPE_PLANETARY_EXPORT_TAX = 'planetary_export_tax';
    const REF_TYPE_PLANETARY_IMPORT_TAX = 'planetary_import_tax';
    const REF_TYPE_PLAYER_DONATION = 'player_donation';
    const REF_TYPE_PLAYER_TRADING = 'player_trading';
    const REF_TYPE_PROJECT_DISCOVERY_REWARD = 'project_discovery_reward';
    const REF_TYPE_PROJECT_DISCOVERY_TAX = 'project_discovery_tax';
    const REF_TYPE_REACTION = 'reaction';
    const REF_TYPE_RELEASE_OF_IMPOUNDED_PROPERTY = 'release_of_impounded_property';
    const REF_TYPE_REPAIR_BILL = 'repair_bill';
    const REF_TYPE_REPROCESSING_TAX = 'reprocessing_tax';
    const REF_TYPE_RESEARCHING_MATERIAL_PRODUCTIVITY = 'researching_material_productivity';
    const REF_TYPE_RESEARCHING_TECHNOLOGY = 'researching_technology';
    const REF_TYPE_RESEARCHING_TIME_PRODUCTIVITY = 'researching_time_productivity';
    const REF_TYPE_RESOURCE_WARS_REWARD = 'resource_wars_reward';
    const REF_TYPE_REVERSE_ENGINEERING = 'reverse_engineering';
    const REF_TYPE_SECURITY_PROCESSING_FEE = 'security_processing_fee';
    const REF_TYPE_SHARES = 'shares';
    const REF_TYPE_SOVEREIGNITY_BILL = 'sovereignity_bill';
    const REF_TYPE_STORE_PURCHASE = 'store_purchase';
    const REF_TYPE_STORE_PURCHASE_REFUND = 'store_purchase_refund';
    const REF_TYPE_STRUCTURE_GATE_JUMP = 'structure_gate_jump';
    const REF_TYPE_TRANSACTION_TAX = 'transaction_tax';
    const REF_TYPE_UPKEEP_ADJUSTMENT_FEE = 'upkeep_adjustment_fee';
    const REF_TYPE_WAR_ALLY_CONTRACT = 'war_ally_contract';
    const REF_TYPE_WAR_FEE = 'war_fee';
    const REF_TYPE_WAR_FEE_SURRENDER = 'war_fee_surrender';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContextIdTypeAllowableValues()
    {
        return [
            self::CONTEXT_ID_TYPE_STRUCTURE_ID,
            self::CONTEXT_ID_TYPE_STATION_ID,
            self::CONTEXT_ID_TYPE_MARKET_TRANSACTION_ID,
            self::CONTEXT_ID_TYPE_CHARACTER_ID,
            self::CONTEXT_ID_TYPE_CORPORATION_ID,
            self::CONTEXT_ID_TYPE_ALLIANCE_ID,
            self::CONTEXT_ID_TYPE_EVE_SYSTEM,
            self::CONTEXT_ID_TYPE_INDUSTRY_JOB_ID,
            self::CONTEXT_ID_TYPE_CONTRACT_ID,
            self::CONTEXT_ID_TYPE_PLANET_ID,
            self::CONTEXT_ID_TYPE_SYSTEM_ID,
            self::CONTEXT_ID_TYPE_TYPE_ID,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRefTypeAllowableValues()
    {
        return [
            self::REF_TYPE_ACCELERATION_GATE_FEE,
            self::REF_TYPE_ADVERTISEMENT_LISTING_FEE,
            self::REF_TYPE_AGENT_DONATION,
            self::REF_TYPE_AGENT_LOCATION_SERVICES,
            self::REF_TYPE_AGENT_MISCELLANEOUS,
            self::REF_TYPE_AGENT_MISSION_COLLATERAL_PAID,
            self::REF_TYPE_AGENT_MISSION_COLLATERAL_REFUNDED,
            self::REF_TYPE_AGENT_MISSION_REWARD,
            self::REF_TYPE_AGENT_MISSION_REWARD_CORPORATION_TAX,
            self::REF_TYPE_AGENT_MISSION_TIME_BONUS_REWARD,
            self::REF_TYPE_AGENT_MISSION_TIME_BONUS_REWARD_CORPORATION_TAX,
            self::REF_TYPE_AGENT_SECURITY_SERVICES,
            self::REF_TYPE_AGENT_SERVICES_RENDERED,
            self::REF_TYPE_AGENTS_PREWARD,
            self::REF_TYPE_ALLIANCE_MAINTAINANCE_FEE,
            self::REF_TYPE_ALLIANCE_REGISTRATION_FEE,
            self::REF_TYPE_ASSET_SAFETY_RECOVERY_TAX,
            self::REF_TYPE_BOUNTY,
            self::REF_TYPE_BOUNTY_PRIZE,
            self::REF_TYPE_BOUNTY_PRIZE_CORPORATION_TAX,
            self::REF_TYPE_BOUNTY_PRIZES,
            self::REF_TYPE_BOUNTY_REIMBURSEMENT,
            self::REF_TYPE_BOUNTY_SURCHARGE,
            self::REF_TYPE_BROKERS_FEE,
            self::REF_TYPE_CLONE_ACTIVATION,
            self::REF_TYPE_CLONE_TRANSFER,
            self::REF_TYPE_CONTRABAND_FINE,
            self::REF_TYPE_CONTRACT_AUCTION_BID,
            self::REF_TYPE_CONTRACT_AUCTION_BID_CORP,
            self::REF_TYPE_CONTRACT_AUCTION_BID_REFUND,
            self::REF_TYPE_CONTRACT_AUCTION_SOLD,
            self::REF_TYPE_CONTRACT_BROKERS_FEE,
            self::REF_TYPE_CONTRACT_BROKERS_FEE_CORP,
            self::REF_TYPE_CONTRACT_COLLATERAL,
            self::REF_TYPE_CONTRACT_COLLATERAL_DEPOSITED_CORP,
            self::REF_TYPE_CONTRACT_COLLATERAL_PAYOUT,
            self::REF_TYPE_CONTRACT_COLLATERAL_REFUND,
            self::REF_TYPE_CONTRACT_DEPOSIT,
            self::REF_TYPE_CONTRACT_DEPOSIT_CORP,
            self::REF_TYPE_CONTRACT_DEPOSIT_REFUND,
            self::REF_TYPE_CONTRACT_DEPOSIT_SALES_TAX,
            self::REF_TYPE_CONTRACT_PRICE,
            self::REF_TYPE_CONTRACT_PRICE_PAYMENT_CORP,
            self::REF_TYPE_CONTRACT_REVERSAL,
            self::REF_TYPE_CONTRACT_REWARD,
            self::REF_TYPE_CONTRACT_REWARD_DEPOSITED,
            self::REF_TYPE_CONTRACT_REWARD_DEPOSITED_CORP,
            self::REF_TYPE_CONTRACT_REWARD_REFUND,
            self::REF_TYPE_CONTRACT_SALES_TAX,
            self::REF_TYPE_COPYING,
            self::REF_TYPE_CORPORATE_REWARD_PAYOUT,
            self::REF_TYPE_CORPORATE_REWARD_TAX,
            self::REF_TYPE_CORPORATION_ACCOUNT_WITHDRAWAL,
            self::REF_TYPE_CORPORATION_BULK_PAYMENT,
            self::REF_TYPE_CORPORATION_DIVIDEND_PAYMENT,
            self::REF_TYPE_CORPORATION_LIQUIDATION,
            self::REF_TYPE_CORPORATION_LOGO_CHANGE_COST,
            self::REF_TYPE_CORPORATION_PAYMENT,
            self::REF_TYPE_CORPORATION_REGISTRATION_FEE,
            self::REF_TYPE_COURIER_MISSION_ESCROW,
            self::REF_TYPE_CSPA,
            self::REF_TYPE_CSPAOFFLINEREFUND,
            self::REF_TYPE_DATACORE_FEE,
            self::REF_TYPE_DNA_MODIFICATION_FEE,
            self::REF_TYPE_DOCKING_FEE,
            self::REF_TYPE_DUEL_WAGER_ESCROW,
            self::REF_TYPE_DUEL_WAGER_PAYMENT,
            self::REF_TYPE_DUEL_WAGER_REFUND,
            self::REF_TYPE_FACTORY_SLOT_RENTAL_FEE,
            self::REF_TYPE_GM_CASH_TRANSFER,
            self::REF_TYPE_INDUSTRY_JOB_TAX,
            self::REF_TYPE_INFRASTRUCTURE_HUB_MAINTENANCE,
            self::REF_TYPE_INHERITANCE,
            self::REF_TYPE_INSURANCE,
            self::REF_TYPE_JUMP_CLONE_ACTIVATION_FEE,
            self::REF_TYPE_JUMP_CLONE_INSTALLATION_FEE,
            self::REF_TYPE_KILL_RIGHT_FEE,
            self::REF_TYPE_LP_STORE,
            self::REF_TYPE_MANUFACTURING,
            self::REF_TYPE_MARKET_ESCROW,
            self::REF_TYPE_MARKET_FINE_PAID,
            self::REF_TYPE_MARKET_TRANSACTION,
            self::REF_TYPE_MEDAL_CREATION,
            self::REF_TYPE_MEDAL_ISSUED,
            self::REF_TYPE_MISSION_COMPLETION,
            self::REF_TYPE_MISSION_COST,
            self::REF_TYPE_MISSION_EXPIRATION,
            self::REF_TYPE_MISSION_REWARD,
            self::REF_TYPE_OFFICE_RENTAL_FEE,
            self::REF_TYPE_OPERATION_BONUS,
            self::REF_TYPE_OPPORTUNITY_REWARD,
            self::REF_TYPE_PLANETARY_CONSTRUCTION,
            self::REF_TYPE_PLANETARY_EXPORT_TAX,
            self::REF_TYPE_PLANETARY_IMPORT_TAX,
            self::REF_TYPE_PLAYER_DONATION,
            self::REF_TYPE_PLAYER_TRADING,
            self::REF_TYPE_PROJECT_DISCOVERY_REWARD,
            self::REF_TYPE_PROJECT_DISCOVERY_TAX,
            self::REF_TYPE_REACTION,
            self::REF_TYPE_RELEASE_OF_IMPOUNDED_PROPERTY,
            self::REF_TYPE_REPAIR_BILL,
            self::REF_TYPE_REPROCESSING_TAX,
            self::REF_TYPE_RESEARCHING_MATERIAL_PRODUCTIVITY,
            self::REF_TYPE_RESEARCHING_TECHNOLOGY,
            self::REF_TYPE_RESEARCHING_TIME_PRODUCTIVITY,
            self::REF_TYPE_RESOURCE_WARS_REWARD,
            self::REF_TYPE_REVERSE_ENGINEERING,
            self::REF_TYPE_SECURITY_PROCESSING_FEE,
            self::REF_TYPE_SHARES,
            self::REF_TYPE_SOVEREIGNITY_BILL,
            self::REF_TYPE_STORE_PURCHASE,
            self::REF_TYPE_STORE_PURCHASE_REFUND,
            self::REF_TYPE_STRUCTURE_GATE_JUMP,
            self::REF_TYPE_TRANSACTION_TAX,
            self::REF_TYPE_UPKEEP_ADJUSTMENT_FEE,
            self::REF_TYPE_WAR_ALLY_CONTRACT,
            self::REF_TYPE_WAR_FEE,
            self::REF_TYPE_WAR_FEE_SURRENDER,
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['context_id'] = isset($data['context_id']) ? $data['context_id'] : null;
        $this->container['context_id_type'] = isset($data['context_id_type']) ? $data['context_id_type'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['first_party_id'] = isset($data['first_party_id']) ? $data['first_party_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['ref_type'] = isset($data['ref_type']) ? $data['ref_type'] : null;
        $this->container['second_party_id'] = isset($data['second_party_id']) ? $data['second_party_id'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['tax_receiver_id'] = isset($data['tax_receiver_id']) ? $data['tax_receiver_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getContextIdTypeAllowableValues();
        if (!in_array($this->container['context_id_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'context_id_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['ref_type'] === null) {
            $invalidProperties[] = "'ref_type' can't be null";
        }
        $allowedValues = $this->getRefTypeAllowableValues();
        if (!in_array($this->container['ref_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'ref_type', must be one of '%s'",
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

        $allowedValues = $this->getContextIdTypeAllowableValues();
        if (!in_array($this->container['context_id_type'], $allowedValues)) {
            return false;
        }
        if ($this->container['date'] === null) {
            return false;
        }
        if ($this->container['description'] === null) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['ref_type'] === null) {
            return false;
        }
        $allowedValues = $this->getRefTypeAllowableValues();
        if (!in_array($this->container['ref_type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount The amount of ISK given or taken from the wallet as a result of the given transaction. Positive when ISK is deposited into the wallet and negative when ISK is withdrawn
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return double
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param double $balance Wallet balance after transaction occurred
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets context_id
     *
     * @return int
     */
    public function getContextId()
    {
        return $this->container['context_id'];
    }

    /**
     * Sets context_id
     *
     * @param int $context_id An ID that gives extra context to the particular transaction. Because of legacy reasons the context is completely different per ref_type and means different things. It is also possible to not have a context_id
     *
     * @return $this
     */
    public function setContextId($context_id)
    {
        $this->container['context_id'] = $context_id;

        return $this;
    }

    /**
     * Gets context_id_type
     *
     * @return string
     */
    public function getContextIdType()
    {
        return $this->container['context_id_type'];
    }

    /**
     * Sets context_id_type
     *
     * @param string $context_id_type The type of the given context_id if present
     *
     * @return $this
     */
    public function setContextIdType($context_id_type)
    {
        $allowedValues = $this->getContextIdTypeAllowableValues();
        if (!is_null($context_id_type) && !in_array($context_id_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'context_id_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['context_id_type'] = $context_id_type;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date Date and time of transaction
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

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
     * @param string $description The reason for the transaction, mirrors what is seen in the client
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets first_party_id
     *
     * @return int
     */
    public function getFirstPartyId()
    {
        return $this->container['first_party_id'];
    }

    /**
     * Sets first_party_id
     *
     * @param int $first_party_id The id of the first party involved in the transaction. This attribute has no consistency and is different or non existant for particular ref_types. The description attribute will help make sense of what this attribute means. For more info about the given ID it can be dropped into the /universe/names/ ESI route to determine its type and name
     *
     * @return $this
     */
    public function setFirstPartyId($first_party_id)
    {
        $this->container['first_party_id'] = $first_party_id;

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
     * @param int $id Unique journal reference ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason The user stated reason for the transaction. Only applies to some ref_types
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets ref_type
     *
     * @return string
     */
    public function getRefType()
    {
        return $this->container['ref_type'];
    }

    /**
     * Sets ref_type
     *
     * @param string $ref_type \"The transaction type for the given. transaction. Different transaction types will populate different attributes. Note: If you have an existing XML API application that is using ref_types, you will need to know which string ESI ref_type maps to which integer. You can look at the following file to see string->int mappings: https://github.com/ccpgames/eve-glue/blob/master/eve_glue/wallet_journal_ref.py\"
     *
     * @return $this
     */
    public function setRefType($ref_type)
    {
        $allowedValues = $this->getRefTypeAllowableValues();
        if (!in_array($ref_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'ref_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ref_type'] = $ref_type;

        return $this;
    }

    /**
     * Gets second_party_id
     *
     * @return int
     */
    public function getSecondPartyId()
    {
        return $this->container['second_party_id'];
    }

    /**
     * Sets second_party_id
     *
     * @param int $second_party_id The id of the second party involved in the transaction. This attribute has no consistency and is different or non existant for particular ref_types. The description attribute will help make sense of what this attribute means. For more info about the given ID it can be dropped into the /universe/names/ ESI route to determine its type and name
     *
     * @return $this
     */
    public function setSecondPartyId($second_party_id)
    {
        $this->container['second_party_id'] = $second_party_id;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return double
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param double $tax Tax amount received. Only applies to tax related transactions
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets tax_receiver_id
     *
     * @return int
     */
    public function getTaxReceiverId()
    {
        return $this->container['tax_receiver_id'];
    }

    /**
     * Sets tax_receiver_id
     *
     * @param int $tax_receiver_id The corporation ID receiving any tax paid. Only applies to tax related transactions
     *
     * @return $this
     */
    public function setTaxReceiverId($tax_receiver_id)
    {
        $this->container['tax_receiver_id'] = $tax_receiver_id;

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


