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
 * Selling Partner API for Retail Procurement Orders.
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Plenty\AmazonPHP\SellingPartner\Model\VendorOrders;

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

    public const PURCHASE_ORDER_TYPE_REGULAR_ORDER = 'RegularOrder';

    public const PURCHASE_ORDER_TYPE_CONSIGNED_ORDER = 'ConsignedOrder';

    public const PURCHASE_ORDER_TYPE_NEW_PRODUCT_INTRODUCTION = 'NewProductIntroduction';

    public const PURCHASE_ORDER_TYPE_RUSH_ORDER = 'RushOrder';

    public const PAYMENT_METHOD_INVOICE = 'Invoice';

    public const PAYMENT_METHOD_CONSIGNMENT = 'Consignment';

    public const PAYMENT_METHOD_CREDIT_CARD = 'CreditCard';

    public const PAYMENT_METHOD_PREPAID = 'Prepaid';

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
        'purchase_order_date' => '\DateTime',
        'purchase_order_changed_date' => '\DateTime',
        'purchase_order_state_changed_date' => '\DateTime',
        'purchase_order_type' => 'string',
        'import_details' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorOrders\ImportDetails',
        'deal_code' => 'string',
        'payment_method' => 'string',
        'buying_party' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorOrders\PartyIdentification',
        'selling_party' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorOrders\PartyIdentification',
        'ship_to_party' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorOrders\PartyIdentification',
        'bill_to_party' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorOrders\PartyIdentification',
        'ship_window' => 'string',
        'delivery_window' => 'string',
        'items' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorOrders\OrderItem[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'purchase_order_date' => 'date-time',
        'purchase_order_changed_date' => 'date-time',
        'purchase_order_state_changed_date' => 'date-time',
        'purchase_order_type' => null,
        'import_details' => null,
        'deal_code' => null,
        'payment_method' => null,
        'buying_party' => null,
        'selling_party' => null,
        'ship_to_party' => null,
        'bill_to_party' => null,
        'ship_window' => null,
        'delivery_window' => null,
        'items' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'purchase_order_date' => 'purchaseOrderDate',
        'purchase_order_changed_date' => 'purchaseOrderChangedDate',
        'purchase_order_state_changed_date' => 'purchaseOrderStateChangedDate',
        'purchase_order_type' => 'purchaseOrderType',
        'import_details' => 'importDetails',
        'deal_code' => 'dealCode',
        'payment_method' => 'paymentMethod',
        'buying_party' => 'buyingParty',
        'selling_party' => 'sellingParty',
        'ship_to_party' => 'shipToParty',
        'bill_to_party' => 'billToParty',
        'ship_window' => 'shipWindow',
        'delivery_window' => 'deliveryWindow',
        'items' => 'items',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'purchase_order_date' => 'setPurchaseOrderDate',
        'purchase_order_changed_date' => 'setPurchaseOrderChangedDate',
        'purchase_order_state_changed_date' => 'setPurchaseOrderStateChangedDate',
        'purchase_order_type' => 'setPurchaseOrderType',
        'import_details' => 'setImportDetails',
        'deal_code' => 'setDealCode',
        'payment_method' => 'setPaymentMethod',
        'buying_party' => 'setBuyingParty',
        'selling_party' => 'setSellingParty',
        'ship_to_party' => 'setShipToParty',
        'bill_to_party' => 'setBillToParty',
        'ship_window' => 'setShipWindow',
        'delivery_window' => 'setDeliveryWindow',
        'items' => 'setItems',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'purchase_order_date' => 'getPurchaseOrderDate',
        'purchase_order_changed_date' => 'getPurchaseOrderChangedDate',
        'purchase_order_state_changed_date' => 'getPurchaseOrderStateChangedDate',
        'purchase_order_type' => 'getPurchaseOrderType',
        'import_details' => 'getImportDetails',
        'deal_code' => 'getDealCode',
        'payment_method' => 'getPaymentMethod',
        'buying_party' => 'getBuyingParty',
        'selling_party' => 'getSellingParty',
        'ship_to_party' => 'getShipToParty',
        'bill_to_party' => 'getBillToParty',
        'ship_window' => 'getShipWindow',
        'delivery_window' => 'getDeliveryWindow',
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
        $this->container['purchase_order_date'] = $data['purchase_order_date'] ?? null;
        $this->container['purchase_order_changed_date'] = $data['purchase_order_changed_date'] ?? null;
        $this->container['purchase_order_state_changed_date'] = $data['purchase_order_state_changed_date'] ?? null;
        $this->container['purchase_order_type'] = $data['purchase_order_type'] ?? null;
        $this->container['import_details'] = $data['import_details'] ?? null;
        $this->container['deal_code'] = $data['deal_code'] ?? null;
        $this->container['payment_method'] = $data['payment_method'] ?? null;
        $this->container['buying_party'] = $data['buying_party'] ?? null;
        $this->container['selling_party'] = $data['selling_party'] ?? null;
        $this->container['ship_to_party'] = $data['ship_to_party'] ?? null;
        $this->container['bill_to_party'] = $data['bill_to_party'] ?? null;
        $this->container['ship_window'] = $data['ship_window'] ?? null;
        $this->container['delivery_window'] = $data['delivery_window'] ?? null;
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
    public function getPurchaseOrderTypeAllowableValues() : array
    {
        return [
            self::PURCHASE_ORDER_TYPE_REGULAR_ORDER,
            self::PURCHASE_ORDER_TYPE_CONSIGNED_ORDER,
            self::PURCHASE_ORDER_TYPE_NEW_PRODUCT_INTRODUCTION,
            self::PURCHASE_ORDER_TYPE_RUSH_ORDER,
        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getPaymentMethodAllowableValues() : array
    {
        return [
            self::PAYMENT_METHOD_INVOICE,
            self::PAYMENT_METHOD_CONSIGNMENT,
            self::PAYMENT_METHOD_CREDIT_CARD,
            self::PAYMENT_METHOD_PREPAID,
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

        if ($this->container['purchase_order_date'] === null) {
            $invalidProperties[] = "'purchase_order_date' can't be null";
        }

        if ($this->container['purchase_order_state_changed_date'] === null) {
            $invalidProperties[] = "'purchase_order_state_changed_date' can't be null";
        }
        $allowedValues = $this->getPurchaseOrderTypeAllowableValues();

        if (null !== $this->container['purchase_order_type'] && !\in_array($this->container['purchase_order_type'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'purchase_order_type', must be one of '%s'",
                $this->container['purchase_order_type'],
                \implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPaymentMethodAllowableValues();

        if (null !== $this->container['payment_method'] && !\in_array($this->container['payment_method'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'payment_method', must be one of '%s'",
                $this->container['payment_method'],
                \implode("', '", $allowedValues)
            );
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
     * Gets purchase_order_date.
     *
     * @return \DateTime|\DateTimeImmutable
     */
    public function getPurchaseOrderDate() : \DateTimeInterface
    {
        return $this->container['purchase_order_date'];
    }

    /**
     * Sets purchase_order_date.
     *
     * @param \DateTime $purchase_order_date The date the purchase order was placed. Must be in ISO-8601 date/time format.
     */
    public function setPurchaseOrderDate(\DateTimeInterface $purchase_order_date) : self
    {
        $this->container['purchase_order_date'] = $purchase_order_date;

        return $this;
    }

    /**
     * Gets purchase_order_changed_date.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getPurchaseOrderChangedDate() : ?\DateTimeInterface
    {
        return $this->container['purchase_order_changed_date'];
    }

    /**
     * Sets purchase_order_changed_date.
     *
     * @param \DateTime|\DateTimeImmutable $purchase_order_changed_date The date when purchase order was last changed by Amazon after the order was placed. This date will be greater than 'purchaseOrderDate'. This means the PO data was changed on that date and vendors are required to fulfill the  updated PO. The PO changes can be related to Item Quantity, Ship to Location, Ship Window etc. This field will not be present in orders that have not changed after creation. Must be in ISO-8601 date/time format.
     */
    public function setPurchaseOrderChangedDate(\DateTimeInterface $purchase_order_changed_date) : self
    {
        $this->container['purchase_order_changed_date'] = $purchase_order_changed_date;

        return $this;
    }

    /**
     * Gets purchase_order_state_changed_date.
     *
     * @return \DateTime|\DateTimeImmutable
     */
    public function getPurchaseOrderStateChangedDate() : \DateTimeInterface
    {
        return $this->container['purchase_order_state_changed_date'];
    }

    /**
     * Sets purchase_order_state_changed_date.
     *
     * @param \DateTime $purchase_order_state_changed_date The date when current purchase order state was changed. Current purchase order state is available in the field 'purchaseOrderState'. Must be in ISO-8601 date/time format.
     */
    public function setPurchaseOrderStateChangedDate(\DateTimeInterface $purchase_order_state_changed_date) : self
    {
        $this->container['purchase_order_state_changed_date'] = $purchase_order_state_changed_date;

        return $this;
    }

    /**
     * Gets purchase_order_type.
     */
    public function getPurchaseOrderType() : ?string
    {
        return $this->container['purchase_order_type'];
    }

    /**
     * Sets purchase_order_type.
     *
     * @param null|string $purchase_order_type type of purchase order
     */
    public function setPurchaseOrderType(?string $purchase_order_type) : self
    {
        $allowedValues = $this->getPurchaseOrderTypeAllowableValues();

        if (null !== $purchase_order_type && !\in_array($purchase_order_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'purchase_order_type', must be one of '%s'",
                    $purchase_order_type,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['purchase_order_type'] = $purchase_order_type;

        return $this;
    }

    /**
     * Gets import_details.
     */
    public function getImportDetails() : ?ImportDetails
    {
        return $this->container['import_details'];
    }

    /**
     * Sets import_details.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\VendorOrders\ImportDetails $import_details import_details
     */
    public function setImportDetails(?ImportDetails $import_details) : self
    {
        $this->container['import_details'] = $import_details;

        return $this;
    }

    /**
     * Gets deal_code.
     */
    public function getDealCode() : ?string
    {
        return $this->container['deal_code'];
    }

    /**
     * Sets deal_code.
     *
     * @param null|string $deal_code If requested by the recipient, this field will contain a promotional/deal number. The discount code line is optional. It is used to obtain a price discount on items on the order.
     */
    public function setDealCode(?string $deal_code) : self
    {
        $this->container['deal_code'] = $deal_code;

        return $this;
    }

    /**
     * Gets payment_method.
     */
    public function getPaymentMethod() : ?string
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method.
     *
     * @param null|string $payment_method payment method used
     */
    public function setPaymentMethod(?string $payment_method) : self
    {
        $allowedValues = $this->getPaymentMethodAllowableValues();

        if (null !== $payment_method && !\in_array($payment_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'payment_method', must be one of '%s'",
                    $payment_method,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets buying_party.
     */
    public function getBuyingParty() : ?PartyIdentification
    {
        return $this->container['buying_party'];
    }

    /**
     * Sets buying_party.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\VendorOrders\PartyIdentification $buying_party buying_party
     */
    public function setBuyingParty(?PartyIdentification $buying_party) : self
    {
        $this->container['buying_party'] = $buying_party;

        return $this;
    }

    /**
     * Gets selling_party.
     */
    public function getSellingParty() : ?PartyIdentification
    {
        return $this->container['selling_party'];
    }

    /**
     * Sets selling_party.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\VendorOrders\PartyIdentification $selling_party selling_party
     */
    public function setSellingParty(?PartyIdentification $selling_party) : self
    {
        $this->container['selling_party'] = $selling_party;

        return $this;
    }

    /**
     * Gets ship_to_party.
     */
    public function getShipToParty() : ?PartyIdentification
    {
        return $this->container['ship_to_party'];
    }

    /**
     * Sets ship_to_party.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\VendorOrders\PartyIdentification $ship_to_party ship_to_party
     */
    public function setShipToParty(?PartyIdentification $ship_to_party) : self
    {
        $this->container['ship_to_party'] = $ship_to_party;

        return $this;
    }

    /**
     * Gets bill_to_party.
     */
    public function getBillToParty() : ?PartyIdentification
    {
        return $this->container['bill_to_party'];
    }

    /**
     * Sets bill_to_party.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\VendorOrders\PartyIdentification $bill_to_party bill_to_party
     */
    public function setBillToParty(?PartyIdentification $bill_to_party) : self
    {
        $this->container['bill_to_party'] = $bill_to_party;

        return $this;
    }

    /**
     * Gets ship_window.
     */
    public function getShipWindow() : ?string
    {
        return $this->container['ship_window'];
    }

    /**
     * Sets ship_window.
     *
     * @param null|string $ship_window Defines a date time interval according to ISO8601. Interval is separated by double hyphen (--).
     */
    public function setShipWindow(?string $ship_window) : self
    {
        $this->container['ship_window'] = $ship_window;

        return $this;
    }

    /**
     * Gets delivery_window.
     */
    public function getDeliveryWindow() : ?string
    {
        return $this->container['delivery_window'];
    }

    /**
     * Sets delivery_window.
     *
     * @param null|string $delivery_window Defines a date time interval according to ISO8601. Interval is separated by double hyphen (--).
     */
    public function setDeliveryWindow(?string $delivery_window) : self
    {
        $this->container['delivery_window'] = $delivery_window;

        return $this;
    }

    /**
     * Gets items.
     *
     * @return \Plenty\AmazonPHP\SellingPartner\Model\VendorOrders\OrderItem[]
     */
    public function getItems() : array
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\VendorOrders\OrderItem[] $items a list of items in this purchase order
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
