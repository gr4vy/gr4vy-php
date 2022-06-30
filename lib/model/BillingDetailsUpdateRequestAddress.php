<?php
/**
 * BillingDetailsUpdateRequestAddress
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
 * BillingDetailsUpdateRequestAddress Class Doc Comment
 *
 * @category Class
 * @description The billing address for the buyer.
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BillingDetailsUpdateRequestAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BillingDetailsUpdateRequest_address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'city' => 'string',
        'country' => 'string',
        'postal_code' => 'string',
        'state' => 'string',
        'state_code' => 'string',
        'house_number_or_name' => 'string',
        'line1' => 'string',
        'line2' => 'string',
        'organization' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'city' => null,
        'country' => null,
        'postal_code' => null,
        'state' => null,
        'state_code' => null,
        'house_number_or_name' => null,
        'line1' => null,
        'line2' => null,
        'organization' => null
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
        'city' => 'city',
        'country' => 'country',
        'postal_code' => 'postal_code',
        'state' => 'state',
        'state_code' => 'state_code',
        'house_number_or_name' => 'house_number_or_name',
        'line1' => 'line1',
        'line2' => 'line2',
        'organization' => 'organization'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'city' => 'setCity',
        'country' => 'setCountry',
        'postal_code' => 'setPostalCode',
        'state' => 'setState',
        'state_code' => 'setStateCode',
        'house_number_or_name' => 'setHouseNumberOrName',
        'line1' => 'setLine1',
        'line2' => 'setLine2',
        'organization' => 'setOrganization'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'city' => 'getCity',
        'country' => 'getCountry',
        'postal_code' => 'getPostalCode',
        'state' => 'getState',
        'state_code' => 'getStateCode',
        'house_number_or_name' => 'getHouseNumberOrName',
        'line1' => 'getLine1',
        'line2' => 'getLine2',
        'organization' => 'getOrganization'
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
        $this->container['city'] = $data['city'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['state_code'] = $data['state_code'] ?? null;
        $this->container['house_number_or_name'] = $data['house_number_or_name'] ?? null;
        $this->container['line1'] = $data['line1'] ?? null;
        $this->container['line2'] = $data['line2'] ?? null;
        $this->container['organization'] = $data['organization'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 100)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) < 1)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) < 1)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) > 50)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 255)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 1)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['state_code']) && (mb_strlen($this->container['state_code']) > 6)) {
            $invalidProperties[] = "invalid value for 'state_code', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['state_code']) && (mb_strlen($this->container['state_code']) < 4)) {
            $invalidProperties[] = "invalid value for 'state_code', the character length must be bigger than or equal to 4.";
        }

        if (!is_null($this->container['house_number_or_name']) && (mb_strlen($this->container['house_number_or_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'house_number_or_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['house_number_or_name']) && (mb_strlen($this->container['house_number_or_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'house_number_or_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['line1']) && (mb_strlen($this->container['line1']) > 255)) {
            $invalidProperties[] = "invalid value for 'line1', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['line1']) && (mb_strlen($this->container['line1']) < 1)) {
            $invalidProperties[] = "invalid value for 'line1', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['line2']) && (mb_strlen($this->container['line2']) > 255)) {
            $invalidProperties[] = "invalid value for 'line2', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['line2']) && (mb_strlen($this->container['line2']) < 1)) {
            $invalidProperties[] = "invalid value for 'line2', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['organization']) && (mb_strlen($this->container['organization']) > 255)) {
            $invalidProperties[] = "invalid value for 'organization', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['organization']) && (mb_strlen($this->container['organization']) < 1)) {
            $invalidProperties[] = "invalid value for 'organization', the character length must be bigger than or equal to 1.";
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
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city The city for the billing address.
     *
     * @return self
     */
    public function setCity($city)
    {
        if (!is_null($city) && (mb_strlen($city) > 100)) {
            throw new \InvalidArgumentException('invalid length for $city when calling BillingDetailsUpdateRequestAddress., must be smaller than or equal to 100.');
        }
        if (!is_null($city) && (mb_strlen($city) < 1)) {
            throw new \InvalidArgumentException('invalid length for $city when calling BillingDetailsUpdateRequestAddress., must be bigger than or equal to 1.');
        }

        $this->container['city'] = $city;

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
     * @param string|null $country The country for the billing address.
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (!is_null($country) && (mb_strlen($country) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling BillingDetailsUpdateRequestAddress., must be smaller than or equal to 2.');
        }
        if (!is_null($country) && (mb_strlen($country) < 1)) {
            throw new \InvalidArgumentException('invalid length for $country when calling BillingDetailsUpdateRequestAddress., must be bigger than or equal to 1.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code The postal code or zip code for the billing address.
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (!is_null($postal_code) && (mb_strlen($postal_code) > 50)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling BillingDetailsUpdateRequestAddress., must be smaller than or equal to 50.');
        }
        if (!is_null($postal_code) && (mb_strlen($postal_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling BillingDetailsUpdateRequestAddress., must be bigger than or equal to 1.');
        }

        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state The state, county, or province for the billing address.
     *
     * @return self
     */
    public function setState($state)
    {
        if (!is_null($state) && (mb_strlen($state) > 255)) {
            throw new \InvalidArgumentException('invalid length for $state when calling BillingDetailsUpdateRequestAddress., must be smaller than or equal to 255.');
        }
        if (!is_null($state) && (mb_strlen($state) < 1)) {
            throw new \InvalidArgumentException('invalid length for $state when calling BillingDetailsUpdateRequestAddress., must be bigger than or equal to 1.');
        }

        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets state_code
     *
     * @return string|null
     */
    public function getStateCode()
    {
        return $this->container['state_code'];
    }

    /**
     * Sets state_code
     *
     * @param string|null $state_code The code of state, county, or province for the billing address in ISO 3166-2 format.
     *
     * @return self
     */
    public function setStateCode($state_code)
    {
        if (!is_null($state_code) && (mb_strlen($state_code) > 6)) {
            throw new \InvalidArgumentException('invalid length for $state_code when calling BillingDetailsUpdateRequestAddress., must be smaller than or equal to 6.');
        }
        if (!is_null($state_code) && (mb_strlen($state_code) < 4)) {
            throw new \InvalidArgumentException('invalid length for $state_code when calling BillingDetailsUpdateRequestAddress., must be bigger than or equal to 4.');
        }

        $this->container['state_code'] = $state_code;

        return $this;
    }

    /**
     * Gets house_number_or_name
     *
     * @return string|null
     */
    public function getHouseNumberOrName()
    {
        return $this->container['house_number_or_name'];
    }

    /**
     * Sets house_number_or_name
     *
     * @param string|null $house_number_or_name The house number or name for the billing address. Not all payment services use this field but some do.
     *
     * @return self
     */
    public function setHouseNumberOrName($house_number_or_name)
    {
        if (!is_null($house_number_or_name) && (mb_strlen($house_number_or_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $house_number_or_name when calling BillingDetailsUpdateRequestAddress., must be smaller than or equal to 255.');
        }
        if (!is_null($house_number_or_name) && (mb_strlen($house_number_or_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $house_number_or_name when calling BillingDetailsUpdateRequestAddress., must be bigger than or equal to 1.');
        }

        $this->container['house_number_or_name'] = $house_number_or_name;

        return $this;
    }

    /**
     * Gets line1
     *
     * @return string|null
     */
    public function getLine1()
    {
        return $this->container['line1'];
    }

    /**
     * Sets line1
     *
     * @param string|null $line1 The first line of the billing address.
     *
     * @return self
     */
    public function setLine1($line1)
    {
        if (!is_null($line1) && (mb_strlen($line1) > 255)) {
            throw new \InvalidArgumentException('invalid length for $line1 when calling BillingDetailsUpdateRequestAddress., must be smaller than or equal to 255.');
        }
        if (!is_null($line1) && (mb_strlen($line1) < 1)) {
            throw new \InvalidArgumentException('invalid length for $line1 when calling BillingDetailsUpdateRequestAddress., must be bigger than or equal to 1.');
        }

        $this->container['line1'] = $line1;

        return $this;
    }

    /**
     * Gets line2
     *
     * @return string|null
     */
    public function getLine2()
    {
        return $this->container['line2'];
    }

    /**
     * Sets line2
     *
     * @param string|null $line2 The second line of the billing address.
     *
     * @return self
     */
    public function setLine2($line2)
    {
        if (!is_null($line2) && (mb_strlen($line2) > 255)) {
            throw new \InvalidArgumentException('invalid length for $line2 when calling BillingDetailsUpdateRequestAddress., must be smaller than or equal to 255.');
        }
        if (!is_null($line2) && (mb_strlen($line2) < 1)) {
            throw new \InvalidArgumentException('invalid length for $line2 when calling BillingDetailsUpdateRequestAddress., must be bigger than or equal to 1.');
        }

        $this->container['line2'] = $line2;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return string|null
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param string|null $organization The optional name of the company or organisation to add to the billing address.
     *
     * @return self
     */
    public function setOrganization($organization)
    {
        if (!is_null($organization) && (mb_strlen($organization) > 255)) {
            throw new \InvalidArgumentException('invalid length for $organization when calling BillingDetailsUpdateRequestAddress., must be smaller than or equal to 255.');
        }
        if (!is_null($organization) && (mb_strlen($organization) < 1)) {
            throw new \InvalidArgumentException('invalid length for $organization when calling BillingDetailsUpdateRequestAddress., must be bigger than or equal to 1.');
        }

        $this->container['organization'] = $organization;

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


