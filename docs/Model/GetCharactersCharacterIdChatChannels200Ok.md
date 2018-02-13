# GetCharactersCharacterIdChatChannels200Ok

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel_id** | **int** | Unique channel ID. Always negative for player-created channels. Permanent (CCP created) channels have a positive ID, but don&#39;t appear in the API | 
**name** | **string** | Displayed name of channel | 
**owner_id** | **int** | owner_id integer | 
**comparison_key** | **string** | Normalized, unique string used to compare channel names | 
**has_password** | **bool** | If this is a password protected channel | 
**motd** | **string** | Message of the day for this channel | 
**allowed** | [**\Swagger\Client\Model\GetCharactersCharacterIdChatChannelsAllowed[]**](GetCharactersCharacterIdChatChannelsAllowed.md) | allowed array | 
**operators** | [**\Swagger\Client\Model\GetCharactersCharacterIdChatChannelsOperator[]**](GetCharactersCharacterIdChatChannelsOperator.md) | operators array | 
**blocked** | [**\Swagger\Client\Model\GetCharactersCharacterIdChatChannelsBlocked[]**](GetCharactersCharacterIdChatChannelsBlocked.md) | blocked array | 
**muted** | [**\Swagger\Client\Model\GetCharactersCharacterIdChatChannelsMuted[]**](GetCharactersCharacterIdChatChannelsMuted.md) | muted array | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


