<?php
/**
 * TaxId
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Gr4vy API
 *
 * Welcome to the Gr4vy API reference documentation. Our API is still very much a work in product and subject to change.
 *
 * The version of the OpenAPI document: 1.1.0-beta
 * Contact: code@gr4vy.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Gr4vy\model;

use \ArrayAccess;
use \Gr4vy\ObjectSerializer;

/**
 * TaxId Class Doc Comment
 *
 * @category Class
 * @description The tax ID information associated to a buyer.
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TaxId implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaxId';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'value' => 'string',
        'kind' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'value' => null,
        'kind' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'value' => 'value',
        'kind' => 'kind'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'value' => 'setValue',
        'kind' => 'setKind'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'value' => 'getValue',
        'kind' => 'getKind'
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
        return self::$openAPIModelName;
    }

    const KIND_AE_TRN = 'ae.trn';
    const KIND_AU_ABN = 'au.abn';
    const KIND_AR_CUIT = 'ar.cuit';
    const KIND_BR_CNPJ = 'br.cnpj';
    const KIND_BR_CPF = 'br.cpf';
    const KIND_CA_BN = 'ca.bn';
    const KIND_CA_GST_HST = 'ca.gst_hst';
    const KIND_CA_PST_BC = 'ca.pst_bc';
    const KIND_CA_PST_MB = 'ca.pst_mb';
    const KIND_CA_PST_SK = 'ca.pst_sk';
    const KIND_CA_QST = 'ca.qst';
    const KIND_CH_VAT = 'ch.vat';
    const KIND_CL_TIN = 'cl.tin';
    const KIND_ES_CIF = 'es.cif';
    const KIND_EU_VAT = 'eu.vat';
    const KIND_GB_VAT = 'gb.vat';
    const KIND_HK_BR = 'hk.br';
    const KIND_ID_NIK = 'id.nik';
    const KIND_ID_NPWP = 'id.npwp';
    const KIND_IN_GST = 'in.gst';
    const KIND_JP_CN = 'jp.cn';
    const KIND_JP_RN = 'jp.rn';
    const KIND_KR_BRN = 'kr.brn';
    const KIND_LI_UID = 'li.uid';
    const KIND_MX_RFC = 'mx.rfc';
    const KIND_MY_FRP = 'my.frp';
    const KIND_MY_ITN = 'my.itn';
    const KIND_MY_NRIC = 'my.nric';
    const KIND_MY_SST = 'my.sst';
    const KIND_NO_VAT = 'no.vat';
    const KIND_NZ_GST = 'nz.gst';
    const KIND_RU_INN = 'ru.inn';
    const KIND_RU_KPP = 'ru.kpp';
    const KIND_SA_VAT = 'sa.vat';
    const KIND_SG_GST = 'sg.gst';
    const KIND_SG_UEN = 'sg.uen';
    const KIND_TH_ID = 'th.id';
    const KIND_TH_VAT = 'th.vat';
    const KIND_TW_VAT = 'tw.vat';
    const KIND_US_EIN = 'us.ein';
    const KIND_ZA_VAT = 'za.vat';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKindAllowableValues()
    {
        return [
            self::KIND_AE_TRN,
            self::KIND_AU_ABN,
            self::KIND_AR_CUIT,
            self::KIND_BR_CNPJ,
            self::KIND_BR_CPF,
            self::KIND_CA_BN,
            self::KIND_CA_GST_HST,
            self::KIND_CA_PST_BC,
            self::KIND_CA_PST_MB,
            self::KIND_CA_PST_SK,
            self::KIND_CA_QST,
            self::KIND_CH_VAT,
            self::KIND_CL_TIN,
            self::KIND_ES_CIF,
            self::KIND_EU_VAT,
            self::KIND_GB_VAT,
            self::KIND_HK_BR,
            self::KIND_ID_NIK,
            self::KIND_ID_NPWP,
            self::KIND_IN_GST,
            self::KIND_JP_CN,
            self::KIND_JP_RN,
            self::KIND_KR_BRN,
            self::KIND_LI_UID,
            self::KIND_MX_RFC,
            self::KIND_MY_FRP,
            self::KIND_MY_ITN,
            self::KIND_MY_NRIC,
            self::KIND_MY_SST,
            self::KIND_NO_VAT,
            self::KIND_NZ_GST,
            self::KIND_RU_INN,
            self::KIND_RU_KPP,
            self::KIND_SA_VAT,
            self::KIND_SG_GST,
            self::KIND_SG_UEN,
            self::KIND_TH_ID,
            self::KIND_TH_VAT,
            self::KIND_TW_VAT,
            self::KIND_US_EIN,
            self::KIND_ZA_VAT,
        ];
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
        $this->container['value'] = $data['value'] ?? null;
        $this->container['kind'] = $data['kind'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ((mb_strlen($this->container['value']) > 50)) {
            $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['value']) < 1)) {
            $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['kind'] === null) {
            $invalidProperties[] = "'kind' can't be null";
        }
        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($this->container['kind']) && !in_array($this->container['kind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'kind', must be one of '%s'",
                $this->container['kind'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value The tax ID for the buyer.
     *
     * @return self
     */
    public function setValue($value)
    {
        if ((mb_strlen($value) > 50)) {
            throw new \InvalidArgumentException('invalid length for $value when calling TaxId., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($value) < 1)) {
            throw new \InvalidArgumentException('invalid length for $value when calling TaxId., must be bigger than or equal to 1.');
        }

        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string $kind The kind of tax ID.
     *
     * @return self
     */
    public function setKind($kind)
    {
        $allowedValues = $this->getKindAllowableValues();
        if (!in_array($kind, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'kind', must be one of '%s'",
                    $kind,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['kind'] = $kind;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


