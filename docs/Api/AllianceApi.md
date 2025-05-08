# Swagger\Client\Eve\AllianceApi

All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAlliances()**](AllianceApi.md#getAlliances) | **GET** /v1/alliances/ | List all alliances |
| [**getAlliancesAllianceId()**](AllianceApi.md#getAlliancesAllianceId) | **GET** /v3/alliances/{alliance_id}/ | Get alliance information |
| [**getAlliancesAllianceIdCorporations()**](AllianceApi.md#getAlliancesAllianceIdCorporations) | **GET** /v1/alliances/{alliance_id}/corporations/ | List alliance&#39;s corporations |
| [**getAlliancesAllianceIdIcons()**](AllianceApi.md#getAlliancesAllianceIdIcons) | **GET** /v1/alliances/{alliance_id}/icons/ | Get alliance icon |


## `getAlliances()`

```php
getAlliances($datasource, $if_none_match): int[]
```

List all alliances

List all active player alliances  ---  This route is cached for up to 3600 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Swagger\Client\Eve\Api\AllianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getAlliances($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllianceApi->getAlliances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |

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

## `getAlliancesAllianceId()`

```php
getAlliancesAllianceId($alliance_id, $datasource, $if_none_match): \Swagger\Client\Eve\Model\GetAlliancesAllianceIdOk
```

Get alliance information

Public information about an alliance  ---  This route is cached for up to 3600 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Swagger\Client\Eve\Api\AllianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$alliance_id = 56; // int | An EVE alliance ID
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getAlliancesAllianceId($alliance_id, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllianceApi->getAlliancesAllianceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **alliance_id** | **int**| An EVE alliance ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetAlliancesAllianceIdOk**](../Model/GetAlliancesAllianceIdOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAlliancesAllianceIdCorporations()`

```php
getAlliancesAllianceIdCorporations($alliance_id, $datasource, $if_none_match): int[]
```

List alliance's corporations

List all current member corporations of an alliance  ---  This route is cached for up to 3600 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Swagger\Client\Eve\Api\AllianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$alliance_id = 56; // int | An EVE alliance ID
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getAlliancesAllianceIdCorporations($alliance_id, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllianceApi->getAlliancesAllianceIdCorporations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **alliance_id** | **int**| An EVE alliance ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |

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

## `getAlliancesAllianceIdIcons()`

```php
getAlliancesAllianceIdIcons($alliance_id, $datasource, $if_none_match): \Swagger\Client\Eve\Model\GetAlliancesAllianceIdIconsOk
```

Get alliance icon

Get the icon urls for a alliance  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Swagger\Client\Eve\Api\AllianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$alliance_id = 56; // int | An EVE alliance ID
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getAlliancesAllianceIdIcons($alliance_id, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllianceApi->getAlliancesAllianceIdIcons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **alliance_id** | **int**| An EVE alliance ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetAlliancesAllianceIdIconsOk**](../Model/GetAlliancesAllianceIdIconsOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
