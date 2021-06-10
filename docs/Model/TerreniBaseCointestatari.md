# TerreniBaseCointestatari

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_immobile** | **float** | Identificativo univoco Cerved dell&#39;immobile | [optional] 
**classe** | **string** | Parametro che identifica il grado di produttività  delle particelle interessate da una qualità  di coltura. Viene indicata con &#39;U&#39; (unica) in assenza di una ripartizione in classi della categoria (ciò, in quanto, la redditività  è omogenea all&#39;interno del Comune o della zona censuaria) ovvero con i numeri da &#39;1&#39; a &#39;n&#39; dove la classe 1 rappresenta quella di maggior reddito | [optional] 
**foglio** | **string** | Porzione di territorio comunale che il catasto rappresenta nelle proprie mappe cartografiche | [optional] 
**particella** | **string** | Rappresenta all&#39;interno del foglio una porzione di terreno o il fabbricato e l&#39;eventuale area di pertinenza, e tranne rare eccezioni viene contrassegnata da un numero | [optional] 
**denominatore_particella** | **string** | Dato eventualmente presente solo per immobili che appartengono al Catasto fondiario (province di Trieste e Gorizia e porzioni di quelle di Udine e Belluno) | [optional] 
**subalterno** | **int** | Per il Catasto fabbricati, dove presente, identifica un bene immobile, compresa la singola unità  immobiliare esistente su una particella. L&#39;unità  immobiliare urbana è l&#39;elemento minimo inventariabile che ha autonomia reddituale e funzionale. Generalmente nell&#39;ipotesi di un intero fabbricato ciascuna unità immobiliare è identificata da un proprio subalterno. Qualora il fabbricato sia costituito da un&#39;unica unità immobiliare il subalterno potrebbe essere assente. Il dato, qualora esistente, è necessario per l&#39;univoca identificazione della singola unità  immobiliare; diversamente, il sistema produrrà  l&#39;elenco delle unità immobiliari urbane aventi stessa particella al fine della loro successiva selezione singola. Per il Catasto terreni, dove presente essenzialmente si riferisce ai fabbricati rurali | [optional] 
**sezione_censuaria** | **string** | Suddivisione territoriale del Comune catastale. E&#39; identificata da una lettera e da una denominazione | [optional] 
**codice_porzione** | **string** | In caso di terreno porzionato è il codice identificativo della porzione in cui è suddiviso il terreno | [optional] 
**qualita** | **string** | Tipo di macrocoltura agraria attribuita a una particella del Catasto terreni, o sua porzione, avente rilevanza ai fini della conservazione del Catasto. Qualora la particella sia suddivisa in porzioni che presentano colturali diverse viene riportata la dicitura \&quot;Modello 26\&quot; senza ulteriori dettagli disponibili solo attraverso una visura ordinaria | [optional] 
**superficie_ettari** | **float** | Superficie in ettari del terreno | [optional] 
**superficie_are** | **float** | Superficie in are del terreno | [optional] 
**superficie_centiare** | **float** | Superficie in centiare del terreno | [optional] 
**rendita_dominicale** | **float** | Parte del reddito medio ordinario ritraibile dall&#39;esercizio delle attività  agricole, che spetta al proprietario del terreno. è correlato alla qualità  del terreno e alla sua produttività media ordinaria | [optional] 
**rendita_agraria** | **float** | Parte del reddito medio ordinario dei terreni imputabile al capitale di esercizio e al lavoro di organizzazione impiegati, nei limiti della potenzialità  del terreno, nell&#39;esercizio delle attività  agricole. è correlato alla qualità del terreno e alla sua produttività media ordinaria | [optional] 
**possessi** | [**\Swagger\Client\Model\Cointestatari[]**](Cointestatari.md) | Possessi | [optional] 
**catasto** | [**\Swagger\Client\Model\DatiCatastali**](DatiCatastali.md) | Dati catastali storici | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


