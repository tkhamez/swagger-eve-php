# Swagger\Client\Eve\LoyaltyApi

All URIs are relative to *https://esi.evetech.net/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdLoyaltyPoints**](LoyaltyApi.md#getCharactersCharacterIdLoyaltyPoints) | **GET** /v1/characters/{character_id}/loyalty/points/ | Get loyalty points
[**getLoyaltyStoresCorporationIdOffers**](LoyaltyApi.md#getLoyaltyStoresCorporationIdOffers) | **GET** /v1/loyalty/stores/{corporation_id}/offers/ | List loyalty store offers

# **getCharactersCharacterIdLoyaltyPoints**
> object[] getCharactersCharacterIdLoyaltyPoints($character_id, $datasource, $if_none_match, $token)

Get loyalty points

Return a list of loyalty points for all corporations the character has worked for  ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Eve\Api\LoyaltyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = "datasource_example"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdLoyaltyPoints($character_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyApi->getCharactersCharacterIdLoyaltyPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | [**int**](../Model/.md)| An EVE character ID |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **if_none_match** | [**string**](../Model/.md)| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

**object[]**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoyaltyStoresCorporationIdOffers**
> object[] getLoyaltyStoresCorporationIdOffers($corporation_id, $datasource, $if_none_match)

List loyalty store offers

Return a list of offers from a specific corporation's loyalty store  ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Eve\Api\LoyaltyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$corporation_id = 56; // int | An EVE corporation ID
$datasource = "datasource_example"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getLoyaltyStoresCorporationIdOffers($corporation_id, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyApi->getLoyaltyStoresCorporationIdOffers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporation_id** | [**int**](../Model/.md)| An EVE corporation ID |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **if_none_match** | [**string**](../Model/.md)| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

