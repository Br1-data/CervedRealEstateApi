# Swagger\Client\BaseApi

All URIs are relative to *https://api.cerved.com/cervedApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**realEstateBaseGET**](BaseApi.md#realEstateBaseGET) | **GET** /v1/realEstateData/base | Base
[**realEstateCointestatariFabbricatoBasePOST**](BaseApi.md#realEstateCointestatariFabbricatoBasePOST) | **POST** /v1/realEstateData/cointestatari/fabbricato/base | Base - Joint Owner - Building
[**realEstateCointestatariTerrenoBasePOST**](BaseApi.md#realEstateCointestatariTerrenoBasePOST) | **POST** /v1/realEstateData/cointestatari/terreno/base | Base - Joint Owner - Land


# **realEstateBaseGET**
> \Swagger\Client\Model\RispostaBase realEstateBaseGET($id_richiesta, $id_soggetto, $codice_fiscale)

Base

Ricerca dati catastali in tempo reale  <br>  La soluzione entry-level per acquisire in tempo reale i dati catastali relativi alle proprietà immobiliari.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\BaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_richiesta = "id_richiesta_example"; // string | token/identificativo univoco Cerved relativo alla specifica richiesta sottomessa (in caso di evasione/response effettiva asincrona serve per il reperimento dei contenuti corrispondenti alla richiesta in questione)
$id_soggetto = "id_soggetto_example"; // string | Identificativo univoco Cerved del Soggetto (persona fisica o giuridica)
$codice_fiscale = "codice_fiscale_example"; // string | Codice fiscale del Soggetto (persona fisica o giuridica)

try {
    $result = $apiInstance->realEstateBaseGET($id_richiesta, $id_soggetto, $codice_fiscale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BaseApi->realEstateBaseGET: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RispostaBase**](../Model/RispostaBase.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **realEstateCointestatariFabbricatoBasePOST**
> \Swagger\Client\Model\RispostaBaseFabbricatoCointestatari realEstateCointestatariFabbricatoBasePOST($request)

Base - Joint Owner - Building

Elenco cointestatari per fabbricato  <br>  Il servizio per chi desidera i dati catastali ed i cointestatari relativi a un fabbricato.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\BaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\CointestatariFabbricatoRequest(); // \Swagger\Client\Model\CointestatariFabbricatoRequest | dati catastali con i quali recuperare le informazioni

try {
    $result = $apiInstance->realEstateCointestatariFabbricatoBasePOST($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BaseApi->realEstateCointestatariFabbricatoBasePOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\CointestatariFabbricatoRequest**](../Model/CointestatariFabbricatoRequest.md)| dati catastali con i quali recuperare le informazioni | [optional]

### Return type

[**\Swagger\Client\Model\RispostaBaseFabbricatoCointestatari**](../Model/RispostaBaseFabbricatoCointestatari.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **realEstateCointestatariTerrenoBasePOST**
> \Swagger\Client\Model\RispostaBaseTerrenoCointestatari realEstateCointestatariTerrenoBasePOST($request)

Base - Joint Owner - Land

Elenco cointestatari per terreno  <br>  Il servizio per chi desidera i dati catastali ed i cointestatari relativi a un terreno.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\BaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\CointestatariTerrenoRequest(); // \Swagger\Client\Model\CointestatariTerrenoRequest | dati catastali con i quali recuperare le informazioni

try {
    $result = $apiInstance->realEstateCointestatariTerrenoBasePOST($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BaseApi->realEstateCointestatariTerrenoBasePOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\CointestatariTerrenoRequest**](../Model/CointestatariTerrenoRequest.md)| dati catastali con i quali recuperare le informazioni | [optional]

### Return type

[**\Swagger\Client\Model\RispostaBaseTerrenoCointestatari**](../Model/RispostaBaseTerrenoCointestatari.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

