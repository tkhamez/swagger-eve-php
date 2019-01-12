# Swagger\Client\Eve\SearchApi

All URIs are relative to *https://esi.evetech.net/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdSearch**](SearchApi.md#getCharactersCharacterIdSearch) | **GET** /v3/characters/{character_id}/search/ | Search on a string
[**getSearch**](SearchApi.md#getSearch) | **GET** /v2/search/ | Search on a string

# **getCharactersCharacterIdSearch**
> object getCharactersCharacterIdSearch($categories, $character_id, $search, $accept_language, $datasource, $if_none_match, $language, $strict, $token)

Search on a string

Search for entities that match a given sub-string.  ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Eve\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categories = array("categories_example"); // string[] | Type of entities to search for
$character_id = 56; // int | An EVE character ID
$search = "search_example"; // string | The string to search on
$accept_language = "accept_language_example"; // string | Language to use in the response
$datasource = "datasource_example"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$language = "language_example"; // string | Language to use in the response, takes precedence over Accept-Language
$strict = True; // bool | Whether the search should be a strict match
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdSearch($categories, $character_id, $search, $accept_language, $datasource, $if_none_match, $language, $strict, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getCharactersCharacterIdSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categories** | [**string[]**](../Model/string.md)| Type of entities to search for |
 **character_id** | [**int**](../Model/.md)| An EVE character ID |
 **search** | [**string**](../Model/.md)| The string to search on |
 **accept_language** | [**string**](../Model/.md)| Language to use in the response | [optional]
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **if_none_match** | [**string**](../Model/.md)| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **language** | [**string**](../Model/.md)| Language to use in the response, takes precedence over Accept-Language | [optional]
 **strict** | [**bool**](../Model/.md)| Whether the search should be a strict match | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

**object**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSearch**
> object getSearch($categories, $search, $accept_language, $datasource, $if_none_match, $language, $strict)

Search on a string

Search for entities that match a given sub-string.  ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Eve\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$categories = array("categories_example"); // string[] | Type of entities to search for
$search = "search_example"; // string | The string to search on
$accept_language = "accept_language_example"; // string | Language to use in the response
$datasource = "datasource_example"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$language = "language_example"; // string | Language to use in the response, takes precedence over Accept-Language
$strict = True; // bool | Whether the search should be a strict match

try {
    $result = $apiInstance->getSearch($categories, $search, $accept_language, $datasource, $if_none_match, $language, $strict);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categories** | [**string[]**](../Model/string.md)| Type of entities to search for |
 **search** | [**string**](../Model/.md)| The string to search on |
 **accept_language** | [**string**](../Model/.md)| Language to use in the response | [optional]
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **if_none_match** | [**string**](../Model/.md)| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **language** | [**string**](../Model/.md)| Language to use in the response, takes precedence over Accept-Language | [optional]
 **strict** | [**bool**](../Model/.md)| Whether the search should be a strict match | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

