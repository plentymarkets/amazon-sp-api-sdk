<?php declare(strict_types=1);
/**
 * Event.
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
 * Selling Partner API for Shipping.
 *
 * Provides programmatic access to Amazon Shipping APIs.
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

namespace Plenty\AmazonPHP\SellingPartner\Model\Shipping;

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
class Event implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Event';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'event_code' => 'string',
        'event_time' => '\DateTime',
        'location' => '\AmazonPHP\SellingPartner\Model\Shipping\Location',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'event_code' => null,
        'event_time' => 'date-time',
        'location' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'event_code' => 'eventCode',
        'event_time' => 'eventTime',
        'location' => 'location',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'event_code' => 'setEventCode',
        'event_time' => 'setEventTime',
        'location' => 'setLocation',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'event_code' => 'getEventCode',
        'event_time' => 'getEventTime',
        'location' => 'getLocation',
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
        $this->container['event_code'] = $data['event_code'] ?? null;
        $this->container['event_time'] = $data['event_time'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
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
        $invalidProperties = [];

        if ($this->container['event_code'] === null) {
            $invalidProperties[] = "'event_code' can't be null";
        }

        if ((\mb_strlen($this->container['event_code']) > 60)) {
            $invalidProperties[] = "invalid value for 'event_code', the character length must be smaller than or equal to 60.";
        }

        if ((\mb_strlen($this->container['event_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'event_code', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['event_time'] === null) {
            $invalidProperties[] = "'event_time' can't be null";
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
     * Gets event_code.
     */
    public function getEventCode() : string
    {
        return $this->container['event_code'];
    }

    /**
     * Sets event_code.
     *
     * @param string $event_code the event code of a shipment, such as Departed, Received, and ReadyForReceive
     */
    public function setEventCode(string $event_code) : self
    {
        if ((\mb_strlen($event_code) > 60)) {
            throw new \InvalidArgumentException('invalid length for $event_code when calling Event., must be smaller than or equal to 60.');
        }

        if ((\mb_strlen($event_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $event_code when calling Event., must be bigger than or equal to 1.');
        }

        $this->container['event_code'] = $event_code;

        return $this;
    }

    /**
     * Gets event_time.
     *
     * @return \DateTime|\DateTimeImmutable
     */
    public function getEventTime() : \DateTimeInterface
    {
        return $this->container['event_time'];
    }

    /**
     * Sets event_time.
     *
     * @param \DateTime $event_time the date and time of an event for a shipment
     */
    public function setEventTime(\DateTimeInterface $event_time) : self
    {
        $this->container['event_time'] = $event_time;

        return $this;
    }

    /**
     * Gets location.
     */
    public function getLocation() : ?Location
    {
        return $this->container['location'];
    }

    /**
     * Sets location.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Shipping\Location $location location
     */
    public function setLocation(?Location $location) : self
    {
        $this->container['location'] = $location;

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
