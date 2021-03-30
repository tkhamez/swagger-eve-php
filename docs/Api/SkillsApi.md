# Swagger\Client\Eve\SkillsApi

All URIs are relative to https://esi.evetech.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdAttributes()**](SkillsApi.md#getCharactersCharacterIdAttributes) | **GET** /v1/characters/{character_id}/attributes/ | Get character attributes
[**getCharactersCharacterIdSkillqueue()**](SkillsApi.md#getCharactersCharacterIdSkillqueue) | **GET** /v2/characters/{character_id}/skillqueue/ | Get character&#39;s skill queue
[**getCharactersCharacterIdSkills()**](SkillsApi.md#getCharactersCharacterIdSkills) | **GET** /v4/characters/{character_id}/skills/ | Get character skills


## `getCharactersCharacterIdAttributes()`

```php
getCharactersCharacterIdAttributes($character_id, $datasource, $if_none_match, $token): \Swagger\Client\Eve\Model\GetCharactersCharacterIdAttributesOk
```

Get character attributes

Return attributes of a character  ---  This route is cached for up to 120 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\SkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdAttributes($character_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkillsApi->getCharactersCharacterIdAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **token** | **string**| Access token to use if unable to set a header | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetCharactersCharacterIdAttributesOk**](../Model/GetCharactersCharacterIdAttributesOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCharactersCharacterIdSkillqueue()`

```php
getCharactersCharacterIdSkillqueue($character_id, $datasource, $if_none_match, $token): \Swagger\Client\Eve\Model\GetCharactersCharacterIdSkillqueue200Ok[]
```

Get character's skill queue

List the configured skill queue for the given character  ---  This route is cached for up to 120 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\SkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdSkillqueue($character_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkillsApi->getCharactersCharacterIdSkillqueue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **token** | **string**| Access token to use if unable to set a header | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetCharactersCharacterIdSkillqueue200Ok[]**](../Model/GetCharactersCharacterIdSkillqueue200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCharactersCharacterIdSkills()`

```php
getCharactersCharacterIdSkills($character_id, $datasource, $if_none_match, $token): \Swagger\Client\Eve\Model\GetCharactersCharacterIdSkillsOk
```

Get character skills

List all trained skills for the given character  ---  This route is cached for up to 120 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\SkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdSkills($character_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkillsApi->getCharactersCharacterIdSkills: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **token** | **string**| Access token to use if unable to set a header | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetCharactersCharacterIdSkillsOk**](../Model/GetCharactersCharacterIdSkillsOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
