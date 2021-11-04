<?php
/**
 * DigitalWalletRequest
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
 * OpenAPI Generator version: 5.1.1-SNAPSHOT
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
        'domain_names' => 'string[]',
        'accept_terms_and_conditions' => 'bool',
        'environments' => 'string[]'
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
        'domain_names' => null,
        'accept_terms_and_conditions' => null,
        'environments' => null
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
        'domain_names' => 'domain_names',
        'accept_terms_and_conditions' => 'accept_terms_and_conditions',
        'environments' => 'environments'
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
        'domain_names' => 'setDomainNames',
        'accept_terms_and_conditions' => 'setAcceptTermsAndConditions',
        'environments' => 'setEnvironments'
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
        'domain_names' => 'getDomainNames',
        'accept_terms_and_conditions' => 'getAcceptTermsAndConditions',
        'environments' => 'getEnvironments'
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

    const PROVIDER_APPLE = 'apple';
    const ENVIRONMENTS_DEVELOPMENT = 'development';
    const ENVIRONMENTS_STAGING = 'staging';
    const ENVIRONMENTS_PRODUCTION = 'production';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProviderAllowableValues()
    {
        return [
            self::PROVIDER_APPLE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEnvironmentsAllowableValues()
    {
        return [
            self::ENVIRONMENTS_DEVELOPMENT,
            self::ENVIRONMENTS_STAGING,
            self::ENVIRONMENTS_PRODUCTION,
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
        $this->container['merchant_url'] = $data['merchant_url'] ?? 'null';
        $this->container['domain_names'] = $data['domain_names'] ?? null;
        $this->container['accept_terms_and_conditions'] = $data['accept_terms_and_conditions'] ?? null;
        $this->container['environments'] = $data['environments'] ?? null;
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
        if (!is_null($this->container['environments']) && (count($this->container['environments']) > 3)) {
            $invalidProperties[] = "invalid value for 'environments', number of items must be less than or equal to 3.";
        }

        if (!is_null($this->container['environments']) && (count($this->container['environments']) < 0)) {
            $invalidProperties[] = "invalid value for 'environments', number of items must be greater than or equal to 0.";
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
     * @param string|null $merchant_url The main URL of the merchant. This is used to register the merchant with a digital wallet provider and this URL is not displayed to the buyer.
     *
     * @return self
     */
    public function setMerchantUrl($merchant_url)
    {
        $this->container['merchant_url'] = $merchant_url;

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
     * @param string[] $domain_names The list of fully qualified domain names that a digital wallet provider should process payments for.
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
     * Gets environments
     *
     * @return string[]|null
     */
    public function getEnvironments()
    {
        return $this->container['environments'];
    }

    /**
     * Sets environments
     *
     * @param string[]|null $environments Determines the Gr4vy environments in which this digital wallet should be available.
     *
     * @return self
     */
    public function setEnvironments($environments)
    {
        $allowedValues = $this->getEnvironmentsAllowableValues();
        if (!is_null($environments) && array_diff($environments, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'environments', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if (!is_null($environments) && (count($environments) > 3)) {
            throw new \InvalidArgumentException('invalid value for $environments when calling DigitalWalletRequest., number of items must be less than or equal to 3.');
        }
        if (!is_null($environments) && (count($environments) < 0)) {
            throw new \InvalidArgumentException('invalid length for $environments when calling DigitalWalletRequest., number of items must be greater than or equal to 0.');
        }
        $this->container['environments'] = $environments;

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

