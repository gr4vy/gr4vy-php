<?php
/**
 * PaymentServiceDefinitionSupportedFeatures
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
 * PaymentServiceDefinitionSupportedFeatures Class Doc Comment
 *
 * @category Class
 * @description Features supported by the payment definition.
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentServiceDefinitionSupportedFeatures implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentServiceDefinition_supported_features';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payment_method_tokenization' => 'bool',
        'payment_method_tokenization_toggle' => 'bool',
        'three_d_secure_hosted' => 'bool',
        'three_d_secure_pass_through' => 'bool',
        'network_tokens' => 'bool',
        'verify_credentials' => 'bool',
        'void' => 'bool',
        'refunds' => 'bool',
        'partial_refunds' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'payment_method_tokenization' => null,
        'payment_method_tokenization_toggle' => null,
        'three_d_secure_hosted' => null,
        'three_d_secure_pass_through' => null,
        'network_tokens' => null,
        'verify_credentials' => null,
        'void' => null,
        'refunds' => null,
        'partial_refunds' => null
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
        'payment_method_tokenization' => 'payment_method_tokenization',
        'payment_method_tokenization_toggle' => 'payment_method_tokenization_toggle',
        'three_d_secure_hosted' => 'three_d_secure_hosted',
        'three_d_secure_pass_through' => 'three_d_secure_pass_through',
        'network_tokens' => 'network_tokens',
        'verify_credentials' => 'verify_credentials',
        'void' => 'void',
        'refunds' => 'refunds',
        'partial_refunds' => 'partial_refunds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_method_tokenization' => 'setPaymentMethodTokenization',
        'payment_method_tokenization_toggle' => 'setPaymentMethodTokenizationToggle',
        'three_d_secure_hosted' => 'setThreeDSecureHosted',
        'three_d_secure_pass_through' => 'setThreeDSecurePassThrough',
        'network_tokens' => 'setNetworkTokens',
        'verify_credentials' => 'setVerifyCredentials',
        'void' => 'setVoid',
        'refunds' => 'setRefunds',
        'partial_refunds' => 'setPartialRefunds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_method_tokenization' => 'getPaymentMethodTokenization',
        'payment_method_tokenization_toggle' => 'getPaymentMethodTokenizationToggle',
        'three_d_secure_hosted' => 'getThreeDSecureHosted',
        'three_d_secure_pass_through' => 'getThreeDSecurePassThrough',
        'network_tokens' => 'getNetworkTokens',
        'verify_credentials' => 'getVerifyCredentials',
        'void' => 'getVoid',
        'refunds' => 'getRefunds',
        'partial_refunds' => 'getPartialRefunds'
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
        $this->container['payment_method_tokenization'] = $data['payment_method_tokenization'] ?? null;
        $this->container['payment_method_tokenization_toggle'] = $data['payment_method_tokenization_toggle'] ?? null;
        $this->container['three_d_secure_hosted'] = $data['three_d_secure_hosted'] ?? null;
        $this->container['three_d_secure_pass_through'] = $data['three_d_secure_pass_through'] ?? null;
        $this->container['network_tokens'] = $data['network_tokens'] ?? null;
        $this->container['verify_credentials'] = $data['verify_credentials'] ?? null;
        $this->container['void'] = $data['void'] ?? null;
        $this->container['refunds'] = $data['refunds'] ?? null;
        $this->container['partial_refunds'] = $data['partial_refunds'] ?? null;
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
     * Gets payment_method_tokenization
     *
     * @return bool|null
     */
    public function getPaymentMethodTokenization()
    {
        return $this->container['payment_method_tokenization'];
    }

    /**
     * Sets payment_method_tokenization
     *
     * @param bool|null $payment_method_tokenization Supports storing a payment method via tokenization.
     *
     * @return self
     */
    public function setPaymentMethodTokenization($payment_method_tokenization)
    {
        $this->container['payment_method_tokenization'] = $payment_method_tokenization;

        return $this;
    }

    /**
     * Gets payment_method_tokenization_toggle
     *
     * @return bool|null
     */
    public function getPaymentMethodTokenizationToggle()
    {
        return $this->container['payment_method_tokenization_toggle'];
    }

    /**
     * Sets payment_method_tokenization_toggle
     *
     * @param bool|null $payment_method_tokenization_toggle Supports toggling tokenization for a payment method on or off from the dashboard.
     *
     * @return self
     */
    public function setPaymentMethodTokenizationToggle($payment_method_tokenization_toggle)
    {
        $this->container['payment_method_tokenization_toggle'] = $payment_method_tokenization_toggle;

        return $this;
    }

    /**
     * Gets three_d_secure_hosted
     *
     * @return bool|null
     */
    public function getThreeDSecureHosted()
    {
        return $this->container['three_d_secure_hosted'];
    }

    /**
     * Sets three_d_secure_hosted
     *
     * @param bool|null $three_d_secure_hosted Supports hosted 3-D Secure with a redirect.
     *
     * @return self
     */
    public function setThreeDSecureHosted($three_d_secure_hosted)
    {
        $this->container['three_d_secure_hosted'] = $three_d_secure_hosted;

        return $this;
    }

    /**
     * Gets three_d_secure_pass_through
     *
     * @return bool|null
     */
    public function getThreeDSecurePassThrough()
    {
        return $this->container['three_d_secure_pass_through'];
    }

    /**
     * Sets three_d_secure_pass_through
     *
     * @param bool|null $three_d_secure_pass_through Supports passing 3-D Secure data to the underlying processor.
     *
     * @return self
     */
    public function setThreeDSecurePassThrough($three_d_secure_pass_through)
    {
        $this->container['three_d_secure_pass_through'] = $three_d_secure_pass_through;

        return $this;
    }

    /**
     * Gets network_tokens
     *
     * @return bool|null
     */
    public function getNetworkTokens()
    {
        return $this->container['network_tokens'];
    }

    /**
     * Sets network_tokens
     *
     * @param bool|null $network_tokens Supports passing decrypted digital wallet (e.g. Apple Pay) tokens to the underlying processor.
     *
     * @return self
     */
    public function setNetworkTokens($network_tokens)
    {
        $this->container['network_tokens'] = $network_tokens;

        return $this;
    }

    /**
     * Gets verify_credentials
     *
     * @return bool|null
     */
    public function getVerifyCredentials()
    {
        return $this->container['verify_credentials'];
    }

    /**
     * Sets verify_credentials
     *
     * @param bool|null $verify_credentials Supports verifying the credentials entered while setting up the underlying processor. This is for internal use only.
     *
     * @return self
     */
    public function setVerifyCredentials($verify_credentials)
    {
        $this->container['verify_credentials'] = $verify_credentials;

        return $this;
    }

    /**
     * Gets void
     *
     * @return bool|null
     */
    public function getVoid()
    {
        return $this->container['void'];
    }

    /**
     * Sets void
     *
     * @param bool|null $void Supports [voiding](#operation/void-transaction) authorized transactions.
     *
     * @return self
     */
    public function setVoid($void)
    {
        $this->container['void'] = $void;

        return $this;
    }

    /**
     * Gets refunds
     *
     * @return bool|null
     */
    public function getRefunds()
    {
        return $this->container['refunds'];
    }

    /**
     * Sets refunds
     *
     * @param bool|null $refunds Supports [refunding](#operation/refund-transaction) captured transactions.
     *
     * @return self
     */
    public function setRefunds($refunds)
    {
        $this->container['refunds'] = $refunds;

        return $this;
    }

    /**
     * Gets partial_refunds
     *
     * @return bool|null
     */
    public function getPartialRefunds()
    {
        return $this->container['partial_refunds'];
    }

    /**
     * Sets partial_refunds
     *
     * @param bool|null $partial_refunds Supports [partially refunding](#operation/refund-transaction) captured transactions.
     *
     * @return self
     */
    public function setPartialRefunds($partial_refunds)
    {
        $this->container['partial_refunds'] = $partial_refunds;

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


