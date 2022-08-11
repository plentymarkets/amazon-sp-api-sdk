<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments;

use AmazonPHP\SellingPartner\Exception\AssertionException;
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
class InvoiceItem implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'InvoiceItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'item_sequence_number' => 'string',
        'buyer_product_identifier' => 'string',
        'vendor_product_identifier' => 'string',
        'invoiced_quantity' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\ItemQuantity',
        'net_cost' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\Money',
        'purchase_order_number' => 'string',
        'vendor_order_number' => 'string',
        'hsn_code' => 'string',
        'tax_details' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\TaxDetail[]',
        'charge_details' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\ChargeDetails[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'item_sequence_number' => null,
        'buyer_product_identifier' => null,
        'vendor_product_identifier' => null,
        'invoiced_quantity' => null,
        'net_cost' => null,
        'purchase_order_number' => null,
        'vendor_order_number' => null,
        'hsn_code' => null,
        'tax_details' => null,
        'charge_details' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'item_sequence_number' => 'itemSequenceNumber',
        'buyer_product_identifier' => 'buyerProductIdentifier',
        'vendor_product_identifier' => 'vendorProductIdentifier',
        'invoiced_quantity' => 'invoicedQuantity',
        'net_cost' => 'netCost',
        'purchase_order_number' => 'purchaseOrderNumber',
        'vendor_order_number' => 'vendorOrderNumber',
        'hsn_code' => 'hsnCode',
        'tax_details' => 'taxDetails',
        'charge_details' => 'chargeDetails',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'item_sequence_number' => 'setItemSequenceNumber',
        'buyer_product_identifier' => 'setBuyerProductIdentifier',
        'vendor_product_identifier' => 'setVendorProductIdentifier',
        'invoiced_quantity' => 'setInvoicedQuantity',
        'net_cost' => 'setNetCost',
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'vendor_order_number' => 'setVendorOrderNumber',
        'hsn_code' => 'setHsnCode',
        'tax_details' => 'setTaxDetails',
        'charge_details' => 'setChargeDetails',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'item_sequence_number' => 'getItemSequenceNumber',
        'buyer_product_identifier' => 'getBuyerProductIdentifier',
        'vendor_product_identifier' => 'getVendorProductIdentifier',
        'invoiced_quantity' => 'getInvoicedQuantity',
        'net_cost' => 'getNetCost',
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'vendor_order_number' => 'getVendorOrderNumber',
        'hsn_code' => 'getHsnCode',
        'tax_details' => 'getTaxDetails',
        'charge_details' => 'getChargeDetails',
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
     * @param null|mixed[] $data Associated array of property values
     *                           initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['item_sequence_number'] = $data['item_sequence_number'] ?? null;
        $this->container['buyer_product_identifier'] = $data['buyer_product_identifier'] ?? null;
        $this->container['vendor_product_identifier'] = $data['vendor_product_identifier'] ?? null;
        $this->container['invoiced_quantity'] = $data['invoiced_quantity'] ?? null;
        $this->container['net_cost'] = $data['net_cost'] ?? null;
        $this->container['purchase_order_number'] = $data['purchase_order_number'] ?? null;
        $this->container['vendor_order_number'] = $data['vendor_order_number'] ?? null;
        $this->container['hsn_code'] = $data['hsn_code'] ?? null;
        $this->container['tax_details'] = $data['tax_details'] ?? null;
        $this->container['charge_details'] = $data['charge_details'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
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
     *
     * @return string
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['item_sequence_number'] === null) {
            throw new AssertionException("'item_sequence_number' can't be null");
        }

        if ($this->container['invoiced_quantity'] === null) {
            throw new AssertionException("'invoiced_quantity' can't be null");
        }

        $this->container['invoiced_quantity']->validate();

        if ($this->container['net_cost'] === null) {
            throw new AssertionException("'net_cost' can't be null");
        }

        $this->container['net_cost']->validate();

        if ($this->container['purchase_order_number'] === null) {
            throw new AssertionException("'purchase_order_number' can't be null");
        }
    }

    /**
     * Gets item_sequence_number.
     */
    public function getItemSequenceNumber() : string
    {
        return $this->container['item_sequence_number'];
    }

    /**
     * Sets item_sequence_number.
     *
     * @param string $item_sequence_number Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on.
     *
     * @return self
     */
    public function setItemSequenceNumber(string $item_sequence_number) : self
    {
        $this->container['item_sequence_number'] = $item_sequence_number;

        return $this;
    }

    /**
     * Gets buyer_product_identifier.
     *
     * @return null|string
     */
    public function getBuyerProductIdentifier() : ?string
    {
        return $this->container['buyer_product_identifier'];
    }

    /**
     * Sets buyer_product_identifier.
     *
     * @param null|string $buyer_product_identifier buyer's standard identification number (ASIN) of an item
     *
     * @return self
     */
    public function setBuyerProductIdentifier(?string $buyer_product_identifier) : self
    {
        $this->container['buyer_product_identifier'] = $buyer_product_identifier;

        return $this;
    }

    /**
     * Gets vendor_product_identifier.
     *
     * @return null|string
     */
    public function getVendorProductIdentifier() : ?string
    {
        return $this->container['vendor_product_identifier'];
    }

    /**
     * Sets vendor_product_identifier.
     *
     * @param null|string $vendor_product_identifier the vendor selected product identification of the item
     *
     * @return self
     */
    public function setVendorProductIdentifier(?string $vendor_product_identifier) : self
    {
        $this->container['vendor_product_identifier'] = $vendor_product_identifier;

        return $this;
    }

    /**
     * Gets invoiced_quantity.
     */
    public function getInvoicedQuantity() : ItemQuantity
    {
        return $this->container['invoiced_quantity'];
    }

    /**
     * Sets invoiced_quantity.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\ItemQuantity $invoiced_quantity invoiced_quantity
     *
     * @return self
     */
    public function setInvoicedQuantity(ItemQuantity $invoiced_quantity) : self
    {
        $this->container['invoiced_quantity'] = $invoiced_quantity;

        return $this;
    }

    /**
     * Gets net_cost.
     */
    public function getNetCost() : Money
    {
        return $this->container['net_cost'];
    }

    /**
     * Sets net_cost.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\Money $net_cost net_cost
     *
     * @return self
     */
    public function setNetCost(Money $net_cost) : self
    {
        $this->container['net_cost'] = $net_cost;

        return $this;
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
     * @param string $purchase_order_number The purchase order number for this order. Formatting Notes: 8-character alpha-numeric code.
     *
     * @return self
     */
    public function setPurchaseOrderNumber(string $purchase_order_number) : self
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets vendor_order_number.
     *
     * @return null|string
     */
    public function getVendorOrderNumber() : ?string
    {
        return $this->container['vendor_order_number'];
    }

    /**
     * Sets vendor_order_number.
     *
     * @param null|string $vendor_order_number the vendor's order number for this order
     *
     * @return self
     */
    public function setVendorOrderNumber(?string $vendor_order_number) : self
    {
        $this->container['vendor_order_number'] = $vendor_order_number;

        return $this;
    }

    /**
     * Gets hsn_code.
     *
     * @return null|string
     */
    public function getHsnCode() : ?string
    {
        return $this->container['hsn_code'];
    }

    /**
     * Sets hsn_code.
     *
     * @param null|string $hsn_code HSN tax code. The HSN number cannot contain alphabets.
     *
     * @return self
     */
    public function setHsnCode(?string $hsn_code) : self
    {
        $this->container['hsn_code'] = $hsn_code;

        return $this;
    }

    /**
     * Gets tax_details.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\TaxDetail[]
     */
    public function getTaxDetails() : ?array
    {
        return $this->container['tax_details'];
    }

    /**
     * Sets tax_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\TaxDetail[] $tax_details individual tax details per line item
     *
     * @return self
     */
    public function setTaxDetails(?array $tax_details) : self
    {
        $this->container['tax_details'] = $tax_details;

        return $this;
    }

    /**
     * Gets charge_details.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\ChargeDetails[]
     */
    public function getChargeDetails() : ?array
    {
        return $this->container['charge_details'];
    }

    /**
     * Sets charge_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\ChargeDetails[] $charge_details individual charge details per line item
     *
     * @return self
     */
    public function setChargeDetails(?array $charge_details) : self
    {
        $this->container['charge_details'] = $charge_details;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @return bool
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
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
     *
     * @return string
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
