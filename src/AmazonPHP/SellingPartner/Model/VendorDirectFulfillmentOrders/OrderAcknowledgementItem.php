<?php declare(strict_types=1);
/**
 * OrderAcknowledgementItem.
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
 * Selling Partner API for Direct Fulfillment Orders.
 *
 * The Selling Partner API for Direct Fulfillment Orders provides programmatic access to a direct fulfillment vendor's order data.
 *
 * The version of the OpenAPI document: 2021-12-28
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Plenty\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders;

use Plenty\AmazonPHP\SellingPartner\ModelInterface;
use Plenty\AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderAcknowledgementItem implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'OrderAcknowledgementItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'purchase_order_number' => 'string',
        'vendor_order_number' => 'string',
        'acknowledgement_date' => '\DateTime',
        'acknowledgement_status' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\AcknowledgementStatus',
        'selling_party' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\PartyIdentification',
        'ship_from_party' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\PartyIdentification',
        'item_acknowledgements' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\OrderItemAcknowledgement[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'purchase_order_number' => null,
        'vendor_order_number' => null,
        'acknowledgement_date' => 'date-time',
        'acknowledgement_status' => null,
        'selling_party' => null,
        'ship_from_party' => null,
        'item_acknowledgements' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'purchase_order_number' => 'purchaseOrderNumber',
        'vendor_order_number' => 'vendorOrderNumber',
        'acknowledgement_date' => 'acknowledgementDate',
        'acknowledgement_status' => 'acknowledgementStatus',
        'selling_party' => 'sellingParty',
        'ship_from_party' => 'shipFromParty',
        'item_acknowledgements' => 'itemAcknowledgements',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'vendor_order_number' => 'setVendorOrderNumber',
        'acknowledgement_date' => 'setAcknowledgementDate',
        'acknowledgement_status' => 'setAcknowledgementStatus',
        'selling_party' => 'setSellingParty',
        'ship_from_party' => 'setShipFromParty',
        'item_acknowledgements' => 'setItemAcknowledgements',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'vendor_order_number' => 'getVendorOrderNumber',
        'acknowledgement_date' => 'getAcknowledgementDate',
        'acknowledgement_status' => 'getAcknowledgementStatus',
        'selling_party' => 'getSellingParty',
        'ship_from_party' => 'getShipFromParty',
        'item_acknowledgements' => 'getItemAcknowledgements',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected /** [COMPAT] array */ $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['purchase_order_number'] = $data['purchase_order_number'] ?? null;
        $this->container['vendor_order_number'] = $data['vendor_order_number'] ?? null;
        $this->container['acknowledgement_date'] = $data['acknowledgement_date'] ?? null;
        $this->container['acknowledgement_status'] = $data['acknowledgement_status'] ?? null;
        $this->container['selling_party'] = $data['selling_party'] ?? null;
        $this->container['ship_from_party'] = $data['ship_from_party'] ?? null;
        $this->container['item_acknowledgements'] = $data['item_acknowledgements'] ?? null;
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

        if ($this->container['purchase_order_number'] === null) {
            $invalidProperties[] = "'purchase_order_number' can't be null";
        }

        if ($this->container['vendor_order_number'] === null) {
            $invalidProperties[] = "'vendor_order_number' can't be null";
        }

        if ($this->container['acknowledgement_date'] === null) {
            $invalidProperties[] = "'acknowledgement_date' can't be null";
        }

        if ($this->container['acknowledgement_status'] === null) {
            $invalidProperties[] = "'acknowledgement_status' can't be null";
        }

        if ($this->container['selling_party'] === null) {
            $invalidProperties[] = "'selling_party' can't be null";
        }

        if ($this->container['ship_from_party'] === null) {
            $invalidProperties[] = "'ship_from_party' can't be null";
        }

        if ($this->container['item_acknowledgements'] === null) {
            $invalidProperties[] = "'item_acknowledgements' can't be null";
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
     * Gets purchase_order_number.
     */
    public function getPurchaseOrderNumber() : string
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number.
     *
     * @param string $purchase_order_number The purchase order number for this order. Formatting Notes: alpha-numeric code.
     */
    public function setPurchaseOrderNumber(string $purchase_order_number) : self
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets vendor_order_number.
     */
    public function getVendorOrderNumber() : string
    {
        return $this->container['vendor_order_number'];
    }

    /**
     * Sets vendor_order_number.
     *
     * @param string $vendor_order_number the vendor's order number for this order
     */
    public function setVendorOrderNumber(string $vendor_order_number) : self
    {
        $this->container['vendor_order_number'] = $vendor_order_number;

        return $this;
    }

    /**
     * Gets acknowledgement_date.
     *
     * @return \DateTime|\DateTimeImmutable
     */
    public function getAcknowledgementDate() : \DateTimeInterface
    {
        return $this->container['acknowledgement_date'];
    }

    /**
     * Sets acknowledgement_date.
     *
     * @param \DateTime $acknowledgement_date The date and time when the order is acknowledged, in ISO-8601 date/time format. For example: 2018-07-16T23:00:00Z / 2018-07-16T23:00:00-05:00 / 2018-07-16T23:00:00-08:00.
     */
    public function setAcknowledgementDate(\DateTimeInterface $acknowledgement_date) : self
    {
        $this->container['acknowledgement_date'] = $acknowledgement_date;

        return $this;
    }

    /**
     * Gets acknowledgement_status.
     */
    public function getAcknowledgementStatus() : AcknowledgementStatus
    {
        return $this->container['acknowledgement_status'];
    }

    /**
     * Sets acknowledgement_status.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\AcknowledgementStatus $acknowledgement_status acknowledgement_status
     */
    public function setAcknowledgementStatus(AcknowledgementStatus $acknowledgement_status) : self
    {
        $this->container['acknowledgement_status'] = $acknowledgement_status;

        return $this;
    }

    /**
     * Gets selling_party.
     */
    public function getSellingParty() : PartyIdentification
    {
        return $this->container['selling_party'];
    }

    /**
     * Sets selling_party.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\PartyIdentification $selling_party selling_party
     */
    public function setSellingParty(PartyIdentification $selling_party) : self
    {
        $this->container['selling_party'] = $selling_party;

        return $this;
    }

    /**
     * Gets ship_from_party.
     */
    public function getShipFromParty() : PartyIdentification
    {
        return $this->container['ship_from_party'];
    }

    /**
     * Sets ship_from_party.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\PartyIdentification $ship_from_party ship_from_party
     */
    public function setShipFromParty(PartyIdentification $ship_from_party) : self
    {
        $this->container['ship_from_party'] = $ship_from_party;

        return $this;
    }

    /**
     * Gets item_acknowledgements.
     *
     * @return \Plenty\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\OrderItemAcknowledgement[]
     */
    public function getItemAcknowledgements() : array
    {
        return $this->container['item_acknowledgements'];
    }

    /**
     * Sets item_acknowledgements.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\OrderItemAcknowledgement[] $item_acknowledgements item details including acknowledged quantity
     */
    public function setItemAcknowledgements(array $item_acknowledgements) : self
    {
        $this->container['item_acknowledgements'] = $item_acknowledgements;

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
