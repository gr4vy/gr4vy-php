<?php
/**
 * DigitalWalletRequest
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
 * DigitalWalletRequest Class Doc Comment
 *
 * @category Class
 * @description Merchant details used to register with a digital wallet provider.
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DigitalWalletRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DigitalWalletRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'provider' => 'string',
        'merchant_name' => 'string',
        'merchant_url' => 'string',
        'merchant_display_name' => 'string',
        'merchant_country_code' => 'string',
        'domain_names' => 'string[]',
        'accept_terms_and_conditions' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'provider' => null,
        'merchant_name' => null,
        'merchant_url' => 'url',
        'merchant_display_name' => null,
        'merchant_country_code' => null,
        'domain_names' => null,
        'accept_terms_and_conditions' => null
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
        'provider' => 'provider',
        'merchant_name' => 'merchant_name',
        'merchant_url' => 'merchant_url',
        'merchant_display_name' => 'merchant_display_name',
        'merchant_country_code' => 'merchant_country_code',
        'domain_names' => 'domain_names',
        'accept_terms_and_conditions' => 'accept_terms_and_conditions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'provider' => 'setProvider',
        'merchant_name' => 'setMerchantName',
        'merchant_url' => 'setMerchantUrl',
        'merchant_display_name' => 'setMerchantDisplayName',
        'merchant_country_code' => 'setMerchantCountryCode',
        'domain_names' => 'setDomainNames',
        'accept_terms_and_conditions' => 'setAcceptTermsAndConditions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'provider' => 'getProvider',
        'merchant_name' => 'getMerchantName',
        'merchant_url' => 'getMerchantUrl',
        'merchant_display_name' => 'getMerchantDisplayName',
        'merchant_country_code' => 'getMerchantCountryCode',
        'domain_names' => 'getDomainNames',
        'accept_terms_and_conditions' => 'getAcceptTermsAndConditions'
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

    public const PROVIDER_APPLE = 'apple';
    public const PROVIDER_GOOGLE = 'google';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProviderAllowableValues()
    {
        return [
            self::PROVIDER_APPLE,
            self::PROVIDER_GOOGLE,
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
        $this->container['provider'] = $data['provider'] ?? null;
        $this->container['merchant_name'] = $data['merchant_name'] ?? null;
        $this->container['merchant_url'] = $data['merchant_url'] ?? null;
        $this->container['merchant_display_name'] = $data['merchant_display_name'] ?? null;
        $this->container['merchant_country_code'] = $data['merchant_country_code'] ?? null;
        $this->container['domain_names'] = $data['domain_names'] ?? null;
        $this->container['accept_terms_and_conditions'] = $data['accept_terms_and_conditions'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['provider'] === null) {
            $invalidProperties[] = "'provider' can't be null";
        }
        $allowedValues = $this->getProviderAllowableValues();
        if (!is_null($this->container['provider']) && !in_array($this->container['provider'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'provider', must be one of '%s'",
                $this->container['provider'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['merchant_name'] === null) {
            $invalidProperties[] = "'merchant_name' can't be null";
        }
        if (!is_null($this->container['merchant_country_code']) && (mb_strlen($this->container['merchant_country_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'merchant_country_code', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['merchant_country_code']) && (mb_strlen($this->container['merchant_country_code']) < 2)) {
            $invalidProperties[] = "invalid value for 'merchant_country_code', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['domain_names'] === null) {
            $invalidProperties[] = "'domain_names' can't be null";
        }
        if ((count($this->container['domain_names']) > 99)) {
            $invalidProperties[] = "invalid value for 'domain_names', number of items must be less than or equal to 99.";
        }

        if ((count($this->container['domain_names']) < 1)) {
            $invalidProperties[] = "invalid value for 'domain_names', number of items must be greater than or equal to 1.";
        }

        if ($this->container['accept_terms_and_conditions'] === null) {
            $invalidProperties[] = "'accept_terms_and_conditions' can't be null";
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
     * Gets provider
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param string $provider The name of the digital wallet provider.
     *
     * @return self
     */
    public function setProvider($provider)
    {
        $allowedValues = $this->getProviderAllowableValues();
        if (!in_array($provider, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'provider', must be one of '%s'",
                    $provider,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets merchant_name
     *
     * @return string
     */
    public function getMerchantName()
    {
        return $this->container['merchant_name'];
    }

    /**
     * Sets merchant_name
     *
     * @param string $merchant_name The name of the merchant. This is used to register the merchant with a digital wallet provider and this name is not displayed to the buyer.
     *
     * @return self
     */
    public function setMerchantName($merchant_name)
    {
        $this->container['merchant_name'] = $merchant_name;

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
     * @param string|null $merchant_url The main URL of the merchant.
     *
     * @return self
     */
    public function setMerchantUrl($merchant_url)
    {
        $this->container['merchant_url'] = $merchant_url;

        return $this;
    }

    /**
     * Gets merchant_display_name
     *
     * @return string|null
     */
    public function getMerchantDisplayName()
    {
        return $this->container['merchant_display_name'];
    }

    /**
     * Sets merchant_display_name
     *
     * @param string|null $merchant_display_name The consumer facing name of the merchant.
     *
     * @return self
     */
    public function setMerchantDisplayName($merchant_display_name)
    {
        $this->container['merchant_display_name'] = $merchant_display_name;

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
     * @param string|null $merchant_country_code The country code where the merchant is registered.
     *
     * @return self
     */
    public function setMerchantCountryCode($merchant_country_code)
    {
        if (!is_null($merchant_country_code) && (mb_strlen($merchant_country_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $merchant_country_code when calling DigitalWalletRequest., must be smaller than or equal to 2.');
        }
        if (!is_null($merchant_country_code) && (mb_strlen($merchant_country_code) < 2)) {
            throw new \InvalidArgumentException('invalid length for $merchant_country_code when calling DigitalWalletRequest., must be bigger than or equal to 2.');
        }

        $this->container['merchant_country_code'] = $merchant_country_code;

        return $this;
    }

    /**
     * Gets domain_names
     *
     * @return string[]
     */
    public function getDomainNames()
    {
        return $this->container['domain_names'];
    }

    /**
     * Sets domain_names
     *
     * @param string[] $domain_names The list of domain names that a digital wallet can be used on. To use a digital wallet on a website, the domain of the site is required to be in this list.
     *
     * @return self
     */
    public function setDomainNames($domain_names)
    {

        if ((count($domain_names) > 99)) {
            throw new \InvalidArgumentException('invalid value for $domain_names when calling DigitalWalletRequest., number of items must be less than or equal to 99.');
        }
        if ((count($domain_names) < 1)) {
            throw new \InvalidArgumentException('invalid length for $domain_names when calling DigitalWalletRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['domain_names'] = $domain_names;

        return $this;
    }

    /**
     * Gets accept_terms_and_conditions
     *
     * @return bool
     */
    public function getAcceptTermsAndConditions()
    {
        return $this->container['accept_terms_and_conditions'];
    }

    /**
     * Sets accept_terms_and_conditions
     *
     * @param bool $accept_terms_and_conditions The explicit acceptance of the digital wallet provider's terms and conditions by the merchant. Needs to be `true` to register a new digital wallet.
     *
     * @return self
     */
    public function setAcceptTermsAndConditions($accept_terms_and_conditions)
    {
        $this->container['accept_terms_and_conditions'] = $accept_terms_and_conditions;

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


