<?php
/**
 * IncursionsApi
 * PHP version 5
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
 * The version of the OpenAPI document: 0.8.9
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Swagger\Client\Eve\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\Eve\ApiException;
use Swagger\Client\Eve\Configuration;
use Swagger\Client\Eve\HeaderSelector;
use Swagger\Client\Eve\ObjectSerializer;

/**
 * IncursionsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IncursionsApi
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
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
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
     * Operation getIncursions
     *
     * List incursions
     *
     * @param  string $datasource The server name you would like data from (optional, default to 'tranquility')
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     *
     * @throws \Swagger\Client\Eve\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Eve\Model\GetIncursions200Ok[]|\Swagger\Client\Eve\Model\BadRequest|\Swagger\Client\Eve\Model\ErrorLimited|\Swagger\Client\Eve\Model\InternalServerError|\Swagger\Client\Eve\Model\ServiceUnavailable|\Swagger\Client\Eve\Model\GatewayTimeout
     */
    public function getIncursions($datasource = 'tranquility', $if_none_match = null)
    {
        list($response) = $this->getIncursionsWithHttpInfo($datasource, $if_none_match);
        return $response;
    }

    /**
     * Operation getIncursionsWithHttpInfo
     *
     * List incursions
     *
     * @param  string $datasource The server name you would like data from (optional, default to 'tranquility')
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     *
     * @throws \Swagger\Client\Eve\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Eve\Model\GetIncursions200Ok[]|\Swagger\Client\Eve\Model\BadRequest|\Swagger\Client\Eve\Model\ErrorLimited|\Swagger\Client\Eve\Model\InternalServerError|\Swagger\Client\Eve\Model\ServiceUnavailable|\Swagger\Client\Eve\Model\GatewayTimeout, HTTP status code, HTTP response headers (array of strings)
     */
    public function getIncursionsWithHttpInfo($datasource = 'tranquility', $if_none_match = null)
    {
        $request = $this->getIncursionsRequest($datasource, $if_none_match);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Swagger\Client\Eve\Model\GetIncursions200Ok[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Swagger\Client\Eve\Model\GetIncursions200Ok[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Swagger\Client\Eve\Model\BadRequest' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Swagger\Client\Eve\Model\BadRequest', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 420:
                    if ('\Swagger\Client\Eve\Model\ErrorLimited' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Swagger\Client\Eve\Model\ErrorLimited', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Swagger\Client\Eve\Model\InternalServerError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Swagger\Client\Eve\Model\InternalServerError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\Swagger\Client\Eve\Model\ServiceUnavailable' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Swagger\Client\Eve\Model\ServiceUnavailable', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 504:
                    if ('\Swagger\Client\Eve\Model\GatewayTimeout' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Swagger\Client\Eve\Model\GatewayTimeout', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Swagger\Client\Eve\Model\GetIncursions200Ok[]';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\Swagger\Client\Eve\Model\GetIncursions200Ok[]',
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
     * Operation getIncursionsAsync
     *
     * List incursions
     *
     * @param  string $datasource The server name you would like data from (optional, default to 'tranquility')
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getIncursionsAsync($datasource = 'tranquility', $if_none_match = null)
    {
        return $this->getIncursionsAsyncWithHttpInfo($datasource, $if_none_match)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getIncursionsAsyncWithHttpInfo
     *
     * List incursions
     *
     * @param  string $datasource The server name you would like data from (optional, default to 'tranquility')
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getIncursionsAsyncWithHttpInfo($datasource = 'tranquility', $if_none_match = null)
    {
        $returnType = '\Swagger\Client\Eve\Model\GetIncursions200Ok[]';
        $request = $this->getIncursionsRequest($datasource, $if_none_match);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getIncursions'
     *
     * @param  string $datasource The server name you would like data from (optional, default to 'tranquility')
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getIncursionsRequest($datasource = 'tranquility', $if_none_match = null)
    {

        $resourcePath = '/v1/incursions/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = ObjectSerializer::toQueryValue($datasource);
        }
        // header params
        if ($if_none_match !== null) {
            $headerParams['If-None-Match'] = ObjectSerializer::toHeaderValue($if_none_match);
        }


        // body params
        $_tempBody = null;

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
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
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
