# GetCharactersCharacterIdContracts200Ok

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reward** | **double** | Remuneration for contract (for Couriers only) | [optional] 
**end_location_id** | **int** | End location ID (for Couriers contract) | [optional] 
**issuer_corporation_id** | **int** | Character&#39;s corporation ID for the issuer | 
**contract_id** | **int** | contract_id integer | 
**days_to_complete** | **int** | Number of days to perform the contract | [optional] 
**availability** | **string** | To whom the contract is available | 
**buyout** | **double** | Buyout price (for Auctions only) | [optional] 
**title** | **string** | Title of the contract | [optional] 
**type** | **string** | Type of the contract | 
**date_expired** | [**\DateTime**](\DateTime.md) | Expiration date of the contract | 
**start_location_id** | **int** | Start location ID (for Couriers contract) | [optional] 
**volume** | **double** | Volume of items in the contract | [optional] 
**issuer_id** | **int** | Character ID for the issuer | 
**date_accepted** | [**\DateTime**](\DateTime.md) | Date of confirmation of contract | [optional] 
**acceptor_id** | **int** | Who will accept the contract | 
**date_issued** | [**\DateTime**](\DateTime.md) | Сreation date of the contract | 
**price** | **double** | Price of contract (for ItemsExchange and Auctions) | [optional] 
**date_completed** | [**\DateTime**](\DateTime.md) | Date of completed of contract | [optional] 
**for_corporation** | **bool** | true if the contract was issued on behalf of the issuer&#39;s corporation | 
**collateral** | **double** | Collateral price (for Couriers only) | [optional] 
**assignee_id** | **int** | ID to whom the contract is assigned, can be corporation or character ID | 
**status** | **string** | Status of the the contract | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


