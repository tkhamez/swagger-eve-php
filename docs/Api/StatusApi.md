# Swagger\Client\Eve\StatusApi

All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getStatus()**](StatusApi.md#getStatus) | **GET** /v1/status/ | Retrieve the uptime and player counts |


## `getStatus()`

```php
getStatus($datasource, $if_none_match): \Swagger\Client\Eve\Model\GetStatusOk
```

Retrieve the uptime and player counts

EVE Server status  ---  This route is cached for up to 30 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Swagger\Client\Eve\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getStatus($datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->getStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetStatusOk**](../Model/GetStatusOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
