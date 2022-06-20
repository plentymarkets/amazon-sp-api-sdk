<?php declare(strict_types=1);
/**
 * Expiry.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Retail Procurement Shipments.
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Plenty\AmazonPHP\SellingPartner\Model\VendorShipments;

use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Expiry implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Expiry';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'manufacturer_date' => '\DateTime',
        'expiry_date' => '\DateTime',
        'expiry_after_duration' => '\AmazonPHP\SellingPartner\Model\VendorShipments\Duration',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'manufacturer_date' => 'date-time',
        'expiry_date' => 'date-time',
        'expiry_after_duration' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'manufacturer_date' => 'manufacturerDate',
        'expiry_date' => 'expiryDate',
        'expiry_after_duration' => 'expiryAfterDuration',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'manufacturer_date' => 'setManufacturerDate',
        'expiry_date' => 'setExpiryDate',
        'expiry_after_duration' => 'setExpiryAfterDuration',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'manufacturer_date' => 'getManufacturerDate',
        'expiry_date' => 'getExpiryDate',
        'expiry_after_duration' => 'getExpiryAfterDuration',
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['manufacturer_date'] = $data['manufacturer_date'] ?? null;
        $this->container['expiry_date'] = $data['expiry_date'] ?? null;
        $this->container['expiry_after_duration'] = $data['expiry_after_duration'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
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
        return \json_encode(
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
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        return [];
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
     * Gets manufacturer_date.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getManufacturerDate() : ?\DateTimeInterface
    {
        return $this->container['manufacturer_date'];
    }

    /**
     * Sets manufacturer_date.
     *
     * @param \DateTime|\DateTimeImmutable $manufacturer_date Production, packaging or assembly date determined by the manufacturer. Its meaning is determined based on the trade item context.
     */
    public function setManufacturerDate(\DateTimeInterface $manufacturer_date) : self
    {
        $this->container['manufacturer_date'] = $manufacturer_date;

        return $this;
    }

    /**
     * Gets expiry_date.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getExpiryDate() : ?\DateTimeInterface
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date.
     *
     * @param \DateTime|\DateTimeImmutable $expiry_date The date that determines the limit of consumption or use of a product. Its meaning is determined based on the trade item context.
     */
    public function setExpiryDate(\DateTimeInterface $expiry_date) : self
    {
        $this->container['expiry_date'] = $expiry_date;

        return $this;
    }

    /**
     * Gets expiry_after_duration.
     */
    public function getExpiryAfterDuration() : ?Duration
    {
        return $this->container['expiry_after_duration'];
    }

    /**
     * Sets expiry_after_duration.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\Duration $expiry_after_duration expiry_after_duration
     */
    public function setExpiryAfterDuration(?Duration $expiry_after_duration) : self
    {
        $this->container['expiry_after_duration'] = $expiry_after_duration;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
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
     *
     * @param int $offset Offset
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
