<?php

declare(strict_types=1);

namespace Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024;

use Plenty\AmazonPHP\SellingPartner\Exception\AssertionException;
use Plenty\AmazonPHP\SellingPartner\ModelInterface;
use Plenty\AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * The Selling Partner API for FBA inbound operations.
 *
 * The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
 *
 * The version of the OpenAPI document: 2024-03-20
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InboundOperationStatus implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'InboundOperationStatus';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'operation' => 'string',
        'operation_id' => 'string',
        'operation_problems' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\OperationProblem[]',
        'operation_status' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\OperationStatus',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'operation' => null,
        'operation_id' => null,
        'operation_problems' => null,
        'operation_status' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'operation' => 'operation',
        'operation_id' => 'operationId',
        'operation_problems' => 'operationProblems',
        'operation_status' => 'operationStatus',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'operation' => 'setOperation',
        'operation_id' => 'setOperationId',
        'operation_problems' => 'setOperationProblems',
        'operation_status' => 'setOperationStatus',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'operation' => 'getOperation',
        'operation_id' => 'getOperationId',
        'operation_problems' => 'getOperationProblems',
        'operation_status' => 'getOperationStatus',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param null|mixed[] $data Associated array of property values
     *                           initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['operation'] = $data['operation'] ?? null;
        $this->container['operation_id'] = $data['operation_id'] ?? null;
        $this->container['operation_problems'] = $data['operation_problems'] ?? null;
        $this->container['operation_status'] = $data['operation_status'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return (string) \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['operation'] === null) {
            $invalidProperties[] = "'operation' can't be null";
        }

        if ((\mb_strlen((string) $this->container['operation']) > 1024)) {
            $invalidProperties[] = "invalid value for 'operation', the character length must be smaller than or equal to 1024.";
        }

        if ((\mb_strlen((string) $this->container['operation']) < 1)) {
            $invalidProperties[] = "invalid value for 'operation', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['operation_id'] === null) {
            $invalidProperties[] = "'operation_id' can't be null";
        }

        if ((\mb_strlen((string) $this->container['operation_id']) > 38)) {
            $invalidProperties[] = "invalid value for 'operation_id', the character length must be smaller than or equal to 38.";
        }

        if ((\mb_strlen((string) $this->container['operation_id']) < 36)) {
            $invalidProperties[] = "invalid value for 'operation_id', the character length must be bigger than or equal to 36.";
        }

        if (!\preg_match('/^[a-zA-Z0-9-]*$/', (string) $this->container['operation_id'])) {
            $invalidProperties[] = "invalid value for 'operation_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.";
        }

        if ($this->container['operation_problems'] === null) {
            $invalidProperties[] = "'operation_problems' can't be null";
        }

        if ($this->container['operation_status'] === null) {
            $invalidProperties[] = "'operation_status' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid() : bool
    {
        return \count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets operation.
     */
    public function getOperation() : string
    {
        return $this->container['operation'];
    }

    /**
     * Sets operation.
     *
     * @param string $operation the name of the operation in the asynchronous API call
     */
    public function setOperation(string $operation) : self
    {
        $this->container['operation'] = $operation;

        return $this;
    }

    /**
     * Gets operation_id.
     */
    public function getOperationId() : string
    {
        return $this->container['operation_id'];
    }

    /**
     * Sets operation_id.
     *
     * @param string $operation_id the operation ID returned by the asynchronous API call
     */
    public function setOperationId(string $operation_id) : self
    {
        $this->container['operation_id'] = $operation_id;

        return $this;
    }

    /**
     * Gets operation_problems.
     *
     * @return OperationProblem[]
     */
    public function getOperationProblems() : array
    {
        return $this->container['operation_problems'];
    }

    /**
     * Sets operation_problems.
     *
     * @param OperationProblem[] $operation_problems the problems in the processing of the asynchronous operation
     */
    public function setOperationProblems(array $operation_problems) : self
    {
        $this->container['operation_problems'] = $operation_problems;

        return $this;
    }

    /**
     * Gets operation_status.
     */
    public function getOperationStatus() : OperationStatus
    {
        return $this->container['operation_status'];
    }

    /**
     * Sets operation_status.
     *
     * @param OperationStatus $operation_status operation_status
     */
    public function setOperationStatus(OperationStatus $operation_status) : self
    {
        $this->container['operation_status'] = $operation_status;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset) : mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
