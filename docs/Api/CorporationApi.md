# Swagger\Client\Eve\CorporationApi

All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCorporationsCorporationId()**](CorporationApi.md#getCorporationsCorporationId) | **GET** /v5/corporations/{corporation_id}/ | Get corporation information |
| [**getCorporationsCorporationIdAlliancehistory()**](CorporationApi.md#getCorporationsCorporationIdAlliancehistory) | **GET** /v3/corporations/{corporation_id}/alliancehistory/ | Get alliance history |
| [**getCorporationsCorporationIdBlueprints()**](CorporationApi.md#getCorporationsCorporationIdBlueprints) | **GET** /v3/corporations/{corporation_id}/blueprints/ | Get corporation blueprints |
| [**getCorporationsCorporationIdContainersLogs()**](CorporationApi.md#getCorporationsCorporationIdContainersLogs) | **GET** /v3/corporations/{corporation_id}/containers/logs/ | Get all corporation ALSC logs |
| [**getCorporationsCorporationIdDivisions()**](CorporationApi.md#getCorporationsCorporationIdDivisions) | **GET** /v2/corporations/{corporation_id}/divisions/ | Get corporation divisions |
| [**getCorporationsCorporationIdFacilities()**](CorporationApi.md#getCorporationsCorporationIdFacilities) | **GET** /v2/corporations/{corporation_id}/facilities/ | Get corporation facilities |
| [**getCorporationsCorporationIdIcons()**](CorporationApi.md#getCorporationsCorporationIdIcons) | **GET** /v1/corporations/{corporation_id}/icons/ | Get corporation icon |
| [**getCorporationsCorporationIdMedals()**](CorporationApi.md#getCorporationsCorporationIdMedals) | **GET** /v2/corporations/{corporation_id}/medals/ | Get corporation medals |
| [**getCorporationsCorporationIdMedalsIssued()**](CorporationApi.md#getCorporationsCorporationIdMedalsIssued) | **GET** /v2/corporations/{corporation_id}/medals/issued/ | Get corporation issued medals |
| [**getCorporationsCorporationIdMembers()**](CorporationApi.md#getCorporationsCorporationIdMembers) | **GET** /v4/corporations/{corporation_id}/members/ | Get corporation members |
| [**getCorporationsCorporationIdMembersLimit()**](CorporationApi.md#getCorporationsCorporationIdMembersLimit) | **GET** /v2/corporations/{corporation_id}/members/limit/ | Get corporation member limit |
| [**getCorporationsCorporationIdMembersTitles()**](CorporationApi.md#getCorporationsCorporationIdMembersTitles) | **GET** /v2/corporations/{corporation_id}/members/titles/ | Get corporation&#39;s members&#39; titles |
| [**getCorporationsCorporationIdMembertracking()**](CorporationApi.md#getCorporationsCorporationIdMembertracking) | **GET** /v2/corporations/{corporation_id}/membertracking/ | Track corporation members |
| [**getCorporationsCorporationIdRoles()**](CorporationApi.md#getCorporationsCorporationIdRoles) | **GET** /v2/corporations/{corporation_id}/roles/ | Get corporation member roles |
| [**getCorporationsCorporationIdRolesHistory()**](CorporationApi.md#getCorporationsCorporationIdRolesHistory) | **GET** /v2/corporations/{corporation_id}/roles/history/ | Get corporation member roles history |
| [**getCorporationsCorporationIdShareholders()**](CorporationApi.md#getCorporationsCorporationIdShareholders) | **GET** /v1/corporations/{corporation_id}/shareholders/ | Get corporation shareholders |
| [**getCorporationsCorporationIdStandings()**](CorporationApi.md#getCorporationsCorporationIdStandings) | **GET** /v2/corporations/{corporation_id}/standings/ | Get corporation standings |
| [**getCorporationsCorporationIdStarbases()**](CorporationApi.md#getCorporationsCorporationIdStarbases) | **GET** /v2/corporations/{corporation_id}/starbases/ | Get corporation starbases (POSes) |
| [**getCorporationsCorporationIdStarbasesStarbaseId()**](CorporationApi.md#getCorporationsCorporationIdStarbasesStarbaseId) | **GET** /v2/corporations/{corporation_id}/starbases/{starbase_id}/ | Get starbase (POS) detail |
| [**getCorporationsCorporationIdStructures()**](CorporationApi.md#getCorporationsCorporationIdStructures) | **GET** /v4/corporations/{corporation_id}/structures/ | Get corporation structures |
| [**getCorporationsCorporationIdTitles()**](CorporationApi.md#getCorporationsCorporationIdTitles) | **GET** /v2/corporations/{corporation_id}/titles/ | Get corporation titles |
| [**getCorporationsNpccorps()**](CorporationApi.md#getCorporationsNpccorps) | **GET** /v2/corporations/npccorps/ | Get npc corporations |


## `getCorporationsCorporationId()`

```php
getCorporationsCorporationId($corporation_id, $datasource, $if_none_match): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdOk
```

Get corporation information

Public information about a corporation  ---  This route is cached for up to 3600 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Swagger\Client\Eve\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$corporation_id = 56; // int | An EVE corporation ID
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getCorporationsCorporationId($corporation_id, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| An EVE corporation ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdOk**](../Model/GetCorporationsCorporationIdOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdAlliancehistory()`

```php
getCorporationsCorporationIdAlliancehistory($corporation_id, $datasource, $if_none_match): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdAlliancehistory200Ok[]
```

Get alliance history

Get a list of all the alliances a corporation has been a member of  ---  This route is cached for up to 3600 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Swagger\Client\Eve\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$corporation_id = 56; // int | An EVE corporation ID
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getCorporationsCorporationIdAlliancehistory($corporation_id, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdAlliancehistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| An EVE corporation ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdAlliancehistory200Ok[]**](../Model/GetCorporationsCorporationIdAlliancehistory200Ok.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdBlueprints()`

```php
getCorporationsCorporationIdBlueprints($corporation_id, $datasource, $if_none_match, $page, $token): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdBlueprints200Ok[]
```

Get corporation blueprints

Returns a list of blueprints the corporation owns  ---  This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdBlueprints($corporation_id, $datasource, $if_none_match, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdBlueprints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| An EVE corporation ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **page** | **int**| Which page of results to return | [optional] [default to 1] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdBlueprints200Ok[]**](../Model/GetCorporationsCorporationIdBlueprints200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdContainersLogs()`

```php
getCorporationsCorporationIdContainersLogs($corporation_id, $datasource, $if_none_match, $page, $token): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdContainersLogs200Ok[]
```

Get all corporation ALSC logs

Returns logs recorded in the past seven days from all audit log secure containers (ALSC) owned by a given corporation  ---  This route is cached for up to 600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdContainersLogs($corporation_id, $datasource, $if_none_match, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdContainersLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| An EVE corporation ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **page** | **int**| Which page of results to return | [optional] [default to 1] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdContainersLogs200Ok[]**](../Model/GetCorporationsCorporationIdContainersLogs200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdDivisions()`

```php
getCorporationsCorporationIdDivisions($corporation_id, $datasource, $if_none_match, $token): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdDivisionsOk
```

Get corporation divisions

Return corporation hangar and wallet division names, only show if a division is not using the default name  ---  This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdDivisions($corporation_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdDivisions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| An EVE corporation ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdDivisionsOk**](../Model/GetCorporationsCorporationIdDivisionsOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdFacilities()`

```php
getCorporationsCorporationIdFacilities($corporation_id, $datasource, $if_none_match, $token): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdFacilities200Ok[]
```

Get corporation facilities

Return a corporation's facilities  ---  This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Factory_Manager

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdFacilities($corporation_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdFacilities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| An EVE corporation ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdFacilities200Ok[]**](../Model/GetCorporationsCorporationIdFacilities200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdIcons()`

```php
getCorporationsCorporationIdIcons($corporation_id, $datasource, $if_none_match): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdIconsOk
```

Get corporation icon

Get the icon urls for a corporation  ---  This route is cached for up to 3600 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Swagger\Client\Eve\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$corporation_id = 56; // int | An EVE corporation ID
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getCorporationsCorporationIdIcons($corporation_id, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdIcons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| An EVE corporation ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdIconsOk**](../Model/GetCorporationsCorporationIdIconsOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdMedals()`

```php
getCorporationsCorporationIdMedals($corporation_id, $datasource, $if_none_match, $page, $token): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdMedals200Ok[]
```

Get corporation medals

Returns a corporation's medals  ---  This route is cached for up to 3600 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdMedals($corporation_id, $datasource, $if_none_match, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdMedals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| An EVE corporation ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **page** | **int**| Which page of results to return | [optional] [default to 1] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdMedals200Ok[]**](../Model/GetCorporationsCorporationIdMedals200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdMedalsIssued()`

```php
getCorporationsCorporationIdMedalsIssued($corporation_id, $datasource, $if_none_match, $page, $token): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdMedalsIssued200Ok[]
```

Get corporation issued medals

Returns medals issued by a corporation  ---  This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdMedalsIssued($corporation_id, $datasource, $if_none_match, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdMedalsIssued: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| An EVE corporation ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **page** | **int**| Which page of results to return | [optional] [default to 1] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdMedalsIssued200Ok[]**](../Model/GetCorporationsCorporationIdMedalsIssued200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdMembers()`

```php
getCorporationsCorporationIdMembers($corporation_id, $datasource, $if_none_match, $token): int[]
```

Get corporation members

Return the current member list of a corporation, the token's character need to be a member of the corporation.  ---  This route is cached for up to 3600 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdMembers($corporation_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| An EVE corporation ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

**int[]**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdMembersLimit()`

```php
getCorporationsCorporationIdMembersLimit($corporation_id, $datasource, $if_none_match, $token): int
```

Get corporation member limit

Return a corporation's member limit, not including CEO himself  ---  This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdMembersLimit($corporation_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdMembersLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| An EVE corporation ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

**int**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdMembersTitles()`

```php
getCorporationsCorporationIdMembersTitles($corporation_id, $datasource, $if_none_match, $token): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdMembersTitles200Ok[]
```

Get corporation's members' titles

Returns a corporation's members' titles  ---  This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdMembersTitles($corporation_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdMembersTitles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| An EVE corporation ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdMembersTitles200Ok[]**](../Model/GetCorporationsCorporationIdMembersTitles200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdMembertracking()`

```php
getCorporationsCorporationIdMembertracking($corporation_id, $datasource, $if_none_match, $token): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdMembertracking200Ok[]
```

Track corporation members

Returns additional information about a corporation's members which helps tracking their activities  ---  This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdMembertracking($corporation_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdMembertracking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| An EVE corporation ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdMembertracking200Ok[]**](../Model/GetCorporationsCorporationIdMembertracking200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdRoles()`

```php
getCorporationsCorporationIdRoles($corporation_id, $datasource, $if_none_match, $token): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdRoles200Ok[]
```

Get corporation member roles

Return the roles of all members if the character has the personnel manager role or any grantable role.  ---  This route is cached for up to 3600 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdRoles($corporation_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| An EVE corporation ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdRoles200Ok[]**](../Model/GetCorporationsCorporationIdRoles200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdRolesHistory()`

```php
getCorporationsCorporationIdRolesHistory($corporation_id, $datasource, $if_none_match, $page, $token): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdRolesHistory200Ok[]
```

Get corporation member roles history

Return how roles have changed for a coporation's members, up to a month  ---  This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdRolesHistory($corporation_id, $datasource, $if_none_match, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdRolesHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| An EVE corporation ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **page** | **int**| Which page of results to return | [optional] [default to 1] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdRolesHistory200Ok[]**](../Model/GetCorporationsCorporationIdRolesHistory200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdShareholders()`

```php
getCorporationsCorporationIdShareholders($corporation_id, $datasource, $if_none_match, $page, $token): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdShareholders200Ok[]
```

Get corporation shareholders

Return the current shareholders of a corporation.  ---  This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdShareholders($corporation_id, $datasource, $if_none_match, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdShareholders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| An EVE corporation ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **page** | **int**| Which page of results to return | [optional] [default to 1] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdShareholders200Ok[]**](../Model/GetCorporationsCorporationIdShareholders200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdStandings()`

```php
getCorporationsCorporationIdStandings($corporation_id, $datasource, $if_none_match, $page, $token): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdStandings200Ok[]
```

Get corporation standings

Return corporation standings from agents, NPC corporations, and factions  ---  This route is cached for up to 3600 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdStandings($corporation_id, $datasource, $if_none_match, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdStandings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| An EVE corporation ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **page** | **int**| Which page of results to return | [optional] [default to 1] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdStandings200Ok[]**](../Model/GetCorporationsCorporationIdStandings200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdStarbases()`

```php
getCorporationsCorporationIdStarbases($corporation_id, $datasource, $if_none_match, $page, $token): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdStarbases200Ok[]
```

Get corporation starbases (POSes)

Returns list of corporation starbases (POSes)  ---  This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdStarbases($corporation_id, $datasource, $if_none_match, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdStarbases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| An EVE corporation ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **page** | **int**| Which page of results to return | [optional] [default to 1] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdStarbases200Ok[]**](../Model/GetCorporationsCorporationIdStarbases200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdStarbasesStarbaseId()`

```php
getCorporationsCorporationIdStarbasesStarbaseId($corporation_id, $starbase_id, $system_id, $datasource, $if_none_match, $token): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdStarbasesStarbaseIdOk
```

Get starbase (POS) detail

Returns various settings and fuels of a starbase (POS)  ---  This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | An EVE corporation ID
$starbase_id = 56; // int | An EVE starbase (POS) ID
$system_id = 56; // int | The solar system this starbase (POS) is located in,
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCorporationsCorporationIdStarbasesStarbaseId($corporation_id, $starbase_id, $system_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdStarbasesStarbaseId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| An EVE corporation ID | |
| **starbase_id** | **int**| An EVE starbase (POS) ID | |
| **system_id** | **int**| The solar system this starbase (POS) is located in, | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdStarbasesStarbaseIdOk**](../Model/GetCorporationsCorporationIdStarbasesStarbaseIdOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdStructures()`

```php
getCorporationsCorporationIdStructures($corporation_id, $accept_language, $datasource, $if_none_match, $language, $page, $token): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdStructures200Ok[]
```

Get corporation structures

Get a list of corporation structures. This route's version includes the changes to structures detailed in this blog: https://www.eveonline.com/article/upwell-2.0-structures-changes-coming-on-february-13th  ---  This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Station_Manager

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | An EVE corporation ID
$accept_language = 'en'; // string | Language to use in the response
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$language = 'en'; // string | Language to use in the response, takes precedence over Accept-Language
$page = 1; // int | Which page of results to return
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCorporationsCorporationIdStructures($corporation_id, $accept_language, $datasource, $if_none_match, $language, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdStructures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| An EVE corporation ID | |
| **accept_language** | **string**| Language to use in the response | [optional] [default to &#39;en&#39;] |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **language** | **string**| Language to use in the response, takes precedence over Accept-Language | [optional] [default to &#39;en&#39;] |
| **page** | **int**| Which page of results to return | [optional] [default to 1] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdStructures200Ok[]**](../Model/GetCorporationsCorporationIdStructures200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdTitles()`

```php
getCorporationsCorporationIdTitles($corporation_id, $datasource, $if_none_match, $token): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdTitles200Ok[]
```

Get corporation titles

Returns a corporation's titles  ---  This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdTitles($corporation_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdTitles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| An EVE corporation ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdTitles200Ok[]**](../Model/GetCorporationsCorporationIdTitles200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsNpccorps()`

```php
getCorporationsNpccorps($datasource, $if_none_match): int[]
```

Get npc corporations

Get a list of npc corporations  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Swagger\Client\Eve\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getCorporationsNpccorps($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsNpccorps: ', $e->getMessage(), PHP_EOL;
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
