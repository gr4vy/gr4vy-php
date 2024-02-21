<?php
/**
 * DigitalWalletApplePayTokenDecryptedContext
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
 * DigitalWalletApplePayTokenDecryptedContext Class Doc Comment
 *
 * @category Class
 * @description Apple Pay decrypted token context.
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DigitalWalletApplePayTokenDecryptedContext implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DigitalWalletApplePayTokenDecrypted_context';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'version' => 'string',
        'type' => 'string',
        'expiration_date' => 'string',
        'has_cryptogram' => 'bool',
        'eci' => 'string',
        'application_data' => 'string',
        'transaction_identifier' => 'string',
        'cardholder_name' => 'string',
        'currency_code' => 'string',
        'transaction_amount' => 'int',
        'device_manufacturer_identifier' => 'string',
        'payment_data_type' => 'string',
        'merchant_token_identifier' => 'string',
        'card_expiration_date' => 'string',
        'card_suffix' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'version' => null,
        'type' => null,
        'expiration_date' => null,
        'has_cryptogram' => null,
        'eci' => null,
        'application_data' => null,
        'transaction_identifier' => null,
        'cardholder_name' => null,
        'currency_code' => null,
        'transaction_amount' => null,
        'device_manufacturer_identifier' => null,
        'payment_data_type' => null,
        'merchant_token_identifier' => null,
        'card_expiration_date' => null,
        'card_suffix' => null
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
        'version' => 'version',
        'type' => 'type',
        'expiration_date' => 'expiration_date',
        'has_cryptogram' => 'has_cryptogram',
        'eci' => 'eci',
        'application_data' => 'application_data',
        'transaction_identifier' => 'transaction_identifier',
        'cardholder_name' => 'cardholder_name',
        'currency_code' => 'currency_code',
        'transaction_amount' => 'transaction_amount',
        'device_manufacturer_identifier' => 'device_manufacturer_identifier',
        'payment_data_type' => 'payment_data_type',
        'merchant_token_identifier' => 'merchant_token_identifier',
        'card_expiration_date' => 'card_expiration_date',
        'card_suffix' => 'card_suffix'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'version' => 'setVersion',
        'type' => 'setType',
        'expiration_date' => 'setExpirationDate',
        'has_cryptogram' => 'setHasCryptogram',
        'eci' => 'setEci',
        'application_data' => 'setApplicationData',
        'transaction_identifier' => 'setTransactionIdentifier',
        'cardholder_name' => 'setCardholderName',
        'currency_code' => 'setCurrencyCode',
        'transaction_amount' => 'setTransactionAmount',
        'device_manufacturer_identifier' => 'setDeviceManufacturerIdentifier',
        'payment_data_type' => 'setPaymentDataType',
        'merchant_token_identifier' => 'setMerchantTokenIdentifier',
        'card_expiration_date' => 'setCardExpirationDate',
        'card_suffix' => 'setCardSuffix'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'version' => 'getVersion',
        'type' => 'getType',
        'expiration_date' => 'getExpirationDate',
        'has_cryptogram' => 'getHasCryptogram',
        'eci' => 'getEci',
        'application_data' => 'getApplicationData',
        'transaction_identifier' => 'getTransactionIdentifier',
        'cardholder_name' => 'getCardholderName',
        'currency_code' => 'getCurrencyCode',
        'transaction_amount' => 'getTransactionAmount',
        'device_manufacturer_identifier' => 'getDeviceManufacturerIdentifier',
        'payment_data_type' => 'getPaymentDataType',
        'merchant_token_identifier' => 'getMerchantTokenIdentifier',
        'card_expiration_date' => 'getCardExpirationDate',
        'card_suffix' => 'getCardSuffix'
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

    public const TYPE_DPAN = 'dpan';
    public const TYPE_FPAN = 'fpan';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DPAN,
            self::TYPE_FPAN,
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
        $this->container['version'] = $data['version'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['expiration_date'] = $data['expiration_date'] ?? null;
        $this->container['has_cryptogram'] = $data['has_cryptogram'] ?? null;
        $this->container['eci'] = $data['eci'] ?? null;
        $this->container['application_data'] = $data['application_data'] ?? null;
        $this->container['transaction_identifier'] = $data['transaction_identifier'] ?? null;
        $this->container['cardholder_name'] = $data['cardholder_name'] ?? null;
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['transaction_amount'] = $data['transaction_amount'] ?? null;
        $this->container['device_manufacturer_identifier'] = $data['device_manufacturer_identifier'] ?? null;
        $this->container['payment_data_type'] = $data['payment_data_type'] ?? null;
        $this->container['merchant_token_identifier'] = $data['merchant_token_identifier'] ?? null;
        $this->container['card_expiration_date'] = $data['card_expiration_date'] ?? null;
        $this->container['card_suffix'] = $data['card_suffix'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version Version information about the payment token.
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The type of payment instrument.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param string|null $expiration_date Expiration of the decrypted data.
     *
     * @return self
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets has_cryptogram
     *
     * @return bool|null
     */
    public function getHasCryptogram()
    {
        return $this->container['has_cryptogram'];
    }

    /**
     * Sets has_cryptogram
     *
     * @param bool|null $has_cryptogram Online payment cryptogram, as defined by 3D Secure.
     *
     * @return self
     */
    public function setHasCryptogram($has_cryptogram)
    {
        $this->container['has_cryptogram'] = $has_cryptogram;

        return $this;
    }

    /**
     * Gets eci
     *
     * @return string|null
     */
    public function getEci()
    {
        return $this->container['eci'];
    }

    /**
     * Sets eci
     *
     * @param string|null $eci ECI indicator, as defined by 3D Secure.
     *
     * @return self
     */
    public function setEci($eci)
    {
        $this->container['eci'] = $eci;

        return $this;
    }

    /**
     * Gets application_data
     *
     * @return string|null
     */
    public function getApplicationData()
    {
        return $this->container['application_data'];
    }

    /**
     * Sets application_data
     *
     * @param string|null $application_data Hash of the application data property of the original request.
     *
     * @return self
     */
    public function setApplicationData($application_data)
    {
        $this->container['application_data'] = $application_data;

        return $this;
    }

    /**
     * Gets transaction_identifier
     *
     * @return string|null
     */
    public function getTransactionIdentifier()
    {
        return $this->container['transaction_identifier'];
    }

    /**
     * Sets transaction_identifier
     *
     * @param string|null $transaction_identifier The unique identifier from Apple Pay.
     *
     * @return self
     */
    public function setTransactionIdentifier($transaction_identifier)
    {
        $this->container['transaction_identifier'] = $transaction_identifier;

        return $this;
    }

    /**
     * Gets cardholder_name
     *
     * @return string|null
     */
    public function getCardholderName()
    {
        return $this->container['cardholder_name'];
    }

    /**
     * Sets cardholder_name
     *
     * @param string|null $cardholder_name The cardholder name.
     *
     * @return self
     */
    public function setCardholderName($cardholder_name)
    {
        $this->container['cardholder_name'] = $cardholder_name;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code ISO 4217 numeric currency code for the transaction.
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets transaction_amount
     *
     * @return int|null
     */
    public function getTransactionAmount()
    {
        return $this->container['transaction_amount'];
    }

    /**
     * Sets transaction_amount
     *
     * @param int|null $transaction_amount The amount for the transaction.
     *
     * @return self
     */
    public function setTransactionAmount($transaction_amount)
    {
        $this->container['transaction_amount'] = $transaction_amount;

        return $this;
    }

    /**
     * Gets device_manufacturer_identifier
     *
     * @return string|null
     */
    public function getDeviceManufacturerIdentifier()
    {
        return $this->container['device_manufacturer_identifier'];
    }

    /**
     * Sets device_manufacturer_identifier
     *
     * @param string|null $device_manufacturer_identifier Hex-encoded device manufacturer identifier which initiated the transaction.
     *
     * @return self
     */
    public function setDeviceManufacturerIdentifier($device_manufacturer_identifier)
    {
        $this->container['device_manufacturer_identifier'] = $device_manufacturer_identifier;

        return $this;
    }

    /**
     * Gets payment_data_type
     *
     * @return string|null
     */
    public function getPaymentDataType()
    {
        return $this->container['payment_data_type'];
    }

    /**
     * Sets payment_data_type
     *
     * @param string|null $payment_data_type Either \"3DSecure\" or \"EMV\".
     *
     * @return self
     */
    public function setPaymentDataType($payment_data_type)
    {
        $this->container['payment_data_type'] = $payment_data_type;

        return $this;
    }

    /**
     * Gets merchant_token_identifier
     *
     * @return string|null
     */
    public function getMerchantTokenIdentifier()
    {
        return $this->container['merchant_token_identifier'];
    }

    /**
     * Sets merchant_token_identifier
     *
     * @param string|null $merchant_token_identifier For a merchant token request, the provisioned merchant token identifier from the payment network.
     *
     * @return self
     */
    public function setMerchantTokenIdentifier($merchant_token_identifier)
    {
        $this->container['merchant_token_identifier'] = $merchant_token_identifier;

        return $this;
    }

    /**
     * Gets card_expiration_date
     *
     * @return string|null
     */
    public function getCardExpirationDate()
    {
        return $this->container['card_expiration_date'];
    }

    /**
     * Sets card_expiration_date
     *
     * @param string|null $card_expiration_date Expiration date of card.
     *
     * @return self
     */
    public function setCardExpirationDate($card_expiration_date)
    {
        $this->container['card_expiration_date'] = $card_expiration_date;

        return $this;
    }

    /**
     * Gets card_suffix
     *
     * @return string|null
     */
    public function getCardSuffix()
    {
        return $this->container['card_suffix'];
    }

    /**
     * Sets card_suffix
     *
     * @param string|null $card_suffix Last four digits of card PAN.
     *
     * @return self
     */
    public function setCardSuffix($card_suffix)
    {
        $this->container['card_suffix'] = $card_suffix;

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


