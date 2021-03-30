# Swagger\Client\Eve\OpportunitiesApi

All URIs are relative to https://esi.evetech.net.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdOpportunities()**](OpportunitiesApi.md#getCharactersCharacterIdOpportunities) | **GET** /v1/characters/{character_id}/opportunities/ | Get a character&#39;s completed tasks
[**getOpportunitiesGroups()**](OpportunitiesApi.md#getOpportunitiesGroups) | **GET** /v1/opportunities/groups/ | Get opportunities groups
[**getOpportunitiesGroupsGroupId()**](OpportunitiesApi.md#getOpportunitiesGroupsGroupId) | **GET** /v1/opportunities/groups/{group_id}/ | Get opportunities group
[**getOpportunitiesTasks()**](OpportunitiesApi.md#getOpportunitiesTasks) | **GET** /v1/opportunities/tasks/ | Get opportunities tasks
[**getOpportunitiesTasksTaskId()**](OpportunitiesApi.md#getOpportunitiesTasksTaskId) | **GET** /v1/opportunities/tasks/{task_id}/ | Get opportunities task


## `getCharactersCharacterIdOpportunities()`

```php
getCharactersCharacterIdOpportunities($character_id, $datasource, $if_none_match, $token): \Swagger\Client\Eve\Model\GetCharactersCharacterIdOpportunities200Ok[]
```

Get a character's completed tasks

Return a list of tasks finished by a character  ---  This route is cached for up to 3600 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\OpportunitiesApi(
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
    $result = $apiInstance->getCharactersCharacterIdOpportunities($character_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getCharactersCharacterIdOpportunities: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Eve\Model\GetCharactersCharacterIdOpportunities200Ok[]**](../Model/GetCharactersCharacterIdOpportunities200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOpportunitiesGroups()`

```php
getOpportunitiesGroups($datasource, $if_none_match): int[]
```

Get opportunities groups

Return a list of opportunities groups  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Swagger\Client\Eve\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getOpportunitiesGroups($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getOpportunitiesGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

**int[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOpportunitiesGroupsGroupId()`

```php
getOpportunitiesGroupsGroupId($group_id, $accept_language, $datasource, $if_none_match, $language): \Swagger\Client\Eve\Model\GetOpportunitiesGroupsGroupIdOk
```

Get opportunities group

Return information of an opportunities group  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Swagger\Client\Eve\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 56; // int | ID of an opportunities group
$accept_language = 'en'; // string | Language to use in the response
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$language = 'en'; // string | Language to use in the response, takes precedence over Accept-Language

try {
    $result = $apiInstance->getOpportunitiesGroupsGroupId($group_id, $accept_language, $datasource, $if_none_match, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getOpportunitiesGroupsGroupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| ID of an opportunities group |
 **accept_language** | **string**| Language to use in the response | [optional] [default to &#39;en&#39;]
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **language** | **string**| Language to use in the response, takes precedence over Accept-Language | [optional] [default to &#39;en&#39;]

### Return type

[**\Swagger\Client\Eve\Model\GetOpportunitiesGroupsGroupIdOk**](../Model/GetOpportunitiesGroupsGroupIdOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOpportunitiesTasks()`

```php
getOpportunitiesTasks($datasource, $if_none_match): int[]
```

Get opportunities tasks

Return a list of opportunities tasks  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Swagger\Client\Eve\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getOpportunitiesTasks($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getOpportunitiesTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

**int[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOpportunitiesTasksTaskId()`

```php
getOpportunitiesTasksTaskId($task_id, $datasource, $if_none_match): \Swagger\Client\Eve\Model\GetOpportunitiesTasksTaskIdOk
```

Get opportunities task

Return information of an opportunities task  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Swagger\Client\Eve\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task_id = 56; // int | ID of an opportunities task
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getOpportunitiesTasksTaskId($task_id, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getOpportunitiesTasksTaskId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **int**| ID of an opportunities task |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetOpportunitiesTasksTaskIdOk**](../Model/GetOpportunitiesTasksTaskIdOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
