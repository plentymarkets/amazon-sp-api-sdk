<?php
/**
 * AppointmentSlot
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

use \ArrayAccess;
use Plenty\AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * AppointmentSlot Class Doc Comment
 *
 * @category Class
 * @description The fulfillment center appointment slot for the transportation option.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AppointmentSlot implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'AppointmentSlot';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'slot_id' => 'string',
        'slot_time' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\AppointmentSlotTime'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'slot_id' => null,
        'slot_time' => null
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
        'slot_id' => 'slotId',
        'slot_time' => 'slotTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'slot_id' => 'setSlotId',
        'slot_time' => 'setSlotTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'slot_id' => 'getSlotId',
        'slot_time' => 'getSlotTime'
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
        $this->container['slot_id'] = $data['slot_id'] ?? null;
        $this->container['slot_time'] = $data['slot_time'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['slot_id'] === null) {
            $invalidProperties[] = "'slot_id' can't be null";
        }
        if ((mb_strlen($this->container['slot_id']) > 38)) {
            $invalidProperties[] = "invalid value for 'slot_id', the character length must be smaller than or equal to 38.";
        }

        if ((mb_strlen($this->container['slot_id']) < 38)) {
            $invalidProperties[] = "invalid value for 'slot_id', the character length must be bigger than or equal to 38.";
        }

        if (!preg_match("/^[a-zA-Z0-9-]*$/", $this->container['slot_id'])) {
            $invalidProperties[] = "invalid value for 'slot_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.";
        }

        if ($this->container['slot_time'] === null) {
            $invalidProperties[] = "'slot_time' can't be null";
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
     * Gets slot_id
     *
     * @return string
     */
    public function getSlotId()
    {
        return $this->container['slot_id'];
    }

    /**
     * Sets slot_id
     *
     * @param string $slot_id An identifier to a self-ship appointment slot.
     *
     * @return self
     */
    public function setSlotId($slot_id)
    {
        if ((mb_strlen($slot_id) > 38)) {
            throw new \InvalidArgumentException(
                'invalid length for $slot_id when calling AppointmentSlot., must be smaller than or equal to 38.'
            );
        }
        if ((mb_strlen($slot_id) < 38)) {
            throw new \InvalidArgumentException(
                'invalid length for $slot_id when calling AppointmentSlot., must be bigger than or equal to 38.'
            );
        }
        if ((!preg_match("/^[a-zA-Z0-9-]*$/", $slot_id))) {
            throw new \InvalidArgumentException(
                "invalid value for $slot_id when calling AppointmentSlot., must conform to the pattern /^[a-zA-Z0-9-]*$/."
            );
        }

        $this->container['slot_id'] = $slot_id;

        return $this;
    }

    /**
     * Gets slot_time
     *
     * @return \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\AppointmentSlotTime
     */
    public function getSlotTime()
    {
        return $this->container['slot_time'];
    }

    /**
     * Sets slot_time
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\AppointmentSlotTime $slot_time slot_time
     *
     * @return self
     */
    public function setSlotTime($slot_time)
    {
        $this->container['slot_time'] = $slot_time;

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


