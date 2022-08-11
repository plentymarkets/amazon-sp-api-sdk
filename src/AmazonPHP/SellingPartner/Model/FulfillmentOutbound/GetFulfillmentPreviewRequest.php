<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

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
class GetFulfillmentPreviewRequest implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'GetFulfillmentPreviewRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'marketplace_id' => 'string',
        'address' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Address',
        'items' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\GetFulfillmentPreviewItem[]',
        'shipping_speed_categories' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ShippingSpeedCategory[]',
        'include_cod_fulfillment_preview' => 'bool',
        'include_delivery_windows' => 'bool',
        'feature_constraints' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FeatureSettings[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'marketplace_id' => null,
        'address' => null,
        'items' => null,
        'shipping_speed_categories' => null,
        'include_cod_fulfillment_preview' => null,
        'include_delivery_windows' => null,
        'feature_constraints' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'marketplace_id' => 'marketplaceId',
        'address' => 'address',
        'items' => 'items',
        'shipping_speed_categories' => 'shippingSpeedCategories',
        'include_cod_fulfillment_preview' => 'includeCODFulfillmentPreview',
        'include_delivery_windows' => 'includeDeliveryWindows',
        'feature_constraints' => 'featureConstraints',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'address' => 'setAddress',
        'items' => 'setItems',
        'shipping_speed_categories' => 'setShippingSpeedCategories',
        'include_cod_fulfillment_preview' => 'setIncludeCodFulfillmentPreview',
        'include_delivery_windows' => 'setIncludeDeliveryWindows',
        'feature_constraints' => 'setFeatureConstraints',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'address' => 'getAddress',
        'items' => 'getItems',
        'shipping_speed_categories' => 'getShippingSpeedCategories',
        'include_cod_fulfillment_preview' => 'getIncludeCodFulfillmentPreview',
        'include_delivery_windows' => 'getIncludeDeliveryWindows',
        'feature_constraints' => 'getFeatureConstraints',
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
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['shipping_speed_categories'] = $data['shipping_speed_categories'] ?? null;
        $this->container['include_cod_fulfillment_preview'] = $data['include_cod_fulfillment_preview'] ?? null;
        $this->container['include_delivery_windows'] = $data['include_delivery_windows'] ?? null;
        $this->container['feature_constraints'] = $data['feature_constraints'] ?? null;
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
        if ($this->container['address'] === null) {
            throw new AssertionException("'address' can't be null");
        }

        $this->container['address']->validate();

        if ($this->container['items'] === null) {
            throw new AssertionException("'items' can't be null");
        }
    }

    /**
     * Gets marketplace_id.
     *
     * @return null|string
     */
    public function getMarketplaceId() : ?string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param null|string $marketplace_id the marketplace the fulfillment order is placed against
     *
     * @return self
     */
    public function setMarketplaceId(?string $marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets address.
     */
    public function getAddress() : Address
    {
        return $this->container['address'];
    }

    /**
     * Sets address.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Address $address address
     *
     * @return self
     */
    public function setAddress(Address $address) : self
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets items.
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\GetFulfillmentPreviewItem[]
     */
    public function getItems() : array
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\GetFulfillmentPreviewItem[] $items an array of fulfillment preview item information
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets shipping_speed_categories.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ShippingSpeedCategory[]
     */
    public function getShippingSpeedCategories() : ?array
    {
        return $this->container['shipping_speed_categories'];
    }

    /**
     * Sets shipping_speed_categories.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ShippingSpeedCategory[] $shipping_speed_categories shipping_speed_categories
     *
     * @return self
     */
    public function setShippingSpeedCategories(?array $shipping_speed_categories) : self
    {
        $this->container['shipping_speed_categories'] = $shipping_speed_categories;

        return $this;
    }

    /**
     * Gets include_cod_fulfillment_preview.
     *
     * @return null|bool
     */
    public function getIncludeCodFulfillmentPreview() : ?bool
    {
        return $this->container['include_cod_fulfillment_preview'];
    }

    /**
     * Sets include_cod_fulfillment_preview.
     *
     * @param null|bool $include_cod_fulfillment_preview Specifies whether to return fulfillment order previews that are for COD (Cash On Delivery).  Possible values:  * true - Returns all fulfillment order previews (both for COD and not for COD). * false - Returns only fulfillment order previews that are not for COD.
     *
     * @return self
     */
    public function setIncludeCodFulfillmentPreview(?bool $include_cod_fulfillment_preview) : self
    {
        $this->container['include_cod_fulfillment_preview'] = $include_cod_fulfillment_preview;

        return $this;
    }

    /**
     * Gets include_delivery_windows.
     *
     * @return null|bool
     */
    public function getIncludeDeliveryWindows() : ?bool
    {
        return $this->container['include_delivery_windows'];
    }

    /**
     * Sets include_delivery_windows.
     *
     * @param null|bool $include_delivery_windows Specifies whether to return the ScheduledDeliveryInfo response object, which contains the available delivery windows for a Scheduled Delivery. The ScheduledDeliveryInfo response object can only be returned for fulfillment order previews with ShippingSpeedCategories = ScheduledDelivery.
     *
     * @return self
     */
    public function setIncludeDeliveryWindows(?bool $include_delivery_windows) : self
    {
        $this->container['include_delivery_windows'] = $include_delivery_windows;

        return $this;
    }

    /**
     * Gets feature_constraints.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FeatureSettings[]
     */
    public function getFeatureConstraints() : ?array
    {
        return $this->container['feature_constraints'];
    }

    /**
     * Sets feature_constraints.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FeatureSettings[] $feature_constraints a list of features and their fulfillment policies to apply to the order
     *
     * @return self
     */
    public function setFeatureConstraints(?array $feature_constraints) : self
    {
        $this->container['feature_constraints'] = $feature_constraints;

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
