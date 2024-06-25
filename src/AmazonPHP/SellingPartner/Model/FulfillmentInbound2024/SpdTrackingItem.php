<?php
/**
 * SpdTrackingItem
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
 * SpdTrackingItem Class Doc Comment
 *
 * @category Class
 * @description Contains information used to track and identify a Small Parcel Delivery (SPD) item.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SpdTrackingItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SpdTrackingItem';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'box_id' => 'string',
        'tracking_id' => 'string',
        'tracking_number_validation_status' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'box_id' => null,
        'tracking_id' => null,
        'tracking_number_validation_status' => null
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
        'box_id' => 'boxId',
        'tracking_id' => 'trackingId',
        'tracking_number_validation_status' => 'trackingNumberValidationStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'box_id' => 'setBoxId',
        'tracking_id' => 'setTrackingId',
        'tracking_number_validation_status' => 'setTrackingNumberValidationStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'box_id' => 'getBoxId',
        'tracking_id' => 'getTrackingId',
        'tracking_number_validation_status' => 'getTrackingNumberValidationStatus'
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
        $this->container['box_id'] = $data['box_id'] ?? null;
        $this->container['tracking_id'] = $data['tracking_id'] ?? null;
        $this->container['tracking_number_validation_status'] = $data['tracking_number_validation_status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['box_id']) && (mb_strlen($this->container['box_id']) > 1024)) {
            $invalidProperties[] = "invalid value for 'box_id', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['box_id']) && (mb_strlen($this->container['box_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'box_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['tracking_id']) && (mb_strlen($this->container['tracking_id']) > 1024)) {
            $invalidProperties[] = "invalid value for 'tracking_id', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['tracking_id']) && (mb_strlen($this->container['tracking_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'tracking_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['tracking_number_validation_status']) && (mb_strlen(
                    $this->container['tracking_number_validation_status']
                ) > 1024)) {
            $invalidProperties[] = "invalid value for 'tracking_number_validation_status', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['tracking_number_validation_status']) && (mb_strlen(
                    $this->container['tracking_number_validation_status']
                ) < 1)) {
            $invalidProperties[] = "invalid value for 'tracking_number_validation_status', the character length must be bigger than or equal to 1.";
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
     * Gets box_id
     *
     * @return string|null
     */
    public function getBoxId()
    {
        return $this->container['box_id'];
    }

    /**
     * Sets box_id
     *
     * @param string|null $box_id The ID provided by Amazon that identifies a given box. This ID is comprised of the external shipment ID (which is generated after transportation has been confirmed) and the index of the box.
     *
     * @return self
     */
    public function setBoxId($box_id)
    {
        if (!is_null($box_id) && (mb_strlen($box_id) > 1024)) {
            throw new \InvalidArgumentException(
                'invalid length for $box_id when calling SpdTrackingItem., must be smaller than or equal to 1024.'
            );
        }
        if (!is_null($box_id) && (mb_strlen($box_id) < 1)) {
            throw new \InvalidArgumentException(
                'invalid length for $box_id when calling SpdTrackingItem., must be bigger than or equal to 1.'
            );
        }

        $this->container['box_id'] = $box_id;

        return $this;
    }

    /**
     * Gets tracking_id
     *
     * @return string|null
     */
    public function getTrackingId()
    {
        return $this->container['tracking_id'];
    }

    /**
     * Sets tracking_id
     *
     * @param string|null $tracking_id The tracking ID associated with each box in a non-Amazon partnered Small Parcel Delivery (SPD) shipment.
     *
     * @return self
     */
    public function setTrackingId($tracking_id)
    {
        if (!is_null($tracking_id) && (mb_strlen($tracking_id) > 1024)) {
            throw new \InvalidArgumentException(
                'invalid length for $tracking_id when calling SpdTrackingItem., must be smaller than or equal to 1024.'
            );
        }
        if (!is_null($tracking_id) && (mb_strlen($tracking_id) < 1)) {
            throw new \InvalidArgumentException(
                'invalid length for $tracking_id when calling SpdTrackingItem., must be bigger than or equal to 1.'
            );
        }

        $this->container['tracking_id'] = $tracking_id;

        return $this;
    }

    /**
     * Gets tracking_number_validation_status
     *
     * @return string|null
     */
    public function getTrackingNumberValidationStatus()
    {
        return $this->container['tracking_number_validation_status'];
    }

    /**
     * Sets tracking_number_validation_status
     *
     * @param string|null $tracking_number_validation_status Whether or not Amazon has validated the tracking number. If more than 24 hours have passed and the status is not yet 'VALIDATED', please verify the number and update if necessary. Can be: `VALIDATED`, `NOT_VALIDATED`.
     *
     * @return self
     */
    public function setTrackingNumberValidationStatus($tracking_number_validation_status)
    {
        if (!is_null($tracking_number_validation_status) && (mb_strlen($tracking_number_validation_status) > 1024)) {
            throw new \InvalidArgumentException(
                'invalid length for $tracking_number_validation_status when calling SpdTrackingItem., must be smaller than or equal to 1024.'
            );
        }
        if (!is_null($tracking_number_validation_status) && (mb_strlen($tracking_number_validation_status) < 1)) {
            throw new \InvalidArgumentException(
                'invalid length for $tracking_number_validation_status when calling SpdTrackingItem., must be bigger than or equal to 1.'
            );
        }

        $this->container['tracking_number_validation_status'] = $tracking_number_validation_status;

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

