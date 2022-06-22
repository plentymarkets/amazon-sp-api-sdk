<?php declare(strict_types=1);
/**
 * OrderDetails.
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
class OrderDetails implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const ORDER_STATUS__NEW = 'NEW';

    public const ORDER_STATUS_SHIPPED = 'SHIPPED';

    public const ORDER_STATUS_ACCEPTED = 'ACCEPTED';

    public const ORDER_STATUS_CANCELLED = 'CANCELLED';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'OrderDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'customer_order_number' => 'string',
        'order_date' => '\DateTime',
        'order_status' => 'string',
        'shipment_details' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\ShipmentDetails',
        'tax_total' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\TaxItemDetails',
        'selling_party' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\PartyIdentification',
        'ship_from_party' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\PartyIdentification',
        'ship_to_party' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\Address',
        'bill_to_party' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\PartyIdentification',
        'items' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\OrderItem[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'customer_order_number' => null,
        'order_date' => 'date-time',
        'order_status' => null,
        'shipment_details' => null,
        'tax_total' => null,
        'selling_party' => null,
        'ship_from_party' => null,
        'ship_to_party' => null,
        'bill_to_party' => null,
        'items' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'customer_order_number' => 'customerOrderNumber',
        'order_date' => 'orderDate',
        'order_status' => 'orderStatus',
        'shipment_details' => 'shipmentDetails',
        'tax_total' => 'taxTotal',
        'selling_party' => 'sellingParty',
        'ship_from_party' => 'shipFromParty',
        'ship_to_party' => 'shipToParty',
        'bill_to_party' => 'billToParty',
        'items' => 'items',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'customer_order_number' => 'setCustomerOrderNumber',
        'order_date' => 'setOrderDate',
        'order_status' => 'setOrderStatus',
        'shipment_details' => 'setShipmentDetails',
        'tax_total' => 'setTaxTotal',
        'selling_party' => 'setSellingParty',
        'ship_from_party' => 'setShipFromParty',
        'ship_to_party' => 'setShipToParty',
        'bill_to_party' => 'setBillToParty',
        'items' => 'setItems',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'customer_order_number' => 'getCustomerOrderNumber',
        'order_date' => 'getOrderDate',
        'order_status' => 'getOrderStatus',
        'shipment_details' => 'getShipmentDetails',
        'tax_total' => 'getTaxTotal',
        'selling_party' => 'getSellingParty',
        'ship_from_party' => 'getShipFromParty',
        'ship_to_party' => 'getShipToParty',
        'bill_to_party' => 'getBillToParty',
        'items' => 'getItems',
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
        $this->container['customer_order_number'] = $data['customer_order_number'] ?? null;
        $this->container['order_date'] = $data['order_date'] ?? null;
        $this->container['order_status'] = $data['order_status'] ?? null;
        $this->container['shipment_details'] = $data['shipment_details'] ?? null;
        $this->container['tax_total'] = $data['tax_total'] ?? null;
        $this->container['selling_party'] = $data['selling_party'] ?? null;
        $this->container['ship_from_party'] = $data['ship_from_party'] ?? null;
        $this->container['ship_to_party'] = $data['ship_to_party'] ?? null;
        $this->container['bill_to_party'] = $data['bill_to_party'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getOrderStatusAllowableValues() : array
    {
        return [
            self::ORDER_STATUS__NEW,
            self::ORDER_STATUS_SHIPPED,
            self::ORDER_STATUS_ACCEPTED,
            self::ORDER_STATUS_CANCELLED,
        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['customer_order_number'] === null) {
            $invalidProperties[] = "'customer_order_number' can't be null";
        }

        if ($this->container['order_date'] === null) {
            $invalidProperties[] = "'order_date' can't be null";
        }
        $allowedValues = $this->getOrderStatusAllowableValues();

        if (null !== $this->container['order_status'] && !\in_array($this->container['order_status'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'order_status', must be one of '%s'",
                $this->container['order_status'],
                \implode("', '", $allowedValues)
            );
        }

        if ($this->container['shipment_details'] === null) {
            $invalidProperties[] = "'shipment_details' can't be null";
        }

        if ($this->container['selling_party'] === null) {
            $invalidProperties[] = "'selling_party' can't be null";
        }

        if ($this->container['ship_from_party'] === null) {
            $invalidProperties[] = "'ship_from_party' can't be null";
        }

        if ($this->container['ship_to_party'] === null) {
            $invalidProperties[] = "'ship_to_party' can't be null";
        }

        if ($this->container['bill_to_party'] === null) {
            $invalidProperties[] = "'bill_to_party' can't be null";
        }

        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets customer_order_number.
     */
    public function getCustomerOrderNumber() : string
    {
        return $this->container['customer_order_number'];
    }

    /**
     * Sets customer_order_number.
     *
     * @param string $customer_order_number the customer order number
     */
    public function setCustomerOrderNumber(string $customer_order_number) : self
    {
        $this->container['customer_order_number'] = $customer_order_number;

        return $this;
    }

    /**
     * Gets order_date.
     *
     * @return \DateTime|\DateTimeImmutable
     */
    public function getOrderDate() : \DateTimeInterface
    {
        return $this->container['order_date'];
    }

    /**
     * Sets order_date.
     *
     * @param \DateTime $order_date The date the order was placed. This  field is expected to be in ISO-8601 date/time format, for example:2018-07-16T23:00:00Z/ 2018-07-16T23:00:00-05:00 /2018-07-16T23:00:00-08:00. If no time zone is specified, UTC should be assumed.
     */
    public function setOrderDate(\DateTimeInterface $order_date) : self
    {
        $this->container['order_date'] = $order_date;

        return $this;
    }

    /**
     * Gets order_status.
     */
    public function getOrderStatus() : ?string
    {
        return $this->container['order_status'];
    }

    /**
     * Sets order_status.
     *
     * @param null|string $order_status current status of the order
     */
    public function setOrderStatus(?string $order_status) : self
    {
        $allowedValues = $this->getOrderStatusAllowableValues();

        if (null !== $order_status && !\in_array($order_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'order_status', must be one of '%s'",
                    $order_status,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['order_status'] = $order_status;

        return $this;
    }

    /**
     * Gets shipment_details.
     */
    public function getShipmentDetails() : ShipmentDetails
    {
        return $this->container['shipment_details'];
    }

    /**
     * Sets shipment_details.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\ShipmentDetails $shipment_details shipment_details
     */
    public function setShipmentDetails(ShipmentDetails $shipment_details) : self
    {
        $this->container['shipment_details'] = $shipment_details;

        return $this;
    }

    /**
     * Gets tax_total.
     */
    public function getTaxTotal() : ?TaxItemDetails
    {
        return $this->container['tax_total'];
    }

    /**
     * Sets tax_total.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\TaxItemDetails $tax_total tax_total
     */
    public function setTaxTotal(?TaxItemDetails $tax_total) : self
    {
        $this->container['tax_total'] = $tax_total;

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
     * Gets ship_to_party.
     */
    public function getShipToParty() : Address
    {
        return $this->container['ship_to_party'];
    }

    /**
     * Sets ship_to_party.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\Address $ship_to_party ship_to_party
     */
    public function setShipToParty(Address $ship_to_party) : self
    {
        $this->container['ship_to_party'] = $ship_to_party;

        return $this;
    }

    /**
     * Gets bill_to_party.
     */
    public function getBillToParty() : PartyIdentification
    {
        return $this->container['bill_to_party'];
    }

    /**
     * Sets bill_to_party.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\PartyIdentification $bill_to_party bill_to_party
     */
    public function setBillToParty(PartyIdentification $bill_to_party) : self
    {
        $this->container['bill_to_party'] = $bill_to_party;

        return $this;
    }

    /**
     * Gets items.
     *
     * @return \Plenty\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\OrderItem[]
     */
    public function getItems() : array
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\OrderItem[] $items a list of items in this purchase order
     */
    public function setItems(array $items) : self
    {
        $this->container['items'] = $items;

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
