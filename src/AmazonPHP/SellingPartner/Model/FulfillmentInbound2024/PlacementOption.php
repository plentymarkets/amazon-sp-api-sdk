<?php
/**
 * PlacementOption
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
 * PlacementOption Class Doc Comment
 *
 * @category Class
 * @description Contains information pertaining to the placement of the contents of an inbound plan and the related costs.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PlacementOption implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PlacementOption';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'discounts' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\Incentive[]',
        'expiration' => '\DateTime',
        'fees' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\Incentive[]',
        'placement_option_id' => 'string',
        'shipment_ids' => 'string[]',
        'status' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'discounts' => null,
        'expiration' => 'date-time',
        'fees' => null,
        'placement_option_id' => null,
        'shipment_ids' => null,
        'status' => null
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
        'discounts' => 'discounts',
        'expiration' => 'expiration',
        'fees' => 'fees',
        'placement_option_id' => 'placementOptionId',
        'shipment_ids' => 'shipmentIds',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'discounts' => 'setDiscounts',
        'expiration' => 'setExpiration',
        'fees' => 'setFees',
        'placement_option_id' => 'setPlacementOptionId',
        'shipment_ids' => 'setShipmentIds',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'discounts' => 'getDiscounts',
        'expiration' => 'getExpiration',
        'fees' => 'getFees',
        'placement_option_id' => 'getPlacementOptionId',
        'shipment_ids' => 'getShipmentIds',
        'status' => 'getStatus'
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
        $this->container['discounts'] = $data['discounts'] ?? null;
        $this->container['expiration'] = $data['expiration'] ?? null;
        $this->container['fees'] = $data['fees'] ?? null;
        $this->container['placement_option_id'] = $data['placement_option_id'] ?? null;
        $this->container['shipment_ids'] = $data['shipment_ids'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['discounts'] === null) {
            $invalidProperties[] = "'discounts' can't be null";
        }
        if ($this->container['fees'] === null) {
            $invalidProperties[] = "'fees' can't be null";
        }
        if ($this->container['placement_option_id'] === null) {
            $invalidProperties[] = "'placement_option_id' can't be null";
        }
        if ((mb_strlen($this->container['placement_option_id']) > 38)) {
            $invalidProperties[] = "invalid value for 'placement_option_id', the character length must be smaller than or equal to 38.";
        }

        if ((mb_strlen($this->container['placement_option_id']) < 38)) {
            $invalidProperties[] = "invalid value for 'placement_option_id', the character length must be bigger than or equal to 38.";
        }

        if (!preg_match("/^[a-zA-Z0-9-]*$/", $this->container['placement_option_id'])) {
            $invalidProperties[] = "invalid value for 'placement_option_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.";
        }

        if ($this->container['shipment_ids'] === null) {
            $invalidProperties[] = "'shipment_ids' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ((mb_strlen($this->container['status']) > 1024)) {
            $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 1024.";
        }

        if ((mb_strlen($this->container['status']) < 1)) {
            $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
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
     * Gets discounts
     *
     * @return \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\Incentive[]
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\Incentive[] $discounts Discount for the offered option.
     *
     * @return self
     */
    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets expiration
     *
     * @return \DateTime|null
     */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration
     *
     * @param \DateTime|null $expiration The expiration date of the placement option. This is based in ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
     *
     * @return self
     */
    public function setExpiration($expiration)
    {
        $this->container['expiration'] = $expiration;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\Incentive[]
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\Incentive[] $fees Fee for the offered option.
     *
     * @return self
     */
    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets placement_option_id
     *
     * @return string
     */
    public function getPlacementOptionId()
    {
        return $this->container['placement_option_id'];
    }

    /**
     * Sets placement_option_id
     *
     * @param string $placement_option_id The identifier of a placement option. A placement option represents the shipment splits and destinations of SKUs.
     *
     * @return self
     */
    public function setPlacementOptionId($placement_option_id)
    {
        if ((mb_strlen($placement_option_id) > 38)) {
            throw new \InvalidArgumentException(
                'invalid length for $placement_option_id when calling PlacementOption., must be smaller than or equal to 38.'
            );
        }
        if ((mb_strlen($placement_option_id) < 38)) {
            throw new \InvalidArgumentException(
                'invalid length for $placement_option_id when calling PlacementOption., must be bigger than or equal to 38.'
            );
        }
        if ((!preg_match("/^[a-zA-Z0-9-]*$/", $placement_option_id))) {
            throw new \InvalidArgumentException(
                "invalid value for $placement_option_id when calling PlacementOption., must conform to the pattern /^[a-zA-Z0-9-]*$/."
            );
        }

        $this->container['placement_option_id'] = $placement_option_id;

        return $this;
    }

    /**
     * Gets shipment_ids
     *
     * @return string[]
     */
    public function getShipmentIds()
    {
        return $this->container['shipment_ids'];
    }

    /**
     * Sets shipment_ids
     *
     * @param string[] $shipment_ids Shipment ids.
     *
     * @return self
     */
    public function setShipmentIds($shipment_ids)
    {
        $this->container['shipment_ids'] = $shipment_ids;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of a placement option. Can be: `OFFERED`, `ACCEPTED`, or `EXPIRED`.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if ((mb_strlen($status) > 1024)) {
            throw new \InvalidArgumentException(
                'invalid length for $status when calling PlacementOption., must be smaller than or equal to 1024.'
            );
        }
        if ((mb_strlen($status) < 1)) {
            throw new \InvalidArgumentException(
                'invalid length for $status when calling PlacementOption., must be bigger than or equal to 1.'
            );
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return bool
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


