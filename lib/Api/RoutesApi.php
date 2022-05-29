<?php
/**
 * RoutesApi
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
 * The version of the OpenAPI document: 1.11
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
 * RoutesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RoutesApi
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
     * Operation getRouteOriginDestination
     *
     * Get route
     *
     * @param  int $destination destination solar system ID (required)
     * @param  int $origin origin solar system ID (required)
     * @param  int[] $avoid avoid solar system ID(s) (optional)
     * @param  int[][] $connections connected solar system pairs (optional)
     * @param  string $datasource The server name you would like data from (optional, default to 'tranquility')
     * @param  string $flag route security preference (optional, default to 'shortest')
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     *
     * @throws \Swagger\Client\Eve\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return int[]|\Swagger\Client\Eve\Model\BadRequest|\Swagger\Client\Eve\Model\GetRouteOriginDestinationNotFound|\Swagger\Client\Eve\Model\ErrorLimited|\Swagger\Client\Eve\Model\InternalServerError|\Swagger\Client\Eve\Model\ServiceUnavailable|\Swagger\Client\Eve\Model\GatewayTimeout
     */
    public function getRouteOriginDestination($destination, $origin, $avoid = null, $connections = null, $datasource = 'tranquility', $flag = 'shortest', $if_none_match = null)
    {
        list($response) = $this->getRouteOriginDestinationWithHttpInfo($destination, $origin, $avoid, $connections, $datasource, $flag, $if_none_match);
        return $response;
    }

    /**
     * Operation getRouteOriginDestinationWithHttpInfo
     *
     * Get route
     *
     * @param  int $destination destination solar system ID (required)
     * @param  int $origin origin solar system ID (required)
     * @param  int[] $avoid avoid solar system ID(s) (optional)
     * @param  int[][] $connections connected solar system pairs (optional)
     * @param  string $datasource The server name you would like data from (optional, default to 'tranquility')
     * @param  string $flag route security preference (optional, default to 'shortest')
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     *
     * @throws \Swagger\Client\Eve\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of int[]|\Swagger\Client\Eve\Model\BadRequest|\Swagger\Client\Eve\Model\GetRouteOriginDestinationNotFound|\Swagger\Client\Eve\Model\ErrorLimited|\Swagger\Client\Eve\Model\InternalServerError|\Swagger\Client\Eve\Model\ServiceUnavailable|\Swagger\Client\Eve\Model\GatewayTimeout, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRouteOriginDestinationWithHttpInfo($destination, $origin, $avoid = null, $connections = null, $datasource = 'tranquility', $flag = 'shortest', $if_none_match = null)
    {
        $request = $this->getRouteOriginDestinationRequest($destination, $origin, $avoid, $connections, $datasource, $flag, $if_none_match);

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
                    if ('int[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('int[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'int[]', []),
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
                case 404:
                    if ('\Swagger\Client\Eve\Model\GetRouteOriginDestinationNotFound' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Swagger\Client\Eve\Model\GetRouteOriginDestinationNotFound' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Swagger\Client\Eve\Model\GetRouteOriginDestinationNotFound', []),
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

            $returnType = 'int[]';
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
                        'int[]',
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
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Eve\Model\GetRouteOriginDestinationNotFound',
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
     * Operation getRouteOriginDestinationAsync
     *
     * Get route
     *
     * @param  int $destination destination solar system ID (required)
     * @param  int $origin origin solar system ID (required)
     * @param  int[] $avoid avoid solar system ID(s) (optional)
     * @param  int[][] $connections connected solar system pairs (optional)
     * @param  string $datasource The server name you would like data from (optional, default to 'tranquility')
     * @param  string $flag route security preference (optional, default to 'shortest')
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRouteOriginDestinationAsync($destination, $origin, $avoid = null, $connections = null, $datasource = 'tranquility', $flag = 'shortest', $if_none_match = null)
    {
        return $this->getRouteOriginDestinationAsyncWithHttpInfo($destination, $origin, $avoid, $connections, $datasource, $flag, $if_none_match)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRouteOriginDestinationAsyncWithHttpInfo
     *
     * Get route
     *
     * @param  int $destination destination solar system ID (required)
     * @param  int $origin origin solar system ID (required)
     * @param  int[] $avoid avoid solar system ID(s) (optional)
     * @param  int[][] $connections connected solar system pairs (optional)
     * @param  string $datasource The server name you would like data from (optional, default to 'tranquility')
     * @param  string $flag route security preference (optional, default to 'shortest')
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRouteOriginDestinationAsyncWithHttpInfo($destination, $origin, $avoid = null, $connections = null, $datasource = 'tranquility', $flag = 'shortest', $if_none_match = null)
    {
        $returnType = 'int[]';
        $request = $this->getRouteOriginDestinationRequest($destination, $origin, $avoid, $connections, $datasource, $flag, $if_none_match);

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
     * Create request for operation 'getRouteOriginDestination'
     *
     * @param  int $destination destination solar system ID (required)
     * @param  int $origin origin solar system ID (required)
     * @param  int[] $avoid avoid solar system ID(s) (optional)
     * @param  int[][] $connections connected solar system pairs (optional)
     * @param  string $datasource The server name you would like data from (optional, default to 'tranquility')
     * @param  string $flag route security preference (optional, default to 'shortest')
     * @param  string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getRouteOriginDestinationRequest($destination, $origin, $avoid = null, $connections = null, $datasource = 'tranquility', $flag = 'shortest', $if_none_match = null)
    {
        // verify the required parameter 'destination' is set
        if ($destination === null || (is_array($destination) && count($destination) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $destination when calling getRouteOriginDestination'
            );
        }
        // verify the required parameter 'origin' is set
        if ($origin === null || (is_array($origin) && count($origin) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $origin when calling getRouteOriginDestination'
            );
        }
        if ($avoid !== null && count($avoid) > 100) {
            throw new \InvalidArgumentException('invalid value for "$avoid" when calling RoutesApi.getRouteOriginDestination, number of items must be less than or equal to 100.');
        }

        if ($connections !== null && count($connections) > 100) {
            throw new \InvalidArgumentException('invalid value for "$connections" when calling RoutesApi.getRouteOriginDestination, number of items must be less than or equal to 100.');
        }


        $resourcePath = '/v1/route/{origin}/{destination}/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $avoid,
            'avoid', // param base name
            'array', // openApiType
            'form', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $connections,
            'connections', // param base name
            'array', // openApiType
            'form', // style
            false, // explode
            false // required
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
            $flag,
            'flag', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);

        // header params
        if ($if_none_match !== null) {
            $headerParams['If-None-Match'] = ObjectSerializer::toHeaderValue($if_none_match);
        }

        // path params
        if ($destination !== null) {
            $resourcePath = str_replace(
                '{' . 'destination' . '}',
                ObjectSerializer::toPathValue($destination),
                $resourcePath
            );
        }
        // path params
        if ($origin !== null) {
            $resourcePath = str_replace(
                '{' . 'origin' . '}',
                ObjectSerializer::toPathValue($origin),
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
