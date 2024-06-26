<?php
/**
 * DeliveryWindowOption
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * The Selling Partner API for FBA inbound operations.
 *
 * The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
 *
 * The version of the OpenAPI document: 2024-03-20
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024;

use ArrayAccess;
use Plenty\AmazonPHP\SellingPartner\ObjectSerializer2024;

/**
 * DeliveryWindowOption Class Doc Comment
 *
 * @category Class
 * @description Contains information pertaining to a delivery window option.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DeliveryWindowOption implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'DeliveryWindowOption';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'availability_type' => 'string',
        'delivery_window_option_id' => 'string',
        'end_date' => '\DateTime',
        'start_date' => '\DateTime',
        'valid_until' => '\DateTime'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'availability_type' => null,
        'delivery_window_option_id' => null,
        'end_date' => 'date-time',
        'start_date' => 'date-time',
        'valid_until' => 'date-time'
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
        'availability_type' => 'availabilityType',
        'delivery_window_option_id' => 'deliveryWindowOptionId',
        'end_date' => 'endDate',
        'start_date' => 'startDate',
        'valid_until' => 'validUntil'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'availability_type' => 'setAvailabilityType',
        'delivery_window_option_id' => 'setDeliveryWindowOptionId',
        'end_date' => 'setEndDate',
        'start_date' => 'setStartDate',
        'valid_until' => 'setValidUntil'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'availability_type' => 'getAvailabilityType',
        'delivery_window_option_id' => 'getDeliveryWindowOptionId',
        'end_date' => 'getEndDate',
        'start_date' => 'getStartDate',
        'valid_until' => 'getValidUntil'
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
        $this->container['availability_type'] = $data['availability_type'] ?? null;
        $this->container['delivery_window_option_id'] = $data['delivery_window_option_id'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['valid_until'] = $data['valid_until'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['availability_type'] === null) {
            $invalidProperties[] = "'availability_type' can't be null";
        }
        if ($this->container['delivery_window_option_id'] === null) {
            $invalidProperties[] = "'delivery_window_option_id' can't be null";
        }
        if ((mb_strlen($this->container['delivery_window_option_id']) > 38)) {
            $invalidProperties[] = "invalid value for 'delivery_window_option_id', the character length must be smaller than or equal to 38.";
        }

        if ((mb_strlen($this->container['delivery_window_option_id']) < 36)) {
            $invalidProperties[] = "invalid value for 'delivery_window_option_id', the character length must be bigger than or equal to 36.";
        }

        if (!preg_match("/^[a-zA-Z0-9-]*$/", $this->container['delivery_window_option_id'])) {
            $invalidProperties[] = "invalid value for 'delivery_window_option_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.";
        }

        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['valid_until'] === null) {
            $invalidProperties[] = "'valid_until' can't be null";
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
     * Gets availability_type
     *
     * @return string
     */
    public function getAvailabilityType()
    {
        return $this->container['availability_type'];
    }

    /**
     * Sets availability_type
     *
     * @param string $availability_type Identifies type of Delivery Window Availability. Values: `AVAILABLE`, `CONGESTED`
     *
     * @return self
     */
    public function setAvailabilityType($availability_type)
    {
        $this->container['availability_type'] = $availability_type;

        return $this;
    }

    /**
     * Gets delivery_window_option_id
     *
     * @return string
     */
    public function getDeliveryWindowOptionId()
    {
        return $this->container['delivery_window_option_id'];
    }

    /**
     * Sets delivery_window_option_id
     *
     * @param string $delivery_window_option_id Identifier of a delivery window option. A delivery window option represent one option for when a shipment is expected to be delivered.
     *
     * @return self
     */
    public function setDeliveryWindowOptionId($delivery_window_option_id)
    {
        if ((mb_strlen($delivery_window_option_id) > 38)) {
            throw new \InvalidArgumentException(
                'invalid length for $delivery_window_option_id when calling DeliveryWindowOption., must be smaller than or equal to 38.'
            );
        }
        if ((mb_strlen($delivery_window_option_id) < 36)) {
            throw new \InvalidArgumentException(
                'invalid length for $delivery_window_option_id when calling DeliveryWindowOption., must be bigger than or equal to 36.'
            );
        }
        if ((!preg_match("/^[a-zA-Z0-9-]*$/", $delivery_window_option_id))) {
            throw new \InvalidArgumentException(
                "invalid value for $delivery_window_option_id when calling DeliveryWindowOption., must conform to the pattern /^[a-zA-Z0-9-]*$/."
            );
        }

        $this->container['delivery_window_option_id'] = $delivery_window_option_id;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date The timestamp at which this delivery window option ends. This is based in ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date The timestamp at which this delivery window option starts. This is based in ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets valid_until
     *
     * @return \DateTime
     */
    public function getValidUntil()
    {
        return $this->container['valid_until'];
    }

    /**
     * Sets valid_until
     *
     * @param \DateTime $valid_until The timestamp at which this window delivery option becomes no longer valid. This is based in ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
     *
     * @return self
     */
    public function setValidUntil($valid_until)
    {
        $this->container['valid_until'] = $valid_until;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed $value Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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
    public function jsonSerialize()
    {
        return ObjectSerializer2024::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer2024::sanitizeForSerialization($this),
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
        return json_encode(ObjectSerializer2024::sanitizeForSerialization($this));
    }
}


