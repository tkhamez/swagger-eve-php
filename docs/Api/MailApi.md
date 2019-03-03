# Swagger\Client\Eve\MailApi

All URIs are relative to *https://esi.evetech.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCharactersCharacterIdMailLabelsLabelId**](MailApi.md#deleteCharactersCharacterIdMailLabelsLabelId) | **DELETE** /v1/characters/{character_id}/mail/labels/{label_id}/ | Delete a mail label
[**deleteCharactersCharacterIdMailMailId**](MailApi.md#deleteCharactersCharacterIdMailMailId) | **DELETE** /v1/characters/{character_id}/mail/{mail_id}/ | Delete a mail
[**getCharactersCharacterIdMail**](MailApi.md#getCharactersCharacterIdMail) | **GET** /v1/characters/{character_id}/mail/ | Return mail headers
[**getCharactersCharacterIdMailLabels**](MailApi.md#getCharactersCharacterIdMailLabels) | **GET** /v3/characters/{character_id}/mail/labels/ | Get mail labels and unread counts
[**getCharactersCharacterIdMailLists**](MailApi.md#getCharactersCharacterIdMailLists) | **GET** /v1/characters/{character_id}/mail/lists/ | Return mailing list subscriptions
[**getCharactersCharacterIdMailMailId**](MailApi.md#getCharactersCharacterIdMailMailId) | **GET** /v1/characters/{character_id}/mail/{mail_id}/ | Return a mail
[**postCharactersCharacterIdMail**](MailApi.md#postCharactersCharacterIdMail) | **POST** /v1/characters/{character_id}/mail/ | Send a new mail
[**postCharactersCharacterIdMailLabels**](MailApi.md#postCharactersCharacterIdMailLabels) | **POST** /v2/characters/{character_id}/mail/labels/ | Create a mail label
[**putCharactersCharacterIdMailMailId**](MailApi.md#putCharactersCharacterIdMailMailId) | **PUT** /v1/characters/{character_id}/mail/{mail_id}/ | Update metadata about a mail


# **deleteCharactersCharacterIdMailLabelsLabelId**
> deleteCharactersCharacterIdMailLabelsLabelId($character_id, $label_id, $datasource, $token)

Delete a mail label

Delete a mail label  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Eve\Api\MailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$label_id = 56; // int | An EVE label id
$datasource = 'tranquility'; // string | The server name you would like data from
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $apiInstance->deleteCharactersCharacterIdMailLabelsLabelId($character_id, $label_id, $datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->deleteCharactersCharacterIdMailLabelsLabelId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **label_id** | **int**| An EVE label id |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **token** | **string**| Access token to use if unable to set a header | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCharactersCharacterIdMailMailId**
> deleteCharactersCharacterIdMailMailId($character_id, $mail_id, $datasource, $token)

Delete a mail

Delete a mail  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Eve\Api\MailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$mail_id = 56; // int | An EVE mail ID
$datasource = 'tranquility'; // string | The server name you would like data from
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $apiInstance->deleteCharactersCharacterIdMailMailId($character_id, $mail_id, $datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->deleteCharactersCharacterIdMailMailId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **mail_id** | **int**| An EVE mail ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **token** | **string**| Access token to use if unable to set a header | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdMail**
> \Swagger\Client\Eve\Model\GetCharactersCharacterIdMail200Ok[] getCharactersCharacterIdMail($character_id, $datasource, $if_none_match, $labels, $last_mail_id, $token)

Return mail headers

Return the 50 most recent mail headers belonging to the character that match the query criteria. Queries can be filtered by label, and last_mail_id can be used to paginate backwards  ---  This route is cached for up to 30 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Eve\Api\MailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$labels = array(56); // int[] | Fetch only mails that match one or more of the given labels
$last_mail_id = 56; // int | List only mail with an ID lower than the given ID, if present
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdMail($character_id, $datasource, $if_none_match, $labels, $last_mail_id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->getCharactersCharacterIdMail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **labels** | [**int[]**](../Model/int.md)| Fetch only mails that match one or more of the given labels | [optional]
 **last_mail_id** | **int**| List only mail with an ID lower than the given ID, if present | [optional]
 **token** | **string**| Access token to use if unable to set a header | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetCharactersCharacterIdMail200Ok[]**](../Model/GetCharactersCharacterIdMail200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdMailLabels**
> \Swagger\Client\Eve\Model\GetCharactersCharacterIdMailLabelsOk getCharactersCharacterIdMailLabels($character_id, $datasource, $if_none_match, $token)

Get mail labels and unread counts

Return a list of the users mail labels, unread counts for each label and a total unread count.  ---  This route is cached for up to 30 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Eve\Api\MailApi(
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
    $result = $apiInstance->getCharactersCharacterIdMailLabels($character_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->getCharactersCharacterIdMailLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **token** | **string**| Access token to use if unable to set a header | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetCharactersCharacterIdMailLabelsOk**](../Model/GetCharactersCharacterIdMailLabelsOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdMailLists**
> \Swagger\Client\Eve\Model\GetCharactersCharacterIdMailLists200Ok[] getCharactersCharacterIdMailLists($character_id, $datasource, $if_none_match, $token)

Return mailing list subscriptions

Return all mailing lists that the character is subscribed to  ---  This route is cached for up to 120 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Eve\Api\MailApi(
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
    $result = $apiInstance->getCharactersCharacterIdMailLists($character_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->getCharactersCharacterIdMailLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **token** | **string**| Access token to use if unable to set a header | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetCharactersCharacterIdMailLists200Ok[]**](../Model/GetCharactersCharacterIdMailLists200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdMailMailId**
> \Swagger\Client\Eve\Model\GetCharactersCharacterIdMailMailIdOk getCharactersCharacterIdMailMailId($character_id, $mail_id, $datasource, $if_none_match, $token)

Return a mail

Return the contents of an EVE mail  ---  This route is cached for up to 30 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Eve\Api\MailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$mail_id = 56; // int | An EVE mail ID
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdMailMailId($character_id, $mail_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->getCharactersCharacterIdMailMailId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **mail_id** | **int**| An EVE mail ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional]
 **token** | **string**| Access token to use if unable to set a header | [optional]

### Return type

[**\Swagger\Client\Eve\Model\GetCharactersCharacterIdMailMailIdOk**](../Model/GetCharactersCharacterIdMailMailIdOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCharactersCharacterIdMail**
> int postCharactersCharacterIdMail($character_id, $datasource, $token, $post_characters_character_id_mail_mail)

Send a new mail

Create and send a new mail  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Eve\Api\MailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = 'tranquility'; // string | The server name you would like data from
$token = 'token_example'; // string | Access token to use if unable to set a header
$post_characters_character_id_mail_mail = new \Swagger\Client\Eve\Model\PostCharactersCharacterIdMailMail(); // \Swagger\Client\Eve\Model\PostCharactersCharacterIdMailMail | 

try {
    $result = $apiInstance->postCharactersCharacterIdMail($character_id, $datasource, $token, $post_characters_character_id_mail_mail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->postCharactersCharacterIdMail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **post_characters_character_id_mail_mail** | [**\Swagger\Client\Eve\Model\PostCharactersCharacterIdMailMail**](../Model/PostCharactersCharacterIdMailMail.md)|  | [optional]

### Return type

**int**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCharactersCharacterIdMailLabels**
> int postCharactersCharacterIdMailLabels($character_id, $datasource, $token, $post_characters_character_id_mail_labels_label)

Create a mail label

Create a mail label  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Eve\Api\MailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = 'tranquility'; // string | The server name you would like data from
$token = 'token_example'; // string | Access token to use if unable to set a header
$post_characters_character_id_mail_labels_label = new \Swagger\Client\Eve\Model\PostCharactersCharacterIdMailLabelsLabel(); // \Swagger\Client\Eve\Model\PostCharactersCharacterIdMailLabelsLabel | 

try {
    $result = $apiInstance->postCharactersCharacterIdMailLabels($character_id, $datasource, $token, $post_characters_character_id_mail_labels_label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->postCharactersCharacterIdMailLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **post_characters_character_id_mail_labels_label** | [**\Swagger\Client\Eve\Model\PostCharactersCharacterIdMailLabelsLabel**](../Model/PostCharactersCharacterIdMailLabelsLabel.md)|  | [optional]

### Return type

**int**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCharactersCharacterIdMailMailId**
> putCharactersCharacterIdMailMailId($character_id, $mail_id, $datasource, $token, $put_characters_character_id_mail_mail_id_contents)

Update metadata about a mail

Update metadata about a mail  ---

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Eve\Api\MailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$mail_id = 56; // int | An EVE mail ID
$datasource = 'tranquility'; // string | The server name you would like data from
$token = 'token_example'; // string | Access token to use if unable to set a header
$put_characters_character_id_mail_mail_id_contents = new \Swagger\Client\Eve\Model\PutCharactersCharacterIdMailMailIdContents(); // \Swagger\Client\Eve\Model\PutCharactersCharacterIdMailMailIdContents | 

try {
    $apiInstance->putCharactersCharacterIdMailMailId($character_id, $mail_id, $datasource, $token, $put_characters_character_id_mail_mail_id_contents);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->putCharactersCharacterIdMailMailId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **character_id** | **int**| An EVE character ID |
 **mail_id** | **int**| An EVE mail ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **put_characters_character_id_mail_mail_id_contents** | [**\Swagger\Client\Eve\Model\PutCharactersCharacterIdMailMailIdContents**](../Model/PutCharactersCharacterIdMailMailIdContents.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

