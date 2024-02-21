<?php
/**
 * PaymentConnectorResponseTransactionCaptureDeclinedEventContext
 *
 * PHP version 7.4
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
 * OpenAPI Generator version: 6.0.0
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
 * PaymentConnectorResponseTransactionCaptureDeclinedEventContext Class Doc Comment
 *
 * @category Class
 * @description Additional context for this event.
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentConnectorResponseTransactionCaptureDeclinedEventContext implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentConnectorResponseTransactionCaptureDeclinedEvent_context';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payment_service_id' => 'string',
        'payment_service_display_name' => 'string',
        'payment_service_definition_id' => 'string',
        'payment_service_transaction_id' => 'string',
        'code' => 'string',
        'raw_response_code' => 'string',
        'raw_response_description' => 'string',
        'avs_response_code' => 'string',
        'cvv_response_code' => 'string',
        'payment_method_scheme' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'payment_service_id' => 'uuid',
        'payment_service_display_name' => null,
        'payment_service_definition_id' => null,
        'payment_service_transaction_id' => null,
        'code' => null,
        'raw_response_code' => null,
        'raw_response_description' => null,
        'avs_response_code' => null,
        'cvv_response_code' => null,
        'payment_method_scheme' => null
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
        'payment_service_id' => 'payment_service_id',
        'payment_service_display_name' => 'payment_service_display_name',
        'payment_service_definition_id' => 'payment_service_definition_id',
        'payment_service_transaction_id' => 'payment_service_transaction_id',
        'code' => 'code',
        'raw_response_code' => 'raw_response_code',
        'raw_response_description' => 'raw_response_description',
        'avs_response_code' => 'avs_response_code',
        'cvv_response_code' => 'cvv_response_code',
        'payment_method_scheme' => 'payment_method_scheme'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_service_id' => 'setPaymentServiceId',
        'payment_service_display_name' => 'setPaymentServiceDisplayName',
        'payment_service_definition_id' => 'setPaymentServiceDefinitionId',
        'payment_service_transaction_id' => 'setPaymentServiceTransactionId',
        'code' => 'setCode',
        'raw_response_code' => 'setRawResponseCode',
        'raw_response_description' => 'setRawResponseDescription',
        'avs_response_code' => 'setAvsResponseCode',
        'cvv_response_code' => 'setCvvResponseCode',
        'payment_method_scheme' => 'setPaymentMethodScheme'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_service_id' => 'getPaymentServiceId',
        'payment_service_display_name' => 'getPaymentServiceDisplayName',
        'payment_service_definition_id' => 'getPaymentServiceDefinitionId',
        'payment_service_transaction_id' => 'getPaymentServiceTransactionId',
        'code' => 'getCode',
        'raw_response_code' => 'getRawResponseCode',
        'raw_response_description' => 'getRawResponseDescription',
        'avs_response_code' => 'getAvsResponseCode',
        'cvv_response_code' => 'getCvvResponseCode',
        'payment_method_scheme' => 'getPaymentMethodScheme'
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

    public const AVS_RESPONSE_CODE_NO_MATCH = 'no_match';
    public const AVS_RESPONSE_CODE_MATCH = 'match';
    public const AVS_RESPONSE_CODE_PARTIAL_MATCH_ADDRESS = 'partial_match_address';
    public const AVS_RESPONSE_CODE_PARTIAL_MATCH_POSTCODE = 'partial_match_postcode';
    public const AVS_RESPONSE_CODE_UNAVAILABLE = 'unavailable';
    public const CVV_RESPONSE_CODE_NO_MATCH = 'no_match';
    public const CVV_RESPONSE_CODE_MATCH = 'match';
    public const CVV_RESPONSE_CODE_UNAVAILABLE = 'unavailable';
    public const PAYMENT_METHOD_SCHEME_ACCEL = 'accel';
    public const PAYMENT_METHOD_SCHEME_AMEX = 'amex';
    public const PAYMENT_METHOD_SCHEME_BANCONTACT = 'bancontact';
    public const PAYMENT_METHOD_SCHEME_CARTE_BANCAIRE = 'carte-bancaire';
    public const PAYMENT_METHOD_SCHEME_CIRRUS = 'cirrus';
    public const PAYMENT_METHOD_SCHEME_CULIANCE = 'culiance';
    public const PAYMENT_METHOD_SCHEME_DANKORT = 'dankort';
    public const PAYMENT_METHOD_SCHEME_DINERS_CLUB = 'diners-club';
    public const PAYMENT_METHOD_SCHEME_DISCOVER = 'discover';
    public const PAYMENT_METHOD_SCHEME_EFTPOS_AUSTRALIA = 'eftpos-australia';
    public const PAYMENT_METHOD_SCHEME_ELO = 'elo';
    public const PAYMENT_METHOD_SCHEME_HIPERCARD = 'hipercard';
    public const PAYMENT_METHOD_SCHEME_JCB = 'jcb';
    public const PAYMENT_METHOD_SCHEME_MAESTRO = 'maestro';
    public const PAYMENT_METHOD_SCHEME_MASTERCARD = 'mastercard';
    public const PAYMENT_METHOD_SCHEME_NYCE = 'nyce';
    public const PAYMENT_METHOD_SCHEME_OTHER = 'other';
    public const PAYMENT_METHOD_SCHEME_PULSE = 'pulse';
    public const PAYMENT_METHOD_SCHEME_RUPAY = 'rupay';
    public const PAYMENT_METHOD_SCHEME_STAR = 'star';
    public const PAYMENT_METHOD_SCHEME_UNIONPAY = 'unionpay';
    public const PAYMENT_METHOD_SCHEME_VISA = 'visa';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAvsResponseCodeAllowableValues()
    {
        return [
            self::AVS_RESPONSE_CODE_NO_MATCH,
            self::AVS_RESPONSE_CODE_MATCH,
            self::AVS_RESPONSE_CODE_PARTIAL_MATCH_ADDRESS,
            self::AVS_RESPONSE_CODE_PARTIAL_MATCH_POSTCODE,
            self::AVS_RESPONSE_CODE_UNAVAILABLE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCvvResponseCodeAllowableValues()
    {
        return [
            self::CVV_RESPONSE_CODE_NO_MATCH,
            self::CVV_RESPONSE_CODE_MATCH,
            self::CVV_RESPONSE_CODE_UNAVAILABLE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentMethodSchemeAllowableValues()
    {
        return [
            self::PAYMENT_METHOD_SCHEME_ACCEL,
            self::PAYMENT_METHOD_SCHEME_AMEX,
            self::PAYMENT_METHOD_SCHEME_BANCONTACT,
            self::PAYMENT_METHOD_SCHEME_CARTE_BANCAIRE,
            self::PAYMENT_METHOD_SCHEME_CIRRUS,
            self::PAYMENT_METHOD_SCHEME_CULIANCE,
            self::PAYMENT_METHOD_SCHEME_DANKORT,
            self::PAYMENT_METHOD_SCHEME_DINERS_CLUB,
            self::PAYMENT_METHOD_SCHEME_DISCOVER,
            self::PAYMENT_METHOD_SCHEME_EFTPOS_AUSTRALIA,
            self::PAYMENT_METHOD_SCHEME_ELO,
            self::PAYMENT_METHOD_SCHEME_HIPERCARD,
            self::PAYMENT_METHOD_SCHEME_JCB,
            self::PAYMENT_METHOD_SCHEME_MAESTRO,
            self::PAYMENT_METHOD_SCHEME_MASTERCARD,
            self::PAYMENT_METHOD_SCHEME_NYCE,
            self::PAYMENT_METHOD_SCHEME_OTHER,
            self::PAYMENT_METHOD_SCHEME_PULSE,
            self::PAYMENT_METHOD_SCHEME_RUPAY,
            self::PAYMENT_METHOD_SCHEME_STAR,
            self::PAYMENT_METHOD_SCHEME_UNIONPAY,
            self::PAYMENT_METHOD_SCHEME_VISA,
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
        $this->container['payment_service_id'] = $data['payment_service_id'] ?? null;
        $this->container['payment_service_display_name'] = $data['payment_service_display_name'] ?? null;
        $this->container['payment_service_definition_id'] = $data['payment_service_definition_id'] ?? null;
        $this->container['payment_service_transaction_id'] = $data['payment_service_transaction_id'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['raw_response_code'] = $data['raw_response_code'] ?? null;
        $this->container['raw_response_description'] = $data['raw_response_description'] ?? null;
        $this->container['avs_response_code'] = $data['avs_response_code'] ?? null;
        $this->container['cvv_response_code'] = $data['cvv_response_code'] ?? null;
        $this->container['payment_method_scheme'] = $data['payment_method_scheme'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAvsResponseCodeAllowableValues();
        if (!is_null($this->container['avs_response_code']) && !in_array($this->container['avs_response_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'avs_response_code', must be one of '%s'",
                $this->container['avs_response_code'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCvvResponseCodeAllowableValues();
        if (!is_null($this->container['cvv_response_code']) && !in_array($this->container['cvv_response_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'cvv_response_code', must be one of '%s'",
                $this->container['cvv_response_code'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPaymentMethodSchemeAllowableValues();
        if (!is_null($this->container['payment_method_scheme']) && !in_array($this->container['payment_method_scheme'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_method_scheme', must be one of '%s'",
                $this->container['payment_method_scheme'],
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
     * Gets payment_service_id
     *
     * @return string|null
     */
    public function getPaymentServiceId()
    {
        return $this->container['payment_service_id'];
    }

    /**
     * Sets payment_service_id
     *
     * @param string|null $payment_service_id The unique ID of the payment service used.
     *
     * @return self
     */
    public function setPaymentServiceId($payment_service_id)
    {
        $this->container['payment_service_id'] = $payment_service_id;

        return $this;
    }

    /**
     * Gets payment_service_display_name
     *
     * @return string|null
     */
    public function getPaymentServiceDisplayName()
    {
        return $this->container['payment_service_display_name'];
    }

    /**
     * Sets payment_service_display_name
     *
     * @param string|null $payment_service_display_name The display name of the payment service used.
     *
     * @return self
     */
    public function setPaymentServiceDisplayName($payment_service_display_name)
    {
        $this->container['payment_service_display_name'] = $payment_service_display_name;

        return $this;
    }

    /**
     * Gets payment_service_definition_id
     *
     * @return string|null
     */
    public function getPaymentServiceDefinitionId()
    {
        return $this->container['payment_service_definition_id'];
    }

    /**
     * Sets payment_service_definition_id
     *
     * @param string|null $payment_service_definition_id The payment service definition used.
     *
     * @return self
     */
    public function setPaymentServiceDefinitionId($payment_service_definition_id)
    {
        $this->container['payment_service_definition_id'] = $payment_service_definition_id;

        return $this;
    }

    /**
     * Gets payment_service_transaction_id
     *
     * @return string|null
     */
    public function getPaymentServiceTransactionId()
    {
        return $this->container['payment_service_transaction_id'];
    }

    /**
     * Sets payment_service_transaction_id
     *
     * @param string|null $payment_service_transaction_id The external ID of the transaction as set by the payment service.
     *
     * @return self
     */
    public function setPaymentServiceTransactionId($payment_service_transaction_id)
    {
        $this->container['payment_service_transaction_id'] = $payment_service_transaction_id;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code A raw response code returned for the failure.
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets raw_response_code
     *
     * @return string|null
     */
    public function getRawResponseCode()
    {
        return $this->container['raw_response_code'];
    }

    /**
     * Sets raw_response_code
     *
     * @param string|null $raw_response_code This is the response code received from the payment service. This can be set to any value and is not standardized across different payment services.
     *
     * @return self
     */
    public function setRawResponseCode($raw_response_code)
    {
        $this->container['raw_response_code'] = $raw_response_code;

        return $this;
    }

    /**
     * Gets raw_response_description
     *
     * @return string|null
     */
    public function getRawResponseDescription()
    {
        return $this->container['raw_response_description'];
    }

    /**
     * Sets raw_response_description
     *
     * @param string|null $raw_response_description This is the response description received from the payment service. This can be set to any value and is not standardized across different payment services.
     *
     * @return self
     */
    public function setRawResponseDescription($raw_response_description)
    {
        $this->container['raw_response_description'] = $raw_response_description;

        return $this;
    }

    /**
     * Gets avs_response_code
     *
     * @return string|null
     */
    public function getAvsResponseCode()
    {
        return $this->container['avs_response_code'];
    }

    /**
     * Sets avs_response_code
     *
     * @param string|null $avs_response_code The response code received from the payment service for the Address Verification Check (AVS). This code is mapped to a standardized Gr4vy AVS response code.  - `no_match` - neither address or postal code match - `match` - both address and postal code match - `partial_match_address` - address matches but postal code does not - `partial_match_postcode` - postal code matches but address does not - `unavailable ` - AVS is unavailable for card/country  The value of this field can be `null` if the payment service did not provide a response.
     *
     * @return self
     */
    public function setAvsResponseCode($avs_response_code)
    {
        $allowedValues = $this->getAvsResponseCodeAllowableValues();
        if (!is_null($avs_response_code) && !in_array($avs_response_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'avs_response_code', must be one of '%s'",
                    $avs_response_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['avs_response_code'] = $avs_response_code;

        return $this;
    }

    /**
     * Gets cvv_response_code
     *
     * @return string|null
     */
    public function getCvvResponseCode()
    {
        return $this->container['cvv_response_code'];
    }

    /**
     * Sets cvv_response_code
     *
     * @param string|null $cvv_response_code The response code received from the payment service for the Card Verification Value (CVV). This code is mapped to a standardized Gr4vy CVV response code.  - `no_match` - the CVV does not match the expected value - `match` - the CVV matches the expected value - `unavailable ` - CVV check unavailable for card our country - `not_provided ` - CVV not provided  The value of this field can be `null` if the payment service did not provide a response.
     *
     * @return self
     */
    public function setCvvResponseCode($cvv_response_code)
    {
        $allowedValues = $this->getCvvResponseCodeAllowableValues();
        if (!is_null($cvv_response_code) && !in_array($cvv_response_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'cvv_response_code', must be one of '%s'",
                    $cvv_response_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cvv_response_code'] = $cvv_response_code;

        return $this;
    }

    /**
     * Gets payment_method_scheme
     *
     * @return string|null
     */
    public function getPaymentMethodScheme()
    {
        return $this->container['payment_method_scheme'];
    }

    /**
     * Sets payment_method_scheme
     *
     * @param string|null $payment_method_scheme The card scheme sent to the connector.
     *
     * @return self
     */
    public function setPaymentMethodScheme($payment_method_scheme)
    {
        $allowedValues = $this->getPaymentMethodSchemeAllowableValues();
        if (!is_null($payment_method_scheme) && !in_array($payment_method_scheme, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_method_scheme', must be one of '%s'",
                    $payment_method_scheme,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_method_scheme'] = $payment_method_scheme;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


