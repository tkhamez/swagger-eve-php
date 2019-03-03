# GetWarsWarIdOk

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**declared** | [**\DateTime**](\DateTime.md) | Time that the war was declared | 
**aggressor** | [**\Swagger\Client\Eve\Model\GetWarsWarIdAggressor**](GetWarsWarIdAggressor.md) |  | 
**open_for_allies** | **bool** | Is the war currently open for allies or not | 
**retracted** | [**\DateTime**](\DateTime.md) | Time the war was retracted but both sides could still shoot each other | [optional] 
**mutual** | **bool** | Was the war declared mutual by both parties | 
**finished** | [**\DateTime**](\DateTime.md) | Time the war ended and shooting was no longer allowed | [optional] 
**started** | [**\DateTime**](\DateTime.md) | Time when the war started and both sides could shoot each other | [optional] 
**id** | **int** | ID of the specified war | 
**allies** | [**\Swagger\Client\Eve\Model\GetWarsWarIdAlly[]**](GetWarsWarIdAlly.md) | allied corporations or alliances, each object contains either corporation_id or alliance_id | [optional] 
**defender** | [**\Swagger\Client\Eve\Model\GetWarsWarIdDefender**](GetWarsWarIdDefender.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


