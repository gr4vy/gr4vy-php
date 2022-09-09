<?php
/**
 * AntiFraudServiceUpdate
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
 * AntiFraudServiceUpdate Class Doc Comment
 *
 * @category Class
 * @description A request to update an anti-fraud service.
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AntiFraudServiceUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AntiFraudServiceUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'anti_fraud_service_definition_id' => 'string',
        'display_name' => 'string',
        'active' => 'bool',
        'fields' => '\Gr4vy\model\AntiFraudServiceUpdateFieldsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'anti_fraud_service_definition_id' => null,
        'display_name' => null,
        'active' => null,
        'fields' => null
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
        'anti_fraud_service_definition_id' => 'anti_fraud_service_definition_id',
        'display_name' => 'display_name',
        'active' => 'active',
        'fields' => 'fields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'anti_fraud_service_definition_id' => 'setAntiFraudServiceDefinitionId',
        'display_name' => 'setDisplayName',
        'active' => 'setActive',
        'fields' => 'setFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'anti_fraud_service_definition_id' => 'getAntiFraudServiceDefinitionId',
        'display_name' => 'getDisplayName',
        'active' => 'getActive',
        'fields' => 'getFields'
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

    public const ANTI_FRAUD_SERVICE_DEFINITION_ID_SIFT = 'sift';
    public const ANTI_FRAUD_SERVICE_DEFINITION_ID_CYBERSOURCE = 'cybersource';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAntiFraudServiceDefinitionIdAllowableValues()
    {
        return [
            self::ANTI_FRAUD_SERVICE_DEFINITION_ID_SIFT,
            self::ANTI_FRAUD_SERVICE_DEFINITION_ID_CYBERSOURCE,
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
        $this->container['anti_fraud_service_definition_id'] = $data['anti_fraud_service_definition_id'] ?? null;
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['active'] = $data['active'] ?? true;
        $this->container['fields'] = $data['fields'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['anti_fraud_service_definition_id'] === null) {
            $invalidProperties[] = "'anti_fraud_service_definition_id' can't be null";
        }
        $allowedValues = $this->getAntiFraudServiceDefinitionIdAllowableValues();
        if (!is_null($this->container['anti_fraud_service_definition_id']) && !in_array($this->container['anti_fraud_service_definition_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'anti_fraud_service_definition_id', must be one of '%s'",
                $this->container['anti_fraud_service_definition_id'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['display_name']) && (mb_strlen($this->container['display_name']) > 200)) {
            $invalidProperties[] = "invalid value for 'display_name', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['display_name']) && (mb_strlen($this->container['display_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'display_name', the character length must be bigger than or equal to 1.";
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
     * Gets anti_fraud_service_definition_id
     *
     * @return string
     */
    public function getAntiFraudServiceDefinitionId()
    {
        return $this->container['anti_fraud_service_definition_id'];
    }

    /**
     * Sets anti_fraud_service_definition_id
     *
     * @param string $anti_fraud_service_definition_id The name of the Anti-Fraud service provider. During update request, this value is used for validation only but the underlying service can not be changed for an existing service.
     *
     * @return self
     */
    public function setAntiFraudServiceDefinitionId($anti_fraud_service_definition_id)
    {
        $allowedValues = $this->getAntiFraudServiceDefinitionIdAllowableValues();
        if (!in_array($anti_fraud_service_definition_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'anti_fraud_service_definition_id', must be one of '%s'",
                    $anti_fraud_service_definition_id,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['anti_fraud_service_definition_id'] = $anti_fraud_service_definition_id;

        return $this;
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
     * @param string|null $display_name A unique name for this anti-fraud service which is used in the Gr4vy admin panel to give a anti-fraud Service a human readable name.
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        if (!is_null($display_name) && (mb_strlen($display_name) > 200)) {
            throw new \InvalidArgumentException('invalid length for $display_name when calling AntiFraudServiceUpdate., must be smaller than or equal to 200.');
        }
        if (!is_null($display_name) && (mb_strlen($display_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $display_name when calling AntiFraudServiceUpdate., must be bigger than or equal to 1.');
        }

        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Defines if this service is currently active or not.
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return \Gr4vy\model\AntiFraudServiceUpdateFieldsInner[]|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \Gr4vy\model\AntiFraudServiceUpdateFieldsInner[]|null $fields A list of fields, each containing a key-value pair for each field defined by the definition for this anti-fraud service e.g. for sift `api_key` must be sent within this field when creating the service.  For updates, only the fields sent here will be updated, existing ones will not be affected if not present.
     *
     * @return self
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

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


