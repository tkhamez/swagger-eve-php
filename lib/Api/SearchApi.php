<?php
/**
 * SearchApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * The version of the OpenAPI document: 1.12
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Swagger\Client\Eve\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\Eve\ApiException;
use Swagger\Client\Eve\Configuration;
use Swagger\Client\Eve\HeaderSelector;
use Swagger\Client\Eve\ObjectSerializer;

/**
 * SearchApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SearchApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getCharactersCharacterIdSearch
     *
     * Search on a string
     *
     * @param  string[] $categories Type of entities to search for (required)
     * @param  int $character_id An EVE character ID (required)
     * @param  string $search The string to search on (required)
     * @param  string $accept_language Language to use in the response (optional, default to 'en')
     * @param  string $datasource The server name you would like data from (optional, default to 'tranquility')
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param  string $language Language to use in the response, takes precedence over Accept-Language (optional, default to 'en')
     * @param  bool $strict Whether the search should be a strict match (optional, default to false)
     * @param  string $token Access token to use if unable to set a header (optional)
     *
     * @throws \Swagger\Client\Eve\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Eve\Model\GetCharactersCharacterIdSearchOk|\Swagger\Client\Eve\Model\BadRequest|\Swagger\Client\Eve\Model\Unauthorized|\Swagger\Client\Eve\Model\Forbidden|\Swagger\Client\Eve\Model\ErrorLimited|\Swagger\Client\Eve\Model\InternalServerError|\Swagger\Client\Eve\Model\ServiceUnavailable|\Swagger\Client\Eve\Model\GatewayTimeout
     */
    public function getCharactersCharacterIdSearch($categories, $character_id, $search, $accept_language = 'en', $datasource = 'tranquility', $if_none_match = null, $language = 'en', $strict = false, $token = null)
    {
        list($response) = $this->getCharactersCharacterIdSearchWithHttpInfo($categories, $character_id, $search, $accept_language, $datasource, $if_none_match, $language, $strict, $token);
        return $response;
    }

    /**
     * Operation getCharactersCharacterIdSearchWithHttpInfo
     *
     * Search on a string
     *
     * @param  string[] $categories Type of entities to search for (required)
     * @param  int $character_id An EVE character ID (required)
     * @param  string $search The string to search on (required)
     * @param  string $accept_language Language to use in the response (optional, default to 'en')
     * @param  string $datasource The server name you would like data from (optional, default to 'tranquility')
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param  string $language Language to use in the response, takes precedence over Accept-Language (optional, default to 'en')
     * @param  bool $strict Whether the search should be a strict match (optional, default to false)
     * @param  string $token Access token to use if unable to set a header (optional)
     *
     * @throws \Swagger\Client\Eve\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Eve\Model\GetCharactersCharacterIdSearchOk|\Swagger\Client\Eve\Model\BadRequest|\Swagger\Client\Eve\Model\Unauthorized|\Swagger\Client\Eve\Model\Forbidden|\Swagger\Client\Eve\Model\ErrorLimited|\Swagger\Client\Eve\Model\InternalServerError|\Swagger\Client\Eve\Model\ServiceUnavailable|\Swagger\Client\Eve\Model\GatewayTimeout, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCharactersCharacterIdSearchWithHttpInfo($categories, $character_id, $search, $accept_language = 'en', $datasource = 'tranquility', $if_none_match = null, $language = 'en', $strict = false, $token = null)
    {
        $request = $this->getCharactersCharacterIdSearchRequest($categories, $character_id, $search, $accept_language, $datasource, $if_none_match, $language, $strict, $token);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Swagger\Client\Eve\Model\GetCharactersCharacterIdSearchOk' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Swagger\Client\Eve\Model\GetCharactersCharacterIdSearchOk' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Swagger\Client\Eve\Model\GetCharactersCharacterIdSearchOk', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Swagger\Client\Eve\Model\BadRequest' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Swagger\Client\Eve\Model\BadRequest' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Swagger\Client\Eve\Model\BadRequest', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Swagger\Client\Eve\Model\Unauthorized' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Swagger\Client\Eve\Model\Unauthorized' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Swagger\Client\Eve\Model\Unauthorized', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Swagger\Client\Eve\Model\Forbidden' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Swagger\Client\Eve\Model\Forbidden' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Swagger\Client\Eve\Model\Forbidden', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 420:
                    if ('\Swagger\Client\Eve\Model\ErrorLimited' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Swagger\Client\Eve\Model\ErrorLimited' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Swagger\Client\Eve\Model\ErrorLimited', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Swagger\Client\Eve\Model\InternalServerError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Swagger\Client\Eve\Model\InternalServerError' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Swagger\Client\Eve\Model\InternalServerError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\Swagger\Client\Eve\Model\ServiceUnavailable' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Swagger\Client\Eve\Model\ServiceUnavailable' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Swagger\Client\Eve\Model\ServiceUnavailable', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 504:
                    if ('\Swagger\Client\Eve\Model\GatewayTimeout' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Swagger\Client\Eve\Model\GatewayTimeout' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Swagger\Client\Eve\Model\GatewayTimeout', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Swagger\Client\Eve\Model\GetCharactersCharacterIdSearchOk';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Eve\Model\GetCharactersCharacterIdSearchOk',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Eve\Model\BadRequest',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Eve\Model\Unauthorized',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Eve\Model\Forbidden',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 420:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Eve\Model\ErrorLimited',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Eve\Model\InternalServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Eve\Model\ServiceUnavailable',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Eve\Model\GatewayTimeout',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCharactersCharacterIdSearchAsync
     *
     * Search on a string
     *
     * @param  string[] $categories Type of entities to search for (required)
     * @param  int $character_id An EVE character ID (required)
     * @param  string $search The string to search on (required)
     * @param  string $accept_language Language to use in the response (optional, default to 'en')
     * @param  string $datasource The server name you would like data from (optional, default to 'tranquility')
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param  string $language Language to use in the response, takes precedence over Accept-Language (optional, default to 'en')
     * @param  bool $strict Whether the search should be a strict match (optional, default to false)
     * @param  string $token Access token to use if unable to set a header (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCharactersCharacterIdSearchAsync($categories, $character_id, $search, $accept_language = 'en', $datasource = 'tranquility', $if_none_match = null, $language = 'en', $strict = false, $token = null)
    {
        return $this->getCharactersCharacterIdSearchAsyncWithHttpInfo($categories, $character_id, $search, $accept_language, $datasource, $if_none_match, $language, $strict, $token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCharactersCharacterIdSearchAsyncWithHttpInfo
     *
     * Search on a string
     *
     * @param  string[] $categories Type of entities to search for (required)
     * @param  int $character_id An EVE character ID (required)
     * @param  string $search The string to search on (required)
     * @param  string $accept_language Language to use in the response (optional, default to 'en')
     * @param  string $datasource The server name you would like data from (optional, default to 'tranquility')
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param  string $language Language to use in the response, takes precedence over Accept-Language (optional, default to 'en')
     * @param  bool $strict Whether the search should be a strict match (optional, default to false)
     * @param  string $token Access token to use if unable to set a header (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCharactersCharacterIdSearchAsyncWithHttpInfo($categories, $character_id, $search, $accept_language = 'en', $datasource = 'tranquility', $if_none_match = null, $language = 'en', $strict = false, $token = null)
    {
        $returnType = '\Swagger\Client\Eve\Model\GetCharactersCharacterIdSearchOk';
        $request = $this->getCharactersCharacterIdSearchRequest($categories, $character_id, $search, $accept_language, $datasource, $if_none_match, $language, $strict, $token);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getCharactersCharacterIdSearch'
     *
     * @param  string[] $categories Type of entities to search for (required)
     * @param  int $character_id An EVE character ID (required)
     * @param  string $search The string to search on (required)
     * @param  string $accept_language Language to use in the response (optional, default to 'en')
     * @param  string $datasource The server name you would like data from (optional, default to 'tranquility')
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param  string $language Language to use in the response, takes precedence over Accept-Language (optional, default to 'en')
     * @param  bool $strict Whether the search should be a strict match (optional, default to false)
     * @param  string $token Access token to use if unable to set a header (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCharactersCharacterIdSearchRequest($categories, $character_id, $search, $accept_language = 'en', $datasource = 'tranquility', $if_none_match = null, $language = 'en', $strict = false, $token = null)
    {
        // verify the required parameter 'categories' is set
        if ($categories === null || (is_array($categories) && count($categories) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $categories when calling getCharactersCharacterIdSearch'
            );
        }
        if (count($categories) > 11) {
            throw new \InvalidArgumentException('invalid value for "$categories" when calling SearchApi.getCharactersCharacterIdSearch, number of items must be less than or equal to 11.');
        }
        if (count($categories) < 1) {
            throw new \InvalidArgumentException('invalid value for "$categories" when calling SearchApi.getCharactersCharacterIdSearch, number of items must be greater than or equal to 1.');
        }

        // verify the required parameter 'character_id' is set
        if ($character_id === null || (is_array($character_id) && count($character_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $character_id when calling getCharactersCharacterIdSearch'
            );
        }
        if ($character_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$character_id" when calling SearchApi.getCharactersCharacterIdSearch, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'search' is set
        if ($search === null || (is_array($search) && count($search) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search when calling getCharactersCharacterIdSearch'
            );
        }
        if (strlen($search) < 3) {
            throw new \InvalidArgumentException('invalid length for "$search" when calling SearchApi.getCharactersCharacterIdSearch, must be bigger than or equal to 3.');
        }


        $resourcePath = '/v3/characters/{character_id}/search/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $categories,
            'categories', // param base name
            'array', // openApiType
            'form', // style
            false, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $datasource,
            'datasource', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $language,
            'language', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $search,
            'search', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $strict,
            'strict', // param base name
            'boolean', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $token,
            'token', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);

        // header params
        if ($accept_language !== null) {
            $headerParams['Accept-Language'] = ObjectSerializer::toHeaderValue($accept_language);
        }
        // header params
        if ($if_none_match !== null) {
            $headerParams['If-None-Match'] = ObjectSerializer::toHeaderValue($if_none_match);
        }

        // path params
        if ($character_id !== null) {
            $resourcePath = str_replace(
                '{' . 'character_id' . '}',
                ObjectSerializer::toPathValue($character_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
