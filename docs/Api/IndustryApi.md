# Swagger\Client\Eve\IndustryApi

All URIs are relative to https://esi.evetech.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdIndustryJobs()**](IndustryApi.md#getCharactersCharacterIdIndustryJobs) | **GET** /v1/characters/{character_id}/industry/jobs/ | List character industry jobs
[**getCharactersCharacterIdMining()**](IndustryApi.md#getCharactersCharacterIdMining) | **GET** /v1/characters/{character_id}/mining/ | Character mining ledger
[**getCorporationCorporationIdMiningExtractions()**](IndustryApi.md#getCorporationCorporationIdMiningExtractions) | **GET** /v1/corporation/{corporation_id}/mining/extractions/ | Moon extraction timers
[**getCorporationCorporationIdMiningObservers()**](IndustryApi.md#getCorporationCorporationIdMiningObservers) | **GET** /v1/corporation/{corporation_id}/mining/observers/ | Corporation mining observers
[**getCorporationCorporationIdMiningObserversObserverId()**](IndustryApi.md#getCorporationCorporationIdMiningObserversObserverId) | **GET** /v1/corporation/{corporation_id}/mining/observers/{observer_id}/ | Observed corporation mining
[**getCorporationsCorporationIdIndustryJobs()**](IndustryApi.md#getCorporationsCorporationIdIndustryJobs) | **GET** /v1/corporations/{corporation_id}/industry/jobs/ | List corporation industry jobs
[**getIndustryFacilities()**](IndustryApi.md#getIndustryFacilities) | **GET** /v1/industry/facilities/ | List industry facilities
[**getIndustrySystems()**](IndustryApi.md#getIndustrySystems) | **GET** /v1/industry/systems/ | List solar system cost indices


## `getCharactersCharacterIdIndustryJobs()`

```php
getCharactersCharacterIdIndustryJobs($character_id, $datasource, $if_none_match, $include_completed, $token): \Swagger\Client\Eve\Model\GetCharactersCharacterIdIndustryJobs200Ok[]
```

List character industry jobs

List industry jobs placed by a character  ---  This route is cached for up to 300 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\IndustryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$include_completed = True; // bool | Whether to retrieve completed character industry jobs. Only includes jobs from the past 90 days
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdIndustryJobs($character_id, $datasource, $if_none_match, $include_completed, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->getCharactersCharacterIdIndustryJobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **include_completed** | **bool**| Whether to retrieve completed character industry jobs. Only includes jobs from the past 90 days | [optional]
 **token** | **string**| Access token to use if unable to set a header | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetCharactersCharacterIdIndustryJobs200Ok[]**](../Model/GetCharactersCharacterIdIndustryJobs200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCharactersCharacterIdMining()`

```php
getCharactersCharacterIdMining($character_id, $datasource, $if_none_match, $page, $token): \Swagger\Client\Eve\Model\GetCharactersCharacterIdMining200Ok[]
```

Character mining ledger

Paginated record of all mining done by a character for the past 30 days  ---  This route is cached for up to 600 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\IndustryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$page = 1; // int | Which page of results to return
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdMining($character_id, $datasource, $if_none_match, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->getCharactersCharacterIdMining: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **page** | **int**| Which page of results to return | [optional] [default to 1]
 **token** | **string**| Access token to use if unable to set a header | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetCharactersCharacterIdMining200Ok[]**](../Model/GetCharactersCharacterIdMining200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationCorporationIdMiningExtractions()`

```php
getCorporationCorporationIdMiningExtractions($corporation_id, $datasource, $if_none_match, $page, $token): \Swagger\Client\Eve\Model\GetCorporationCorporationIdMiningExtractions200Ok[]
```

Moon extraction timers

Extraction timers for all moon chunks being extracted by refineries belonging to a corporation.  ---  This route is cached for up to 1800 seconds  --- Requires one of the following EVE corporation role(s): Station_Manager

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\IndustryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | An EVE corporation ID
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$page = 1; // int | Which page of results to return
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCorporationCorporationIdMiningExtractions($corporation_id, $datasource, $if_none_match, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->getCorporationCorporationIdMiningExtractions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporation_id** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **page** | **int**| Which page of results to return | [optional] [default to 1]
 **token** | **string**| Access token to use if unable to set a header | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationCorporationIdMiningExtractions200Ok[]**](../Model/GetCorporationCorporationIdMiningExtractions200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationCorporationIdMiningObservers()`

```php
getCorporationCorporationIdMiningObservers($corporation_id, $datasource, $if_none_match, $page, $token): \Swagger\Client\Eve\Model\GetCorporationCorporationIdMiningObservers200Ok[]
```

Corporation mining observers

Paginated list of all entities capable of observing and recording mining for a corporation  ---  This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Accountant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\IndustryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | An EVE corporation ID
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$page = 1; // int | Which page of results to return
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCorporationCorporationIdMiningObservers($corporation_id, $datasource, $if_none_match, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->getCorporationCorporationIdMiningObservers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporation_id** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **page** | **int**| Which page of results to return | [optional] [default to 1]
 **token** | **string**| Access token to use if unable to set a header | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationCorporationIdMiningObservers200Ok[]**](../Model/GetCorporationCorporationIdMiningObservers200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationCorporationIdMiningObserversObserverId()`

```php
getCorporationCorporationIdMiningObserversObserverId($corporation_id, $observer_id, $datasource, $if_none_match, $page, $token): \Swagger\Client\Eve\Model\GetCorporationCorporationIdMiningObserversObserverId200Ok[]
```

Observed corporation mining

Paginated record of all mining seen by an observer  ---  This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Accountant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\IndustryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | An EVE corporation ID
$observer_id = 56; // int | A mining observer id
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$page = 1; // int | Which page of results to return
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCorporationCorporationIdMiningObserversObserverId($corporation_id, $observer_id, $datasource, $if_none_match, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->getCorporationCorporationIdMiningObserversObserverId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporation_id** | **int**| An EVE corporation ID |
 **observer_id** | **int**| A mining observer id |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **page** | **int**| Which page of results to return | [optional] [default to 1]
 **token** | **string**| Access token to use if unable to set a header | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationCorporationIdMiningObserversObserverId200Ok[]**](../Model/GetCorporationCorporationIdMiningObserversObserverId200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdIndustryJobs()`

```php
getCorporationsCorporationIdIndustryJobs($corporation_id, $datasource, $if_none_match, $include_completed, $page, $token): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdIndustryJobs200Ok[]
```

List corporation industry jobs

List industry jobs run by a corporation  ---  This route is cached for up to 300 seconds  --- Requires one of the following EVE corporation role(s): Factory_Manager

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\IndustryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | An EVE corporation ID
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$include_completed = false; // bool | Whether to retrieve completed corporation industry jobs. Only includes jobs from the past 90 days
$page = 1; // int | Which page of results to return
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCorporationsCorporationIdIndustryJobs($corporation_id, $datasource, $if_none_match, $include_completed, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->getCorporationsCorporationIdIndustryJobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporation_id** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **include_completed** | **bool**| Whether to retrieve completed corporation industry jobs. Only includes jobs from the past 90 days | [optional] [default to false]
 **page** | **int**| Which page of results to return | [optional] [default to 1]
 **token** | **string**| Access token to use if unable to set a header | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdIndustryJobs200Ok[]**](../Model/GetCorporationsCorporationIdIndustryJobs200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIndustryFacilities()`

```php
getIndustryFacilities($datasource, $if_none_match): \Swagger\Client\Eve\Model\GetIndustryFacilities200Ok[]
```

List industry facilities

Return a list of industry facilities  ---  This route is cached for up to 3600 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Swagger\Client\Eve\Api\IndustryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getIndustryFacilities($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->getIndustryFacilities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetIndustryFacilities200Ok[]**](../Model/GetIndustryFacilities200Ok.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIndustrySystems()`

```php
getIndustrySystems($datasource, $if_none_match): \Swagger\Client\Eve\Model\GetIndustrySystems200Ok[]
```

List solar system cost indices

Return cost indices for solar systems  ---  This route is cached for up to 3600 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Swagger\Client\Eve\Api\IndustryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getIndustrySystems($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->getIndustrySystems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetIndustrySystems200Ok[]**](../Model/GetIndustrySystems200Ok.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
