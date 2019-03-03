# GetSovereigntyCampaigns200Ok

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_time** | [**\DateTime**](\DateTime.md) | Time the event is scheduled to start. | 
**event_type** | **string** | Type of event this campaign is for. tcu_defense, ihub_defense and station_defense are referred to as \&quot;Defense Events\&quot;, station_freeport as \&quot;Freeport Events\&quot;. | 
**defender_id** | **int** | Defending alliance, only present in Defense Events | [optional] 
**attackers_score** | **float** | Score for all attacking parties, only present in Defense Events. | [optional] 
**solar_system_id** | **int** | The solar system the structure is located in. | 
**structure_id** | **int** | The structure item ID that is related to this campaign. | 
**defender_score** | **float** | Score for the defending alliance, only present in Defense Events. | [optional] 
**campaign_id** | **int** | Unique ID for this campaign. | 
**constellation_id** | **int** | The constellation in which the campaign will take place. | 
**participants** | [**\Swagger\Client\Eve\Model\GetSovereigntyCampaignsParticipant[]**](GetSovereigntyCampaignsParticipant.md) | Alliance participating and their respective scores, only present in Freeport Events. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


