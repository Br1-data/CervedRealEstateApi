<?php
/**
 * StimaApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Real Estate
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.1.6
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * StimaApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StimaApi
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
     * Operation realEstateCointestatariFabbricatoStimaPOST
     *
     * Estimation - Joint Owner - Building
     *
     * @param  \Swagger\Client\Model\CointestatariFabbricatoRequest $request dati catastali con i quali recuperare le informazioni (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\RispostaStimaFabbricatoCointestatari
     */
    public function realEstateCointestatariFabbricatoStimaPOST($request = null)
    {
        list($response) = $this->realEstateCointestatariFabbricatoStimaPOSTWithHttpInfo($request);
        return $response;
    }

    /**
     * Operation realEstateCointestatariFabbricatoStimaPOSTWithHttpInfo
     *
     * Estimation - Joint Owner - Building
     *
     * @param  \Swagger\Client\Model\CointestatariFabbricatoRequest $request dati catastali con i quali recuperare le informazioni (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\RispostaStimaFabbricatoCointestatari, HTTP status code, HTTP response headers (array of strings)
     */
    public function realEstateCointestatariFabbricatoStimaPOSTWithHttpInfo($request = null)
    {
        $returnType = '\Swagger\Client\Model\RispostaStimaFabbricatoCointestatari';
        $request = $this->realEstateCointestatariFabbricatoStimaPOSTRequest($request);

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
                        '\Swagger\Client\Model\RispostaStimaFabbricatoCointestatari',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation realEstateCointestatariFabbricatoStimaPOSTAsync
     *
     * Estimation - Joint Owner - Building
     *
     * @param  \Swagger\Client\Model\CointestatariFabbricatoRequest $request dati catastali con i quali recuperare le informazioni (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function realEstateCointestatariFabbricatoStimaPOSTAsync($request = null)
    {
        return $this->realEstateCointestatariFabbricatoStimaPOSTAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation realEstateCointestatariFabbricatoStimaPOSTAsyncWithHttpInfo
     *
     * Estimation - Joint Owner - Building
     *
     * @param  \Swagger\Client\Model\CointestatariFabbricatoRequest $request dati catastali con i quali recuperare le informazioni (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function realEstateCointestatariFabbricatoStimaPOSTAsyncWithHttpInfo($request = null)
    {
        $returnType = '\Swagger\Client\Model\RispostaStimaFabbricatoCointestatari';
        $request = $this->realEstateCointestatariFabbricatoStimaPOSTRequest($request);

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
     * Create request for operation 'realEstateCointestatariFabbricatoStimaPOST'
     *
     * @param  \Swagger\Client\Model\CointestatariFabbricatoRequest $request dati catastali con i quali recuperare le informazioni (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function realEstateCointestatariFabbricatoStimaPOSTRequest($request = null)
    {

        $resourcePath = '/v1/realEstateData/cointestatari/fabbricato/stima';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('apikey');
        if ($apiKey !== null) {
            $headers['apikey'] = $apiKey;
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation realEstateStimaGET
     *
     * Estimation
     *
     * @param  string $id_richiesta token/identificativo univoco Cerved relativo alla specifica richiesta sottomessa (in caso di evasione/response effettiva asincrona serve per il reperimento dei contenuti corrispondenti alla richiesta in questione) (optional)
     * @param  string $id_soggetto Identificativo univoco Cerved del Soggetto (persona fisica o giuridica) (optional)
     * @param  string $codice_fiscale Codice fiscale del Soggetto (persona fisica o giuridica) (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\RispostaStima
     */
    public function realEstateStimaGET($id_richiesta = null, $id_soggetto = null, $codice_fiscale = null)
    {
        list($response) = $this->realEstateStimaGETWithHttpInfo($id_richiesta, $id_soggetto, $codice_fiscale);
        return $response;
    }

    /**
     * Operation realEstateStimaGETWithHttpInfo
     *
     * Estimation
     *
     * @param  string $id_richiesta token/identificativo univoco Cerved relativo alla specifica richiesta sottomessa (in caso di evasione/response effettiva asincrona serve per il reperimento dei contenuti corrispondenti alla richiesta in questione) (optional)
     * @param  string $id_soggetto Identificativo univoco Cerved del Soggetto (persona fisica o giuridica) (optional)
     * @param  string $codice_fiscale Codice fiscale del Soggetto (persona fisica o giuridica) (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\RispostaStima, HTTP status code, HTTP response headers (array of strings)
     */
    public function realEstateStimaGETWithHttpInfo($id_richiesta = null, $id_soggetto = null, $codice_fiscale = null)
    {
        $returnType = '\Swagger\Client\Model\RispostaStima';
        $request = $this->realEstateStimaGETRequest($id_richiesta, $id_soggetto, $codice_fiscale);

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
                        '\Swagger\Client\Model\RispostaStima',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\RispostaStima',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\RispostaStima',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation realEstateStimaGETAsync
     *
     * Estimation
     *
     * @param  string $id_richiesta token/identificativo univoco Cerved relativo alla specifica richiesta sottomessa (in caso di evasione/response effettiva asincrona serve per il reperimento dei contenuti corrispondenti alla richiesta in questione) (optional)
     * @param  string $id_soggetto Identificativo univoco Cerved del Soggetto (persona fisica o giuridica) (optional)
     * @param  string $codice_fiscale Codice fiscale del Soggetto (persona fisica o giuridica) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function realEstateStimaGETAsync($id_richiesta = null, $id_soggetto = null, $codice_fiscale = null)
    {
        return $this->realEstateStimaGETAsyncWithHttpInfo($id_richiesta, $id_soggetto, $codice_fiscale)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation realEstateStimaGETAsyncWithHttpInfo
     *
     * Estimation
     *
     * @param  string $id_richiesta token/identificativo univoco Cerved relativo alla specifica richiesta sottomessa (in caso di evasione/response effettiva asincrona serve per il reperimento dei contenuti corrispondenti alla richiesta in questione) (optional)
     * @param  string $id_soggetto Identificativo univoco Cerved del Soggetto (persona fisica o giuridica) (optional)
     * @param  string $codice_fiscale Codice fiscale del Soggetto (persona fisica o giuridica) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function realEstateStimaGETAsyncWithHttpInfo($id_richiesta = null, $id_soggetto = null, $codice_fiscale = null)
    {
        $returnType = '\Swagger\Client\Model\RispostaStima';
        $request = $this->realEstateStimaGETRequest($id_richiesta, $id_soggetto, $codice_fiscale);

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
     * Create request for operation 'realEstateStimaGET'
     *
     * @param  string $id_richiesta token/identificativo univoco Cerved relativo alla specifica richiesta sottomessa (in caso di evasione/response effettiva asincrona serve per il reperimento dei contenuti corrispondenti alla richiesta in questione) (optional)
     * @param  string $id_soggetto Identificativo univoco Cerved del Soggetto (persona fisica o giuridica) (optional)
     * @param  string $codice_fiscale Codice fiscale del Soggetto (persona fisica o giuridica) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function realEstateStimaGETRequest($id_richiesta = null, $id_soggetto = null, $codice_fiscale = null)
    {

        $resourcePath = '/v1/realEstateData/stima';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($id_richiesta !== null) {
            $queryParams['idRichiesta'] = ObjectSerializer::toQueryValue($id_richiesta);
        }
        // query params
        if ($id_soggetto !== null) {
            $queryParams['idSoggetto'] = ObjectSerializer::toQueryValue($id_soggetto);
        }
        // query params
        if ($codice_fiscale !== null) {
            $queryParams['codiceFiscale'] = ObjectSerializer::toQueryValue($codice_fiscale);
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('apikey');
        if ($apiKey !== null) {
            $headers['apikey'] = $apiKey;
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
