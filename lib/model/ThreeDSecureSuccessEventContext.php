<?php
/**
 * ThreeDSecureSuccessEventContext
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
 * ThreeDSecureSuccessEventContext Class Doc Comment
 *
 * @category Class
 * @description 3DS context.
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ThreeDSecureSuccessEventContext implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ThreeDSecureSuccessEvent_context';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'eci' => 'string',
        'cavv' => 'string',
        'version' => 'string',
        'directory_response' => 'string',
        'authentication_response' => 'string',
        'directory_transaction_id' => 'string',
        'cavv_algorithm' => 'string',
        'method' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'eci' => null,
        'cavv' => null,
        'version' => null,
        'directory_response' => null,
        'authentication_response' => null,
        'directory_transaction_id' => null,
        'cavv_algorithm' => null,
        'method' => null
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
        'eci' => 'eci',
        'cavv' => 'cavv',
        'version' => 'version',
        'directory_response' => 'directory_response',
        'authentication_response' => 'authentication_response',
        'directory_transaction_id' => 'directory_transaction_id',
        'cavv_algorithm' => 'cavv_algorithm',
        'method' => 'method'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eci' => 'setEci',
        'cavv' => 'setCavv',
        'version' => 'setVersion',
        'directory_response' => 'setDirectoryResponse',
        'authentication_response' => 'setAuthenticationResponse',
        'directory_transaction_id' => 'setDirectoryTransactionId',
        'cavv_algorithm' => 'setCavvAlgorithm',
        'method' => 'setMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eci' => 'getEci',
        'cavv' => 'getCavv',
        'version' => 'getVersion',
        'directory_response' => 'getDirectoryResponse',
        'authentication_response' => 'getAuthenticationResponse',
        'directory_transaction_id' => 'getDirectoryTransactionId',
        'cavv_algorithm' => 'getCavvAlgorithm',
        'method' => 'getMethod'
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

    public const METHOD_CHALLENGE = 'challenge';
    public const METHOD_FRICTIONLESS = 'frictionless';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMethodAllowableValues()
    {
        return [
            self::METHOD_CHALLENGE,
            self::METHOD_FRICTIONLESS,
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
        $this->container['eci'] = $data['eci'] ?? null;
        $this->container['cavv'] = $data['cavv'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['directory_response'] = $data['directory_response'] ?? null;
        $this->container['authentication_response'] = $data['authentication_response'] ?? null;
        $this->container['directory_transaction_id'] = $data['directory_transaction_id'] ?? null;
        $this->container['cavv_algorithm'] = $data['cavv_algorithm'] ?? null;
        $this->container['method'] = $data['method'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['eci']) && (mb_strlen($this->container['eci']) > 2)) {
            $invalidProperties[] = "invalid value for 'eci', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['eci']) && (mb_strlen($this->container['eci']) < 1)) {
            $invalidProperties[] = "invalid value for 'eci', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['eci']) && !preg_match("/^0?\\d$/", $this->container['eci'])) {
            $invalidProperties[] = "invalid value for 'eci', must be conform to the pattern /^0?\\d$/.";
        }

        if (!is_null($this->container['version']) && !preg_match("/^[1-2].?[\\d+.?]{0,3}$/", $this->container['version'])) {
            $invalidProperties[] = "invalid value for 'version', must be conform to the pattern /^[1-2].?[\\d+.?]{0,3}$/.";
        }

        if (!is_null($this->container['directory_response']) && (mb_strlen($this->container['directory_response']) > 1)) {
            $invalidProperties[] = "invalid value for 'directory_response', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['authentication_response']) && (mb_strlen($this->container['authentication_response']) > 1)) {
            $invalidProperties[] = "invalid value for 'authentication_response', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['cavv_algorithm']) && (mb_strlen($this->container['cavv_algorithm']) > 1)) {
            $invalidProperties[] = "invalid value for 'cavv_algorithm', the character length must be smaller than or equal to 1.";
        }

        $allowedValues = $this->getMethodAllowableValues();
        if (!is_null($this->container['method']) && !in_array($this->container['method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'method', must be one of '%s'",
                $this->container['method'],
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
     * Gets eci
     *
     * @return string|null
     */
    public function getEci()
    {
        return $this->container['eci'];
    }

    /**
     * Sets eci
     *
     * @param string|null $eci The electronic commerce indicator for the 3DS transaction.
     *
     * @return self
     */
    public function setEci($eci)
    {
        if (!is_null($eci) && (mb_strlen($eci) > 2)) {
            throw new \InvalidArgumentException('invalid length for $eci when calling ThreeDSecureSuccessEventContext., must be smaller than or equal to 2.');
        }
        if (!is_null($eci) && (mb_strlen($eci) < 1)) {
            throw new \InvalidArgumentException('invalid length for $eci when calling ThreeDSecureSuccessEventContext., must be bigger than or equal to 1.');
        }
        if (!is_null($eci) && (!preg_match("/^0?\\d$/", $eci))) {
            throw new \InvalidArgumentException("invalid value for $eci when calling ThreeDSecureSuccessEventContext., must conform to the pattern /^0?\\d$/.");
        }

        $this->container['eci'] = $eci;

        return $this;
    }

    /**
     * Gets cavv
     *
     * @return string|null
     */
    public function getCavv()
    {
        return $this->container['cavv'];
    }

    /**
     * Sets cavv
     *
     * @param string|null $cavv The cardholder authentication value or AAV.
     *
     * @return self
     */
    public function setCavv($cavv)
    {
        $this->container['cavv'] = $cavv;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version The version of 3-D Secure that was used.
     *
     * @return self
     */
    public function setVersion($version)
    {

        if (!is_null($version) && (!preg_match("/^[1-2].?[\\d+.?]{0,3}$/", $version))) {
            throw new \InvalidArgumentException("invalid value for $version when calling ThreeDSecureSuccessEventContext., must conform to the pattern /^[1-2].?[\\d+.?]{0,3}$/.");
        }

        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets directory_response
     *
     * @return string|null
     */
    public function getDirectoryResponse()
    {
        return $this->container['directory_response'];
    }

    /**
     * Sets directory_response
     *
     * @param string|null $directory_response For 3-D Secure version 1, the enrolment response. For 3-D Secure version , the transaction status from the `ARes`.
     *
     * @return self
     */
    public function setDirectoryResponse($directory_response)
    {
        if (!is_null($directory_response) && (mb_strlen($directory_response) > 1)) {
            throw new \InvalidArgumentException('invalid length for $directory_response when calling ThreeDSecureSuccessEventContext., must be smaller than or equal to 1.');
        }

        $this->container['directory_response'] = $directory_response;

        return $this;
    }

    /**
     * Gets authentication_response
     *
     * @return string|null
     */
    public function getAuthenticationResponse()
    {
        return $this->container['authentication_response'];
    }

    /**
     * Sets authentication_response
     *
     * @param string|null $authentication_response The transaction status from the challenge result (not required for frictionless).
     *
     * @return self
     */
    public function setAuthenticationResponse($authentication_response)
    {
        if (!is_null($authentication_response) && (mb_strlen($authentication_response) > 1)) {
            throw new \InvalidArgumentException('invalid length for $authentication_response when calling ThreeDSecureSuccessEventContext., must be smaller than or equal to 1.');
        }

        $this->container['authentication_response'] = $authentication_response;

        return $this;
    }

    /**
     * Gets directory_transaction_id
     *
     * @return string|null
     */
    public function getDirectoryTransactionId()
    {
        return $this->container['directory_transaction_id'];
    }

    /**
     * Sets directory_transaction_id
     *
     * @param string|null $directory_transaction_id The transaction identifier.
     *
     * @return self
     */
    public function setDirectoryTransactionId($directory_transaction_id)
    {
        $this->container['directory_transaction_id'] = $directory_transaction_id;

        return $this;
    }

    /**
     * Gets cavv_algorithm
     *
     * @return string|null
     */
    public function getCavvAlgorithm()
    {
        return $this->container['cavv_algorithm'];
    }

    /**
     * Sets cavv_algorithm
     *
     * @param string|null $cavv_algorithm The CAVV Algorithm used.
     *
     * @return self
     */
    public function setCavvAlgorithm($cavv_algorithm)
    {
        if (!is_null($cavv_algorithm) && (mb_strlen($cavv_algorithm) > 1)) {
            throw new \InvalidArgumentException('invalid length for $cavv_algorithm when calling ThreeDSecureSuccessEventContext., must be smaller than or equal to 1.');
        }

        $this->container['cavv_algorithm'] = $cavv_algorithm;

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
     * @param string|null $method The method used for 3DS authentication for this transaction.
     *
     * @return self
     */
    public function setMethod($method)
    {
        $allowedValues = $this->getMethodAllowableValues();
        if (!is_null($method) && !in_array($method, $allowedValues, true)) {
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


