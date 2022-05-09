<?php
/**
 * PaymentServiceRequest
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
 * PaymentServiceRequest Class Doc Comment
 *
 * @category Class
 * @description Request body for activating a payment service.
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentServiceRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentServiceRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'display_name' => 'string',
        'fields' => '\Gr4vy\model\PaymentServiceUpdateFields[]',
        'accepted_countries' => 'string[]',
        'accepted_currencies' => 'string[]',
        'three_d_secure_enabled' => 'bool',
        'acquirer_bin_visa' => 'string',
        'acquirer_bin_mastercard' => 'string',
        'acquirer_bin_amex' => 'string',
        'acquirer_bin_discover' => 'string',
        'acquirer_merchant_id' => 'string',
        'merchant_name' => 'string',
        'merchant_country_code' => 'string',
        'merchant_category_code' => 'string',
        'merchant_url' => 'string',
        'active' => 'bool',
        'position' => 'float',
        'payment_method_tokenization_enabled' => 'bool',
        'payment_service_definition_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'display_name' => null,
        'fields' => null,
        'accepted_countries' => null,
        'accepted_currencies' => null,
        'three_d_secure_enabled' => null,
        'acquirer_bin_visa' => null,
        'acquirer_bin_mastercard' => null,
        'acquirer_bin_amex' => null,
        'acquirer_bin_discover' => null,
        'acquirer_merchant_id' => null,
        'merchant_name' => null,
        'merchant_country_code' => null,
        'merchant_category_code' => null,
        'merchant_url' => 'url',
        'active' => null,
        'position' => null,
        'payment_method_tokenization_enabled' => null,
        'payment_service_definition_id' => null
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
        'display_name' => 'display_name',
        'fields' => 'fields',
        'accepted_countries' => 'accepted_countries',
        'accepted_currencies' => 'accepted_currencies',
        'three_d_secure_enabled' => 'three_d_secure_enabled',
        'acquirer_bin_visa' => 'acquirer_bin_visa',
        'acquirer_bin_mastercard' => 'acquirer_bin_mastercard',
        'acquirer_bin_amex' => 'acquirer_bin_amex',
        'acquirer_bin_discover' => 'acquirer_bin_discover',
        'acquirer_merchant_id' => 'acquirer_merchant_id',
        'merchant_name' => 'merchant_name',
        'merchant_country_code' => 'merchant_country_code',
        'merchant_category_code' => 'merchant_category_code',
        'merchant_url' => 'merchant_url',
        'active' => 'active',
        'position' => 'position',
        'payment_method_tokenization_enabled' => 'payment_method_tokenization_enabled',
        'payment_service_definition_id' => 'payment_service_definition_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'display_name' => 'setDisplayName',
        'fields' => 'setFields',
        'accepted_countries' => 'setAcceptedCountries',
        'accepted_currencies' => 'setAcceptedCurrencies',
        'three_d_secure_enabled' => 'setThreeDSecureEnabled',
        'acquirer_bin_visa' => 'setAcquirerBinVisa',
        'acquirer_bin_mastercard' => 'setAcquirerBinMastercard',
        'acquirer_bin_amex' => 'setAcquirerBinAmex',
        'acquirer_bin_discover' => 'setAcquirerBinDiscover',
        'acquirer_merchant_id' => 'setAcquirerMerchantId',
        'merchant_name' => 'setMerchantName',
        'merchant_country_code' => 'setMerchantCountryCode',
        'merchant_category_code' => 'setMerchantCategoryCode',
        'merchant_url' => 'setMerchantUrl',
        'active' => 'setActive',
        'position' => 'setPosition',
        'payment_method_tokenization_enabled' => 'setPaymentMethodTokenizationEnabled',
        'payment_service_definition_id' => 'setPaymentServiceDefinitionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'display_name' => 'getDisplayName',
        'fields' => 'getFields',
        'accepted_countries' => 'getAcceptedCountries',
        'accepted_currencies' => 'getAcceptedCurrencies',
        'three_d_secure_enabled' => 'getThreeDSecureEnabled',
        'acquirer_bin_visa' => 'getAcquirerBinVisa',
        'acquirer_bin_mastercard' => 'getAcquirerBinMastercard',
        'acquirer_bin_amex' => 'getAcquirerBinAmex',
        'acquirer_bin_discover' => 'getAcquirerBinDiscover',
        'acquirer_merchant_id' => 'getAcquirerMerchantId',
        'merchant_name' => 'getMerchantName',
        'merchant_country_code' => 'getMerchantCountryCode',
        'merchant_category_code' => 'getMerchantCategoryCode',
        'merchant_url' => 'getMerchantUrl',
        'active' => 'getActive',
        'position' => 'getPosition',
        'payment_method_tokenization_enabled' => 'getPaymentMethodTokenizationEnabled',
        'payment_service_definition_id' => 'getPaymentServiceDefinitionId'
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
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['fields'] = $data['fields'] ?? null;
        $this->container['accepted_countries'] = $data['accepted_countries'] ?? null;
        $this->container['accepted_currencies'] = $data['accepted_currencies'] ?? null;
        $this->container['three_d_secure_enabled'] = $data['three_d_secure_enabled'] ?? false;
        $this->container['acquirer_bin_visa'] = $data['acquirer_bin_visa'] ?? null;
        $this->container['acquirer_bin_mastercard'] = $data['acquirer_bin_mastercard'] ?? null;
        $this->container['acquirer_bin_amex'] = $data['acquirer_bin_amex'] ?? null;
        $this->container['acquirer_bin_discover'] = $data['acquirer_bin_discover'] ?? null;
        $this->container['acquirer_merchant_id'] = $data['acquirer_merchant_id'] ?? null;
        $this->container['merchant_name'] = $data['merchant_name'] ?? null;
        $this->container['merchant_country_code'] = $data['merchant_country_code'] ?? null;
        $this->container['merchant_category_code'] = $data['merchant_category_code'] ?? null;
        $this->container['merchant_url'] = $data['merchant_url'] ?? null;
        $this->container['active'] = $data['active'] ?? true;
        $this->container['position'] = $data['position'] ?? null;
        $this->container['payment_method_tokenization_enabled'] = $data['payment_method_tokenization_enabled'] ?? false;
        $this->container['payment_service_definition_id'] = $data['payment_service_definition_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ((mb_strlen($this->container['display_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'display_name', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['display_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'display_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['fields'] === null) {
            $invalidProperties[] = "'fields' can't be null";
        }
        if ($this->container['accepted_countries'] === null) {
            $invalidProperties[] = "'accepted_countries' can't be null";
        }
        if ((count($this->container['accepted_countries']) < 1)) {
            $invalidProperties[] = "invalid value for 'accepted_countries', number of items must be greater than or equal to 1.";
        }

        if ($this->container['accepted_currencies'] === null) {
            $invalidProperties[] = "'accepted_currencies' can't be null";
        }
        if ((count($this->container['accepted_currencies']) < 1)) {
            $invalidProperties[] = "invalid value for 'accepted_currencies', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['acquirer_bin_visa']) && (mb_strlen($this->container['acquirer_bin_visa']) > 11)) {
            $invalidProperties[] = "invalid value for 'acquirer_bin_visa', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['acquirer_bin_mastercard']) && (mb_strlen($this->container['acquirer_bin_mastercard']) > 11)) {
            $invalidProperties[] = "invalid value for 'acquirer_bin_mastercard', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['acquirer_bin_amex']) && (mb_strlen($this->container['acquirer_bin_amex']) > 11)) {
            $invalidProperties[] = "invalid value for 'acquirer_bin_amex', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['acquirer_bin_discover']) && (mb_strlen($this->container['acquirer_bin_discover']) > 11)) {
            $invalidProperties[] = "invalid value for 'acquirer_bin_discover', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['acquirer_merchant_id']) && (mb_strlen($this->container['acquirer_merchant_id']) > 35)) {
            $invalidProperties[] = "invalid value for 'acquirer_merchant_id', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['merchant_name']) && (mb_strlen($this->container['merchant_name']) > 40)) {
            $invalidProperties[] = "invalid value for 'merchant_name', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['merchant_country_code']) && !preg_match("/^\\d{3}$/", $this->container['merchant_country_code'])) {
            $invalidProperties[] = "invalid value for 'merchant_country_code', must be conform to the pattern /^\\d{3}$/.";
        }

        if (!is_null($this->container['merchant_category_code']) && (mb_strlen($this->container['merchant_category_code']) > 4)) {
            $invalidProperties[] = "invalid value for 'merchant_category_code', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['merchant_category_code']) && (mb_strlen($this->container['merchant_category_code']) < 4)) {
            $invalidProperties[] = "invalid value for 'merchant_category_code', the character length must be bigger than or equal to 4.";
        }

        if (!is_null($this->container['merchant_url']) && (mb_strlen($this->container['merchant_url']) > 2048)) {
            $invalidProperties[] = "invalid value for 'merchant_url', the character length must be smaller than or equal to 2048.";
        }

        if ($this->container['payment_service_definition_id'] === null) {
            $invalidProperties[] = "'payment_service_definition_id' can't be null";
        }
        if ((mb_strlen($this->container['payment_service_definition_id']) > 50)) {
            $invalidProperties[] = "invalid value for 'payment_service_definition_id', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['payment_service_definition_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'payment_service_definition_id', the character length must be bigger than or equal to 1.";
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
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name A custom name for the payment service. This will be shown in the Admin UI.
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        if ((mb_strlen($display_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $display_name when calling PaymentServiceRequest., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($display_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $display_name when calling PaymentServiceRequest., must be bigger than or equal to 1.');
        }

        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return \Gr4vy\model\PaymentServiceUpdateFields[]
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \Gr4vy\model\PaymentServiceUpdateFields[] $fields A list of fields, each containing a key-value pair for each field defined by the definition for this payment service e.g. for stripe-card `secret_key` is required and so must be sent within this field.
     *
     * @return self
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets accepted_countries
     *
     * @return string[]
     */
    public function getAcceptedCountries()
    {
        return $this->container['accepted_countries'];
    }

    /**
     * Sets accepted_countries
     *
     * @param string[] $accepted_countries A list of countries that this payment service needs to support in ISO two-letter code format.
     *
     * @return self
     */
    public function setAcceptedCountries($accepted_countries)
    {


        if ((count($accepted_countries) < 1)) {
            throw new \InvalidArgumentException('invalid length for $accepted_countries when calling PaymentServiceRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['accepted_countries'] = $accepted_countries;

        return $this;
    }

    /**
     * Gets accepted_currencies
     *
     * @return string[]
     */
    public function getAcceptedCurrencies()
    {
        return $this->container['accepted_currencies'];
    }

    /**
     * Sets accepted_currencies
     *
     * @param string[] $accepted_currencies A list of currencies that this payment service needs to support in ISO 4217 three-letter code format.
     *
     * @return self
     */
    public function setAcceptedCurrencies($accepted_currencies)
    {


        if ((count($accepted_currencies) < 1)) {
            throw new \InvalidArgumentException('invalid length for $accepted_currencies when calling PaymentServiceRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['accepted_currencies'] = $accepted_currencies;

        return $this;
    }

    /**
     * Gets three_d_secure_enabled
     *
     * @return bool|null
     */
    public function getThreeDSecureEnabled()
    {
        return $this->container['three_d_secure_enabled'];
    }

    /**
     * Sets three_d_secure_enabled
     *
     * @param bool|null $three_d_secure_enabled Defines if 3-D Secure is enabled for the service (can only be enabled if the payment service definition supports the `three_d_secure_hosted` feature). This does not affect pass through 3-D Secure data.
     *
     * @return self
     */
    public function setThreeDSecureEnabled($three_d_secure_enabled)
    {
        $this->container['three_d_secure_enabled'] = $three_d_secure_enabled;

        return $this;
    }

    /**
     * Gets acquirer_bin_visa
     *
     * @return string|null
     */
    public function getAcquirerBinVisa()
    {
        return $this->container['acquirer_bin_visa'];
    }

    /**
     * Sets acquirer_bin_visa
     *
     * @param string|null $acquirer_bin_visa Acquiring institution identification code for VISA.
     *
     * @return self
     */
    public function setAcquirerBinVisa($acquirer_bin_visa)
    {
        if (!is_null($acquirer_bin_visa) && (mb_strlen($acquirer_bin_visa) > 11)) {
            throw new \InvalidArgumentException('invalid length for $acquirer_bin_visa when calling PaymentServiceRequest., must be smaller than or equal to 11.');
        }

        $this->container['acquirer_bin_visa'] = $acquirer_bin_visa;

        return $this;
    }

    /**
     * Gets acquirer_bin_mastercard
     *
     * @return string|null
     */
    public function getAcquirerBinMastercard()
    {
        return $this->container['acquirer_bin_mastercard'];
    }

    /**
     * Sets acquirer_bin_mastercard
     *
     * @param string|null $acquirer_bin_mastercard Acquiring institution identification code for Mastercard.
     *
     * @return self
     */
    public function setAcquirerBinMastercard($acquirer_bin_mastercard)
    {
        if (!is_null($acquirer_bin_mastercard) && (mb_strlen($acquirer_bin_mastercard) > 11)) {
            throw new \InvalidArgumentException('invalid length for $acquirer_bin_mastercard when calling PaymentServiceRequest., must be smaller than or equal to 11.');
        }

        $this->container['acquirer_bin_mastercard'] = $acquirer_bin_mastercard;

        return $this;
    }

    /**
     * Gets acquirer_bin_amex
     *
     * @return string|null
     */
    public function getAcquirerBinAmex()
    {
        return $this->container['acquirer_bin_amex'];
    }

    /**
     * Sets acquirer_bin_amex
     *
     * @param string|null $acquirer_bin_amex Acquiring institution identification code for Amex.
     *
     * @return self
     */
    public function setAcquirerBinAmex($acquirer_bin_amex)
    {
        if (!is_null($acquirer_bin_amex) && (mb_strlen($acquirer_bin_amex) > 11)) {
            throw new \InvalidArgumentException('invalid length for $acquirer_bin_amex when calling PaymentServiceRequest., must be smaller than or equal to 11.');
        }

        $this->container['acquirer_bin_amex'] = $acquirer_bin_amex;

        return $this;
    }

    /**
     * Gets acquirer_bin_discover
     *
     * @return string|null
     */
    public function getAcquirerBinDiscover()
    {
        return $this->container['acquirer_bin_discover'];
    }

    /**
     * Sets acquirer_bin_discover
     *
     * @param string|null $acquirer_bin_discover Acquiring institution identification code for Discover.
     *
     * @return self
     */
    public function setAcquirerBinDiscover($acquirer_bin_discover)
    {
        if (!is_null($acquirer_bin_discover) && (mb_strlen($acquirer_bin_discover) > 11)) {
            throw new \InvalidArgumentException('invalid length for $acquirer_bin_discover when calling PaymentServiceRequest., must be smaller than or equal to 11.');
        }

        $this->container['acquirer_bin_discover'] = $acquirer_bin_discover;

        return $this;
    }

    /**
     * Gets acquirer_merchant_id
     *
     * @return string|null
     */
    public function getAcquirerMerchantId()
    {
        return $this->container['acquirer_merchant_id'];
    }

    /**
     * Sets acquirer_merchant_id
     *
     * @param string|null $acquirer_merchant_id Merchant identifier used in authorisation requests (assigned by the acquirer).
     *
     * @return self
     */
    public function setAcquirerMerchantId($acquirer_merchant_id)
    {
        if (!is_null($acquirer_merchant_id) && (mb_strlen($acquirer_merchant_id) > 35)) {
            throw new \InvalidArgumentException('invalid length for $acquirer_merchant_id when calling PaymentServiceRequest., must be smaller than or equal to 35.');
        }

        $this->container['acquirer_merchant_id'] = $acquirer_merchant_id;

        return $this;
    }

    /**
     * Gets merchant_name
     *
     * @return string|null
     */
    public function getMerchantName()
    {
        return $this->container['merchant_name'];
    }

    /**
     * Sets merchant_name
     *
     * @param string|null $merchant_name Merchant name (assigned by the acquirer).
     *
     * @return self
     */
    public function setMerchantName($merchant_name)
    {
        if (!is_null($merchant_name) && (mb_strlen($merchant_name) > 40)) {
            throw new \InvalidArgumentException('invalid length for $merchant_name when calling PaymentServiceRequest., must be smaller than or equal to 40.');
        }

        $this->container['merchant_name'] = $merchant_name;

        return $this;
    }

    /**
     * Gets merchant_country_code
     *
     * @return string|null
     */
    public function getMerchantCountryCode()
    {
        return $this->container['merchant_country_code'];
    }

    /**
     * Sets merchant_country_code
     *
     * @param string|null $merchant_country_code ISO 3166-1 numeric three-digit country code.
     *
     * @return self
     */
    public function setMerchantCountryCode($merchant_country_code)
    {

        if (!is_null($merchant_country_code) && (!preg_match("/^\\d{3}$/", $merchant_country_code))) {
            throw new \InvalidArgumentException("invalid value for $merchant_country_code when calling PaymentServiceRequest., must conform to the pattern /^\\d{3}$/.");
        }

        $this->container['merchant_country_code'] = $merchant_country_code;

        return $this;
    }

    /**
     * Gets merchant_category_code
     *
     * @return string|null
     */
    public function getMerchantCategoryCode()
    {
        return $this->container['merchant_category_code'];
    }

    /**
     * Sets merchant_category_code
     *
     * @param string|null $merchant_category_code Merchant category code that describes the business.
     *
     * @return self
     */
    public function setMerchantCategoryCode($merchant_category_code)
    {
        if (!is_null($merchant_category_code) && (mb_strlen($merchant_category_code) > 4)) {
            throw new \InvalidArgumentException('invalid length for $merchant_category_code when calling PaymentServiceRequest., must be smaller than or equal to 4.');
        }
        if (!is_null($merchant_category_code) && (mb_strlen($merchant_category_code) < 4)) {
            throw new \InvalidArgumentException('invalid length for $merchant_category_code when calling PaymentServiceRequest., must be bigger than or equal to 4.');
        }

        $this->container['merchant_category_code'] = $merchant_category_code;

        return $this;
    }

    /**
     * Gets merchant_url
     *
     * @return string|null
     */
    public function getMerchantUrl()
    {
        return $this->container['merchant_url'];
    }

    /**
     * Sets merchant_url
     *
     * @param string|null $merchant_url Fully qualified URL of 3-D Secure requestor website or customer care site.
     *
     * @return self
     */
    public function setMerchantUrl($merchant_url)
    {
        if (!is_null($merchant_url) && (mb_strlen($merchant_url) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $merchant_url when calling PaymentServiceRequest., must be smaller than or equal to 2048.');
        }

        $this->container['merchant_url'] = $merchant_url;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Defines if this service is currently active or not.
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets position
     *
     * @return float|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param float|null $position The numeric rank of a payment service. Payment services with a lower position value are processed first. When a payment services is inserted at a position, any payment services with the the same value or higher are shifted down a position accordingly. When left out, the payment service is inserted at the end of the list.
     *
     * @return self
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets payment_method_tokenization_enabled
     *
     * @return bool|null
     */
    public function getPaymentMethodTokenizationEnabled()
    {
        return $this->container['payment_method_tokenization_enabled'];
    }

    /**
     * Sets payment_method_tokenization_enabled
     *
     * @param bool|null $payment_method_tokenization_enabled Defines if tokenization is enabled for the service (can only be enabled if the payment service definition supports it).
     *
     * @return self
     */
    public function setPaymentMethodTokenizationEnabled($payment_method_tokenization_enabled)
    {
        $this->container['payment_method_tokenization_enabled'] = $payment_method_tokenization_enabled;

        return $this;
    }

    /**
     * Gets payment_service_definition_id
     *
     * @return string
     */
    public function getPaymentServiceDefinitionId()
    {
        return $this->container['payment_service_definition_id'];
    }

    /**
     * Sets payment_service_definition_id
     *
     * @param string $payment_service_definition_id The ID of the payment service to use.
     *
     * @return self
     */
    public function setPaymentServiceDefinitionId($payment_service_definition_id)
    {
        if ((mb_strlen($payment_service_definition_id) > 50)) {
            throw new \InvalidArgumentException('invalid length for $payment_service_definition_id when calling PaymentServiceRequest., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($payment_service_definition_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $payment_service_definition_id when calling PaymentServiceRequest., must be bigger than or equal to 1.');
        }

        $this->container['payment_service_definition_id'] = $payment_service_definition_id;

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


