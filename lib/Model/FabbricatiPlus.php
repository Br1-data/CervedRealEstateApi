<?php
/**
 * FabbricatiPlus
 *
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * FabbricatiPlus Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FabbricatiPlus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FabbricatiPlus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_immobile' => 'float',
        'codice_belfiore' => 'string',
        'codice_comune' => 'string',
        'descrizione_comune' => 'string',
        'codice_provincia' => 'string',
        'foglio' => 'string',
        'particella' => 'string',
        'denominatore_particella' => 'string',
        'subalterno' => 'string',
        'sezione_amministrativa' => 'string',
        'sezione_urbana' => 'string',
        'classe' => 'string',
        'indirizzo' => 'string',
        'piano' => 'string',
        'codice_categoria' => 'string',
        'descrizione_categoria' => 'string',
        'valore_consistenza' => 'float',
        'unita_misura_consistenza' => 'string',
        'rendita' => 'float',
        'possessi' => '\Swagger\Client\Model\Possessi[]',
        'superficie_catastale' => 'string',
        'superficie_catastale_coperta' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_immobile' => null,
        'codice_belfiore' => null,
        'codice_comune' => null,
        'descrizione_comune' => null,
        'codice_provincia' => null,
        'foglio' => null,
        'particella' => null,
        'denominatore_particella' => null,
        'subalterno' => null,
        'sezione_amministrativa' => null,
        'sezione_urbana' => null,
        'classe' => null,
        'indirizzo' => null,
        'piano' => null,
        'codice_categoria' => null,
        'descrizione_categoria' => null,
        'valore_consistenza' => null,
        'unita_misura_consistenza' => null,
        'rendita' => null,
        'possessi' => null,
        'superficie_catastale' => null,
        'superficie_catastale_coperta' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id_immobile' => 'idImmobile',
        'codice_belfiore' => 'codiceBelfiore',
        'codice_comune' => 'codiceComune',
        'descrizione_comune' => 'descrizioneComune',
        'codice_provincia' => 'codiceProvincia',
        'foglio' => 'foglio',
        'particella' => 'particella',
        'denominatore_particella' => 'denominatoreParticella',
        'subalterno' => 'subalterno',
        'sezione_amministrativa' => 'sezioneAmministrativa',
        'sezione_urbana' => 'sezioneUrbana',
        'classe' => 'classe',
        'indirizzo' => 'indirizzo',
        'piano' => 'piano',
        'codice_categoria' => 'codiceCategoria',
        'descrizione_categoria' => 'descrizioneCategoria',
        'valore_consistenza' => 'valoreConsistenza',
        'unita_misura_consistenza' => 'unitaMisuraConsistenza',
        'rendita' => 'rendita',
        'possessi' => 'possessi',
        'superficie_catastale' => 'superficieCatastale',
        'superficie_catastale_coperta' => 'superficieCatastaleCoperta'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_immobile' => 'setIdImmobile',
        'codice_belfiore' => 'setCodiceBelfiore',
        'codice_comune' => 'setCodiceComune',
        'descrizione_comune' => 'setDescrizioneComune',
        'codice_provincia' => 'setCodiceProvincia',
        'foglio' => 'setFoglio',
        'particella' => 'setParticella',
        'denominatore_particella' => 'setDenominatoreParticella',
        'subalterno' => 'setSubalterno',
        'sezione_amministrativa' => 'setSezioneAmministrativa',
        'sezione_urbana' => 'setSezioneUrbana',
        'classe' => 'setClasse',
        'indirizzo' => 'setIndirizzo',
        'piano' => 'setPiano',
        'codice_categoria' => 'setCodiceCategoria',
        'descrizione_categoria' => 'setDescrizioneCategoria',
        'valore_consistenza' => 'setValoreConsistenza',
        'unita_misura_consistenza' => 'setUnitaMisuraConsistenza',
        'rendita' => 'setRendita',
        'possessi' => 'setPossessi',
        'superficie_catastale' => 'setSuperficieCatastale',
        'superficie_catastale_coperta' => 'setSuperficieCatastaleCoperta'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_immobile' => 'getIdImmobile',
        'codice_belfiore' => 'getCodiceBelfiore',
        'codice_comune' => 'getCodiceComune',
        'descrizione_comune' => 'getDescrizioneComune',
        'codice_provincia' => 'getCodiceProvincia',
        'foglio' => 'getFoglio',
        'particella' => 'getParticella',
        'denominatore_particella' => 'getDenominatoreParticella',
        'subalterno' => 'getSubalterno',
        'sezione_amministrativa' => 'getSezioneAmministrativa',
        'sezione_urbana' => 'getSezioneUrbana',
        'classe' => 'getClasse',
        'indirizzo' => 'getIndirizzo',
        'piano' => 'getPiano',
        'codice_categoria' => 'getCodiceCategoria',
        'descrizione_categoria' => 'getDescrizioneCategoria',
        'valore_consistenza' => 'getValoreConsistenza',
        'unita_misura_consistenza' => 'getUnitaMisuraConsistenza',
        'rendita' => 'getRendita',
        'possessi' => 'getPossessi',
        'superficie_catastale' => 'getSuperficieCatastale',
        'superficie_catastale_coperta' => 'getSuperficieCatastaleCoperta'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id_immobile'] = isset($data['id_immobile']) ? $data['id_immobile'] : null;
        $this->container['codice_belfiore'] = isset($data['codice_belfiore']) ? $data['codice_belfiore'] : null;
        $this->container['codice_comune'] = isset($data['codice_comune']) ? $data['codice_comune'] : null;
        $this->container['descrizione_comune'] = isset($data['descrizione_comune']) ? $data['descrizione_comune'] : null;
        $this->container['codice_provincia'] = isset($data['codice_provincia']) ? $data['codice_provincia'] : null;
        $this->container['foglio'] = isset($data['foglio']) ? $data['foglio'] : null;
        $this->container['particella'] = isset($data['particella']) ? $data['particella'] : null;
        $this->container['denominatore_particella'] = isset($data['denominatore_particella']) ? $data['denominatore_particella'] : null;
        $this->container['subalterno'] = isset($data['subalterno']) ? $data['subalterno'] : null;
        $this->container['sezione_amministrativa'] = isset($data['sezione_amministrativa']) ? $data['sezione_amministrativa'] : null;
        $this->container['sezione_urbana'] = isset($data['sezione_urbana']) ? $data['sezione_urbana'] : null;
        $this->container['classe'] = isset($data['classe']) ? $data['classe'] : null;
        $this->container['indirizzo'] = isset($data['indirizzo']) ? $data['indirizzo'] : null;
        $this->container['piano'] = isset($data['piano']) ? $data['piano'] : null;
        $this->container['codice_categoria'] = isset($data['codice_categoria']) ? $data['codice_categoria'] : null;
        $this->container['descrizione_categoria'] = isset($data['descrizione_categoria']) ? $data['descrizione_categoria'] : null;
        $this->container['valore_consistenza'] = isset($data['valore_consistenza']) ? $data['valore_consistenza'] : null;
        $this->container['unita_misura_consistenza'] = isset($data['unita_misura_consistenza']) ? $data['unita_misura_consistenza'] : null;
        $this->container['rendita'] = isset($data['rendita']) ? $data['rendita'] : null;
        $this->container['possessi'] = isset($data['possessi']) ? $data['possessi'] : null;
        $this->container['superficie_catastale'] = isset($data['superficie_catastale']) ? $data['superficie_catastale'] : null;
        $this->container['superficie_catastale_coperta'] = isset($data['superficie_catastale_coperta']) ? $data['superficie_catastale_coperta'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id_immobile
     *
     * @return float
     */
    public function getIdImmobile()
    {
        return $this->container['id_immobile'];
    }

    /**
     * Sets id_immobile
     *
     * @param float $id_immobile Identificativo univoco Cerved dell'immobile
     *
     * @return $this
     */
    public function setIdImmobile($id_immobile)
    {
        $this->container['id_immobile'] = $id_immobile;

        return $this;
    }

    /**
     * Gets codice_belfiore
     *
     * @return string
     */
    public function getCodiceBelfiore()
    {
        return $this->container['codice_belfiore'];
    }

    /**
     * Sets codice_belfiore
     *
     * @param string $codice_belfiore Codice Belfiore del comune dell'immobile
     *
     * @return $this
     */
    public function setCodiceBelfiore($codice_belfiore)
    {
        $this->container['codice_belfiore'] = $codice_belfiore;

        return $this;
    }

    /**
     * Gets codice_comune
     *
     * @return string
     */
    public function getCodiceComune()
    {
        return $this->container['codice_comune'];
    }

    /**
     * Sets codice_comune
     *
     * @param string $codice_comune Codice Comune Cerved dell'immobile
     *
     * @return $this
     */
    public function setCodiceComune($codice_comune)
    {
        $this->container['codice_comune'] = $codice_comune;

        return $this;
    }

    /**
     * Gets descrizione_comune
     *
     * @return string
     */
    public function getDescrizioneComune()
    {
        return $this->container['descrizione_comune'];
    }

    /**
     * Sets descrizione_comune
     *
     * @param string $descrizione_comune Comune dell'immobile
     *
     * @return $this
     */
    public function setDescrizioneComune($descrizione_comune)
    {
        $this->container['descrizione_comune'] = $descrizione_comune;

        return $this;
    }

    /**
     * Gets codice_provincia
     *
     * @return string
     */
    public function getCodiceProvincia()
    {
        return $this->container['codice_provincia'];
    }

    /**
     * Sets codice_provincia
     *
     * @param string $codice_provincia Codice Provincia dell'immobile
     *
     * @return $this
     */
    public function setCodiceProvincia($codice_provincia)
    {
        $this->container['codice_provincia'] = $codice_provincia;

        return $this;
    }

    /**
     * Gets foglio
     *
     * @return string
     */
    public function getFoglio()
    {
        return $this->container['foglio'];
    }

    /**
     * Sets foglio
     *
     * @param string $foglio Porzione di territorio comunale che il catasto rappresenta nelle proprie mappe cartografiche
     *
     * @return $this
     */
    public function setFoglio($foglio)
    {
        $this->container['foglio'] = $foglio;

        return $this;
    }

    /**
     * Gets particella
     *
     * @return string
     */
    public function getParticella()
    {
        return $this->container['particella'];
    }

    /**
     * Sets particella
     *
     * @param string $particella Rappresenta all'interno del foglio una porzione di terreno o il fabbricato e l'eventuale area di pertinenza, e tranne rare eccezioni viene contrassegnata da un numero
     *
     * @return $this
     */
    public function setParticella($particella)
    {
        $this->container['particella'] = $particella;

        return $this;
    }

    /**
     * Gets denominatore_particella
     *
     * @return string
     */
    public function getDenominatoreParticella()
    {
        return $this->container['denominatore_particella'];
    }

    /**
     * Sets denominatore_particella
     *
     * @param string $denominatore_particella Dato eventualmente presente solo per immobili che appartengono al Catasto fondiario (province di Trieste e Gorizia e porzioni di quelle di Udine e Belluno)
     *
     * @return $this
     */
    public function setDenominatoreParticella($denominatore_particella)
    {
        $this->container['denominatore_particella'] = $denominatore_particella;

        return $this;
    }

    /**
     * Gets subalterno
     *
     * @return string
     */
    public function getSubalterno()
    {
        return $this->container['subalterno'];
    }

    /**
     * Sets subalterno
     *
     * @param string $subalterno Per il Catasto fabbricati, dove presente, identifica un bene immobile, compresa la singola unit?? immobiliare esistente su una particella. L'unit?? immobiliare urbana ?? l'elemento minimo inventariabile che ha autonomia reddituale e funzionale. Generalmente nell'ipotesi di un intero fabbricato ciascuna unit?? immobiliare ?? identificata da un proprio subalterno. Qualora il fabbricato sia costituito da un'unica unit?? immobiliare il subalterno potrebbe essere assente. Il dato, qualora esistente, ?? necessario per l'univoca identificazione della singola unit?? immobiliare; diversamente, il sistema produrr?? l'elenco delle unit?? immobiliari urbane aventi stessa particella al fine della loro successiva selezione singola. Per il Catasto terreni, dove presente essenzialmente si riferisce ai fabbricati rurali
     *
     * @return $this
     */
    public function setSubalterno($subalterno)
    {
        $this->container['subalterno'] = $subalterno;

        return $this;
    }

    /**
     * Gets sezione_amministrativa
     *
     * @return string
     */
    public function getSezioneAmministrativa()
    {
        return $this->container['sezione_amministrativa'];
    }

    /**
     * Sets sezione_amministrativa
     *
     * @param string $sezione_amministrativa Suddivisione (presente solo in alcuni contesti territoriali e quindi in generale non richiesta) del territorio del Comune. E' tecnicamente denominata anche comune catastale e viene identificata da una lettera e da una denominazione
     *
     * @return $this
     */
    public function setSezioneAmministrativa($sezione_amministrativa)
    {
        $this->container['sezione_amministrativa'] = $sezione_amministrativa;

        return $this;
    }

    /**
     * Gets sezione_urbana
     *
     * @return string
     */
    public function getSezioneUrbana()
    {
        return $this->container['sezione_urbana'];
    }

    /**
     * Sets sezione_urbana
     *
     * @param string $sezione_urbana Ulteriore suddivisione del territorio comunale che al pari della sezione amministrativa ?? presente solo in alcuni Comuni (e quindi in generale non ?? richiesta), indipendentemente dall'esistenza della sezione amministrativa
     *
     * @return $this
     */
    public function setSezioneUrbana($sezione_urbana)
    {
        $this->container['sezione_urbana'] = $sezione_urbana;

        return $this;
    }

    /**
     * Gets classe
     *
     * @return string
     */
    public function getClasse()
    {
        return $this->container['classe'];
    }

    /**
     * Sets classe
     *
     * @param string $classe Parametro che identifica il grado di produttivit?? delle unit?? immobiliari appartenenti alle categorie dei gruppi A, B e C. Viene indicata con 'U' (unica) in assenza di una ripartizione in classi della categoria (ci??, in quanto, la redditivit?? ?? omogenea all'interno del Comune o della zona censuaria) ovvero con i numeri da '1'a 'n' al crescere della redditivita
     *
     * @return $this
     */
    public function setClasse($classe)
    {
        $this->container['classe'] = $classe;

        return $this;
    }

    /**
     * Gets indirizzo
     *
     * @return string
     */
    public function getIndirizzo()
    {
        return $this->container['indirizzo'];
    }

    /**
     * Sets indirizzo
     *
     * @param string $indirizzo Indirizzo di ubicazione dell'immobile
     *
     * @return $this
     */
    public function setIndirizzo($indirizzo)
    {
        $this->container['indirizzo'] = $indirizzo;

        return $this;
    }

    /**
     * Gets piano
     *
     * @return string
     */
    public function getPiano()
    {
        return $this->container['piano'];
    }

    /**
     * Sets piano
     *
     * @param string $piano Piano di ubicazione dell'immobile
     *
     * @return $this
     */
    public function setPiano($piano)
    {
        $this->container['piano'] = $piano;

        return $this;
    }

    /**
     * Gets codice_categoria
     *
     * @return string
     */
    public function getCodiceCategoria()
    {
        return $this->container['codice_categoria'];
    }

    /**
     * Sets codice_categoria
     *
     * @param string $codice_categoria Codice della Categoria Catastale dell'immobile
     *
     * @return $this
     */
    public function setCodiceCategoria($codice_categoria)
    {
        $this->container['codice_categoria'] = $codice_categoria;

        return $this;
    }

    /**
     * Gets descrizione_categoria
     *
     * @return string
     */
    public function getDescrizioneCategoria()
    {
        return $this->container['descrizione_categoria'];
    }

    /**
     * Sets descrizione_categoria
     *
     * @param string $descrizione_categoria Descrizione testuale del codice categoria catastale dell'immobile, che indica la tipologia delle unit?? immobiliari, presenti nella zona censuaria, differente per le caratteristiche intrinseche che ne determinano la destinazione ordinaria e permanente
     *
     * @return $this
     */
    public function setDescrizioneCategoria($descrizione_categoria)
    {
        $this->container['descrizione_categoria'] = $descrizione_categoria;

        return $this;
    }

    /**
     * Gets valore_consistenza
     *
     * @return float
     */
    public function getValoreConsistenza()
    {
        return $this->container['valore_consistenza'];
    }

    /**
     * Sets valore_consistenza
     *
     * @param float $valore_consistenza Dimensione dell'unit??  immobiliare. Per le abitazioni e gli uffici (immobili della categoria A) ?? espressa in \"vani\". Per i negozi, i magazzini, le rimesse (immobili della categoria C) ?? espressa in metri quadrati. Per gli immobili a destinazione collettiva (ospedali, caserme, ecc.) ?? espressa in metri cubi. Per gli immobili appartenenti alle categorie speciali dei gruppi D ed E non viene indicata la consistenza catastale
     *
     * @return $this
     */
    public function setValoreConsistenza($valore_consistenza)
    {
        $this->container['valore_consistenza'] = $valore_consistenza;

        return $this;
    }

    /**
     * Gets unita_misura_consistenza
     *
     * @return string
     */
    public function getUnitaMisuraConsistenza()
    {
        return $this->container['unita_misura_consistenza'];
    }

    /**
     * Sets unita_misura_consistenza
     *
     * @param string $unita_misura_consistenza Unit??  di misura utilizzata associata al Valore Consistenza
     *
     * @return $this
     */
    public function setUnitaMisuraConsistenza($unita_misura_consistenza)
    {
        $this->container['unita_misura_consistenza'] = $unita_misura_consistenza;

        return $this;
    }

    /**
     * Gets rendita
     *
     * @return float
     */
    public function getRendita()
    {
        return $this->container['rendita'];
    }

    /**
     * Sets rendita
     *
     * @param float $rendita Per le unit??  immobiliari appartenenti alle categorie dei gruppi A, B e C, la rendita catastale ?? determinata moltiplicando la consistenza per la tariffa unitaria specifica per Comune, zona censuaria e corrispondente alla categoria e classe. Per le unit?? immobiliari appartenenti ai gruppi delle categorie D ed E la rendita ?? determinata attraverso stima diretta
     *
     * @return $this
     */
    public function setRendita($rendita)
    {
        $this->container['rendita'] = $rendita;

        return $this;
    }

    /**
     * Gets possessi
     *
     * @return \Swagger\Client\Model\Possessi[]
     */
    public function getPossessi()
    {
        return $this->container['possessi'];
    }

    /**
     * Sets possessi
     *
     * @param \Swagger\Client\Model\Possessi[] $possessi Possessi
     *
     * @return $this
     */
    public function setPossessi($possessi)
    {
        $this->container['possessi'] = $possessi;

        return $this;
    }

    /**
     * Gets superficie_catastale
     *
     * @return string
     */
    public function getSuperficieCatastale()
    {
        return $this->container['superficie_catastale'];
    }

    /**
     * Sets superficie_catastale
     *
     * @param string $superficie_catastale Metri quadrati totali per Gruppo Catastale A, B, C
     *
     * @return $this
     */
    public function setSuperficieCatastale($superficie_catastale)
    {
        $this->container['superficie_catastale'] = $superficie_catastale;

        return $this;
    }

    /**
     * Gets superficie_catastale_coperta
     *
     * @return string
     */
    public function getSuperficieCatastaleCoperta()
    {
        return $this->container['superficie_catastale_coperta'];
    }

    /**
     * Sets superficie_catastale_coperta
     *
     * @param string $superficie_catastale_coperta Metri quadrati escluse aree scoperte. Gruppo Catastale A
     *
     * @return $this
     */
    public function setSuperficieCatastaleCoperta($superficie_catastale_coperta)
    {
        $this->container['superficie_catastale_coperta'] = $superficie_catastale_coperta;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


