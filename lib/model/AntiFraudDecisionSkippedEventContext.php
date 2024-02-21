<?php
/**
 * AntiFraudDecisionSkippedEventContext
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
 * AntiFraudDecisionSkippedEventContext Class Doc Comment
 *
 * @category Class
 * @description Additional context for this event.
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AntiFraudDecisionSkippedEventContext implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AntiFraudDecisionSkippedEvent_context';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'anti_fraud_service_id' => 'string',
        'anti_fraud_service_name' => 'string',
        'anti_fraud_service_definition_id' => 'string',
        'reason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'anti_fraud_service_id' => 'uuid',
        'anti_fraud_service_name' => null,
        'anti_fraud_service_definition_id' => null,
        'reason' => null
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
        'anti_fraud_service_id' => 'anti_fraud_service_id',
        'anti_fraud_service_name' => 'anti_fraud_service_name',
        'anti_fraud_service_definition_id' => 'anti_fraud_service_definition_id',
        'reason' => 'reason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'anti_fraud_service_id' => 'setAntiFraudServiceId',
        'anti_fraud_service_name' => 'setAntiFraudServiceName',
        'anti_fraud_service_definition_id' => 'setAntiFraudServiceDefinitionId',
        'reason' => 'setReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'anti_fraud_service_id' => 'getAntiFraudServiceId',
        'anti_fraud_service_name' => 'getAntiFraudServiceName',
        'anti_fraud_service_definition_id' => 'getAntiFraudServiceDefinitionId',
        'reason' => 'getReason'
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
        $this->container['anti_fraud_service_id'] = $data['anti_fraud_service_id'] ?? null;
        $this->container['anti_fraud_service_name'] = $data['anti_fraud_service_name'] ?? null;
        $this->container['anti_fraud_service_definition_id'] = $data['anti_fraud_service_definition_id'] ?? null;
        $this->container['reason'] = $data['reason'] ?? null;
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
     * Gets anti_fraud_service_id
     *
     * @return string|null
     */
    public function getAntiFraudServiceId()
    {
        return $this->container['anti_fraud_service_id'];
    }

    /**
     * Sets anti_fraud_service_id
     *
     * @param string|null $anti_fraud_service_id The unique ID of the anti-fraud service used.
     *
     * @return self
     */
    public function setAntiFraudServiceId($anti_fraud_service_id)
    {
        $this->container['anti_fraud_service_id'] = $anti_fraud_service_id;

        return $this;
    }

    /**
     * Gets anti_fraud_service_name
     *
     * @return string|null
     */
    public function getAntiFraudServiceName()
    {
        return $this->container['anti_fraud_service_name'];
    }

    /**
     * Sets anti_fraud_service_name
     *
     * @param string|null $anti_fraud_service_name The name of the anti-fraud service used.
     *
     * @return self
     */
    public function setAntiFraudServiceName($anti_fraud_service_name)
    {
        $this->container['anti_fraud_service_name'] = $anti_fraud_service_name;

        return $this;
    }

    /**
     * Gets anti_fraud_service_definition_id
     *
     * @return string|null
     */
    public function getAntiFraudServiceDefinitionId()
    {
        return $this->container['anti_fraud_service_definition_id'];
    }

    /**
     * Sets anti_fraud_service_definition_id
     *
     * @param string|null $anti_fraud_service_definition_id The anti-fraud service definition used.
     *
     * @return self
     */
    public function setAntiFraudServiceDefinitionId($anti_fraud_service_definition_id)
    {
        $this->container['anti_fraud_service_definition_id'] = $anti_fraud_service_definition_id;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason The reason we could not get the anti-fraud decision.
     *
     * @return self
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

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


