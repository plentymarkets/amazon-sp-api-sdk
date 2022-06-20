<?php declare(strict_types=1);
/**
 * ShippingService.
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
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
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

namespace Plenty\AmazonPHP\SellingPartner\Model\MerchantFulfillment;

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
class ShippingService implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ShippingService';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'shipping_service_name' => 'string',
        'carrier_name' => 'string',
        'shipping_service_id' => 'string',
        'shipping_service_offer_id' => 'string',
        'ship_date' => '\DateTime',
        'earliest_estimated_delivery_date' => '\DateTime',
        'latest_estimated_delivery_date' => '\DateTime',
        'rate' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\CurrencyAmount',
        'shipping_service_options' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShippingServiceOptions',
        'available_shipping_service_options' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\AvailableShippingServiceOptions',
        'available_label_formats' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\LabelFormat[]',
        'available_format_options_for_label' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\LabelFormatOption[]',
        'requires_additional_seller_inputs' => 'bool',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'shipping_service_name' => null,
        'carrier_name' => null,
        'shipping_service_id' => null,
        'shipping_service_offer_id' => null,
        'ship_date' => 'date-time',
        'earliest_estimated_delivery_date' => 'date-time',
        'latest_estimated_delivery_date' => 'date-time',
        'rate' => null,
        'shipping_service_options' => null,
        'available_shipping_service_options' => null,
        'available_label_formats' => null,
        'available_format_options_for_label' => null,
        'requires_additional_seller_inputs' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipping_service_name' => 'ShippingServiceName',
        'carrier_name' => 'CarrierName',
        'shipping_service_id' => 'ShippingServiceId',
        'shipping_service_offer_id' => 'ShippingServiceOfferId',
        'ship_date' => 'ShipDate',
        'earliest_estimated_delivery_date' => 'EarliestEstimatedDeliveryDate',
        'latest_estimated_delivery_date' => 'LatestEstimatedDeliveryDate',
        'rate' => 'Rate',
        'shipping_service_options' => 'ShippingServiceOptions',
        'available_shipping_service_options' => 'AvailableShippingServiceOptions',
        'available_label_formats' => 'AvailableLabelFormats',
        'available_format_options_for_label' => 'AvailableFormatOptionsForLabel',
        'requires_additional_seller_inputs' => 'RequiresAdditionalSellerInputs',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipping_service_name' => 'setShippingServiceName',
        'carrier_name' => 'setCarrierName',
        'shipping_service_id' => 'setShippingServiceId',
        'shipping_service_offer_id' => 'setShippingServiceOfferId',
        'ship_date' => 'setShipDate',
        'earliest_estimated_delivery_date' => 'setEarliestEstimatedDeliveryDate',
        'latest_estimated_delivery_date' => 'setLatestEstimatedDeliveryDate',
        'rate' => 'setRate',
        'shipping_service_options' => 'setShippingServiceOptions',
        'available_shipping_service_options' => 'setAvailableShippingServiceOptions',
        'available_label_formats' => 'setAvailableLabelFormats',
        'available_format_options_for_label' => 'setAvailableFormatOptionsForLabel',
        'requires_additional_seller_inputs' => 'setRequiresAdditionalSellerInputs',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipping_service_name' => 'getShippingServiceName',
        'carrier_name' => 'getCarrierName',
        'shipping_service_id' => 'getShippingServiceId',
        'shipping_service_offer_id' => 'getShippingServiceOfferId',
        'ship_date' => 'getShipDate',
        'earliest_estimated_delivery_date' => 'getEarliestEstimatedDeliveryDate',
        'latest_estimated_delivery_date' => 'getLatestEstimatedDeliveryDate',
        'rate' => 'getRate',
        'shipping_service_options' => 'getShippingServiceOptions',
        'available_shipping_service_options' => 'getAvailableShippingServiceOptions',
        'available_label_formats' => 'getAvailableLabelFormats',
        'available_format_options_for_label' => 'getAvailableFormatOptionsForLabel',
        'requires_additional_seller_inputs' => 'getRequiresAdditionalSellerInputs',
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
        $this->container['shipping_service_name'] = $data['shipping_service_name'] ?? null;
        $this->container['carrier_name'] = $data['carrier_name'] ?? null;
        $this->container['shipping_service_id'] = $data['shipping_service_id'] ?? null;
        $this->container['shipping_service_offer_id'] = $data['shipping_service_offer_id'] ?? null;
        $this->container['ship_date'] = $data['ship_date'] ?? null;
        $this->container['earliest_estimated_delivery_date'] = $data['earliest_estimated_delivery_date'] ?? null;
        $this->container['latest_estimated_delivery_date'] = $data['latest_estimated_delivery_date'] ?? null;
        $this->container['rate'] = $data['rate'] ?? null;
        $this->container['shipping_service_options'] = $data['shipping_service_options'] ?? null;
        $this->container['available_shipping_service_options'] = $data['available_shipping_service_options'] ?? null;
        $this->container['available_label_formats'] = $data['available_label_formats'] ?? null;
        $this->container['available_format_options_for_label'] = $data['available_format_options_for_label'] ?? null;
        $this->container['requires_additional_seller_inputs'] = $data['requires_additional_seller_inputs'] ?? null;
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

        if ($this->container['shipping_service_name'] === null) {
            $invalidProperties[] = "'shipping_service_name' can't be null";
        }

        if ($this->container['carrier_name'] === null) {
            $invalidProperties[] = "'carrier_name' can't be null";
        }

        if ($this->container['shipping_service_id'] === null) {
            $invalidProperties[] = "'shipping_service_id' can't be null";
        }

        if ($this->container['shipping_service_offer_id'] === null) {
            $invalidProperties[] = "'shipping_service_offer_id' can't be null";
        }

        if ($this->container['ship_date'] === null) {
            $invalidProperties[] = "'ship_date' can't be null";
        }

        if ($this->container['rate'] === null) {
            $invalidProperties[] = "'rate' can't be null";
        }

        if ($this->container['shipping_service_options'] === null) {
            $invalidProperties[] = "'shipping_service_options' can't be null";
        }

        if ($this->container['requires_additional_seller_inputs'] === null) {
            $invalidProperties[] = "'requires_additional_seller_inputs' can't be null";
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
     * Gets shipping_service_name.
     */
    public function getShippingServiceName() : string
    {
        return $this->container['shipping_service_name'];
    }

    /**
     * Sets shipping_service_name.
     *
     * @param string $shipping_service_name A plain text representation of a carrier's shipping service. For example, \"UPS Ground\" or \"FedEx Standard Overnight\".
     */
    public function setShippingServiceName(string $shipping_service_name) : self
    {
        $this->container['shipping_service_name'] = $shipping_service_name;

        return $this;
    }

    /**
     * Gets carrier_name.
     */
    public function getCarrierName() : string
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name.
     *
     * @param string $carrier_name the name of the carrier
     */
    public function setCarrierName(string $carrier_name) : self
    {
        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }

    /**
     * Gets shipping_service_id.
     */
    public function getShippingServiceId() : string
    {
        return $this->container['shipping_service_id'];
    }

    /**
     * Sets shipping_service_id.
     *
     * @param string $shipping_service_id an Amazon-defined shipping service identifier
     */
    public function setShippingServiceId(string $shipping_service_id) : self
    {
        $this->container['shipping_service_id'] = $shipping_service_id;

        return $this;
    }

    /**
     * Gets shipping_service_offer_id.
     */
    public function getShippingServiceOfferId() : string
    {
        return $this->container['shipping_service_offer_id'];
    }

    /**
     * Sets shipping_service_offer_id.
     *
     * @param string $shipping_service_offer_id an Amazon-defined shipping service offer identifier
     */
    public function setShippingServiceOfferId(string $shipping_service_offer_id) : self
    {
        $this->container['shipping_service_offer_id'] = $shipping_service_offer_id;

        return $this;
    }

    /**
     * Gets ship_date.
     *
     * @return \DateTime|\DateTimeImmutable
     */
    public function getShipDate() : \DateTimeInterface
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date.
     *
     * @param \DateTime $ship_date ship_date
     */
    public function setShipDate(\DateTimeInterface $ship_date) : self
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }

    /**
     * Gets earliest_estimated_delivery_date.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getEarliestEstimatedDeliveryDate() : ?\DateTimeInterface
    {
        return $this->container['earliest_estimated_delivery_date'];
    }

    /**
     * Sets earliest_estimated_delivery_date.
     *
     * @param \DateTime|\DateTimeImmutable $earliest_estimated_delivery_date earliest_estimated_delivery_date
     */
    public function setEarliestEstimatedDeliveryDate(\DateTimeInterface $earliest_estimated_delivery_date) : self
    {
        $this->container['earliest_estimated_delivery_date'] = $earliest_estimated_delivery_date;

        return $this;
    }

    /**
     * Gets latest_estimated_delivery_date.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getLatestEstimatedDeliveryDate() : ?\DateTimeInterface
    {
        return $this->container['latest_estimated_delivery_date'];
    }

    /**
     * Sets latest_estimated_delivery_date.
     *
     * @param \DateTime|\DateTimeImmutable $latest_estimated_delivery_date latest_estimated_delivery_date
     */
    public function setLatestEstimatedDeliveryDate(\DateTimeInterface $latest_estimated_delivery_date) : self
    {
        $this->container['latest_estimated_delivery_date'] = $latest_estimated_delivery_date;

        return $this;
    }

    /**
     * Gets rate.
     */
    public function getRate() : CurrencyAmount
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\CurrencyAmount $rate rate
     */
    public function setRate(CurrencyAmount $rate) : self
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets shipping_service_options.
     */
    public function getShippingServiceOptions() : ShippingServiceOptions
    {
        return $this->container['shipping_service_options'];
    }

    /**
     * Sets shipping_service_options.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShippingServiceOptions $shipping_service_options shipping_service_options
     */
    public function setShippingServiceOptions(ShippingServiceOptions $shipping_service_options) : self
    {
        $this->container['shipping_service_options'] = $shipping_service_options;

        return $this;
    }

    /**
     * Gets available_shipping_service_options.
     */
    public function getAvailableShippingServiceOptions() : ?AvailableShippingServiceOptions
    {
        return $this->container['available_shipping_service_options'];
    }

    /**
     * Sets available_shipping_service_options.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\AvailableShippingServiceOptions $available_shipping_service_options available_shipping_service_options
     */
    public function setAvailableShippingServiceOptions(?AvailableShippingServiceOptions $available_shipping_service_options) : self
    {
        $this->container['available_shipping_service_options'] = $available_shipping_service_options;

        return $this;
    }

    /**
     * Gets available_label_formats.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\LabelFormat[]
     */
    public function getAvailableLabelFormats() : ?array
    {
        return $this->container['available_label_formats'];
    }

    /**
     * Sets available_label_formats.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\LabelFormat[] $available_label_formats list of label formats
     */
    public function setAvailableLabelFormats(?array $available_label_formats) : self
    {
        $this->container['available_label_formats'] = $available_label_formats;

        return $this;
    }

    /**
     * Gets available_format_options_for_label.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\LabelFormatOption[]
     */
    public function getAvailableFormatOptionsForLabel() : ?array
    {
        return $this->container['available_format_options_for_label'];
    }

    /**
     * Sets available_format_options_for_label.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\LabelFormatOption[] $available_format_options_for_label the available label formats
     */
    public function setAvailableFormatOptionsForLabel(?array $available_format_options_for_label) : self
    {
        $this->container['available_format_options_for_label'] = $available_format_options_for_label;

        return $this;
    }

    /**
     * Gets requires_additional_seller_inputs.
     */
    public function getRequiresAdditionalSellerInputs() : bool
    {
        return $this->container['requires_additional_seller_inputs'];
    }

    /**
     * Sets requires_additional_seller_inputs.
     *
     * @param bool $requires_additional_seller_inputs when true, additional seller inputs are required
     */
    public function setRequiresAdditionalSellerInputs(bool $requires_additional_seller_inputs) : self
    {
        $this->container['requires_additional_seller_inputs'] = $requires_additional_seller_inputs;

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
