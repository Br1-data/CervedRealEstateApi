# FabbricatiBaseCointestatari

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_immobile** | **float** | Identificativo univoco Cerved dell&#39;immobile | [optional] 
**foglio** | **string** | Porzione di territorio comunale che il catasto rappresenta nelle proprie mappe cartografiche | [optional] 
**particella** | **string** | Rappresenta all&#39;interno del foglio una porzione di terreno o il fabbricato e l&#39;eventuale area di pertinenza, e tranne rare eccezioni viene contrassegnata da un numero | [optional] 
**denominatore_particella** | **string** | Dato eventualmente presente solo per immobili che appartengono al Catasto fondiario (province di Trieste e Gorizia e porzioni di quelle di Udine e Belluno) | [optional] 
**subalterno** | **string** | Per il Catasto fabbricati, dove presente, identifica un bene immobile, compresa la singola unità immobiliare esistente su una particella. L&#39;unità immobiliare urbana è l&#39;elemento minimo inventariabile che ha autonomia reddituale e funzionale. Generalmente nell&#39;ipotesi di un intero fabbricato ciascuna unità immobiliare è identificata da un proprio subalterno. Qualora il fabbricato sia costituito da un&#39;unica unità immobiliare il subalterno potrebbe essere assente. Il dato, qualora esistente, è necessario per l&#39;univoca identificazione della singola unità immobiliare; diversamente, il sistema produrrà l&#39;elenco delle unità immobiliari urbane aventi stessa particella al fine della loro successiva selezione singola. Per il Catasto terreni, dove presente essenzialmente si riferisce ai fabbricati rurali | [optional] 
**sezione_amministrativa** | **string** | Suddivisione (presente solo in alcuni contesti territoriali e quindi in generale non richiesta) del territorio del Comune. E&#39; tecnicamente denominata anche comune catastale e viene identificata da una lettera e da una denominazione | [optional] 
**sezione_urbana** | **string** | Ulteriore suddivisione del territorio comunale che al pari della sezione amministrativa è presente solo in alcuni Comuni (e quindi in generale non è richiesta), indipendentemente dall&#39;esistenza della sezione amministrativa | [optional] 
**classe** | **string** | Parametro che identifica il grado di produttività delle unità immobiliari appartenenti alle categorie dei gruppi A, B e C. Viene indicata con &#39;U&#39; (unica) in assenza di una ripartizione in classi della categoria (ciò, in quanto, la redditività è omogenea all&#39;interno del Comune o della zona censuaria) ovvero con i numeri da &#39;1&#39;a &#39;n&#39; al crescere della redditivita | [optional] 
**indirizzo** | **string** | Indirizzo di ubicazione dell&#39;immobile | [optional] 
**piano** | **string** | Piano di ubicazione dell&#39;immobile | [optional] 
**codice_categoria** | **string** | Codice della Categoria Catastale dell&#39;immobile | [optional] 
**descrizione_categoria** | **string** | Descrizione testuale del codice categoria catastale dell&#39;immobile, che indica la tipologia delle unità immobiliari, presenti nella zona censuaria, differente per le caratteristiche intrinseche che ne determinano la destinazione ordinaria e permanente | [optional] 
**valore_consistenza** | **float** | Dimensione dell&#39;unità  immobiliare. Per le abitazioni e gli uffici (immobili della categoria A) è espressa in \&quot;vani\&quot;. Per i negozi, i magazzini, le rimesse (immobili della categoria C) è espressa in metri quadrati. Per gli immobili a destinazione collettiva (ospedali, caserme, ecc.) è espressa in metri cubi. Per gli immobili appartenenti alle categorie speciali dei gruppi D ed E non viene indicata la consistenza catastale | [optional] 
**unita_misura_consistenza** | **string** | Unità  di misura utilizzata associata al Valore Consistenza | [optional] 
**rendita** | **float** | Per le unità  immobiliari appartenenti alle categorie dei gruppi A, B e C, la rendita catastale è determinata moltiplicando la consistenza per la tariffa unitaria specifica per Comune, zona censuaria e corrispondente alla categoria e classe. Per le unità immobiliari appartenenti ai gruppi delle categorie D ed E la rendita è determinata attraverso stima diretta | [optional] 
**possessi** | [**\Swagger\Client\Model\Cointestatari[]**](Cointestatari.md) | Possessi | [optional] 
**comune** | [**\Swagger\Client\Model\DatiCatastali**](DatiCatastali.md) | Dati catastali Cerved | [optional] 
**catasto** | [**\Swagger\Client\Model\DatiCatastali**](DatiCatastali.md) | Dati catastali storici | [optional] 
**superficie_catastale** | **string** | Metri quadrati totali per Gruppo Catastale A, B, C | [optional] 
**superficie_catastale_coperta** | **string** | Metri quadrati escluse aree scoperte. Gruppo Catastale A | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


