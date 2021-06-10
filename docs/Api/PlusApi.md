# Swagger\Client\PlusApi

All URIs are relative to *https://api.cerved.com/cervedApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**realEstatePlusGET**](PlusApi.md#realEstatePlusGET) | **GET** /v1/realEstateData/plus | Plus
[**realEstatePlusProvinciaGET**](PlusApi.md#realEstatePlusProvinciaGET) | **GET** /v1/realEstateData/plus/provincia | Plus Province


# **realEstatePlusGET**
> \Swagger\Client\Model\RispostaPlus realEstatePlusGET($id_richiesta, $id_soggetto, $codice_fiscale)

Plus

Ricerca dati catastali nazionali in tempo reale con metri quadri immobile  <br>  La soluzione più evoluta che integra la versione Base con le informazioni sui mq di un immobile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\PlusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_richiesta = "id_richiesta_example"; // string | token/identificativo univoco Cerved relativo alla specifica richiesta sottomessa (in caso di evasione/response effettiva asincrona serve per il reperimento dei contenuti corrispondenti alla richiesta in questione)
$id_soggetto = "id_soggetto_example"; // string | Identificativo univoco Cerved del Soggetto (persona fisica o giuridica)
$codice_fiscale = "codice_fiscale_example"; // string | Codice fiscale del Soggetto (persona fisica o giuridica)

try {
    $result = $apiInstance->realEstatePlusGET($id_richiesta, $id_soggetto, $codice_fiscale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlusApi->realEstatePlusGET: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\RispostaPlus**](../Model/RispostaPlus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **realEstatePlusProvinciaGET**
> \Swagger\Client\Model\RispostaPlus realEstatePlusProvinciaGET($provincia, $id_richiesta, $id_soggetto, $codice_fiscale)

Plus Province

Ricerca dati catastali provinciali in tempo reale con metri quadri immobile  <br>  La soluzione più evoluta che integra la versione Base con le informazioni sui mq di un immobile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\PlusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provincia = "provincia_example"; // string | Sigla provincia ISTAT del rapporto catastale
$id_richiesta = "id_richiesta_example"; // string | token/identificativo univoco Cerved relativo alla specifica richiesta sottomessa (in caso di evasione/response effettiva asincrona serve per il reperimento dei contenuti corrispondenti alla richiesta in questione)
$id_soggetto = "id_soggetto_example"; // string | Identificativo univoco Cerved del Soggetto (persona fisica o giuridica)
$codice_fiscale = "codice_fiscale_example"; // string | Codice fiscale del Soggetto (persona fisica o giuridica)

try {
    $result = $apiInstance->realEstatePlusProvinciaGET($provincia, $id_richiesta, $id_soggetto, $codice_fiscale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlusApi->realEstatePlusProvinciaGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **provincia** | **string**| Sigla provincia ISTAT del rapporto catastale |
 **id_richiesta** | **string**| token/identificativo univoco Cerved relativo alla specifica richiesta sottomessa (in caso di evasione/response effettiva asincrona serve per il reperimento dei contenuti corrispondenti alla richiesta in questione) | [optional]
 **id_soggetto** | **string**| Identificativo univoco Cerved del Soggetto (persona fisica o giuridica) | [optional]
 **codice_fiscale** | **string**| Codice fiscale del Soggetto (persona fisica o giuridica) | [optional]

### Return type

[**\Swagger\Client\Model\RispostaPlus**](../Model/RispostaPlus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

