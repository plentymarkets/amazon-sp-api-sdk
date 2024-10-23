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
class Region implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'Region';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'country_code' => 'string',
        'state' => 'string',
        'warehouse_id' => 'string',
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
        'country_code' => null,
        'state' => null,
        'warehouse_id' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'country_code' => 'countryCode',
        'state' => 'state',
        'warehouse_id' => 'warehouseId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'country_code' => 'setCountryCode',
        'state' => 'setState',
        'warehouse_id' => 'setWarehouseId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'country_code' => 'getCountryCode',
        'state' => 'getState',
        'warehouse_id' => 'getWarehouseId',
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
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['warehouse_id'] = $data['warehouse_id'] ?? null;
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
         
        if (null !== $this->container['country_code'] && (\mb_strlen((string) $this->container['country_code']) > 1024)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be smaller than or equal to 1024.";
        }

        if (null !== $this->container['country_code'] && (\mb_strlen((string) $this->container['country_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be bigger than or equal to 1.";
        }

        if (null !== $this->container['state'] && (\mb_strlen((string) $this->container['state']) > 1024)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 1024.";
        }

        if (null !== $this->container['state'] && (\mb_strlen((string) $this->container['state']) < 1)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
        }

        if (null !== $this->container['warehouse_id'] && (\mb_strlen((string) $this->container['warehouse_id']) > 1024)) {
            $invalidProperties[] = "invalid value for 'warehouse_id', the character length must be smaller than or equal to 1024.";
        }

        if (null !== $this->container['warehouse_id'] && (\mb_strlen((string) $this->container['warehouse_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'warehouse_id', the character length must be bigger than or equal to 1.";
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
     * Gets country_code.
     */
    public function getCountryCode() : ?string
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code.
     *
     * @param null|string $country_code ISO 3166 standard alpha-2 country code
     */
    public function setCountryCode(?string $country_code) : self
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets state.
     */
    public function getState() : ?string
    {
        return $this->container['state'];
    }

    /**
     * Sets state.
     *
     * @param null|string $state state
     */
    public function setState(?string $state) : self
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets warehouse_id.
     */
    public function getWarehouseId() : ?string
    {
        return $this->container['warehouse_id'];
    }

    /**
     * Sets warehouse_id.
     *
     * @param null|string $warehouse_id an identifier for a warehouse, such as a FC, IXD, upstream storage
     */
    public function setWarehouseId(?string $warehouse_id) : self
    {
        $this->container['warehouse_id'] = $warehouse_id;

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
