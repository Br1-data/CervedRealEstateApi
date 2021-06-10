# Swagger\Client\StimaApi

All URIs are relative to *https://api.cerved.com/cervedApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**realEstateCointestatariFabbricatoStimaPOST**](StimaApi.md#realEstateCointestatariFabbricatoStimaPOST) | **POST** /v1/realEstateData/cointestatari/fabbricato/stima | Estimation - Joint Owner - Building
[**realEstateStimaGET**](StimaApi.md#realEstateStimaGET) | **GET** /v1/realEstateData/stima | Estimation


# **realEstateCointestatariFabbricatoStimaPOST**
> \Swagger\Client\Model\RispostaStimaFabbricatoCointestatari realEstateCointestatariFabbricatoStimaPOST($request)

Estimation - Joint Owner - Building

Elenco cointestatari per immobile con valutazione di vendita dei fabbricati  <br>  Il servizio per chi, oltre ai dati catastali ed i cointestatari, desidera conoscere la valutazione di vendita di un fabbricato.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\StimaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\CointestatariFabbricatoRequest(); // \Swagger\Client\Model\CointestatariFabbricatoRequest | dati catastali con i quali recuperare le informazioni

try {
    $result = $apiInstance->realEstateCointestatariFabbricatoStimaPOST($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StimaApi->realEstateCointestatariFabbricatoStimaPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\CointestatariFabbricatoRequest**](../Model/CointestatariFabbricatoRequest.md)| dati catastali con i quali recuperare le informazioni | [optional]

### Return type

[**\Swagger\Client\Model\RispostaStimaFabbricatoCointestatari**](../Model/RispostaStimaFabbricatoCointestatari.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **realEstateStimaGET**
> \Swagger\Client\Model\RispostaStima realEstateStimaGET($id_richiesta, $id_soggetto, $codice_fiscale)

Estimation

Ricerca dati catastali con valutazione di vendita dei fabbricati  <br>  Il servizio per chi, oltre ai dati catastali, desidera conoscere la valutazione di vendita di un fabbricato.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\StimaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_richiesta = "id_richiesta_example"; // string | token/identificativo univoco Cerved relativo alla specifica richiesta sottomessa (in caso di evasione/response effettiva asincrona serve per il reperimento dei contenuti corrispondenti alla richiesta in questione)
$id_soggetto = "id_soggetto_example"; // string | Identificativo univoco Cerved del Soggetto (persona fisica o giuridica)
$codice_fiscale = "codice_fiscale_example"; // string | Codice fiscale del Soggetto (persona fisica o giuridica)

try {
    $result = $apiInstance->realEstateStimaGET($id_richiesta, $id_soggetto, $codice_fiscale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StimaApi->realEstateStimaGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_richiesta** | **string**| token/identificativo univoco Cerved relativo alla specifica richiesta sottomessa (in caso di evasione/response effettiva asincrona serve per il reperimento dei contenuti corrispondenti alla richiesta in questione) | [optional]
 **id_soggetto** | **string**| Identificativo univoco Cerved del Soggetto (persona fisica o giuridica) | [optional]
 **codice_fiscale** | **string**| Codice fiscale del Soggetto (persona fisica o giuridica) | [optional]

### Return type

[**\Swagger\Client\Model\RispostaStima**](../Model/RispostaStima.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

