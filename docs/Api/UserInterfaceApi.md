# Swagger\Client\Eve\UserInterfaceApi

All URIs are relative to *https://esi.evetech.net/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postUiAutopilotWaypoint**](UserInterfaceApi.md#postUiAutopilotWaypoint) | **POST** /v2/ui/autopilot/waypoint/ | Set Autopilot Waypoint
[**postUiOpenwindowContract**](UserInterfaceApi.md#postUiOpenwindowContract) | **POST** /v1/ui/openwindow/contract/ | Open Contract Window
[**postUiOpenwindowInformation**](UserInterfaceApi.md#postUiOpenwindowInformation) | **POST** /v1/ui/openwindow/information/ | Open Information Window
[**postUiOpenwindowMarketdetails**](UserInterfaceApi.md#postUiOpenwindowMarketdetails) | **POST** /v1/ui/openwindow/marketdetails/ | Open Market Details
[**postUiOpenwindowNewmail**](UserInterfaceApi.md#postUiOpenwindowNewmail) | **POST** /v1/ui/openwindow/newmail/ | Open New Mail Window

# **postUiAutopilotWaypoint**
> postUiAutopilotWaypoint($add_to_beginning, $clear_other_waypoints, $destination_id, $datasource, $token)

Set Autopilot Waypoint

Set a solar system as autopilot waypoint  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Eve\Api\UserInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$add_to_beginning = True; // bool | Whether this solar system should be added to the beginning of all waypoints
$clear_other_waypoints = True; // bool | Whether clean other waypoints beforing adding this one
$destination_id = 56; // int | The destination to travel to, can be solar system, station or structure's id
$datasource = "datasource_example"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $apiInstance->postUiAutopilotWaypoint($add_to_beginning, $clear_other_waypoints, $destination_id, $datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling UserInterfaceApi->postUiAutopilotWaypoint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **add_to_beginning** | [**bool**](../Model/.md)| Whether this solar system should be added to the beginning of all waypoints |
 **clear_other_waypoints** | [**bool**](../Model/.md)| Whether clean other waypoints beforing adding this one |
 **destination_id** | [**int**](../Model/.md)| The destination to travel to, can be solar system, station or structure&#x27;s id |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUiOpenwindowContract**
> postUiOpenwindowContract($contract_id, $datasource, $token)

Open Contract Window

Open the contract window inside the client  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Eve\Api\UserInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 56; // int | The contract to open
$datasource = "datasource_example"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $apiInstance->postUiOpenwindowContract($contract_id, $datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling UserInterfaceApi->postUiOpenwindowContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | [**int**](../Model/.md)| The contract to open |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUiOpenwindowInformation**
> postUiOpenwindowInformation($target_id, $datasource, $token)

Open Information Window

Open the information window for a character, corporation or alliance inside the client  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Eve\Api\UserInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$target_id = 56; // int | The target to open
$datasource = "datasource_example"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $apiInstance->postUiOpenwindowInformation($target_id, $datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling UserInterfaceApi->postUiOpenwindowInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **target_id** | [**int**](../Model/.md)| The target to open |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUiOpenwindowMarketdetails**
> postUiOpenwindowMarketdetails($type_id, $datasource, $token)

Open Market Details

Open the market details window for a specific typeID inside the client  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Eve\Api\UserInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type_id = 56; // int | The item type to open in market window
$datasource = "datasource_example"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $apiInstance->postUiOpenwindowMarketdetails($type_id, $datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling UserInterfaceApi->postUiOpenwindowMarketdetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type_id** | [**int**](../Model/.md)| The item type to open in market window |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUiOpenwindowNewmail**
> postUiOpenwindowNewmail($body$datasource, $token)

Open New Mail Window

Open the New Mail window, according to settings from the request if applicable  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Eve\Api\UserInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | The details of mail to create
$datasource = "datasource_example"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header

try {
    $apiInstance->postUiOpenwindowNewmail($body$datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling UserInterfaceApi->postUiOpenwindowNewmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| The details of mail to create |
 **datasource** | [**string**](../Model/.md)| The server name you would like data from | [optional]
 **token** | [**string**](../Model/.md)| Access token to use if unable to set a header | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

