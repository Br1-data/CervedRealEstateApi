# RispostaPlus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_soggetto** | **int** | Identificativo univoco Cerved del Soggetto (persona fisica o giuridica) | [optional] 
**codice_fiscale** | **string** | Codice fiscale del Soggetto | [optional] 
**data_rapporto** | **string** | Ultima data di aggiornamento del Rapporto Catastale | [optional] 
**numero_immobili** | **int** | Numero di immobili (attraverso un legame di possesso) legati all&#39;interrogazione corrente | [optional] 
**numero_fabbricati** | **int** | Numero di fabbricati (attraverso un legame di possesso) legati all&#39;interrogazione corrente | [optional] 
**numero_terreni** | **int** | Numero di terreni (attraverso un legame di possesso) legati all&#39;interrogazione corrente | [optional] 
**fabbricati** | [**\Swagger\Client\Model\FabbricatiPlus[]**](FabbricatiPlus.md) | Fabbricati | [optional] 
**terreni** | [**\Swagger\Client\Model\Terreni[]**](Terreni.md) | Lista terreni trovati | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


