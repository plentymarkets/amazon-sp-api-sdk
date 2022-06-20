<?php declare(strict_types=1);
/**
 * InboundShipmentInfo.
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
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound;

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
class InboundShipmentInfo implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'InboundShipmentInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'shipment_id' => 'string',
        'shipment_name' => 'string',
        'ship_from_address' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Address',
        'destination_fulfillment_center_id' => 'string',
        'shipment_status' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentStatus',
        'label_prep_type' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\LabelPrepType',
        'are_cases_required' => 'bool',
        'confirmed_need_by_date' => '\DateTime',
        'box_contents_source' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\BoxContentsSource',
        'estimated_box_contents_fee' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\BoxContentsFeeDetails',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'shipment_id' => null,
        'shipment_name' => null,
        'ship_from_address' => null,
        'destination_fulfillment_center_id' => null,
        'shipment_status' => null,
        'label_prep_type' => null,
        'are_cases_required' => null,
        'confirmed_need_by_date' => 'date',
        'box_contents_source' => null,
        'estimated_box_contents_fee' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipment_id' => 'ShipmentId',
        'shipment_name' => 'ShipmentName',
        'ship_from_address' => 'ShipFromAddress',
        'destination_fulfillment_center_id' => 'DestinationFulfillmentCenterId',
        'shipment_status' => 'ShipmentStatus',
        'label_prep_type' => 'LabelPrepType',
        'are_cases_required' => 'AreCasesRequired',
        'confirmed_need_by_date' => 'ConfirmedNeedByDate',
        'box_contents_source' => 'BoxContentsSource',
        'estimated_box_contents_fee' => 'EstimatedBoxContentsFee',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipment_id' => 'setShipmentId',
        'shipment_name' => 'setShipmentName',
        'ship_from_address' => 'setShipFromAddress',
        'destination_fulfillment_center_id' => 'setDestinationFulfillmentCenterId',
        'shipment_status' => 'setShipmentStatus',
        'label_prep_type' => 'setLabelPrepType',
        'are_cases_required' => 'setAreCasesRequired',
        'confirmed_need_by_date' => 'setConfirmedNeedByDate',
        'box_contents_source' => 'setBoxContentsSource',
        'estimated_box_contents_fee' => 'setEstimatedBoxContentsFee',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipment_id' => 'getShipmentId',
        'shipment_name' => 'getShipmentName',
        'ship_from_address' => 'getShipFromAddress',
        'destination_fulfillment_center_id' => 'getDestinationFulfillmentCenterId',
        'shipment_status' => 'getShipmentStatus',
        'label_prep_type' => 'getLabelPrepType',
        'are_cases_required' => 'getAreCasesRequired',
        'confirmed_need_by_date' => 'getConfirmedNeedByDate',
        'box_contents_source' => 'getBoxContentsSource',
        'estimated_box_contents_fee' => 'getEstimatedBoxContentsFee',
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
        $this->container['shipment_id'] = $data['shipment_id'] ?? null;
        $this->container['shipment_name'] = $data['shipment_name'] ?? null;
        $this->container['ship_from_address'] = $data['ship_from_address'] ?? null;
        $this->container['destination_fulfillment_center_id'] = $data['destination_fulfillment_center_id'] ?? null;
        $this->container['shipment_status'] = $data['shipment_status'] ?? null;
        $this->container['label_prep_type'] = $data['label_prep_type'] ?? null;
        $this->container['are_cases_required'] = $data['are_cases_required'] ?? null;
        $this->container['confirmed_need_by_date'] = $data['confirmed_need_by_date'] ?? null;
        $this->container['box_contents_source'] = $data['box_contents_source'] ?? null;
        $this->container['estimated_box_contents_fee'] = $data['estimated_box_contents_fee'] ?? null;
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

        if ($this->container['ship_from_address'] === null) {
            $invalidProperties[] = "'ship_from_address' can't be null";
        }

        if ($this->container['are_cases_required'] === null) {
            $invalidProperties[] = "'are_cases_required' can't be null";
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
     * Gets shipment_id.
     */
    public function getShipmentId() : ?string
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id.
     *
     * @param null|string $shipment_id the shipment identifier submitted in the request
     */
    public function setShipmentId(?string $shipment_id) : self
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets shipment_name.
     */
    public function getShipmentName() : ?string
    {
        return $this->container['shipment_name'];
    }

    /**
     * Sets shipment_name.
     *
     * @param null|string $shipment_name the name for the inbound shipment
     */
    public function setShipmentName(?string $shipment_name) : self
    {
        $this->container['shipment_name'] = $shipment_name;

        return $this;
    }

    /**
     * Gets ship_from_address.
     */
    public function getShipFromAddress() : Address
    {
        return $this->container['ship_from_address'];
    }

    /**
     * Sets ship_from_address.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Address $ship_from_address ship_from_address
     */
    public function setShipFromAddress(Address $ship_from_address) : self
    {
        $this->container['ship_from_address'] = $ship_from_address;

        return $this;
    }

    /**
     * Gets destination_fulfillment_center_id.
     */
    public function getDestinationFulfillmentCenterId() : ?string
    {
        return $this->container['destination_fulfillment_center_id'];
    }

    /**
     * Sets destination_fulfillment_center_id.
     *
     * @param null|string $destination_fulfillment_center_id an Amazon fulfillment center identifier created by Amazon
     */
    public function setDestinationFulfillmentCenterId(?string $destination_fulfillment_center_id) : self
    {
        $this->container['destination_fulfillment_center_id'] = $destination_fulfillment_center_id;

        return $this;
    }

    /**
     * Gets shipment_status.
     */
    public function getShipmentStatus() : ?ShipmentStatus
    {
        return $this->container['shipment_status'];
    }

    /**
     * Sets shipment_status.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentStatus $shipment_status shipment_status
     */
    public function setShipmentStatus(?ShipmentStatus $shipment_status) : self
    {
        $this->container['shipment_status'] = $shipment_status;

        return $this;
    }

    /**
     * Gets label_prep_type.
     */
    public function getLabelPrepType() : ?LabelPrepType
    {
        return $this->container['label_prep_type'];
    }

    /**
     * Sets label_prep_type.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\LabelPrepType $label_prep_type label_prep_type
     */
    public function setLabelPrepType(?LabelPrepType $label_prep_type) : self
    {
        $this->container['label_prep_type'] = $label_prep_type;

        return $this;
    }

    /**
     * Gets are_cases_required.
     */
    public function getAreCasesRequired() : bool
    {
        return $this->container['are_cases_required'];
    }

    /**
     * Sets are_cases_required.
     *
     * @param bool $are_cases_required Indicates whether or not an inbound shipment contains case-packed boxes. When AreCasesRequired = true for an inbound shipment, all items in the inbound shipment must be case packed.
     */
    public function setAreCasesRequired(bool $are_cases_required) : self
    {
        $this->container['are_cases_required'] = $are_cases_required;

        return $this;
    }

    /**
     * Gets confirmed_need_by_date.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getConfirmedNeedByDate() : ?\DateTimeInterface
    {
        return $this->container['confirmed_need_by_date'];
    }

    /**
     * Sets confirmed_need_by_date.
     *
     * @param \DateTime|\DateTimeImmutable $confirmed_need_by_date confirmed_need_by_date
     */
    public function setConfirmedNeedByDate(\DateTimeInterface $confirmed_need_by_date) : self
    {
        $this->container['confirmed_need_by_date'] = $confirmed_need_by_date;

        return $this;
    }

    /**
     * Gets box_contents_source.
     */
    public function getBoxContentsSource() : ?BoxContentsSource
    {
        return $this->container['box_contents_source'];
    }

    /**
     * Sets box_contents_source.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\BoxContentsSource $box_contents_source box_contents_source
     */
    public function setBoxContentsSource(?BoxContentsSource $box_contents_source) : self
    {
        $this->container['box_contents_source'] = $box_contents_source;

        return $this;
    }

    /**
     * Gets estimated_box_contents_fee.
     */
    public function getEstimatedBoxContentsFee() : ?BoxContentsFeeDetails
    {
        return $this->container['estimated_box_contents_fee'];
    }

    /**
     * Sets estimated_box_contents_fee.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\BoxContentsFeeDetails $estimated_box_contents_fee estimated_box_contents_fee
     */
    public function setEstimatedBoxContentsFee(?BoxContentsFeeDetails $estimated_box_contents_fee) : self
    {
        $this->container['estimated_box_contents_fee'] = $estimated_box_contents_fee;

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
