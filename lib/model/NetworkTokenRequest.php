<?php
/**
 * NetworkTokenRequest
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
 * NetworkTokenRequest Class Doc Comment
 *
 * @category Class
 * @description Request body for provision a network token.
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class NetworkTokenRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NetworkTokenRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'security_code' => 'string',
        'merchant_initiated' => 'bool',
        'is_subsequent_payment' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'security_code' => null,
        'merchant_initiated' => null,
        'is_subsequent_payment' => null
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
        'security_code' => 'security_code',
        'merchant_initiated' => 'merchant_initiated',
        'is_subsequent_payment' => 'is_subsequent_payment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'security_code' => 'setSecurityCode',
        'merchant_initiated' => 'setMerchantInitiated',
        'is_subsequent_payment' => 'setIsSubsequentPayment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'security_code' => 'getSecurityCode',
        'merchant_initiated' => 'getMerchantInitiated',
        'is_subsequent_payment' => 'getIsSubsequentPayment'
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
        $this->container['security_code'] = $data['security_code'] ?? null;
        $this->container['merchant_initiated'] = $data['merchant_initiated'] ?? null;
        $this->container['is_subsequent_payment'] = $data['is_subsequent_payment'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['security_code']) && (mb_strlen($this->container['security_code']) > 4)) {
            $invalidProperties[] = "invalid value for 'security_code', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['security_code']) && (mb_strlen($this->container['security_code']) < 3)) {
            $invalidProperties[] = "invalid value for 'security_code', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['security_code']) && !preg_match("/^\\d{3,4}$/", $this->container['security_code'])) {
            $invalidProperties[] = "invalid value for 'security_code', must be conform to the pattern /^\\d{3,4}$/.";
        }

        if ($this->container['merchant_initiated'] === null) {
            $invalidProperties[] = "'merchant_initiated' can't be null";
        }
        if ($this->container['is_subsequent_payment'] === null) {
            $invalidProperties[] = "'is_subsequent_payment' can't be null";
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
     * Gets security_code
     *
     * @return string|null
     */
    public function getSecurityCode()
    {
        return $this->container['security_code'];
    }

    /**
     * Sets security_code
     *
     * @param string|null $security_code The 3 or 4 digit security code often found on the card. This often referred to as the CVV or CVD.  The security code can only be set if the stored payment method represents a card.
     *
     * @return self
     */
    public function setSecurityCode($security_code)
    {
        if (!is_null($security_code) && (mb_strlen($security_code) > 4)) {
            throw new \InvalidArgumentException('invalid length for $security_code when calling NetworkTokenRequest., must be smaller than or equal to 4.');
        }
        if (!is_null($security_code) && (mb_strlen($security_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for $security_code when calling NetworkTokenRequest., must be bigger than or equal to 3.');
        }
        if (!is_null($security_code) && (!preg_match("/^\\d{3,4}$/", $security_code))) {
            throw new \InvalidArgumentException("invalid value for $security_code when calling NetworkTokenRequest., must conform to the pattern /^\\d{3,4}$/.");
        }

        $this->container['security_code'] = $security_code;

        return $this;
    }

    /**
     * Gets merchant_initiated
     *
     * @return bool
     */
    public function getMerchantInitiated()
    {
        return $this->container['merchant_initiated'];
    }

    /**
     * Sets merchant_initiated
     *
     * @param bool $merchant_initiated Defines if the request is merchant initiated or not.
     *
     * @return self
     */
    public function setMerchantInitiated($merchant_initiated)
    {
        $this->container['merchant_initiated'] = $merchant_initiated;

        return $this;
    }

    /**
     * Gets is_subsequent_payment
     *
     * @return bool
     */
    public function getIsSubsequentPayment()
    {
        return $this->container['is_subsequent_payment'];
    }

    /**
     * Sets is_subsequent_payment
     *
     * @param bool $is_subsequent_payment Defines if the request is a subsequent of another request or not.
     *
     * @return self
     */
    public function setIsSubsequentPayment($is_subsequent_payment)
    {
        $this->container['is_subsequent_payment'] = $is_subsequent_payment;

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


