<?php
/**
 * InboundPlan
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
 * InboundPlan Class Doc Comment
 *
 * @category Class
 * @description Inbound plan containing details of the inbound workflow.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InboundPlan implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'InboundPlan';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'created_at' => '\DateTime',
        'inbound_plan_id' => 'string',
        'last_updated_at' => '\DateTime',
        'marketplace_ids' => 'string[]',
        'name' => 'string',
        'packing_options' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\PackingOptionSummary[]',
        'placement_options' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\PlacementOptionSummary[]',
        'shipments' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\ShipmentSummary[]',
        'source_address' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\Address',
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
        'created_at' => 'date-time',
        'inbound_plan_id' => null,
        'last_updated_at' => 'date-time',
        'marketplace_ids' => null,
        'name' => null,
        'packing_options' => null,
        'placement_options' => null,
        'shipments' => null,
        'source_address' => null,
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
        'created_at' => 'createdAt',
        'inbound_plan_id' => 'inboundPlanId',
        'last_updated_at' => 'lastUpdatedAt',
        'marketplace_ids' => 'marketplaceIds',
        'name' => 'name',
        'packing_options' => 'packingOptions',
        'placement_options' => 'placementOptions',
        'shipments' => 'shipments',
        'source_address' => 'sourceAddress',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_at' => 'setCreatedAt',
        'inbound_plan_id' => 'setInboundPlanId',
        'last_updated_at' => 'setLastUpdatedAt',
        'marketplace_ids' => 'setMarketplaceIds',
        'name' => 'setName',
        'packing_options' => 'setPackingOptions',
        'placement_options' => 'setPlacementOptions',
        'shipments' => 'setShipments',
        'source_address' => 'setSourceAddress',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_at' => 'getCreatedAt',
        'inbound_plan_id' => 'getInboundPlanId',
        'last_updated_at' => 'getLastUpdatedAt',
        'marketplace_ids' => 'getMarketplaceIds',
        'name' => 'getName',
        'packing_options' => 'getPackingOptions',
        'placement_options' => 'getPlacementOptions',
        'shipments' => 'getShipments',
        'source_address' => 'getSourceAddress',
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
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['inbound_plan_id'] = $data['inbound_plan_id'] ?? null;
        $this->container['last_updated_at'] = $data['last_updated_at'] ?? null;
        $this->container['marketplace_ids'] = $data['marketplace_ids'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['packing_options'] = $data['packing_options'] ?? null;
        $this->container['placement_options'] = $data['placement_options'] ?? null;
        $this->container['shipments'] = $data['shipments'] ?? null;
        $this->container['source_address'] = $data['source_address'] ?? null;
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

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['inbound_plan_id'] === null) {
            $invalidProperties[] = "'inbound_plan_id' can't be null";
        }
        if ((mb_strlen($this->container['inbound_plan_id']) > 38)) {
            $invalidProperties[] = "invalid value for 'inbound_plan_id', the character length must be smaller than or equal to 38.";
        }

        if ((mb_strlen($this->container['inbound_plan_id']) < 38)) {
            $invalidProperties[] = "invalid value for 'inbound_plan_id', the character length must be bigger than or equal to 38.";
        }

        if (!preg_match("/^[a-zA-Z0-9-]*$/", $this->container['inbound_plan_id'])) {
            $invalidProperties[] = "invalid value for 'inbound_plan_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.";
        }

        if ($this->container['last_updated_at'] === null) {
            $invalidProperties[] = "'last_updated_at' can't be null";
        }
        if ($this->container['marketplace_ids'] === null) {
            $invalidProperties[] = "'marketplace_ids' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['source_address'] === null) {
            $invalidProperties[] = "'source_address' can't be null";
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
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at The ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets inbound_plan_id
     *
     * @return string
     */
    public function getInboundPlanId()
    {
        return $this->container['inbound_plan_id'];
    }

    /**
     * Sets inbound_plan_id
     *
     * @param string $inbound_plan_id Identifier of an inbound plan.
     *
     * @return self
     */
    public function setInboundPlanId($inbound_plan_id)
    {
        if ((mb_strlen($inbound_plan_id) > 38)) {
            throw new \InvalidArgumentException(
                'invalid length for $inbound_plan_id when calling InboundPlan., must be smaller than or equal to 38.'
            );
        }
        if ((mb_strlen($inbound_plan_id) < 38)) {
            throw new \InvalidArgumentException(
                'invalid length for $inbound_plan_id when calling InboundPlan., must be bigger than or equal to 38.'
            );
        }
        if ((!preg_match("/^[a-zA-Z0-9-]*$/", $inbound_plan_id))) {
            throw new \InvalidArgumentException(
                "invalid value for $inbound_plan_id when calling InboundPlan., must conform to the pattern /^[a-zA-Z0-9-]*$/."
            );
        }

        $this->container['inbound_plan_id'] = $inbound_plan_id;

        return $this;
    }

    /**
     * Gets last_updated_at
     *
     * @return \DateTime
     */
    public function getLastUpdatedAt()
    {
        return $this->container['last_updated_at'];
    }

    /**
     * Sets last_updated_at
     *
     * @param \DateTime $last_updated_at The ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
     *
     * @return self
     */
    public function setLastUpdatedAt($last_updated_at)
    {
        $this->container['last_updated_at'] = $last_updated_at;

        return $this;
    }

    /**
     * Gets marketplace_ids
     *
     * @return string[]
     */
    public function getMarketplaceIds()
    {
        return $this->container['marketplace_ids'];
    }

    /**
     * Sets marketplace_ids
     *
     * @param string[] $marketplace_ids Marketplace IDs.
     *
     * @return self
     */
    public function setMarketplaceIds($marketplace_ids)
    {
        $this->container['marketplace_ids'] = $marketplace_ids;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Human-readable name of the inbound plan.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets packing_options
     *
     * @return  PackingOptionSummary[]|null
     */
    public function getPackingOptions()
    {
        return $this->container['packing_options'];
    }

    /**
     * Sets packing_options
     *
     * @param PackingOptionSummary[]|null $packing_options Packing options for the inbound plan. This property will be populated when it has been generated via the corresponding operation. If there is a chosen placement option, only packing options for that placement option will be returned. If there are confirmed shipments, only packing options for those shipments will be returned. Query the packing option for more details.
     *
     * @return self
     */
    public function setPackingOptions($packing_options)
    {
        $this->container['packing_options'] = $packing_options;

        return $this;
    }

    /**
     * Gets placement_options
     *
     * @return  PlacementOptionSummary[]|null
     */
    public function getPlacementOptions()
    {
        return $this->container['placement_options'];
    }

    /**
     * Sets placement_options
     *
     * @param PlacementOptionSummary[]|null $placement_options Placement options for the inbound plan. This property will be populated when it has been generated via the corresponding operation. If there is a chosen placement option, that will be the only returned option. Query the placement option for more details.
     *
     * @return self
     */
    public function setPlacementOptions($placement_options)
    {
        $this->container['placement_options'] = $placement_options;

        return $this;
    }

    /**
     * Gets shipments
     *
     * @return  ShipmentSummary[]|null
     */
    public function getShipments()
    {
        return $this->container['shipments'];
    }

    /**
     * Sets shipments
     *
     * @param ShipmentSummary[]|null $shipments Shipment IDs for the inbound plan. This property will be populated when it has been generated via the corresponding operation. If there is a chosen placement option, only shipments for that option will be returned. If there are confirmed shipments, only those shipments will be returned. Query the shipment for more details.
     *
     * @return self
     */
    public function setShipments($shipments)
    {
        $this->container['shipments'] = $shipments;

        return $this;
    }

    /**
     * Gets source_address
     *
     * @return  Address
     */
    public function getSourceAddress()
    {
        return $this->container['source_address'];
    }

    /**
     * Sets source_address
     *
     * @param Address $source_address source_address
     *
     * @return self
     */
    public function setSourceAddress($source_address)
    {
        $this->container['source_address'] = $source_address;

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
     * @param string $status Current status of the inbound plan. Can be: `ACTIVE`, `VOIDED`, `SHIPPED`, 'ERRORED'.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if ((mb_strlen($status) > 1024)) {
            throw new \InvalidArgumentException(
                'invalid length for $status when calling InboundPlan., must be smaller than or equal to 1024.'
            );
        }
        if ((mb_strlen($status) < 1)) {
            throw new \InvalidArgumentException(
                'invalid length for $status when calling InboundPlan., must be bigger than or equal to 1.'
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


