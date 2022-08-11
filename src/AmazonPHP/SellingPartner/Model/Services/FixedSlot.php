<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Services;

use AmazonPHP\SellingPartner\Exception\AssertionException;
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
class FixedSlot implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'FixedSlot';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'start_date_time' => '\DateTimeInterface',
        'scheduled_capacity' => 'int',
        'available_capacity' => 'int',
        'encumbered_capacity' => 'int',
        'reserved_capacity' => 'int',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'start_date_time' => 'date-time',
        'scheduled_capacity' => 'int32',
        'available_capacity' => 'int32',
        'encumbered_capacity' => 'int32',
        'reserved_capacity' => 'int32',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'start_date_time' => 'startDateTime',
        'scheduled_capacity' => 'scheduledCapacity',
        'available_capacity' => 'availableCapacity',
        'encumbered_capacity' => 'encumberedCapacity',
        'reserved_capacity' => 'reservedCapacity',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'start_date_time' => 'setStartDateTime',
        'scheduled_capacity' => 'setScheduledCapacity',
        'available_capacity' => 'setAvailableCapacity',
        'encumbered_capacity' => 'setEncumberedCapacity',
        'reserved_capacity' => 'setReservedCapacity',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'start_date_time' => 'getStartDateTime',
        'scheduled_capacity' => 'getScheduledCapacity',
        'available_capacity' => 'getAvailableCapacity',
        'encumbered_capacity' => 'getEncumberedCapacity',
        'reserved_capacity' => 'getReservedCapacity',
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
        $this->container['start_date_time'] = $data['start_date_time'] ?? null;
        $this->container['scheduled_capacity'] = $data['scheduled_capacity'] ?? null;
        $this->container['available_capacity'] = $data['available_capacity'] ?? null;
        $this->container['encumbered_capacity'] = $data['encumbered_capacity'] ?? null;
        $this->container['reserved_capacity'] = $data['reserved_capacity'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
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
     *
     * @return string
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
    public function validate() : void
    {
    }

    /**
     * Gets start_date_time.
     *
     * @return null|\DateTimeInterface
     */
    public function getStartDateTime() : ?\DateTimeInterface
    {
        return $this->container['start_date_time'];
    }

    /**
     * Sets start_date_time.
     *
     * @param null|\DateTimeInterface $start_date_time start date time of slot in ISO 8601 format with precision of seconds
     *
     * @return self
     */
    public function setStartDateTime(?\DateTimeInterface $start_date_time) : self
    {
        $this->container['start_date_time'] = $start_date_time;

        return $this;
    }

    /**
     * Gets scheduled_capacity.
     *
     * @return null|int
     */
    public function getScheduledCapacity() : ?int
    {
        return $this->container['scheduled_capacity'];
    }

    /**
     * Sets scheduled_capacity.
     *
     * @param null|int $scheduled_capacity Scheduled capacity corresponding to the slot. This capacity represents the originally allocated capacity as per resource schedule.
     *
     * @return self
     */
    public function setScheduledCapacity(?int $scheduled_capacity) : self
    {
        $this->container['scheduled_capacity'] = $scheduled_capacity;

        return $this;
    }

    /**
     * Gets available_capacity.
     *
     * @return null|int
     */
    public function getAvailableCapacity() : ?int
    {
        return $this->container['available_capacity'];
    }

    /**
     * Sets available_capacity.
     *
     * @param null|int $available_capacity Available capacity corresponding to the slot. This capacity represents the capacity available for allocation to reservations.
     *
     * @return self
     */
    public function setAvailableCapacity(?int $available_capacity) : self
    {
        $this->container['available_capacity'] = $available_capacity;

        return $this;
    }

    /**
     * Gets encumbered_capacity.
     *
     * @return null|int
     */
    public function getEncumberedCapacity() : ?int
    {
        return $this->container['encumbered_capacity'];
    }

    /**
     * Sets encumbered_capacity.
     *
     * @param null|int $encumbered_capacity Encumbered capacity corresponding to the slot. This capacity represents the capacity allocated for Amazon Jobs/Appointments/Orders.
     *
     * @return self
     */
    public function setEncumberedCapacity(?int $encumbered_capacity) : self
    {
        $this->container['encumbered_capacity'] = $encumbered_capacity;

        return $this;
    }

    /**
     * Gets reserved_capacity.
     *
     * @return null|int
     */
    public function getReservedCapacity() : ?int
    {
        return $this->container['reserved_capacity'];
    }

    /**
     * Sets reserved_capacity.
     *
     * @param null|int $reserved_capacity Reserved capacity corresponding to the slot. This capacity represents the capacity made unavailable due to events like Breaks/Leaves/Lunch.
     *
     * @return self
     */
    public function setReservedCapacity(?int $reserved_capacity) : self
    {
        $this->container['reserved_capacity'] = $reserved_capacity;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @return bool
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
    public function offsetGet($offset)
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
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     *
     * @return string
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
