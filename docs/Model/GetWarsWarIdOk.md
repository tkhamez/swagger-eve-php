# # GetWarsWarIdOk

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aggressor** | [**\Swagger\Client\Eve\Model\GetWarsWarIdAggressor**](GetWarsWarIdAggressor.md) |  |
**allies** | [**\Swagger\Client\Eve\Model\GetWarsWarIdAlly[]**](GetWarsWarIdAlly.md) | allied corporations or alliances, each object contains either corporation_id or alliance_id | [optional]
**declared** | **\DateTime** | Time that the war was declared |
**defender** | [**\Swagger\Client\Eve\Model\GetWarsWarIdDefender**](GetWarsWarIdDefender.md) |  |
**finished** | **\DateTime** | Time the war ended and shooting was no longer allowed | [optional]
**id** | **int** | ID of the specified war |
**mutual** | **bool** | Was the war declared mutual by both parties |
**open_for_allies** | **bool** | Is the war currently open for allies or not |
**retracted** | **\DateTime** | Time the war was retracted but both sides could still shoot each other | [optional]
**started** | **\DateTime** | Time when the war started and both sides could shoot each other | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
