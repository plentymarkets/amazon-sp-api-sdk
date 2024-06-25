<?php
/**
 * PackageGroupingInput
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
 * PackageGroupingInput Class Doc Comment
 *
 * @category Class
 * @description Packing information for the inbound plan.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PackageGroupingInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PackageGroupingInput';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'boxes' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\BoxInput[]',
        'packing_group_id' => 'string',
        'shipment_id' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'boxes' => null,
        'packing_group_id' => null,
        'shipment_id' => null
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
        'boxes' => 'boxes',
        'packing_group_id' => 'packingGroupId',
        'shipment_id' => 'shipmentId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'boxes' => 'setBoxes',
        'packing_group_id' => 'setPackingGroupId',
        'shipment_id' => 'setShipmentId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'boxes' => 'getBoxes',
        'packing_group_id' => 'getPackingGroupId',
        'shipment_id' => 'getShipmentId'
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
        $this->container['boxes'] = $data['boxes'] ?? null;
        $this->container['packing_group_id'] = $data['packing_group_id'] ?? null;
        $this->container['shipment_id'] = $data['shipment_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['boxes'] === null) {
            $invalidProperties[] = "'boxes' can't be null";
        }
        if ((count($this->container['boxes']) > 5000)) {
            $invalidProperties[] = "invalid value for 'boxes', number of items must be less than or equal to 5000.";
        }

        if ((count($this->container['boxes']) < 1)) {
            $invalidProperties[] = "invalid value for 'boxes', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['packing_group_id']) && (mb_strlen($this->container['packing_group_id']) > 38)) {
            $invalidProperties[] = "invalid value for 'packing_group_id', the character length must be smaller than or equal to 38.";
        }

        if (!is_null($this->container['packing_group_id']) && (mb_strlen($this->container['packing_group_id']) < 38)) {
            $invalidProperties[] = "invalid value for 'packing_group_id', the character length must be bigger than or equal to 38.";
        }

        if (!is_null($this->container['packing_group_id']) && !preg_match(
                "/^[a-zA-Z0-9-]*$/",
                $this->container['packing_group_id']
            )) {
            $invalidProperties[] = "invalid value for 'packing_group_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.";
        }

        if (!is_null($this->container['shipment_id']) && (mb_strlen($this->container['shipment_id']) > 38)) {
            $invalidProperties[] = "invalid value for 'shipment_id', the character length must be smaller than or equal to 38.";
        }

        if (!is_null($this->container['shipment_id']) && (mb_strlen($this->container['shipment_id']) < 38)) {
            $invalidProperties[] = "invalid value for 'shipment_id', the character length must be bigger than or equal to 38.";
        }

        if (!is_null($this->container['shipment_id']) && !preg_match(
                "/^[a-zA-Z0-9-]*$/",
                $this->container['shipment_id']
            )) {
            $invalidProperties[] = "invalid value for 'shipment_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.";
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
     * Gets boxes
     *
     * @return \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\BoxInput[]
     */
    public function getBoxes()
    {
        return $this->container['boxes'];
    }

    /**
     * Sets boxes
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\BoxInput[] $boxes Box level information being provided.
     *
     * @return self
     */
    public function setBoxes($boxes)
    {
        if ((count($boxes) > 5000)) {
            throw new \InvalidArgumentException(
                'invalid value for $boxes when calling PackageGroupingInput., number of items must be less than or equal to 5000.'
            );
        }
        if ((count($boxes) < 1)) {
            throw new \InvalidArgumentException(
                'invalid length for $boxes when calling PackageGroupingInput., number of items must be greater than or equal to 1.'
            );
        }
        $this->container['boxes'] = $boxes;

        return $this;
    }

    /**
     * Gets packing_group_id
     *
     * @return string|null
     */
    public function getPackingGroupId()
    {
        return $this->container['packing_group_id'];
    }

    /**
     * Sets packing_group_id
     *
     * @param string|null $packing_group_id The ID of the `packingGroup` that packages are grouped according to. The `PackingGroupId` can only be provided before placement confirmation, and it must belong to the confirmed `PackingOption`. One of `ShipmentId` or `PackingGroupId` must be provided with every request.
     *
     * @return self
     */
    public function setPackingGroupId($packing_group_id)
    {
        if (!is_null($packing_group_id) && (mb_strlen($packing_group_id) > 38)) {
            throw new \InvalidArgumentException(
                'invalid length for $packing_group_id when calling PackageGroupingInput., must be smaller than or equal to 38.'
            );
        }
        if (!is_null($packing_group_id) && (mb_strlen($packing_group_id) < 38)) {
            throw new \InvalidArgumentException(
                'invalid length for $packing_group_id when calling PackageGroupingInput., must be bigger than or equal to 38.'
            );
        }
        if (!is_null($packing_group_id) && (!preg_match("/^[a-zA-Z0-9-]*$/", $packing_group_id))) {
            throw new \InvalidArgumentException(
                "invalid value for $packing_group_id when calling PackageGroupingInput., must conform to the pattern /^[a-zA-Z0-9-]*$/."
            );
        }

        $this->container['packing_group_id'] = $packing_group_id;

        return $this;
    }

    /**
     * Gets shipment_id
     *
     * @return string|null
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param string|null $shipment_id The ID of the shipment that packages are grouped according to. The `ShipmentId` can only be provided after placement confirmation, and the shipment must belong to the confirmed placement option. One of `ShipmentId` or `PackingGroupId` must be provided with every request.
     *
     * @return self
     */
    public function setShipmentId($shipment_id)
    {
        if (!is_null($shipment_id) && (mb_strlen($shipment_id) > 38)) {
            throw new \InvalidArgumentException(
                'invalid length for $shipment_id when calling PackageGroupingInput., must be smaller than or equal to 38.'
            );
        }
        if (!is_null($shipment_id) && (mb_strlen($shipment_id) < 38)) {
            throw new \InvalidArgumentException(
                'invalid length for $shipment_id when calling PackageGroupingInput., must be bigger than or equal to 38.'
            );
        }
        if (!is_null($shipment_id) && (!preg_match("/^[a-zA-Z0-9-]*$/", $shipment_id))) {
            throw new \InvalidArgumentException(
                "invalid value for $shipment_id when calling PackageGroupingInput., must conform to the pattern /^[a-zA-Z0-9-]*$/."
            );
        }

        $this->container['shipment_id'] = $shipment_id;

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


