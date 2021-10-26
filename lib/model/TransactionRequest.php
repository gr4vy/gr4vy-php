<?php
/**
 * TransactionRequest
 *
 * PHP version 7.3
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
 * OpenAPI Generator version: 5.3.1-SNAPSHOT
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
 * TransactionRequest Class Doc Comment
 *
 * @category Class
 * @description A request to create a transaction.
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TransactionRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'int',
        'currency' => 'string',
        'payment_method' => 'OneOfCardRequestRedirectRequestTokenizedRequest',
        'store' => 'bool',
        'intent' => 'string',
        'external_identifier' => 'string',
        'environment' => 'string',
        'three_d_secure_data' => 'OneOfThreeDSecureDataV1ThreeDSecureDataV2'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'currency' => null,
        'payment_method' => null,
        'store' => null,
        'intent' => null,
        'external_identifier' => null,
        'environment' => null,
        'three_d_secure_data' => null
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
        'amount' => 'amount',
        'currency' => 'currency',
        'payment_method' => 'payment_method',
        'store' => 'store',
        'intent' => 'intent',
        'external_identifier' => 'external_identifier',
        'environment' => 'environment',
        'three_d_secure_data' => 'three_d_secure_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'payment_method' => 'setPaymentMethod',
        'store' => 'setStore',
        'intent' => 'setIntent',
        'external_identifier' => 'setExternalIdentifier',
        'environment' => 'setEnvironment',
        'three_d_secure_data' => 'setThreeDSecureData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'payment_method' => 'getPaymentMethod',
        'store' => 'getStore',
        'intent' => 'getIntent',
        'external_identifier' => 'getExternalIdentifier',
        'environment' => 'getEnvironment',
        'three_d_secure_data' => 'getThreeDSecureData'
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

    const INTENT_AUTHORIZE = 'authorize';
    const INTENT_CAPTURE = 'capture';
    const ENVIRONMENT_DEVELOPMENT = 'development';
    const ENVIRONMENT_STAGING = 'staging';
    const ENVIRONMENT_PRODUCTION = 'production';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIntentAllowableValues()
    {
        return [
            self::INTENT_AUTHORIZE,
            self::INTENT_CAPTURE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEnvironmentAllowableValues()
    {
        return [
            self::ENVIRONMENT_DEVELOPMENT,
            self::ENVIRONMENT_STAGING,
            self::ENVIRONMENT_PRODUCTION,
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['payment_method'] = $data['payment_method'] ?? null;
        $this->container['store'] = $data['store'] ?? false;
        $this->container['intent'] = $data['intent'] ?? null;
        $this->container['external_identifier'] = $data['external_identifier'] ?? null;
        $this->container['environment'] = $data['environment'] ?? null;
        $this->container['three_d_secure_data'] = $data['three_d_secure_data'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] > 99999999)) {
            $invalidProperties[] = "invalid value for 'amount', must be smaller than or equal to 99999999.";
        }

        if (($this->container['amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['payment_method'] === null) {
            $invalidProperties[] = "'payment_method' can't be null";
        }
        $allowedValues = $this->getIntentAllowableValues();
        if (!is_null($this->container['intent']) && !in_array($this->container['intent'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'intent', must be one of '%s'",
                $this->container['intent'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEnvironmentAllowableValues();
        if (!is_null($this->container['environment']) && !in_array($this->container['environment'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'environment', must be one of '%s'",
                $this->container['environment'],
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
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount The monetary amount to create an authorization for, in the smallest currency unit for the given currency, for example `1299` cents to create an authorization for `$12.99`.
     *
     * @return self
     */
    public function setAmount($amount)
    {

        if (($amount > 99999999)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling TransactionRequest., must be smaller than or equal to 99999999.');
        }
        if (($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling TransactionRequest., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency A supported ISO-4217 currency code.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return OneOfCardRequestRedirectRequestTokenizedRequest
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param OneOfCardRequestRedirectRequestTokenizedRequest $payment_method The optional payment method details to create an authorization for. This field is required for processing a card.
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets store
     *
     * @return bool|null
     */
    public function getStore()
    {
        return $this->container['store'];
    }

    /**
     * Sets store
     *
     * @param bool|null $store Whether or not to also try and store the payment method with us so that it can be used again for future use. This is only supported for payment methods that support this feature.
     *
     * @return self
     */
    public function setStore($store)
    {
        $this->container['store'] = $store;

        return $this;
    }

    /**
     * Gets intent
     *
     * @return string|null
     */
    public function getIntent()
    {
        return $this->container['intent'];
    }

    /**
     * Sets intent
     *
     * @param string|null $intent Defines the intent of this API call. This determines the desired initial state of the transaction.  * `authorize` - (Default) Optionally approves and then authorizes a transaction but does not capture the funds. * `capture` - Optionally approves and then authorizes and captures the funds of the transaction.
     *
     * @return self
     */
    public function setIntent($intent)
    {
        $allowedValues = $this->getIntentAllowableValues();
        if (!is_null($intent) && !in_array($intent, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'intent', must be one of '%s'",
                    $intent,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['intent'] = $intent;

        return $this;
    }

    /**
     * Gets external_identifier
     *
     * @return string|null
     */
    public function getExternalIdentifier()
    {
        return $this->container['external_identifier'];
    }

    /**
     * Sets external_identifier
     *
     * @param string|null $external_identifier An external identifier that can be used to match the transaction against your own records.
     *
     * @return self
     */
    public function setExternalIdentifier($external_identifier)
    {
        $this->container['external_identifier'] = $external_identifier;

        return $this;
    }

    /**
     * Gets environment
     *
     * @return string|null
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param string|null $environment Defines the environment to create this transaction in. Setting this to anything other than `production` will force Gr4vy to use the payment a service configured for that environment.
     *
     * @return self
     */
    public function setEnvironment($environment)
    {
        $allowedValues = $this->getEnvironmentAllowableValues();
        if (!is_null($environment) && !in_array($environment, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'environment', must be one of '%s'",
                    $environment,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['environment'] = $environment;

        return $this;
    }

    /**
     * Gets three_d_secure_data
     *
     * @return OneOfThreeDSecureDataV1ThreeDSecureDataV2|null
     */
    public function getThreeDSecureData()
    {
        return $this->container['three_d_secure_data'];
    }

    /**
     * Sets three_d_secure_data
     *
     * @param OneOfThreeDSecureDataV1ThreeDSecureDataV2|null $three_d_secure_data Pass through 3-D Secure data to support external 3-D Secure authorisation. If using an external 3-D Secure provider, you should not pass a `redirect_url` in the `payment_method` object for a transaction.
     *
     * @return self
     */
    public function setThreeDSecureData($three_d_secure_data)
    {
        $this->container['three_d_secure_data'] = $three_d_secure_data;

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


