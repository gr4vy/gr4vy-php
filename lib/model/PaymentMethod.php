<?php
/**
 * PaymentMethod
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
 * PaymentMethod Class Doc Comment
 *
 * @category Class
 * @description A generic payment method.
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentMethod implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'id' => 'string',
        'status' => 'string',
        'method' => 'string',
        'mode' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'external_identifier' => 'string',
        'buyer' => '\Gr4vy\model\PaymentMethodBuyer',
        'label' => 'string',
        'scheme' => 'string',
        'expiration_date' => 'string',
        'approval_target' => 'string',
        'approval_url' => 'string',
        'currency' => 'string',
        'country' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'id' => 'uuid',
        'status' => null,
        'method' => null,
        'mode' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'external_identifier' => null,
        'buyer' => null,
        'label' => null,
        'scheme' => null,
        'expiration_date' => null,
        'approval_target' => null,
        'approval_url' => null,
        'currency' => null,
        'country' => null
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
        'type' => 'type',
        'id' => 'id',
        'status' => 'status',
        'method' => 'method',
        'mode' => 'mode',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'external_identifier' => 'external_identifier',
        'buyer' => 'buyer',
        'label' => 'label',
        'scheme' => 'scheme',
        'expiration_date' => 'expiration_date',
        'approval_target' => 'approval_target',
        'approval_url' => 'approval_url',
        'currency' => 'currency',
        'country' => 'country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'id' => 'setId',
        'status' => 'setStatus',
        'method' => 'setMethod',
        'mode' => 'setMode',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'external_identifier' => 'setExternalIdentifier',
        'buyer' => 'setBuyer',
        'label' => 'setLabel',
        'scheme' => 'setScheme',
        'expiration_date' => 'setExpirationDate',
        'approval_target' => 'setApprovalTarget',
        'approval_url' => 'setApprovalUrl',
        'currency' => 'setCurrency',
        'country' => 'setCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'id' => 'getId',
        'status' => 'getStatus',
        'method' => 'getMethod',
        'mode' => 'getMode',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'external_identifier' => 'getExternalIdentifier',
        'buyer' => 'getBuyer',
        'label' => 'getLabel',
        'scheme' => 'getScheme',
        'expiration_date' => 'getExpirationDate',
        'approval_target' => 'getApprovalTarget',
        'approval_url' => 'getApprovalUrl',
        'currency' => 'getCurrency',
        'country' => 'getCountry'
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

    public const TYPE_PAYMENT_METHOD = 'payment-method';
    public const STATUS_PROCESSING = 'processing';
    public const STATUS_BUYER_APPROVAL_REQUIRED = 'buyer_approval_required';
    public const STATUS_SUCCEEDED = 'succeeded';
    public const STATUS_FAILED = 'failed';
    public const APPROVAL_TARGET_ANY = 'any';
    public const APPROVAL_TARGET_NEW_WINDOW = 'new_window';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PAYMENT_METHOD,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PROCESSING,
            self::STATUS_BUYER_APPROVAL_REQUIRED,
            self::STATUS_SUCCEEDED,
            self::STATUS_FAILED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getApprovalTargetAllowableValues()
    {
        return [
            self::APPROVAL_TARGET_ANY,
            self::APPROVAL_TARGET_NEW_WINDOW,
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['method'] = $data['method'] ?? null;
        $this->container['mode'] = $data['mode'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['external_identifier'] = $data['external_identifier'] ?? null;
        $this->container['buyer'] = $data['buyer'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['scheme'] = $data['scheme'] ?? null;
        $this->container['expiration_date'] = $data['expiration_date'] ?? null;
        $this->container['approval_target'] = $data['approval_target'] ?? null;
        $this->container['approval_url'] = $data['approval_url'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['expiration_date']) && (mb_strlen($this->container['expiration_date']) > 5)) {
            $invalidProperties[] = "invalid value for 'expiration_date', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['expiration_date']) && (mb_strlen($this->container['expiration_date']) < 5)) {
            $invalidProperties[] = "invalid value for 'expiration_date', the character length must be bigger than or equal to 5.";
        }

        if (!is_null($this->container['expiration_date']) && !preg_match("/^\\d{2}\/\\d{2}$/", $this->container['expiration_date'])) {
            $invalidProperties[] = "invalid value for 'expiration_date', must be conform to the pattern /^\\d{2}\/\\d{2}$/.";
        }

        $allowedValues = $this->getApprovalTargetAllowableValues();
        if (!is_null($this->container['approval_target']) && !in_array($this->container['approval_target'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'approval_target', must be one of '%s'",
                $this->container['approval_target'],
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
     * @param string|null $type `payment-method`.
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
     * @param string|null $id The unique ID of the payment method.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The state of the payment method.  - `processing` - The payment method is still being stored. - `buyer_approval_required` - Storing the payment method requires   the buyer to provide approval. Follow the `approval_url` for next steps. - `succeeded` - The payment method is approved and stored with all   relevant payment services. - `failed` - Storing the payment method did not succeed.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string|null $method method
     *
     * @return self
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return string|null
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string|null $mode mode
     *
     * @return self
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at The date and time when this payment method was first created in our system.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at The date and time when this payment method was last updated in our system.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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
     * @param string|null $external_identifier An external identifier that can be used to match the payment method against your own records.
     *
     * @return self
     */
    public function setExternalIdentifier($external_identifier)
    {
        $this->container['external_identifier'] = $external_identifier;

        return $this;
    }

    /**
     * Gets buyer
     *
     * @return \Gr4vy\model\PaymentMethodBuyer|null
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param \Gr4vy\model\PaymentMethodBuyer|null $buyer buyer
     *
     * @return self
     */
    public function setBuyer($buyer)
    {
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label A label for the card or the account. For a `paypal` payment method this is the user's email address. For a card it is the last 4 digits of the card.
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets scheme
     *
     * @return string|null
     */
    public function getScheme()
    {
        return $this->container['scheme'];
    }

    /**
     * Sets scheme
     *
     * @param string|null $scheme The scheme of the card. Only applies to card payments.
     *
     * @return self
     */
    public function setScheme($scheme)
    {
        $this->container['scheme'] = $scheme;

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
     * @param string|null $expiration_date The expiration date for the payment method.
     *
     * @return self
     */
    public function setExpirationDate($expiration_date)
    {
        if (!is_null($expiration_date) && (mb_strlen($expiration_date) > 5)) {
            throw new \InvalidArgumentException('invalid length for $expiration_date when calling PaymentMethod., must be smaller than or equal to 5.');
        }
        if (!is_null($expiration_date) && (mb_strlen($expiration_date) < 5)) {
            throw new \InvalidArgumentException('invalid length for $expiration_date when calling PaymentMethod., must be bigger than or equal to 5.');
        }
        if (!is_null($expiration_date) && (!preg_match("/^\\d{2}\/\\d{2}$/", $expiration_date))) {
            throw new \InvalidArgumentException("invalid value for $expiration_date when calling PaymentMethod., must conform to the pattern /^\\d{2}\/\\d{2}$/.");
        }

        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets approval_target
     *
     * @return string|null
     */
    public function getApprovalTarget()
    {
        return $this->container['approval_target'];
    }

    /**
     * Sets approval_target
     *
     * @param string|null $approval_target The browser target that an approval URL must be opened in. If `any` or `null`, then there is no specific requirement.
     *
     * @return self
     */
    public function setApprovalTarget($approval_target)
    {
        $allowedValues = $this->getApprovalTargetAllowableValues();
        if (!is_null($approval_target) && !in_array($approval_target, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'approval_target', must be one of '%s'",
                    $approval_target,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['approval_target'] = $approval_target;

        return $this;
    }

    /**
     * Gets approval_url
     *
     * @return string|null
     */
    public function getApprovalUrl()
    {
        return $this->container['approval_url'];
    }

    /**
     * Sets approval_url
     *
     * @param string|null $approval_url The optional URL that the buyer needs to be redirected to to further authorize their payment.
     *
     * @return self
     */
    public function setApprovalUrl($approval_url)
    {
        $this->container['approval_url'] = $approval_url;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency The ISO-4217 currency code that this payment method can be used for. If this value is `null` the payment method may be used for multiple currencies.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country The 2-letter ISO code of the country this payment method can be used for. If this value is `null` the payment method may be used in multiple countries.
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

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


