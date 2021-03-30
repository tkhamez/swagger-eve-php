# Swagger\Client\Eve\FactionWarfareApi

All URIs are relative to https://esi.evetech.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdFwStats()**](FactionWarfareApi.md#getCharactersCharacterIdFwStats) | **GET** /v1/characters/{character_id}/fw/stats/ | Overview of a character involved in faction warfare
[**getCorporationsCorporationIdFwStats()**](FactionWarfareApi.md#getCorporationsCorporationIdFwStats) | **GET** /v1/corporations/{corporation_id}/fw/stats/ | Overview of a corporation involved in faction warfare
[**getFwLeaderboards()**](FactionWarfareApi.md#getFwLeaderboards) | **GET** /v1/fw/leaderboards/ | List of the top factions in faction warfare
[**getFwLeaderboardsCharacters()**](FactionWarfareApi.md#getFwLeaderboardsCharacters) | **GET** /v1/fw/leaderboards/characters/ | List of the top pilots in faction warfare
[**getFwLeaderboardsCorporations()**](FactionWarfareApi.md#getFwLeaderboardsCorporations) | **GET** /v1/fw/leaderboards/corporations/ | List of the top corporations in faction warfare
[**getFwStats()**](FactionWarfareApi.md#getFwStats) | **GET** /v1/fw/stats/ | An overview of statistics about factions involved in faction warfare
[**getFwSystems()**](FactionWarfareApi.md#getFwSystems) | **GET** /v2/fw/systems/ | Ownership of faction warfare systems
[**getFwWars()**](FactionWarfareApi.md#getFwWars) | **GET** /v1/fw/wars/ | Data about which NPC factions are at war


## `getCharactersCharacterIdFwStats()`

```php
getCharactersCharacterIdFwStats($character_id, $datasource, $if_none_match, $token): \Swagger\Client\Eve\Model\GetCharactersCharacterIdFwStatsOk
```

Overview of a character involved in faction warfare

Statistical overview of a character involved in faction warfare  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\FactionWarfareApi(
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
    $result = $apiInstance->getCharactersCharacterIdFwStats($character_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactionWarfareApi->getCharactersCharacterIdFwStats: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Eve\Model\GetCharactersCharacterIdFwStatsOk**](../Model/GetCharactersCharacterIdFwStatsOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdFwStats()`

```php
getCorporationsCorporationIdFwStats($corporation_id, $datasource, $if_none_match, $token): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdFwStatsOk
```

Overview of a corporation involved in faction warfare

Statistics about a corporation involved in faction warfare  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\FactionWarfareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | An EVE corporation ID
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCorporationsCorporationIdFwStats($corporation_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactionWarfareApi->getCorporationsCorporationIdFwStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporation_id** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **token** | **string**| Access token to use if unable to set a header | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdFwStatsOk**](../Model/GetCorporationsCorporationIdFwStatsOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFwLeaderboards()`

```php
getFwLeaderboards($datasource, $if_none_match): \Swagger\Client\Eve\Model\GetFwLeaderboardsOk
```

List of the top factions in faction warfare

Top 4 leaderboard of factions for kills and victory points separated by total, last week and yesterday  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Swagger\Client\Eve\Api\FactionWarfareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getFwLeaderboards($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactionWarfareApi->getFwLeaderboards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetFwLeaderboardsOk**](../Model/GetFwLeaderboardsOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFwLeaderboardsCharacters()`

```php
getFwLeaderboardsCharacters($datasource, $if_none_match): \Swagger\Client\Eve\Model\GetFwLeaderboardsCharactersOk
```

List of the top pilots in faction warfare

Top 100 leaderboard of pilots for kills and victory points separated by total, last week and yesterday  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Swagger\Client\Eve\Api\FactionWarfareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getFwLeaderboardsCharacters($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactionWarfareApi->getFwLeaderboardsCharacters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetFwLeaderboardsCharactersOk**](../Model/GetFwLeaderboardsCharactersOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFwLeaderboardsCorporations()`

```php
getFwLeaderboardsCorporations($datasource, $if_none_match): \Swagger\Client\Eve\Model\GetFwLeaderboardsCorporationsOk
```

List of the top corporations in faction warfare

Top 10 leaderboard of corporations for kills and victory points separated by total, last week and yesterday  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Swagger\Client\Eve\Api\FactionWarfareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getFwLeaderboardsCorporations($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactionWarfareApi->getFwLeaderboardsCorporations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetFwLeaderboardsCorporationsOk**](../Model/GetFwLeaderboardsCorporationsOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFwStats()`

```php
getFwStats($datasource, $if_none_match): \Swagger\Client\Eve\Model\GetFwStats200Ok[]
```

An overview of statistics about factions involved in faction warfare

Statistical overviews of factions involved in faction warfare  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Swagger\Client\Eve\Api\FactionWarfareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getFwStats($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactionWarfareApi->getFwStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetFwStats200Ok[]**](../Model/GetFwStats200Ok.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFwSystems()`

```php
getFwSystems($datasource, $if_none_match): \Swagger\Client\Eve\Model\GetFwSystems200Ok[]
```

Ownership of faction warfare systems

An overview of the current ownership of faction warfare solar systems  ---  This route is cached for up to 1800 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Swagger\Client\Eve\Api\FactionWarfareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getFwSystems($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactionWarfareApi->getFwSystems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetFwSystems200Ok[]**](../Model/GetFwSystems200Ok.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFwWars()`

```php
getFwWars($datasource, $if_none_match): \Swagger\Client\Eve\Model\GetFwWars200Ok[]
```

Data about which NPC factions are at war

Data about which NPC factions are at war  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Swagger\Client\Eve\Api\FactionWarfareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getFwWars($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FactionWarfareApi->getFwWars: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetFwWars200Ok[]**](../Model/GetFwWars200Ok.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
