<?php
/**
 * Action
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
 * Action Class Doc Comment
 *
 * @category Class
 * @description An action taken for a transaction.
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Action implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Action';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'id' => 'string',
        'flow' => 'string',
        'rule_id' => 'string',
        'created_at' => '\DateTime',
        'outcome' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'id' => null,
        'flow' => null,
        'rule_id' => 'uuid',
        'created_at' => 'date-time',
        'outcome' => null
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
        'type' => 'type',
        'id' => 'id',
        'flow' => 'flow',
        'rule_id' => 'rule_id',
        'created_at' => 'created_at',
        'outcome' => 'outcome'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'id' => 'setId',
        'flow' => 'setFlow',
        'rule_id' => 'setRuleId',
        'created_at' => 'setCreatedAt',
        'outcome' => 'setOutcome'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'id' => 'getId',
        'flow' => 'getFlow',
        'rule_id' => 'getRuleId',
        'created_at' => 'getCreatedAt',
        'outcome' => 'getOutcome'
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

    public const TYPE_ACTION = 'action';
    public const ID_DECLINE_EARLY = 'decline-early';
    public const ID_ROUTE_TRANSACTION = 'route-transaction';
    public const ID_SKIP_3DS = 'skip-3ds';
    public const FLOW_CHECKOUT = 'checkout';
    public const FLOW_CARD_TRANSACTION = 'card-transaction';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ACTION,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIdAllowableValues()
    {
        return [
            self::ID_DECLINE_EARLY,
            self::ID_ROUTE_TRANSACTION,
            self::ID_SKIP_3DS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFlowAllowableValues()
    {
        return [
            self::FLOW_CHECKOUT,
            self::FLOW_CARD_TRANSACTION,
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['flow'] = $data['flow'] ?? null;
        $this->container['rule_id'] = $data['rule_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['outcome'] = $data['outcome'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIdAllowableValues();
        if (!is_null($this->container['id']) && !in_array($this->container['id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'id', must be one of '%s'",
                $this->container['id'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFlowAllowableValues();
        if (!is_null($this->container['flow']) && !in_array($this->container['flow'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'flow', must be one of '%s'",
                $this->container['flow'],
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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The type of this resource. Is always `action`.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The identifier for the action.
     *
     * @return self
     */
    public function setId($id)
    {
        $allowedValues = $this->getIdAllowableValues();
        if (!is_null($id) && !in_array($id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'id', must be one of '%s'",
                    $id,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets flow
     *
     * @return string|null
     */
    public function getFlow()
    {
        return $this->container['flow'];
    }

    /**
     * Sets flow
     *
     * @param string|null $flow The related flow for the action.
     *
     * @return self
     */
    public function setFlow($flow)
    {
        $allowedValues = $this->getFlowAllowableValues();
        if (!is_null($flow) && !in_array($flow, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'flow', must be one of '%s'",
                    $flow,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['flow'] = $flow;

        return $this;
    }

    /**
     * Gets rule_id
     *
     * @return string|null
     */
    public function getRuleId()
    {
        return $this->container['rule_id'];
    }

    /**
     * Sets rule_id
     *
     * @param string|null $rule_id The unique ID of the rule triggered.
     *
     * @return self
     */
    public function setRuleId($rule_id)
    {
        $this->container['rule_id'] = $rule_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at The date and time when this action was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets outcome
     *
     * @return string|null
     */
    public function getOutcome()
    {
        return $this->container['outcome'];
    }

    /**
     * Sets outcome
     *
     * @param string|null $outcome outcome
     *
     * @return self
     */
    public function setOutcome($outcome)
    {
        $this->container['outcome'] = $outcome;

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

