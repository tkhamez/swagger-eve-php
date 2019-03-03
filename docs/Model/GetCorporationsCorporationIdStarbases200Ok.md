# GetCorporationsCorporationIdStarbases200Ok

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unanchor_at** | [**\DateTime**](\DateTime.md) | When the POS started unanchoring, for starbases (POSes) in unanchoring state | [optional] 
**onlined_since** | [**\DateTime**](\DateTime.md) | When the POS onlined, for starbases (POSes) in online state | [optional] 
**starbase_id** | **int** | Unique ID for this starbase (POS) | 
**system_id** | **int** | The solar system this starbase (POS) is in, unanchored POSes have this information | 
**type_id** | **int** | Starbase (POS) type | 
**moon_id** | **int** | The moon this starbase (POS) is anchored on, unanchored POSes do not have this information | [optional] 
**state** | **string** | state string | [optional] 
**reinforced_until** | [**\DateTime**](\DateTime.md) | When the POS will be out of reinforcement, for starbases (POSes) in reinforced state | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


