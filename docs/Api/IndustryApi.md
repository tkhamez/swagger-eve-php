# Swagger\Client\Eve\IndustryApi

All URIs are relative to *https://esi.evetech.net/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdIndustryJobs**](IndustryApi.md#getCharactersCharacterIdIndustryJobs) | **GET** /v1/characters/{character_id}/industry/jobs/ | List character industry jobs
[**getCharactersCharacterIdMining**](IndustryApi.md#getCharactersCharacterIdMining) | **GET** /v1/characters/{character_id}/mining/ | Character mining ledger
[**getCorporationCorporationIdMiningExtractions**](IndustryApi.md#getCorporationCorporationIdMiningExtractions) | **GET** /v1/corporation/{corporation_id}/mining/extractions/ | Moon extraction timers
[**getCorporationCorporationIdMiningObservers**](IndustryApi.md#getCorporationCorporationIdMiningObservers) | **GET** /v1/corporation/{corporation_id}/mining/observers/ | Corporation mining observers
[**getCorporationCorporationIdMiningObserversObserverId**](IndustryApi.md#getCorporationCorporationIdMiningObserversObserverId) | **GET** /v1/corporation/{corporation_id}/mining/observers/{observer_id}/ | Observed corporation mining
[**getCorporationsCorporationIdIndustryJobs**](IndustryApi.md#getCorporationsCorporationIdIndustryJobs) | **GET** /v1/corporations/{corporation_id}/industry/jobs/ | List corporation industry jobs
[**getIndustryFacilities**](IndustryApi.md#getIndustryFacilities) | **GET** /v1/industry/facilities/ | List industry facilities
[**getIndustrySystems**](IndustryApi.md#getIndustrySystems) | **GET** /v1/industry/systems/ | List solar system cost indices

# **getCharactersCharacterIdIndustryJobs**
> object[] getCharactersCharacterIdIndustryJobs($character_id, $datasource, $if_none_match, $include_completed, $token)

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
$datasource = "datasource_example"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$include_completed = True; // bool | Whether to retrieve completed character industry jobs. Only includes jobs from the past 90 days
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdIndustryJobs($character_id, $datasource, $if_none_match, $include_completed, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->getCharactersCharacterIdIndustryJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | [**int**](../Model/.md)| An EVE character ID |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **if_none_match** | [**string**](../Model/.md)| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **include_completed** | [**bool**](../Model/.md)| Whether to retrieve completed character industry jobs. Only includes jobs from the past 90 days | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

**object[]**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdMining**
> object[] getCharactersCharacterIdMining($character_id, $datasource, $if_none_match, $page, $token)

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
$datasource = "datasource_example"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$page = 56; // int | Which page of results to return
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdMining($character_id, $datasource, $if_none_match, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->getCharactersCharacterIdMining: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | [**int**](../Model/.md)| An EVE character ID |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **if_none_match** | [**string**](../Model/.md)| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **page** | [**int**](../Model/.md)| Which page of results to return | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

**object[]**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationCorporationIdMiningExtractions**
> object[] getCorporationCorporationIdMiningExtractions($corporation_id, $datasource, $if_none_match, $page, $token)

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
$datasource = "datasource_example"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$page = 56; // int | Which page of results to return
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCorporationCorporationIdMiningExtractions($corporation_id, $datasource, $if_none_match, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->getCorporationCorporationIdMiningExtractions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporation_id** | [**int**](../Model/.md)| An EVE corporation ID |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **if_none_match** | [**string**](../Model/.md)| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **page** | [**int**](../Model/.md)| Which page of results to return | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

**object[]**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationCorporationIdMiningObservers**
> object[] getCorporationCorporationIdMiningObservers($corporation_id, $datasource, $if_none_match, $page, $token)

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
$datasource = "datasource_example"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$page = 56; // int | Which page of results to return
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCorporationCorporationIdMiningObservers($corporation_id, $datasource, $if_none_match, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->getCorporationCorporationIdMiningObservers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporation_id** | [**int**](../Model/.md)| An EVE corporation ID |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **if_none_match** | [**string**](../Model/.md)| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **page** | [**int**](../Model/.md)| Which page of results to return | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

**object[]**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationCorporationIdMiningObserversObserverId**
> object[] getCorporationCorporationIdMiningObserversObserverId($corporation_id, $observer_id, $datasource, $if_none_match, $page, $token)

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
$datasource = "datasource_example"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$page = 56; // int | Which page of results to return
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCorporationCorporationIdMiningObserversObserverId($corporation_id, $observer_id, $datasource, $if_none_match, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->getCorporationCorporationIdMiningObserversObserverId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporation_id** | [**int**](../Model/.md)| An EVE corporation ID |
 **observer_id** | [**int**](../Model/.md)| A mining observer id |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **if_none_match** | [**string**](../Model/.md)| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **page** | [**int**](../Model/.md)| Which page of results to return | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

**object[]**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdIndustryJobs**
> object[] getCorporationsCorporationIdIndustryJobs($corporation_id, $datasource, $if_none_match, $include_completed, $page, $token)

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
$datasource = "datasource_example"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$include_completed = True; // bool | Whether to retrieve completed corporation industry jobs. Only includes jobs from the past 90 days
$page = 56; // int | Which page of results to return
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCorporationsCorporationIdIndustryJobs($corporation_id, $datasource, $if_none_match, $include_completed, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->getCorporationsCorporationIdIndustryJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporation_id** | [**int**](../Model/.md)| An EVE corporation ID |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **if_none_match** | [**string**](../Model/.md)| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **include_completed** | [**bool**](../Model/.md)| Whether to retrieve completed corporation industry jobs. Only includes jobs from the past 90 days | [optional]
 **page** | [**int**](../Model/.md)| Which page of results to return | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

**object[]**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIndustryFacilities**
> object[] getIndustryFacilities($datasource, $if_none_match)

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
$datasource = "datasource_example"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getIndustryFacilities($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->getIndustryFacilities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **getIndustrySystems**
> object[] getIndustrySystems($datasource, $if_none_match)

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
$datasource = "datasource_example"; // string | The server name you would like data from
$if_none_match = "if_none_match_example"; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getIndustrySystems($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->getIndustrySystems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

