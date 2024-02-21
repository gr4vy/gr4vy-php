<?php
/**
 * MerchantProfileDankort
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
 * MerchantProfileDankort Class Doc Comment
 *
 * @category Class
 * @description Merchant profile for Dankort.
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MerchantProfileDankort implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MerchantProfile_dankort';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchant_acquirer_bin' => 'string',
        'merchant_url' => 'string',
        'merchant_acquirer_id' => 'string',
        'merchant_name' => 'string',
        'merchant_country_code' => 'string',
        'merchant_category_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'merchant_acquirer_bin' => null,
        'merchant_url' => null,
        'merchant_acquirer_id' => null,
        'merchant_name' => null,
        'merchant_country_code' => null,
        'merchant_category_code' => null
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
        'merchant_acquirer_bin' => 'merchant_acquirer_bin',
        'merchant_url' => 'merchant_url',
        'merchant_acquirer_id' => 'merchant_acquirer_id',
        'merchant_name' => 'merchant_name',
        'merchant_country_code' => 'merchant_country_code',
        'merchant_category_code' => 'merchant_category_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchant_acquirer_bin' => 'setMerchantAcquirerBin',
        'merchant_url' => 'setMerchantUrl',
        'merchant_acquirer_id' => 'setMerchantAcquirerId',
        'merchant_name' => 'setMerchantName',
        'merchant_country_code' => 'setMerchantCountryCode',
        'merchant_category_code' => 'setMerchantCategoryCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchant_acquirer_bin' => 'getMerchantAcquirerBin',
        'merchant_url' => 'getMerchantUrl',
        'merchant_acquirer_id' => 'getMerchantAcquirerId',
        'merchant_name' => 'getMerchantName',
        'merchant_country_code' => 'getMerchantCountryCode',
        'merchant_category_code' => 'getMerchantCategoryCode'
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
        $this->container['merchant_acquirer_bin'] = $data['merchant_acquirer_bin'] ?? null;
        $this->container['merchant_url'] = $data['merchant_url'] ?? null;
        $this->container['merchant_acquirer_id'] = $data['merchant_acquirer_id'] ?? null;
        $this->container['merchant_name'] = $data['merchant_name'] ?? null;
        $this->container['merchant_country_code'] = $data['merchant_country_code'] ?? null;
        $this->container['merchant_category_code'] = $data['merchant_category_code'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['merchant_acquirer_bin']) && (mb_strlen($this->container['merchant_acquirer_bin']) > 11)) {
            $invalidProperties[] = "invalid value for 'merchant_acquirer_bin', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['merchant_acquirer_id']) && (mb_strlen($this->container['merchant_acquirer_id']) > 35)) {
            $invalidProperties[] = "invalid value for 'merchant_acquirer_id', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['merchant_name']) && (mb_strlen($this->container['merchant_name']) > 40)) {
            $invalidProperties[] = "invalid value for 'merchant_name', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['merchant_country_code']) && (mb_strlen($this->container['merchant_country_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'merchant_country_code', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['merchant_country_code']) && (mb_strlen($this->container['merchant_country_code']) < 3)) {
            $invalidProperties[] = "invalid value for 'merchant_country_code', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['merchant_category_code']) && (mb_strlen($this->container['merchant_category_code']) > 4)) {
            $invalidProperties[] = "invalid value for 'merchant_category_code', the character length must be smaller than or equal to 4.";
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
     * Gets merchant_acquirer_bin
     *
     * @return string|null
     */
    public function getMerchantAcquirerBin()
    {
        return $this->container['merchant_acquirer_bin'];
    }

    /**
     * Sets merchant_acquirer_bin
     *
     * @param string|null $merchant_acquirer_bin Acquirer bin to use when calling 3DS through this scheme.
     *
     * @return self
     */
    public function setMerchantAcquirerBin($merchant_acquirer_bin)
    {
        if (!is_null($merchant_acquirer_bin) && (mb_strlen($merchant_acquirer_bin) > 11)) {
            throw new \InvalidArgumentException('invalid length for $merchant_acquirer_bin when calling MerchantProfileDankort., must be smaller than or equal to 11.');
        }

        $this->container['merchant_acquirer_bin'] = $merchant_acquirer_bin;

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
     * @param string|null $merchant_url URL to send when calling 3DS through this scheme.
     *
     * @return self
     */
    public function setMerchantUrl($merchant_url)
    {
        $this->container['merchant_url'] = $merchant_url;

        return $this;
    }

    /**
     * Gets merchant_acquirer_id
     *
     * @return string|null
     */
    public function getMerchantAcquirerId()
    {
        return $this->container['merchant_acquirer_id'];
    }

    /**
     * Sets merchant_acquirer_id
     *
     * @param string|null $merchant_acquirer_id Merchant ID to use when calling 3DS through this scheme.
     *
     * @return self
     */
    public function setMerchantAcquirerId($merchant_acquirer_id)
    {
        if (!is_null($merchant_acquirer_id) && (mb_strlen($merchant_acquirer_id) > 35)) {
            throw new \InvalidArgumentException('invalid length for $merchant_acquirer_id when calling MerchantProfileDankort., must be smaller than or equal to 35.');
        }

        $this->container['merchant_acquirer_id'] = $merchant_acquirer_id;

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
     * @param string|null $merchant_name Merchant name to use when calling 3DS through this scheme.
     *
     * @return self
     */
    public function setMerchantName($merchant_name)
    {
        if (!is_null($merchant_name) && (mb_strlen($merchant_name) > 40)) {
            throw new \InvalidArgumentException('invalid length for $merchant_name when calling MerchantProfileDankort., must be smaller than or equal to 40.');
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
     * @param string|null $merchant_country_code Acquirer bin to use when calling 3DS through this scheme.
     *
     * @return self
     */
    public function setMerchantCountryCode($merchant_country_code)
    {
        if (!is_null($merchant_country_code) && (mb_strlen($merchant_country_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $merchant_country_code when calling MerchantProfileDankort., must be smaller than or equal to 3.');
        }
        if (!is_null($merchant_country_code) && (mb_strlen($merchant_country_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for $merchant_country_code when calling MerchantProfileDankort., must be bigger than or equal to 3.');
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
     * @param string|null $merchant_category_code Acquirer bin to use when calling 3DS through this scheme.
     *
     * @return self
     */
    public function setMerchantCategoryCode($merchant_category_code)
    {
        if (!is_null($merchant_category_code) && (mb_strlen($merchant_category_code) > 4)) {
            throw new \InvalidArgumentException('invalid length for $merchant_category_code when calling MerchantProfileDankort., must be smaller than or equal to 4.');
        }

        $this->container['merchant_category_code'] = $merchant_category_code;

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


