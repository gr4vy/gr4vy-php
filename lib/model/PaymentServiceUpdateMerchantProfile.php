<?php
/**
 * PaymentServiceUpdateMerchantProfile
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
 * PaymentServiceUpdateMerchantProfile Class Doc Comment
 *
 * @category Class
 * @description Configuration for each supported card scheme. When updating a Payment Service, a key not being present will indicate no updates to be done on that scheme, whereas an object being sent as Null for a key will empty the configuration for that scheme.
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentServiceUpdateMerchantProfile implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentServiceUpdate_merchant_profile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amex' => '\Gr4vy\model\MerchantProfileAmex',
        'dankort' => '\Gr4vy\model\MerchantProfileDankort',
        'discover' => '\Gr4vy\model\MerchantProfileDiscover',
        'jcb' => '\Gr4vy\model\MerchantProfileJcb',
        'mastercard' => '\Gr4vy\model\MerchantProfileMastercard',
        'unionpay' => '\Gr4vy\model\MerchantProfileUnionpay',
        'visa' => '\Gr4vy\model\MerchantProfileVisa'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amex' => null,
        'dankort' => null,
        'discover' => null,
        'jcb' => null,
        'mastercard' => null,
        'unionpay' => null,
        'visa' => null
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
        'amex' => 'amex',
        'dankort' => 'dankort',
        'discover' => 'discover',
        'jcb' => 'jcb',
        'mastercard' => 'mastercard',
        'unionpay' => 'unionpay',
        'visa' => 'visa'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amex' => 'setAmex',
        'dankort' => 'setDankort',
        'discover' => 'setDiscover',
        'jcb' => 'setJcb',
        'mastercard' => 'setMastercard',
        'unionpay' => 'setUnionpay',
        'visa' => 'setVisa'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amex' => 'getAmex',
        'dankort' => 'getDankort',
        'discover' => 'getDiscover',
        'jcb' => 'getJcb',
        'mastercard' => 'getMastercard',
        'unionpay' => 'getUnionpay',
        'visa' => 'getVisa'
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
        $this->container['amex'] = $data['amex'] ?? null;
        $this->container['dankort'] = $data['dankort'] ?? null;
        $this->container['discover'] = $data['discover'] ?? null;
        $this->container['jcb'] = $data['jcb'] ?? null;
        $this->container['mastercard'] = $data['mastercard'] ?? null;
        $this->container['unionpay'] = $data['unionpay'] ?? null;
        $this->container['visa'] = $data['visa'] ?? null;
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
     * Gets amex
     *
     * @return \Gr4vy\model\MerchantProfileAmex|null
     */
    public function getAmex()
    {
        return $this->container['amex'];
    }

    /**
     * Sets amex
     *
     * @param \Gr4vy\model\MerchantProfileAmex|null $amex amex
     *
     * @return self
     */
    public function setAmex($amex)
    {
        $this->container['amex'] = $amex;

        return $this;
    }

    /**
     * Gets dankort
     *
     * @return \Gr4vy\model\MerchantProfileDankort|null
     */
    public function getDankort()
    {
        return $this->container['dankort'];
    }

    /**
     * Sets dankort
     *
     * @param \Gr4vy\model\MerchantProfileDankort|null $dankort dankort
     *
     * @return self
     */
    public function setDankort($dankort)
    {
        $this->container['dankort'] = $dankort;

        return $this;
    }

    /**
     * Gets discover
     *
     * @return \Gr4vy\model\MerchantProfileDiscover|null
     */
    public function getDiscover()
    {
        return $this->container['discover'];
    }

    /**
     * Sets discover
     *
     * @param \Gr4vy\model\MerchantProfileDiscover|null $discover discover
     *
     * @return self
     */
    public function setDiscover($discover)
    {
        $this->container['discover'] = $discover;

        return $this;
    }

    /**
     * Gets jcb
     *
     * @return \Gr4vy\model\MerchantProfileJcb|null
     */
    public function getJcb()
    {
        return $this->container['jcb'];
    }

    /**
     * Sets jcb
     *
     * @param \Gr4vy\model\MerchantProfileJcb|null $jcb jcb
     *
     * @return self
     */
    public function setJcb($jcb)
    {
        $this->container['jcb'] = $jcb;

        return $this;
    }

    /**
     * Gets mastercard
     *
     * @return \Gr4vy\model\MerchantProfileMastercard|null
     */
    public function getMastercard()
    {
        return $this->container['mastercard'];
    }

    /**
     * Sets mastercard
     *
     * @param \Gr4vy\model\MerchantProfileMastercard|null $mastercard mastercard
     *
     * @return self
     */
    public function setMastercard($mastercard)
    {
        $this->container['mastercard'] = $mastercard;

        return $this;
    }

    /**
     * Gets unionpay
     *
     * @return \Gr4vy\model\MerchantProfileUnionpay|null
     */
    public function getUnionpay()
    {
        return $this->container['unionpay'];
    }

    /**
     * Sets unionpay
     *
     * @param \Gr4vy\model\MerchantProfileUnionpay|null $unionpay unionpay
     *
     * @return self
     */
    public function setUnionpay($unionpay)
    {
        $this->container['unionpay'] = $unionpay;

        return $this;
    }

    /**
     * Gets visa
     *
     * @return \Gr4vy\model\MerchantProfileVisa|null
     */
    public function getVisa()
    {
        return $this->container['visa'];
    }

    /**
     * Sets visa
     *
     * @param \Gr4vy\model\MerchantProfileVisa|null $visa visa
     *
     * @return self
     */
    public function setVisa($visa)
    {
        $this->container['visa'] = $visa;

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


