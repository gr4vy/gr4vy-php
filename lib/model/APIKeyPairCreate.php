<?php
/**
 * APIKeyPairCreate
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
 * APIKeyPairCreate Class Doc Comment
 *
 * @category Class
 * @description A request to create an API key-pair.
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class APIKeyPairCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'APIKeyPairCreate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'display_name' => 'string',
        'algorithm' => 'string',
        'role_ids' => 'string[]',
        'merchant_account_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'display_name' => null,
        'algorithm' => null,
        'role_ids' => 'uuid',
        'merchant_account_id' => null
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
        'display_name' => 'display_name',
        'algorithm' => 'algorithm',
        'role_ids' => 'role_ids',
        'merchant_account_id' => 'merchant_account_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'display_name' => 'setDisplayName',
        'algorithm' => 'setAlgorithm',
        'role_ids' => 'setRoleIds',
        'merchant_account_id' => 'setMerchantAccountId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'display_name' => 'getDisplayName',
        'algorithm' => 'getAlgorithm',
        'role_ids' => 'getRoleIds',
        'merchant_account_id' => 'getMerchantAccountId'
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

    public const ALGORITHM_ECDSA = 'ECDSA';
    public const ALGORITHM_RSA = 'RSA';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAlgorithmAllowableValues()
    {
        return [
            self::ALGORITHM_ECDSA,
            self::ALGORITHM_RSA,
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
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['algorithm'] = $data['algorithm'] ?? 'ECDSA';
        $this->container['role_ids'] = $data['role_ids'] ?? null;
        $this->container['merchant_account_id'] = $data['merchant_account_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['display_name']) && (mb_strlen($this->container['display_name']) > 200)) {
            $invalidProperties[] = "invalid value for 'display_name', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['display_name']) && (mb_strlen($this->container['display_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'display_name', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getAlgorithmAllowableValues();
        if (!is_null($this->container['algorithm']) && !in_array($this->container['algorithm'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'algorithm', must be one of '%s'",
                $this->container['algorithm'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['role_ids']) && (count($this->container['role_ids']) < 1)) {
            $invalidProperties[] = "invalid value for 'role_ids', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['merchant_account_id']) && (mb_strlen($this->container['merchant_account_id']) > 22)) {
            $invalidProperties[] = "invalid value for 'merchant_account_id', the character length must be smaller than or equal to 22.";
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
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name A name for this key-pair which is used in the Gr4vy admin panel to give the key-pair a human readable name.
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        if (!is_null($display_name) && (mb_strlen($display_name) > 200)) {
            throw new \InvalidArgumentException('invalid length for $display_name when calling APIKeyPairCreate., must be smaller than or equal to 200.');
        }
        if (!is_null($display_name) && (mb_strlen($display_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $display_name when calling APIKeyPairCreate., must be bigger than or equal to 1.');
        }

        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets algorithm
     *
     * @return string|null
     */
    public function getAlgorithm()
    {
        return $this->container['algorithm'];
    }

    /**
     * Sets algorithm
     *
     * @param string|null $algorithm The algorithm to use for the API Key Pair. The recommended value is `ECDSA`. You should only use the `RSA` algorithm in environments that do not support `ECDSA`.
     *
     * @return self
     */
    public function setAlgorithm($algorithm)
    {
        $allowedValues = $this->getAlgorithmAllowableValues();
        if (!is_null($algorithm) && !in_array($algorithm, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'algorithm', must be one of '%s'",
                    $algorithm,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['algorithm'] = $algorithm;

        return $this;
    }

    /**
     * Gets role_ids
     *
     * @return string[]|null
     */
    public function getRoleIds()
    {
        return $this->container['role_ids'];
    }

    /**
     * Sets role_ids
     *
     * @param string[]|null $role_ids A list of role IDs that will be assigned to the API Key Pair being created. Only the \"Administrator\" and \"Integration\" roles are supported.
     *
     * @return self
     */
    public function setRoleIds($role_ids)
    {


        if (!is_null($role_ids) && (count($role_ids) < 1)) {
            throw new \InvalidArgumentException('invalid length for $role_ids when calling APIKeyPairCreate., number of items must be greater than or equal to 1.');
        }
        $this->container['role_ids'] = $role_ids;

        return $this;
    }

    /**
     * Gets merchant_account_id
     *
     * @return string|null
     */
    public function getMerchantAccountId()
    {
        return $this->container['merchant_account_id'];
    }

    /**
     * Sets merchant_account_id
     *
     * @param string|null $merchant_account_id The optional ID of the merchant account this API Key Pair should be assigned to. Leave this unset to create an API key that works across all merchant accounts.
     *
     * @return self
     */
    public function setMerchantAccountId($merchant_account_id)
    {
        if (!is_null($merchant_account_id) && (mb_strlen($merchant_account_id) > 22)) {
            throw new \InvalidArgumentException('invalid length for $merchant_account_id when calling APIKeyPairCreate., must be smaller than or equal to 22.');
        }

        $this->container['merchant_account_id'] = $merchant_account_id;

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


