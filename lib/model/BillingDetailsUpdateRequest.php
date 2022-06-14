<?php
/**
 * BillingDetailsUpdateRequest
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
 * OpenAPI Generator version: 5.4.0
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
 * BillingDetailsUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BillingDetailsUpdateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BillingDetailsUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'email_address' => 'string',
        'phone_number' => 'string',
        'address' => '\Gr4vy\model\Address',
        'tax_id' => 'TaxId'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'first_name' => null,
        'last_name' => null,
        'email_address' => null,
        'phone_number' => null,
        'address' => null,
        'tax_id' => null
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
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'email_address' => 'email_address',
        'phone_number' => 'phone_number',
        'address' => 'address',
        'tax_id' => 'tax_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'email_address' => 'setEmailAddress',
        'phone_number' => 'setPhoneNumber',
        'address' => 'setAddress',
        'tax_id' => 'setTaxId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'email_address' => 'getEmailAddress',
        'phone_number' => 'getPhoneNumber',
        'address' => 'getAddress',
        'tax_id' => 'getTaxId'
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
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['email_address'] = $data['email_address'] ?? null;
        $this->container['phone_number'] = $data['phone_number'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['tax_id'] = $data['tax_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['first_name']) && (mb_strlen($this->container['first_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['first_name']) && (mb_strlen($this->container['first_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['last_name']) && (mb_strlen($this->container['last_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['last_name']) && (mb_strlen($this->container['last_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['email_address']) && (mb_strlen($this->container['email_address']) > 320)) {
            $invalidProperties[] = "invalid value for 'email_address', the character length must be smaller than or equal to 320.";
        }

        if (!is_null($this->container['email_address']) && (mb_strlen($this->container['email_address']) < 1)) {
            $invalidProperties[] = "invalid value for 'email_address', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['phone_number']) && (mb_strlen($this->container['phone_number']) > 50)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['phone_number']) && (mb_strlen($this->container['phone_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['phone_number']) && !preg_match("/^\\+[1-9]\\d{1,14}$/", $this->container['phone_number'])) {
            $invalidProperties[] = "invalid value for 'phone_number', must be conform to the pattern /^\\+[1-9]\\d{1,14}$/.";
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
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name The first name(s) or given name for the buyer.
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (!is_null($first_name) && (mb_strlen($first_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling BillingDetailsUpdateRequest., must be smaller than or equal to 255.');
        }
        if (!is_null($first_name) && (mb_strlen($first_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling BillingDetailsUpdateRequest., must be bigger than or equal to 1.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name The last name, or family name, of the buyer.
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (!is_null($last_name) && (mb_strlen($last_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling BillingDetailsUpdateRequest., must be smaller than or equal to 255.');
        }
        if (!is_null($last_name) && (mb_strlen($last_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling BillingDetailsUpdateRequest., must be bigger than or equal to 1.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string|null $email_address The email address for the buyer.
     *
     * @return self
     */
    public function setEmailAddress($email_address)
    {
        if (!is_null($email_address) && (mb_strlen($email_address) > 320)) {
            throw new \InvalidArgumentException('invalid length for $email_address when calling BillingDetailsUpdateRequest., must be smaller than or equal to 320.');
        }
        if (!is_null($email_address) && (mb_strlen($email_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for $email_address when calling BillingDetailsUpdateRequest., must be bigger than or equal to 1.');
        }

        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number The phone number for the buyer which should be formatted according to the [E164 number standard](https://www.twilio.com/docs/glossary/what-e164).
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (!is_null($phone_number) && (mb_strlen($phone_number) > 50)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling BillingDetailsUpdateRequest., must be smaller than or equal to 50.');
        }
        if (!is_null($phone_number) && (mb_strlen($phone_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling BillingDetailsUpdateRequest., must be bigger than or equal to 1.');
        }
        if (!is_null($phone_number) && (!preg_match("/^\\+[1-9]\\d{1,14}$/", $phone_number))) {
            throw new \InvalidArgumentException("invalid value for $phone_number when calling BillingDetailsUpdateRequest., must conform to the pattern /^\\+[1-9]\\d{1,14}$/.");
        }

        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets address
     *
     * @return Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param Address|null $address The billing address for the buyer.
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets tax_id
     *
     * @return TaxId|null
     */
    public function getTaxId()
    {
        return $this->container['tax_id'];
    }

    /**
     * Sets tax_id
     *
     * @param TaxId|null $tax_id tax_id
     *
     * @return self
     */
    public function setTaxId($tax_id)
    {
        $this->container['tax_id'] = $tax_id;

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


