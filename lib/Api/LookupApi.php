<?php
/**
 * LookupApi
 * PHP version 5
 *
 * @category Class
 * @package  Tracmap
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TracMap API
 *
 * The TracMap API allows you to create and manage __Jobs__, __Products__, and __Maps__ on TracMap Online.
 *
 * OpenAPI spec version: 1.0.25
 * Contact: api@tracmap.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.42-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Tracmap\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Tracmap\ApiException;
use Tracmap\Configuration;
use Tracmap\HeaderSelector;
use Tracmap\ObjectSerializer;

/**
 * LookupApi Class Doc Comment
 *
 * @category Class
 * @package  Tracmap
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LookupApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation lookupContractorGet
     *
     * Find ID of contractor in our system.
     *
     * @param  int $id The known contractor ID, useful to fetching the contractors current state. (optional)
     * @param  string $name Name of contractor. (optional)
     * @param  string $email Email of Contractor. (optional)
     * @param  string $phone Phone (optional)
     * @param  string $mobile Mobile (optional)
     * @param  string $address Address (optional)
     * @param  string $town Town (optional)
     * @param  bool $multiple Enable non-exact matching and multiple results (optional)
     *
     * @throws \Tracmap\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Tracmap\Model\ContractorRead
     */
    public function lookupContractorGet($id = null, $name = null, $email = null, $phone = null, $mobile = null, $address = null, $town = null, $multiple = null)
    {
        list($response) = $this->lookupContractorGetWithHttpInfo($id, $name, $email, $phone, $mobile, $address, $town, $multiple);
        return $response;
    }

    /**
     * Operation lookupContractorGetWithHttpInfo
     *
     * Find ID of contractor in our system.
     *
     * @param  int $id The known contractor ID, useful to fetching the contractors current state. (optional)
     * @param  string $name Name of contractor. (optional)
     * @param  string $email Email of Contractor. (optional)
     * @param  string $phone Phone (optional)
     * @param  string $mobile Mobile (optional)
     * @param  string $address Address (optional)
     * @param  string $town Town (optional)
     * @param  bool $multiple Enable non-exact matching and multiple results (optional)
     *
     * @throws \Tracmap\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Tracmap\Model\ContractorRead, HTTP status code, HTTP response headers (array of strings)
     */
    public function lookupContractorGetWithHttpInfo($id = null, $name = null, $email = null, $phone = null, $mobile = null, $address = null, $town = null, $multiple = null)
    {
        $returnType = '\Tracmap\Model\ContractorRead';
        $request = $this->lookupContractorGetRequest($id, $name, $email, $phone, $mobile, $address, $town, $multiple);

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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\Tracmap\Model\ContractorRead',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation lookupContractorGetAsync
     *
     * Find ID of contractor in our system.
     *
     * @param  int $id The known contractor ID, useful to fetching the contractors current state. (optional)
     * @param  string $name Name of contractor. (optional)
     * @param  string $email Email of Contractor. (optional)
     * @param  string $phone Phone (optional)
     * @param  string $mobile Mobile (optional)
     * @param  string $address Address (optional)
     * @param  string $town Town (optional)
     * @param  bool $multiple Enable non-exact matching and multiple results (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function lookupContractorGetAsync($id = null, $name = null, $email = null, $phone = null, $mobile = null, $address = null, $town = null, $multiple = null)
    {
        return $this->lookupContractorGetAsyncWithHttpInfo($id, $name, $email, $phone, $mobile, $address, $town, $multiple)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation lookupContractorGetAsyncWithHttpInfo
     *
     * Find ID of contractor in our system.
     *
     * @param  int $id The known contractor ID, useful to fetching the contractors current state. (optional)
     * @param  string $name Name of contractor. (optional)
     * @param  string $email Email of Contractor. (optional)
     * @param  string $phone Phone (optional)
     * @param  string $mobile Mobile (optional)
     * @param  string $address Address (optional)
     * @param  string $town Town (optional)
     * @param  bool $multiple Enable non-exact matching and multiple results (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function lookupContractorGetAsyncWithHttpInfo($id = null, $name = null, $email = null, $phone = null, $mobile = null, $address = null, $town = null, $multiple = null)
    {
        $returnType = '\Tracmap\Model\ContractorRead';
        $request = $this->lookupContractorGetRequest($id, $name, $email, $phone, $mobile, $address, $town, $multiple);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'lookupContractorGet'
     *
     * @param  int $id The known contractor ID, useful to fetching the contractors current state. (optional)
     * @param  string $name Name of contractor. (optional)
     * @param  string $email Email of Contractor. (optional)
     * @param  string $phone Phone (optional)
     * @param  string $mobile Mobile (optional)
     * @param  string $address Address (optional)
     * @param  string $town Town (optional)
     * @param  bool $multiple Enable non-exact matching and multiple results (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function lookupContractorGetRequest($id = null, $name = null, $email = null, $phone = null, $mobile = null, $address = null, $town = null, $multiple = null)
    {

        $resourcePath = '/lookup/contractor';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name);
        }
        // query params
        if ($email !== null) {
            $queryParams['email'] = ObjectSerializer::toQueryValue($email);
        }
        // query params
        if ($phone !== null) {
            $queryParams['phone'] = ObjectSerializer::toQueryValue($phone);
        }
        // query params
        if ($mobile !== null) {
            $queryParams['mobile'] = ObjectSerializer::toQueryValue($mobile);
        }
        // query params
        if ($address !== null) {
            $queryParams['address'] = ObjectSerializer::toQueryValue($address);
        }
        // query params
        if ($town !== null) {
            $queryParams['town'] = ObjectSerializer::toQueryValue($town);
        }
        // query params
        if ($multiple !== null) {
            $queryParams['multiple'] = ObjectSerializer::toQueryValue($multiple);
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
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('token');
        if ($apiKey !== null) {
            $headers['token'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('hash');
        if ($apiKey !== null) {
            $headers['hash'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation lookupContractorOptions
     *
     * Preflight for lookup APIs
     *
     * @param  int $id The known contractor ID, useful to fetching the contractors current state. (optional)
     * @param  string $name Name of contractor. (optional)
     * @param  string $email Email of Contractor. (optional)
     * @param  string $phone Phone (optional)
     * @param  string $mobile Mobile (optional)
     * @param  string $address Address (optional)
     * @param  string $town Town (optional)
     * @param  bool $multiple Enable non-exact matching and multiple results (optional)
     *
     * @throws \Tracmap\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function lookupContractorOptions($id = null, $name = null, $email = null, $phone = null, $mobile = null, $address = null, $town = null, $multiple = null)
    {
        $this->lookupContractorOptionsWithHttpInfo($id, $name, $email, $phone, $mobile, $address, $town, $multiple);
    }

    /**
     * Operation lookupContractorOptionsWithHttpInfo
     *
     * Preflight for lookup APIs
     *
     * @param  int $id The known contractor ID, useful to fetching the contractors current state. (optional)
     * @param  string $name Name of contractor. (optional)
     * @param  string $email Email of Contractor. (optional)
     * @param  string $phone Phone (optional)
     * @param  string $mobile Mobile (optional)
     * @param  string $address Address (optional)
     * @param  string $town Town (optional)
     * @param  bool $multiple Enable non-exact matching and multiple results (optional)
     *
     * @throws \Tracmap\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function lookupContractorOptionsWithHttpInfo($id = null, $name = null, $email = null, $phone = null, $mobile = null, $address = null, $town = null, $multiple = null)
    {
        $returnType = '';
        $request = $this->lookupContractorOptionsRequest($id, $name, $email, $phone, $mobile, $address, $town, $multiple);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation lookupContractorOptionsAsync
     *
     * Preflight for lookup APIs
     *
     * @param  int $id The known contractor ID, useful to fetching the contractors current state. (optional)
     * @param  string $name Name of contractor. (optional)
     * @param  string $email Email of Contractor. (optional)
     * @param  string $phone Phone (optional)
     * @param  string $mobile Mobile (optional)
     * @param  string $address Address (optional)
     * @param  string $town Town (optional)
     * @param  bool $multiple Enable non-exact matching and multiple results (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function lookupContractorOptionsAsync($id = null, $name = null, $email = null, $phone = null, $mobile = null, $address = null, $town = null, $multiple = null)
    {
        return $this->lookupContractorOptionsAsyncWithHttpInfo($id, $name, $email, $phone, $mobile, $address, $town, $multiple)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation lookupContractorOptionsAsyncWithHttpInfo
     *
     * Preflight for lookup APIs
     *
     * @param  int $id The known contractor ID, useful to fetching the contractors current state. (optional)
     * @param  string $name Name of contractor. (optional)
     * @param  string $email Email of Contractor. (optional)
     * @param  string $phone Phone (optional)
     * @param  string $mobile Mobile (optional)
     * @param  string $address Address (optional)
     * @param  string $town Town (optional)
     * @param  bool $multiple Enable non-exact matching and multiple results (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function lookupContractorOptionsAsyncWithHttpInfo($id = null, $name = null, $email = null, $phone = null, $mobile = null, $address = null, $town = null, $multiple = null)
    {
        $returnType = '';
        $request = $this->lookupContractorOptionsRequest($id, $name, $email, $phone, $mobile, $address, $town, $multiple);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'lookupContractorOptions'
     *
     * @param  int $id The known contractor ID, useful to fetching the contractors current state. (optional)
     * @param  string $name Name of contractor. (optional)
     * @param  string $email Email of Contractor. (optional)
     * @param  string $phone Phone (optional)
     * @param  string $mobile Mobile (optional)
     * @param  string $address Address (optional)
     * @param  string $town Town (optional)
     * @param  bool $multiple Enable non-exact matching and multiple results (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function lookupContractorOptionsRequest($id = null, $name = null, $email = null, $phone = null, $mobile = null, $address = null, $town = null, $multiple = null)
    {

        $resourcePath = '/lookup/contractor';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name);
        }
        // query params
        if ($email !== null) {
            $queryParams['email'] = ObjectSerializer::toQueryValue($email);
        }
        // query params
        if ($phone !== null) {
            $queryParams['phone'] = ObjectSerializer::toQueryValue($phone);
        }
        // query params
        if ($mobile !== null) {
            $queryParams['mobile'] = ObjectSerializer::toQueryValue($mobile);
        }
        // query params
        if ($address !== null) {
            $queryParams['address'] = ObjectSerializer::toQueryValue($address);
        }
        // query params
        if ($town !== null) {
            $queryParams['town'] = ObjectSerializer::toQueryValue($town);
        }
        // query params
        if ($multiple !== null) {
            $queryParams['multiple'] = ObjectSerializer::toQueryValue($multiple);
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
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'OPTIONS',
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
