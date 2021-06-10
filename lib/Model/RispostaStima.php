<?php
/**
 * RispostaStima
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
 * RispostaStima Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RispostaStima implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RispostaStima';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_soggetto' => 'int',
        'codice_fiscale' => 'string',
        'data_rapporto' => 'string',
        'numero_immobili' => 'int',
        'numero_fabbricati' => 'int',
        'numero_terreni' => 'int',
        'fabbricati' => '\Swagger\Client\Model\FabbricatiStima[]',
        'terreni' => '\Swagger\Client\Model\Terreni[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_soggetto' => null,
        'codice_fiscale' => null,
        'data_rapporto' => null,
        'numero_immobili' => null,
        'numero_fabbricati' => null,
        'numero_terreni' => null,
        'fabbricati' => null,
        'terreni' => null
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
        'id_soggetto' => 'idSoggetto',
        'codice_fiscale' => 'codiceFiscale',
        'data_rapporto' => 'dataRapporto',
        'numero_immobili' => 'numeroImmobili',
        'numero_fabbricati' => 'numeroFabbricati',
        'numero_terreni' => 'numeroTerreni',
        'fabbricati' => 'fabbricati',
        'terreni' => 'terreni'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_soggetto' => 'setIdSoggetto',
        'codice_fiscale' => 'setCodiceFiscale',
        'data_rapporto' => 'setDataRapporto',
        'numero_immobili' => 'setNumeroImmobili',
        'numero_fabbricati' => 'setNumeroFabbricati',
        'numero_terreni' => 'setNumeroTerreni',
        'fabbricati' => 'setFabbricati',
        'terreni' => 'setTerreni'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_soggetto' => 'getIdSoggetto',
        'codice_fiscale' => 'getCodiceFiscale',
        'data_rapporto' => 'getDataRapporto',
        'numero_immobili' => 'getNumeroImmobili',
        'numero_fabbricati' => 'getNumeroFabbricati',
        'numero_terreni' => 'getNumeroTerreni',
        'fabbricati' => 'getFabbricati',
        'terreni' => 'getTerreni'
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
        $this->container['id_soggetto'] = isset($data['id_soggetto']) ? $data['id_soggetto'] : null;
        $this->container['codice_fiscale'] = isset($data['codice_fiscale']) ? $data['codice_fiscale'] : null;
        $this->container['data_rapporto'] = isset($data['data_rapporto']) ? $data['data_rapporto'] : null;
        $this->container['numero_immobili'] = isset($data['numero_immobili']) ? $data['numero_immobili'] : null;
        $this->container['numero_fabbricati'] = isset($data['numero_fabbricati']) ? $data['numero_fabbricati'] : null;
        $this->container['numero_terreni'] = isset($data['numero_terreni']) ? $data['numero_terreni'] : null;
        $this->container['fabbricati'] = isset($data['fabbricati']) ? $data['fabbricati'] : null;
        $this->container['terreni'] = isset($data['terreni']) ? $data['terreni'] : null;
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
     * Gets id_soggetto
     *
     * @return int
     */
    public function getIdSoggetto()
    {
        return $this->container['id_soggetto'];
    }

    /**
     * Sets id_soggetto
     *
     * @param int $id_soggetto Identificativo univoco Cerved del Soggetto (persona fisica o giuridica)
     *
     * @return $this
     */
    public function setIdSoggetto($id_soggetto)
    {
        $this->container['id_soggetto'] = $id_soggetto;

        return $this;
    }

    /**
     * Gets codice_fiscale
     *
     * @return string
     */
    public function getCodiceFiscale()
    {
        return $this->container['codice_fiscale'];
    }

    /**
     * Sets codice_fiscale
     *
     * @param string $codice_fiscale Codice fiscale del Soggetto
     *
     * @return $this
     */
    public function setCodiceFiscale($codice_fiscale)
    {
        $this->container['codice_fiscale'] = $codice_fiscale;

        return $this;
    }

    /**
     * Gets data_rapporto
     *
     * @return string
     */
    public function getDataRapporto()
    {
        return $this->container['data_rapporto'];
    }

    /**
     * Sets data_rapporto
     *
     * @param string $data_rapporto Ultima data di aggiornamento del Rapporto Catastale
     *
     * @return $this
     */
    public function setDataRapporto($data_rapporto)
    {
        $this->container['data_rapporto'] = $data_rapporto;

        return $this;
    }

    /**
     * Gets numero_immobili
     *
     * @return int
     */
    public function getNumeroImmobili()
    {
        return $this->container['numero_immobili'];
    }

    /**
     * Sets numero_immobili
     *
     * @param int $numero_immobili Numero di immobili (attraverso un legame di possesso) legati all'interrogazione corrente
     *
     * @return $this
     */
    public function setNumeroImmobili($numero_immobili)
    {
        $this->container['numero_immobili'] = $numero_immobili;

        return $this;
    }

    /**
     * Gets numero_fabbricati
     *
     * @return int
     */
    public function getNumeroFabbricati()
    {
        return $this->container['numero_fabbricati'];
    }

    /**
     * Sets numero_fabbricati
     *
     * @param int $numero_fabbricati Numero di fabbricati (attraverso un legame di possesso) legati all'interrogazione corrente
     *
     * @return $this
     */
    public function setNumeroFabbricati($numero_fabbricati)
    {
        $this->container['numero_fabbricati'] = $numero_fabbricati;

        return $this;
    }

    /**
     * Gets numero_terreni
     *
     * @return int
     */
    public function getNumeroTerreni()
    {
        return $this->container['numero_terreni'];
    }

    /**
     * Sets numero_terreni
     *
     * @param int $numero_terreni Numero di terreni (attraverso un legame di possesso) legati all'interrogazione corrente
     *
     * @return $this
     */
    public function setNumeroTerreni($numero_terreni)
    {
        $this->container['numero_terreni'] = $numero_terreni;

        return $this;
    }

    /**
     * Gets fabbricati
     *
     * @return \Swagger\Client\Model\FabbricatiStima[]
     */
    public function getFabbricati()
    {
        return $this->container['fabbricati'];
    }

    /**
     * Sets fabbricati
     *
     * @param \Swagger\Client\Model\FabbricatiStima[] $fabbricati Fabbricati
     *
     * @return $this
     */
    public function setFabbricati($fabbricati)
    {
        $this->container['fabbricati'] = $fabbricati;

        return $this;
    }

    /**
     * Gets terreni
     *
     * @return \Swagger\Client\Model\Terreni[]
     */
    public function getTerreni()
    {
        return $this->container['terreni'];
    }

    /**
     * Sets terreni
     *
     * @param \Swagger\Client\Model\Terreni[] $terreni Lista terreni trovati
     *
     * @return $this
     */
    public function setTerreni($terreni)
    {
        $this->container['terreni'] = $terreni;

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

