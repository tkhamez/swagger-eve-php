# Swagger\Client\Eve\ContactsApi

All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCharactersCharacterIdContacts()**](ContactsApi.md#deleteCharactersCharacterIdContacts) | **DELETE** /v2/characters/{character_id}/contacts/ | Delete contacts |
| [**getAlliancesAllianceIdContacts()**](ContactsApi.md#getAlliancesAllianceIdContacts) | **GET** /v2/alliances/{alliance_id}/contacts/ | Get alliance contacts |
| [**getAlliancesAllianceIdContactsLabels()**](ContactsApi.md#getAlliancesAllianceIdContactsLabels) | **GET** /v1/alliances/{alliance_id}/contacts/labels/ | Get alliance contact labels |
| [**getCharactersCharacterIdContacts()**](ContactsApi.md#getCharactersCharacterIdContacts) | **GET** /v2/characters/{character_id}/contacts/ | Get contacts |
| [**getCharactersCharacterIdContactsLabels()**](ContactsApi.md#getCharactersCharacterIdContactsLabels) | **GET** /v1/characters/{character_id}/contacts/labels/ | Get contact labels |
| [**getCorporationsCorporationIdContacts()**](ContactsApi.md#getCorporationsCorporationIdContacts) | **GET** /v2/corporations/{corporation_id}/contacts/ | Get corporation contacts |
| [**getCorporationsCorporationIdContactsLabels()**](ContactsApi.md#getCorporationsCorporationIdContactsLabels) | **GET** /v1/corporations/{corporation_id}/contacts/labels/ | Get corporation contact labels |
| [**postCharactersCharacterIdContacts()**](ContactsApi.md#postCharactersCharacterIdContacts) | **POST** /v2/characters/{character_id}/contacts/ | Add contacts |
| [**putCharactersCharacterIdContacts()**](ContactsApi.md#putCharactersCharacterIdContacts) | **PUT** /v2/characters/{character_id}/contacts/ | Edit contacts |


## `deleteCharactersCharacterIdContacts()`

```php
deleteCharactersCharacterIdContacts($character_id, $contact_ids, $datasource, $token)
```

Delete contacts

Bulk delete contacts  ---

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$contact_ids = array(56); // int[] | A list of contacts to delete
$datasource = 'tranquility'; // string | The server name you would like data from
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $apiInstance->deleteCharactersCharacterIdContacts($character_id, $contact_ids, $datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteCharactersCharacterIdContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| An EVE character ID | |
| **contact_ids** | [**int[]**](../Model/int.md)| A list of contacts to delete | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAlliancesAllianceIdContacts()`

```php
getAlliancesAllianceIdContacts($alliance_id, $datasource, $if_none_match, $page, $token): \Swagger\Client\Eve\Model\GetAlliancesAllianceIdContacts200Ok[]
```

Get alliance contacts

Return contacts of an alliance  ---  This route is cached for up to 300 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alliance_id = 56; // int | An EVE alliance ID
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$page = 1; // int | Which page of results to return
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getAlliancesAllianceIdContacts($alliance_id, $datasource, $if_none_match, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getAlliancesAllianceIdContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **alliance_id** | **int**| An EVE alliance ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **page** | **int**| Which page of results to return | [optional] [default to 1] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetAlliancesAllianceIdContacts200Ok[]**](../Model/GetAlliancesAllianceIdContacts200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAlliancesAllianceIdContactsLabels()`

```php
getAlliancesAllianceIdContactsLabels($alliance_id, $datasource, $if_none_match, $token): \Swagger\Client\Eve\Model\GetAlliancesAllianceIdContactsLabels200Ok[]
```

Get alliance contact labels

Return custom labels for an alliance's contacts  ---  This route is cached for up to 300 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alliance_id = 56; // int | An EVE alliance ID
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getAlliancesAllianceIdContactsLabels($alliance_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getAlliancesAllianceIdContactsLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **alliance_id** | **int**| An EVE alliance ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetAlliancesAllianceIdContactsLabels200Ok[]**](../Model/GetAlliancesAllianceIdContactsLabels200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCharactersCharacterIdContacts()`

```php
getCharactersCharacterIdContacts($character_id, $datasource, $if_none_match, $page, $token): \Swagger\Client\Eve\Model\GetCharactersCharacterIdContacts200Ok[]
```

Get contacts

Return contacts of a character  ---  This route is cached for up to 300 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\ContactsApi(
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
    $result = $apiInstance->getCharactersCharacterIdContacts($character_id, $datasource, $if_none_match, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getCharactersCharacterIdContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| An EVE character ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **page** | **int**| Which page of results to return | [optional] [default to 1] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCharactersCharacterIdContacts200Ok[]**](../Model/GetCharactersCharacterIdContacts200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCharactersCharacterIdContactsLabels()`

```php
getCharactersCharacterIdContactsLabels($character_id, $datasource, $if_none_match, $token): \Swagger\Client\Eve\Model\GetCharactersCharacterIdContactsLabels200Ok[]
```

Get contact labels

Return custom labels for a character's contacts  ---  This route is cached for up to 300 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\ContactsApi(
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
    $result = $apiInstance->getCharactersCharacterIdContactsLabels($character_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getCharactersCharacterIdContactsLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| An EVE character ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCharactersCharacterIdContactsLabels200Ok[]**](../Model/GetCharactersCharacterIdContactsLabels200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdContacts()`

```php
getCorporationsCorporationIdContacts($corporation_id, $datasource, $if_none_match, $page, $token): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdContacts200Ok[]
```

Get corporation contacts

Return contacts of a corporation  ---  This route is cached for up to 300 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\ContactsApi(
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
    $result = $apiInstance->getCorporationsCorporationIdContacts($corporation_id, $datasource, $if_none_match, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getCorporationsCorporationIdContacts: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdContacts200Ok[]**](../Model/GetCorporationsCorporationIdContacts200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdContactsLabels()`

```php
getCorporationsCorporationIdContactsLabels($corporation_id, $datasource, $if_none_match, $token): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdContactsLabels200Ok[]
```

Get corporation contact labels

Return custom labels for a corporation's contacts  ---  This route is cached for up to 300 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\ContactsApi(
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
    $result = $apiInstance->getCorporationsCorporationIdContactsLabels($corporation_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getCorporationsCorporationIdContactsLabels: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdContactsLabels200Ok[]**](../Model/GetCorporationsCorporationIdContactsLabels200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCharactersCharacterIdContacts()`

```php
postCharactersCharacterIdContacts($character_id, $standing, $contact_ids, $datasource, $label_ids, $token, $watched): int[]
```

Add contacts

Bulk add contacts with same settings  ---

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$standing = 3.4; // float | Standing for the contact
$contact_ids = array(56); // int[] | A list of contacts
$datasource = 'tranquility'; // string | The server name you would like data from
$label_ids = array(56); // int[] | Add custom labels to the new contact
$token = 'token_example'; // string | Access token to use if unable to set a header
$watched = false; // bool | Whether the contact should be watched, note this is only effective on characters

try {
    $result = $apiInstance->postCharactersCharacterIdContacts($character_id, $standing, $contact_ids, $datasource, $label_ids, $token, $watched);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->postCharactersCharacterIdContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| An EVE character ID | |
| **standing** | **float**| Standing for the contact | |
| **contact_ids** | [**int[]**](../Model/int.md)| A list of contacts | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **label_ids** | [**int[]**](../Model/int.md)| Add custom labels to the new contact | [optional] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |
| **watched** | **bool**| Whether the contact should be watched, note this is only effective on characters | [optional] [default to false] |

### Return type

**int[]**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCharactersCharacterIdContacts()`

```php
putCharactersCharacterIdContacts($character_id, $standing, $contact_ids, $datasource, $label_ids, $token, $watched)
```

Edit contacts

Bulk edit contacts with same settings  ---

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$standing = 3.4; // float | Standing for the contact
$contact_ids = array(56); // int[] | A list of contacts
$datasource = 'tranquility'; // string | The server name you would like data from
$label_ids = array(56); // int[] | Add custom labels to the contact
$token = 'token_example'; // string | Access token to use if unable to set a header
$watched = false; // bool | Whether the contact should be watched, note this is only effective on characters

try {
    $apiInstance->putCharactersCharacterIdContacts($character_id, $standing, $contact_ids, $datasource, $label_ids, $token, $watched);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->putCharactersCharacterIdContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| An EVE character ID | |
| **standing** | **float**| Standing for the contact | |
| **contact_ids** | [**int[]**](../Model/int.md)| A list of contacts | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **label_ids** | [**int[]**](../Model/int.md)| Add custom labels to the contact | [optional] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |
| **watched** | **bool**| Whether the contact should be watched, note this is only effective on characters | [optional] [default to false] |

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
