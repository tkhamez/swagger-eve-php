
[![Packagist Downloads](https://img.shields.io/packagist/dt/tkhamez/swagger-eve-php)](https://packagist.org/packages/tkhamez/swagger-eve-php)

_**This package is abandoned, successor: https://github.com/tkhamez/eve-api-php.**_

# OpenAPIClient-php

An OpenAPI for EVE Online.

This client is generated from the "latest" routes. Versioning is now done with an HTTP header, see
https://developers.eveonline.com/blog/changing-versions-v42-was-getting-out-of-hand.

It contains a patch that removes the validation of max items because CCP sometimes increases
this value without increasing the endpoint version/compatibility date.

##### Versioning scheme since 1.0.0

* Patch: Generated a client from a new [swagger.json](https://esi.evetech.net/latest/swagger.json) file,
  refer to [esi-issues/changelog.md](https://github.com/esi/esi-issues/blob/master/changelog.md)
  (note, however, that the date is not always correct there) and/or generated with a new patch version
  of the generator library.
* Minor: Switched to a new minor version of the generator library.
* Major: Switched to a new major version of the generator library, switched to another generator library 
  or another breaking change.

See https://github.com/OpenAPITools/openapi-generator/releases for generator library changes.

##### Notable changes other than API updates

11.0.0

- The patch that removed the validation of enum attributes has been removed. Instead, a default 
  value is now returned if the value from the API is unknown. Previously the unknown value was returned.

10.4.0

- Raised minimum PHP requirement to 8.1
- All routes were changed from a version to "latest".

10.3.0

- For some endpoints the version number was _decreased_. According to CCP (on
 [Discord](https://discord.gg/eveonline), 
  [here](https://discord.com/channels/940573867192221696/972841377798946896/1370110391677620425)), 
  all versions are now identical. This is probably related to
  https://developers.eveonline.com/blog/removal-of-deprecated-versions-of-several-routes.

10.1.0

- With OpenAPI Generator v7.9.0 error handling changed (in some cases, an error object is returned 
  instead of an exception being thrown), see https://github.com/OpenAPITools/openapi-generator/pull/19483.

10.0.0
- Added patch that removes the exception if a response contains more elements than declared.

8.0.0
- Raised minimum PHP requirement to 7.4

7.1.0
- Require Guzzle HTTP client ^7.3.

7.0.0
- Raised minimum PHP requirement to 7.3

6.1.0
- Require guzzlehttp/psr7 < version 2 (this library uses functions that were removed in 2.0).

5.0.0
- Added patch to allow Guzzle HTTP client ^7.2 together with ^6.2 (7.2 requires PHP ^7.2.5 || ^8.0).

4.0.0
- Removed previous patches.
- Added patch to removed validation of all enum attributes.

3.2.0
- Added DISABLE_TYPE_VALIDATION.patch: Disables validation of character notification type (CCP adds new types 
  without increasing the endpoint version or mentioning it in the changelog).

3.1.0
- Added TYPE_WAR_ADOPTED2.patch: The notification type "WarAdopted " has a space at the end in the swagger_latest.json 
  file and in the response from ESI. But the generated client somehow removes that, so the validation fails. This 
  patch adds "WarAdopted ".


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "tkhamez/swagger-eve-php": "~11.0.0"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Swagger\Client\Eve\Api\AllianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getAlliances($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllianceApi->getAlliances: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://esi.evetech.net/latest*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AllianceApi* | [**getAlliances**](docs/Api/AllianceApi.md#getalliances) | **GET** /alliances/ | List all alliances
*AllianceApi* | [**getAlliancesAllianceId**](docs/Api/AllianceApi.md#getalliancesallianceid) | **GET** /alliances/{alliance_id}/ | Get alliance information
*AllianceApi* | [**getAlliancesAllianceIdCorporations**](docs/Api/AllianceApi.md#getalliancesallianceidcorporations) | **GET** /alliances/{alliance_id}/corporations/ | List alliance&#39;s corporations
*AllianceApi* | [**getAlliancesAllianceIdIcons**](docs/Api/AllianceApi.md#getalliancesallianceidicons) | **GET** /alliances/{alliance_id}/icons/ | Get alliance icon
*AssetsApi* | [**getCharactersCharacterIdAssets**](docs/Api/AssetsApi.md#getcharacterscharacteridassets) | **GET** /characters/{character_id}/assets/ | Get character assets
*AssetsApi* | [**getCorporationsCorporationIdAssets**](docs/Api/AssetsApi.md#getcorporationscorporationidassets) | **GET** /corporations/{corporation_id}/assets/ | Get corporation assets
*AssetsApi* | [**postCharactersCharacterIdAssetsLocations**](docs/Api/AssetsApi.md#postcharacterscharacteridassetslocations) | **POST** /characters/{character_id}/assets/locations/ | Get character asset locations
*AssetsApi* | [**postCharactersCharacterIdAssetsNames**](docs/Api/AssetsApi.md#postcharacterscharacteridassetsnames) | **POST** /characters/{character_id}/assets/names/ | Get character asset names
*AssetsApi* | [**postCorporationsCorporationIdAssetsLocations**](docs/Api/AssetsApi.md#postcorporationscorporationidassetslocations) | **POST** /corporations/{corporation_id}/assets/locations/ | Get corporation asset locations
*AssetsApi* | [**postCorporationsCorporationIdAssetsNames**](docs/Api/AssetsApi.md#postcorporationscorporationidassetsnames) | **POST** /corporations/{corporation_id}/assets/names/ | Get corporation asset names
*CalendarApi* | [**getCharactersCharacterIdCalendar**](docs/Api/CalendarApi.md#getcharacterscharacteridcalendar) | **GET** /characters/{character_id}/calendar/ | List calendar event summaries
*CalendarApi* | [**getCharactersCharacterIdCalendarEventId**](docs/Api/CalendarApi.md#getcharacterscharacteridcalendareventid) | **GET** /characters/{character_id}/calendar/{event_id}/ | Get an event
*CalendarApi* | [**getCharactersCharacterIdCalendarEventIdAttendees**](docs/Api/CalendarApi.md#getcharacterscharacteridcalendareventidattendees) | **GET** /characters/{character_id}/calendar/{event_id}/attendees/ | Get attendees
*CalendarApi* | [**putCharactersCharacterIdCalendarEventId**](docs/Api/CalendarApi.md#putcharacterscharacteridcalendareventid) | **PUT** /characters/{character_id}/calendar/{event_id}/ | Respond to an event
*CharacterApi* | [**getCharactersCharacterId**](docs/Api/CharacterApi.md#getcharacterscharacterid) | **GET** /characters/{character_id}/ | Get character&#39;s public information
*CharacterApi* | [**getCharactersCharacterIdAgentsResearch**](docs/Api/CharacterApi.md#getcharacterscharacteridagentsresearch) | **GET** /characters/{character_id}/agents_research/ | Get agents research
*CharacterApi* | [**getCharactersCharacterIdBlueprints**](docs/Api/CharacterApi.md#getcharacterscharacteridblueprints) | **GET** /characters/{character_id}/blueprints/ | Get blueprints
*CharacterApi* | [**getCharactersCharacterIdCorporationhistory**](docs/Api/CharacterApi.md#getcharacterscharacteridcorporationhistory) | **GET** /characters/{character_id}/corporationhistory/ | Get corporation history
*CharacterApi* | [**getCharactersCharacterIdFatigue**](docs/Api/CharacterApi.md#getcharacterscharacteridfatigue) | **GET** /characters/{character_id}/fatigue/ | Get jump fatigue
*CharacterApi* | [**getCharactersCharacterIdMedals**](docs/Api/CharacterApi.md#getcharacterscharacteridmedals) | **GET** /characters/{character_id}/medals/ | Get medals
*CharacterApi* | [**getCharactersCharacterIdNotifications**](docs/Api/CharacterApi.md#getcharacterscharacteridnotifications) | **GET** /characters/{character_id}/notifications/ | Get character notifications
*CharacterApi* | [**getCharactersCharacterIdNotificationsContacts**](docs/Api/CharacterApi.md#getcharacterscharacteridnotificationscontacts) | **GET** /characters/{character_id}/notifications/contacts/ | Get new contact notifications
*CharacterApi* | [**getCharactersCharacterIdPortrait**](docs/Api/CharacterApi.md#getcharacterscharacteridportrait) | **GET** /characters/{character_id}/portrait/ | Get character portraits
*CharacterApi* | [**getCharactersCharacterIdRoles**](docs/Api/CharacterApi.md#getcharacterscharacteridroles) | **GET** /characters/{character_id}/roles/ | Get character corporation roles
*CharacterApi* | [**getCharactersCharacterIdStandings**](docs/Api/CharacterApi.md#getcharacterscharacteridstandings) | **GET** /characters/{character_id}/standings/ | Get standings
*CharacterApi* | [**getCharactersCharacterIdTitles**](docs/Api/CharacterApi.md#getcharacterscharacteridtitles) | **GET** /characters/{character_id}/titles/ | Get character corporation titles
*CharacterApi* | [**postCharactersAffiliation**](docs/Api/CharacterApi.md#postcharactersaffiliation) | **POST** /characters/affiliation/ | Character affiliation
*CharacterApi* | [**postCharactersCharacterIdCspa**](docs/Api/CharacterApi.md#postcharacterscharacteridcspa) | **POST** /characters/{character_id}/cspa/ | Calculate a CSPA charge cost
*ClonesApi* | [**getCharactersCharacterIdClones**](docs/Api/ClonesApi.md#getcharacterscharacteridclones) | **GET** /characters/{character_id}/clones/ | Get clones
*ClonesApi* | [**getCharactersCharacterIdImplants**](docs/Api/ClonesApi.md#getcharacterscharacteridimplants) | **GET** /characters/{character_id}/implants/ | Get active implants
*ContactsApi* | [**deleteCharactersCharacterIdContacts**](docs/Api/ContactsApi.md#deletecharacterscharacteridcontacts) | **DELETE** /characters/{character_id}/contacts/ | Delete contacts
*ContactsApi* | [**getAlliancesAllianceIdContacts**](docs/Api/ContactsApi.md#getalliancesallianceidcontacts) | **GET** /alliances/{alliance_id}/contacts/ | Get alliance contacts
*ContactsApi* | [**getAlliancesAllianceIdContactsLabels**](docs/Api/ContactsApi.md#getalliancesallianceidcontactslabels) | **GET** /alliances/{alliance_id}/contacts/labels/ | Get alliance contact labels
*ContactsApi* | [**getCharactersCharacterIdContacts**](docs/Api/ContactsApi.md#getcharacterscharacteridcontacts) | **GET** /characters/{character_id}/contacts/ | Get contacts
*ContactsApi* | [**getCharactersCharacterIdContactsLabels**](docs/Api/ContactsApi.md#getcharacterscharacteridcontactslabels) | **GET** /characters/{character_id}/contacts/labels/ | Get contact labels
*ContactsApi* | [**getCorporationsCorporationIdContacts**](docs/Api/ContactsApi.md#getcorporationscorporationidcontacts) | **GET** /corporations/{corporation_id}/contacts/ | Get corporation contacts
*ContactsApi* | [**getCorporationsCorporationIdContactsLabels**](docs/Api/ContactsApi.md#getcorporationscorporationidcontactslabels) | **GET** /corporations/{corporation_id}/contacts/labels/ | Get corporation contact labels
*ContactsApi* | [**postCharactersCharacterIdContacts**](docs/Api/ContactsApi.md#postcharacterscharacteridcontacts) | **POST** /characters/{character_id}/contacts/ | Add contacts
*ContactsApi* | [**putCharactersCharacterIdContacts**](docs/Api/ContactsApi.md#putcharacterscharacteridcontacts) | **PUT** /characters/{character_id}/contacts/ | Edit contacts
*ContractsApi* | [**getCharactersCharacterIdContracts**](docs/Api/ContractsApi.md#getcharacterscharacteridcontracts) | **GET** /characters/{character_id}/contracts/ | Get contracts
*ContractsApi* | [**getCharactersCharacterIdContractsContractIdBids**](docs/Api/ContractsApi.md#getcharacterscharacteridcontractscontractidbids) | **GET** /characters/{character_id}/contracts/{contract_id}/bids/ | Get contract bids
*ContractsApi* | [**getCharactersCharacterIdContractsContractIdItems**](docs/Api/ContractsApi.md#getcharacterscharacteridcontractscontractiditems) | **GET** /characters/{character_id}/contracts/{contract_id}/items/ | Get contract items
*ContractsApi* | [**getContractsPublicBidsContractId**](docs/Api/ContractsApi.md#getcontractspublicbidscontractid) | **GET** /contracts/public/bids/{contract_id}/ | Get public contract bids
*ContractsApi* | [**getContractsPublicItemsContractId**](docs/Api/ContractsApi.md#getcontractspublicitemscontractid) | **GET** /contracts/public/items/{contract_id}/ | Get public contract items
*ContractsApi* | [**getContractsPublicRegionId**](docs/Api/ContractsApi.md#getcontractspublicregionid) | **GET** /contracts/public/{region_id}/ | Get public contracts
*ContractsApi* | [**getCorporationsCorporationIdContracts**](docs/Api/ContractsApi.md#getcorporationscorporationidcontracts) | **GET** /corporations/{corporation_id}/contracts/ | Get corporation contracts
*ContractsApi* | [**getCorporationsCorporationIdContractsContractIdBids**](docs/Api/ContractsApi.md#getcorporationscorporationidcontractscontractidbids) | **GET** /corporations/{corporation_id}/contracts/{contract_id}/bids/ | Get corporation contract bids
*ContractsApi* | [**getCorporationsCorporationIdContractsContractIdItems**](docs/Api/ContractsApi.md#getcorporationscorporationidcontractscontractiditems) | **GET** /corporations/{corporation_id}/contracts/{contract_id}/items/ | Get corporation contract items
*CorporationApi* | [**getCorporationsCorporationId**](docs/Api/CorporationApi.md#getcorporationscorporationid) | **GET** /corporations/{corporation_id}/ | Get corporation information
*CorporationApi* | [**getCorporationsCorporationIdAlliancehistory**](docs/Api/CorporationApi.md#getcorporationscorporationidalliancehistory) | **GET** /corporations/{corporation_id}/alliancehistory/ | Get alliance history
*CorporationApi* | [**getCorporationsCorporationIdBlueprints**](docs/Api/CorporationApi.md#getcorporationscorporationidblueprints) | **GET** /corporations/{corporation_id}/blueprints/ | Get corporation blueprints
*CorporationApi* | [**getCorporationsCorporationIdContainersLogs**](docs/Api/CorporationApi.md#getcorporationscorporationidcontainerslogs) | **GET** /corporations/{corporation_id}/containers/logs/ | Get all corporation ALSC logs
*CorporationApi* | [**getCorporationsCorporationIdDivisions**](docs/Api/CorporationApi.md#getcorporationscorporationiddivisions) | **GET** /corporations/{corporation_id}/divisions/ | Get corporation divisions
*CorporationApi* | [**getCorporationsCorporationIdFacilities**](docs/Api/CorporationApi.md#getcorporationscorporationidfacilities) | **GET** /corporations/{corporation_id}/facilities/ | Get corporation facilities
*CorporationApi* | [**getCorporationsCorporationIdIcons**](docs/Api/CorporationApi.md#getcorporationscorporationidicons) | **GET** /corporations/{corporation_id}/icons/ | Get corporation icon
*CorporationApi* | [**getCorporationsCorporationIdMedals**](docs/Api/CorporationApi.md#getcorporationscorporationidmedals) | **GET** /corporations/{corporation_id}/medals/ | Get corporation medals
*CorporationApi* | [**getCorporationsCorporationIdMedalsIssued**](docs/Api/CorporationApi.md#getcorporationscorporationidmedalsissued) | **GET** /corporations/{corporation_id}/medals/issued/ | Get corporation issued medals
*CorporationApi* | [**getCorporationsCorporationIdMembers**](docs/Api/CorporationApi.md#getcorporationscorporationidmembers) | **GET** /corporations/{corporation_id}/members/ | Get corporation members
*CorporationApi* | [**getCorporationsCorporationIdMembersLimit**](docs/Api/CorporationApi.md#getcorporationscorporationidmemberslimit) | **GET** /corporations/{corporation_id}/members/limit/ | Get corporation member limit
*CorporationApi* | [**getCorporationsCorporationIdMembersTitles**](docs/Api/CorporationApi.md#getcorporationscorporationidmemberstitles) | **GET** /corporations/{corporation_id}/members/titles/ | Get corporation&#39;s members&#39; titles
*CorporationApi* | [**getCorporationsCorporationIdMembertracking**](docs/Api/CorporationApi.md#getcorporationscorporationidmembertracking) | **GET** /corporations/{corporation_id}/membertracking/ | Track corporation members
*CorporationApi* | [**getCorporationsCorporationIdRoles**](docs/Api/CorporationApi.md#getcorporationscorporationidroles) | **GET** /corporations/{corporation_id}/roles/ | Get corporation member roles
*CorporationApi* | [**getCorporationsCorporationIdRolesHistory**](docs/Api/CorporationApi.md#getcorporationscorporationidroleshistory) | **GET** /corporations/{corporation_id}/roles/history/ | Get corporation member roles history
*CorporationApi* | [**getCorporationsCorporationIdShareholders**](docs/Api/CorporationApi.md#getcorporationscorporationidshareholders) | **GET** /corporations/{corporation_id}/shareholders/ | Get corporation shareholders
*CorporationApi* | [**getCorporationsCorporationIdStandings**](docs/Api/CorporationApi.md#getcorporationscorporationidstandings) | **GET** /corporations/{corporation_id}/standings/ | Get corporation standings
*CorporationApi* | [**getCorporationsCorporationIdStarbases**](docs/Api/CorporationApi.md#getcorporationscorporationidstarbases) | **GET** /corporations/{corporation_id}/starbases/ | Get corporation starbases (POSes)
*CorporationApi* | [**getCorporationsCorporationIdStarbasesStarbaseId**](docs/Api/CorporationApi.md#getcorporationscorporationidstarbasesstarbaseid) | **GET** /corporations/{corporation_id}/starbases/{starbase_id}/ | Get starbase (POS) detail
*CorporationApi* | [**getCorporationsCorporationIdStructures**](docs/Api/CorporationApi.md#getcorporationscorporationidstructures) | **GET** /corporations/{corporation_id}/structures/ | Get corporation structures
*CorporationApi* | [**getCorporationsCorporationIdTitles**](docs/Api/CorporationApi.md#getcorporationscorporationidtitles) | **GET** /corporations/{corporation_id}/titles/ | Get corporation titles
*CorporationApi* | [**getCorporationsNpccorps**](docs/Api/CorporationApi.md#getcorporationsnpccorps) | **GET** /corporations/npccorps/ | Get npc corporations
*DogmaApi* | [**getDogmaAttributes**](docs/Api/DogmaApi.md#getdogmaattributes) | **GET** /dogma/attributes/ | Get attributes
*DogmaApi* | [**getDogmaAttributesAttributeId**](docs/Api/DogmaApi.md#getdogmaattributesattributeid) | **GET** /dogma/attributes/{attribute_id}/ | Get attribute information
*DogmaApi* | [**getDogmaDynamicItemsTypeIdItemId**](docs/Api/DogmaApi.md#getdogmadynamicitemstypeiditemid) | **GET** /dogma/dynamic/items/{type_id}/{item_id}/ | Get dynamic item information
*DogmaApi* | [**getDogmaEffects**](docs/Api/DogmaApi.md#getdogmaeffects) | **GET** /dogma/effects/ | Get effects
*DogmaApi* | [**getDogmaEffectsEffectId**](docs/Api/DogmaApi.md#getdogmaeffectseffectid) | **GET** /dogma/effects/{effect_id}/ | Get effect information
*FactionWarfareApi* | [**getCharactersCharacterIdFwStats**](docs/Api/FactionWarfareApi.md#getcharacterscharacteridfwstats) | **GET** /characters/{character_id}/fw/stats/ | Overview of a character involved in faction warfare
*FactionWarfareApi* | [**getCorporationsCorporationIdFwStats**](docs/Api/FactionWarfareApi.md#getcorporationscorporationidfwstats) | **GET** /corporations/{corporation_id}/fw/stats/ | Overview of a corporation involved in faction warfare
*FactionWarfareApi* | [**getFwLeaderboards**](docs/Api/FactionWarfareApi.md#getfwleaderboards) | **GET** /fw/leaderboards/ | List of the top factions in faction warfare
*FactionWarfareApi* | [**getFwLeaderboardsCharacters**](docs/Api/FactionWarfareApi.md#getfwleaderboardscharacters) | **GET** /fw/leaderboards/characters/ | List of the top pilots in faction warfare
*FactionWarfareApi* | [**getFwLeaderboardsCorporations**](docs/Api/FactionWarfareApi.md#getfwleaderboardscorporations) | **GET** /fw/leaderboards/corporations/ | List of the top corporations in faction warfare
*FactionWarfareApi* | [**getFwStats**](docs/Api/FactionWarfareApi.md#getfwstats) | **GET** /fw/stats/ | An overview of statistics about factions involved in faction warfare
*FactionWarfareApi* | [**getFwSystems**](docs/Api/FactionWarfareApi.md#getfwsystems) | **GET** /fw/systems/ | Ownership of faction warfare systems
*FactionWarfareApi* | [**getFwWars**](docs/Api/FactionWarfareApi.md#getfwwars) | **GET** /fw/wars/ | Data about which NPC factions are at war
*FittingsApi* | [**deleteCharactersCharacterIdFittingsFittingId**](docs/Api/FittingsApi.md#deletecharacterscharacteridfittingsfittingid) | **DELETE** /characters/{character_id}/fittings/{fitting_id}/ | Delete fitting
*FittingsApi* | [**getCharactersCharacterIdFittings**](docs/Api/FittingsApi.md#getcharacterscharacteridfittings) | **GET** /characters/{character_id}/fittings/ | Get fittings
*FittingsApi* | [**postCharactersCharacterIdFittings**](docs/Api/FittingsApi.md#postcharacterscharacteridfittings) | **POST** /characters/{character_id}/fittings/ | Create fitting
*FleetsApi* | [**deleteFleetsFleetIdMembersMemberId**](docs/Api/FleetsApi.md#deletefleetsfleetidmembersmemberid) | **DELETE** /fleets/{fleet_id}/members/{member_id}/ | Kick fleet member
*FleetsApi* | [**deleteFleetsFleetIdSquadsSquadId**](docs/Api/FleetsApi.md#deletefleetsfleetidsquadssquadid) | **DELETE** /fleets/{fleet_id}/squads/{squad_id}/ | Delete fleet squad
*FleetsApi* | [**deleteFleetsFleetIdWingsWingId**](docs/Api/FleetsApi.md#deletefleetsfleetidwingswingid) | **DELETE** /fleets/{fleet_id}/wings/{wing_id}/ | Delete fleet wing
*FleetsApi* | [**getCharactersCharacterIdFleet**](docs/Api/FleetsApi.md#getcharacterscharacteridfleet) | **GET** /characters/{character_id}/fleet/ | Get character fleet info
*FleetsApi* | [**getFleetsFleetId**](docs/Api/FleetsApi.md#getfleetsfleetid) | **GET** /fleets/{fleet_id}/ | Get fleet information
*FleetsApi* | [**getFleetsFleetIdMembers**](docs/Api/FleetsApi.md#getfleetsfleetidmembers) | **GET** /fleets/{fleet_id}/members/ | Get fleet members
*FleetsApi* | [**getFleetsFleetIdWings**](docs/Api/FleetsApi.md#getfleetsfleetidwings) | **GET** /fleets/{fleet_id}/wings/ | Get fleet wings
*FleetsApi* | [**postFleetsFleetIdMembers**](docs/Api/FleetsApi.md#postfleetsfleetidmembers) | **POST** /fleets/{fleet_id}/members/ | Create fleet invitation
*FleetsApi* | [**postFleetsFleetIdWings**](docs/Api/FleetsApi.md#postfleetsfleetidwings) | **POST** /fleets/{fleet_id}/wings/ | Create fleet wing
*FleetsApi* | [**postFleetsFleetIdWingsWingIdSquads**](docs/Api/FleetsApi.md#postfleetsfleetidwingswingidsquads) | **POST** /fleets/{fleet_id}/wings/{wing_id}/squads/ | Create fleet squad
*FleetsApi* | [**putFleetsFleetId**](docs/Api/FleetsApi.md#putfleetsfleetid) | **PUT** /fleets/{fleet_id}/ | Update fleet
*FleetsApi* | [**putFleetsFleetIdMembersMemberId**](docs/Api/FleetsApi.md#putfleetsfleetidmembersmemberid) | **PUT** /fleets/{fleet_id}/members/{member_id}/ | Move fleet member
*FleetsApi* | [**putFleetsFleetIdSquadsSquadId**](docs/Api/FleetsApi.md#putfleetsfleetidsquadssquadid) | **PUT** /fleets/{fleet_id}/squads/{squad_id}/ | Rename fleet squad
*FleetsApi* | [**putFleetsFleetIdWingsWingId**](docs/Api/FleetsApi.md#putfleetsfleetidwingswingid) | **PUT** /fleets/{fleet_id}/wings/{wing_id}/ | Rename fleet wing
*IncursionsApi* | [**getIncursions**](docs/Api/IncursionsApi.md#getincursions) | **GET** /incursions/ | List incursions
*IndustryApi* | [**getCharactersCharacterIdIndustryJobs**](docs/Api/IndustryApi.md#getcharacterscharacteridindustryjobs) | **GET** /characters/{character_id}/industry/jobs/ | List character industry jobs
*IndustryApi* | [**getCharactersCharacterIdMining**](docs/Api/IndustryApi.md#getcharacterscharacteridmining) | **GET** /characters/{character_id}/mining/ | Character mining ledger
*IndustryApi* | [**getCorporationCorporationIdMiningExtractions**](docs/Api/IndustryApi.md#getcorporationcorporationidminingextractions) | **GET** /corporation/{corporation_id}/mining/extractions/ | Moon extraction timers
*IndustryApi* | [**getCorporationCorporationIdMiningObservers**](docs/Api/IndustryApi.md#getcorporationcorporationidminingobservers) | **GET** /corporation/{corporation_id}/mining/observers/ | Corporation mining observers
*IndustryApi* | [**getCorporationCorporationIdMiningObserversObserverId**](docs/Api/IndustryApi.md#getcorporationcorporationidminingobserversobserverid) | **GET** /corporation/{corporation_id}/mining/observers/{observer_id}/ | Observed corporation mining
*IndustryApi* | [**getCorporationsCorporationIdIndustryJobs**](docs/Api/IndustryApi.md#getcorporationscorporationidindustryjobs) | **GET** /corporations/{corporation_id}/industry/jobs/ | List corporation industry jobs
*IndustryApi* | [**getIndustryFacilities**](docs/Api/IndustryApi.md#getindustryfacilities) | **GET** /industry/facilities/ | List industry facilities
*IndustryApi* | [**getIndustrySystems**](docs/Api/IndustryApi.md#getindustrysystems) | **GET** /industry/systems/ | List solar system cost indices
*InsuranceApi* | [**getInsurancePrices**](docs/Api/InsuranceApi.md#getinsuranceprices) | **GET** /insurance/prices/ | List insurance levels
*KillmailsApi* | [**getCharactersCharacterIdKillmailsRecent**](docs/Api/KillmailsApi.md#getcharacterscharacteridkillmailsrecent) | **GET** /characters/{character_id}/killmails/recent/ | Get a character&#39;s recent kills and losses
*KillmailsApi* | [**getCorporationsCorporationIdKillmailsRecent**](docs/Api/KillmailsApi.md#getcorporationscorporationidkillmailsrecent) | **GET** /corporations/{corporation_id}/killmails/recent/ | Get a corporation&#39;s recent kills and losses
*KillmailsApi* | [**getKillmailsKillmailIdKillmailHash**](docs/Api/KillmailsApi.md#getkillmailskillmailidkillmailhash) | **GET** /killmails/{killmail_id}/{killmail_hash}/ | Get a single killmail
*LocationApi* | [**getCharactersCharacterIdLocation**](docs/Api/LocationApi.md#getcharacterscharacteridlocation) | **GET** /characters/{character_id}/location/ | Get character location
*LocationApi* | [**getCharactersCharacterIdOnline**](docs/Api/LocationApi.md#getcharacterscharacteridonline) | **GET** /characters/{character_id}/online/ | Get character online
*LocationApi* | [**getCharactersCharacterIdShip**](docs/Api/LocationApi.md#getcharacterscharacteridship) | **GET** /characters/{character_id}/ship/ | Get current ship
*LoyaltyApi* | [**getCharactersCharacterIdLoyaltyPoints**](docs/Api/LoyaltyApi.md#getcharacterscharacteridloyaltypoints) | **GET** /characters/{character_id}/loyalty/points/ | Get loyalty points
*LoyaltyApi* | [**getLoyaltyStoresCorporationIdOffers**](docs/Api/LoyaltyApi.md#getloyaltystorescorporationidoffers) | **GET** /loyalty/stores/{corporation_id}/offers/ | List loyalty store offers
*MailApi* | [**deleteCharactersCharacterIdMailLabelsLabelId**](docs/Api/MailApi.md#deletecharacterscharacteridmaillabelslabelid) | **DELETE** /characters/{character_id}/mail/labels/{label_id}/ | Delete a mail label
*MailApi* | [**deleteCharactersCharacterIdMailMailId**](docs/Api/MailApi.md#deletecharacterscharacteridmailmailid) | **DELETE** /characters/{character_id}/mail/{mail_id}/ | Delete a mail
*MailApi* | [**getCharactersCharacterIdMail**](docs/Api/MailApi.md#getcharacterscharacteridmail) | **GET** /characters/{character_id}/mail/ | Return mail headers
*MailApi* | [**getCharactersCharacterIdMailLabels**](docs/Api/MailApi.md#getcharacterscharacteridmaillabels) | **GET** /characters/{character_id}/mail/labels/ | Get mail labels and unread counts
*MailApi* | [**getCharactersCharacterIdMailLists**](docs/Api/MailApi.md#getcharacterscharacteridmaillists) | **GET** /characters/{character_id}/mail/lists/ | Return mailing list subscriptions
*MailApi* | [**getCharactersCharacterIdMailMailId**](docs/Api/MailApi.md#getcharacterscharacteridmailmailid) | **GET** /characters/{character_id}/mail/{mail_id}/ | Return a mail
*MailApi* | [**postCharactersCharacterIdMail**](docs/Api/MailApi.md#postcharacterscharacteridmail) | **POST** /characters/{character_id}/mail/ | Send a new mail
*MailApi* | [**postCharactersCharacterIdMailLabels**](docs/Api/MailApi.md#postcharacterscharacteridmaillabels) | **POST** /characters/{character_id}/mail/labels/ | Create a mail label
*MailApi* | [**putCharactersCharacterIdMailMailId**](docs/Api/MailApi.md#putcharacterscharacteridmailmailid) | **PUT** /characters/{character_id}/mail/{mail_id}/ | Update metadata about a mail
*MarketApi* | [**getCharactersCharacterIdOrders**](docs/Api/MarketApi.md#getcharacterscharacteridorders) | **GET** /characters/{character_id}/orders/ | List open orders from a character
*MarketApi* | [**getCharactersCharacterIdOrdersHistory**](docs/Api/MarketApi.md#getcharacterscharacteridordershistory) | **GET** /characters/{character_id}/orders/history/ | List historical orders by a character
*MarketApi* | [**getCorporationsCorporationIdOrders**](docs/Api/MarketApi.md#getcorporationscorporationidorders) | **GET** /corporations/{corporation_id}/orders/ | List open orders from a corporation
*MarketApi* | [**getCorporationsCorporationIdOrdersHistory**](docs/Api/MarketApi.md#getcorporationscorporationidordershistory) | **GET** /corporations/{corporation_id}/orders/history/ | List historical orders from a corporation
*MarketApi* | [**getMarketsGroups**](docs/Api/MarketApi.md#getmarketsgroups) | **GET** /markets/groups/ | Get item groups
*MarketApi* | [**getMarketsGroupsMarketGroupId**](docs/Api/MarketApi.md#getmarketsgroupsmarketgroupid) | **GET** /markets/groups/{market_group_id}/ | Get item group information
*MarketApi* | [**getMarketsPrices**](docs/Api/MarketApi.md#getmarketsprices) | **GET** /markets/prices/ | List market prices
*MarketApi* | [**getMarketsRegionIdHistory**](docs/Api/MarketApi.md#getmarketsregionidhistory) | **GET** /markets/{region_id}/history/ | List historical market statistics in a region
*MarketApi* | [**getMarketsRegionIdOrders**](docs/Api/MarketApi.md#getmarketsregionidorders) | **GET** /markets/{region_id}/orders/ | List orders in a region
*MarketApi* | [**getMarketsRegionIdTypes**](docs/Api/MarketApi.md#getmarketsregionidtypes) | **GET** /markets/{region_id}/types/ | List type IDs relevant to a market
*MarketApi* | [**getMarketsStructuresStructureId**](docs/Api/MarketApi.md#getmarketsstructuresstructureid) | **GET** /markets/structures/{structure_id}/ | List orders in a structure
*PlanetaryInteractionApi* | [**getCharactersCharacterIdPlanets**](docs/Api/PlanetaryInteractionApi.md#getcharacterscharacteridplanets) | **GET** /characters/{character_id}/planets/ | Get colonies
*PlanetaryInteractionApi* | [**getCharactersCharacterIdPlanetsPlanetId**](docs/Api/PlanetaryInteractionApi.md#getcharacterscharacteridplanetsplanetid) | **GET** /characters/{character_id}/planets/{planet_id}/ | Get colony layout
*PlanetaryInteractionApi* | [**getCorporationsCorporationIdCustomsOffices**](docs/Api/PlanetaryInteractionApi.md#getcorporationscorporationidcustomsoffices) | **GET** /corporations/{corporation_id}/customs_offices/ | List corporation customs offices
*PlanetaryInteractionApi* | [**getUniverseSchematicsSchematicId**](docs/Api/PlanetaryInteractionApi.md#getuniverseschematicsschematicid) | **GET** /universe/schematics/{schematic_id}/ | Get schematic information
*RoutesApi* | [**getRouteOriginDestination**](docs/Api/RoutesApi.md#getrouteorigindestination) | **GET** /route/{origin}/{destination}/ | Get route
*SearchApi* | [**getCharactersCharacterIdSearch**](docs/Api/SearchApi.md#getcharacterscharacteridsearch) | **GET** /characters/{character_id}/search/ | Search on a string
*SkillsApi* | [**getCharactersCharacterIdAttributes**](docs/Api/SkillsApi.md#getcharacterscharacteridattributes) | **GET** /characters/{character_id}/attributes/ | Get character attributes
*SkillsApi* | [**getCharactersCharacterIdSkillqueue**](docs/Api/SkillsApi.md#getcharacterscharacteridskillqueue) | **GET** /characters/{character_id}/skillqueue/ | Get character&#39;s skill queue
*SkillsApi* | [**getCharactersCharacterIdSkills**](docs/Api/SkillsApi.md#getcharacterscharacteridskills) | **GET** /characters/{character_id}/skills/ | Get character skills
*SovereigntyApi* | [**getSovereigntyCampaigns**](docs/Api/SovereigntyApi.md#getsovereigntycampaigns) | **GET** /sovereignty/campaigns/ | List sovereignty campaigns
*SovereigntyApi* | [**getSovereigntyMap**](docs/Api/SovereigntyApi.md#getsovereigntymap) | **GET** /sovereignty/map/ | List sovereignty of systems
*SovereigntyApi* | [**getSovereigntyStructures**](docs/Api/SovereigntyApi.md#getsovereigntystructures) | **GET** /sovereignty/structures/ | List sovereignty structures
*StatusApi* | [**getStatus**](docs/Api/StatusApi.md#getstatus) | **GET** /status/ | Retrieve the uptime and player counts
*UniverseApi* | [**getUniverseAncestries**](docs/Api/UniverseApi.md#getuniverseancestries) | **GET** /universe/ancestries/ | Get ancestries
*UniverseApi* | [**getUniverseAsteroidBeltsAsteroidBeltId**](docs/Api/UniverseApi.md#getuniverseasteroidbeltsasteroidbeltid) | **GET** /universe/asteroid_belts/{asteroid_belt_id}/ | Get asteroid belt information
*UniverseApi* | [**getUniverseBloodlines**](docs/Api/UniverseApi.md#getuniversebloodlines) | **GET** /universe/bloodlines/ | Get bloodlines
*UniverseApi* | [**getUniverseCategories**](docs/Api/UniverseApi.md#getuniversecategories) | **GET** /universe/categories/ | Get item categories
*UniverseApi* | [**getUniverseCategoriesCategoryId**](docs/Api/UniverseApi.md#getuniversecategoriescategoryid) | **GET** /universe/categories/{category_id}/ | Get item category information
*UniverseApi* | [**getUniverseConstellations**](docs/Api/UniverseApi.md#getuniverseconstellations) | **GET** /universe/constellations/ | Get constellations
*UniverseApi* | [**getUniverseConstellationsConstellationId**](docs/Api/UniverseApi.md#getuniverseconstellationsconstellationid) | **GET** /universe/constellations/{constellation_id}/ | Get constellation information
*UniverseApi* | [**getUniverseFactions**](docs/Api/UniverseApi.md#getuniversefactions) | **GET** /universe/factions/ | Get factions
*UniverseApi* | [**getUniverseGraphics**](docs/Api/UniverseApi.md#getuniversegraphics) | **GET** /universe/graphics/ | Get graphics
*UniverseApi* | [**getUniverseGraphicsGraphicId**](docs/Api/UniverseApi.md#getuniversegraphicsgraphicid) | **GET** /universe/graphics/{graphic_id}/ | Get graphic information
*UniverseApi* | [**getUniverseGroups**](docs/Api/UniverseApi.md#getuniversegroups) | **GET** /universe/groups/ | Get item groups
*UniverseApi* | [**getUniverseGroupsGroupId**](docs/Api/UniverseApi.md#getuniversegroupsgroupid) | **GET** /universe/groups/{group_id}/ | Get item group information
*UniverseApi* | [**getUniverseMoonsMoonId**](docs/Api/UniverseApi.md#getuniversemoonsmoonid) | **GET** /universe/moons/{moon_id}/ | Get moon information
*UniverseApi* | [**getUniversePlanetsPlanetId**](docs/Api/UniverseApi.md#getuniverseplanetsplanetid) | **GET** /universe/planets/{planet_id}/ | Get planet information
*UniverseApi* | [**getUniverseRaces**](docs/Api/UniverseApi.md#getuniverseraces) | **GET** /universe/races/ | Get character races
*UniverseApi* | [**getUniverseRegions**](docs/Api/UniverseApi.md#getuniverseregions) | **GET** /universe/regions/ | Get regions
*UniverseApi* | [**getUniverseRegionsRegionId**](docs/Api/UniverseApi.md#getuniverseregionsregionid) | **GET** /universe/regions/{region_id}/ | Get region information
*UniverseApi* | [**getUniverseStargatesStargateId**](docs/Api/UniverseApi.md#getuniversestargatesstargateid) | **GET** /universe/stargates/{stargate_id}/ | Get stargate information
*UniverseApi* | [**getUniverseStarsStarId**](docs/Api/UniverseApi.md#getuniversestarsstarid) | **GET** /universe/stars/{star_id}/ | Get star information
*UniverseApi* | [**getUniverseStationsStationId**](docs/Api/UniverseApi.md#getuniversestationsstationid) | **GET** /universe/stations/{station_id}/ | Get station information
*UniverseApi* | [**getUniverseStructures**](docs/Api/UniverseApi.md#getuniversestructures) | **GET** /universe/structures/ | List all public structures
*UniverseApi* | [**getUniverseStructuresStructureId**](docs/Api/UniverseApi.md#getuniversestructuresstructureid) | **GET** /universe/structures/{structure_id}/ | Get structure information
*UniverseApi* | [**getUniverseSystemJumps**](docs/Api/UniverseApi.md#getuniversesystemjumps) | **GET** /universe/system_jumps/ | Get system jumps
*UniverseApi* | [**getUniverseSystemKills**](docs/Api/UniverseApi.md#getuniversesystemkills) | **GET** /universe/system_kills/ | Get system kills
*UniverseApi* | [**getUniverseSystems**](docs/Api/UniverseApi.md#getuniversesystems) | **GET** /universe/systems/ | Get solar systems
*UniverseApi* | [**getUniverseSystemsSystemId**](docs/Api/UniverseApi.md#getuniversesystemssystemid) | **GET** /universe/systems/{system_id}/ | Get solar system information
*UniverseApi* | [**getUniverseTypes**](docs/Api/UniverseApi.md#getuniversetypes) | **GET** /universe/types/ | Get types
*UniverseApi* | [**getUniverseTypesTypeId**](docs/Api/UniverseApi.md#getuniversetypestypeid) | **GET** /universe/types/{type_id}/ | Get type information
*UniverseApi* | [**postUniverseIds**](docs/Api/UniverseApi.md#postuniverseids) | **POST** /universe/ids/ | Bulk names to IDs
*UniverseApi* | [**postUniverseNames**](docs/Api/UniverseApi.md#postuniversenames) | **POST** /universe/names/ | Get names and categories for a set of IDs
*UserInterfaceApi* | [**postUiAutopilotWaypoint**](docs/Api/UserInterfaceApi.md#postuiautopilotwaypoint) | **POST** /ui/autopilot/waypoint/ | Set Autopilot Waypoint
*UserInterfaceApi* | [**postUiOpenwindowContract**](docs/Api/UserInterfaceApi.md#postuiopenwindowcontract) | **POST** /ui/openwindow/contract/ | Open Contract Window
*UserInterfaceApi* | [**postUiOpenwindowInformation**](docs/Api/UserInterfaceApi.md#postuiopenwindowinformation) | **POST** /ui/openwindow/information/ | Open Information Window
*UserInterfaceApi* | [**postUiOpenwindowMarketdetails**](docs/Api/UserInterfaceApi.md#postuiopenwindowmarketdetails) | **POST** /ui/openwindow/marketdetails/ | Open Market Details
*UserInterfaceApi* | [**postUiOpenwindowNewmail**](docs/Api/UserInterfaceApi.md#postuiopenwindownewmail) | **POST** /ui/openwindow/newmail/ | Open New Mail Window
*WalletApi* | [**getCharactersCharacterIdWallet**](docs/Api/WalletApi.md#getcharacterscharacteridwallet) | **GET** /characters/{character_id}/wallet/ | Get a character&#39;s wallet balance
*WalletApi* | [**getCharactersCharacterIdWalletJournal**](docs/Api/WalletApi.md#getcharacterscharacteridwalletjournal) | **GET** /characters/{character_id}/wallet/journal/ | Get character wallet journal
*WalletApi* | [**getCharactersCharacterIdWalletTransactions**](docs/Api/WalletApi.md#getcharacterscharacteridwallettransactions) | **GET** /characters/{character_id}/wallet/transactions/ | Get wallet transactions
*WalletApi* | [**getCorporationsCorporationIdWallets**](docs/Api/WalletApi.md#getcorporationscorporationidwallets) | **GET** /corporations/{corporation_id}/wallets/ | Returns a corporation&#39;s wallet balance
*WalletApi* | [**getCorporationsCorporationIdWalletsDivisionJournal**](docs/Api/WalletApi.md#getcorporationscorporationidwalletsdivisionjournal) | **GET** /corporations/{corporation_id}/wallets/{division}/journal/ | Get corporation wallet journal
*WalletApi* | [**getCorporationsCorporationIdWalletsDivisionTransactions**](docs/Api/WalletApi.md#getcorporationscorporationidwalletsdivisiontransactions) | **GET** /corporations/{corporation_id}/wallets/{division}/transactions/ | Get corporation wallet transactions
*WarsApi* | [**getWars**](docs/Api/WarsApi.md#getwars) | **GET** /wars/ | List wars
*WarsApi* | [**getWarsWarId**](docs/Api/WarsApi.md#getwarswarid) | **GET** /wars/{war_id}/ | Get war information
*WarsApi* | [**getWarsWarIdKillmails**](docs/Api/WarsApi.md#getwarswaridkillmails) | **GET** /wars/{war_id}/killmails/ | List kills for a war

## Models

- [BadRequest](docs/Model/BadRequest.md)
- [DeleteCharactersCharacterIdMailLabelsLabelIdUnprocessableEntity](docs/Model/DeleteCharactersCharacterIdMailLabelsLabelIdUnprocessableEntity.md)
- [DeleteFleetsFleetIdMembersMemberIdNotFound](docs/Model/DeleteFleetsFleetIdMembersMemberIdNotFound.md)
- [DeleteFleetsFleetIdSquadsSquadIdNotFound](docs/Model/DeleteFleetsFleetIdSquadsSquadIdNotFound.md)
- [DeleteFleetsFleetIdWingsWingIdNotFound](docs/Model/DeleteFleetsFleetIdWingsWingIdNotFound.md)
- [ErrorLimited](docs/Model/ErrorLimited.md)
- [Forbidden](docs/Model/Forbidden.md)
- [GatewayTimeout](docs/Model/GatewayTimeout.md)
- [GetAlliancesAllianceIdContacts200Ok](docs/Model/GetAlliancesAllianceIdContacts200Ok.md)
- [GetAlliancesAllianceIdContactsLabels200Ok](docs/Model/GetAlliancesAllianceIdContactsLabels200Ok.md)
- [GetAlliancesAllianceIdIconsNotFound](docs/Model/GetAlliancesAllianceIdIconsNotFound.md)
- [GetAlliancesAllianceIdIconsOk](docs/Model/GetAlliancesAllianceIdIconsOk.md)
- [GetAlliancesAllianceIdNotFound](docs/Model/GetAlliancesAllianceIdNotFound.md)
- [GetAlliancesAllianceIdOk](docs/Model/GetAlliancesAllianceIdOk.md)
- [GetCharactersCharacterIdAgentsResearch200Ok](docs/Model/GetCharactersCharacterIdAgentsResearch200Ok.md)
- [GetCharactersCharacterIdAssets200Ok](docs/Model/GetCharactersCharacterIdAssets200Ok.md)
- [GetCharactersCharacterIdAssetsNotFound](docs/Model/GetCharactersCharacterIdAssetsNotFound.md)
- [GetCharactersCharacterIdAttributesOk](docs/Model/GetCharactersCharacterIdAttributesOk.md)
- [GetCharactersCharacterIdBlueprints200Ok](docs/Model/GetCharactersCharacterIdBlueprints200Ok.md)
- [GetCharactersCharacterIdCalendar200Ok](docs/Model/GetCharactersCharacterIdCalendar200Ok.md)
- [GetCharactersCharacterIdCalendarEventIdAttendees200Ok](docs/Model/GetCharactersCharacterIdCalendarEventIdAttendees200Ok.md)
- [GetCharactersCharacterIdCalendarEventIdAttendeesNotFound](docs/Model/GetCharactersCharacterIdCalendarEventIdAttendeesNotFound.md)
- [GetCharactersCharacterIdCalendarEventIdNotFound](docs/Model/GetCharactersCharacterIdCalendarEventIdNotFound.md)
- [GetCharactersCharacterIdCalendarEventIdOk](docs/Model/GetCharactersCharacterIdCalendarEventIdOk.md)
- [GetCharactersCharacterIdClonesHomeLocation](docs/Model/GetCharactersCharacterIdClonesHomeLocation.md)
- [GetCharactersCharacterIdClonesJumpClone](docs/Model/GetCharactersCharacterIdClonesJumpClone.md)
- [GetCharactersCharacterIdClonesOk](docs/Model/GetCharactersCharacterIdClonesOk.md)
- [GetCharactersCharacterIdContacts200Ok](docs/Model/GetCharactersCharacterIdContacts200Ok.md)
- [GetCharactersCharacterIdContactsLabels200Ok](docs/Model/GetCharactersCharacterIdContactsLabels200Ok.md)
- [GetCharactersCharacterIdContracts200Ok](docs/Model/GetCharactersCharacterIdContracts200Ok.md)
- [GetCharactersCharacterIdContractsContractIdBids200Ok](docs/Model/GetCharactersCharacterIdContractsContractIdBids200Ok.md)
- [GetCharactersCharacterIdContractsContractIdBidsNotFound](docs/Model/GetCharactersCharacterIdContractsContractIdBidsNotFound.md)
- [GetCharactersCharacterIdContractsContractIdItems200Ok](docs/Model/GetCharactersCharacterIdContractsContractIdItems200Ok.md)
- [GetCharactersCharacterIdContractsContractIdItemsNotFound](docs/Model/GetCharactersCharacterIdContractsContractIdItemsNotFound.md)
- [GetCharactersCharacterIdCorporationhistory200Ok](docs/Model/GetCharactersCharacterIdCorporationhistory200Ok.md)
- [GetCharactersCharacterIdFatigueOk](docs/Model/GetCharactersCharacterIdFatigueOk.md)
- [GetCharactersCharacterIdFittings200Ok](docs/Model/GetCharactersCharacterIdFittings200Ok.md)
- [GetCharactersCharacterIdFittingsItem](docs/Model/GetCharactersCharacterIdFittingsItem.md)
- [GetCharactersCharacterIdFleetNotFound](docs/Model/GetCharactersCharacterIdFleetNotFound.md)
- [GetCharactersCharacterIdFleetOk](docs/Model/GetCharactersCharacterIdFleetOk.md)
- [GetCharactersCharacterIdFwStatsKills](docs/Model/GetCharactersCharacterIdFwStatsKills.md)
- [GetCharactersCharacterIdFwStatsOk](docs/Model/GetCharactersCharacterIdFwStatsOk.md)
- [GetCharactersCharacterIdFwStatsVictoryPoints](docs/Model/GetCharactersCharacterIdFwStatsVictoryPoints.md)
- [GetCharactersCharacterIdIndustryJobs200Ok](docs/Model/GetCharactersCharacterIdIndustryJobs200Ok.md)
- [GetCharactersCharacterIdKillmailsRecent200Ok](docs/Model/GetCharactersCharacterIdKillmailsRecent200Ok.md)
- [GetCharactersCharacterIdLocationOk](docs/Model/GetCharactersCharacterIdLocationOk.md)
- [GetCharactersCharacterIdLoyaltyPoints200Ok](docs/Model/GetCharactersCharacterIdLoyaltyPoints200Ok.md)
- [GetCharactersCharacterIdMail200Ok](docs/Model/GetCharactersCharacterIdMail200Ok.md)
- [GetCharactersCharacterIdMailLabelsLabel](docs/Model/GetCharactersCharacterIdMailLabelsLabel.md)
- [GetCharactersCharacterIdMailLabelsOk](docs/Model/GetCharactersCharacterIdMailLabelsOk.md)
- [GetCharactersCharacterIdMailLists200Ok](docs/Model/GetCharactersCharacterIdMailLists200Ok.md)
- [GetCharactersCharacterIdMailMailIdNotFound](docs/Model/GetCharactersCharacterIdMailMailIdNotFound.md)
- [GetCharactersCharacterIdMailMailIdOk](docs/Model/GetCharactersCharacterIdMailMailIdOk.md)
- [GetCharactersCharacterIdMailMailIdRecipient](docs/Model/GetCharactersCharacterIdMailMailIdRecipient.md)
- [GetCharactersCharacterIdMailRecipient](docs/Model/GetCharactersCharacterIdMailRecipient.md)
- [GetCharactersCharacterIdMedals200Ok](docs/Model/GetCharactersCharacterIdMedals200Ok.md)
- [GetCharactersCharacterIdMedalsGraphic](docs/Model/GetCharactersCharacterIdMedalsGraphic.md)
- [GetCharactersCharacterIdMining200Ok](docs/Model/GetCharactersCharacterIdMining200Ok.md)
- [GetCharactersCharacterIdNotFound](docs/Model/GetCharactersCharacterIdNotFound.md)
- [GetCharactersCharacterIdNotifications200Ok](docs/Model/GetCharactersCharacterIdNotifications200Ok.md)
- [GetCharactersCharacterIdNotificationsContacts200Ok](docs/Model/GetCharactersCharacterIdNotificationsContacts200Ok.md)
- [GetCharactersCharacterIdOk](docs/Model/GetCharactersCharacterIdOk.md)
- [GetCharactersCharacterIdOnlineOk](docs/Model/GetCharactersCharacterIdOnlineOk.md)
- [GetCharactersCharacterIdOrders200Ok](docs/Model/GetCharactersCharacterIdOrders200Ok.md)
- [GetCharactersCharacterIdOrdersHistory200Ok](docs/Model/GetCharactersCharacterIdOrdersHistory200Ok.md)
- [GetCharactersCharacterIdPlanets200Ok](docs/Model/GetCharactersCharacterIdPlanets200Ok.md)
- [GetCharactersCharacterIdPlanetsPlanetIdContent](docs/Model/GetCharactersCharacterIdPlanetsPlanetIdContent.md)
- [GetCharactersCharacterIdPlanetsPlanetIdExtractorDetails](docs/Model/GetCharactersCharacterIdPlanetsPlanetIdExtractorDetails.md)
- [GetCharactersCharacterIdPlanetsPlanetIdFactoryDetails](docs/Model/GetCharactersCharacterIdPlanetsPlanetIdFactoryDetails.md)
- [GetCharactersCharacterIdPlanetsPlanetIdHead](docs/Model/GetCharactersCharacterIdPlanetsPlanetIdHead.md)
- [GetCharactersCharacterIdPlanetsPlanetIdLink](docs/Model/GetCharactersCharacterIdPlanetsPlanetIdLink.md)
- [GetCharactersCharacterIdPlanetsPlanetIdNotFound](docs/Model/GetCharactersCharacterIdPlanetsPlanetIdNotFound.md)
- [GetCharactersCharacterIdPlanetsPlanetIdOk](docs/Model/GetCharactersCharacterIdPlanetsPlanetIdOk.md)
- [GetCharactersCharacterIdPlanetsPlanetIdPin](docs/Model/GetCharactersCharacterIdPlanetsPlanetIdPin.md)
- [GetCharactersCharacterIdPlanetsPlanetIdRoute](docs/Model/GetCharactersCharacterIdPlanetsPlanetIdRoute.md)
- [GetCharactersCharacterIdPortraitNotFound](docs/Model/GetCharactersCharacterIdPortraitNotFound.md)
- [GetCharactersCharacterIdPortraitOk](docs/Model/GetCharactersCharacterIdPortraitOk.md)
- [GetCharactersCharacterIdRolesOk](docs/Model/GetCharactersCharacterIdRolesOk.md)
- [GetCharactersCharacterIdSearchOk](docs/Model/GetCharactersCharacterIdSearchOk.md)
- [GetCharactersCharacterIdShipOk](docs/Model/GetCharactersCharacterIdShipOk.md)
- [GetCharactersCharacterIdSkillqueue200Ok](docs/Model/GetCharactersCharacterIdSkillqueue200Ok.md)
- [GetCharactersCharacterIdSkillsOk](docs/Model/GetCharactersCharacterIdSkillsOk.md)
- [GetCharactersCharacterIdSkillsSkill](docs/Model/GetCharactersCharacterIdSkillsSkill.md)
- [GetCharactersCharacterIdStandings200Ok](docs/Model/GetCharactersCharacterIdStandings200Ok.md)
- [GetCharactersCharacterIdTitles200Ok](docs/Model/GetCharactersCharacterIdTitles200Ok.md)
- [GetCharactersCharacterIdWalletJournal200Ok](docs/Model/GetCharactersCharacterIdWalletJournal200Ok.md)
- [GetCharactersCharacterIdWalletTransactions200Ok](docs/Model/GetCharactersCharacterIdWalletTransactions200Ok.md)
- [GetContractsPublicBidsContractId200Ok](docs/Model/GetContractsPublicBidsContractId200Ok.md)
- [GetContractsPublicBidsContractIdForbidden](docs/Model/GetContractsPublicBidsContractIdForbidden.md)
- [GetContractsPublicBidsContractIdNotFound](docs/Model/GetContractsPublicBidsContractIdNotFound.md)
- [GetContractsPublicItemsContractId200Ok](docs/Model/GetContractsPublicItemsContractId200Ok.md)
- [GetContractsPublicItemsContractIdForbidden](docs/Model/GetContractsPublicItemsContractIdForbidden.md)
- [GetContractsPublicItemsContractIdNotFound](docs/Model/GetContractsPublicItemsContractIdNotFound.md)
- [GetContractsPublicRegionId200Ok](docs/Model/GetContractsPublicRegionId200Ok.md)
- [GetContractsPublicRegionIdNotFound](docs/Model/GetContractsPublicRegionIdNotFound.md)
- [GetCorporationCorporationIdMiningExtractions200Ok](docs/Model/GetCorporationCorporationIdMiningExtractions200Ok.md)
- [GetCorporationCorporationIdMiningObservers200Ok](docs/Model/GetCorporationCorporationIdMiningObservers200Ok.md)
- [GetCorporationCorporationIdMiningObserversObserverId200Ok](docs/Model/GetCorporationCorporationIdMiningObserversObserverId200Ok.md)
- [GetCorporationsCorporationIdAlliancehistory200Ok](docs/Model/GetCorporationsCorporationIdAlliancehistory200Ok.md)
- [GetCorporationsCorporationIdAssets200Ok](docs/Model/GetCorporationsCorporationIdAssets200Ok.md)
- [GetCorporationsCorporationIdBlueprints200Ok](docs/Model/GetCorporationsCorporationIdBlueprints200Ok.md)
- [GetCorporationsCorporationIdContacts200Ok](docs/Model/GetCorporationsCorporationIdContacts200Ok.md)
- [GetCorporationsCorporationIdContactsLabels200Ok](docs/Model/GetCorporationsCorporationIdContactsLabels200Ok.md)
- [GetCorporationsCorporationIdContainersLogs200Ok](docs/Model/GetCorporationsCorporationIdContainersLogs200Ok.md)
- [GetCorporationsCorporationIdContracts200Ok](docs/Model/GetCorporationsCorporationIdContracts200Ok.md)
- [GetCorporationsCorporationIdContractsContractIdBids200Ok](docs/Model/GetCorporationsCorporationIdContractsContractIdBids200Ok.md)
- [GetCorporationsCorporationIdContractsContractIdBidsNotFound](docs/Model/GetCorporationsCorporationIdContractsContractIdBidsNotFound.md)
- [GetCorporationsCorporationIdContractsContractIdItems200Ok](docs/Model/GetCorporationsCorporationIdContractsContractIdItems200Ok.md)
- [GetCorporationsCorporationIdContractsContractIdItemsError520](docs/Model/GetCorporationsCorporationIdContractsContractIdItemsError520.md)
- [GetCorporationsCorporationIdContractsContractIdItemsNotFound](docs/Model/GetCorporationsCorporationIdContractsContractIdItemsNotFound.md)
- [GetCorporationsCorporationIdCustomsOffices200Ok](docs/Model/GetCorporationsCorporationIdCustomsOffices200Ok.md)
- [GetCorporationsCorporationIdDivisionsHangarHangar](docs/Model/GetCorporationsCorporationIdDivisionsHangarHangar.md)
- [GetCorporationsCorporationIdDivisionsOk](docs/Model/GetCorporationsCorporationIdDivisionsOk.md)
- [GetCorporationsCorporationIdDivisionsWalletWallet](docs/Model/GetCorporationsCorporationIdDivisionsWalletWallet.md)
- [GetCorporationsCorporationIdFacilities200Ok](docs/Model/GetCorporationsCorporationIdFacilities200Ok.md)
- [GetCorporationsCorporationIdFwStatsKills](docs/Model/GetCorporationsCorporationIdFwStatsKills.md)
- [GetCorporationsCorporationIdFwStatsOk](docs/Model/GetCorporationsCorporationIdFwStatsOk.md)
- [GetCorporationsCorporationIdFwStatsVictoryPoints](docs/Model/GetCorporationsCorporationIdFwStatsVictoryPoints.md)
- [GetCorporationsCorporationIdIconsNotFound](docs/Model/GetCorporationsCorporationIdIconsNotFound.md)
- [GetCorporationsCorporationIdIconsOk](docs/Model/GetCorporationsCorporationIdIconsOk.md)
- [GetCorporationsCorporationIdIndustryJobs200Ok](docs/Model/GetCorporationsCorporationIdIndustryJobs200Ok.md)
- [GetCorporationsCorporationIdKillmailsRecent200Ok](docs/Model/GetCorporationsCorporationIdKillmailsRecent200Ok.md)
- [GetCorporationsCorporationIdMedals200Ok](docs/Model/GetCorporationsCorporationIdMedals200Ok.md)
- [GetCorporationsCorporationIdMedalsIssued200Ok](docs/Model/GetCorporationsCorporationIdMedalsIssued200Ok.md)
- [GetCorporationsCorporationIdMembersTitles200Ok](docs/Model/GetCorporationsCorporationIdMembersTitles200Ok.md)
- [GetCorporationsCorporationIdMembertracking200Ok](docs/Model/GetCorporationsCorporationIdMembertracking200Ok.md)
- [GetCorporationsCorporationIdNotFound](docs/Model/GetCorporationsCorporationIdNotFound.md)
- [GetCorporationsCorporationIdOk](docs/Model/GetCorporationsCorporationIdOk.md)
- [GetCorporationsCorporationIdOrders200Ok](docs/Model/GetCorporationsCorporationIdOrders200Ok.md)
- [GetCorporationsCorporationIdOrdersHistory200Ok](docs/Model/GetCorporationsCorporationIdOrdersHistory200Ok.md)
- [GetCorporationsCorporationIdRoles200Ok](docs/Model/GetCorporationsCorporationIdRoles200Ok.md)
- [GetCorporationsCorporationIdRolesHistory200Ok](docs/Model/GetCorporationsCorporationIdRolesHistory200Ok.md)
- [GetCorporationsCorporationIdShareholders200Ok](docs/Model/GetCorporationsCorporationIdShareholders200Ok.md)
- [GetCorporationsCorporationIdStandings200Ok](docs/Model/GetCorporationsCorporationIdStandings200Ok.md)
- [GetCorporationsCorporationIdStarbases200Ok](docs/Model/GetCorporationsCorporationIdStarbases200Ok.md)
- [GetCorporationsCorporationIdStarbasesStarbaseIdFuel](docs/Model/GetCorporationsCorporationIdStarbasesStarbaseIdFuel.md)
- [GetCorporationsCorporationIdStarbasesStarbaseIdOk](docs/Model/GetCorporationsCorporationIdStarbasesStarbaseIdOk.md)
- [GetCorporationsCorporationIdStructures200Ok](docs/Model/GetCorporationsCorporationIdStructures200Ok.md)
- [GetCorporationsCorporationIdStructuresService](docs/Model/GetCorporationsCorporationIdStructuresService.md)
- [GetCorporationsCorporationIdTitles200Ok](docs/Model/GetCorporationsCorporationIdTitles200Ok.md)
- [GetCorporationsCorporationIdWallets200Ok](docs/Model/GetCorporationsCorporationIdWallets200Ok.md)
- [GetCorporationsCorporationIdWalletsDivisionJournal200Ok](docs/Model/GetCorporationsCorporationIdWalletsDivisionJournal200Ok.md)
- [GetCorporationsCorporationIdWalletsDivisionTransactions200Ok](docs/Model/GetCorporationsCorporationIdWalletsDivisionTransactions200Ok.md)
- [GetDogmaAttributesAttributeIdNotFound](docs/Model/GetDogmaAttributesAttributeIdNotFound.md)
- [GetDogmaAttributesAttributeIdOk](docs/Model/GetDogmaAttributesAttributeIdOk.md)
- [GetDogmaDynamicItemsTypeIdItemIdDogmaAttribute](docs/Model/GetDogmaDynamicItemsTypeIdItemIdDogmaAttribute.md)
- [GetDogmaDynamicItemsTypeIdItemIdDogmaEffect](docs/Model/GetDogmaDynamicItemsTypeIdItemIdDogmaEffect.md)
- [GetDogmaDynamicItemsTypeIdItemIdNotFound](docs/Model/GetDogmaDynamicItemsTypeIdItemIdNotFound.md)
- [GetDogmaDynamicItemsTypeIdItemIdOk](docs/Model/GetDogmaDynamicItemsTypeIdItemIdOk.md)
- [GetDogmaEffectsEffectIdModifier](docs/Model/GetDogmaEffectsEffectIdModifier.md)
- [GetDogmaEffectsEffectIdNotFound](docs/Model/GetDogmaEffectsEffectIdNotFound.md)
- [GetDogmaEffectsEffectIdOk](docs/Model/GetDogmaEffectsEffectIdOk.md)
- [GetFleetsFleetIdMembers200Ok](docs/Model/GetFleetsFleetIdMembers200Ok.md)
- [GetFleetsFleetIdMembersNotFound](docs/Model/GetFleetsFleetIdMembersNotFound.md)
- [GetFleetsFleetIdNotFound](docs/Model/GetFleetsFleetIdNotFound.md)
- [GetFleetsFleetIdOk](docs/Model/GetFleetsFleetIdOk.md)
- [GetFleetsFleetIdWings200Ok](docs/Model/GetFleetsFleetIdWings200Ok.md)
- [GetFleetsFleetIdWingsNotFound](docs/Model/GetFleetsFleetIdWingsNotFound.md)
- [GetFleetsFleetIdWingsSquad](docs/Model/GetFleetsFleetIdWingsSquad.md)
- [GetFwLeaderboardsActiveTotalActiveTotal](docs/Model/GetFwLeaderboardsActiveTotalActiveTotal.md)
- [GetFwLeaderboardsActiveTotalActiveTotal1](docs/Model/GetFwLeaderboardsActiveTotalActiveTotal1.md)
- [GetFwLeaderboardsCharactersActiveTotalActiveTotal](docs/Model/GetFwLeaderboardsCharactersActiveTotalActiveTotal.md)
- [GetFwLeaderboardsCharactersActiveTotalActiveTotal1](docs/Model/GetFwLeaderboardsCharactersActiveTotalActiveTotal1.md)
- [GetFwLeaderboardsCharactersKills](docs/Model/GetFwLeaderboardsCharactersKills.md)
- [GetFwLeaderboardsCharactersLastWeekLastWeek](docs/Model/GetFwLeaderboardsCharactersLastWeekLastWeek.md)
- [GetFwLeaderboardsCharactersLastWeekLastWeek1](docs/Model/GetFwLeaderboardsCharactersLastWeekLastWeek1.md)
- [GetFwLeaderboardsCharactersOk](docs/Model/GetFwLeaderboardsCharactersOk.md)
- [GetFwLeaderboardsCharactersVictoryPoints](docs/Model/GetFwLeaderboardsCharactersVictoryPoints.md)
- [GetFwLeaderboardsCharactersYesterdayYesterday](docs/Model/GetFwLeaderboardsCharactersYesterdayYesterday.md)
- [GetFwLeaderboardsCharactersYesterdayYesterday1](docs/Model/GetFwLeaderboardsCharactersYesterdayYesterday1.md)
- [GetFwLeaderboardsCorporationsActiveTotalActiveTotal](docs/Model/GetFwLeaderboardsCorporationsActiveTotalActiveTotal.md)
- [GetFwLeaderboardsCorporationsActiveTotalActiveTotal1](docs/Model/GetFwLeaderboardsCorporationsActiveTotalActiveTotal1.md)
- [GetFwLeaderboardsCorporationsKills](docs/Model/GetFwLeaderboardsCorporationsKills.md)
- [GetFwLeaderboardsCorporationsLastWeekLastWeek](docs/Model/GetFwLeaderboardsCorporationsLastWeekLastWeek.md)
- [GetFwLeaderboardsCorporationsLastWeekLastWeek1](docs/Model/GetFwLeaderboardsCorporationsLastWeekLastWeek1.md)
- [GetFwLeaderboardsCorporationsOk](docs/Model/GetFwLeaderboardsCorporationsOk.md)
- [GetFwLeaderboardsCorporationsVictoryPoints](docs/Model/GetFwLeaderboardsCorporationsVictoryPoints.md)
- [GetFwLeaderboardsCorporationsYesterdayYesterday](docs/Model/GetFwLeaderboardsCorporationsYesterdayYesterday.md)
- [GetFwLeaderboardsCorporationsYesterdayYesterday1](docs/Model/GetFwLeaderboardsCorporationsYesterdayYesterday1.md)
- [GetFwLeaderboardsKills](docs/Model/GetFwLeaderboardsKills.md)
- [GetFwLeaderboardsLastWeekLastWeek](docs/Model/GetFwLeaderboardsLastWeekLastWeek.md)
- [GetFwLeaderboardsLastWeekLastWeek1](docs/Model/GetFwLeaderboardsLastWeekLastWeek1.md)
- [GetFwLeaderboardsOk](docs/Model/GetFwLeaderboardsOk.md)
- [GetFwLeaderboardsVictoryPoints](docs/Model/GetFwLeaderboardsVictoryPoints.md)
- [GetFwLeaderboardsYesterdayYesterday](docs/Model/GetFwLeaderboardsYesterdayYesterday.md)
- [GetFwLeaderboardsYesterdayYesterday1](docs/Model/GetFwLeaderboardsYesterdayYesterday1.md)
- [GetFwStats200Ok](docs/Model/GetFwStats200Ok.md)
- [GetFwStatsKills](docs/Model/GetFwStatsKills.md)
- [GetFwStatsVictoryPoints](docs/Model/GetFwStatsVictoryPoints.md)
- [GetFwSystems200Ok](docs/Model/GetFwSystems200Ok.md)
- [GetFwWars200Ok](docs/Model/GetFwWars200Ok.md)
- [GetIncursions200Ok](docs/Model/GetIncursions200Ok.md)
- [GetIndustryFacilities200Ok](docs/Model/GetIndustryFacilities200Ok.md)
- [GetIndustrySystems200Ok](docs/Model/GetIndustrySystems200Ok.md)
- [GetIndustrySystemsCostIndice](docs/Model/GetIndustrySystemsCostIndice.md)
- [GetInsurancePrices200Ok](docs/Model/GetInsurancePrices200Ok.md)
- [GetInsurancePricesLevel](docs/Model/GetInsurancePricesLevel.md)
- [GetKillmailsKillmailIdKillmailHashAttacker](docs/Model/GetKillmailsKillmailIdKillmailHashAttacker.md)
- [GetKillmailsKillmailIdKillmailHashItem](docs/Model/GetKillmailsKillmailIdKillmailHashItem.md)
- [GetKillmailsKillmailIdKillmailHashItemsItem](docs/Model/GetKillmailsKillmailIdKillmailHashItemsItem.md)
- [GetKillmailsKillmailIdKillmailHashOk](docs/Model/GetKillmailsKillmailIdKillmailHashOk.md)
- [GetKillmailsKillmailIdKillmailHashPosition](docs/Model/GetKillmailsKillmailIdKillmailHashPosition.md)
- [GetKillmailsKillmailIdKillmailHashUnprocessableEntity](docs/Model/GetKillmailsKillmailIdKillmailHashUnprocessableEntity.md)
- [GetKillmailsKillmailIdKillmailHashVictim](docs/Model/GetKillmailsKillmailIdKillmailHashVictim.md)
- [GetLoyaltyStoresCorporationIdOffers200Ok](docs/Model/GetLoyaltyStoresCorporationIdOffers200Ok.md)
- [GetLoyaltyStoresCorporationIdOffersNotFound](docs/Model/GetLoyaltyStoresCorporationIdOffersNotFound.md)
- [GetLoyaltyStoresCorporationIdOffersRequiredItem](docs/Model/GetLoyaltyStoresCorporationIdOffersRequiredItem.md)
- [GetMarketsGroupsMarketGroupIdNotFound](docs/Model/GetMarketsGroupsMarketGroupIdNotFound.md)
- [GetMarketsGroupsMarketGroupIdOk](docs/Model/GetMarketsGroupsMarketGroupIdOk.md)
- [GetMarketsPrices200Ok](docs/Model/GetMarketsPrices200Ok.md)
- [GetMarketsRegionIdHistory200Ok](docs/Model/GetMarketsRegionIdHistory200Ok.md)
- [GetMarketsRegionIdHistoryError520](docs/Model/GetMarketsRegionIdHistoryError520.md)
- [GetMarketsRegionIdHistoryNotFound](docs/Model/GetMarketsRegionIdHistoryNotFound.md)
- [GetMarketsRegionIdHistoryUnprocessableEntity](docs/Model/GetMarketsRegionIdHistoryUnprocessableEntity.md)
- [GetMarketsRegionIdOrders200Ok](docs/Model/GetMarketsRegionIdOrders200Ok.md)
- [GetMarketsRegionIdOrdersNotFound](docs/Model/GetMarketsRegionIdOrdersNotFound.md)
- [GetMarketsRegionIdOrdersUnprocessableEntity](docs/Model/GetMarketsRegionIdOrdersUnprocessableEntity.md)
- [GetMarketsRegionIdTypesNotFound](docs/Model/GetMarketsRegionIdTypesNotFound.md)
- [GetMarketsStructuresStructureId200Ok](docs/Model/GetMarketsStructuresStructureId200Ok.md)
- [GetRouteOriginDestinationNotFound](docs/Model/GetRouteOriginDestinationNotFound.md)
- [GetSovereigntyCampaigns200Ok](docs/Model/GetSovereigntyCampaigns200Ok.md)
- [GetSovereigntyCampaignsParticipant](docs/Model/GetSovereigntyCampaignsParticipant.md)
- [GetSovereigntyMap200Ok](docs/Model/GetSovereigntyMap200Ok.md)
- [GetSovereigntyStructures200Ok](docs/Model/GetSovereigntyStructures200Ok.md)
- [GetStatusOk](docs/Model/GetStatusOk.md)
- [GetUniverseAncestries200Ok](docs/Model/GetUniverseAncestries200Ok.md)
- [GetUniverseAsteroidBeltsAsteroidBeltIdNotFound](docs/Model/GetUniverseAsteroidBeltsAsteroidBeltIdNotFound.md)
- [GetUniverseAsteroidBeltsAsteroidBeltIdOk](docs/Model/GetUniverseAsteroidBeltsAsteroidBeltIdOk.md)
- [GetUniverseAsteroidBeltsAsteroidBeltIdPosition](docs/Model/GetUniverseAsteroidBeltsAsteroidBeltIdPosition.md)
- [GetUniverseBloodlines200Ok](docs/Model/GetUniverseBloodlines200Ok.md)
- [GetUniverseCategoriesCategoryIdNotFound](docs/Model/GetUniverseCategoriesCategoryIdNotFound.md)
- [GetUniverseCategoriesCategoryIdOk](docs/Model/GetUniverseCategoriesCategoryIdOk.md)
- [GetUniverseConstellationsConstellationIdNotFound](docs/Model/GetUniverseConstellationsConstellationIdNotFound.md)
- [GetUniverseConstellationsConstellationIdOk](docs/Model/GetUniverseConstellationsConstellationIdOk.md)
- [GetUniverseConstellationsConstellationIdPosition](docs/Model/GetUniverseConstellationsConstellationIdPosition.md)
- [GetUniverseFactions200Ok](docs/Model/GetUniverseFactions200Ok.md)
- [GetUniverseGraphicsGraphicIdNotFound](docs/Model/GetUniverseGraphicsGraphicIdNotFound.md)
- [GetUniverseGraphicsGraphicIdOk](docs/Model/GetUniverseGraphicsGraphicIdOk.md)
- [GetUniverseGroupsGroupIdNotFound](docs/Model/GetUniverseGroupsGroupIdNotFound.md)
- [GetUniverseGroupsGroupIdOk](docs/Model/GetUniverseGroupsGroupIdOk.md)
- [GetUniverseMoonsMoonIdNotFound](docs/Model/GetUniverseMoonsMoonIdNotFound.md)
- [GetUniverseMoonsMoonIdOk](docs/Model/GetUniverseMoonsMoonIdOk.md)
- [GetUniverseMoonsMoonIdPosition](docs/Model/GetUniverseMoonsMoonIdPosition.md)
- [GetUniversePlanetsPlanetIdNotFound](docs/Model/GetUniversePlanetsPlanetIdNotFound.md)
- [GetUniversePlanetsPlanetIdOk](docs/Model/GetUniversePlanetsPlanetIdOk.md)
- [GetUniversePlanetsPlanetIdPosition](docs/Model/GetUniversePlanetsPlanetIdPosition.md)
- [GetUniverseRaces200Ok](docs/Model/GetUniverseRaces200Ok.md)
- [GetUniverseRegionsRegionIdNotFound](docs/Model/GetUniverseRegionsRegionIdNotFound.md)
- [GetUniverseRegionsRegionIdOk](docs/Model/GetUniverseRegionsRegionIdOk.md)
- [GetUniverseSchematicsSchematicIdNotFound](docs/Model/GetUniverseSchematicsSchematicIdNotFound.md)
- [GetUniverseSchematicsSchematicIdOk](docs/Model/GetUniverseSchematicsSchematicIdOk.md)
- [GetUniverseStargatesStargateIdDestination](docs/Model/GetUniverseStargatesStargateIdDestination.md)
- [GetUniverseStargatesStargateIdNotFound](docs/Model/GetUniverseStargatesStargateIdNotFound.md)
- [GetUniverseStargatesStargateIdOk](docs/Model/GetUniverseStargatesStargateIdOk.md)
- [GetUniverseStargatesStargateIdPosition](docs/Model/GetUniverseStargatesStargateIdPosition.md)
- [GetUniverseStarsStarIdOk](docs/Model/GetUniverseStarsStarIdOk.md)
- [GetUniverseStationsStationIdNotFound](docs/Model/GetUniverseStationsStationIdNotFound.md)
- [GetUniverseStationsStationIdOk](docs/Model/GetUniverseStationsStationIdOk.md)
- [GetUniverseStationsStationIdPosition](docs/Model/GetUniverseStationsStationIdPosition.md)
- [GetUniverseStructuresStructureIdNotFound](docs/Model/GetUniverseStructuresStructureIdNotFound.md)
- [GetUniverseStructuresStructureIdOk](docs/Model/GetUniverseStructuresStructureIdOk.md)
- [GetUniverseStructuresStructureIdPosition](docs/Model/GetUniverseStructuresStructureIdPosition.md)
- [GetUniverseSystemJumps200Ok](docs/Model/GetUniverseSystemJumps200Ok.md)
- [GetUniverseSystemKills200Ok](docs/Model/GetUniverseSystemKills200Ok.md)
- [GetUniverseSystemsSystemIdNotFound](docs/Model/GetUniverseSystemsSystemIdNotFound.md)
- [GetUniverseSystemsSystemIdOk](docs/Model/GetUniverseSystemsSystemIdOk.md)
- [GetUniverseSystemsSystemIdPlanet](docs/Model/GetUniverseSystemsSystemIdPlanet.md)
- [GetUniverseSystemsSystemIdPosition](docs/Model/GetUniverseSystemsSystemIdPosition.md)
- [GetUniverseTypesTypeIdDogmaAttribute](docs/Model/GetUniverseTypesTypeIdDogmaAttribute.md)
- [GetUniverseTypesTypeIdDogmaEffect](docs/Model/GetUniverseTypesTypeIdDogmaEffect.md)
- [GetUniverseTypesTypeIdNotFound](docs/Model/GetUniverseTypesTypeIdNotFound.md)
- [GetUniverseTypesTypeIdOk](docs/Model/GetUniverseTypesTypeIdOk.md)
- [GetWarsWarIdAggressor](docs/Model/GetWarsWarIdAggressor.md)
- [GetWarsWarIdAlly](docs/Model/GetWarsWarIdAlly.md)
- [GetWarsWarIdDefender](docs/Model/GetWarsWarIdDefender.md)
- [GetWarsWarIdKillmails200Ok](docs/Model/GetWarsWarIdKillmails200Ok.md)
- [GetWarsWarIdKillmailsUnprocessableEntity](docs/Model/GetWarsWarIdKillmailsUnprocessableEntity.md)
- [GetWarsWarIdOk](docs/Model/GetWarsWarIdOk.md)
- [GetWarsWarIdUnprocessableEntity](docs/Model/GetWarsWarIdUnprocessableEntity.md)
- [InternalServerError](docs/Model/InternalServerError.md)
- [PostCharactersAffiliation200Ok](docs/Model/PostCharactersAffiliation200Ok.md)
- [PostCharactersCharacterIdAssetsLocations200Ok](docs/Model/PostCharactersCharacterIdAssetsLocations200Ok.md)
- [PostCharactersCharacterIdAssetsLocationsPosition](docs/Model/PostCharactersCharacterIdAssetsLocationsPosition.md)
- [PostCharactersCharacterIdAssetsNames200Ok](docs/Model/PostCharactersCharacterIdAssetsNames200Ok.md)
- [PostCharactersCharacterIdContactsError520](docs/Model/PostCharactersCharacterIdContactsError520.md)
- [PostCharactersCharacterIdFittingsCreated](docs/Model/PostCharactersCharacterIdFittingsCreated.md)
- [PostCharactersCharacterIdFittingsFitting](docs/Model/PostCharactersCharacterIdFittingsFitting.md)
- [PostCharactersCharacterIdFittingsItem](docs/Model/PostCharactersCharacterIdFittingsItem.md)
- [PostCharactersCharacterIdMailError520](docs/Model/PostCharactersCharacterIdMailError520.md)
- [PostCharactersCharacterIdMailLabelsLabel](docs/Model/PostCharactersCharacterIdMailLabelsLabel.md)
- [PostCharactersCharacterIdMailMail](docs/Model/PostCharactersCharacterIdMailMail.md)
- [PostCharactersCharacterIdMailRecipient](docs/Model/PostCharactersCharacterIdMailRecipient.md)
- [PostCorporationsCorporationIdAssetsLocations200Ok](docs/Model/PostCorporationsCorporationIdAssetsLocations200Ok.md)
- [PostCorporationsCorporationIdAssetsLocationsNotFound](docs/Model/PostCorporationsCorporationIdAssetsLocationsNotFound.md)
- [PostCorporationsCorporationIdAssetsLocationsPosition](docs/Model/PostCorporationsCorporationIdAssetsLocationsPosition.md)
- [PostCorporationsCorporationIdAssetsNames200Ok](docs/Model/PostCorporationsCorporationIdAssetsNames200Ok.md)
- [PostCorporationsCorporationIdAssetsNamesNotFound](docs/Model/PostCorporationsCorporationIdAssetsNamesNotFound.md)
- [PostFleetsFleetIdMembersInvitation](docs/Model/PostFleetsFleetIdMembersInvitation.md)
- [PostFleetsFleetIdMembersNotFound](docs/Model/PostFleetsFleetIdMembersNotFound.md)
- [PostFleetsFleetIdMembersUnprocessableEntity](docs/Model/PostFleetsFleetIdMembersUnprocessableEntity.md)
- [PostFleetsFleetIdWingsCreated](docs/Model/PostFleetsFleetIdWingsCreated.md)
- [PostFleetsFleetIdWingsNotFound](docs/Model/PostFleetsFleetIdWingsNotFound.md)
- [PostFleetsFleetIdWingsWingIdSquadsCreated](docs/Model/PostFleetsFleetIdWingsWingIdSquadsCreated.md)
- [PostFleetsFleetIdWingsWingIdSquadsNotFound](docs/Model/PostFleetsFleetIdWingsWingIdSquadsNotFound.md)
- [PostUiOpenwindowNewmailNewMail](docs/Model/PostUiOpenwindowNewmailNewMail.md)
- [PostUiOpenwindowNewmailUnprocessableEntity](docs/Model/PostUiOpenwindowNewmailUnprocessableEntity.md)
- [PostUniverseIdsAgent](docs/Model/PostUniverseIdsAgent.md)
- [PostUniverseIdsAlliance](docs/Model/PostUniverseIdsAlliance.md)
- [PostUniverseIdsCharacter](docs/Model/PostUniverseIdsCharacter.md)
- [PostUniverseIdsConstellation](docs/Model/PostUniverseIdsConstellation.md)
- [PostUniverseIdsCorporation](docs/Model/PostUniverseIdsCorporation.md)
- [PostUniverseIdsFaction](docs/Model/PostUniverseIdsFaction.md)
- [PostUniverseIdsInventoryType](docs/Model/PostUniverseIdsInventoryType.md)
- [PostUniverseIdsOk](docs/Model/PostUniverseIdsOk.md)
- [PostUniverseIdsRegion](docs/Model/PostUniverseIdsRegion.md)
- [PostUniverseIdsStation](docs/Model/PostUniverseIdsStation.md)
- [PostUniverseIdsSystem](docs/Model/PostUniverseIdsSystem.md)
- [PostUniverseNames200Ok](docs/Model/PostUniverseNames200Ok.md)
- [PostUniverseNamesNotFound](docs/Model/PostUniverseNamesNotFound.md)
- [PutCharactersCharacterIdCalendarEventIdResponse](docs/Model/PutCharactersCharacterIdCalendarEventIdResponse.md)
- [PutCharactersCharacterIdMailMailIdContents](docs/Model/PutCharactersCharacterIdMailMailIdContents.md)
- [PutFleetsFleetIdMembersMemberIdMovement](docs/Model/PutFleetsFleetIdMembersMemberIdMovement.md)
- [PutFleetsFleetIdMembersMemberIdNotFound](docs/Model/PutFleetsFleetIdMembersMemberIdNotFound.md)
- [PutFleetsFleetIdMembersMemberIdUnprocessableEntity](docs/Model/PutFleetsFleetIdMembersMemberIdUnprocessableEntity.md)
- [PutFleetsFleetIdNewSettings](docs/Model/PutFleetsFleetIdNewSettings.md)
- [PutFleetsFleetIdNotFound](docs/Model/PutFleetsFleetIdNotFound.md)
- [PutFleetsFleetIdSquadsSquadIdNaming](docs/Model/PutFleetsFleetIdSquadsSquadIdNaming.md)
- [PutFleetsFleetIdSquadsSquadIdNotFound](docs/Model/PutFleetsFleetIdSquadsSquadIdNotFound.md)
- [PutFleetsFleetIdWingsWingIdNaming](docs/Model/PutFleetsFleetIdWingsWingIdNaming.md)
- [PutFleetsFleetIdWingsWingIdNotFound](docs/Model/PutFleetsFleetIdWingsWingIdNotFound.md)
- [ServiceUnavailable](docs/Model/ServiceUnavailable.md)
- [Unauthorized](docs/Model/Unauthorized.md)

## Authorization

Authentication schemes defined for the API:
### evesso

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: `https://login.eveonline.com/v2/oauth/authorize`
- **Scopes**: 
    - **esi-alliances.read_contacts.v1**: EVE SSO scope esi-alliances.read_contacts.v1
    - **esi-assets.read_assets.v1**: EVE SSO scope esi-assets.read_assets.v1
    - **esi-assets.read_corporation_assets.v1**: EVE SSO scope esi-assets.read_corporation_assets.v1
    - **esi-calendar.read_calendar_events.v1**: EVE SSO scope esi-calendar.read_calendar_events.v1
    - **esi-calendar.respond_calendar_events.v1**: EVE SSO scope esi-calendar.respond_calendar_events.v1
    - **esi-characters.read_agents_research.v1**: EVE SSO scope esi-characters.read_agents_research.v1
    - **esi-characters.read_blueprints.v1**: EVE SSO scope esi-characters.read_blueprints.v1
    - **esi-characters.read_contacts.v1**: EVE SSO scope esi-characters.read_contacts.v1
    - **esi-characters.read_corporation_roles.v1**: EVE SSO scope esi-characters.read_corporation_roles.v1
    - **esi-characters.read_fatigue.v1**: EVE SSO scope esi-characters.read_fatigue.v1
    - **esi-characters.read_fw_stats.v1**: EVE SSO scope esi-characters.read_fw_stats.v1
    - **esi-characters.read_loyalty.v1**: EVE SSO scope esi-characters.read_loyalty.v1
    - **esi-characters.read_medals.v1**: EVE SSO scope esi-characters.read_medals.v1
    - **esi-characters.read_notifications.v1**: EVE SSO scope esi-characters.read_notifications.v1
    - **esi-characters.read_standings.v1**: EVE SSO scope esi-characters.read_standings.v1
    - **esi-characters.read_titles.v1**: EVE SSO scope esi-characters.read_titles.v1
    - **esi-characters.write_contacts.v1**: EVE SSO scope esi-characters.write_contacts.v1
    - **esi-clones.read_clones.v1**: EVE SSO scope esi-clones.read_clones.v1
    - **esi-clones.read_implants.v1**: EVE SSO scope esi-clones.read_implants.v1
    - **esi-contracts.read_character_contracts.v1**: EVE SSO scope esi-contracts.read_character_contracts.v1
    - **esi-contracts.read_corporation_contracts.v1**: EVE SSO scope esi-contracts.read_corporation_contracts.v1
    - **esi-corporations.read_blueprints.v1**: EVE SSO scope esi-corporations.read_blueprints.v1
    - **esi-corporations.read_contacts.v1**: EVE SSO scope esi-corporations.read_contacts.v1
    - **esi-corporations.read_container_logs.v1**: EVE SSO scope esi-corporations.read_container_logs.v1
    - **esi-corporations.read_corporation_membership.v1**: EVE SSO scope esi-corporations.read_corporation_membership.v1
    - **esi-corporations.read_divisions.v1**: EVE SSO scope esi-corporations.read_divisions.v1
    - **esi-corporations.read_facilities.v1**: EVE SSO scope esi-corporations.read_facilities.v1
    - **esi-corporations.read_fw_stats.v1**: EVE SSO scope esi-corporations.read_fw_stats.v1
    - **esi-corporations.read_medals.v1**: EVE SSO scope esi-corporations.read_medals.v1
    - **esi-corporations.read_standings.v1**: EVE SSO scope esi-corporations.read_standings.v1
    - **esi-corporations.read_starbases.v1**: EVE SSO scope esi-corporations.read_starbases.v1
    - **esi-corporations.read_structures.v1**: EVE SSO scope esi-corporations.read_structures.v1
    - **esi-corporations.read_titles.v1**: EVE SSO scope esi-corporations.read_titles.v1
    - **esi-corporations.track_members.v1**: EVE SSO scope esi-corporations.track_members.v1
    - **esi-fittings.read_fittings.v1**: EVE SSO scope esi-fittings.read_fittings.v1
    - **esi-fittings.write_fittings.v1**: EVE SSO scope esi-fittings.write_fittings.v1
    - **esi-fleets.read_fleet.v1**: EVE SSO scope esi-fleets.read_fleet.v1
    - **esi-fleets.write_fleet.v1**: EVE SSO scope esi-fleets.write_fleet.v1
    - **esi-industry.read_character_jobs.v1**: EVE SSO scope esi-industry.read_character_jobs.v1
    - **esi-industry.read_character_mining.v1**: EVE SSO scope esi-industry.read_character_mining.v1
    - **esi-industry.read_corporation_jobs.v1**: EVE SSO scope esi-industry.read_corporation_jobs.v1
    - **esi-industry.read_corporation_mining.v1**: EVE SSO scope esi-industry.read_corporation_mining.v1
    - **esi-killmails.read_corporation_killmails.v1**: EVE SSO scope esi-killmails.read_corporation_killmails.v1
    - **esi-killmails.read_killmails.v1**: EVE SSO scope esi-killmails.read_killmails.v1
    - **esi-location.read_location.v1**: EVE SSO scope esi-location.read_location.v1
    - **esi-location.read_online.v1**: EVE SSO scope esi-location.read_online.v1
    - **esi-location.read_ship_type.v1**: EVE SSO scope esi-location.read_ship_type.v1
    - **esi-mail.organize_mail.v1**: EVE SSO scope esi-mail.organize_mail.v1
    - **esi-mail.read_mail.v1**: EVE SSO scope esi-mail.read_mail.v1
    - **esi-mail.send_mail.v1**: EVE SSO scope esi-mail.send_mail.v1
    - **esi-markets.read_character_orders.v1**: EVE SSO scope esi-markets.read_character_orders.v1
    - **esi-markets.read_corporation_orders.v1**: EVE SSO scope esi-markets.read_corporation_orders.v1
    - **esi-markets.structure_markets.v1**: EVE SSO scope esi-markets.structure_markets.v1
    - **esi-planets.manage_planets.v1**: EVE SSO scope esi-planets.manage_planets.v1
    - **esi-planets.read_customs_offices.v1**: EVE SSO scope esi-planets.read_customs_offices.v1
    - **esi-search.search_structures.v1**: EVE SSO scope esi-search.search_structures.v1
    - **esi-skills.read_skillqueue.v1**: EVE SSO scope esi-skills.read_skillqueue.v1
    - **esi-skills.read_skills.v1**: EVE SSO scope esi-skills.read_skills.v1
    - **esi-ui.open_window.v1**: EVE SSO scope esi-ui.open_window.v1
    - **esi-ui.write_waypoint.v1**: EVE SSO scope esi-ui.write_waypoint.v1
    - **esi-universe.read_structures.v1**: EVE SSO scope esi-universe.read_structures.v1
    - **esi-wallet.read_character_wallet.v1**: EVE SSO scope esi-wallet.read_character_wallet.v1
    - **esi-wallet.read_corporation_wallets.v1**: EVE SSO scope esi-wallet.read_corporation_wallets.v1

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.36`
    - Generator version: `7.14.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
