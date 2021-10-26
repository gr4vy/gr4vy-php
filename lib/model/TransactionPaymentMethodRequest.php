<?php
/**
 * TransactionPaymentMethodRequest
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
 * TransactionPaymentMethodRequest Class Doc Comment
 *
 * @category Class
 * @description Payment method details to use in a transaction or to register a new payment method.
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TransactionPaymentMethodRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionPaymentMethodRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'method' => 'string',
        'number' => 'string',
        'expiration_date' => 'string',
        'security_code' => 'string',
        'external_identifier' => 'string',
        'buyer_id' => 'string',
        'buyer_external_identifier' => 'string',
        'redirect_url' => 'string',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'method' => null,
        'number' => null,
        'expiration_date' => null,
        'security_code' => null,
        'external_identifier' => null,
        'buyer_id' => 'uuid',
        'buyer_external_identifier' => null,
        'redirect_url' => null,
        'id' => null
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
        'method' => 'method',
        'number' => 'number',
        'expiration_date' => 'expiration_date',
        'security_code' => 'security_code',
        'external_identifier' => 'external_identifier',
        'buyer_id' => 'buyer_id',
        'buyer_external_identifier' => 'buyer_external_identifier',
        'redirect_url' => 'redirect_url',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'method' => 'setMethod',
        'number' => 'setNumber',
        'expiration_date' => 'setExpirationDate',
        'security_code' => 'setSecurityCode',
        'external_identifier' => 'setExternalIdentifier',
        'buyer_id' => 'setBuyerId',
        'buyer_external_identifier' => 'setBuyerExternalIdentifier',
        'redirect_url' => 'setRedirectUrl',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'method' => 'getMethod',
        'number' => 'getNumber',
        'expiration_date' => 'getExpirationDate',
        'security_code' => 'getSecurityCode',
        'external_identifier' => 'getExternalIdentifier',
        'buyer_id' => 'getBuyerId',
        'buyer_external_identifier' => 'getBuyerExternalIdentifier',
        'redirect_url' => 'getRedirectUrl',
        'id' => 'getId'
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

    const METHOD_CARD = 'card';
    const METHOD_PAYPAL = 'paypal';
    const METHOD_BANKED = 'banked';
    const METHOD_GOCARDLESS = 'gocardless';
    const METHOD_ID = 'id';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMethodAllowableValues()
    {
        return [
            self::METHOD_CARD,
            self::METHOD_PAYPAL,
            self::METHOD_BANKED,
            self::METHOD_GOCARDLESS,
            self::METHOD_ID,
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
        $this->container['method'] = $data['method'] ?? null;
        $this->container['number'] = $data['number'] ?? null;
        $this->container['expiration_date'] = $data['expiration_date'] ?? null;
        $this->container['security_code'] = $data['security_code'] ?? null;
        $this->container['external_identifier'] = $data['external_identifier'] ?? null;
        $this->container['buyer_id'] = $data['buyer_id'] ?? null;
        $this->container['buyer_external_identifier'] = $data['buyer_external_identifier'] ?? null;
        $this->container['redirect_url'] = $data['redirect_url'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        $allowedValues = $this->getMethodAllowableValues();
        if (!is_null($this->container['method']) && !in_array($this->container['method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'method', must be one of '%s'",
                $this->container['method'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) > 16)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) < 14)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be bigger than or equal to 14.";
        }

        if (!is_null($this->container['number']) && !preg_match("/^[0-9]{14,16}$/", $this->container['number'])) {
            $invalidProperties[] = "invalid value for 'number', must be conform to the pattern /^[0-9]{14,16}$/.";
        }

        if (!is_null($this->container['expiration_date']) && (mb_strlen($this->container['expiration_date']) > 5)) {
            $invalidProperties[] = "invalid value for 'expiration_date', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['expiration_date']) && (mb_strlen($this->container['expiration_date']) < 5)) {
            $invalidProperties[] = "invalid value for 'expiration_date', the character length must be bigger than or equal to 5.";
        }

        if (!is_null($this->container['expiration_date']) && !preg_match("/^\\d\\d\/\\d\\d$/", $this->container['expiration_date'])) {
            $invalidProperties[] = "invalid value for 'expiration_date', must be conform to the pattern /^\\d\\d\/\\d\\d$/.";
        }

        if (!is_null($this->container['security_code']) && (mb_strlen($this->container['security_code']) > 4)) {
            $invalidProperties[] = "invalid value for 'security_code', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['security_code']) && (mb_strlen($this->container['security_code']) < 3)) {
            $invalidProperties[] = "invalid value for 'security_code', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['security_code']) && !preg_match("/^\\d{3,4}$/", $this->container['security_code'])) {
            $invalidProperties[] = "invalid value for 'security_code', must be conform to the pattern /^\\d{3,4}$/.";
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
     * Gets method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string $method The method to use for this request.
     *
     * @return self
     */
    public function setMethod($method)
    {
        $allowedValues = $this->getMethodAllowableValues();
        if (!in_array($method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'method', must be one of '%s'",
                    $method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number The 15-16 digit number for this credit card as it can be found on the front of the card.  If a card has been stored with us previously, this number will represent the unique tokenized card ID provided via our API.
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (!is_null($number) && (mb_strlen($number) > 16)) {
            throw new \InvalidArgumentException('invalid length for $number when calling TransactionPaymentMethodRequest., must be smaller than or equal to 16.');
        }
        if (!is_null($number) && (mb_strlen($number) < 14)) {
            throw new \InvalidArgumentException('invalid length for $number when calling TransactionPaymentMethodRequest., must be bigger than or equal to 14.');
        }
        if (!is_null($number) && (!preg_match("/^[0-9]{14,16}$/", $number))) {
            throw new \InvalidArgumentException("invalid value for $number when calling TransactionPaymentMethodRequest., must conform to the pattern /^[0-9]{14,16}$/.");
        }

        $this->container['number'] = $number;

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
     * @param string|null $expiration_date The expiration date of the card, formatted `MM/YY`. If a card has been previously stored with us this value is optional.  If the `number` of this card represents a tokenized card, then this value is ignored.
     *
     * @return self
     */
    public function setExpirationDate($expiration_date)
    {
        if (!is_null($expiration_date) && (mb_strlen($expiration_date) > 5)) {
            throw new \InvalidArgumentException('invalid length for $expiration_date when calling TransactionPaymentMethodRequest., must be smaller than or equal to 5.');
        }
        if (!is_null($expiration_date) && (mb_strlen($expiration_date) < 5)) {
            throw new \InvalidArgumentException('invalid length for $expiration_date when calling TransactionPaymentMethodRequest., must be bigger than or equal to 5.');
        }
        if (!is_null($expiration_date) && (!preg_match("/^\\d\\d\/\\d\\d$/", $expiration_date))) {
            throw new \InvalidArgumentException("invalid value for $expiration_date when calling TransactionPaymentMethodRequest., must conform to the pattern /^\\d\\d\/\\d\\d$/.");
        }

        $this->container['expiration_date'] = $expiration_date;

        return $this;
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
     * @param string|null $security_code The 3 or 4 digit security code often found on the card. This often referred to as the CVV or CVD.  If the `number` of this card represents a tokenized card, then this value is ignored.
     *
     * @return self
     */
    public function setSecurityCode($security_code)
    {
        if (!is_null($security_code) && (mb_strlen($security_code) > 4)) {
            throw new \InvalidArgumentException('invalid length for $security_code when calling TransactionPaymentMethodRequest., must be smaller than or equal to 4.');
        }
        if (!is_null($security_code) && (mb_strlen($security_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for $security_code when calling TransactionPaymentMethodRequest., must be bigger than or equal to 3.');
        }
        if (!is_null($security_code) && (!preg_match("/^\\d{3,4}$/", $security_code))) {
            throw new \InvalidArgumentException("invalid value for $security_code when calling TransactionPaymentMethodRequest., must conform to the pattern /^\\d{3,4}$/.");
        }

        $this->container['security_code'] = $security_code;

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
     * @param string|null $external_identifier An external identifier that can be used to match the card against your own records.
     *
     * @return self
     */
    public function setExternalIdentifier($external_identifier)
    {
        $this->container['external_identifier'] = $external_identifier;

        return $this;
    }

    /**
     * Gets buyer_id
     *
     * @return string|null
     */
    public function getBuyerId()
    {
        return $this->container['buyer_id'];
    }

    /**
     * Sets buyer_id
     *
     * @param string|null $buyer_id The ID of the buyer to associate this payment method to. If this field is provided then the `buyer_external_identifier` field needs to be unset.
     *
     * @return self
     */
    public function setBuyerId($buyer_id)
    {
        $this->container['buyer_id'] = $buyer_id;

        return $this;
    }

    /**
     * Gets buyer_external_identifier
     *
     * @return string|null
     */
    public function getBuyerExternalIdentifier()
    {
        return $this->container['buyer_external_identifier'];
    }

    /**
     * Sets buyer_external_identifier
     *
     * @param string|null $buyer_external_identifier The `external_identifier` of the buyer to associate this payment method to. If this field is provided then the `buyer_id` field needs to be unset.
     *
     * @return self
     */
    public function setBuyerExternalIdentifier($buyer_external_identifier)
    {
        $this->container['buyer_external_identifier'] = $buyer_external_identifier;

        return $this;
    }

    /**
     * Gets redirect_url
     *
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     *
     * @param string|null $redirect_url The redirect URL to redirect a buyer to after they have authorized their transaction or payment method. This only applies to payment methods that require buyer approval.
     *
     * @return self
     */
    public function setRedirectUrl($redirect_url)
    {
        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id An identifier for a previously tokenized payment method. This id can represent any type of payment method.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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


