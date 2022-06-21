<?php declare(strict_types=1);
/**
 * ShipmentEvent.
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
 * Selling Partner API for Finances.
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace Plenty\AmazonPHP\SellingPartner\Model\Finances;

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
class ShipmentEvent implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'ShipmentEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'amazon_order_id' => 'string',
        'seller_order_id' => 'string',
        'marketplace_name' => 'string',
        'order_charge_list' => '\AmazonPHP\SellingPartner\Model\Finances\ChargeComponent[]',
        'order_charge_adjustment_list' => '\AmazonPHP\SellingPartner\Model\Finances\ChargeComponent[]',
        'shipment_fee_list' => '\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[]',
        'shipment_fee_adjustment_list' => '\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[]',
        'order_fee_list' => '\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[]',
        'order_fee_adjustment_list' => '\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[]',
        'direct_payment_list' => '\AmazonPHP\SellingPartner\Model\Finances\DirectPayment[]',
        'posted_date' => '\DateTime',
        'shipment_item_list' => '\AmazonPHP\SellingPartner\Model\Finances\ShipmentItem[]',
        'shipment_item_adjustment_list' => '\AmazonPHP\SellingPartner\Model\Finances\ShipmentItem[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'amazon_order_id' => null,
        'seller_order_id' => null,
        'marketplace_name' => null,
        'order_charge_list' => null,
        'order_charge_adjustment_list' => null,
        'shipment_fee_list' => null,
        'shipment_fee_adjustment_list' => null,
        'order_fee_list' => null,
        'order_fee_adjustment_list' => null,
        'direct_payment_list' => null,
        'posted_date' => 'date-time',
        'shipment_item_list' => null,
        'shipment_item_adjustment_list' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'amazon_order_id' => 'AmazonOrderId',
        'seller_order_id' => 'SellerOrderId',
        'marketplace_name' => 'MarketplaceName',
        'order_charge_list' => 'OrderChargeList',
        'order_charge_adjustment_list' => 'OrderChargeAdjustmentList',
        'shipment_fee_list' => 'ShipmentFeeList',
        'shipment_fee_adjustment_list' => 'ShipmentFeeAdjustmentList',
        'order_fee_list' => 'OrderFeeList',
        'order_fee_adjustment_list' => 'OrderFeeAdjustmentList',
        'direct_payment_list' => 'DirectPaymentList',
        'posted_date' => 'PostedDate',
        'shipment_item_list' => 'ShipmentItemList',
        'shipment_item_adjustment_list' => 'ShipmentItemAdjustmentList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'amazon_order_id' => 'setAmazonOrderId',
        'seller_order_id' => 'setSellerOrderId',
        'marketplace_name' => 'setMarketplaceName',
        'order_charge_list' => 'setOrderChargeList',
        'order_charge_adjustment_list' => 'setOrderChargeAdjustmentList',
        'shipment_fee_list' => 'setShipmentFeeList',
        'shipment_fee_adjustment_list' => 'setShipmentFeeAdjustmentList',
        'order_fee_list' => 'setOrderFeeList',
        'order_fee_adjustment_list' => 'setOrderFeeAdjustmentList',
        'direct_payment_list' => 'setDirectPaymentList',
        'posted_date' => 'setPostedDate',
        'shipment_item_list' => 'setShipmentItemList',
        'shipment_item_adjustment_list' => 'setShipmentItemAdjustmentList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'amazon_order_id' => 'getAmazonOrderId',
        'seller_order_id' => 'getSellerOrderId',
        'marketplace_name' => 'getMarketplaceName',
        'order_charge_list' => 'getOrderChargeList',
        'order_charge_adjustment_list' => 'getOrderChargeAdjustmentList',
        'shipment_fee_list' => 'getShipmentFeeList',
        'shipment_fee_adjustment_list' => 'getShipmentFeeAdjustmentList',
        'order_fee_list' => 'getOrderFeeList',
        'order_fee_adjustment_list' => 'getOrderFeeAdjustmentList',
        'direct_payment_list' => 'getDirectPaymentList',
        'posted_date' => 'getPostedDate',
        'shipment_item_list' => 'getShipmentItemList',
        'shipment_item_adjustment_list' => 'getShipmentItemAdjustmentList',
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
        $this->container['amazon_order_id'] = $data['amazon_order_id'] ?? null;
        $this->container['seller_order_id'] = $data['seller_order_id'] ?? null;
        $this->container['marketplace_name'] = $data['marketplace_name'] ?? null;
        $this->container['order_charge_list'] = $data['order_charge_list'] ?? null;
        $this->container['order_charge_adjustment_list'] = $data['order_charge_adjustment_list'] ?? null;
        $this->container['shipment_fee_list'] = $data['shipment_fee_list'] ?? null;
        $this->container['shipment_fee_adjustment_list'] = $data['shipment_fee_adjustment_list'] ?? null;
        $this->container['order_fee_list'] = $data['order_fee_list'] ?? null;
        $this->container['order_fee_adjustment_list'] = $data['order_fee_adjustment_list'] ?? null;
        $this->container['direct_payment_list'] = $data['direct_payment_list'] ?? null;
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['shipment_item_list'] = $data['shipment_item_list'] ?? null;
        $this->container['shipment_item_adjustment_list'] = $data['shipment_item_adjustment_list'] ?? null;
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
        return [];
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
     * Gets amazon_order_id.
     */
    public function getAmazonOrderId() : ?string
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id.
     *
     * @param null|string $amazon_order_id an Amazon-defined identifier for an order
     */
    public function setAmazonOrderId(?string $amazon_order_id) : self
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }

    /**
     * Gets seller_order_id.
     */
    public function getSellerOrderId() : ?string
    {
        return $this->container['seller_order_id'];
    }

    /**
     * Sets seller_order_id.
     *
     * @param null|string $seller_order_id a seller-defined identifier for an order
     */
    public function setSellerOrderId(?string $seller_order_id) : self
    {
        $this->container['seller_order_id'] = $seller_order_id;

        return $this;
    }

    /**
     * Gets marketplace_name.
     */
    public function getMarketplaceName() : ?string
    {
        return $this->container['marketplace_name'];
    }

    /**
     * Sets marketplace_name.
     *
     * @param null|string $marketplace_name the name of the marketplace where the event occurred
     */
    public function setMarketplaceName(?string $marketplace_name) : self
    {
        $this->container['marketplace_name'] = $marketplace_name;

        return $this;
    }

    /**
     * Gets order_charge_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\ChargeComponent[]
     */
    public function getOrderChargeList() : ?array
    {
        return $this->container['order_charge_list'];
    }

    /**
     * Sets order_charge_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\ChargeComponent[] $order_charge_list a list of charge information on the seller's account
     */
    public function setOrderChargeList(?array $order_charge_list) : self
    {
        $this->container['order_charge_list'] = $order_charge_list;

        return $this;
    }

    /**
     * Gets order_charge_adjustment_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\ChargeComponent[]
     */
    public function getOrderChargeAdjustmentList() : ?array
    {
        return $this->container['order_charge_adjustment_list'];
    }

    /**
     * Sets order_charge_adjustment_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\ChargeComponent[] $order_charge_adjustment_list a list of charge information on the seller's account
     */
    public function setOrderChargeAdjustmentList(?array $order_charge_adjustment_list) : self
    {
        $this->container['order_charge_adjustment_list'] = $order_charge_adjustment_list;

        return $this;
    }

    /**
     * Gets shipment_fee_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[]
     */
    public function getShipmentFeeList() : ?array
    {
        return $this->container['shipment_fee_list'];
    }

    /**
     * Sets shipment_fee_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[] $shipment_fee_list a list of fee component information
     */
    public function setShipmentFeeList(?array $shipment_fee_list) : self
    {
        $this->container['shipment_fee_list'] = $shipment_fee_list;

        return $this;
    }

    /**
     * Gets shipment_fee_adjustment_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[]
     */
    public function getShipmentFeeAdjustmentList() : ?array
    {
        return $this->container['shipment_fee_adjustment_list'];
    }

    /**
     * Sets shipment_fee_adjustment_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[] $shipment_fee_adjustment_list a list of fee component information
     */
    public function setShipmentFeeAdjustmentList(?array $shipment_fee_adjustment_list) : self
    {
        $this->container['shipment_fee_adjustment_list'] = $shipment_fee_adjustment_list;

        return $this;
    }

    /**
     * Gets order_fee_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[]
     */
    public function getOrderFeeList() : ?array
    {
        return $this->container['order_fee_list'];
    }

    /**
     * Sets order_fee_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[] $order_fee_list a list of fee component information
     */
    public function setOrderFeeList(?array $order_fee_list) : self
    {
        $this->container['order_fee_list'] = $order_fee_list;

        return $this;
    }

    /**
     * Gets order_fee_adjustment_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[]
     */
    public function getOrderFeeAdjustmentList() : ?array
    {
        return $this->container['order_fee_adjustment_list'];
    }

    /**
     * Sets order_fee_adjustment_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[] $order_fee_adjustment_list a list of fee component information
     */
    public function setOrderFeeAdjustmentList(?array $order_fee_adjustment_list) : self
    {
        $this->container['order_fee_adjustment_list'] = $order_fee_adjustment_list;

        return $this;
    }

    /**
     * Gets direct_payment_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\DirectPayment[]
     */
    public function getDirectPaymentList() : ?array
    {
        return $this->container['direct_payment_list'];
    }

    /**
     * Sets direct_payment_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\DirectPayment[] $direct_payment_list a list of direct payment information
     */
    public function setDirectPaymentList(?array $direct_payment_list) : self
    {
        $this->container['direct_payment_list'] = $direct_payment_list;

        return $this;
    }

    /**
     * Gets posted_date.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getPostedDate() : ?\DateTimeInterface
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date.
     *
     * @param \DateTime|\DateTimeImmutable $posted_date posted_date
     */
    public function setPostedDate(\DateTimeInterface $posted_date) : self
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets shipment_item_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\ShipmentItem[]
     */
    public function getShipmentItemList() : ?array
    {
        return $this->container['shipment_item_list'];
    }

    /**
     * Sets shipment_item_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\ShipmentItem[] $shipment_item_list a list of shipment items
     */
    public function setShipmentItemList(?array $shipment_item_list) : self
    {
        $this->container['shipment_item_list'] = $shipment_item_list;

        return $this;
    }

    /**
     * Gets shipment_item_adjustment_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\ShipmentItem[]
     */
    public function getShipmentItemAdjustmentList() : ?array
    {
        return $this->container['shipment_item_adjustment_list'];
    }

    /**
     * Sets shipment_item_adjustment_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\ShipmentItem[] $shipment_item_adjustment_list a list of shipment items
     */
    public function setShipmentItemAdjustmentList(?array $shipment_item_adjustment_list) : self
    {
        $this->container['shipment_item_adjustment_list'] = $shipment_item_adjustment_list;

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
