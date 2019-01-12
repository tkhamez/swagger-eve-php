# GetCorporationsCorporationIdOrdersHistory200Ok

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**issued_by** | **int** | The character who issued this order | [optional] 
**type_id** | **int** | The type ID of the item transacted in this order | 
**region_id** | **int** | ID of the region where order was placed | 
**range** | **string** | Valid order range, numbers are ranges in jumps | 
**volume_total** | **int** | Quantity of items required or offered at time order was placed | 
**location_id** | **int** | ID of the location where order was placed | 
**duration** | **int** | Number of days the order was valid for (starting from the issued date). An order expires at time issued + duration | 
**min_volume** | **int** | For buy orders, the minimum quantity that will be accepted in a matching sell order | [optional] 
**is_buy_order** | **bool** | True if the order is a bid (buy) order | [optional] 
**price** | **double** | Cost per unit for this order | 
**wallet_division** | **int** | The corporation wallet division used for this order | 
**escrow** | **double** | For buy orders, the amount of ISK in escrow | [optional] 
**state** | **string** | Current order state | 
**issued** | [**\DateTime**](\DateTime.md) | Date and time when this order was issued | 
**order_id** | **int** | Unique order ID | 
**volume_remain** | **int** | Quantity of items still required or offered | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


