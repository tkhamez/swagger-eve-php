# Swagger\Client\Eve\UniverseApi

All URIs are relative to *https://esi.evetech.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUniverseAncestries**](UniverseApi.md#getUniverseAncestries) | **GET** /v1/universe/ancestries/ | Get ancestries
[**getUniverseAsteroidBeltsAsteroidBeltId**](UniverseApi.md#getUniverseAsteroidBeltsAsteroidBeltId) | **GET** /v1/universe/asteroid_belts/{asteroid_belt_id}/ | Get asteroid belt information
[**getUniverseBloodlines**](UniverseApi.md#getUniverseBloodlines) | **GET** /v1/universe/bloodlines/ | Get bloodlines
[**getUniverseCategories**](UniverseApi.md#getUniverseCategories) | **GET** /v1/universe/categories/ | Get item categories
[**getUniverseCategoriesCategoryId**](UniverseApi.md#getUniverseCategoriesCategoryId) | **GET** /v1/universe/categories/{category_id}/ | Get item category information
[**getUniverseConstellations**](UniverseApi.md#getUniverseConstellations) | **GET** /v1/universe/constellations/ | Get constellations
[**getUniverseConstellationsConstellationId**](UniverseApi.md#getUniverseConstellationsConstellationId) | **GET** /v1/universe/constellations/{constellation_id}/ | Get constellation information
[**getUniverseFactions**](UniverseApi.md#getUniverseFactions) | **GET** /v2/universe/factions/ | Get factions
[**getUniverseGraphics**](UniverseApi.md#getUniverseGraphics) | **GET** /v1/universe/graphics/ | Get graphics
[**getUniverseGraphicsGraphicId**](UniverseApi.md#getUniverseGraphicsGraphicId) | **GET** /v1/universe/graphics/{graphic_id}/ | Get graphic information
[**getUniverseGroups**](UniverseApi.md#getUniverseGroups) | **GET** /v1/universe/groups/ | Get item groups
[**getUniverseGroupsGroupId**](UniverseApi.md#getUniverseGroupsGroupId) | **GET** /v1/universe/groups/{group_id}/ | Get item group information
[**getUniverseMoonsMoonId**](UniverseApi.md#getUniverseMoonsMoonId) | **GET** /v1/universe/moons/{moon_id}/ | Get moon information
[**getUniversePlanetsPlanetId**](UniverseApi.md#getUniversePlanetsPlanetId) | **GET** /v1/universe/planets/{planet_id}/ | Get planet information
[**getUniverseRaces**](UniverseApi.md#getUniverseRaces) | **GET** /v1/universe/races/ | Get character races
[**getUniverseRegions**](UniverseApi.md#getUniverseRegions) | **GET** /v1/universe/regions/ | Get regions
[**getUniverseRegionsRegionId**](UniverseApi.md#getUniverseRegionsRegionId) | **GET** /v1/universe/regions/{region_id}/ | Get region information
[**getUniverseStargatesStargateId**](UniverseApi.md#getUniverseStargatesStargateId) | **GET** /v1/universe/stargates/{stargate_id}/ | Get stargate information
[**getUniverseStarsStarId**](UniverseApi.md#getUniverseStarsStarId) | **GET** /v1/universe/stars/{star_id}/ | Get star information
[**getUniverseStationsStationId**](UniverseApi.md#getUniverseStationsStationId) | **GET** /v2/universe/stations/{station_id}/ | Get station information
[**getUniverseStructures**](UniverseApi.md#getUniverseStructures) | **GET** /v1/universe/structures/ | List all public structures
[**getUniverseStructuresStructureId**](UniverseApi.md#getUniverseStructuresStructureId) | **GET** /v2/universe/structures/{structure_id}/ | Get structure information
[**getUniverseSystemJumps**](UniverseApi.md#getUniverseSystemJumps) | **GET** /v1/universe/system_jumps/ | Get system jumps
[**getUniverseSystemKills**](UniverseApi.md#getUniverseSystemKills) | **GET** /v2/universe/system_kills/ | Get system kills
[**getUniverseSystems**](UniverseApi.md#getUniverseSystems) | **GET** /v1/universe/systems/ | Get solar systems
[**getUniverseSystemsSystemId**](UniverseApi.md#getUniverseSystemsSystemId) | **GET** /v4/universe/systems/{system_id}/ | Get solar system information
[**getUniverseTypes**](UniverseApi.md#getUniverseTypes) | **GET** /v1/universe/types/ | Get types
[**getUniverseTypesTypeId**](UniverseApi.md#getUniverseTypesTypeId) | **GET** /v3/universe/types/{type_id}/ | Get type information
[**postUniverseIds**](UniverseApi.md#postUniverseIds) | **POST** /v1/universe/ids/ | Bulk names to IDs
[**postUniverseNames**](UniverseApi.md#postUniverseNames) | **POST** /v3/universe/names/ | Get names and categories for a set of IDs



## getUniverseAncestries

> \Swagger\Client\Eve\Model\GetUniverseAncestries200Ok[] getUniverseAncestries($accept_language, $datasource, $if_none_match, $language)

Get ancestries

Get all character ancestries  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = 'en'; // string | Language to use in the response
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$language = 'en'; // string | Language to use in the response, takes precedence over Accept-Language

try {
    $result = $apiInstance->getUniverseAncestries($accept_language, $datasource, $if_none_match, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseAncestries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| Language to use in the response | [optional] [default to &#39;en&#39;]
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **language** | **string**| Language to use in the response, takes precedence over Accept-Language | [optional] [default to &#39;en&#39;]

### Return type

[**\Swagger\Client\Eve\Model\GetUniverseAncestries200Ok[]**](../Model/GetUniverseAncestries200Ok.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseAsteroidBeltsAsteroidBeltId

> \Swagger\Client\Eve\Model\GetUniverseAsteroidBeltsAsteroidBeltIdOk getUniverseAsteroidBeltsAsteroidBeltId($asteroid_belt_id, $datasource, $if_none_match)

Get asteroid belt information

Get information on an asteroid belt  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asteroid_belt_id = 56; // int | asteroid_belt_id integer
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getUniverseAsteroidBeltsAsteroidBeltId($asteroid_belt_id, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseAsteroidBeltsAsteroidBeltId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asteroid_belt_id** | **int**| asteroid_belt_id integer |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetUniverseAsteroidBeltsAsteroidBeltIdOk**](../Model/GetUniverseAsteroidBeltsAsteroidBeltIdOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseBloodlines

> \Swagger\Client\Eve\Model\GetUniverseBloodlines200Ok[] getUniverseBloodlines($accept_language, $datasource, $if_none_match, $language)

Get bloodlines

Get a list of bloodlines  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = 'en'; // string | Language to use in the response
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$language = 'en'; // string | Language to use in the response, takes precedence over Accept-Language

try {
    $result = $apiInstance->getUniverseBloodlines($accept_language, $datasource, $if_none_match, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseBloodlines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| Language to use in the response | [optional] [default to &#39;en&#39;]
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **language** | **string**| Language to use in the response, takes precedence over Accept-Language | [optional] [default to &#39;en&#39;]

### Return type

[**\Swagger\Client\Eve\Model\GetUniverseBloodlines200Ok[]**](../Model/GetUniverseBloodlines200Ok.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseCategories

> int[] getUniverseCategories($datasource, $if_none_match)

Get item categories

Get a list of item categories  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getUniverseCategories($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseCategories: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseCategoriesCategoryId

> \Swagger\Client\Eve\Model\GetUniverseCategoriesCategoryIdOk getUniverseCategoriesCategoryId($category_id, $accept_language, $datasource, $if_none_match, $language)

Get item category information

Get information of an item category  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category_id = 56; // int | An Eve item category ID
$accept_language = 'en'; // string | Language to use in the response
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$language = 'en'; // string | Language to use in the response, takes precedence over Accept-Language

try {
    $result = $apiInstance->getUniverseCategoriesCategoryId($category_id, $accept_language, $datasource, $if_none_match, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseCategoriesCategoryId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**| An Eve item category ID |
 **accept_language** | **string**| Language to use in the response | [optional] [default to &#39;en&#39;]
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **language** | **string**| Language to use in the response, takes precedence over Accept-Language | [optional] [default to &#39;en&#39;]

### Return type

[**\Swagger\Client\Eve\Model\GetUniverseCategoriesCategoryIdOk**](../Model/GetUniverseCategoriesCategoryIdOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseConstellations

> int[] getUniverseConstellations($datasource, $if_none_match)

Get constellations

Get a list of constellations  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getUniverseConstellations($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseConstellations: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseConstellationsConstellationId

> \Swagger\Client\Eve\Model\GetUniverseConstellationsConstellationIdOk getUniverseConstellationsConstellationId($constellation_id, $accept_language, $datasource, $if_none_match, $language)

Get constellation information

Get information on a constellation  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$constellation_id = 56; // int | constellation_id integer
$accept_language = 'en'; // string | Language to use in the response
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$language = 'en'; // string | Language to use in the response, takes precedence over Accept-Language

try {
    $result = $apiInstance->getUniverseConstellationsConstellationId($constellation_id, $accept_language, $datasource, $if_none_match, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseConstellationsConstellationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constellation_id** | **int**| constellation_id integer |
 **accept_language** | **string**| Language to use in the response | [optional] [default to &#39;en&#39;]
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **language** | **string**| Language to use in the response, takes precedence over Accept-Language | [optional] [default to &#39;en&#39;]

### Return type

[**\Swagger\Client\Eve\Model\GetUniverseConstellationsConstellationIdOk**](../Model/GetUniverseConstellationsConstellationIdOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseFactions

> \Swagger\Client\Eve\Model\GetUniverseFactions200Ok[] getUniverseFactions($accept_language, $datasource, $if_none_match, $language)

Get factions

Get a list of factions  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = 'en'; // string | Language to use in the response
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$language = 'en'; // string | Language to use in the response, takes precedence over Accept-Language

try {
    $result = $apiInstance->getUniverseFactions($accept_language, $datasource, $if_none_match, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseFactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| Language to use in the response | [optional] [default to &#39;en&#39;]
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **language** | **string**| Language to use in the response, takes precedence over Accept-Language | [optional] [default to &#39;en&#39;]

### Return type

[**\Swagger\Client\Eve\Model\GetUniverseFactions200Ok[]**](../Model/GetUniverseFactions200Ok.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseGraphics

> int[] getUniverseGraphics($datasource, $if_none_match)

Get graphics

Get a list of graphics  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getUniverseGraphics($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseGraphics: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseGraphicsGraphicId

> \Swagger\Client\Eve\Model\GetUniverseGraphicsGraphicIdOk getUniverseGraphicsGraphicId($graphic_id, $datasource, $if_none_match)

Get graphic information

Get information on a graphic  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$graphic_id = 56; // int | graphic_id integer
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getUniverseGraphicsGraphicId($graphic_id, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseGraphicsGraphicId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **graphic_id** | **int**| graphic_id integer |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetUniverseGraphicsGraphicIdOk**](../Model/GetUniverseGraphicsGraphicIdOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseGroups

> int[] getUniverseGroups($datasource, $if_none_match, $page)

Get item groups

Get a list of item groups  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$page = 1; // int | Which page of results to return

try {
    $result = $apiInstance->getUniverseGroups($datasource, $if_none_match, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **page** | **int**| Which page of results to return | [optional] [default to 1]

### Return type

**int[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseGroupsGroupId

> \Swagger\Client\Eve\Model\GetUniverseGroupsGroupIdOk getUniverseGroupsGroupId($group_id, $accept_language, $datasource, $if_none_match, $language)

Get item group information

Get information on an item group  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 56; // int | An Eve item group ID
$accept_language = 'en'; // string | Language to use in the response
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$language = 'en'; // string | Language to use in the response, takes precedence over Accept-Language

try {
    $result = $apiInstance->getUniverseGroupsGroupId($group_id, $accept_language, $datasource, $if_none_match, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseGroupsGroupId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| An Eve item group ID |
 **accept_language** | **string**| Language to use in the response | [optional] [default to &#39;en&#39;]
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **language** | **string**| Language to use in the response, takes precedence over Accept-Language | [optional] [default to &#39;en&#39;]

### Return type

[**\Swagger\Client\Eve\Model\GetUniverseGroupsGroupIdOk**](../Model/GetUniverseGroupsGroupIdOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseMoonsMoonId

> \Swagger\Client\Eve\Model\GetUniverseMoonsMoonIdOk getUniverseMoonsMoonId($moon_id, $datasource, $if_none_match)

Get moon information

Get information on a moon  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$moon_id = 56; // int | moon_id integer
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getUniverseMoonsMoonId($moon_id, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseMoonsMoonId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **moon_id** | **int**| moon_id integer |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetUniverseMoonsMoonIdOk**](../Model/GetUniverseMoonsMoonIdOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniversePlanetsPlanetId

> \Swagger\Client\Eve\Model\GetUniversePlanetsPlanetIdOk getUniversePlanetsPlanetId($planet_id, $datasource, $if_none_match)

Get planet information

Get information on a planet  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$planet_id = 56; // int | planet_id integer
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getUniversePlanetsPlanetId($planet_id, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniversePlanetsPlanetId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **planet_id** | **int**| planet_id integer |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetUniversePlanetsPlanetIdOk**](../Model/GetUniversePlanetsPlanetIdOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseRaces

> \Swagger\Client\Eve\Model\GetUniverseRaces200Ok[] getUniverseRaces($accept_language, $datasource, $if_none_match, $language)

Get character races

Get a list of character races  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = 'en'; // string | Language to use in the response
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$language = 'en'; // string | Language to use in the response, takes precedence over Accept-Language

try {
    $result = $apiInstance->getUniverseRaces($accept_language, $datasource, $if_none_match, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseRaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| Language to use in the response | [optional] [default to &#39;en&#39;]
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **language** | **string**| Language to use in the response, takes precedence over Accept-Language | [optional] [default to &#39;en&#39;]

### Return type

[**\Swagger\Client\Eve\Model\GetUniverseRaces200Ok[]**](../Model/GetUniverseRaces200Ok.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseRegions

> int[] getUniverseRegions($datasource, $if_none_match)

Get regions

Get a list of regions  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getUniverseRegions($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseRegions: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseRegionsRegionId

> \Swagger\Client\Eve\Model\GetUniverseRegionsRegionIdOk getUniverseRegionsRegionId($region_id, $accept_language, $datasource, $if_none_match, $language)

Get region information

Get information on a region  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$region_id = 56; // int | region_id integer
$accept_language = 'en'; // string | Language to use in the response
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$language = 'en'; // string | Language to use in the response, takes precedence over Accept-Language

try {
    $result = $apiInstance->getUniverseRegionsRegionId($region_id, $accept_language, $datasource, $if_none_match, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseRegionsRegionId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **region_id** | **int**| region_id integer |
 **accept_language** | **string**| Language to use in the response | [optional] [default to &#39;en&#39;]
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **language** | **string**| Language to use in the response, takes precedence over Accept-Language | [optional] [default to &#39;en&#39;]

### Return type

[**\Swagger\Client\Eve\Model\GetUniverseRegionsRegionIdOk**](../Model/GetUniverseRegionsRegionIdOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseStargatesStargateId

> \Swagger\Client\Eve\Model\GetUniverseStargatesStargateIdOk getUniverseStargatesStargateId($stargate_id, $datasource, $if_none_match)

Get stargate information

Get information on a stargate  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stargate_id = 56; // int | stargate_id integer
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getUniverseStargatesStargateId($stargate_id, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseStargatesStargateId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stargate_id** | **int**| stargate_id integer |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetUniverseStargatesStargateIdOk**](../Model/GetUniverseStargatesStargateIdOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseStarsStarId

> \Swagger\Client\Eve\Model\GetUniverseStarsStarIdOk getUniverseStarsStarId($star_id, $datasource, $if_none_match)

Get star information

Get information on a star  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$star_id = 56; // int | star_id integer
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getUniverseStarsStarId($star_id, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseStarsStarId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **star_id** | **int**| star_id integer |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetUniverseStarsStarIdOk**](../Model/GetUniverseStarsStarIdOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseStationsStationId

> \Swagger\Client\Eve\Model\GetUniverseStationsStationIdOk getUniverseStationsStationId($station_id, $datasource, $if_none_match)

Get station information

Get information on a station  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$station_id = 56; // int | station_id integer
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getUniverseStationsStationId($station_id, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseStationsStationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **station_id** | **int**| station_id integer |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetUniverseStationsStationIdOk**](../Model/GetUniverseStationsStationIdOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseStructures

> int[] getUniverseStructures($datasource, $filter, $if_none_match)

List all public structures

List all public structures  ---  This route is cached for up to 3600 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$filter = 'filter_example'; // string | Only list public structures that have this service online
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getUniverseStructures($datasource, $filter, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseStructures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **filter** | **string**| Only list public structures that have this service online | [optional]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

**int[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseStructuresStructureId

> \Swagger\Client\Eve\Model\GetUniverseStructuresStructureIdOk getUniverseStructuresStructureId($structure_id, $datasource, $if_none_match, $token)

Get structure information

Returns information on requested structure if you are on the ACL. Otherwise, returns \"Forbidden\" for all inputs.  ---  This route is cached for up to 3600 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$structure_id = 56; // int | An Eve structure ID
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getUniverseStructuresStructureId($structure_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseStructuresStructureId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **structure_id** | **int**| An Eve structure ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **token** | **string**| Access token to use if unable to set a header | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetUniverseStructuresStructureIdOk**](../Model/GetUniverseStructuresStructureIdOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseSystemJumps

> \Swagger\Client\Eve\Model\GetUniverseSystemJumps200Ok[] getUniverseSystemJumps($datasource, $if_none_match)

Get system jumps

Get the number of jumps in solar systems within the last hour ending at the timestamp of the Last-Modified header, excluding wormhole space. Only systems with jumps will be listed  ---  This route is cached for up to 3600 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getUniverseSystemJumps($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseSystemJumps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetUniverseSystemJumps200Ok[]**](../Model/GetUniverseSystemJumps200Ok.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseSystemKills

> \Swagger\Client\Eve\Model\GetUniverseSystemKills200Ok[] getUniverseSystemKills($datasource, $if_none_match)

Get system kills

Get the number of ship, pod and NPC kills per solar system within the last hour ending at the timestamp of the Last-Modified header, excluding wormhole space. Only systems with kills will be listed  ---  This route is cached for up to 3600 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getUniverseSystemKills($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseSystemKills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetUniverseSystemKills200Ok[]**](../Model/GetUniverseSystemKills200Ok.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseSystems

> int[] getUniverseSystems($datasource, $if_none_match)

Get solar systems

Get a list of solar systems  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getUniverseSystems($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseSystems: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseSystemsSystemId

> \Swagger\Client\Eve\Model\GetUniverseSystemsSystemIdOk getUniverseSystemsSystemId($system_id, $accept_language, $datasource, $if_none_match, $language)

Get solar system information

Get information on a solar system.  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$system_id = 56; // int | system_id integer
$accept_language = 'en'; // string | Language to use in the response
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$language = 'en'; // string | Language to use in the response, takes precedence over Accept-Language

try {
    $result = $apiInstance->getUniverseSystemsSystemId($system_id, $accept_language, $datasource, $if_none_match, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseSystemsSystemId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_id** | **int**| system_id integer |
 **accept_language** | **string**| Language to use in the response | [optional] [default to &#39;en&#39;]
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **language** | **string**| Language to use in the response, takes precedence over Accept-Language | [optional] [default to &#39;en&#39;]

### Return type

[**\Swagger\Client\Eve\Model\GetUniverseSystemsSystemIdOk**](../Model/GetUniverseSystemsSystemIdOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseTypes

> int[] getUniverseTypes($datasource, $if_none_match, $page)

Get types

Get a list of type ids  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$page = 1; // int | Which page of results to return

try {
    $result = $apiInstance->getUniverseTypes($datasource, $if_none_match, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **page** | **int**| Which page of results to return | [optional] [default to 1]

### Return type

**int[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniverseTypesTypeId

> \Swagger\Client\Eve\Model\GetUniverseTypesTypeIdOk getUniverseTypesTypeId($type_id, $accept_language, $datasource, $if_none_match, $language)

Get type information

Get information on a type  ---  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type_id = 56; // int | An Eve item type ID
$accept_language = 'en'; // string | Language to use in the response
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$language = 'en'; // string | Language to use in the response, takes precedence over Accept-Language

try {
    $result = $apiInstance->getUniverseTypesTypeId($type_id, $accept_language, $datasource, $if_none_match, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseTypesTypeId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type_id** | **int**| An Eve item type ID |
 **accept_language** | **string**| Language to use in the response | [optional] [default to &#39;en&#39;]
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **language** | **string**| Language to use in the response, takes precedence over Accept-Language | [optional] [default to &#39;en&#39;]

### Return type

[**\Swagger\Client\Eve\Model\GetUniverseTypesTypeIdOk**](../Model/GetUniverseTypesTypeIdOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postUniverseIds

> \Swagger\Client\Eve\Model\PostUniverseIdsOk postUniverseIds($names, $accept_language, $datasource, $language)

Bulk names to IDs

Resolve a set of names to IDs in the following categories: agents, alliances, characters, constellations, corporations factions, inventory_types, regions, stations, and systems. Only exact matches will be returned. All names searched for are cached for 12 hours  ---

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$names = array('names_example'); // string[] | The names to resolve
$accept_language = 'en'; // string | Language to use in the response
$datasource = 'tranquility'; // string | The server name you would like data from
$language = 'en'; // string | Language to use in the response, takes precedence over Accept-Language

try {
    $result = $apiInstance->postUniverseIds($names, $accept_language, $datasource, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->postUniverseIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **names** | [**string[]**](../Model/string.md)| The names to resolve |
 **accept_language** | **string**| Language to use in the response | [optional] [default to &#39;en&#39;]
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **language** | **string**| Language to use in the response, takes precedence over Accept-Language | [optional] [default to &#39;en&#39;]

### Return type

[**\Swagger\Client\Eve\Model\PostUniverseIdsOk**](../Model/PostUniverseIdsOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postUniverseNames

> \Swagger\Client\Eve\Model\PostUniverseNames200Ok[] postUniverseNames($ids, $datasource)

Get names and categories for a set of IDs

Resolve a set of IDs to names and categories. Supported ID's for resolving are: Characters, Corporations, Alliances, Stations, Solar Systems, Constellations, Regions, Types, Factions  ---

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Swagger\Client\Eve\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = array(56); // int[] | The ids to resolve
$datasource = 'tranquility'; // string | The server name you would like data from

try {
    $result = $apiInstance->postUniverseNames($ids, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->postUniverseNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**int[]**](../Model/int.md)| The ids to resolve |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]

### Return type

[**\Swagger\Client\Eve\Model\PostUniverseNames200Ok[]**](../Model/PostUniverseNames200Ok.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

